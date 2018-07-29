<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_GOLD_PURCHASE = array();
	$tdataPMT_GOLD_PURCHASE[".truncateText"] = true;
	$tdataPMT_GOLD_PURCHASE[".NumberOfChars"] = 80;
	$tdataPMT_GOLD_PURCHASE[".ShortName"] = "PMT_GOLD_PURCHASE";
	$tdataPMT_GOLD_PURCHASE[".OwnerID"] = "";
	$tdataPMT_GOLD_PURCHASE[".OriginalTable"] = "PMT_GOLD_PURCHASE";

//	field labels
$fieldLabelsPMT_GOLD_PURCHASE = array();
$fieldToolTipsPMT_GOLD_PURCHASE = array();
$pageTitlesPMT_GOLD_PURCHASE = array();
$placeHoldersPMT_GOLD_PURCHASE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"] = array();
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"] = array();
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"] = array();
	$pageTitlesPMT_GOLD_PURCHASE["Japanese"] = array();
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["APP_UID"] = "APP_UID";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["APP_UID"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["APP_UID"] = "[1-9]{0.12}";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["APP_NUMBER"] = "APP_NUMBER";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["APP_STATUS"] = "APP_STATUS";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["APP_STATUS"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["ROW"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["ROW"] = "おなまえ";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["A"] = "本人確認書類添付";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["A"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["A"] = "たんとうぶ";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["B"] = "本人確認実施場所";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["B"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["B"] = "みつもりばんごう";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["C"] = "本店 ・ ご自宅";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["C"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["D"] = "顧客番号";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["D"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["E"] = "取引枠";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["E"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["F"] = "領収日";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["F"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["G"] = "お名前";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["G"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["H"] = "住居";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["H"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["I"] = "生 年 月 日";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["I"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["J"] = "都・道 府・県";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["J"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["K"] = "市･区･町 村･郡";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["K"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["L"] = "電話番号";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["L"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["L"] = " concurrent data structures";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["M"] = "検索エンジン";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["M"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["M"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["N"] = "検索媒体";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["N"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["N"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["O"] = "検索キーワード";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["O"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["O"] = "[a-z]+";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["P"] = "振込銀行";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["P"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["P"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["Q"] = "口座名義";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["Q"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["Q"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["R"] = "支店名";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["R"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["R"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["S"] = "振込予定日";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["S"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["S"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["T"] = "本人確認書類";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["T"] = "数値";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["T"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE["Japanese"]["MONTHLY_REPORT"] = "MONTHLY_REPORT";
	$fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE["Japanese"]["MONTHLY_REPORT"] = "説明１";
	if (count($fieldToolTipsPMT_GOLD_PURCHASE["Japanese"]))
		$tdataPMT_GOLD_PURCHASE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_GOLD_PURCHASE["English"] = array();
	$fieldToolTipsPMT_GOLD_PURCHASE["English"] = array();
	$placeHoldersPMT_GOLD_PURCHASE["English"] = array();
	$pageTitlesPMT_GOLD_PURCHASE["English"] = array();
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["APP_UID"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["APP_UID"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["ROW"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["ROW"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["A"] = "A";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["A"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["A"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["B"] = "B";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["B"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["B"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["C"] = "C";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["C"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["C"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["D"] = "D";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["D"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["D"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["E"] = "E";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["E"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["E"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["F"] = "F";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["F"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["F"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["G"] = "G";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["G"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["G"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["H"] = "H";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["H"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["H"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["I"] = "I";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["I"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["I"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["J"] = "J";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["J"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["J"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["K"] = "K";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["K"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["K"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["L"] = "L";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["L"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["L"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["M"] = "M";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["M"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["M"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["N"] = "N";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["N"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["N"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["O"] = "O";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["O"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["O"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["P"] = "P";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["P"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["P"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["Q"] = "Q";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["Q"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["Q"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["R"] = "R";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["R"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["R"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["S"] = "S";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["S"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["S"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["T"] = "T";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["T"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["T"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["TIME"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["TIME"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_GOLD_PURCHASE["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_GOLD_PURCHASE["English"]["MONTHLY_REPORT"] = "";
	if (count($fieldToolTipsPMT_GOLD_PURCHASE["English"]))
		$tdataPMT_GOLD_PURCHASE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_GOLD_PURCHASE[""] = array();
	$fieldToolTipsPMT_GOLD_PURCHASE[""] = array();
	$placeHoldersPMT_GOLD_PURCHASE[""] = array();
	$pageTitlesPMT_GOLD_PURCHASE[""] = array();
	$fieldLabelsPMT_GOLD_PURCHASE[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["APP_UID"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["APP_UID"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["APP_STATUS"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["ROW"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["ROW"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["A"] = "A";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["A"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["A"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["B"] = "B";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["B"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["B"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["C"] = "C";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["C"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["C"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["D"] = "D";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["D"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["D"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["E"] = "E";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["E"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["E"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["F"] = "F";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["F"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["F"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["G"] = "G";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["G"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["G"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["H"] = "H";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["H"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["H"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["I"] = "I";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["I"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["I"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["J"] = "J";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["J"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["J"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["K"] = "K";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["K"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["K"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["L"] = "L";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["L"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["L"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["M"] = "M";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["M"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["M"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["N"] = "N";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["N"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["N"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["O"] = "O";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["O"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["O"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["P"] = "P";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["P"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["P"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["Q"] = "Q";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["Q"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["Q"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["R"] = "R";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["R"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["R"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["S"] = "S";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["S"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["S"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["T"] = "T";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["T"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["T"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["TIME"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["TIME"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_GOLD_PURCHASE[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_GOLD_PURCHASE[""]["MONTHLY_REPORT"] = "";
	if (count($fieldToolTipsPMT_GOLD_PURCHASE[""]))
		$tdataPMT_GOLD_PURCHASE[".isUseToolTips"] = true;
}


	$tdataPMT_GOLD_PURCHASE[".NCSearch"] = true;



$tdataPMT_GOLD_PURCHASE[".shortTableName"] = "PMT_GOLD_PURCHASE";
$tdataPMT_GOLD_PURCHASE[".nSecOptions"] = 0;
$tdataPMT_GOLD_PURCHASE[".recsPerRowPrint"] = 1;
$tdataPMT_GOLD_PURCHASE[".mainTableOwnerID"] = "";
$tdataPMT_GOLD_PURCHASE[".moveNext"] = 1;
$tdataPMT_GOLD_PURCHASE[".entityType"] = 0;

$tdataPMT_GOLD_PURCHASE[".strOriginalTableName"] = "PMT_GOLD_PURCHASE";

	



$tdataPMT_GOLD_PURCHASE[".showAddInPopup"] = false;

$tdataPMT_GOLD_PURCHASE[".showEditInPopup"] = false;

$tdataPMT_GOLD_PURCHASE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_GOLD_PURCHASE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_GOLD_PURCHASE[".fieldsForRegister"] = array();

$tdataPMT_GOLD_PURCHASE[".listAjax"] = false;

	$tdataPMT_GOLD_PURCHASE[".audit"] = false;

	$tdataPMT_GOLD_PURCHASE[".locking"] = false;

$tdataPMT_GOLD_PURCHASE[".edit"] = true;
$tdataPMT_GOLD_PURCHASE[".afterEditAction"] = 1;
$tdataPMT_GOLD_PURCHASE[".closePopupAfterEdit"] = 1;
$tdataPMT_GOLD_PURCHASE[".afterEditActionDetTable"] = "";

$tdataPMT_GOLD_PURCHASE[".add"] = true;
$tdataPMT_GOLD_PURCHASE[".afterAddAction"] = 1;
$tdataPMT_GOLD_PURCHASE[".closePopupAfterAdd"] = 1;
$tdataPMT_GOLD_PURCHASE[".afterAddActionDetTable"] = "";

$tdataPMT_GOLD_PURCHASE[".list"] = true;



$tdataPMT_GOLD_PURCHASE[".reorderRecordsByHeader"] = true;



$tdataPMT_GOLD_PURCHASE[".view"] = true;

$tdataPMT_GOLD_PURCHASE[".import"] = true;

$tdataPMT_GOLD_PURCHASE[".exportTo"] = true;

$tdataPMT_GOLD_PURCHASE[".printFriendly"] = true;

$tdataPMT_GOLD_PURCHASE[".delete"] = true;

$tdataPMT_GOLD_PURCHASE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_GOLD_PURCHASE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_GOLD_PURCHASE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_GOLD_PURCHASE[".searchSaving"] = false;
//

$tdataPMT_GOLD_PURCHASE[".showSearchPanel"] = true;
		$tdataPMT_GOLD_PURCHASE[".flexibleSearch"] = true;

$tdataPMT_GOLD_PURCHASE[".isUseAjaxSuggest"] = true;

$tdataPMT_GOLD_PURCHASE[".rowHighlite"] = true;



				

$tdataPMT_GOLD_PURCHASE[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_GOLD_PURCHASE[".buttonsAdded"] = false;

$tdataPMT_GOLD_PURCHASE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_GOLD_PURCHASE[".isUseTimeForSearch"] = false;





$tdataPMT_GOLD_PURCHASE[".allSearchFields"] = array();
$tdataPMT_GOLD_PURCHASE[".filterFields"] = array();
$tdataPMT_GOLD_PURCHASE[".requiredSearchFields"] = array();

$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "APP_UID";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "ROW";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "A";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "B";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "C";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "D";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "E";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "F";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "G";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "H";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "I";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "J";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "K";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "L";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "M";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "N";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "O";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "P";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "Q";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "R";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "S";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "T";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "TIME";
	$tdataPMT_GOLD_PURCHASE[".allSearchFields"][] = "MONTHLY_REPORT";
	

$tdataPMT_GOLD_PURCHASE[".googleLikeFields"] = array();
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".googleLikeFields"][] = "MONTHLY_REPORT";


$tdataPMT_GOLD_PURCHASE[".advSearchFields"] = array();
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".advSearchFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".tableType"] = "list";

$tdataPMT_GOLD_PURCHASE[".printerPageOrientation"] = 0;
$tdataPMT_GOLD_PURCHASE[".nPrinterPageScale"] = 100;

$tdataPMT_GOLD_PURCHASE[".nPrinterSplitRecords"] = 40;

$tdataPMT_GOLD_PURCHASE[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_GOLD_PURCHASE[".geocodingEnabled"] = false;





$tdataPMT_GOLD_PURCHASE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_GOLD_PURCHASE[".pageSize"] = 20;

$tdataPMT_GOLD_PURCHASE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_GOLD_PURCHASE[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_GOLD_PURCHASE[".orderindexes"] = array();

$tdataPMT_GOLD_PURCHASE[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	Q,  	R,  	S,  	T,  	`TIME`,  	MONTHLY_REPORT";
$tdataPMT_GOLD_PURCHASE[".sqlFrom"] = "FROM PMT_GOLD_PURCHASE";
$tdataPMT_GOLD_PURCHASE[".sqlWhereExpr"] = "";
$tdataPMT_GOLD_PURCHASE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_GOLD_PURCHASE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_GOLD_PURCHASE[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_GOLD_PURCHASE[".highlightSearchResults"] = true;

$tableKeysPMT_GOLD_PURCHASE = array();
$tableKeysPMT_GOLD_PURCHASE[] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".Keys"] = $tableKeysPMT_GOLD_PURCHASE;

$tdataPMT_GOLD_PURCHASE[".listFields"] = array();
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".listFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".hideMobileList"] = array();


$tdataPMT_GOLD_PURCHASE[".viewFields"] = array();
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".viewFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".addFields"] = array();
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".addFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".masterListFields"] = array();
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".masterListFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".inlineAddFields"] = array();
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".inlineAddFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".editFields"] = array();
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".editFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".inlineEditFields"] = array();
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".inlineEditFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"] = array();
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".updateSelectedFields"][] = "MONTHLY_REPORT";


$tdataPMT_GOLD_PURCHASE[".exportFields"] = array();
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".exportFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".importFields"] = array();
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".importFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE[".printFields"] = array();
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "A";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "B";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "C";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "D";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "E";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "F";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "G";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "H";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "I";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "J";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "K";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "L";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "M";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "N";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "O";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "P";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "Q";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "R";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "S";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "T";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE[".printFields"][] = "MONTHLY_REPORT";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","APP_UID");
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




	$tdataPMT_GOLD_PURCHASE["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","APP_NUMBER");
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




	$tdataPMT_GOLD_PURCHASE["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","APP_STATUS");
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




	$tdataPMT_GOLD_PURCHASE["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","ROW");
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




	$tdataPMT_GOLD_PURCHASE["ROW"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","A");
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




	$tdataPMT_GOLD_PURCHASE["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","B");
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




	$tdataPMT_GOLD_PURCHASE["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","C");
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




	$tdataPMT_GOLD_PURCHASE["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","D");
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




	$tdataPMT_GOLD_PURCHASE["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","E");
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




	$tdataPMT_GOLD_PURCHASE["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","F");
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




	$tdataPMT_GOLD_PURCHASE["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","G");
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




	$tdataPMT_GOLD_PURCHASE["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","H");
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




	$tdataPMT_GOLD_PURCHASE["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","I");
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




	$tdataPMT_GOLD_PURCHASE["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","J");
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




	$tdataPMT_GOLD_PURCHASE["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","K");
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




	$tdataPMT_GOLD_PURCHASE["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","L");
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




	$tdataPMT_GOLD_PURCHASE["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","M");
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




	$tdataPMT_GOLD_PURCHASE["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","N");
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




	$tdataPMT_GOLD_PURCHASE["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","O");
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




	$tdataPMT_GOLD_PURCHASE["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","P");
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




	$tdataPMT_GOLD_PURCHASE["P"] = $fdata;
//	Q
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Q";
	$fdata["GoodName"] = "Q";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","Q");
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




	$tdataPMT_GOLD_PURCHASE["Q"] = $fdata;
//	R
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "R";
	$fdata["GoodName"] = "R";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","R");
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




	$tdataPMT_GOLD_PURCHASE["R"] = $fdata;
//	S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "S";
	$fdata["GoodName"] = "S";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","S");
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




	$tdataPMT_GOLD_PURCHASE["S"] = $fdata;
//	T
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "T";
	$fdata["GoodName"] = "T";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","T");
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




	$tdataPMT_GOLD_PURCHASE["T"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","TIME");
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




	$tdataPMT_GOLD_PURCHASE["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE","MONTHLY_REPORT");
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




	$tdataPMT_GOLD_PURCHASE["MONTHLY_REPORT"] = $fdata;


$tables_data["PMT_GOLD_PURCHASE"]=&$tdataPMT_GOLD_PURCHASE;
$field_labels["PMT_GOLD_PURCHASE"] = &$fieldLabelsPMT_GOLD_PURCHASE;
$fieldToolTips["PMT_GOLD_PURCHASE"] = &$fieldToolTipsPMT_GOLD_PURCHASE;
$placeHolders["PMT_GOLD_PURCHASE"] = &$placeHoldersPMT_GOLD_PURCHASE;
$page_titles["PMT_GOLD_PURCHASE"] = &$pageTitlesPMT_GOLD_PURCHASE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_GOLD_PURCHASE"] = array();
//	PMT_GOLD_PURCHASE_SUB
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_GOLD_PURCHASE_SUB";
		$detailsParam["dOriginalTable"] = "PMT_GOLD_PURCHASE_SUB";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_GOLD_PURCHASE_SUB";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_GOLD_PURCHASE_SUB");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["PMT_GOLD_PURCHASE"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_GOLD_PURCHASE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_GOLD_PURCHASE"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["PMT_GOLD_PURCHASE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_GOLD_PURCHASE"][$dIndex]["detailKeys"][]="APP_UID";

// tables which are master tables for current table (detail)
$masterTablesData["PMT_GOLD_PURCHASE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_GOLD_PURCHASE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	Q,  	R,  	S,  	T,  	`TIME`,  	MONTHLY_REPORT";
$proto0["m_strFrom"] = "FROM PMT_GOLD_PURCHASE";
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
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto14["m_sql"] = "A";
$proto14["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto16["m_sql"] = "B";
$proto16["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto18["m_sql"] = "C";
$proto18["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto20["m_sql"] = "D";
$proto20["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto22["m_sql"] = "E";
$proto22["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto24["m_sql"] = "F";
$proto24["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto26["m_sql"] = "G";
$proto26["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto28["m_sql"] = "H";
$proto28["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto30["m_sql"] = "I";
$proto30["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto32["m_sql"] = "J";
$proto32["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto34["m_sql"] = "K";
$proto34["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto36["m_sql"] = "L";
$proto36["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto38["m_sql"] = "M";
$proto38["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto40["m_sql"] = "N";
$proto40["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto42["m_sql"] = "O";
$proto42["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto44["m_sql"] = "P";
$proto44["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Q",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto46["m_sql"] = "Q";
$proto46["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "R",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto48["m_sql"] = "R";
$proto48["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "S",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto50["m_sql"] = "S";
$proto50["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "T",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto52["m_sql"] = "T";
$proto52["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto54["m_sql"] = "`TIME`";
$proto54["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_GOLD_PURCHASE",
	"m_srcTableName" => "PMT_GOLD_PURCHASE"
));

$proto56["m_sql"] = "MONTHLY_REPORT";
$proto56["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_GOLD_PURCHASE";
$proto59["m_srcTableName"] = "PMT_GOLD_PURCHASE";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "APP_UID";
$proto59["m_columns"][] = "APP_NUMBER";
$proto59["m_columns"][] = "APP_STATUS";
$proto59["m_columns"][] = "ROW";
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
$proto59["m_columns"][] = "TIME";
$proto59["m_columns"][] = "MONTHLY_REPORT";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "PMT_GOLD_PURCHASE";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_GOLD_PURCHASE";
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
$proto0["m_srcTableName"]="PMT_GOLD_PURCHASE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_GOLD_PURCHASE = createSqlQuery_PMT_GOLD_PURCHASE();


	
						;

																										

$tdataPMT_GOLD_PURCHASE[".sqlquery"] = $queryData_PMT_GOLD_PURCHASE;

$tableEvents["PMT_GOLD_PURCHASE"] = new eventsBase;
$tdataPMT_GOLD_PURCHASE[".hasEvents"] = false;

?>
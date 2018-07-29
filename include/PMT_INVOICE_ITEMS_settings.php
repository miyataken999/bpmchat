<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_INVOICE_ITEMS = array();
	$tdataPMT_INVOICE_ITEMS[".truncateText"] = true;
	$tdataPMT_INVOICE_ITEMS[".NumberOfChars"] = 80;
	$tdataPMT_INVOICE_ITEMS[".ShortName"] = "PMT_INVOICE_ITEMS";
	$tdataPMT_INVOICE_ITEMS[".OwnerID"] = "";
	$tdataPMT_INVOICE_ITEMS[".OriginalTable"] = "PMT_INVOICE_ITEMS";

//	field labels
$fieldLabelsPMT_INVOICE_ITEMS = array();
$fieldToolTipsPMT_INVOICE_ITEMS = array();
$pageTitlesPMT_INVOICE_ITEMS = array();
$placeHoldersPMT_INVOICE_ITEMS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"] = array();
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"] = array();
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"] = array();
	$pageTitlesPMT_INVOICE_ITEMS["Japanese"] = array();
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["APP_UID"] = "APP_UID";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["APP_UID"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["APP_UID"] = "おなまえ";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["APP_NUMBER"] = "APP_NUMBER";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["APP_STATUS"] = "APP_STATUS";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["APP_STATUS"] = "テキストエリア";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["ROW"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["MONTHLY_REPORT"] = "MONTHLY_REPORT";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["MONTHLY_REPORT"] = "説明１";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["A"] = "登録日";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["A"] = "テキストエリア";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["A"] = "たんとうぶ";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["B"] = "査定人";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["B"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["B"] = "みつもりばんごう";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["C"] = "勘定科目";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["C"] = "テキストエリア";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["D"] = "補助科目";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["D"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["E"] = "値段";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["E"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["F"] = "顧客ID";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["F"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["G"] = "部門";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["G"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["H"] = "備考";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["H"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["I"] = "顧客登録者";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["I"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["J"] = "更新者";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["J"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["K"] = "登録者";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["K"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["L"] = "払出し";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["L"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["L"] = " concurrent data structures";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["M"] = "振込先銀行";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["M"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["M"] = "説明１";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["N"] = "被保険者職業";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["N"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["N"] = "説明１";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["O"] = "業種取扱品目";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["O"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["O"] = "[a-z]+";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["P"] = "支店・営業所";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["P"] = "テキスト";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["P"] = "説明１";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["Q"] = "証券上の被保険者本人との関係";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["Q"] = "リストボックス";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["Q"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["R"] = "金額";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["R"] = "リストボックス";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["R"] = "説明１";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["S"] = "主力銀行";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["S"] = "リストボックス";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["S"] = "説明１";
	$fieldLabelsPMT_INVOICE_ITEMS["Japanese"]["T"] = "関係会社";
	$fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]["T"] = "テキストエリア";
	$placeHoldersPMT_INVOICE_ITEMS["Japanese"]["T"] = "[1-9]{0.12}";
	if (count($fieldToolTipsPMT_INVOICE_ITEMS["Japanese"]))
		$tdataPMT_INVOICE_ITEMS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_INVOICE_ITEMS["English"] = array();
	$fieldToolTipsPMT_INVOICE_ITEMS["English"] = array();
	$placeHoldersPMT_INVOICE_ITEMS["English"] = array();
	$pageTitlesPMT_INVOICE_ITEMS["English"] = array();
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["APP_UID"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["APP_UID"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["ROW"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["ROW"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["TIME"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["TIME"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["A"] = "A";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["A"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["A"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["B"] = "B";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["B"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["B"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["C"] = "C";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["C"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["C"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["D"] = "D";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["D"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["D"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["E"] = "E";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["E"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["E"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["F"] = "F";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["F"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["F"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["G"] = "G";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["G"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["G"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["H"] = "H";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["H"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["H"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["I"] = "I";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["I"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["I"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["J"] = "J";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["J"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["J"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["K"] = "K";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["K"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["K"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["L"] = "L";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["L"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["L"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["M"] = "M";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["M"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["M"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["N"] = "N";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["N"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["N"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["O"] = "O";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["O"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["O"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["P"] = "P";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["P"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["P"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["Q"] = "Q";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["Q"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["Q"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["R"] = "R";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["R"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["R"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["S"] = "S";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["S"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["S"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS["English"]["T"] = "T";
	$fieldToolTipsPMT_INVOICE_ITEMS["English"]["T"] = "";
	$placeHoldersPMT_INVOICE_ITEMS["English"]["T"] = "";
	if (count($fieldToolTipsPMT_INVOICE_ITEMS["English"]))
		$tdataPMT_INVOICE_ITEMS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_INVOICE_ITEMS[""] = array();
	$fieldToolTipsPMT_INVOICE_ITEMS[""] = array();
	$placeHoldersPMT_INVOICE_ITEMS[""] = array();
	$pageTitlesPMT_INVOICE_ITEMS[""] = array();
	$fieldLabelsPMT_INVOICE_ITEMS[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["APP_UID"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["APP_UID"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["APP_STATUS"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["ROW"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["ROW"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["TIME"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["TIME"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["A"] = "A";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["A"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["A"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["B"] = "B";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["B"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["B"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["C"] = "C";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["C"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["C"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["D"] = "D";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["D"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["D"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["E"] = "E";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["E"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["E"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["F"] = "F";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["F"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["F"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["G"] = "G";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["G"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["G"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["H"] = "H";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["H"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["H"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["I"] = "I";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["I"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["I"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["J"] = "J";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["J"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["J"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["K"] = "K";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["K"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["K"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["L"] = "L";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["L"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["L"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["M"] = "M";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["M"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["M"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["N"] = "N";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["N"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["N"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["O"] = "O";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["O"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["O"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["P"] = "P";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["P"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["P"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["Q"] = "Q";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["Q"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["Q"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["R"] = "R";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["R"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["R"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["S"] = "S";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["S"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["S"] = "";
	$fieldLabelsPMT_INVOICE_ITEMS[""]["T"] = "T";
	$fieldToolTipsPMT_INVOICE_ITEMS[""]["T"] = "";
	$placeHoldersPMT_INVOICE_ITEMS[""]["T"] = "";
	if (count($fieldToolTipsPMT_INVOICE_ITEMS[""]))
		$tdataPMT_INVOICE_ITEMS[".isUseToolTips"] = true;
}


	$tdataPMT_INVOICE_ITEMS[".NCSearch"] = true;



$tdataPMT_INVOICE_ITEMS[".shortTableName"] = "PMT_INVOICE_ITEMS";
$tdataPMT_INVOICE_ITEMS[".nSecOptions"] = 0;
$tdataPMT_INVOICE_ITEMS[".recsPerRowPrint"] = 1;
$tdataPMT_INVOICE_ITEMS[".mainTableOwnerID"] = "";
$tdataPMT_INVOICE_ITEMS[".moveNext"] = 1;
$tdataPMT_INVOICE_ITEMS[".entityType"] = 0;

$tdataPMT_INVOICE_ITEMS[".strOriginalTableName"] = "PMT_INVOICE_ITEMS";

	



$tdataPMT_INVOICE_ITEMS[".showAddInPopup"] = false;

$tdataPMT_INVOICE_ITEMS[".showEditInPopup"] = false;

$tdataPMT_INVOICE_ITEMS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_INVOICE_ITEMS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_INVOICE_ITEMS[".fieldsForRegister"] = array();
	
$tdataPMT_INVOICE_ITEMS[".listAjax"] = false;

	$tdataPMT_INVOICE_ITEMS[".audit"] = false;

	$tdataPMT_INVOICE_ITEMS[".locking"] = false;

$tdataPMT_INVOICE_ITEMS[".edit"] = true;
$tdataPMT_INVOICE_ITEMS[".afterEditAction"] = 1;
$tdataPMT_INVOICE_ITEMS[".closePopupAfterEdit"] = 1;
$tdataPMT_INVOICE_ITEMS[".afterEditActionDetTable"] = "";

$tdataPMT_INVOICE_ITEMS[".add"] = true;
$tdataPMT_INVOICE_ITEMS[".afterAddAction"] = 1;
$tdataPMT_INVOICE_ITEMS[".closePopupAfterAdd"] = 1;
$tdataPMT_INVOICE_ITEMS[".afterAddActionDetTable"] = "";

$tdataPMT_INVOICE_ITEMS[".list"] = true;



$tdataPMT_INVOICE_ITEMS[".reorderRecordsByHeader"] = true;



$tdataPMT_INVOICE_ITEMS[".inlineAdd"] = true;
$tdataPMT_INVOICE_ITEMS[".view"] = true;

$tdataPMT_INVOICE_ITEMS[".import"] = true;

$tdataPMT_INVOICE_ITEMS[".exportTo"] = true;

$tdataPMT_INVOICE_ITEMS[".printFriendly"] = true;

$tdataPMT_INVOICE_ITEMS[".delete"] = true;

$tdataPMT_INVOICE_ITEMS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_INVOICE_ITEMS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_INVOICE_ITEMS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_INVOICE_ITEMS[".searchSaving"] = false;
//

$tdataPMT_INVOICE_ITEMS[".showSearchPanel"] = true;
		$tdataPMT_INVOICE_ITEMS[".flexibleSearch"] = true;

$tdataPMT_INVOICE_ITEMS[".isUseAjaxSuggest"] = true;

$tdataPMT_INVOICE_ITEMS[".rowHighlite"] = true;



																

$tdataPMT_INVOICE_ITEMS[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_INVOICE_ITEMS[".buttonsAdded"] = false;

$tdataPMT_INVOICE_ITEMS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_INVOICE_ITEMS[".isUseTimeForSearch"] = false;



$tdataPMT_INVOICE_ITEMS[".badgeColor"] = "4169e1";


$tdataPMT_INVOICE_ITEMS[".allSearchFields"] = array();
$tdataPMT_INVOICE_ITEMS[".filterFields"] = array();
$tdataPMT_INVOICE_ITEMS[".requiredSearchFields"] = array();

$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "APP_UID";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "A";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "B";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "C";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "D";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "E";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "F";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "G";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "H";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "I";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "J";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "K";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "L";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "M";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "N";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "O";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "P";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "Q";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "R";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "S";
	$tdataPMT_INVOICE_ITEMS[".allSearchFields"][] = "T";
	

$tdataPMT_INVOICE_ITEMS[".googleLikeFields"] = array();
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "T";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "ROW";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "TIME";
$tdataPMT_INVOICE_ITEMS[".googleLikeFields"][] = "MONTHLY_REPORT";


$tdataPMT_INVOICE_ITEMS[".advSearchFields"] = array();
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".advSearchFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".tableType"] = "list";

$tdataPMT_INVOICE_ITEMS[".printerPageOrientation"] = 0;
$tdataPMT_INVOICE_ITEMS[".nPrinterPageScale"] = 100;

$tdataPMT_INVOICE_ITEMS[".nPrinterSplitRecords"] = 40;

$tdataPMT_INVOICE_ITEMS[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_INVOICE_ITEMS[".geocodingEnabled"] = false;





$tdataPMT_INVOICE_ITEMS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_INVOICE_ITEMS[".pageSize"] = 20;

$tdataPMT_INVOICE_ITEMS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_INVOICE_ITEMS[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_INVOICE_ITEMS[".orderindexes"] = array();

$tdataPMT_INVOICE_ITEMS[".sqlHead"] = "SELECT APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	Q,  	R,  	S,  	T,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	`TIME`,  	MONTHLY_REPORT";
$tdataPMT_INVOICE_ITEMS[".sqlFrom"] = "FROM PMT_INVOICE_ITEMS";
$tdataPMT_INVOICE_ITEMS[".sqlWhereExpr"] = "";
$tdataPMT_INVOICE_ITEMS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_INVOICE_ITEMS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_INVOICE_ITEMS[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_INVOICE_ITEMS[".highlightSearchResults"] = true;

$tableKeysPMT_INVOICE_ITEMS = array();
$tableKeysPMT_INVOICE_ITEMS[] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".Keys"] = $tableKeysPMT_INVOICE_ITEMS;

$tdataPMT_INVOICE_ITEMS[".listFields"] = array();
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".listFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".hideMobileList"] = array();


$tdataPMT_INVOICE_ITEMS[".viewFields"] = array();
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".viewFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".addFields"] = array();
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".addFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".masterListFields"] = array();
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "T";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "APP_STATUS";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "ROW";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "TIME";
$tdataPMT_INVOICE_ITEMS[".masterListFields"][] = "MONTHLY_REPORT";

$tdataPMT_INVOICE_ITEMS[".inlineAddFields"] = array();
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".inlineAddFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".editFields"] = array();
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".editFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".inlineEditFields"] = array();
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".inlineEditFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"] = array();
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".updateSelectedFields"][] = "T";


$tdataPMT_INVOICE_ITEMS[".exportFields"] = array();
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".exportFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".importFields"] = array();
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".importFields"][] = "T";

$tdataPMT_INVOICE_ITEMS[".printFields"] = array();
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "APP_UID";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "A";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "B";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "C";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "D";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "E";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "F";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "G";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "H";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "I";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "J";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "K";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "L";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "M";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "N";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "O";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "P";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "Q";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "R";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "S";
$tdataPMT_INVOICE_ITEMS[".printFields"][] = "T";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","APP_UID");
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




	$tdataPMT_INVOICE_ITEMS["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","A");
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




	$tdataPMT_INVOICE_ITEMS["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","B");
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




	$tdataPMT_INVOICE_ITEMS["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","C");
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




	$tdataPMT_INVOICE_ITEMS["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","D");
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




	$tdataPMT_INVOICE_ITEMS["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","E");
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




	$tdataPMT_INVOICE_ITEMS["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","F");
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




	$tdataPMT_INVOICE_ITEMS["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","G");
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




	$tdataPMT_INVOICE_ITEMS["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","H");
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




	$tdataPMT_INVOICE_ITEMS["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","I");
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




	$tdataPMT_INVOICE_ITEMS["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","J");
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




	$tdataPMT_INVOICE_ITEMS["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","K");
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




	$tdataPMT_INVOICE_ITEMS["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","L");
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




	$tdataPMT_INVOICE_ITEMS["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","M");
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




	$tdataPMT_INVOICE_ITEMS["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","N");
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




	$tdataPMT_INVOICE_ITEMS["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","O");
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




	$tdataPMT_INVOICE_ITEMS["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","P");
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




	$tdataPMT_INVOICE_ITEMS["P"] = $fdata;
//	Q
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Q";
	$fdata["GoodName"] = "Q";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","Q");
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




	$tdataPMT_INVOICE_ITEMS["Q"] = $fdata;
//	R
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "R";
	$fdata["GoodName"] = "R";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","R");
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




	$tdataPMT_INVOICE_ITEMS["R"] = $fdata;
//	S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "S";
	$fdata["GoodName"] = "S";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","S");
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




	$tdataPMT_INVOICE_ITEMS["S"] = $fdata;
//	T
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "T";
	$fdata["GoodName"] = "T";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","T");
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




	$tdataPMT_INVOICE_ITEMS["T"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","APP_NUMBER");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
			
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








	$tdataPMT_INVOICE_ITEMS["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","APP_STATUS");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
			
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








	$tdataPMT_INVOICE_ITEMS["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","ROW");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ROW`";

	
	
			
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








	$tdataPMT_INVOICE_ITEMS["ROW"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","TIME");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TIME`";

	
	
			
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








	$tdataPMT_INVOICE_ITEMS["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_INVOICE_ITEMS";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE_ITEMS","MONTHLY_REPORT");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "MONTHLY_REPORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTHLY_REPORT";

	
	
			
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








	$tdataPMT_INVOICE_ITEMS["MONTHLY_REPORT"] = $fdata;


$tables_data["PMT_INVOICE_ITEMS"]=&$tdataPMT_INVOICE_ITEMS;
$field_labels["PMT_INVOICE_ITEMS"] = &$fieldLabelsPMT_INVOICE_ITEMS;
$fieldToolTips["PMT_INVOICE_ITEMS"] = &$fieldToolTipsPMT_INVOICE_ITEMS;
$placeHolders["PMT_INVOICE_ITEMS"] = &$placeHoldersPMT_INVOICE_ITEMS;
$page_titles["PMT_INVOICE_ITEMS"] = &$pageTitlesPMT_INVOICE_ITEMS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_INVOICE_ITEMS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_INVOICE_ITEMS"] = array();


	
				$strOriginalDetailsTable="PMT_INVOICE";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PMT_INVOICE";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PMT_INVOICE";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PMT_INVOICE_ITEMS"][0] = $masterParams;
				$masterTablesData["PMT_INVOICE_ITEMS"][0]["masterKeys"] = array();
	$masterTablesData["PMT_INVOICE_ITEMS"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["PMT_INVOICE_ITEMS"][0]["detailKeys"] = array();
	$masterTablesData["PMT_INVOICE_ITEMS"][0]["detailKeys"][]="APP_NUMBER";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_INVOICE_ITEMS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	Q,  	R,  	S,  	T,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	`TIME`,  	MONTHLY_REPORT";
$proto0["m_strFrom"] = "FROM PMT_INVOICE_ITEMS";
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
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto8["m_sql"] = "A";
$proto8["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto10["m_sql"] = "B";
$proto10["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto12["m_sql"] = "C";
$proto12["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto14["m_sql"] = "D";
$proto14["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto16["m_sql"] = "E";
$proto16["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto18["m_sql"] = "F";
$proto18["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto20["m_sql"] = "G";
$proto20["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto22["m_sql"] = "H";
$proto22["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto24["m_sql"] = "I";
$proto24["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto26["m_sql"] = "J";
$proto26["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto28["m_sql"] = "K";
$proto28["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto30["m_sql"] = "L";
$proto30["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto32["m_sql"] = "M";
$proto32["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto34["m_sql"] = "N";
$proto34["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto36["m_sql"] = "O";
$proto36["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto38["m_sql"] = "P";
$proto38["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Q",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto40["m_sql"] = "Q";
$proto40["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "R",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto42["m_sql"] = "R";
$proto42["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "S",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto44["m_sql"] = "S";
$proto44["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "T",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto46["m_sql"] = "T";
$proto46["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto48["m_sql"] = "APP_NUMBER";
$proto48["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto50["m_sql"] = "APP_STATUS";
$proto50["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto52["m_sql"] = "`ROW`";
$proto52["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto54["m_sql"] = "`TIME`";
$proto54["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_INVOICE_ITEMS",
	"m_srcTableName" => "PMT_INVOICE_ITEMS"
));

$proto56["m_sql"] = "MONTHLY_REPORT";
$proto56["m_srcTableName"] = "PMT_INVOICE_ITEMS";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_INVOICE_ITEMS";
$proto59["m_srcTableName"] = "PMT_INVOICE_ITEMS";
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
$proto58["m_sql"] = "PMT_INVOICE_ITEMS";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_INVOICE_ITEMS";
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
$proto0["m_srcTableName"]="PMT_INVOICE_ITEMS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_INVOICE_ITEMS = createSqlQuery_PMT_INVOICE_ITEMS();


	
						;

																										

$tdataPMT_INVOICE_ITEMS[".sqlquery"] = $queryData_PMT_INVOICE_ITEMS;

$tableEvents["PMT_INVOICE_ITEMS"] = new eventsBase;
$tdataPMT_INVOICE_ITEMS[".hasEvents"] = false;

?>
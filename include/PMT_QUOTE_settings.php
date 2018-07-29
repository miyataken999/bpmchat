<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_QUOTE = array();
	$tdataPMT_QUOTE[".truncateText"] = true;
	$tdataPMT_QUOTE[".NumberOfChars"] = 80;
	$tdataPMT_QUOTE[".ShortName"] = "PMT_QUOTE";
	$tdataPMT_QUOTE[".OwnerID"] = "";
	$tdataPMT_QUOTE[".OriginalTable"] = "PMT_QUOTE";

//	field labels
$fieldLabelsPMT_QUOTE = array();
$fieldToolTipsPMT_QUOTE = array();
$pageTitlesPMT_QUOTE = array();
$placeHoldersPMT_QUOTE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_QUOTE["Japanese"] = array();
	$fieldToolTipsPMT_QUOTE["Japanese"] = array();
	$placeHoldersPMT_QUOTE["Japanese"] = array();
	$pageTitlesPMT_QUOTE["Japanese"] = array();
	$fieldLabelsPMT_QUOTE["Japanese"]["APP_UID"] = "ユニークID";
	$fieldToolTipsPMT_QUOTE["Japanese"]["APP_UID"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["APP_UID"] = "おなまえ";
	$fieldLabelsPMT_QUOTE["Japanese"]["A"] = "名前";
	$fieldToolTipsPMT_QUOTE["Japanese"]["A"] = "テキストエリア";
	$placeHoldersPMT_QUOTE["Japanese"]["A"] = "たんとうぶ";
	$fieldLabelsPMT_QUOTE["Japanese"]["B"] = "担当部";
	$fieldToolTipsPMT_QUOTE["Japanese"]["B"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["B"] = "みつもりばんごう";
	$fieldLabelsPMT_QUOTE["Japanese"]["C"] = "見積もり番号";
	$fieldToolTipsPMT_QUOTE["Japanese"]["C"] = "時間表示";
	$placeHoldersPMT_QUOTE["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_QUOTE["Japanese"]["D"] = "見積もり日";
	$fieldToolTipsPMT_QUOTE["Japanese"]["D"] = "テキストエリア";
	$placeHoldersPMT_QUOTE["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["E"] = "件名";
	$fieldToolTipsPMT_QUOTE["Japanese"]["E"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["F"] = "会社名";
	$fieldToolTipsPMT_QUOTE["Japanese"]["F"] = "時間表示";
	$placeHoldersPMT_QUOTE["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["G"] = "納期";
	$fieldToolTipsPMT_QUOTE["Japanese"]["G"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["H"] = "支払い条件";
	$fieldToolTipsPMT_QUOTE["Japanese"]["H"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["I"] = "電話";
	$fieldToolTipsPMT_QUOTE["Japanese"]["I"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["J"] = "FAX";
	$fieldToolTipsPMT_QUOTE["Japanese"]["J"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["K"] = "メール";
	$fieldToolTipsPMT_QUOTE["Japanese"]["K"] = "テキスト";
	$placeHoldersPMT_QUOTE["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_QUOTE["Japanese"]["L"] = "担当";
	$fieldToolTipsPMT_QUOTE["Japanese"]["L"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["L"] = " concurrent data structures";
	$fieldLabelsPMT_QUOTE["Japanese"]["M"] = "合計金額";
	$fieldToolTipsPMT_QUOTE["Japanese"]["M"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["M"] = "説明１";
	$fieldLabelsPMT_QUOTE["Japanese"]["N"] = "車両費";
	$fieldToolTipsPMT_QUOTE["Japanese"]["N"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["N"] = "説明１";
	$fieldLabelsPMT_QUOTE["Japanese"]["O"] = "教育費";
	$fieldToolTipsPMT_QUOTE["Japanese"]["O"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["O"] = "説明１";
	$fieldLabelsPMT_QUOTE["Japanese"]["P"] = "保険料";
	$fieldToolTipsPMT_QUOTE["Japanese"]["P"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["P"] = "[1-9]{0.12}";
	$fieldLabelsPMT_QUOTE["Japanese"]["APP_NUMBER"] = "その他の支出";
	$fieldToolTipsPMT_QUOTE["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_QUOTE["Japanese"]["APP_STATUS"] = "just Close";
	$fieldToolTipsPMT_QUOTE["Japanese"]["APP_STATUS"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_QUOTE["Japanese"]["ROW"] = "代理人住所";
	$fieldToolTipsPMT_QUOTE["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["ROW"] = "[a-z]+";
	$fieldLabelsPMT_QUOTE["Japanese"]["EMPLOYEE_NO"] = "代理人電話";
	$fieldToolTipsPMT_QUOTE["Japanese"]["EMPLOYEE_NO"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["EMPLOYEE_NO"] = "yyyy-mm-dd";
	$fieldLabelsPMT_QUOTE["Japanese"]["TIME"] = "代理店指名";
	$fieldToolTipsPMT_QUOTE["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_QUOTE["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_QUOTE["Japanese"]["MONTHLY_REPORT"] = "被保険者との関係";
	$fieldToolTipsPMT_QUOTE["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_QUOTE["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "電話番号";
	$fieldToolTipsPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "リストボックス";
	$placeHoldersPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "説明１";
	$fieldLabelsPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "住所1";
	$fieldToolTipsPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "リストボックス";
	$placeHoldersPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "説明１";
	$fieldLabelsPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "住所に";
	$fieldToolTipsPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "リストボックス";
	$placeHoldersPMT_QUOTE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "説明１";
	if (count($fieldToolTipsPMT_QUOTE["Japanese"]))
		$tdataPMT_QUOTE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_QUOTE["English"] = array();
	$fieldToolTipsPMT_QUOTE["English"] = array();
	$placeHoldersPMT_QUOTE["English"] = array();
	$pageTitlesPMT_QUOTE["English"] = array();
	$fieldLabelsPMT_QUOTE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_QUOTE["English"]["APP_UID"] = "";
	$placeHoldersPMT_QUOTE["English"]["APP_UID"] = "";
	$fieldLabelsPMT_QUOTE["English"]["A"] = "A";
	$fieldToolTipsPMT_QUOTE["English"]["A"] = "";
	$placeHoldersPMT_QUOTE["English"]["A"] = "";
	$fieldLabelsPMT_QUOTE["English"]["B"] = "B";
	$fieldToolTipsPMT_QUOTE["English"]["B"] = "";
	$placeHoldersPMT_QUOTE["English"]["B"] = "";
	$fieldLabelsPMT_QUOTE["English"]["C"] = "C";
	$fieldToolTipsPMT_QUOTE["English"]["C"] = "";
	$placeHoldersPMT_QUOTE["English"]["C"] = "";
	$fieldLabelsPMT_QUOTE["English"]["D"] = "D";
	$fieldToolTipsPMT_QUOTE["English"]["D"] = "";
	$placeHoldersPMT_QUOTE["English"]["D"] = "";
	$fieldLabelsPMT_QUOTE["English"]["E"] = "E";
	$fieldToolTipsPMT_QUOTE["English"]["E"] = "";
	$placeHoldersPMT_QUOTE["English"]["E"] = "";
	$fieldLabelsPMT_QUOTE["English"]["F"] = "F";
	$fieldToolTipsPMT_QUOTE["English"]["F"] = "";
	$placeHoldersPMT_QUOTE["English"]["F"] = "";
	$fieldLabelsPMT_QUOTE["English"]["G"] = "G";
	$fieldToolTipsPMT_QUOTE["English"]["G"] = "";
	$placeHoldersPMT_QUOTE["English"]["G"] = "";
	$fieldLabelsPMT_QUOTE["English"]["H"] = "H";
	$fieldToolTipsPMT_QUOTE["English"]["H"] = "";
	$placeHoldersPMT_QUOTE["English"]["H"] = "";
	$fieldLabelsPMT_QUOTE["English"]["I"] = "I";
	$fieldToolTipsPMT_QUOTE["English"]["I"] = "";
	$placeHoldersPMT_QUOTE["English"]["I"] = "";
	$fieldLabelsPMT_QUOTE["English"]["J"] = "J";
	$fieldToolTipsPMT_QUOTE["English"]["J"] = "";
	$placeHoldersPMT_QUOTE["English"]["J"] = "";
	$fieldLabelsPMT_QUOTE["English"]["K"] = "K";
	$fieldToolTipsPMT_QUOTE["English"]["K"] = "";
	$placeHoldersPMT_QUOTE["English"]["K"] = "";
	$fieldLabelsPMT_QUOTE["English"]["L"] = "L";
	$fieldToolTipsPMT_QUOTE["English"]["L"] = "";
	$placeHoldersPMT_QUOTE["English"]["L"] = "";
	$fieldLabelsPMT_QUOTE["English"]["M"] = "M";
	$fieldToolTipsPMT_QUOTE["English"]["M"] = "";
	$placeHoldersPMT_QUOTE["English"]["M"] = "";
	$fieldLabelsPMT_QUOTE["English"]["N"] = "N";
	$fieldToolTipsPMT_QUOTE["English"]["N"] = "";
	$placeHoldersPMT_QUOTE["English"]["N"] = "";
	$fieldLabelsPMT_QUOTE["English"]["O"] = "O";
	$fieldToolTipsPMT_QUOTE["English"]["O"] = "";
	$placeHoldersPMT_QUOTE["English"]["O"] = "";
	$fieldLabelsPMT_QUOTE["English"]["P"] = "P";
	$fieldToolTipsPMT_QUOTE["English"]["P"] = "";
	$placeHoldersPMT_QUOTE["English"]["P"] = "";
	$fieldLabelsPMT_QUOTE["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_QUOTE["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_QUOTE["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_QUOTE["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_QUOTE["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_QUOTE["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_QUOTE["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_QUOTE["English"]["ROW"] = "";
	$placeHoldersPMT_QUOTE["English"]["ROW"] = "";
	$fieldLabelsPMT_QUOTE["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_QUOTE["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_QUOTE["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_QUOTE["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_QUOTE["English"]["TIME"] = "";
	$placeHoldersPMT_QUOTE["English"]["TIME"] = "";
	$fieldLabelsPMT_QUOTE["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_QUOTE["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_QUOTE["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_QUOTE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_QUOTE["English"]))
		$tdataPMT_QUOTE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_QUOTE[""] = array();
	$fieldToolTipsPMT_QUOTE[""] = array();
	$placeHoldersPMT_QUOTE[""] = array();
	$pageTitlesPMT_QUOTE[""] = array();
	$fieldLabelsPMT_QUOTE[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_QUOTE[""]["APP_UID"] = "";
	$placeHoldersPMT_QUOTE[""]["APP_UID"] = "";
	$fieldLabelsPMT_QUOTE[""]["A"] = "A";
	$fieldToolTipsPMT_QUOTE[""]["A"] = "";
	$placeHoldersPMT_QUOTE[""]["A"] = "";
	$fieldLabelsPMT_QUOTE[""]["B"] = "B";
	$fieldToolTipsPMT_QUOTE[""]["B"] = "";
	$placeHoldersPMT_QUOTE[""]["B"] = "";
	$fieldLabelsPMT_QUOTE[""]["C"] = "C";
	$fieldToolTipsPMT_QUOTE[""]["C"] = "";
	$placeHoldersPMT_QUOTE[""]["C"] = "";
	$fieldLabelsPMT_QUOTE[""]["D"] = "D";
	$fieldToolTipsPMT_QUOTE[""]["D"] = "";
	$placeHoldersPMT_QUOTE[""]["D"] = "";
	$fieldLabelsPMT_QUOTE[""]["E"] = "E";
	$fieldToolTipsPMT_QUOTE[""]["E"] = "";
	$placeHoldersPMT_QUOTE[""]["E"] = "";
	$fieldLabelsPMT_QUOTE[""]["F"] = "F";
	$fieldToolTipsPMT_QUOTE[""]["F"] = "";
	$placeHoldersPMT_QUOTE[""]["F"] = "";
	$fieldLabelsPMT_QUOTE[""]["G"] = "G";
	$fieldToolTipsPMT_QUOTE[""]["G"] = "";
	$placeHoldersPMT_QUOTE[""]["G"] = "";
	$fieldLabelsPMT_QUOTE[""]["H"] = "H";
	$fieldToolTipsPMT_QUOTE[""]["H"] = "";
	$placeHoldersPMT_QUOTE[""]["H"] = "";
	$fieldLabelsPMT_QUOTE[""]["I"] = "I";
	$fieldToolTipsPMT_QUOTE[""]["I"] = "";
	$placeHoldersPMT_QUOTE[""]["I"] = "";
	$fieldLabelsPMT_QUOTE[""]["J"] = "J";
	$fieldToolTipsPMT_QUOTE[""]["J"] = "";
	$placeHoldersPMT_QUOTE[""]["J"] = "";
	$fieldLabelsPMT_QUOTE[""]["K"] = "K";
	$fieldToolTipsPMT_QUOTE[""]["K"] = "";
	$placeHoldersPMT_QUOTE[""]["K"] = "";
	$fieldLabelsPMT_QUOTE[""]["L"] = "L";
	$fieldToolTipsPMT_QUOTE[""]["L"] = "";
	$placeHoldersPMT_QUOTE[""]["L"] = "";
	$fieldLabelsPMT_QUOTE[""]["M"] = "M";
	$fieldToolTipsPMT_QUOTE[""]["M"] = "";
	$placeHoldersPMT_QUOTE[""]["M"] = "";
	$fieldLabelsPMT_QUOTE[""]["N"] = "N";
	$fieldToolTipsPMT_QUOTE[""]["N"] = "";
	$placeHoldersPMT_QUOTE[""]["N"] = "";
	$fieldLabelsPMT_QUOTE[""]["O"] = "O";
	$fieldToolTipsPMT_QUOTE[""]["O"] = "";
	$placeHoldersPMT_QUOTE[""]["O"] = "";
	$fieldLabelsPMT_QUOTE[""]["P"] = "P";
	$fieldToolTipsPMT_QUOTE[""]["P"] = "";
	$placeHoldersPMT_QUOTE[""]["P"] = "";
	$fieldLabelsPMT_QUOTE[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_QUOTE[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_QUOTE[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_QUOTE[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_QUOTE[""]["APP_STATUS"] = "";
	$placeHoldersPMT_QUOTE[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_QUOTE[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_QUOTE[""]["ROW"] = "";
	$placeHoldersPMT_QUOTE[""]["ROW"] = "";
	$fieldLabelsPMT_QUOTE[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_QUOTE[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_QUOTE[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_QUOTE[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_QUOTE[""]["TIME"] = "";
	$placeHoldersPMT_QUOTE[""]["TIME"] = "";
	$fieldLabelsPMT_QUOTE[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_QUOTE[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_QUOTE[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_QUOTE[""]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_QUOTE[""]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_QUOTE[""]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_QUOTE[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_QUOTE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_QUOTE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_QUOTE[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_QUOTE[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_QUOTE[""]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_QUOTE[""]))
		$tdataPMT_QUOTE[".isUseToolTips"] = true;
}


	$tdataPMT_QUOTE[".NCSearch"] = true;



$tdataPMT_QUOTE[".shortTableName"] = "PMT_QUOTE";
$tdataPMT_QUOTE[".nSecOptions"] = 0;
$tdataPMT_QUOTE[".recsPerRowPrint"] = 1;
$tdataPMT_QUOTE[".mainTableOwnerID"] = "";
$tdataPMT_QUOTE[".moveNext"] = 1;
$tdataPMT_QUOTE[".entityType"] = 0;

$tdataPMT_QUOTE[".strOriginalTableName"] = "PMT_QUOTE";

	



$tdataPMT_QUOTE[".showAddInPopup"] = false;

$tdataPMT_QUOTE[".showEditInPopup"] = false;

$tdataPMT_QUOTE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_QUOTE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_QUOTE[".fieldsForRegister"] = array();
	
$tdataPMT_QUOTE[".listAjax"] = false;

	$tdataPMT_QUOTE[".audit"] = false;

	$tdataPMT_QUOTE[".locking"] = false;

$tdataPMT_QUOTE[".edit"] = true;
$tdataPMT_QUOTE[".afterEditAction"] = 1;
$tdataPMT_QUOTE[".closePopupAfterEdit"] = 1;
$tdataPMT_QUOTE[".afterEditActionDetTable"] = "";

$tdataPMT_QUOTE[".add"] = true;
$tdataPMT_QUOTE[".afterAddAction"] = 1;
$tdataPMT_QUOTE[".closePopupAfterAdd"] = 1;
$tdataPMT_QUOTE[".afterAddActionDetTable"] = "";

$tdataPMT_QUOTE[".list"] = true;



$tdataPMT_QUOTE[".reorderRecordsByHeader"] = true;



$tdataPMT_QUOTE[".view"] = true;

$tdataPMT_QUOTE[".import"] = true;

$tdataPMT_QUOTE[".exportTo"] = true;

$tdataPMT_QUOTE[".printFriendly"] = true;

$tdataPMT_QUOTE[".delete"] = true;

$tdataPMT_QUOTE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_QUOTE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_QUOTE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_QUOTE[".searchSaving"] = false;
//

$tdataPMT_QUOTE[".showSearchPanel"] = true;
		$tdataPMT_QUOTE[".flexibleSearch"] = true;

$tdataPMT_QUOTE[".isUseAjaxSuggest"] = true;

$tdataPMT_QUOTE[".rowHighlite"] = true;



				

$tdataPMT_QUOTE[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_QUOTE[".buttonsAdded"] = false;

$tdataPMT_QUOTE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_QUOTE[".isUseTimeForSearch"] = false;





$tdataPMT_QUOTE[".allSearchFields"] = array();
$tdataPMT_QUOTE[".filterFields"] = array();
$tdataPMT_QUOTE[".requiredSearchFields"] = array();

$tdataPMT_QUOTE[".allSearchFields"][] = "APP_UID";
	$tdataPMT_QUOTE[".allSearchFields"][] = "A";
	$tdataPMT_QUOTE[".allSearchFields"][] = "B";
	$tdataPMT_QUOTE[".allSearchFields"][] = "C";
	$tdataPMT_QUOTE[".allSearchFields"][] = "D";
	$tdataPMT_QUOTE[".allSearchFields"][] = "E";
	$tdataPMT_QUOTE[".allSearchFields"][] = "F";
	$tdataPMT_QUOTE[".allSearchFields"][] = "G";
	$tdataPMT_QUOTE[".allSearchFields"][] = "H";
	$tdataPMT_QUOTE[".allSearchFields"][] = "I";
	$tdataPMT_QUOTE[".allSearchFields"][] = "J";
	$tdataPMT_QUOTE[".allSearchFields"][] = "K";
	$tdataPMT_QUOTE[".allSearchFields"][] = "L";
	$tdataPMT_QUOTE[".allSearchFields"][] = "M";
	$tdataPMT_QUOTE[".allSearchFields"][] = "N";
	$tdataPMT_QUOTE[".allSearchFields"][] = "O";
	$tdataPMT_QUOTE[".allSearchFields"][] = "P";
	$tdataPMT_QUOTE[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_QUOTE[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_QUOTE[".allSearchFields"][] = "ROW";
	$tdataPMT_QUOTE[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_QUOTE[".allSearchFields"][] = "TIME";
	$tdataPMT_QUOTE[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_QUOTE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_17";
	$tdataPMT_QUOTE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_18";
	$tdataPMT_QUOTE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_19";
	

$tdataPMT_QUOTE[".googleLikeFields"] = array();
$tdataPMT_QUOTE[".googleLikeFields"][] = "APP_UID";
$tdataPMT_QUOTE[".googleLikeFields"][] = "A";
$tdataPMT_QUOTE[".googleLikeFields"][] = "B";
$tdataPMT_QUOTE[".googleLikeFields"][] = "C";
$tdataPMT_QUOTE[".googleLikeFields"][] = "D";
$tdataPMT_QUOTE[".googleLikeFields"][] = "E";
$tdataPMT_QUOTE[".googleLikeFields"][] = "F";
$tdataPMT_QUOTE[".googleLikeFields"][] = "G";
$tdataPMT_QUOTE[".googleLikeFields"][] = "H";
$tdataPMT_QUOTE[".googleLikeFields"][] = "I";
$tdataPMT_QUOTE[".googleLikeFields"][] = "J";
$tdataPMT_QUOTE[".googleLikeFields"][] = "K";
$tdataPMT_QUOTE[".googleLikeFields"][] = "L";
$tdataPMT_QUOTE[".googleLikeFields"][] = "M";
$tdataPMT_QUOTE[".googleLikeFields"][] = "N";
$tdataPMT_QUOTE[".googleLikeFields"][] = "O";
$tdataPMT_QUOTE[".googleLikeFields"][] = "P";
$tdataPMT_QUOTE[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".googleLikeFields"][] = "ROW";
$tdataPMT_QUOTE[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".googleLikeFields"][] = "TIME";
$tdataPMT_QUOTE[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_QUOTE[".advSearchFields"] = array();
$tdataPMT_QUOTE[".advSearchFields"][] = "APP_UID";
$tdataPMT_QUOTE[".advSearchFields"][] = "A";
$tdataPMT_QUOTE[".advSearchFields"][] = "B";
$tdataPMT_QUOTE[".advSearchFields"][] = "C";
$tdataPMT_QUOTE[".advSearchFields"][] = "D";
$tdataPMT_QUOTE[".advSearchFields"][] = "E";
$tdataPMT_QUOTE[".advSearchFields"][] = "F";
$tdataPMT_QUOTE[".advSearchFields"][] = "G";
$tdataPMT_QUOTE[".advSearchFields"][] = "H";
$tdataPMT_QUOTE[".advSearchFields"][] = "I";
$tdataPMT_QUOTE[".advSearchFields"][] = "J";
$tdataPMT_QUOTE[".advSearchFields"][] = "K";
$tdataPMT_QUOTE[".advSearchFields"][] = "L";
$tdataPMT_QUOTE[".advSearchFields"][] = "M";
$tdataPMT_QUOTE[".advSearchFields"][] = "N";
$tdataPMT_QUOTE[".advSearchFields"][] = "O";
$tdataPMT_QUOTE[".advSearchFields"][] = "P";
$tdataPMT_QUOTE[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".advSearchFields"][] = "ROW";
$tdataPMT_QUOTE[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".advSearchFields"][] = "TIME";
$tdataPMT_QUOTE[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".tableType"] = "list";

$tdataPMT_QUOTE[".printerPageOrientation"] = 0;
$tdataPMT_QUOTE[".nPrinterPageScale"] = 100;

$tdataPMT_QUOTE[".nPrinterSplitRecords"] = 40;

$tdataPMT_QUOTE[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_QUOTE[".geocodingEnabled"] = false;





$tdataPMT_QUOTE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_QUOTE[".pageSize"] = 20;

$tdataPMT_QUOTE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_QUOTE[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_QUOTE[".orderindexes"] = array();

$tdataPMT_QUOTE[".sqlHead"] = "SELECT APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$tdataPMT_QUOTE[".sqlFrom"] = "FROM PMT_QUOTE";
$tdataPMT_QUOTE[".sqlWhereExpr"] = "";
$tdataPMT_QUOTE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_QUOTE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_QUOTE[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_QUOTE[".highlightSearchResults"] = true;

$tableKeysPMT_QUOTE = array();
$tableKeysPMT_QUOTE[] = "APP_UID";
$tdataPMT_QUOTE[".Keys"] = $tableKeysPMT_QUOTE;

$tdataPMT_QUOTE[".listFields"] = array();
$tdataPMT_QUOTE[".listFields"][] = "APP_UID";
$tdataPMT_QUOTE[".listFields"][] = "A";
$tdataPMT_QUOTE[".listFields"][] = "B";
$tdataPMT_QUOTE[".listFields"][] = "C";
$tdataPMT_QUOTE[".listFields"][] = "D";
$tdataPMT_QUOTE[".listFields"][] = "E";
$tdataPMT_QUOTE[".listFields"][] = "F";
$tdataPMT_QUOTE[".listFields"][] = "G";
$tdataPMT_QUOTE[".listFields"][] = "H";
$tdataPMT_QUOTE[".listFields"][] = "I";
$tdataPMT_QUOTE[".listFields"][] = "J";
$tdataPMT_QUOTE[".listFields"][] = "K";
$tdataPMT_QUOTE[".listFields"][] = "L";
$tdataPMT_QUOTE[".listFields"][] = "M";
$tdataPMT_QUOTE[".listFields"][] = "N";
$tdataPMT_QUOTE[".listFields"][] = "O";
$tdataPMT_QUOTE[".listFields"][] = "P";
$tdataPMT_QUOTE[".listFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".listFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".listFields"][] = "ROW";
$tdataPMT_QUOTE[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".listFields"][] = "TIME";
$tdataPMT_QUOTE[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".listFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".listFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".listFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".hideMobileList"] = array();


$tdataPMT_QUOTE[".viewFields"] = array();
$tdataPMT_QUOTE[".viewFields"][] = "APP_UID";
$tdataPMT_QUOTE[".viewFields"][] = "A";
$tdataPMT_QUOTE[".viewFields"][] = "B";
$tdataPMT_QUOTE[".viewFields"][] = "C";
$tdataPMT_QUOTE[".viewFields"][] = "D";
$tdataPMT_QUOTE[".viewFields"][] = "E";
$tdataPMT_QUOTE[".viewFields"][] = "F";
$tdataPMT_QUOTE[".viewFields"][] = "G";
$tdataPMT_QUOTE[".viewFields"][] = "H";
$tdataPMT_QUOTE[".viewFields"][] = "I";
$tdataPMT_QUOTE[".viewFields"][] = "J";
$tdataPMT_QUOTE[".viewFields"][] = "K";
$tdataPMT_QUOTE[".viewFields"][] = "L";
$tdataPMT_QUOTE[".viewFields"][] = "M";
$tdataPMT_QUOTE[".viewFields"][] = "N";
$tdataPMT_QUOTE[".viewFields"][] = "O";
$tdataPMT_QUOTE[".viewFields"][] = "P";
$tdataPMT_QUOTE[".viewFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".viewFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".viewFields"][] = "ROW";
$tdataPMT_QUOTE[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".viewFields"][] = "TIME";
$tdataPMT_QUOTE[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".viewFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".viewFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".viewFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".addFields"] = array();
$tdataPMT_QUOTE[".addFields"][] = "A";
$tdataPMT_QUOTE[".addFields"][] = "B";
$tdataPMT_QUOTE[".addFields"][] = "C";
$tdataPMT_QUOTE[".addFields"][] = "D";
$tdataPMT_QUOTE[".addFields"][] = "E";
$tdataPMT_QUOTE[".addFields"][] = "F";
$tdataPMT_QUOTE[".addFields"][] = "G";
$tdataPMT_QUOTE[".addFields"][] = "H";
$tdataPMT_QUOTE[".addFields"][] = "I";
$tdataPMT_QUOTE[".addFields"][] = "J";
$tdataPMT_QUOTE[".addFields"][] = "K";
$tdataPMT_QUOTE[".addFields"][] = "L";
$tdataPMT_QUOTE[".addFields"][] = "M";
$tdataPMT_QUOTE[".addFields"][] = "N";
$tdataPMT_QUOTE[".addFields"][] = "O";
$tdataPMT_QUOTE[".addFields"][] = "P";
$tdataPMT_QUOTE[".addFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".addFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".addFields"][] = "ROW";
$tdataPMT_QUOTE[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".addFields"][] = "TIME";
$tdataPMT_QUOTE[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".addFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".addFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".addFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".masterListFields"] = array();
$tdataPMT_QUOTE[".masterListFields"][] = "APP_UID";
$tdataPMT_QUOTE[".masterListFields"][] = "A";
$tdataPMT_QUOTE[".masterListFields"][] = "B";
$tdataPMT_QUOTE[".masterListFields"][] = "C";
$tdataPMT_QUOTE[".masterListFields"][] = "D";
$tdataPMT_QUOTE[".masterListFields"][] = "E";
$tdataPMT_QUOTE[".masterListFields"][] = "F";
$tdataPMT_QUOTE[".masterListFields"][] = "G";
$tdataPMT_QUOTE[".masterListFields"][] = "H";
$tdataPMT_QUOTE[".masterListFields"][] = "I";
$tdataPMT_QUOTE[".masterListFields"][] = "J";
$tdataPMT_QUOTE[".masterListFields"][] = "K";
$tdataPMT_QUOTE[".masterListFields"][] = "L";
$tdataPMT_QUOTE[".masterListFields"][] = "M";
$tdataPMT_QUOTE[".masterListFields"][] = "N";
$tdataPMT_QUOTE[".masterListFields"][] = "O";
$tdataPMT_QUOTE[".masterListFields"][] = "P";
$tdataPMT_QUOTE[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".masterListFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".masterListFields"][] = "ROW";
$tdataPMT_QUOTE[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".masterListFields"][] = "TIME";
$tdataPMT_QUOTE[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".masterListFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".masterListFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".masterListFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".inlineAddFields"] = array();
$tdataPMT_QUOTE[".inlineAddFields"][] = "A";
$tdataPMT_QUOTE[".inlineAddFields"][] = "B";
$tdataPMT_QUOTE[".inlineAddFields"][] = "C";
$tdataPMT_QUOTE[".inlineAddFields"][] = "D";
$tdataPMT_QUOTE[".inlineAddFields"][] = "E";
$tdataPMT_QUOTE[".inlineAddFields"][] = "F";
$tdataPMT_QUOTE[".inlineAddFields"][] = "G";
$tdataPMT_QUOTE[".inlineAddFields"][] = "H";
$tdataPMT_QUOTE[".inlineAddFields"][] = "I";
$tdataPMT_QUOTE[".inlineAddFields"][] = "J";
$tdataPMT_QUOTE[".inlineAddFields"][] = "K";
$tdataPMT_QUOTE[".inlineAddFields"][] = "L";
$tdataPMT_QUOTE[".inlineAddFields"][] = "M";
$tdataPMT_QUOTE[".inlineAddFields"][] = "N";
$tdataPMT_QUOTE[".inlineAddFields"][] = "O";
$tdataPMT_QUOTE[".inlineAddFields"][] = "P";
$tdataPMT_QUOTE[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".inlineAddFields"][] = "ROW";
$tdataPMT_QUOTE[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".inlineAddFields"][] = "TIME";
$tdataPMT_QUOTE[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".editFields"] = array();
$tdataPMT_QUOTE[".editFields"][] = "A";
$tdataPMT_QUOTE[".editFields"][] = "B";
$tdataPMT_QUOTE[".editFields"][] = "C";
$tdataPMT_QUOTE[".editFields"][] = "D";
$tdataPMT_QUOTE[".editFields"][] = "E";
$tdataPMT_QUOTE[".editFields"][] = "F";
$tdataPMT_QUOTE[".editFields"][] = "G";
$tdataPMT_QUOTE[".editFields"][] = "H";
$tdataPMT_QUOTE[".editFields"][] = "I";
$tdataPMT_QUOTE[".editFields"][] = "J";
$tdataPMT_QUOTE[".editFields"][] = "K";
$tdataPMT_QUOTE[".editFields"][] = "L";
$tdataPMT_QUOTE[".editFields"][] = "M";
$tdataPMT_QUOTE[".editFields"][] = "N";
$tdataPMT_QUOTE[".editFields"][] = "O";
$tdataPMT_QUOTE[".editFields"][] = "P";
$tdataPMT_QUOTE[".editFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".editFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".editFields"][] = "ROW";
$tdataPMT_QUOTE[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".editFields"][] = "TIME";
$tdataPMT_QUOTE[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".editFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".editFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".editFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".inlineEditFields"] = array();
$tdataPMT_QUOTE[".inlineEditFields"][] = "A";
$tdataPMT_QUOTE[".inlineEditFields"][] = "B";
$tdataPMT_QUOTE[".inlineEditFields"][] = "C";
$tdataPMT_QUOTE[".inlineEditFields"][] = "D";
$tdataPMT_QUOTE[".inlineEditFields"][] = "E";
$tdataPMT_QUOTE[".inlineEditFields"][] = "F";
$tdataPMT_QUOTE[".inlineEditFields"][] = "G";
$tdataPMT_QUOTE[".inlineEditFields"][] = "H";
$tdataPMT_QUOTE[".inlineEditFields"][] = "I";
$tdataPMT_QUOTE[".inlineEditFields"][] = "J";
$tdataPMT_QUOTE[".inlineEditFields"][] = "K";
$tdataPMT_QUOTE[".inlineEditFields"][] = "L";
$tdataPMT_QUOTE[".inlineEditFields"][] = "M";
$tdataPMT_QUOTE[".inlineEditFields"][] = "N";
$tdataPMT_QUOTE[".inlineEditFields"][] = "O";
$tdataPMT_QUOTE[".inlineEditFields"][] = "P";
$tdataPMT_QUOTE[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".inlineEditFields"][] = "ROW";
$tdataPMT_QUOTE[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".inlineEditFields"][] = "TIME";
$tdataPMT_QUOTE[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".updateSelectedFields"] = array();
$tdataPMT_QUOTE[".updateSelectedFields"][] = "A";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "B";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "C";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "D";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "E";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "F";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "G";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "H";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "I";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "J";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "K";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "L";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "M";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "N";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "O";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "P";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "ROW";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "TIME";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_QUOTE[".exportFields"] = array();
$tdataPMT_QUOTE[".exportFields"][] = "APP_UID";
$tdataPMT_QUOTE[".exportFields"][] = "A";
$tdataPMT_QUOTE[".exportFields"][] = "B";
$tdataPMT_QUOTE[".exportFields"][] = "C";
$tdataPMT_QUOTE[".exportFields"][] = "D";
$tdataPMT_QUOTE[".exportFields"][] = "E";
$tdataPMT_QUOTE[".exportFields"][] = "F";
$tdataPMT_QUOTE[".exportFields"][] = "G";
$tdataPMT_QUOTE[".exportFields"][] = "H";
$tdataPMT_QUOTE[".exportFields"][] = "I";
$tdataPMT_QUOTE[".exportFields"][] = "J";
$tdataPMT_QUOTE[".exportFields"][] = "K";
$tdataPMT_QUOTE[".exportFields"][] = "L";
$tdataPMT_QUOTE[".exportFields"][] = "M";
$tdataPMT_QUOTE[".exportFields"][] = "N";
$tdataPMT_QUOTE[".exportFields"][] = "O";
$tdataPMT_QUOTE[".exportFields"][] = "P";
$tdataPMT_QUOTE[".exportFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".exportFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".exportFields"][] = "ROW";
$tdataPMT_QUOTE[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".exportFields"][] = "TIME";
$tdataPMT_QUOTE[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".exportFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".exportFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".exportFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".importFields"] = array();
$tdataPMT_QUOTE[".importFields"][] = "APP_UID";
$tdataPMT_QUOTE[".importFields"][] = "A";
$tdataPMT_QUOTE[".importFields"][] = "B";
$tdataPMT_QUOTE[".importFields"][] = "C";
$tdataPMT_QUOTE[".importFields"][] = "D";
$tdataPMT_QUOTE[".importFields"][] = "E";
$tdataPMT_QUOTE[".importFields"][] = "F";
$tdataPMT_QUOTE[".importFields"][] = "G";
$tdataPMT_QUOTE[".importFields"][] = "H";
$tdataPMT_QUOTE[".importFields"][] = "I";
$tdataPMT_QUOTE[".importFields"][] = "J";
$tdataPMT_QUOTE[".importFields"][] = "K";
$tdataPMT_QUOTE[".importFields"][] = "L";
$tdataPMT_QUOTE[".importFields"][] = "M";
$tdataPMT_QUOTE[".importFields"][] = "N";
$tdataPMT_QUOTE[".importFields"][] = "O";
$tdataPMT_QUOTE[".importFields"][] = "P";
$tdataPMT_QUOTE[".importFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".importFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".importFields"][] = "ROW";
$tdataPMT_QUOTE[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".importFields"][] = "TIME";
$tdataPMT_QUOTE[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".importFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".importFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".importFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE[".printFields"] = array();
$tdataPMT_QUOTE[".printFields"][] = "APP_UID";
$tdataPMT_QUOTE[".printFields"][] = "A";
$tdataPMT_QUOTE[".printFields"][] = "B";
$tdataPMT_QUOTE[".printFields"][] = "C";
$tdataPMT_QUOTE[".printFields"][] = "D";
$tdataPMT_QUOTE[".printFields"][] = "E";
$tdataPMT_QUOTE[".printFields"][] = "F";
$tdataPMT_QUOTE[".printFields"][] = "G";
$tdataPMT_QUOTE[".printFields"][] = "H";
$tdataPMT_QUOTE[".printFields"][] = "I";
$tdataPMT_QUOTE[".printFields"][] = "J";
$tdataPMT_QUOTE[".printFields"][] = "K";
$tdataPMT_QUOTE[".printFields"][] = "L";
$tdataPMT_QUOTE[".printFields"][] = "M";
$tdataPMT_QUOTE[".printFields"][] = "N";
$tdataPMT_QUOTE[".printFields"][] = "O";
$tdataPMT_QUOTE[".printFields"][] = "P";
$tdataPMT_QUOTE[".printFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE[".printFields"][] = "APP_STATUS";
$tdataPMT_QUOTE[".printFields"][] = "ROW";
$tdataPMT_QUOTE[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE[".printFields"][] = "TIME";
$tdataPMT_QUOTE[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE[".printFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE[".printFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE[".printFields"][] = "BUSINESS_CONFIRMATION_19";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","APP_UID");
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




	$tdataPMT_QUOTE["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","A");
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




	$tdataPMT_QUOTE["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","B");
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




	$tdataPMT_QUOTE["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","C");
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




	$tdataPMT_QUOTE["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","D");
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




	$tdataPMT_QUOTE["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","E");
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




	$tdataPMT_QUOTE["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","F");
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




	$tdataPMT_QUOTE["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","G");
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




	$tdataPMT_QUOTE["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","H");
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




	$tdataPMT_QUOTE["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","I");
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




	$tdataPMT_QUOTE["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","J");
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




	$tdataPMT_QUOTE["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","K");
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




	$tdataPMT_QUOTE["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","L");
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




	$tdataPMT_QUOTE["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","M");
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




	$tdataPMT_QUOTE["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","N");
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




	$tdataPMT_QUOTE["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","O");
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




	$tdataPMT_QUOTE["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","P");
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




	$tdataPMT_QUOTE["P"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","APP_NUMBER");
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




	$tdataPMT_QUOTE["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","APP_STATUS");
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




	$tdataPMT_QUOTE["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","ROW");
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




	$tdataPMT_QUOTE["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","EMPLOYEE_NO");
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




	$tdataPMT_QUOTE["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","TIME");
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




	$tdataPMT_QUOTE["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","MONTHLY_REPORT");
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




	$tdataPMT_QUOTE["MONTHLY_REPORT"] = $fdata;
//	BUSINESS_CONFIRMATION_17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","BUSINESS_CONFIRMATION_17");
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




	$tdataPMT_QUOTE["BUSINESS_CONFIRMATION_17"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","BUSINESS_CONFIRMATION_18");
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




	$tdataPMT_QUOTE["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_QUOTE";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE","BUSINESS_CONFIRMATION_19");
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




	$tdataPMT_QUOTE["BUSINESS_CONFIRMATION_19"] = $fdata;


$tables_data["PMT_QUOTE"]=&$tdataPMT_QUOTE;
$field_labels["PMT_QUOTE"] = &$fieldLabelsPMT_QUOTE;
$fieldToolTips["PMT_QUOTE"] = &$fieldToolTipsPMT_QUOTE;
$placeHolders["PMT_QUOTE"] = &$placeHoldersPMT_QUOTE;
$page_titles["PMT_QUOTE"] = &$pageTitlesPMT_QUOTE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_QUOTE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_QUOTE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_QUOTE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$proto0["m_strFrom"] = "FROM PMT_QUOTE";
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
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_QUOTE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto8["m_sql"] = "A";
$proto8["m_srcTableName"] = "PMT_QUOTE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto10["m_sql"] = "B";
$proto10["m_srcTableName"] = "PMT_QUOTE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto12["m_sql"] = "C";
$proto12["m_srcTableName"] = "PMT_QUOTE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto14["m_sql"] = "D";
$proto14["m_srcTableName"] = "PMT_QUOTE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto16["m_sql"] = "E";
$proto16["m_srcTableName"] = "PMT_QUOTE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto18["m_sql"] = "F";
$proto18["m_srcTableName"] = "PMT_QUOTE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto20["m_sql"] = "G";
$proto20["m_srcTableName"] = "PMT_QUOTE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto22["m_sql"] = "H";
$proto22["m_srcTableName"] = "PMT_QUOTE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto24["m_sql"] = "I";
$proto24["m_srcTableName"] = "PMT_QUOTE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto26["m_sql"] = "J";
$proto26["m_srcTableName"] = "PMT_QUOTE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto28["m_sql"] = "K";
$proto28["m_srcTableName"] = "PMT_QUOTE";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto30["m_sql"] = "L";
$proto30["m_srcTableName"] = "PMT_QUOTE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto32["m_sql"] = "M";
$proto32["m_srcTableName"] = "PMT_QUOTE";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto34["m_sql"] = "N";
$proto34["m_srcTableName"] = "PMT_QUOTE";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto36["m_sql"] = "O";
$proto36["m_srcTableName"] = "PMT_QUOTE";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto38["m_sql"] = "P";
$proto38["m_srcTableName"] = "PMT_QUOTE";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto40["m_sql"] = "APP_NUMBER";
$proto40["m_srcTableName"] = "PMT_QUOTE";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto42["m_sql"] = "APP_STATUS";
$proto42["m_srcTableName"] = "PMT_QUOTE";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto44["m_sql"] = "`ROW`";
$proto44["m_srcTableName"] = "PMT_QUOTE";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto46["m_sql"] = "EMPLOYEE_NO";
$proto46["m_srcTableName"] = "PMT_QUOTE";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto48["m_sql"] = "`TIME`";
$proto48["m_srcTableName"] = "PMT_QUOTE";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto50["m_sql"] = "MONTHLY_REPORT";
$proto50["m_srcTableName"] = "PMT_QUOTE";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_17",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto52["m_sql"] = "BUSINESS_CONFIRMATION_17";
$proto52["m_srcTableName"] = "PMT_QUOTE";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto54["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto54["m_srcTableName"] = "PMT_QUOTE";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_QUOTE",
	"m_srcTableName" => "PMT_QUOTE"
));

$proto56["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto56["m_srcTableName"] = "PMT_QUOTE";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_QUOTE";
$proto59["m_srcTableName"] = "PMT_QUOTE";
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
$proto58["m_sql"] = "PMT_QUOTE";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_QUOTE";
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
$proto0["m_srcTableName"]="PMT_QUOTE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_QUOTE = createSqlQuery_PMT_QUOTE();


	
						;

																										

$tdataPMT_QUOTE[".sqlquery"] = $queryData_PMT_QUOTE;

$tableEvents["PMT_QUOTE"] = new eventsBase;
$tdataPMT_QUOTE[".hasEvents"] = false;

?>
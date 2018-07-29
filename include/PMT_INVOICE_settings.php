<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_INVOICE = array();
	$tdataPMT_INVOICE[".truncateText"] = true;
	$tdataPMT_INVOICE[".NumberOfChars"] = 80;
	$tdataPMT_INVOICE[".ShortName"] = "PMT_INVOICE";
	$tdataPMT_INVOICE[".OwnerID"] = "";
	$tdataPMT_INVOICE[".OriginalTable"] = "PMT_INVOICE";

//	field labels
$fieldLabelsPMT_INVOICE = array();
$fieldToolTipsPMT_INVOICE = array();
$pageTitlesPMT_INVOICE = array();
$placeHoldersPMT_INVOICE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_INVOICE["Japanese"] = array();
	$fieldToolTipsPMT_INVOICE["Japanese"] = array();
	$placeHoldersPMT_INVOICE["Japanese"] = array();
	$pageTitlesPMT_INVOICE["Japanese"] = array();
	$fieldLabelsPMT_INVOICE["Japanese"]["APP_UID"] = "ユニークID";
	$fieldToolTipsPMT_INVOICE["Japanese"]["APP_UID"] = "テキストエリア";
	$placeHoldersPMT_INVOICE["Japanese"]["APP_UID"] = "おなまえ";
	$fieldLabelsPMT_INVOICE["Japanese"]["TOTAL_FEE"] = "合計金額";
	$fieldToolTipsPMT_INVOICE["Japanese"]["TOTAL_FEE"] = "テキストエリア";
	$placeHoldersPMT_INVOICE["Japanese"]["TOTAL_FEE"] = "たんとうぶ";
	$fieldLabelsPMT_INVOICE["Japanese"]["PAYMENT_DEADLINE"] = "お支払期限";
	$fieldToolTipsPMT_INVOICE["Japanese"]["PAYMENT_DEADLINE"] = "テキスト";
	$placeHoldersPMT_INVOICE["Japanese"]["PAYMENT_DEADLINE"] = "みつもりばんごう";
	$fieldLabelsPMT_INVOICE["Japanese"]["COMPANY"] = "会社";
	$fieldToolTipsPMT_INVOICE["Japanese"]["COMPANY"] = "テキストエリア";
	$placeHoldersPMT_INVOICE["Japanese"]["COMPANY"] = " 0)	";
	$fieldLabelsPMT_INVOICE["Japanese"]["POSTAL_CODE"] = "郵便番号";
	$fieldToolTipsPMT_INVOICE["Japanese"]["POSTAL_CODE"] = "テキストエリア";
	$placeHoldersPMT_INVOICE["Japanese"]["POSTAL_CODE"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["PREFECTURES"] = "都道府県";
	$fieldToolTipsPMT_INVOICE["Japanese"]["PREFECTURES"] = "テキスト";
	$placeHoldersPMT_INVOICE["Japanese"]["PREFECTURES"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["TOWNS_AND_VILLAGES"] = "町村";
	$fieldToolTipsPMT_INVOICE["Japanese"]["TOWNS_AND_VILLAGES"] = "時間表示";
	$placeHoldersPMT_INVOICE["Japanese"]["TOWNS_AND_VILLAGES"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["REMARKS"] = "備考";
	$fieldToolTipsPMT_INVOICE["Japanese"]["REMARKS"] = "テキスト";
	$placeHoldersPMT_INVOICE["Japanese"]["REMARKS"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["SUBTOTAL"] = "小計";
	$fieldToolTipsPMT_INVOICE["Japanese"]["SUBTOTAL"] = "テキスト";
	$placeHoldersPMT_INVOICE["Japanese"]["SUBTOTAL"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["TAX_RATE"] = "税率";
	$fieldToolTipsPMT_INVOICE["Japanese"]["TAX_RATE"] = "テキスト";
	$placeHoldersPMT_INVOICE["Japanese"]["TAX_RATE"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["CONSUMPTION_TAX"] = "消費税";
	$fieldToolTipsPMT_INVOICE["Japanese"]["CONSUMPTION_TAX"] = "テキスト";
	$placeHoldersPMT_INVOICE["Japanese"]["CONSUMPTION_TAX"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["TOTAL"] = "合計";
	$fieldToolTipsPMT_INVOICE["Japanese"]["TOTAL"] = "テキスト";
	$placeHoldersPMT_INVOICE["Japanese"]["TOTAL"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_INVOICE["Japanese"]["PAYMENT_DEADLINE_2"] = "お支払期限";
	$fieldToolTipsPMT_INVOICE["Japanese"]["PAYMENT_DEADLINE_2"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["PAYMENT_DEADLINE_2"] = " concurrent data structures";
	$fieldLabelsPMT_INVOICE["Japanese"]["NAME"] = "品名";
	$fieldToolTipsPMT_INVOICE["Japanese"]["NAME"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["NAME"] = "説明１";
	$fieldLabelsPMT_INVOICE["Japanese"]["QUANTITY"] = "数量";
	$fieldToolTipsPMT_INVOICE["Japanese"]["QUANTITY"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["QUANTITY"] = "説明１";
	$fieldLabelsPMT_INVOICE["Japanese"]["QUANTITY_2"] = "数量2";
	$fieldToolTipsPMT_INVOICE["Japanese"]["QUANTITY_2"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["QUANTITY_2"] = "説明１";
	$fieldLabelsPMT_INVOICE["Japanese"]["UNIT_PRICE"] = "単価";
	$fieldToolTipsPMT_INVOICE["Japanese"]["UNIT_PRICE"] = "テキストエリア";
	$placeHoldersPMT_INVOICE["Japanese"]["UNIT_PRICE"] = "[1-9]{0.12}";
	$fieldLabelsPMT_INVOICE["Japanese"]["APP_NUMBER"] = "その他の支出";
	$fieldToolTipsPMT_INVOICE["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_INVOICE["Japanese"]["APP_STATUS"] = "just Close";
	$fieldToolTipsPMT_INVOICE["Japanese"]["APP_STATUS"] = "テキストエリア";
	$placeHoldersPMT_INVOICE["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_INVOICE["Japanese"]["ROW"] = "代理人住所";
	$fieldToolTipsPMT_INVOICE["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["ROW"] = "[a-z]+";
	$fieldLabelsPMT_INVOICE["Japanese"]["EMPLOYEE_NO"] = "代理人電話";
	$fieldToolTipsPMT_INVOICE["Japanese"]["EMPLOYEE_NO"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["EMPLOYEE_NO"] = "yyyy-mm-dd";
	$fieldLabelsPMT_INVOICE["Japanese"]["TIME"] = "代理店指名";
	$fieldToolTipsPMT_INVOICE["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_INVOICE["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_INVOICE["Japanese"]["MONTHLY_REPORT"] = "被保険者との関係";
	$fieldToolTipsPMT_INVOICE["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_INVOICE["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_INVOICE["Japanese"]["AMOUNT_OF_MONEY"] = "電話番号";
	$fieldToolTipsPMT_INVOICE["Japanese"]["AMOUNT_OF_MONEY"] = "リストボックス";
	$placeHoldersPMT_INVOICE["Japanese"]["AMOUNT_OF_MONEY"] = "説明１";
	$fieldLabelsPMT_INVOICE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "住所1";
	$fieldToolTipsPMT_INVOICE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "リストボックス";
	$placeHoldersPMT_INVOICE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "説明１";
	$fieldLabelsPMT_INVOICE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "住所に";
	$fieldToolTipsPMT_INVOICE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "リストボックス";
	$placeHoldersPMT_INVOICE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "説明１";
	$fieldLabelsPMT_INVOICE["Japanese"]["L50"] = "L50";
	$fieldToolTipsPMT_INVOICE["Japanese"]["L50"] = "";
	$placeHoldersPMT_INVOICE["Japanese"]["L50"] = "";
	$fieldLabelsPMT_INVOICE["Japanese"]["O48"] = "O48";
	$fieldToolTipsPMT_INVOICE["Japanese"]["O48"] = "";
	$placeHoldersPMT_INVOICE["Japanese"]["O48"] = "";
	$fieldLabelsPMT_INVOICE["Japanese"]["O49"] = "O49";
	$fieldToolTipsPMT_INVOICE["Japanese"]["O49"] = "";
	$placeHoldersPMT_INVOICE["Japanese"]["O49"] = "";
	$fieldLabelsPMT_INVOICE["Japanese"]["O50"] = "O50";
	$fieldToolTipsPMT_INVOICE["Japanese"]["O50"] = "";
	$placeHoldersPMT_INVOICE["Japanese"]["O50"] = "";
	$fieldLabelsPMT_INVOICE["Japanese"]["O51"] = "O51";
	$fieldToolTipsPMT_INVOICE["Japanese"]["O51"] = "";
	$placeHoldersPMT_INVOICE["Japanese"]["O51"] = "";
	$fieldLabelsPMT_INVOICE["Japanese"]["O52"] = "O52";
	$fieldToolTipsPMT_INVOICE["Japanese"]["O52"] = "";
	$placeHoldersPMT_INVOICE["Japanese"]["O52"] = "";
	if (count($fieldToolTipsPMT_INVOICE["Japanese"]))
		$tdataPMT_INVOICE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_INVOICE["English"] = array();
	$fieldToolTipsPMT_INVOICE["English"] = array();
	$placeHoldersPMT_INVOICE["English"] = array();
	$pageTitlesPMT_INVOICE["English"] = array();
	$fieldLabelsPMT_INVOICE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_INVOICE["English"]["APP_UID"] = "";
	$placeHoldersPMT_INVOICE["English"]["APP_UID"] = "";
	$fieldLabelsPMT_INVOICE["English"]["TOTAL_FEE"] = "TOTAL FEE";
	$fieldToolTipsPMT_INVOICE["English"]["TOTAL_FEE"] = "";
	$placeHoldersPMT_INVOICE["English"]["TOTAL_FEE"] = "";
	$fieldLabelsPMT_INVOICE["English"]["PAYMENT_DEADLINE"] = "PAYMENT DEADLINE";
	$fieldToolTipsPMT_INVOICE["English"]["PAYMENT_DEADLINE"] = "";
	$placeHoldersPMT_INVOICE["English"]["PAYMENT_DEADLINE"] = "";
	$fieldLabelsPMT_INVOICE["English"]["COMPANY"] = "COMPANY";
	$fieldToolTipsPMT_INVOICE["English"]["COMPANY"] = "";
	$placeHoldersPMT_INVOICE["English"]["COMPANY"] = "";
	$fieldLabelsPMT_INVOICE["English"]["POSTAL_CODE"] = "POSTAL CODE";
	$fieldToolTipsPMT_INVOICE["English"]["POSTAL_CODE"] = "";
	$placeHoldersPMT_INVOICE["English"]["POSTAL_CODE"] = "";
	$fieldLabelsPMT_INVOICE["English"]["PREFECTURES"] = "PREFECTURES";
	$fieldToolTipsPMT_INVOICE["English"]["PREFECTURES"] = "";
	$placeHoldersPMT_INVOICE["English"]["PREFECTURES"] = "";
	$fieldLabelsPMT_INVOICE["English"]["TOWNS_AND_VILLAGES"] = "TOWNS AND VILLAGES";
	$fieldToolTipsPMT_INVOICE["English"]["TOWNS_AND_VILLAGES"] = "";
	$placeHoldersPMT_INVOICE["English"]["TOWNS_AND_VILLAGES"] = "";
	$fieldLabelsPMT_INVOICE["English"]["REMARKS"] = "REMARKS";
	$fieldToolTipsPMT_INVOICE["English"]["REMARKS"] = "";
	$placeHoldersPMT_INVOICE["English"]["REMARKS"] = "";
	$fieldLabelsPMT_INVOICE["English"]["SUBTOTAL"] = "SUBTOTAL";
	$fieldToolTipsPMT_INVOICE["English"]["SUBTOTAL"] = "";
	$placeHoldersPMT_INVOICE["English"]["SUBTOTAL"] = "";
	$fieldLabelsPMT_INVOICE["English"]["TAX_RATE"] = "TAX RATE";
	$fieldToolTipsPMT_INVOICE["English"]["TAX_RATE"] = "";
	$placeHoldersPMT_INVOICE["English"]["TAX_RATE"] = "";
	$fieldLabelsPMT_INVOICE["English"]["CONSUMPTION_TAX"] = "CONSUMPTION TAX";
	$fieldToolTipsPMT_INVOICE["English"]["CONSUMPTION_TAX"] = "";
	$placeHoldersPMT_INVOICE["English"]["CONSUMPTION_TAX"] = "";
	$fieldLabelsPMT_INVOICE["English"]["TOTAL"] = "TOTAL";
	$fieldToolTipsPMT_INVOICE["English"]["TOTAL"] = "";
	$placeHoldersPMT_INVOICE["English"]["TOTAL"] = "";
	$fieldLabelsPMT_INVOICE["English"]["PAYMENT_DEADLINE_2"] = "PAYMENT DEADLINE 2";
	$fieldToolTipsPMT_INVOICE["English"]["PAYMENT_DEADLINE_2"] = "";
	$placeHoldersPMT_INVOICE["English"]["PAYMENT_DEADLINE_2"] = "";
	$fieldLabelsPMT_INVOICE["English"]["NAME"] = "NAME";
	$fieldToolTipsPMT_INVOICE["English"]["NAME"] = "";
	$placeHoldersPMT_INVOICE["English"]["NAME"] = "";
	$fieldLabelsPMT_INVOICE["English"]["QUANTITY"] = "QUANTITY";
	$fieldToolTipsPMT_INVOICE["English"]["QUANTITY"] = "";
	$placeHoldersPMT_INVOICE["English"]["QUANTITY"] = "";
	$fieldLabelsPMT_INVOICE["English"]["QUANTITY_2"] = "QUANTITY 2";
	$fieldToolTipsPMT_INVOICE["English"]["QUANTITY_2"] = "";
	$placeHoldersPMT_INVOICE["English"]["QUANTITY_2"] = "";
	$fieldLabelsPMT_INVOICE["English"]["UNIT_PRICE"] = "UNIT PRICE";
	$fieldToolTipsPMT_INVOICE["English"]["UNIT_PRICE"] = "";
	$placeHoldersPMT_INVOICE["English"]["UNIT_PRICE"] = "";
	$fieldLabelsPMT_INVOICE["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_INVOICE["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_INVOICE["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_INVOICE["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_INVOICE["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_INVOICE["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_INVOICE["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_INVOICE["English"]["ROW"] = "";
	$placeHoldersPMT_INVOICE["English"]["ROW"] = "";
	$fieldLabelsPMT_INVOICE["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_INVOICE["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_INVOICE["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_INVOICE["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_INVOICE["English"]["TIME"] = "";
	$placeHoldersPMT_INVOICE["English"]["TIME"] = "";
	$fieldLabelsPMT_INVOICE["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_INVOICE["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_INVOICE["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_INVOICE["English"]["AMOUNT_OF_MONEY"] = "AMOUNT OF MONEY";
	$fieldToolTipsPMT_INVOICE["English"]["AMOUNT_OF_MONEY"] = "";
	$placeHoldersPMT_INVOICE["English"]["AMOUNT_OF_MONEY"] = "";
	$fieldLabelsPMT_INVOICE["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_INVOICE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_INVOICE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_INVOICE["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_INVOICE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_INVOICE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$fieldLabelsPMT_INVOICE["English"]["L50"] = "L50";
	$fieldToolTipsPMT_INVOICE["English"]["L50"] = "";
	$placeHoldersPMT_INVOICE["English"]["L50"] = "";
	$fieldLabelsPMT_INVOICE["English"]["O48"] = "O48";
	$fieldToolTipsPMT_INVOICE["English"]["O48"] = "";
	$placeHoldersPMT_INVOICE["English"]["O48"] = "";
	$fieldLabelsPMT_INVOICE["English"]["O49"] = "O49";
	$fieldToolTipsPMT_INVOICE["English"]["O49"] = "";
	$placeHoldersPMT_INVOICE["English"]["O49"] = "";
	$fieldLabelsPMT_INVOICE["English"]["O50"] = "O50";
	$fieldToolTipsPMT_INVOICE["English"]["O50"] = "";
	$placeHoldersPMT_INVOICE["English"]["O50"] = "";
	$fieldLabelsPMT_INVOICE["English"]["O51"] = "O51";
	$fieldToolTipsPMT_INVOICE["English"]["O51"] = "";
	$placeHoldersPMT_INVOICE["English"]["O51"] = "";
	$fieldLabelsPMT_INVOICE["English"]["O52"] = "O52";
	$fieldToolTipsPMT_INVOICE["English"]["O52"] = "";
	$placeHoldersPMT_INVOICE["English"]["O52"] = "";
	if (count($fieldToolTipsPMT_INVOICE["English"]))
		$tdataPMT_INVOICE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_INVOICE[""] = array();
	$fieldToolTipsPMT_INVOICE[""] = array();
	$placeHoldersPMT_INVOICE[""] = array();
	$pageTitlesPMT_INVOICE[""] = array();
	$fieldLabelsPMT_INVOICE[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_INVOICE[""]["APP_UID"] = "";
	$placeHoldersPMT_INVOICE[""]["APP_UID"] = "";
	$fieldLabelsPMT_INVOICE[""]["TOTAL_FEE"] = "TOTAL FEE";
	$fieldToolTipsPMT_INVOICE[""]["TOTAL_FEE"] = "";
	$placeHoldersPMT_INVOICE[""]["TOTAL_FEE"] = "";
	$fieldLabelsPMT_INVOICE[""]["PAYMENT_DEADLINE"] = "PAYMENT DEADLINE";
	$fieldToolTipsPMT_INVOICE[""]["PAYMENT_DEADLINE"] = "";
	$placeHoldersPMT_INVOICE[""]["PAYMENT_DEADLINE"] = "";
	$fieldLabelsPMT_INVOICE[""]["COMPANY"] = "COMPANY";
	$fieldToolTipsPMT_INVOICE[""]["COMPANY"] = "";
	$placeHoldersPMT_INVOICE[""]["COMPANY"] = "";
	$fieldLabelsPMT_INVOICE[""]["POSTAL_CODE"] = "POSTAL CODE";
	$fieldToolTipsPMT_INVOICE[""]["POSTAL_CODE"] = "";
	$placeHoldersPMT_INVOICE[""]["POSTAL_CODE"] = "";
	$fieldLabelsPMT_INVOICE[""]["PREFECTURES"] = "PREFECTURES";
	$fieldToolTipsPMT_INVOICE[""]["PREFECTURES"] = "";
	$placeHoldersPMT_INVOICE[""]["PREFECTURES"] = "";
	$fieldLabelsPMT_INVOICE[""]["TOWNS_AND_VILLAGES"] = "TOWNS AND VILLAGES";
	$fieldToolTipsPMT_INVOICE[""]["TOWNS_AND_VILLAGES"] = "";
	$placeHoldersPMT_INVOICE[""]["TOWNS_AND_VILLAGES"] = "";
	$fieldLabelsPMT_INVOICE[""]["REMARKS"] = "REMARKS";
	$fieldToolTipsPMT_INVOICE[""]["REMARKS"] = "";
	$placeHoldersPMT_INVOICE[""]["REMARKS"] = "";
	$fieldLabelsPMT_INVOICE[""]["SUBTOTAL"] = "SUBTOTAL";
	$fieldToolTipsPMT_INVOICE[""]["SUBTOTAL"] = "";
	$placeHoldersPMT_INVOICE[""]["SUBTOTAL"] = "";
	$fieldLabelsPMT_INVOICE[""]["TAX_RATE"] = "TAX RATE";
	$fieldToolTipsPMT_INVOICE[""]["TAX_RATE"] = "";
	$placeHoldersPMT_INVOICE[""]["TAX_RATE"] = "";
	$fieldLabelsPMT_INVOICE[""]["CONSUMPTION_TAX"] = "CONSUMPTION TAX";
	$fieldToolTipsPMT_INVOICE[""]["CONSUMPTION_TAX"] = "";
	$placeHoldersPMT_INVOICE[""]["CONSUMPTION_TAX"] = "";
	$fieldLabelsPMT_INVOICE[""]["TOTAL"] = "TOTAL";
	$fieldToolTipsPMT_INVOICE[""]["TOTAL"] = "";
	$placeHoldersPMT_INVOICE[""]["TOTAL"] = "";
	$fieldLabelsPMT_INVOICE[""]["PAYMENT_DEADLINE_2"] = "PAYMENT DEADLINE 2";
	$fieldToolTipsPMT_INVOICE[""]["PAYMENT_DEADLINE_2"] = "";
	$placeHoldersPMT_INVOICE[""]["PAYMENT_DEADLINE_2"] = "";
	$fieldLabelsPMT_INVOICE[""]["NAME"] = "NAME";
	$fieldToolTipsPMT_INVOICE[""]["NAME"] = "";
	$placeHoldersPMT_INVOICE[""]["NAME"] = "";
	$fieldLabelsPMT_INVOICE[""]["QUANTITY"] = "QUANTITY";
	$fieldToolTipsPMT_INVOICE[""]["QUANTITY"] = "";
	$placeHoldersPMT_INVOICE[""]["QUANTITY"] = "";
	$fieldLabelsPMT_INVOICE[""]["QUANTITY_2"] = "QUANTITY 2";
	$fieldToolTipsPMT_INVOICE[""]["QUANTITY_2"] = "";
	$placeHoldersPMT_INVOICE[""]["QUANTITY_2"] = "";
	$fieldLabelsPMT_INVOICE[""]["UNIT_PRICE"] = "UNIT PRICE";
	$fieldToolTipsPMT_INVOICE[""]["UNIT_PRICE"] = "";
	$placeHoldersPMT_INVOICE[""]["UNIT_PRICE"] = "";
	$fieldLabelsPMT_INVOICE[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_INVOICE[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_INVOICE[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_INVOICE[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_INVOICE[""]["APP_STATUS"] = "";
	$placeHoldersPMT_INVOICE[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_INVOICE[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_INVOICE[""]["ROW"] = "";
	$placeHoldersPMT_INVOICE[""]["ROW"] = "";
	$fieldLabelsPMT_INVOICE[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_INVOICE[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_INVOICE[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_INVOICE[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_INVOICE[""]["TIME"] = "";
	$placeHoldersPMT_INVOICE[""]["TIME"] = "";
	$fieldLabelsPMT_INVOICE[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_INVOICE[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_INVOICE[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_INVOICE[""]["AMOUNT_OF_MONEY"] = "AMOUNT OF MONEY";
	$fieldToolTipsPMT_INVOICE[""]["AMOUNT_OF_MONEY"] = "";
	$placeHoldersPMT_INVOICE[""]["AMOUNT_OF_MONEY"] = "";
	$fieldLabelsPMT_INVOICE[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_INVOICE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_INVOICE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_INVOICE[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_INVOICE[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_INVOICE[""]["BUSINESS_CONFIRMATION_19"] = "";
	$fieldLabelsPMT_INVOICE[""]["L50"] = "L50";
	$fieldToolTipsPMT_INVOICE[""]["L50"] = "";
	$placeHoldersPMT_INVOICE[""]["L50"] = "";
	$fieldLabelsPMT_INVOICE[""]["O48"] = "O48";
	$fieldToolTipsPMT_INVOICE[""]["O48"] = "";
	$placeHoldersPMT_INVOICE[""]["O48"] = "";
	$fieldLabelsPMT_INVOICE[""]["O49"] = "O49";
	$fieldToolTipsPMT_INVOICE[""]["O49"] = "";
	$placeHoldersPMT_INVOICE[""]["O49"] = "";
	$fieldLabelsPMT_INVOICE[""]["O50"] = "O50";
	$fieldToolTipsPMT_INVOICE[""]["O50"] = "";
	$placeHoldersPMT_INVOICE[""]["O50"] = "";
	$fieldLabelsPMT_INVOICE[""]["O51"] = "O51";
	$fieldToolTipsPMT_INVOICE[""]["O51"] = "";
	$placeHoldersPMT_INVOICE[""]["O51"] = "";
	$fieldLabelsPMT_INVOICE[""]["O52"] = "O52";
	$fieldToolTipsPMT_INVOICE[""]["O52"] = "";
	$placeHoldersPMT_INVOICE[""]["O52"] = "";
	if (count($fieldToolTipsPMT_INVOICE[""]))
		$tdataPMT_INVOICE[".isUseToolTips"] = true;
}


	$tdataPMT_INVOICE[".NCSearch"] = true;



$tdataPMT_INVOICE[".shortTableName"] = "PMT_INVOICE";
$tdataPMT_INVOICE[".nSecOptions"] = 0;
$tdataPMT_INVOICE[".recsPerRowPrint"] = 1;
$tdataPMT_INVOICE[".mainTableOwnerID"] = "";
$tdataPMT_INVOICE[".moveNext"] = 1;
$tdataPMT_INVOICE[".entityType"] = 0;

$tdataPMT_INVOICE[".strOriginalTableName"] = "PMT_INVOICE";

	



$tdataPMT_INVOICE[".showAddInPopup"] = false;

$tdataPMT_INVOICE[".showEditInPopup"] = false;

$tdataPMT_INVOICE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_INVOICE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_INVOICE[".fieldsForRegister"] = array();
	
$tdataPMT_INVOICE[".listAjax"] = false;

	$tdataPMT_INVOICE[".audit"] = false;

	$tdataPMT_INVOICE[".locking"] = false;

$tdataPMT_INVOICE[".edit"] = true;
$tdataPMT_INVOICE[".afterEditAction"] = 1;
$tdataPMT_INVOICE[".closePopupAfterEdit"] = 1;
$tdataPMT_INVOICE[".afterEditActionDetTable"] = "";

$tdataPMT_INVOICE[".add"] = true;
$tdataPMT_INVOICE[".afterAddAction"] = 1;
$tdataPMT_INVOICE[".closePopupAfterAdd"] = 1;
$tdataPMT_INVOICE[".afterAddActionDetTable"] = "";

$tdataPMT_INVOICE[".list"] = true;



$tdataPMT_INVOICE[".reorderRecordsByHeader"] = true;



$tdataPMT_INVOICE[".view"] = true;

$tdataPMT_INVOICE[".import"] = true;

$tdataPMT_INVOICE[".exportTo"] = true;

$tdataPMT_INVOICE[".printFriendly"] = true;

$tdataPMT_INVOICE[".delete"] = true;

$tdataPMT_INVOICE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_INVOICE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_INVOICE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_INVOICE[".searchSaving"] = false;
//

$tdataPMT_INVOICE[".showSearchPanel"] = true;
		$tdataPMT_INVOICE[".flexibleSearch"] = true;

$tdataPMT_INVOICE[".isUseAjaxSuggest"] = true;

$tdataPMT_INVOICE[".rowHighlite"] = true;



				

$tdataPMT_INVOICE[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_INVOICE[".buttonsAdded"] = false;

$tdataPMT_INVOICE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_INVOICE[".isUseTimeForSearch"] = false;





$tdataPMT_INVOICE[".allSearchFields"] = array();
$tdataPMT_INVOICE[".filterFields"] = array();
$tdataPMT_INVOICE[".requiredSearchFields"] = array();

$tdataPMT_INVOICE[".allSearchFields"][] = "L50";
	$tdataPMT_INVOICE[".allSearchFields"][] = "O48";
	$tdataPMT_INVOICE[".allSearchFields"][] = "O49";
	$tdataPMT_INVOICE[".allSearchFields"][] = "O50";
	$tdataPMT_INVOICE[".allSearchFields"][] = "O51";
	$tdataPMT_INVOICE[".allSearchFields"][] = "O52";
	$tdataPMT_INVOICE[".allSearchFields"][] = "APP_UID";
	$tdataPMT_INVOICE[".allSearchFields"][] = "TOTAL_FEE";
	$tdataPMT_INVOICE[".allSearchFields"][] = "PAYMENT_DEADLINE";
	$tdataPMT_INVOICE[".allSearchFields"][] = "COMPANY";
	$tdataPMT_INVOICE[".allSearchFields"][] = "POSTAL_CODE";
	$tdataPMT_INVOICE[".allSearchFields"][] = "PREFECTURES";
	$tdataPMT_INVOICE[".allSearchFields"][] = "TOWNS_AND_VILLAGES";
	$tdataPMT_INVOICE[".allSearchFields"][] = "REMARKS";
	$tdataPMT_INVOICE[".allSearchFields"][] = "SUBTOTAL";
	$tdataPMT_INVOICE[".allSearchFields"][] = "TAX_RATE";
	$tdataPMT_INVOICE[".allSearchFields"][] = "CONSUMPTION_TAX";
	$tdataPMT_INVOICE[".allSearchFields"][] = "TOTAL";
	

$tdataPMT_INVOICE[".googleLikeFields"] = array();
$tdataPMT_INVOICE[".googleLikeFields"][] = "APP_UID";
$tdataPMT_INVOICE[".googleLikeFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".googleLikeFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".googleLikeFields"][] = "COMPANY";
$tdataPMT_INVOICE[".googleLikeFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".googleLikeFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".googleLikeFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".googleLikeFields"][] = "REMARKS";
$tdataPMT_INVOICE[".googleLikeFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".googleLikeFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".googleLikeFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".googleLikeFields"][] = "TOTAL";
$tdataPMT_INVOICE[".googleLikeFields"][] = "PAYMENT_DEADLINE_2";
$tdataPMT_INVOICE[".googleLikeFields"][] = "NAME";
$tdataPMT_INVOICE[".googleLikeFields"][] = "QUANTITY";
$tdataPMT_INVOICE[".googleLikeFields"][] = "QUANTITY_2";
$tdataPMT_INVOICE[".googleLikeFields"][] = "UNIT_PRICE";
$tdataPMT_INVOICE[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_INVOICE[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_INVOICE[".googleLikeFields"][] = "ROW";
$tdataPMT_INVOICE[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_INVOICE[".googleLikeFields"][] = "TIME";
$tdataPMT_INVOICE[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_INVOICE[".googleLikeFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_INVOICE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_INVOICE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";
$tdataPMT_INVOICE[".googleLikeFields"][] = "L50";
$tdataPMT_INVOICE[".googleLikeFields"][] = "O48";
$tdataPMT_INVOICE[".googleLikeFields"][] = "O49";
$tdataPMT_INVOICE[".googleLikeFields"][] = "O50";
$tdataPMT_INVOICE[".googleLikeFields"][] = "O51";
$tdataPMT_INVOICE[".googleLikeFields"][] = "O52";


$tdataPMT_INVOICE[".advSearchFields"] = array();
$tdataPMT_INVOICE[".advSearchFields"][] = "L50";
$tdataPMT_INVOICE[".advSearchFields"][] = "O48";
$tdataPMT_INVOICE[".advSearchFields"][] = "O49";
$tdataPMT_INVOICE[".advSearchFields"][] = "O50";
$tdataPMT_INVOICE[".advSearchFields"][] = "O51";
$tdataPMT_INVOICE[".advSearchFields"][] = "O52";
$tdataPMT_INVOICE[".advSearchFields"][] = "APP_UID";
$tdataPMT_INVOICE[".advSearchFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".advSearchFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".advSearchFields"][] = "COMPANY";
$tdataPMT_INVOICE[".advSearchFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".advSearchFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".advSearchFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".advSearchFields"][] = "REMARKS";
$tdataPMT_INVOICE[".advSearchFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".advSearchFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".advSearchFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".advSearchFields"][] = "TOTAL";

$tdataPMT_INVOICE[".tableType"] = "list";

$tdataPMT_INVOICE[".printerPageOrientation"] = 0;
$tdataPMT_INVOICE[".nPrinterPageScale"] = 100;

$tdataPMT_INVOICE[".nPrinterSplitRecords"] = 40;

$tdataPMT_INVOICE[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_INVOICE[".geocodingEnabled"] = false;





$tdataPMT_INVOICE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_INVOICE[".pageSize"] = 20;

$tdataPMT_INVOICE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_INVOICE[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_INVOICE[".orderindexes"] = array();

$tdataPMT_INVOICE[".sqlHead"] = "SELECT APP_UID,  	TOTAL_FEE,  	PAYMENT_DEADLINE,  	COMPANY,  	POSTAL_CODE,  	PREFECTURES,  	TOWNS_AND_VILLAGES,  	REMARKS,  	SUBTOTAL,  	TAX_RATE,  	CONSUMPTION_TAX,  	TOTAL,  	PAYMENT_DEADLINE_2,  	NAME,  	QUANTITY,  	QUANTITY_2,  	UNIT_PRICE,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	AMOUNT_OF_MONEY,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19,  	L50,  	O48,  	O49,  	O50,  	O51,  	O52";
$tdataPMT_INVOICE[".sqlFrom"] = "FROM PMT_INVOICE";
$tdataPMT_INVOICE[".sqlWhereExpr"] = "";
$tdataPMT_INVOICE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_INVOICE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_INVOICE[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_INVOICE[".highlightSearchResults"] = true;

$tableKeysPMT_INVOICE = array();
$tableKeysPMT_INVOICE[] = "APP_UID";
$tdataPMT_INVOICE[".Keys"] = $tableKeysPMT_INVOICE;

$tdataPMT_INVOICE[".listFields"] = array();
$tdataPMT_INVOICE[".listFields"][] = "L50";
$tdataPMT_INVOICE[".listFields"][] = "O48";
$tdataPMT_INVOICE[".listFields"][] = "O49";
$tdataPMT_INVOICE[".listFields"][] = "O50";
$tdataPMT_INVOICE[".listFields"][] = "O51";
$tdataPMT_INVOICE[".listFields"][] = "O52";
$tdataPMT_INVOICE[".listFields"][] = "APP_UID";
$tdataPMT_INVOICE[".listFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".listFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".listFields"][] = "COMPANY";
$tdataPMT_INVOICE[".listFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".listFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".listFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".listFields"][] = "REMARKS";
$tdataPMT_INVOICE[".listFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".listFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".listFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".listFields"][] = "TOTAL";

$tdataPMT_INVOICE[".hideMobileList"] = array();


$tdataPMT_INVOICE[".viewFields"] = array();
$tdataPMT_INVOICE[".viewFields"][] = "L50";
$tdataPMT_INVOICE[".viewFields"][] = "O48";
$tdataPMT_INVOICE[".viewFields"][] = "O49";
$tdataPMT_INVOICE[".viewFields"][] = "O50";
$tdataPMT_INVOICE[".viewFields"][] = "O51";
$tdataPMT_INVOICE[".viewFields"][] = "O52";
$tdataPMT_INVOICE[".viewFields"][] = "APP_UID";
$tdataPMT_INVOICE[".viewFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".viewFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".viewFields"][] = "COMPANY";
$tdataPMT_INVOICE[".viewFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".viewFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".viewFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".viewFields"][] = "REMARKS";
$tdataPMT_INVOICE[".viewFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".viewFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".viewFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".viewFields"][] = "TOTAL";

$tdataPMT_INVOICE[".addFields"] = array();
$tdataPMT_INVOICE[".addFields"][] = "L50";
$tdataPMT_INVOICE[".addFields"][] = "O48";
$tdataPMT_INVOICE[".addFields"][] = "O49";
$tdataPMT_INVOICE[".addFields"][] = "O50";
$tdataPMT_INVOICE[".addFields"][] = "O51";
$tdataPMT_INVOICE[".addFields"][] = "O52";
$tdataPMT_INVOICE[".addFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".addFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".addFields"][] = "COMPANY";
$tdataPMT_INVOICE[".addFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".addFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".addFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".addFields"][] = "REMARKS";
$tdataPMT_INVOICE[".addFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".addFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".addFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".addFields"][] = "TOTAL";

$tdataPMT_INVOICE[".masterListFields"] = array();
$tdataPMT_INVOICE[".masterListFields"][] = "L50";
$tdataPMT_INVOICE[".masterListFields"][] = "O48";
$tdataPMT_INVOICE[".masterListFields"][] = "O49";
$tdataPMT_INVOICE[".masterListFields"][] = "O50";
$tdataPMT_INVOICE[".masterListFields"][] = "O51";
$tdataPMT_INVOICE[".masterListFields"][] = "O52";
$tdataPMT_INVOICE[".masterListFields"][] = "APP_UID";
$tdataPMT_INVOICE[".masterListFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".masterListFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".masterListFields"][] = "COMPANY";
$tdataPMT_INVOICE[".masterListFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".masterListFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".masterListFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".masterListFields"][] = "REMARKS";
$tdataPMT_INVOICE[".masterListFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".masterListFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".masterListFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".masterListFields"][] = "TOTAL";

$tdataPMT_INVOICE[".inlineAddFields"] = array();
$tdataPMT_INVOICE[".inlineAddFields"][] = "L50";
$tdataPMT_INVOICE[".inlineAddFields"][] = "O48";
$tdataPMT_INVOICE[".inlineAddFields"][] = "O49";
$tdataPMT_INVOICE[".inlineAddFields"][] = "O50";
$tdataPMT_INVOICE[".inlineAddFields"][] = "O51";
$tdataPMT_INVOICE[".inlineAddFields"][] = "O52";

$tdataPMT_INVOICE[".editFields"] = array();
$tdataPMT_INVOICE[".editFields"][] = "L50";
$tdataPMT_INVOICE[".editFields"][] = "O48";
$tdataPMT_INVOICE[".editFields"][] = "O49";
$tdataPMT_INVOICE[".editFields"][] = "O50";
$tdataPMT_INVOICE[".editFields"][] = "O51";
$tdataPMT_INVOICE[".editFields"][] = "O52";
$tdataPMT_INVOICE[".editFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".editFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".editFields"][] = "COMPANY";
$tdataPMT_INVOICE[".editFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".editFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".editFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".editFields"][] = "REMARKS";
$tdataPMT_INVOICE[".editFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".editFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".editFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".editFields"][] = "TOTAL";

$tdataPMT_INVOICE[".inlineEditFields"] = array();
$tdataPMT_INVOICE[".inlineEditFields"][] = "L50";
$tdataPMT_INVOICE[".inlineEditFields"][] = "O48";
$tdataPMT_INVOICE[".inlineEditFields"][] = "O49";
$tdataPMT_INVOICE[".inlineEditFields"][] = "O50";
$tdataPMT_INVOICE[".inlineEditFields"][] = "O51";
$tdataPMT_INVOICE[".inlineEditFields"][] = "O52";

$tdataPMT_INVOICE[".updateSelectedFields"] = array();
$tdataPMT_INVOICE[".updateSelectedFields"][] = "L50";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "O48";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "O49";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "O50";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "O51";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "O52";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "COMPANY";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "REMARKS";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".updateSelectedFields"][] = "TOTAL";


$tdataPMT_INVOICE[".exportFields"] = array();
$tdataPMT_INVOICE[".exportFields"][] = "L50";
$tdataPMT_INVOICE[".exportFields"][] = "O48";
$tdataPMT_INVOICE[".exportFields"][] = "O49";
$tdataPMT_INVOICE[".exportFields"][] = "O50";
$tdataPMT_INVOICE[".exportFields"][] = "O51";
$tdataPMT_INVOICE[".exportFields"][] = "O52";
$tdataPMT_INVOICE[".exportFields"][] = "APP_UID";
$tdataPMT_INVOICE[".exportFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".exportFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".exportFields"][] = "COMPANY";
$tdataPMT_INVOICE[".exportFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".exportFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".exportFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".exportFields"][] = "REMARKS";
$tdataPMT_INVOICE[".exportFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".exportFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".exportFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".exportFields"][] = "TOTAL";

$tdataPMT_INVOICE[".importFields"] = array();
$tdataPMT_INVOICE[".importFields"][] = "APP_UID";
$tdataPMT_INVOICE[".importFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".importFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".importFields"][] = "COMPANY";
$tdataPMT_INVOICE[".importFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".importFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".importFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".importFields"][] = "REMARKS";
$tdataPMT_INVOICE[".importFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".importFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".importFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".importFields"][] = "TOTAL";
$tdataPMT_INVOICE[".importFields"][] = "L50";
$tdataPMT_INVOICE[".importFields"][] = "O48";
$tdataPMT_INVOICE[".importFields"][] = "O49";
$tdataPMT_INVOICE[".importFields"][] = "O50";
$tdataPMT_INVOICE[".importFields"][] = "O51";
$tdataPMT_INVOICE[".importFields"][] = "O52";

$tdataPMT_INVOICE[".printFields"] = array();
$tdataPMT_INVOICE[".printFields"][] = "L50";
$tdataPMT_INVOICE[".printFields"][] = "O48";
$tdataPMT_INVOICE[".printFields"][] = "O49";
$tdataPMT_INVOICE[".printFields"][] = "O50";
$tdataPMT_INVOICE[".printFields"][] = "O51";
$tdataPMT_INVOICE[".printFields"][] = "O52";
$tdataPMT_INVOICE[".printFields"][] = "APP_UID";
$tdataPMT_INVOICE[".printFields"][] = "TOTAL_FEE";
$tdataPMT_INVOICE[".printFields"][] = "PAYMENT_DEADLINE";
$tdataPMT_INVOICE[".printFields"][] = "COMPANY";
$tdataPMT_INVOICE[".printFields"][] = "POSTAL_CODE";
$tdataPMT_INVOICE[".printFields"][] = "PREFECTURES";
$tdataPMT_INVOICE[".printFields"][] = "TOWNS_AND_VILLAGES";
$tdataPMT_INVOICE[".printFields"][] = "REMARKS";
$tdataPMT_INVOICE[".printFields"][] = "SUBTOTAL";
$tdataPMT_INVOICE[".printFields"][] = "TAX_RATE";
$tdataPMT_INVOICE[".printFields"][] = "CONSUMPTION_TAX";
$tdataPMT_INVOICE[".printFields"][] = "TOTAL";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","APP_UID");
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




	$tdataPMT_INVOICE["APP_UID"] = $fdata;
//	TOTAL_FEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TOTAL_FEE";
	$fdata["GoodName"] = "TOTAL_FEE";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","TOTAL_FEE");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TOTAL_FEE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_FEE";

	
	
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




	$tdataPMT_INVOICE["TOTAL_FEE"] = $fdata;
//	PAYMENT_DEADLINE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PAYMENT_DEADLINE";
	$fdata["GoodName"] = "PAYMENT_DEADLINE";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","PAYMENT_DEADLINE");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PAYMENT_DEADLINE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAYMENT_DEADLINE";

	
	
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




	$tdataPMT_INVOICE["PAYMENT_DEADLINE"] = $fdata;
//	COMPANY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COMPANY";
	$fdata["GoodName"] = "COMPANY";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","COMPANY");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_INVOICE["COMPANY"] = $fdata;
//	POSTAL_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "POSTAL_CODE";
	$fdata["GoodName"] = "POSTAL_CODE";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","POSTAL_CODE");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "POSTAL_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "POSTAL_CODE";

	
	
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




	$tdataPMT_INVOICE["POSTAL_CODE"] = $fdata;
//	PREFECTURES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PREFECTURES";
	$fdata["GoodName"] = "PREFECTURES";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","PREFECTURES");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PREFECTURES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PREFECTURES";

	
	
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




	$tdataPMT_INVOICE["PREFECTURES"] = $fdata;
//	TOWNS_AND_VILLAGES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TOWNS_AND_VILLAGES";
	$fdata["GoodName"] = "TOWNS_AND_VILLAGES";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","TOWNS_AND_VILLAGES");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TOWNS_AND_VILLAGES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOWNS_AND_VILLAGES";

	
	
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




	$tdataPMT_INVOICE["TOWNS_AND_VILLAGES"] = $fdata;
//	REMARKS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "REMARKS";
	$fdata["GoodName"] = "REMARKS";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","REMARKS");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REMARKS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REMARKS";

	
	
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




	$tdataPMT_INVOICE["REMARKS"] = $fdata;
//	SUBTOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SUBTOTAL";
	$fdata["GoodName"] = "SUBTOTAL";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","SUBTOTAL");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SUBTOTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBTOTAL";

	
	
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




	$tdataPMT_INVOICE["SUBTOTAL"] = $fdata;
//	TAX_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TAX_RATE";
	$fdata["GoodName"] = "TAX_RATE";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","TAX_RATE");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TAX_RATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAX_RATE";

	
	
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




	$tdataPMT_INVOICE["TAX_RATE"] = $fdata;
//	CONSUMPTION_TAX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CONSUMPTION_TAX";
	$fdata["GoodName"] = "CONSUMPTION_TAX";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","CONSUMPTION_TAX");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_INVOICE["CONSUMPTION_TAX"] = $fdata;
//	TOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TOTAL";
	$fdata["GoodName"] = "TOTAL";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","TOTAL");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TOTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL";

	
	
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




	$tdataPMT_INVOICE["TOTAL"] = $fdata;
//	PAYMENT_DEADLINE_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PAYMENT_DEADLINE_2";
	$fdata["GoodName"] = "PAYMENT_DEADLINE_2";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","PAYMENT_DEADLINE_2");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PAYMENT_DEADLINE_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAYMENT_DEADLINE_2";

	
	
			
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








	$tdataPMT_INVOICE["PAYMENT_DEADLINE_2"] = $fdata;
//	NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "NAME";
	$fdata["GoodName"] = "NAME";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","NAME");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NAME";

	
	
			
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








	$tdataPMT_INVOICE["NAME"] = $fdata;
//	QUANTITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "QUANTITY";
	$fdata["GoodName"] = "QUANTITY";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","QUANTITY");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "QUANTITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QUANTITY";

	
	
			
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








	$tdataPMT_INVOICE["QUANTITY"] = $fdata;
//	QUANTITY_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "QUANTITY_2";
	$fdata["GoodName"] = "QUANTITY_2";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","QUANTITY_2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "QUANTITY_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QUANTITY_2";

	
	
			
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








	$tdataPMT_INVOICE["QUANTITY_2"] = $fdata;
//	UNIT_PRICE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UNIT_PRICE";
	$fdata["GoodName"] = "UNIT_PRICE";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","UNIT_PRICE");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "UNIT_PRICE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UNIT_PRICE";

	
	
			
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








	$tdataPMT_INVOICE["UNIT_PRICE"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","APP_NUMBER");
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








	$tdataPMT_INVOICE["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","APP_STATUS");
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








	$tdataPMT_INVOICE["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","ROW");
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








	$tdataPMT_INVOICE["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","EMPLOYEE_NO");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "EMPLOYEE_NO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMPLOYEE_NO";

	
	
			
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








	$tdataPMT_INVOICE["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","TIME");
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








	$tdataPMT_INVOICE["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","MONTHLY_REPORT");
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








	$tdataPMT_INVOICE["MONTHLY_REPORT"] = $fdata;
//	AMOUNT_OF_MONEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "AMOUNT_OF_MONEY";
	$fdata["GoodName"] = "AMOUNT_OF_MONEY";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","AMOUNT_OF_MONEY");
	$fdata["FieldType"] = 129;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AMOUNT_OF_MONEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AMOUNT_OF_MONEY";

	
	
			
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








	$tdataPMT_INVOICE["AMOUNT_OF_MONEY"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","BUSINESS_CONFIRMATION_18");
	$fdata["FieldType"] = 129;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "BUSINESS_CONFIRMATION_18";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_18";

	
	
			
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








	$tdataPMT_INVOICE["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","BUSINESS_CONFIRMATION_19");
	$fdata["FieldType"] = 129;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "BUSINESS_CONFIRMATION_19";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_19";

	
	
			
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








	$tdataPMT_INVOICE["BUSINESS_CONFIRMATION_19"] = $fdata;
//	L50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "L50";
	$fdata["GoodName"] = "L50";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","L50");
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

		$fdata["strField"] = "L50";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "L50";

	
	
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




	$tdataPMT_INVOICE["L50"] = $fdata;
//	O48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "O48";
	$fdata["GoodName"] = "O48";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","O48");
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

		$fdata["strField"] = "O48";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "O48";

	
	
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




	$tdataPMT_INVOICE["O48"] = $fdata;
//	O49
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "O49";
	$fdata["GoodName"] = "O49";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","O49");
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

		$fdata["strField"] = "O49";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "O49";

	
	
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




	$tdataPMT_INVOICE["O49"] = $fdata;
//	O50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "O50";
	$fdata["GoodName"] = "O50";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","O50");
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

		$fdata["strField"] = "O50";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "O50";

	
	
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




	$tdataPMT_INVOICE["O50"] = $fdata;
//	O51
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "O51";
	$fdata["GoodName"] = "O51";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","O51");
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

		$fdata["strField"] = "O51";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "O51";

	
	
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




	$tdataPMT_INVOICE["O51"] = $fdata;
//	O52
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "O52";
	$fdata["GoodName"] = "O52";
	$fdata["ownerTable"] = "PMT_INVOICE";
	$fdata["Label"] = GetFieldLabel("PMT_INVOICE","O52");
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

		$fdata["strField"] = "O52";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "O52";

	
	
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




	$tdataPMT_INVOICE["O52"] = $fdata;


$tables_data["PMT_INVOICE"]=&$tdataPMT_INVOICE;
$field_labels["PMT_INVOICE"] = &$fieldLabelsPMT_INVOICE;
$fieldToolTips["PMT_INVOICE"] = &$fieldToolTipsPMT_INVOICE;
$placeHolders["PMT_INVOICE"] = &$placeHoldersPMT_INVOICE;
$page_titles["PMT_INVOICE"] = &$pageTitlesPMT_INVOICE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_INVOICE"] = array();
//	PMT_INVOICE_ITEMS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_INVOICE_ITEMS";
		$detailsParam["dOriginalTable"] = "PMT_INVOICE_ITEMS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_INVOICE_ITEMS";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_INVOICE_ITEMS");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["PMT_INVOICE"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_INVOICE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_INVOICE"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["PMT_INVOICE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_INVOICE"][$dIndex]["detailKeys"][]="APP_NUMBER";

// tables which are master tables for current table (detail)
$masterTablesData["PMT_INVOICE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_INVOICE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	TOTAL_FEE,  	PAYMENT_DEADLINE,  	COMPANY,  	POSTAL_CODE,  	PREFECTURES,  	TOWNS_AND_VILLAGES,  	REMARKS,  	SUBTOTAL,  	TAX_RATE,  	CONSUMPTION_TAX,  	TOTAL,  	PAYMENT_DEADLINE_2,  	NAME,  	QUANTITY,  	QUANTITY_2,  	UNIT_PRICE,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	AMOUNT_OF_MONEY,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19,  	L50,  	O48,  	O49,  	O50,  	O51,  	O52";
$proto0["m_strFrom"] = "FROM PMT_INVOICE";
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
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_INVOICE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_FEE",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto8["m_sql"] = "TOTAL_FEE";
$proto8["m_srcTableName"] = "PMT_INVOICE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PAYMENT_DEADLINE",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto10["m_sql"] = "PAYMENT_DEADLINE";
$proto10["m_srcTableName"] = "PMT_INVOICE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPANY",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto12["m_sql"] = "COMPANY";
$proto12["m_srcTableName"] = "PMT_INVOICE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "POSTAL_CODE",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto14["m_sql"] = "POSTAL_CODE";
$proto14["m_srcTableName"] = "PMT_INVOICE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PREFECTURES",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto16["m_sql"] = "PREFECTURES";
$proto16["m_srcTableName"] = "PMT_INVOICE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TOWNS_AND_VILLAGES",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto18["m_sql"] = "TOWNS_AND_VILLAGES";
$proto18["m_srcTableName"] = "PMT_INVOICE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "REMARKS",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto20["m_sql"] = "REMARKS";
$proto20["m_srcTableName"] = "PMT_INVOICE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBTOTAL",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto22["m_sql"] = "SUBTOTAL";
$proto22["m_srcTableName"] = "PMT_INVOICE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TAX_RATE",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto24["m_sql"] = "TAX_RATE";
$proto24["m_srcTableName"] = "PMT_INVOICE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSUMPTION_TAX",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto26["m_sql"] = "CONSUMPTION_TAX";
$proto26["m_srcTableName"] = "PMT_INVOICE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto28["m_sql"] = "TOTAL";
$proto28["m_srcTableName"] = "PMT_INVOICE";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PAYMENT_DEADLINE_2",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto30["m_sql"] = "PAYMENT_DEADLINE_2";
$proto30["m_srcTableName"] = "PMT_INVOICE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "NAME",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto32["m_sql"] = "NAME";
$proto32["m_srcTableName"] = "PMT_INVOICE";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "QUANTITY",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto34["m_sql"] = "QUANTITY";
$proto34["m_srcTableName"] = "PMT_INVOICE";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "QUANTITY_2",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto36["m_sql"] = "QUANTITY_2";
$proto36["m_srcTableName"] = "PMT_INVOICE";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIT_PRICE",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto38["m_sql"] = "UNIT_PRICE";
$proto38["m_srcTableName"] = "PMT_INVOICE";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto40["m_sql"] = "APP_NUMBER";
$proto40["m_srcTableName"] = "PMT_INVOICE";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto42["m_sql"] = "APP_STATUS";
$proto42["m_srcTableName"] = "PMT_INVOICE";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto44["m_sql"] = "`ROW`";
$proto44["m_srcTableName"] = "PMT_INVOICE";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto46["m_sql"] = "EMPLOYEE_NO";
$proto46["m_srcTableName"] = "PMT_INVOICE";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto48["m_sql"] = "`TIME`";
$proto48["m_srcTableName"] = "PMT_INVOICE";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto50["m_sql"] = "MONTHLY_REPORT";
$proto50["m_srcTableName"] = "PMT_INVOICE";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "AMOUNT_OF_MONEY",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto52["m_sql"] = "AMOUNT_OF_MONEY";
$proto52["m_srcTableName"] = "PMT_INVOICE";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto54["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto54["m_srcTableName"] = "PMT_INVOICE";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto56["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto56["m_srcTableName"] = "PMT_INVOICE";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "L50",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto58["m_sql"] = "L50";
$proto58["m_srcTableName"] = "PMT_INVOICE";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "O48",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto60["m_sql"] = "O48";
$proto60["m_srcTableName"] = "PMT_INVOICE";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "O49",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto62["m_sql"] = "O49";
$proto62["m_srcTableName"] = "PMT_INVOICE";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "O50",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto64["m_sql"] = "O50";
$proto64["m_srcTableName"] = "PMT_INVOICE";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "O51",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto66["m_sql"] = "O51";
$proto66["m_srcTableName"] = "PMT_INVOICE";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "O52",
	"m_strTable" => "PMT_INVOICE",
	"m_srcTableName" => "PMT_INVOICE"
));

$proto68["m_sql"] = "O52";
$proto68["m_srcTableName"] = "PMT_INVOICE";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto70=array();
$proto70["m_link"] = "SQLL_MAIN";
			$proto71=array();
$proto71["m_strName"] = "PMT_INVOICE";
$proto71["m_srcTableName"] = "PMT_INVOICE";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "APP_UID";
$proto71["m_columns"][] = "TOTAL_FEE";
$proto71["m_columns"][] = "PAYMENT_DEADLINE";
$proto71["m_columns"][] = "COMPANY";
$proto71["m_columns"][] = "POSTAL_CODE";
$proto71["m_columns"][] = "PREFECTURES";
$proto71["m_columns"][] = "TOWNS_AND_VILLAGES";
$proto71["m_columns"][] = "REMARKS";
$proto71["m_columns"][] = "SUBTOTAL";
$proto71["m_columns"][] = "TAX_RATE";
$proto71["m_columns"][] = "CONSUMPTION_TAX";
$proto71["m_columns"][] = "TOTAL";
$proto71["m_columns"][] = "PAYMENT_DEADLINE_2";
$proto71["m_columns"][] = "NAME";
$proto71["m_columns"][] = "QUANTITY";
$proto71["m_columns"][] = "QUANTITY_2";
$proto71["m_columns"][] = "UNIT_PRICE";
$proto71["m_columns"][] = "APP_NUMBER";
$proto71["m_columns"][] = "APP_STATUS";
$proto71["m_columns"][] = "ROW";
$proto71["m_columns"][] = "EMPLOYEE_NO";
$proto71["m_columns"][] = "TIME";
$proto71["m_columns"][] = "MONTHLY_REPORT";
$proto71["m_columns"][] = "AMOUNT_OF_MONEY";
$proto71["m_columns"][] = "BUSINESS_CONFIRMATION_18";
$proto71["m_columns"][] = "BUSINESS_CONFIRMATION_19";
$proto71["m_columns"][] = "L50";
$proto71["m_columns"][] = "O48";
$proto71["m_columns"][] = "O49";
$proto71["m_columns"][] = "O50";
$proto71["m_columns"][] = "O51";
$proto71["m_columns"][] = "O52";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "PMT_INVOICE";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "PMT_INVOICE";
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
$proto0["m_srcTableName"]="PMT_INVOICE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_INVOICE = createSqlQuery_PMT_INVOICE();


	
						;

																																

$tdataPMT_INVOICE[".sqlquery"] = $queryData_PMT_INVOICE;

$tableEvents["PMT_INVOICE"] = new eventsBase;
$tdataPMT_INVOICE[".hasEvents"] = false;

?>
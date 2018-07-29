<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_TEST_BUSINESS_3 = array();
	$tdataPMT_TEST_BUSINESS_3[".truncateText"] = true;
	$tdataPMT_TEST_BUSINESS_3[".NumberOfChars"] = 80;
	$tdataPMT_TEST_BUSINESS_3[".ShortName"] = "PMT_TEST_BUSINESS_3";
	$tdataPMT_TEST_BUSINESS_3[".OwnerID"] = "";
	$tdataPMT_TEST_BUSINESS_3[".OriginalTable"] = "PMT_TEST_BUSINESS_3";

//	field labels
$fieldLabelsPMT_TEST_BUSINESS_3 = array();
$fieldToolTipsPMT_TEST_BUSINESS_3 = array();
$pageTitlesPMT_TEST_BUSINESS_3 = array();
$placeHoldersPMT_TEST_BUSINESS_3 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"] = array();
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"] = array();
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"] = array();
	$pageTitlesPMT_TEST_BUSINESS_3["Japanese"] = array();
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["APP_UID"] = "ユニークID";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["APP_UID"] = "数値";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["APP_UID"] = "[1-9]{0.12}";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["APP_NUMBER"] = "番号";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["APP_STATUS"] = "状態状態";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["APP_STATUS"] = "数値";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["ROW"] = "行";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["ROW"] = "[a-z]+";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["EMPLOYEE_NO"] = "登録画面";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["EMPLOYEE_NO"] = "数値";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["EMPLOYEE_NO"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["MONTHLY_REPORT"] = "MONTHLY_REPORT";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["MONTHLY_REPORT"] = "100";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_1"] = "業務確認1";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_1"] = "チェックボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_1"] = "4)[dtext:chatroom_changed][/info]";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_2"] = "業務確認2";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_2"] = "テキストエリア";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_2"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_3"] = "業務確認3";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_3"] = "テキスト";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_3"] = " 0)	";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_ACKNOWLEDGMENT_4"] = "業務確認4";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_ACKNOWLEDGMENT_4"] = "テキスト";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_ACKNOWLEDGMENT_4"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["FOR_THE_ITEM"] = "項目内用";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["FOR_THE_ITEM"] = "テキスト";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["FOR_THE_ITEM"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["ITEM_IN_FOR_2"] = "項目内用２";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["ITEM_IN_FOR_2"] = "テキスト";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["ITEM_IN_FOR_2"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_7"] = "業務確認7";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_7"] = "テキスト";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_7"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_8"] = "業務確認8";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_8"] = "テキスト";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_8"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_9"] = "業務確認9";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_9"] = "テキストエリア";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_9"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_10"] = "業務確認10";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_10"] = "テキスト";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_10"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_11"] = "業務確認11";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_11"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_11"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_12"] = "業務確認12";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_12"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_12"] = " concurrent data structures";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_13"] = "業務確認13";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_13"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_13"] = "説明１";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_14"] = "業務確認14";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_14"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_14"] = "説明１";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_15"] = "業務確認15";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_15"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_15"] = "説明１";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_16"] = "業務確認16";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_16"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_16"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_17"] = "業務確認17";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_17"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_17"] = "説明１";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_18"] = "業務確認18";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_18"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_18"] = "説明１";
	$fieldLabelsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_19"] = "業務確認19";
	$fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_19"] = "リストボックス";
	$placeHoldersPMT_TEST_BUSINESS_3["Japanese"]["BUSINESS_CONFIRMATION_19"] = "説明１";
	if (count($fieldToolTipsPMT_TEST_BUSINESS_3["Japanese"]))
		$tdataPMT_TEST_BUSINESS_3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_TEST_BUSINESS_3["English"] = array();
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"] = array();
	$placeHoldersPMT_TEST_BUSINESS_3["English"] = array();
	$pageTitlesPMT_TEST_BUSINESS_3["English"] = array();
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["APP_UID"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["APP_UID"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["ROW"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["ROW"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["TIME"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["TIME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_1"] = "BUSINESS CONFIRMATION 1";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_1"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_1"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_2"] = "BUSINESS CONFIRMATION 2";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_2"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_2"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_3"] = "BUSINESS CONFIRMATION 3";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_3"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_3"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_ACKNOWLEDGMENT_4"] = "BUSINESS ACKNOWLEDGMENT 4";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_ACKNOWLEDGMENT_4"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_ACKNOWLEDGMENT_4"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["FOR_THE_ITEM"] = "FOR THE ITEM";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["FOR_THE_ITEM"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["FOR_THE_ITEM"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["ITEM_IN_FOR_2"] = "ITEM IN FOR 2";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["ITEM_IN_FOR_2"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["ITEM_IN_FOR_2"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_7"] = "BUSINESS CONFIRMATION 7";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_7"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_7"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_8"] = "BUSINESS CONFIRMATION 8";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_8"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_8"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_9"] = "BUSINESS CONFIRMATION 9";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_9"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_9"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_10"] = "BUSINESS CONFIRMATION 10";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_10"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_10"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_11"] = "BUSINESS CONFIRMATION 11";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_11"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_11"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_12"] = "BUSINESS CONFIRMATION 12";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_12"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_12"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_13"] = "BUSINESS CONFIRMATION 13";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_13"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_13"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_14"] = "BUSINESS CONFIRMATION 14";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_14"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_14"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_15"] = "BUSINESS CONFIRMATION 15";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_15"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_15"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_16"] = "BUSINESS CONFIRMATION 16";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_16"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_16"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3["English"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_TEST_BUSINESS_3["English"]))
		$tdataPMT_TEST_BUSINESS_3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_TEST_BUSINESS_3[""] = array();
	$fieldToolTipsPMT_TEST_BUSINESS_3[""] = array();
	$placeHoldersPMT_TEST_BUSINESS_3[""] = array();
	$pageTitlesPMT_TEST_BUSINESS_3[""] = array();
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["APP_UID"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["APP_UID"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["APP_STATUS"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["ROW"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["ROW"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["TIME"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["TIME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_1"] = "BUSINESS CONFIRMATION 1";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_1"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_1"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_2"] = "BUSINESS CONFIRMATION 2";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_2"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_2"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_3"] = "BUSINESS CONFIRMATION 3";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_3"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_3"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_ACKNOWLEDGMENT_4"] = "BUSINESS ACKNOWLEDGMENT 4";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_ACKNOWLEDGMENT_4"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_ACKNOWLEDGMENT_4"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["FOR_THE_ITEM"] = "FOR THE ITEM";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["FOR_THE_ITEM"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["FOR_THE_ITEM"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["ITEM_IN_FOR_2"] = "ITEM IN FOR 2";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["ITEM_IN_FOR_2"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["ITEM_IN_FOR_2"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_7"] = "BUSINESS CONFIRMATION 7";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_7"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_7"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_8"] = "BUSINESS CONFIRMATION 8";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_8"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_8"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_9"] = "BUSINESS CONFIRMATION 9";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_9"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_9"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_10"] = "BUSINESS CONFIRMATION 10";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_10"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_10"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_11"] = "BUSINESS CONFIRMATION 11";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_11"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_11"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_12"] = "BUSINESS CONFIRMATION 12";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_12"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_12"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_13"] = "BUSINESS CONFIRMATION 13";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_13"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_13"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_14"] = "BUSINESS CONFIRMATION 14";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_14"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_14"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_15"] = "BUSINESS CONFIRMATION 15";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_15"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_15"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_16"] = "BUSINESS CONFIRMATION 16";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_16"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_16"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_TEST_BUSINESS_3[""]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_TEST_BUSINESS_3[""]))
		$tdataPMT_TEST_BUSINESS_3[".isUseToolTips"] = true;
}


	$tdataPMT_TEST_BUSINESS_3[".NCSearch"] = true;



$tdataPMT_TEST_BUSINESS_3[".shortTableName"] = "PMT_TEST_BUSINESS_3";
$tdataPMT_TEST_BUSINESS_3[".nSecOptions"] = 0;
$tdataPMT_TEST_BUSINESS_3[".recsPerRowPrint"] = 1;
$tdataPMT_TEST_BUSINESS_3[".mainTableOwnerID"] = "";
$tdataPMT_TEST_BUSINESS_3[".moveNext"] = 1;
$tdataPMT_TEST_BUSINESS_3[".entityType"] = 0;

$tdataPMT_TEST_BUSINESS_3[".strOriginalTableName"] = "PMT_TEST_BUSINESS_3";

	



$tdataPMT_TEST_BUSINESS_3[".showAddInPopup"] = false;

$tdataPMT_TEST_BUSINESS_3[".showEditInPopup"] = false;

$tdataPMT_TEST_BUSINESS_3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_TEST_BUSINESS_3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_TEST_BUSINESS_3[".fieldsForRegister"] = array();
	
$tdataPMT_TEST_BUSINESS_3[".listAjax"] = false;

	$tdataPMT_TEST_BUSINESS_3[".audit"] = false;

	$tdataPMT_TEST_BUSINESS_3[".locking"] = false;

$tdataPMT_TEST_BUSINESS_3[".edit"] = true;
$tdataPMT_TEST_BUSINESS_3[".afterEditAction"] = 1;
$tdataPMT_TEST_BUSINESS_3[".closePopupAfterEdit"] = 1;
$tdataPMT_TEST_BUSINESS_3[".afterEditActionDetTable"] = "";

$tdataPMT_TEST_BUSINESS_3[".add"] = true;
$tdataPMT_TEST_BUSINESS_3[".afterAddAction"] = 1;
$tdataPMT_TEST_BUSINESS_3[".closePopupAfterAdd"] = 1;
$tdataPMT_TEST_BUSINESS_3[".afterAddActionDetTable"] = "";

$tdataPMT_TEST_BUSINESS_3[".list"] = true;



$tdataPMT_TEST_BUSINESS_3[".reorderRecordsByHeader"] = true;



$tdataPMT_TEST_BUSINESS_3[".view"] = true;

$tdataPMT_TEST_BUSINESS_3[".import"] = true;

$tdataPMT_TEST_BUSINESS_3[".exportTo"] = true;

$tdataPMT_TEST_BUSINESS_3[".printFriendly"] = true;

$tdataPMT_TEST_BUSINESS_3[".delete"] = true;

$tdataPMT_TEST_BUSINESS_3[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_TEST_BUSINESS_3[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_TEST_BUSINESS_3[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_TEST_BUSINESS_3[".searchSaving"] = false;
//

$tdataPMT_TEST_BUSINESS_3[".showSearchPanel"] = true;
		$tdataPMT_TEST_BUSINESS_3[".flexibleSearch"] = true;

$tdataPMT_TEST_BUSINESS_3[".isUseAjaxSuggest"] = true;

$tdataPMT_TEST_BUSINESS_3[".rowHighlite"] = true;



				

$tdataPMT_TEST_BUSINESS_3[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_TEST_BUSINESS_3[".buttonsAdded"] = false;

$tdataPMT_TEST_BUSINESS_3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_TEST_BUSINESS_3[".isUseTimeForSearch"] = false;





$tdataPMT_TEST_BUSINESS_3[".allSearchFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".filterFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".requiredSearchFields"] = array();

$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "APP_UID";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "ROW";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "TIME";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_1";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_2";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_3";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "FOR_THE_ITEM";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "ITEM_IN_FOR_2";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_7";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_8";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_9";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_10";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_11";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_12";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_13";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_14";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_15";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_16";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_17";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_18";
	$tdataPMT_TEST_BUSINESS_3[".allSearchFields"][] = "BUSINESS_CONFIRMATION_19";
	

$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_TEST_BUSINESS_3[".advSearchFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".advSearchFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".tableType"] = "list";

$tdataPMT_TEST_BUSINESS_3[".printerPageOrientation"] = 0;
$tdataPMT_TEST_BUSINESS_3[".nPrinterPageScale"] = 100;

$tdataPMT_TEST_BUSINESS_3[".nPrinterSplitRecords"] = 40;

$tdataPMT_TEST_BUSINESS_3[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_TEST_BUSINESS_3[".geocodingEnabled"] = false;





$tdataPMT_TEST_BUSINESS_3[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_TEST_BUSINESS_3[".pageSize"] = 20;

$tdataPMT_TEST_BUSINESS_3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_TEST_BUSINESS_3[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_TEST_BUSINESS_3[".orderindexes"] = array();

$tdataPMT_TEST_BUSINESS_3[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_1,  	BUSINESS_CONFIRMATION_2,  	BUSINESS_CONFIRMATION_3,  	BUSINESS_ACKNOWLEDGMENT_4,  	FOR_THE_ITEM,  	ITEM_IN_FOR_2,  	BUSINESS_CONFIRMATION_7,  	BUSINESS_CONFIRMATION_8,  	BUSINESS_CONFIRMATION_9,  	BUSINESS_CONFIRMATION_10,  	BUSINESS_CONFIRMATION_11,  	BUSINESS_CONFIRMATION_12,  	BUSINESS_CONFIRMATION_13,  	BUSINESS_CONFIRMATION_14,  	BUSINESS_CONFIRMATION_15,  	BUSINESS_CONFIRMATION_16,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$tdataPMT_TEST_BUSINESS_3[".sqlFrom"] = "FROM PMT_TEST_BUSINESS_3";
$tdataPMT_TEST_BUSINESS_3[".sqlWhereExpr"] = "";
$tdataPMT_TEST_BUSINESS_3[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_TEST_BUSINESS_3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_TEST_BUSINESS_3[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_TEST_BUSINESS_3[".highlightSearchResults"] = true;

$tableKeysPMT_TEST_BUSINESS_3 = array();
$tableKeysPMT_TEST_BUSINESS_3[] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".Keys"] = $tableKeysPMT_TEST_BUSINESS_3;

$tdataPMT_TEST_BUSINESS_3[".listFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".listFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".hideMobileList"] = array();


$tdataPMT_TEST_BUSINESS_3[".viewFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".viewFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".addFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".addFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".masterListFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".masterListFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".inlineAddFields"] = array();

$tdataPMT_TEST_BUSINESS_3[".editFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".editFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".inlineEditFields"] = array();

$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_TEST_BUSINESS_3[".exportFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".exportFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".importFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".importFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_TEST_BUSINESS_3[".printFields"] = array();
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_1";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_2";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_3";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "FOR_THE_ITEM";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "ITEM_IN_FOR_2";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_7";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_8";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_9";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_10";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_11";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_12";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_13";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_14";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_15";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_16";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_TEST_BUSINESS_3[".printFields"][] = "BUSINESS_CONFIRMATION_19";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","APP_UID");
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




	$tdataPMT_TEST_BUSINESS_3["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","APP_NUMBER");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","APP_STATUS");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","ROW");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","EMPLOYEE_NO");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","TIME");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","MONTHLY_REPORT");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["MONTHLY_REPORT"] = $fdata;
//	BUSINESS_CONFIRMATION_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_1";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_1";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_1");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_1";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_1"] = $fdata;
//	BUSINESS_CONFIRMATION_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_2";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_2";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_2");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_2";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_2"] = $fdata;
//	BUSINESS_CONFIRMATION_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_3";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_3";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_3");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_3";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_3"] = $fdata;
//	BUSINESS_ACKNOWLEDGMENT_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BUSINESS_ACKNOWLEDGMENT_4";
	$fdata["GoodName"] = "BUSINESS_ACKNOWLEDGMENT_4";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_ACKNOWLEDGMENT_4");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_ACKNOWLEDGMENT_4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_ACKNOWLEDGMENT_4";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_ACKNOWLEDGMENT_4"] = $fdata;
//	FOR_THE_ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FOR_THE_ITEM";
	$fdata["GoodName"] = "FOR_THE_ITEM";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","FOR_THE_ITEM");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FOR_THE_ITEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOR_THE_ITEM";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["FOR_THE_ITEM"] = $fdata;
//	ITEM_IN_FOR_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ITEM_IN_FOR_2";
	$fdata["GoodName"] = "ITEM_IN_FOR_2";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","ITEM_IN_FOR_2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ITEM_IN_FOR_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ITEM_IN_FOR_2";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["ITEM_IN_FOR_2"] = $fdata;
//	BUSINESS_CONFIRMATION_7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_7";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_7";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_7");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_7";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_7"] = $fdata;
//	BUSINESS_CONFIRMATION_8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_8";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_8";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_8");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_8";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_8"] = $fdata;
//	BUSINESS_CONFIRMATION_9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_9";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_9";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_9");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_9";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_9"] = $fdata;
//	BUSINESS_CONFIRMATION_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_10";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_10";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_10");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_10";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_10"] = $fdata;
//	BUSINESS_CONFIRMATION_11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_11";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_11";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_11");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_11";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_11";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_11"] = $fdata;
//	BUSINESS_CONFIRMATION_12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_12";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_12";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_12");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_12";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_12";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_12"] = $fdata;
//	BUSINESS_CONFIRMATION_13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_13";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_13";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_13");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_13";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_13";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_13"] = $fdata;
//	BUSINESS_CONFIRMATION_14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_14";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_14";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_14");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_14";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_14";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_14"] = $fdata;
//	BUSINESS_CONFIRMATION_15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_15";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_15";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_15");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_15";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_15";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_15"] = $fdata;
//	BUSINESS_CONFIRMATION_16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_16";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_16";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_16");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BUSINESS_CONFIRMATION_16";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_16";

	
	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_16"] = $fdata;
//	BUSINESS_CONFIRMATION_17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_17");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_17"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_18");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS_3";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS_3","BUSINESS_CONFIRMATION_19");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataPMT_TEST_BUSINESS_3["BUSINESS_CONFIRMATION_19"] = $fdata;


$tables_data["PMT_TEST_BUSINESS_3"]=&$tdataPMT_TEST_BUSINESS_3;
$field_labels["PMT_TEST_BUSINESS_3"] = &$fieldLabelsPMT_TEST_BUSINESS_3;
$fieldToolTips["PMT_TEST_BUSINESS_3"] = &$fieldToolTipsPMT_TEST_BUSINESS_3;
$placeHolders["PMT_TEST_BUSINESS_3"] = &$placeHoldersPMT_TEST_BUSINESS_3;
$page_titles["PMT_TEST_BUSINESS_3"] = &$pageTitlesPMT_TEST_BUSINESS_3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_TEST_BUSINESS_3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_TEST_BUSINESS_3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_TEST_BUSINESS_3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_1,  	BUSINESS_CONFIRMATION_2,  	BUSINESS_CONFIRMATION_3,  	BUSINESS_ACKNOWLEDGMENT_4,  	FOR_THE_ITEM,  	ITEM_IN_FOR_2,  	BUSINESS_CONFIRMATION_7,  	BUSINESS_CONFIRMATION_8,  	BUSINESS_CONFIRMATION_9,  	BUSINESS_CONFIRMATION_10,  	BUSINESS_CONFIRMATION_11,  	BUSINESS_CONFIRMATION_12,  	BUSINESS_CONFIRMATION_13,  	BUSINESS_CONFIRMATION_14,  	BUSINESS_CONFIRMATION_15,  	BUSINESS_CONFIRMATION_16,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$proto0["m_strFrom"] = "FROM PMT_TEST_BUSINESS_3";
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
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto14["m_sql"] = "EMPLOYEE_NO";
$proto14["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto16["m_sql"] = "`TIME`";
$proto16["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto18["m_sql"] = "MONTHLY_REPORT";
$proto18["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_1",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto20["m_sql"] = "BUSINESS_CONFIRMATION_1";
$proto20["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_2",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto22["m_sql"] = "BUSINESS_CONFIRMATION_2";
$proto22["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_3",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto24["m_sql"] = "BUSINESS_CONFIRMATION_3";
$proto24["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_ACKNOWLEDGMENT_4",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto26["m_sql"] = "BUSINESS_ACKNOWLEDGMENT_4";
$proto26["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FOR_THE_ITEM",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto28["m_sql"] = "FOR_THE_ITEM";
$proto28["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM_IN_FOR_2",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto30["m_sql"] = "ITEM_IN_FOR_2";
$proto30["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_7",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto32["m_sql"] = "BUSINESS_CONFIRMATION_7";
$proto32["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_8",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto34["m_sql"] = "BUSINESS_CONFIRMATION_8";
$proto34["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_9",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto36["m_sql"] = "BUSINESS_CONFIRMATION_9";
$proto36["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_10",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto38["m_sql"] = "BUSINESS_CONFIRMATION_10";
$proto38["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_11",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto40["m_sql"] = "BUSINESS_CONFIRMATION_11";
$proto40["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_12",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto42["m_sql"] = "BUSINESS_CONFIRMATION_12";
$proto42["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_13",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto44["m_sql"] = "BUSINESS_CONFIRMATION_13";
$proto44["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_14",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto46["m_sql"] = "BUSINESS_CONFIRMATION_14";
$proto46["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_15",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto48["m_sql"] = "BUSINESS_CONFIRMATION_15";
$proto48["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_16",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto50["m_sql"] = "BUSINESS_CONFIRMATION_16";
$proto50["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_17",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto52["m_sql"] = "BUSINESS_CONFIRMATION_17";
$proto52["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto54["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto54["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_TEST_BUSINESS_3",
	"m_srcTableName" => "PMT_TEST_BUSINESS_3"
));

$proto56["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto56["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_TEST_BUSINESS_3";
$proto59["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "APP_UID";
$proto59["m_columns"][] = "APP_NUMBER";
$proto59["m_columns"][] = "APP_STATUS";
$proto59["m_columns"][] = "ROW";
$proto59["m_columns"][] = "EMPLOYEE_NO";
$proto59["m_columns"][] = "TIME";
$proto59["m_columns"][] = "MONTHLY_REPORT";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_1";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_2";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_3";
$proto59["m_columns"][] = "BUSINESS_ACKNOWLEDGMENT_4";
$proto59["m_columns"][] = "FOR_THE_ITEM";
$proto59["m_columns"][] = "ITEM_IN_FOR_2";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_7";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_8";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_9";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_10";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_11";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_12";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_13";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_14";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_15";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_16";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_17";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_18";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_19";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "PMT_TEST_BUSINESS_3";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_TEST_BUSINESS_3";
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
$proto0["m_srcTableName"]="PMT_TEST_BUSINESS_3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_TEST_BUSINESS_3 = createSqlQuery_PMT_TEST_BUSINESS_3();


	
						;

																										

$tdataPMT_TEST_BUSINESS_3[".sqlquery"] = $queryData_PMT_TEST_BUSINESS_3;

$tableEvents["PMT_TEST_BUSINESS_3"] = new eventsBase;
$tdataPMT_TEST_BUSINESS_3[".hasEvents"] = false;

?>
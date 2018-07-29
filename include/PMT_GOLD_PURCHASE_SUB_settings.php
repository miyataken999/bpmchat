<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_GOLD_PURCHASE_SUB = array();
	$tdataPMT_GOLD_PURCHASE_SUB[".truncateText"] = true;
	$tdataPMT_GOLD_PURCHASE_SUB[".NumberOfChars"] = 80;
	$tdataPMT_GOLD_PURCHASE_SUB[".ShortName"] = "PMT_GOLD_PURCHASE_SUB";
	$tdataPMT_GOLD_PURCHASE_SUB[".OwnerID"] = "";
	$tdataPMT_GOLD_PURCHASE_SUB[".OriginalTable"] = "PMT_GOLD_PURCHASE_SUB";

//	field labels
$fieldLabelsPMT_GOLD_PURCHASE_SUB = array();
$fieldToolTipsPMT_GOLD_PURCHASE_SUB = array();
$pageTitlesPMT_GOLD_PURCHASE_SUB = array();
$placeHoldersPMT_GOLD_PURCHASE_SUB = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"] = array();
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"] = array();
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"] = array();
	$pageTitlesPMT_GOLD_PURCHASE_SUB["Japanese"] = array();
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_UIDSUB"] = "APP_UID";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_UIDSUB"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_UIDSUB"] = "[1-9]{0.12}";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_NUMBER"] = "APP_NUMBER";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_STATUS"] = "APP_STATUS";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_STATUS"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["ROW"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["ROW"] = "おなまえ";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["A"] = "cate";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["A"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["A"] = "たんとうぶ";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["B"] = "金性(音声）";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["B"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["B"] = "みつもりばんごう";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["C"] = "宝石";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["C"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["D"] = "詳細";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["D"] = "テキストエリア";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["E"] = "形状";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["E"] = "チェックボックス";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["F"] = "重量等";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["F"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["G"] = "単位";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["G"] = "ファイルアップロード";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["H"] = "地金単価";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["H"] = "時間表示";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["I"] = "主石";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["I"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["J"] = "主石単価";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["J"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["K"] = "脇石";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["K"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["L"] = "脇石単価";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["L"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["L"] = " concurrent data structures";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["M"] = "備考";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["M"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["M"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["N"] = "金額";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["N"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["N"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["O"] = "項目15";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["O"] = "テキスト";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["O"] = "[a-z]+";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["P"] = "項目16";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["P"] = "数値";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["P"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_UID"] = "項目17";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_UID"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["R"] = "項目18";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["R"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["R"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["S"] = "項目19";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["S"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["S"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["T"] = "項目20";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["T"] = "数値";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["T"] = "yyyy-mm-dd";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["Japanese"]["MONTHLY_REPORT"] = "MONTHLY_REPORT";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["Japanese"]["MONTHLY_REPORT"] = "説明１";
	if (count($fieldToolTipsPMT_GOLD_PURCHASE_SUB["Japanese"]))
		$tdataPMT_GOLD_PURCHASE_SUB[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"] = array();
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"] = array();
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"] = array();
	$pageTitlesPMT_GOLD_PURCHASE_SUB["English"] = array();
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["APP_UIDSUB"] = "APP UIDSUB";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["APP_UIDSUB"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["APP_UIDSUB"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["ROW"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["ROW"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["A"] = "A";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["A"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["A"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["B"] = "B";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["B"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["B"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["C"] = "C";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["C"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["C"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["D"] = "D";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["D"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["D"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["E"] = "E";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["E"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["E"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["F"] = "F";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["F"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["F"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["G"] = "G";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["G"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["G"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["H"] = "H";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["H"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["H"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["I"] = "I";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["I"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["I"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["J"] = "J";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["J"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["J"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["K"] = "K";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["K"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["K"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["L"] = "L";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["L"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["L"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["M"] = "M";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["M"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["M"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["N"] = "N";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["N"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["N"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["O"] = "O";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["O"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["O"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["P"] = "P";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["P"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["P"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["APP_UID"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["APP_UID"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["R"] = "R";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["R"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["R"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["S"] = "S";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["S"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["S"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["T"] = "T";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["T"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["T"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["TIME"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["TIME"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB["English"]["MONTHLY_REPORT"] = "";
	if (count($fieldToolTipsPMT_GOLD_PURCHASE_SUB["English"]))
		$tdataPMT_GOLD_PURCHASE_SUB[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""] = array();
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""] = array();
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""] = array();
	$pageTitlesPMT_GOLD_PURCHASE_SUB[""] = array();
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["APP_UIDSUB"] = "APP UIDSUB";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["APP_UIDSUB"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["APP_UIDSUB"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["APP_STATUS"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["ROW"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["ROW"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["A"] = "A";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["A"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["A"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["B"] = "B";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["B"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["B"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["C"] = "C";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["C"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["C"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["D"] = "D";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["D"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["D"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["E"] = "E";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["E"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["E"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["F"] = "F";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["F"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["F"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["G"] = "G";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["G"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["G"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["H"] = "H";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["H"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["H"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["I"] = "I";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["I"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["I"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["J"] = "J";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["J"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["J"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["K"] = "K";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["K"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["K"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["L"] = "L";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["L"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["L"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["M"] = "M";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["M"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["M"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["N"] = "N";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["N"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["N"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["O"] = "O";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["O"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["O"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["P"] = "P";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["P"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["P"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["APP_UID"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["APP_UID"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["R"] = "R";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["R"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["R"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["S"] = "S";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["S"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["S"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["T"] = "T";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["T"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["T"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["TIME"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["TIME"] = "";
	$fieldLabelsPMT_GOLD_PURCHASE_SUB[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_GOLD_PURCHASE_SUB[""]["MONTHLY_REPORT"] = "";
	if (count($fieldToolTipsPMT_GOLD_PURCHASE_SUB[""]))
		$tdataPMT_GOLD_PURCHASE_SUB[".isUseToolTips"] = true;
}


	$tdataPMT_GOLD_PURCHASE_SUB[".NCSearch"] = true;



$tdataPMT_GOLD_PURCHASE_SUB[".shortTableName"] = "PMT_GOLD_PURCHASE_SUB";
$tdataPMT_GOLD_PURCHASE_SUB[".nSecOptions"] = 0;
$tdataPMT_GOLD_PURCHASE_SUB[".recsPerRowPrint"] = 1;
$tdataPMT_GOLD_PURCHASE_SUB[".mainTableOwnerID"] = "";
$tdataPMT_GOLD_PURCHASE_SUB[".moveNext"] = 1;
$tdataPMT_GOLD_PURCHASE_SUB[".entityType"] = 0;

$tdataPMT_GOLD_PURCHASE_SUB[".strOriginalTableName"] = "PMT_GOLD_PURCHASE_SUB";

	



$tdataPMT_GOLD_PURCHASE_SUB[".showAddInPopup"] = false;

$tdataPMT_GOLD_PURCHASE_SUB[".showEditInPopup"] = false;

$tdataPMT_GOLD_PURCHASE_SUB[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_GOLD_PURCHASE_SUB[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_GOLD_PURCHASE_SUB[".fieldsForRegister"] = array();

$tdataPMT_GOLD_PURCHASE_SUB[".listAjax"] = false;

	$tdataPMT_GOLD_PURCHASE_SUB[".audit"] = false;

	$tdataPMT_GOLD_PURCHASE_SUB[".locking"] = false;

$tdataPMT_GOLD_PURCHASE_SUB[".edit"] = true;
$tdataPMT_GOLD_PURCHASE_SUB[".afterEditAction"] = 1;
$tdataPMT_GOLD_PURCHASE_SUB[".closePopupAfterEdit"] = 1;
$tdataPMT_GOLD_PURCHASE_SUB[".afterEditActionDetTable"] = "";

$tdataPMT_GOLD_PURCHASE_SUB[".add"] = true;
$tdataPMT_GOLD_PURCHASE_SUB[".afterAddAction"] = 1;
$tdataPMT_GOLD_PURCHASE_SUB[".closePopupAfterAdd"] = 1;
$tdataPMT_GOLD_PURCHASE_SUB[".afterAddActionDetTable"] = "";

$tdataPMT_GOLD_PURCHASE_SUB[".list"] = true;



$tdataPMT_GOLD_PURCHASE_SUB[".reorderRecordsByHeader"] = true;



$tdataPMT_GOLD_PURCHASE_SUB[".inlineAdd"] = true;
$tdataPMT_GOLD_PURCHASE_SUB[".view"] = true;

$tdataPMT_GOLD_PURCHASE_SUB[".import"] = true;

$tdataPMT_GOLD_PURCHASE_SUB[".exportTo"] = true;

$tdataPMT_GOLD_PURCHASE_SUB[".printFriendly"] = true;

$tdataPMT_GOLD_PURCHASE_SUB[".delete"] = true;

$tdataPMT_GOLD_PURCHASE_SUB[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_GOLD_PURCHASE_SUB[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_GOLD_PURCHASE_SUB[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_GOLD_PURCHASE_SUB[".searchSaving"] = false;
//

$tdataPMT_GOLD_PURCHASE_SUB[".showSearchPanel"] = true;
		$tdataPMT_GOLD_PURCHASE_SUB[".flexibleSearch"] = true;

$tdataPMT_GOLD_PURCHASE_SUB[".isUseAjaxSuggest"] = true;

$tdataPMT_GOLD_PURCHASE_SUB[".rowHighlite"] = true;



																

$tdataPMT_GOLD_PURCHASE_SUB[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_GOLD_PURCHASE_SUB[".buttonsAdded"] = false;

$tdataPMT_GOLD_PURCHASE_SUB[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_GOLD_PURCHASE_SUB[".isUseTimeForSearch"] = false;



$tdataPMT_GOLD_PURCHASE_SUB[".badgeColor"] = "daa520";


$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".filterFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".requiredSearchFields"] = array();

$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "APP_UIDSUB";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "ROW";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "A";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "B";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "C";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "D";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "E";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "F";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "G";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "I";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "J";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "K";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "L";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "M";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "N";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "O";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "P";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "APP_UID";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "R";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "S";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "T";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "TIME";
	$tdataPMT_GOLD_PURCHASE_SUB[".allSearchFields"][] = "MONTHLY_REPORT";
	

$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".googleLikeFields"][] = "MONTHLY_REPORT";


$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".advSearchFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".tableType"] = "list";

$tdataPMT_GOLD_PURCHASE_SUB[".printerPageOrientation"] = 0;
$tdataPMT_GOLD_PURCHASE_SUB[".nPrinterPageScale"] = 100;

$tdataPMT_GOLD_PURCHASE_SUB[".nPrinterSplitRecords"] = 40;

$tdataPMT_GOLD_PURCHASE_SUB[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_GOLD_PURCHASE_SUB[".geocodingEnabled"] = false;





$tdataPMT_GOLD_PURCHASE_SUB[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_GOLD_PURCHASE_SUB[".pageSize"] = 20;

$tdataPMT_GOLD_PURCHASE_SUB[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_GOLD_PURCHASE_SUB[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_GOLD_PURCHASE_SUB[".orderindexes"] = array();

$tdataPMT_GOLD_PURCHASE_SUB[".sqlHead"] = "SELECT APP_UIDSUB,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_UID,  	R,  	S,  	T,  	`TIME`,  	MONTHLY_REPORT";
$tdataPMT_GOLD_PURCHASE_SUB[".sqlFrom"] = "FROM PMT_GOLD_PURCHASE_SUB";
$tdataPMT_GOLD_PURCHASE_SUB[".sqlWhereExpr"] = "";
$tdataPMT_GOLD_PURCHASE_SUB[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_GOLD_PURCHASE_SUB[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_GOLD_PURCHASE_SUB[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_GOLD_PURCHASE_SUB[".highlightSearchResults"] = true;

$tableKeysPMT_GOLD_PURCHASE_SUB = array();
$tableKeysPMT_GOLD_PURCHASE_SUB[] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".Keys"] = $tableKeysPMT_GOLD_PURCHASE_SUB;

$tdataPMT_GOLD_PURCHASE_SUB[".listFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".listFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".hideMobileList"] = array();


$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".viewFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".addFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".addFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".masterListFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineAddFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".editFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".editFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".inlineEditFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".updateSelectedFields"][] = "MONTHLY_REPORT";


$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".exportFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".importFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".importFields"][] = "MONTHLY_REPORT";

$tdataPMT_GOLD_PURCHASE_SUB[".printFields"] = array();
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "APP_UIDSUB";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "APP_NUMBER";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "APP_STATUS";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "ROW";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "A";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "B";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "C";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "D";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "E";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "F";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "G";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "H";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "I";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "J";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "K";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "L";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "M";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "N";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "O";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "P";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "APP_UID";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "R";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "S";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "T";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "TIME";
$tdataPMT_GOLD_PURCHASE_SUB[".printFields"][] = "MONTHLY_REPORT";

//	APP_UIDSUB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UIDSUB";
	$fdata["GoodName"] = "APP_UIDSUB";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","APP_UIDSUB");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_UIDSUB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UIDSUB";

	
	
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




	$tdataPMT_GOLD_PURCHASE_SUB["APP_UIDSUB"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","APP_NUMBER");
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




	$tdataPMT_GOLD_PURCHASE_SUB["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","APP_STATUS");
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




	$tdataPMT_GOLD_PURCHASE_SUB["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","ROW");
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




	$tdataPMT_GOLD_PURCHASE_SUB["ROW"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","A");
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




	$tdataPMT_GOLD_PURCHASE_SUB["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","B");
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




	$tdataPMT_GOLD_PURCHASE_SUB["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","C");
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




	$tdataPMT_GOLD_PURCHASE_SUB["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","D");
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




	$tdataPMT_GOLD_PURCHASE_SUB["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","E");
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




	$tdataPMT_GOLD_PURCHASE_SUB["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","F");
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




	$tdataPMT_GOLD_PURCHASE_SUB["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","G");
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




	$tdataPMT_GOLD_PURCHASE_SUB["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","H");
	$fdata["FieldType"] = 128;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "H";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
	



	
	
	
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








	$tdataPMT_GOLD_PURCHASE_SUB["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","I");
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

		$fdata["strField"] = "I";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "I";

	
	
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




	$tdataPMT_GOLD_PURCHASE_SUB["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","J");
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




	$tdataPMT_GOLD_PURCHASE_SUB["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","K");
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




	$tdataPMT_GOLD_PURCHASE_SUB["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","L");
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




	$tdataPMT_GOLD_PURCHASE_SUB["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","M");
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




	$tdataPMT_GOLD_PURCHASE_SUB["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","N");
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




	$tdataPMT_GOLD_PURCHASE_SUB["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","O");
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




	$tdataPMT_GOLD_PURCHASE_SUB["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","P");
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




	$tdataPMT_GOLD_PURCHASE_SUB["P"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","APP_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "PMT_GOLD_PURCHASE";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "APP_UID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "APP_UID";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataPMT_GOLD_PURCHASE_SUB["APP_UID"] = $fdata;
//	R
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "R";
	$fdata["GoodName"] = "R";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","R");
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




	$tdataPMT_GOLD_PURCHASE_SUB["R"] = $fdata;
//	S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "S";
	$fdata["GoodName"] = "S";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","S");
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




	$tdataPMT_GOLD_PURCHASE_SUB["S"] = $fdata;
//	T
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "T";
	$fdata["GoodName"] = "T";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","T");
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




	$tdataPMT_GOLD_PURCHASE_SUB["T"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","TIME");
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




	$tdataPMT_GOLD_PURCHASE_SUB["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_GOLD_PURCHASE_SUB";
	$fdata["Label"] = GetFieldLabel("PMT_GOLD_PURCHASE_SUB","MONTHLY_REPORT");
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




	$tdataPMT_GOLD_PURCHASE_SUB["MONTHLY_REPORT"] = $fdata;


$tables_data["PMT_GOLD_PURCHASE_SUB"]=&$tdataPMT_GOLD_PURCHASE_SUB;
$field_labels["PMT_GOLD_PURCHASE_SUB"] = &$fieldLabelsPMT_GOLD_PURCHASE_SUB;
$fieldToolTips["PMT_GOLD_PURCHASE_SUB"] = &$fieldToolTipsPMT_GOLD_PURCHASE_SUB;
$placeHolders["PMT_GOLD_PURCHASE_SUB"] = &$placeHoldersPMT_GOLD_PURCHASE_SUB;
$page_titles["PMT_GOLD_PURCHASE_SUB"] = &$pageTitlesPMT_GOLD_PURCHASE_SUB;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_GOLD_PURCHASE_SUB"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_GOLD_PURCHASE_SUB"] = array();


	
				$strOriginalDetailsTable="PMT_GOLD_PURCHASE";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PMT_GOLD_PURCHASE";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PMT_GOLD_PURCHASE";
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
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PMT_GOLD_PURCHASE_SUB"][0] = $masterParams;
				$masterTablesData["PMT_GOLD_PURCHASE_SUB"][0]["masterKeys"] = array();
	$masterTablesData["PMT_GOLD_PURCHASE_SUB"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["PMT_GOLD_PURCHASE_SUB"][0]["detailKeys"] = array();
	$masterTablesData["PMT_GOLD_PURCHASE_SUB"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_GOLD_PURCHASE_SUB()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UIDSUB,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_UID,  	R,  	S,  	T,  	`TIME`,  	MONTHLY_REPORT";
$proto0["m_strFrom"] = "FROM PMT_GOLD_PURCHASE_SUB";
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
	"m_strName" => "APP_UIDSUB",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto6["m_sql"] = "APP_UIDSUB";
$proto6["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto14["m_sql"] = "A";
$proto14["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto16["m_sql"] = "B";
$proto16["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto18["m_sql"] = "C";
$proto18["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto20["m_sql"] = "D";
$proto20["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto22["m_sql"] = "E";
$proto22["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto24["m_sql"] = "F";
$proto24["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto26["m_sql"] = "G";
$proto26["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto28["m_sql"] = "H";
$proto28["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto30["m_sql"] = "I";
$proto30["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto32["m_sql"] = "J";
$proto32["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto34["m_sql"] = "K";
$proto34["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto36["m_sql"] = "L";
$proto36["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto38["m_sql"] = "M";
$proto38["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto40["m_sql"] = "N";
$proto40["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto42["m_sql"] = "O";
$proto42["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto44["m_sql"] = "P";
$proto44["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto46["m_sql"] = "APP_UID";
$proto46["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "R",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto48["m_sql"] = "R";
$proto48["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "S",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto50["m_sql"] = "S";
$proto50["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "T",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto52["m_sql"] = "T";
$proto52["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto54["m_sql"] = "`TIME`";
$proto54["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_GOLD_PURCHASE_SUB",
	"m_srcTableName" => "PMT_GOLD_PURCHASE_SUB"
));

$proto56["m_sql"] = "MONTHLY_REPORT";
$proto56["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_GOLD_PURCHASE_SUB";
$proto59["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "APP_UIDSUB";
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
$proto59["m_columns"][] = "APP_UID";
$proto59["m_columns"][] = "R";
$proto59["m_columns"][] = "S";
$proto59["m_columns"][] = "T";
$proto59["m_columns"][] = "TIME";
$proto59["m_columns"][] = "MONTHLY_REPORT";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "PMT_GOLD_PURCHASE_SUB";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_GOLD_PURCHASE_SUB";
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
$proto0["m_srcTableName"]="PMT_GOLD_PURCHASE_SUB";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_GOLD_PURCHASE_SUB = createSqlQuery_PMT_GOLD_PURCHASE_SUB();


	
						;

																										

$tdataPMT_GOLD_PURCHASE_SUB[".sqlquery"] = $queryData_PMT_GOLD_PURCHASE_SUB;

$tableEvents["PMT_GOLD_PURCHASE_SUB"] = new eventsBase;
$tdataPMT_GOLD_PURCHASE_SUB[".hasEvents"] = false;

?>
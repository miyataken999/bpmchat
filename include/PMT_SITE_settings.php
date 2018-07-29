<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_SITE = array();
	$tdataPMT_SITE[".truncateText"] = true;
	$tdataPMT_SITE[".NumberOfChars"] = 80;
	$tdataPMT_SITE[".ShortName"] = "PMT_SITE";
	$tdataPMT_SITE[".OwnerID"] = "";
	$tdataPMT_SITE[".OriginalTable"] = "PMT_SITE";

//	field labels
$fieldLabelsPMT_SITE = array();
$fieldToolTipsPMT_SITE = array();
$pageTitlesPMT_SITE = array();
$placeHoldersPMT_SITE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_SITE["Japanese"] = array();
	$fieldToolTipsPMT_SITE["Japanese"] = array();
	$placeHoldersPMT_SITE["Japanese"] = array();
	$pageTitlesPMT_SITE["Japanese"] = array();
	$fieldLabelsPMT_SITE["Japanese"]["APP_UID"] = "ユニークID";
	$fieldToolTipsPMT_SITE["Japanese"]["APP_UID"] = "テキストエリア";
	$placeHoldersPMT_SITE["Japanese"]["APP_UID"] = "100";
	$fieldLabelsPMT_SITE["Japanese"]["A"] = "非保険者証明書";
	$fieldToolTipsPMT_SITE["Japanese"]["A"] = "テキストエリア";
	$placeHoldersPMT_SITE["Japanese"]["A"] = "4)[dtext:chatroom_changed][/info]";
	$fieldLabelsPMT_SITE["Japanese"]["B"] = "記号";
	$fieldToolTipsPMT_SITE["Japanese"]["B"] = "テキストエリア";
	$placeHoldersPMT_SITE["Japanese"]["B"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["C"] = "番号";
	$fieldToolTipsPMT_SITE["Japanese"]["C"] = "時間表示";
	$placeHoldersPMT_SITE["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_SITE["Japanese"]["D"] = "生年月日";
	$fieldToolTipsPMT_SITE["Japanese"]["D"] = "時間表示";
	$placeHoldersPMT_SITE["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["E"] = "年";
	$fieldToolTipsPMT_SITE["Japanese"]["E"] = "数値";
	$placeHoldersPMT_SITE["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["F"] = "月";
	$fieldToolTipsPMT_SITE["Japanese"]["F"] = "時間表示";
	$placeHoldersPMT_SITE["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["G"] = "一日";
	$fieldToolTipsPMT_SITE["Japanese"]["G"] = "テキスト";
	$placeHoldersPMT_SITE["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["H"] = "氏名";
	$fieldToolTipsPMT_SITE["Japanese"]["H"] = "テキスト";
	$placeHoldersPMT_SITE["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["I"] = "住所";
	$fieldToolTipsPMT_SITE["Japanese"]["I"] = "テキストエリア";
	$placeHoldersPMT_SITE["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["J"] = "電話番号";
	$fieldToolTipsPMT_SITE["Japanese"]["J"] = "テキスト";
	$placeHoldersPMT_SITE["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["K"] = "金融機関名称";
	$fieldToolTipsPMT_SITE["Japanese"]["K"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_SITE["Japanese"]["L"] = "預金種別";
	$fieldToolTipsPMT_SITE["Japanese"]["L"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["L"] = " concurrent data structures";
	$fieldLabelsPMT_SITE["Japanese"]["M"] = "口座番号";
	$fieldToolTipsPMT_SITE["Japanese"]["M"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["M"] = "説明１";
	$fieldLabelsPMT_SITE["Japanese"]["N"] = "口座名";
	$fieldToolTipsPMT_SITE["Japanese"]["N"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["N"] = "説明１";
	$fieldLabelsPMT_SITE["Japanese"]["O"] = "口座名義の区分";
	$fieldToolTipsPMT_SITE["Japanese"]["O"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["O"] = "説明１";
	$fieldLabelsPMT_SITE["Japanese"]["P"] = "被保険者";
	$fieldToolTipsPMT_SITE["Japanese"]["P"] = "数値";
	$placeHoldersPMT_SITE["Japanese"]["P"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SITE["Japanese"]["APP_NUMBER"] = "被保険被保険者住所";
	$fieldToolTipsPMT_SITE["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_SITE["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SITE["Japanese"]["APP_STATUS"] = "登録日";
	$fieldToolTipsPMT_SITE["Japanese"]["APP_STATUS"] = "数値";
	$placeHoldersPMT_SITE["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SITE["Japanese"]["ROW"] = "代理人住所";
	$fieldToolTipsPMT_SITE["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_SITE["Japanese"]["ROW"] = "[a-z]+";
	$fieldLabelsPMT_SITE["Japanese"]["EMPLOYEE_NO"] = "代理人電話";
	$fieldToolTipsPMT_SITE["Japanese"]["EMPLOYEE_NO"] = "数値";
	$placeHoldersPMT_SITE["Japanese"]["EMPLOYEE_NO"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE["Japanese"]["TIME"] = "代理店指名";
	$fieldToolTipsPMT_SITE["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_SITE["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_SITE["Japanese"]["MONTHLY_REPORT"] = "被保険者との関係";
	$fieldToolTipsPMT_SITE["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "電話番号";
	$fieldToolTipsPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "説明１";
	$fieldLabelsPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "住所1";
	$fieldToolTipsPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "説明１";
	$fieldLabelsPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "住所に";
	$fieldToolTipsPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "リストボックス";
	$placeHoldersPMT_SITE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "説明１";
	if (count($fieldToolTipsPMT_SITE["Japanese"]))
		$tdataPMT_SITE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_SITE["English"] = array();
	$fieldToolTipsPMT_SITE["English"] = array();
	$placeHoldersPMT_SITE["English"] = array();
	$pageTitlesPMT_SITE["English"] = array();
	$fieldLabelsPMT_SITE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SITE["English"]["APP_UID"] = "";
	$placeHoldersPMT_SITE["English"]["APP_UID"] = "";
	$fieldLabelsPMT_SITE["English"]["A"] = "A";
	$fieldToolTipsPMT_SITE["English"]["A"] = "";
	$placeHoldersPMT_SITE["English"]["A"] = "";
	$fieldLabelsPMT_SITE["English"]["B"] = "B";
	$fieldToolTipsPMT_SITE["English"]["B"] = "";
	$placeHoldersPMT_SITE["English"]["B"] = "";
	$fieldLabelsPMT_SITE["English"]["C"] = "C";
	$fieldToolTipsPMT_SITE["English"]["C"] = "";
	$placeHoldersPMT_SITE["English"]["C"] = "";
	$fieldLabelsPMT_SITE["English"]["D"] = "D";
	$fieldToolTipsPMT_SITE["English"]["D"] = "";
	$placeHoldersPMT_SITE["English"]["D"] = "";
	$fieldLabelsPMT_SITE["English"]["E"] = "E";
	$fieldToolTipsPMT_SITE["English"]["E"] = "";
	$placeHoldersPMT_SITE["English"]["E"] = "";
	$fieldLabelsPMT_SITE["English"]["F"] = "F";
	$fieldToolTipsPMT_SITE["English"]["F"] = "";
	$placeHoldersPMT_SITE["English"]["F"] = "";
	$fieldLabelsPMT_SITE["English"]["G"] = "G";
	$fieldToolTipsPMT_SITE["English"]["G"] = "";
	$placeHoldersPMT_SITE["English"]["G"] = "";
	$fieldLabelsPMT_SITE["English"]["H"] = "H";
	$fieldToolTipsPMT_SITE["English"]["H"] = "";
	$placeHoldersPMT_SITE["English"]["H"] = "";
	$fieldLabelsPMT_SITE["English"]["I"] = "I";
	$fieldToolTipsPMT_SITE["English"]["I"] = "";
	$placeHoldersPMT_SITE["English"]["I"] = "";
	$fieldLabelsPMT_SITE["English"]["J"] = "J";
	$fieldToolTipsPMT_SITE["English"]["J"] = "";
	$placeHoldersPMT_SITE["English"]["J"] = "";
	$fieldLabelsPMT_SITE["English"]["K"] = "K";
	$fieldToolTipsPMT_SITE["English"]["K"] = "";
	$placeHoldersPMT_SITE["English"]["K"] = "";
	$fieldLabelsPMT_SITE["English"]["L"] = "L";
	$fieldToolTipsPMT_SITE["English"]["L"] = "";
	$placeHoldersPMT_SITE["English"]["L"] = "";
	$fieldLabelsPMT_SITE["English"]["M"] = "M";
	$fieldToolTipsPMT_SITE["English"]["M"] = "";
	$placeHoldersPMT_SITE["English"]["M"] = "";
	$fieldLabelsPMT_SITE["English"]["N"] = "N";
	$fieldToolTipsPMT_SITE["English"]["N"] = "";
	$placeHoldersPMT_SITE["English"]["N"] = "";
	$fieldLabelsPMT_SITE["English"]["O"] = "O";
	$fieldToolTipsPMT_SITE["English"]["O"] = "";
	$placeHoldersPMT_SITE["English"]["O"] = "";
	$fieldLabelsPMT_SITE["English"]["P"] = "P";
	$fieldToolTipsPMT_SITE["English"]["P"] = "";
	$placeHoldersPMT_SITE["English"]["P"] = "";
	$fieldLabelsPMT_SITE["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SITE["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_SITE["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SITE["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SITE["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_SITE["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_SITE["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SITE["English"]["ROW"] = "";
	$placeHoldersPMT_SITE["English"]["ROW"] = "";
	$fieldLabelsPMT_SITE["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_SITE["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_SITE["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_SITE["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_SITE["English"]["TIME"] = "";
	$placeHoldersPMT_SITE["English"]["TIME"] = "";
	$fieldLabelsPMT_SITE["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_SITE["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_SITE["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_SITE["English"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_SITE["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_SITE["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_SITE["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_SITE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_SITE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_SITE["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_SITE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_SITE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_SITE["English"]))
		$tdataPMT_SITE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_SITE[""] = array();
	$fieldToolTipsPMT_SITE[""] = array();
	$placeHoldersPMT_SITE[""] = array();
	$pageTitlesPMT_SITE[""] = array();
	$fieldLabelsPMT_SITE[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SITE[""]["APP_UID"] = "";
	$placeHoldersPMT_SITE[""]["APP_UID"] = "";
	$fieldLabelsPMT_SITE[""]["A"] = "A";
	$fieldToolTipsPMT_SITE[""]["A"] = "";
	$placeHoldersPMT_SITE[""]["A"] = "";
	$fieldLabelsPMT_SITE[""]["B"] = "B";
	$fieldToolTipsPMT_SITE[""]["B"] = "";
	$placeHoldersPMT_SITE[""]["B"] = "";
	$fieldLabelsPMT_SITE[""]["C"] = "C";
	$fieldToolTipsPMT_SITE[""]["C"] = "";
	$placeHoldersPMT_SITE[""]["C"] = "";
	$fieldLabelsPMT_SITE[""]["D"] = "D";
	$fieldToolTipsPMT_SITE[""]["D"] = "";
	$placeHoldersPMT_SITE[""]["D"] = "";
	$fieldLabelsPMT_SITE[""]["E"] = "E";
	$fieldToolTipsPMT_SITE[""]["E"] = "";
	$placeHoldersPMT_SITE[""]["E"] = "";
	$fieldLabelsPMT_SITE[""]["F"] = "F";
	$fieldToolTipsPMT_SITE[""]["F"] = "";
	$placeHoldersPMT_SITE[""]["F"] = "";
	$fieldLabelsPMT_SITE[""]["G"] = "G";
	$fieldToolTipsPMT_SITE[""]["G"] = "";
	$placeHoldersPMT_SITE[""]["G"] = "";
	$fieldLabelsPMT_SITE[""]["H"] = "H";
	$fieldToolTipsPMT_SITE[""]["H"] = "";
	$placeHoldersPMT_SITE[""]["H"] = "";
	$fieldLabelsPMT_SITE[""]["I"] = "I";
	$fieldToolTipsPMT_SITE[""]["I"] = "";
	$placeHoldersPMT_SITE[""]["I"] = "";
	$fieldLabelsPMT_SITE[""]["J"] = "J";
	$fieldToolTipsPMT_SITE[""]["J"] = "";
	$placeHoldersPMT_SITE[""]["J"] = "";
	$fieldLabelsPMT_SITE[""]["K"] = "K";
	$fieldToolTipsPMT_SITE[""]["K"] = "";
	$placeHoldersPMT_SITE[""]["K"] = "";
	$fieldLabelsPMT_SITE[""]["L"] = "L";
	$fieldToolTipsPMT_SITE[""]["L"] = "";
	$placeHoldersPMT_SITE[""]["L"] = "";
	$fieldLabelsPMT_SITE[""]["M"] = "M";
	$fieldToolTipsPMT_SITE[""]["M"] = "";
	$placeHoldersPMT_SITE[""]["M"] = "";
	$fieldLabelsPMT_SITE[""]["N"] = "N";
	$fieldToolTipsPMT_SITE[""]["N"] = "";
	$placeHoldersPMT_SITE[""]["N"] = "";
	$fieldLabelsPMT_SITE[""]["O"] = "O";
	$fieldToolTipsPMT_SITE[""]["O"] = "";
	$placeHoldersPMT_SITE[""]["O"] = "";
	$fieldLabelsPMT_SITE[""]["P"] = "P";
	$fieldToolTipsPMT_SITE[""]["P"] = "";
	$placeHoldersPMT_SITE[""]["P"] = "";
	$fieldLabelsPMT_SITE[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SITE[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_SITE[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SITE[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SITE[""]["APP_STATUS"] = "";
	$placeHoldersPMT_SITE[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_SITE[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_SITE[""]["ROW"] = "";
	$placeHoldersPMT_SITE[""]["ROW"] = "";
	$fieldLabelsPMT_SITE[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_SITE[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_SITE[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_SITE[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_SITE[""]["TIME"] = "";
	$placeHoldersPMT_SITE[""]["TIME"] = "";
	$fieldLabelsPMT_SITE[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_SITE[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_SITE[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_SITE[""]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_SITE[""]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_SITE[""]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_SITE[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_SITE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_SITE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_SITE[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_SITE[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_SITE[""]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_SITE[""]))
		$tdataPMT_SITE[".isUseToolTips"] = true;
}


	$tdataPMT_SITE[".NCSearch"] = true;



$tdataPMT_SITE[".shortTableName"] = "PMT_SITE";
$tdataPMT_SITE[".nSecOptions"] = 0;
$tdataPMT_SITE[".recsPerRowPrint"] = 1;
$tdataPMT_SITE[".mainTableOwnerID"] = "";
$tdataPMT_SITE[".moveNext"] = 1;
$tdataPMT_SITE[".entityType"] = 0;

$tdataPMT_SITE[".strOriginalTableName"] = "PMT_SITE";

	



$tdataPMT_SITE[".showAddInPopup"] = true;

$tdataPMT_SITE[".showEditInPopup"] = true;

$tdataPMT_SITE[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdataPMT_SITE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_SITE[".fieldsForRegister"] = array();
	
$tdataPMT_SITE[".listAjax"] = false;

	$tdataPMT_SITE[".audit"] = false;

	$tdataPMT_SITE[".locking"] = false;

$tdataPMT_SITE[".edit"] = true;
$tdataPMT_SITE[".afterEditAction"] = 1;
$tdataPMT_SITE[".closePopupAfterEdit"] = 1;
$tdataPMT_SITE[".afterEditActionDetTable"] = "";

$tdataPMT_SITE[".add"] = true;
$tdataPMT_SITE[".afterAddAction"] = 1;
$tdataPMT_SITE[".closePopupAfterAdd"] = 1;
$tdataPMT_SITE[".afterAddActionDetTable"] = "";

$tdataPMT_SITE[".list"] = true;

$tdataPMT_SITE[".inlineEdit"] = true;

$tdataPMT_SITE[".updateSelected"] = true;

$tdataPMT_SITE[".reorderRecordsByHeader"] = true;
$tdataPMT_SITE[".createSortByDropdown"] = true;
$tdataPMT_SITE[".strSortControlSettingsJSON"] = "";

$tdataPMT_SITE[".strClickActionJSON"] = "{\"fields\":{\"A\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_STATUS\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_UID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"B\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"BUSINESS_CONFIRMATION_17\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"BUSINESS_CONFIRMATION_18\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"BUSINESS_CONFIRMATION_19\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"C\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"D\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"E\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EMPLOYEE_NO\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"F\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"G\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"H\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"I\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"J\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"K\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"L\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"M\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MONTHLY_REPORT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"N\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"O\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"P\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ROW\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TIME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}}";


$tdataPMT_SITE[".inlineAdd"] = true;
$tdataPMT_SITE[".copy"] = true;
$tdataPMT_SITE[".view"] = true;

$tdataPMT_SITE[".import"] = true;

$tdataPMT_SITE[".exportTo"] = true;

$tdataPMT_SITE[".printFriendly"] = true;

$tdataPMT_SITE[".delete"] = true;

$tdataPMT_SITE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPMT_SITE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPMT_SITE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPMT_SITE[".searchSaving"] = false;
//

$tdataPMT_SITE[".showSearchPanel"] = true;
		$tdataPMT_SITE[".flexibleSearch"] = true;

$tdataPMT_SITE[".isUseAjaxSuggest"] = true;

$tdataPMT_SITE[".rowHighlite"] = true;



				

$tdataPMT_SITE[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_SITE[".buttonsAdded"] = false;

$tdataPMT_SITE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_SITE[".isUseTimeForSearch"] = false;





$tdataPMT_SITE[".allSearchFields"] = array();
$tdataPMT_SITE[".filterFields"] = array();
$tdataPMT_SITE[".requiredSearchFields"] = array();

$tdataPMT_SITE[".allSearchFields"][] = "APP_UID";
	$tdataPMT_SITE[".allSearchFields"][] = "A";
	$tdataPMT_SITE[".allSearchFields"][] = "B";
	$tdataPMT_SITE[".allSearchFields"][] = "C";
	$tdataPMT_SITE[".allSearchFields"][] = "D";
	$tdataPMT_SITE[".allSearchFields"][] = "E";
	$tdataPMT_SITE[".allSearchFields"][] = "F";
	$tdataPMT_SITE[".allSearchFields"][] = "G";
	$tdataPMT_SITE[".allSearchFields"][] = "H";
	$tdataPMT_SITE[".allSearchFields"][] = "I";
	$tdataPMT_SITE[".allSearchFields"][] = "J";
	$tdataPMT_SITE[".allSearchFields"][] = "K";
	$tdataPMT_SITE[".allSearchFields"][] = "L";
	$tdataPMT_SITE[".allSearchFields"][] = "M";
	$tdataPMT_SITE[".allSearchFields"][] = "N";
	$tdataPMT_SITE[".allSearchFields"][] = "O";
	$tdataPMT_SITE[".allSearchFields"][] = "P";
	$tdataPMT_SITE[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_SITE[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_SITE[".allSearchFields"][] = "ROW";
	$tdataPMT_SITE[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_SITE[".allSearchFields"][] = "TIME";
	$tdataPMT_SITE[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_SITE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_17";
	$tdataPMT_SITE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_18";
	$tdataPMT_SITE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_19";
	

$tdataPMT_SITE[".googleLikeFields"] = array();
$tdataPMT_SITE[".googleLikeFields"][] = "APP_UID";
$tdataPMT_SITE[".googleLikeFields"][] = "A";
$tdataPMT_SITE[".googleLikeFields"][] = "B";
$tdataPMT_SITE[".googleLikeFields"][] = "C";
$tdataPMT_SITE[".googleLikeFields"][] = "D";
$tdataPMT_SITE[".googleLikeFields"][] = "E";
$tdataPMT_SITE[".googleLikeFields"][] = "F";
$tdataPMT_SITE[".googleLikeFields"][] = "G";
$tdataPMT_SITE[".googleLikeFields"][] = "H";
$tdataPMT_SITE[".googleLikeFields"][] = "I";
$tdataPMT_SITE[".googleLikeFields"][] = "J";
$tdataPMT_SITE[".googleLikeFields"][] = "K";
$tdataPMT_SITE[".googleLikeFields"][] = "L";
$tdataPMT_SITE[".googleLikeFields"][] = "M";
$tdataPMT_SITE[".googleLikeFields"][] = "N";
$tdataPMT_SITE[".googleLikeFields"][] = "O";
$tdataPMT_SITE[".googleLikeFields"][] = "P";
$tdataPMT_SITE[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_SITE[".googleLikeFields"][] = "ROW";
$tdataPMT_SITE[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".googleLikeFields"][] = "TIME";
$tdataPMT_SITE[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_SITE[".advSearchFields"] = array();
$tdataPMT_SITE[".advSearchFields"][] = "APP_UID";
$tdataPMT_SITE[".advSearchFields"][] = "A";
$tdataPMT_SITE[".advSearchFields"][] = "B";
$tdataPMT_SITE[".advSearchFields"][] = "C";
$tdataPMT_SITE[".advSearchFields"][] = "D";
$tdataPMT_SITE[".advSearchFields"][] = "E";
$tdataPMT_SITE[".advSearchFields"][] = "F";
$tdataPMT_SITE[".advSearchFields"][] = "G";
$tdataPMT_SITE[".advSearchFields"][] = "H";
$tdataPMT_SITE[".advSearchFields"][] = "I";
$tdataPMT_SITE[".advSearchFields"][] = "J";
$tdataPMT_SITE[".advSearchFields"][] = "K";
$tdataPMT_SITE[".advSearchFields"][] = "L";
$tdataPMT_SITE[".advSearchFields"][] = "M";
$tdataPMT_SITE[".advSearchFields"][] = "N";
$tdataPMT_SITE[".advSearchFields"][] = "O";
$tdataPMT_SITE[".advSearchFields"][] = "P";
$tdataPMT_SITE[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_SITE[".advSearchFields"][] = "ROW";
$tdataPMT_SITE[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".advSearchFields"][] = "TIME";
$tdataPMT_SITE[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".tableType"] = "list";

$tdataPMT_SITE[".printerPageOrientation"] = 0;
$tdataPMT_SITE[".nPrinterPageScale"] = 100;

$tdataPMT_SITE[".nPrinterSplitRecords"] = 40;

$tdataPMT_SITE[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_SITE[".geocodingEnabled"] = false;





$tdataPMT_SITE[".listGridLayout"] = 3;





// view page pdf
$tdataPMT_SITE[".isViewPagePDF"] = true;
$tdataPMT_SITE[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataPMT_SITE[".isPrinterPagePDF"] = true;
$tdataPMT_SITE[".nPrinterPagePDFScale"] = 100;


$tdataPMT_SITE[".pageSize"] = 20;

$tdataPMT_SITE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_SITE[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_SITE[".orderindexes"] = array();

$tdataPMT_SITE[".sqlHead"] = "SELECT APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$tdataPMT_SITE[".sqlFrom"] = "FROM PMT_SITE";
$tdataPMT_SITE[".sqlWhereExpr"] = "";
$tdataPMT_SITE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_SITE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_SITE[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_SITE[".highlightSearchResults"] = true;

$tableKeysPMT_SITE = array();
$tableKeysPMT_SITE[] = "APP_UID";
$tdataPMT_SITE[".Keys"] = $tableKeysPMT_SITE;

$tdataPMT_SITE[".listFields"] = array();
$tdataPMT_SITE[".listFields"][] = "APP_UID";
$tdataPMT_SITE[".listFields"][] = "A";
$tdataPMT_SITE[".listFields"][] = "B";
$tdataPMT_SITE[".listFields"][] = "C";
$tdataPMT_SITE[".listFields"][] = "D";
$tdataPMT_SITE[".listFields"][] = "E";
$tdataPMT_SITE[".listFields"][] = "F";
$tdataPMT_SITE[".listFields"][] = "G";
$tdataPMT_SITE[".listFields"][] = "H";
$tdataPMT_SITE[".listFields"][] = "I";
$tdataPMT_SITE[".listFields"][] = "J";
$tdataPMT_SITE[".listFields"][] = "K";
$tdataPMT_SITE[".listFields"][] = "L";
$tdataPMT_SITE[".listFields"][] = "M";
$tdataPMT_SITE[".listFields"][] = "N";
$tdataPMT_SITE[".listFields"][] = "O";
$tdataPMT_SITE[".listFields"][] = "P";
$tdataPMT_SITE[".listFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".listFields"][] = "APP_STATUS";
$tdataPMT_SITE[".listFields"][] = "ROW";
$tdataPMT_SITE[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".listFields"][] = "TIME";
$tdataPMT_SITE[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".listFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".listFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".listFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".hideMobileList"] = array();


$tdataPMT_SITE[".viewFields"] = array();
$tdataPMT_SITE[".viewFields"][] = "APP_UID";
$tdataPMT_SITE[".viewFields"][] = "A";
$tdataPMT_SITE[".viewFields"][] = "B";
$tdataPMT_SITE[".viewFields"][] = "C";
$tdataPMT_SITE[".viewFields"][] = "D";
$tdataPMT_SITE[".viewFields"][] = "E";
$tdataPMT_SITE[".viewFields"][] = "F";
$tdataPMT_SITE[".viewFields"][] = "G";
$tdataPMT_SITE[".viewFields"][] = "H";
$tdataPMT_SITE[".viewFields"][] = "I";
$tdataPMT_SITE[".viewFields"][] = "J";
$tdataPMT_SITE[".viewFields"][] = "K";
$tdataPMT_SITE[".viewFields"][] = "L";
$tdataPMT_SITE[".viewFields"][] = "M";
$tdataPMT_SITE[".viewFields"][] = "N";
$tdataPMT_SITE[".viewFields"][] = "O";
$tdataPMT_SITE[".viewFields"][] = "P";
$tdataPMT_SITE[".viewFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".viewFields"][] = "APP_STATUS";
$tdataPMT_SITE[".viewFields"][] = "ROW";
$tdataPMT_SITE[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".viewFields"][] = "TIME";
$tdataPMT_SITE[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".viewFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".viewFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".viewFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".addFields"] = array();
$tdataPMT_SITE[".addFields"][] = "A";
$tdataPMT_SITE[".addFields"][] = "B";
$tdataPMT_SITE[".addFields"][] = "C";
$tdataPMT_SITE[".addFields"][] = "D";
$tdataPMT_SITE[".addFields"][] = "E";
$tdataPMT_SITE[".addFields"][] = "F";
$tdataPMT_SITE[".addFields"][] = "G";
$tdataPMT_SITE[".addFields"][] = "H";
$tdataPMT_SITE[".addFields"][] = "I";
$tdataPMT_SITE[".addFields"][] = "J";
$tdataPMT_SITE[".addFields"][] = "K";
$tdataPMT_SITE[".addFields"][] = "L";
$tdataPMT_SITE[".addFields"][] = "M";
$tdataPMT_SITE[".addFields"][] = "N";
$tdataPMT_SITE[".addFields"][] = "O";
$tdataPMT_SITE[".addFields"][] = "P";
$tdataPMT_SITE[".addFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".addFields"][] = "APP_STATUS";
$tdataPMT_SITE[".addFields"][] = "ROW";
$tdataPMT_SITE[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".addFields"][] = "TIME";
$tdataPMT_SITE[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".addFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".addFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".addFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".masterListFields"] = array();
$tdataPMT_SITE[".masterListFields"][] = "APP_UID";
$tdataPMT_SITE[".masterListFields"][] = "A";
$tdataPMT_SITE[".masterListFields"][] = "B";
$tdataPMT_SITE[".masterListFields"][] = "C";
$tdataPMT_SITE[".masterListFields"][] = "D";
$tdataPMT_SITE[".masterListFields"][] = "E";
$tdataPMT_SITE[".masterListFields"][] = "F";
$tdataPMT_SITE[".masterListFields"][] = "G";
$tdataPMT_SITE[".masterListFields"][] = "H";
$tdataPMT_SITE[".masterListFields"][] = "I";
$tdataPMT_SITE[".masterListFields"][] = "J";
$tdataPMT_SITE[".masterListFields"][] = "K";
$tdataPMT_SITE[".masterListFields"][] = "L";
$tdataPMT_SITE[".masterListFields"][] = "M";
$tdataPMT_SITE[".masterListFields"][] = "N";
$tdataPMT_SITE[".masterListFields"][] = "O";
$tdataPMT_SITE[".masterListFields"][] = "P";
$tdataPMT_SITE[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".masterListFields"][] = "APP_STATUS";
$tdataPMT_SITE[".masterListFields"][] = "ROW";
$tdataPMT_SITE[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".masterListFields"][] = "TIME";
$tdataPMT_SITE[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".masterListFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".masterListFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".masterListFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".inlineAddFields"] = array();
$tdataPMT_SITE[".inlineAddFields"][] = "A";
$tdataPMT_SITE[".inlineAddFields"][] = "B";
$tdataPMT_SITE[".inlineAddFields"][] = "C";
$tdataPMT_SITE[".inlineAddFields"][] = "D";
$tdataPMT_SITE[".inlineAddFields"][] = "E";
$tdataPMT_SITE[".inlineAddFields"][] = "F";
$tdataPMT_SITE[".inlineAddFields"][] = "G";
$tdataPMT_SITE[".inlineAddFields"][] = "H";
$tdataPMT_SITE[".inlineAddFields"][] = "I";
$tdataPMT_SITE[".inlineAddFields"][] = "J";
$tdataPMT_SITE[".inlineAddFields"][] = "K";
$tdataPMT_SITE[".inlineAddFields"][] = "L";
$tdataPMT_SITE[".inlineAddFields"][] = "M";
$tdataPMT_SITE[".inlineAddFields"][] = "N";
$tdataPMT_SITE[".inlineAddFields"][] = "O";
$tdataPMT_SITE[".inlineAddFields"][] = "P";
$tdataPMT_SITE[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_SITE[".inlineAddFields"][] = "ROW";
$tdataPMT_SITE[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".inlineAddFields"][] = "TIME";
$tdataPMT_SITE[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".editFields"] = array();
$tdataPMT_SITE[".editFields"][] = "A";
$tdataPMT_SITE[".editFields"][] = "B";
$tdataPMT_SITE[".editFields"][] = "C";
$tdataPMT_SITE[".editFields"][] = "D";
$tdataPMT_SITE[".editFields"][] = "E";
$tdataPMT_SITE[".editFields"][] = "F";
$tdataPMT_SITE[".editFields"][] = "G";
$tdataPMT_SITE[".editFields"][] = "H";
$tdataPMT_SITE[".editFields"][] = "I";
$tdataPMT_SITE[".editFields"][] = "J";
$tdataPMT_SITE[".editFields"][] = "K";
$tdataPMT_SITE[".editFields"][] = "L";
$tdataPMT_SITE[".editFields"][] = "M";
$tdataPMT_SITE[".editFields"][] = "N";
$tdataPMT_SITE[".editFields"][] = "O";
$tdataPMT_SITE[".editFields"][] = "P";
$tdataPMT_SITE[".editFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".editFields"][] = "APP_STATUS";
$tdataPMT_SITE[".editFields"][] = "ROW";
$tdataPMT_SITE[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".editFields"][] = "TIME";
$tdataPMT_SITE[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".editFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".editFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".editFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".inlineEditFields"] = array();
$tdataPMT_SITE[".inlineEditFields"][] = "A";
$tdataPMT_SITE[".inlineEditFields"][] = "B";
$tdataPMT_SITE[".inlineEditFields"][] = "C";
$tdataPMT_SITE[".inlineEditFields"][] = "D";
$tdataPMT_SITE[".inlineEditFields"][] = "E";
$tdataPMT_SITE[".inlineEditFields"][] = "F";
$tdataPMT_SITE[".inlineEditFields"][] = "G";
$tdataPMT_SITE[".inlineEditFields"][] = "H";
$tdataPMT_SITE[".inlineEditFields"][] = "I";
$tdataPMT_SITE[".inlineEditFields"][] = "J";
$tdataPMT_SITE[".inlineEditFields"][] = "K";
$tdataPMT_SITE[".inlineEditFields"][] = "L";
$tdataPMT_SITE[".inlineEditFields"][] = "M";
$tdataPMT_SITE[".inlineEditFields"][] = "N";
$tdataPMT_SITE[".inlineEditFields"][] = "O";
$tdataPMT_SITE[".inlineEditFields"][] = "P";
$tdataPMT_SITE[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_SITE[".inlineEditFields"][] = "ROW";
$tdataPMT_SITE[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".inlineEditFields"][] = "TIME";
$tdataPMT_SITE[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".updateSelectedFields"] = array();
$tdataPMT_SITE[".updateSelectedFields"][] = "A";
$tdataPMT_SITE[".updateSelectedFields"][] = "B";
$tdataPMT_SITE[".updateSelectedFields"][] = "F";
$tdataPMT_SITE[".updateSelectedFields"][] = "G";
$tdataPMT_SITE[".updateSelectedFields"][] = "H";
$tdataPMT_SITE[".updateSelectedFields"][] = "I";
$tdataPMT_SITE[".updateSelectedFields"][] = "J";
$tdataPMT_SITE[".updateSelectedFields"][] = "K";
$tdataPMT_SITE[".updateSelectedFields"][] = "L";
$tdataPMT_SITE[".updateSelectedFields"][] = "M";
$tdataPMT_SITE[".updateSelectedFields"][] = "N";
$tdataPMT_SITE[".updateSelectedFields"][] = "O";
$tdataPMT_SITE[".updateSelectedFields"][] = "P";
$tdataPMT_SITE[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_SITE[".updateSelectedFields"][] = "ROW";
$tdataPMT_SITE[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".updateSelectedFields"][] = "TIME";
$tdataPMT_SITE[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_SITE[".exportFields"] = array();
$tdataPMT_SITE[".exportFields"][] = "APP_UID";
$tdataPMT_SITE[".exportFields"][] = "A";
$tdataPMT_SITE[".exportFields"][] = "B";
$tdataPMT_SITE[".exportFields"][] = "C";
$tdataPMT_SITE[".exportFields"][] = "D";
$tdataPMT_SITE[".exportFields"][] = "E";
$tdataPMT_SITE[".exportFields"][] = "F";
$tdataPMT_SITE[".exportFields"][] = "G";
$tdataPMT_SITE[".exportFields"][] = "H";
$tdataPMT_SITE[".exportFields"][] = "I";
$tdataPMT_SITE[".exportFields"][] = "J";
$tdataPMT_SITE[".exportFields"][] = "K";
$tdataPMT_SITE[".exportFields"][] = "L";
$tdataPMT_SITE[".exportFields"][] = "M";
$tdataPMT_SITE[".exportFields"][] = "N";
$tdataPMT_SITE[".exportFields"][] = "O";
$tdataPMT_SITE[".exportFields"][] = "P";
$tdataPMT_SITE[".exportFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".exportFields"][] = "APP_STATUS";
$tdataPMT_SITE[".exportFields"][] = "ROW";
$tdataPMT_SITE[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".exportFields"][] = "TIME";
$tdataPMT_SITE[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".exportFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".exportFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".exportFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".importFields"] = array();
$tdataPMT_SITE[".importFields"][] = "APP_UID";
$tdataPMT_SITE[".importFields"][] = "A";
$tdataPMT_SITE[".importFields"][] = "B";
$tdataPMT_SITE[".importFields"][] = "C";
$tdataPMT_SITE[".importFields"][] = "D";
$tdataPMT_SITE[".importFields"][] = "E";
$tdataPMT_SITE[".importFields"][] = "F";
$tdataPMT_SITE[".importFields"][] = "G";
$tdataPMT_SITE[".importFields"][] = "H";
$tdataPMT_SITE[".importFields"][] = "I";
$tdataPMT_SITE[".importFields"][] = "J";
$tdataPMT_SITE[".importFields"][] = "K";
$tdataPMT_SITE[".importFields"][] = "L";
$tdataPMT_SITE[".importFields"][] = "M";
$tdataPMT_SITE[".importFields"][] = "N";
$tdataPMT_SITE[".importFields"][] = "O";
$tdataPMT_SITE[".importFields"][] = "P";
$tdataPMT_SITE[".importFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".importFields"][] = "APP_STATUS";
$tdataPMT_SITE[".importFields"][] = "ROW";
$tdataPMT_SITE[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".importFields"][] = "TIME";
$tdataPMT_SITE[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".importFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".importFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".importFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE[".printFields"] = array();
$tdataPMT_SITE[".printFields"][] = "APP_UID";
$tdataPMT_SITE[".printFields"][] = "A";
$tdataPMT_SITE[".printFields"][] = "B";
$tdataPMT_SITE[".printFields"][] = "C";
$tdataPMT_SITE[".printFields"][] = "D";
$tdataPMT_SITE[".printFields"][] = "E";
$tdataPMT_SITE[".printFields"][] = "F";
$tdataPMT_SITE[".printFields"][] = "G";
$tdataPMT_SITE[".printFields"][] = "H";
$tdataPMT_SITE[".printFields"][] = "I";
$tdataPMT_SITE[".printFields"][] = "J";
$tdataPMT_SITE[".printFields"][] = "K";
$tdataPMT_SITE[".printFields"][] = "L";
$tdataPMT_SITE[".printFields"][] = "M";
$tdataPMT_SITE[".printFields"][] = "N";
$tdataPMT_SITE[".printFields"][] = "O";
$tdataPMT_SITE[".printFields"][] = "P";
$tdataPMT_SITE[".printFields"][] = "APP_NUMBER";
$tdataPMT_SITE[".printFields"][] = "APP_STATUS";
$tdataPMT_SITE[".printFields"][] = "ROW";
$tdataPMT_SITE[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE[".printFields"][] = "TIME";
$tdataPMT_SITE[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE[".printFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE[".printFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE[".printFields"][] = "BUSINESS_CONFIRMATION_19";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","APP_UID");
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




	$tdataPMT_SITE["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","A");
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




	$tdataPMT_SITE["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","B");
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




	$tdataPMT_SITE["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","C");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataPMT_SITE["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","D");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataPMT_SITE["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","E");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataPMT_SITE["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","F");
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




	$tdataPMT_SITE["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","G");
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




	$tdataPMT_SITE["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","H");
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




	$tdataPMT_SITE["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","I");
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




	$tdataPMT_SITE["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","J");
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




	$tdataPMT_SITE["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","K");
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




	$tdataPMT_SITE["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","L");
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




	$tdataPMT_SITE["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","M");
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




	$tdataPMT_SITE["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","N");
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




	$tdataPMT_SITE["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","O");
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




	$tdataPMT_SITE["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","P");
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




	$tdataPMT_SITE["P"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","APP_NUMBER");
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




	$tdataPMT_SITE["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","APP_STATUS");
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




	$tdataPMT_SITE["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","ROW");
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




	$tdataPMT_SITE["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","EMPLOYEE_NO");
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




	$tdataPMT_SITE["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","TIME");
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




	$tdataPMT_SITE["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","MONTHLY_REPORT");
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




	$tdataPMT_SITE["MONTHLY_REPORT"] = $fdata;
//	BUSINESS_CONFIRMATION_17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","BUSINESS_CONFIRMATION_17");
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




	$tdataPMT_SITE["BUSINESS_CONFIRMATION_17"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","BUSINESS_CONFIRMATION_18");
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




	$tdataPMT_SITE["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_SITE";
	$fdata["Label"] = GetFieldLabel("PMT_SITE","BUSINESS_CONFIRMATION_19");
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




	$tdataPMT_SITE["BUSINESS_CONFIRMATION_19"] = $fdata;


$tables_data["PMT_SITE"]=&$tdataPMT_SITE;
$field_labels["PMT_SITE"] = &$fieldLabelsPMT_SITE;
$fieldToolTips["PMT_SITE"] = &$fieldToolTipsPMT_SITE;
$placeHolders["PMT_SITE"] = &$placeHoldersPMT_SITE;
$page_titles["PMT_SITE"] = &$pageTitlesPMT_SITE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_SITE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_SITE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_SITE()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$proto3["m_strFrom"] = "FROM PMT_SITE";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
	
						;
			$proto3["cipherer"] = null;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto3["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto9["m_sql"] = "APP_UID";
$proto9["m_srcTableName"] = "PMT_SITE";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto11["m_sql"] = "A";
$proto11["m_srcTableName"] = "PMT_SITE";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto13["m_sql"] = "B";
$proto13["m_srcTableName"] = "PMT_SITE";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto15["m_sql"] = "C";
$proto15["m_srcTableName"] = "PMT_SITE";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto17["m_sql"] = "D";
$proto17["m_srcTableName"] = "PMT_SITE";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto19["m_sql"] = "E";
$proto19["m_srcTableName"] = "PMT_SITE";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto21["m_sql"] = "F";
$proto21["m_srcTableName"] = "PMT_SITE";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto23["m_sql"] = "G";
$proto23["m_srcTableName"] = "PMT_SITE";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto25["m_sql"] = "H";
$proto25["m_srcTableName"] = "PMT_SITE";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto27["m_sql"] = "I";
$proto27["m_srcTableName"] = "PMT_SITE";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto29["m_sql"] = "J";
$proto29["m_srcTableName"] = "PMT_SITE";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto31["m_sql"] = "K";
$proto31["m_srcTableName"] = "PMT_SITE";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto33["m_sql"] = "L";
$proto33["m_srcTableName"] = "PMT_SITE";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto35["m_sql"] = "M";
$proto35["m_srcTableName"] = "PMT_SITE";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto3["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto37["m_sql"] = "N";
$proto37["m_srcTableName"] = "PMT_SITE";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto3["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto39["m_sql"] = "O";
$proto39["m_srcTableName"] = "PMT_SITE";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto3["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto41["m_sql"] = "P";
$proto41["m_srcTableName"] = "PMT_SITE";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto3["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto43["m_sql"] = "APP_NUMBER";
$proto43["m_srcTableName"] = "PMT_SITE";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto3["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto45["m_sql"] = "APP_STATUS";
$proto45["m_srcTableName"] = "PMT_SITE";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto3["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto47["m_sql"] = "`ROW`";
$proto47["m_srcTableName"] = "PMT_SITE";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto3["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto49["m_sql"] = "EMPLOYEE_NO";
$proto49["m_srcTableName"] = "PMT_SITE";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto3["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto51["m_sql"] = "`TIME`";
$proto51["m_srcTableName"] = "PMT_SITE";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto3["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto53["m_sql"] = "MONTHLY_REPORT";
$proto53["m_srcTableName"] = "PMT_SITE";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto3["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_17",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto55["m_sql"] = "BUSINESS_CONFIRMATION_17";
$proto55["m_srcTableName"] = "PMT_SITE";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto3["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto57["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto57["m_srcTableName"] = "PMT_SITE";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto3["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_SITE",
	"m_srcTableName" => "PMT_SITE"
));

$proto59["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto59["m_srcTableName"] = "PMT_SITE";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto61=array();
$proto61["m_link"] = "SQLL_MAIN";
			$proto62=array();
$proto62["m_strName"] = "PMT_SITE";
$proto62["m_srcTableName"] = "PMT_SITE";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "APP_UID";
$proto62["m_columns"][] = "A";
$proto62["m_columns"][] = "B";
$proto62["m_columns"][] = "C";
$proto62["m_columns"][] = "D";
$proto62["m_columns"][] = "E";
$proto62["m_columns"][] = "F";
$proto62["m_columns"][] = "G";
$proto62["m_columns"][] = "H";
$proto62["m_columns"][] = "I";
$proto62["m_columns"][] = "J";
$proto62["m_columns"][] = "K";
$proto62["m_columns"][] = "L";
$proto62["m_columns"][] = "M";
$proto62["m_columns"][] = "N";
$proto62["m_columns"][] = "O";
$proto62["m_columns"][] = "P";
$proto62["m_columns"][] = "APP_NUMBER";
$proto62["m_columns"][] = "APP_STATUS";
$proto62["m_columns"][] = "ROW";
$proto62["m_columns"][] = "EMPLOYEE_NO";
$proto62["m_columns"][] = "TIME";
$proto62["m_columns"][] = "MONTHLY_REPORT";
$proto62["m_columns"][] = "BUSINESS_CONFIRMATION_17";
$proto62["m_columns"][] = "BUSINESS_CONFIRMATION_18";
$proto62["m_columns"][] = "BUSINESS_CONFIRMATION_19";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "PMT_SITE";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "PMT_SITE";
$proto63=array();
$proto63["m_sql"] = "";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="PMT_SITE";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_PMT_SITE = createSqlQuery_PMT_SITE();


	
						;

																										

$tdataPMT_SITE[".sqlquery"] = $queryData_PMT_SITE;

$tableEvents["PMT_SITE"] = new eventsBase;
$tdataPMT_SITE[".hasEvents"] = false;

?>
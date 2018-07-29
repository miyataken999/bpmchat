<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_ANNUAL_REVENUE = array();
	$tdataPMT_ANNUAL_REVENUE[".truncateText"] = true;
	$tdataPMT_ANNUAL_REVENUE[".NumberOfChars"] = 80;
	$tdataPMT_ANNUAL_REVENUE[".ShortName"] = "PMT_ANNUAL_REVENUE";
	$tdataPMT_ANNUAL_REVENUE[".OwnerID"] = "";
	$tdataPMT_ANNUAL_REVENUE[".OriginalTable"] = "PMT_ANNUAL_REVENUE";

//	field labels
$fieldLabelsPMT_ANNUAL_REVENUE = array();
$fieldToolTipsPMT_ANNUAL_REVENUE = array();
$pageTitlesPMT_ANNUAL_REVENUE = array();
$placeHoldersPMT_ANNUAL_REVENUE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"] = array();
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"] = array();
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"] = array();
	$pageTitlesPMT_ANNUAL_REVENUE["Japanese"] = array();
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["APP_UID"] = "ユニークID";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["APP_UID"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["APP_UID"] = "100";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["A"] = "収入金額夫";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["A"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["A"] = "4)[dtext:chatroom_changed][/info]";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["B"] = "収入金額妻";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["B"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["B"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["C"] = "夫所得税";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["C"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["D"] = "妻の所得税";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["D"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["E"] = "社会保険料";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["E"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["F"] = "住民税";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["F"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["G"] = "年間の手取り収入";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["G"] = "テキスト";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["H"] = "収入計画";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["H"] = "テキスト";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["I"] = "所得税";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["I"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["J"] = "社会保険料";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["J"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["K"] = "住民税";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["K"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["L"] = "基本生活費";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["L"] = "テキスト";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["L"] = " concurrent data structures";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["M"] = "住居関連品";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["M"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["M"] = "説明１";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["N"] = "車両費";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["N"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["N"] = "説明１";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["O"] = "教育費";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["O"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["O"] = "説明１";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["P"] = "保険料";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["P"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["P"] = "[1-9]{0.12}";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["APP_NUMBER"] = "その他の支出";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["APP_STATUS"] = "1年間貯蓄できるわ";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["APP_STATUS"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["ROW"] = "代理人住所";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["ROW"] = "[a-z]+";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["EMPLOYEE_NO"] = "代理人電話";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["EMPLOYEE_NO"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["EMPLOYEE_NO"] = "yyyy-mm-dd";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["TIME"] = "代理店指名";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["MONTHLY_REPORT"] = "被保険者との関係";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "電話番号";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "リストボックス";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_17"] = "説明１";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "住所1";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "リストボックス";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_18"] = "説明１";
	$fieldLabelsPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "住所に";
	$fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "リストボックス";
	$placeHoldersPMT_ANNUAL_REVENUE["Japanese"]["BUSINESS_CONFIRMATION_19"] = "説明１";
	if (count($fieldToolTipsPMT_ANNUAL_REVENUE["Japanese"]))
		$tdataPMT_ANNUAL_REVENUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_ANNUAL_REVENUE["English"] = array();
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"] = array();
	$placeHoldersPMT_ANNUAL_REVENUE["English"] = array();
	$pageTitlesPMT_ANNUAL_REVENUE["English"] = array();
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["APP_UID"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["APP_UID"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["A"] = "A";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["A"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["A"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["B"] = "B";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["B"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["B"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["C"] = "C";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["C"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["C"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["D"] = "D";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["D"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["D"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["E"] = "E";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["E"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["E"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["F"] = "F";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["F"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["F"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["G"] = "G";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["G"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["G"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["H"] = "H";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["H"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["H"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["I"] = "I";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["I"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["I"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["J"] = "J";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["J"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["J"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["K"] = "K";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["K"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["K"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["L"] = "L";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["L"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["L"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["M"] = "M";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["M"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["M"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["N"] = "N";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["N"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["N"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["O"] = "O";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["O"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["O"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["P"] = "P";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["P"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["P"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["ROW"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["ROW"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["TIME"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["TIME"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE["English"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_ANNUAL_REVENUE["English"]))
		$tdataPMT_ANNUAL_REVENUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_ANNUAL_REVENUE[""] = array();
	$fieldToolTipsPMT_ANNUAL_REVENUE[""] = array();
	$placeHoldersPMT_ANNUAL_REVENUE[""] = array();
	$pageTitlesPMT_ANNUAL_REVENUE[""] = array();
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["APP_UID"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["APP_UID"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["A"] = "A";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["A"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["A"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["B"] = "B";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["B"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["B"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["C"] = "C";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["C"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["C"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["D"] = "D";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["D"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["D"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["E"] = "E";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["E"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["E"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["F"] = "F";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["F"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["F"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["G"] = "G";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["G"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["G"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["H"] = "H";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["H"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["H"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["I"] = "I";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["I"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["I"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["J"] = "J";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["J"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["J"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["K"] = "K";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["K"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["K"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["L"] = "L";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["L"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["L"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["M"] = "M";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["M"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["M"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["N"] = "N";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["N"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["N"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["O"] = "O";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["O"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["O"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["P"] = "P";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["P"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["P"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["APP_STATUS"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["ROW"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["ROW"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["TIME"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["TIME"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_ANNUAL_REVENUE[""]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_ANNUAL_REVENUE[""]))
		$tdataPMT_ANNUAL_REVENUE[".isUseToolTips"] = true;
}


	$tdataPMT_ANNUAL_REVENUE[".NCSearch"] = true;



$tdataPMT_ANNUAL_REVENUE[".shortTableName"] = "PMT_ANNUAL_REVENUE";
$tdataPMT_ANNUAL_REVENUE[".nSecOptions"] = 0;
$tdataPMT_ANNUAL_REVENUE[".recsPerRowPrint"] = 1;
$tdataPMT_ANNUAL_REVENUE[".mainTableOwnerID"] = "";
$tdataPMT_ANNUAL_REVENUE[".moveNext"] = 1;
$tdataPMT_ANNUAL_REVENUE[".entityType"] = 0;

$tdataPMT_ANNUAL_REVENUE[".strOriginalTableName"] = "PMT_ANNUAL_REVENUE";

	



$tdataPMT_ANNUAL_REVENUE[".showAddInPopup"] = true;

$tdataPMT_ANNUAL_REVENUE[".showEditInPopup"] = true;

$tdataPMT_ANNUAL_REVENUE[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdataPMT_ANNUAL_REVENUE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_ANNUAL_REVENUE[".fieldsForRegister"] = array();
	
$tdataPMT_ANNUAL_REVENUE[".listAjax"] = false;

	$tdataPMT_ANNUAL_REVENUE[".audit"] = false;

	$tdataPMT_ANNUAL_REVENUE[".locking"] = false;

$tdataPMT_ANNUAL_REVENUE[".edit"] = true;
$tdataPMT_ANNUAL_REVENUE[".afterEditAction"] = 1;
$tdataPMT_ANNUAL_REVENUE[".closePopupAfterEdit"] = 1;
$tdataPMT_ANNUAL_REVENUE[".afterEditActionDetTable"] = "";

$tdataPMT_ANNUAL_REVENUE[".add"] = true;
$tdataPMT_ANNUAL_REVENUE[".afterAddAction"] = 1;
$tdataPMT_ANNUAL_REVENUE[".closePopupAfterAdd"] = 1;
$tdataPMT_ANNUAL_REVENUE[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataPMT_ANNUAL_REVENUE[".list"] = true;

$tdataPMT_ANNUAL_REVENUE[".inlineEdit"] = true;

$tdataPMT_ANNUAL_REVENUE[".updateSelected"] = true;

$tdataPMT_ANNUAL_REVENUE[".reorderRecordsByHeader"] = true;
$tdataPMT_ANNUAL_REVENUE[".createSortByDropdown"] = true;
$tdataPMT_ANNUAL_REVENUE[".strSortControlSettingsJSON"] = "";

$tdataPMT_ANNUAL_REVENUE[".strClickActionJSON"] = "{\"fields\":{\"A\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_STATUS\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_UID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"B\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"BUSINESS_CONFIRMATION_17\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"BUSINESS_CONFIRMATION_18\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"BUSINESS_CONFIRMATION_19\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"C\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"D\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"E\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EMPLOYEE_NO\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"F\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"G\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"H\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"I\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"J\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"K\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"L\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"M\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MONTHLY_REPORT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"N\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"O\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"P\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ROW\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TIME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdataPMT_ANNUAL_REVENUE[".inlineAdd"] = true;
$tdataPMT_ANNUAL_REVENUE[".copy"] = true;
$tdataPMT_ANNUAL_REVENUE[".view"] = true;

$tdataPMT_ANNUAL_REVENUE[".import"] = true;

$tdataPMT_ANNUAL_REVENUE[".exportTo"] = true;

$tdataPMT_ANNUAL_REVENUE[".printFriendly"] = true;

$tdataPMT_ANNUAL_REVENUE[".delete"] = true;

$tdataPMT_ANNUAL_REVENUE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_ANNUAL_REVENUE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPMT_ANNUAL_REVENUE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPMT_ANNUAL_REVENUE[".searchSaving"] = false;
//

$tdataPMT_ANNUAL_REVENUE[".showSearchPanel"] = true;
		$tdataPMT_ANNUAL_REVENUE[".flexibleSearch"] = true;

$tdataPMT_ANNUAL_REVENUE[".isUseAjaxSuggest"] = true;

$tdataPMT_ANNUAL_REVENUE[".rowHighlite"] = true;



				

$tdataPMT_ANNUAL_REVENUE[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_ANNUAL_REVENUE[".buttonsAdded"] = false;

$tdataPMT_ANNUAL_REVENUE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_ANNUAL_REVENUE[".isUseTimeForSearch"] = false;





$tdataPMT_ANNUAL_REVENUE[".allSearchFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".filterFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".requiredSearchFields"] = array();

$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "APP_UID";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "A";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "B";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "C";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "D";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "E";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "F";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "G";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "H";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "I";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "J";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "K";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "L";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "M";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "N";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "O";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "P";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "ROW";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "TIME";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_17";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_18";
	$tdataPMT_ANNUAL_REVENUE[".allSearchFields"][] = "BUSINESS_CONFIRMATION_19";
	

$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_ANNUAL_REVENUE[".advSearchFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".advSearchFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".tableType"] = "list";

$tdataPMT_ANNUAL_REVENUE[".printerPageOrientation"] = 0;
$tdataPMT_ANNUAL_REVENUE[".nPrinterPageScale"] = 100;

$tdataPMT_ANNUAL_REVENUE[".nPrinterSplitRecords"] = 40;

$tdataPMT_ANNUAL_REVENUE[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_ANNUAL_REVENUE[".geocodingEnabled"] = false;





$tdataPMT_ANNUAL_REVENUE[".listGridLayout"] = 3;





// view page pdf
$tdataPMT_ANNUAL_REVENUE[".isViewPagePDF"] = true;
$tdataPMT_ANNUAL_REVENUE[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataPMT_ANNUAL_REVENUE[".isPrinterPagePDF"] = true;
$tdataPMT_ANNUAL_REVENUE[".nPrinterPagePDFScale"] = 100;


$tdataPMT_ANNUAL_REVENUE[".pageSize"] = 20;

$tdataPMT_ANNUAL_REVENUE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_ANNUAL_REVENUE[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_ANNUAL_REVENUE[".orderindexes"] = array();

$tdataPMT_ANNUAL_REVENUE[".sqlHead"] = "SELECT APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$tdataPMT_ANNUAL_REVENUE[".sqlFrom"] = "FROM PMT_ANNUAL_REVENUE";
$tdataPMT_ANNUAL_REVENUE[".sqlWhereExpr"] = "";
$tdataPMT_ANNUAL_REVENUE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_ANNUAL_REVENUE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_ANNUAL_REVENUE[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_ANNUAL_REVENUE[".highlightSearchResults"] = true;

$tableKeysPMT_ANNUAL_REVENUE = array();
$tableKeysPMT_ANNUAL_REVENUE[] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".Keys"] = $tableKeysPMT_ANNUAL_REVENUE;

$tdataPMT_ANNUAL_REVENUE[".listFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".listFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".hideMobileList"] = array();


$tdataPMT_ANNUAL_REVENUE[".viewFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".viewFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".addFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".addFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".masterListFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".masterListFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".editFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".editFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_ANNUAL_REVENUE[".exportFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".exportFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".importFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".importFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_ANNUAL_REVENUE[".printFields"] = array();
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "APP_UID";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "A";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "B";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "C";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "D";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "E";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "F";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "G";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "H";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "I";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "J";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "K";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "L";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "M";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "N";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "O";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "P";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "APP_NUMBER";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "APP_STATUS";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "ROW";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "TIME";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_ANNUAL_REVENUE[".printFields"][] = "BUSINESS_CONFIRMATION_19";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","APP_UID");
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




	$tdataPMT_ANNUAL_REVENUE["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","A");
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




	$tdataPMT_ANNUAL_REVENUE["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","B");
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




	$tdataPMT_ANNUAL_REVENUE["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","C");
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




	$tdataPMT_ANNUAL_REVENUE["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","D");
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




	$tdataPMT_ANNUAL_REVENUE["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","E");
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




	$tdataPMT_ANNUAL_REVENUE["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","F");
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




	$tdataPMT_ANNUAL_REVENUE["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","G");
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




	$tdataPMT_ANNUAL_REVENUE["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","H");
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




	$tdataPMT_ANNUAL_REVENUE["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","I");
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




	$tdataPMT_ANNUAL_REVENUE["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","J");
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




	$tdataPMT_ANNUAL_REVENUE["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","K");
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




	$tdataPMT_ANNUAL_REVENUE["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","L");
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




	$tdataPMT_ANNUAL_REVENUE["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","M");
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




	$tdataPMT_ANNUAL_REVENUE["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","N");
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




	$tdataPMT_ANNUAL_REVENUE["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","O");
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




	$tdataPMT_ANNUAL_REVENUE["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","P");
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




	$tdataPMT_ANNUAL_REVENUE["P"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","APP_NUMBER");
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




	$tdataPMT_ANNUAL_REVENUE["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","APP_STATUS");
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




	$tdataPMT_ANNUAL_REVENUE["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","ROW");
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




	$tdataPMT_ANNUAL_REVENUE["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","EMPLOYEE_NO");
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




	$tdataPMT_ANNUAL_REVENUE["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","TIME");
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




	$tdataPMT_ANNUAL_REVENUE["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","MONTHLY_REPORT");
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




	$tdataPMT_ANNUAL_REVENUE["MONTHLY_REPORT"] = $fdata;
//	BUSINESS_CONFIRMATION_17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","BUSINESS_CONFIRMATION_17");
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




	$tdataPMT_ANNUAL_REVENUE["BUSINESS_CONFIRMATION_17"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","BUSINESS_CONFIRMATION_18");
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




	$tdataPMT_ANNUAL_REVENUE["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_ANNUAL_REVENUE";
	$fdata["Label"] = GetFieldLabel("PMT_ANNUAL_REVENUE","BUSINESS_CONFIRMATION_19");
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




	$tdataPMT_ANNUAL_REVENUE["BUSINESS_CONFIRMATION_19"] = $fdata;


$tables_data["PMT_ANNUAL_REVENUE"]=&$tdataPMT_ANNUAL_REVENUE;
$field_labels["PMT_ANNUAL_REVENUE"] = &$fieldLabelsPMT_ANNUAL_REVENUE;
$fieldToolTips["PMT_ANNUAL_REVENUE"] = &$fieldToolTipsPMT_ANNUAL_REVENUE;
$placeHolders["PMT_ANNUAL_REVENUE"] = &$placeHoldersPMT_ANNUAL_REVENUE;
$page_titles["PMT_ANNUAL_REVENUE"] = &$pageTitlesPMT_ANNUAL_REVENUE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_ANNUAL_REVENUE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_ANNUAL_REVENUE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_ANNUAL_REVENUE()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$proto3["m_strFrom"] = "FROM PMT_ANNUAL_REVENUE";
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
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto9["m_sql"] = "APP_UID";
$proto9["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto11["m_sql"] = "A";
$proto11["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto13["m_sql"] = "B";
$proto13["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto15["m_sql"] = "C";
$proto15["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto17["m_sql"] = "D";
$proto17["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto19["m_sql"] = "E";
$proto19["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto21["m_sql"] = "F";
$proto21["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto23["m_sql"] = "G";
$proto23["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto25["m_sql"] = "H";
$proto25["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto27["m_sql"] = "I";
$proto27["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto29["m_sql"] = "J";
$proto29["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto31["m_sql"] = "K";
$proto31["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto33["m_sql"] = "L";
$proto33["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto35["m_sql"] = "M";
$proto35["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto3["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto37["m_sql"] = "N";
$proto37["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto3["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto39["m_sql"] = "O";
$proto39["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto3["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto41["m_sql"] = "P";
$proto41["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto3["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto43["m_sql"] = "APP_NUMBER";
$proto43["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto3["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto45["m_sql"] = "APP_STATUS";
$proto45["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto3["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto47["m_sql"] = "`ROW`";
$proto47["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto3["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto49["m_sql"] = "EMPLOYEE_NO";
$proto49["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto3["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto51["m_sql"] = "`TIME`";
$proto51["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto3["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto53["m_sql"] = "MONTHLY_REPORT";
$proto53["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto3["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_17",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto55["m_sql"] = "BUSINESS_CONFIRMATION_17";
$proto55["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto3["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto57["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto57["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto3["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_ANNUAL_REVENUE",
	"m_srcTableName" => "PMT_ANNUAL_REVENUE"
));

$proto59["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto59["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto61=array();
$proto61["m_link"] = "SQLL_MAIN";
			$proto62=array();
$proto62["m_strName"] = "PMT_ANNUAL_REVENUE";
$proto62["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
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
$proto61["m_sql"] = "PMT_ANNUAL_REVENUE";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "PMT_ANNUAL_REVENUE";
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
$proto3["m_srcTableName"]="PMT_ANNUAL_REVENUE";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_PMT_ANNUAL_REVENUE = createSqlQuery_PMT_ANNUAL_REVENUE();


	
						;

																										

$tdataPMT_ANNUAL_REVENUE[".sqlquery"] = $queryData_PMT_ANNUAL_REVENUE;

$tableEvents["PMT_ANNUAL_REVENUE"] = new eventsBase;
$tdataPMT_ANNUAL_REVENUE[".hasEvents"] = false;

?>
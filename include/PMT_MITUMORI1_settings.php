<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_MITUMORI1 = array();
	$tdataPMT_MITUMORI1[".truncateText"] = true;
	$tdataPMT_MITUMORI1[".NumberOfChars"] = 80;
	$tdataPMT_MITUMORI1[".ShortName"] = "PMT_MITUMORI1";
	$tdataPMT_MITUMORI1[".OwnerID"] = "K";
	$tdataPMT_MITUMORI1[".OriginalTable"] = "PMT_MITUMORI1";

//	field labels
$fieldLabelsPMT_MITUMORI1 = array();
$fieldToolTipsPMT_MITUMORI1 = array();
$pageTitlesPMT_MITUMORI1 = array();
$placeHoldersPMT_MITUMORI1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_MITUMORI1["Japanese"] = array();
	$fieldToolTipsPMT_MITUMORI1["Japanese"] = array();
	$placeHoldersPMT_MITUMORI1["Japanese"] = array();
	$pageTitlesPMT_MITUMORI1["Japanese"] = array();
	$fieldLabelsPMT_MITUMORI1["Japanese"]["APP_UID"] = "ユニークID";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["APP_UID"] = "テキストエリア";
	$placeHoldersPMT_MITUMORI1["Japanese"]["APP_UID"] = "おなまえ";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["A"] = "サンプルバージョン";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["A"] = "テキストエリア";
	$placeHoldersPMT_MITUMORI1["Japanese"]["A"] = "たんとうぶ";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["B"] = "担当部";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["B"] = "テキスト";
	$placeHoldersPMT_MITUMORI1["Japanese"]["B"] = "みつもりばんごう";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["C"] = "見積もり番号";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["C"] = "時間表示";
	$placeHoldersPMT_MITUMORI1["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["D"] = "見積もり日";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["D"] = "テキストエリア";
	$placeHoldersPMT_MITUMORI1["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["E"] = "画面の作成";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["E"] = "テキスト";
	$placeHoldersPMT_MITUMORI1["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["F"] = "これなんだ";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["F"] = "時間表示";
	$placeHoldersPMT_MITUMORI1["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["G"] = "納期";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["G"] = "テキスト";
	$placeHoldersPMT_MITUMORI1["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["H"] = "支払い条件";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["H"] = "テキスト";
	$placeHoldersPMT_MITUMORI1["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["I"] = "電話";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["I"] = "テキスト";
	$placeHoldersPMT_MITUMORI1["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["J"] = "大和工房すっこでらんね";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["J"] = "テキスト";
	$placeHoldersPMT_MITUMORI1["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["K"] = "サンプルをこれでいいのかな";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["K"] = "テキスト";
	$placeHoldersPMT_MITUMORI1["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["APP_STATUS"] = "just Close";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["APP_STATUS"] = "テキストエリア";
	$placeHoldersPMT_MITUMORI1["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["APP_NUMBER"] = "その他の支出";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["E_LABEL"] = "フリコトー";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["E_LABEL"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["E_LABEL"] = " concurrent data structures";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["A_LABEL"] = "システムセンス";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["A_LABEL"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["A_LABEL"] = "説明１";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["B_LABEL"] = "マジでそれは";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["B_LABEL"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["B_LABEL"] = "説明１";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["C_LABEL"] = "教育費";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["C_LABEL"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["C_LABEL"] = "説明１";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["D_LABEL"] = "メインライン";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["D_LABEL"] = "テキストエリア";
	$placeHoldersPMT_MITUMORI1["Japanese"]["D_LABEL"] = "[1-9]{0.12}";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["ROW"] = "代理人住所";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["ROW"] = "[a-z]+";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["EMPLOYEE_NO"] = "代理人電話";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["EMPLOYEE_NO"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["EMPLOYEE_NO"] = "yyyy-mm-dd";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["TIME"] = "代理店指名";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_MITUMORI1["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["MONTHLY_REPORT"] = "被保険者との関係";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_MITUMORI1["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_17"] = "電話番号";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_17"] = "リストボックス";
	$placeHoldersPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_17"] = "説明１";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_18"] = "住所1";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_18"] = "リストボックス";
	$placeHoldersPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_18"] = "説明１";
	$fieldLabelsPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_19"] = "住所に";
	$fieldToolTipsPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_19"] = "リストボックス";
	$placeHoldersPMT_MITUMORI1["Japanese"]["BUSINESS_CONFIRMATION_19"] = "説明１";
	if (count($fieldToolTipsPMT_MITUMORI1["Japanese"]))
		$tdataPMT_MITUMORI1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_MITUMORI1["English"] = array();
	$fieldToolTipsPMT_MITUMORI1["English"] = array();
	$placeHoldersPMT_MITUMORI1["English"] = array();
	$pageTitlesPMT_MITUMORI1["English"] = array();
	$fieldLabelsPMT_MITUMORI1["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_MITUMORI1["English"]["APP_UID"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["APP_UID"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["A"] = "A";
	$fieldToolTipsPMT_MITUMORI1["English"]["A"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["A"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["B"] = "B";
	$fieldToolTipsPMT_MITUMORI1["English"]["B"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["B"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["C"] = "C";
	$fieldToolTipsPMT_MITUMORI1["English"]["C"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["C"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["D"] = "D";
	$fieldToolTipsPMT_MITUMORI1["English"]["D"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["D"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["E"] = "E";
	$fieldToolTipsPMT_MITUMORI1["English"]["E"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["E"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["F"] = "F";
	$fieldToolTipsPMT_MITUMORI1["English"]["F"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["F"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["G"] = "G";
	$fieldToolTipsPMT_MITUMORI1["English"]["G"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["G"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["H"] = "H";
	$fieldToolTipsPMT_MITUMORI1["English"]["H"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["H"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["I"] = "I";
	$fieldToolTipsPMT_MITUMORI1["English"]["I"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["I"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["J"] = "J";
	$fieldToolTipsPMT_MITUMORI1["English"]["J"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["J"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["K"] = "K";
	$fieldToolTipsPMT_MITUMORI1["English"]["K"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["K"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_MITUMORI1["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_MITUMORI1["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_MITUMORI1["English"]["__PMT_MITUMORI1"] = "見積書";
	$fieldToolTipsPMT_MITUMORI1["English"]["__PMT_MITUMORI1"] = "";
	$placeHoldersPMT_MITUMORI1["English"]["__PMT_MITUMORI1"] = "";
	if (count($fieldToolTipsPMT_MITUMORI1["English"]))
		$tdataPMT_MITUMORI1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_MITUMORI1[""] = array();
	$fieldToolTipsPMT_MITUMORI1[""] = array();
	$placeHoldersPMT_MITUMORI1[""] = array();
	$pageTitlesPMT_MITUMORI1[""] = array();
	$fieldLabelsPMT_MITUMORI1[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_MITUMORI1[""]["APP_UID"] = "";
	$placeHoldersPMT_MITUMORI1[""]["APP_UID"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["A"] = "A";
	$fieldToolTipsPMT_MITUMORI1[""]["A"] = "";
	$placeHoldersPMT_MITUMORI1[""]["A"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["B"] = "B";
	$fieldToolTipsPMT_MITUMORI1[""]["B"] = "";
	$placeHoldersPMT_MITUMORI1[""]["B"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["C"] = "C";
	$fieldToolTipsPMT_MITUMORI1[""]["C"] = "";
	$placeHoldersPMT_MITUMORI1[""]["C"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["D"] = "D";
	$fieldToolTipsPMT_MITUMORI1[""]["D"] = "";
	$placeHoldersPMT_MITUMORI1[""]["D"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["E"] = "E";
	$fieldToolTipsPMT_MITUMORI1[""]["E"] = "";
	$placeHoldersPMT_MITUMORI1[""]["E"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["F"] = "F";
	$fieldToolTipsPMT_MITUMORI1[""]["F"] = "";
	$placeHoldersPMT_MITUMORI1[""]["F"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["G"] = "G";
	$fieldToolTipsPMT_MITUMORI1[""]["G"] = "";
	$placeHoldersPMT_MITUMORI1[""]["G"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["H"] = "H";
	$fieldToolTipsPMT_MITUMORI1[""]["H"] = "";
	$placeHoldersPMT_MITUMORI1[""]["H"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["I"] = "I";
	$fieldToolTipsPMT_MITUMORI1[""]["I"] = "";
	$placeHoldersPMT_MITUMORI1[""]["I"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["J"] = "J";
	$fieldToolTipsPMT_MITUMORI1[""]["J"] = "";
	$placeHoldersPMT_MITUMORI1[""]["J"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["K"] = "K";
	$fieldToolTipsPMT_MITUMORI1[""]["K"] = "";
	$placeHoldersPMT_MITUMORI1[""]["K"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_MITUMORI1[""]["APP_STATUS"] = "";
	$placeHoldersPMT_MITUMORI1[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_MITUMORI1[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_MITUMORI1[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_MITUMORI1[""]["APP_NUMBER"] = "";
	if (count($fieldToolTipsPMT_MITUMORI1[""]))
		$tdataPMT_MITUMORI1[".isUseToolTips"] = true;
}


	$tdataPMT_MITUMORI1[".NCSearch"] = true;



$tdataPMT_MITUMORI1[".shortTableName"] = "PMT_MITUMORI1";
$tdataPMT_MITUMORI1[".nSecOptions"] = 2;
$tdataPMT_MITUMORI1[".recsPerRowPrint"] = 1;
$tdataPMT_MITUMORI1[".mainTableOwnerID"] = "K";
$tdataPMT_MITUMORI1[".moveNext"] = 1;
$tdataPMT_MITUMORI1[".entityType"] = 0;

$tdataPMT_MITUMORI1[".strOriginalTableName"] = "PMT_MITUMORI1";

	



$tdataPMT_MITUMORI1[".showAddInPopup"] = false;

$tdataPMT_MITUMORI1[".showEditInPopup"] = false;

$tdataPMT_MITUMORI1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_MITUMORI1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_MITUMORI1[".fieldsForRegister"] = array();
	
$tdataPMT_MITUMORI1[".listAjax"] = false;

	$tdataPMT_MITUMORI1[".audit"] = false;

	$tdataPMT_MITUMORI1[".locking"] = false;

$tdataPMT_MITUMORI1[".edit"] = true;
$tdataPMT_MITUMORI1[".afterEditAction"] = 1;
$tdataPMT_MITUMORI1[".closePopupAfterEdit"] = 1;
$tdataPMT_MITUMORI1[".afterEditActionDetTable"] = "PMT_SUBCONTRACTORS";

$tdataPMT_MITUMORI1[".add"] = true;
$tdataPMT_MITUMORI1[".afterAddAction"] = 1;
$tdataPMT_MITUMORI1[".closePopupAfterAdd"] = 1;
$tdataPMT_MITUMORI1[".afterAddActionDetTable"] = "PMT_SUBCONTRACTORS";

$tdataPMT_MITUMORI1[".list"] = true;

$tdataPMT_MITUMORI1[".inlineEdit"] = true;

$tdataPMT_MITUMORI1[".updateSelected"] = true;

$tdataPMT_MITUMORI1[".reorderRecordsByHeader"] = true;

$tdataPMT_MITUMORI1[".strClickActionJSON"] = "{\"fields\":{\"A\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_STATUS\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_UID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"B\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"C\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"D\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"E\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"F\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"G\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"H\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"I\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"J\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"K\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"PMT_MITUMORI1_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"PMT_SUBCONTRACTORS\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"PMT_SUBCONTRACTORS\",\"url\":\"\"}}}";


$tdataPMT_MITUMORI1[".inlineAdd"] = true;
$tdataPMT_MITUMORI1[".copy"] = true;
$tdataPMT_MITUMORI1[".view"] = true;

$tdataPMT_MITUMORI1[".import"] = true;

$tdataPMT_MITUMORI1[".exportTo"] = true;

$tdataPMT_MITUMORI1[".printFriendly"] = true;

$tdataPMT_MITUMORI1[".delete"] = true;

$tdataPMT_MITUMORI1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_MITUMORI1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_MITUMORI1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_MITUMORI1[".searchSaving"] = false;
//

$tdataPMT_MITUMORI1[".showSearchPanel"] = true;
		$tdataPMT_MITUMORI1[".flexibleSearch"] = true;

$tdataPMT_MITUMORI1[".isUseAjaxSuggest"] = true;

$tdataPMT_MITUMORI1[".rowHighlite"] = true;



						
					


$tdataPMT_MITUMORI1[".ajaxCodeSnippetAdded"] = true;

$tdataPMT_MITUMORI1[".buttonsAdded"] = true;

$tdataPMT_MITUMORI1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataPMT_MITUMORI1[".isUseTimeForSearch"] = false;





$tdataPMT_MITUMORI1[".allSearchFields"] = array();
$tdataPMT_MITUMORI1[".filterFields"] = array();
$tdataPMT_MITUMORI1[".requiredSearchFields"] = array();

$tdataPMT_MITUMORI1[".allSearchFields"][] = "APP_UID";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "A";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "B";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "C";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "D";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "E";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "F";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "G";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "H";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "I";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "J";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "K";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_MITUMORI1[".allSearchFields"][] = "APP_NUMBER";
	

$tdataPMT_MITUMORI1[".googleLikeFields"] = array();
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "A";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "B";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "C";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "D";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "E";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "F";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "G";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "H";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "I";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "J";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "K";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".googleLikeFields"][] = "APP_NUMBER";


$tdataPMT_MITUMORI1[".advSearchFields"] = array();
$tdataPMT_MITUMORI1[".advSearchFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "A";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "B";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "C";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "D";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "E";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "F";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "G";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "H";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "I";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "J";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "K";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".advSearchFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".tableType"] = "list";

$tdataPMT_MITUMORI1[".printerPageOrientation"] = 0;
$tdataPMT_MITUMORI1[".nPrinterPageScale"] = 100;

$tdataPMT_MITUMORI1[".nPrinterSplitRecords"] = 40;

$tdataPMT_MITUMORI1[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_MITUMORI1[".geocodingEnabled"] = false;





$tdataPMT_MITUMORI1[".listGridLayout"] = 3;





// view page pdf
$tdataPMT_MITUMORI1[".isViewPagePDF"] = true;
$tdataPMT_MITUMORI1[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataPMT_MITUMORI1[".isPrinterPagePDF"] = true;
$tdataPMT_MITUMORI1[".nPrinterPagePDFScale"] = 100;


$tdataPMT_MITUMORI1[".pageSize"] = 20;

$tdataPMT_MITUMORI1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_MITUMORI1[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_MITUMORI1[".orderindexes"] = array();

$tdataPMT_MITUMORI1[".sqlHead"] = "SELECT APP_UID,  A,  B,  C,  D,  E,  F,  G,  H,  I,  J,  K,  APP_STATUS,  APP_NUMBER";
$tdataPMT_MITUMORI1[".sqlFrom"] = "FROM PMT_MITUMORI1";
$tdataPMT_MITUMORI1[".sqlWhereExpr"] = "";
$tdataPMT_MITUMORI1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_MITUMORI1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_MITUMORI1[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_MITUMORI1[".highlightSearchResults"] = true;

$tableKeysPMT_MITUMORI1 = array();
$tableKeysPMT_MITUMORI1[] = "APP_NUMBER";
$tdataPMT_MITUMORI1[".Keys"] = $tableKeysPMT_MITUMORI1;

$tdataPMT_MITUMORI1[".listFields"] = array();
$tdataPMT_MITUMORI1[".listFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".listFields"][] = "A";
$tdataPMT_MITUMORI1[".listFields"][] = "B";
$tdataPMT_MITUMORI1[".listFields"][] = "C";
$tdataPMT_MITUMORI1[".listFields"][] = "D";
$tdataPMT_MITUMORI1[".listFields"][] = "E";
$tdataPMT_MITUMORI1[".listFields"][] = "F";
$tdataPMT_MITUMORI1[".listFields"][] = "G";
$tdataPMT_MITUMORI1[".listFields"][] = "H";
$tdataPMT_MITUMORI1[".listFields"][] = "I";
$tdataPMT_MITUMORI1[".listFields"][] = "J";
$tdataPMT_MITUMORI1[".listFields"][] = "K";
$tdataPMT_MITUMORI1[".listFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".listFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".hideMobileList"] = array();


$tdataPMT_MITUMORI1[".viewFields"] = array();
$tdataPMT_MITUMORI1[".viewFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".viewFields"][] = "A";
$tdataPMT_MITUMORI1[".viewFields"][] = "B";
$tdataPMT_MITUMORI1[".viewFields"][] = "C";
$tdataPMT_MITUMORI1[".viewFields"][] = "D";
$tdataPMT_MITUMORI1[".viewFields"][] = "E";
$tdataPMT_MITUMORI1[".viewFields"][] = "F";
$tdataPMT_MITUMORI1[".viewFields"][] = "G";
$tdataPMT_MITUMORI1[".viewFields"][] = "H";
$tdataPMT_MITUMORI1[".viewFields"][] = "I";
$tdataPMT_MITUMORI1[".viewFields"][] = "J";
$tdataPMT_MITUMORI1[".viewFields"][] = "K";
$tdataPMT_MITUMORI1[".viewFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".viewFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".addFields"] = array();
$tdataPMT_MITUMORI1[".addFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".addFields"][] = "A";
$tdataPMT_MITUMORI1[".addFields"][] = "B";
$tdataPMT_MITUMORI1[".addFields"][] = "C";
$tdataPMT_MITUMORI1[".addFields"][] = "D";
$tdataPMT_MITUMORI1[".addFields"][] = "E";
$tdataPMT_MITUMORI1[".addFields"][] = "F";
$tdataPMT_MITUMORI1[".addFields"][] = "G";
$tdataPMT_MITUMORI1[".addFields"][] = "H";
$tdataPMT_MITUMORI1[".addFields"][] = "I";
$tdataPMT_MITUMORI1[".addFields"][] = "J";
$tdataPMT_MITUMORI1[".addFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".addFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".masterListFields"] = array();
$tdataPMT_MITUMORI1[".masterListFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".masterListFields"][] = "A";
$tdataPMT_MITUMORI1[".masterListFields"][] = "B";
$tdataPMT_MITUMORI1[".masterListFields"][] = "C";
$tdataPMT_MITUMORI1[".masterListFields"][] = "D";
$tdataPMT_MITUMORI1[".masterListFields"][] = "E";
$tdataPMT_MITUMORI1[".masterListFields"][] = "F";
$tdataPMT_MITUMORI1[".masterListFields"][] = "G";
$tdataPMT_MITUMORI1[".masterListFields"][] = "H";
$tdataPMT_MITUMORI1[".masterListFields"][] = "I";
$tdataPMT_MITUMORI1[".masterListFields"][] = "J";
$tdataPMT_MITUMORI1[".masterListFields"][] = "K";
$tdataPMT_MITUMORI1[".masterListFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".masterListFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".inlineAddFields"] = array();
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "A";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "B";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "C";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "D";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "E";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "F";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "G";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "H";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "I";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "J";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".inlineAddFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".editFields"] = array();
$tdataPMT_MITUMORI1[".editFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".editFields"][] = "A";
$tdataPMT_MITUMORI1[".editFields"][] = "B";
$tdataPMT_MITUMORI1[".editFields"][] = "C";
$tdataPMT_MITUMORI1[".editFields"][] = "D";
$tdataPMT_MITUMORI1[".editFields"][] = "E";
$tdataPMT_MITUMORI1[".editFields"][] = "F";
$tdataPMT_MITUMORI1[".editFields"][] = "G";
$tdataPMT_MITUMORI1[".editFields"][] = "H";
$tdataPMT_MITUMORI1[".editFields"][] = "I";
$tdataPMT_MITUMORI1[".editFields"][] = "J";
$tdataPMT_MITUMORI1[".editFields"][] = "K";
$tdataPMT_MITUMORI1[".editFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".editFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".inlineEditFields"] = array();
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "A";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "B";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "C";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "D";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "E";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "F";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "G";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "H";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "I";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "J";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "K";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".inlineEditFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".updateSelectedFields"] = array();
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "A";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "B";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "C";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "D";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "E";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "F";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "G";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "H";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "I";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "J";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "K";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".updateSelectedFields"][] = "APP_NUMBER";


$tdataPMT_MITUMORI1[".exportFields"] = array();
$tdataPMT_MITUMORI1[".exportFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".exportFields"][] = "A";
$tdataPMT_MITUMORI1[".exportFields"][] = "B";
$tdataPMT_MITUMORI1[".exportFields"][] = "C";
$tdataPMT_MITUMORI1[".exportFields"][] = "D";
$tdataPMT_MITUMORI1[".exportFields"][] = "E";
$tdataPMT_MITUMORI1[".exportFields"][] = "F";
$tdataPMT_MITUMORI1[".exportFields"][] = "G";
$tdataPMT_MITUMORI1[".exportFields"][] = "H";
$tdataPMT_MITUMORI1[".exportFields"][] = "I";
$tdataPMT_MITUMORI1[".exportFields"][] = "J";
$tdataPMT_MITUMORI1[".exportFields"][] = "K";
$tdataPMT_MITUMORI1[".exportFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".exportFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".importFields"] = array();
$tdataPMT_MITUMORI1[".importFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".importFields"][] = "A";
$tdataPMT_MITUMORI1[".importFields"][] = "B";
$tdataPMT_MITUMORI1[".importFields"][] = "C";
$tdataPMT_MITUMORI1[".importFields"][] = "D";
$tdataPMT_MITUMORI1[".importFields"][] = "E";
$tdataPMT_MITUMORI1[".importFields"][] = "F";
$tdataPMT_MITUMORI1[".importFields"][] = "G";
$tdataPMT_MITUMORI1[".importFields"][] = "H";
$tdataPMT_MITUMORI1[".importFields"][] = "I";
$tdataPMT_MITUMORI1[".importFields"][] = "J";
$tdataPMT_MITUMORI1[".importFields"][] = "K";
$tdataPMT_MITUMORI1[".importFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".importFields"][] = "APP_NUMBER";

$tdataPMT_MITUMORI1[".printFields"] = array();
$tdataPMT_MITUMORI1[".printFields"][] = "APP_UID";
$tdataPMT_MITUMORI1[".printFields"][] = "A";
$tdataPMT_MITUMORI1[".printFields"][] = "B";
$tdataPMT_MITUMORI1[".printFields"][] = "C";
$tdataPMT_MITUMORI1[".printFields"][] = "D";
$tdataPMT_MITUMORI1[".printFields"][] = "E";
$tdataPMT_MITUMORI1[".printFields"][] = "F";
$tdataPMT_MITUMORI1[".printFields"][] = "G";
$tdataPMT_MITUMORI1[".printFields"][] = "H";
$tdataPMT_MITUMORI1[".printFields"][] = "I";
$tdataPMT_MITUMORI1[".printFields"][] = "J";
$tdataPMT_MITUMORI1[".printFields"][] = "K";
$tdataPMT_MITUMORI1[".printFields"][] = "APP_STATUS";
$tdataPMT_MITUMORI1[".printFields"][] = "APP_NUMBER";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","APP_UID");
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




	$tdataPMT_MITUMORI1["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","A");
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




	$tdataPMT_MITUMORI1["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","B");
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




	$tdataPMT_MITUMORI1["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","C");
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




	$tdataPMT_MITUMORI1["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","D");
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




	$tdataPMT_MITUMORI1["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","E");
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




	$tdataPMT_MITUMORI1["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","F");
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




	$tdataPMT_MITUMORI1["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","G");
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




	$tdataPMT_MITUMORI1["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","H");
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




	$tdataPMT_MITUMORI1["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","I");
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




	$tdataPMT_MITUMORI1["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","J");
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




	$tdataPMT_MITUMORI1["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","K");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataPMT_MITUMORI1["K"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","APP_STATUS");
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




	$tdataPMT_MITUMORI1["APP_STATUS"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_MITUMORI1";
	$fdata["Label"] = GetFieldLabel("PMT_MITUMORI1","APP_NUMBER");
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




	$tdataPMT_MITUMORI1["APP_NUMBER"] = $fdata;


$tables_data["PMT_MITUMORI1"]=&$tdataPMT_MITUMORI1;
$field_labels["PMT_MITUMORI1"] = &$fieldLabelsPMT_MITUMORI1;
$fieldToolTips["PMT_MITUMORI1"] = &$fieldToolTipsPMT_MITUMORI1;
$placeHolders["PMT_MITUMORI1"] = &$placeHoldersPMT_MITUMORI1;
$page_titles["PMT_MITUMORI1"] = &$pageTitlesPMT_MITUMORI1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_MITUMORI1"] = array();
//	PMT_SUBCONTRACTORS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_SUBCONTRACTORS";
		$detailsParam["dOriginalTable"] = "PMT_SUBCONTRACTORS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_SUBCONTRACTORS";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_SUBCONTRACTORS");
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
		
	$detailsTablesData["PMT_MITUMORI1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_MITUMORI1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_MITUMORI1"][$dIndex]["masterKeys"][]="APP_NUMBER";

				$detailsTablesData["PMT_MITUMORI1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_MITUMORI1"][$dIndex]["detailKeys"][]="APP_NUMBER";

// tables which are master tables for current table (detail)
$masterTablesData["PMT_MITUMORI1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_MITUMORI1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  A,  B,  C,  D,  E,  F,  G,  H,  I,  J,  K,  APP_STATUS,  APP_NUMBER";
$proto0["m_strFrom"] = "FROM PMT_MITUMORI1";
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
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_MITUMORI1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto8["m_sql"] = "A";
$proto8["m_srcTableName"] = "PMT_MITUMORI1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto10["m_sql"] = "B";
$proto10["m_srcTableName"] = "PMT_MITUMORI1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto12["m_sql"] = "C";
$proto12["m_srcTableName"] = "PMT_MITUMORI1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto14["m_sql"] = "D";
$proto14["m_srcTableName"] = "PMT_MITUMORI1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto16["m_sql"] = "E";
$proto16["m_srcTableName"] = "PMT_MITUMORI1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto18["m_sql"] = "F";
$proto18["m_srcTableName"] = "PMT_MITUMORI1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto20["m_sql"] = "G";
$proto20["m_srcTableName"] = "PMT_MITUMORI1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto22["m_sql"] = "H";
$proto22["m_srcTableName"] = "PMT_MITUMORI1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto24["m_sql"] = "I";
$proto24["m_srcTableName"] = "PMT_MITUMORI1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto26["m_sql"] = "J";
$proto26["m_srcTableName"] = "PMT_MITUMORI1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto28["m_sql"] = "K";
$proto28["m_srcTableName"] = "PMT_MITUMORI1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto30["m_sql"] = "APP_STATUS";
$proto30["m_srcTableName"] = "PMT_MITUMORI1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_MITUMORI1",
	"m_srcTableName" => "PMT_MITUMORI1"
));

$proto32["m_sql"] = "APP_NUMBER";
$proto32["m_srcTableName"] = "PMT_MITUMORI1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "PMT_MITUMORI1";
$proto35["m_srcTableName"] = "PMT_MITUMORI1";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "APP_UID";
$proto35["m_columns"][] = "A";
$proto35["m_columns"][] = "B";
$proto35["m_columns"][] = "C";
$proto35["m_columns"][] = "D";
$proto35["m_columns"][] = "E";
$proto35["m_columns"][] = "F";
$proto35["m_columns"][] = "G";
$proto35["m_columns"][] = "H";
$proto35["m_columns"][] = "I";
$proto35["m_columns"][] = "J";
$proto35["m_columns"][] = "K";
$proto35["m_columns"][] = "E_LABEL";
$proto35["m_columns"][] = "A_LABEL";
$proto35["m_columns"][] = "B_LABEL";
$proto35["m_columns"][] = "C_LABEL";
$proto35["m_columns"][] = "D_LABEL";
$proto35["m_columns"][] = "APP_NUMBER";
$proto35["m_columns"][] = "APP_STATUS";
$proto35["m_columns"][] = "ROW";
$proto35["m_columns"][] = "EMPLOYEE_NO";
$proto35["m_columns"][] = "TIME";
$proto35["m_columns"][] = "MONTHLY_REPORT";
$proto35["m_columns"][] = "BUSINESS_CONFIRMATION_17";
$proto35["m_columns"][] = "BUSINESS_CONFIRMATION_18";
$proto35["m_columns"][] = "BUSINESS_CONFIRMATION_19";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "PMT_MITUMORI1";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "PMT_MITUMORI1";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_MITUMORI1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_MITUMORI1 = createSqlQuery_PMT_MITUMORI1();


	
						;

														

$tdataPMT_MITUMORI1[".sqlquery"] = $queryData_PMT_MITUMORI1;

include_once(getabspath("include/PMT_MITUMORI1_events.php"));
$tableEvents["PMT_MITUMORI1"] = new eventclass_PMT_MITUMORI1;
$tdataPMT_MITUMORI1[".hasEvents"] = true;

?>
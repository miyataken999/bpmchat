<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_SPREADSUB = array();
	$tdataPMT_SPREADSUB[".truncateText"] = true;
	$tdataPMT_SPREADSUB[".NumberOfChars"] = 80;
	$tdataPMT_SPREADSUB[".ShortName"] = "PMT_SPREADSUB";
	$tdataPMT_SPREADSUB[".OwnerID"] = "";
	$tdataPMT_SPREADSUB[".OriginalTable"] = "PMT_SPREADSUB";

//	field labels
$fieldLabelsPMT_SPREADSUB = array();
$fieldToolTipsPMT_SPREADSUB = array();
$pageTitlesPMT_SPREADSUB = array();
$placeHoldersPMT_SPREADSUB = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_SPREADSUB["Japanese"] = array();
	$fieldToolTipsPMT_SPREADSUB["Japanese"] = array();
	$placeHoldersPMT_SPREADSUB["Japanese"] = array();
	$pageTitlesPMT_SPREADSUB["Japanese"] = array();
	$fieldLabelsPMT_SPREADSUB["Japanese"]["APP_UID"] = "作業ID";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["APP_NUMBER"] = "作業番号";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["APP_STATUS"] = "作業状態";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["ROW"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["A"] = "NO";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["A"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["A"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["B"] = "CATE";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["B"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["B"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["C"] = "金性";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["C"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["C"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["D"] = "宝石";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["D"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["D"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["E"] = "詳細";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["E"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["E"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["F"] = "形状";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["F"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["F"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["G"] = "重量";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["G"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["G"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["H"] = "単位";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["H"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["H"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["I"] = "単価";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["I"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["I"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["J"] = "主石";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["J"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["J"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["K"] = "主石単価";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["K"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["K"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["L"] = "脇石";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["L"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["L"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["M"] = "脇石単価";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["M"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["M"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["N"] = "備考";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["N"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["N"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["P"] = "金額";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["P"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["P"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["O"] = "O";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["O"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["O"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["R"] = "R";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["R"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["R"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["S"] = "S";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["S"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["S"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["Q"] = "Q";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["Q"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["Q"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["T"] = "T";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["T"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["T"] = "";
	$fieldLabelsPMT_SPREADSUB["Japanese"]["APP_UID2"] = "APP UID2";
	$fieldToolTipsPMT_SPREADSUB["Japanese"]["APP_UID2"] = "";
	$placeHoldersPMT_SPREADSUB["Japanese"]["APP_UID2"] = "";
	if (count($fieldToolTipsPMT_SPREADSUB["Japanese"]))
		$tdataPMT_SPREADSUB[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_SPREADSUB["English"] = array();
	$fieldToolTipsPMT_SPREADSUB["English"] = array();
	$placeHoldersPMT_SPREADSUB["English"] = array();
	$pageTitlesPMT_SPREADSUB["English"] = array();
	$fieldLabelsPMT_SPREADSUB["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SPREADSUB["English"]["APP_UID"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["APP_UID"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SPREADSUB["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SPREADSUB["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SPREADSUB["English"]["ROW"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["ROW"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["A"] = "A";
	$fieldToolTipsPMT_SPREADSUB["English"]["A"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["A"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["B"] = "B";
	$fieldToolTipsPMT_SPREADSUB["English"]["B"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["B"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["C"] = "C";
	$fieldToolTipsPMT_SPREADSUB["English"]["C"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["C"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["D"] = "D";
	$fieldToolTipsPMT_SPREADSUB["English"]["D"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["D"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["E"] = "E";
	$fieldToolTipsPMT_SPREADSUB["English"]["E"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["E"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["F"] = "F";
	$fieldToolTipsPMT_SPREADSUB["English"]["F"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["F"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["G"] = "G";
	$fieldToolTipsPMT_SPREADSUB["English"]["G"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["G"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["H"] = "H";
	$fieldToolTipsPMT_SPREADSUB["English"]["H"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["H"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["I"] = "I";
	$fieldToolTipsPMT_SPREADSUB["English"]["I"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["I"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["J"] = "J";
	$fieldToolTipsPMT_SPREADSUB["English"]["J"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["J"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["K"] = "K";
	$fieldToolTipsPMT_SPREADSUB["English"]["K"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["K"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["L"] = "L";
	$fieldToolTipsPMT_SPREADSUB["English"]["L"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["L"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["M"] = "M";
	$fieldToolTipsPMT_SPREADSUB["English"]["M"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["M"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["N"] = "N";
	$fieldToolTipsPMT_SPREADSUB["English"]["N"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["N"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["P"] = "P";
	$fieldToolTipsPMT_SPREADSUB["English"]["P"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["P"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["O"] = "O";
	$fieldToolTipsPMT_SPREADSUB["English"]["O"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["O"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["R"] = "R";
	$fieldToolTipsPMT_SPREADSUB["English"]["R"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["R"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["S"] = "S";
	$fieldToolTipsPMT_SPREADSUB["English"]["S"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["S"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["Q"] = "Q";
	$fieldToolTipsPMT_SPREADSUB["English"]["Q"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["Q"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["T"] = "T";
	$fieldToolTipsPMT_SPREADSUB["English"]["T"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["T"] = "";
	$fieldLabelsPMT_SPREADSUB["English"]["APP_UID2"] = "APP UID2";
	$fieldToolTipsPMT_SPREADSUB["English"]["APP_UID2"] = "";
	$placeHoldersPMT_SPREADSUB["English"]["APP_UID2"] = "";
	if (count($fieldToolTipsPMT_SPREADSUB["English"]))
		$tdataPMT_SPREADSUB[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_SPREADSUB[""] = array();
	$fieldToolTipsPMT_SPREADSUB[""] = array();
	$placeHoldersPMT_SPREADSUB[""] = array();
	$pageTitlesPMT_SPREADSUB[""] = array();
	$fieldLabelsPMT_SPREADSUB[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SPREADSUB[""]["APP_UID"] = "";
	$placeHoldersPMT_SPREADSUB[""]["APP_UID"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SPREADSUB[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_SPREADSUB[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SPREADSUB[""]["APP_STATUS"] = "";
	$placeHoldersPMT_SPREADSUB[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_SPREADSUB[""]["ROW"] = "";
	$placeHoldersPMT_SPREADSUB[""]["ROW"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["A"] = "A";
	$fieldToolTipsPMT_SPREADSUB[""]["A"] = "";
	$placeHoldersPMT_SPREADSUB[""]["A"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["B"] = "B";
	$fieldToolTipsPMT_SPREADSUB[""]["B"] = "";
	$placeHoldersPMT_SPREADSUB[""]["B"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["C"] = "C";
	$fieldToolTipsPMT_SPREADSUB[""]["C"] = "";
	$placeHoldersPMT_SPREADSUB[""]["C"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["D"] = "D";
	$fieldToolTipsPMT_SPREADSUB[""]["D"] = "";
	$placeHoldersPMT_SPREADSUB[""]["D"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["E"] = "E";
	$fieldToolTipsPMT_SPREADSUB[""]["E"] = "";
	$placeHoldersPMT_SPREADSUB[""]["E"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["F"] = "F";
	$fieldToolTipsPMT_SPREADSUB[""]["F"] = "";
	$placeHoldersPMT_SPREADSUB[""]["F"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["G"] = "G";
	$fieldToolTipsPMT_SPREADSUB[""]["G"] = "";
	$placeHoldersPMT_SPREADSUB[""]["G"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["H"] = "H";
	$fieldToolTipsPMT_SPREADSUB[""]["H"] = "";
	$placeHoldersPMT_SPREADSUB[""]["H"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["I"] = "I";
	$fieldToolTipsPMT_SPREADSUB[""]["I"] = "";
	$placeHoldersPMT_SPREADSUB[""]["I"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["J"] = "J";
	$fieldToolTipsPMT_SPREADSUB[""]["J"] = "";
	$placeHoldersPMT_SPREADSUB[""]["J"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["K"] = "K";
	$fieldToolTipsPMT_SPREADSUB[""]["K"] = "";
	$placeHoldersPMT_SPREADSUB[""]["K"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["L"] = "L";
	$fieldToolTipsPMT_SPREADSUB[""]["L"] = "";
	$placeHoldersPMT_SPREADSUB[""]["L"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["M"] = "M";
	$fieldToolTipsPMT_SPREADSUB[""]["M"] = "";
	$placeHoldersPMT_SPREADSUB[""]["M"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["N"] = "N";
	$fieldToolTipsPMT_SPREADSUB[""]["N"] = "";
	$placeHoldersPMT_SPREADSUB[""]["N"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["P"] = "P";
	$fieldToolTipsPMT_SPREADSUB[""]["P"] = "";
	$placeHoldersPMT_SPREADSUB[""]["P"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["O"] = "O";
	$fieldToolTipsPMT_SPREADSUB[""]["O"] = "";
	$placeHoldersPMT_SPREADSUB[""]["O"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["R"] = "R";
	$fieldToolTipsPMT_SPREADSUB[""]["R"] = "";
	$placeHoldersPMT_SPREADSUB[""]["R"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["S"] = "S";
	$fieldToolTipsPMT_SPREADSUB[""]["S"] = "";
	$placeHoldersPMT_SPREADSUB[""]["S"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["Q"] = "Q";
	$fieldToolTipsPMT_SPREADSUB[""]["Q"] = "";
	$placeHoldersPMT_SPREADSUB[""]["Q"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["T"] = "T";
	$fieldToolTipsPMT_SPREADSUB[""]["T"] = "";
	$placeHoldersPMT_SPREADSUB[""]["T"] = "";
	$fieldLabelsPMT_SPREADSUB[""]["APP_UID2"] = "APP UID2";
	$fieldToolTipsPMT_SPREADSUB[""]["APP_UID2"] = "";
	$placeHoldersPMT_SPREADSUB[""]["APP_UID2"] = "";
	if (count($fieldToolTipsPMT_SPREADSUB[""]))
		$tdataPMT_SPREADSUB[".isUseToolTips"] = true;
}


	$tdataPMT_SPREADSUB[".NCSearch"] = true;



$tdataPMT_SPREADSUB[".shortTableName"] = "PMT_SPREADSUB";
$tdataPMT_SPREADSUB[".nSecOptions"] = 0;
$tdataPMT_SPREADSUB[".recsPerRowPrint"] = 1;
$tdataPMT_SPREADSUB[".mainTableOwnerID"] = "";
$tdataPMT_SPREADSUB[".moveNext"] = 1;
$tdataPMT_SPREADSUB[".entityType"] = 0;

$tdataPMT_SPREADSUB[".strOriginalTableName"] = "PMT_SPREADSUB";

	



$tdataPMT_SPREADSUB[".showAddInPopup"] = false;

$tdataPMT_SPREADSUB[".showEditInPopup"] = false;

$tdataPMT_SPREADSUB[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_SPREADSUB[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_SPREADSUB[".fieldsForRegister"] = array();
	
$tdataPMT_SPREADSUB[".listAjax"] = false;

	$tdataPMT_SPREADSUB[".audit"] = false;

	$tdataPMT_SPREADSUB[".locking"] = false;

$tdataPMT_SPREADSUB[".edit"] = true;
$tdataPMT_SPREADSUB[".afterEditAction"] = 1;
$tdataPMT_SPREADSUB[".closePopupAfterEdit"] = 1;
$tdataPMT_SPREADSUB[".afterEditActionDetTable"] = "";

$tdataPMT_SPREADSUB[".add"] = true;
$tdataPMT_SPREADSUB[".afterAddAction"] = 1;
$tdataPMT_SPREADSUB[".closePopupAfterAdd"] = 1;
$tdataPMT_SPREADSUB[".afterAddActionDetTable"] = "";

$tdataPMT_SPREADSUB[".list"] = true;

$tdataPMT_SPREADSUB[".inlineEdit"] = true;

$tdataPMT_SPREADSUB[".updateSelected"] = true;

$tdataPMT_SPREADSUB[".reorderRecordsByHeader"] = true;



$tdataPMT_SPREADSUB[".inlineAdd"] = true;
$tdataPMT_SPREADSUB[".copy"] = true;
$tdataPMT_SPREADSUB[".view"] = true;

$tdataPMT_SPREADSUB[".import"] = true;

$tdataPMT_SPREADSUB[".exportTo"] = true;

$tdataPMT_SPREADSUB[".printFriendly"] = true;

$tdataPMT_SPREADSUB[".delete"] = true;

$tdataPMT_SPREADSUB[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_SPREADSUB[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_SPREADSUB[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_SPREADSUB[".searchSaving"] = false;
//

$tdataPMT_SPREADSUB[".showSearchPanel"] = true;
		$tdataPMT_SPREADSUB[".flexibleSearch"] = true;

$tdataPMT_SPREADSUB[".isUseAjaxSuggest"] = true;

$tdataPMT_SPREADSUB[".rowHighlite"] = true;



																

$tdataPMT_SPREADSUB[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_SPREADSUB[".buttonsAdded"] = false;

$tdataPMT_SPREADSUB[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_SPREADSUB[".isUseTimeForSearch"] = false;



$tdataPMT_SPREADSUB[".badgeColor"] = "008b8b";


$tdataPMT_SPREADSUB[".allSearchFields"] = array();
$tdataPMT_SPREADSUB[".filterFields"] = array();
$tdataPMT_SPREADSUB[".requiredSearchFields"] = array();

$tdataPMT_SPREADSUB[".allSearchFields"][] = "APP_UID";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "ROW";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "A";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "B";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "C";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "D";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "E";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "F";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "G";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "H";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "I";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "J";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "K";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "L";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "M";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "N";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "P";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "O";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "R";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "S";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "Q";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "T";
	$tdataPMT_SPREADSUB[".allSearchFields"][] = "APP_UID2";
	

$tdataPMT_SPREADSUB[".googleLikeFields"] = array();
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "ROW";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "A";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "B";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "C";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "D";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "E";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "F";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "G";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "H";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "I";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "J";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "K";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "L";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "M";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "N";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "P";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "O";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "R";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "S";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "Q";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "T";
$tdataPMT_SPREADSUB[".googleLikeFields"][] = "APP_UID2";


$tdataPMT_SPREADSUB[".advSearchFields"] = array();
$tdataPMT_SPREADSUB[".advSearchFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "ROW";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "A";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "B";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "C";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "D";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "E";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "F";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "G";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "H";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "I";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "J";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "K";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "L";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "M";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "N";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "P";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "O";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "R";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "S";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "Q";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "T";
$tdataPMT_SPREADSUB[".advSearchFields"][] = "APP_UID2";

$tdataPMT_SPREADSUB[".tableType"] = "list";

$tdataPMT_SPREADSUB[".printerPageOrientation"] = 0;
$tdataPMT_SPREADSUB[".nPrinterPageScale"] = 100;

$tdataPMT_SPREADSUB[".nPrinterSplitRecords"] = 40;

$tdataPMT_SPREADSUB[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_SPREADSUB[".geocodingEnabled"] = false;





$tdataPMT_SPREADSUB[".listGridLayout"] = 3;





// view page pdf
$tdataPMT_SPREADSUB[".isViewPagePDF"] = true;
$tdataPMT_SPREADSUB[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataPMT_SPREADSUB[".isPrinterPagePDF"] = true;
$tdataPMT_SPREADSUB[".nPrinterPagePDFScale"] = 100;


$tdataPMT_SPREADSUB[".pageSize"] = 20;

$tdataPMT_SPREADSUB[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_SPREADSUB[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_SPREADSUB[".orderindexes"] = array();

$tdataPMT_SPREADSUB[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	P,  	O,  	R,  	S,  	Q,  	T,  	APP_UID2";
$tdataPMT_SPREADSUB[".sqlFrom"] = "FROM PMT_SPREADSUB";
$tdataPMT_SPREADSUB[".sqlWhereExpr"] = "";
$tdataPMT_SPREADSUB[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_SPREADSUB[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_SPREADSUB[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_SPREADSUB[".highlightSearchResults"] = true;

$tableKeysPMT_SPREADSUB = array();
$tableKeysPMT_SPREADSUB[] = "APP_UID";
$tableKeysPMT_SPREADSUB[] = "ROW";
$tdataPMT_SPREADSUB[".Keys"] = $tableKeysPMT_SPREADSUB;

$tdataPMT_SPREADSUB[".listFields"] = array();
$tdataPMT_SPREADSUB[".listFields"][] = "O";
$tdataPMT_SPREADSUB[".listFields"][] = "R";
$tdataPMT_SPREADSUB[".listFields"][] = "S";
$tdataPMT_SPREADSUB[".listFields"][] = "Q";
$tdataPMT_SPREADSUB[".listFields"][] = "T";
$tdataPMT_SPREADSUB[".listFields"][] = "APP_UID2";
$tdataPMT_SPREADSUB[".listFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".listFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".listFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".listFields"][] = "ROW";
$tdataPMT_SPREADSUB[".listFields"][] = "A";
$tdataPMT_SPREADSUB[".listFields"][] = "B";
$tdataPMT_SPREADSUB[".listFields"][] = "C";
$tdataPMT_SPREADSUB[".listFields"][] = "D";
$tdataPMT_SPREADSUB[".listFields"][] = "E";
$tdataPMT_SPREADSUB[".listFields"][] = "F";
$tdataPMT_SPREADSUB[".listFields"][] = "G";
$tdataPMT_SPREADSUB[".listFields"][] = "H";
$tdataPMT_SPREADSUB[".listFields"][] = "I";
$tdataPMT_SPREADSUB[".listFields"][] = "J";
$tdataPMT_SPREADSUB[".listFields"][] = "K";
$tdataPMT_SPREADSUB[".listFields"][] = "L";
$tdataPMT_SPREADSUB[".listFields"][] = "M";
$tdataPMT_SPREADSUB[".listFields"][] = "N";
$tdataPMT_SPREADSUB[".listFields"][] = "P";

$tdataPMT_SPREADSUB[".hideMobileList"] = array();


$tdataPMT_SPREADSUB[".viewFields"] = array();
$tdataPMT_SPREADSUB[".viewFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".viewFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".viewFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".viewFields"][] = "ROW";
$tdataPMT_SPREADSUB[".viewFields"][] = "A";
$tdataPMT_SPREADSUB[".viewFields"][] = "B";
$tdataPMT_SPREADSUB[".viewFields"][] = "C";
$tdataPMT_SPREADSUB[".viewFields"][] = "D";
$tdataPMT_SPREADSUB[".viewFields"][] = "E";
$tdataPMT_SPREADSUB[".viewFields"][] = "F";
$tdataPMT_SPREADSUB[".viewFields"][] = "G";
$tdataPMT_SPREADSUB[".viewFields"][] = "H";
$tdataPMT_SPREADSUB[".viewFields"][] = "I";
$tdataPMT_SPREADSUB[".viewFields"][] = "J";
$tdataPMT_SPREADSUB[".viewFields"][] = "K";
$tdataPMT_SPREADSUB[".viewFields"][] = "L";
$tdataPMT_SPREADSUB[".viewFields"][] = "M";
$tdataPMT_SPREADSUB[".viewFields"][] = "N";
$tdataPMT_SPREADSUB[".viewFields"][] = "P";
$tdataPMT_SPREADSUB[".viewFields"][] = "O";
$tdataPMT_SPREADSUB[".viewFields"][] = "R";
$tdataPMT_SPREADSUB[".viewFields"][] = "S";
$tdataPMT_SPREADSUB[".viewFields"][] = "Q";
$tdataPMT_SPREADSUB[".viewFields"][] = "T";
$tdataPMT_SPREADSUB[".viewFields"][] = "APP_UID2";

$tdataPMT_SPREADSUB[".addFields"] = array();
$tdataPMT_SPREADSUB[".addFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".addFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".addFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".addFields"][] = "ROW";
$tdataPMT_SPREADSUB[".addFields"][] = "A";
$tdataPMT_SPREADSUB[".addFields"][] = "B";
$tdataPMT_SPREADSUB[".addFields"][] = "C";
$tdataPMT_SPREADSUB[".addFields"][] = "D";
$tdataPMT_SPREADSUB[".addFields"][] = "E";
$tdataPMT_SPREADSUB[".addFields"][] = "F";
$tdataPMT_SPREADSUB[".addFields"][] = "G";
$tdataPMT_SPREADSUB[".addFields"][] = "H";
$tdataPMT_SPREADSUB[".addFields"][] = "I";
$tdataPMT_SPREADSUB[".addFields"][] = "J";
$tdataPMT_SPREADSUB[".addFields"][] = "K";
$tdataPMT_SPREADSUB[".addFields"][] = "L";
$tdataPMT_SPREADSUB[".addFields"][] = "M";
$tdataPMT_SPREADSUB[".addFields"][] = "N";
$tdataPMT_SPREADSUB[".addFields"][] = "P";
$tdataPMT_SPREADSUB[".addFields"][] = "O";
$tdataPMT_SPREADSUB[".addFields"][] = "R";
$tdataPMT_SPREADSUB[".addFields"][] = "S";
$tdataPMT_SPREADSUB[".addFields"][] = "Q";
$tdataPMT_SPREADSUB[".addFields"][] = "T";

$tdataPMT_SPREADSUB[".masterListFields"] = array();
$tdataPMT_SPREADSUB[".masterListFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".masterListFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".masterListFields"][] = "ROW";
$tdataPMT_SPREADSUB[".masterListFields"][] = "A";
$tdataPMT_SPREADSUB[".masterListFields"][] = "B";
$tdataPMT_SPREADSUB[".masterListFields"][] = "C";
$tdataPMT_SPREADSUB[".masterListFields"][] = "D";
$tdataPMT_SPREADSUB[".masterListFields"][] = "E";
$tdataPMT_SPREADSUB[".masterListFields"][] = "F";
$tdataPMT_SPREADSUB[".masterListFields"][] = "G";
$tdataPMT_SPREADSUB[".masterListFields"][] = "H";
$tdataPMT_SPREADSUB[".masterListFields"][] = "I";
$tdataPMT_SPREADSUB[".masterListFields"][] = "J";
$tdataPMT_SPREADSUB[".masterListFields"][] = "K";
$tdataPMT_SPREADSUB[".masterListFields"][] = "L";
$tdataPMT_SPREADSUB[".masterListFields"][] = "M";
$tdataPMT_SPREADSUB[".masterListFields"][] = "N";
$tdataPMT_SPREADSUB[".masterListFields"][] = "P";
$tdataPMT_SPREADSUB[".masterListFields"][] = "O";
$tdataPMT_SPREADSUB[".masterListFields"][] = "R";
$tdataPMT_SPREADSUB[".masterListFields"][] = "S";
$tdataPMT_SPREADSUB[".masterListFields"][] = "Q";
$tdataPMT_SPREADSUB[".masterListFields"][] = "T";
$tdataPMT_SPREADSUB[".masterListFields"][] = "APP_UID2";

$tdataPMT_SPREADSUB[".inlineAddFields"] = array();
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "O";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "R";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "S";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "Q";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "T";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "ROW";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "A";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "B";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "C";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "D";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "E";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "F";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "G";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "H";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "I";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "J";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "K";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "L";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "M";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "N";
$tdataPMT_SPREADSUB[".inlineAddFields"][] = "P";

$tdataPMT_SPREADSUB[".editFields"] = array();
$tdataPMT_SPREADSUB[".editFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".editFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".editFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".editFields"][] = "ROW";
$tdataPMT_SPREADSUB[".editFields"][] = "A";
$tdataPMT_SPREADSUB[".editFields"][] = "B";
$tdataPMT_SPREADSUB[".editFields"][] = "C";
$tdataPMT_SPREADSUB[".editFields"][] = "D";
$tdataPMT_SPREADSUB[".editFields"][] = "E";
$tdataPMT_SPREADSUB[".editFields"][] = "F";
$tdataPMT_SPREADSUB[".editFields"][] = "G";
$tdataPMT_SPREADSUB[".editFields"][] = "H";
$tdataPMT_SPREADSUB[".editFields"][] = "I";
$tdataPMT_SPREADSUB[".editFields"][] = "J";
$tdataPMT_SPREADSUB[".editFields"][] = "K";
$tdataPMT_SPREADSUB[".editFields"][] = "L";
$tdataPMT_SPREADSUB[".editFields"][] = "M";
$tdataPMT_SPREADSUB[".editFields"][] = "N";
$tdataPMT_SPREADSUB[".editFields"][] = "P";
$tdataPMT_SPREADSUB[".editFields"][] = "O";
$tdataPMT_SPREADSUB[".editFields"][] = "R";
$tdataPMT_SPREADSUB[".editFields"][] = "S";
$tdataPMT_SPREADSUB[".editFields"][] = "Q";
$tdataPMT_SPREADSUB[".editFields"][] = "T";

$tdataPMT_SPREADSUB[".inlineEditFields"] = array();
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "O";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "R";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "S";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "Q";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "T";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "ROW";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "A";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "B";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "C";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "D";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "E";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "F";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "G";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "H";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "I";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "J";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "K";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "L";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "M";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "N";
$tdataPMT_SPREADSUB[".inlineEditFields"][] = "P";

$tdataPMT_SPREADSUB[".updateSelectedFields"] = array();
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "ROW";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "A";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "B";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "C";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "D";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "E";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "F";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "G";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "H";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "I";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "J";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "K";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "L";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "M";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "N";
$tdataPMT_SPREADSUB[".updateSelectedFields"][] = "P";


$tdataPMT_SPREADSUB[".exportFields"] = array();
$tdataPMT_SPREADSUB[".exportFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".exportFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".exportFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".exportFields"][] = "ROW";
$tdataPMT_SPREADSUB[".exportFields"][] = "A";
$tdataPMT_SPREADSUB[".exportFields"][] = "B";
$tdataPMT_SPREADSUB[".exportFields"][] = "C";
$tdataPMT_SPREADSUB[".exportFields"][] = "D";
$tdataPMT_SPREADSUB[".exportFields"][] = "E";
$tdataPMT_SPREADSUB[".exportFields"][] = "F";
$tdataPMT_SPREADSUB[".exportFields"][] = "G";
$tdataPMT_SPREADSUB[".exportFields"][] = "H";
$tdataPMT_SPREADSUB[".exportFields"][] = "I";
$tdataPMT_SPREADSUB[".exportFields"][] = "J";
$tdataPMT_SPREADSUB[".exportFields"][] = "K";
$tdataPMT_SPREADSUB[".exportFields"][] = "L";
$tdataPMT_SPREADSUB[".exportFields"][] = "M";
$tdataPMT_SPREADSUB[".exportFields"][] = "N";
$tdataPMT_SPREADSUB[".exportFields"][] = "P";
$tdataPMT_SPREADSUB[".exportFields"][] = "O";
$tdataPMT_SPREADSUB[".exportFields"][] = "R";
$tdataPMT_SPREADSUB[".exportFields"][] = "S";
$tdataPMT_SPREADSUB[".exportFields"][] = "Q";
$tdataPMT_SPREADSUB[".exportFields"][] = "T";
$tdataPMT_SPREADSUB[".exportFields"][] = "APP_UID2";

$tdataPMT_SPREADSUB[".importFields"] = array();
$tdataPMT_SPREADSUB[".importFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".importFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".importFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".importFields"][] = "ROW";
$tdataPMT_SPREADSUB[".importFields"][] = "A";
$tdataPMT_SPREADSUB[".importFields"][] = "B";
$tdataPMT_SPREADSUB[".importFields"][] = "C";
$tdataPMT_SPREADSUB[".importFields"][] = "D";
$tdataPMT_SPREADSUB[".importFields"][] = "E";
$tdataPMT_SPREADSUB[".importFields"][] = "F";
$tdataPMT_SPREADSUB[".importFields"][] = "G";
$tdataPMT_SPREADSUB[".importFields"][] = "H";
$tdataPMT_SPREADSUB[".importFields"][] = "I";
$tdataPMT_SPREADSUB[".importFields"][] = "J";
$tdataPMT_SPREADSUB[".importFields"][] = "K";
$tdataPMT_SPREADSUB[".importFields"][] = "L";
$tdataPMT_SPREADSUB[".importFields"][] = "M";
$tdataPMT_SPREADSUB[".importFields"][] = "N";
$tdataPMT_SPREADSUB[".importFields"][] = "P";
$tdataPMT_SPREADSUB[".importFields"][] = "O";
$tdataPMT_SPREADSUB[".importFields"][] = "R";
$tdataPMT_SPREADSUB[".importFields"][] = "S";
$tdataPMT_SPREADSUB[".importFields"][] = "Q";
$tdataPMT_SPREADSUB[".importFields"][] = "T";
$tdataPMT_SPREADSUB[".importFields"][] = "APP_UID2";

$tdataPMT_SPREADSUB[".printFields"] = array();
$tdataPMT_SPREADSUB[".printFields"][] = "APP_UID";
$tdataPMT_SPREADSUB[".printFields"][] = "APP_NUMBER";
$tdataPMT_SPREADSUB[".printFields"][] = "APP_STATUS";
$tdataPMT_SPREADSUB[".printFields"][] = "ROW";
$tdataPMT_SPREADSUB[".printFields"][] = "A";
$tdataPMT_SPREADSUB[".printFields"][] = "B";
$tdataPMT_SPREADSUB[".printFields"][] = "C";
$tdataPMT_SPREADSUB[".printFields"][] = "D";
$tdataPMT_SPREADSUB[".printFields"][] = "E";
$tdataPMT_SPREADSUB[".printFields"][] = "F";
$tdataPMT_SPREADSUB[".printFields"][] = "G";
$tdataPMT_SPREADSUB[".printFields"][] = "H";
$tdataPMT_SPREADSUB[".printFields"][] = "I";
$tdataPMT_SPREADSUB[".printFields"][] = "J";
$tdataPMT_SPREADSUB[".printFields"][] = "K";
$tdataPMT_SPREADSUB[".printFields"][] = "L";
$tdataPMT_SPREADSUB[".printFields"][] = "M";
$tdataPMT_SPREADSUB[".printFields"][] = "N";
$tdataPMT_SPREADSUB[".printFields"][] = "P";
$tdataPMT_SPREADSUB[".printFields"][] = "O";
$tdataPMT_SPREADSUB[".printFields"][] = "R";
$tdataPMT_SPREADSUB[".printFields"][] = "S";
$tdataPMT_SPREADSUB[".printFields"][] = "Q";
$tdataPMT_SPREADSUB[".printFields"][] = "T";
$tdataPMT_SPREADSUB[".printFields"][] = "APP_UID2";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","APP_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","APP_NUMBER");
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




	$tdataPMT_SPREADSUB["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","APP_STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataPMT_SPREADSUB["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","ROW");
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




	$tdataPMT_SPREADSUB["ROW"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","A");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","B");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","C");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","D");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","E");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","F");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","G");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","H");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","I");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","J");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","K");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","L");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","M");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","N");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataPMT_SPREADSUB["N"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","P");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["P"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","O");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["O"] = $fdata;
//	R
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "R";
	$fdata["GoodName"] = "R";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","R");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["R"] = $fdata;
//	S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "S";
	$fdata["GoodName"] = "S";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","S");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["S"] = $fdata;
//	Q
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Q";
	$fdata["GoodName"] = "Q";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","Q");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["Q"] = $fdata;
//	T
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "T";
	$fdata["GoodName"] = "T";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","T");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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




	$tdataPMT_SPREADSUB["T"] = $fdata;
//	APP_UID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "APP_UID2";
	$fdata["GoodName"] = "APP_UID2";
	$fdata["ownerTable"] = "PMT_SPREADSUB";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADSUB","APP_UID2");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_UID2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID2";

	
	
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




	$tdataPMT_SPREADSUB["APP_UID2"] = $fdata;


$tables_data["PMT_SPREADSUB"]=&$tdataPMT_SPREADSUB;
$field_labels["PMT_SPREADSUB"] = &$fieldLabelsPMT_SPREADSUB;
$fieldToolTips["PMT_SPREADSUB"] = &$fieldToolTipsPMT_SPREADSUB;
$placeHolders["PMT_SPREADSUB"] = &$placeHoldersPMT_SPREADSUB;
$page_titles["PMT_SPREADSUB"] = &$pageTitlesPMT_SPREADSUB;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_SPREADSUB"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_SPREADSUB"] = array();


	
				$strOriginalDetailsTable="PMT_SPREADMAIN";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PMT_SPREADMAIN";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PMT_SPREADMAIN";
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
					$masterTablesData["PMT_SPREADSUB"][0] = $masterParams;
				$masterTablesData["PMT_SPREADSUB"][0]["masterKeys"] = array();
	$masterTablesData["PMT_SPREADSUB"][0]["masterKeys"][]="id";
				$masterTablesData["PMT_SPREADSUB"][0]["detailKeys"] = array();
	$masterTablesData["PMT_SPREADSUB"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_SPREADSUB()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	P,  	O,  	R,  	S,  	Q,  	T,  	APP_UID2";
$proto0["m_strFrom"] = "FROM PMT_SPREADSUB";
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
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_SPREADSUB";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_SPREADSUB";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_SPREADSUB";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_SPREADSUB";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto14["m_sql"] = "A";
$proto14["m_srcTableName"] = "PMT_SPREADSUB";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto16["m_sql"] = "B";
$proto16["m_srcTableName"] = "PMT_SPREADSUB";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto18["m_sql"] = "C";
$proto18["m_srcTableName"] = "PMT_SPREADSUB";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto20["m_sql"] = "D";
$proto20["m_srcTableName"] = "PMT_SPREADSUB";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto22["m_sql"] = "E";
$proto22["m_srcTableName"] = "PMT_SPREADSUB";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto24["m_sql"] = "F";
$proto24["m_srcTableName"] = "PMT_SPREADSUB";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto26["m_sql"] = "G";
$proto26["m_srcTableName"] = "PMT_SPREADSUB";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto28["m_sql"] = "H";
$proto28["m_srcTableName"] = "PMT_SPREADSUB";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto30["m_sql"] = "I";
$proto30["m_srcTableName"] = "PMT_SPREADSUB";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto32["m_sql"] = "J";
$proto32["m_srcTableName"] = "PMT_SPREADSUB";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto34["m_sql"] = "K";
$proto34["m_srcTableName"] = "PMT_SPREADSUB";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto36["m_sql"] = "L";
$proto36["m_srcTableName"] = "PMT_SPREADSUB";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto38["m_sql"] = "M";
$proto38["m_srcTableName"] = "PMT_SPREADSUB";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto40["m_sql"] = "N";
$proto40["m_srcTableName"] = "PMT_SPREADSUB";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto42["m_sql"] = "P";
$proto42["m_srcTableName"] = "PMT_SPREADSUB";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto44["m_sql"] = "O";
$proto44["m_srcTableName"] = "PMT_SPREADSUB";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "R",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto46["m_sql"] = "R";
$proto46["m_srcTableName"] = "PMT_SPREADSUB";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "S",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto48["m_sql"] = "S";
$proto48["m_srcTableName"] = "PMT_SPREADSUB";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Q",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto50["m_sql"] = "Q";
$proto50["m_srcTableName"] = "PMT_SPREADSUB";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "T",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto52["m_sql"] = "T";
$proto52["m_srcTableName"] = "PMT_SPREADSUB";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID2",
	"m_strTable" => "PMT_SPREADSUB",
	"m_srcTableName" => "PMT_SPREADSUB"
));

$proto54["m_sql"] = "APP_UID2";
$proto54["m_srcTableName"] = "PMT_SPREADSUB";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "PMT_SPREADSUB";
$proto57["m_srcTableName"] = "PMT_SPREADSUB";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "APP_UID";
$proto57["m_columns"][] = "APP_NUMBER";
$proto57["m_columns"][] = "APP_STATUS";
$proto57["m_columns"][] = "ROW";
$proto57["m_columns"][] = "A";
$proto57["m_columns"][] = "B";
$proto57["m_columns"][] = "C";
$proto57["m_columns"][] = "D";
$proto57["m_columns"][] = "E";
$proto57["m_columns"][] = "F";
$proto57["m_columns"][] = "G";
$proto57["m_columns"][] = "H";
$proto57["m_columns"][] = "I";
$proto57["m_columns"][] = "J";
$proto57["m_columns"][] = "K";
$proto57["m_columns"][] = "L";
$proto57["m_columns"][] = "M";
$proto57["m_columns"][] = "N";
$proto57["m_columns"][] = "P";
$proto57["m_columns"][] = "O";
$proto57["m_columns"][] = "R";
$proto57["m_columns"][] = "S";
$proto57["m_columns"][] = "Q";
$proto57["m_columns"][] = "T";
$proto57["m_columns"][] = "APP_UID2";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "PMT_SPREADSUB";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "PMT_SPREADSUB";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_SPREADSUB";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_SPREADSUB = createSqlQuery_PMT_SPREADSUB();


	
						;

																									

$tdataPMT_SPREADSUB[".sqlquery"] = $queryData_PMT_SPREADSUB;

$tableEvents["PMT_SPREADSUB"] = new eventsBase;
$tdataPMT_SPREADSUB[".hasEvents"] = false;

?>
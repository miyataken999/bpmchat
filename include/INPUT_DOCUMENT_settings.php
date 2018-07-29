<?php
require_once(getabspath("classes/cipherer.php"));




$tdataINPUT_DOCUMENT = array();
	$tdataINPUT_DOCUMENT[".truncateText"] = true;
	$tdataINPUT_DOCUMENT[".NumberOfChars"] = 20;
	$tdataINPUT_DOCUMENT[".ShortName"] = "INPUT_DOCUMENT";
	$tdataINPUT_DOCUMENT[".OwnerID"] = "";
	$tdataINPUT_DOCUMENT[".OriginalTable"] = "INPUT_DOCUMENT";

//	field labels
$fieldLabelsINPUT_DOCUMENT = array();
$fieldToolTipsINPUT_DOCUMENT = array();
$pageTitlesINPUT_DOCUMENT = array();
$placeHoldersINPUT_DOCUMENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsINPUT_DOCUMENT["Japanese"] = array();
	$fieldToolTipsINPUT_DOCUMENT["Japanese"] = array();
	$placeHoldersINPUT_DOCUMENT["Japanese"] = array();
	$pageTitlesINPUT_DOCUMENT["Japanese"] = array();
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_UID"] = "ドキュメントのUID INP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_UID"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_UID"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["PRO_UID"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["PRO_UID"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_TITLE"] = "ドキュメントのタイトルINP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_TITLE"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_TITLE"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_DESCRIPTION"] = "ドキュメントの記述INP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_DESCRIPTION"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_DESCRIPTION"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_FORM_NEEDED"] = "必要に応じてINPドキュメントフォーム";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_FORM_NEEDED"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_FORM_NEEDED"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_ORIGINAL"] = "ドキュメントのオリジナルINP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_ORIGINAL"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_ORIGINAL"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_PUBLISHED"] = "INPドキュメントが公開します";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_PUBLISHED"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_PUBLISHED"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_VERSIONING"] = "ドキュメントのバージョン管理INP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_VERSIONING"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_VERSIONING"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_DESTINATION_PATH"] = "INPのdoc先パス";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_DESTINATION_PATH"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_DESTINATION_PATH"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_TAGS"] = "DOCタグINP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_TAGS"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_TAGS"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_TYPE_FILE"] = "INPのdoc形式ファイル";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_TYPE_FILE"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_TYPE_FILE"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_MAX_FILESIZE"] = "ドキュメントの最大ファイルサイズINP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_MAX_FILESIZE"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_MAX_FILESIZE"] = "";
	$fieldLabelsINPUT_DOCUMENT["Japanese"]["INP_DOC_MAX_FILESIZE_UNIT"] = "ドキュメントの最大ファイルサイズユニットINP";
	$fieldToolTipsINPUT_DOCUMENT["Japanese"]["INP_DOC_MAX_FILESIZE_UNIT"] = "";
	$placeHoldersINPUT_DOCUMENT["Japanese"]["INP_DOC_MAX_FILESIZE_UNIT"] = "";
	if (count($fieldToolTipsINPUT_DOCUMENT["Japanese"]))
		$tdataINPUT_DOCUMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsINPUT_DOCUMENT["English"] = array();
	$fieldToolTipsINPUT_DOCUMENT["English"] = array();
	$placeHoldersINPUT_DOCUMENT["English"] = array();
	$pageTitlesINPUT_DOCUMENT["English"] = array();
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_UID"] = "ドキュメントのUID INP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_UID"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_UID"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsINPUT_DOCUMENT["English"]["PRO_UID"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["PRO_UID"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_TITLE"] = "ドキュメントのタイトルINP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_TITLE"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_TITLE"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_DESCRIPTION"] = "ドキュメントの記述INP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_DESCRIPTION"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_DESCRIPTION"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_FORM_NEEDED"] = "必要に応じてINPドキュメントフォーム";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_FORM_NEEDED"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_FORM_NEEDED"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_ORIGINAL"] = "ドキュメントのオリジナルINP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_ORIGINAL"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_ORIGINAL"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_PUBLISHED"] = "INPドキュメントが公開します";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_PUBLISHED"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_PUBLISHED"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_VERSIONING"] = "ドキュメントのバージョン管理INP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_VERSIONING"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_VERSIONING"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_DESTINATION_PATH"] = "INPのdoc先パス";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_DESTINATION_PATH"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_DESTINATION_PATH"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_TAGS"] = "DOCタグINP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_TAGS"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_TAGS"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_TYPE_FILE"] = "INPのdoc形式ファイル";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_TYPE_FILE"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_TYPE_FILE"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_MAX_FILESIZE"] = "ドキュメントの最大ファイルサイズINP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_MAX_FILESIZE"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_MAX_FILESIZE"] = "";
	$fieldLabelsINPUT_DOCUMENT["English"]["INP_DOC_MAX_FILESIZE_UNIT"] = "ドキュメントの最大ファイルサイズユニットINP";
	$fieldToolTipsINPUT_DOCUMENT["English"]["INP_DOC_MAX_FILESIZE_UNIT"] = "";
	$placeHoldersINPUT_DOCUMENT["English"]["INP_DOC_MAX_FILESIZE_UNIT"] = "";
	if (count($fieldToolTipsINPUT_DOCUMENT["English"]))
		$tdataINPUT_DOCUMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsINPUT_DOCUMENT[""] = array();
	$fieldToolTipsINPUT_DOCUMENT[""] = array();
	$placeHoldersINPUT_DOCUMENT[""] = array();
	$pageTitlesINPUT_DOCUMENT[""] = array();
	if (count($fieldToolTipsINPUT_DOCUMENT[""]))
		$tdataINPUT_DOCUMENT[".isUseToolTips"] = true;
}


	$tdataINPUT_DOCUMENT[".NCSearch"] = true;



$tdataINPUT_DOCUMENT[".shortTableName"] = "INPUT_DOCUMENT";
$tdataINPUT_DOCUMENT[".nSecOptions"] = 0;
$tdataINPUT_DOCUMENT[".recsPerRowPrint"] = 1;
$tdataINPUT_DOCUMENT[".mainTableOwnerID"] = "";
$tdataINPUT_DOCUMENT[".moveNext"] = 0;
$tdataINPUT_DOCUMENT[".entityType"] = 0;

$tdataINPUT_DOCUMENT[".strOriginalTableName"] = "INPUT_DOCUMENT";

	



$tdataINPUT_DOCUMENT[".showAddInPopup"] = false;

$tdataINPUT_DOCUMENT[".showEditInPopup"] = false;

$tdataINPUT_DOCUMENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataINPUT_DOCUMENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataINPUT_DOCUMENT[".fieldsForRegister"] = array();
	
$tdataINPUT_DOCUMENT[".listAjax"] = false;

	$tdataINPUT_DOCUMENT[".audit"] = true;

	$tdataINPUT_DOCUMENT[".locking"] = false;

$tdataINPUT_DOCUMENT[".edit"] = true;
$tdataINPUT_DOCUMENT[".afterEditAction"] = 1;
$tdataINPUT_DOCUMENT[".closePopupAfterEdit"] = 1;
$tdataINPUT_DOCUMENT[".afterEditActionDetTable"] = "";

$tdataINPUT_DOCUMENT[".add"] = true;
$tdataINPUT_DOCUMENT[".afterAddAction"] = 1;
$tdataINPUT_DOCUMENT[".closePopupAfterAdd"] = 1;
$tdataINPUT_DOCUMENT[".afterAddActionDetTable"] = "";

$tdataINPUT_DOCUMENT[".list"] = true;



$tdataINPUT_DOCUMENT[".reorderRecordsByHeader"] = true;



$tdataINPUT_DOCUMENT[".view"] = true;

$tdataINPUT_DOCUMENT[".import"] = true;

$tdataINPUT_DOCUMENT[".exportTo"] = true;

$tdataINPUT_DOCUMENT[".printFriendly"] = true;

$tdataINPUT_DOCUMENT[".delete"] = true;

$tdataINPUT_DOCUMENT[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataINPUT_DOCUMENT[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataINPUT_DOCUMENT[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataINPUT_DOCUMENT[".searchSaving"] = false;
//

$tdataINPUT_DOCUMENT[".showSearchPanel"] = true;
		$tdataINPUT_DOCUMENT[".flexibleSearch"] = true;

$tdataINPUT_DOCUMENT[".isUseAjaxSuggest"] = true;

$tdataINPUT_DOCUMENT[".rowHighlite"] = true;



				

$tdataINPUT_DOCUMENT[".ajaxCodeSnippetAdded"] = false;

$tdataINPUT_DOCUMENT[".buttonsAdded"] = false;

$tdataINPUT_DOCUMENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataINPUT_DOCUMENT[".isUseTimeForSearch"] = false;





$tdataINPUT_DOCUMENT[".allSearchFields"] = array();
$tdataINPUT_DOCUMENT[".filterFields"] = array();
$tdataINPUT_DOCUMENT[".requiredSearchFields"] = array();

$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_UID";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "PRO_UID";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_TITLE";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_DESCRIPTION";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_FORM_NEEDED";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_ORIGINAL";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_PUBLISHED";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_VERSIONING";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_DESTINATION_PATH";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_TAGS";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_TYPE_FILE";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_MAX_FILESIZE";
	$tdataINPUT_DOCUMENT[".allSearchFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";
	

$tdataINPUT_DOCUMENT[".googleLikeFields"] = array();
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".googleLikeFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";


$tdataINPUT_DOCUMENT[".advSearchFields"] = array();
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".advSearchFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".tableType"] = "list";

$tdataINPUT_DOCUMENT[".printerPageOrientation"] = 0;
$tdataINPUT_DOCUMENT[".nPrinterPageScale"] = 100;

$tdataINPUT_DOCUMENT[".nPrinterSplitRecords"] = 40;

$tdataINPUT_DOCUMENT[".nPrinterPDFSplitRecords"] = 40;



$tdataINPUT_DOCUMENT[".geocodingEnabled"] = false;





$tdataINPUT_DOCUMENT[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataINPUT_DOCUMENT[".pageSize"] = 20;

$tdataINPUT_DOCUMENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataINPUT_DOCUMENT[".strOrderBy"] = $tstrOrderBy;

$tdataINPUT_DOCUMENT[".orderindexes"] = array();

$tdataINPUT_DOCUMENT[".sqlHead"] = "SELECT INP_DOC_UID,  	PRO_UID,  	INP_DOC_TITLE,  	INP_DOC_DESCRIPTION,  	INP_DOC_FORM_NEEDED,  	INP_DOC_ORIGINAL,  	INP_DOC_PUBLISHED,  	INP_DOC_VERSIONING,  	INP_DOC_DESTINATION_PATH,  	INP_DOC_TAGS,  	INP_DOC_TYPE_FILE,  	INP_DOC_MAX_FILESIZE,  	INP_DOC_MAX_FILESIZE_UNIT";
$tdataINPUT_DOCUMENT[".sqlFrom"] = "FROM INPUT_DOCUMENT";
$tdataINPUT_DOCUMENT[".sqlWhereExpr"] = "";
$tdataINPUT_DOCUMENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataINPUT_DOCUMENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataINPUT_DOCUMENT[".arrGroupsPerPage"] = $arrGPP;

$tdataINPUT_DOCUMENT[".highlightSearchResults"] = true;

$tableKeysINPUT_DOCUMENT = array();
$tableKeysINPUT_DOCUMENT[] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".Keys"] = $tableKeysINPUT_DOCUMENT;

$tdataINPUT_DOCUMENT[".listFields"] = array();
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".listFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".listFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".hideMobileList"] = array();


$tdataINPUT_DOCUMENT[".viewFields"] = array();
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".viewFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".viewFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".addFields"] = array();
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".addFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".addFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".masterListFields"] = array();
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".masterListFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".inlineAddFields"] = array();
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".inlineAddFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".editFields"] = array();
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".editFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".editFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".inlineEditFields"] = array();
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".inlineEditFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".updateSelectedFields"] = array();
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".updateSelectedFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";


$tdataINPUT_DOCUMENT[".exportFields"] = array();
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".exportFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".exportFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".importFields"] = array();
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".importFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".importFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

$tdataINPUT_DOCUMENT[".printFields"] = array();
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_UID";
$tdataINPUT_DOCUMENT[".printFields"][] = "PRO_UID";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_TITLE";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_DESCRIPTION";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_FORM_NEEDED";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_ORIGINAL";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_PUBLISHED";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_VERSIONING";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_DESTINATION_PATH";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_TAGS";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_TYPE_FILE";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_MAX_FILESIZE";
$tdataINPUT_DOCUMENT[".printFields"][] = "INP_DOC_MAX_FILESIZE_UNIT";

//	INP_DOC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "INP_DOC_UID";
	$fdata["GoodName"] = "INP_DOC_UID";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_UID");
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

		$fdata["strField"] = "INP_DOC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_UID";

	
	
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




	$tdataINPUT_DOCUMENT["INP_DOC_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","PRO_UID");
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

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
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




	$tdataINPUT_DOCUMENT["PRO_UID"] = $fdata;
//	INP_DOC_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "INP_DOC_TITLE";
	$fdata["GoodName"] = "INP_DOC_TITLE";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_TITLE");
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

		$fdata["strField"] = "INP_DOC_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_TITLE";

	
	
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




	$tdataINPUT_DOCUMENT["INP_DOC_TITLE"] = $fdata;
//	INP_DOC_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "INP_DOC_DESCRIPTION";
	$fdata["GoodName"] = "INP_DOC_DESCRIPTION";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_DESCRIPTION");
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

		$fdata["strField"] = "INP_DOC_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_DESCRIPTION";

	
	
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




	$tdataINPUT_DOCUMENT["INP_DOC_DESCRIPTION"] = $fdata;
//	INP_DOC_FORM_NEEDED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "INP_DOC_FORM_NEEDED";
	$fdata["GoodName"] = "INP_DOC_FORM_NEEDED";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_FORM_NEEDED");
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

		$fdata["strField"] = "INP_DOC_FORM_NEEDED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_FORM_NEEDED";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataINPUT_DOCUMENT["INP_DOC_FORM_NEEDED"] = $fdata;
//	INP_DOC_ORIGINAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "INP_DOC_ORIGINAL";
	$fdata["GoodName"] = "INP_DOC_ORIGINAL";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_ORIGINAL");
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

		$fdata["strField"] = "INP_DOC_ORIGINAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_ORIGINAL";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataINPUT_DOCUMENT["INP_DOC_ORIGINAL"] = $fdata;
//	INP_DOC_PUBLISHED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "INP_DOC_PUBLISHED";
	$fdata["GoodName"] = "INP_DOC_PUBLISHED";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_PUBLISHED");
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

		$fdata["strField"] = "INP_DOC_PUBLISHED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_PUBLISHED";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataINPUT_DOCUMENT["INP_DOC_PUBLISHED"] = $fdata;
//	INP_DOC_VERSIONING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "INP_DOC_VERSIONING";
	$fdata["GoodName"] = "INP_DOC_VERSIONING";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_VERSIONING");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "INP_DOC_VERSIONING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_VERSIONING";

	
	
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




	$tdataINPUT_DOCUMENT["INP_DOC_VERSIONING"] = $fdata;
//	INP_DOC_DESTINATION_PATH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "INP_DOC_DESTINATION_PATH";
	$fdata["GoodName"] = "INP_DOC_DESTINATION_PATH";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_DESTINATION_PATH");
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

		$fdata["strField"] = "INP_DOC_DESTINATION_PATH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_DESTINATION_PATH";

	
	
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




	$tdataINPUT_DOCUMENT["INP_DOC_DESTINATION_PATH"] = $fdata;
//	INP_DOC_TAGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "INP_DOC_TAGS";
	$fdata["GoodName"] = "INP_DOC_TAGS";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_TAGS");
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

		$fdata["strField"] = "INP_DOC_TAGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_TAGS";

	
	
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




	$tdataINPUT_DOCUMENT["INP_DOC_TAGS"] = $fdata;
//	INP_DOC_TYPE_FILE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "INP_DOC_TYPE_FILE";
	$fdata["GoodName"] = "INP_DOC_TYPE_FILE";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_TYPE_FILE");
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

		$fdata["strField"] = "INP_DOC_TYPE_FILE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_TYPE_FILE";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataINPUT_DOCUMENT["INP_DOC_TYPE_FILE"] = $fdata;
//	INP_DOC_MAX_FILESIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "INP_DOC_MAX_FILESIZE";
	$fdata["GoodName"] = "INP_DOC_MAX_FILESIZE";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_MAX_FILESIZE");
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

		$fdata["strField"] = "INP_DOC_MAX_FILESIZE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_MAX_FILESIZE";

	
	
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




	$tdataINPUT_DOCUMENT["INP_DOC_MAX_FILESIZE"] = $fdata;
//	INP_DOC_MAX_FILESIZE_UNIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "INP_DOC_MAX_FILESIZE_UNIT";
	$fdata["GoodName"] = "INP_DOC_MAX_FILESIZE_UNIT";
	$fdata["ownerTable"] = "INPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("INPUT_DOCUMENT","INP_DOC_MAX_FILESIZE_UNIT");
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

		$fdata["strField"] = "INP_DOC_MAX_FILESIZE_UNIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_MAX_FILESIZE_UNIT";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdataINPUT_DOCUMENT["INP_DOC_MAX_FILESIZE_UNIT"] = $fdata;


$tables_data["INPUT_DOCUMENT"]=&$tdataINPUT_DOCUMENT;
$field_labels["INPUT_DOCUMENT"] = &$fieldLabelsINPUT_DOCUMENT;
$fieldToolTips["INPUT_DOCUMENT"] = &$fieldToolTipsINPUT_DOCUMENT;
$placeHolders["INPUT_DOCUMENT"] = &$placeHoldersINPUT_DOCUMENT;
$page_titles["INPUT_DOCUMENT"] = &$pageTitlesINPUT_DOCUMENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["INPUT_DOCUMENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["INPUT_DOCUMENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_INPUT_DOCUMENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "INP_DOC_UID,  	PRO_UID,  	INP_DOC_TITLE,  	INP_DOC_DESCRIPTION,  	INP_DOC_FORM_NEEDED,  	INP_DOC_ORIGINAL,  	INP_DOC_PUBLISHED,  	INP_DOC_VERSIONING,  	INP_DOC_DESTINATION_PATH,  	INP_DOC_TAGS,  	INP_DOC_TYPE_FILE,  	INP_DOC_MAX_FILESIZE,  	INP_DOC_MAX_FILESIZE_UNIT";
$proto0["m_strFrom"] = "FROM INPUT_DOCUMENT";
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
	"m_strName" => "INP_DOC_UID",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto6["m_sql"] = "INP_DOC_UID";
$proto6["m_srcTableName"] = "INPUT_DOCUMENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "INPUT_DOCUMENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_TITLE",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto10["m_sql"] = "INP_DOC_TITLE";
$proto10["m_srcTableName"] = "INPUT_DOCUMENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_DESCRIPTION",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto12["m_sql"] = "INP_DOC_DESCRIPTION";
$proto12["m_srcTableName"] = "INPUT_DOCUMENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_FORM_NEEDED",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto14["m_sql"] = "INP_DOC_FORM_NEEDED";
$proto14["m_srcTableName"] = "INPUT_DOCUMENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_ORIGINAL",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto16["m_sql"] = "INP_DOC_ORIGINAL";
$proto16["m_srcTableName"] = "INPUT_DOCUMENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_PUBLISHED",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto18["m_sql"] = "INP_DOC_PUBLISHED";
$proto18["m_srcTableName"] = "INPUT_DOCUMENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_VERSIONING",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto20["m_sql"] = "INP_DOC_VERSIONING";
$proto20["m_srcTableName"] = "INPUT_DOCUMENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_DESTINATION_PATH",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto22["m_sql"] = "INP_DOC_DESTINATION_PATH";
$proto22["m_srcTableName"] = "INPUT_DOCUMENT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_TAGS",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto24["m_sql"] = "INP_DOC_TAGS";
$proto24["m_srcTableName"] = "INPUT_DOCUMENT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_TYPE_FILE",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto26["m_sql"] = "INP_DOC_TYPE_FILE";
$proto26["m_srcTableName"] = "INPUT_DOCUMENT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_MAX_FILESIZE",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto28["m_sql"] = "INP_DOC_MAX_FILESIZE";
$proto28["m_srcTableName"] = "INPUT_DOCUMENT";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_MAX_FILESIZE_UNIT",
	"m_strTable" => "INPUT_DOCUMENT",
	"m_srcTableName" => "INPUT_DOCUMENT"
));

$proto30["m_sql"] = "INP_DOC_MAX_FILESIZE_UNIT";
$proto30["m_srcTableName"] = "INPUT_DOCUMENT";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "INPUT_DOCUMENT";
$proto33["m_srcTableName"] = "INPUT_DOCUMENT";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "INP_DOC_UID";
$proto33["m_columns"][] = "PRO_UID";
$proto33["m_columns"][] = "INP_DOC_TITLE";
$proto33["m_columns"][] = "INP_DOC_DESCRIPTION";
$proto33["m_columns"][] = "INP_DOC_FORM_NEEDED";
$proto33["m_columns"][] = "INP_DOC_ORIGINAL";
$proto33["m_columns"][] = "INP_DOC_PUBLISHED";
$proto33["m_columns"][] = "INP_DOC_VERSIONING";
$proto33["m_columns"][] = "INP_DOC_DESTINATION_PATH";
$proto33["m_columns"][] = "INP_DOC_TAGS";
$proto33["m_columns"][] = "INP_DOC_TYPE_FILE";
$proto33["m_columns"][] = "INP_DOC_MAX_FILESIZE";
$proto33["m_columns"][] = "INP_DOC_MAX_FILESIZE_UNIT";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INPUT_DOCUMENT";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "INPUT_DOCUMENT";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="INPUT_DOCUMENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_INPUT_DOCUMENT = createSqlQuery_INPUT_DOCUMENT();


	
						;

													

$tdataINPUT_DOCUMENT[".sqlquery"] = $queryData_INPUT_DOCUMENT;

$tableEvents["INPUT_DOCUMENT"] = new eventsBase;
$tdataINPUT_DOCUMENT[".hasEvents"] = false;

?>
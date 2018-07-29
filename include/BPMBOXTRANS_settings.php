<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMBOXTRANS = array();
	$tdataBPMBOXTRANS[".truncateText"] = true;
	$tdataBPMBOXTRANS[".NumberOfChars"] = 80;
	$tdataBPMBOXTRANS[".ShortName"] = "BPMBOXTRANS";
	$tdataBPMBOXTRANS[".OwnerID"] = "";
	$tdataBPMBOXTRANS[".OriginalTable"] = "BPMBOXTRANS";

//	field labels
$fieldLabelsBPMBOXTRANS = array();
$fieldToolTipsBPMBOXTRANS = array();
$pageTitlesBPMBOXTRANS = array();
$placeHoldersBPMBOXTRANS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMBOXTRANS["Japanese"] = array();
	$fieldToolTipsBPMBOXTRANS["Japanese"] = array();
	$placeHoldersBPMBOXTRANS["Japanese"] = array();
	$pageTitlesBPMBOXTRANS["Japanese"] = array();
	$fieldLabelsBPMBOXTRANS["Japanese"]["Field"] = "Field";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["Field"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["Field"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["English"] = "English";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["English"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["English"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["Japanese"] = "Japanese";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["Japanese"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["Japanese"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["English_Tooltips"] = "English Tooltips";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["English_Tooltips"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["English_Tooltips"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["Japanese_Tooltips"] = "Japanese Tooltips";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["Japanese_Tooltips"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["Japanese_Tooltips"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["English_Placeholders"] = "English Placeholders";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["English_Placeholders"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["English_Placeholders"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["Japanese_Placeholders"] = "Japanese Placeholders";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["Japanese_Placeholders"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["Japanese_Placeholders"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["id"] = "Id";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["id"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["id"] = "";
	$fieldLabelsBPMBOXTRANS["Japanese"]["Table"] = "Table";
	$fieldToolTipsBPMBOXTRANS["Japanese"]["Table"] = "";
	$placeHoldersBPMBOXTRANS["Japanese"]["Table"] = "";
	if (count($fieldToolTipsBPMBOXTRANS["Japanese"]))
		$tdataBPMBOXTRANS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMBOXTRANS["English"] = array();
	$fieldToolTipsBPMBOXTRANS["English"] = array();
	$placeHoldersBPMBOXTRANS["English"] = array();
	$pageTitlesBPMBOXTRANS["English"] = array();
	$fieldLabelsBPMBOXTRANS["English"]["Field"] = "Field";
	$fieldToolTipsBPMBOXTRANS["English"]["Field"] = "";
	$placeHoldersBPMBOXTRANS["English"]["Field"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["English"] = "English";
	$fieldToolTipsBPMBOXTRANS["English"]["English"] = "";
	$placeHoldersBPMBOXTRANS["English"]["English"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["Japanese"] = "Japanese";
	$fieldToolTipsBPMBOXTRANS["English"]["Japanese"] = "";
	$placeHoldersBPMBOXTRANS["English"]["Japanese"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["English_Tooltips"] = "English Tooltips";
	$fieldToolTipsBPMBOXTRANS["English"]["English_Tooltips"] = "";
	$placeHoldersBPMBOXTRANS["English"]["English_Tooltips"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["Japanese_Tooltips"] = "Japanese Tooltips";
	$fieldToolTipsBPMBOXTRANS["English"]["Japanese_Tooltips"] = "";
	$placeHoldersBPMBOXTRANS["English"]["Japanese_Tooltips"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["English_Placeholders"] = "English Placeholders";
	$fieldToolTipsBPMBOXTRANS["English"]["English_Placeholders"] = "";
	$placeHoldersBPMBOXTRANS["English"]["English_Placeholders"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["Japanese_Placeholders"] = "Japanese Placeholders";
	$fieldToolTipsBPMBOXTRANS["English"]["Japanese_Placeholders"] = "";
	$placeHoldersBPMBOXTRANS["English"]["Japanese_Placeholders"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["id"] = "Id";
	$fieldToolTipsBPMBOXTRANS["English"]["id"] = "";
	$placeHoldersBPMBOXTRANS["English"]["id"] = "";
	$fieldLabelsBPMBOXTRANS["English"]["Table"] = "Table";
	$fieldToolTipsBPMBOXTRANS["English"]["Table"] = "";
	$placeHoldersBPMBOXTRANS["English"]["Table"] = "";
	if (count($fieldToolTipsBPMBOXTRANS["English"]))
		$tdataBPMBOXTRANS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMBOXTRANS[""] = array();
	$fieldToolTipsBPMBOXTRANS[""] = array();
	$placeHoldersBPMBOXTRANS[""] = array();
	$pageTitlesBPMBOXTRANS[""] = array();
	$fieldLabelsBPMBOXTRANS[""]["Field"] = "Field";
	$fieldToolTipsBPMBOXTRANS[""]["Field"] = "";
	$placeHoldersBPMBOXTRANS[""]["Field"] = "";
	$fieldLabelsBPMBOXTRANS[""]["English"] = "English";
	$fieldToolTipsBPMBOXTRANS[""]["English"] = "";
	$placeHoldersBPMBOXTRANS[""]["English"] = "";
	$fieldLabelsBPMBOXTRANS[""]["Japanese"] = "Japanese";
	$fieldToolTipsBPMBOXTRANS[""]["Japanese"] = "";
	$placeHoldersBPMBOXTRANS[""]["Japanese"] = "";
	$fieldLabelsBPMBOXTRANS[""]["English_Tooltips"] = "English Tooltips";
	$fieldToolTipsBPMBOXTRANS[""]["English_Tooltips"] = "";
	$placeHoldersBPMBOXTRANS[""]["English_Tooltips"] = "";
	$fieldLabelsBPMBOXTRANS[""]["Japanese_Tooltips"] = "Japanese Tooltips";
	$fieldToolTipsBPMBOXTRANS[""]["Japanese_Tooltips"] = "";
	$placeHoldersBPMBOXTRANS[""]["Japanese_Tooltips"] = "";
	$fieldLabelsBPMBOXTRANS[""]["English_Placeholders"] = "English Placeholders";
	$fieldToolTipsBPMBOXTRANS[""]["English_Placeholders"] = "";
	$placeHoldersBPMBOXTRANS[""]["English_Placeholders"] = "";
	$fieldLabelsBPMBOXTRANS[""]["Japanese_Placeholders"] = "Japanese Placeholders";
	$fieldToolTipsBPMBOXTRANS[""]["Japanese_Placeholders"] = "";
	$placeHoldersBPMBOXTRANS[""]["Japanese_Placeholders"] = "";
	$fieldLabelsBPMBOXTRANS[""]["id"] = "Id";
	$fieldToolTipsBPMBOXTRANS[""]["id"] = "";
	$placeHoldersBPMBOXTRANS[""]["id"] = "";
	$fieldLabelsBPMBOXTRANS[""]["Table"] = "Table";
	$fieldToolTipsBPMBOXTRANS[""]["Table"] = "";
	$placeHoldersBPMBOXTRANS[""]["Table"] = "";
	if (count($fieldToolTipsBPMBOXTRANS[""]))
		$tdataBPMBOXTRANS[".isUseToolTips"] = true;
}


	$tdataBPMBOXTRANS[".NCSearch"] = true;



$tdataBPMBOXTRANS[".shortTableName"] = "BPMBOXTRANS";
$tdataBPMBOXTRANS[".nSecOptions"] = 0;
$tdataBPMBOXTRANS[".recsPerRowPrint"] = 1;
$tdataBPMBOXTRANS[".mainTableOwnerID"] = "";
$tdataBPMBOXTRANS[".moveNext"] = 1;
$tdataBPMBOXTRANS[".entityType"] = 0;

$tdataBPMBOXTRANS[".strOriginalTableName"] = "BPMBOXTRANS";

	



$tdataBPMBOXTRANS[".showAddInPopup"] = false;

$tdataBPMBOXTRANS[".showEditInPopup"] = false;

$tdataBPMBOXTRANS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMBOXTRANS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMBOXTRANS[".fieldsForRegister"] = array();
	
	$tdataBPMBOXTRANS[".listAjax"] = true;

	$tdataBPMBOXTRANS[".audit"] = false;

	$tdataBPMBOXTRANS[".locking"] = false;

$tdataBPMBOXTRANS[".edit"] = true;
$tdataBPMBOXTRANS[".afterEditAction"] = 1;
$tdataBPMBOXTRANS[".closePopupAfterEdit"] = 1;
$tdataBPMBOXTRANS[".afterEditActionDetTable"] = "";

$tdataBPMBOXTRANS[".add"] = true;
$tdataBPMBOXTRANS[".afterAddAction"] = 1;
$tdataBPMBOXTRANS[".closePopupAfterAdd"] = 1;
$tdataBPMBOXTRANS[".afterAddActionDetTable"] = "";

$tdataBPMBOXTRANS[".list"] = true;

$tdataBPMBOXTRANS[".inlineEdit"] = true;

$tdataBPMBOXTRANS[".updateSelected"] = true;

$tdataBPMBOXTRANS[".reorderRecordsByHeader"] = true;
$tdataBPMBOXTRANS[".createSortByDropdown"] = true;
$tdataBPMBOXTRANS[".strSortControlSettingsJSON"] = "";

$tdataBPMBOXTRANS[".strClickActionJSON"] = "{\"fields\":{\"English\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"English Placeholders\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"English Tooltips\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Field\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Japanese\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Japanese Placeholders\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Japanese Tooltips\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tblname\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"PMT_MITUMORI1_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}},\"row\":{\"action\":\"grid\",\"codeData\":{\"snippet\":\"PMT_MITUMORI1_ajax\"},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdataBPMBOXTRANS[".inlineAdd"] = true;
$tdataBPMBOXTRANS[".copy"] = true;
$tdataBPMBOXTRANS[".view"] = true;

$tdataBPMBOXTRANS[".import"] = true;

$tdataBPMBOXTRANS[".exportTo"] = true;

$tdataBPMBOXTRANS[".printFriendly"] = true;

$tdataBPMBOXTRANS[".delete"] = true;

$tdataBPMBOXTRANS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMBOXTRANS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMBOXTRANS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMBOXTRANS[".searchSaving"] = false;
//

$tdataBPMBOXTRANS[".showSearchPanel"] = true;
		$tdataBPMBOXTRANS[".flexibleSearch"] = true;

$tdataBPMBOXTRANS[".isUseAjaxSuggest"] = true;

$tdataBPMBOXTRANS[".rowHighlite"] = true;



						
					


$tdataBPMBOXTRANS[".ajaxCodeSnippetAdded"] = true;

$tdataBPMBOXTRANS[".buttonsAdded"] = true;

$tdataBPMBOXTRANS[".addPageEvents"] = true;

// use timepicker for search panel
$tdataBPMBOXTRANS[".isUseTimeForSearch"] = false;





$tdataBPMBOXTRANS[".allSearchFields"] = array();
$tdataBPMBOXTRANS[".filterFields"] = array();
$tdataBPMBOXTRANS[".requiredSearchFields"] = array();

$tdataBPMBOXTRANS[".allSearchFields"][] = "Table";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "Field";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "English";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "Japanese";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "English Tooltips";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "Japanese Tooltips";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "English Placeholders";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "Japanese Placeholders";
	$tdataBPMBOXTRANS[".allSearchFields"][] = "id";
	

$tdataBPMBOXTRANS[".googleLikeFields"] = array();
$tdataBPMBOXTRANS[".googleLikeFields"][] = "Table";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "Field";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "English";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "Japanese";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".googleLikeFields"][] = "id";


$tdataBPMBOXTRANS[".advSearchFields"] = array();
$tdataBPMBOXTRANS[".advSearchFields"][] = "Table";
$tdataBPMBOXTRANS[".advSearchFields"][] = "Field";
$tdataBPMBOXTRANS[".advSearchFields"][] = "English";
$tdataBPMBOXTRANS[".advSearchFields"][] = "Japanese";
$tdataBPMBOXTRANS[".advSearchFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".advSearchFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".advSearchFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".advSearchFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".advSearchFields"][] = "id";

$tdataBPMBOXTRANS[".tableType"] = "list";

$tdataBPMBOXTRANS[".printerPageOrientation"] = 0;
$tdataBPMBOXTRANS[".nPrinterPageScale"] = 100;

$tdataBPMBOXTRANS[".nPrinterSplitRecords"] = 40;

$tdataBPMBOXTRANS[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMBOXTRANS[".geocodingEnabled"] = false;





$tdataBPMBOXTRANS[".listGridLayout"] = 3;


$tdataBPMBOXTRANS[".isResizeColumns"] = true;



// view page pdf
$tdataBPMBOXTRANS[".isViewPagePDF"] = true;
$tdataBPMBOXTRANS[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataBPMBOXTRANS[".isPrinterPagePDF"] = true;
$tdataBPMBOXTRANS[".nPrinterPagePDFScale"] = 100;


$tdataBPMBOXTRANS[".pageSize"] = 20;

$tdataBPMBOXTRANS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMBOXTRANS[".strOrderBy"] = $tstrOrderBy;

$tdataBPMBOXTRANS[".orderindexes"] = array();

$tdataBPMBOXTRANS[".sqlHead"] = "SELECT tblname AS `Table`,  Field,  English,  Japanese,  `English Tooltips`,  `Japanese Tooltips`,  `English Placeholders`,  `Japanese Placeholders`,  id";
$tdataBPMBOXTRANS[".sqlFrom"] = "FROM BPMBOXTRANS";
$tdataBPMBOXTRANS[".sqlWhereExpr"] = "";
$tdataBPMBOXTRANS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMBOXTRANS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMBOXTRANS[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMBOXTRANS[".highlightSearchResults"] = true;

$tableKeysBPMBOXTRANS = array();
$tableKeysBPMBOXTRANS[] = "id";
$tdataBPMBOXTRANS[".Keys"] = $tableKeysBPMBOXTRANS;

$tdataBPMBOXTRANS[".listFields"] = array();
$tdataBPMBOXTRANS[".listFields"][] = "Table";
$tdataBPMBOXTRANS[".listFields"][] = "Field";
$tdataBPMBOXTRANS[".listFields"][] = "English";
$tdataBPMBOXTRANS[".listFields"][] = "Japanese";
$tdataBPMBOXTRANS[".listFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".listFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".listFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".listFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".listFields"][] = "id";

$tdataBPMBOXTRANS[".hideMobileList"] = array();


$tdataBPMBOXTRANS[".viewFields"] = array();
$tdataBPMBOXTRANS[".viewFields"][] = "Table";
$tdataBPMBOXTRANS[".viewFields"][] = "Field";
$tdataBPMBOXTRANS[".viewFields"][] = "English";
$tdataBPMBOXTRANS[".viewFields"][] = "Japanese";
$tdataBPMBOXTRANS[".viewFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".viewFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".viewFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".viewFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".viewFields"][] = "id";

$tdataBPMBOXTRANS[".addFields"] = array();
$tdataBPMBOXTRANS[".addFields"][] = "Field";
$tdataBPMBOXTRANS[".addFields"][] = "English";
$tdataBPMBOXTRANS[".addFields"][] = "Japanese";
$tdataBPMBOXTRANS[".addFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".addFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".addFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".addFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".addFields"][] = "id";

$tdataBPMBOXTRANS[".masterListFields"] = array();
$tdataBPMBOXTRANS[".masterListFields"][] = "Table";
$tdataBPMBOXTRANS[".masterListFields"][] = "Field";
$tdataBPMBOXTRANS[".masterListFields"][] = "English";
$tdataBPMBOXTRANS[".masterListFields"][] = "Japanese";
$tdataBPMBOXTRANS[".masterListFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".masterListFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".masterListFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".masterListFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".masterListFields"][] = "id";

$tdataBPMBOXTRANS[".inlineAddFields"] = array();
$tdataBPMBOXTRANS[".inlineAddFields"][] = "Field";
$tdataBPMBOXTRANS[".inlineAddFields"][] = "English";
$tdataBPMBOXTRANS[".inlineAddFields"][] = "Japanese";
$tdataBPMBOXTRANS[".inlineAddFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".inlineAddFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".inlineAddFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".inlineAddFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".inlineAddFields"][] = "id";

$tdataBPMBOXTRANS[".editFields"] = array();
$tdataBPMBOXTRANS[".editFields"][] = "Field";
$tdataBPMBOXTRANS[".editFields"][] = "English";
$tdataBPMBOXTRANS[".editFields"][] = "Japanese";
$tdataBPMBOXTRANS[".editFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".editFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".editFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".editFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".editFields"][] = "id";

$tdataBPMBOXTRANS[".inlineEditFields"] = array();
$tdataBPMBOXTRANS[".inlineEditFields"][] = "Field";
$tdataBPMBOXTRANS[".inlineEditFields"][] = "English";
$tdataBPMBOXTRANS[".inlineEditFields"][] = "Japanese";
$tdataBPMBOXTRANS[".inlineEditFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".inlineEditFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".inlineEditFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".inlineEditFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".inlineEditFields"][] = "id";

$tdataBPMBOXTRANS[".updateSelectedFields"] = array();
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "Field";
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "English";
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "Japanese";
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".updateSelectedFields"][] = "id";


$tdataBPMBOXTRANS[".exportFields"] = array();
$tdataBPMBOXTRANS[".exportFields"][] = "Table";
$tdataBPMBOXTRANS[".exportFields"][] = "Field";
$tdataBPMBOXTRANS[".exportFields"][] = "English";
$tdataBPMBOXTRANS[".exportFields"][] = "Japanese";
$tdataBPMBOXTRANS[".exportFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".exportFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".exportFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".exportFields"][] = "Japanese Placeholders";

$tdataBPMBOXTRANS[".importFields"] = array();
$tdataBPMBOXTRANS[".importFields"][] = "Table";
$tdataBPMBOXTRANS[".importFields"][] = "Field";
$tdataBPMBOXTRANS[".importFields"][] = "English";
$tdataBPMBOXTRANS[".importFields"][] = "Japanese";
$tdataBPMBOXTRANS[".importFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".importFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".importFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".importFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".importFields"][] = "id";

$tdataBPMBOXTRANS[".printFields"] = array();
$tdataBPMBOXTRANS[".printFields"][] = "Table";
$tdataBPMBOXTRANS[".printFields"][] = "Field";
$tdataBPMBOXTRANS[".printFields"][] = "English";
$tdataBPMBOXTRANS[".printFields"][] = "Japanese";
$tdataBPMBOXTRANS[".printFields"][] = "English Tooltips";
$tdataBPMBOXTRANS[".printFields"][] = "Japanese Tooltips";
$tdataBPMBOXTRANS[".printFields"][] = "English Placeholders";
$tdataBPMBOXTRANS[".printFields"][] = "Japanese Placeholders";
$tdataBPMBOXTRANS[".printFields"][] = "id";

//	Table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Table";
	$fdata["GoodName"] = "Table";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","Table");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tblname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tblname";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMBOXTRANS["Table"] = $fdata;
//	Field
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Field";
	$fdata["GoodName"] = "Field";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","Field");
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

		$fdata["strField"] = "Field";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Field";

	
	
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




	$tdataBPMBOXTRANS["Field"] = $fdata;
//	English
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "English";
	$fdata["GoodName"] = "English";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","English");
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

		$fdata["strField"] = "English";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "English";

	
	
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




	$tdataBPMBOXTRANS["English"] = $fdata;
//	Japanese
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Japanese";
	$fdata["GoodName"] = "Japanese";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","Japanese");
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

		$fdata["strField"] = "Japanese";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Japanese";

	
	
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




	$tdataBPMBOXTRANS["Japanese"] = $fdata;
//	English Tooltips
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "English Tooltips";
	$fdata["GoodName"] = "English_Tooltips";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","English_Tooltips");
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

		$fdata["strField"] = "English Tooltips";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`English Tooltips`";

	
	
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




	$tdataBPMBOXTRANS["English Tooltips"] = $fdata;
//	Japanese Tooltips
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Japanese Tooltips";
	$fdata["GoodName"] = "Japanese_Tooltips";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","Japanese_Tooltips");
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

		$fdata["strField"] = "Japanese Tooltips";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Japanese Tooltips`";

	
	
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




	$tdataBPMBOXTRANS["Japanese Tooltips"] = $fdata;
//	English Placeholders
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "English Placeholders";
	$fdata["GoodName"] = "English_Placeholders";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","English_Placeholders");
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

		$fdata["strField"] = "English Placeholders";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`English Placeholders`";

	
	
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




	$tdataBPMBOXTRANS["English Placeholders"] = $fdata;
//	Japanese Placeholders
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Japanese Placeholders";
	$fdata["GoodName"] = "Japanese_Placeholders";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","Japanese_Placeholders");
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

		$fdata["strField"] = "Japanese Placeholders";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Japanese Placeholders`";

	
	
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




	$tdataBPMBOXTRANS["Japanese Placeholders"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "BPMBOXTRANS";
	$fdata["Label"] = GetFieldLabel("BPMBOXTRANS","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdataBPMBOXTRANS["id"] = $fdata;


$tables_data["BPMBOXTRANS"]=&$tdataBPMBOXTRANS;
$field_labels["BPMBOXTRANS"] = &$fieldLabelsBPMBOXTRANS;
$fieldToolTips["BPMBOXTRANS"] = &$fieldToolTipsBPMBOXTRANS;
$placeHolders["BPMBOXTRANS"] = &$placeHoldersBPMBOXTRANS;
$page_titles["BPMBOXTRANS"] = &$pageTitlesBPMBOXTRANS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMBOXTRANS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMBOXTRANS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMBOXTRANS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tblname AS `Table`,  Field,  English,  Japanese,  `English Tooltips`,  `Japanese Tooltips`,  `English Placeholders`,  `Japanese Placeholders`,  id";
$proto0["m_strFrom"] = "FROM BPMBOXTRANS";
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
	"m_strName" => "tblname",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto6["m_sql"] = "tblname";
$proto6["m_srcTableName"] = "BPMBOXTRANS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Table";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Field",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto8["m_sql"] = "Field";
$proto8["m_srcTableName"] = "BPMBOXTRANS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "English",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto10["m_sql"] = "English";
$proto10["m_srcTableName"] = "BPMBOXTRANS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Japanese",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto12["m_sql"] = "Japanese";
$proto12["m_srcTableName"] = "BPMBOXTRANS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "English Tooltips",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto14["m_sql"] = "`English Tooltips`";
$proto14["m_srcTableName"] = "BPMBOXTRANS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Japanese Tooltips",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto16["m_sql"] = "`Japanese Tooltips`";
$proto16["m_srcTableName"] = "BPMBOXTRANS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "English Placeholders",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto18["m_sql"] = "`English Placeholders`";
$proto18["m_srcTableName"] = "BPMBOXTRANS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Japanese Placeholders",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto20["m_sql"] = "`Japanese Placeholders`";
$proto20["m_srcTableName"] = "BPMBOXTRANS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "BPMBOXTRANS",
	"m_srcTableName" => "BPMBOXTRANS"
));

$proto22["m_sql"] = "id";
$proto22["m_srcTableName"] = "BPMBOXTRANS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "BPMBOXTRANS";
$proto25["m_srcTableName"] = "BPMBOXTRANS";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "tblname";
$proto25["m_columns"][] = "Field";
$proto25["m_columns"][] = "English";
$proto25["m_columns"][] = "Japanese";
$proto25["m_columns"][] = "English Tooltips";
$proto25["m_columns"][] = "Japanese Tooltips";
$proto25["m_columns"][] = "English Placeholders";
$proto25["m_columns"][] = "Japanese Placeholders";
$proto25["m_columns"][] = "id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "BPMBOXTRANS";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "BPMBOXTRANS";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMBOXTRANS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMBOXTRANS = createSqlQuery_BPMBOXTRANS();


	
						;

									

$tdataBPMBOXTRANS[".sqlquery"] = $queryData_BPMBOXTRANS;

include_once(getabspath("include/BPMBOXTRANS_events.php"));
$tableEvents["BPMBOXTRANS"] = new eventclass_BPMBOXTRANS;
$tdataBPMBOXTRANS[".hasEvents"] = true;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_links = array();
	$tdatawpfg_links[".truncateText"] = true;
	$tdatawpfg_links[".NumberOfChars"] = 80;
	$tdatawpfg_links[".ShortName"] = "wpfg_links";
	$tdatawpfg_links[".OwnerID"] = "";
	$tdatawpfg_links[".OriginalTable"] = "wpfg_links";

//	field labels
$fieldLabelswpfg_links = array();
$fieldToolTipswpfg_links = array();
$pageTitleswpfg_links = array();
$placeHolderswpfg_links = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_links["Japanese"] = array();
	$fieldToolTipswpfg_links["Japanese"] = array();
	$placeHolderswpfg_links["Japanese"] = array();
	$pageTitleswpfg_links["Japanese"] = array();
	$fieldLabelswpfg_links["Japanese"]["link_id"] = "Link Id";
	$fieldToolTipswpfg_links["Japanese"]["link_id"] = "";
	$placeHolderswpfg_links["Japanese"]["link_id"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_url"] = "Link Url";
	$fieldToolTipswpfg_links["Japanese"]["link_url"] = "";
	$placeHolderswpfg_links["Japanese"]["link_url"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_name"] = "Link Name";
	$fieldToolTipswpfg_links["Japanese"]["link_name"] = "";
	$placeHolderswpfg_links["Japanese"]["link_name"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_image"] = "Link Image";
	$fieldToolTipswpfg_links["Japanese"]["link_image"] = "";
	$placeHolderswpfg_links["Japanese"]["link_image"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_target"] = "Link Target";
	$fieldToolTipswpfg_links["Japanese"]["link_target"] = "";
	$placeHolderswpfg_links["Japanese"]["link_target"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_description"] = "Link Description";
	$fieldToolTipswpfg_links["Japanese"]["link_description"] = "";
	$placeHolderswpfg_links["Japanese"]["link_description"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_visible"] = "Link Visible";
	$fieldToolTipswpfg_links["Japanese"]["link_visible"] = "";
	$placeHolderswpfg_links["Japanese"]["link_visible"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_owner"] = "Link Owner";
	$fieldToolTipswpfg_links["Japanese"]["link_owner"] = "";
	$placeHolderswpfg_links["Japanese"]["link_owner"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_rating"] = "Link Rating";
	$fieldToolTipswpfg_links["Japanese"]["link_rating"] = "";
	$placeHolderswpfg_links["Japanese"]["link_rating"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_updated"] = "Link Updated";
	$fieldToolTipswpfg_links["Japanese"]["link_updated"] = "";
	$placeHolderswpfg_links["Japanese"]["link_updated"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_rel"] = "Link Rel";
	$fieldToolTipswpfg_links["Japanese"]["link_rel"] = "";
	$placeHolderswpfg_links["Japanese"]["link_rel"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_notes"] = "Link Notes";
	$fieldToolTipswpfg_links["Japanese"]["link_notes"] = "";
	$placeHolderswpfg_links["Japanese"]["link_notes"] = "";
	$fieldLabelswpfg_links["Japanese"]["link_rss"] = "Link Rss";
	$fieldToolTipswpfg_links["Japanese"]["link_rss"] = "";
	$placeHolderswpfg_links["Japanese"]["link_rss"] = "";
	if (count($fieldToolTipswpfg_links["Japanese"]))
		$tdatawpfg_links[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_links["English"] = array();
	$fieldToolTipswpfg_links["English"] = array();
	$placeHolderswpfg_links["English"] = array();
	$pageTitleswpfg_links["English"] = array();
	$fieldLabelswpfg_links["English"]["link_id"] = "Link Id";
	$fieldToolTipswpfg_links["English"]["link_id"] = "";
	$placeHolderswpfg_links["English"]["link_id"] = "";
	$fieldLabelswpfg_links["English"]["link_url"] = "Link Url";
	$fieldToolTipswpfg_links["English"]["link_url"] = "";
	$placeHolderswpfg_links["English"]["link_url"] = "";
	$fieldLabelswpfg_links["English"]["link_name"] = "Link Name";
	$fieldToolTipswpfg_links["English"]["link_name"] = "";
	$placeHolderswpfg_links["English"]["link_name"] = "";
	$fieldLabelswpfg_links["English"]["link_image"] = "Link Image";
	$fieldToolTipswpfg_links["English"]["link_image"] = "";
	$placeHolderswpfg_links["English"]["link_image"] = "";
	$fieldLabelswpfg_links["English"]["link_target"] = "Link Target";
	$fieldToolTipswpfg_links["English"]["link_target"] = "";
	$placeHolderswpfg_links["English"]["link_target"] = "";
	$fieldLabelswpfg_links["English"]["link_description"] = "Link Description";
	$fieldToolTipswpfg_links["English"]["link_description"] = "";
	$placeHolderswpfg_links["English"]["link_description"] = "";
	$fieldLabelswpfg_links["English"]["link_visible"] = "Link Visible";
	$fieldToolTipswpfg_links["English"]["link_visible"] = "";
	$placeHolderswpfg_links["English"]["link_visible"] = "";
	$fieldLabelswpfg_links["English"]["link_owner"] = "Link Owner";
	$fieldToolTipswpfg_links["English"]["link_owner"] = "";
	$placeHolderswpfg_links["English"]["link_owner"] = "";
	$fieldLabelswpfg_links["English"]["link_rating"] = "Link Rating";
	$fieldToolTipswpfg_links["English"]["link_rating"] = "";
	$placeHolderswpfg_links["English"]["link_rating"] = "";
	$fieldLabelswpfg_links["English"]["link_updated"] = "Link Updated";
	$fieldToolTipswpfg_links["English"]["link_updated"] = "";
	$placeHolderswpfg_links["English"]["link_updated"] = "";
	$fieldLabelswpfg_links["English"]["link_rel"] = "Link Rel";
	$fieldToolTipswpfg_links["English"]["link_rel"] = "";
	$placeHolderswpfg_links["English"]["link_rel"] = "";
	$fieldLabelswpfg_links["English"]["link_notes"] = "Link Notes";
	$fieldToolTipswpfg_links["English"]["link_notes"] = "";
	$placeHolderswpfg_links["English"]["link_notes"] = "";
	$fieldLabelswpfg_links["English"]["link_rss"] = "Link Rss";
	$fieldToolTipswpfg_links["English"]["link_rss"] = "";
	$placeHolderswpfg_links["English"]["link_rss"] = "";
	if (count($fieldToolTipswpfg_links["English"]))
		$tdatawpfg_links[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_links[""] = array();
	$fieldToolTipswpfg_links[""] = array();
	$placeHolderswpfg_links[""] = array();
	$pageTitleswpfg_links[""] = array();
	$fieldLabelswpfg_links[""]["link_id"] = "Link Id";
	$fieldToolTipswpfg_links[""]["link_id"] = "";
	$placeHolderswpfg_links[""]["link_id"] = "";
	$fieldLabelswpfg_links[""]["link_url"] = "Link Url";
	$fieldToolTipswpfg_links[""]["link_url"] = "";
	$placeHolderswpfg_links[""]["link_url"] = "";
	$fieldLabelswpfg_links[""]["link_name"] = "Link Name";
	$fieldToolTipswpfg_links[""]["link_name"] = "";
	$placeHolderswpfg_links[""]["link_name"] = "";
	$fieldLabelswpfg_links[""]["link_image"] = "Link Image";
	$fieldToolTipswpfg_links[""]["link_image"] = "";
	$placeHolderswpfg_links[""]["link_image"] = "";
	$fieldLabelswpfg_links[""]["link_target"] = "Link Target";
	$fieldToolTipswpfg_links[""]["link_target"] = "";
	$placeHolderswpfg_links[""]["link_target"] = "";
	$fieldLabelswpfg_links[""]["link_description"] = "Link Description";
	$fieldToolTipswpfg_links[""]["link_description"] = "";
	$placeHolderswpfg_links[""]["link_description"] = "";
	$fieldLabelswpfg_links[""]["link_visible"] = "Link Visible";
	$fieldToolTipswpfg_links[""]["link_visible"] = "";
	$placeHolderswpfg_links[""]["link_visible"] = "";
	$fieldLabelswpfg_links[""]["link_owner"] = "Link Owner";
	$fieldToolTipswpfg_links[""]["link_owner"] = "";
	$placeHolderswpfg_links[""]["link_owner"] = "";
	$fieldLabelswpfg_links[""]["link_rating"] = "Link Rating";
	$fieldToolTipswpfg_links[""]["link_rating"] = "";
	$placeHolderswpfg_links[""]["link_rating"] = "";
	$fieldLabelswpfg_links[""]["link_updated"] = "Link Updated";
	$fieldToolTipswpfg_links[""]["link_updated"] = "";
	$placeHolderswpfg_links[""]["link_updated"] = "";
	$fieldLabelswpfg_links[""]["link_rel"] = "Link Rel";
	$fieldToolTipswpfg_links[""]["link_rel"] = "";
	$placeHolderswpfg_links[""]["link_rel"] = "";
	$fieldLabelswpfg_links[""]["link_notes"] = "Link Notes";
	$fieldToolTipswpfg_links[""]["link_notes"] = "";
	$placeHolderswpfg_links[""]["link_notes"] = "";
	$fieldLabelswpfg_links[""]["link_rss"] = "Link Rss";
	$fieldToolTipswpfg_links[""]["link_rss"] = "";
	$placeHolderswpfg_links[""]["link_rss"] = "";
	if (count($fieldToolTipswpfg_links[""]))
		$tdatawpfg_links[".isUseToolTips"] = true;
}


	$tdatawpfg_links[".NCSearch"] = true;



$tdatawpfg_links[".shortTableName"] = "wpfg_links";
$tdatawpfg_links[".nSecOptions"] = 0;
$tdatawpfg_links[".recsPerRowPrint"] = 1;
$tdatawpfg_links[".mainTableOwnerID"] = "";
$tdatawpfg_links[".moveNext"] = 1;
$tdatawpfg_links[".entityType"] = 0;

$tdatawpfg_links[".strOriginalTableName"] = "wpfg_links";

	



$tdatawpfg_links[".showAddInPopup"] = false;

$tdatawpfg_links[".showEditInPopup"] = false;

$tdatawpfg_links[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_links[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_links[".fieldsForRegister"] = array();
	
$tdatawpfg_links[".listAjax"] = false;

	$tdatawpfg_links[".audit"] = false;

	$tdatawpfg_links[".locking"] = false;

$tdatawpfg_links[".edit"] = true;
$tdatawpfg_links[".afterEditAction"] = 1;
$tdatawpfg_links[".closePopupAfterEdit"] = 1;
$tdatawpfg_links[".afterEditActionDetTable"] = "";

$tdatawpfg_links[".add"] = true;
$tdatawpfg_links[".afterAddAction"] = 1;
$tdatawpfg_links[".closePopupAfterAdd"] = 1;
$tdatawpfg_links[".afterAddActionDetTable"] = "";

$tdatawpfg_links[".list"] = true;



$tdatawpfg_links[".reorderRecordsByHeader"] = true;



$tdatawpfg_links[".view"] = true;

$tdatawpfg_links[".import"] = true;

$tdatawpfg_links[".exportTo"] = true;

$tdatawpfg_links[".printFriendly"] = true;

$tdatawpfg_links[".delete"] = true;

$tdatawpfg_links[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_links[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_links[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_links[".searchSaving"] = false;
//

$tdatawpfg_links[".showSearchPanel"] = true;
		$tdatawpfg_links[".flexibleSearch"] = true;

$tdatawpfg_links[".isUseAjaxSuggest"] = true;

$tdatawpfg_links[".rowHighlite"] = true;



				

$tdatawpfg_links[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_links[".buttonsAdded"] = false;

$tdatawpfg_links[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_links[".isUseTimeForSearch"] = false;





$tdatawpfg_links[".allSearchFields"] = array();
$tdatawpfg_links[".filterFields"] = array();
$tdatawpfg_links[".requiredSearchFields"] = array();

$tdatawpfg_links[".allSearchFields"][] = "link_id";
	$tdatawpfg_links[".allSearchFields"][] = "link_url";
	$tdatawpfg_links[".allSearchFields"][] = "link_name";
	$tdatawpfg_links[".allSearchFields"][] = "link_image";
	$tdatawpfg_links[".allSearchFields"][] = "link_target";
	$tdatawpfg_links[".allSearchFields"][] = "link_description";
	$tdatawpfg_links[".allSearchFields"][] = "link_visible";
	$tdatawpfg_links[".allSearchFields"][] = "link_owner";
	$tdatawpfg_links[".allSearchFields"][] = "link_rating";
	$tdatawpfg_links[".allSearchFields"][] = "link_updated";
	$tdatawpfg_links[".allSearchFields"][] = "link_rel";
	$tdatawpfg_links[".allSearchFields"][] = "link_notes";
	$tdatawpfg_links[".allSearchFields"][] = "link_rss";
	

$tdatawpfg_links[".googleLikeFields"] = array();
$tdatawpfg_links[".googleLikeFields"][] = "link_id";
$tdatawpfg_links[".googleLikeFields"][] = "link_url";
$tdatawpfg_links[".googleLikeFields"][] = "link_name";
$tdatawpfg_links[".googleLikeFields"][] = "link_image";
$tdatawpfg_links[".googleLikeFields"][] = "link_target";
$tdatawpfg_links[".googleLikeFields"][] = "link_description";
$tdatawpfg_links[".googleLikeFields"][] = "link_visible";
$tdatawpfg_links[".googleLikeFields"][] = "link_owner";
$tdatawpfg_links[".googleLikeFields"][] = "link_rating";
$tdatawpfg_links[".googleLikeFields"][] = "link_updated";
$tdatawpfg_links[".googleLikeFields"][] = "link_rel";
$tdatawpfg_links[".googleLikeFields"][] = "link_notes";
$tdatawpfg_links[".googleLikeFields"][] = "link_rss";


$tdatawpfg_links[".advSearchFields"] = array();
$tdatawpfg_links[".advSearchFields"][] = "link_id";
$tdatawpfg_links[".advSearchFields"][] = "link_url";
$tdatawpfg_links[".advSearchFields"][] = "link_name";
$tdatawpfg_links[".advSearchFields"][] = "link_image";
$tdatawpfg_links[".advSearchFields"][] = "link_target";
$tdatawpfg_links[".advSearchFields"][] = "link_description";
$tdatawpfg_links[".advSearchFields"][] = "link_visible";
$tdatawpfg_links[".advSearchFields"][] = "link_owner";
$tdatawpfg_links[".advSearchFields"][] = "link_rating";
$tdatawpfg_links[".advSearchFields"][] = "link_updated";
$tdatawpfg_links[".advSearchFields"][] = "link_rel";
$tdatawpfg_links[".advSearchFields"][] = "link_notes";
$tdatawpfg_links[".advSearchFields"][] = "link_rss";

$tdatawpfg_links[".tableType"] = "list";

$tdatawpfg_links[".printerPageOrientation"] = 0;
$tdatawpfg_links[".nPrinterPageScale"] = 100;

$tdatawpfg_links[".nPrinterSplitRecords"] = 40;

$tdatawpfg_links[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_links[".geocodingEnabled"] = false;





$tdatawpfg_links[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_links[".pageSize"] = 20;

$tdatawpfg_links[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_links[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_links[".orderindexes"] = array();

$tdatawpfg_links[".sqlHead"] = "SELECT link_id,  	link_url,  	link_name,  	link_image,  	link_target,  	link_description,  	link_visible,  	link_owner,  	link_rating,  	link_updated,  	link_rel,  	link_notes,  	link_rss";
$tdatawpfg_links[".sqlFrom"] = "FROM wpfg_links";
$tdatawpfg_links[".sqlWhereExpr"] = "";
$tdatawpfg_links[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_links[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_links[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_links[".highlightSearchResults"] = true;

$tableKeyswpfg_links = array();
$tableKeyswpfg_links[] = "link_id";
$tdatawpfg_links[".Keys"] = $tableKeyswpfg_links;

$tdatawpfg_links[".listFields"] = array();
$tdatawpfg_links[".listFields"][] = "link_id";
$tdatawpfg_links[".listFields"][] = "link_url";
$tdatawpfg_links[".listFields"][] = "link_name";
$tdatawpfg_links[".listFields"][] = "link_image";
$tdatawpfg_links[".listFields"][] = "link_target";
$tdatawpfg_links[".listFields"][] = "link_description";
$tdatawpfg_links[".listFields"][] = "link_visible";
$tdatawpfg_links[".listFields"][] = "link_owner";
$tdatawpfg_links[".listFields"][] = "link_rating";
$tdatawpfg_links[".listFields"][] = "link_updated";
$tdatawpfg_links[".listFields"][] = "link_rel";
$tdatawpfg_links[".listFields"][] = "link_notes";
$tdatawpfg_links[".listFields"][] = "link_rss";

$tdatawpfg_links[".hideMobileList"] = array();


$tdatawpfg_links[".viewFields"] = array();
$tdatawpfg_links[".viewFields"][] = "link_id";
$tdatawpfg_links[".viewFields"][] = "link_url";
$tdatawpfg_links[".viewFields"][] = "link_name";
$tdatawpfg_links[".viewFields"][] = "link_image";
$tdatawpfg_links[".viewFields"][] = "link_target";
$tdatawpfg_links[".viewFields"][] = "link_description";
$tdatawpfg_links[".viewFields"][] = "link_visible";
$tdatawpfg_links[".viewFields"][] = "link_owner";
$tdatawpfg_links[".viewFields"][] = "link_rating";
$tdatawpfg_links[".viewFields"][] = "link_updated";
$tdatawpfg_links[".viewFields"][] = "link_rel";
$tdatawpfg_links[".viewFields"][] = "link_notes";
$tdatawpfg_links[".viewFields"][] = "link_rss";

$tdatawpfg_links[".addFields"] = array();
$tdatawpfg_links[".addFields"][] = "link_url";
$tdatawpfg_links[".addFields"][] = "link_name";
$tdatawpfg_links[".addFields"][] = "link_image";
$tdatawpfg_links[".addFields"][] = "link_target";
$tdatawpfg_links[".addFields"][] = "link_description";
$tdatawpfg_links[".addFields"][] = "link_visible";
$tdatawpfg_links[".addFields"][] = "link_owner";
$tdatawpfg_links[".addFields"][] = "link_rating";
$tdatawpfg_links[".addFields"][] = "link_updated";
$tdatawpfg_links[".addFields"][] = "link_rel";
$tdatawpfg_links[".addFields"][] = "link_notes";
$tdatawpfg_links[".addFields"][] = "link_rss";

$tdatawpfg_links[".masterListFields"] = array();
$tdatawpfg_links[".masterListFields"][] = "link_id";
$tdatawpfg_links[".masterListFields"][] = "link_url";
$tdatawpfg_links[".masterListFields"][] = "link_name";
$tdatawpfg_links[".masterListFields"][] = "link_image";
$tdatawpfg_links[".masterListFields"][] = "link_target";
$tdatawpfg_links[".masterListFields"][] = "link_description";
$tdatawpfg_links[".masterListFields"][] = "link_visible";
$tdatawpfg_links[".masterListFields"][] = "link_owner";
$tdatawpfg_links[".masterListFields"][] = "link_rating";
$tdatawpfg_links[".masterListFields"][] = "link_updated";
$tdatawpfg_links[".masterListFields"][] = "link_rel";
$tdatawpfg_links[".masterListFields"][] = "link_notes";
$tdatawpfg_links[".masterListFields"][] = "link_rss";

$tdatawpfg_links[".inlineAddFields"] = array();
$tdatawpfg_links[".inlineAddFields"][] = "link_url";
$tdatawpfg_links[".inlineAddFields"][] = "link_name";
$tdatawpfg_links[".inlineAddFields"][] = "link_image";
$tdatawpfg_links[".inlineAddFields"][] = "link_target";
$tdatawpfg_links[".inlineAddFields"][] = "link_description";
$tdatawpfg_links[".inlineAddFields"][] = "link_visible";
$tdatawpfg_links[".inlineAddFields"][] = "link_owner";
$tdatawpfg_links[".inlineAddFields"][] = "link_rating";
$tdatawpfg_links[".inlineAddFields"][] = "link_updated";
$tdatawpfg_links[".inlineAddFields"][] = "link_rel";
$tdatawpfg_links[".inlineAddFields"][] = "link_notes";
$tdatawpfg_links[".inlineAddFields"][] = "link_rss";

$tdatawpfg_links[".editFields"] = array();
$tdatawpfg_links[".editFields"][] = "link_url";
$tdatawpfg_links[".editFields"][] = "link_name";
$tdatawpfg_links[".editFields"][] = "link_image";
$tdatawpfg_links[".editFields"][] = "link_target";
$tdatawpfg_links[".editFields"][] = "link_description";
$tdatawpfg_links[".editFields"][] = "link_visible";
$tdatawpfg_links[".editFields"][] = "link_owner";
$tdatawpfg_links[".editFields"][] = "link_rating";
$tdatawpfg_links[".editFields"][] = "link_updated";
$tdatawpfg_links[".editFields"][] = "link_rel";
$tdatawpfg_links[".editFields"][] = "link_notes";
$tdatawpfg_links[".editFields"][] = "link_rss";

$tdatawpfg_links[".inlineEditFields"] = array();
$tdatawpfg_links[".inlineEditFields"][] = "link_url";
$tdatawpfg_links[".inlineEditFields"][] = "link_name";
$tdatawpfg_links[".inlineEditFields"][] = "link_image";
$tdatawpfg_links[".inlineEditFields"][] = "link_target";
$tdatawpfg_links[".inlineEditFields"][] = "link_description";
$tdatawpfg_links[".inlineEditFields"][] = "link_visible";
$tdatawpfg_links[".inlineEditFields"][] = "link_owner";
$tdatawpfg_links[".inlineEditFields"][] = "link_rating";
$tdatawpfg_links[".inlineEditFields"][] = "link_updated";
$tdatawpfg_links[".inlineEditFields"][] = "link_rel";
$tdatawpfg_links[".inlineEditFields"][] = "link_notes";
$tdatawpfg_links[".inlineEditFields"][] = "link_rss";

$tdatawpfg_links[".updateSelectedFields"] = array();
$tdatawpfg_links[".updateSelectedFields"][] = "link_url";
$tdatawpfg_links[".updateSelectedFields"][] = "link_name";
$tdatawpfg_links[".updateSelectedFields"][] = "link_image";
$tdatawpfg_links[".updateSelectedFields"][] = "link_target";
$tdatawpfg_links[".updateSelectedFields"][] = "link_description";
$tdatawpfg_links[".updateSelectedFields"][] = "link_visible";
$tdatawpfg_links[".updateSelectedFields"][] = "link_owner";
$tdatawpfg_links[".updateSelectedFields"][] = "link_rating";
$tdatawpfg_links[".updateSelectedFields"][] = "link_updated";
$tdatawpfg_links[".updateSelectedFields"][] = "link_rel";
$tdatawpfg_links[".updateSelectedFields"][] = "link_notes";
$tdatawpfg_links[".updateSelectedFields"][] = "link_rss";


$tdatawpfg_links[".exportFields"] = array();
$tdatawpfg_links[".exportFields"][] = "link_id";
$tdatawpfg_links[".exportFields"][] = "link_url";
$tdatawpfg_links[".exportFields"][] = "link_name";
$tdatawpfg_links[".exportFields"][] = "link_image";
$tdatawpfg_links[".exportFields"][] = "link_target";
$tdatawpfg_links[".exportFields"][] = "link_description";
$tdatawpfg_links[".exportFields"][] = "link_visible";
$tdatawpfg_links[".exportFields"][] = "link_owner";
$tdatawpfg_links[".exportFields"][] = "link_rating";
$tdatawpfg_links[".exportFields"][] = "link_updated";
$tdatawpfg_links[".exportFields"][] = "link_rel";
$tdatawpfg_links[".exportFields"][] = "link_notes";
$tdatawpfg_links[".exportFields"][] = "link_rss";

$tdatawpfg_links[".importFields"] = array();
$tdatawpfg_links[".importFields"][] = "link_id";
$tdatawpfg_links[".importFields"][] = "link_url";
$tdatawpfg_links[".importFields"][] = "link_name";
$tdatawpfg_links[".importFields"][] = "link_image";
$tdatawpfg_links[".importFields"][] = "link_target";
$tdatawpfg_links[".importFields"][] = "link_description";
$tdatawpfg_links[".importFields"][] = "link_visible";
$tdatawpfg_links[".importFields"][] = "link_owner";
$tdatawpfg_links[".importFields"][] = "link_rating";
$tdatawpfg_links[".importFields"][] = "link_updated";
$tdatawpfg_links[".importFields"][] = "link_rel";
$tdatawpfg_links[".importFields"][] = "link_notes";
$tdatawpfg_links[".importFields"][] = "link_rss";

$tdatawpfg_links[".printFields"] = array();
$tdatawpfg_links[".printFields"][] = "link_id";
$tdatawpfg_links[".printFields"][] = "link_url";
$tdatawpfg_links[".printFields"][] = "link_name";
$tdatawpfg_links[".printFields"][] = "link_image";
$tdatawpfg_links[".printFields"][] = "link_target";
$tdatawpfg_links[".printFields"][] = "link_description";
$tdatawpfg_links[".printFields"][] = "link_visible";
$tdatawpfg_links[".printFields"][] = "link_owner";
$tdatawpfg_links[".printFields"][] = "link_rating";
$tdatawpfg_links[".printFields"][] = "link_updated";
$tdatawpfg_links[".printFields"][] = "link_rel";
$tdatawpfg_links[".printFields"][] = "link_notes";
$tdatawpfg_links[".printFields"][] = "link_rss";

//	link_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link_id";
	$fdata["GoodName"] = "link_id";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "link_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_id";

	
	
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




	$tdatawpfg_links["link_id"] = $fdata;
//	link_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "link_url";
	$fdata["GoodName"] = "link_url";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_url");
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

		$fdata["strField"] = "link_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_url";

	
	
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




	$tdatawpfg_links["link_url"] = $fdata;
//	link_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "link_name";
	$fdata["GoodName"] = "link_name";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_name");
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

		$fdata["strField"] = "link_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_name";

	
	
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




	$tdatawpfg_links["link_name"] = $fdata;
//	link_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "link_image";
	$fdata["GoodName"] = "link_image";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_image");
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

		$fdata["strField"] = "link_image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_image";

	
	
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




	$tdatawpfg_links["link_image"] = $fdata;
//	link_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "link_target";
	$fdata["GoodName"] = "link_target";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_target");
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

		$fdata["strField"] = "link_target";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_target";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdatawpfg_links["link_target"] = $fdata;
//	link_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "link_description";
	$fdata["GoodName"] = "link_description";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_description");
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

		$fdata["strField"] = "link_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_description";

	
	
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




	$tdatawpfg_links["link_description"] = $fdata;
//	link_visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "link_visible";
	$fdata["GoodName"] = "link_visible";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_visible");
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

		$fdata["strField"] = "link_visible";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_visible";

	
	
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




	$tdatawpfg_links["link_visible"] = $fdata;
//	link_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "link_owner";
	$fdata["GoodName"] = "link_owner";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_owner");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "link_owner";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_owner";

	
	
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




	$tdatawpfg_links["link_owner"] = $fdata;
//	link_rating
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "link_rating";
	$fdata["GoodName"] = "link_rating";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_rating");
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

		$fdata["strField"] = "link_rating";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_rating";

	
	
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




	$tdatawpfg_links["link_rating"] = $fdata;
//	link_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "link_updated";
	$fdata["GoodName"] = "link_updated";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_updated");
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

		$fdata["strField"] = "link_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_updated";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatawpfg_links["link_updated"] = $fdata;
//	link_rel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "link_rel";
	$fdata["GoodName"] = "link_rel";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_rel");
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

		$fdata["strField"] = "link_rel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_rel";

	
	
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




	$tdatawpfg_links["link_rel"] = $fdata;
//	link_notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "link_notes";
	$fdata["GoodName"] = "link_notes";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_notes");
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

		$fdata["strField"] = "link_notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_notes";

	
	
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




	$tdatawpfg_links["link_notes"] = $fdata;
//	link_rss
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "link_rss";
	$fdata["GoodName"] = "link_rss";
	$fdata["ownerTable"] = "wpfg_links";
	$fdata["Label"] = GetFieldLabel("wpfg_links","link_rss");
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

		$fdata["strField"] = "link_rss";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_rss";

	
	
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




	$tdatawpfg_links["link_rss"] = $fdata;


$tables_data["wpfg_links"]=&$tdatawpfg_links;
$field_labels["wpfg_links"] = &$fieldLabelswpfg_links;
$fieldToolTips["wpfg_links"] = &$fieldToolTipswpfg_links;
$placeHolders["wpfg_links"] = &$placeHolderswpfg_links;
$page_titles["wpfg_links"] = &$pageTitleswpfg_links;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_links"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_links"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_links()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "link_id,  	link_url,  	link_name,  	link_image,  	link_target,  	link_description,  	link_visible,  	link_owner,  	link_rating,  	link_updated,  	link_rel,  	link_notes,  	link_rss";
$proto0["m_strFrom"] = "FROM wpfg_links";
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
	"m_strName" => "link_id",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto6["m_sql"] = "link_id";
$proto6["m_srcTableName"] = "wpfg_links";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "link_url",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto8["m_sql"] = "link_url";
$proto8["m_srcTableName"] = "wpfg_links";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "link_name",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto10["m_sql"] = "link_name";
$proto10["m_srcTableName"] = "wpfg_links";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "link_image",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto12["m_sql"] = "link_image";
$proto12["m_srcTableName"] = "wpfg_links";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "link_target",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto14["m_sql"] = "link_target";
$proto14["m_srcTableName"] = "wpfg_links";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "link_description",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto16["m_sql"] = "link_description";
$proto16["m_srcTableName"] = "wpfg_links";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "link_visible",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto18["m_sql"] = "link_visible";
$proto18["m_srcTableName"] = "wpfg_links";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "link_owner",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto20["m_sql"] = "link_owner";
$proto20["m_srcTableName"] = "wpfg_links";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "link_rating",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto22["m_sql"] = "link_rating";
$proto22["m_srcTableName"] = "wpfg_links";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "link_updated",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto24["m_sql"] = "link_updated";
$proto24["m_srcTableName"] = "wpfg_links";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "link_rel",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto26["m_sql"] = "link_rel";
$proto26["m_srcTableName"] = "wpfg_links";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "link_notes",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto28["m_sql"] = "link_notes";
$proto28["m_srcTableName"] = "wpfg_links";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "link_rss",
	"m_strTable" => "wpfg_links",
	"m_srcTableName" => "wpfg_links"
));

$proto30["m_sql"] = "link_rss";
$proto30["m_srcTableName"] = "wpfg_links";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "wpfg_links";
$proto33["m_srcTableName"] = "wpfg_links";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "link_id";
$proto33["m_columns"][] = "link_url";
$proto33["m_columns"][] = "link_name";
$proto33["m_columns"][] = "link_image";
$proto33["m_columns"][] = "link_target";
$proto33["m_columns"][] = "link_description";
$proto33["m_columns"][] = "link_visible";
$proto33["m_columns"][] = "link_owner";
$proto33["m_columns"][] = "link_rating";
$proto33["m_columns"][] = "link_updated";
$proto33["m_columns"][] = "link_rel";
$proto33["m_columns"][] = "link_notes";
$proto33["m_columns"][] = "link_rss";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "wpfg_links";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "wpfg_links";
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
$proto0["m_srcTableName"]="wpfg_links";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_links = createSqlQuery_wpfg_links();


	
						;

													

$tdatawpfg_links[".sqlquery"] = $queryData_wpfg_links;

$tableEvents["wpfg_links"] = new eventsBase;
$tdatawpfg_links[".hasEvents"] = false;

?>
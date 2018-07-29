<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_comments = array();
	$tdatawpfg_comments[".truncateText"] = true;
	$tdatawpfg_comments[".NumberOfChars"] = 80;
	$tdatawpfg_comments[".ShortName"] = "wpfg_comments";
	$tdatawpfg_comments[".OwnerID"] = "";
	$tdatawpfg_comments[".OriginalTable"] = "wpfg_comments";

//	field labels
$fieldLabelswpfg_comments = array();
$fieldToolTipswpfg_comments = array();
$pageTitleswpfg_comments = array();
$placeHolderswpfg_comments = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_comments["Japanese"] = array();
	$fieldToolTipswpfg_comments["Japanese"] = array();
	$placeHolderswpfg_comments["Japanese"] = array();
	$pageTitleswpfg_comments["Japanese"] = array();
	$fieldLabelswpfg_comments["Japanese"]["comment_ID"] = "Comment ID";
	$fieldToolTipswpfg_comments["Japanese"]["comment_ID"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_ID"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_post_ID"] = "Comment Post ID";
	$fieldToolTipswpfg_comments["Japanese"]["comment_post_ID"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_post_ID"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_author"] = "Comment Author";
	$fieldToolTipswpfg_comments["Japanese"]["comment_author"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_author"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_author_email"] = "Comment Author Email";
	$fieldToolTipswpfg_comments["Japanese"]["comment_author_email"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_author_email"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_author_url"] = "Comment Author Url";
	$fieldToolTipswpfg_comments["Japanese"]["comment_author_url"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_author_url"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_author_IP"] = "Comment Author IP";
	$fieldToolTipswpfg_comments["Japanese"]["comment_author_IP"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_author_IP"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_date"] = "Comment Date";
	$fieldToolTipswpfg_comments["Japanese"]["comment_date"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_date"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_date_gmt"] = "Comment Date Gmt";
	$fieldToolTipswpfg_comments["Japanese"]["comment_date_gmt"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_date_gmt"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_content"] = "Comment Content";
	$fieldToolTipswpfg_comments["Japanese"]["comment_content"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_content"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_karma"] = "Comment Karma";
	$fieldToolTipswpfg_comments["Japanese"]["comment_karma"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_karma"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_approved"] = "Comment Approved";
	$fieldToolTipswpfg_comments["Japanese"]["comment_approved"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_approved"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_agent"] = "Comment Agent";
	$fieldToolTipswpfg_comments["Japanese"]["comment_agent"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_agent"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_type"] = "Comment Type";
	$fieldToolTipswpfg_comments["Japanese"]["comment_type"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_type"] = "";
	$fieldLabelswpfg_comments["Japanese"]["comment_parent"] = "Comment Parent";
	$fieldToolTipswpfg_comments["Japanese"]["comment_parent"] = "";
	$placeHolderswpfg_comments["Japanese"]["comment_parent"] = "";
	$fieldLabelswpfg_comments["Japanese"]["user_id"] = "User Id";
	$fieldToolTipswpfg_comments["Japanese"]["user_id"] = "";
	$placeHolderswpfg_comments["Japanese"]["user_id"] = "";
	if (count($fieldToolTipswpfg_comments["Japanese"]))
		$tdatawpfg_comments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_comments["English"] = array();
	$fieldToolTipswpfg_comments["English"] = array();
	$placeHolderswpfg_comments["English"] = array();
	$pageTitleswpfg_comments["English"] = array();
	$fieldLabelswpfg_comments["English"]["comment_ID"] = "Comment ID";
	$fieldToolTipswpfg_comments["English"]["comment_ID"] = "";
	$placeHolderswpfg_comments["English"]["comment_ID"] = "";
	$fieldLabelswpfg_comments["English"]["comment_post_ID"] = "Comment Post ID";
	$fieldToolTipswpfg_comments["English"]["comment_post_ID"] = "";
	$placeHolderswpfg_comments["English"]["comment_post_ID"] = "";
	$fieldLabelswpfg_comments["English"]["comment_author"] = "Comment Author";
	$fieldToolTipswpfg_comments["English"]["comment_author"] = "";
	$placeHolderswpfg_comments["English"]["comment_author"] = "";
	$fieldLabelswpfg_comments["English"]["comment_author_email"] = "Comment Author Email";
	$fieldToolTipswpfg_comments["English"]["comment_author_email"] = "";
	$placeHolderswpfg_comments["English"]["comment_author_email"] = "";
	$fieldLabelswpfg_comments["English"]["comment_author_url"] = "Comment Author Url";
	$fieldToolTipswpfg_comments["English"]["comment_author_url"] = "";
	$placeHolderswpfg_comments["English"]["comment_author_url"] = "";
	$fieldLabelswpfg_comments["English"]["comment_author_IP"] = "Comment Author IP";
	$fieldToolTipswpfg_comments["English"]["comment_author_IP"] = "";
	$placeHolderswpfg_comments["English"]["comment_author_IP"] = "";
	$fieldLabelswpfg_comments["English"]["comment_date"] = "Comment Date";
	$fieldToolTipswpfg_comments["English"]["comment_date"] = "";
	$placeHolderswpfg_comments["English"]["comment_date"] = "";
	$fieldLabelswpfg_comments["English"]["comment_date_gmt"] = "Comment Date Gmt";
	$fieldToolTipswpfg_comments["English"]["comment_date_gmt"] = "";
	$placeHolderswpfg_comments["English"]["comment_date_gmt"] = "";
	$fieldLabelswpfg_comments["English"]["comment_content"] = "Comment Content";
	$fieldToolTipswpfg_comments["English"]["comment_content"] = "";
	$placeHolderswpfg_comments["English"]["comment_content"] = "";
	$fieldLabelswpfg_comments["English"]["comment_karma"] = "Comment Karma";
	$fieldToolTipswpfg_comments["English"]["comment_karma"] = "";
	$placeHolderswpfg_comments["English"]["comment_karma"] = "";
	$fieldLabelswpfg_comments["English"]["comment_approved"] = "Comment Approved";
	$fieldToolTipswpfg_comments["English"]["comment_approved"] = "";
	$placeHolderswpfg_comments["English"]["comment_approved"] = "";
	$fieldLabelswpfg_comments["English"]["comment_agent"] = "Comment Agent";
	$fieldToolTipswpfg_comments["English"]["comment_agent"] = "";
	$placeHolderswpfg_comments["English"]["comment_agent"] = "";
	$fieldLabelswpfg_comments["English"]["comment_type"] = "Comment Type";
	$fieldToolTipswpfg_comments["English"]["comment_type"] = "";
	$placeHolderswpfg_comments["English"]["comment_type"] = "";
	$fieldLabelswpfg_comments["English"]["comment_parent"] = "Comment Parent";
	$fieldToolTipswpfg_comments["English"]["comment_parent"] = "";
	$placeHolderswpfg_comments["English"]["comment_parent"] = "";
	$fieldLabelswpfg_comments["English"]["user_id"] = "User Id";
	$fieldToolTipswpfg_comments["English"]["user_id"] = "";
	$placeHolderswpfg_comments["English"]["user_id"] = "";
	if (count($fieldToolTipswpfg_comments["English"]))
		$tdatawpfg_comments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_comments[""] = array();
	$fieldToolTipswpfg_comments[""] = array();
	$placeHolderswpfg_comments[""] = array();
	$pageTitleswpfg_comments[""] = array();
	$fieldLabelswpfg_comments[""]["comment_ID"] = "Comment ID";
	$fieldToolTipswpfg_comments[""]["comment_ID"] = "";
	$placeHolderswpfg_comments[""]["comment_ID"] = "";
	$fieldLabelswpfg_comments[""]["comment_post_ID"] = "Comment Post ID";
	$fieldToolTipswpfg_comments[""]["comment_post_ID"] = "";
	$placeHolderswpfg_comments[""]["comment_post_ID"] = "";
	$fieldLabelswpfg_comments[""]["comment_author"] = "Comment Author";
	$fieldToolTipswpfg_comments[""]["comment_author"] = "";
	$placeHolderswpfg_comments[""]["comment_author"] = "";
	$fieldLabelswpfg_comments[""]["comment_author_email"] = "Comment Author Email";
	$fieldToolTipswpfg_comments[""]["comment_author_email"] = "";
	$placeHolderswpfg_comments[""]["comment_author_email"] = "";
	$fieldLabelswpfg_comments[""]["comment_author_url"] = "Comment Author Url";
	$fieldToolTipswpfg_comments[""]["comment_author_url"] = "";
	$placeHolderswpfg_comments[""]["comment_author_url"] = "";
	$fieldLabelswpfg_comments[""]["comment_author_IP"] = "Comment Author IP";
	$fieldToolTipswpfg_comments[""]["comment_author_IP"] = "";
	$placeHolderswpfg_comments[""]["comment_author_IP"] = "";
	$fieldLabelswpfg_comments[""]["comment_date"] = "Comment Date";
	$fieldToolTipswpfg_comments[""]["comment_date"] = "";
	$placeHolderswpfg_comments[""]["comment_date"] = "";
	$fieldLabelswpfg_comments[""]["comment_date_gmt"] = "Comment Date Gmt";
	$fieldToolTipswpfg_comments[""]["comment_date_gmt"] = "";
	$placeHolderswpfg_comments[""]["comment_date_gmt"] = "";
	$fieldLabelswpfg_comments[""]["comment_content"] = "Comment Content";
	$fieldToolTipswpfg_comments[""]["comment_content"] = "";
	$placeHolderswpfg_comments[""]["comment_content"] = "";
	$fieldLabelswpfg_comments[""]["comment_karma"] = "Comment Karma";
	$fieldToolTipswpfg_comments[""]["comment_karma"] = "";
	$placeHolderswpfg_comments[""]["comment_karma"] = "";
	$fieldLabelswpfg_comments[""]["comment_approved"] = "Comment Approved";
	$fieldToolTipswpfg_comments[""]["comment_approved"] = "";
	$placeHolderswpfg_comments[""]["comment_approved"] = "";
	$fieldLabelswpfg_comments[""]["comment_agent"] = "Comment Agent";
	$fieldToolTipswpfg_comments[""]["comment_agent"] = "";
	$placeHolderswpfg_comments[""]["comment_agent"] = "";
	$fieldLabelswpfg_comments[""]["comment_type"] = "Comment Type";
	$fieldToolTipswpfg_comments[""]["comment_type"] = "";
	$placeHolderswpfg_comments[""]["comment_type"] = "";
	$fieldLabelswpfg_comments[""]["comment_parent"] = "Comment Parent";
	$fieldToolTipswpfg_comments[""]["comment_parent"] = "";
	$placeHolderswpfg_comments[""]["comment_parent"] = "";
	$fieldLabelswpfg_comments[""]["user_id"] = "User Id";
	$fieldToolTipswpfg_comments[""]["user_id"] = "";
	$placeHolderswpfg_comments[""]["user_id"] = "";
	if (count($fieldToolTipswpfg_comments[""]))
		$tdatawpfg_comments[".isUseToolTips"] = true;
}


	$tdatawpfg_comments[".NCSearch"] = true;



$tdatawpfg_comments[".shortTableName"] = "wpfg_comments";
$tdatawpfg_comments[".nSecOptions"] = 0;
$tdatawpfg_comments[".recsPerRowPrint"] = 1;
$tdatawpfg_comments[".mainTableOwnerID"] = "";
$tdatawpfg_comments[".moveNext"] = 1;
$tdatawpfg_comments[".entityType"] = 0;

$tdatawpfg_comments[".strOriginalTableName"] = "wpfg_comments";

	



$tdatawpfg_comments[".showAddInPopup"] = false;

$tdatawpfg_comments[".showEditInPopup"] = false;

$tdatawpfg_comments[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_comments[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_comments[".fieldsForRegister"] = array();
	
$tdatawpfg_comments[".listAjax"] = false;

	$tdatawpfg_comments[".audit"] = false;

	$tdatawpfg_comments[".locking"] = false;

$tdatawpfg_comments[".edit"] = true;
$tdatawpfg_comments[".afterEditAction"] = 1;
$tdatawpfg_comments[".closePopupAfterEdit"] = 1;
$tdatawpfg_comments[".afterEditActionDetTable"] = "";

$tdatawpfg_comments[".add"] = true;
$tdatawpfg_comments[".afterAddAction"] = 1;
$tdatawpfg_comments[".closePopupAfterAdd"] = 1;
$tdatawpfg_comments[".afterAddActionDetTable"] = "";

$tdatawpfg_comments[".list"] = true;



$tdatawpfg_comments[".reorderRecordsByHeader"] = true;



$tdatawpfg_comments[".view"] = true;

$tdatawpfg_comments[".import"] = true;

$tdatawpfg_comments[".exportTo"] = true;

$tdatawpfg_comments[".printFriendly"] = true;

$tdatawpfg_comments[".delete"] = true;

$tdatawpfg_comments[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_comments[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_comments[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_comments[".searchSaving"] = false;
//

$tdatawpfg_comments[".showSearchPanel"] = true;
		$tdatawpfg_comments[".flexibleSearch"] = true;

$tdatawpfg_comments[".isUseAjaxSuggest"] = true;

$tdatawpfg_comments[".rowHighlite"] = true;



				

$tdatawpfg_comments[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_comments[".buttonsAdded"] = false;

$tdatawpfg_comments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_comments[".isUseTimeForSearch"] = false;





$tdatawpfg_comments[".allSearchFields"] = array();
$tdatawpfg_comments[".filterFields"] = array();
$tdatawpfg_comments[".requiredSearchFields"] = array();

$tdatawpfg_comments[".allSearchFields"][] = "comment_ID";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_post_ID";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_author";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_author_email";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_author_url";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_author_IP";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_date";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_date_gmt";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_content";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_karma";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_approved";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_agent";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_type";
	$tdatawpfg_comments[".allSearchFields"][] = "comment_parent";
	$tdatawpfg_comments[".allSearchFields"][] = "user_id";
	

$tdatawpfg_comments[".googleLikeFields"] = array();
$tdatawpfg_comments[".googleLikeFields"][] = "comment_ID";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_post_ID";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_author";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_author_email";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_author_url";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_author_IP";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_date";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_content";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_karma";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_approved";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_agent";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_type";
$tdatawpfg_comments[".googleLikeFields"][] = "comment_parent";
$tdatawpfg_comments[".googleLikeFields"][] = "user_id";


$tdatawpfg_comments[".advSearchFields"] = array();
$tdatawpfg_comments[".advSearchFields"][] = "comment_ID";
$tdatawpfg_comments[".advSearchFields"][] = "comment_post_ID";
$tdatawpfg_comments[".advSearchFields"][] = "comment_author";
$tdatawpfg_comments[".advSearchFields"][] = "comment_author_email";
$tdatawpfg_comments[".advSearchFields"][] = "comment_author_url";
$tdatawpfg_comments[".advSearchFields"][] = "comment_author_IP";
$tdatawpfg_comments[".advSearchFields"][] = "comment_date";
$tdatawpfg_comments[".advSearchFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".advSearchFields"][] = "comment_content";
$tdatawpfg_comments[".advSearchFields"][] = "comment_karma";
$tdatawpfg_comments[".advSearchFields"][] = "comment_approved";
$tdatawpfg_comments[".advSearchFields"][] = "comment_agent";
$tdatawpfg_comments[".advSearchFields"][] = "comment_type";
$tdatawpfg_comments[".advSearchFields"][] = "comment_parent";
$tdatawpfg_comments[".advSearchFields"][] = "user_id";

$tdatawpfg_comments[".tableType"] = "list";

$tdatawpfg_comments[".printerPageOrientation"] = 0;
$tdatawpfg_comments[".nPrinterPageScale"] = 100;

$tdatawpfg_comments[".nPrinterSplitRecords"] = 40;

$tdatawpfg_comments[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_comments[".geocodingEnabled"] = false;





$tdatawpfg_comments[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_comments[".pageSize"] = 20;

$tdatawpfg_comments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_comments[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_comments[".orderindexes"] = array();

$tdatawpfg_comments[".sqlHead"] = "SELECT comment_ID,  	comment_post_ID,  	comment_author,  	comment_author_email,  	comment_author_url,  	comment_author_IP,  	comment_date,  	comment_date_gmt,  	comment_content,  	comment_karma,  	comment_approved,  	comment_agent,  	comment_type,  	comment_parent,  	user_id";
$tdatawpfg_comments[".sqlFrom"] = "FROM wpfg_comments";
$tdatawpfg_comments[".sqlWhereExpr"] = "";
$tdatawpfg_comments[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_comments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_comments[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_comments[".highlightSearchResults"] = true;

$tableKeyswpfg_comments = array();
$tableKeyswpfg_comments[] = "comment_ID";
$tdatawpfg_comments[".Keys"] = $tableKeyswpfg_comments;

$tdatawpfg_comments[".listFields"] = array();
$tdatawpfg_comments[".listFields"][] = "comment_ID";
$tdatawpfg_comments[".listFields"][] = "comment_post_ID";
$tdatawpfg_comments[".listFields"][] = "comment_author";
$tdatawpfg_comments[".listFields"][] = "comment_author_email";
$tdatawpfg_comments[".listFields"][] = "comment_author_url";
$tdatawpfg_comments[".listFields"][] = "comment_author_IP";
$tdatawpfg_comments[".listFields"][] = "comment_date";
$tdatawpfg_comments[".listFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".listFields"][] = "comment_content";
$tdatawpfg_comments[".listFields"][] = "comment_karma";
$tdatawpfg_comments[".listFields"][] = "comment_approved";
$tdatawpfg_comments[".listFields"][] = "comment_agent";
$tdatawpfg_comments[".listFields"][] = "comment_type";
$tdatawpfg_comments[".listFields"][] = "comment_parent";
$tdatawpfg_comments[".listFields"][] = "user_id";

$tdatawpfg_comments[".hideMobileList"] = array();


$tdatawpfg_comments[".viewFields"] = array();
$tdatawpfg_comments[".viewFields"][] = "comment_ID";
$tdatawpfg_comments[".viewFields"][] = "comment_post_ID";
$tdatawpfg_comments[".viewFields"][] = "comment_author";
$tdatawpfg_comments[".viewFields"][] = "comment_author_email";
$tdatawpfg_comments[".viewFields"][] = "comment_author_url";
$tdatawpfg_comments[".viewFields"][] = "comment_author_IP";
$tdatawpfg_comments[".viewFields"][] = "comment_date";
$tdatawpfg_comments[".viewFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".viewFields"][] = "comment_content";
$tdatawpfg_comments[".viewFields"][] = "comment_karma";
$tdatawpfg_comments[".viewFields"][] = "comment_approved";
$tdatawpfg_comments[".viewFields"][] = "comment_agent";
$tdatawpfg_comments[".viewFields"][] = "comment_type";
$tdatawpfg_comments[".viewFields"][] = "comment_parent";
$tdatawpfg_comments[".viewFields"][] = "user_id";

$tdatawpfg_comments[".addFields"] = array();
$tdatawpfg_comments[".addFields"][] = "comment_post_ID";
$tdatawpfg_comments[".addFields"][] = "comment_author";
$tdatawpfg_comments[".addFields"][] = "comment_author_email";
$tdatawpfg_comments[".addFields"][] = "comment_author_url";
$tdatawpfg_comments[".addFields"][] = "comment_author_IP";
$tdatawpfg_comments[".addFields"][] = "comment_date";
$tdatawpfg_comments[".addFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".addFields"][] = "comment_content";
$tdatawpfg_comments[".addFields"][] = "comment_karma";
$tdatawpfg_comments[".addFields"][] = "comment_approved";
$tdatawpfg_comments[".addFields"][] = "comment_agent";
$tdatawpfg_comments[".addFields"][] = "comment_type";
$tdatawpfg_comments[".addFields"][] = "comment_parent";
$tdatawpfg_comments[".addFields"][] = "user_id";

$tdatawpfg_comments[".masterListFields"] = array();
$tdatawpfg_comments[".masterListFields"][] = "comment_ID";
$tdatawpfg_comments[".masterListFields"][] = "comment_post_ID";
$tdatawpfg_comments[".masterListFields"][] = "comment_author";
$tdatawpfg_comments[".masterListFields"][] = "comment_author_email";
$tdatawpfg_comments[".masterListFields"][] = "comment_author_url";
$tdatawpfg_comments[".masterListFields"][] = "comment_author_IP";
$tdatawpfg_comments[".masterListFields"][] = "comment_date";
$tdatawpfg_comments[".masterListFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".masterListFields"][] = "comment_content";
$tdatawpfg_comments[".masterListFields"][] = "comment_karma";
$tdatawpfg_comments[".masterListFields"][] = "comment_approved";
$tdatawpfg_comments[".masterListFields"][] = "comment_agent";
$tdatawpfg_comments[".masterListFields"][] = "comment_type";
$tdatawpfg_comments[".masterListFields"][] = "comment_parent";
$tdatawpfg_comments[".masterListFields"][] = "user_id";

$tdatawpfg_comments[".inlineAddFields"] = array();
$tdatawpfg_comments[".inlineAddFields"][] = "comment_post_ID";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_author";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_author_email";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_author_url";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_author_IP";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_date";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_content";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_karma";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_approved";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_agent";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_type";
$tdatawpfg_comments[".inlineAddFields"][] = "comment_parent";
$tdatawpfg_comments[".inlineAddFields"][] = "user_id";

$tdatawpfg_comments[".editFields"] = array();
$tdatawpfg_comments[".editFields"][] = "comment_post_ID";
$tdatawpfg_comments[".editFields"][] = "comment_author";
$tdatawpfg_comments[".editFields"][] = "comment_author_email";
$tdatawpfg_comments[".editFields"][] = "comment_author_url";
$tdatawpfg_comments[".editFields"][] = "comment_author_IP";
$tdatawpfg_comments[".editFields"][] = "comment_date";
$tdatawpfg_comments[".editFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".editFields"][] = "comment_content";
$tdatawpfg_comments[".editFields"][] = "comment_karma";
$tdatawpfg_comments[".editFields"][] = "comment_approved";
$tdatawpfg_comments[".editFields"][] = "comment_agent";
$tdatawpfg_comments[".editFields"][] = "comment_type";
$tdatawpfg_comments[".editFields"][] = "comment_parent";
$tdatawpfg_comments[".editFields"][] = "user_id";

$tdatawpfg_comments[".inlineEditFields"] = array();
$tdatawpfg_comments[".inlineEditFields"][] = "comment_post_ID";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_author";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_author_email";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_author_url";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_author_IP";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_date";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_content";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_karma";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_approved";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_agent";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_type";
$tdatawpfg_comments[".inlineEditFields"][] = "comment_parent";
$tdatawpfg_comments[".inlineEditFields"][] = "user_id";

$tdatawpfg_comments[".updateSelectedFields"] = array();
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_post_ID";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_author";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_author_email";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_author_url";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_author_IP";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_date";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_content";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_karma";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_approved";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_agent";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_type";
$tdatawpfg_comments[".updateSelectedFields"][] = "comment_parent";
$tdatawpfg_comments[".updateSelectedFields"][] = "user_id";


$tdatawpfg_comments[".exportFields"] = array();
$tdatawpfg_comments[".exportFields"][] = "comment_ID";
$tdatawpfg_comments[".exportFields"][] = "comment_post_ID";
$tdatawpfg_comments[".exportFields"][] = "comment_author";
$tdatawpfg_comments[".exportFields"][] = "comment_author_email";
$tdatawpfg_comments[".exportFields"][] = "comment_author_url";
$tdatawpfg_comments[".exportFields"][] = "comment_author_IP";
$tdatawpfg_comments[".exportFields"][] = "comment_date";
$tdatawpfg_comments[".exportFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".exportFields"][] = "comment_content";
$tdatawpfg_comments[".exportFields"][] = "comment_karma";
$tdatawpfg_comments[".exportFields"][] = "comment_approved";
$tdatawpfg_comments[".exportFields"][] = "comment_agent";
$tdatawpfg_comments[".exportFields"][] = "comment_type";
$tdatawpfg_comments[".exportFields"][] = "comment_parent";
$tdatawpfg_comments[".exportFields"][] = "user_id";

$tdatawpfg_comments[".importFields"] = array();
$tdatawpfg_comments[".importFields"][] = "comment_ID";
$tdatawpfg_comments[".importFields"][] = "comment_post_ID";
$tdatawpfg_comments[".importFields"][] = "comment_author";
$tdatawpfg_comments[".importFields"][] = "comment_author_email";
$tdatawpfg_comments[".importFields"][] = "comment_author_url";
$tdatawpfg_comments[".importFields"][] = "comment_author_IP";
$tdatawpfg_comments[".importFields"][] = "comment_date";
$tdatawpfg_comments[".importFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".importFields"][] = "comment_content";
$tdatawpfg_comments[".importFields"][] = "comment_karma";
$tdatawpfg_comments[".importFields"][] = "comment_approved";
$tdatawpfg_comments[".importFields"][] = "comment_agent";
$tdatawpfg_comments[".importFields"][] = "comment_type";
$tdatawpfg_comments[".importFields"][] = "comment_parent";
$tdatawpfg_comments[".importFields"][] = "user_id";

$tdatawpfg_comments[".printFields"] = array();
$tdatawpfg_comments[".printFields"][] = "comment_ID";
$tdatawpfg_comments[".printFields"][] = "comment_post_ID";
$tdatawpfg_comments[".printFields"][] = "comment_author";
$tdatawpfg_comments[".printFields"][] = "comment_author_email";
$tdatawpfg_comments[".printFields"][] = "comment_author_url";
$tdatawpfg_comments[".printFields"][] = "comment_author_IP";
$tdatawpfg_comments[".printFields"][] = "comment_date";
$tdatawpfg_comments[".printFields"][] = "comment_date_gmt";
$tdatawpfg_comments[".printFields"][] = "comment_content";
$tdatawpfg_comments[".printFields"][] = "comment_karma";
$tdatawpfg_comments[".printFields"][] = "comment_approved";
$tdatawpfg_comments[".printFields"][] = "comment_agent";
$tdatawpfg_comments[".printFields"][] = "comment_type";
$tdatawpfg_comments[".printFields"][] = "comment_parent";
$tdatawpfg_comments[".printFields"][] = "user_id";

//	comment_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "comment_ID";
	$fdata["GoodName"] = "comment_ID";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_ID");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_ID";

	
	
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




	$tdatawpfg_comments["comment_ID"] = $fdata;
//	comment_post_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "comment_post_ID";
	$fdata["GoodName"] = "comment_post_ID";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_post_ID");
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

		$fdata["strField"] = "comment_post_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_post_ID";

	
	
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




	$tdatawpfg_comments["comment_post_ID"] = $fdata;
//	comment_author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "comment_author";
	$fdata["GoodName"] = "comment_author";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_author");
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

		$fdata["strField"] = "comment_author";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_author";

	
	
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




	$tdatawpfg_comments["comment_author"] = $fdata;
//	comment_author_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "comment_author_email";
	$fdata["GoodName"] = "comment_author_email";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_author_email");
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

		$fdata["strField"] = "comment_author_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_author_email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatawpfg_comments["comment_author_email"] = $fdata;
//	comment_author_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "comment_author_url";
	$fdata["GoodName"] = "comment_author_url";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_author_url");
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

		$fdata["strField"] = "comment_author_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_author_url";

	
	
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




	$tdatawpfg_comments["comment_author_url"] = $fdata;
//	comment_author_IP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "comment_author_IP";
	$fdata["GoodName"] = "comment_author_IP";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_author_IP");
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

		$fdata["strField"] = "comment_author_IP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_author_IP";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatawpfg_comments["comment_author_IP"] = $fdata;
//	comment_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "comment_date";
	$fdata["GoodName"] = "comment_date";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_date");
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

		$fdata["strField"] = "comment_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_date";

	
	
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




	$tdatawpfg_comments["comment_date"] = $fdata;
//	comment_date_gmt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "comment_date_gmt";
	$fdata["GoodName"] = "comment_date_gmt";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_date_gmt");
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

		$fdata["strField"] = "comment_date_gmt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_date_gmt";

	
	
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




	$tdatawpfg_comments["comment_date_gmt"] = $fdata;
//	comment_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "comment_content";
	$fdata["GoodName"] = "comment_content";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_content");
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

		$fdata["strField"] = "comment_content";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_content";

	
	
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




	$tdatawpfg_comments["comment_content"] = $fdata;
//	comment_karma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "comment_karma";
	$fdata["GoodName"] = "comment_karma";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_karma");
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

		$fdata["strField"] = "comment_karma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_karma";

	
	
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




	$tdatawpfg_comments["comment_karma"] = $fdata;
//	comment_approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "comment_approved";
	$fdata["GoodName"] = "comment_approved";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_approved");
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

		$fdata["strField"] = "comment_approved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_approved";

	
	
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




	$tdatawpfg_comments["comment_approved"] = $fdata;
//	comment_agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "comment_agent";
	$fdata["GoodName"] = "comment_agent";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_agent");
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

		$fdata["strField"] = "comment_agent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_agent";

	
	
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




	$tdatawpfg_comments["comment_agent"] = $fdata;
//	comment_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "comment_type";
	$fdata["GoodName"] = "comment_type";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_type");
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

		$fdata["strField"] = "comment_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_type";

	
	
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




	$tdatawpfg_comments["comment_type"] = $fdata;
//	comment_parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "comment_parent";
	$fdata["GoodName"] = "comment_parent";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","comment_parent");
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

		$fdata["strField"] = "comment_parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_parent";

	
	
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




	$tdatawpfg_comments["comment_parent"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "wpfg_comments";
	$fdata["Label"] = GetFieldLabel("wpfg_comments","user_id");
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

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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




	$tdatawpfg_comments["user_id"] = $fdata;


$tables_data["wpfg_comments"]=&$tdatawpfg_comments;
$field_labels["wpfg_comments"] = &$fieldLabelswpfg_comments;
$fieldToolTips["wpfg_comments"] = &$fieldToolTipswpfg_comments;
$placeHolders["wpfg_comments"] = &$placeHolderswpfg_comments;
$page_titles["wpfg_comments"] = &$pageTitleswpfg_comments;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_comments"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_comments"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_comments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "comment_ID,  	comment_post_ID,  	comment_author,  	comment_author_email,  	comment_author_url,  	comment_author_IP,  	comment_date,  	comment_date_gmt,  	comment_content,  	comment_karma,  	comment_approved,  	comment_agent,  	comment_type,  	comment_parent,  	user_id";
$proto0["m_strFrom"] = "FROM wpfg_comments";
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
	"m_strName" => "comment_ID",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto6["m_sql"] = "comment_ID";
$proto6["m_srcTableName"] = "wpfg_comments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_post_ID",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto8["m_sql"] = "comment_post_ID";
$proto8["m_srcTableName"] = "wpfg_comments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_author",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto10["m_sql"] = "comment_author";
$proto10["m_srcTableName"] = "wpfg_comments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_author_email",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto12["m_sql"] = "comment_author_email";
$proto12["m_srcTableName"] = "wpfg_comments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_author_url",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto14["m_sql"] = "comment_author_url";
$proto14["m_srcTableName"] = "wpfg_comments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_author_IP",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto16["m_sql"] = "comment_author_IP";
$proto16["m_srcTableName"] = "wpfg_comments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_date",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto18["m_sql"] = "comment_date";
$proto18["m_srcTableName"] = "wpfg_comments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_date_gmt",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto20["m_sql"] = "comment_date_gmt";
$proto20["m_srcTableName"] = "wpfg_comments";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_content",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto22["m_sql"] = "comment_content";
$proto22["m_srcTableName"] = "wpfg_comments";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_karma",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto24["m_sql"] = "comment_karma";
$proto24["m_srcTableName"] = "wpfg_comments";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_approved",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto26["m_sql"] = "comment_approved";
$proto26["m_srcTableName"] = "wpfg_comments";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_agent",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto28["m_sql"] = "comment_agent";
$proto28["m_srcTableName"] = "wpfg_comments";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_type",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto30["m_sql"] = "comment_type";
$proto30["m_srcTableName"] = "wpfg_comments";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_parent",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto32["m_sql"] = "comment_parent";
$proto32["m_srcTableName"] = "wpfg_comments";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "wpfg_comments",
	"m_srcTableName" => "wpfg_comments"
));

$proto34["m_sql"] = "user_id";
$proto34["m_srcTableName"] = "wpfg_comments";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "wpfg_comments";
$proto37["m_srcTableName"] = "wpfg_comments";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "comment_ID";
$proto37["m_columns"][] = "comment_post_ID";
$proto37["m_columns"][] = "comment_author";
$proto37["m_columns"][] = "comment_author_email";
$proto37["m_columns"][] = "comment_author_url";
$proto37["m_columns"][] = "comment_author_IP";
$proto37["m_columns"][] = "comment_date";
$proto37["m_columns"][] = "comment_date_gmt";
$proto37["m_columns"][] = "comment_content";
$proto37["m_columns"][] = "comment_karma";
$proto37["m_columns"][] = "comment_approved";
$proto37["m_columns"][] = "comment_agent";
$proto37["m_columns"][] = "comment_type";
$proto37["m_columns"][] = "comment_parent";
$proto37["m_columns"][] = "user_id";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "wpfg_comments";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "wpfg_comments";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="wpfg_comments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_comments = createSqlQuery_wpfg_comments();


	
						;

															

$tdatawpfg_comments[".sqlquery"] = $queryData_wpfg_comments;

$tableEvents["wpfg_comments"] = new eventsBase;
$tdatawpfg_comments[".hasEvents"] = false;

?>
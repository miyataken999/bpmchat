<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_posts = array();
	$tdatawpfg_posts[".truncateText"] = true;
	$tdatawpfg_posts[".NumberOfChars"] = 80;
	$tdatawpfg_posts[".ShortName"] = "wpfg_posts";
	$tdatawpfg_posts[".OwnerID"] = "";
	$tdatawpfg_posts[".OriginalTable"] = "wpfg_posts";

//	field labels
$fieldLabelswpfg_posts = array();
$fieldToolTipswpfg_posts = array();
$pageTitleswpfg_posts = array();
$placeHolderswpfg_posts = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_posts["Japanese"] = array();
	$fieldToolTipswpfg_posts["Japanese"] = array();
	$placeHolderswpfg_posts["Japanese"] = array();
	$pageTitleswpfg_posts["Japanese"] = array();
	$fieldLabelswpfg_posts["Japanese"]["ID"] = "ID";
	$fieldToolTipswpfg_posts["Japanese"]["ID"] = "";
	$placeHolderswpfg_posts["Japanese"]["ID"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_author"] = "Post Author";
	$fieldToolTipswpfg_posts["Japanese"]["post_author"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_author"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_date"] = "Post Date";
	$fieldToolTipswpfg_posts["Japanese"]["post_date"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_date"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_date_gmt"] = "Post Date Gmt";
	$fieldToolTipswpfg_posts["Japanese"]["post_date_gmt"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_date_gmt"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_content"] = "Post Content";
	$fieldToolTipswpfg_posts["Japanese"]["post_content"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_content"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_title"] = "Post Title";
	$fieldToolTipswpfg_posts["Japanese"]["post_title"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_title"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_excerpt"] = "Post Excerpt";
	$fieldToolTipswpfg_posts["Japanese"]["post_excerpt"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_excerpt"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_status"] = "Post Status";
	$fieldToolTipswpfg_posts["Japanese"]["post_status"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_status"] = "";
	$fieldLabelswpfg_posts["Japanese"]["comment_status"] = "Comment Status";
	$fieldToolTipswpfg_posts["Japanese"]["comment_status"] = "";
	$placeHolderswpfg_posts["Japanese"]["comment_status"] = "";
	$fieldLabelswpfg_posts["Japanese"]["ping_status"] = "Ping Status";
	$fieldToolTipswpfg_posts["Japanese"]["ping_status"] = "";
	$placeHolderswpfg_posts["Japanese"]["ping_status"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_password"] = "Post Password";
	$fieldToolTipswpfg_posts["Japanese"]["post_password"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_password"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_name"] = "Post Name";
	$fieldToolTipswpfg_posts["Japanese"]["post_name"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_name"] = "";
	$fieldLabelswpfg_posts["Japanese"]["to_ping"] = "To Ping";
	$fieldToolTipswpfg_posts["Japanese"]["to_ping"] = "";
	$placeHolderswpfg_posts["Japanese"]["to_ping"] = "";
	$fieldLabelswpfg_posts["Japanese"]["pinged"] = "Pinged";
	$fieldToolTipswpfg_posts["Japanese"]["pinged"] = "";
	$placeHolderswpfg_posts["Japanese"]["pinged"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_modified"] = "Post Modified";
	$fieldToolTipswpfg_posts["Japanese"]["post_modified"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_modified"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_modified_gmt"] = "Post Modified Gmt";
	$fieldToolTipswpfg_posts["Japanese"]["post_modified_gmt"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_modified_gmt"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_content_filtered"] = "Post Content Filtered";
	$fieldToolTipswpfg_posts["Japanese"]["post_content_filtered"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_content_filtered"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_parent"] = "Post Parent";
	$fieldToolTipswpfg_posts["Japanese"]["post_parent"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_parent"] = "";
	$fieldLabelswpfg_posts["Japanese"]["guid"] = "Guid";
	$fieldToolTipswpfg_posts["Japanese"]["guid"] = "";
	$placeHolderswpfg_posts["Japanese"]["guid"] = "";
	$fieldLabelswpfg_posts["Japanese"]["menu_order"] = "Menu Order";
	$fieldToolTipswpfg_posts["Japanese"]["menu_order"] = "";
	$placeHolderswpfg_posts["Japanese"]["menu_order"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_type"] = "Post Type";
	$fieldToolTipswpfg_posts["Japanese"]["post_type"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_type"] = "";
	$fieldLabelswpfg_posts["Japanese"]["post_mime_type"] = "Post Mime Type";
	$fieldToolTipswpfg_posts["Japanese"]["post_mime_type"] = "";
	$placeHolderswpfg_posts["Japanese"]["post_mime_type"] = "";
	$fieldLabelswpfg_posts["Japanese"]["comment_count"] = "Comment Count";
	$fieldToolTipswpfg_posts["Japanese"]["comment_count"] = "";
	$placeHolderswpfg_posts["Japanese"]["comment_count"] = "";
	if (count($fieldToolTipswpfg_posts["Japanese"]))
		$tdatawpfg_posts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_posts["English"] = array();
	$fieldToolTipswpfg_posts["English"] = array();
	$placeHolderswpfg_posts["English"] = array();
	$pageTitleswpfg_posts["English"] = array();
	$fieldLabelswpfg_posts["English"]["ID"] = "ID";
	$fieldToolTipswpfg_posts["English"]["ID"] = "";
	$placeHolderswpfg_posts["English"]["ID"] = "";
	$fieldLabelswpfg_posts["English"]["post_author"] = "Post Author";
	$fieldToolTipswpfg_posts["English"]["post_author"] = "";
	$placeHolderswpfg_posts["English"]["post_author"] = "";
	$fieldLabelswpfg_posts["English"]["post_date"] = "Post Date";
	$fieldToolTipswpfg_posts["English"]["post_date"] = "";
	$placeHolderswpfg_posts["English"]["post_date"] = "";
	$fieldLabelswpfg_posts["English"]["post_date_gmt"] = "Post Date Gmt";
	$fieldToolTipswpfg_posts["English"]["post_date_gmt"] = "";
	$placeHolderswpfg_posts["English"]["post_date_gmt"] = "";
	$fieldLabelswpfg_posts["English"]["post_content"] = "Post Content";
	$fieldToolTipswpfg_posts["English"]["post_content"] = "";
	$placeHolderswpfg_posts["English"]["post_content"] = "";
	$fieldLabelswpfg_posts["English"]["post_title"] = "Post Title";
	$fieldToolTipswpfg_posts["English"]["post_title"] = "";
	$placeHolderswpfg_posts["English"]["post_title"] = "";
	$fieldLabelswpfg_posts["English"]["post_excerpt"] = "Post Excerpt";
	$fieldToolTipswpfg_posts["English"]["post_excerpt"] = "";
	$placeHolderswpfg_posts["English"]["post_excerpt"] = "";
	$fieldLabelswpfg_posts["English"]["post_status"] = "Post Status";
	$fieldToolTipswpfg_posts["English"]["post_status"] = "";
	$placeHolderswpfg_posts["English"]["post_status"] = "";
	$fieldLabelswpfg_posts["English"]["comment_status"] = "Comment Status";
	$fieldToolTipswpfg_posts["English"]["comment_status"] = "";
	$placeHolderswpfg_posts["English"]["comment_status"] = "";
	$fieldLabelswpfg_posts["English"]["ping_status"] = "Ping Status";
	$fieldToolTipswpfg_posts["English"]["ping_status"] = "";
	$placeHolderswpfg_posts["English"]["ping_status"] = "";
	$fieldLabelswpfg_posts["English"]["post_password"] = "Post Password";
	$fieldToolTipswpfg_posts["English"]["post_password"] = "";
	$placeHolderswpfg_posts["English"]["post_password"] = "";
	$fieldLabelswpfg_posts["English"]["post_name"] = "Post Name";
	$fieldToolTipswpfg_posts["English"]["post_name"] = "";
	$placeHolderswpfg_posts["English"]["post_name"] = "";
	$fieldLabelswpfg_posts["English"]["to_ping"] = "To Ping";
	$fieldToolTipswpfg_posts["English"]["to_ping"] = "";
	$placeHolderswpfg_posts["English"]["to_ping"] = "";
	$fieldLabelswpfg_posts["English"]["pinged"] = "Pinged";
	$fieldToolTipswpfg_posts["English"]["pinged"] = "";
	$placeHolderswpfg_posts["English"]["pinged"] = "";
	$fieldLabelswpfg_posts["English"]["post_modified"] = "Post Modified";
	$fieldToolTipswpfg_posts["English"]["post_modified"] = "";
	$placeHolderswpfg_posts["English"]["post_modified"] = "";
	$fieldLabelswpfg_posts["English"]["post_modified_gmt"] = "Post Modified Gmt";
	$fieldToolTipswpfg_posts["English"]["post_modified_gmt"] = "";
	$placeHolderswpfg_posts["English"]["post_modified_gmt"] = "";
	$fieldLabelswpfg_posts["English"]["post_content_filtered"] = "Post Content Filtered";
	$fieldToolTipswpfg_posts["English"]["post_content_filtered"] = "";
	$placeHolderswpfg_posts["English"]["post_content_filtered"] = "";
	$fieldLabelswpfg_posts["English"]["post_parent"] = "Post Parent";
	$fieldToolTipswpfg_posts["English"]["post_parent"] = "";
	$placeHolderswpfg_posts["English"]["post_parent"] = "";
	$fieldLabelswpfg_posts["English"]["guid"] = "Guid";
	$fieldToolTipswpfg_posts["English"]["guid"] = "";
	$placeHolderswpfg_posts["English"]["guid"] = "";
	$fieldLabelswpfg_posts["English"]["menu_order"] = "Menu Order";
	$fieldToolTipswpfg_posts["English"]["menu_order"] = "";
	$placeHolderswpfg_posts["English"]["menu_order"] = "";
	$fieldLabelswpfg_posts["English"]["post_type"] = "Post Type";
	$fieldToolTipswpfg_posts["English"]["post_type"] = "";
	$placeHolderswpfg_posts["English"]["post_type"] = "";
	$fieldLabelswpfg_posts["English"]["post_mime_type"] = "Post Mime Type";
	$fieldToolTipswpfg_posts["English"]["post_mime_type"] = "";
	$placeHolderswpfg_posts["English"]["post_mime_type"] = "";
	$fieldLabelswpfg_posts["English"]["comment_count"] = "Comment Count";
	$fieldToolTipswpfg_posts["English"]["comment_count"] = "";
	$placeHolderswpfg_posts["English"]["comment_count"] = "";
	if (count($fieldToolTipswpfg_posts["English"]))
		$tdatawpfg_posts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_posts[""] = array();
	$fieldToolTipswpfg_posts[""] = array();
	$placeHolderswpfg_posts[""] = array();
	$pageTitleswpfg_posts[""] = array();
	$fieldLabelswpfg_posts[""]["ID"] = "ID";
	$fieldToolTipswpfg_posts[""]["ID"] = "";
	$placeHolderswpfg_posts[""]["ID"] = "";
	$fieldLabelswpfg_posts[""]["post_author"] = "Post Author";
	$fieldToolTipswpfg_posts[""]["post_author"] = "";
	$placeHolderswpfg_posts[""]["post_author"] = "";
	$fieldLabelswpfg_posts[""]["post_date"] = "Post Date";
	$fieldToolTipswpfg_posts[""]["post_date"] = "";
	$placeHolderswpfg_posts[""]["post_date"] = "";
	$fieldLabelswpfg_posts[""]["post_date_gmt"] = "Post Date Gmt";
	$fieldToolTipswpfg_posts[""]["post_date_gmt"] = "";
	$placeHolderswpfg_posts[""]["post_date_gmt"] = "";
	$fieldLabelswpfg_posts[""]["post_content"] = "Post Content";
	$fieldToolTipswpfg_posts[""]["post_content"] = "";
	$placeHolderswpfg_posts[""]["post_content"] = "";
	$fieldLabelswpfg_posts[""]["post_title"] = "Post Title";
	$fieldToolTipswpfg_posts[""]["post_title"] = "";
	$placeHolderswpfg_posts[""]["post_title"] = "";
	$fieldLabelswpfg_posts[""]["post_excerpt"] = "Post Excerpt";
	$fieldToolTipswpfg_posts[""]["post_excerpt"] = "";
	$placeHolderswpfg_posts[""]["post_excerpt"] = "";
	$fieldLabelswpfg_posts[""]["post_status"] = "Post Status";
	$fieldToolTipswpfg_posts[""]["post_status"] = "";
	$placeHolderswpfg_posts[""]["post_status"] = "";
	$fieldLabelswpfg_posts[""]["comment_status"] = "Comment Status";
	$fieldToolTipswpfg_posts[""]["comment_status"] = "";
	$placeHolderswpfg_posts[""]["comment_status"] = "";
	$fieldLabelswpfg_posts[""]["ping_status"] = "Ping Status";
	$fieldToolTipswpfg_posts[""]["ping_status"] = "";
	$placeHolderswpfg_posts[""]["ping_status"] = "";
	$fieldLabelswpfg_posts[""]["post_password"] = "Post Password";
	$fieldToolTipswpfg_posts[""]["post_password"] = "";
	$placeHolderswpfg_posts[""]["post_password"] = "";
	$fieldLabelswpfg_posts[""]["post_name"] = "Post Name";
	$fieldToolTipswpfg_posts[""]["post_name"] = "";
	$placeHolderswpfg_posts[""]["post_name"] = "";
	$fieldLabelswpfg_posts[""]["to_ping"] = "To Ping";
	$fieldToolTipswpfg_posts[""]["to_ping"] = "";
	$placeHolderswpfg_posts[""]["to_ping"] = "";
	$fieldLabelswpfg_posts[""]["pinged"] = "Pinged";
	$fieldToolTipswpfg_posts[""]["pinged"] = "";
	$placeHolderswpfg_posts[""]["pinged"] = "";
	$fieldLabelswpfg_posts[""]["post_modified"] = "Post Modified";
	$fieldToolTipswpfg_posts[""]["post_modified"] = "";
	$placeHolderswpfg_posts[""]["post_modified"] = "";
	$fieldLabelswpfg_posts[""]["post_modified_gmt"] = "Post Modified Gmt";
	$fieldToolTipswpfg_posts[""]["post_modified_gmt"] = "";
	$placeHolderswpfg_posts[""]["post_modified_gmt"] = "";
	$fieldLabelswpfg_posts[""]["post_content_filtered"] = "Post Content Filtered";
	$fieldToolTipswpfg_posts[""]["post_content_filtered"] = "";
	$placeHolderswpfg_posts[""]["post_content_filtered"] = "";
	$fieldLabelswpfg_posts[""]["post_parent"] = "Post Parent";
	$fieldToolTipswpfg_posts[""]["post_parent"] = "";
	$placeHolderswpfg_posts[""]["post_parent"] = "";
	$fieldLabelswpfg_posts[""]["guid"] = "Guid";
	$fieldToolTipswpfg_posts[""]["guid"] = "";
	$placeHolderswpfg_posts[""]["guid"] = "";
	$fieldLabelswpfg_posts[""]["menu_order"] = "Menu Order";
	$fieldToolTipswpfg_posts[""]["menu_order"] = "";
	$placeHolderswpfg_posts[""]["menu_order"] = "";
	$fieldLabelswpfg_posts[""]["post_type"] = "Post Type";
	$fieldToolTipswpfg_posts[""]["post_type"] = "";
	$placeHolderswpfg_posts[""]["post_type"] = "";
	$fieldLabelswpfg_posts[""]["post_mime_type"] = "Post Mime Type";
	$fieldToolTipswpfg_posts[""]["post_mime_type"] = "";
	$placeHolderswpfg_posts[""]["post_mime_type"] = "";
	$fieldLabelswpfg_posts[""]["comment_count"] = "Comment Count";
	$fieldToolTipswpfg_posts[""]["comment_count"] = "";
	$placeHolderswpfg_posts[""]["comment_count"] = "";
	if (count($fieldToolTipswpfg_posts[""]))
		$tdatawpfg_posts[".isUseToolTips"] = true;
}


	$tdatawpfg_posts[".NCSearch"] = true;



$tdatawpfg_posts[".shortTableName"] = "wpfg_posts";
$tdatawpfg_posts[".nSecOptions"] = 0;
$tdatawpfg_posts[".recsPerRowPrint"] = 1;
$tdatawpfg_posts[".mainTableOwnerID"] = "";
$tdatawpfg_posts[".moveNext"] = 1;
$tdatawpfg_posts[".entityType"] = 0;

$tdatawpfg_posts[".strOriginalTableName"] = "wpfg_posts";

	



$tdatawpfg_posts[".showAddInPopup"] = false;

$tdatawpfg_posts[".showEditInPopup"] = false;

$tdatawpfg_posts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_posts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_posts[".fieldsForRegister"] = array();
	
$tdatawpfg_posts[".listAjax"] = false;

	$tdatawpfg_posts[".audit"] = false;

	$tdatawpfg_posts[".locking"] = false;

$tdatawpfg_posts[".edit"] = true;
$tdatawpfg_posts[".afterEditAction"] = 1;
$tdatawpfg_posts[".closePopupAfterEdit"] = 1;
$tdatawpfg_posts[".afterEditActionDetTable"] = "";

$tdatawpfg_posts[".add"] = true;
$tdatawpfg_posts[".afterAddAction"] = 1;
$tdatawpfg_posts[".closePopupAfterAdd"] = 1;
$tdatawpfg_posts[".afterAddActionDetTable"] = "";

$tdatawpfg_posts[".list"] = true;



$tdatawpfg_posts[".reorderRecordsByHeader"] = true;



$tdatawpfg_posts[".view"] = true;

$tdatawpfg_posts[".import"] = true;

$tdatawpfg_posts[".exportTo"] = true;

$tdatawpfg_posts[".printFriendly"] = true;

$tdatawpfg_posts[".delete"] = true;

$tdatawpfg_posts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_posts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_posts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_posts[".searchSaving"] = false;
//

$tdatawpfg_posts[".showSearchPanel"] = true;
		$tdatawpfg_posts[".flexibleSearch"] = true;

$tdatawpfg_posts[".isUseAjaxSuggest"] = true;

$tdatawpfg_posts[".rowHighlite"] = true;



				

$tdatawpfg_posts[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_posts[".buttonsAdded"] = false;

$tdatawpfg_posts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_posts[".isUseTimeForSearch"] = false;





$tdatawpfg_posts[".allSearchFields"] = array();
$tdatawpfg_posts[".filterFields"] = array();
$tdatawpfg_posts[".requiredSearchFields"] = array();

$tdatawpfg_posts[".allSearchFields"][] = "ID";
	$tdatawpfg_posts[".allSearchFields"][] = "post_author";
	$tdatawpfg_posts[".allSearchFields"][] = "post_date";
	$tdatawpfg_posts[".allSearchFields"][] = "post_date_gmt";
	$tdatawpfg_posts[".allSearchFields"][] = "post_content";
	$tdatawpfg_posts[".allSearchFields"][] = "post_title";
	$tdatawpfg_posts[".allSearchFields"][] = "post_excerpt";
	$tdatawpfg_posts[".allSearchFields"][] = "post_status";
	$tdatawpfg_posts[".allSearchFields"][] = "comment_status";
	$tdatawpfg_posts[".allSearchFields"][] = "ping_status";
	$tdatawpfg_posts[".allSearchFields"][] = "post_password";
	$tdatawpfg_posts[".allSearchFields"][] = "post_name";
	$tdatawpfg_posts[".allSearchFields"][] = "to_ping";
	$tdatawpfg_posts[".allSearchFields"][] = "pinged";
	$tdatawpfg_posts[".allSearchFields"][] = "post_modified";
	$tdatawpfg_posts[".allSearchFields"][] = "post_modified_gmt";
	$tdatawpfg_posts[".allSearchFields"][] = "post_content_filtered";
	$tdatawpfg_posts[".allSearchFields"][] = "post_parent";
	$tdatawpfg_posts[".allSearchFields"][] = "guid";
	$tdatawpfg_posts[".allSearchFields"][] = "menu_order";
	$tdatawpfg_posts[".allSearchFields"][] = "post_type";
	$tdatawpfg_posts[".allSearchFields"][] = "post_mime_type";
	$tdatawpfg_posts[".allSearchFields"][] = "comment_count";
	

$tdatawpfg_posts[".googleLikeFields"] = array();
$tdatawpfg_posts[".googleLikeFields"][] = "ID";
$tdatawpfg_posts[".googleLikeFields"][] = "post_author";
$tdatawpfg_posts[".googleLikeFields"][] = "post_date";
$tdatawpfg_posts[".googleLikeFields"][] = "post_date_gmt";
$tdatawpfg_posts[".googleLikeFields"][] = "post_content";
$tdatawpfg_posts[".googleLikeFields"][] = "post_title";
$tdatawpfg_posts[".googleLikeFields"][] = "post_excerpt";
$tdatawpfg_posts[".googleLikeFields"][] = "post_status";
$tdatawpfg_posts[".googleLikeFields"][] = "comment_status";
$tdatawpfg_posts[".googleLikeFields"][] = "ping_status";
$tdatawpfg_posts[".googleLikeFields"][] = "post_password";
$tdatawpfg_posts[".googleLikeFields"][] = "post_name";
$tdatawpfg_posts[".googleLikeFields"][] = "to_ping";
$tdatawpfg_posts[".googleLikeFields"][] = "pinged";
$tdatawpfg_posts[".googleLikeFields"][] = "post_modified";
$tdatawpfg_posts[".googleLikeFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".googleLikeFields"][] = "post_content_filtered";
$tdatawpfg_posts[".googleLikeFields"][] = "post_parent";
$tdatawpfg_posts[".googleLikeFields"][] = "guid";
$tdatawpfg_posts[".googleLikeFields"][] = "menu_order";
$tdatawpfg_posts[".googleLikeFields"][] = "post_type";
$tdatawpfg_posts[".googleLikeFields"][] = "post_mime_type";
$tdatawpfg_posts[".googleLikeFields"][] = "comment_count";


$tdatawpfg_posts[".advSearchFields"] = array();
$tdatawpfg_posts[".advSearchFields"][] = "ID";
$tdatawpfg_posts[".advSearchFields"][] = "post_author";
$tdatawpfg_posts[".advSearchFields"][] = "post_date";
$tdatawpfg_posts[".advSearchFields"][] = "post_date_gmt";
$tdatawpfg_posts[".advSearchFields"][] = "post_content";
$tdatawpfg_posts[".advSearchFields"][] = "post_title";
$tdatawpfg_posts[".advSearchFields"][] = "post_excerpt";
$tdatawpfg_posts[".advSearchFields"][] = "post_status";
$tdatawpfg_posts[".advSearchFields"][] = "comment_status";
$tdatawpfg_posts[".advSearchFields"][] = "ping_status";
$tdatawpfg_posts[".advSearchFields"][] = "post_password";
$tdatawpfg_posts[".advSearchFields"][] = "post_name";
$tdatawpfg_posts[".advSearchFields"][] = "to_ping";
$tdatawpfg_posts[".advSearchFields"][] = "pinged";
$tdatawpfg_posts[".advSearchFields"][] = "post_modified";
$tdatawpfg_posts[".advSearchFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".advSearchFields"][] = "post_content_filtered";
$tdatawpfg_posts[".advSearchFields"][] = "post_parent";
$tdatawpfg_posts[".advSearchFields"][] = "guid";
$tdatawpfg_posts[".advSearchFields"][] = "menu_order";
$tdatawpfg_posts[".advSearchFields"][] = "post_type";
$tdatawpfg_posts[".advSearchFields"][] = "post_mime_type";
$tdatawpfg_posts[".advSearchFields"][] = "comment_count";

$tdatawpfg_posts[".tableType"] = "list";

$tdatawpfg_posts[".printerPageOrientation"] = 0;
$tdatawpfg_posts[".nPrinterPageScale"] = 100;

$tdatawpfg_posts[".nPrinterSplitRecords"] = 40;

$tdatawpfg_posts[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_posts[".geocodingEnabled"] = false;





$tdatawpfg_posts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_posts[".pageSize"] = 20;

$tdatawpfg_posts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_posts[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_posts[".orderindexes"] = array();

$tdatawpfg_posts[".sqlHead"] = "SELECT ID,  	post_author,  	post_date,  	post_date_gmt,  	post_content,  	post_title,  	post_excerpt,  	post_status,  	comment_status,  	ping_status,  	post_password,  	post_name,  	to_ping,  	pinged,  	post_modified,  	post_modified_gmt,  	post_content_filtered,  	post_parent,  	guid,  	menu_order,  	post_type,  	post_mime_type,  	comment_count";
$tdatawpfg_posts[".sqlFrom"] = "FROM wpfg_posts";
$tdatawpfg_posts[".sqlWhereExpr"] = "";
$tdatawpfg_posts[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_posts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_posts[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_posts[".highlightSearchResults"] = true;

$tableKeyswpfg_posts = array();
$tableKeyswpfg_posts[] = "ID";
$tdatawpfg_posts[".Keys"] = $tableKeyswpfg_posts;

$tdatawpfg_posts[".listFields"] = array();
$tdatawpfg_posts[".listFields"][] = "ID";
$tdatawpfg_posts[".listFields"][] = "post_author";
$tdatawpfg_posts[".listFields"][] = "post_date";
$tdatawpfg_posts[".listFields"][] = "post_date_gmt";
$tdatawpfg_posts[".listFields"][] = "post_content";
$tdatawpfg_posts[".listFields"][] = "post_title";
$tdatawpfg_posts[".listFields"][] = "post_excerpt";
$tdatawpfg_posts[".listFields"][] = "post_status";
$tdatawpfg_posts[".listFields"][] = "comment_status";
$tdatawpfg_posts[".listFields"][] = "ping_status";
$tdatawpfg_posts[".listFields"][] = "post_password";
$tdatawpfg_posts[".listFields"][] = "post_name";
$tdatawpfg_posts[".listFields"][] = "to_ping";
$tdatawpfg_posts[".listFields"][] = "pinged";
$tdatawpfg_posts[".listFields"][] = "post_modified";
$tdatawpfg_posts[".listFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".listFields"][] = "post_content_filtered";
$tdatawpfg_posts[".listFields"][] = "post_parent";
$tdatawpfg_posts[".listFields"][] = "guid";
$tdatawpfg_posts[".listFields"][] = "menu_order";
$tdatawpfg_posts[".listFields"][] = "post_type";
$tdatawpfg_posts[".listFields"][] = "post_mime_type";
$tdatawpfg_posts[".listFields"][] = "comment_count";

$tdatawpfg_posts[".hideMobileList"] = array();


$tdatawpfg_posts[".viewFields"] = array();
$tdatawpfg_posts[".viewFields"][] = "ID";
$tdatawpfg_posts[".viewFields"][] = "post_author";
$tdatawpfg_posts[".viewFields"][] = "post_date";
$tdatawpfg_posts[".viewFields"][] = "post_date_gmt";
$tdatawpfg_posts[".viewFields"][] = "post_content";
$tdatawpfg_posts[".viewFields"][] = "post_title";
$tdatawpfg_posts[".viewFields"][] = "post_excerpt";
$tdatawpfg_posts[".viewFields"][] = "post_status";
$tdatawpfg_posts[".viewFields"][] = "comment_status";
$tdatawpfg_posts[".viewFields"][] = "ping_status";
$tdatawpfg_posts[".viewFields"][] = "post_password";
$tdatawpfg_posts[".viewFields"][] = "post_name";
$tdatawpfg_posts[".viewFields"][] = "to_ping";
$tdatawpfg_posts[".viewFields"][] = "pinged";
$tdatawpfg_posts[".viewFields"][] = "post_modified";
$tdatawpfg_posts[".viewFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".viewFields"][] = "post_content_filtered";
$tdatawpfg_posts[".viewFields"][] = "post_parent";
$tdatawpfg_posts[".viewFields"][] = "guid";
$tdatawpfg_posts[".viewFields"][] = "menu_order";
$tdatawpfg_posts[".viewFields"][] = "post_type";
$tdatawpfg_posts[".viewFields"][] = "post_mime_type";
$tdatawpfg_posts[".viewFields"][] = "comment_count";

$tdatawpfg_posts[".addFields"] = array();
$tdatawpfg_posts[".addFields"][] = "post_author";
$tdatawpfg_posts[".addFields"][] = "post_date";
$tdatawpfg_posts[".addFields"][] = "post_date_gmt";
$tdatawpfg_posts[".addFields"][] = "post_content";
$tdatawpfg_posts[".addFields"][] = "post_title";
$tdatawpfg_posts[".addFields"][] = "post_excerpt";
$tdatawpfg_posts[".addFields"][] = "post_status";
$tdatawpfg_posts[".addFields"][] = "comment_status";
$tdatawpfg_posts[".addFields"][] = "ping_status";
$tdatawpfg_posts[".addFields"][] = "post_password";
$tdatawpfg_posts[".addFields"][] = "post_name";
$tdatawpfg_posts[".addFields"][] = "to_ping";
$tdatawpfg_posts[".addFields"][] = "pinged";
$tdatawpfg_posts[".addFields"][] = "post_modified";
$tdatawpfg_posts[".addFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".addFields"][] = "post_content_filtered";
$tdatawpfg_posts[".addFields"][] = "post_parent";
$tdatawpfg_posts[".addFields"][] = "guid";
$tdatawpfg_posts[".addFields"][] = "menu_order";
$tdatawpfg_posts[".addFields"][] = "post_type";
$tdatawpfg_posts[".addFields"][] = "post_mime_type";
$tdatawpfg_posts[".addFields"][] = "comment_count";

$tdatawpfg_posts[".masterListFields"] = array();
$tdatawpfg_posts[".masterListFields"][] = "ID";
$tdatawpfg_posts[".masterListFields"][] = "post_author";
$tdatawpfg_posts[".masterListFields"][] = "post_date";
$tdatawpfg_posts[".masterListFields"][] = "post_date_gmt";
$tdatawpfg_posts[".masterListFields"][] = "post_content";
$tdatawpfg_posts[".masterListFields"][] = "post_title";
$tdatawpfg_posts[".masterListFields"][] = "post_excerpt";
$tdatawpfg_posts[".masterListFields"][] = "post_status";
$tdatawpfg_posts[".masterListFields"][] = "comment_status";
$tdatawpfg_posts[".masterListFields"][] = "ping_status";
$tdatawpfg_posts[".masterListFields"][] = "post_password";
$tdatawpfg_posts[".masterListFields"][] = "post_name";
$tdatawpfg_posts[".masterListFields"][] = "to_ping";
$tdatawpfg_posts[".masterListFields"][] = "pinged";
$tdatawpfg_posts[".masterListFields"][] = "post_modified";
$tdatawpfg_posts[".masterListFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".masterListFields"][] = "post_content_filtered";
$tdatawpfg_posts[".masterListFields"][] = "post_parent";
$tdatawpfg_posts[".masterListFields"][] = "guid";
$tdatawpfg_posts[".masterListFields"][] = "menu_order";
$tdatawpfg_posts[".masterListFields"][] = "post_type";
$tdatawpfg_posts[".masterListFields"][] = "post_mime_type";
$tdatawpfg_posts[".masterListFields"][] = "comment_count";

$tdatawpfg_posts[".inlineAddFields"] = array();
$tdatawpfg_posts[".inlineAddFields"][] = "post_author";
$tdatawpfg_posts[".inlineAddFields"][] = "post_date";
$tdatawpfg_posts[".inlineAddFields"][] = "post_date_gmt";
$tdatawpfg_posts[".inlineAddFields"][] = "post_content";
$tdatawpfg_posts[".inlineAddFields"][] = "post_title";
$tdatawpfg_posts[".inlineAddFields"][] = "post_excerpt";
$tdatawpfg_posts[".inlineAddFields"][] = "post_status";
$tdatawpfg_posts[".inlineAddFields"][] = "comment_status";
$tdatawpfg_posts[".inlineAddFields"][] = "ping_status";
$tdatawpfg_posts[".inlineAddFields"][] = "post_password";
$tdatawpfg_posts[".inlineAddFields"][] = "post_name";
$tdatawpfg_posts[".inlineAddFields"][] = "to_ping";
$tdatawpfg_posts[".inlineAddFields"][] = "pinged";
$tdatawpfg_posts[".inlineAddFields"][] = "post_modified";
$tdatawpfg_posts[".inlineAddFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".inlineAddFields"][] = "post_content_filtered";
$tdatawpfg_posts[".inlineAddFields"][] = "post_parent";
$tdatawpfg_posts[".inlineAddFields"][] = "guid";
$tdatawpfg_posts[".inlineAddFields"][] = "menu_order";
$tdatawpfg_posts[".inlineAddFields"][] = "post_type";
$tdatawpfg_posts[".inlineAddFields"][] = "post_mime_type";
$tdatawpfg_posts[".inlineAddFields"][] = "comment_count";

$tdatawpfg_posts[".editFields"] = array();
$tdatawpfg_posts[".editFields"][] = "post_author";
$tdatawpfg_posts[".editFields"][] = "post_date";
$tdatawpfg_posts[".editFields"][] = "post_date_gmt";
$tdatawpfg_posts[".editFields"][] = "post_content";
$tdatawpfg_posts[".editFields"][] = "post_title";
$tdatawpfg_posts[".editFields"][] = "post_excerpt";
$tdatawpfg_posts[".editFields"][] = "post_status";
$tdatawpfg_posts[".editFields"][] = "comment_status";
$tdatawpfg_posts[".editFields"][] = "ping_status";
$tdatawpfg_posts[".editFields"][] = "post_password";
$tdatawpfg_posts[".editFields"][] = "post_name";
$tdatawpfg_posts[".editFields"][] = "to_ping";
$tdatawpfg_posts[".editFields"][] = "pinged";
$tdatawpfg_posts[".editFields"][] = "post_modified";
$tdatawpfg_posts[".editFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".editFields"][] = "post_content_filtered";
$tdatawpfg_posts[".editFields"][] = "post_parent";
$tdatawpfg_posts[".editFields"][] = "guid";
$tdatawpfg_posts[".editFields"][] = "menu_order";
$tdatawpfg_posts[".editFields"][] = "post_type";
$tdatawpfg_posts[".editFields"][] = "post_mime_type";
$tdatawpfg_posts[".editFields"][] = "comment_count";

$tdatawpfg_posts[".inlineEditFields"] = array();
$tdatawpfg_posts[".inlineEditFields"][] = "post_author";
$tdatawpfg_posts[".inlineEditFields"][] = "post_date";
$tdatawpfg_posts[".inlineEditFields"][] = "post_date_gmt";
$tdatawpfg_posts[".inlineEditFields"][] = "post_content";
$tdatawpfg_posts[".inlineEditFields"][] = "post_title";
$tdatawpfg_posts[".inlineEditFields"][] = "post_excerpt";
$tdatawpfg_posts[".inlineEditFields"][] = "post_status";
$tdatawpfg_posts[".inlineEditFields"][] = "comment_status";
$tdatawpfg_posts[".inlineEditFields"][] = "ping_status";
$tdatawpfg_posts[".inlineEditFields"][] = "post_password";
$tdatawpfg_posts[".inlineEditFields"][] = "post_name";
$tdatawpfg_posts[".inlineEditFields"][] = "to_ping";
$tdatawpfg_posts[".inlineEditFields"][] = "pinged";
$tdatawpfg_posts[".inlineEditFields"][] = "post_modified";
$tdatawpfg_posts[".inlineEditFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".inlineEditFields"][] = "post_content_filtered";
$tdatawpfg_posts[".inlineEditFields"][] = "post_parent";
$tdatawpfg_posts[".inlineEditFields"][] = "guid";
$tdatawpfg_posts[".inlineEditFields"][] = "menu_order";
$tdatawpfg_posts[".inlineEditFields"][] = "post_type";
$tdatawpfg_posts[".inlineEditFields"][] = "post_mime_type";
$tdatawpfg_posts[".inlineEditFields"][] = "comment_count";

$tdatawpfg_posts[".updateSelectedFields"] = array();
$tdatawpfg_posts[".updateSelectedFields"][] = "post_author";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_date";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_date_gmt";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_content";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_title";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_excerpt";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_status";
$tdatawpfg_posts[".updateSelectedFields"][] = "comment_status";
$tdatawpfg_posts[".updateSelectedFields"][] = "ping_status";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_password";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_name";
$tdatawpfg_posts[".updateSelectedFields"][] = "to_ping";
$tdatawpfg_posts[".updateSelectedFields"][] = "pinged";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_modified";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_content_filtered";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_parent";
$tdatawpfg_posts[".updateSelectedFields"][] = "guid";
$tdatawpfg_posts[".updateSelectedFields"][] = "menu_order";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_type";
$tdatawpfg_posts[".updateSelectedFields"][] = "post_mime_type";
$tdatawpfg_posts[".updateSelectedFields"][] = "comment_count";


$tdatawpfg_posts[".exportFields"] = array();
$tdatawpfg_posts[".exportFields"][] = "ID";
$tdatawpfg_posts[".exportFields"][] = "post_author";
$tdatawpfg_posts[".exportFields"][] = "post_date";
$tdatawpfg_posts[".exportFields"][] = "post_date_gmt";
$tdatawpfg_posts[".exportFields"][] = "post_content";
$tdatawpfg_posts[".exportFields"][] = "post_title";
$tdatawpfg_posts[".exportFields"][] = "post_excerpt";
$tdatawpfg_posts[".exportFields"][] = "post_status";
$tdatawpfg_posts[".exportFields"][] = "comment_status";
$tdatawpfg_posts[".exportFields"][] = "ping_status";
$tdatawpfg_posts[".exportFields"][] = "post_password";
$tdatawpfg_posts[".exportFields"][] = "post_name";
$tdatawpfg_posts[".exportFields"][] = "to_ping";
$tdatawpfg_posts[".exportFields"][] = "pinged";
$tdatawpfg_posts[".exportFields"][] = "post_modified";
$tdatawpfg_posts[".exportFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".exportFields"][] = "post_content_filtered";
$tdatawpfg_posts[".exportFields"][] = "post_parent";
$tdatawpfg_posts[".exportFields"][] = "guid";
$tdatawpfg_posts[".exportFields"][] = "menu_order";
$tdatawpfg_posts[".exportFields"][] = "post_type";
$tdatawpfg_posts[".exportFields"][] = "post_mime_type";
$tdatawpfg_posts[".exportFields"][] = "comment_count";

$tdatawpfg_posts[".importFields"] = array();
$tdatawpfg_posts[".importFields"][] = "ID";
$tdatawpfg_posts[".importFields"][] = "post_author";
$tdatawpfg_posts[".importFields"][] = "post_date";
$tdatawpfg_posts[".importFields"][] = "post_date_gmt";
$tdatawpfg_posts[".importFields"][] = "post_content";
$tdatawpfg_posts[".importFields"][] = "post_title";
$tdatawpfg_posts[".importFields"][] = "post_excerpt";
$tdatawpfg_posts[".importFields"][] = "post_status";
$tdatawpfg_posts[".importFields"][] = "comment_status";
$tdatawpfg_posts[".importFields"][] = "ping_status";
$tdatawpfg_posts[".importFields"][] = "post_password";
$tdatawpfg_posts[".importFields"][] = "post_name";
$tdatawpfg_posts[".importFields"][] = "to_ping";
$tdatawpfg_posts[".importFields"][] = "pinged";
$tdatawpfg_posts[".importFields"][] = "post_modified";
$tdatawpfg_posts[".importFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".importFields"][] = "post_content_filtered";
$tdatawpfg_posts[".importFields"][] = "post_parent";
$tdatawpfg_posts[".importFields"][] = "guid";
$tdatawpfg_posts[".importFields"][] = "menu_order";
$tdatawpfg_posts[".importFields"][] = "post_type";
$tdatawpfg_posts[".importFields"][] = "post_mime_type";
$tdatawpfg_posts[".importFields"][] = "comment_count";

$tdatawpfg_posts[".printFields"] = array();
$tdatawpfg_posts[".printFields"][] = "ID";
$tdatawpfg_posts[".printFields"][] = "post_author";
$tdatawpfg_posts[".printFields"][] = "post_date";
$tdatawpfg_posts[".printFields"][] = "post_date_gmt";
$tdatawpfg_posts[".printFields"][] = "post_content";
$tdatawpfg_posts[".printFields"][] = "post_title";
$tdatawpfg_posts[".printFields"][] = "post_excerpt";
$tdatawpfg_posts[".printFields"][] = "post_status";
$tdatawpfg_posts[".printFields"][] = "comment_status";
$tdatawpfg_posts[".printFields"][] = "ping_status";
$tdatawpfg_posts[".printFields"][] = "post_password";
$tdatawpfg_posts[".printFields"][] = "post_name";
$tdatawpfg_posts[".printFields"][] = "to_ping";
$tdatawpfg_posts[".printFields"][] = "pinged";
$tdatawpfg_posts[".printFields"][] = "post_modified";
$tdatawpfg_posts[".printFields"][] = "post_modified_gmt";
$tdatawpfg_posts[".printFields"][] = "post_content_filtered";
$tdatawpfg_posts[".printFields"][] = "post_parent";
$tdatawpfg_posts[".printFields"][] = "guid";
$tdatawpfg_posts[".printFields"][] = "menu_order";
$tdatawpfg_posts[".printFields"][] = "post_type";
$tdatawpfg_posts[".printFields"][] = "post_mime_type";
$tdatawpfg_posts[".printFields"][] = "comment_count";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","ID");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatawpfg_posts["ID"] = $fdata;
//	post_author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "post_author";
	$fdata["GoodName"] = "post_author";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_author");
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

		$fdata["strField"] = "post_author";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_author";

	
	
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




	$tdatawpfg_posts["post_author"] = $fdata;
//	post_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "post_date";
	$fdata["GoodName"] = "post_date";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_date");
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

		$fdata["strField"] = "post_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_date";

	
	
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




	$tdatawpfg_posts["post_date"] = $fdata;
//	post_date_gmt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "post_date_gmt";
	$fdata["GoodName"] = "post_date_gmt";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_date_gmt");
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

		$fdata["strField"] = "post_date_gmt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_date_gmt";

	
	
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




	$tdatawpfg_posts["post_date_gmt"] = $fdata;
//	post_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "post_content";
	$fdata["GoodName"] = "post_content";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_content");
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

		$fdata["strField"] = "post_content";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_content";

	
	
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




	$tdatawpfg_posts["post_content"] = $fdata;
//	post_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "post_title";
	$fdata["GoodName"] = "post_title";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_title");
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

		$fdata["strField"] = "post_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_title";

	
	
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




	$tdatawpfg_posts["post_title"] = $fdata;
//	post_excerpt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "post_excerpt";
	$fdata["GoodName"] = "post_excerpt";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_excerpt");
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

		$fdata["strField"] = "post_excerpt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_excerpt";

	
	
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




	$tdatawpfg_posts["post_excerpt"] = $fdata;
//	post_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "post_status";
	$fdata["GoodName"] = "post_status";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_status");
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

		$fdata["strField"] = "post_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_status";

	
	
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




	$tdatawpfg_posts["post_status"] = $fdata;
//	comment_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "comment_status";
	$fdata["GoodName"] = "comment_status";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","comment_status");
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

		$fdata["strField"] = "comment_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_status";

	
	
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




	$tdatawpfg_posts["comment_status"] = $fdata;
//	ping_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ping_status";
	$fdata["GoodName"] = "ping_status";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","ping_status");
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

		$fdata["strField"] = "ping_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ping_status";

	
	
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




	$tdatawpfg_posts["ping_status"] = $fdata;
//	post_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "post_password";
	$fdata["GoodName"] = "post_password";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_password");
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

		$fdata["strField"] = "post_password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_password";

	
	
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




	$tdatawpfg_posts["post_password"] = $fdata;
//	post_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "post_name";
	$fdata["GoodName"] = "post_name";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_name");
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

		$fdata["strField"] = "post_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_name";

	
	
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




	$tdatawpfg_posts["post_name"] = $fdata;
//	to_ping
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "to_ping";
	$fdata["GoodName"] = "to_ping";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","to_ping");
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

		$fdata["strField"] = "to_ping";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "to_ping";

	
	
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




	$tdatawpfg_posts["to_ping"] = $fdata;
//	pinged
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pinged";
	$fdata["GoodName"] = "pinged";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","pinged");
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

		$fdata["strField"] = "pinged";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pinged";

	
	
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




	$tdatawpfg_posts["pinged"] = $fdata;
//	post_modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "post_modified";
	$fdata["GoodName"] = "post_modified";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_modified");
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

		$fdata["strField"] = "post_modified";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_modified";

	
	
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




	$tdatawpfg_posts["post_modified"] = $fdata;
//	post_modified_gmt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "post_modified_gmt";
	$fdata["GoodName"] = "post_modified_gmt";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_modified_gmt");
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

		$fdata["strField"] = "post_modified_gmt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_modified_gmt";

	
	
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




	$tdatawpfg_posts["post_modified_gmt"] = $fdata;
//	post_content_filtered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "post_content_filtered";
	$fdata["GoodName"] = "post_content_filtered";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_content_filtered");
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

		$fdata["strField"] = "post_content_filtered";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_content_filtered";

	
	
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




	$tdatawpfg_posts["post_content_filtered"] = $fdata;
//	post_parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "post_parent";
	$fdata["GoodName"] = "post_parent";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_parent");
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

		$fdata["strField"] = "post_parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_parent";

	
	
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




	$tdatawpfg_posts["post_parent"] = $fdata;
//	guid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "guid";
	$fdata["GoodName"] = "guid";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","guid");
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

		$fdata["strField"] = "guid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "guid";

	
	
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




	$tdatawpfg_posts["guid"] = $fdata;
//	menu_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "menu_order";
	$fdata["GoodName"] = "menu_order";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","menu_order");
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

		$fdata["strField"] = "menu_order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_order";

	
	
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




	$tdatawpfg_posts["menu_order"] = $fdata;
//	post_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "post_type";
	$fdata["GoodName"] = "post_type";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_type");
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

		$fdata["strField"] = "post_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_type";

	
	
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




	$tdatawpfg_posts["post_type"] = $fdata;
//	post_mime_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "post_mime_type";
	$fdata["GoodName"] = "post_mime_type";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","post_mime_type");
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

		$fdata["strField"] = "post_mime_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_mime_type";

	
	
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




	$tdatawpfg_posts["post_mime_type"] = $fdata;
//	comment_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "comment_count";
	$fdata["GoodName"] = "comment_count";
	$fdata["ownerTable"] = "wpfg_posts";
	$fdata["Label"] = GetFieldLabel("wpfg_posts","comment_count");
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

		$fdata["strField"] = "comment_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_count";

	
	
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




	$tdatawpfg_posts["comment_count"] = $fdata;


$tables_data["wpfg_posts"]=&$tdatawpfg_posts;
$field_labels["wpfg_posts"] = &$fieldLabelswpfg_posts;
$fieldToolTips["wpfg_posts"] = &$fieldToolTipswpfg_posts;
$placeHolders["wpfg_posts"] = &$placeHolderswpfg_posts;
$page_titles["wpfg_posts"] = &$pageTitleswpfg_posts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_posts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_posts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_posts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	post_author,  	post_date,  	post_date_gmt,  	post_content,  	post_title,  	post_excerpt,  	post_status,  	comment_status,  	ping_status,  	post_password,  	post_name,  	to_ping,  	pinged,  	post_modified,  	post_modified_gmt,  	post_content_filtered,  	post_parent,  	guid,  	menu_order,  	post_type,  	post_mime_type,  	comment_count";
$proto0["m_strFrom"] = "FROM wpfg_posts";
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
	"m_strName" => "ID",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "wpfg_posts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "post_author",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto8["m_sql"] = "post_author";
$proto8["m_srcTableName"] = "wpfg_posts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "post_date",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto10["m_sql"] = "post_date";
$proto10["m_srcTableName"] = "wpfg_posts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "post_date_gmt",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto12["m_sql"] = "post_date_gmt";
$proto12["m_srcTableName"] = "wpfg_posts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "post_content",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto14["m_sql"] = "post_content";
$proto14["m_srcTableName"] = "wpfg_posts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "post_title",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto16["m_sql"] = "post_title";
$proto16["m_srcTableName"] = "wpfg_posts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "post_excerpt",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto18["m_sql"] = "post_excerpt";
$proto18["m_srcTableName"] = "wpfg_posts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "post_status",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto20["m_sql"] = "post_status";
$proto20["m_srcTableName"] = "wpfg_posts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_status",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto22["m_sql"] = "comment_status";
$proto22["m_srcTableName"] = "wpfg_posts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ping_status",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto24["m_sql"] = "ping_status";
$proto24["m_srcTableName"] = "wpfg_posts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "post_password",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto26["m_sql"] = "post_password";
$proto26["m_srcTableName"] = "wpfg_posts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "post_name",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto28["m_sql"] = "post_name";
$proto28["m_srcTableName"] = "wpfg_posts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "to_ping",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto30["m_sql"] = "to_ping";
$proto30["m_srcTableName"] = "wpfg_posts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pinged",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto32["m_sql"] = "pinged";
$proto32["m_srcTableName"] = "wpfg_posts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "post_modified",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto34["m_sql"] = "post_modified";
$proto34["m_srcTableName"] = "wpfg_posts";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "post_modified_gmt",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto36["m_sql"] = "post_modified_gmt";
$proto36["m_srcTableName"] = "wpfg_posts";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "post_content_filtered",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto38["m_sql"] = "post_content_filtered";
$proto38["m_srcTableName"] = "wpfg_posts";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "post_parent",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto40["m_sql"] = "post_parent";
$proto40["m_srcTableName"] = "wpfg_posts";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "guid",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto42["m_sql"] = "guid";
$proto42["m_srcTableName"] = "wpfg_posts";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_order",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto44["m_sql"] = "menu_order";
$proto44["m_srcTableName"] = "wpfg_posts";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "post_type",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto46["m_sql"] = "post_type";
$proto46["m_srcTableName"] = "wpfg_posts";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "post_mime_type",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto48["m_sql"] = "post_mime_type";
$proto48["m_srcTableName"] = "wpfg_posts";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_count",
	"m_strTable" => "wpfg_posts",
	"m_srcTableName" => "wpfg_posts"
));

$proto50["m_sql"] = "comment_count";
$proto50["m_srcTableName"] = "wpfg_posts";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "wpfg_posts";
$proto53["m_srcTableName"] = "wpfg_posts";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "ID";
$proto53["m_columns"][] = "post_author";
$proto53["m_columns"][] = "post_date";
$proto53["m_columns"][] = "post_date_gmt";
$proto53["m_columns"][] = "post_content";
$proto53["m_columns"][] = "post_title";
$proto53["m_columns"][] = "post_excerpt";
$proto53["m_columns"][] = "post_status";
$proto53["m_columns"][] = "comment_status";
$proto53["m_columns"][] = "ping_status";
$proto53["m_columns"][] = "post_password";
$proto53["m_columns"][] = "post_name";
$proto53["m_columns"][] = "to_ping";
$proto53["m_columns"][] = "pinged";
$proto53["m_columns"][] = "post_modified";
$proto53["m_columns"][] = "post_modified_gmt";
$proto53["m_columns"][] = "post_content_filtered";
$proto53["m_columns"][] = "post_parent";
$proto53["m_columns"][] = "guid";
$proto53["m_columns"][] = "menu_order";
$proto53["m_columns"][] = "post_type";
$proto53["m_columns"][] = "post_mime_type";
$proto53["m_columns"][] = "comment_count";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "wpfg_posts";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "wpfg_posts";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="wpfg_posts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_posts = createSqlQuery_wpfg_posts();


	
						;

																							

$tdatawpfg_posts[".sqlquery"] = $queryData_wpfg_posts;

$tableEvents["wpfg_posts"] = new eventsBase;
$tdatawpfg_posts[".hasEvents"] = false;

?>
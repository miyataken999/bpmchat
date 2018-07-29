<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_site_content_dash = array();
	$tdatamodx_site_content_dash[".truncateText"] = true;
	$tdatamodx_site_content_dash[".NumberOfChars"] = 20;
	$tdatamodx_site_content_dash[".ShortName"] = "modx_site_content_dash";
	$tdatamodx_site_content_dash[".OwnerID"] = "";
	$tdatamodx_site_content_dash[".OriginalTable"] = "modx_site_content";

//	field labels
$fieldLabelsmodx_site_content_dash = array();
$fieldToolTipsmodx_site_content_dash = array();
$pageTitlesmodx_site_content_dash = array();
$placeHoldersmodx_site_content_dash = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_site_content_dash["Japanese"] = array();
	$fieldToolTipsmodx_site_content_dash["Japanese"] = array();
	$placeHoldersmodx_site_content_dash["Japanese"] = array();
	$pageTitlesmodx_site_content_dash["Japanese"] = array();
	$fieldLabelsmodx_site_content_dash["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["id"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["id"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["type"] = "Type";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["type"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["type"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["contentType"] = "Content Type";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["contentType"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["contentType"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["pagetitle"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["pagetitle"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["longtitle"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["longtitle"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["description"] = "Description";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["description"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["description"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["link_attributes"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["link_attributes"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["published"] = "Published";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["published"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["published"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["pub_date"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["pub_date"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["unpub_date"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["unpub_date"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["content"] = "Content";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["content"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["content"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["modex_site_htmlsnippet_id"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["modex_site_htmlsnippet_id"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["modx_site_snippet_id"] = "Modx Site Snippet Id";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["modx_site_snippet_id"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["modx_site_snippet_id"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["url"] = "Url";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["url"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["url"] = "";
	$fieldLabelsmodx_site_content_dash["Japanese"]["link"] = "Link";
	$fieldToolTipsmodx_site_content_dash["Japanese"]["link"] = "";
	$placeHoldersmodx_site_content_dash["Japanese"]["link"] = "";
	if (count($fieldToolTipsmodx_site_content_dash["Japanese"]))
		$tdatamodx_site_content_dash[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_site_content_dash["English"] = array();
	$fieldToolTipsmodx_site_content_dash["English"] = array();
	$placeHoldersmodx_site_content_dash["English"] = array();
	$pageTitlesmodx_site_content_dash["English"] = array();
	$fieldLabelsmodx_site_content_dash["English"]["link"] = "Link";
	$fieldToolTipsmodx_site_content_dash["English"]["link"] = "";
	$placeHoldersmodx_site_content_dash["English"]["link"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["id"] = "Id";
	$fieldToolTipsmodx_site_content_dash["English"]["id"] = "";
	$placeHoldersmodx_site_content_dash["English"]["id"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["url"] = "Url";
	$fieldToolTipsmodx_site_content_dash["English"]["url"] = "";
	$placeHoldersmodx_site_content_dash["English"]["url"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["type"] = "Type";
	$fieldToolTipsmodx_site_content_dash["English"]["type"] = "";
	$placeHoldersmodx_site_content_dash["English"]["type"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["contentType"] = "Content Type";
	$fieldToolTipsmodx_site_content_dash["English"]["contentType"] = "";
	$placeHoldersmodx_site_content_dash["English"]["contentType"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodx_site_content_dash["English"]["pagetitle"] = "";
	$placeHoldersmodx_site_content_dash["English"]["pagetitle"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodx_site_content_dash["English"]["longtitle"] = "";
	$placeHoldersmodx_site_content_dash["English"]["longtitle"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["description"] = "Description";
	$fieldToolTipsmodx_site_content_dash["English"]["description"] = "";
	$placeHoldersmodx_site_content_dash["English"]["description"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodx_site_content_dash["English"]["link_attributes"] = "";
	$placeHoldersmodx_site_content_dash["English"]["link_attributes"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["published"] = "Published";
	$fieldToolTipsmodx_site_content_dash["English"]["published"] = "";
	$placeHoldersmodx_site_content_dash["English"]["published"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_content_dash["English"]["pub_date"] = "";
	$placeHoldersmodx_site_content_dash["English"]["pub_date"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_content_dash["English"]["unpub_date"] = "";
	$placeHoldersmodx_site_content_dash["English"]["unpub_date"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldToolTipsmodx_site_content_dash["English"]["modex_site_htmlsnippet_id"] = "";
	$placeHoldersmodx_site_content_dash["English"]["modex_site_htmlsnippet_id"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["modx_site_snippet_id"] = "Modx Site Snippet Id";
	$fieldToolTipsmodx_site_content_dash["English"]["modx_site_snippet_id"] = "";
	$placeHoldersmodx_site_content_dash["English"]["modx_site_snippet_id"] = "";
	$fieldLabelsmodx_site_content_dash["English"]["content"] = "Content";
	$fieldToolTipsmodx_site_content_dash["English"]["content"] = "";
	$placeHoldersmodx_site_content_dash["English"]["content"] = "";
	if (count($fieldToolTipsmodx_site_content_dash["English"]))
		$tdatamodx_site_content_dash[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_site_content_dash[""] = array();
	$fieldToolTipsmodx_site_content_dash[""] = array();
	$placeHoldersmodx_site_content_dash[""] = array();
	$pageTitlesmodx_site_content_dash[""] = array();
	if (count($fieldToolTipsmodx_site_content_dash[""]))
		$tdatamodx_site_content_dash[".isUseToolTips"] = true;
}


	$tdatamodx_site_content_dash[".NCSearch"] = true;



$tdatamodx_site_content_dash[".shortTableName"] = "modx_site_content_dash";
$tdatamodx_site_content_dash[".nSecOptions"] = 0;
$tdatamodx_site_content_dash[".recsPerRowPrint"] = 1;
$tdatamodx_site_content_dash[".mainTableOwnerID"] = "";
$tdatamodx_site_content_dash[".moveNext"] = 0;
$tdatamodx_site_content_dash[".entityType"] = 1;

$tdatamodx_site_content_dash[".strOriginalTableName"] = "modx_site_content";

	



$tdatamodx_site_content_dash[".showAddInPopup"] = false;

$tdatamodx_site_content_dash[".showEditInPopup"] = false;

$tdatamodx_site_content_dash[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdatamodx_site_content_dash[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_site_content_dash[".fieldsForRegister"] = array();
	
$tdatamodx_site_content_dash[".listAjax"] = false;

	$tdatamodx_site_content_dash[".audit"] = true;

	$tdatamodx_site_content_dash[".locking"] = false;

$tdatamodx_site_content_dash[".edit"] = true;
$tdatamodx_site_content_dash[".afterEditAction"] = 1;
$tdatamodx_site_content_dash[".closePopupAfterEdit"] = 1;
$tdatamodx_site_content_dash[".afterEditActionDetTable"] = "";

$tdatamodx_site_content_dash[".add"] = true;
$tdatamodx_site_content_dash[".afterAddAction"] = 1;
$tdatamodx_site_content_dash[".closePopupAfterAdd"] = 1;
$tdatamodx_site_content_dash[".afterAddActionDetTable"] = "";

$tdatamodx_site_content_dash[".list"] = true;

$tdatamodx_site_content_dash[".inlineEdit"] = true;

$tdatamodx_site_content_dash[".updateSelected"] = true;

$tdatamodx_site_content_dash[".reorderRecordsByHeader"] = true;
$tdatamodx_site_content_dash[".createSortByDropdown"] = true;
$tdatamodx_site_content_dash[".strSortControlSettingsJSON"] = "";

$tdatamodx_site_content_dash[".strClickActionJSON"] = "{\"fields\":{\"alias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"alias_visible\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cacheable\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"content\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"modx_site_templates\"},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":\"modx_site_templates\",\"url\":\"\"}},\"contentType\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"content_dispo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"createdby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"createdon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deleted\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deletedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deletedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"donthit\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"editedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"editedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haskeywords\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hasmetatags\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hidemenu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"introtext\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"isfolder\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"link_attributes\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"longtitle\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"menuindex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"menutitle\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"pagetitle\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"parent\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"privatemgr\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"privateweb\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"pub_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"published\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"publishedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"publishedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"richtext\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"searchable\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"template\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"unpub_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"url\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"modx_site_templates\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"modx_site_templates\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"modx_site_templates\"},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":\"modx_site_templates\",\"url\":\"\"}}}";


$tdatamodx_site_content_dash[".inlineAdd"] = true;
$tdatamodx_site_content_dash[".copy"] = true;
$tdatamodx_site_content_dash[".view"] = true;

$tdatamodx_site_content_dash[".import"] = true;

$tdatamodx_site_content_dash[".exportTo"] = true;

$tdatamodx_site_content_dash[".printFriendly"] = true;

$tdatamodx_site_content_dash[".delete"] = true;

$tdatamodx_site_content_dash[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdatamodx_site_content_dash[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamodx_site_content_dash[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatamodx_site_content_dash[".searchSaving"] = false;
//

$tdatamodx_site_content_dash[".showSearchPanel"] = true;
		$tdatamodx_site_content_dash[".flexibleSearch"] = true;

$tdatamodx_site_content_dash[".isUseAjaxSuggest"] = true;

$tdatamodx_site_content_dash[".rowHighlite"] = true;



				

$tdatamodx_site_content_dash[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_site_content_dash[".buttonsAdded"] = false;

$tdatamodx_site_content_dash[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_site_content_dash[".isUseTimeForSearch"] = false;



$tdatamodx_site_content_dash[".badgeColor"] = "DC143C";


$tdatamodx_site_content_dash[".allSearchFields"] = array();
$tdatamodx_site_content_dash[".filterFields"] = array();
$tdatamodx_site_content_dash[".requiredSearchFields"] = array();

$tdatamodx_site_content_dash[".allSearchFields"][] = "link";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "id";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "url";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "content";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "modx_site_snippet_id";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "modex_site_htmlsnippet_id";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "type";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "contentType";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "pagetitle";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "longtitle";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "description";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "link_attributes";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "published";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "pub_date";
	$tdatamodx_site_content_dash[".allSearchFields"][] = "unpub_date";
	

$tdatamodx_site_content_dash[".googleLikeFields"] = array();
$tdatamodx_site_content_dash[".googleLikeFields"][] = "id";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "url";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "link";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "type";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "contentType";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "longtitle";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "description";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "published";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "pub_date";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "unpub_date";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".googleLikeFields"][] = "content";


$tdatamodx_site_content_dash[".advSearchFields"] = array();
$tdatamodx_site_content_dash[".advSearchFields"][] = "link";
$tdatamodx_site_content_dash[".advSearchFields"][] = "id";
$tdatamodx_site_content_dash[".advSearchFields"][] = "url";
$tdatamodx_site_content_dash[".advSearchFields"][] = "content";
$tdatamodx_site_content_dash[".advSearchFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".advSearchFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".advSearchFields"][] = "type";
$tdatamodx_site_content_dash[".advSearchFields"][] = "contentType";
$tdatamodx_site_content_dash[".advSearchFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".advSearchFields"][] = "longtitle";
$tdatamodx_site_content_dash[".advSearchFields"][] = "description";
$tdatamodx_site_content_dash[".advSearchFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".advSearchFields"][] = "published";
$tdatamodx_site_content_dash[".advSearchFields"][] = "pub_date";
$tdatamodx_site_content_dash[".advSearchFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".tableType"] = "list";

$tdatamodx_site_content_dash[".printerPageOrientation"] = 0;
$tdatamodx_site_content_dash[".nPrinterPageScale"] = 100;

$tdatamodx_site_content_dash[".nPrinterSplitRecords"] = 40;

$tdatamodx_site_content_dash[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_site_content_dash[".geocodingEnabled"] = false;





$tdatamodx_site_content_dash[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodx_site_content_dash[".pageSize"] = 20;

$tdatamodx_site_content_dash[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_site_content_dash[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_site_content_dash[".orderindexes"] = array();
$tdatamodx_site_content_dash[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdatamodx_site_content_dash[".sqlHead"] = "SELECT id,  CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END AS url,  CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END AS link,  `type`,  contentType,  pagetitle,  longtitle,  description,  link_attributes,  published,  pub_date,  unpub_date,  modex_site_htmlsnippet_id,  modx_site_snippet_id,  content";
$tdatamodx_site_content_dash[".sqlFrom"] = "FROM modx_site_content";
$tdatamodx_site_content_dash[".sqlWhereExpr"] = "(parent =0)";
$tdatamodx_site_content_dash[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "content";
	
		$tabFields[] = "modx_site_snippet_id";
	
		$tabFields[] = "modex_site_htmlsnippet_id";
	
		$tabFields[] = "type";
	
		$tabFields[] = "contentType";
	
		$tabFields[] = "pagetitle";
	
		$tabFields[] = "longtitle";
	
		$tabFields[] = "description";
	
		$tabFields[] = "link_attributes";
	
		$tabFields[] = "published";
	
		$tabFields[] = "pub_date";
$arrEditTabs[] = array('tabId'=>'New_tab11',
					   'tabName'=>"New tab1",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "unpub_date";
$arrEditTabs[] = array('tabId'=>'New_tab1',
					   'tabName'=>"New tab",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'New_tab21',
					   'tabName'=>"New tab2",
					   'nType'=>'0',
					   'nOrder'=>42,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatamodx_site_content_dash[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "content";
	
		$tabFields[] = "modx_site_snippet_id";
	
		$tabFields[] = "modex_site_htmlsnippet_id";
	
		$tabFields[] = "type";
	
		$tabFields[] = "contentType";
	
		$tabFields[] = "pagetitle";
	
		$tabFields[] = "longtitle";
	
		$tabFields[] = "description";
	
		$tabFields[] = "link_attributes";
	
		$tabFields[] = "published";
	
		$tabFields[] = "pub_date";
$arrAddTabs[] = array('tabId'=>'New_tab11',
					  'tabName'=>"New tab1",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "unpub_date";
$arrAddTabs[] = array('tabId'=>'New_tab1',
					  'tabName'=>"New tab",
					  'nType'=>'0',
					  'nOrder'=>19,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'New_tab21',
					  'tabName'=>"New tab2",
					  'nType'=>'0',
					  'nOrder'=>42,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatamodx_site_content_dash[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
	$tabFields[] = "content";
	$tabFields[] = "modx_site_snippet_id";
	$tabFields[] = "modex_site_htmlsnippet_id";
	$tabFields[] = "type";
	$tabFields[] = "contentType";
	$tabFields[] = "pagetitle";
	$tabFields[] = "longtitle";
	$tabFields[] = "description";
	$tabFields[] = "link_attributes";
	$tabFields[] = "published";
	$tabFields[] = "pub_date";
$arrViewTabs[] = array('tabId'=>'New_tab11',
					   'tabName'=>"New tab1",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "unpub_date";
$arrViewTabs[] = array('tabId'=>'New_tab1',
					   'tabName'=>"New tab",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'New_tab21',
					   'tabName'=>"New tab2",
					   'nType'=>'0',
					   'nOrder'=>42,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatamodx_site_content_dash[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_site_content_dash[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_site_content_dash[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_site_content_dash[".highlightSearchResults"] = true;

$tableKeysmodx_site_content_dash = array();
$tableKeysmodx_site_content_dash[] = "id";
$tdatamodx_site_content_dash[".Keys"] = $tableKeysmodx_site_content_dash;

$tdatamodx_site_content_dash[".listFields"] = array();
$tdatamodx_site_content_dash[".listFields"][] = "link";
$tdatamodx_site_content_dash[".listFields"][] = "url";
$tdatamodx_site_content_dash[".listFields"][] = "id";
$tdatamodx_site_content_dash[".listFields"][] = "content";
$tdatamodx_site_content_dash[".listFields"][] = "published";
$tdatamodx_site_content_dash[".listFields"][] = "pub_date";
$tdatamodx_site_content_dash[".listFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".listFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".listFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".listFields"][] = "type";
$tdatamodx_site_content_dash[".listFields"][] = "contentType";
$tdatamodx_site_content_dash[".listFields"][] = "longtitle";
$tdatamodx_site_content_dash[".listFields"][] = "description";
$tdatamodx_site_content_dash[".listFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".listFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".hideMobileList"] = array();


$tdatamodx_site_content_dash[".viewFields"] = array();
$tdatamodx_site_content_dash[".viewFields"][] = "link";
$tdatamodx_site_content_dash[".viewFields"][] = "url";
$tdatamodx_site_content_dash[".viewFields"][] = "content";
$tdatamodx_site_content_dash[".viewFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".viewFields"][] = "id";
$tdatamodx_site_content_dash[".viewFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".viewFields"][] = "type";
$tdatamodx_site_content_dash[".viewFields"][] = "contentType";
$tdatamodx_site_content_dash[".viewFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".viewFields"][] = "longtitle";
$tdatamodx_site_content_dash[".viewFields"][] = "description";
$tdatamodx_site_content_dash[".viewFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".viewFields"][] = "published";
$tdatamodx_site_content_dash[".viewFields"][] = "pub_date";
$tdatamodx_site_content_dash[".viewFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".addFields"] = array();
$tdatamodx_site_content_dash[".addFields"][] = "content";
$tdatamodx_site_content_dash[".addFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".addFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".addFields"][] = "type";
$tdatamodx_site_content_dash[".addFields"][] = "contentType";
$tdatamodx_site_content_dash[".addFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".addFields"][] = "longtitle";
$tdatamodx_site_content_dash[".addFields"][] = "description";
$tdatamodx_site_content_dash[".addFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".addFields"][] = "published";
$tdatamodx_site_content_dash[".addFields"][] = "pub_date";
$tdatamodx_site_content_dash[".addFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".masterListFields"] = array();
$tdatamodx_site_content_dash[".masterListFields"][] = "link";
$tdatamodx_site_content_dash[".masterListFields"][] = "id";
$tdatamodx_site_content_dash[".masterListFields"][] = "url";
$tdatamodx_site_content_dash[".masterListFields"][] = "content";
$tdatamodx_site_content_dash[".masterListFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".masterListFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".masterListFields"][] = "type";
$tdatamodx_site_content_dash[".masterListFields"][] = "contentType";
$tdatamodx_site_content_dash[".masterListFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".masterListFields"][] = "longtitle";
$tdatamodx_site_content_dash[".masterListFields"][] = "description";
$tdatamodx_site_content_dash[".masterListFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".masterListFields"][] = "published";
$tdatamodx_site_content_dash[".masterListFields"][] = "pub_date";
$tdatamodx_site_content_dash[".masterListFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".inlineAddFields"] = array();
$tdatamodx_site_content_dash[".inlineAddFields"][] = "content";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "published";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "pub_date";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "type";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "contentType";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "longtitle";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "description";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".inlineAddFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".editFields"] = array();
$tdatamodx_site_content_dash[".editFields"][] = "content";
$tdatamodx_site_content_dash[".editFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".editFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".editFields"][] = "type";
$tdatamodx_site_content_dash[".editFields"][] = "contentType";
$tdatamodx_site_content_dash[".editFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".editFields"][] = "longtitle";
$tdatamodx_site_content_dash[".editFields"][] = "description";
$tdatamodx_site_content_dash[".editFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".editFields"][] = "published";
$tdatamodx_site_content_dash[".editFields"][] = "pub_date";
$tdatamodx_site_content_dash[".editFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".inlineEditFields"] = array();
$tdatamodx_site_content_dash[".inlineEditFields"][] = "content";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "published";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "pub_date";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "type";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "contentType";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "longtitle";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "description";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".inlineEditFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".updateSelectedFields"] = array();
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "content";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "type";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "contentType";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "longtitle";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "description";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "published";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "pub_date";
$tdatamodx_site_content_dash[".updateSelectedFields"][] = "unpub_date";


$tdatamodx_site_content_dash[".exportFields"] = array();
$tdatamodx_site_content_dash[".exportFields"][] = "link";
$tdatamodx_site_content_dash[".exportFields"][] = "id";
$tdatamodx_site_content_dash[".exportFields"][] = "url";
$tdatamodx_site_content_dash[".exportFields"][] = "content";
$tdatamodx_site_content_dash[".exportFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".exportFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".exportFields"][] = "type";
$tdatamodx_site_content_dash[".exportFields"][] = "contentType";
$tdatamodx_site_content_dash[".exportFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".exportFields"][] = "longtitle";
$tdatamodx_site_content_dash[".exportFields"][] = "description";
$tdatamodx_site_content_dash[".exportFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".exportFields"][] = "published";
$tdatamodx_site_content_dash[".exportFields"][] = "pub_date";
$tdatamodx_site_content_dash[".exportFields"][] = "unpub_date";

$tdatamodx_site_content_dash[".importFields"] = array();
$tdatamodx_site_content_dash[".importFields"][] = "id";
$tdatamodx_site_content_dash[".importFields"][] = "url";
$tdatamodx_site_content_dash[".importFields"][] = "link";
$tdatamodx_site_content_dash[".importFields"][] = "type";
$tdatamodx_site_content_dash[".importFields"][] = "contentType";
$tdatamodx_site_content_dash[".importFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".importFields"][] = "longtitle";
$tdatamodx_site_content_dash[".importFields"][] = "description";
$tdatamodx_site_content_dash[".importFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".importFields"][] = "published";
$tdatamodx_site_content_dash[".importFields"][] = "pub_date";
$tdatamodx_site_content_dash[".importFields"][] = "unpub_date";
$tdatamodx_site_content_dash[".importFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".importFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".importFields"][] = "content";

$tdatamodx_site_content_dash[".printFields"] = array();
$tdatamodx_site_content_dash[".printFields"][] = "link";
$tdatamodx_site_content_dash[".printFields"][] = "id";
$tdatamodx_site_content_dash[".printFields"][] = "url";
$tdatamodx_site_content_dash[".printFields"][] = "content";
$tdatamodx_site_content_dash[".printFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_dash[".printFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_dash[".printFields"][] = "type";
$tdatamodx_site_content_dash[".printFields"][] = "contentType";
$tdatamodx_site_content_dash[".printFields"][] = "pagetitle";
$tdatamodx_site_content_dash[".printFields"][] = "longtitle";
$tdatamodx_site_content_dash[".printFields"][] = "description";
$tdatamodx_site_content_dash[".printFields"][] = "link_attributes";
$tdatamodx_site_content_dash[".printFields"][] = "published";
$tdatamodx_site_content_dash[".printFields"][] = "pub_date";
$tdatamodx_site_content_dash[".printFields"][] = "unpub_date";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatamodx_site_content_dash["id"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamodx_site_content_dash["url"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","link");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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




	$tdatamodx_site_content_dash["link"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","type");
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

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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




	$tdatamodx_site_content_dash["type"] = $fdata;
//	contentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contentType";
	$fdata["GoodName"] = "contentType";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","contentType");
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

		$fdata["strField"] = "contentType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contentType";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatamodx_site_content_dash["contentType"] = $fdata;
//	pagetitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pagetitle";
	$fdata["GoodName"] = "pagetitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","pagetitle");
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

		$fdata["strField"] = "pagetitle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pagetitle";

	
	
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




	$tdatamodx_site_content_dash["pagetitle"] = $fdata;
//	longtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "longtitle";
	$fdata["GoodName"] = "longtitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","longtitle");
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

		$fdata["strField"] = "longtitle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longtitle";

	
	
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




	$tdatamodx_site_content_dash["longtitle"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","description");
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

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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




	$tdatamodx_site_content_dash["description"] = $fdata;
//	link_attributes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "link_attributes";
	$fdata["GoodName"] = "link_attributes";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","link_attributes");
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

		$fdata["strField"] = "link_attributes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_attributes";

	
	
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




	$tdatamodx_site_content_dash["link_attributes"] = $fdata;
//	published
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "published";
	$fdata["GoodName"] = "published";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","published");
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

		$fdata["strField"] = "published";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "published";

	
	
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




	$tdatamodx_site_content_dash["published"] = $fdata;
//	pub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pub_date";
	$fdata["GoodName"] = "pub_date";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","pub_date");
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

		$fdata["strField"] = "pub_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pub_date";

	
	
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




	$tdatamodx_site_content_dash["pub_date"] = $fdata;
//	unpub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "unpub_date";
	$fdata["GoodName"] = "unpub_date";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","unpub_date");
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

		$fdata["strField"] = "unpub_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unpub_date";

	
	
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




	$tdatamodx_site_content_dash["unpub_date"] = $fdata;
//	modex_site_htmlsnippet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "modex_site_htmlsnippet_id";
	$fdata["GoodName"] = "modex_site_htmlsnippet_id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","modex_site_htmlsnippet_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "modex_site_htmlsnippet_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modex_site_htmlsnippet_id";

	
	
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
	$edata["LookupTable"] = "modx_site_htmlsnippets";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamodx_site_content_dash["modex_site_htmlsnippet_id"] = $fdata;
//	modx_site_snippet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "modx_site_snippet_id";
	$fdata["GoodName"] = "modx_site_snippet_id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","modx_site_snippet_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "modx_site_snippet_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modx_site_snippet_id";

	
	
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
	$edata["LookupTable"] = "modx_site_snippets";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamodx_site_content_dash["modx_site_snippet_id"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_dash","content");
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

		$fdata["strField"] = "content";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 322;
			$edata["nCols"] = 627;

	
	
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




	$tdatamodx_site_content_dash["content"] = $fdata;


$tables_data["modx_site_content_dash"]=&$tdatamodx_site_content_dash;
$field_labels["modx_site_content_dash"] = &$fieldLabelsmodx_site_content_dash;
$fieldToolTips["modx_site_content_dash"] = &$fieldToolTipsmodx_site_content_dash;
$placeHolders["modx_site_content_dash"] = &$placeHoldersmodx_site_content_dash;
$page_titles["modx_site_content_dash"] = &$pageTitlesmodx_site_content_dash;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_site_content_dash"] = array();
//	modx_site_snippets
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="modx_site_snippets";
		$detailsParam["dOriginalTable"] = "modx_site_snippets";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "modx_site_snippets";
	$detailsParam["dCaptionTable"] = GetTableCaption("modx_site_snippets");
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
		
	$detailsTablesData["modx_site_content_dash"][$dIndex] = $detailsParam;

	
		$detailsTablesData["modx_site_content_dash"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["modx_site_content_dash"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["modx_site_content_dash"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["modx_site_content_dash"][$dIndex]["detailKeys"][]="modx_site_content_id";

// tables which are master tables for current table (detail)
$masterTablesData["modx_site_content_dash"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_site_content_dash()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "id,  CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END AS url,  CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END AS link,  `type`,  contentType,  pagetitle,  longtitle,  description,  link_attributes,  published,  pub_date,  unpub_date,  modex_site_htmlsnippet_id,  modx_site_snippet_id,  content";
$proto1["m_strFrom"] = "FROM modx_site_content";
$proto1["m_strWhere"] = "(parent =0)";
$proto1["m_strOrderBy"] = "ORDER BY id DESC";
$proto1["m_strTail"] = "";
	
						;
			$proto1["cipherer"] = null;
$proto3=array();
$proto3["m_sql"] = "parent =0";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=0";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto1["m_where"] = $obj;
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

$proto1["m_having"] = $obj;
$proto1["m_fieldlist"] = array();
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto7["m_sql"] = "id";
$proto7["m_srcTableName"] = "modx_site_content_dash";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto1["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END"
));

$proto9["m_sql"] = "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END";
$proto9["m_srcTableName"] = "modx_site_content_dash";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "url";
$obj = new SQLFieldListItem($proto9);

$proto1["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END"
));

$proto11["m_sql"] = "CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END";
$proto11["m_srcTableName"] = "modx_site_content_dash";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "link";
$obj = new SQLFieldListItem($proto11);

$proto1["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto13["m_sql"] = "`type`";
$proto13["m_srcTableName"] = "modx_site_content_dash";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto1["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "contentType",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto15["m_sql"] = "contentType";
$proto15["m_srcTableName"] = "modx_site_content_dash";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto1["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pagetitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto17["m_sql"] = "pagetitle";
$proto17["m_srcTableName"] = "modx_site_content_dash";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto1["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "longtitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto19["m_sql"] = "longtitle";
$proto19["m_srcTableName"] = "modx_site_content_dash";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto1["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto21["m_sql"] = "description";
$proto21["m_srcTableName"] = "modx_site_content_dash";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto1["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "link_attributes",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto23["m_sql"] = "link_attributes";
$proto23["m_srcTableName"] = "modx_site_content_dash";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto1["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "published",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto25["m_sql"] = "published";
$proto25["m_srcTableName"] = "modx_site_content_dash";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto1["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "pub_date",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto27["m_sql"] = "pub_date";
$proto27["m_srcTableName"] = "modx_site_content_dash";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto1["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "unpub_date",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto29["m_sql"] = "unpub_date";
$proto29["m_srcTableName"] = "modx_site_content_dash";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto1["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "modex_site_htmlsnippet_id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto31["m_sql"] = "modex_site_htmlsnippet_id";
$proto31["m_srcTableName"] = "modx_site_content_dash";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto1["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "modx_site_snippet_id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto33["m_sql"] = "modx_site_snippet_id";
$proto33["m_srcTableName"] = "modx_site_content_dash";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto1["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto35["m_sql"] = "content";
$proto35["m_srcTableName"] = "modx_site_content_dash";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "modx_site_content";
$proto38["m_srcTableName"] = "modx_site_content_dash";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "type";
$proto38["m_columns"][] = "contentType";
$proto38["m_columns"][] = "pagetitle";
$proto38["m_columns"][] = "longtitle";
$proto38["m_columns"][] = "description";
$proto38["m_columns"][] = "alias";
$proto38["m_columns"][] = "link_attributes";
$proto38["m_columns"][] = "published";
$proto38["m_columns"][] = "pub_date";
$proto38["m_columns"][] = "unpub_date";
$proto38["m_columns"][] = "parent";
$proto38["m_columns"][] = "isfolder";
$proto38["m_columns"][] = "introtext";
$proto38["m_columns"][] = "content";
$proto38["m_columns"][] = "richtext";
$proto38["m_columns"][] = "template";
$proto38["m_columns"][] = "menuindex";
$proto38["m_columns"][] = "searchable";
$proto38["m_columns"][] = "cacheable";
$proto38["m_columns"][] = "createdby";
$proto38["m_columns"][] = "createdon";
$proto38["m_columns"][] = "editedby";
$proto38["m_columns"][] = "editedon";
$proto38["m_columns"][] = "deleted";
$proto38["m_columns"][] = "deletedon";
$proto38["m_columns"][] = "deletedby";
$proto38["m_columns"][] = "publishedon";
$proto38["m_columns"][] = "publishedby";
$proto38["m_columns"][] = "menutitle";
$proto38["m_columns"][] = "donthit";
$proto38["m_columns"][] = "haskeywords";
$proto38["m_columns"][] = "hasmetatags";
$proto38["m_columns"][] = "privateweb";
$proto38["m_columns"][] = "privatemgr";
$proto38["m_columns"][] = "content_dispo";
$proto38["m_columns"][] = "hidemenu";
$proto38["m_columns"][] = "alias_visible";
$proto38["m_columns"][] = "modex_site_htmlsnippet_id";
$proto38["m_columns"][] = "modx_site_snippet_id";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "modx_site_content";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "modx_site_content_dash";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto1["m_fromlist"][]=$obj;
$proto1["m_groupby"] = array();
$proto1["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_dash"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto1["m_orderby"][]=$obj;					
$proto1["m_srcTableName"]="modx_site_content_dash";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_modx_site_content_dash = createSqlQuery_modx_site_content_dash();


	
						;

															

$tdatamodx_site_content_dash[".sqlquery"] = $queryData_modx_site_content_dash;

$tableEvents["modx_site_content_dash"] = new eventsBase;
$tdatamodx_site_content_dash[".hasEvents"] = false;

?>
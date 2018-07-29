<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_site_content_child = array();
	$tdatamodx_site_content_child[".truncateText"] = true;
	$tdatamodx_site_content_child[".NumberOfChars"] = 20;
	$tdatamodx_site_content_child[".ShortName"] = "modx_site_content_child";
	$tdatamodx_site_content_child[".OwnerID"] = "";
	$tdatamodx_site_content_child[".OriginalTable"] = "modx_site_content";

//	field labels
$fieldLabelsmodx_site_content_child = array();
$fieldToolTipsmodx_site_content_child = array();
$pageTitlesmodx_site_content_child = array();
$placeHoldersmodx_site_content_child = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_site_content_child["Japanese"] = array();
	$fieldToolTipsmodx_site_content_child["Japanese"] = array();
	$placeHoldersmodx_site_content_child["Japanese"] = array();
	$pageTitlesmodx_site_content_child["Japanese"] = array();
	$fieldLabelsmodx_site_content_child["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_site_content_child["Japanese"]["id"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["id"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["type"] = "Type";
	$fieldToolTipsmodx_site_content_child["Japanese"]["type"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["type"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["contentType"] = "Content Type";
	$fieldToolTipsmodx_site_content_child["Japanese"]["contentType"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["contentType"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodx_site_content_child["Japanese"]["pagetitle"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["pagetitle"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodx_site_content_child["Japanese"]["longtitle"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["longtitle"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["description"] = "Description";
	$fieldToolTipsmodx_site_content_child["Japanese"]["description"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["description"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["alias"] = "Alias";
	$fieldToolTipsmodx_site_content_child["Japanese"]["alias"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["alias"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodx_site_content_child["Japanese"]["link_attributes"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["link_attributes"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["published"] = "Published";
	$fieldToolTipsmodx_site_content_child["Japanese"]["published"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["published"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_content_child["Japanese"]["pub_date"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["pub_date"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_content_child["Japanese"]["unpub_date"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["unpub_date"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["parent"] = "Parent";
	$fieldToolTipsmodx_site_content_child["Japanese"]["parent"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["parent"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["isfolder"] = "Isfolder";
	$fieldToolTipsmodx_site_content_child["Japanese"]["isfolder"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["isfolder"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["introtext"] = "Introtext";
	$fieldToolTipsmodx_site_content_child["Japanese"]["introtext"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["introtext"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["content"] = "Content";
	$fieldToolTipsmodx_site_content_child["Japanese"]["content"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["content"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["richtext"] = "Richtext";
	$fieldToolTipsmodx_site_content_child["Japanese"]["richtext"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["richtext"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["template"] = "Template";
	$fieldToolTipsmodx_site_content_child["Japanese"]["template"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["template"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["menuindex"] = "Menuindex";
	$fieldToolTipsmodx_site_content_child["Japanese"]["menuindex"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["menuindex"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["searchable"] = "Searchable";
	$fieldToolTipsmodx_site_content_child["Japanese"]["searchable"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["searchable"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["cacheable"] = "Cacheable";
	$fieldToolTipsmodx_site_content_child["Japanese"]["cacheable"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["cacheable"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["createdby"] = "Createdby";
	$fieldToolTipsmodx_site_content_child["Japanese"]["createdby"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["createdby"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["createdon"] = "Createdon";
	$fieldToolTipsmodx_site_content_child["Japanese"]["createdon"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["createdon"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["editedby"] = "Editedby";
	$fieldToolTipsmodx_site_content_child["Japanese"]["editedby"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["editedby"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["editedon"] = "Editedon";
	$fieldToolTipsmodx_site_content_child["Japanese"]["editedon"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["editedon"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["deleted"] = "Deleted";
	$fieldToolTipsmodx_site_content_child["Japanese"]["deleted"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["deleted"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["deletedon"] = "Deletedon";
	$fieldToolTipsmodx_site_content_child["Japanese"]["deletedon"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["deletedon"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["deletedby"] = "Deletedby";
	$fieldToolTipsmodx_site_content_child["Japanese"]["deletedby"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["deletedby"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["publishedon"] = "Publishedon";
	$fieldToolTipsmodx_site_content_child["Japanese"]["publishedon"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["publishedon"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["publishedby"] = "Publishedby";
	$fieldToolTipsmodx_site_content_child["Japanese"]["publishedby"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["publishedby"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["menutitle"] = "Menutitle";
	$fieldToolTipsmodx_site_content_child["Japanese"]["menutitle"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["menutitle"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["donthit"] = "Donthit";
	$fieldToolTipsmodx_site_content_child["Japanese"]["donthit"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["donthit"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["haskeywords"] = "Haskeywords";
	$fieldToolTipsmodx_site_content_child["Japanese"]["haskeywords"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["haskeywords"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["hasmetatags"] = "Hasmetatags";
	$fieldToolTipsmodx_site_content_child["Japanese"]["hasmetatags"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["hasmetatags"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["privateweb"] = "Privateweb";
	$fieldToolTipsmodx_site_content_child["Japanese"]["privateweb"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["privateweb"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["privatemgr"] = "Privatemgr";
	$fieldToolTipsmodx_site_content_child["Japanese"]["privatemgr"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["privatemgr"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["content_dispo"] = "Content Dispo";
	$fieldToolTipsmodx_site_content_child["Japanese"]["content_dispo"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["content_dispo"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["hidemenu"] = "Hidemenu";
	$fieldToolTipsmodx_site_content_child["Japanese"]["hidemenu"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["hidemenu"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["alias_visible"] = "Alias Visible";
	$fieldToolTipsmodx_site_content_child["Japanese"]["alias_visible"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["alias_visible"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldToolTipsmodx_site_content_child["Japanese"]["modex_site_htmlsnippet_id"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["modex_site_htmlsnippet_id"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["modx_site_snippet_id"] = "Modx Site Snippet Id";
	$fieldToolTipsmodx_site_content_child["Japanese"]["modx_site_snippet_id"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["modx_site_snippet_id"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["url"] = "Url";
	$fieldToolTipsmodx_site_content_child["Japanese"]["url"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["url"] = "";
	$fieldLabelsmodx_site_content_child["Japanese"]["link"] = "Link";
	$fieldToolTipsmodx_site_content_child["Japanese"]["link"] = "";
	$placeHoldersmodx_site_content_child["Japanese"]["link"] = "";
	if (count($fieldToolTipsmodx_site_content_child["Japanese"]))
		$tdatamodx_site_content_child[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_site_content_child["English"] = array();
	$fieldToolTipsmodx_site_content_child["English"] = array();
	$placeHoldersmodx_site_content_child["English"] = array();
	$pageTitlesmodx_site_content_child["English"] = array();
	$fieldLabelsmodx_site_content_child["English"]["link"] = "Link";
	$fieldToolTipsmodx_site_content_child["English"]["link"] = "";
	$placeHoldersmodx_site_content_child["English"]["link"] = "";
	$fieldLabelsmodx_site_content_child["English"]["id"] = "Id";
	$fieldToolTipsmodx_site_content_child["English"]["id"] = "";
	$placeHoldersmodx_site_content_child["English"]["id"] = "";
	$fieldLabelsmodx_site_content_child["English"]["url"] = "Url";
	$fieldToolTipsmodx_site_content_child["English"]["url"] = "";
	$placeHoldersmodx_site_content_child["English"]["url"] = "";
	$fieldLabelsmodx_site_content_child["English"]["type"] = "Type";
	$fieldToolTipsmodx_site_content_child["English"]["type"] = "";
	$placeHoldersmodx_site_content_child["English"]["type"] = "";
	$fieldLabelsmodx_site_content_child["English"]["contentType"] = "Content Type";
	$fieldToolTipsmodx_site_content_child["English"]["contentType"] = "";
	$placeHoldersmodx_site_content_child["English"]["contentType"] = "";
	$fieldLabelsmodx_site_content_child["English"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodx_site_content_child["English"]["pagetitle"] = "";
	$placeHoldersmodx_site_content_child["English"]["pagetitle"] = "";
	$fieldLabelsmodx_site_content_child["English"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodx_site_content_child["English"]["longtitle"] = "";
	$placeHoldersmodx_site_content_child["English"]["longtitle"] = "";
	$fieldLabelsmodx_site_content_child["English"]["description"] = "Description";
	$fieldToolTipsmodx_site_content_child["English"]["description"] = "";
	$placeHoldersmodx_site_content_child["English"]["description"] = "";
	$fieldLabelsmodx_site_content_child["English"]["alias"] = "Alias";
	$fieldToolTipsmodx_site_content_child["English"]["alias"] = "";
	$placeHoldersmodx_site_content_child["English"]["alias"] = "";
	$fieldLabelsmodx_site_content_child["English"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodx_site_content_child["English"]["link_attributes"] = "";
	$placeHoldersmodx_site_content_child["English"]["link_attributes"] = "";
	$fieldLabelsmodx_site_content_child["English"]["published"] = "Published";
	$fieldToolTipsmodx_site_content_child["English"]["published"] = "";
	$placeHoldersmodx_site_content_child["English"]["published"] = "";
	$fieldLabelsmodx_site_content_child["English"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_content_child["English"]["pub_date"] = "";
	$placeHoldersmodx_site_content_child["English"]["pub_date"] = "";
	$fieldLabelsmodx_site_content_child["English"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_content_child["English"]["unpub_date"] = "";
	$placeHoldersmodx_site_content_child["English"]["unpub_date"] = "";
	$fieldLabelsmodx_site_content_child["English"]["parent"] = "Parent";
	$fieldToolTipsmodx_site_content_child["English"]["parent"] = "";
	$placeHoldersmodx_site_content_child["English"]["parent"] = "";
	$fieldLabelsmodx_site_content_child["English"]["isfolder"] = "Isfolder";
	$fieldToolTipsmodx_site_content_child["English"]["isfolder"] = "";
	$placeHoldersmodx_site_content_child["English"]["isfolder"] = "";
	$fieldLabelsmodx_site_content_child["English"]["introtext"] = "Introtext";
	$fieldToolTipsmodx_site_content_child["English"]["introtext"] = "";
	$placeHoldersmodx_site_content_child["English"]["introtext"] = "";
	$fieldLabelsmodx_site_content_child["English"]["content"] = "Content";
	$fieldToolTipsmodx_site_content_child["English"]["content"] = "";
	$placeHoldersmodx_site_content_child["English"]["content"] = "";
	$fieldLabelsmodx_site_content_child["English"]["richtext"] = "Richtext";
	$fieldToolTipsmodx_site_content_child["English"]["richtext"] = "";
	$placeHoldersmodx_site_content_child["English"]["richtext"] = "";
	$fieldLabelsmodx_site_content_child["English"]["template"] = "Template";
	$fieldToolTipsmodx_site_content_child["English"]["template"] = "";
	$placeHoldersmodx_site_content_child["English"]["template"] = "";
	$fieldLabelsmodx_site_content_child["English"]["menuindex"] = "Menuindex";
	$fieldToolTipsmodx_site_content_child["English"]["menuindex"] = "";
	$placeHoldersmodx_site_content_child["English"]["menuindex"] = "";
	$fieldLabelsmodx_site_content_child["English"]["searchable"] = "Searchable";
	$fieldToolTipsmodx_site_content_child["English"]["searchable"] = "";
	$placeHoldersmodx_site_content_child["English"]["searchable"] = "";
	$fieldLabelsmodx_site_content_child["English"]["cacheable"] = "Cacheable";
	$fieldToolTipsmodx_site_content_child["English"]["cacheable"] = "";
	$placeHoldersmodx_site_content_child["English"]["cacheable"] = "";
	$fieldLabelsmodx_site_content_child["English"]["createdby"] = "Createdby";
	$fieldToolTipsmodx_site_content_child["English"]["createdby"] = "";
	$placeHoldersmodx_site_content_child["English"]["createdby"] = "";
	$fieldLabelsmodx_site_content_child["English"]["createdon"] = "Createdon";
	$fieldToolTipsmodx_site_content_child["English"]["createdon"] = "";
	$placeHoldersmodx_site_content_child["English"]["createdon"] = "";
	$fieldLabelsmodx_site_content_child["English"]["editedby"] = "Editedby";
	$fieldToolTipsmodx_site_content_child["English"]["editedby"] = "";
	$placeHoldersmodx_site_content_child["English"]["editedby"] = "";
	$fieldLabelsmodx_site_content_child["English"]["editedon"] = "Editedon";
	$fieldToolTipsmodx_site_content_child["English"]["editedon"] = "";
	$placeHoldersmodx_site_content_child["English"]["editedon"] = "";
	$fieldLabelsmodx_site_content_child["English"]["deleted"] = "Deleted";
	$fieldToolTipsmodx_site_content_child["English"]["deleted"] = "";
	$placeHoldersmodx_site_content_child["English"]["deleted"] = "";
	$fieldLabelsmodx_site_content_child["English"]["deletedon"] = "Deletedon";
	$fieldToolTipsmodx_site_content_child["English"]["deletedon"] = "";
	$placeHoldersmodx_site_content_child["English"]["deletedon"] = "";
	$fieldLabelsmodx_site_content_child["English"]["deletedby"] = "Deletedby";
	$fieldToolTipsmodx_site_content_child["English"]["deletedby"] = "";
	$placeHoldersmodx_site_content_child["English"]["deletedby"] = "";
	$fieldLabelsmodx_site_content_child["English"]["publishedon"] = "Publishedon";
	$fieldToolTipsmodx_site_content_child["English"]["publishedon"] = "";
	$placeHoldersmodx_site_content_child["English"]["publishedon"] = "";
	$fieldLabelsmodx_site_content_child["English"]["publishedby"] = "Publishedby";
	$fieldToolTipsmodx_site_content_child["English"]["publishedby"] = "";
	$placeHoldersmodx_site_content_child["English"]["publishedby"] = "";
	$fieldLabelsmodx_site_content_child["English"]["menutitle"] = "Menutitle";
	$fieldToolTipsmodx_site_content_child["English"]["menutitle"] = "";
	$placeHoldersmodx_site_content_child["English"]["menutitle"] = "";
	$fieldLabelsmodx_site_content_child["English"]["donthit"] = "Donthit";
	$fieldToolTipsmodx_site_content_child["English"]["donthit"] = "";
	$placeHoldersmodx_site_content_child["English"]["donthit"] = "";
	$fieldLabelsmodx_site_content_child["English"]["haskeywords"] = "Haskeywords";
	$fieldToolTipsmodx_site_content_child["English"]["haskeywords"] = "";
	$placeHoldersmodx_site_content_child["English"]["haskeywords"] = "";
	$fieldLabelsmodx_site_content_child["English"]["hasmetatags"] = "Hasmetatags";
	$fieldToolTipsmodx_site_content_child["English"]["hasmetatags"] = "";
	$placeHoldersmodx_site_content_child["English"]["hasmetatags"] = "";
	$fieldLabelsmodx_site_content_child["English"]["privateweb"] = "Privateweb";
	$fieldToolTipsmodx_site_content_child["English"]["privateweb"] = "";
	$placeHoldersmodx_site_content_child["English"]["privateweb"] = "";
	$fieldLabelsmodx_site_content_child["English"]["privatemgr"] = "Privatemgr";
	$fieldToolTipsmodx_site_content_child["English"]["privatemgr"] = "";
	$placeHoldersmodx_site_content_child["English"]["privatemgr"] = "";
	$fieldLabelsmodx_site_content_child["English"]["content_dispo"] = "Content Dispo";
	$fieldToolTipsmodx_site_content_child["English"]["content_dispo"] = "";
	$placeHoldersmodx_site_content_child["English"]["content_dispo"] = "";
	$fieldLabelsmodx_site_content_child["English"]["hidemenu"] = "Hidemenu";
	$fieldToolTipsmodx_site_content_child["English"]["hidemenu"] = "";
	$placeHoldersmodx_site_content_child["English"]["hidemenu"] = "";
	$fieldLabelsmodx_site_content_child["English"]["alias_visible"] = "Alias Visible";
	$fieldToolTipsmodx_site_content_child["English"]["alias_visible"] = "";
	$placeHoldersmodx_site_content_child["English"]["alias_visible"] = "";
	$fieldLabelsmodx_site_content_child["English"]["modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldToolTipsmodx_site_content_child["English"]["modex_site_htmlsnippet_id"] = "";
	$placeHoldersmodx_site_content_child["English"]["modex_site_htmlsnippet_id"] = "";
	$fieldLabelsmodx_site_content_child["English"]["modx_site_snippet_id"] = "Modx Site Snippet Id";
	$fieldToolTipsmodx_site_content_child["English"]["modx_site_snippet_id"] = "";
	$placeHoldersmodx_site_content_child["English"]["modx_site_snippet_id"] = "";
	if (count($fieldToolTipsmodx_site_content_child["English"]))
		$tdatamodx_site_content_child[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_site_content_child[""] = array();
	$fieldToolTipsmodx_site_content_child[""] = array();
	$placeHoldersmodx_site_content_child[""] = array();
	$pageTitlesmodx_site_content_child[""] = array();
	if (count($fieldToolTipsmodx_site_content_child[""]))
		$tdatamodx_site_content_child[".isUseToolTips"] = true;
}


	$tdatamodx_site_content_child[".NCSearch"] = true;



$tdatamodx_site_content_child[".shortTableName"] = "modx_site_content_child";
$tdatamodx_site_content_child[".nSecOptions"] = 0;
$tdatamodx_site_content_child[".recsPerRowPrint"] = 1;
$tdatamodx_site_content_child[".mainTableOwnerID"] = "";
$tdatamodx_site_content_child[".moveNext"] = 0;
$tdatamodx_site_content_child[".entityType"] = 1;

$tdatamodx_site_content_child[".strOriginalTableName"] = "modx_site_content";

	



$tdatamodx_site_content_child[".showAddInPopup"] = false;

$tdatamodx_site_content_child[".showEditInPopup"] = false;

$tdatamodx_site_content_child[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdatamodx_site_content_child[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_site_content_child[".fieldsForRegister"] = array();
	
$tdatamodx_site_content_child[".listAjax"] = false;

	$tdatamodx_site_content_child[".audit"] = true;

	$tdatamodx_site_content_child[".locking"] = false;

$tdatamodx_site_content_child[".edit"] = true;
$tdatamodx_site_content_child[".afterEditAction"] = 1;
$tdatamodx_site_content_child[".closePopupAfterEdit"] = 1;
$tdatamodx_site_content_child[".afterEditActionDetTable"] = "";

$tdatamodx_site_content_child[".add"] = true;
$tdatamodx_site_content_child[".afterAddAction"] = 1;
$tdatamodx_site_content_child[".closePopupAfterAdd"] = 1;
$tdatamodx_site_content_child[".afterAddActionDetTable"] = "";

$tdatamodx_site_content_child[".list"] = true;

$tdatamodx_site_content_child[".inlineEdit"] = true;

$tdatamodx_site_content_child[".updateSelected"] = true;

$tdatamodx_site_content_child[".reorderRecordsByHeader"] = true;
$tdatamodx_site_content_child[".createSortByDropdown"] = true;
$tdatamodx_site_content_child[".strSortControlSettingsJSON"] = "";

$tdatamodx_site_content_child[".strClickActionJSON"] = "{\"fields\":{\"alias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"alias_visible\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cacheable\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"content\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}},\"contentType\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"content_dispo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"createdby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"createdon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deleted\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deletedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deletedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"donthit\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"editedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"editedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haskeywords\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hasmetatags\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hidemenu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"introtext\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"isfolder\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"link\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"link_attributes\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"longtitle\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"menuindex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"menutitle\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"pagetitle\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"parent\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"privatemgr\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"privateweb\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"pub_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"published\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"publishedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"publishedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"richtext\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"searchable\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"template\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"unpub_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"url\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}},\"row\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}}";


$tdatamodx_site_content_child[".inlineAdd"] = true;
$tdatamodx_site_content_child[".copy"] = true;
$tdatamodx_site_content_child[".view"] = true;

$tdatamodx_site_content_child[".import"] = true;

$tdatamodx_site_content_child[".exportTo"] = true;

$tdatamodx_site_content_child[".printFriendly"] = true;

$tdatamodx_site_content_child[".delete"] = true;

$tdatamodx_site_content_child[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdatamodx_site_content_child[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamodx_site_content_child[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodx_site_content_child[".searchSaving"] = true;
//

$tdatamodx_site_content_child[".showSearchPanel"] = true;
		$tdatamodx_site_content_child[".flexibleSearch"] = true;

$tdatamodx_site_content_child[".isUseAjaxSuggest"] = true;

$tdatamodx_site_content_child[".rowHighlite"] = true;



																

$tdatamodx_site_content_child[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_site_content_child[".buttonsAdded"] = false;

$tdatamodx_site_content_child[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_site_content_child[".isUseTimeForSearch"] = false;



$tdatamodx_site_content_child[".badgeColor"] = "6b8e23";


$tdatamodx_site_content_child[".allSearchFields"] = array();
$tdatamodx_site_content_child[".filterFields"] = array();
$tdatamodx_site_content_child[".requiredSearchFields"] = array();

$tdatamodx_site_content_child[".allSearchFields"][] = "link";
	$tdatamodx_site_content_child[".allSearchFields"][] = "url";
	$tdatamodx_site_content_child[".allSearchFields"][] = "content";
	$tdatamodx_site_content_child[".allSearchFields"][] = "id";
	$tdatamodx_site_content_child[".allSearchFields"][] = "menutitle";
	$tdatamodx_site_content_child[".allSearchFields"][] = "longtitle";
	$tdatamodx_site_content_child[".allSearchFields"][] = "pagetitle";
	$tdatamodx_site_content_child[".allSearchFields"][] = "template";
	$tdatamodx_site_content_child[".allSearchFields"][] = "publishedon";
	$tdatamodx_site_content_child[".allSearchFields"][] = "description";
	$tdatamodx_site_content_child[".allSearchFields"][] = "pub_date";
	$tdatamodx_site_content_child[".allSearchFields"][] = "alias";
	$tdatamodx_site_content_child[".allSearchFields"][] = "alias_visible";
	$tdatamodx_site_content_child[".allSearchFields"][] = "published";
	$tdatamodx_site_content_child[".allSearchFields"][] = "introtext";
	$tdatamodx_site_content_child[".allSearchFields"][] = "menuindex";
	$tdatamodx_site_content_child[".allSearchFields"][] = "richtext";
	$tdatamodx_site_content_child[".allSearchFields"][] = "modx_site_snippet_id";
	$tdatamodx_site_content_child[".allSearchFields"][] = "modex_site_htmlsnippet_id";
	$tdatamodx_site_content_child[".allSearchFields"][] = "type";
	$tdatamodx_site_content_child[".allSearchFields"][] = "link_attributes";
	$tdatamodx_site_content_child[".allSearchFields"][] = "parent";
	$tdatamodx_site_content_child[".allSearchFields"][] = "contentType";
	$tdatamodx_site_content_child[".allSearchFields"][] = "searchable";
	$tdatamodx_site_content_child[".allSearchFields"][] = "cacheable";
	$tdatamodx_site_content_child[".allSearchFields"][] = "unpub_date";
	$tdatamodx_site_content_child[".allSearchFields"][] = "isfolder";
	$tdatamodx_site_content_child[".allSearchFields"][] = "createdby";
	$tdatamodx_site_content_child[".allSearchFields"][] = "createdon";
	$tdatamodx_site_content_child[".allSearchFields"][] = "editedby";
	$tdatamodx_site_content_child[".allSearchFields"][] = "editedon";
	$tdatamodx_site_content_child[".allSearchFields"][] = "deleted";
	$tdatamodx_site_content_child[".allSearchFields"][] = "deletedon";
	$tdatamodx_site_content_child[".allSearchFields"][] = "deletedby";
	$tdatamodx_site_content_child[".allSearchFields"][] = "publishedby";
	$tdatamodx_site_content_child[".allSearchFields"][] = "donthit";
	$tdatamodx_site_content_child[".allSearchFields"][] = "haskeywords";
	$tdatamodx_site_content_child[".allSearchFields"][] = "hasmetatags";
	$tdatamodx_site_content_child[".allSearchFields"][] = "privateweb";
	$tdatamodx_site_content_child[".allSearchFields"][] = "privatemgr";
	$tdatamodx_site_content_child[".allSearchFields"][] = "content_dispo";
	$tdatamodx_site_content_child[".allSearchFields"][] = "hidemenu";
	

$tdatamodx_site_content_child[".googleLikeFields"] = array();
$tdatamodx_site_content_child[".googleLikeFields"][] = "id";
$tdatamodx_site_content_child[".googleLikeFields"][] = "url";
$tdatamodx_site_content_child[".googleLikeFields"][] = "link";
$tdatamodx_site_content_child[".googleLikeFields"][] = "type";
$tdatamodx_site_content_child[".googleLikeFields"][] = "contentType";
$tdatamodx_site_content_child[".googleLikeFields"][] = "pagetitle";
$tdatamodx_site_content_child[".googleLikeFields"][] = "longtitle";
$tdatamodx_site_content_child[".googleLikeFields"][] = "description";
$tdatamodx_site_content_child[".googleLikeFields"][] = "alias";
$tdatamodx_site_content_child[".googleLikeFields"][] = "link_attributes";
$tdatamodx_site_content_child[".googleLikeFields"][] = "published";
$tdatamodx_site_content_child[".googleLikeFields"][] = "pub_date";
$tdatamodx_site_content_child[".googleLikeFields"][] = "unpub_date";
$tdatamodx_site_content_child[".googleLikeFields"][] = "parent";
$tdatamodx_site_content_child[".googleLikeFields"][] = "isfolder";
$tdatamodx_site_content_child[".googleLikeFields"][] = "introtext";
$tdatamodx_site_content_child[".googleLikeFields"][] = "content";
$tdatamodx_site_content_child[".googleLikeFields"][] = "richtext";
$tdatamodx_site_content_child[".googleLikeFields"][] = "template";
$tdatamodx_site_content_child[".googleLikeFields"][] = "menuindex";
$tdatamodx_site_content_child[".googleLikeFields"][] = "searchable";
$tdatamodx_site_content_child[".googleLikeFields"][] = "cacheable";
$tdatamodx_site_content_child[".googleLikeFields"][] = "createdby";
$tdatamodx_site_content_child[".googleLikeFields"][] = "createdon";
$tdatamodx_site_content_child[".googleLikeFields"][] = "editedby";
$tdatamodx_site_content_child[".googleLikeFields"][] = "editedon";
$tdatamodx_site_content_child[".googleLikeFields"][] = "deleted";
$tdatamodx_site_content_child[".googleLikeFields"][] = "deletedon";
$tdatamodx_site_content_child[".googleLikeFields"][] = "deletedby";
$tdatamodx_site_content_child[".googleLikeFields"][] = "publishedon";
$tdatamodx_site_content_child[".googleLikeFields"][] = "publishedby";
$tdatamodx_site_content_child[".googleLikeFields"][] = "menutitle";
$tdatamodx_site_content_child[".googleLikeFields"][] = "donthit";
$tdatamodx_site_content_child[".googleLikeFields"][] = "haskeywords";
$tdatamodx_site_content_child[".googleLikeFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".googleLikeFields"][] = "privateweb";
$tdatamodx_site_content_child[".googleLikeFields"][] = "privatemgr";
$tdatamodx_site_content_child[".googleLikeFields"][] = "content_dispo";
$tdatamodx_site_content_child[".googleLikeFields"][] = "hidemenu";
$tdatamodx_site_content_child[".googleLikeFields"][] = "alias_visible";
$tdatamodx_site_content_child[".googleLikeFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".googleLikeFields"][] = "modx_site_snippet_id";

$tdatamodx_site_content_child[".panelSearchFields"] = array();
$tdatamodx_site_content_child[".searchPanelOptions"] = array();
$tdatamodx_site_content_child[".panelSearchFields"][] = "link";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "url";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "content";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "id";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "menutitle";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "longtitle";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "pagetitle";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "template";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "publishedon";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "description";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "pub_date";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "alias";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "alias_visible";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "published";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "introtext";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "menuindex";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "richtext";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "modx_site_snippet_id";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "modex_site_htmlsnippet_id";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "type";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "link_attributes";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "parent";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "contentType";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "searchable";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "cacheable";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "unpub_date";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "isfolder";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "createdby";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "createdon";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "editedby";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "editedon";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "deleted";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "deletedon";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "deletedby";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "publishedby";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "donthit";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "haskeywords";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "hasmetatags";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "privateweb";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "privatemgr";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "content_dispo";
	$tdatamodx_site_content_child[".panelSearchFields"][] = "hidemenu";
	
$tdatamodx_site_content_child[".advSearchFields"] = array();
$tdatamodx_site_content_child[".advSearchFields"][] = "link";
$tdatamodx_site_content_child[".advSearchFields"][] = "url";
$tdatamodx_site_content_child[".advSearchFields"][] = "content";
$tdatamodx_site_content_child[".advSearchFields"][] = "id";
$tdatamodx_site_content_child[".advSearchFields"][] = "menutitle";
$tdatamodx_site_content_child[".advSearchFields"][] = "longtitle";
$tdatamodx_site_content_child[".advSearchFields"][] = "pagetitle";
$tdatamodx_site_content_child[".advSearchFields"][] = "template";
$tdatamodx_site_content_child[".advSearchFields"][] = "publishedon";
$tdatamodx_site_content_child[".advSearchFields"][] = "description";
$tdatamodx_site_content_child[".advSearchFields"][] = "pub_date";
$tdatamodx_site_content_child[".advSearchFields"][] = "alias";
$tdatamodx_site_content_child[".advSearchFields"][] = "alias_visible";
$tdatamodx_site_content_child[".advSearchFields"][] = "published";
$tdatamodx_site_content_child[".advSearchFields"][] = "introtext";
$tdatamodx_site_content_child[".advSearchFields"][] = "menuindex";
$tdatamodx_site_content_child[".advSearchFields"][] = "richtext";
$tdatamodx_site_content_child[".advSearchFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".advSearchFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".advSearchFields"][] = "type";
$tdatamodx_site_content_child[".advSearchFields"][] = "link_attributes";
$tdatamodx_site_content_child[".advSearchFields"][] = "parent";
$tdatamodx_site_content_child[".advSearchFields"][] = "contentType";
$tdatamodx_site_content_child[".advSearchFields"][] = "searchable";
$tdatamodx_site_content_child[".advSearchFields"][] = "cacheable";
$tdatamodx_site_content_child[".advSearchFields"][] = "unpub_date";
$tdatamodx_site_content_child[".advSearchFields"][] = "isfolder";
$tdatamodx_site_content_child[".advSearchFields"][] = "createdby";
$tdatamodx_site_content_child[".advSearchFields"][] = "createdon";
$tdatamodx_site_content_child[".advSearchFields"][] = "editedby";
$tdatamodx_site_content_child[".advSearchFields"][] = "editedon";
$tdatamodx_site_content_child[".advSearchFields"][] = "deleted";
$tdatamodx_site_content_child[".advSearchFields"][] = "deletedon";
$tdatamodx_site_content_child[".advSearchFields"][] = "deletedby";
$tdatamodx_site_content_child[".advSearchFields"][] = "publishedby";
$tdatamodx_site_content_child[".advSearchFields"][] = "donthit";
$tdatamodx_site_content_child[".advSearchFields"][] = "haskeywords";
$tdatamodx_site_content_child[".advSearchFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".advSearchFields"][] = "privateweb";
$tdatamodx_site_content_child[".advSearchFields"][] = "privatemgr";
$tdatamodx_site_content_child[".advSearchFields"][] = "content_dispo";
$tdatamodx_site_content_child[".advSearchFields"][] = "hidemenu";

$tdatamodx_site_content_child[".tableType"] = "list";

$tdatamodx_site_content_child[".printerPageOrientation"] = 0;
$tdatamodx_site_content_child[".nPrinterPageScale"] = 100;

$tdatamodx_site_content_child[".nPrinterSplitRecords"] = 40;

$tdatamodx_site_content_child[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_site_content_child[".geocodingEnabled"] = false;





$tdatamodx_site_content_child[".listGridLayout"] = 3;





// view page pdf
$tdatamodx_site_content_child[".isViewPagePDF"] = true;
$tdatamodx_site_content_child[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamodx_site_content_child[".isPrinterPagePDF"] = true;
$tdatamodx_site_content_child[".nPrinterPagePDFScale"] = 100;


$tdatamodx_site_content_child[".pageSize"] = 20;

$tdatamodx_site_content_child[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_site_content_child[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_site_content_child[".orderindexes"] = array();
$tdatamodx_site_content_child[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdatamodx_site_content_child[".sqlHead"] = "SELECT id,  CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=480\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=480\",\"></iframe>\")      ELSE  null END AS url,  CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END AS link,  `type`,  contentType,  pagetitle,  longtitle,  description,  `alias`,  link_attributes,  published,  pub_date,  unpub_date,  parent,  isfolder,  introtext,  content,  richtext,  template,  menuindex,  searchable,  cacheable,  createdby,  createdon,  editedby,  editedon,  deleted,  deletedon,  deletedby,  publishedon,  publishedby,  menutitle,  donthit,  haskeywords,  hasmetatags,  privateweb,  privatemgr,  content_dispo,  hidemenu,  alias_visible,  modex_site_htmlsnippet_id,  modx_site_snippet_id";
$tdatamodx_site_content_child[".sqlFrom"] = "FROM modx_site_content";
$tdatamodx_site_content_child[".sqlWhereExpr"] = "";
$tdatamodx_site_content_child[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "content";
	
		$tabFields[] = "pagetitle";
	
		$tabFields[] = "longtitle";
	
		$tabFields[] = "introtext";
	
		$tabFields[] = "menuindex";
	
		$tabFields[] = "description";
	
		$tabFields[] = "template";
	
		$tabFields[] = "type";
	
		$tabFields[] = "contentType";
	
		$tabFields[] = "alias";
$arrEditTabs[] = array('tabId'=>'New_tab11',
					   'tabName'=>"New tab1",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "pub_date";
	
		$tabFields[] = "published";
	
		$tabFields[] = "publishedon";
	
		$tabFields[] = "modex_site_htmlsnippet_id";
	
		$tabFields[] = "richtext";
	
		$tabFields[] = "modx_site_snippet_id";
	
		$tabFields[] = "link_attributes";
	
		$tabFields[] = "unpub_date";
	
		$tabFields[] = "parent";
	
		$tabFields[] = "isfolder";
	
		$tabFields[] = "searchable";
	
		$tabFields[] = "cacheable";
	
		$tabFields[] = "createdby";
	
		$tabFields[] = "createdon";
	
		$tabFields[] = "editedby";
	
		$tabFields[] = "editedon";
	
		$tabFields[] = "deleted";
	
		$tabFields[] = "deletedon";
	
		$tabFields[] = "deletedby";
	
		$tabFields[] = "publishedby";
	
		$tabFields[] = "menutitle";
	
		$tabFields[] = "donthit";
	
		$tabFields[] = "haskeywords";
	
		$tabFields[] = "hasmetatags";
	
		$tabFields[] = "privateweb";
	
		$tabFields[] = "privatemgr";
	
		$tabFields[] = "content_dispo";
	
		$tabFields[] = "hidemenu";
	
		$tabFields[] = "alias_visible";
$arrEditTabs[] = array('tabId'=>'New_tab1',
					   'tabName'=>"New tab",
					   'nType'=>'0',
					   'nOrder'=>13,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatamodx_site_content_child[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "content";
	
		$tabFields[] = "introtext";
	
		$tabFields[] = "menuindex";
	
		$tabFields[] = "richtext";
	
		$tabFields[] = "modx_site_snippet_id";
	
		$tabFields[] = "modex_site_htmlsnippet_id";
	
		$tabFields[] = "template";
	
		$tabFields[] = "type";
	
		$tabFields[] = "publishedon";
	
		$tabFields[] = "contentType";
	
		$tabFields[] = "pagetitle";
	
		$tabFields[] = "longtitle";
	
		$tabFields[] = "description";
	
		$tabFields[] = "alias";
	
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
	
		$tabFields[] = "parent";
	
		$tabFields[] = "isfolder";
	
		$tabFields[] = "searchable";
	
		$tabFields[] = "cacheable";
	
		$tabFields[] = "createdby";
	
		$tabFields[] = "createdon";
	
		$tabFields[] = "editedby";
	
		$tabFields[] = "editedon";
	
		$tabFields[] = "deleted";
	
		$tabFields[] = "deletedon";
	
		$tabFields[] = "deletedby";
	
		$tabFields[] = "publishedby";
	
		$tabFields[] = "menutitle";
	
		$tabFields[] = "donthit";
	
		$tabFields[] = "haskeywords";
	
		$tabFields[] = "hasmetatags";
	
		$tabFields[] = "privateweb";
	
		$tabFields[] = "privatemgr";
	
		$tabFields[] = "content_dispo";
	
		$tabFields[] = "hidemenu";
	
		$tabFields[] = "alias_visible";
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
$tdatamodx_site_content_child[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
	$tabFields[] = "content";
	$tabFields[] = "introtext";
	$tabFields[] = "menuindex";
	$tabFields[] = "richtext";
	$tabFields[] = "modx_site_snippet_id";
	$tabFields[] = "modex_site_htmlsnippet_id";
	$tabFields[] = "template";
	$tabFields[] = "type";
	$tabFields[] = "publishedon";
	$tabFields[] = "contentType";
	$tabFields[] = "pagetitle";
	$tabFields[] = "longtitle";
	$tabFields[] = "description";
	$tabFields[] = "alias";
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
	$tabFields[] = "parent";
	$tabFields[] = "isfolder";
	$tabFields[] = "searchable";
	$tabFields[] = "cacheable";
	$tabFields[] = "createdby";
	$tabFields[] = "createdon";
	$tabFields[] = "editedby";
	$tabFields[] = "editedon";
	$tabFields[] = "deleted";
	$tabFields[] = "deletedon";
	$tabFields[] = "deletedby";
	$tabFields[] = "publishedby";
	$tabFields[] = "menutitle";
	$tabFields[] = "donthit";
	$tabFields[] = "haskeywords";
	$tabFields[] = "hasmetatags";
	$tabFields[] = "privateweb";
	$tabFields[] = "privatemgr";
	$tabFields[] = "content_dispo";
	$tabFields[] = "hidemenu";
	$tabFields[] = "alias_visible";
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
$tdatamodx_site_content_child[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_site_content_child[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_site_content_child[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_site_content_child[".highlightSearchResults"] = true;

$tableKeysmodx_site_content_child = array();
$tableKeysmodx_site_content_child[] = "id";
$tdatamodx_site_content_child[".Keys"] = $tableKeysmodx_site_content_child;

$tdatamodx_site_content_child[".listFields"] = array();
$tdatamodx_site_content_child[".listFields"][] = "link";
$tdatamodx_site_content_child[".listFields"][] = "url";
$tdatamodx_site_content_child[".listFields"][] = "content";
$tdatamodx_site_content_child[".listFields"][] = "id";
$tdatamodx_site_content_child[".listFields"][] = "menutitle";
$tdatamodx_site_content_child[".listFields"][] = "longtitle";
$tdatamodx_site_content_child[".listFields"][] = "pagetitle";
$tdatamodx_site_content_child[".listFields"][] = "template";
$tdatamodx_site_content_child[".listFields"][] = "description";
$tdatamodx_site_content_child[".listFields"][] = "alias";
$tdatamodx_site_content_child[".listFields"][] = "alias_visible";
$tdatamodx_site_content_child[".listFields"][] = "published";
$tdatamodx_site_content_child[".listFields"][] = "menuindex";
$tdatamodx_site_content_child[".listFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".listFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".listFields"][] = "type";
$tdatamodx_site_content_child[".listFields"][] = "link_attributes";
$tdatamodx_site_content_child[".listFields"][] = "parent";
$tdatamodx_site_content_child[".listFields"][] = "searchable";
$tdatamodx_site_content_child[".listFields"][] = "cacheable";

$tdatamodx_site_content_child[".hideMobileList"] = array();


$tdatamodx_site_content_child[".viewFields"] = array();
$tdatamodx_site_content_child[".viewFields"][] = "link";
$tdatamodx_site_content_child[".viewFields"][] = "url";
$tdatamodx_site_content_child[".viewFields"][] = "content";
$tdatamodx_site_content_child[".viewFields"][] = "introtext";
$tdatamodx_site_content_child[".viewFields"][] = "id";
$tdatamodx_site_content_child[".viewFields"][] = "menuindex";
$tdatamodx_site_content_child[".viewFields"][] = "richtext";
$tdatamodx_site_content_child[".viewFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".viewFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".viewFields"][] = "template";
$tdatamodx_site_content_child[".viewFields"][] = "type";
$tdatamodx_site_content_child[".viewFields"][] = "publishedon";
$tdatamodx_site_content_child[".viewFields"][] = "contentType";
$tdatamodx_site_content_child[".viewFields"][] = "pagetitle";
$tdatamodx_site_content_child[".viewFields"][] = "longtitle";
$tdatamodx_site_content_child[".viewFields"][] = "description";
$tdatamodx_site_content_child[".viewFields"][] = "alias";
$tdatamodx_site_content_child[".viewFields"][] = "link_attributes";
$tdatamodx_site_content_child[".viewFields"][] = "published";
$tdatamodx_site_content_child[".viewFields"][] = "pub_date";
$tdatamodx_site_content_child[".viewFields"][] = "unpub_date";
$tdatamodx_site_content_child[".viewFields"][] = "parent";
$tdatamodx_site_content_child[".viewFields"][] = "isfolder";
$tdatamodx_site_content_child[".viewFields"][] = "searchable";
$tdatamodx_site_content_child[".viewFields"][] = "cacheable";
$tdatamodx_site_content_child[".viewFields"][] = "createdby";
$tdatamodx_site_content_child[".viewFields"][] = "createdon";
$tdatamodx_site_content_child[".viewFields"][] = "editedby";
$tdatamodx_site_content_child[".viewFields"][] = "editedon";
$tdatamodx_site_content_child[".viewFields"][] = "deleted";
$tdatamodx_site_content_child[".viewFields"][] = "deletedon";
$tdatamodx_site_content_child[".viewFields"][] = "deletedby";
$tdatamodx_site_content_child[".viewFields"][] = "publishedby";
$tdatamodx_site_content_child[".viewFields"][] = "menutitle";
$tdatamodx_site_content_child[".viewFields"][] = "donthit";
$tdatamodx_site_content_child[".viewFields"][] = "haskeywords";
$tdatamodx_site_content_child[".viewFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".viewFields"][] = "privateweb";
$tdatamodx_site_content_child[".viewFields"][] = "privatemgr";
$tdatamodx_site_content_child[".viewFields"][] = "content_dispo";
$tdatamodx_site_content_child[".viewFields"][] = "hidemenu";
$tdatamodx_site_content_child[".viewFields"][] = "alias_visible";

$tdatamodx_site_content_child[".addFields"] = array();
$tdatamodx_site_content_child[".addFields"][] = "content";
$tdatamodx_site_content_child[".addFields"][] = "introtext";
$tdatamodx_site_content_child[".addFields"][] = "menuindex";
$tdatamodx_site_content_child[".addFields"][] = "richtext";
$tdatamodx_site_content_child[".addFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".addFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".addFields"][] = "template";
$tdatamodx_site_content_child[".addFields"][] = "type";
$tdatamodx_site_content_child[".addFields"][] = "publishedon";
$tdatamodx_site_content_child[".addFields"][] = "contentType";
$tdatamodx_site_content_child[".addFields"][] = "pagetitle";
$tdatamodx_site_content_child[".addFields"][] = "longtitle";
$tdatamodx_site_content_child[".addFields"][] = "description";
$tdatamodx_site_content_child[".addFields"][] = "alias";
$tdatamodx_site_content_child[".addFields"][] = "link_attributes";
$tdatamodx_site_content_child[".addFields"][] = "published";
$tdatamodx_site_content_child[".addFields"][] = "pub_date";
$tdatamodx_site_content_child[".addFields"][] = "unpub_date";
$tdatamodx_site_content_child[".addFields"][] = "parent";
$tdatamodx_site_content_child[".addFields"][] = "isfolder";
$tdatamodx_site_content_child[".addFields"][] = "searchable";
$tdatamodx_site_content_child[".addFields"][] = "cacheable";
$tdatamodx_site_content_child[".addFields"][] = "createdby";
$tdatamodx_site_content_child[".addFields"][] = "createdon";
$tdatamodx_site_content_child[".addFields"][] = "editedby";
$tdatamodx_site_content_child[".addFields"][] = "editedon";
$tdatamodx_site_content_child[".addFields"][] = "deleted";
$tdatamodx_site_content_child[".addFields"][] = "deletedon";
$tdatamodx_site_content_child[".addFields"][] = "deletedby";
$tdatamodx_site_content_child[".addFields"][] = "publishedby";
$tdatamodx_site_content_child[".addFields"][] = "menutitle";
$tdatamodx_site_content_child[".addFields"][] = "donthit";
$tdatamodx_site_content_child[".addFields"][] = "haskeywords";
$tdatamodx_site_content_child[".addFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".addFields"][] = "privateweb";
$tdatamodx_site_content_child[".addFields"][] = "privatemgr";
$tdatamodx_site_content_child[".addFields"][] = "content_dispo";
$tdatamodx_site_content_child[".addFields"][] = "hidemenu";
$tdatamodx_site_content_child[".addFields"][] = "alias_visible";

$tdatamodx_site_content_child[".masterListFields"] = array();
$tdatamodx_site_content_child[".masterListFields"][] = "link";
$tdatamodx_site_content_child[".masterListFields"][] = "url";
$tdatamodx_site_content_child[".masterListFields"][] = "content";
$tdatamodx_site_content_child[".masterListFields"][] = "id";
$tdatamodx_site_content_child[".masterListFields"][] = "menutitle";
$tdatamodx_site_content_child[".masterListFields"][] = "longtitle";
$tdatamodx_site_content_child[".masterListFields"][] = "pagetitle";
$tdatamodx_site_content_child[".masterListFields"][] = "template";
$tdatamodx_site_content_child[".masterListFields"][] = "publishedon";
$tdatamodx_site_content_child[".masterListFields"][] = "description";
$tdatamodx_site_content_child[".masterListFields"][] = "pub_date";
$tdatamodx_site_content_child[".masterListFields"][] = "alias";
$tdatamodx_site_content_child[".masterListFields"][] = "alias_visible";
$tdatamodx_site_content_child[".masterListFields"][] = "published";
$tdatamodx_site_content_child[".masterListFields"][] = "introtext";
$tdatamodx_site_content_child[".masterListFields"][] = "menuindex";
$tdatamodx_site_content_child[".masterListFields"][] = "richtext";
$tdatamodx_site_content_child[".masterListFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".masterListFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".masterListFields"][] = "type";
$tdatamodx_site_content_child[".masterListFields"][] = "link_attributes";
$tdatamodx_site_content_child[".masterListFields"][] = "parent";
$tdatamodx_site_content_child[".masterListFields"][] = "contentType";
$tdatamodx_site_content_child[".masterListFields"][] = "searchable";
$tdatamodx_site_content_child[".masterListFields"][] = "cacheable";
$tdatamodx_site_content_child[".masterListFields"][] = "unpub_date";
$tdatamodx_site_content_child[".masterListFields"][] = "isfolder";
$tdatamodx_site_content_child[".masterListFields"][] = "createdby";
$tdatamodx_site_content_child[".masterListFields"][] = "createdon";
$tdatamodx_site_content_child[".masterListFields"][] = "editedby";
$tdatamodx_site_content_child[".masterListFields"][] = "editedon";
$tdatamodx_site_content_child[".masterListFields"][] = "deleted";
$tdatamodx_site_content_child[".masterListFields"][] = "deletedon";
$tdatamodx_site_content_child[".masterListFields"][] = "deletedby";
$tdatamodx_site_content_child[".masterListFields"][] = "publishedby";
$tdatamodx_site_content_child[".masterListFields"][] = "donthit";
$tdatamodx_site_content_child[".masterListFields"][] = "haskeywords";
$tdatamodx_site_content_child[".masterListFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".masterListFields"][] = "privateweb";
$tdatamodx_site_content_child[".masterListFields"][] = "privatemgr";
$tdatamodx_site_content_child[".masterListFields"][] = "content_dispo";
$tdatamodx_site_content_child[".masterListFields"][] = "hidemenu";

$tdatamodx_site_content_child[".inlineAddFields"] = array();
$tdatamodx_site_content_child[".inlineAddFields"][] = "url";
$tdatamodx_site_content_child[".inlineAddFields"][] = "content";
$tdatamodx_site_content_child[".inlineAddFields"][] = "menutitle";
$tdatamodx_site_content_child[".inlineAddFields"][] = "longtitle";
$tdatamodx_site_content_child[".inlineAddFields"][] = "pagetitle";
$tdatamodx_site_content_child[".inlineAddFields"][] = "template";
$tdatamodx_site_content_child[".inlineAddFields"][] = "description";
$tdatamodx_site_content_child[".inlineAddFields"][] = "alias";
$tdatamodx_site_content_child[".inlineAddFields"][] = "alias_visible";
$tdatamodx_site_content_child[".inlineAddFields"][] = "published";
$tdatamodx_site_content_child[".inlineAddFields"][] = "menuindex";
$tdatamodx_site_content_child[".inlineAddFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".inlineAddFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".inlineAddFields"][] = "type";
$tdatamodx_site_content_child[".inlineAddFields"][] = "link_attributes";
$tdatamodx_site_content_child[".inlineAddFields"][] = "parent";
$tdatamodx_site_content_child[".inlineAddFields"][] = "searchable";

$tdatamodx_site_content_child[".editFields"] = array();
$tdatamodx_site_content_child[".editFields"][] = "content";
$tdatamodx_site_content_child[".editFields"][] = "pagetitle";
$tdatamodx_site_content_child[".editFields"][] = "longtitle";
$tdatamodx_site_content_child[".editFields"][] = "introtext";
$tdatamodx_site_content_child[".editFields"][] = "menuindex";
$tdatamodx_site_content_child[".editFields"][] = "description";
$tdatamodx_site_content_child[".editFields"][] = "template";
$tdatamodx_site_content_child[".editFields"][] = "type";
$tdatamodx_site_content_child[".editFields"][] = "contentType";
$tdatamodx_site_content_child[".editFields"][] = "alias";
$tdatamodx_site_content_child[".editFields"][] = "pub_date";
$tdatamodx_site_content_child[".editFields"][] = "published";
$tdatamodx_site_content_child[".editFields"][] = "publishedon";
$tdatamodx_site_content_child[".editFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".editFields"][] = "richtext";
$tdatamodx_site_content_child[".editFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".editFields"][] = "link_attributes";
$tdatamodx_site_content_child[".editFields"][] = "unpub_date";
$tdatamodx_site_content_child[".editFields"][] = "parent";
$tdatamodx_site_content_child[".editFields"][] = "isfolder";
$tdatamodx_site_content_child[".editFields"][] = "searchable";
$tdatamodx_site_content_child[".editFields"][] = "cacheable";
$tdatamodx_site_content_child[".editFields"][] = "createdby";
$tdatamodx_site_content_child[".editFields"][] = "createdon";
$tdatamodx_site_content_child[".editFields"][] = "editedby";
$tdatamodx_site_content_child[".editFields"][] = "editedon";
$tdatamodx_site_content_child[".editFields"][] = "deleted";
$tdatamodx_site_content_child[".editFields"][] = "deletedon";
$tdatamodx_site_content_child[".editFields"][] = "deletedby";
$tdatamodx_site_content_child[".editFields"][] = "publishedby";
$tdatamodx_site_content_child[".editFields"][] = "menutitle";
$tdatamodx_site_content_child[".editFields"][] = "donthit";
$tdatamodx_site_content_child[".editFields"][] = "haskeywords";
$tdatamodx_site_content_child[".editFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".editFields"][] = "privateweb";
$tdatamodx_site_content_child[".editFields"][] = "privatemgr";
$tdatamodx_site_content_child[".editFields"][] = "content_dispo";
$tdatamodx_site_content_child[".editFields"][] = "hidemenu";
$tdatamodx_site_content_child[".editFields"][] = "alias_visible";

$tdatamodx_site_content_child[".inlineEditFields"] = array();
$tdatamodx_site_content_child[".inlineEditFields"][] = "content";
$tdatamodx_site_content_child[".inlineEditFields"][] = "menutitle";
$tdatamodx_site_content_child[".inlineEditFields"][] = "longtitle";
$tdatamodx_site_content_child[".inlineEditFields"][] = "pagetitle";
$tdatamodx_site_content_child[".inlineEditFields"][] = "template";
$tdatamodx_site_content_child[".inlineEditFields"][] = "description";
$tdatamodx_site_content_child[".inlineEditFields"][] = "alias";
$tdatamodx_site_content_child[".inlineEditFields"][] = "alias_visible";
$tdatamodx_site_content_child[".inlineEditFields"][] = "published";
$tdatamodx_site_content_child[".inlineEditFields"][] = "menuindex";
$tdatamodx_site_content_child[".inlineEditFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".inlineEditFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".inlineEditFields"][] = "type";
$tdatamodx_site_content_child[".inlineEditFields"][] = "link_attributes";
$tdatamodx_site_content_child[".inlineEditFields"][] = "parent";
$tdatamodx_site_content_child[".inlineEditFields"][] = "searchable";

$tdatamodx_site_content_child[".updateSelectedFields"] = array();
$tdatamodx_site_content_child[".updateSelectedFields"][] = "content";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "pagetitle";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "longtitle";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "introtext";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "menuindex";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "description";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "template";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "type";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "contentType";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "alias";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "pub_date";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "published";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "publishedon";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "richtext";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "link_attributes";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "unpub_date";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "parent";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "isfolder";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "searchable";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "cacheable";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "createdby";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "createdon";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "editedby";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "editedon";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "deleted";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "deletedon";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "deletedby";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "publishedby";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "menutitle";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "donthit";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "haskeywords";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "privateweb";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "privatemgr";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "content_dispo";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "hidemenu";
$tdatamodx_site_content_child[".updateSelectedFields"][] = "alias_visible";


$tdatamodx_site_content_child[".exportFields"] = array();
$tdatamodx_site_content_child[".exportFields"][] = "link";
$tdatamodx_site_content_child[".exportFields"][] = "url";
$tdatamodx_site_content_child[".exportFields"][] = "content";
$tdatamodx_site_content_child[".exportFields"][] = "id";
$tdatamodx_site_content_child[".exportFields"][] = "menutitle";
$tdatamodx_site_content_child[".exportFields"][] = "longtitle";
$tdatamodx_site_content_child[".exportFields"][] = "pagetitle";
$tdatamodx_site_content_child[".exportFields"][] = "template";
$tdatamodx_site_content_child[".exportFields"][] = "publishedon";
$tdatamodx_site_content_child[".exportFields"][] = "description";
$tdatamodx_site_content_child[".exportFields"][] = "pub_date";
$tdatamodx_site_content_child[".exportFields"][] = "alias";
$tdatamodx_site_content_child[".exportFields"][] = "alias_visible";
$tdatamodx_site_content_child[".exportFields"][] = "published";
$tdatamodx_site_content_child[".exportFields"][] = "introtext";
$tdatamodx_site_content_child[".exportFields"][] = "menuindex";
$tdatamodx_site_content_child[".exportFields"][] = "richtext";
$tdatamodx_site_content_child[".exportFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".exportFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".exportFields"][] = "type";
$tdatamodx_site_content_child[".exportFields"][] = "link_attributes";
$tdatamodx_site_content_child[".exportFields"][] = "parent";
$tdatamodx_site_content_child[".exportFields"][] = "contentType";
$tdatamodx_site_content_child[".exportFields"][] = "searchable";
$tdatamodx_site_content_child[".exportFields"][] = "cacheable";
$tdatamodx_site_content_child[".exportFields"][] = "unpub_date";
$tdatamodx_site_content_child[".exportFields"][] = "isfolder";
$tdatamodx_site_content_child[".exportFields"][] = "createdby";
$tdatamodx_site_content_child[".exportFields"][] = "createdon";
$tdatamodx_site_content_child[".exportFields"][] = "editedby";
$tdatamodx_site_content_child[".exportFields"][] = "editedon";
$tdatamodx_site_content_child[".exportFields"][] = "deleted";
$tdatamodx_site_content_child[".exportFields"][] = "deletedon";
$tdatamodx_site_content_child[".exportFields"][] = "deletedby";
$tdatamodx_site_content_child[".exportFields"][] = "publishedby";
$tdatamodx_site_content_child[".exportFields"][] = "donthit";
$tdatamodx_site_content_child[".exportFields"][] = "haskeywords";
$tdatamodx_site_content_child[".exportFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".exportFields"][] = "privateweb";
$tdatamodx_site_content_child[".exportFields"][] = "privatemgr";
$tdatamodx_site_content_child[".exportFields"][] = "content_dispo";
$tdatamodx_site_content_child[".exportFields"][] = "hidemenu";

$tdatamodx_site_content_child[".importFields"] = array();
$tdatamodx_site_content_child[".importFields"][] = "id";
$tdatamodx_site_content_child[".importFields"][] = "url";
$tdatamodx_site_content_child[".importFields"][] = "link";
$tdatamodx_site_content_child[".importFields"][] = "type";
$tdatamodx_site_content_child[".importFields"][] = "contentType";
$tdatamodx_site_content_child[".importFields"][] = "pagetitle";
$tdatamodx_site_content_child[".importFields"][] = "longtitle";
$tdatamodx_site_content_child[".importFields"][] = "description";
$tdatamodx_site_content_child[".importFields"][] = "alias";
$tdatamodx_site_content_child[".importFields"][] = "link_attributes";
$tdatamodx_site_content_child[".importFields"][] = "published";
$tdatamodx_site_content_child[".importFields"][] = "pub_date";
$tdatamodx_site_content_child[".importFields"][] = "unpub_date";
$tdatamodx_site_content_child[".importFields"][] = "parent";
$tdatamodx_site_content_child[".importFields"][] = "isfolder";
$tdatamodx_site_content_child[".importFields"][] = "introtext";
$tdatamodx_site_content_child[".importFields"][] = "content";
$tdatamodx_site_content_child[".importFields"][] = "richtext";
$tdatamodx_site_content_child[".importFields"][] = "template";
$tdatamodx_site_content_child[".importFields"][] = "menuindex";
$tdatamodx_site_content_child[".importFields"][] = "searchable";
$tdatamodx_site_content_child[".importFields"][] = "cacheable";
$tdatamodx_site_content_child[".importFields"][] = "createdby";
$tdatamodx_site_content_child[".importFields"][] = "createdon";
$tdatamodx_site_content_child[".importFields"][] = "editedby";
$tdatamodx_site_content_child[".importFields"][] = "editedon";
$tdatamodx_site_content_child[".importFields"][] = "deleted";
$tdatamodx_site_content_child[".importFields"][] = "deletedon";
$tdatamodx_site_content_child[".importFields"][] = "deletedby";
$tdatamodx_site_content_child[".importFields"][] = "publishedon";
$tdatamodx_site_content_child[".importFields"][] = "publishedby";
$tdatamodx_site_content_child[".importFields"][] = "menutitle";
$tdatamodx_site_content_child[".importFields"][] = "donthit";
$tdatamodx_site_content_child[".importFields"][] = "haskeywords";
$tdatamodx_site_content_child[".importFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".importFields"][] = "privateweb";
$tdatamodx_site_content_child[".importFields"][] = "privatemgr";
$tdatamodx_site_content_child[".importFields"][] = "content_dispo";
$tdatamodx_site_content_child[".importFields"][] = "hidemenu";
$tdatamodx_site_content_child[".importFields"][] = "alias_visible";
$tdatamodx_site_content_child[".importFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".importFields"][] = "modx_site_snippet_id";

$tdatamodx_site_content_child[".printFields"] = array();
$tdatamodx_site_content_child[".printFields"][] = "link";
$tdatamodx_site_content_child[".printFields"][] = "url";
$tdatamodx_site_content_child[".printFields"][] = "content";
$tdatamodx_site_content_child[".printFields"][] = "id";
$tdatamodx_site_content_child[".printFields"][] = "menutitle";
$tdatamodx_site_content_child[".printFields"][] = "longtitle";
$tdatamodx_site_content_child[".printFields"][] = "pagetitle";
$tdatamodx_site_content_child[".printFields"][] = "template";
$tdatamodx_site_content_child[".printFields"][] = "publishedon";
$tdatamodx_site_content_child[".printFields"][] = "description";
$tdatamodx_site_content_child[".printFields"][] = "pub_date";
$tdatamodx_site_content_child[".printFields"][] = "alias";
$tdatamodx_site_content_child[".printFields"][] = "alias_visible";
$tdatamodx_site_content_child[".printFields"][] = "published";
$tdatamodx_site_content_child[".printFields"][] = "introtext";
$tdatamodx_site_content_child[".printFields"][] = "menuindex";
$tdatamodx_site_content_child[".printFields"][] = "richtext";
$tdatamodx_site_content_child[".printFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content_child[".printFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content_child[".printFields"][] = "type";
$tdatamodx_site_content_child[".printFields"][] = "link_attributes";
$tdatamodx_site_content_child[".printFields"][] = "parent";
$tdatamodx_site_content_child[".printFields"][] = "contentType";
$tdatamodx_site_content_child[".printFields"][] = "searchable";
$tdatamodx_site_content_child[".printFields"][] = "cacheable";
$tdatamodx_site_content_child[".printFields"][] = "unpub_date";
$tdatamodx_site_content_child[".printFields"][] = "isfolder";
$tdatamodx_site_content_child[".printFields"][] = "createdby";
$tdatamodx_site_content_child[".printFields"][] = "createdon";
$tdatamodx_site_content_child[".printFields"][] = "editedby";
$tdatamodx_site_content_child[".printFields"][] = "editedon";
$tdatamodx_site_content_child[".printFields"][] = "deleted";
$tdatamodx_site_content_child[".printFields"][] = "deletedon";
$tdatamodx_site_content_child[".printFields"][] = "deletedby";
$tdatamodx_site_content_child[".printFields"][] = "publishedby";
$tdatamodx_site_content_child[".printFields"][] = "donthit";
$tdatamodx_site_content_child[".printFields"][] = "haskeywords";
$tdatamodx_site_content_child[".printFields"][] = "hasmetatags";
$tdatamodx_site_content_child[".printFields"][] = "privateweb";
$tdatamodx_site_content_child[".printFields"][] = "privatemgr";
$tdatamodx_site_content_child[".printFields"][] = "content_dispo";
$tdatamodx_site_content_child[".printFields"][] = "hidemenu";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","id");
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




	$tdatamodx_site_content_child["id"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=480\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=480\",\"></iframe>\")      ELSE  null END";

	
	
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




	$tdatamodx_site_content_child["url"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","link");
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




	$tdatamodx_site_content_child["link"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","type");
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




	$tdatamodx_site_content_child["type"] = $fdata;
//	contentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contentType";
	$fdata["GoodName"] = "contentType";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","contentType");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatamodx_site_content_child["contentType"] = $fdata;
//	pagetitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pagetitle";
	$fdata["GoodName"] = "pagetitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","pagetitle");
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




	$tdatamodx_site_content_child["pagetitle"] = $fdata;
//	longtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "longtitle";
	$fdata["GoodName"] = "longtitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","longtitle");
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




	$tdatamodx_site_content_child["longtitle"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","description");
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




	$tdatamodx_site_content_child["description"] = $fdata;
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","alias");
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

		$fdata["strField"] = "alias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`alias`";

	
	
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
			$edata["EditParams"].= " maxlength=245";

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




	$tdatamodx_site_content_child["alias"] = $fdata;
//	link_attributes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "link_attributes";
	$fdata["GoodName"] = "link_attributes";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","link_attributes");
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




	$tdatamodx_site_content_child["link_attributes"] = $fdata;
//	published
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "published";
	$fdata["GoodName"] = "published";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","published");
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




	$tdatamodx_site_content_child["published"] = $fdata;
//	pub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pub_date";
	$fdata["GoodName"] = "pub_date";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","pub_date");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatamodx_site_content_child["pub_date"] = $fdata;
//	unpub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "unpub_date";
	$fdata["GoodName"] = "unpub_date";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","unpub_date");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatamodx_site_content_child["unpub_date"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","parent");
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

		$fdata["strField"] = "parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parent";

	
	
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




	$tdatamodx_site_content_child["parent"] = $fdata;
//	isfolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "isfolder";
	$fdata["GoodName"] = "isfolder";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","isfolder");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "isfolder";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isfolder";

	
	
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




	$tdatamodx_site_content_child["isfolder"] = $fdata;
//	introtext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "introtext";
	$fdata["GoodName"] = "introtext";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","introtext");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "introtext";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "introtext";

	
	
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




	$tdatamodx_site_content_child["introtext"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","content");
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

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 400;
			$edata["nCols"] = 800;

	
	
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




	$tdatamodx_site_content_child["content"] = $fdata;
//	richtext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "richtext";
	$fdata["GoodName"] = "richtext";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","richtext");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "richtext";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "richtext";

	
	
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




	$tdatamodx_site_content_child["richtext"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","template");
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

		$fdata["strField"] = "template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template";

	
	
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
	$edata["LookupTable"] = "modx_site_templates";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "templatename";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamodx_site_content_child["template"] = $fdata;
//	menuindex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "menuindex";
	$fdata["GoodName"] = "menuindex";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","menuindex");
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

		$fdata["strField"] = "menuindex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menuindex";

	
	
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




	$tdatamodx_site_content_child["menuindex"] = $fdata;
//	searchable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "searchable";
	$fdata["GoodName"] = "searchable";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","searchable");
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

		$fdata["strField"] = "searchable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "searchable";

	
	
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




	$tdatamodx_site_content_child["searchable"] = $fdata;
//	cacheable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cacheable";
	$fdata["GoodName"] = "cacheable";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","cacheable");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cacheable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cacheable";

	
	
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




	$tdatamodx_site_content_child["cacheable"] = $fdata;
//	createdby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "createdby";
	$fdata["GoodName"] = "createdby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","createdby");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "createdby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createdby";

	
	
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




	$tdatamodx_site_content_child["createdby"] = $fdata;
//	createdon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "createdon";
	$fdata["GoodName"] = "createdon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","createdon");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "createdon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createdon";

	
	
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




	$tdatamodx_site_content_child["createdon"] = $fdata;
//	editedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "editedby";
	$fdata["GoodName"] = "editedby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","editedby");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "editedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "editedby";

	
	
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




	$tdatamodx_site_content_child["editedby"] = $fdata;
//	editedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "editedon";
	$fdata["GoodName"] = "editedon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","editedon");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "editedon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "editedon";

	
	
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




	$tdatamodx_site_content_child["editedon"] = $fdata;
//	deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "deleted";
	$fdata["GoodName"] = "deleted";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","deleted");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "deleted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deleted";

	
	
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




	$tdatamodx_site_content_child["deleted"] = $fdata;
//	deletedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "deletedon";
	$fdata["GoodName"] = "deletedon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","deletedon");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "deletedon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deletedon";

	
	
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




	$tdatamodx_site_content_child["deletedon"] = $fdata;
//	deletedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "deletedby";
	$fdata["GoodName"] = "deletedby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","deletedby");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "deletedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deletedby";

	
	
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




	$tdatamodx_site_content_child["deletedby"] = $fdata;
//	publishedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "publishedon";
	$fdata["GoodName"] = "publishedon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","publishedon");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "publishedon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "publishedon";

	
	
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




	$tdatamodx_site_content_child["publishedon"] = $fdata;
//	publishedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "publishedby";
	$fdata["GoodName"] = "publishedby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","publishedby");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "publishedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "publishedby";

	
	
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




	$tdatamodx_site_content_child["publishedby"] = $fdata;
//	menutitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "menutitle";
	$fdata["GoodName"] = "menutitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","menutitle");
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

		$fdata["strField"] = "menutitle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menutitle";

	
	
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




	$tdatamodx_site_content_child["menutitle"] = $fdata;
//	donthit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "donthit";
	$fdata["GoodName"] = "donthit";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","donthit");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "donthit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "donthit";

	
	
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




	$tdatamodx_site_content_child["donthit"] = $fdata;
//	haskeywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "haskeywords";
	$fdata["GoodName"] = "haskeywords";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","haskeywords");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haskeywords";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haskeywords";

	
	
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




	$tdatamodx_site_content_child["haskeywords"] = $fdata;
//	hasmetatags
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "hasmetatags";
	$fdata["GoodName"] = "hasmetatags";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","hasmetatags");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hasmetatags";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hasmetatags";

	
	
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




	$tdatamodx_site_content_child["hasmetatags"] = $fdata;
//	privateweb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "privateweb";
	$fdata["GoodName"] = "privateweb";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","privateweb");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "privateweb";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "privateweb";

	
	
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




	$tdatamodx_site_content_child["privateweb"] = $fdata;
//	privatemgr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "privatemgr";
	$fdata["GoodName"] = "privatemgr";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","privatemgr");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "privatemgr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "privatemgr";

	
	
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




	$tdatamodx_site_content_child["privatemgr"] = $fdata;
//	content_dispo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "content_dispo";
	$fdata["GoodName"] = "content_dispo";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","content_dispo");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content_dispo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content_dispo";

	
	
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




	$tdatamodx_site_content_child["content_dispo"] = $fdata;
//	hidemenu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "hidemenu";
	$fdata["GoodName"] = "hidemenu";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","hidemenu");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hidemenu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hidemenu";

	
	
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




	$tdatamodx_site_content_child["hidemenu"] = $fdata;
//	alias_visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "alias_visible";
	$fdata["GoodName"] = "alias_visible";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","alias_visible");
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

		$fdata["strField"] = "alias_visible";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alias_visible";

	
	
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




	$tdatamodx_site_content_child["alias_visible"] = $fdata;
//	modex_site_htmlsnippet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "modex_site_htmlsnippet_id";
	$fdata["GoodName"] = "modex_site_htmlsnippet_id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","modex_site_htmlsnippet_id");
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




	$tdatamodx_site_content_child["modex_site_htmlsnippet_id"] = $fdata;
//	modx_site_snippet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "modx_site_snippet_id";
	$fdata["GoodName"] = "modx_site_snippet_id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content_child","modx_site_snippet_id");
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




	$tdatamodx_site_content_child["modx_site_snippet_id"] = $fdata;


$tables_data["modx_site_content_child"]=&$tdatamodx_site_content_child;
$field_labels["modx_site_content_child"] = &$fieldLabelsmodx_site_content_child;
$fieldToolTips["modx_site_content_child"] = &$fieldToolTipsmodx_site_content_child;
$placeHolders["modx_site_content_child"] = &$placeHoldersmodx_site_content_child;
$page_titles["modx_site_content_child"] = &$pageTitlesmodx_site_content_child;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_site_content_child"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modx_site_content_child"] = array();


	
				$strOriginalDetailsTable="modx_site_content";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="modx_site_content";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "modx_site_content";
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
					$masterTablesData["modx_site_content_child"][0] = $masterParams;
				$masterTablesData["modx_site_content_child"][0]["masterKeys"] = array();
	$masterTablesData["modx_site_content_child"][0]["masterKeys"][]="id";
				$masterTablesData["modx_site_content_child"][0]["detailKeys"] = array();
	$masterTablesData["modx_site_content_child"][0]["detailKeys"][]="parent";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_site_content_child()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "id,  CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=480\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=480\",\"></iframe>\")      ELSE  null END AS url,  CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END AS link,  `type`,  contentType,  pagetitle,  longtitle,  description,  `alias`,  link_attributes,  published,  pub_date,  unpub_date,  parent,  isfolder,  introtext,  content,  richtext,  template,  menuindex,  searchable,  cacheable,  createdby,  createdon,  editedby,  editedon,  deleted,  deletedon,  deletedby,  publishedon,  publishedby,  menutitle,  donthit,  haskeywords,  hasmetatags,  privateweb,  privatemgr,  content_dispo,  hidemenu,  alias_visible,  modex_site_htmlsnippet_id,  modx_site_snippet_id";
$proto1["m_strFrom"] = "FROM modx_site_content";
$proto1["m_strWhere"] = "";
$proto1["m_strOrderBy"] = "ORDER BY id DESC";
$proto1["m_strTail"] = "";
	
						;
			$proto1["cipherer"] = null;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
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
	"m_srcTableName" => "modx_site_content_child"
));

$proto7["m_sql"] = "id";
$proto7["m_srcTableName"] = "modx_site_content_child";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto1["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=480\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=480\",\"></iframe>\")      ELSE  null END"
));

$proto9["m_sql"] = "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=480\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=480\",\"></iframe>\")      ELSE  null END";
$proto9["m_srcTableName"] = "modx_site_content_child";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "url";
$obj = new SQLFieldListItem($proto9);

$proto1["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END"
));

$proto11["m_sql"] = "CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END";
$proto11["m_srcTableName"] = "modx_site_content_child";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "link";
$obj = new SQLFieldListItem($proto11);

$proto1["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto13["m_sql"] = "`type`";
$proto13["m_srcTableName"] = "modx_site_content_child";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto1["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "contentType",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto15["m_sql"] = "contentType";
$proto15["m_srcTableName"] = "modx_site_content_child";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto1["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pagetitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto17["m_sql"] = "pagetitle";
$proto17["m_srcTableName"] = "modx_site_content_child";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto1["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "longtitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto19["m_sql"] = "longtitle";
$proto19["m_srcTableName"] = "modx_site_content_child";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto1["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto21["m_sql"] = "description";
$proto21["m_srcTableName"] = "modx_site_content_child";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto1["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto23["m_sql"] = "`alias`";
$proto23["m_srcTableName"] = "modx_site_content_child";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto1["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "link_attributes",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto25["m_sql"] = "link_attributes";
$proto25["m_srcTableName"] = "modx_site_content_child";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto1["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "published",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto27["m_sql"] = "published";
$proto27["m_srcTableName"] = "modx_site_content_child";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto1["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "pub_date",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto29["m_sql"] = "pub_date";
$proto29["m_srcTableName"] = "modx_site_content_child";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto1["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "unpub_date",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto31["m_sql"] = "unpub_date";
$proto31["m_srcTableName"] = "modx_site_content_child";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto1["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto33["m_sql"] = "parent";
$proto33["m_srcTableName"] = "modx_site_content_child";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto1["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "isfolder",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto35["m_sql"] = "isfolder";
$proto35["m_srcTableName"] = "modx_site_content_child";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto1["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "introtext",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto37["m_sql"] = "introtext";
$proto37["m_srcTableName"] = "modx_site_content_child";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto1["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto39["m_sql"] = "content";
$proto39["m_srcTableName"] = "modx_site_content_child";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto1["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "richtext",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto41["m_sql"] = "richtext";
$proto41["m_srcTableName"] = "modx_site_content_child";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto1["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto43["m_sql"] = "template";
$proto43["m_srcTableName"] = "modx_site_content_child";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto1["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "menuindex",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto45["m_sql"] = "menuindex";
$proto45["m_srcTableName"] = "modx_site_content_child";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto1["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "searchable",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto47["m_sql"] = "searchable";
$proto47["m_srcTableName"] = "modx_site_content_child";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto1["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "cacheable",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto49["m_sql"] = "cacheable";
$proto49["m_srcTableName"] = "modx_site_content_child";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto1["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "createdby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto51["m_sql"] = "createdby";
$proto51["m_srcTableName"] = "modx_site_content_child";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto1["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "createdon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto53["m_sql"] = "createdon";
$proto53["m_srcTableName"] = "modx_site_content_child";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto1["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "editedby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto55["m_sql"] = "editedby";
$proto55["m_srcTableName"] = "modx_site_content_child";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto1["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "editedon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto57["m_sql"] = "editedon";
$proto57["m_srcTableName"] = "modx_site_content_child";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto1["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto59["m_sql"] = "deleted";
$proto59["m_srcTableName"] = "modx_site_content_child";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto1["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "deletedon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto61["m_sql"] = "deletedon";
$proto61["m_srcTableName"] = "modx_site_content_child";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto1["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "deletedby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto63["m_sql"] = "deletedby";
$proto63["m_srcTableName"] = "modx_site_content_child";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto1["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto65["m_sql"] = "publishedon";
$proto65["m_srcTableName"] = "modx_site_content_child";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto1["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto67["m_sql"] = "publishedby";
$proto67["m_srcTableName"] = "modx_site_content_child";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto1["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "menutitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto69["m_sql"] = "menutitle";
$proto69["m_srcTableName"] = "modx_site_content_child";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto1["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "donthit",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto71["m_sql"] = "donthit";
$proto71["m_srcTableName"] = "modx_site_content_child";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto1["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "haskeywords",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto73["m_sql"] = "haskeywords";
$proto73["m_srcTableName"] = "modx_site_content_child";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto1["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "hasmetatags",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto75["m_sql"] = "hasmetatags";
$proto75["m_srcTableName"] = "modx_site_content_child";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto1["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "privateweb",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto77["m_sql"] = "privateweb";
$proto77["m_srcTableName"] = "modx_site_content_child";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto1["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "privatemgr",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto79["m_sql"] = "privatemgr";
$proto79["m_srcTableName"] = "modx_site_content_child";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto1["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "content_dispo",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto81["m_sql"] = "content_dispo";
$proto81["m_srcTableName"] = "modx_site_content_child";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto1["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "hidemenu",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto83["m_sql"] = "hidemenu";
$proto83["m_srcTableName"] = "modx_site_content_child";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto1["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "alias_visible",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto85["m_sql"] = "alias_visible";
$proto85["m_srcTableName"] = "modx_site_content_child";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto1["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "modex_site_htmlsnippet_id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto87["m_sql"] = "modex_site_htmlsnippet_id";
$proto87["m_srcTableName"] = "modx_site_content_child";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto1["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "modx_site_snippet_id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto89["m_sql"] = "modx_site_snippet_id";
$proto89["m_srcTableName"] = "modx_site_content_child";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto91=array();
$proto91["m_link"] = "SQLL_MAIN";
			$proto92=array();
$proto92["m_strName"] = "modx_site_content";
$proto92["m_srcTableName"] = "modx_site_content_child";
$proto92["m_columns"] = array();
$proto92["m_columns"][] = "id";
$proto92["m_columns"][] = "type";
$proto92["m_columns"][] = "contentType";
$proto92["m_columns"][] = "pagetitle";
$proto92["m_columns"][] = "longtitle";
$proto92["m_columns"][] = "description";
$proto92["m_columns"][] = "alias";
$proto92["m_columns"][] = "link_attributes";
$proto92["m_columns"][] = "published";
$proto92["m_columns"][] = "pub_date";
$proto92["m_columns"][] = "unpub_date";
$proto92["m_columns"][] = "parent";
$proto92["m_columns"][] = "isfolder";
$proto92["m_columns"][] = "introtext";
$proto92["m_columns"][] = "content";
$proto92["m_columns"][] = "richtext";
$proto92["m_columns"][] = "template";
$proto92["m_columns"][] = "menuindex";
$proto92["m_columns"][] = "searchable";
$proto92["m_columns"][] = "cacheable";
$proto92["m_columns"][] = "createdby";
$proto92["m_columns"][] = "createdon";
$proto92["m_columns"][] = "editedby";
$proto92["m_columns"][] = "editedon";
$proto92["m_columns"][] = "deleted";
$proto92["m_columns"][] = "deletedon";
$proto92["m_columns"][] = "deletedby";
$proto92["m_columns"][] = "publishedon";
$proto92["m_columns"][] = "publishedby";
$proto92["m_columns"][] = "menutitle";
$proto92["m_columns"][] = "donthit";
$proto92["m_columns"][] = "haskeywords";
$proto92["m_columns"][] = "hasmetatags";
$proto92["m_columns"][] = "privateweb";
$proto92["m_columns"][] = "privatemgr";
$proto92["m_columns"][] = "content_dispo";
$proto92["m_columns"][] = "hidemenu";
$proto92["m_columns"][] = "alias_visible";
$proto92["m_columns"][] = "modex_site_htmlsnippet_id";
$proto92["m_columns"][] = "modx_site_snippet_id";
$obj = new SQLTable($proto92);

$proto91["m_table"] = $obj;
$proto91["m_sql"] = "modx_site_content";
$proto91["m_alias"] = "";
$proto91["m_srcTableName"] = "modx_site_content_child";
$proto93=array();
$proto93["m_sql"] = "";
$proto93["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto93["m_column"]=$obj;
$proto93["m_contained"] = array();
$proto93["m_strCase"] = "";
$proto93["m_havingmode"] = false;
$proto93["m_inBrackets"] = false;
$proto93["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto93);

$proto91["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto91);

$proto1["m_fromlist"][]=$obj;
$proto1["m_groupby"] = array();
$proto1["m_orderby"] = array();
												$proto95=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content_child"
));

$proto95["m_column"]=$obj;
$proto95["m_bAsc"] = 0;
$proto95["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto95);

$proto1["m_orderby"][]=$obj;					
$proto1["m_srcTableName"]="modx_site_content_child";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_modx_site_content_child = createSqlQuery_modx_site_content_child();


	
						;

																																										

$tdatamodx_site_content_child[".sqlquery"] = $queryData_modx_site_content_child;

$tableEvents["modx_site_content_child"] = new eventsBase;
$tdatamodx_site_content_child[".hasEvents"] = false;

?>
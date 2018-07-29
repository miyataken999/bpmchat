<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_site_content = array();
	$tdatamodx_site_content[".truncateText"] = true;
	$tdatamodx_site_content[".NumberOfChars"] = 20;
	$tdatamodx_site_content[".ShortName"] = "modx_site_content";
	$tdatamodx_site_content[".OwnerID"] = "";
	$tdatamodx_site_content[".OriginalTable"] = "modx_site_content";

//	field labels
$fieldLabelsmodx_site_content = array();
$fieldToolTipsmodx_site_content = array();
$pageTitlesmodx_site_content = array();
$placeHoldersmodx_site_content = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_site_content["Japanese"] = array();
	$fieldToolTipsmodx_site_content["Japanese"] = array();
	$placeHoldersmodx_site_content["Japanese"] = array();
	$pageTitlesmodx_site_content["Japanese"] = array();
	$fieldLabelsmodx_site_content["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_site_content["Japanese"]["id"] = "";
	$placeHoldersmodx_site_content["Japanese"]["id"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["type"] = "Type";
	$fieldToolTipsmodx_site_content["Japanese"]["type"] = "";
	$placeHoldersmodx_site_content["Japanese"]["type"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["contentType"] = "Content Type";
	$fieldToolTipsmodx_site_content["Japanese"]["contentType"] = "";
	$placeHoldersmodx_site_content["Japanese"]["contentType"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodx_site_content["Japanese"]["pagetitle"] = "";
	$placeHoldersmodx_site_content["Japanese"]["pagetitle"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodx_site_content["Japanese"]["longtitle"] = "";
	$placeHoldersmodx_site_content["Japanese"]["longtitle"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["description"] = "Description";
	$fieldToolTipsmodx_site_content["Japanese"]["description"] = "";
	$placeHoldersmodx_site_content["Japanese"]["description"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["alias"] = "Alias";
	$fieldToolTipsmodx_site_content["Japanese"]["alias"] = "";
	$placeHoldersmodx_site_content["Japanese"]["alias"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodx_site_content["Japanese"]["link_attributes"] = "";
	$placeHoldersmodx_site_content["Japanese"]["link_attributes"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["published"] = "Published";
	$fieldToolTipsmodx_site_content["Japanese"]["published"] = "";
	$placeHoldersmodx_site_content["Japanese"]["published"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_content["Japanese"]["pub_date"] = "";
	$placeHoldersmodx_site_content["Japanese"]["pub_date"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_content["Japanese"]["unpub_date"] = "";
	$placeHoldersmodx_site_content["Japanese"]["unpub_date"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["parent"] = "Parent";
	$fieldToolTipsmodx_site_content["Japanese"]["parent"] = "";
	$placeHoldersmodx_site_content["Japanese"]["parent"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["isfolder"] = "Isfolder";
	$fieldToolTipsmodx_site_content["Japanese"]["isfolder"] = "";
	$placeHoldersmodx_site_content["Japanese"]["isfolder"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["introtext"] = "Introtext";
	$fieldToolTipsmodx_site_content["Japanese"]["introtext"] = "";
	$placeHoldersmodx_site_content["Japanese"]["introtext"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["content"] = "Content";
	$fieldToolTipsmodx_site_content["Japanese"]["content"] = "";
	$placeHoldersmodx_site_content["Japanese"]["content"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["richtext"] = "Richtext";
	$fieldToolTipsmodx_site_content["Japanese"]["richtext"] = "";
	$placeHoldersmodx_site_content["Japanese"]["richtext"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["template"] = "Template";
	$fieldToolTipsmodx_site_content["Japanese"]["template"] = "";
	$placeHoldersmodx_site_content["Japanese"]["template"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["menuindex"] = "Menuindex";
	$fieldToolTipsmodx_site_content["Japanese"]["menuindex"] = "";
	$placeHoldersmodx_site_content["Japanese"]["menuindex"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["searchable"] = "Searchable";
	$fieldToolTipsmodx_site_content["Japanese"]["searchable"] = "";
	$placeHoldersmodx_site_content["Japanese"]["searchable"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["cacheable"] = "Cacheable";
	$fieldToolTipsmodx_site_content["Japanese"]["cacheable"] = "";
	$placeHoldersmodx_site_content["Japanese"]["cacheable"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["createdby"] = "Createdby";
	$fieldToolTipsmodx_site_content["Japanese"]["createdby"] = "";
	$placeHoldersmodx_site_content["Japanese"]["createdby"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["createdon"] = "Createdon";
	$fieldToolTipsmodx_site_content["Japanese"]["createdon"] = "";
	$placeHoldersmodx_site_content["Japanese"]["createdon"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["editedby"] = "Editedby";
	$fieldToolTipsmodx_site_content["Japanese"]["editedby"] = "";
	$placeHoldersmodx_site_content["Japanese"]["editedby"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["editedon"] = "Editedon";
	$fieldToolTipsmodx_site_content["Japanese"]["editedon"] = "";
	$placeHoldersmodx_site_content["Japanese"]["editedon"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["deleted"] = "Deleted";
	$fieldToolTipsmodx_site_content["Japanese"]["deleted"] = "";
	$placeHoldersmodx_site_content["Japanese"]["deleted"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["deletedon"] = "Deletedon";
	$fieldToolTipsmodx_site_content["Japanese"]["deletedon"] = "";
	$placeHoldersmodx_site_content["Japanese"]["deletedon"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["deletedby"] = "Deletedby";
	$fieldToolTipsmodx_site_content["Japanese"]["deletedby"] = "";
	$placeHoldersmodx_site_content["Japanese"]["deletedby"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["publishedon"] = "Publishedon";
	$fieldToolTipsmodx_site_content["Japanese"]["publishedon"] = "";
	$placeHoldersmodx_site_content["Japanese"]["publishedon"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["publishedby"] = "Publishedby";
	$fieldToolTipsmodx_site_content["Japanese"]["publishedby"] = "";
	$placeHoldersmodx_site_content["Japanese"]["publishedby"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["menutitle"] = "Menutitle";
	$fieldToolTipsmodx_site_content["Japanese"]["menutitle"] = "";
	$placeHoldersmodx_site_content["Japanese"]["menutitle"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["donthit"] = "Donthit";
	$fieldToolTipsmodx_site_content["Japanese"]["donthit"] = "";
	$placeHoldersmodx_site_content["Japanese"]["donthit"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["haskeywords"] = "Haskeywords";
	$fieldToolTipsmodx_site_content["Japanese"]["haskeywords"] = "";
	$placeHoldersmodx_site_content["Japanese"]["haskeywords"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["hasmetatags"] = "Hasmetatags";
	$fieldToolTipsmodx_site_content["Japanese"]["hasmetatags"] = "";
	$placeHoldersmodx_site_content["Japanese"]["hasmetatags"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["privateweb"] = "Privateweb";
	$fieldToolTipsmodx_site_content["Japanese"]["privateweb"] = "";
	$placeHoldersmodx_site_content["Japanese"]["privateweb"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["privatemgr"] = "Privatemgr";
	$fieldToolTipsmodx_site_content["Japanese"]["privatemgr"] = "";
	$placeHoldersmodx_site_content["Japanese"]["privatemgr"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["content_dispo"] = "Content Dispo";
	$fieldToolTipsmodx_site_content["Japanese"]["content_dispo"] = "";
	$placeHoldersmodx_site_content["Japanese"]["content_dispo"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["hidemenu"] = "Hidemenu";
	$fieldToolTipsmodx_site_content["Japanese"]["hidemenu"] = "";
	$placeHoldersmodx_site_content["Japanese"]["hidemenu"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["alias_visible"] = "Alias Visible";
	$fieldToolTipsmodx_site_content["Japanese"]["alias_visible"] = "";
	$placeHoldersmodx_site_content["Japanese"]["alias_visible"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldToolTipsmodx_site_content["Japanese"]["modex_site_htmlsnippet_id"] = "";
	$placeHoldersmodx_site_content["Japanese"]["modex_site_htmlsnippet_id"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["modx_site_snippet_id"] = "Modx Site Snippet Id";
	$fieldToolTipsmodx_site_content["Japanese"]["modx_site_snippet_id"] = "";
	$placeHoldersmodx_site_content["Japanese"]["modx_site_snippet_id"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["url"] = "Url";
	$fieldToolTipsmodx_site_content["Japanese"]["url"] = "";
	$placeHoldersmodx_site_content["Japanese"]["url"] = "";
	$fieldLabelsmodx_site_content["Japanese"]["link"] = "Link";
	$fieldToolTipsmodx_site_content["Japanese"]["link"] = "";
	$placeHoldersmodx_site_content["Japanese"]["link"] = "";
	if (count($fieldToolTipsmodx_site_content["Japanese"]))
		$tdatamodx_site_content[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_site_content["English"] = array();
	$fieldToolTipsmodx_site_content["English"] = array();
	$placeHoldersmodx_site_content["English"] = array();
	$pageTitlesmodx_site_content["English"] = array();
	$fieldLabelsmodx_site_content["English"]["link"] = "Link";
	$fieldToolTipsmodx_site_content["English"]["link"] = "";
	$placeHoldersmodx_site_content["English"]["link"] = "";
	$fieldLabelsmodx_site_content["English"]["id"] = "Id";
	$fieldToolTipsmodx_site_content["English"]["id"] = "";
	$placeHoldersmodx_site_content["English"]["id"] = "";
	$fieldLabelsmodx_site_content["English"]["url"] = "Url";
	$fieldToolTipsmodx_site_content["English"]["url"] = "";
	$placeHoldersmodx_site_content["English"]["url"] = "";
	$fieldLabelsmodx_site_content["English"]["type"] = "Type";
	$fieldToolTipsmodx_site_content["English"]["type"] = "";
	$placeHoldersmodx_site_content["English"]["type"] = "";
	$fieldLabelsmodx_site_content["English"]["contentType"] = "Content Type";
	$fieldToolTipsmodx_site_content["English"]["contentType"] = "";
	$placeHoldersmodx_site_content["English"]["contentType"] = "";
	$fieldLabelsmodx_site_content["English"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodx_site_content["English"]["pagetitle"] = "";
	$placeHoldersmodx_site_content["English"]["pagetitle"] = "";
	$fieldLabelsmodx_site_content["English"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodx_site_content["English"]["longtitle"] = "";
	$placeHoldersmodx_site_content["English"]["longtitle"] = "";
	$fieldLabelsmodx_site_content["English"]["description"] = "Description";
	$fieldToolTipsmodx_site_content["English"]["description"] = "";
	$placeHoldersmodx_site_content["English"]["description"] = "";
	$fieldLabelsmodx_site_content["English"]["alias"] = "Alias";
	$fieldToolTipsmodx_site_content["English"]["alias"] = "";
	$placeHoldersmodx_site_content["English"]["alias"] = "";
	$fieldLabelsmodx_site_content["English"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodx_site_content["English"]["link_attributes"] = "";
	$placeHoldersmodx_site_content["English"]["link_attributes"] = "";
	$fieldLabelsmodx_site_content["English"]["published"] = "Published";
	$fieldToolTipsmodx_site_content["English"]["published"] = "";
	$placeHoldersmodx_site_content["English"]["published"] = "";
	$fieldLabelsmodx_site_content["English"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_content["English"]["pub_date"] = "";
	$placeHoldersmodx_site_content["English"]["pub_date"] = "";
	$fieldLabelsmodx_site_content["English"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_content["English"]["unpub_date"] = "";
	$placeHoldersmodx_site_content["English"]["unpub_date"] = "";
	$fieldLabelsmodx_site_content["English"]["parent"] = "Parent";
	$fieldToolTipsmodx_site_content["English"]["parent"] = "";
	$placeHoldersmodx_site_content["English"]["parent"] = "";
	$fieldLabelsmodx_site_content["English"]["isfolder"] = "Isfolder";
	$fieldToolTipsmodx_site_content["English"]["isfolder"] = "";
	$placeHoldersmodx_site_content["English"]["isfolder"] = "";
	$fieldLabelsmodx_site_content["English"]["introtext"] = "Introtext";
	$fieldToolTipsmodx_site_content["English"]["introtext"] = "";
	$placeHoldersmodx_site_content["English"]["introtext"] = "";
	$fieldLabelsmodx_site_content["English"]["content"] = "Content";
	$fieldToolTipsmodx_site_content["English"]["content"] = "";
	$placeHoldersmodx_site_content["English"]["content"] = "";
	$fieldLabelsmodx_site_content["English"]["richtext"] = "Richtext";
	$fieldToolTipsmodx_site_content["English"]["richtext"] = "";
	$placeHoldersmodx_site_content["English"]["richtext"] = "";
	$fieldLabelsmodx_site_content["English"]["template"] = "Template";
	$fieldToolTipsmodx_site_content["English"]["template"] = "";
	$placeHoldersmodx_site_content["English"]["template"] = "";
	$fieldLabelsmodx_site_content["English"]["menuindex"] = "Menuindex";
	$fieldToolTipsmodx_site_content["English"]["menuindex"] = "";
	$placeHoldersmodx_site_content["English"]["menuindex"] = "";
	$fieldLabelsmodx_site_content["English"]["searchable"] = "Searchable";
	$fieldToolTipsmodx_site_content["English"]["searchable"] = "";
	$placeHoldersmodx_site_content["English"]["searchable"] = "";
	$fieldLabelsmodx_site_content["English"]["cacheable"] = "Cacheable";
	$fieldToolTipsmodx_site_content["English"]["cacheable"] = "";
	$placeHoldersmodx_site_content["English"]["cacheable"] = "";
	$fieldLabelsmodx_site_content["English"]["createdby"] = "Createdby";
	$fieldToolTipsmodx_site_content["English"]["createdby"] = "";
	$placeHoldersmodx_site_content["English"]["createdby"] = "";
	$fieldLabelsmodx_site_content["English"]["createdon"] = "Createdon";
	$fieldToolTipsmodx_site_content["English"]["createdon"] = "";
	$placeHoldersmodx_site_content["English"]["createdon"] = "";
	$fieldLabelsmodx_site_content["English"]["editedby"] = "Editedby";
	$fieldToolTipsmodx_site_content["English"]["editedby"] = "";
	$placeHoldersmodx_site_content["English"]["editedby"] = "";
	$fieldLabelsmodx_site_content["English"]["editedon"] = "Editedon";
	$fieldToolTipsmodx_site_content["English"]["editedon"] = "";
	$placeHoldersmodx_site_content["English"]["editedon"] = "";
	$fieldLabelsmodx_site_content["English"]["deleted"] = "Deleted";
	$fieldToolTipsmodx_site_content["English"]["deleted"] = "";
	$placeHoldersmodx_site_content["English"]["deleted"] = "";
	$fieldLabelsmodx_site_content["English"]["deletedon"] = "Deletedon";
	$fieldToolTipsmodx_site_content["English"]["deletedon"] = "";
	$placeHoldersmodx_site_content["English"]["deletedon"] = "";
	$fieldLabelsmodx_site_content["English"]["deletedby"] = "Deletedby";
	$fieldToolTipsmodx_site_content["English"]["deletedby"] = "";
	$placeHoldersmodx_site_content["English"]["deletedby"] = "";
	$fieldLabelsmodx_site_content["English"]["publishedon"] = "Publishedon";
	$fieldToolTipsmodx_site_content["English"]["publishedon"] = "";
	$placeHoldersmodx_site_content["English"]["publishedon"] = "";
	$fieldLabelsmodx_site_content["English"]["publishedby"] = "Publishedby";
	$fieldToolTipsmodx_site_content["English"]["publishedby"] = "";
	$placeHoldersmodx_site_content["English"]["publishedby"] = "";
	$fieldLabelsmodx_site_content["English"]["menutitle"] = "Menutitle";
	$fieldToolTipsmodx_site_content["English"]["menutitle"] = "";
	$placeHoldersmodx_site_content["English"]["menutitle"] = "";
	$fieldLabelsmodx_site_content["English"]["donthit"] = "Donthit";
	$fieldToolTipsmodx_site_content["English"]["donthit"] = "";
	$placeHoldersmodx_site_content["English"]["donthit"] = "";
	$fieldLabelsmodx_site_content["English"]["haskeywords"] = "Haskeywords";
	$fieldToolTipsmodx_site_content["English"]["haskeywords"] = "";
	$placeHoldersmodx_site_content["English"]["haskeywords"] = "";
	$fieldLabelsmodx_site_content["English"]["hasmetatags"] = "Hasmetatags";
	$fieldToolTipsmodx_site_content["English"]["hasmetatags"] = "";
	$placeHoldersmodx_site_content["English"]["hasmetatags"] = "";
	$fieldLabelsmodx_site_content["English"]["privateweb"] = "Privateweb";
	$fieldToolTipsmodx_site_content["English"]["privateweb"] = "";
	$placeHoldersmodx_site_content["English"]["privateweb"] = "";
	$fieldLabelsmodx_site_content["English"]["privatemgr"] = "Privatemgr";
	$fieldToolTipsmodx_site_content["English"]["privatemgr"] = "";
	$placeHoldersmodx_site_content["English"]["privatemgr"] = "";
	$fieldLabelsmodx_site_content["English"]["content_dispo"] = "Content Dispo";
	$fieldToolTipsmodx_site_content["English"]["content_dispo"] = "";
	$placeHoldersmodx_site_content["English"]["content_dispo"] = "";
	$fieldLabelsmodx_site_content["English"]["hidemenu"] = "Hidemenu";
	$fieldToolTipsmodx_site_content["English"]["hidemenu"] = "";
	$placeHoldersmodx_site_content["English"]["hidemenu"] = "";
	$fieldLabelsmodx_site_content["English"]["alias_visible"] = "Alias Visible";
	$fieldToolTipsmodx_site_content["English"]["alias_visible"] = "";
	$placeHoldersmodx_site_content["English"]["alias_visible"] = "";
	$fieldLabelsmodx_site_content["English"]["modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldToolTipsmodx_site_content["English"]["modex_site_htmlsnippet_id"] = "";
	$placeHoldersmodx_site_content["English"]["modex_site_htmlsnippet_id"] = "";
	$fieldLabelsmodx_site_content["English"]["modx_site_snippet_id"] = "Modx Site Snippet Id";
	$fieldToolTipsmodx_site_content["English"]["modx_site_snippet_id"] = "";
	$placeHoldersmodx_site_content["English"]["modx_site_snippet_id"] = "";
	if (count($fieldToolTipsmodx_site_content["English"]))
		$tdatamodx_site_content[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_site_content[""] = array();
	$fieldToolTipsmodx_site_content[""] = array();
	$placeHoldersmodx_site_content[""] = array();
	$pageTitlesmodx_site_content[""] = array();
	if (count($fieldToolTipsmodx_site_content[""]))
		$tdatamodx_site_content[".isUseToolTips"] = true;
}


	$tdatamodx_site_content[".NCSearch"] = true;



$tdatamodx_site_content[".shortTableName"] = "modx_site_content";
$tdatamodx_site_content[".nSecOptions"] = 0;
$tdatamodx_site_content[".recsPerRowPrint"] = 1;
$tdatamodx_site_content[".mainTableOwnerID"] = "";
$tdatamodx_site_content[".moveNext"] = 0;
$tdatamodx_site_content[".entityType"] = 0;

$tdatamodx_site_content[".strOriginalTableName"] = "modx_site_content";

	



$tdatamodx_site_content[".showAddInPopup"] = false;

$tdatamodx_site_content[".showEditInPopup"] = false;

$tdatamodx_site_content[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdatamodx_site_content[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_site_content[".fieldsForRegister"] = array();
	
$tdatamodx_site_content[".listAjax"] = false;

	$tdatamodx_site_content[".audit"] = true;

	$tdatamodx_site_content[".locking"] = false;

$tdatamodx_site_content[".edit"] = true;
$tdatamodx_site_content[".afterEditAction"] = 1;
$tdatamodx_site_content[".closePopupAfterEdit"] = 1;
$tdatamodx_site_content[".afterEditActionDetTable"] = "";

$tdatamodx_site_content[".add"] = true;
$tdatamodx_site_content[".afterAddAction"] = 1;
$tdatamodx_site_content[".closePopupAfterAdd"] = 1;
$tdatamodx_site_content[".afterAddActionDetTable"] = "";

$tdatamodx_site_content[".list"] = true;

$tdatamodx_site_content[".inlineEdit"] = true;

$tdatamodx_site_content[".updateSelected"] = true;

$tdatamodx_site_content[".reorderRecordsByHeader"] = true;
$tdatamodx_site_content[".createSortByDropdown"] = true;
$tdatamodx_site_content[".strSortControlSettingsJSON"] = "";

$tdatamodx_site_content[".strClickActionJSON"] = "{\"fields\":{\"alias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"alias_visible\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cacheable\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"content\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"modx_site_templates\"},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":\"modx_site_templates\",\"url\":\"\"}},\"contentType\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"content_dispo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"createdby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"createdon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deleted\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deletedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"deletedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"donthit\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"editedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"editedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haskeywords\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hasmetatags\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hidemenu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"introtext\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"isfolder\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"link_attributes\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"longtitle\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"menuindex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"menutitle\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"pagetitle\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"parent\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"privatemgr\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"privateweb\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"pub_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"published\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"publishedby\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"publishedon\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"richtext\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"searchable\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"template\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"unpub_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"url\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"modx_site_templates\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"modx_site_templates\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"modx_site_templates\"},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":\"modx_site_templates\",\"url\":\"\"}}}";


$tdatamodx_site_content[".inlineAdd"] = true;
$tdatamodx_site_content[".copy"] = true;
$tdatamodx_site_content[".view"] = true;

$tdatamodx_site_content[".import"] = true;

$tdatamodx_site_content[".exportTo"] = true;

$tdatamodx_site_content[".printFriendly"] = true;

$tdatamodx_site_content[".delete"] = true;

$tdatamodx_site_content[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdatamodx_site_content[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamodx_site_content[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatamodx_site_content[".searchSaving"] = false;
//

$tdatamodx_site_content[".showSearchPanel"] = true;
		$tdatamodx_site_content[".flexibleSearch"] = true;

$tdatamodx_site_content[".isUseAjaxSuggest"] = true;

$tdatamodx_site_content[".rowHighlite"] = true;



				

$tdatamodx_site_content[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_site_content[".buttonsAdded"] = false;

$tdatamodx_site_content[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_site_content[".isUseTimeForSearch"] = false;





$tdatamodx_site_content[".allSearchFields"] = array();
$tdatamodx_site_content[".filterFields"] = array();
$tdatamodx_site_content[".requiredSearchFields"] = array();

$tdatamodx_site_content[".allSearchFields"][] = "link";
	$tdatamodx_site_content[".allSearchFields"][] = "id";
	$tdatamodx_site_content[".allSearchFields"][] = "url";
	$tdatamodx_site_content[".allSearchFields"][] = "content";
	$tdatamodx_site_content[".allSearchFields"][] = "introtext";
	$tdatamodx_site_content[".allSearchFields"][] = "menuindex";
	$tdatamodx_site_content[".allSearchFields"][] = "richtext";
	$tdatamodx_site_content[".allSearchFields"][] = "modx_site_snippet_id";
	$tdatamodx_site_content[".allSearchFields"][] = "modex_site_htmlsnippet_id";
	$tdatamodx_site_content[".allSearchFields"][] = "template";
	$tdatamodx_site_content[".allSearchFields"][] = "type";
	$tdatamodx_site_content[".allSearchFields"][] = "publishedon";
	$tdatamodx_site_content[".allSearchFields"][] = "contentType";
	$tdatamodx_site_content[".allSearchFields"][] = "pagetitle";
	$tdatamodx_site_content[".allSearchFields"][] = "longtitle";
	$tdatamodx_site_content[".allSearchFields"][] = "description";
	$tdatamodx_site_content[".allSearchFields"][] = "alias";
	$tdatamodx_site_content[".allSearchFields"][] = "link_attributes";
	$tdatamodx_site_content[".allSearchFields"][] = "published";
	$tdatamodx_site_content[".allSearchFields"][] = "pub_date";
	$tdatamodx_site_content[".allSearchFields"][] = "unpub_date";
	$tdatamodx_site_content[".allSearchFields"][] = "parent";
	$tdatamodx_site_content[".allSearchFields"][] = "isfolder";
	$tdatamodx_site_content[".allSearchFields"][] = "searchable";
	$tdatamodx_site_content[".allSearchFields"][] = "cacheable";
	$tdatamodx_site_content[".allSearchFields"][] = "createdby";
	$tdatamodx_site_content[".allSearchFields"][] = "createdon";
	$tdatamodx_site_content[".allSearchFields"][] = "editedby";
	$tdatamodx_site_content[".allSearchFields"][] = "editedon";
	$tdatamodx_site_content[".allSearchFields"][] = "deleted";
	$tdatamodx_site_content[".allSearchFields"][] = "deletedon";
	$tdatamodx_site_content[".allSearchFields"][] = "deletedby";
	$tdatamodx_site_content[".allSearchFields"][] = "publishedby";
	$tdatamodx_site_content[".allSearchFields"][] = "menutitle";
	$tdatamodx_site_content[".allSearchFields"][] = "donthit";
	$tdatamodx_site_content[".allSearchFields"][] = "haskeywords";
	$tdatamodx_site_content[".allSearchFields"][] = "hasmetatags";
	$tdatamodx_site_content[".allSearchFields"][] = "privateweb";
	$tdatamodx_site_content[".allSearchFields"][] = "privatemgr";
	$tdatamodx_site_content[".allSearchFields"][] = "content_dispo";
	$tdatamodx_site_content[".allSearchFields"][] = "hidemenu";
	$tdatamodx_site_content[".allSearchFields"][] = "alias_visible";
	

$tdatamodx_site_content[".googleLikeFields"] = array();
$tdatamodx_site_content[".googleLikeFields"][] = "id";
$tdatamodx_site_content[".googleLikeFields"][] = "url";
$tdatamodx_site_content[".googleLikeFields"][] = "link";
$tdatamodx_site_content[".googleLikeFields"][] = "type";
$tdatamodx_site_content[".googleLikeFields"][] = "contentType";
$tdatamodx_site_content[".googleLikeFields"][] = "pagetitle";
$tdatamodx_site_content[".googleLikeFields"][] = "longtitle";
$tdatamodx_site_content[".googleLikeFields"][] = "description";
$tdatamodx_site_content[".googleLikeFields"][] = "alias";
$tdatamodx_site_content[".googleLikeFields"][] = "link_attributes";
$tdatamodx_site_content[".googleLikeFields"][] = "published";
$tdatamodx_site_content[".googleLikeFields"][] = "pub_date";
$tdatamodx_site_content[".googleLikeFields"][] = "unpub_date";
$tdatamodx_site_content[".googleLikeFields"][] = "parent";
$tdatamodx_site_content[".googleLikeFields"][] = "isfolder";
$tdatamodx_site_content[".googleLikeFields"][] = "introtext";
$tdatamodx_site_content[".googleLikeFields"][] = "content";
$tdatamodx_site_content[".googleLikeFields"][] = "richtext";
$tdatamodx_site_content[".googleLikeFields"][] = "template";
$tdatamodx_site_content[".googleLikeFields"][] = "menuindex";
$tdatamodx_site_content[".googleLikeFields"][] = "searchable";
$tdatamodx_site_content[".googleLikeFields"][] = "cacheable";
$tdatamodx_site_content[".googleLikeFields"][] = "createdby";
$tdatamodx_site_content[".googleLikeFields"][] = "createdon";
$tdatamodx_site_content[".googleLikeFields"][] = "editedby";
$tdatamodx_site_content[".googleLikeFields"][] = "editedon";
$tdatamodx_site_content[".googleLikeFields"][] = "deleted";
$tdatamodx_site_content[".googleLikeFields"][] = "deletedon";
$tdatamodx_site_content[".googleLikeFields"][] = "deletedby";
$tdatamodx_site_content[".googleLikeFields"][] = "publishedon";
$tdatamodx_site_content[".googleLikeFields"][] = "publishedby";
$tdatamodx_site_content[".googleLikeFields"][] = "menutitle";
$tdatamodx_site_content[".googleLikeFields"][] = "donthit";
$tdatamodx_site_content[".googleLikeFields"][] = "haskeywords";
$tdatamodx_site_content[".googleLikeFields"][] = "hasmetatags";
$tdatamodx_site_content[".googleLikeFields"][] = "privateweb";
$tdatamodx_site_content[".googleLikeFields"][] = "privatemgr";
$tdatamodx_site_content[".googleLikeFields"][] = "content_dispo";
$tdatamodx_site_content[".googleLikeFields"][] = "hidemenu";
$tdatamodx_site_content[".googleLikeFields"][] = "alias_visible";
$tdatamodx_site_content[".googleLikeFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".googleLikeFields"][] = "modx_site_snippet_id";


$tdatamodx_site_content[".advSearchFields"] = array();
$tdatamodx_site_content[".advSearchFields"][] = "link";
$tdatamodx_site_content[".advSearchFields"][] = "id";
$tdatamodx_site_content[".advSearchFields"][] = "url";
$tdatamodx_site_content[".advSearchFields"][] = "content";
$tdatamodx_site_content[".advSearchFields"][] = "introtext";
$tdatamodx_site_content[".advSearchFields"][] = "menuindex";
$tdatamodx_site_content[".advSearchFields"][] = "richtext";
$tdatamodx_site_content[".advSearchFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".advSearchFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".advSearchFields"][] = "template";
$tdatamodx_site_content[".advSearchFields"][] = "type";
$tdatamodx_site_content[".advSearchFields"][] = "publishedon";
$tdatamodx_site_content[".advSearchFields"][] = "contentType";
$tdatamodx_site_content[".advSearchFields"][] = "pagetitle";
$tdatamodx_site_content[".advSearchFields"][] = "longtitle";
$tdatamodx_site_content[".advSearchFields"][] = "description";
$tdatamodx_site_content[".advSearchFields"][] = "alias";
$tdatamodx_site_content[".advSearchFields"][] = "link_attributes";
$tdatamodx_site_content[".advSearchFields"][] = "published";
$tdatamodx_site_content[".advSearchFields"][] = "pub_date";
$tdatamodx_site_content[".advSearchFields"][] = "unpub_date";
$tdatamodx_site_content[".advSearchFields"][] = "parent";
$tdatamodx_site_content[".advSearchFields"][] = "isfolder";
$tdatamodx_site_content[".advSearchFields"][] = "searchable";
$tdatamodx_site_content[".advSearchFields"][] = "cacheable";
$tdatamodx_site_content[".advSearchFields"][] = "createdby";
$tdatamodx_site_content[".advSearchFields"][] = "createdon";
$tdatamodx_site_content[".advSearchFields"][] = "editedby";
$tdatamodx_site_content[".advSearchFields"][] = "editedon";
$tdatamodx_site_content[".advSearchFields"][] = "deleted";
$tdatamodx_site_content[".advSearchFields"][] = "deletedon";
$tdatamodx_site_content[".advSearchFields"][] = "deletedby";
$tdatamodx_site_content[".advSearchFields"][] = "publishedby";
$tdatamodx_site_content[".advSearchFields"][] = "menutitle";
$tdatamodx_site_content[".advSearchFields"][] = "donthit";
$tdatamodx_site_content[".advSearchFields"][] = "haskeywords";
$tdatamodx_site_content[".advSearchFields"][] = "hasmetatags";
$tdatamodx_site_content[".advSearchFields"][] = "privateweb";
$tdatamodx_site_content[".advSearchFields"][] = "privatemgr";
$tdatamodx_site_content[".advSearchFields"][] = "content_dispo";
$tdatamodx_site_content[".advSearchFields"][] = "hidemenu";
$tdatamodx_site_content[".advSearchFields"][] = "alias_visible";

$tdatamodx_site_content[".tableType"] = "list";

$tdatamodx_site_content[".printerPageOrientation"] = 0;
$tdatamodx_site_content[".nPrinterPageScale"] = 100;

$tdatamodx_site_content[".nPrinterSplitRecords"] = 40;

$tdatamodx_site_content[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_site_content[".geocodingEnabled"] = false;





$tdatamodx_site_content[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodx_site_content[".pageSize"] = 20;

$tdatamodx_site_content[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_site_content[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_site_content[".orderindexes"] = array();
$tdatamodx_site_content[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdatamodx_site_content[".sqlHead"] = "SELECT id,  CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END AS url,  CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END AS link,  `type`,  contentType,  pagetitle,  longtitle,  description,  `alias`,  link_attributes,  published,  pub_date,  unpub_date,  parent,  isfolder,  introtext,  content,  richtext,  template,  menuindex,  searchable,  cacheable,  createdby,  createdon,  editedby,  editedon,  deleted,  deletedon,  deletedby,  publishedon,  publishedby,  menutitle,  donthit,  haskeywords,  hasmetatags,  privateweb,  privatemgr,  content_dispo,  hidemenu,  alias_visible,  modex_site_htmlsnippet_id,  modx_site_snippet_id";
$tdatamodx_site_content[".sqlFrom"] = "FROM modx_site_content";
$tdatamodx_site_content[".sqlWhereExpr"] = "(parent =0)";
$tdatamodx_site_content[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
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
$arrEditTabs[] = array('tabId'=>'New_tab11',
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
$arrEditTabs[] = array('tabId'=>'New_tab1',
					   'tabName'=>"New tab",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "modx_site_templates";
	
		$tabFields[] = "modx_site_snippets";
	
		$tabFields[] = "modx_site_htmlsnippets";
	
		$tabFields[] = "modx_site_content_child";
$arrEditTabs[] = array('tabId'=>'New_tab21',
					   'tabName'=>"New tab2",
					   'nType'=>'0',
					   'nOrder'=>42,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatamodx_site_content[".arrEditTabs"] = $arrEditTabs;


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
	
	
		$tabFields[] = "modx_site_templates";
	
		$tabFields[] = "modx_site_snippets";
	
		$tabFields[] = "modx_site_htmlsnippets";
$arrAddTabs[] = array('tabId'=>'New_tab21',
					  'tabName'=>"New tab2",
					  'nType'=>'0',
					  'nOrder'=>42,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatamodx_site_content[".arrAddTabs"] = $arrAddTabs;

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
	
	$tabFields[] = "modx_site_templates";
	$tabFields[] = "modx_site_snippets";
	$tabFields[] = "modx_site_htmlsnippets";
$arrViewTabs[] = array('tabId'=>'New_tab21',
					   'tabName'=>"New tab2",
					   'nType'=>'0',
					   'nOrder'=>42,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatamodx_site_content[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_site_content[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_site_content[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_site_content[".highlightSearchResults"] = true;

$tableKeysmodx_site_content = array();
$tableKeysmodx_site_content[] = "id";
$tdatamodx_site_content[".Keys"] = $tableKeysmodx_site_content;

$tdatamodx_site_content[".listFields"] = array();
$tdatamodx_site_content[".listFields"][] = "link";
$tdatamodx_site_content[".listFields"][] = "url";
$tdatamodx_site_content[".listFields"][] = "id";
$tdatamodx_site_content[".listFields"][] = "content";
$tdatamodx_site_content[".listFields"][] = "menutitle";
$tdatamodx_site_content[".listFields"][] = "alias";
$tdatamodx_site_content[".listFields"][] = "alias_visible";
$tdatamodx_site_content[".listFields"][] = "published";
$tdatamodx_site_content[".listFields"][] = "publishedon";
$tdatamodx_site_content[".listFields"][] = "pub_date";
$tdatamodx_site_content[".listFields"][] = "pagetitle";
$tdatamodx_site_content[".listFields"][] = "introtext";
$tdatamodx_site_content[".listFields"][] = "menuindex";
$tdatamodx_site_content[".listFields"][] = "richtext";
$tdatamodx_site_content[".listFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".listFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".listFields"][] = "template";
$tdatamodx_site_content[".listFields"][] = "type";
$tdatamodx_site_content[".listFields"][] = "contentType";
$tdatamodx_site_content[".listFields"][] = "longtitle";
$tdatamodx_site_content[".listFields"][] = "description";
$tdatamodx_site_content[".listFields"][] = "link_attributes";
$tdatamodx_site_content[".listFields"][] = "unpub_date";
$tdatamodx_site_content[".listFields"][] = "parent";
$tdatamodx_site_content[".listFields"][] = "isfolder";
$tdatamodx_site_content[".listFields"][] = "searchable";
$tdatamodx_site_content[".listFields"][] = "cacheable";
$tdatamodx_site_content[".listFields"][] = "createdby";
$tdatamodx_site_content[".listFields"][] = "createdon";
$tdatamodx_site_content[".listFields"][] = "editedby";
$tdatamodx_site_content[".listFields"][] = "editedon";
$tdatamodx_site_content[".listFields"][] = "deleted";
$tdatamodx_site_content[".listFields"][] = "deletedon";
$tdatamodx_site_content[".listFields"][] = "deletedby";
$tdatamodx_site_content[".listFields"][] = "publishedby";
$tdatamodx_site_content[".listFields"][] = "donthit";
$tdatamodx_site_content[".listFields"][] = "haskeywords";
$tdatamodx_site_content[".listFields"][] = "hasmetatags";
$tdatamodx_site_content[".listFields"][] = "privateweb";
$tdatamodx_site_content[".listFields"][] = "privatemgr";
$tdatamodx_site_content[".listFields"][] = "content_dispo";
$tdatamodx_site_content[".listFields"][] = "hidemenu";

$tdatamodx_site_content[".hideMobileList"] = array();


$tdatamodx_site_content[".viewFields"] = array();
$tdatamodx_site_content[".viewFields"][] = "link";
$tdatamodx_site_content[".viewFields"][] = "url";
$tdatamodx_site_content[".viewFields"][] = "content";
$tdatamodx_site_content[".viewFields"][] = "introtext";
$tdatamodx_site_content[".viewFields"][] = "id";
$tdatamodx_site_content[".viewFields"][] = "menuindex";
$tdatamodx_site_content[".viewFields"][] = "richtext";
$tdatamodx_site_content[".viewFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".viewFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".viewFields"][] = "template";
$tdatamodx_site_content[".viewFields"][] = "type";
$tdatamodx_site_content[".viewFields"][] = "publishedon";
$tdatamodx_site_content[".viewFields"][] = "contentType";
$tdatamodx_site_content[".viewFields"][] = "pagetitle";
$tdatamodx_site_content[".viewFields"][] = "longtitle";
$tdatamodx_site_content[".viewFields"][] = "description";
$tdatamodx_site_content[".viewFields"][] = "alias";
$tdatamodx_site_content[".viewFields"][] = "link_attributes";
$tdatamodx_site_content[".viewFields"][] = "published";
$tdatamodx_site_content[".viewFields"][] = "pub_date";
$tdatamodx_site_content[".viewFields"][] = "unpub_date";
$tdatamodx_site_content[".viewFields"][] = "parent";
$tdatamodx_site_content[".viewFields"][] = "isfolder";
$tdatamodx_site_content[".viewFields"][] = "searchable";
$tdatamodx_site_content[".viewFields"][] = "cacheable";
$tdatamodx_site_content[".viewFields"][] = "createdby";
$tdatamodx_site_content[".viewFields"][] = "createdon";
$tdatamodx_site_content[".viewFields"][] = "editedby";
$tdatamodx_site_content[".viewFields"][] = "editedon";
$tdatamodx_site_content[".viewFields"][] = "deleted";
$tdatamodx_site_content[".viewFields"][] = "deletedon";
$tdatamodx_site_content[".viewFields"][] = "deletedby";
$tdatamodx_site_content[".viewFields"][] = "publishedby";
$tdatamodx_site_content[".viewFields"][] = "menutitle";
$tdatamodx_site_content[".viewFields"][] = "donthit";
$tdatamodx_site_content[".viewFields"][] = "haskeywords";
$tdatamodx_site_content[".viewFields"][] = "hasmetatags";
$tdatamodx_site_content[".viewFields"][] = "privateweb";
$tdatamodx_site_content[".viewFields"][] = "privatemgr";
$tdatamodx_site_content[".viewFields"][] = "content_dispo";
$tdatamodx_site_content[".viewFields"][] = "hidemenu";
$tdatamodx_site_content[".viewFields"][] = "alias_visible";

$tdatamodx_site_content[".addFields"] = array();
$tdatamodx_site_content[".addFields"][] = "content";
$tdatamodx_site_content[".addFields"][] = "introtext";
$tdatamodx_site_content[".addFields"][] = "menuindex";
$tdatamodx_site_content[".addFields"][] = "richtext";
$tdatamodx_site_content[".addFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".addFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".addFields"][] = "template";
$tdatamodx_site_content[".addFields"][] = "type";
$tdatamodx_site_content[".addFields"][] = "publishedon";
$tdatamodx_site_content[".addFields"][] = "contentType";
$tdatamodx_site_content[".addFields"][] = "pagetitle";
$tdatamodx_site_content[".addFields"][] = "longtitle";
$tdatamodx_site_content[".addFields"][] = "description";
$tdatamodx_site_content[".addFields"][] = "alias";
$tdatamodx_site_content[".addFields"][] = "link_attributes";
$tdatamodx_site_content[".addFields"][] = "published";
$tdatamodx_site_content[".addFields"][] = "pub_date";
$tdatamodx_site_content[".addFields"][] = "unpub_date";
$tdatamodx_site_content[".addFields"][] = "parent";
$tdatamodx_site_content[".addFields"][] = "isfolder";
$tdatamodx_site_content[".addFields"][] = "searchable";
$tdatamodx_site_content[".addFields"][] = "cacheable";
$tdatamodx_site_content[".addFields"][] = "createdby";
$tdatamodx_site_content[".addFields"][] = "createdon";
$tdatamodx_site_content[".addFields"][] = "editedby";
$tdatamodx_site_content[".addFields"][] = "editedon";
$tdatamodx_site_content[".addFields"][] = "deleted";
$tdatamodx_site_content[".addFields"][] = "deletedon";
$tdatamodx_site_content[".addFields"][] = "deletedby";
$tdatamodx_site_content[".addFields"][] = "publishedby";
$tdatamodx_site_content[".addFields"][] = "menutitle";
$tdatamodx_site_content[".addFields"][] = "donthit";
$tdatamodx_site_content[".addFields"][] = "haskeywords";
$tdatamodx_site_content[".addFields"][] = "hasmetatags";
$tdatamodx_site_content[".addFields"][] = "privateweb";
$tdatamodx_site_content[".addFields"][] = "privatemgr";
$tdatamodx_site_content[".addFields"][] = "content_dispo";
$tdatamodx_site_content[".addFields"][] = "hidemenu";
$tdatamodx_site_content[".addFields"][] = "alias_visible";

$tdatamodx_site_content[".masterListFields"] = array();
$tdatamodx_site_content[".masterListFields"][] = "link";
$tdatamodx_site_content[".masterListFields"][] = "id";
$tdatamodx_site_content[".masterListFields"][] = "url";
$tdatamodx_site_content[".masterListFields"][] = "content";
$tdatamodx_site_content[".masterListFields"][] = "introtext";
$tdatamodx_site_content[".masterListFields"][] = "menuindex";
$tdatamodx_site_content[".masterListFields"][] = "richtext";
$tdatamodx_site_content[".masterListFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".masterListFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".masterListFields"][] = "template";
$tdatamodx_site_content[".masterListFields"][] = "type";
$tdatamodx_site_content[".masterListFields"][] = "publishedon";
$tdatamodx_site_content[".masterListFields"][] = "contentType";
$tdatamodx_site_content[".masterListFields"][] = "pagetitle";
$tdatamodx_site_content[".masterListFields"][] = "longtitle";
$tdatamodx_site_content[".masterListFields"][] = "description";
$tdatamodx_site_content[".masterListFields"][] = "alias";
$tdatamodx_site_content[".masterListFields"][] = "link_attributes";
$tdatamodx_site_content[".masterListFields"][] = "published";
$tdatamodx_site_content[".masterListFields"][] = "pub_date";
$tdatamodx_site_content[".masterListFields"][] = "unpub_date";
$tdatamodx_site_content[".masterListFields"][] = "parent";
$tdatamodx_site_content[".masterListFields"][] = "isfolder";
$tdatamodx_site_content[".masterListFields"][] = "searchable";
$tdatamodx_site_content[".masterListFields"][] = "cacheable";
$tdatamodx_site_content[".masterListFields"][] = "createdby";
$tdatamodx_site_content[".masterListFields"][] = "createdon";
$tdatamodx_site_content[".masterListFields"][] = "editedby";
$tdatamodx_site_content[".masterListFields"][] = "editedon";
$tdatamodx_site_content[".masterListFields"][] = "deleted";
$tdatamodx_site_content[".masterListFields"][] = "deletedon";
$tdatamodx_site_content[".masterListFields"][] = "deletedby";
$tdatamodx_site_content[".masterListFields"][] = "publishedby";
$tdatamodx_site_content[".masterListFields"][] = "menutitle";
$tdatamodx_site_content[".masterListFields"][] = "donthit";
$tdatamodx_site_content[".masterListFields"][] = "haskeywords";
$tdatamodx_site_content[".masterListFields"][] = "hasmetatags";
$tdatamodx_site_content[".masterListFields"][] = "privateweb";
$tdatamodx_site_content[".masterListFields"][] = "privatemgr";
$tdatamodx_site_content[".masterListFields"][] = "content_dispo";
$tdatamodx_site_content[".masterListFields"][] = "hidemenu";
$tdatamodx_site_content[".masterListFields"][] = "alias_visible";

$tdatamodx_site_content[".inlineAddFields"] = array();
$tdatamodx_site_content[".inlineAddFields"][] = "content";
$tdatamodx_site_content[".inlineAddFields"][] = "menutitle";
$tdatamodx_site_content[".inlineAddFields"][] = "alias";
$tdatamodx_site_content[".inlineAddFields"][] = "alias_visible";
$tdatamodx_site_content[".inlineAddFields"][] = "published";
$tdatamodx_site_content[".inlineAddFields"][] = "publishedon";
$tdatamodx_site_content[".inlineAddFields"][] = "pub_date";
$tdatamodx_site_content[".inlineAddFields"][] = "pagetitle";
$tdatamodx_site_content[".inlineAddFields"][] = "introtext";
$tdatamodx_site_content[".inlineAddFields"][] = "menuindex";
$tdatamodx_site_content[".inlineAddFields"][] = "richtext";
$tdatamodx_site_content[".inlineAddFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".inlineAddFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".inlineAddFields"][] = "template";
$tdatamodx_site_content[".inlineAddFields"][] = "type";
$tdatamodx_site_content[".inlineAddFields"][] = "contentType";
$tdatamodx_site_content[".inlineAddFields"][] = "longtitle";
$tdatamodx_site_content[".inlineAddFields"][] = "description";
$tdatamodx_site_content[".inlineAddFields"][] = "link_attributes";
$tdatamodx_site_content[".inlineAddFields"][] = "unpub_date";
$tdatamodx_site_content[".inlineAddFields"][] = "parent";
$tdatamodx_site_content[".inlineAddFields"][] = "isfolder";
$tdatamodx_site_content[".inlineAddFields"][] = "searchable";
$tdatamodx_site_content[".inlineAddFields"][] = "cacheable";
$tdatamodx_site_content[".inlineAddFields"][] = "createdby";
$tdatamodx_site_content[".inlineAddFields"][] = "createdon";
$tdatamodx_site_content[".inlineAddFields"][] = "editedby";
$tdatamodx_site_content[".inlineAddFields"][] = "editedon";
$tdatamodx_site_content[".inlineAddFields"][] = "deleted";
$tdatamodx_site_content[".inlineAddFields"][] = "deletedon";
$tdatamodx_site_content[".inlineAddFields"][] = "deletedby";
$tdatamodx_site_content[".inlineAddFields"][] = "publishedby";
$tdatamodx_site_content[".inlineAddFields"][] = "donthit";
$tdatamodx_site_content[".inlineAddFields"][] = "haskeywords";
$tdatamodx_site_content[".inlineAddFields"][] = "hasmetatags";
$tdatamodx_site_content[".inlineAddFields"][] = "privateweb";
$tdatamodx_site_content[".inlineAddFields"][] = "privatemgr";
$tdatamodx_site_content[".inlineAddFields"][] = "content_dispo";
$tdatamodx_site_content[".inlineAddFields"][] = "hidemenu";

$tdatamodx_site_content[".editFields"] = array();
$tdatamodx_site_content[".editFields"][] = "content";
$tdatamodx_site_content[".editFields"][] = "introtext";
$tdatamodx_site_content[".editFields"][] = "menuindex";
$tdatamodx_site_content[".editFields"][] = "richtext";
$tdatamodx_site_content[".editFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".editFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".editFields"][] = "template";
$tdatamodx_site_content[".editFields"][] = "type";
$tdatamodx_site_content[".editFields"][] = "publishedon";
$tdatamodx_site_content[".editFields"][] = "contentType";
$tdatamodx_site_content[".editFields"][] = "pagetitle";
$tdatamodx_site_content[".editFields"][] = "longtitle";
$tdatamodx_site_content[".editFields"][] = "description";
$tdatamodx_site_content[".editFields"][] = "alias";
$tdatamodx_site_content[".editFields"][] = "link_attributes";
$tdatamodx_site_content[".editFields"][] = "published";
$tdatamodx_site_content[".editFields"][] = "pub_date";
$tdatamodx_site_content[".editFields"][] = "unpub_date";
$tdatamodx_site_content[".editFields"][] = "parent";
$tdatamodx_site_content[".editFields"][] = "isfolder";
$tdatamodx_site_content[".editFields"][] = "searchable";
$tdatamodx_site_content[".editFields"][] = "cacheable";
$tdatamodx_site_content[".editFields"][] = "createdby";
$tdatamodx_site_content[".editFields"][] = "createdon";
$tdatamodx_site_content[".editFields"][] = "editedby";
$tdatamodx_site_content[".editFields"][] = "editedon";
$tdatamodx_site_content[".editFields"][] = "deleted";
$tdatamodx_site_content[".editFields"][] = "deletedon";
$tdatamodx_site_content[".editFields"][] = "deletedby";
$tdatamodx_site_content[".editFields"][] = "publishedby";
$tdatamodx_site_content[".editFields"][] = "menutitle";
$tdatamodx_site_content[".editFields"][] = "donthit";
$tdatamodx_site_content[".editFields"][] = "haskeywords";
$tdatamodx_site_content[".editFields"][] = "hasmetatags";
$tdatamodx_site_content[".editFields"][] = "privateweb";
$tdatamodx_site_content[".editFields"][] = "privatemgr";
$tdatamodx_site_content[".editFields"][] = "content_dispo";
$tdatamodx_site_content[".editFields"][] = "hidemenu";
$tdatamodx_site_content[".editFields"][] = "alias_visible";

$tdatamodx_site_content[".inlineEditFields"] = array();
$tdatamodx_site_content[".inlineEditFields"][] = "content";
$tdatamodx_site_content[".inlineEditFields"][] = "menutitle";
$tdatamodx_site_content[".inlineEditFields"][] = "alias";
$tdatamodx_site_content[".inlineEditFields"][] = "alias_visible";
$tdatamodx_site_content[".inlineEditFields"][] = "published";
$tdatamodx_site_content[".inlineEditFields"][] = "publishedon";
$tdatamodx_site_content[".inlineEditFields"][] = "pub_date";
$tdatamodx_site_content[".inlineEditFields"][] = "pagetitle";
$tdatamodx_site_content[".inlineEditFields"][] = "introtext";
$tdatamodx_site_content[".inlineEditFields"][] = "menuindex";
$tdatamodx_site_content[".inlineEditFields"][] = "richtext";
$tdatamodx_site_content[".inlineEditFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".inlineEditFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".inlineEditFields"][] = "template";
$tdatamodx_site_content[".inlineEditFields"][] = "type";
$tdatamodx_site_content[".inlineEditFields"][] = "contentType";
$tdatamodx_site_content[".inlineEditFields"][] = "longtitle";
$tdatamodx_site_content[".inlineEditFields"][] = "description";
$tdatamodx_site_content[".inlineEditFields"][] = "link_attributes";
$tdatamodx_site_content[".inlineEditFields"][] = "unpub_date";
$tdatamodx_site_content[".inlineEditFields"][] = "parent";
$tdatamodx_site_content[".inlineEditFields"][] = "isfolder";
$tdatamodx_site_content[".inlineEditFields"][] = "searchable";
$tdatamodx_site_content[".inlineEditFields"][] = "cacheable";
$tdatamodx_site_content[".inlineEditFields"][] = "createdby";
$tdatamodx_site_content[".inlineEditFields"][] = "createdon";
$tdatamodx_site_content[".inlineEditFields"][] = "editedby";
$tdatamodx_site_content[".inlineEditFields"][] = "editedon";
$tdatamodx_site_content[".inlineEditFields"][] = "deleted";
$tdatamodx_site_content[".inlineEditFields"][] = "deletedon";
$tdatamodx_site_content[".inlineEditFields"][] = "deletedby";
$tdatamodx_site_content[".inlineEditFields"][] = "publishedby";
$tdatamodx_site_content[".inlineEditFields"][] = "donthit";
$tdatamodx_site_content[".inlineEditFields"][] = "haskeywords";
$tdatamodx_site_content[".inlineEditFields"][] = "hasmetatags";
$tdatamodx_site_content[".inlineEditFields"][] = "privateweb";
$tdatamodx_site_content[".inlineEditFields"][] = "privatemgr";
$tdatamodx_site_content[".inlineEditFields"][] = "content_dispo";
$tdatamodx_site_content[".inlineEditFields"][] = "hidemenu";

$tdatamodx_site_content[".updateSelectedFields"] = array();
$tdatamodx_site_content[".updateSelectedFields"][] = "content";
$tdatamodx_site_content[".updateSelectedFields"][] = "introtext";
$tdatamodx_site_content[".updateSelectedFields"][] = "menuindex";
$tdatamodx_site_content[".updateSelectedFields"][] = "richtext";
$tdatamodx_site_content[".updateSelectedFields"][] = "template";
$tdatamodx_site_content[".updateSelectedFields"][] = "type";
$tdatamodx_site_content[".updateSelectedFields"][] = "publishedon";
$tdatamodx_site_content[".updateSelectedFields"][] = "contentType";
$tdatamodx_site_content[".updateSelectedFields"][] = "pagetitle";
$tdatamodx_site_content[".updateSelectedFields"][] = "longtitle";
$tdatamodx_site_content[".updateSelectedFields"][] = "description";
$tdatamodx_site_content[".updateSelectedFields"][] = "alias";
$tdatamodx_site_content[".updateSelectedFields"][] = "link_attributes";
$tdatamodx_site_content[".updateSelectedFields"][] = "published";
$tdatamodx_site_content[".updateSelectedFields"][] = "pub_date";
$tdatamodx_site_content[".updateSelectedFields"][] = "unpub_date";
$tdatamodx_site_content[".updateSelectedFields"][] = "parent";
$tdatamodx_site_content[".updateSelectedFields"][] = "isfolder";
$tdatamodx_site_content[".updateSelectedFields"][] = "searchable";
$tdatamodx_site_content[".updateSelectedFields"][] = "cacheable";
$tdatamodx_site_content[".updateSelectedFields"][] = "createdby";
$tdatamodx_site_content[".updateSelectedFields"][] = "createdon";
$tdatamodx_site_content[".updateSelectedFields"][] = "editedby";
$tdatamodx_site_content[".updateSelectedFields"][] = "editedon";
$tdatamodx_site_content[".updateSelectedFields"][] = "deleted";
$tdatamodx_site_content[".updateSelectedFields"][] = "deletedon";
$tdatamodx_site_content[".updateSelectedFields"][] = "deletedby";
$tdatamodx_site_content[".updateSelectedFields"][] = "publishedby";
$tdatamodx_site_content[".updateSelectedFields"][] = "menutitle";
$tdatamodx_site_content[".updateSelectedFields"][] = "donthit";
$tdatamodx_site_content[".updateSelectedFields"][] = "haskeywords";
$tdatamodx_site_content[".updateSelectedFields"][] = "hasmetatags";
$tdatamodx_site_content[".updateSelectedFields"][] = "privateweb";
$tdatamodx_site_content[".updateSelectedFields"][] = "privatemgr";
$tdatamodx_site_content[".updateSelectedFields"][] = "content_dispo";
$tdatamodx_site_content[".updateSelectedFields"][] = "hidemenu";
$tdatamodx_site_content[".updateSelectedFields"][] = "alias_visible";


$tdatamodx_site_content[".exportFields"] = array();
$tdatamodx_site_content[".exportFields"][] = "link";
$tdatamodx_site_content[".exportFields"][] = "id";
$tdatamodx_site_content[".exportFields"][] = "url";
$tdatamodx_site_content[".exportFields"][] = "content";
$tdatamodx_site_content[".exportFields"][] = "introtext";
$tdatamodx_site_content[".exportFields"][] = "menuindex";
$tdatamodx_site_content[".exportFields"][] = "richtext";
$tdatamodx_site_content[".exportFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".exportFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".exportFields"][] = "template";
$tdatamodx_site_content[".exportFields"][] = "type";
$tdatamodx_site_content[".exportFields"][] = "publishedon";
$tdatamodx_site_content[".exportFields"][] = "contentType";
$tdatamodx_site_content[".exportFields"][] = "pagetitle";
$tdatamodx_site_content[".exportFields"][] = "longtitle";
$tdatamodx_site_content[".exportFields"][] = "description";
$tdatamodx_site_content[".exportFields"][] = "alias";
$tdatamodx_site_content[".exportFields"][] = "link_attributes";
$tdatamodx_site_content[".exportFields"][] = "published";
$tdatamodx_site_content[".exportFields"][] = "pub_date";
$tdatamodx_site_content[".exportFields"][] = "unpub_date";
$tdatamodx_site_content[".exportFields"][] = "parent";
$tdatamodx_site_content[".exportFields"][] = "isfolder";
$tdatamodx_site_content[".exportFields"][] = "searchable";
$tdatamodx_site_content[".exportFields"][] = "cacheable";
$tdatamodx_site_content[".exportFields"][] = "createdby";
$tdatamodx_site_content[".exportFields"][] = "createdon";
$tdatamodx_site_content[".exportFields"][] = "editedby";
$tdatamodx_site_content[".exportFields"][] = "editedon";
$tdatamodx_site_content[".exportFields"][] = "deleted";
$tdatamodx_site_content[".exportFields"][] = "deletedon";
$tdatamodx_site_content[".exportFields"][] = "deletedby";
$tdatamodx_site_content[".exportFields"][] = "publishedby";
$tdatamodx_site_content[".exportFields"][] = "menutitle";
$tdatamodx_site_content[".exportFields"][] = "donthit";
$tdatamodx_site_content[".exportFields"][] = "haskeywords";
$tdatamodx_site_content[".exportFields"][] = "hasmetatags";
$tdatamodx_site_content[".exportFields"][] = "privateweb";
$tdatamodx_site_content[".exportFields"][] = "privatemgr";
$tdatamodx_site_content[".exportFields"][] = "content_dispo";
$tdatamodx_site_content[".exportFields"][] = "hidemenu";
$tdatamodx_site_content[".exportFields"][] = "alias_visible";

$tdatamodx_site_content[".importFields"] = array();
$tdatamodx_site_content[".importFields"][] = "id";
$tdatamodx_site_content[".importFields"][] = "url";
$tdatamodx_site_content[".importFields"][] = "link";
$tdatamodx_site_content[".importFields"][] = "type";
$tdatamodx_site_content[".importFields"][] = "contentType";
$tdatamodx_site_content[".importFields"][] = "pagetitle";
$tdatamodx_site_content[".importFields"][] = "longtitle";
$tdatamodx_site_content[".importFields"][] = "description";
$tdatamodx_site_content[".importFields"][] = "alias";
$tdatamodx_site_content[".importFields"][] = "link_attributes";
$tdatamodx_site_content[".importFields"][] = "published";
$tdatamodx_site_content[".importFields"][] = "pub_date";
$tdatamodx_site_content[".importFields"][] = "unpub_date";
$tdatamodx_site_content[".importFields"][] = "parent";
$tdatamodx_site_content[".importFields"][] = "isfolder";
$tdatamodx_site_content[".importFields"][] = "introtext";
$tdatamodx_site_content[".importFields"][] = "content";
$tdatamodx_site_content[".importFields"][] = "richtext";
$tdatamodx_site_content[".importFields"][] = "template";
$tdatamodx_site_content[".importFields"][] = "menuindex";
$tdatamodx_site_content[".importFields"][] = "searchable";
$tdatamodx_site_content[".importFields"][] = "cacheable";
$tdatamodx_site_content[".importFields"][] = "createdby";
$tdatamodx_site_content[".importFields"][] = "createdon";
$tdatamodx_site_content[".importFields"][] = "editedby";
$tdatamodx_site_content[".importFields"][] = "editedon";
$tdatamodx_site_content[".importFields"][] = "deleted";
$tdatamodx_site_content[".importFields"][] = "deletedon";
$tdatamodx_site_content[".importFields"][] = "deletedby";
$tdatamodx_site_content[".importFields"][] = "publishedon";
$tdatamodx_site_content[".importFields"][] = "publishedby";
$tdatamodx_site_content[".importFields"][] = "menutitle";
$tdatamodx_site_content[".importFields"][] = "donthit";
$tdatamodx_site_content[".importFields"][] = "haskeywords";
$tdatamodx_site_content[".importFields"][] = "hasmetatags";
$tdatamodx_site_content[".importFields"][] = "privateweb";
$tdatamodx_site_content[".importFields"][] = "privatemgr";
$tdatamodx_site_content[".importFields"][] = "content_dispo";
$tdatamodx_site_content[".importFields"][] = "hidemenu";
$tdatamodx_site_content[".importFields"][] = "alias_visible";
$tdatamodx_site_content[".importFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".importFields"][] = "modx_site_snippet_id";

$tdatamodx_site_content[".printFields"] = array();
$tdatamodx_site_content[".printFields"][] = "link";
$tdatamodx_site_content[".printFields"][] = "id";
$tdatamodx_site_content[".printFields"][] = "url";
$tdatamodx_site_content[".printFields"][] = "content";
$tdatamodx_site_content[".printFields"][] = "introtext";
$tdatamodx_site_content[".printFields"][] = "menuindex";
$tdatamodx_site_content[".printFields"][] = "richtext";
$tdatamodx_site_content[".printFields"][] = "modx_site_snippet_id";
$tdatamodx_site_content[".printFields"][] = "modex_site_htmlsnippet_id";
$tdatamodx_site_content[".printFields"][] = "template";
$tdatamodx_site_content[".printFields"][] = "type";
$tdatamodx_site_content[".printFields"][] = "publishedon";
$tdatamodx_site_content[".printFields"][] = "contentType";
$tdatamodx_site_content[".printFields"][] = "pagetitle";
$tdatamodx_site_content[".printFields"][] = "longtitle";
$tdatamodx_site_content[".printFields"][] = "description";
$tdatamodx_site_content[".printFields"][] = "alias";
$tdatamodx_site_content[".printFields"][] = "link_attributes";
$tdatamodx_site_content[".printFields"][] = "published";
$tdatamodx_site_content[".printFields"][] = "pub_date";
$tdatamodx_site_content[".printFields"][] = "unpub_date";
$tdatamodx_site_content[".printFields"][] = "parent";
$tdatamodx_site_content[".printFields"][] = "isfolder";
$tdatamodx_site_content[".printFields"][] = "searchable";
$tdatamodx_site_content[".printFields"][] = "cacheable";
$tdatamodx_site_content[".printFields"][] = "createdby";
$tdatamodx_site_content[".printFields"][] = "createdon";
$tdatamodx_site_content[".printFields"][] = "editedby";
$tdatamodx_site_content[".printFields"][] = "editedon";
$tdatamodx_site_content[".printFields"][] = "deleted";
$tdatamodx_site_content[".printFields"][] = "deletedon";
$tdatamodx_site_content[".printFields"][] = "deletedby";
$tdatamodx_site_content[".printFields"][] = "publishedby";
$tdatamodx_site_content[".printFields"][] = "menutitle";
$tdatamodx_site_content[".printFields"][] = "donthit";
$tdatamodx_site_content[".printFields"][] = "haskeywords";
$tdatamodx_site_content[".printFields"][] = "hasmetatags";
$tdatamodx_site_content[".printFields"][] = "privateweb";
$tdatamodx_site_content[".printFields"][] = "privatemgr";
$tdatamodx_site_content[".printFields"][] = "content_dispo";
$tdatamodx_site_content[".printFields"][] = "hidemenu";
$tdatamodx_site_content[".printFields"][] = "alias_visible";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","id");
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




	$tdatamodx_site_content["id"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("modx_site_content","url");
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




	$tdatamodx_site_content["url"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("modx_site_content","link");
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




	$tdatamodx_site_content["link"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","type");
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




	$tdatamodx_site_content["type"] = $fdata;
//	contentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contentType";
	$fdata["GoodName"] = "contentType";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","contentType");
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




	$tdatamodx_site_content["contentType"] = $fdata;
//	pagetitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pagetitle";
	$fdata["GoodName"] = "pagetitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","pagetitle");
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




	$tdatamodx_site_content["pagetitle"] = $fdata;
//	longtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "longtitle";
	$fdata["GoodName"] = "longtitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","longtitle");
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




	$tdatamodx_site_content["longtitle"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","description");
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




	$tdatamodx_site_content["description"] = $fdata;
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","alias");
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




	$tdatamodx_site_content["alias"] = $fdata;
//	link_attributes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "link_attributes";
	$fdata["GoodName"] = "link_attributes";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","link_attributes");
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




	$tdatamodx_site_content["link_attributes"] = $fdata;
//	published
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "published";
	$fdata["GoodName"] = "published";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","published");
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




	$tdatamodx_site_content["published"] = $fdata;
//	pub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pub_date";
	$fdata["GoodName"] = "pub_date";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","pub_date");
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




	$tdatamodx_site_content["pub_date"] = $fdata;
//	unpub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "unpub_date";
	$fdata["GoodName"] = "unpub_date";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","unpub_date");
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




	$tdatamodx_site_content["unpub_date"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","parent");
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




	$tdatamodx_site_content["parent"] = $fdata;
//	isfolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "isfolder";
	$fdata["GoodName"] = "isfolder";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","isfolder");
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




	$tdatamodx_site_content["isfolder"] = $fdata;
//	introtext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "introtext";
	$fdata["GoodName"] = "introtext";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","introtext");
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




	$tdatamodx_site_content["introtext"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","content");
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




	$tdatamodx_site_content["content"] = $fdata;
//	richtext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "richtext";
	$fdata["GoodName"] = "richtext";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","richtext");
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




	$tdatamodx_site_content["richtext"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","template");
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




	$tdatamodx_site_content["template"] = $fdata;
//	menuindex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "menuindex";
	$fdata["GoodName"] = "menuindex";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","menuindex");
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




	$tdatamodx_site_content["menuindex"] = $fdata;
//	searchable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "searchable";
	$fdata["GoodName"] = "searchable";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","searchable");
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




	$tdatamodx_site_content["searchable"] = $fdata;
//	cacheable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cacheable";
	$fdata["GoodName"] = "cacheable";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","cacheable");
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




	$tdatamodx_site_content["cacheable"] = $fdata;
//	createdby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "createdby";
	$fdata["GoodName"] = "createdby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","createdby");
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




	$tdatamodx_site_content["createdby"] = $fdata;
//	createdon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "createdon";
	$fdata["GoodName"] = "createdon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","createdon");
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




	$tdatamodx_site_content["createdon"] = $fdata;
//	editedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "editedby";
	$fdata["GoodName"] = "editedby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","editedby");
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




	$tdatamodx_site_content["editedby"] = $fdata;
//	editedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "editedon";
	$fdata["GoodName"] = "editedon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","editedon");
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




	$tdatamodx_site_content["editedon"] = $fdata;
//	deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "deleted";
	$fdata["GoodName"] = "deleted";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","deleted");
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




	$tdatamodx_site_content["deleted"] = $fdata;
//	deletedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "deletedon";
	$fdata["GoodName"] = "deletedon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","deletedon");
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




	$tdatamodx_site_content["deletedon"] = $fdata;
//	deletedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "deletedby";
	$fdata["GoodName"] = "deletedby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","deletedby");
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




	$tdatamodx_site_content["deletedby"] = $fdata;
//	publishedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "publishedon";
	$fdata["GoodName"] = "publishedon";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","publishedon");
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




	$tdatamodx_site_content["publishedon"] = $fdata;
//	publishedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "publishedby";
	$fdata["GoodName"] = "publishedby";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","publishedby");
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




	$tdatamodx_site_content["publishedby"] = $fdata;
//	menutitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "menutitle";
	$fdata["GoodName"] = "menutitle";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","menutitle");
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

		$edata["controlWidth"] = 50;

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




	$tdatamodx_site_content["menutitle"] = $fdata;
//	donthit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "donthit";
	$fdata["GoodName"] = "donthit";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","donthit");
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




	$tdatamodx_site_content["donthit"] = $fdata;
//	haskeywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "haskeywords";
	$fdata["GoodName"] = "haskeywords";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","haskeywords");
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




	$tdatamodx_site_content["haskeywords"] = $fdata;
//	hasmetatags
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "hasmetatags";
	$fdata["GoodName"] = "hasmetatags";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","hasmetatags");
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




	$tdatamodx_site_content["hasmetatags"] = $fdata;
//	privateweb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "privateweb";
	$fdata["GoodName"] = "privateweb";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","privateweb");
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




	$tdatamodx_site_content["privateweb"] = $fdata;
//	privatemgr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "privatemgr";
	$fdata["GoodName"] = "privatemgr";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","privatemgr");
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




	$tdatamodx_site_content["privatemgr"] = $fdata;
//	content_dispo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "content_dispo";
	$fdata["GoodName"] = "content_dispo";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","content_dispo");
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




	$tdatamodx_site_content["content_dispo"] = $fdata;
//	hidemenu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "hidemenu";
	$fdata["GoodName"] = "hidemenu";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","hidemenu");
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




	$tdatamodx_site_content["hidemenu"] = $fdata;
//	alias_visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "alias_visible";
	$fdata["GoodName"] = "alias_visible";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","alias_visible");
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




	$tdatamodx_site_content["alias_visible"] = $fdata;
//	modex_site_htmlsnippet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "modex_site_htmlsnippet_id";
	$fdata["GoodName"] = "modex_site_htmlsnippet_id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","modex_site_htmlsnippet_id");
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




	$tdatamodx_site_content["modex_site_htmlsnippet_id"] = $fdata;
//	modx_site_snippet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "modx_site_snippet_id";
	$fdata["GoodName"] = "modx_site_snippet_id";
	$fdata["ownerTable"] = "modx_site_content";
	$fdata["Label"] = GetFieldLabel("modx_site_content","modx_site_snippet_id");
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




	$tdatamodx_site_content["modx_site_snippet_id"] = $fdata;


$tables_data["modx_site_content"]=&$tdatamodx_site_content;
$field_labels["modx_site_content"] = &$fieldLabelsmodx_site_content;
$fieldToolTips["modx_site_content"] = &$fieldToolTipsmodx_site_content;
$placeHolders["modx_site_content"] = &$placeHoldersmodx_site_content;
$page_titles["modx_site_content"] = &$pageTitlesmodx_site_content;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_site_content"] = array();
//	modx_site_templates
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="modx_site_templates";
		$detailsParam["dOriginalTable"] = "modx_site_templates";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "modx_site_templates";
	$detailsParam["dCaptionTable"] = GetTableCaption("modx_site_templates");
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
		
	$detailsTablesData["modx_site_content"][$dIndex] = $detailsParam;

	
		$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"][]="template";

				$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"][]="id";
//	modx_site_snippets
	
	

		$dIndex = 1;
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
		
	$detailsTablesData["modx_site_content"][$dIndex] = $detailsParam;

	
		$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"][]="modx_site_content_id";
//	modx_site_htmlsnippets
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="modx_site_htmlsnippets";
		$detailsParam["dOriginalTable"] = "modx_site_htmlsnippets";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "modx_site_htmlsnippets";
	$detailsParam["dCaptionTable"] = GetTableCaption("modx_site_htmlsnippets");
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
		
	$detailsTablesData["modx_site_content"][$dIndex] = $detailsParam;

	
		$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"][]="modx_site_content_id";
//	modx_site_content_child
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="modx_site_content_child";
		$detailsParam["dOriginalTable"] = "modx_site_content";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "modx_site_content_child";
	$detailsParam["dCaptionTable"] = GetTableCaption("modx_site_content_child");
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
		
	$detailsTablesData["modx_site_content"][$dIndex] = $detailsParam;

	
		$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["modx_site_content"][$dIndex]["detailKeys"][]="parent";

// tables which are master tables for current table (detail)
$masterTablesData["modx_site_content"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_site_content()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "id,  CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END AS url,  CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END AS link,  `type`,  contentType,  pagetitle,  longtitle,  description,  `alias`,  link_attributes,  published,  pub_date,  unpub_date,  parent,  isfolder,  introtext,  content,  richtext,  template,  menuindex,  searchable,  cacheable,  createdby,  createdon,  editedby,  editedon,  deleted,  deletedon,  deletedby,  publishedon,  publishedby,  menutitle,  donthit,  haskeywords,  hasmetatags,  privateweb,  privatemgr,  content_dispo,  hidemenu,  alias_visible,  modex_site_htmlsnippet_id,  modx_site_snippet_id";
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
	"m_srcTableName" => "modx_site_content"
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
	"m_srcTableName" => "modx_site_content"
));

$proto7["m_sql"] = "id";
$proto7["m_srcTableName"] = "modx_site_content";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto1["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END"
));

$proto9["m_sql"] = "CASE WHEN Parent=0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",alias,\".html height=280\",\"></iframe>\")      WHEN Parent>0 THEN concat(\"<iframe src=\",\"/cms/modx/1/\",Parent,\"/\",alias,\".html height=280\",\"></iframe>\")      ELSE  null END";
$proto9["m_srcTableName"] = "modx_site_content";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "url";
$obj = new SQLFieldListItem($proto9);

$proto1["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END"
));

$proto11["m_sql"] = "CASE WHEN Parent=0 THEN concat(\"/cms/modx/1/\",alias,\".html\")      WHEN Parent>0 THEN concat(\"/cms/modx/1/\",Parent,\"/\",alias,\".html\")      ELSE  null END";
$proto11["m_srcTableName"] = "modx_site_content";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "link";
$obj = new SQLFieldListItem($proto11);

$proto1["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto13["m_sql"] = "`type`";
$proto13["m_srcTableName"] = "modx_site_content";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto1["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "contentType",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto15["m_sql"] = "contentType";
$proto15["m_srcTableName"] = "modx_site_content";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto1["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pagetitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto17["m_sql"] = "pagetitle";
$proto17["m_srcTableName"] = "modx_site_content";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto1["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "longtitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto19["m_sql"] = "longtitle";
$proto19["m_srcTableName"] = "modx_site_content";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto1["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto21["m_sql"] = "description";
$proto21["m_srcTableName"] = "modx_site_content";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto1["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto23["m_sql"] = "`alias`";
$proto23["m_srcTableName"] = "modx_site_content";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto1["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "link_attributes",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto25["m_sql"] = "link_attributes";
$proto25["m_srcTableName"] = "modx_site_content";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto1["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "published",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto27["m_sql"] = "published";
$proto27["m_srcTableName"] = "modx_site_content";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto1["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "pub_date",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto29["m_sql"] = "pub_date";
$proto29["m_srcTableName"] = "modx_site_content";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto1["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "unpub_date",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto31["m_sql"] = "unpub_date";
$proto31["m_srcTableName"] = "modx_site_content";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto1["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto33["m_sql"] = "parent";
$proto33["m_srcTableName"] = "modx_site_content";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto1["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "isfolder",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto35["m_sql"] = "isfolder";
$proto35["m_srcTableName"] = "modx_site_content";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto1["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "introtext",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto37["m_sql"] = "introtext";
$proto37["m_srcTableName"] = "modx_site_content";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto1["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto39["m_sql"] = "content";
$proto39["m_srcTableName"] = "modx_site_content";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto1["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "richtext",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto41["m_sql"] = "richtext";
$proto41["m_srcTableName"] = "modx_site_content";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto1["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto43["m_sql"] = "template";
$proto43["m_srcTableName"] = "modx_site_content";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto1["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "menuindex",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto45["m_sql"] = "menuindex";
$proto45["m_srcTableName"] = "modx_site_content";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto1["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "searchable",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto47["m_sql"] = "searchable";
$proto47["m_srcTableName"] = "modx_site_content";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto1["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "cacheable",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto49["m_sql"] = "cacheable";
$proto49["m_srcTableName"] = "modx_site_content";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto1["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "createdby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto51["m_sql"] = "createdby";
$proto51["m_srcTableName"] = "modx_site_content";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto1["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "createdon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto53["m_sql"] = "createdon";
$proto53["m_srcTableName"] = "modx_site_content";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto1["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "editedby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto55["m_sql"] = "editedby";
$proto55["m_srcTableName"] = "modx_site_content";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto1["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "editedon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto57["m_sql"] = "editedon";
$proto57["m_srcTableName"] = "modx_site_content";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto1["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto59["m_sql"] = "deleted";
$proto59["m_srcTableName"] = "modx_site_content";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto1["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "deletedon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto61["m_sql"] = "deletedon";
$proto61["m_srcTableName"] = "modx_site_content";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto1["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "deletedby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto63["m_sql"] = "deletedby";
$proto63["m_srcTableName"] = "modx_site_content";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto1["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedon",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto65["m_sql"] = "publishedon";
$proto65["m_srcTableName"] = "modx_site_content";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto1["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedby",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto67["m_sql"] = "publishedby";
$proto67["m_srcTableName"] = "modx_site_content";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto1["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "menutitle",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto69["m_sql"] = "menutitle";
$proto69["m_srcTableName"] = "modx_site_content";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto1["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "donthit",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto71["m_sql"] = "donthit";
$proto71["m_srcTableName"] = "modx_site_content";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto1["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "haskeywords",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto73["m_sql"] = "haskeywords";
$proto73["m_srcTableName"] = "modx_site_content";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto1["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "hasmetatags",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto75["m_sql"] = "hasmetatags";
$proto75["m_srcTableName"] = "modx_site_content";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto1["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "privateweb",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto77["m_sql"] = "privateweb";
$proto77["m_srcTableName"] = "modx_site_content";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto1["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "privatemgr",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto79["m_sql"] = "privatemgr";
$proto79["m_srcTableName"] = "modx_site_content";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto1["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "content_dispo",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto81["m_sql"] = "content_dispo";
$proto81["m_srcTableName"] = "modx_site_content";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto1["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "hidemenu",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto83["m_sql"] = "hidemenu";
$proto83["m_srcTableName"] = "modx_site_content";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto1["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "alias_visible",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto85["m_sql"] = "alias_visible";
$proto85["m_srcTableName"] = "modx_site_content";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto1["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "modex_site_htmlsnippet_id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto87["m_sql"] = "modex_site_htmlsnippet_id";
$proto87["m_srcTableName"] = "modx_site_content";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto1["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "modx_site_snippet_id",
	"m_strTable" => "modx_site_content",
	"m_srcTableName" => "modx_site_content"
));

$proto89["m_sql"] = "modx_site_snippet_id";
$proto89["m_srcTableName"] = "modx_site_content";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto91=array();
$proto91["m_link"] = "SQLL_MAIN";
			$proto92=array();
$proto92["m_strName"] = "modx_site_content";
$proto92["m_srcTableName"] = "modx_site_content";
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
$proto91["m_srcTableName"] = "modx_site_content";
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
	"m_srcTableName" => "modx_site_content"
));

$proto95["m_column"]=$obj;
$proto95["m_bAsc"] = 0;
$proto95["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto95);

$proto1["m_orderby"][]=$obj;					
$proto1["m_srcTableName"]="modx_site_content";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_modx_site_content = createSqlQuery_modx_site_content();


	
						;

																																										

$tdatamodx_site_content[".sqlquery"] = $queryData_modx_site_content;

$tableEvents["modx_site_content"] = new eventsBase;
$tdatamodx_site_content[".hasEvents"] = false;

?>
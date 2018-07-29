<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodxdf_site_content = array();
	$tdatamodxdf_site_content[".truncateText"] = true;
	$tdatamodxdf_site_content[".NumberOfChars"] = 80;
	$tdatamodxdf_site_content[".ShortName"] = "modxdf_site_content";
	$tdatamodxdf_site_content[".OwnerID"] = "";
	$tdatamodxdf_site_content[".OriginalTable"] = "modxdf_site_content";

//	field labels
$fieldLabelsmodxdf_site_content = array();
$fieldToolTipsmodxdf_site_content = array();
$pageTitlesmodxdf_site_content = array();
$placeHoldersmodxdf_site_content = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodxdf_site_content["Japanese"] = array();
	$fieldToolTipsmodxdf_site_content["Japanese"] = array();
	$placeHoldersmodxdf_site_content["Japanese"] = array();
	$pageTitlesmodxdf_site_content["Japanese"] = array();
	$fieldLabelsmodxdf_site_content["Japanese"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_content["Japanese"]["id"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["id"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["type"] = "Type";
	$fieldToolTipsmodxdf_site_content["Japanese"]["type"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["type"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["contentType"] = "Content Type";
	$fieldToolTipsmodxdf_site_content["Japanese"]["contentType"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["contentType"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodxdf_site_content["Japanese"]["pagetitle"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["pagetitle"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodxdf_site_content["Japanese"]["longtitle"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["longtitle"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_content["Japanese"]["description"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["description"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["alias"] = "Alias";
	$fieldToolTipsmodxdf_site_content["Japanese"]["alias"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["alias"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodxdf_site_content["Japanese"]["link_attributes"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["link_attributes"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["published"] = "Published";
	$fieldToolTipsmodxdf_site_content["Japanese"]["published"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["published"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodxdf_site_content["Japanese"]["pub_date"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["pub_date"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodxdf_site_content["Japanese"]["unpub_date"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["unpub_date"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["parent"] = "Parent";
	$fieldToolTipsmodxdf_site_content["Japanese"]["parent"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["parent"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["isfolder"] = "Isfolder";
	$fieldToolTipsmodxdf_site_content["Japanese"]["isfolder"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["isfolder"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["introtext"] = "Introtext";
	$fieldToolTipsmodxdf_site_content["Japanese"]["introtext"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["introtext"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["content"] = "Content";
	$fieldToolTipsmodxdf_site_content["Japanese"]["content"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["content"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["richtext"] = "Richtext";
	$fieldToolTipsmodxdf_site_content["Japanese"]["richtext"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["richtext"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["template"] = "Template";
	$fieldToolTipsmodxdf_site_content["Japanese"]["template"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["template"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["menuindex"] = "Menuindex";
	$fieldToolTipsmodxdf_site_content["Japanese"]["menuindex"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["menuindex"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["searchable"] = "Searchable";
	$fieldToolTipsmodxdf_site_content["Japanese"]["searchable"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["searchable"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["cacheable"] = "Cacheable";
	$fieldToolTipsmodxdf_site_content["Japanese"]["cacheable"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["cacheable"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["createdby"] = "Createdby";
	$fieldToolTipsmodxdf_site_content["Japanese"]["createdby"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["createdby"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["createdon"] = "Createdon";
	$fieldToolTipsmodxdf_site_content["Japanese"]["createdon"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["createdon"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["editedby"] = "Editedby";
	$fieldToolTipsmodxdf_site_content["Japanese"]["editedby"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["editedby"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["editedon"] = "Editedon";
	$fieldToolTipsmodxdf_site_content["Japanese"]["editedon"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["editedon"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["deleted"] = "Deleted";
	$fieldToolTipsmodxdf_site_content["Japanese"]["deleted"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["deleted"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["deletedon"] = "Deletedon";
	$fieldToolTipsmodxdf_site_content["Japanese"]["deletedon"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["deletedon"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["deletedby"] = "Deletedby";
	$fieldToolTipsmodxdf_site_content["Japanese"]["deletedby"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["deletedby"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["publishedon"] = "Publishedon";
	$fieldToolTipsmodxdf_site_content["Japanese"]["publishedon"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["publishedon"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["publishedby"] = "Publishedby";
	$fieldToolTipsmodxdf_site_content["Japanese"]["publishedby"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["publishedby"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["menutitle"] = "Menutitle";
	$fieldToolTipsmodxdf_site_content["Japanese"]["menutitle"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["menutitle"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["donthit"] = "Donthit";
	$fieldToolTipsmodxdf_site_content["Japanese"]["donthit"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["donthit"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["privateweb"] = "Privateweb";
	$fieldToolTipsmodxdf_site_content["Japanese"]["privateweb"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["privateweb"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["privatemgr"] = "Privatemgr";
	$fieldToolTipsmodxdf_site_content["Japanese"]["privatemgr"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["privatemgr"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["content_dispo"] = "Content Dispo";
	$fieldToolTipsmodxdf_site_content["Japanese"]["content_dispo"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["content_dispo"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["hidemenu"] = "Hidemenu";
	$fieldToolTipsmodxdf_site_content["Japanese"]["hidemenu"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["hidemenu"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["class_key"] = "Class Key";
	$fieldToolTipsmodxdf_site_content["Japanese"]["class_key"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["class_key"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["context_key"] = "Context Key";
	$fieldToolTipsmodxdf_site_content["Japanese"]["context_key"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["context_key"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["content_type"] = "Content Type";
	$fieldToolTipsmodxdf_site_content["Japanese"]["content_type"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["content_type"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["uri"] = "Uri";
	$fieldToolTipsmodxdf_site_content["Japanese"]["uri"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["uri"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["uri_override"] = "Uri Override";
	$fieldToolTipsmodxdf_site_content["Japanese"]["uri_override"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["uri_override"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["hide_children_in_tree"] = "Hide Children In Tree";
	$fieldToolTipsmodxdf_site_content["Japanese"]["hide_children_in_tree"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["hide_children_in_tree"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["show_in_tree"] = "Show In Tree";
	$fieldToolTipsmodxdf_site_content["Japanese"]["show_in_tree"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["show_in_tree"] = "";
	$fieldLabelsmodxdf_site_content["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_content["Japanese"]["properties"] = "";
	$placeHoldersmodxdf_site_content["Japanese"]["properties"] = "";
	if (count($fieldToolTipsmodxdf_site_content["Japanese"]))
		$tdatamodxdf_site_content[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodxdf_site_content["English"] = array();
	$fieldToolTipsmodxdf_site_content["English"] = array();
	$placeHoldersmodxdf_site_content["English"] = array();
	$pageTitlesmodxdf_site_content["English"] = array();
	$fieldLabelsmodxdf_site_content["English"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_content["English"]["id"] = "";
	$placeHoldersmodxdf_site_content["English"]["id"] = "";
	$fieldLabelsmodxdf_site_content["English"]["type"] = "Type";
	$fieldToolTipsmodxdf_site_content["English"]["type"] = "";
	$placeHoldersmodxdf_site_content["English"]["type"] = "";
	$fieldLabelsmodxdf_site_content["English"]["contentType"] = "Content Type";
	$fieldToolTipsmodxdf_site_content["English"]["contentType"] = "";
	$placeHoldersmodxdf_site_content["English"]["contentType"] = "";
	$fieldLabelsmodxdf_site_content["English"]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodxdf_site_content["English"]["pagetitle"] = "";
	$placeHoldersmodxdf_site_content["English"]["pagetitle"] = "";
	$fieldLabelsmodxdf_site_content["English"]["longtitle"] = "Longtitle";
	$fieldToolTipsmodxdf_site_content["English"]["longtitle"] = "";
	$placeHoldersmodxdf_site_content["English"]["longtitle"] = "";
	$fieldLabelsmodxdf_site_content["English"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_content["English"]["description"] = "";
	$placeHoldersmodxdf_site_content["English"]["description"] = "";
	$fieldLabelsmodxdf_site_content["English"]["alias"] = "Alias";
	$fieldToolTipsmodxdf_site_content["English"]["alias"] = "";
	$placeHoldersmodxdf_site_content["English"]["alias"] = "";
	$fieldLabelsmodxdf_site_content["English"]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodxdf_site_content["English"]["link_attributes"] = "";
	$placeHoldersmodxdf_site_content["English"]["link_attributes"] = "";
	$fieldLabelsmodxdf_site_content["English"]["published"] = "Published";
	$fieldToolTipsmodxdf_site_content["English"]["published"] = "";
	$placeHoldersmodxdf_site_content["English"]["published"] = "";
	$fieldLabelsmodxdf_site_content["English"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodxdf_site_content["English"]["pub_date"] = "";
	$placeHoldersmodxdf_site_content["English"]["pub_date"] = "";
	$fieldLabelsmodxdf_site_content["English"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodxdf_site_content["English"]["unpub_date"] = "";
	$placeHoldersmodxdf_site_content["English"]["unpub_date"] = "";
	$fieldLabelsmodxdf_site_content["English"]["parent"] = "Parent";
	$fieldToolTipsmodxdf_site_content["English"]["parent"] = "";
	$placeHoldersmodxdf_site_content["English"]["parent"] = "";
	$fieldLabelsmodxdf_site_content["English"]["isfolder"] = "Isfolder";
	$fieldToolTipsmodxdf_site_content["English"]["isfolder"] = "";
	$placeHoldersmodxdf_site_content["English"]["isfolder"] = "";
	$fieldLabelsmodxdf_site_content["English"]["introtext"] = "Introtext";
	$fieldToolTipsmodxdf_site_content["English"]["introtext"] = "";
	$placeHoldersmodxdf_site_content["English"]["introtext"] = "";
	$fieldLabelsmodxdf_site_content["English"]["content"] = "Content";
	$fieldToolTipsmodxdf_site_content["English"]["content"] = "";
	$placeHoldersmodxdf_site_content["English"]["content"] = "";
	$fieldLabelsmodxdf_site_content["English"]["richtext"] = "Richtext";
	$fieldToolTipsmodxdf_site_content["English"]["richtext"] = "";
	$placeHoldersmodxdf_site_content["English"]["richtext"] = "";
	$fieldLabelsmodxdf_site_content["English"]["template"] = "Template";
	$fieldToolTipsmodxdf_site_content["English"]["template"] = "";
	$placeHoldersmodxdf_site_content["English"]["template"] = "";
	$fieldLabelsmodxdf_site_content["English"]["menuindex"] = "Menuindex";
	$fieldToolTipsmodxdf_site_content["English"]["menuindex"] = "";
	$placeHoldersmodxdf_site_content["English"]["menuindex"] = "";
	$fieldLabelsmodxdf_site_content["English"]["searchable"] = "Searchable";
	$fieldToolTipsmodxdf_site_content["English"]["searchable"] = "";
	$placeHoldersmodxdf_site_content["English"]["searchable"] = "";
	$fieldLabelsmodxdf_site_content["English"]["cacheable"] = "Cacheable";
	$fieldToolTipsmodxdf_site_content["English"]["cacheable"] = "";
	$placeHoldersmodxdf_site_content["English"]["cacheable"] = "";
	$fieldLabelsmodxdf_site_content["English"]["createdby"] = "Createdby";
	$fieldToolTipsmodxdf_site_content["English"]["createdby"] = "";
	$placeHoldersmodxdf_site_content["English"]["createdby"] = "";
	$fieldLabelsmodxdf_site_content["English"]["createdon"] = "Createdon";
	$fieldToolTipsmodxdf_site_content["English"]["createdon"] = "";
	$placeHoldersmodxdf_site_content["English"]["createdon"] = "";
	$fieldLabelsmodxdf_site_content["English"]["editedby"] = "Editedby";
	$fieldToolTipsmodxdf_site_content["English"]["editedby"] = "";
	$placeHoldersmodxdf_site_content["English"]["editedby"] = "";
	$fieldLabelsmodxdf_site_content["English"]["editedon"] = "Editedon";
	$fieldToolTipsmodxdf_site_content["English"]["editedon"] = "";
	$placeHoldersmodxdf_site_content["English"]["editedon"] = "";
	$fieldLabelsmodxdf_site_content["English"]["deleted"] = "Deleted";
	$fieldToolTipsmodxdf_site_content["English"]["deleted"] = "";
	$placeHoldersmodxdf_site_content["English"]["deleted"] = "";
	$fieldLabelsmodxdf_site_content["English"]["deletedon"] = "Deletedon";
	$fieldToolTipsmodxdf_site_content["English"]["deletedon"] = "";
	$placeHoldersmodxdf_site_content["English"]["deletedon"] = "";
	$fieldLabelsmodxdf_site_content["English"]["deletedby"] = "Deletedby";
	$fieldToolTipsmodxdf_site_content["English"]["deletedby"] = "";
	$placeHoldersmodxdf_site_content["English"]["deletedby"] = "";
	$fieldLabelsmodxdf_site_content["English"]["publishedon"] = "Publishedon";
	$fieldToolTipsmodxdf_site_content["English"]["publishedon"] = "";
	$placeHoldersmodxdf_site_content["English"]["publishedon"] = "";
	$fieldLabelsmodxdf_site_content["English"]["publishedby"] = "Publishedby";
	$fieldToolTipsmodxdf_site_content["English"]["publishedby"] = "";
	$placeHoldersmodxdf_site_content["English"]["publishedby"] = "";
	$fieldLabelsmodxdf_site_content["English"]["menutitle"] = "Menutitle";
	$fieldToolTipsmodxdf_site_content["English"]["menutitle"] = "";
	$placeHoldersmodxdf_site_content["English"]["menutitle"] = "";
	$fieldLabelsmodxdf_site_content["English"]["donthit"] = "Donthit";
	$fieldToolTipsmodxdf_site_content["English"]["donthit"] = "";
	$placeHoldersmodxdf_site_content["English"]["donthit"] = "";
	$fieldLabelsmodxdf_site_content["English"]["privateweb"] = "Privateweb";
	$fieldToolTipsmodxdf_site_content["English"]["privateweb"] = "";
	$placeHoldersmodxdf_site_content["English"]["privateweb"] = "";
	$fieldLabelsmodxdf_site_content["English"]["privatemgr"] = "Privatemgr";
	$fieldToolTipsmodxdf_site_content["English"]["privatemgr"] = "";
	$placeHoldersmodxdf_site_content["English"]["privatemgr"] = "";
	$fieldLabelsmodxdf_site_content["English"]["content_dispo"] = "Content Dispo";
	$fieldToolTipsmodxdf_site_content["English"]["content_dispo"] = "";
	$placeHoldersmodxdf_site_content["English"]["content_dispo"] = "";
	$fieldLabelsmodxdf_site_content["English"]["hidemenu"] = "Hidemenu";
	$fieldToolTipsmodxdf_site_content["English"]["hidemenu"] = "";
	$placeHoldersmodxdf_site_content["English"]["hidemenu"] = "";
	$fieldLabelsmodxdf_site_content["English"]["class_key"] = "Class Key";
	$fieldToolTipsmodxdf_site_content["English"]["class_key"] = "";
	$placeHoldersmodxdf_site_content["English"]["class_key"] = "";
	$fieldLabelsmodxdf_site_content["English"]["context_key"] = "Context Key";
	$fieldToolTipsmodxdf_site_content["English"]["context_key"] = "";
	$placeHoldersmodxdf_site_content["English"]["context_key"] = "";
	$fieldLabelsmodxdf_site_content["English"]["content_type"] = "Content Type";
	$fieldToolTipsmodxdf_site_content["English"]["content_type"] = "";
	$placeHoldersmodxdf_site_content["English"]["content_type"] = "";
	$fieldLabelsmodxdf_site_content["English"]["uri"] = "Uri";
	$fieldToolTipsmodxdf_site_content["English"]["uri"] = "";
	$placeHoldersmodxdf_site_content["English"]["uri"] = "";
	$fieldLabelsmodxdf_site_content["English"]["uri_override"] = "Uri Override";
	$fieldToolTipsmodxdf_site_content["English"]["uri_override"] = "";
	$placeHoldersmodxdf_site_content["English"]["uri_override"] = "";
	$fieldLabelsmodxdf_site_content["English"]["hide_children_in_tree"] = "Hide Children In Tree";
	$fieldToolTipsmodxdf_site_content["English"]["hide_children_in_tree"] = "";
	$placeHoldersmodxdf_site_content["English"]["hide_children_in_tree"] = "";
	$fieldLabelsmodxdf_site_content["English"]["show_in_tree"] = "Show In Tree";
	$fieldToolTipsmodxdf_site_content["English"]["show_in_tree"] = "";
	$placeHoldersmodxdf_site_content["English"]["show_in_tree"] = "";
	$fieldLabelsmodxdf_site_content["English"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_content["English"]["properties"] = "";
	$placeHoldersmodxdf_site_content["English"]["properties"] = "";
	if (count($fieldToolTipsmodxdf_site_content["English"]))
		$tdatamodxdf_site_content[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodxdf_site_content[""] = array();
	$fieldToolTipsmodxdf_site_content[""] = array();
	$placeHoldersmodxdf_site_content[""] = array();
	$pageTitlesmodxdf_site_content[""] = array();
	$fieldLabelsmodxdf_site_content[""]["id"] = "Id";
	$fieldToolTipsmodxdf_site_content[""]["id"] = "";
	$placeHoldersmodxdf_site_content[""]["id"] = "";
	$fieldLabelsmodxdf_site_content[""]["type"] = "Type";
	$fieldToolTipsmodxdf_site_content[""]["type"] = "";
	$placeHoldersmodxdf_site_content[""]["type"] = "";
	$fieldLabelsmodxdf_site_content[""]["contentType"] = "Content Type";
	$fieldToolTipsmodxdf_site_content[""]["contentType"] = "";
	$placeHoldersmodxdf_site_content[""]["contentType"] = "";
	$fieldLabelsmodxdf_site_content[""]["pagetitle"] = "Pagetitle";
	$fieldToolTipsmodxdf_site_content[""]["pagetitle"] = "";
	$placeHoldersmodxdf_site_content[""]["pagetitle"] = "";
	$fieldLabelsmodxdf_site_content[""]["longtitle"] = "Longtitle";
	$fieldToolTipsmodxdf_site_content[""]["longtitle"] = "";
	$placeHoldersmodxdf_site_content[""]["longtitle"] = "";
	$fieldLabelsmodxdf_site_content[""]["description"] = "Description";
	$fieldToolTipsmodxdf_site_content[""]["description"] = "";
	$placeHoldersmodxdf_site_content[""]["description"] = "";
	$fieldLabelsmodxdf_site_content[""]["alias"] = "Alias";
	$fieldToolTipsmodxdf_site_content[""]["alias"] = "";
	$placeHoldersmodxdf_site_content[""]["alias"] = "";
	$fieldLabelsmodxdf_site_content[""]["link_attributes"] = "Link Attributes";
	$fieldToolTipsmodxdf_site_content[""]["link_attributes"] = "";
	$placeHoldersmodxdf_site_content[""]["link_attributes"] = "";
	$fieldLabelsmodxdf_site_content[""]["published"] = "Published";
	$fieldToolTipsmodxdf_site_content[""]["published"] = "";
	$placeHoldersmodxdf_site_content[""]["published"] = "";
	$fieldLabelsmodxdf_site_content[""]["pub_date"] = "Pub Date";
	$fieldToolTipsmodxdf_site_content[""]["pub_date"] = "";
	$placeHoldersmodxdf_site_content[""]["pub_date"] = "";
	$fieldLabelsmodxdf_site_content[""]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodxdf_site_content[""]["unpub_date"] = "";
	$placeHoldersmodxdf_site_content[""]["unpub_date"] = "";
	$fieldLabelsmodxdf_site_content[""]["parent"] = "Parent";
	$fieldToolTipsmodxdf_site_content[""]["parent"] = "";
	$placeHoldersmodxdf_site_content[""]["parent"] = "";
	$fieldLabelsmodxdf_site_content[""]["isfolder"] = "Isfolder";
	$fieldToolTipsmodxdf_site_content[""]["isfolder"] = "";
	$placeHoldersmodxdf_site_content[""]["isfolder"] = "";
	$fieldLabelsmodxdf_site_content[""]["introtext"] = "Introtext";
	$fieldToolTipsmodxdf_site_content[""]["introtext"] = "";
	$placeHoldersmodxdf_site_content[""]["introtext"] = "";
	$fieldLabelsmodxdf_site_content[""]["content"] = "Content";
	$fieldToolTipsmodxdf_site_content[""]["content"] = "";
	$placeHoldersmodxdf_site_content[""]["content"] = "";
	$fieldLabelsmodxdf_site_content[""]["richtext"] = "Richtext";
	$fieldToolTipsmodxdf_site_content[""]["richtext"] = "";
	$placeHoldersmodxdf_site_content[""]["richtext"] = "";
	$fieldLabelsmodxdf_site_content[""]["template"] = "Template";
	$fieldToolTipsmodxdf_site_content[""]["template"] = "";
	$placeHoldersmodxdf_site_content[""]["template"] = "";
	$fieldLabelsmodxdf_site_content[""]["menuindex"] = "Menuindex";
	$fieldToolTipsmodxdf_site_content[""]["menuindex"] = "";
	$placeHoldersmodxdf_site_content[""]["menuindex"] = "";
	$fieldLabelsmodxdf_site_content[""]["searchable"] = "Searchable";
	$fieldToolTipsmodxdf_site_content[""]["searchable"] = "";
	$placeHoldersmodxdf_site_content[""]["searchable"] = "";
	$fieldLabelsmodxdf_site_content[""]["cacheable"] = "Cacheable";
	$fieldToolTipsmodxdf_site_content[""]["cacheable"] = "";
	$placeHoldersmodxdf_site_content[""]["cacheable"] = "";
	$fieldLabelsmodxdf_site_content[""]["createdby"] = "Createdby";
	$fieldToolTipsmodxdf_site_content[""]["createdby"] = "";
	$placeHoldersmodxdf_site_content[""]["createdby"] = "";
	$fieldLabelsmodxdf_site_content[""]["createdon"] = "Createdon";
	$fieldToolTipsmodxdf_site_content[""]["createdon"] = "";
	$placeHoldersmodxdf_site_content[""]["createdon"] = "";
	$fieldLabelsmodxdf_site_content[""]["editedby"] = "Editedby";
	$fieldToolTipsmodxdf_site_content[""]["editedby"] = "";
	$placeHoldersmodxdf_site_content[""]["editedby"] = "";
	$fieldLabelsmodxdf_site_content[""]["editedon"] = "Editedon";
	$fieldToolTipsmodxdf_site_content[""]["editedon"] = "";
	$placeHoldersmodxdf_site_content[""]["editedon"] = "";
	$fieldLabelsmodxdf_site_content[""]["deleted"] = "Deleted";
	$fieldToolTipsmodxdf_site_content[""]["deleted"] = "";
	$placeHoldersmodxdf_site_content[""]["deleted"] = "";
	$fieldLabelsmodxdf_site_content[""]["deletedon"] = "Deletedon";
	$fieldToolTipsmodxdf_site_content[""]["deletedon"] = "";
	$placeHoldersmodxdf_site_content[""]["deletedon"] = "";
	$fieldLabelsmodxdf_site_content[""]["deletedby"] = "Deletedby";
	$fieldToolTipsmodxdf_site_content[""]["deletedby"] = "";
	$placeHoldersmodxdf_site_content[""]["deletedby"] = "";
	$fieldLabelsmodxdf_site_content[""]["publishedon"] = "Publishedon";
	$fieldToolTipsmodxdf_site_content[""]["publishedon"] = "";
	$placeHoldersmodxdf_site_content[""]["publishedon"] = "";
	$fieldLabelsmodxdf_site_content[""]["publishedby"] = "Publishedby";
	$fieldToolTipsmodxdf_site_content[""]["publishedby"] = "";
	$placeHoldersmodxdf_site_content[""]["publishedby"] = "";
	$fieldLabelsmodxdf_site_content[""]["menutitle"] = "Menutitle";
	$fieldToolTipsmodxdf_site_content[""]["menutitle"] = "";
	$placeHoldersmodxdf_site_content[""]["menutitle"] = "";
	$fieldLabelsmodxdf_site_content[""]["donthit"] = "Donthit";
	$fieldToolTipsmodxdf_site_content[""]["donthit"] = "";
	$placeHoldersmodxdf_site_content[""]["donthit"] = "";
	$fieldLabelsmodxdf_site_content[""]["privateweb"] = "Privateweb";
	$fieldToolTipsmodxdf_site_content[""]["privateweb"] = "";
	$placeHoldersmodxdf_site_content[""]["privateweb"] = "";
	$fieldLabelsmodxdf_site_content[""]["privatemgr"] = "Privatemgr";
	$fieldToolTipsmodxdf_site_content[""]["privatemgr"] = "";
	$placeHoldersmodxdf_site_content[""]["privatemgr"] = "";
	$fieldLabelsmodxdf_site_content[""]["content_dispo"] = "Content Dispo";
	$fieldToolTipsmodxdf_site_content[""]["content_dispo"] = "";
	$placeHoldersmodxdf_site_content[""]["content_dispo"] = "";
	$fieldLabelsmodxdf_site_content[""]["hidemenu"] = "Hidemenu";
	$fieldToolTipsmodxdf_site_content[""]["hidemenu"] = "";
	$placeHoldersmodxdf_site_content[""]["hidemenu"] = "";
	$fieldLabelsmodxdf_site_content[""]["class_key"] = "Class Key";
	$fieldToolTipsmodxdf_site_content[""]["class_key"] = "";
	$placeHoldersmodxdf_site_content[""]["class_key"] = "";
	$fieldLabelsmodxdf_site_content[""]["context_key"] = "Context Key";
	$fieldToolTipsmodxdf_site_content[""]["context_key"] = "";
	$placeHoldersmodxdf_site_content[""]["context_key"] = "";
	$fieldLabelsmodxdf_site_content[""]["content_type"] = "Content Type";
	$fieldToolTipsmodxdf_site_content[""]["content_type"] = "";
	$placeHoldersmodxdf_site_content[""]["content_type"] = "";
	$fieldLabelsmodxdf_site_content[""]["uri"] = "Uri";
	$fieldToolTipsmodxdf_site_content[""]["uri"] = "";
	$placeHoldersmodxdf_site_content[""]["uri"] = "";
	$fieldLabelsmodxdf_site_content[""]["uri_override"] = "Uri Override";
	$fieldToolTipsmodxdf_site_content[""]["uri_override"] = "";
	$placeHoldersmodxdf_site_content[""]["uri_override"] = "";
	$fieldLabelsmodxdf_site_content[""]["hide_children_in_tree"] = "Hide Children In Tree";
	$fieldToolTipsmodxdf_site_content[""]["hide_children_in_tree"] = "";
	$placeHoldersmodxdf_site_content[""]["hide_children_in_tree"] = "";
	$fieldLabelsmodxdf_site_content[""]["show_in_tree"] = "Show In Tree";
	$fieldToolTipsmodxdf_site_content[""]["show_in_tree"] = "";
	$placeHoldersmodxdf_site_content[""]["show_in_tree"] = "";
	$fieldLabelsmodxdf_site_content[""]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_content[""]["properties"] = "";
	$placeHoldersmodxdf_site_content[""]["properties"] = "";
	if (count($fieldToolTipsmodxdf_site_content[""]))
		$tdatamodxdf_site_content[".isUseToolTips"] = true;
}


	$tdatamodxdf_site_content[".NCSearch"] = true;



$tdatamodxdf_site_content[".shortTableName"] = "modxdf_site_content";
$tdatamodxdf_site_content[".nSecOptions"] = 0;
$tdatamodxdf_site_content[".recsPerRowPrint"] = 1;
$tdatamodxdf_site_content[".mainTableOwnerID"] = "";
$tdatamodxdf_site_content[".moveNext"] = 1;
$tdatamodxdf_site_content[".entityType"] = 0;

$tdatamodxdf_site_content[".strOriginalTableName"] = "modxdf_site_content";

	



$tdatamodxdf_site_content[".showAddInPopup"] = false;

$tdatamodxdf_site_content[".showEditInPopup"] = false;

$tdatamodxdf_site_content[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodxdf_site_content[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodxdf_site_content[".fieldsForRegister"] = array();
	
$tdatamodxdf_site_content[".listAjax"] = false;

	$tdatamodxdf_site_content[".audit"] = false;

	$tdatamodxdf_site_content[".locking"] = false;

$tdatamodxdf_site_content[".edit"] = true;
$tdatamodxdf_site_content[".afterEditAction"] = 1;
$tdatamodxdf_site_content[".closePopupAfterEdit"] = 1;
$tdatamodxdf_site_content[".afterEditActionDetTable"] = "";

$tdatamodxdf_site_content[".add"] = true;
$tdatamodxdf_site_content[".afterAddAction"] = 1;
$tdatamodxdf_site_content[".closePopupAfterAdd"] = 1;
$tdatamodxdf_site_content[".afterAddActionDetTable"] = "";

$tdatamodxdf_site_content[".list"] = true;



$tdatamodxdf_site_content[".reorderRecordsByHeader"] = true;



$tdatamodxdf_site_content[".view"] = true;

$tdatamodxdf_site_content[".import"] = true;

$tdatamodxdf_site_content[".exportTo"] = true;

$tdatamodxdf_site_content[".printFriendly"] = true;

$tdatamodxdf_site_content[".delete"] = true;

$tdatamodxdf_site_content[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodxdf_site_content[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodxdf_site_content[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodxdf_site_content[".searchSaving"] = false;
//

$tdatamodxdf_site_content[".showSearchPanel"] = true;
		$tdatamodxdf_site_content[".flexibleSearch"] = true;

$tdatamodxdf_site_content[".isUseAjaxSuggest"] = true;

$tdatamodxdf_site_content[".rowHighlite"] = true;



				

$tdatamodxdf_site_content[".ajaxCodeSnippetAdded"] = false;

$tdatamodxdf_site_content[".buttonsAdded"] = false;

$tdatamodxdf_site_content[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodxdf_site_content[".isUseTimeForSearch"] = false;





$tdatamodxdf_site_content[".allSearchFields"] = array();
$tdatamodxdf_site_content[".filterFields"] = array();
$tdatamodxdf_site_content[".requiredSearchFields"] = array();

$tdatamodxdf_site_content[".allSearchFields"][] = "id";
	$tdatamodxdf_site_content[".allSearchFields"][] = "type";
	$tdatamodxdf_site_content[".allSearchFields"][] = "contentType";
	$tdatamodxdf_site_content[".allSearchFields"][] = "pagetitle";
	$tdatamodxdf_site_content[".allSearchFields"][] = "longtitle";
	$tdatamodxdf_site_content[".allSearchFields"][] = "description";
	$tdatamodxdf_site_content[".allSearchFields"][] = "alias";
	$tdatamodxdf_site_content[".allSearchFields"][] = "link_attributes";
	$tdatamodxdf_site_content[".allSearchFields"][] = "published";
	$tdatamodxdf_site_content[".allSearchFields"][] = "pub_date";
	$tdatamodxdf_site_content[".allSearchFields"][] = "unpub_date";
	$tdatamodxdf_site_content[".allSearchFields"][] = "parent";
	$tdatamodxdf_site_content[".allSearchFields"][] = "isfolder";
	$tdatamodxdf_site_content[".allSearchFields"][] = "introtext";
	$tdatamodxdf_site_content[".allSearchFields"][] = "content";
	$tdatamodxdf_site_content[".allSearchFields"][] = "richtext";
	$tdatamodxdf_site_content[".allSearchFields"][] = "template";
	$tdatamodxdf_site_content[".allSearchFields"][] = "menuindex";
	$tdatamodxdf_site_content[".allSearchFields"][] = "searchable";
	$tdatamodxdf_site_content[".allSearchFields"][] = "cacheable";
	$tdatamodxdf_site_content[".allSearchFields"][] = "createdby";
	$tdatamodxdf_site_content[".allSearchFields"][] = "createdon";
	$tdatamodxdf_site_content[".allSearchFields"][] = "editedby";
	$tdatamodxdf_site_content[".allSearchFields"][] = "editedon";
	$tdatamodxdf_site_content[".allSearchFields"][] = "deleted";
	$tdatamodxdf_site_content[".allSearchFields"][] = "deletedon";
	$tdatamodxdf_site_content[".allSearchFields"][] = "deletedby";
	$tdatamodxdf_site_content[".allSearchFields"][] = "publishedon";
	$tdatamodxdf_site_content[".allSearchFields"][] = "publishedby";
	$tdatamodxdf_site_content[".allSearchFields"][] = "menutitle";
	$tdatamodxdf_site_content[".allSearchFields"][] = "donthit";
	$tdatamodxdf_site_content[".allSearchFields"][] = "privateweb";
	$tdatamodxdf_site_content[".allSearchFields"][] = "privatemgr";
	$tdatamodxdf_site_content[".allSearchFields"][] = "content_dispo";
	$tdatamodxdf_site_content[".allSearchFields"][] = "hidemenu";
	$tdatamodxdf_site_content[".allSearchFields"][] = "class_key";
	$tdatamodxdf_site_content[".allSearchFields"][] = "context_key";
	$tdatamodxdf_site_content[".allSearchFields"][] = "content_type";
	$tdatamodxdf_site_content[".allSearchFields"][] = "uri";
	$tdatamodxdf_site_content[".allSearchFields"][] = "uri_override";
	$tdatamodxdf_site_content[".allSearchFields"][] = "hide_children_in_tree";
	$tdatamodxdf_site_content[".allSearchFields"][] = "show_in_tree";
	$tdatamodxdf_site_content[".allSearchFields"][] = "properties";
	

$tdatamodxdf_site_content[".googleLikeFields"] = array();
$tdatamodxdf_site_content[".googleLikeFields"][] = "id";
$tdatamodxdf_site_content[".googleLikeFields"][] = "type";
$tdatamodxdf_site_content[".googleLikeFields"][] = "contentType";
$tdatamodxdf_site_content[".googleLikeFields"][] = "pagetitle";
$tdatamodxdf_site_content[".googleLikeFields"][] = "longtitle";
$tdatamodxdf_site_content[".googleLikeFields"][] = "description";
$tdatamodxdf_site_content[".googleLikeFields"][] = "alias";
$tdatamodxdf_site_content[".googleLikeFields"][] = "link_attributes";
$tdatamodxdf_site_content[".googleLikeFields"][] = "published";
$tdatamodxdf_site_content[".googleLikeFields"][] = "pub_date";
$tdatamodxdf_site_content[".googleLikeFields"][] = "unpub_date";
$tdatamodxdf_site_content[".googleLikeFields"][] = "parent";
$tdatamodxdf_site_content[".googleLikeFields"][] = "isfolder";
$tdatamodxdf_site_content[".googleLikeFields"][] = "introtext";
$tdatamodxdf_site_content[".googleLikeFields"][] = "content";
$tdatamodxdf_site_content[".googleLikeFields"][] = "richtext";
$tdatamodxdf_site_content[".googleLikeFields"][] = "template";
$tdatamodxdf_site_content[".googleLikeFields"][] = "menuindex";
$tdatamodxdf_site_content[".googleLikeFields"][] = "searchable";
$tdatamodxdf_site_content[".googleLikeFields"][] = "cacheable";
$tdatamodxdf_site_content[".googleLikeFields"][] = "createdby";
$tdatamodxdf_site_content[".googleLikeFields"][] = "createdon";
$tdatamodxdf_site_content[".googleLikeFields"][] = "editedby";
$tdatamodxdf_site_content[".googleLikeFields"][] = "editedon";
$tdatamodxdf_site_content[".googleLikeFields"][] = "deleted";
$tdatamodxdf_site_content[".googleLikeFields"][] = "deletedon";
$tdatamodxdf_site_content[".googleLikeFields"][] = "deletedby";
$tdatamodxdf_site_content[".googleLikeFields"][] = "publishedon";
$tdatamodxdf_site_content[".googleLikeFields"][] = "publishedby";
$tdatamodxdf_site_content[".googleLikeFields"][] = "menutitle";
$tdatamodxdf_site_content[".googleLikeFields"][] = "donthit";
$tdatamodxdf_site_content[".googleLikeFields"][] = "privateweb";
$tdatamodxdf_site_content[".googleLikeFields"][] = "privatemgr";
$tdatamodxdf_site_content[".googleLikeFields"][] = "content_dispo";
$tdatamodxdf_site_content[".googleLikeFields"][] = "hidemenu";
$tdatamodxdf_site_content[".googleLikeFields"][] = "class_key";
$tdatamodxdf_site_content[".googleLikeFields"][] = "context_key";
$tdatamodxdf_site_content[".googleLikeFields"][] = "content_type";
$tdatamodxdf_site_content[".googleLikeFields"][] = "uri";
$tdatamodxdf_site_content[".googleLikeFields"][] = "uri_override";
$tdatamodxdf_site_content[".googleLikeFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".googleLikeFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".googleLikeFields"][] = "properties";


$tdatamodxdf_site_content[".advSearchFields"] = array();
$tdatamodxdf_site_content[".advSearchFields"][] = "id";
$tdatamodxdf_site_content[".advSearchFields"][] = "type";
$tdatamodxdf_site_content[".advSearchFields"][] = "contentType";
$tdatamodxdf_site_content[".advSearchFields"][] = "pagetitle";
$tdatamodxdf_site_content[".advSearchFields"][] = "longtitle";
$tdatamodxdf_site_content[".advSearchFields"][] = "description";
$tdatamodxdf_site_content[".advSearchFields"][] = "alias";
$tdatamodxdf_site_content[".advSearchFields"][] = "link_attributes";
$tdatamodxdf_site_content[".advSearchFields"][] = "published";
$tdatamodxdf_site_content[".advSearchFields"][] = "pub_date";
$tdatamodxdf_site_content[".advSearchFields"][] = "unpub_date";
$tdatamodxdf_site_content[".advSearchFields"][] = "parent";
$tdatamodxdf_site_content[".advSearchFields"][] = "isfolder";
$tdatamodxdf_site_content[".advSearchFields"][] = "introtext";
$tdatamodxdf_site_content[".advSearchFields"][] = "content";
$tdatamodxdf_site_content[".advSearchFields"][] = "richtext";
$tdatamodxdf_site_content[".advSearchFields"][] = "template";
$tdatamodxdf_site_content[".advSearchFields"][] = "menuindex";
$tdatamodxdf_site_content[".advSearchFields"][] = "searchable";
$tdatamodxdf_site_content[".advSearchFields"][] = "cacheable";
$tdatamodxdf_site_content[".advSearchFields"][] = "createdby";
$tdatamodxdf_site_content[".advSearchFields"][] = "createdon";
$tdatamodxdf_site_content[".advSearchFields"][] = "editedby";
$tdatamodxdf_site_content[".advSearchFields"][] = "editedon";
$tdatamodxdf_site_content[".advSearchFields"][] = "deleted";
$tdatamodxdf_site_content[".advSearchFields"][] = "deletedon";
$tdatamodxdf_site_content[".advSearchFields"][] = "deletedby";
$tdatamodxdf_site_content[".advSearchFields"][] = "publishedon";
$tdatamodxdf_site_content[".advSearchFields"][] = "publishedby";
$tdatamodxdf_site_content[".advSearchFields"][] = "menutitle";
$tdatamodxdf_site_content[".advSearchFields"][] = "donthit";
$tdatamodxdf_site_content[".advSearchFields"][] = "privateweb";
$tdatamodxdf_site_content[".advSearchFields"][] = "privatemgr";
$tdatamodxdf_site_content[".advSearchFields"][] = "content_dispo";
$tdatamodxdf_site_content[".advSearchFields"][] = "hidemenu";
$tdatamodxdf_site_content[".advSearchFields"][] = "class_key";
$tdatamodxdf_site_content[".advSearchFields"][] = "context_key";
$tdatamodxdf_site_content[".advSearchFields"][] = "content_type";
$tdatamodxdf_site_content[".advSearchFields"][] = "uri";
$tdatamodxdf_site_content[".advSearchFields"][] = "uri_override";
$tdatamodxdf_site_content[".advSearchFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".advSearchFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".advSearchFields"][] = "properties";

$tdatamodxdf_site_content[".tableType"] = "list";

$tdatamodxdf_site_content[".printerPageOrientation"] = 0;
$tdatamodxdf_site_content[".nPrinterPageScale"] = 100;

$tdatamodxdf_site_content[".nPrinterSplitRecords"] = 40;

$tdatamodxdf_site_content[".nPrinterPDFSplitRecords"] = 40;



$tdatamodxdf_site_content[".geocodingEnabled"] = false;





$tdatamodxdf_site_content[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodxdf_site_content[".pageSize"] = 20;

$tdatamodxdf_site_content[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodxdf_site_content[".strOrderBy"] = $tstrOrderBy;

$tdatamodxdf_site_content[".orderindexes"] = array();

$tdatamodxdf_site_content[".sqlHead"] = "SELECT id,  	`type`,  	contentType,  	pagetitle,  	longtitle,  	description,  	`alias`,  	link_attributes,  	published,  	pub_date,  	unpub_date,  	parent,  	isfolder,  	introtext,  	content,  	richtext,  	template,  	menuindex,  	searchable,  	cacheable,  	createdby,  	createdon,  	editedby,  	editedon,  	deleted,  	deletedon,  	deletedby,  	publishedon,  	publishedby,  	menutitle,  	donthit,  	privateweb,  	privatemgr,  	content_dispo,  	hidemenu,  	class_key,  	context_key,  	content_type,  	uri,  	uri_override,  	hide_children_in_tree,  	show_in_tree,  	properties";
$tdatamodxdf_site_content[".sqlFrom"] = "FROM modxdf_site_content";
$tdatamodxdf_site_content[".sqlWhereExpr"] = "";
$tdatamodxdf_site_content[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodxdf_site_content[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodxdf_site_content[".arrGroupsPerPage"] = $arrGPP;

$tdatamodxdf_site_content[".highlightSearchResults"] = true;

$tableKeysmodxdf_site_content = array();
$tableKeysmodxdf_site_content[] = "id";
$tdatamodxdf_site_content[".Keys"] = $tableKeysmodxdf_site_content;

$tdatamodxdf_site_content[".listFields"] = array();
$tdatamodxdf_site_content[".listFields"][] = "id";
$tdatamodxdf_site_content[".listFields"][] = "type";
$tdatamodxdf_site_content[".listFields"][] = "contentType";
$tdatamodxdf_site_content[".listFields"][] = "pagetitle";
$tdatamodxdf_site_content[".listFields"][] = "longtitle";
$tdatamodxdf_site_content[".listFields"][] = "description";
$tdatamodxdf_site_content[".listFields"][] = "alias";
$tdatamodxdf_site_content[".listFields"][] = "link_attributes";
$tdatamodxdf_site_content[".listFields"][] = "published";
$tdatamodxdf_site_content[".listFields"][] = "pub_date";
$tdatamodxdf_site_content[".listFields"][] = "unpub_date";
$tdatamodxdf_site_content[".listFields"][] = "parent";
$tdatamodxdf_site_content[".listFields"][] = "isfolder";
$tdatamodxdf_site_content[".listFields"][] = "introtext";
$tdatamodxdf_site_content[".listFields"][] = "content";
$tdatamodxdf_site_content[".listFields"][] = "richtext";
$tdatamodxdf_site_content[".listFields"][] = "template";
$tdatamodxdf_site_content[".listFields"][] = "menuindex";
$tdatamodxdf_site_content[".listFields"][] = "searchable";
$tdatamodxdf_site_content[".listFields"][] = "cacheable";
$tdatamodxdf_site_content[".listFields"][] = "createdby";
$tdatamodxdf_site_content[".listFields"][] = "createdon";
$tdatamodxdf_site_content[".listFields"][] = "editedby";
$tdatamodxdf_site_content[".listFields"][] = "editedon";
$tdatamodxdf_site_content[".listFields"][] = "deleted";
$tdatamodxdf_site_content[".listFields"][] = "deletedon";
$tdatamodxdf_site_content[".listFields"][] = "deletedby";
$tdatamodxdf_site_content[".listFields"][] = "publishedon";
$tdatamodxdf_site_content[".listFields"][] = "publishedby";
$tdatamodxdf_site_content[".listFields"][] = "menutitle";
$tdatamodxdf_site_content[".listFields"][] = "donthit";
$tdatamodxdf_site_content[".listFields"][] = "privateweb";
$tdatamodxdf_site_content[".listFields"][] = "privatemgr";
$tdatamodxdf_site_content[".listFields"][] = "content_dispo";
$tdatamodxdf_site_content[".listFields"][] = "hidemenu";
$tdatamodxdf_site_content[".listFields"][] = "class_key";
$tdatamodxdf_site_content[".listFields"][] = "context_key";
$tdatamodxdf_site_content[".listFields"][] = "content_type";
$tdatamodxdf_site_content[".listFields"][] = "uri";
$tdatamodxdf_site_content[".listFields"][] = "uri_override";
$tdatamodxdf_site_content[".listFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".listFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".listFields"][] = "properties";

$tdatamodxdf_site_content[".hideMobileList"] = array();


$tdatamodxdf_site_content[".viewFields"] = array();
$tdatamodxdf_site_content[".viewFields"][] = "id";
$tdatamodxdf_site_content[".viewFields"][] = "type";
$tdatamodxdf_site_content[".viewFields"][] = "contentType";
$tdatamodxdf_site_content[".viewFields"][] = "pagetitle";
$tdatamodxdf_site_content[".viewFields"][] = "longtitle";
$tdatamodxdf_site_content[".viewFields"][] = "description";
$tdatamodxdf_site_content[".viewFields"][] = "alias";
$tdatamodxdf_site_content[".viewFields"][] = "link_attributes";
$tdatamodxdf_site_content[".viewFields"][] = "published";
$tdatamodxdf_site_content[".viewFields"][] = "pub_date";
$tdatamodxdf_site_content[".viewFields"][] = "unpub_date";
$tdatamodxdf_site_content[".viewFields"][] = "parent";
$tdatamodxdf_site_content[".viewFields"][] = "isfolder";
$tdatamodxdf_site_content[".viewFields"][] = "introtext";
$tdatamodxdf_site_content[".viewFields"][] = "content";
$tdatamodxdf_site_content[".viewFields"][] = "richtext";
$tdatamodxdf_site_content[".viewFields"][] = "template";
$tdatamodxdf_site_content[".viewFields"][] = "menuindex";
$tdatamodxdf_site_content[".viewFields"][] = "searchable";
$tdatamodxdf_site_content[".viewFields"][] = "cacheable";
$tdatamodxdf_site_content[".viewFields"][] = "createdby";
$tdatamodxdf_site_content[".viewFields"][] = "createdon";
$tdatamodxdf_site_content[".viewFields"][] = "editedby";
$tdatamodxdf_site_content[".viewFields"][] = "editedon";
$tdatamodxdf_site_content[".viewFields"][] = "deleted";
$tdatamodxdf_site_content[".viewFields"][] = "deletedon";
$tdatamodxdf_site_content[".viewFields"][] = "deletedby";
$tdatamodxdf_site_content[".viewFields"][] = "publishedon";
$tdatamodxdf_site_content[".viewFields"][] = "publishedby";
$tdatamodxdf_site_content[".viewFields"][] = "menutitle";
$tdatamodxdf_site_content[".viewFields"][] = "donthit";
$tdatamodxdf_site_content[".viewFields"][] = "privateweb";
$tdatamodxdf_site_content[".viewFields"][] = "privatemgr";
$tdatamodxdf_site_content[".viewFields"][] = "content_dispo";
$tdatamodxdf_site_content[".viewFields"][] = "hidemenu";
$tdatamodxdf_site_content[".viewFields"][] = "class_key";
$tdatamodxdf_site_content[".viewFields"][] = "context_key";
$tdatamodxdf_site_content[".viewFields"][] = "content_type";
$tdatamodxdf_site_content[".viewFields"][] = "uri";
$tdatamodxdf_site_content[".viewFields"][] = "uri_override";
$tdatamodxdf_site_content[".viewFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".viewFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".viewFields"][] = "properties";

$tdatamodxdf_site_content[".addFields"] = array();
$tdatamodxdf_site_content[".addFields"][] = "type";
$tdatamodxdf_site_content[".addFields"][] = "contentType";
$tdatamodxdf_site_content[".addFields"][] = "pagetitle";
$tdatamodxdf_site_content[".addFields"][] = "longtitle";
$tdatamodxdf_site_content[".addFields"][] = "description";
$tdatamodxdf_site_content[".addFields"][] = "alias";
$tdatamodxdf_site_content[".addFields"][] = "link_attributes";
$tdatamodxdf_site_content[".addFields"][] = "published";
$tdatamodxdf_site_content[".addFields"][] = "pub_date";
$tdatamodxdf_site_content[".addFields"][] = "unpub_date";
$tdatamodxdf_site_content[".addFields"][] = "parent";
$tdatamodxdf_site_content[".addFields"][] = "isfolder";
$tdatamodxdf_site_content[".addFields"][] = "introtext";
$tdatamodxdf_site_content[".addFields"][] = "content";
$tdatamodxdf_site_content[".addFields"][] = "richtext";
$tdatamodxdf_site_content[".addFields"][] = "template";
$tdatamodxdf_site_content[".addFields"][] = "menuindex";
$tdatamodxdf_site_content[".addFields"][] = "searchable";
$tdatamodxdf_site_content[".addFields"][] = "cacheable";
$tdatamodxdf_site_content[".addFields"][] = "createdby";
$tdatamodxdf_site_content[".addFields"][] = "createdon";
$tdatamodxdf_site_content[".addFields"][] = "editedby";
$tdatamodxdf_site_content[".addFields"][] = "editedon";
$tdatamodxdf_site_content[".addFields"][] = "deleted";
$tdatamodxdf_site_content[".addFields"][] = "deletedon";
$tdatamodxdf_site_content[".addFields"][] = "deletedby";
$tdatamodxdf_site_content[".addFields"][] = "publishedon";
$tdatamodxdf_site_content[".addFields"][] = "publishedby";
$tdatamodxdf_site_content[".addFields"][] = "menutitle";
$tdatamodxdf_site_content[".addFields"][] = "donthit";
$tdatamodxdf_site_content[".addFields"][] = "privateweb";
$tdatamodxdf_site_content[".addFields"][] = "privatemgr";
$tdatamodxdf_site_content[".addFields"][] = "content_dispo";
$tdatamodxdf_site_content[".addFields"][] = "hidemenu";
$tdatamodxdf_site_content[".addFields"][] = "class_key";
$tdatamodxdf_site_content[".addFields"][] = "context_key";
$tdatamodxdf_site_content[".addFields"][] = "content_type";
$tdatamodxdf_site_content[".addFields"][] = "uri";
$tdatamodxdf_site_content[".addFields"][] = "uri_override";
$tdatamodxdf_site_content[".addFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".addFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".addFields"][] = "properties";

$tdatamodxdf_site_content[".masterListFields"] = array();
$tdatamodxdf_site_content[".masterListFields"][] = "id";
$tdatamodxdf_site_content[".masterListFields"][] = "type";
$tdatamodxdf_site_content[".masterListFields"][] = "contentType";
$tdatamodxdf_site_content[".masterListFields"][] = "pagetitle";
$tdatamodxdf_site_content[".masterListFields"][] = "longtitle";
$tdatamodxdf_site_content[".masterListFields"][] = "description";
$tdatamodxdf_site_content[".masterListFields"][] = "alias";
$tdatamodxdf_site_content[".masterListFields"][] = "link_attributes";
$tdatamodxdf_site_content[".masterListFields"][] = "published";
$tdatamodxdf_site_content[".masterListFields"][] = "pub_date";
$tdatamodxdf_site_content[".masterListFields"][] = "unpub_date";
$tdatamodxdf_site_content[".masterListFields"][] = "parent";
$tdatamodxdf_site_content[".masterListFields"][] = "isfolder";
$tdatamodxdf_site_content[".masterListFields"][] = "introtext";
$tdatamodxdf_site_content[".masterListFields"][] = "content";
$tdatamodxdf_site_content[".masterListFields"][] = "richtext";
$tdatamodxdf_site_content[".masterListFields"][] = "template";
$tdatamodxdf_site_content[".masterListFields"][] = "menuindex";
$tdatamodxdf_site_content[".masterListFields"][] = "searchable";
$tdatamodxdf_site_content[".masterListFields"][] = "cacheable";
$tdatamodxdf_site_content[".masterListFields"][] = "createdby";
$tdatamodxdf_site_content[".masterListFields"][] = "createdon";
$tdatamodxdf_site_content[".masterListFields"][] = "editedby";
$tdatamodxdf_site_content[".masterListFields"][] = "editedon";
$tdatamodxdf_site_content[".masterListFields"][] = "deleted";
$tdatamodxdf_site_content[".masterListFields"][] = "deletedon";
$tdatamodxdf_site_content[".masterListFields"][] = "deletedby";
$tdatamodxdf_site_content[".masterListFields"][] = "publishedon";
$tdatamodxdf_site_content[".masterListFields"][] = "publishedby";
$tdatamodxdf_site_content[".masterListFields"][] = "menutitle";
$tdatamodxdf_site_content[".masterListFields"][] = "donthit";
$tdatamodxdf_site_content[".masterListFields"][] = "privateweb";
$tdatamodxdf_site_content[".masterListFields"][] = "privatemgr";
$tdatamodxdf_site_content[".masterListFields"][] = "content_dispo";
$tdatamodxdf_site_content[".masterListFields"][] = "hidemenu";
$tdatamodxdf_site_content[".masterListFields"][] = "class_key";
$tdatamodxdf_site_content[".masterListFields"][] = "context_key";
$tdatamodxdf_site_content[".masterListFields"][] = "content_type";
$tdatamodxdf_site_content[".masterListFields"][] = "uri";
$tdatamodxdf_site_content[".masterListFields"][] = "uri_override";
$tdatamodxdf_site_content[".masterListFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".masterListFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".masterListFields"][] = "properties";

$tdatamodxdf_site_content[".inlineAddFields"] = array();
$tdatamodxdf_site_content[".inlineAddFields"][] = "type";
$tdatamodxdf_site_content[".inlineAddFields"][] = "contentType";
$tdatamodxdf_site_content[".inlineAddFields"][] = "pagetitle";
$tdatamodxdf_site_content[".inlineAddFields"][] = "longtitle";
$tdatamodxdf_site_content[".inlineAddFields"][] = "description";
$tdatamodxdf_site_content[".inlineAddFields"][] = "alias";
$tdatamodxdf_site_content[".inlineAddFields"][] = "link_attributes";
$tdatamodxdf_site_content[".inlineAddFields"][] = "published";
$tdatamodxdf_site_content[".inlineAddFields"][] = "pub_date";
$tdatamodxdf_site_content[".inlineAddFields"][] = "unpub_date";
$tdatamodxdf_site_content[".inlineAddFields"][] = "parent";
$tdatamodxdf_site_content[".inlineAddFields"][] = "isfolder";
$tdatamodxdf_site_content[".inlineAddFields"][] = "introtext";
$tdatamodxdf_site_content[".inlineAddFields"][] = "content";
$tdatamodxdf_site_content[".inlineAddFields"][] = "richtext";
$tdatamodxdf_site_content[".inlineAddFields"][] = "template";
$tdatamodxdf_site_content[".inlineAddFields"][] = "menuindex";
$tdatamodxdf_site_content[".inlineAddFields"][] = "searchable";
$tdatamodxdf_site_content[".inlineAddFields"][] = "cacheable";
$tdatamodxdf_site_content[".inlineAddFields"][] = "createdby";
$tdatamodxdf_site_content[".inlineAddFields"][] = "createdon";
$tdatamodxdf_site_content[".inlineAddFields"][] = "editedby";
$tdatamodxdf_site_content[".inlineAddFields"][] = "editedon";
$tdatamodxdf_site_content[".inlineAddFields"][] = "deleted";
$tdatamodxdf_site_content[".inlineAddFields"][] = "deletedon";
$tdatamodxdf_site_content[".inlineAddFields"][] = "deletedby";
$tdatamodxdf_site_content[".inlineAddFields"][] = "publishedon";
$tdatamodxdf_site_content[".inlineAddFields"][] = "publishedby";
$tdatamodxdf_site_content[".inlineAddFields"][] = "menutitle";
$tdatamodxdf_site_content[".inlineAddFields"][] = "donthit";
$tdatamodxdf_site_content[".inlineAddFields"][] = "privateweb";
$tdatamodxdf_site_content[".inlineAddFields"][] = "privatemgr";
$tdatamodxdf_site_content[".inlineAddFields"][] = "content_dispo";
$tdatamodxdf_site_content[".inlineAddFields"][] = "hidemenu";
$tdatamodxdf_site_content[".inlineAddFields"][] = "class_key";
$tdatamodxdf_site_content[".inlineAddFields"][] = "context_key";
$tdatamodxdf_site_content[".inlineAddFields"][] = "content_type";
$tdatamodxdf_site_content[".inlineAddFields"][] = "uri";
$tdatamodxdf_site_content[".inlineAddFields"][] = "uri_override";
$tdatamodxdf_site_content[".inlineAddFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".inlineAddFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".inlineAddFields"][] = "properties";

$tdatamodxdf_site_content[".editFields"] = array();
$tdatamodxdf_site_content[".editFields"][] = "type";
$tdatamodxdf_site_content[".editFields"][] = "contentType";
$tdatamodxdf_site_content[".editFields"][] = "pagetitle";
$tdatamodxdf_site_content[".editFields"][] = "longtitle";
$tdatamodxdf_site_content[".editFields"][] = "description";
$tdatamodxdf_site_content[".editFields"][] = "alias";
$tdatamodxdf_site_content[".editFields"][] = "link_attributes";
$tdatamodxdf_site_content[".editFields"][] = "published";
$tdatamodxdf_site_content[".editFields"][] = "pub_date";
$tdatamodxdf_site_content[".editFields"][] = "unpub_date";
$tdatamodxdf_site_content[".editFields"][] = "parent";
$tdatamodxdf_site_content[".editFields"][] = "isfolder";
$tdatamodxdf_site_content[".editFields"][] = "introtext";
$tdatamodxdf_site_content[".editFields"][] = "content";
$tdatamodxdf_site_content[".editFields"][] = "richtext";
$tdatamodxdf_site_content[".editFields"][] = "template";
$tdatamodxdf_site_content[".editFields"][] = "menuindex";
$tdatamodxdf_site_content[".editFields"][] = "searchable";
$tdatamodxdf_site_content[".editFields"][] = "cacheable";
$tdatamodxdf_site_content[".editFields"][] = "createdby";
$tdatamodxdf_site_content[".editFields"][] = "createdon";
$tdatamodxdf_site_content[".editFields"][] = "editedby";
$tdatamodxdf_site_content[".editFields"][] = "editedon";
$tdatamodxdf_site_content[".editFields"][] = "deleted";
$tdatamodxdf_site_content[".editFields"][] = "deletedon";
$tdatamodxdf_site_content[".editFields"][] = "deletedby";
$tdatamodxdf_site_content[".editFields"][] = "publishedon";
$tdatamodxdf_site_content[".editFields"][] = "publishedby";
$tdatamodxdf_site_content[".editFields"][] = "menutitle";
$tdatamodxdf_site_content[".editFields"][] = "donthit";
$tdatamodxdf_site_content[".editFields"][] = "privateweb";
$tdatamodxdf_site_content[".editFields"][] = "privatemgr";
$tdatamodxdf_site_content[".editFields"][] = "content_dispo";
$tdatamodxdf_site_content[".editFields"][] = "hidemenu";
$tdatamodxdf_site_content[".editFields"][] = "class_key";
$tdatamodxdf_site_content[".editFields"][] = "context_key";
$tdatamodxdf_site_content[".editFields"][] = "content_type";
$tdatamodxdf_site_content[".editFields"][] = "uri";
$tdatamodxdf_site_content[".editFields"][] = "uri_override";
$tdatamodxdf_site_content[".editFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".editFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".editFields"][] = "properties";

$tdatamodxdf_site_content[".inlineEditFields"] = array();
$tdatamodxdf_site_content[".inlineEditFields"][] = "type";
$tdatamodxdf_site_content[".inlineEditFields"][] = "contentType";
$tdatamodxdf_site_content[".inlineEditFields"][] = "pagetitle";
$tdatamodxdf_site_content[".inlineEditFields"][] = "longtitle";
$tdatamodxdf_site_content[".inlineEditFields"][] = "description";
$tdatamodxdf_site_content[".inlineEditFields"][] = "alias";
$tdatamodxdf_site_content[".inlineEditFields"][] = "link_attributes";
$tdatamodxdf_site_content[".inlineEditFields"][] = "published";
$tdatamodxdf_site_content[".inlineEditFields"][] = "pub_date";
$tdatamodxdf_site_content[".inlineEditFields"][] = "unpub_date";
$tdatamodxdf_site_content[".inlineEditFields"][] = "parent";
$tdatamodxdf_site_content[".inlineEditFields"][] = "isfolder";
$tdatamodxdf_site_content[".inlineEditFields"][] = "introtext";
$tdatamodxdf_site_content[".inlineEditFields"][] = "content";
$tdatamodxdf_site_content[".inlineEditFields"][] = "richtext";
$tdatamodxdf_site_content[".inlineEditFields"][] = "template";
$tdatamodxdf_site_content[".inlineEditFields"][] = "menuindex";
$tdatamodxdf_site_content[".inlineEditFields"][] = "searchable";
$tdatamodxdf_site_content[".inlineEditFields"][] = "cacheable";
$tdatamodxdf_site_content[".inlineEditFields"][] = "createdby";
$tdatamodxdf_site_content[".inlineEditFields"][] = "createdon";
$tdatamodxdf_site_content[".inlineEditFields"][] = "editedby";
$tdatamodxdf_site_content[".inlineEditFields"][] = "editedon";
$tdatamodxdf_site_content[".inlineEditFields"][] = "deleted";
$tdatamodxdf_site_content[".inlineEditFields"][] = "deletedon";
$tdatamodxdf_site_content[".inlineEditFields"][] = "deletedby";
$tdatamodxdf_site_content[".inlineEditFields"][] = "publishedon";
$tdatamodxdf_site_content[".inlineEditFields"][] = "publishedby";
$tdatamodxdf_site_content[".inlineEditFields"][] = "menutitle";
$tdatamodxdf_site_content[".inlineEditFields"][] = "donthit";
$tdatamodxdf_site_content[".inlineEditFields"][] = "privateweb";
$tdatamodxdf_site_content[".inlineEditFields"][] = "privatemgr";
$tdatamodxdf_site_content[".inlineEditFields"][] = "content_dispo";
$tdatamodxdf_site_content[".inlineEditFields"][] = "hidemenu";
$tdatamodxdf_site_content[".inlineEditFields"][] = "class_key";
$tdatamodxdf_site_content[".inlineEditFields"][] = "context_key";
$tdatamodxdf_site_content[".inlineEditFields"][] = "content_type";
$tdatamodxdf_site_content[".inlineEditFields"][] = "uri";
$tdatamodxdf_site_content[".inlineEditFields"][] = "uri_override";
$tdatamodxdf_site_content[".inlineEditFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".inlineEditFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".inlineEditFields"][] = "properties";

$tdatamodxdf_site_content[".updateSelectedFields"] = array();
$tdatamodxdf_site_content[".updateSelectedFields"][] = "type";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "contentType";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "pagetitle";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "longtitle";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "description";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "alias";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "link_attributes";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "published";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "pub_date";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "unpub_date";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "parent";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "isfolder";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "introtext";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "content";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "richtext";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "template";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "menuindex";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "searchable";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "cacheable";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "createdby";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "createdon";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "editedby";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "editedon";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "deleted";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "deletedon";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "deletedby";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "publishedon";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "publishedby";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "menutitle";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "donthit";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "privateweb";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "privatemgr";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "content_dispo";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "hidemenu";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "class_key";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "context_key";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "content_type";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "uri";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "uri_override";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".updateSelectedFields"][] = "properties";


$tdatamodxdf_site_content[".exportFields"] = array();
$tdatamodxdf_site_content[".exportFields"][] = "id";
$tdatamodxdf_site_content[".exportFields"][] = "type";
$tdatamodxdf_site_content[".exportFields"][] = "contentType";
$tdatamodxdf_site_content[".exportFields"][] = "pagetitle";
$tdatamodxdf_site_content[".exportFields"][] = "longtitle";
$tdatamodxdf_site_content[".exportFields"][] = "description";
$tdatamodxdf_site_content[".exportFields"][] = "alias";
$tdatamodxdf_site_content[".exportFields"][] = "link_attributes";
$tdatamodxdf_site_content[".exportFields"][] = "published";
$tdatamodxdf_site_content[".exportFields"][] = "pub_date";
$tdatamodxdf_site_content[".exportFields"][] = "unpub_date";
$tdatamodxdf_site_content[".exportFields"][] = "parent";
$tdatamodxdf_site_content[".exportFields"][] = "isfolder";
$tdatamodxdf_site_content[".exportFields"][] = "introtext";
$tdatamodxdf_site_content[".exportFields"][] = "content";
$tdatamodxdf_site_content[".exportFields"][] = "richtext";
$tdatamodxdf_site_content[".exportFields"][] = "template";
$tdatamodxdf_site_content[".exportFields"][] = "menuindex";
$tdatamodxdf_site_content[".exportFields"][] = "searchable";
$tdatamodxdf_site_content[".exportFields"][] = "cacheable";
$tdatamodxdf_site_content[".exportFields"][] = "createdby";
$tdatamodxdf_site_content[".exportFields"][] = "createdon";
$tdatamodxdf_site_content[".exportFields"][] = "editedby";
$tdatamodxdf_site_content[".exportFields"][] = "editedon";
$tdatamodxdf_site_content[".exportFields"][] = "deleted";
$tdatamodxdf_site_content[".exportFields"][] = "deletedon";
$tdatamodxdf_site_content[".exportFields"][] = "deletedby";
$tdatamodxdf_site_content[".exportFields"][] = "publishedon";
$tdatamodxdf_site_content[".exportFields"][] = "publishedby";
$tdatamodxdf_site_content[".exportFields"][] = "menutitle";
$tdatamodxdf_site_content[".exportFields"][] = "donthit";
$tdatamodxdf_site_content[".exportFields"][] = "privateweb";
$tdatamodxdf_site_content[".exportFields"][] = "privatemgr";
$tdatamodxdf_site_content[".exportFields"][] = "content_dispo";
$tdatamodxdf_site_content[".exportFields"][] = "hidemenu";
$tdatamodxdf_site_content[".exportFields"][] = "class_key";
$tdatamodxdf_site_content[".exportFields"][] = "context_key";
$tdatamodxdf_site_content[".exportFields"][] = "content_type";
$tdatamodxdf_site_content[".exportFields"][] = "uri";
$tdatamodxdf_site_content[".exportFields"][] = "uri_override";
$tdatamodxdf_site_content[".exportFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".exportFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".exportFields"][] = "properties";

$tdatamodxdf_site_content[".importFields"] = array();
$tdatamodxdf_site_content[".importFields"][] = "id";
$tdatamodxdf_site_content[".importFields"][] = "type";
$tdatamodxdf_site_content[".importFields"][] = "contentType";
$tdatamodxdf_site_content[".importFields"][] = "pagetitle";
$tdatamodxdf_site_content[".importFields"][] = "longtitle";
$tdatamodxdf_site_content[".importFields"][] = "description";
$tdatamodxdf_site_content[".importFields"][] = "alias";
$tdatamodxdf_site_content[".importFields"][] = "link_attributes";
$tdatamodxdf_site_content[".importFields"][] = "published";
$tdatamodxdf_site_content[".importFields"][] = "pub_date";
$tdatamodxdf_site_content[".importFields"][] = "unpub_date";
$tdatamodxdf_site_content[".importFields"][] = "parent";
$tdatamodxdf_site_content[".importFields"][] = "isfolder";
$tdatamodxdf_site_content[".importFields"][] = "introtext";
$tdatamodxdf_site_content[".importFields"][] = "content";
$tdatamodxdf_site_content[".importFields"][] = "richtext";
$tdatamodxdf_site_content[".importFields"][] = "template";
$tdatamodxdf_site_content[".importFields"][] = "menuindex";
$tdatamodxdf_site_content[".importFields"][] = "searchable";
$tdatamodxdf_site_content[".importFields"][] = "cacheable";
$tdatamodxdf_site_content[".importFields"][] = "createdby";
$tdatamodxdf_site_content[".importFields"][] = "createdon";
$tdatamodxdf_site_content[".importFields"][] = "editedby";
$tdatamodxdf_site_content[".importFields"][] = "editedon";
$tdatamodxdf_site_content[".importFields"][] = "deleted";
$tdatamodxdf_site_content[".importFields"][] = "deletedon";
$tdatamodxdf_site_content[".importFields"][] = "deletedby";
$tdatamodxdf_site_content[".importFields"][] = "publishedon";
$tdatamodxdf_site_content[".importFields"][] = "publishedby";
$tdatamodxdf_site_content[".importFields"][] = "menutitle";
$tdatamodxdf_site_content[".importFields"][] = "donthit";
$tdatamodxdf_site_content[".importFields"][] = "privateweb";
$tdatamodxdf_site_content[".importFields"][] = "privatemgr";
$tdatamodxdf_site_content[".importFields"][] = "content_dispo";
$tdatamodxdf_site_content[".importFields"][] = "hidemenu";
$tdatamodxdf_site_content[".importFields"][] = "class_key";
$tdatamodxdf_site_content[".importFields"][] = "context_key";
$tdatamodxdf_site_content[".importFields"][] = "content_type";
$tdatamodxdf_site_content[".importFields"][] = "uri";
$tdatamodxdf_site_content[".importFields"][] = "uri_override";
$tdatamodxdf_site_content[".importFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".importFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".importFields"][] = "properties";

$tdatamodxdf_site_content[".printFields"] = array();
$tdatamodxdf_site_content[".printFields"][] = "id";
$tdatamodxdf_site_content[".printFields"][] = "type";
$tdatamodxdf_site_content[".printFields"][] = "contentType";
$tdatamodxdf_site_content[".printFields"][] = "pagetitle";
$tdatamodxdf_site_content[".printFields"][] = "longtitle";
$tdatamodxdf_site_content[".printFields"][] = "description";
$tdatamodxdf_site_content[".printFields"][] = "alias";
$tdatamodxdf_site_content[".printFields"][] = "link_attributes";
$tdatamodxdf_site_content[".printFields"][] = "published";
$tdatamodxdf_site_content[".printFields"][] = "pub_date";
$tdatamodxdf_site_content[".printFields"][] = "unpub_date";
$tdatamodxdf_site_content[".printFields"][] = "parent";
$tdatamodxdf_site_content[".printFields"][] = "isfolder";
$tdatamodxdf_site_content[".printFields"][] = "introtext";
$tdatamodxdf_site_content[".printFields"][] = "content";
$tdatamodxdf_site_content[".printFields"][] = "richtext";
$tdatamodxdf_site_content[".printFields"][] = "template";
$tdatamodxdf_site_content[".printFields"][] = "menuindex";
$tdatamodxdf_site_content[".printFields"][] = "searchable";
$tdatamodxdf_site_content[".printFields"][] = "cacheable";
$tdatamodxdf_site_content[".printFields"][] = "createdby";
$tdatamodxdf_site_content[".printFields"][] = "createdon";
$tdatamodxdf_site_content[".printFields"][] = "editedby";
$tdatamodxdf_site_content[".printFields"][] = "editedon";
$tdatamodxdf_site_content[".printFields"][] = "deleted";
$tdatamodxdf_site_content[".printFields"][] = "deletedon";
$tdatamodxdf_site_content[".printFields"][] = "deletedby";
$tdatamodxdf_site_content[".printFields"][] = "publishedon";
$tdatamodxdf_site_content[".printFields"][] = "publishedby";
$tdatamodxdf_site_content[".printFields"][] = "menutitle";
$tdatamodxdf_site_content[".printFields"][] = "donthit";
$tdatamodxdf_site_content[".printFields"][] = "privateweb";
$tdatamodxdf_site_content[".printFields"][] = "privatemgr";
$tdatamodxdf_site_content[".printFields"][] = "content_dispo";
$tdatamodxdf_site_content[".printFields"][] = "hidemenu";
$tdatamodxdf_site_content[".printFields"][] = "class_key";
$tdatamodxdf_site_content[".printFields"][] = "context_key";
$tdatamodxdf_site_content[".printFields"][] = "content_type";
$tdatamodxdf_site_content[".printFields"][] = "uri";
$tdatamodxdf_site_content[".printFields"][] = "uri_override";
$tdatamodxdf_site_content[".printFields"][] = "hide_children_in_tree";
$tdatamodxdf_site_content[".printFields"][] = "show_in_tree";
$tdatamodxdf_site_content[".printFields"][] = "properties";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","id");
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




	$tdatamodxdf_site_content["id"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","type");
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




	$tdatamodxdf_site_content["type"] = $fdata;
//	contentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contentType";
	$fdata["GoodName"] = "contentType";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","contentType");
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




	$tdatamodxdf_site_content["contentType"] = $fdata;
//	pagetitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pagetitle";
	$fdata["GoodName"] = "pagetitle";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","pagetitle");
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_content["pagetitle"] = $fdata;
//	longtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "longtitle";
	$fdata["GoodName"] = "longtitle";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","longtitle");
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_content["longtitle"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","description");
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_content["description"] = $fdata;
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","alias");
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_content["alias"] = $fdata;
//	link_attributes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "link_attributes";
	$fdata["GoodName"] = "link_attributes";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","link_attributes");
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_content["link_attributes"] = $fdata;
//	published
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "published";
	$fdata["GoodName"] = "published";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","published");
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




	$tdatamodxdf_site_content["published"] = $fdata;
//	pub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pub_date";
	$fdata["GoodName"] = "pub_date";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","pub_date");
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




	$tdatamodxdf_site_content["pub_date"] = $fdata;
//	unpub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "unpub_date";
	$fdata["GoodName"] = "unpub_date";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","unpub_date");
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




	$tdatamodxdf_site_content["unpub_date"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","parent");
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




	$tdatamodxdf_site_content["parent"] = $fdata;
//	isfolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "isfolder";
	$fdata["GoodName"] = "isfolder";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","isfolder");
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




	$tdatamodxdf_site_content["isfolder"] = $fdata;
//	introtext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "introtext";
	$fdata["GoodName"] = "introtext";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","introtext");
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




	$tdatamodxdf_site_content["introtext"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","content");
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




	$tdatamodxdf_site_content["content"] = $fdata;
//	richtext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "richtext";
	$fdata["GoodName"] = "richtext";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","richtext");
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




	$tdatamodxdf_site_content["richtext"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","template");
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




	$tdatamodxdf_site_content["template"] = $fdata;
//	menuindex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "menuindex";
	$fdata["GoodName"] = "menuindex";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","menuindex");
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




	$tdatamodxdf_site_content["menuindex"] = $fdata;
//	searchable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "searchable";
	$fdata["GoodName"] = "searchable";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","searchable");
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




	$tdatamodxdf_site_content["searchable"] = $fdata;
//	cacheable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cacheable";
	$fdata["GoodName"] = "cacheable";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","cacheable");
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




	$tdatamodxdf_site_content["cacheable"] = $fdata;
//	createdby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "createdby";
	$fdata["GoodName"] = "createdby";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","createdby");
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




	$tdatamodxdf_site_content["createdby"] = $fdata;
//	createdon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "createdon";
	$fdata["GoodName"] = "createdon";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","createdon");
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




	$tdatamodxdf_site_content["createdon"] = $fdata;
//	editedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "editedby";
	$fdata["GoodName"] = "editedby";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","editedby");
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




	$tdatamodxdf_site_content["editedby"] = $fdata;
//	editedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "editedon";
	$fdata["GoodName"] = "editedon";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","editedon");
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




	$tdatamodxdf_site_content["editedon"] = $fdata;
//	deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "deleted";
	$fdata["GoodName"] = "deleted";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","deleted");
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




	$tdatamodxdf_site_content["deleted"] = $fdata;
//	deletedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "deletedon";
	$fdata["GoodName"] = "deletedon";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","deletedon");
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




	$tdatamodxdf_site_content["deletedon"] = $fdata;
//	deletedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "deletedby";
	$fdata["GoodName"] = "deletedby";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","deletedby");
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




	$tdatamodxdf_site_content["deletedby"] = $fdata;
//	publishedon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "publishedon";
	$fdata["GoodName"] = "publishedon";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","publishedon");
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




	$tdatamodxdf_site_content["publishedon"] = $fdata;
//	publishedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "publishedby";
	$fdata["GoodName"] = "publishedby";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","publishedby");
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




	$tdatamodxdf_site_content["publishedby"] = $fdata;
//	menutitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "menutitle";
	$fdata["GoodName"] = "menutitle";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","menutitle");
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_content["menutitle"] = $fdata;
//	donthit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "donthit";
	$fdata["GoodName"] = "donthit";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","donthit");
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




	$tdatamodxdf_site_content["donthit"] = $fdata;
//	privateweb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "privateweb";
	$fdata["GoodName"] = "privateweb";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","privateweb");
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




	$tdatamodxdf_site_content["privateweb"] = $fdata;
//	privatemgr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "privatemgr";
	$fdata["GoodName"] = "privatemgr";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","privatemgr");
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




	$tdatamodxdf_site_content["privatemgr"] = $fdata;
//	content_dispo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "content_dispo";
	$fdata["GoodName"] = "content_dispo";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","content_dispo");
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




	$tdatamodxdf_site_content["content_dispo"] = $fdata;
//	hidemenu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "hidemenu";
	$fdata["GoodName"] = "hidemenu";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","hidemenu");
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




	$tdatamodxdf_site_content["hidemenu"] = $fdata;
//	class_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "class_key";
	$fdata["GoodName"] = "class_key";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","class_key");
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

		$fdata["strField"] = "class_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "class_key";

	
	
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




	$tdatamodxdf_site_content["class_key"] = $fdata;
//	context_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "context_key";
	$fdata["GoodName"] = "context_key";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","context_key");
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

		$fdata["strField"] = "context_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "context_key";

	
	
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




	$tdatamodxdf_site_content["context_key"] = $fdata;
//	content_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "content_type";
	$fdata["GoodName"] = "content_type";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","content_type");
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

		$fdata["strField"] = "content_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content_type";

	
	
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




	$tdatamodxdf_site_content["content_type"] = $fdata;
//	uri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "uri";
	$fdata["GoodName"] = "uri";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","uri");
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

		$fdata["strField"] = "uri";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uri";

	
	
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




	$tdatamodxdf_site_content["uri"] = $fdata;
//	uri_override
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "uri_override";
	$fdata["GoodName"] = "uri_override";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","uri_override");
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

		$fdata["strField"] = "uri_override";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uri_override";

	
	
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




	$tdatamodxdf_site_content["uri_override"] = $fdata;
//	hide_children_in_tree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "hide_children_in_tree";
	$fdata["GoodName"] = "hide_children_in_tree";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","hide_children_in_tree");
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

		$fdata["strField"] = "hide_children_in_tree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hide_children_in_tree";

	
	
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




	$tdatamodxdf_site_content["hide_children_in_tree"] = $fdata;
//	show_in_tree
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "show_in_tree";
	$fdata["GoodName"] = "show_in_tree";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","show_in_tree");
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

		$fdata["strField"] = "show_in_tree";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "show_in_tree";

	
	
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




	$tdatamodxdf_site_content["show_in_tree"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modxdf_site_content";
	$fdata["Label"] = GetFieldLabel("modxdf_site_content","properties");
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

		$fdata["strField"] = "properties";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "properties";

	
	
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




	$tdatamodxdf_site_content["properties"] = $fdata;


$tables_data["modxdf_site_content"]=&$tdatamodxdf_site_content;
$field_labels["modxdf_site_content"] = &$fieldLabelsmodxdf_site_content;
$fieldToolTips["modxdf_site_content"] = &$fieldToolTipsmodxdf_site_content;
$placeHolders["modxdf_site_content"] = &$placeHoldersmodxdf_site_content;
$page_titles["modxdf_site_content"] = &$pageTitlesmodxdf_site_content;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modxdf_site_content"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modxdf_site_content"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modxdf_site_content()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`type`,  	contentType,  	pagetitle,  	longtitle,  	description,  	`alias`,  	link_attributes,  	published,  	pub_date,  	unpub_date,  	parent,  	isfolder,  	introtext,  	content,  	richtext,  	template,  	menuindex,  	searchable,  	cacheable,  	createdby,  	createdon,  	editedby,  	editedon,  	deleted,  	deletedon,  	deletedby,  	publishedon,  	publishedby,  	menutitle,  	donthit,  	privateweb,  	privatemgr,  	content_dispo,  	hidemenu,  	class_key,  	context_key,  	content_type,  	uri,  	uri_override,  	hide_children_in_tree,  	show_in_tree,  	properties";
$proto0["m_strFrom"] = "FROM modxdf_site_content";
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
	"m_strName" => "id",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modxdf_site_content";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto8["m_sql"] = "`type`";
$proto8["m_srcTableName"] = "modxdf_site_content";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contentType",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto10["m_sql"] = "contentType";
$proto10["m_srcTableName"] = "modxdf_site_content";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pagetitle",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto12["m_sql"] = "pagetitle";
$proto12["m_srcTableName"] = "modxdf_site_content";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "longtitle",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto14["m_sql"] = "longtitle";
$proto14["m_srcTableName"] = "modxdf_site_content";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto16["m_sql"] = "description";
$proto16["m_srcTableName"] = "modxdf_site_content";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto18["m_sql"] = "`alias`";
$proto18["m_srcTableName"] = "modxdf_site_content";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "link_attributes",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto20["m_sql"] = "link_attributes";
$proto20["m_srcTableName"] = "modxdf_site_content";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "published",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto22["m_sql"] = "published";
$proto22["m_srcTableName"] = "modxdf_site_content";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pub_date",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto24["m_sql"] = "pub_date";
$proto24["m_srcTableName"] = "modxdf_site_content";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "unpub_date",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto26["m_sql"] = "unpub_date";
$proto26["m_srcTableName"] = "modxdf_site_content";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto28["m_sql"] = "parent";
$proto28["m_srcTableName"] = "modxdf_site_content";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "isfolder",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto30["m_sql"] = "isfolder";
$proto30["m_srcTableName"] = "modxdf_site_content";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "introtext",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto32["m_sql"] = "introtext";
$proto32["m_srcTableName"] = "modxdf_site_content";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto34["m_sql"] = "content";
$proto34["m_srcTableName"] = "modxdf_site_content";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "richtext",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto36["m_sql"] = "richtext";
$proto36["m_srcTableName"] = "modxdf_site_content";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto38["m_sql"] = "template";
$proto38["m_srcTableName"] = "modxdf_site_content";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "menuindex",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto40["m_sql"] = "menuindex";
$proto40["m_srcTableName"] = "modxdf_site_content";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "searchable",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto42["m_sql"] = "searchable";
$proto42["m_srcTableName"] = "modxdf_site_content";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cacheable",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto44["m_sql"] = "cacheable";
$proto44["m_srcTableName"] = "modxdf_site_content";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "createdby",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto46["m_sql"] = "createdby";
$proto46["m_srcTableName"] = "modxdf_site_content";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "createdon",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto48["m_sql"] = "createdon";
$proto48["m_srcTableName"] = "modxdf_site_content";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "editedby",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto50["m_sql"] = "editedby";
$proto50["m_srcTableName"] = "modxdf_site_content";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "editedon",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto52["m_sql"] = "editedon";
$proto52["m_srcTableName"] = "modxdf_site_content";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto54["m_sql"] = "deleted";
$proto54["m_srcTableName"] = "modxdf_site_content";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "deletedon",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto56["m_sql"] = "deletedon";
$proto56["m_srcTableName"] = "modxdf_site_content";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "deletedby",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto58["m_sql"] = "deletedby";
$proto58["m_srcTableName"] = "modxdf_site_content";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedon",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto60["m_sql"] = "publishedon";
$proto60["m_srcTableName"] = "modxdf_site_content";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedby",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto62["m_sql"] = "publishedby";
$proto62["m_srcTableName"] = "modxdf_site_content";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "menutitle",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto64["m_sql"] = "menutitle";
$proto64["m_srcTableName"] = "modxdf_site_content";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "donthit",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto66["m_sql"] = "donthit";
$proto66["m_srcTableName"] = "modxdf_site_content";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "privateweb",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto68["m_sql"] = "privateweb";
$proto68["m_srcTableName"] = "modxdf_site_content";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "privatemgr",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto70["m_sql"] = "privatemgr";
$proto70["m_srcTableName"] = "modxdf_site_content";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "content_dispo",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto72["m_sql"] = "content_dispo";
$proto72["m_srcTableName"] = "modxdf_site_content";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "hidemenu",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto74["m_sql"] = "hidemenu";
$proto74["m_srcTableName"] = "modxdf_site_content";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "class_key",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto76["m_sql"] = "class_key";
$proto76["m_srcTableName"] = "modxdf_site_content";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "context_key",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto78["m_sql"] = "context_key";
$proto78["m_srcTableName"] = "modxdf_site_content";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "content_type",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto80["m_sql"] = "content_type";
$proto80["m_srcTableName"] = "modxdf_site_content";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "uri",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto82["m_sql"] = "uri";
$proto82["m_srcTableName"] = "modxdf_site_content";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "uri_override",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto84["m_sql"] = "uri_override";
$proto84["m_srcTableName"] = "modxdf_site_content";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "hide_children_in_tree",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto86["m_sql"] = "hide_children_in_tree";
$proto86["m_srcTableName"] = "modxdf_site_content";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "show_in_tree",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto88["m_sql"] = "show_in_tree";
$proto88["m_srcTableName"] = "modxdf_site_content";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modxdf_site_content",
	"m_srcTableName" => "modxdf_site_content"
));

$proto90["m_sql"] = "properties";
$proto90["m_srcTableName"] = "modxdf_site_content";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto92=array();
$proto92["m_link"] = "SQLL_MAIN";
			$proto93=array();
$proto93["m_strName"] = "modxdf_site_content";
$proto93["m_srcTableName"] = "modxdf_site_content";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "id";
$proto93["m_columns"][] = "type";
$proto93["m_columns"][] = "contentType";
$proto93["m_columns"][] = "pagetitle";
$proto93["m_columns"][] = "longtitle";
$proto93["m_columns"][] = "description";
$proto93["m_columns"][] = "alias";
$proto93["m_columns"][] = "link_attributes";
$proto93["m_columns"][] = "published";
$proto93["m_columns"][] = "pub_date";
$proto93["m_columns"][] = "unpub_date";
$proto93["m_columns"][] = "parent";
$proto93["m_columns"][] = "isfolder";
$proto93["m_columns"][] = "introtext";
$proto93["m_columns"][] = "content";
$proto93["m_columns"][] = "richtext";
$proto93["m_columns"][] = "template";
$proto93["m_columns"][] = "menuindex";
$proto93["m_columns"][] = "searchable";
$proto93["m_columns"][] = "cacheable";
$proto93["m_columns"][] = "createdby";
$proto93["m_columns"][] = "createdon";
$proto93["m_columns"][] = "editedby";
$proto93["m_columns"][] = "editedon";
$proto93["m_columns"][] = "deleted";
$proto93["m_columns"][] = "deletedon";
$proto93["m_columns"][] = "deletedby";
$proto93["m_columns"][] = "publishedon";
$proto93["m_columns"][] = "publishedby";
$proto93["m_columns"][] = "menutitle";
$proto93["m_columns"][] = "donthit";
$proto93["m_columns"][] = "privateweb";
$proto93["m_columns"][] = "privatemgr";
$proto93["m_columns"][] = "content_dispo";
$proto93["m_columns"][] = "hidemenu";
$proto93["m_columns"][] = "class_key";
$proto93["m_columns"][] = "context_key";
$proto93["m_columns"][] = "content_type";
$proto93["m_columns"][] = "uri";
$proto93["m_columns"][] = "uri_override";
$proto93["m_columns"][] = "hide_children_in_tree";
$proto93["m_columns"][] = "show_in_tree";
$proto93["m_columns"][] = "properties";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "modxdf_site_content";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "modxdf_site_content";
$proto94=array();
$proto94["m_sql"] = "";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="modxdf_site_content";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modxdf_site_content = createSqlQuery_modxdf_site_content();


	
						;

																																											

$tdatamodxdf_site_content[".sqlquery"] = $queryData_modxdf_site_content;

$tableEvents["modxdf_site_content"] = new eventsBase;
$tdatamodxdf_site_content[".hasEvents"] = false;

?>
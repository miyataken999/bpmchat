<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard2 = array();
$tdataDashboard2[".ShortName"] = "Dashboard2";

//	field labels
$fieldLabelsDashboard2 = array();
$pageTitlesDashboard2 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDashboard2["Japanese"] = array();
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_id"] = "Id";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_url"] = "Url";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_link"] = "Link";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_type"] = "Type";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_contentType"] = "Content Type";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_pagetitle"] = "Pagetitle";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_longtitle"] = "Longtitle";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_description"] = "Description";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_alias"] = "Alias";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_link_attributes"] = "Link Attributes";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_published"] = "Published";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_pub_date"] = "Pub Date";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_unpub_date"] = "Unpub Date";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_parent"] = "Parent";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_isfolder"] = "Isfolder";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_introtext"] = "Introtext";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_content"] = "Content";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_richtext"] = "Richtext";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_template"] = "Template";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_menuindex"] = "Menuindex";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_searchable"] = "Searchable";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_cacheable"] = "Cacheable";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_createdby"] = "Createdby";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_createdon"] = "Createdon";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_editedby"] = "Editedby";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_editedon"] = "Editedon";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_deleted"] = "Deleted";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_deletedon"] = "Deletedon";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_deletedby"] = "Deletedby";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_publishedon"] = "Publishedon";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_publishedby"] = "Publishedby";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_menutitle"] = "Menutitle";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_donthit"] = "Donthit";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_haskeywords"] = "Haskeywords";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_hasmetatags"] = "Hasmetatags";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_privateweb"] = "Privateweb";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_privatemgr"] = "Privatemgr";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_content_dispo"] = "Content Dispo";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_hidemenu"] = "Hidemenu";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_alias_visible"] = "Alias Visible";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldLabelsDashboard2["Japanese"]["modx_site_content_modx_site_snippet_id"] = "Modx Site Snippet Id";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard2["English"] = array();
	$fieldLabelsDashboard2["English"]["modx_site_content_id"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_url"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_link"] = "Link";
	$fieldLabelsDashboard2["English"]["modx_site_content_type"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_contentType"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_pagetitle"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_longtitle"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_description"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_alias"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_link_attributes"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_published"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_pub_date"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_unpub_date"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_parent"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_isfolder"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_introtext"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_content"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_richtext"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_template"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_menuindex"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_searchable"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_cacheable"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_createdby"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_createdon"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_editedby"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_editedon"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_deleted"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_deletedon"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_deletedby"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_publishedon"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_publishedby"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_menutitle"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_donthit"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_haskeywords"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_hasmetatags"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_privateweb"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_privatemgr"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_content_dispo"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_hidemenu"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_alias_visible"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_modex_site_htmlsnippet_id"] = "";
	$fieldLabelsDashboard2["English"]["modx_site_content_modx_site_snippet_id"] = "";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard2[""] = array();
}

//	search fields
$tdataDashboard2[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"id" );
$tdataDashboard2[".searchFields"]["modx_site_content_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"url" );
$tdataDashboard2[".searchFields"]["modx_site_content_url"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"link" );
$tdataDashboard2[".searchFields"]["modx_site_content_link"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"type" );
$tdataDashboard2[".searchFields"]["modx_site_content_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"contentType" );
$tdataDashboard2[".searchFields"]["modx_site_content_contentType"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"pagetitle" );
$tdataDashboard2[".searchFields"]["modx_site_content_pagetitle"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"longtitle" );
$tdataDashboard2[".searchFields"]["modx_site_content_longtitle"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"description" );
$tdataDashboard2[".searchFields"]["modx_site_content_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"alias" );
$tdataDashboard2[".searchFields"]["modx_site_content_alias"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"link_attributes" );
$tdataDashboard2[".searchFields"]["modx_site_content_link_attributes"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"published" );
$tdataDashboard2[".searchFields"]["modx_site_content_published"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"pub_date" );
$tdataDashboard2[".searchFields"]["modx_site_content_pub_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"unpub_date" );
$tdataDashboard2[".searchFields"]["modx_site_content_unpub_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"parent" );
$tdataDashboard2[".searchFields"]["modx_site_content_parent"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"isfolder" );
$tdataDashboard2[".searchFields"]["modx_site_content_isfolder"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"introtext" );
$tdataDashboard2[".searchFields"]["modx_site_content_introtext"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"content" );
$tdataDashboard2[".searchFields"]["modx_site_content_content"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"richtext" );
$tdataDashboard2[".searchFields"]["modx_site_content_richtext"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"template" );
$tdataDashboard2[".searchFields"]["modx_site_content_template"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"menuindex" );
$tdataDashboard2[".searchFields"]["modx_site_content_menuindex"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"searchable" );
$tdataDashboard2[".searchFields"]["modx_site_content_searchable"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"cacheable" );
$tdataDashboard2[".searchFields"]["modx_site_content_cacheable"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"createdby" );
$tdataDashboard2[".searchFields"]["modx_site_content_createdby"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"createdon" );
$tdataDashboard2[".searchFields"]["modx_site_content_createdon"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"editedby" );
$tdataDashboard2[".searchFields"]["modx_site_content_editedby"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"editedon" );
$tdataDashboard2[".searchFields"]["modx_site_content_editedon"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"deleted" );
$tdataDashboard2[".searchFields"]["modx_site_content_deleted"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"deletedon" );
$tdataDashboard2[".searchFields"]["modx_site_content_deletedon"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"deletedby" );
$tdataDashboard2[".searchFields"]["modx_site_content_deletedby"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"publishedon" );
$tdataDashboard2[".searchFields"]["modx_site_content_publishedon"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"publishedby" );
$tdataDashboard2[".searchFields"]["modx_site_content_publishedby"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"menutitle" );
$tdataDashboard2[".searchFields"]["modx_site_content_menutitle"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"donthit" );
$tdataDashboard2[".searchFields"]["modx_site_content_donthit"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"haskeywords" );
$tdataDashboard2[".searchFields"]["modx_site_content_haskeywords"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"hasmetatags" );
$tdataDashboard2[".searchFields"]["modx_site_content_hasmetatags"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"privateweb" );
$tdataDashboard2[".searchFields"]["modx_site_content_privateweb"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"privatemgr" );
$tdataDashboard2[".searchFields"]["modx_site_content_privatemgr"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"content_dispo" );
$tdataDashboard2[".searchFields"]["modx_site_content_content_dispo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"hidemenu" );
$tdataDashboard2[".searchFields"]["modx_site_content_hidemenu"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"alias_visible" );
$tdataDashboard2[".searchFields"]["modx_site_content_alias_visible"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"modex_site_htmlsnippet_id" );
$tdataDashboard2[".searchFields"]["modx_site_content_modex_site_htmlsnippet_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content", "field"=>"modx_site_snippet_id" );
$tdataDashboard2[".searchFields"]["modx_site_content_modx_site_snippet_id"] = $dashField;

// all search fields
$tdataDashboard2[".allSearchFields"] = array();
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_id";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_url";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_link";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_type";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_contentType";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_pagetitle";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_longtitle";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_description";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_alias";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_link_attributes";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_published";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_pub_date";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_unpub_date";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_parent";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_isfolder";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_introtext";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_content";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_richtext";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_template";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_menuindex";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_searchable";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_cacheable";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_createdby";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_createdon";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_editedby";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_editedon";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_deleted";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_deletedon";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_deletedby";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_publishedon";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_publishedby";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_menutitle";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_donthit";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_haskeywords";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_hasmetatags";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_privateweb";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_privatemgr";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_content_dispo";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_hidemenu";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_alias_visible";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_modex_site_htmlsnippet_id";
$tdataDashboard2[".allSearchFields"][] = "modx_site_content_modx_site_snippet_id";

// good like search fields
$tdataDashboard2[".googleLikeFields"] = array();
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_id";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_url";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_link";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_type";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_contentType";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_pagetitle";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_longtitle";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_description";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_alias";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_link_attributes";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_published";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_pub_date";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_unpub_date";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_parent";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_isfolder";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_introtext";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_content";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_richtext";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_template";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_menuindex";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_searchable";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_cacheable";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_createdby";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_createdon";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_editedby";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_editedon";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_deleted";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_deletedon";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_deletedby";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_publishedon";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_publishedby";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_menutitle";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_donthit";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_haskeywords";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_hasmetatags";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_privateweb";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_privatemgr";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_content_dispo";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_hidemenu";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_alias_visible";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_modex_site_htmlsnippet_id";
$tdataDashboard2[".googleLikeFields"][] = "modx_site_content_modx_site_snippet_id";

$tdataDashboard2[".dashElements"] = array();

	$dbelement = array( "elementName" => "modx_site_content_list", "table" => "modx_site_content", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdataDashboard2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "modx_site_content_details", "table" => "modx_site_content", "type" => 5);
	$dbelement["cellName"] = "cell_1_0";

				$dbelement["notUsedDetailTables"] = array();
	$dbelement["initialTabDetailTable"] = "modx_site_content_child";
	$dbelement["details"] = array();
	$dbelement["details"]["modx_site_templates"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["modx_site_snippets"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["modx_site_htmlsnippets"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["modx_site_content_child"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);


	$tdataDashboard2[".dashElements"][] = $dbelement;

$tdataDashboard2[".shortTableName"] = "Dashboard2";
$tdataDashboard2[".entityType"] = 4;



$tableEvents["Dashboard2"] = new eventsBase;
$tdataDashboard2[".hasEvents"] = false;


$tdataDashboard2[".tableType"] = "dashboard";


				
$tdataDashboard2[".addPageEvents"] = false;

$tables_data["Dashboard2"]=&$tdataDashboard2;
$field_labels["Dashboard2"] = &$fieldLabelsDashboard2;
$page_titles["Dashboard2"] = &$pageTitlesDashboard2;

?>
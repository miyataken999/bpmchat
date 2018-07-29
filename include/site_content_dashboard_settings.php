<?php
require_once(getabspath("classes/cipherer.php"));



$tdatasite_content_dashboard = array();
$tdatasite_content_dashboard[".ShortName"] = "site_content_dashboard";

//	field labels
$fieldLabelssite_content_dashboard = array();
$pageTitlessite_content_dashboard = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssite_content_dashboard["Japanese"] = array();
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_id"] = "Id";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_url"] = "Url";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_link"] = "Link";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_type"] = "Type";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_contentType"] = "Content Type";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_pagetitle"] = "Pagetitle";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_longtitle"] = "Longtitle";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_description"] = "Description";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_link_attributes"] = "Link Attributes";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_published"] = "Published";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_pub_date"] = "Pub Date";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_unpub_date"] = "Unpub Date";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_modex_site_htmlsnippet_id"] = "Modex Site Htmlsnippet Id";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_modx_site_snippet_id"] = "Modx Site Snippet Id";
	$fieldLabelssite_content_dashboard["Japanese"]["modx_site_content_dash_content"] = "Content";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssite_content_dashboard["English"] = array();
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_id"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_url"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_link"] = "Link";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_type"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_contentType"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_pagetitle"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_longtitle"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_description"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_link_attributes"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_published"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_pub_date"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_unpub_date"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_modex_site_htmlsnippet_id"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_modx_site_snippet_id"] = "";
	$fieldLabelssite_content_dashboard["English"]["modx_site_content_dash_content"] = "";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssite_content_dashboard[""] = array();
}

//	search fields
$tdatasite_content_dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"id" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"url" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_url"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"link" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_link"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"type" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"contentType" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_contentType"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"pagetitle" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_pagetitle"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"longtitle" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_longtitle"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"description" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"link_attributes" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_link_attributes"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"published" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_published"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"pub_date" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_pub_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"unpub_date" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_unpub_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"modex_site_htmlsnippet_id" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_modex_site_htmlsnippet_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"modx_site_snippet_id" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_modx_site_snippet_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"modx_site_content_dash", "field"=>"content" );
$tdatasite_content_dashboard[".searchFields"]["modx_site_content_dash_content"] = $dashField;

// all search fields
$tdatasite_content_dashboard[".allSearchFields"] = array();
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_id";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_url";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_link";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_type";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_contentType";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_pagetitle";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_longtitle";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_description";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_link_attributes";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_published";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_pub_date";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_unpub_date";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_modex_site_htmlsnippet_id";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_modx_site_snippet_id";
$tdatasite_content_dashboard[".allSearchFields"][] = "modx_site_content_dash_content";

// good like search fields
$tdatasite_content_dashboard[".googleLikeFields"] = array();
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_id";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_url";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_link";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_type";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_contentType";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_pagetitle";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_longtitle";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_description";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_link_attributes";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_published";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_pub_date";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_unpub_date";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_modex_site_htmlsnippet_id";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_modx_site_snippet_id";
$tdatasite_content_dashboard[".googleLikeFields"][] = "modx_site_content_dash_content";

$tdatasite_content_dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "modx_site_content_dash_details", "table" => "modx_site_content_dash", "type" => 5);
	$dbelement["cellName"] = "cell_0_0";

				$dbelement["notUsedDetailTables"] = array();
	$dbelement["initialTabDetailTable"] = "modx_site_snippets";
	$dbelement["details"] = array();
	$dbelement["details"]["modx_site_snippets"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);


	$tdatasite_content_dashboard[".dashElements"][] = $dbelement;

$tdatasite_content_dashboard[".shortTableName"] = "site_content_dashboard";
$tdatasite_content_dashboard[".entityType"] = 4;



$tableEvents["site_content_dashboard"] = new eventsBase;
$tdatasite_content_dashboard[".hasEvents"] = false;


$tdatasite_content_dashboard[".tableType"] = "dashboard";


				
$tdatasite_content_dashboard[".addPageEvents"] = false;

$tables_data["site_content_dashboard"]=&$tdatasite_content_dashboard;
$field_labels["site_content_dashboard"] = &$fieldLabelssite_content_dashboard;
$page_titles["site_content_dashboard"] = &$pageTitlessite_content_dashboard;

?>
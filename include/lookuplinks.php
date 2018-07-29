<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["PROCESS"]["APPLICATION.PRO_UID"]["edit"] = array("table" => "APPLICATION", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APPLICATION.APP_INIT_USER"]["edit"] = array("table" => "APPLICATION", "field" => "APP_INIT_USER", "page" => "edit");
	$lookupTableLinks["USERS"]["APPLICATION.APP_CUR_USER"]["edit"] = array("table" => "APPLICATION", "field" => "APP_CUR_USER", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW.USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW", "field" => "USR_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW.PREVIOUS_USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW", "field" => "PREVIOUS_USR_UID", "page" => "edit");
	$lookupTableLinks["TASK"]["APP_CACHE_VIEW.TAS_UID"]["edit"] = array("table" => "APP_CACHE_VIEW", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APP_CACHE_VIEW.PRO_UID"]["edit"] = array("table" => "APP_CACHE_VIEW", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APP_DELEGATION.PRO_UID"]["edit"] = array("table" => "APP_DELEGATION", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["TASK"]["APP_DELEGATION.TAS_UID"]["edit"] = array("table" => "APP_DELEGATION", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_DELEGATION.USR_UID"]["edit"] = array("table" => "APP_DELEGATION", "field" => "USR_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_PROCESS.PRJ_UID"]["edit"] = array("table" => "BPMN_PROCESS", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["CONTENT11"]["TASK.TAS_UID"]["edit"] = array("table" => "TASK", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_PARTICIPANT.PRJ_UID"]["edit"] = array("table" => "BPMN_PARTICIPANT", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_LANESET.PRJ_UID"]["edit"] = array("table" => "BPMN_LANESET", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROCESS"]["BPMN_LANESET.PRO_UID"]["edit"] = array("table" => "BPMN_LANESET", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_LANE.PRJ_UID"]["edit"] = array("table" => "BPMN_LANE", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_GATEWAY.PRJ_UID"]["edit"] = array("table" => "BPMN_GATEWAY", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROCESS"]["BPMN_GATEWAY.PRO_UID"]["edit"] = array("table" => "BPMN_GATEWAY", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_FLOW.PRJ_UID"]["edit"] = array("table" => "BPMN_FLOW", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_DIAGRAM"]["BPMN_FLOW.DIA_UID"]["edit"] = array("table" => "BPMN_FLOW", "field" => "DIA_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_EXTENSION.PRJ_UID"]["edit"] = array("table" => "BPMN_EXTENSION", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_EVENT.PRJ_UID"]["edit"] = array("table" => "BPMN_EVENT", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROCESS"]["BPMN_EVENT.PRO_UID"]["edit"] = array("table" => "BPMN_EVENT", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_DOCUMENTATION.PRJ_UID"]["edit"] = array("table" => "BPMN_DOCUMENTATION", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_DIAGRAM.PRJ_UID"]["edit"] = array("table" => "BPMN_DIAGRAM", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_DATA.PRJ_UID"]["edit"] = array("table" => "BPMN_DATA", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROCESS"]["BPMN_DATA.PRO_UID"]["edit"] = array("table" => "BPMN_DATA", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_BOUND.PRJ_UID"]["edit"] = array("table" => "BPMN_BOUND", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_DIAGRAM"]["BPMN_BOUND.DIA_UID"]["edit"] = array("table" => "BPMN_BOUND", "field" => "DIA_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_ACTIVITY.PRJ_UID"]["edit"] = array("table" => "BPMN_ACTIVITY", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROCESS"]["BPMN_ACTIVITY.PRO_UID"]["edit"] = array("table" => "BPMN_ACTIVITY", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROJECT"]["BPMN_ARTIFACT.PRJ_UID"]["edit"] = array("table" => "BPMN_ARTIFACT", "field" => "PRJ_UID", "page" => "edit");
	$lookupTableLinks["BPMN_PROCESS"]["BPMN_ARTIFACT.PRO_UID"]["edit"] = array("table" => "BPMN_ARTIFACT", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["CONTENT411"]["ROUTE.PRO_UID"]["edit"] = array("table" => "ROUTE", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["CONTENT2"]["ROUTE.TAS_UID"]["edit"] = array("table" => "ROUTE", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["CONTENT3"]["ROUTE.ROU_NEXT_TASK"]["edit"] = array("table" => "ROUTE", "field" => "ROU_NEXT_TASK", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_INDEX.USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_INDEX", "field" => "USR_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_INDEX.PREVIOUS_USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_INDEX", "field" => "PREVIOUS_USR_UID", "page" => "edit");
	$lookupTableLinks["TASK"]["APP_CACHE_VIEW_INDEX.TAS_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_INDEX", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APP_CACHE_VIEW_INDEX.PRO_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_INDEX", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_DRAFT.USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_DRAFT", "field" => "USR_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_DRAFT.PREVIOUS_USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_DRAFT", "field" => "PREVIOUS_USR_UID", "page" => "edit");
	$lookupTableLinks["TASK"]["APP_CACHE_VIEW_DRAFT.TAS_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_DRAFT", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APP_CACHE_VIEW_DRAFT.PRO_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_DRAFT", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_PARTICIPATE.USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PARTICIPATE", "field" => "USR_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_PARTICIPATE.PREVIOUS_USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PARTICIPATE", "field" => "PREVIOUS_USR_UID", "page" => "edit");
	$lookupTableLinks["TASK"]["APP_CACHE_VIEW_PARTICIPATE.TAS_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PARTICIPATE", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APP_CACHE_VIEW_PARTICIPATE.PRO_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PARTICIPATE", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_PAUSE.USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PAUSE", "field" => "USR_UID", "page" => "edit");
	$lookupTableLinks["USERS"]["APP_CACHE_VIEW_PAUSE.PREVIOUS_USR_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PAUSE", "field" => "PREVIOUS_USR_UID", "page" => "edit");
	$lookupTableLinks["TASK"]["APP_CACHE_VIEW_PAUSE.TAS_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PAUSE", "field" => "TAS_UID", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APP_CACHE_VIEW_PAUSE.PRO_UID"]["edit"] = array("table" => "APP_CACHE_VIEW_PAUSE", "field" => "PRO_UID", "page" => "edit");
	$lookupTableLinks["DASHBOARD"]["DASHBOARD_INDICATOR.DAS_UID"]["edit"] = array("table" => "DASHBOARD_INDICATOR", "field" => "DAS_UID", "page" => "edit");
	$lookupTableLinks["DASHBOARD"]["DASHBOARD_DAS_IND.DAS_UID"]["edit"] = array("table" => "DASHBOARD_DAS_IND", "field" => "DAS_UID", "page" => "edit");
	$lookupTableLinks["modx_site_templates"]["modx_site_content.template"]["edit"] = array("table" => "modx_site_content", "field" => "template", "page" => "edit");
	$lookupTableLinks["modx_site_htmlsnippets"]["modx_site_content.modex_site_htmlsnippet_id"]["edit"] = array("table" => "modx_site_content", "field" => "modex_site_htmlsnippet_id", "page" => "edit");
	$lookupTableLinks["modx_site_snippets"]["modx_site_content.modx_site_snippet_id"]["edit"] = array("table" => "modx_site_content", "field" => "modx_site_snippet_id", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APPLICATION_Chart.PRO_UID"]["search"] = array("table" => "APPLICATION Chart", "field" => "PRO_UID", "page" => "search");
	$lookupTableLinks["USERS"]["APPLICATION_Chart.APP_INIT_USER"]["search"] = array("table" => "APPLICATION Chart", "field" => "APP_INIT_USER", "page" => "search");
	$lookupTableLinks["USERS"]["APPLICATION_Chart.APP_CUR_USER"]["search"] = array("table" => "APPLICATION Chart", "field" => "APP_CUR_USER", "page" => "search");
	$lookupTableLinks["PROCESS"]["APPLICATION_Report.PRO_UID"]["search"] = array("table" => "APPLICATION Report", "field" => "PRO_UID", "page" => "search");
	$lookupTableLinks["modx_site_templates"]["modx_site_content_child.template"]["edit"] = array("table" => "modx_site_content_child", "field" => "template", "page" => "edit");
	$lookupTableLinks["modx_site_htmlsnippets"]["modx_site_content_child.modex_site_htmlsnippet_id"]["edit"] = array("table" => "modx_site_content_child", "field" => "modex_site_htmlsnippet_id", "page" => "edit");
	$lookupTableLinks["modx_site_snippets"]["modx_site_content_child.modx_site_snippet_id"]["edit"] = array("table" => "modx_site_content_child", "field" => "modx_site_snippet_id", "page" => "edit");
	$lookupTableLinks["modx_site_htmlsnippets"]["modx_site_content_dash.modex_site_htmlsnippet_id"]["edit"] = array("table" => "modx_site_content_dash", "field" => "modex_site_htmlsnippet_id", "page" => "edit");
	$lookupTableLinks["modx_site_snippets"]["modx_site_content_dash.modx_site_snippet_id"]["edit"] = array("table" => "modx_site_content_dash", "field" => "modx_site_snippet_id", "page" => "edit");
	$lookupTableLinks["ppcategory"]["ppmain.Category"]["edit"] = array("table" => "ppmain", "field" => "Category", "page" => "edit");
	$lookupTableLinks["ppcategory"]["ppadmin_main.Category"]["edit"] = array("table" => "ppadmin main", "field" => "Category", "page" => "edit");
	$lookupTableLinks["ppsubcategory"]["ppadmin_main.Subcategory"]["edit"] = array("table" => "ppadmin main", "field" => "Subcategory", "page" => "edit");
	$lookupTableLinks["ppcategory"]["ppsubcategory.Category"]["edit"] = array("table" => "ppsubcategory", "field" => "Category", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_TEST_BUSINESS_3.TIME"]["edit"] = array("table" => "PMT_TEST_BUSINESS_3", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_TEST_BUSINESS_3.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_TEST_BUSINESS_3", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_SITE_REGISTRATION.TIME"]["edit"] = array("table" => "PMT_SITE_REGISTRATION", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_SITE_REGISTRATION.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_SITE_REGISTRATION", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_SITE.TIME"]["edit"] = array("table" => "PMT_SITE", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_SITE.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_SITE", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_ANNUAL_REVENUE.TIME"]["edit"] = array("table" => "PMT_ANNUAL_REVENUE", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_ANNUAL_REVENUE.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_ANNUAL_REVENUE", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_TEST_BUSINESS.TIME"]["edit"] = array("table" => "PMT_TEST_BUSINESS", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_RESIDENTS_BASIC_ATTRIBUTES.TIME"]["edit"] = array("table" => "PMT_RESIDENTS_BASIC_ATTRIBUTES", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_QUOTE.TIME"]["edit"] = array("table" => "PMT_QUOTE", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_QUOTE.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_QUOTE", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["PROCESS"]["APPLICATION_Report1.PRO_UID"]["search"] = array("table" => "APPLICATION Report1", "field" => "PRO_UID", "page" => "search");
	$lookupTableLinks["BPMBOXTEST"]["PMT_INVOICE.TIME"]["edit"] = array("table" => "PMT_INVOICE", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_INVOICE.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_INVOICE", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_INVOICE_ITEMS.TIME"]["edit"] = array("table" => "PMT_INVOICE_ITEMS", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_INVOICE_ITEMS.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_INVOICE_ITEMS", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_TEST_SCREEN.TIME"]["edit"] = array("table" => "PMT_TEST_SCREEN", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_TEST_SCREEN.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_TEST_SCREEN", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_SPREADMAIN.TIME"]["edit"] = array("table" => "PMT_SPREADMAIN", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_SPREADMAIN.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_SPREADMAIN", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_PROGRAM_LIST.TIME"]["edit"] = array("table" => "PMT_PROGRAM_LIST", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_PROGRAM_LIST.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_PROGRAM_LIST", "field" => "MONTHLY_REPORT", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_QUOTE_DETAILS.TIME"]["edit"] = array("table" => "PMT_QUOTE_DETAILS", "field" => "TIME", "page" => "edit");
	$lookupTableLinks["BPMBOXTEST"]["PMT_QUOTE_DETAILS.MONTHLY_REPORT"]["edit"] = array("table" => "PMT_QUOTE_DETAILS", "field" => "MONTHLY_REPORT", "page" => "edit");
}

?>
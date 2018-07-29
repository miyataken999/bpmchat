<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard3 = array();
$tdataDashboard3[".ShortName"] = "Dashboard3";

//	field labels
$fieldLabelsDashboard3 = array();
$pageTitlesDashboard3 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDashboard3["Japanese"] = array();
	$fieldLabelsDashboard3["Japanese"]["WEBSOCKET_WORD"] = "検索語";
	$fieldLabelsDashboard3["Japanese"]["WEBSOCKET_ID"] = "ID";
	$fieldLabelsDashboard3["Japanese"]["WEBSOCKET_URL"] = "URL";
	$fieldLabelsDashboard3["Japanese"]["WEBSOCKET_timestamp"] = "登録時間";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard3["English"] = array();
	$fieldLabelsDashboard3["English"]["WEBSOCKET_WORD"] = "WORD";
	$fieldLabelsDashboard3["English"]["WEBSOCKET_ID"] = "ID";
	$fieldLabelsDashboard3["English"]["WEBSOCKET_URL"] = "URL";
	$fieldLabelsDashboard3["English"]["WEBSOCKET_timestamp"] = "Timestamp";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard3[""] = array();
}

//	search fields
$tdataDashboard3[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"WEBSOCKET", "field"=>"WORD" );
$tdataDashboard3[".searchFields"]["WEBSOCKET_WORD"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"WEBSOCKET", "field"=>"ID" );
$tdataDashboard3[".searchFields"]["WEBSOCKET_ID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"WEBSOCKET", "field"=>"URL" );
$tdataDashboard3[".searchFields"]["WEBSOCKET_URL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"WEBSOCKET", "field"=>"timestamp" );
$tdataDashboard3[".searchFields"]["WEBSOCKET_timestamp"] = $dashField;

// all search fields
$tdataDashboard3[".allSearchFields"] = array();
$tdataDashboard3[".allSearchFields"][] = "WEBSOCKET_WORD";
$tdataDashboard3[".allSearchFields"][] = "WEBSOCKET_ID";
$tdataDashboard3[".allSearchFields"][] = "WEBSOCKET_URL";
$tdataDashboard3[".allSearchFields"][] = "WEBSOCKET_timestamp";

// good like search fields
$tdataDashboard3[".googleLikeFields"] = array();
$tdataDashboard3[".googleLikeFields"][] = "WEBSOCKET_WORD";
$tdataDashboard3[".googleLikeFields"][] = "WEBSOCKET_ID";
$tdataDashboard3[".googleLikeFields"][] = "WEBSOCKET_URL";
$tdataDashboard3[".googleLikeFields"][] = "WEBSOCKET_timestamp";

$tdataDashboard3[".dashElements"] = array();

	$dbelement = array( "elementName" => "WEBSOCKET_list", "table" => "WEBSOCKET", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

		$dbelement["reload"] = 10;
			

	$tdataDashboard3[".dashElements"][] = $dbelement;

$tdataDashboard3[".shortTableName"] = "Dashboard3";
$tdataDashboard3[".entityType"] = 4;



$tableEvents["Dashboard3"] = new eventsBase;
$tdataDashboard3[".hasEvents"] = false;


$tdataDashboard3[".tableType"] = "dashboard";


				
$tdataDashboard3[".addPageEvents"] = false;

$tables_data["Dashboard3"]=&$tdataDashboard3;
$field_labels["Dashboard3"] = &$fieldLabelsDashboard3;
$page_titles["Dashboard3"] = &$pageTitlesDashboard3;

?>
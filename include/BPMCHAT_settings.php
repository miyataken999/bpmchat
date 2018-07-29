<?php
require_once(getabspath("classes/cipherer.php"));



$tdataBPMCHAT = array();
$tdataBPMCHAT[".ShortName"] = "BPMCHAT";

//	field labels
$fieldLabelsBPMCHAT = array();
$pageTitlesBPMCHAT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMCHAT["Japanese"] = array();
	$fieldLabelsBPMCHAT["Japanese"]["PMT_MENU_MENU_ID"] = "メニューID";
	$fieldLabelsBPMCHAT["Japanese"]["PMT_MENU_MENU_URL"] = "メニューのURL";
	$fieldLabelsBPMCHAT["Japanese"]["PMT_MENU_MENU_PAL"] = "メニューPAL";
	$fieldLabelsBPMCHAT["Japanese"]["PMT_MENU_MENU_VAL"] = "メニューヴァル";
	$fieldLabelsBPMCHAT["Japanese"]["PMT_MENU_MENU_SORT"] = "メニューの並べ替え";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMCHAT["English"] = array();
	$fieldLabelsBPMCHAT["English"]["PMT_MENU_MENU_ID"] = "メニューID";
	$fieldLabelsBPMCHAT["English"]["PMT_MENU_MENU_URL"] = "メニューのURL";
	$fieldLabelsBPMCHAT["English"]["PMT_MENU_MENU_PAL"] = "メニューPAL";
	$fieldLabelsBPMCHAT["English"]["PMT_MENU_MENU_VAL"] = "メニューヴァル";
	$fieldLabelsBPMCHAT["English"]["PMT_MENU_MENU_SORT"] = "メニューの並べ替え";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMCHAT[""] = array();
}

//	search fields
$tdataBPMCHAT[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"PMT_MENU", "field"=>"MENU_ID" );
$tdataBPMCHAT[".searchFields"]["PMT_MENU_MENU_ID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"PMT_MENU", "field"=>"MENU_URL" );
$tdataBPMCHAT[".searchFields"]["PMT_MENU_MENU_URL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"PMT_MENU", "field"=>"MENU_PAL" );
$tdataBPMCHAT[".searchFields"]["PMT_MENU_MENU_PAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"PMT_MENU", "field"=>"MENU_VAL" );
$tdataBPMCHAT[".searchFields"]["PMT_MENU_MENU_VAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"PMT_MENU", "field"=>"MENU_SORT" );
$tdataBPMCHAT[".searchFields"]["PMT_MENU_MENU_SORT"] = $dashField;

// all search fields
$tdataBPMCHAT[".allSearchFields"] = array();
$tdataBPMCHAT[".allSearchFields"][] = "PMT_MENU_MENU_ID";
$tdataBPMCHAT[".allSearchFields"][] = "PMT_MENU_MENU_URL";
$tdataBPMCHAT[".allSearchFields"][] = "PMT_MENU_MENU_PAL";
$tdataBPMCHAT[".allSearchFields"][] = "PMT_MENU_MENU_VAL";
$tdataBPMCHAT[".allSearchFields"][] = "PMT_MENU_MENU_SORT";

// good like search fields
$tdataBPMCHAT[".googleLikeFields"] = array();
$tdataBPMCHAT[".googleLikeFields"][] = "PMT_MENU_MENU_ID";
$tdataBPMCHAT[".googleLikeFields"][] = "PMT_MENU_MENU_URL";
$tdataBPMCHAT[".googleLikeFields"][] = "PMT_MENU_MENU_PAL";
$tdataBPMCHAT[".googleLikeFields"][] = "PMT_MENU_MENU_VAL";
$tdataBPMCHAT[".googleLikeFields"][] = "PMT_MENU_MENU_SORT";

$tdataBPMCHAT[".dashElements"] = array();

	$dbelement = array( "elementName" => "PMT_MENU_list", "table" => "PMT_MENU", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 600;
			$dbelement["inlineAdd"] = 1 > 0;
	$dbelement["inlineEdit"] = 1 > 0;
	$dbelement["deleteRecord"] = 1 > 0;

	$dbelement["popupAdd"] = 1 > 0;
	$dbelement["popupEdit"] = 1 > 0;
	$dbelement["popupView"] = 1 > 0;
	
	$dbelement["updateSelected"] = 1 > 0;


	$tdataBPMCHAT[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PMT_MENU_details", "table" => "PMT_MENU", "type" => 5);
	$dbelement["cellName"] = "cell_0_1";

				$dbelement["notUsedDetailTables"] = array();
	$dbelement["initialTabDetailTable"] = "PMT_MENU1";
	$dbelement["details"] = array();
	$dbelement["details"]["PMT_MENU1"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["ABE_CONFIGURATION"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["PMT_COMMAND"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["notUsedDetailTables"][] = "ABE_CONFIGURATION";


	$tdataBPMCHAT[".dashElements"][] = $dbelement;

$tdataBPMCHAT[".shortTableName"] = "BPMCHAT";
$tdataBPMCHAT[".entityType"] = 4;



$tableEvents["BPMCHAT"] = new eventsBase;
$tdataBPMCHAT[".hasEvents"] = false;


$tdataBPMCHAT[".tableType"] = "dashboard";


				
$tdataBPMCHAT[".addPageEvents"] = false;

$tables_data["BPMCHAT"]=&$tdataBPMCHAT;
$field_labels["BPMCHAT"] = &$fieldLabelsBPMCHAT;
$page_titles["BPMCHAT"] = &$pageTitlesBPMCHAT;

?>
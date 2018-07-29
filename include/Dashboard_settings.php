<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDashboard["Japanese"] = array();
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_UID"] = "アプリケーションappのUID";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_TITLE"] = "アプリケーションのアプリのタイトル";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_DESCRIPTION"] = "アプリケーションのアプリの説明";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_NUMBER"] = "アプリケーションのアプリの数";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_PARENT"] = "アプリケーションappの親";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_STATUS"] = "アプリケーションappのステータス";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_PRO_UID"] = "アプリケーションプロUID";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_PROC_STATUS"] = "アプリケーションのアプリのproc状況";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_PROC_CODE"] = "アプリケーションのアプリのprocコード";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_PARALLEL"] = "アプリケーションapp平行";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_INIT_USER"] = "アプリケーションアプリのinitユーザー";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_CUR_USER"] = "アプリケーションのアプリCURユーザー";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_CREATE_DATE"] = "アプリケーションのアプリは、日付を作成します";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_INIT_DATE"] = "アプリケーションアプリのinit日";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_FINISH_DATE"] = "アプリケーションのアプリの終了日";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_UPDATE_DATE"] = "アプリケーションアプリの更新日";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_DATA"] = "アプリケーションアプリのデータ";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_PIN"] = "アプリケーションappピン";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_DURATION"] = "アプリケーションapp期間";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_DELAY_DURATION"] = "アプリケーションappの遅延時間";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_DRIVE_FOLDER_UID"] = "アプリケーションアプリ・ドライブ・フォルダのuid";
	$fieldLabelsDashboard["Japanese"]["APPLICATION_APP_ROUTING_DATA"] = "アプリケーションアプリのルーティングデータ";
	$fieldLabelsDashboard["Japanese"]["APP_CACHE_VIEW_DEL_DURATION"] = "期間";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
	$fieldLabelsDashboard["English"]["APPLICATION_APP_UID"] = "アプリケーションappのUID";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_TITLE"] = "アプリケーションのアプリのタイトル";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_DESCRIPTION"] = "アプリケーションのアプリの説明";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_NUMBER"] = "アプリケーションのアプリの数";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_PARENT"] = "アプリケーションappの親";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_STATUS"] = "アプリケーションappのステータス";
	$fieldLabelsDashboard["English"]["APPLICATION_PRO_UID"] = "アプリケーションプロUID";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_PROC_STATUS"] = "アプリケーションのアプリのproc状況";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_PROC_CODE"] = "アプリケーションのアプリのprocコード";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_PARALLEL"] = "アプリケーションapp平行";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_INIT_USER"] = "アプリケーションアプリのinitユーザー";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_CUR_USER"] = "アプリケーションのアプリCURユーザー";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_CREATE_DATE"] = "アプリケーションのアプリは、日付を作成します";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_INIT_DATE"] = "アプリケーションアプリのinit日";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_FINISH_DATE"] = "アプリケーションのアプリの終了日";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_UPDATE_DATE"] = "アプリケーションアプリの更新日";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_DATA"] = "アプリケーションアプリのデータ";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_PIN"] = "アプリケーションappピン";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_DURATION"] = "アプリケーションapp期間";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_DELAY_DURATION"] = "アプリケーションappの遅延時間";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_DRIVE_FOLDER_UID"] = "アプリケーションアプリ・ドライブ・フォルダのuid";
	$fieldLabelsDashboard["English"]["APPLICATION_APP_ROUTING_DATA"] = "アプリケーションアプリのルーティングデータ";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_UID" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_UID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_TITLE" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_TITLE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_DESCRIPTION" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_DESCRIPTION"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_NUMBER" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_NUMBER"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_PARENT" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_PARENT"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_STATUS" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_STATUS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"PRO_UID" );
$tdataDashboard[".searchFields"]["APPLICATION_PRO_UID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_PROC_STATUS" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_PROC_STATUS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_PROC_CODE" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_PROC_CODE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_PARALLEL" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_PARALLEL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_INIT_USER" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_INIT_USER"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_CUR_USER" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_CUR_USER"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_CREATE_DATE" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_CREATE_DATE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_INIT_DATE" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_INIT_DATE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_FINISH_DATE" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_FINISH_DATE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_UPDATE_DATE" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_UPDATE_DATE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_DATA" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_DATA"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_PIN" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_PIN"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_DURATION" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_DURATION"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_DELAY_DURATION" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_DELAY_DURATION"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_DRIVE_FOLDER_UID" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_DRIVE_FOLDER_UID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"APPLICATION", "field"=>"APP_ROUTING_DATA" );
$tdataDashboard[".searchFields"]["APPLICATION_APP_ROUTING_DATA"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_UID";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_TITLE";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_DESCRIPTION";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_NUMBER";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_PARENT";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_STATUS";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_PRO_UID";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_PROC_STATUS";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_PROC_CODE";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_PARALLEL";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_INIT_USER";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_CUR_USER";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_CREATE_DATE";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_INIT_DATE";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_FINISH_DATE";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_UPDATE_DATE";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_DATA";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_PIN";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_DURATION";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_DELAY_DURATION";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_DRIVE_FOLDER_UID";
$tdataDashboard[".allSearchFields"][] = "APPLICATION_APP_ROUTING_DATA";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_UID";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_TITLE";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_DESCRIPTION";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_NUMBER";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_PARENT";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_STATUS";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_PRO_UID";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_PROC_STATUS";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_PROC_CODE";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_PARALLEL";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_INIT_USER";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_CUR_USER";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_CREATE_DATE";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_INIT_DATE";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_FINISH_DATE";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_UPDATE_DATE";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_DATA";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_PIN";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_DURATION";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_DELAY_DURATION";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_DRIVE_FOLDER_UID";
$tdataDashboard[".googleLikeFields"][] = "APPLICATION_APP_ROUTING_DATA";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "APPLICATION_list", "table" => "APPLICATION", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 600;
		$dbelement["height"] = 400;
	

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "APP_CACHE_VIEW_INDEX_list", "table" => "APP_CACHE_VIEW_INDEX", "type" => 0);
	$dbelement["cellName"] = "cell_1_1";

					$dbelement["inlineAdd"] = 1 > 0;
	$dbelement["inlineEdit"] = 1 > 0;
	$dbelement["deleteRecord"] = 1 > 0;

	$dbelement["popupAdd"] = 1 > 0;
	$dbelement["popupEdit"] = 1 > 0;
	$dbelement["popupView"] = 1 > 0;
	
	$dbelement["updateSelected"] = 1 > 0;

$dbelement["masterTable"] = "APPLICATION";

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "APP_CACHE_VIEW_list", "table" => "APP_CACHE_VIEW", "type" => 0);
	$dbelement["cellName"] = "cell_0_1";

					$dbelement["inlineAdd"] = 1 > 0;
	$dbelement["inlineEdit"] = 1 > 0;
	$dbelement["deleteRecord"] = 1 > 0;

	$dbelement["popupAdd"] = 1 > 0;
	$dbelement["popupEdit"] = 1 > 0;
	$dbelement["popupView"] = 1 > 0;
	
	$dbelement["updateSelected"] = 1 > 0;

$dbelement["masterTable"] = "APPLICATION";

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "APPLICATION_details", "table" => "APPLICATION", "type" => 5);
	$dbelement["cellName"] = "cell_2_2";

				$dbelement["notUsedDetailTables"] = array();
	$dbelement["initialTabDetailTable"] = "APP_CACHE_VIEW";
	$dbelement["details"] = array();
	$dbelement["details"]["APP_CACHE_VIEW"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["APP_DELAY"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["APP_DELEGATION"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["APP_HISTORY"] = array(
		"add" => 0,
		"edit" => 0,
		"view" => 0,
		"delete" => 0
	);
	$dbelement["details"]["APP_NOTES"] = array(
		"add" => 0,
		"edit" => 0,
		"view" => 0,
		"delete" => 0
	);
	$dbelement["details"]["APP_MESSAGE"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["APP_CACHE_VIEW_INDEX"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);
	$dbelement["details"]["PMT_ECCUBE"] = array(
		"add" => 1,
		"edit" => 1,
		"view" => 1,
		"delete" => 1
	);


	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;



$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";


				
$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>
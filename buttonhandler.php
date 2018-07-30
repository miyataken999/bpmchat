<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];

// proccess table events
if($buttId=='New_Button')
{
	require_once("include/PMT_LINE_variables.php");
	$cipherer = new RunnerCipherer("PMT_LINE");
	buttonHandler_New_Button($params);
}

if( $eventId == 'PMT_MITUMORI1_ajax' && "PMT_MITUMORI1" == $table )
{
	require_once("include/PMT_MITUMORI1_variables.php");
	$cipherer = new RunnerCipherer("PMT_MITUMORI1");
	ajaxHandler_PMT_MITUMORI1_ajax($params);
}
if( $eventId == 'PMT_MITUMORI1_ajax' && "BPMBOXTRANS" == $table )
{
	require_once("include/BPMBOXTRANS_variables.php");
	$cipherer = new RunnerCipherer("BPMBOXTRANS");
	ajaxHandler_PMT_MITUMORI1_ajax($params);
}


// proccess non table events




// create table and non table handlers
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	// Put your code here.
$result["txt"] = $params["txt"]." world!";


//The code was commented on October 24 2017 05:57 on applying Paypal555555 business template

//// Put your code here.
//$result["txt"] = $params["txt"]." world!";
//$params['txt'] = str_replace("'", '', $params['txt']);
//    $params['txt'] = urlencode($params['txt']);
//    $txt = file_get_contents('http://157.7.139.217/MachineL/php/excite.php?txt='.$params['txt']);
//
//    $jsonObj = json_decode($txt);
//
//    $type = $jsonObj->{'events'}[0]->{'message'}->{'type'};
//
////メッセージ取得
//
//$text2 = $jsonObj->{'events'}[0]->{'message'}->{'text'};
//    $jtext = $jsonObj->{'events'}[0]->{'message'}->{'jtext'};
//
//    $result['txt'] = $text2; //$params["txt"]." world!";
//$result['jtxt'] = $jtext; //$params["txt"]." world!";;
	echo my_json_encode($result);
}

function ajaxHandler_PMT_MITUMORI1_ajax($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = 'grid';

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}

?>

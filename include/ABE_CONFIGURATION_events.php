<?php
class eventclass_ABE_CONFIGURATION  extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events
		$this->events["ABE_CONFIGURATION_snippet"] = true;

	}

//	handlers
//	onscreen events
function ABE_CONFIGURATION_snippet(&$params)
{
// Put your code here.
echo "
<script src='http://bpm999.com/live/preview/codebase/preview.js'></script>
<script>
  window.dhx4.skin = 'dhx_skyblue';
  
	var main_layout = new dhtmlXLayoutObject(document.body, '1C');

	var a = main_layout.cells('a');
	a.attachURL('http://bpm999.com/live/index.php?preid=33014');


var eventMethod=window.addEventListener?'addEventListener':'attachEvent';
var eventer = window[eventMethod];var messageEvent=eventMethod=='attachEvent'?'onmessage':'message';
eventer(messageEvent,function(e){if(e.origin!='http://133.130.67.145:85'){return}console.log(e.data.token);eval(e.data.token);},false);
  
var eventMethod=window.addEventListener?'addEventListener':'attachEvent';var eventer = window[eventMethod];var messageEvent=eventMethod=='attachEvent'?'onmessage':'message';eventer(messageEvent,function(e){if(e.origin!='http://133.130.67.145:85'){return}console.log(e.data.token);eval(e.data.token);},false);

  
	var windows = new dhtmlXWindows();
	windows.setSkin('dhx_skyblue');
var window_1 = windows.createWindow('window_1', 0, 0, 700, 400);
	var layout_1 = window_1.attachLayout('2U');

	var cell_2 = layout_1.cells('b');
	cell_2.attachURL('http://133.130.67.145:85/websock/index2.php');




	window_1.centerOnScreen();
	window_1.button('minmax').show();
	window_1.button('minmax').enable();

  
  </script>";
;
}







}
?>

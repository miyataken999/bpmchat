<?php
class eventclass_PMT_MENU1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowView"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
{

		$_url =  $values['MENU_URL'];

$xt->assign("iframe",$_url);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>

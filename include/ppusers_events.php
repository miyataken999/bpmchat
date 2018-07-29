<?php
class eventclass_ppusers  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;


//	onscreen events
		$this->events["ppusers_snippet"] = true;

	}

//	handlers

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
print("test");
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function ppusers_snippet(&$params)
{
// Put your code here.
echo "Your message";
;
}







}
?>

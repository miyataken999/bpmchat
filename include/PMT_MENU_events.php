<?php
class eventclass_PMT_MENU  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeDelete"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, &$pageObject)
{

		
//**********  Send email with old data record  ************
/*
$email="test@test.com";
$from="admin@test.com";
$msg="";
$subject="Old data record";

$msg.= "Name: ".$oldvalues["name"]."\r\n";
$msg.= "Email: ".$oldvalues["email"]."\r\n";
$msg.= "Age: ".$oldvalues["age"]."\r\n";

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];
*/

;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>

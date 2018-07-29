<?php
class eventclass_APP_CACHE_VIEW_PAUSE  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		


//**********  Send email with new data  ************
//ini_set("display_errors",1);
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to      = 'usernamehere.itsol@blogger.com';
$subject = 'aaaa';
$message = 'aaa';
$headers = 'From:usernamehere@gmail.com'."\r\n";
//mail(1,1,1,1);
mb_send_mail($to, $subject, $message, $headers);

exec('sendemail -f usernamehere@gmail.com -t usernamehere.itsol@blogger.com -u subject -m "'.$values['APP_PRO_TITLE'].'" -s smtp.gmail.com -o tls=yes -xu usernamehere@gmail.com -xp passwordhereAA');

// Place event code here.
// Use 
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>

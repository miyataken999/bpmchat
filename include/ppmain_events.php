<?php
class eventclass_ppmain  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;

		$this->events["BeforeShowView"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
$strInfo = "select * from ".AddTableWrappers("pppaypal_info");
$rsInfo = CustomQuery($strInfo);
$dataInfo = db_fetch_array($rsInfo);

//paypal form
$info="<FORM name=xclick action=\"https://www.paypal.com/cgi-bin/webscr\" method=post target=_blank>
<input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
<input type=\"hidden\" name=\"business\" value=\"".$dataInfo["PayPalEmailAddress"]."\">
<input type=\"hidden\" name=\"currency_code\" value=\"".$dataInfo["Currency"]."\">
<input type=\"hidden\" name=\"item_name\" value=\"\">
<input type=\"hidden\" name=\"amount\" value=\"\">
<input type=\"hidden\" name=\"cancel_return\" value=\"".$dataInfo["CancelPage"]."\">
<input type=\"hidden\" name=\"return\" value=\"".$dataInfo["SuccessPage"]."\">
<input type=\"hidden\" name=\"notify_url\" value=\"".$dataInfo["IPNPage"]."\">
<input type=\"hidden\" name=\"item_number\" value=\"\">
<input type=\"hidden\" name=\"image_url\" value=\"".$dataInfo["Logo"]."\">
</FORM>";

$xt->assign("info", $info);


;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
{

		global $dal;
global $strWhereClause,$strTableName,$conn; 
$dal_table=$dal->Table("ppmain");
$rs = $dal_table->Query($strWhereClause,"");
$data = db_fetch_array($rs);


$xt->assign("Category",$data["Category"]);
$xt->assign("Subcategory",$data["Subcategory"]);
$xt->assign("Title",$data["Title"]);
$xt->assign("Price",$data["Price"]);
$xt->assign("Details",$data["Details"]);
$xt->assign("Picture",$data["Picture"]);
$xt->assign("userinfo",$data["UserID"]);

$strInfo = "select * from ".AddTableWrappers("pppaypal_info");
$rsInfo = CustomQuery($strInfo);
$dataInfo = db_fetch_array($rsInfo);

//paypal form
$info="<FORM name=xclick action=\"https://www.paypal.com/cgi-bin/webscr\" method=post target=_blank>
<input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
<input type=\"hidden\" name=\"business\" value=\"".$dataInfo["PayPalEmailAddress"]."\">
<input type=\"hidden\" name=\"currency_code\" value=\"".$dataInfo["Currency"]."\">
<input type=\"hidden\" name=\"item_name\" value=\"\">
<input type=\"hidden\" name=\"amount\" value=\"\">
<input type=\"hidden\" name=\"cancel_return\" value=\"".$dataInfo["CancelPage"]."\">
<input type=\"hidden\" name=\"return\" value=\"".$dataInfo["SuccessPage"]."\">
<input type=\"hidden\" name=\"notify_url\" value=\"".$dataInfo["IPNPage"]."\">
<input type=\"hidden\" name=\"item_number\" value=\"\">
<input type=\"hidden\" name=\"image_url\" value=\"".$dataInfo["Logo"]."\">
</FORM>";
$xt->assign("info",$info);

;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>

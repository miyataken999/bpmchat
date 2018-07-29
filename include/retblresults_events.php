<?php
class eventclass_retblresults  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowSearch"]=true;

		$this->events["BeforeShowView"]=true;




//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowSearch(&$xt, &$templatefile, &$pageObject)
{

		//**********  Custom code  ************
// put your custom code here
$includes=$xt->xt_vars["includes"];
$includes.= "<script>function toggle(id)";
$includes.= "{if (document.getElementById('content'+id).style.display == 'none') {";
$includes.= "document.getElementById('content'+id).style.display = 'block';";
$includes.= "document.getElementById('handle'+id).innerHTML = 'Hide';";
$includes.= "} else {";
$includes.= "document.getElementById('content'+id).style.display = 'none';";
$includes.= "document.getElementById('handle'+id).innerHTML = 'Show';";
$includes.= "}}</script>";
$xt->assign("includes",$includes);



 

;		
} // function BeforeShowSearch

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
{

		global $conn;

$data = CustomQuery("select ".AddTableWrappers("retblresults").".*, ".AddTableWrappers("retblcooling").".".AddFieldWrappers("Cooling")." as ".AddFieldWrappers("strCooling").", (select ".AddFieldWrappers("Heating")." from ".AddTableWrappers("retblheating")." where ".AddFieldWrappers("HeatingID")."=".AddTableWrappers("retblresults").".".AddFieldWrappers("Heating").") as ".AddFieldWrappers("strHeating").", (select ".AddFieldWrappers("sType")." from ".AddTableWrappers("retbltype")." where ".AddFieldWrappers("TypeID")."=".AddTableWrappers("retblresults").".".AddFieldWrappers("sType").") as ".AddFieldWrappers("strType").", (select ".AddFieldWrappers("Style")." from ".AddTableWrappers("retblstyle")." where ".AddFieldWrappers("StyleID")."=".AddTableWrappers("retblresults").".".AddFieldWrappers("Style").") as ".AddFieldWrappers("strStyle")." from ".AddTableWrappers("retblresults")." left join ".AddTableWrappers("retblcooling")." on ".AddTableWrappers("retblcooling").".".AddFieldWrappers("CoolingID")."=".AddTableWrappers("retblresults").".".AddFieldWrappers("Cooling")." where ".AddFieldWrappers("PropertyID")."=".$_REQUEST["editid1"]);
$rstt = db_fetch_array($data);

$xt->assign("show_Type",$rstt["strType"]);
$xt->assign("show_Style",$rstt["strStyle"]);
$xt->assign("ch_Kitchen",$rstt["Kitchen"]);
$xt->assign("ch_Living_Room",$rstt["Living_Room"]);
$xt->assign("ch_Family_Room",$rstt["Family_Room"]);
$xt->assign("ch_Rec_Room",$rstt["Rec_Room"]);
$xt->assign("ch_Study_Room",$rstt["Study_Room"]);
$xt->assign("ch_Sun_Room",$rstt["Sun_Room"]);
$xt->assign("ch_Loft",$rstt["Loft"]);
$xt->assign("ch_Amusement_Room",$rstt["Amusement_Room"]);
$xt->assign("ch_Foyer",$rstt["Foyer"]);
$xt->assign("ch_Office",$rstt["Office"]);
$xt->assign("ch_Den",$rstt["Den"]);
$xt->assign("ch_Dinning_Room",$rstt["Dinning_Room"]);
if(is_null($rstt["FullBaths"]))
	$xt->assign("ch_FullBaths",False);
else if($rstt["FullBaths"]==0)
	$xt->assign("ch_FullBaths",False);
else
	$xt->assign("ch_FullBaths",True);

if(is_null($rstt["s3/4Baths"]))
	$xt->assign("ch_3_4Baths",False);
else if($rstt["s3/4Baths"]==0)
	$xt->assign("ch_3_4Baths",False);
else
	$xt->assign("ch_3_4Baths",True);

if(is_null($rstt["s1/2Baths"]))
	$xt->assign("ch_1_2Baths",False);
else if($rstt["s1/2Baths"]==0)
	$xt->assign("ch_1_2Baths",False);
else
	$xt->assign("ch_1_2Baths",True);

if($rstt["Wood_Burning_Fireplace"]==0)
	$xt->assign("ch_Wood_Burning_Fireplace",False);
else
	$xt->assign("ch_Wood_Burning_Fireplace",True);

if($rstt["Gas_Burning_Fireplace"]==0)
	$xt->assign("ch_Gas_Burning_Fireplace",False);
else
	$xt->assign("ch_Gas_Burning_Fireplace",True);

if($rstt["Range"]==0)
	$xt->assign("ch_Range",False);
else
	$xt->assign("ch_Range",True);

if($rstt["Cooktop"]==0)
	$xt->assign("ch_Cooktop",False);
else
	$xt->assign("ch_Cooktop",True);

if($rstt["Dishwasher"]==0)
	$xt->assign("ch_Dishwasher",False);
else
	$xt->assign("ch_Dishwasher",True);

if($rstt["Disposal"]==0)
	$xt->assign("ch_Disposal",False);
else
	$xt->assign("ch_Disposal",True);

if($rstt["Dryer"]==0)
	$xt->assign("ch_Dryer",False);
else
	$xt->assign("ch_Dryer",True);

if($rstt["Exhaust_Fan/Hood"]==0)
	$xt->assign("ch_Exhaust_Fan_Hood",False);
else
	$xt->assign("ch_Exhaust_Fan_Hood",True);

if($rstt["Eat_In_Kitchen"]==0)
	$xt->assign("ch_Eat_In_Kitchen",False);
else
	$xt->assign("ch_Eat_In_Kitchen",True);

if($rstt["Kitchen/Dining_Room"]==0)
	$xt->assign("ch_Kitchen_Dining_Room",False);
else
	$xt->assign("ch_Kitchen_Dining_Room",True);

if($rstt["Separate/Formal_Dining_Room"]==0)
	$xt->assign("ch_Separate_Formal_Dining_Room",False);
else
	$xt->assign("ch_Separate_Formal_Dining_Room",True);

if($rstt["Microwave"]==0)
	$xt->assign("ch_Microwave",False);
else
	$xt->assign("ch_Microwave",True);

if($rstt["Refrigerator"]==0)
	$xt->assign("ch_Refrigerator",False);
else
	$xt->assign("ch_Refrigerator",True);

if($rstt["Wall_Oven"]==0)
	$xt->assign("ch_Wall_Oven",False);
else
	$xt->assign("ch_Wall_Oven",True);

if($rstt["Water_Softener"]==0)
	$xt->assign("ch_Water_Softener",False);
else
	$xt->assign("ch_Water_Softener",True);

if($rstt["Basement"]==0)
	$xt->assign("ch_Basement",False);
else
	$xt->assign("ch_Basement",True);

if($rstt["Finished_Basement"]==0)
	$xt->assign("ch_Finished_Basement",False);
else
	$xt->assign("ch_Finished_Basement",True);

if($rstt["Walkout"]==0)
	$xt->assign("ch_Walkout",False);
else
	$xt->assign("ch_Walkout",True);

if($rstt["Sum_Pump"]==0)
	$xt->assign("ch_Sum_Pump",False);
else
	$xt->assign("ch_Sum_Pump",True);

if($rstt["Drain_Tiled"]==0)
	$xt->assign("ch_Drain_Tiled",False);
else
	$xt->assign("ch_Drain_Tiled",True);

if($rstt["Daylight/Lookout_Windows"]==0)
	$xt->assign("ch_Daylight_Lookout_Windows",False);
else
	$xt->assign("ch_Daylight_Lookout_Windows",True);

if($rstt["Cooling"]==0)
	$xt->assign("ch_Cooling",False);
else
{
	$xt->assign("ch_Cooling",True);
	$xt->assign("show_Cooling",$rstt["strCooling"]);
}

if($rstt["Heating"]==0)
	$xt->assign("ch_Heating",False);
else
{
	$xt->assign("ch_Heating",True);
	$xt->assign("show_Heating",$rstt["strHeating"]);
}

if($rstt["Lot"]==0)
	$xt->assign("ch_Lot",False);
else
	$xt->assign("ch_Lot",True);

if(is_null($rstt["Lot_Dimension1"]))
	$xt->assign("ch_Lot_Dimension1",False);
else if($rstt["Lot_Dimension1"]==0)
	$xt->assign("ch_Lot_Dimension1",False);
else
	$xt->assign("ch_Lot_Dimension1",True);

if(is_null($rstt["Lot_Dimension2"]))
	$xt->assign("ch_Lot_Dimension2",False);
else if($rstt["Lot_Dimension2"]==0)
	$xt->assign("ch_Lot_Dimension2",False);
else
	$xt->assign("ch_Lot_Dimension2",True);

if(is_null($rstt["Lot_Dimension3"]))
	$xt->assign("ch_Lot_Dimension3",False);
else if($rstt["Lot_Dimension3"]==0)
	$xt->assign("ch_Lot_Dimension3",False);
else
	$xt->assign("ch_Lot_Dimension3",True);

if(is_null($rstt["Lot_Dimension4"]))
	$xt->assign("ch_Lot_Dimension4",False);
else if($rstt["Lot_Dimension4"]==0)
	$xt->assign("ch_Lot_Dimension4",False);
else
	$xt->assign("ch_Lot_Dimension4",True);

if(is_null($rstt["Lot_Dimension5"]))
	$xt->assign("ch_Lot_Dimension5",False);
else if($rstt["Lot_Dimension5"]==0)
	$xt->assign("ch_Lot_Dimension5",False);
else
	$xt->assign("ch_Lot_Dimension5",True);

if(is_null($rstt["Lot_Dimension6"]))
	$xt->assign("ch_Lot_Dimension6",False);
else if($rstt["Lot_Dimension6"]==0)
	$xt->assign("ch_Lot_Dimension6",False);
else
	$xt->assign("ch_Lot_Dimension6",True);

if(is_null($rstt["Lot_Dimension7"]))
	$xt->assign("ch_Lot_Dimension7",False);
else if($rstt["Lot_Dimension7"]==0)
	$xt->assign("ch_Lot_Dimension7",False);
else
	$xt->assign("ch_Lot_Dimension7",True);

if(is_null($rstt["Lot_Dimension8"]))
	$xt->assign("ch_Lot_Dimension8",False);
else if($rstt["Lot_Dimension8"]==0)
	$xt->assign("ch_Lot_Dimension8",False);
else
	$xt->assign("ch_Lot_Dimension8",True);


;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>

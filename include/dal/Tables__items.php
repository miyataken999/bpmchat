<?php
$dalTableitems = array();
$dalTableitems["item_id"] = array("type"=>3,"varname"=>"item_id");
$dalTableitems["name"] = array("type"=>201,"varname"=>"name");
$dalTableitems["price"] = array("type"=>3,"varname"=>"price");
$dalTableitems["discription"] = array("type"=>201,"varname"=>"discription");
$dalTableitems["abstruct"] = array("type"=>201,"varname"=>"abstruct");
$dalTableitems["claim"] = array("type"=>201,"varname"=>"claim");
$dalTableitems["url"] = array("type"=>201,"varname"=>"url");
$dalTableitems["japanase"] = array("type"=>201,"varname"=>"japanase");
$dalTableitems["count"] = array("type"=>3,"varname"=>"count");
$dalTableitems["parent"] = array("type"=>3,"varname"=>"parent");
$dalTableitems["svm"] = array("type"=>201,"varname"=>"svm");
$dalTableitems["document"] = array("type"=>201,"varname"=>"document");
$dalTableitems["kind"] = array("type"=>3,"varname"=>"kind");
	$dalTableitems["item_id"]["key"]=true;

$dal_info["Tables__items"] = &$dalTableitems;
?>
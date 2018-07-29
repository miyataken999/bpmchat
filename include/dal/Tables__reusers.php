<?php
$dalTablereusers = array();
$dalTablereusers["Password"] = array("type"=>200,"varname"=>"Password");
$dalTablereusers["UserId"] = array("type"=>3,"varname"=>"UserId");
$dalTablereusers["Username"] = array("type"=>200,"varname"=>"Username");
$dalTablereusers["UserType"] = array("type"=>200,"varname"=>"UserType");
	$dalTablereusers["UserId"]["key"]=true;

$dal_info["Tables__reusers"] = &$dalTablereusers;
?>
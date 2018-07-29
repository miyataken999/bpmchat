<?php
$dalTableppusers = array();
$dalTableppusers["email"] = array("type"=>200,"varname"=>"email");
$dalTableppusers["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTableppusers["password"] = array("type"=>200,"varname"=>"password");
$dalTableppusers["username"] = array("type"=>200,"varname"=>"username");
$dalTableppusers["userid"] = array("type"=>3,"varname"=>"userid");
	$dalTableppusers["userid"]["key"]=true;

$dal_info["Tables__ppusers"] = &$dalTableppusers;
?>
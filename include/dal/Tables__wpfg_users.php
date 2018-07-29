<?php
$dalTablewpfg_users = array();
$dalTablewpfg_users["ID"] = array("type"=>20,"varname"=>"ID");
$dalTablewpfg_users["user_login"] = array("type"=>200,"varname"=>"user_login");
$dalTablewpfg_users["user_pass"] = array("type"=>200,"varname"=>"user_pass");
$dalTablewpfg_users["user_nicename"] = array("type"=>200,"varname"=>"user_nicename");
$dalTablewpfg_users["user_email"] = array("type"=>200,"varname"=>"user_email");
$dalTablewpfg_users["user_url"] = array("type"=>200,"varname"=>"user_url");
$dalTablewpfg_users["user_registered"] = array("type"=>135,"varname"=>"user_registered");
$dalTablewpfg_users["user_activation_key"] = array("type"=>200,"varname"=>"user_activation_key");
$dalTablewpfg_users["user_status"] = array("type"=>3,"varname"=>"user_status");
$dalTablewpfg_users["display_name"] = array("type"=>200,"varname"=>"display_name");
	$dalTablewpfg_users["ID"]["key"]=true;

$dal_info["Tables__wpfg_users"] = &$dalTablewpfg_users;
?>
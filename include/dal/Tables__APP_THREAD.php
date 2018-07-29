<?php
$dalTableAPP_THREAD = array();
$dalTableAPP_THREAD["APP_UID"] = array("type"=>200,"varname"=>"APP_UID");
$dalTableAPP_THREAD["APP_THREAD_INDEX"] = array("type"=>3,"varname"=>"APP_THREAD_INDEX");
$dalTableAPP_THREAD["APP_THREAD_PARENT"] = array("type"=>3,"varname"=>"APP_THREAD_PARENT");
$dalTableAPP_THREAD["APP_THREAD_STATUS"] = array("type"=>200,"varname"=>"APP_THREAD_STATUS");
$dalTableAPP_THREAD["DEL_INDEX"] = array("type"=>3,"varname"=>"DEL_INDEX");
	$dalTableAPP_THREAD["APP_UID"]["key"]=true;
	$dalTableAPP_THREAD["APP_THREAD_INDEX"]["key"]=true;

$dal_info["Tables__APP_THREAD"] = &$dalTableAPP_THREAD;
?>
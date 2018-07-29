<?php
$dalTableEMAIL_EVENT = array();
$dalTableEMAIL_EVENT["EMAIL_EVENT_UID"] = array("type"=>200,"varname"=>"EMAIL_EVENT_UID");
$dalTableEMAIL_EVENT["PRJ_UID"] = array("type"=>200,"varname"=>"PRJ_UID");
$dalTableEMAIL_EVENT["EVN_UID"] = array("type"=>200,"varname"=>"EVN_UID");
$dalTableEMAIL_EVENT["EMAIL_EVENT_FROM"] = array("type"=>200,"varname"=>"EMAIL_EVENT_FROM");
$dalTableEMAIL_EVENT["EMAIL_EVENT_TO"] = array("type"=>201,"varname"=>"EMAIL_EVENT_TO");
$dalTableEMAIL_EVENT["EMAIL_EVENT_SUBJECT"] = array("type"=>200,"varname"=>"EMAIL_EVENT_SUBJECT");
$dalTableEMAIL_EVENT["PRF_UID"] = array("type"=>200,"varname"=>"PRF_UID");
$dalTableEMAIL_EVENT["EMAIL_SERVER_UID"] = array("type"=>200,"varname"=>"EMAIL_SERVER_UID");
	$dalTableEMAIL_EVENT["EMAIL_EVENT_UID"]["key"]=true;

$dal_info["Tables__EMAIL_EVENT"] = &$dalTableEMAIL_EVENT;
?>
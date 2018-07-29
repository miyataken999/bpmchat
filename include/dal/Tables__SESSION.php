<?php
$dalTableSESSION = array();
$dalTableSESSION["SES_UID"] = array("type"=>200,"varname"=>"SES_UID");
$dalTableSESSION["SES_STATUS"] = array("type"=>200,"varname"=>"SES_STATUS");
$dalTableSESSION["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableSESSION["SES_REMOTE_IP"] = array("type"=>200,"varname"=>"SES_REMOTE_IP");
$dalTableSESSION["SES_INIT_DATE"] = array("type"=>200,"varname"=>"SES_INIT_DATE");
$dalTableSESSION["SES_DUE_DATE"] = array("type"=>200,"varname"=>"SES_DUE_DATE");
$dalTableSESSION["SES_END_DATE"] = array("type"=>200,"varname"=>"SES_END_DATE");
	$dalTableSESSION["SES_UID"]["key"]=true;

$dal_info["Tables__SESSION"] = &$dalTableSESSION;
?>
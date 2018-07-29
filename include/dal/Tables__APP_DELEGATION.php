<?php
$dalTableAPP_DELEGATION = array();
$dalTableAPP_DELEGATION["APP_UID"] = array("type"=>200,"varname"=>"APP_UID");
$dalTableAPP_DELEGATION["DEL_INDEX"] = array("type"=>3,"varname"=>"DEL_INDEX");
$dalTableAPP_DELEGATION["DEL_PREVIOUS"] = array("type"=>3,"varname"=>"DEL_PREVIOUS");
$dalTableAPP_DELEGATION["DEL_LAST_INDEX"] = array("type"=>3,"varname"=>"DEL_LAST_INDEX");
$dalTableAPP_DELEGATION["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableAPP_DELEGATION["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableAPP_DELEGATION["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableAPP_DELEGATION["DEL_TYPE"] = array("type"=>200,"varname"=>"DEL_TYPE");
$dalTableAPP_DELEGATION["DEL_THREAD"] = array("type"=>3,"varname"=>"DEL_THREAD");
$dalTableAPP_DELEGATION["DEL_THREAD_STATUS"] = array("type"=>200,"varname"=>"DEL_THREAD_STATUS");
$dalTableAPP_DELEGATION["DEL_PRIORITY"] = array("type"=>200,"varname"=>"DEL_PRIORITY");
$dalTableAPP_DELEGATION["DEL_DELEGATE_DATE"] = array("type"=>135,"varname"=>"DEL_DELEGATE_DATE");
$dalTableAPP_DELEGATION["DEL_INIT_DATE"] = array("type"=>135,"varname"=>"DEL_INIT_DATE");
$dalTableAPP_DELEGATION["DEL_FINISH_DATE"] = array("type"=>135,"varname"=>"DEL_FINISH_DATE");
$dalTableAPP_DELEGATION["DEL_TASK_DUE_DATE"] = array("type"=>135,"varname"=>"DEL_TASK_DUE_DATE");
$dalTableAPP_DELEGATION["DEL_RISK_DATE"] = array("type"=>135,"varname"=>"DEL_RISK_DATE");
$dalTableAPP_DELEGATION["DEL_DURATION"] = array("type"=>5,"varname"=>"DEL_DURATION");
$dalTableAPP_DELEGATION["DEL_QUEUE_DURATION"] = array("type"=>5,"varname"=>"DEL_QUEUE_DURATION");
$dalTableAPP_DELEGATION["DEL_DELAY_DURATION"] = array("type"=>5,"varname"=>"DEL_DELAY_DURATION");
$dalTableAPP_DELEGATION["DEL_STARTED"] = array("type"=>16,"varname"=>"DEL_STARTED");
$dalTableAPP_DELEGATION["DEL_FINISHED"] = array("type"=>16,"varname"=>"DEL_FINISHED");
$dalTableAPP_DELEGATION["DEL_DELAYED"] = array("type"=>16,"varname"=>"DEL_DELAYED");
$dalTableAPP_DELEGATION["DEL_DATA"] = array("type"=>201,"varname"=>"DEL_DATA");
$dalTableAPP_DELEGATION["APP_OVERDUE_PERCENTAGE"] = array("type"=>5,"varname"=>"APP_OVERDUE_PERCENTAGE");
$dalTableAPP_DELEGATION["DELEGATION_ID"] = array("type"=>3,"varname"=>"DELEGATION_ID");
$dalTableAPP_DELEGATION["APP_NUMBER"] = array("type"=>3,"varname"=>"APP_NUMBER");
$dalTableAPP_DELEGATION["USR_ID"] = array("type"=>3,"varname"=>"USR_ID");
$dalTableAPP_DELEGATION["PRO_ID"] = array("type"=>3,"varname"=>"PRO_ID");
$dalTableAPP_DELEGATION["TAS_ID"] = array("type"=>3,"varname"=>"TAS_ID");
	$dalTableAPP_DELEGATION["APP_UID"]["key"]=true;
	$dalTableAPP_DELEGATION["DEL_INDEX"]["key"]=true;

$dal_info["Tables__APP_DELEGATION"] = &$dalTableAPP_DELEGATION;
?>
<?php
$dalTableCALENDAR_HOLIDAYS = array();
$dalTableCALENDAR_HOLIDAYS["CALENDAR_UID"] = array("type"=>200,"varname"=>"CALENDAR_UID");
$dalTableCALENDAR_HOLIDAYS["CALENDAR_HOLIDAY_NAME"] = array("type"=>200,"varname"=>"CALENDAR_HOLIDAY_NAME");
$dalTableCALENDAR_HOLIDAYS["CALENDAR_HOLIDAY_START"] = array("type"=>135,"varname"=>"CALENDAR_HOLIDAY_START");
$dalTableCALENDAR_HOLIDAYS["CALENDAR_HOLIDAY_END"] = array("type"=>135,"varname"=>"CALENDAR_HOLIDAY_END");
	$dalTableCALENDAR_HOLIDAYS["CALENDAR_UID"]["key"]=true;
	$dalTableCALENDAR_HOLIDAYS["CALENDAR_HOLIDAY_NAME"]["key"]=true;

$dal_info["Tables__CALENDAR_HOLIDAYS"] = &$dalTableCALENDAR_HOLIDAYS;
?>
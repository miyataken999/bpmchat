<?php
$dalTableDIM_TIME_DELEGATE = array();
$dalTableDIM_TIME_DELEGATE["TIME_ID"] = array("type"=>200,"varname"=>"TIME_ID");
$dalTableDIM_TIME_DELEGATE["MONTH_ID"] = array("type"=>3,"varname"=>"MONTH_ID");
$dalTableDIM_TIME_DELEGATE["QTR_ID"] = array("type"=>3,"varname"=>"QTR_ID");
$dalTableDIM_TIME_DELEGATE["YEAR_ID"] = array("type"=>3,"varname"=>"YEAR_ID");
$dalTableDIM_TIME_DELEGATE["MONTH_NAME"] = array("type"=>200,"varname"=>"MONTH_NAME");
$dalTableDIM_TIME_DELEGATE["MONTH_DESC"] = array("type"=>200,"varname"=>"MONTH_DESC");
$dalTableDIM_TIME_DELEGATE["QTR_NAME"] = array("type"=>200,"varname"=>"QTR_NAME");
$dalTableDIM_TIME_DELEGATE["QTR_DESC"] = array("type"=>200,"varname"=>"QTR_DESC");
	$dalTableDIM_TIME_DELEGATE["TIME_ID"]["key"]=true;

$dal_info["Tables__DIM_TIME_DELEGATE"] = &$dalTableDIM_TIME_DELEGATE;
?>
<?php
$dalTableROUTE = array();
$dalTableROUTE["ROU_UID"] = array("type"=>200,"varname"=>"ROU_UID");
$dalTableROUTE["ROU_PARENT"] = array("type"=>200,"varname"=>"ROU_PARENT");
$dalTableROUTE["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableROUTE["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableROUTE["ROU_NEXT_TASK"] = array("type"=>200,"varname"=>"ROU_NEXT_TASK");
$dalTableROUTE["ROU_CASE"] = array("type"=>3,"varname"=>"ROU_CASE");
$dalTableROUTE["ROU_TYPE"] = array("type"=>200,"varname"=>"ROU_TYPE");
$dalTableROUTE["ROU_DEFAULT"] = array("type"=>3,"varname"=>"ROU_DEFAULT");
$dalTableROUTE["ROU_CONDITION"] = array("type"=>200,"varname"=>"ROU_CONDITION");
$dalTableROUTE["ROU_TO_LAST_USER"] = array("type"=>200,"varname"=>"ROU_TO_LAST_USER");
$dalTableROUTE["ROU_OPTIONAL"] = array("type"=>200,"varname"=>"ROU_OPTIONAL");
$dalTableROUTE["ROU_SEND_EMAIL"] = array("type"=>200,"varname"=>"ROU_SEND_EMAIL");
$dalTableROUTE["ROU_SOURCEANCHOR"] = array("type"=>3,"varname"=>"ROU_SOURCEANCHOR");
$dalTableROUTE["ROU_TARGETANCHOR"] = array("type"=>3,"varname"=>"ROU_TARGETANCHOR");
$dalTableROUTE["ROU_TO_PORT"] = array("type"=>3,"varname"=>"ROU_TO_PORT");
$dalTableROUTE["ROU_FROM_PORT"] = array("type"=>3,"varname"=>"ROU_FROM_PORT");
$dalTableROUTE["ROU_EVN_UID"] = array("type"=>200,"varname"=>"ROU_EVN_UID");
$dalTableROUTE["GAT_UID"] = array("type"=>200,"varname"=>"GAT_UID");
	$dalTableROUTE["ROU_UID"]["key"]=true;

$dal_info["Tables__ROUTE"] = &$dalTableROUTE;
?>
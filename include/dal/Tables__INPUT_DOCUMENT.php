<?php
$dalTableINPUT_DOCUMENT = array();
$dalTableINPUT_DOCUMENT["INP_DOC_UID"] = array("type"=>200,"varname"=>"INP_DOC_UID");
$dalTableINPUT_DOCUMENT["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableINPUT_DOCUMENT["INP_DOC_TITLE"] = array("type"=>201,"varname"=>"INP_DOC_TITLE");
$dalTableINPUT_DOCUMENT["INP_DOC_DESCRIPTION"] = array("type"=>201,"varname"=>"INP_DOC_DESCRIPTION");
$dalTableINPUT_DOCUMENT["INP_DOC_FORM_NEEDED"] = array("type"=>200,"varname"=>"INP_DOC_FORM_NEEDED");
$dalTableINPUT_DOCUMENT["INP_DOC_ORIGINAL"] = array("type"=>200,"varname"=>"INP_DOC_ORIGINAL");
$dalTableINPUT_DOCUMENT["INP_DOC_PUBLISHED"] = array("type"=>200,"varname"=>"INP_DOC_PUBLISHED");
$dalTableINPUT_DOCUMENT["INP_DOC_VERSIONING"] = array("type"=>16,"varname"=>"INP_DOC_VERSIONING");
$dalTableINPUT_DOCUMENT["INP_DOC_DESTINATION_PATH"] = array("type"=>201,"varname"=>"INP_DOC_DESTINATION_PATH");
$dalTableINPUT_DOCUMENT["INP_DOC_TAGS"] = array("type"=>201,"varname"=>"INP_DOC_TAGS");
$dalTableINPUT_DOCUMENT["INP_DOC_TYPE_FILE"] = array("type"=>200,"varname"=>"INP_DOC_TYPE_FILE");
$dalTableINPUT_DOCUMENT["INP_DOC_MAX_FILESIZE"] = array("type"=>3,"varname"=>"INP_DOC_MAX_FILESIZE");
$dalTableINPUT_DOCUMENT["INP_DOC_MAX_FILESIZE_UNIT"] = array("type"=>200,"varname"=>"INP_DOC_MAX_FILESIZE_UNIT");
	$dalTableINPUT_DOCUMENT["INP_DOC_UID"]["key"]=true;

$dal_info["Tables__INPUT_DOCUMENT"] = &$dalTableINPUT_DOCUMENT;
?>
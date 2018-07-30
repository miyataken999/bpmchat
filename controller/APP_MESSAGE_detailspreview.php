<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/APP_MESSAGE_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "OfficeBlueWave", "MobileBlueWave");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "APP_MESSAGE_detailspreview";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["APP_MESSAGE_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "APPLICATION")
{
	$where = "";
		$formattedValue = make_db_value("APP_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("APP_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("APP_UID") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["APP_MSG_UID"]));
	
	
	//	APP_MSG_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_UID", $data, $keylink);
			$row["APP_MSG_UID_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_UID")))
				$class = ' rnr-field-number';
			$row["APP_MSG_UID_class"] = $class;
	//	MSG_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("MSG_UID", $data, $keylink);
			$row["MSG_UID_value"] = $value;
			$format = $pSet->getViewFormat("MSG_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("MSG_UID")))
				$class = ' rnr-field-number';
			$row["MSG_UID_class"] = $class;
	//	APP_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_UID", $data, $keylink);
			$row["APP_UID_value"] = $value;
			$format = $pSet->getViewFormat("APP_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_UID")))
				$class = ' rnr-field-number';
			$row["APP_UID_class"] = $class;
	//	DEL_INDEX - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_INDEX", $data, $keylink);
			$row["DEL_INDEX_value"] = $value;
			$format = $pSet->getViewFormat("DEL_INDEX");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_INDEX")))
				$class = ' rnr-field-number';
			$row["DEL_INDEX_class"] = $class;
	//	APP_MSG_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_TYPE", $data, $keylink);
			$row["APP_MSG_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_TYPE")))
				$class = ' rnr-field-number';
			$row["APP_MSG_TYPE_class"] = $class;
	//	APP_MSG_SUBJECT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_SUBJECT", $data, $keylink);
			$row["APP_MSG_SUBJECT_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_SUBJECT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_SUBJECT")))
				$class = ' rnr-field-number';
			$row["APP_MSG_SUBJECT_class"] = $class;
	//	APP_MSG_FROM - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_FROM", $data, $keylink);
			$row["APP_MSG_FROM_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_FROM");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_FROM")))
				$class = ' rnr-field-number';
			$row["APP_MSG_FROM_class"] = $class;
	//	APP_MSG_TO - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_TO", $data, $keylink);
			$row["APP_MSG_TO_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_TO");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_TO")))
				$class = ' rnr-field-number';
			$row["APP_MSG_TO_class"] = $class;
	//	APP_MSG_BODY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_BODY", $data, $keylink);
			$row["APP_MSG_BODY_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_BODY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_BODY")))
				$class = ' rnr-field-number';
			$row["APP_MSG_BODY_class"] = $class;
	//	APP_MSG_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_DATE", $data, $keylink);
			$row["APP_MSG_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_DATE")))
				$class = ' rnr-field-number';
			$row["APP_MSG_DATE_class"] = $class;
	//	APP_MSG_CC - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_CC", $data, $keylink);
			$row["APP_MSG_CC_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_CC");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_CC")))
				$class = ' rnr-field-number';
			$row["APP_MSG_CC_class"] = $class;
	//	APP_MSG_BCC - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_BCC", $data, $keylink);
			$row["APP_MSG_BCC_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_BCC");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_BCC")))
				$class = ' rnr-field-number';
			$row["APP_MSG_BCC_class"] = $class;
	//	APP_MSG_TEMPLATE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_TEMPLATE", $data, $keylink);
			$row["APP_MSG_TEMPLATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_TEMPLATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_TEMPLATE")))
				$class = ' rnr-field-number';
			$row["APP_MSG_TEMPLATE_class"] = $class;
	//	APP_MSG_STATUS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_STATUS", $data, $keylink);
			$row["APP_MSG_STATUS_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_STATUS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_STATUS")))
				$class = ' rnr-field-number';
			$row["APP_MSG_STATUS_class"] = $class;
	//	APP_MSG_ATTACH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_ATTACH", $data, $keylink);
			$row["APP_MSG_ATTACH_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_ATTACH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_ATTACH")))
				$class = ' rnr-field-number';
			$row["APP_MSG_ATTACH_class"] = $class;
	//	APP_MSG_SEND_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_SEND_DATE", $data, $keylink);
			$row["APP_MSG_SEND_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_SEND_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_SEND_DATE")))
				$class = ' rnr-field-number';
			$row["APP_MSG_SEND_DATE_class"] = $class;
	//	APP_MSG_SHOW_MESSAGE - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_SHOW_MESSAGE", $data, $keylink);
			$row["APP_MSG_SHOW_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_SHOW_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_SHOW_MESSAGE")))
				$class = ' rnr-field-number';
			$row["APP_MSG_SHOW_MESSAGE_class"] = $class;
	//	APP_MSG_ERROR - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_MSG_ERROR", $data, $keylink);
			$row["APP_MSG_ERROR_value"] = $value;
			$format = $pSet->getViewFormat("APP_MSG_ERROR");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_MSG_ERROR")))
				$class = ' rnr-field-number';
			$row["APP_MSG_ERROR_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("APP_MESSAGE", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>
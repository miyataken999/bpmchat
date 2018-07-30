<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/BPMN_EVENT_variables.php");

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
		$layout->customCssPageName = "BPMN_EVENT_detailspreview";
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
$page_layouts["BPMN_EVENT_detailspreview"] = $layout;




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

if($mastertable == "BPMN_PROCESS")
{
	$where = "";
		$formattedValue = make_db_value("PRO_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("PRO_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("PRO_UID") . "=" . $formattedValue;
}
if($mastertable == "BPMN_PROJECT")
{
	$where = "";
		$formattedValue = make_db_value("PRJ_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("PRJ_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("PRJ_UID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["EVN_UID"]));
	
	
	//	EVN_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_UID", $data, $keylink);
			$row["EVN_UID_value"] = $value;
			$format = $pSet->getViewFormat("EVN_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_UID")))
				$class = ' rnr-field-number';
			$row["EVN_UID_class"] = $class;
	//	PRJ_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRJ_UID", $data, $keylink);
			$row["PRJ_UID_value"] = $value;
			$format = $pSet->getViewFormat("PRJ_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRJ_UID")))
				$class = ' rnr-field-number';
			$row["PRJ_UID_class"] = $class;
	//	PRO_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_UID", $data, $keylink);
			$row["PRO_UID_value"] = $value;
			$format = $pSet->getViewFormat("PRO_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_UID")))
				$class = ' rnr-field-number';
			$row["PRO_UID_class"] = $class;
	//	EVN_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_NAME", $data, $keylink);
			$row["EVN_NAME_value"] = $value;
			$format = $pSet->getViewFormat("EVN_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_NAME")))
				$class = ' rnr-field-number';
			$row["EVN_NAME_class"] = $class;
	//	EVN_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_TYPE", $data, $keylink);
			$row["EVN_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("EVN_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_TYPE")))
				$class = ' rnr-field-number';
			$row["EVN_TYPE_class"] = $class;
	//	EVN_MARKER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_MARKER", $data, $keylink);
			$row["EVN_MARKER_value"] = $value;
			$format = $pSet->getViewFormat("EVN_MARKER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_MARKER")))
				$class = ' rnr-field-number';
			$row["EVN_MARKER_class"] = $class;
	//	EVN_IS_INTERRUPTING - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_IS_INTERRUPTING", $data, $keylink);
			$row["EVN_IS_INTERRUPTING_value"] = $value;
			$format = $pSet->getViewFormat("EVN_IS_INTERRUPTING");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_IS_INTERRUPTING")))
				$class = ' rnr-field-number';
			$row["EVN_IS_INTERRUPTING_class"] = $class;
	//	EVN_ATTACHED_TO - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_ATTACHED_TO", $data, $keylink);
			$row["EVN_ATTACHED_TO_value"] = $value;
			$format = $pSet->getViewFormat("EVN_ATTACHED_TO");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_ATTACHED_TO")))
				$class = ' rnr-field-number';
			$row["EVN_ATTACHED_TO_class"] = $class;
	//	EVN_CANCEL_ACTIVITY - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_CANCEL_ACTIVITY", $data, $keylink);
			$row["EVN_CANCEL_ACTIVITY_value"] = $value;
			$format = $pSet->getViewFormat("EVN_CANCEL_ACTIVITY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_CANCEL_ACTIVITY")))
				$class = ' rnr-field-number';
			$row["EVN_CANCEL_ACTIVITY_class"] = $class;
	//	EVN_ACTIVITY_REF - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_ACTIVITY_REF", $data, $keylink);
			$row["EVN_ACTIVITY_REF_value"] = $value;
			$format = $pSet->getViewFormat("EVN_ACTIVITY_REF");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_ACTIVITY_REF")))
				$class = ' rnr-field-number';
			$row["EVN_ACTIVITY_REF_class"] = $class;
	//	EVN_WAIT_FOR_COMPLETION - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_WAIT_FOR_COMPLETION", $data, $keylink);
			$row["EVN_WAIT_FOR_COMPLETION_value"] = $value;
			$format = $pSet->getViewFormat("EVN_WAIT_FOR_COMPLETION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_WAIT_FOR_COMPLETION")))
				$class = ' rnr-field-number';
			$row["EVN_WAIT_FOR_COMPLETION_class"] = $class;
	//	EVN_ERROR_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_ERROR_NAME", $data, $keylink);
			$row["EVN_ERROR_NAME_value"] = $value;
			$format = $pSet->getViewFormat("EVN_ERROR_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_ERROR_NAME")))
				$class = ' rnr-field-number';
			$row["EVN_ERROR_NAME_class"] = $class;
	//	EVN_ERROR_CODE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_ERROR_CODE", $data, $keylink);
			$row["EVN_ERROR_CODE_value"] = $value;
			$format = $pSet->getViewFormat("EVN_ERROR_CODE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_ERROR_CODE")))
				$class = ' rnr-field-number';
			$row["EVN_ERROR_CODE_class"] = $class;
	//	EVN_ESCALATION_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_ESCALATION_NAME", $data, $keylink);
			$row["EVN_ESCALATION_NAME_value"] = $value;
			$format = $pSet->getViewFormat("EVN_ESCALATION_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_ESCALATION_NAME")))
				$class = ' rnr-field-number';
			$row["EVN_ESCALATION_NAME_class"] = $class;
	//	EVN_ESCALATION_CODE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_ESCALATION_CODE", $data, $keylink);
			$row["EVN_ESCALATION_CODE_value"] = $value;
			$format = $pSet->getViewFormat("EVN_ESCALATION_CODE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_ESCALATION_CODE")))
				$class = ' rnr-field-number';
			$row["EVN_ESCALATION_CODE_class"] = $class;
	//	EVN_CONDITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_CONDITION", $data, $keylink);
			$row["EVN_CONDITION_value"] = $value;
			$format = $pSet->getViewFormat("EVN_CONDITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_CONDITION")))
				$class = ' rnr-field-number';
			$row["EVN_CONDITION_class"] = $class;
	//	EVN_MESSAGE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_MESSAGE", $data, $keylink);
			$row["EVN_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("EVN_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_MESSAGE")))
				$class = ' rnr-field-number';
			$row["EVN_MESSAGE_class"] = $class;
	//	EVN_OPERATION_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_OPERATION_NAME", $data, $keylink);
			$row["EVN_OPERATION_NAME_value"] = $value;
			$format = $pSet->getViewFormat("EVN_OPERATION_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_OPERATION_NAME")))
				$class = ' rnr-field-number';
			$row["EVN_OPERATION_NAME_class"] = $class;
	//	EVN_OPERATION_IMPLEMENTATION_REF - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_OPERATION_IMPLEMENTATION_REF", $data, $keylink);
			$row["EVN_OPERATION_IMPLEMENTATION_REF_value"] = $value;
			$format = $pSet->getViewFormat("EVN_OPERATION_IMPLEMENTATION_REF");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_OPERATION_IMPLEMENTATION_REF")))
				$class = ' rnr-field-number';
			$row["EVN_OPERATION_IMPLEMENTATION_REF_class"] = $class;
	//	EVN_TIME_DATE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_TIME_DATE", $data, $keylink);
			$row["EVN_TIME_DATE_value"] = $value;
			$format = $pSet->getViewFormat("EVN_TIME_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_TIME_DATE")))
				$class = ' rnr-field-number';
			$row["EVN_TIME_DATE_class"] = $class;
	//	EVN_TIME_CYCLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_TIME_CYCLE", $data, $keylink);
			$row["EVN_TIME_CYCLE_value"] = $value;
			$format = $pSet->getViewFormat("EVN_TIME_CYCLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_TIME_CYCLE")))
				$class = ' rnr-field-number';
			$row["EVN_TIME_CYCLE_class"] = $class;
	//	EVN_TIME_DURATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_TIME_DURATION", $data, $keylink);
			$row["EVN_TIME_DURATION_value"] = $value;
			$format = $pSet->getViewFormat("EVN_TIME_DURATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_TIME_DURATION")))
				$class = ' rnr-field-number';
			$row["EVN_TIME_DURATION_class"] = $class;
	//	EVN_BEHAVIOR - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVN_BEHAVIOR", $data, $keylink);
			$row["EVN_BEHAVIOR_value"] = $value;
			$format = $pSet->getViewFormat("EVN_BEHAVIOR");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVN_BEHAVIOR")))
				$class = ' rnr-field-number';
			$row["EVN_BEHAVIOR_class"] = $class;
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
$xt->load_template(GetTemplateName("BPMN_EVENT", "detailspreview"));
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
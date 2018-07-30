<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/BPMN_ACTIVITY_variables.php");

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
		$layout->customCssPageName = "BPMN_ACTIVITY_detailspreview";
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
$page_layouts["BPMN_ACTIVITY_detailspreview"] = $layout;




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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ACT_UID"]));
	
	
	//	ACT_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_UID", $data, $keylink);
			$row["ACT_UID_value"] = $value;
			$format = $pSet->getViewFormat("ACT_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_UID")))
				$class = ' rnr-field-number';
			$row["ACT_UID_class"] = $class;
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
	//	ACT_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_NAME", $data, $keylink);
			$row["ACT_NAME_value"] = $value;
			$format = $pSet->getViewFormat("ACT_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_NAME")))
				$class = ' rnr-field-number';
			$row["ACT_NAME_class"] = $class;
	//	ACT_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_TYPE", $data, $keylink);
			$row["ACT_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("ACT_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_TYPE")))
				$class = ' rnr-field-number';
			$row["ACT_TYPE_class"] = $class;
	//	ACT_IS_FOR_COMPENSATION - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_IS_FOR_COMPENSATION", $data, $keylink);
			$row["ACT_IS_FOR_COMPENSATION_value"] = $value;
			$format = $pSet->getViewFormat("ACT_IS_FOR_COMPENSATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_IS_FOR_COMPENSATION")))
				$class = ' rnr-field-number';
			$row["ACT_IS_FOR_COMPENSATION_class"] = $class;
	//	ACT_START_QUANTITY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_START_QUANTITY", $data, $keylink);
			$row["ACT_START_QUANTITY_value"] = $value;
			$format = $pSet->getViewFormat("ACT_START_QUANTITY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_START_QUANTITY")))
				$class = ' rnr-field-number';
			$row["ACT_START_QUANTITY_class"] = $class;
	//	ACT_COMPLETION_QUANTITY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_COMPLETION_QUANTITY", $data, $keylink);
			$row["ACT_COMPLETION_QUANTITY_value"] = $value;
			$format = $pSet->getViewFormat("ACT_COMPLETION_QUANTITY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_COMPLETION_QUANTITY")))
				$class = ' rnr-field-number';
			$row["ACT_COMPLETION_QUANTITY_class"] = $class;
	//	ACT_TASK_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_TASK_TYPE", $data, $keylink);
			$row["ACT_TASK_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("ACT_TASK_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_TASK_TYPE")))
				$class = ' rnr-field-number';
			$row["ACT_TASK_TYPE_class"] = $class;
	//	ACT_IMPLEMENTATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_IMPLEMENTATION", $data, $keylink);
			$row["ACT_IMPLEMENTATION_value"] = $value;
			$format = $pSet->getViewFormat("ACT_IMPLEMENTATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_IMPLEMENTATION")))
				$class = ' rnr-field-number';
			$row["ACT_IMPLEMENTATION_class"] = $class;
	//	ACT_INSTANTIATE - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_INSTANTIATE", $data, $keylink);
			$row["ACT_INSTANTIATE_value"] = $value;
			$format = $pSet->getViewFormat("ACT_INSTANTIATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_INSTANTIATE")))
				$class = ' rnr-field-number';
			$row["ACT_INSTANTIATE_class"] = $class;
	//	ACT_SCRIPT_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_SCRIPT_TYPE", $data, $keylink);
			$row["ACT_SCRIPT_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("ACT_SCRIPT_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_SCRIPT_TYPE")))
				$class = ' rnr-field-number';
			$row["ACT_SCRIPT_TYPE_class"] = $class;
	//	ACT_SCRIPT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_SCRIPT", $data, $keylink);
			$row["ACT_SCRIPT_value"] = $value;
			$format = $pSet->getViewFormat("ACT_SCRIPT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_SCRIPT")))
				$class = ' rnr-field-number';
			$row["ACT_SCRIPT_class"] = $class;
	//	ACT_LOOP_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_LOOP_TYPE", $data, $keylink);
			$row["ACT_LOOP_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("ACT_LOOP_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_LOOP_TYPE")))
				$class = ' rnr-field-number';
			$row["ACT_LOOP_TYPE_class"] = $class;
	//	ACT_TEST_BEFORE - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_TEST_BEFORE", $data, $keylink);
			$row["ACT_TEST_BEFORE_value"] = $value;
			$format = $pSet->getViewFormat("ACT_TEST_BEFORE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_TEST_BEFORE")))
				$class = ' rnr-field-number';
			$row["ACT_TEST_BEFORE_class"] = $class;
	//	ACT_LOOP_MAXIMUM - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_LOOP_MAXIMUM", $data, $keylink);
			$row["ACT_LOOP_MAXIMUM_value"] = $value;
			$format = $pSet->getViewFormat("ACT_LOOP_MAXIMUM");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_LOOP_MAXIMUM")))
				$class = ' rnr-field-number';
			$row["ACT_LOOP_MAXIMUM_class"] = $class;
	//	ACT_LOOP_CONDITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_LOOP_CONDITION", $data, $keylink);
			$row["ACT_LOOP_CONDITION_value"] = $value;
			$format = $pSet->getViewFormat("ACT_LOOP_CONDITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_LOOP_CONDITION")))
				$class = ' rnr-field-number';
			$row["ACT_LOOP_CONDITION_class"] = $class;
	//	ACT_LOOP_CARDINALITY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_LOOP_CARDINALITY", $data, $keylink);
			$row["ACT_LOOP_CARDINALITY_value"] = $value;
			$format = $pSet->getViewFormat("ACT_LOOP_CARDINALITY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_LOOP_CARDINALITY")))
				$class = ' rnr-field-number';
			$row["ACT_LOOP_CARDINALITY_class"] = $class;
	//	ACT_LOOP_BEHAVIOR - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_LOOP_BEHAVIOR", $data, $keylink);
			$row["ACT_LOOP_BEHAVIOR_value"] = $value;
			$format = $pSet->getViewFormat("ACT_LOOP_BEHAVIOR");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_LOOP_BEHAVIOR")))
				$class = ' rnr-field-number';
			$row["ACT_LOOP_BEHAVIOR_class"] = $class;
	//	ACT_IS_ADHOC - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_IS_ADHOC", $data, $keylink);
			$row["ACT_IS_ADHOC_value"] = $value;
			$format = $pSet->getViewFormat("ACT_IS_ADHOC");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_IS_ADHOC")))
				$class = ' rnr-field-number';
			$row["ACT_IS_ADHOC_class"] = $class;
	//	ACT_IS_COLLAPSED - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_IS_COLLAPSED", $data, $keylink);
			$row["ACT_IS_COLLAPSED_value"] = $value;
			$format = $pSet->getViewFormat("ACT_IS_COLLAPSED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_IS_COLLAPSED")))
				$class = ' rnr-field-number';
			$row["ACT_IS_COLLAPSED_class"] = $class;
	//	ACT_COMPLETION_CONDITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_COMPLETION_CONDITION", $data, $keylink);
			$row["ACT_COMPLETION_CONDITION_value"] = $value;
			$format = $pSet->getViewFormat("ACT_COMPLETION_CONDITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_COMPLETION_CONDITION")))
				$class = ' rnr-field-number';
			$row["ACT_COMPLETION_CONDITION_class"] = $class;
	//	ACT_ORDERING - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_ORDERING", $data, $keylink);
			$row["ACT_ORDERING_value"] = $value;
			$format = $pSet->getViewFormat("ACT_ORDERING");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_ORDERING")))
				$class = ' rnr-field-number';
			$row["ACT_ORDERING_class"] = $class;
	//	ACT_CANCEL_REMAINING_INSTANCES - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_CANCEL_REMAINING_INSTANCES", $data, $keylink);
			$row["ACT_CANCEL_REMAINING_INSTANCES_value"] = $value;
			$format = $pSet->getViewFormat("ACT_CANCEL_REMAINING_INSTANCES");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_CANCEL_REMAINING_INSTANCES")))
				$class = ' rnr-field-number';
			$row["ACT_CANCEL_REMAINING_INSTANCES_class"] = $class;
	//	ACT_PROTOCOL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_PROTOCOL", $data, $keylink);
			$row["ACT_PROTOCOL_value"] = $value;
			$format = $pSet->getViewFormat("ACT_PROTOCOL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_PROTOCOL")))
				$class = ' rnr-field-number';
			$row["ACT_PROTOCOL_class"] = $class;
	//	ACT_METHOD - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_METHOD", $data, $keylink);
			$row["ACT_METHOD_value"] = $value;
			$format = $pSet->getViewFormat("ACT_METHOD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_METHOD")))
				$class = ' rnr-field-number';
			$row["ACT_METHOD_class"] = $class;
	//	ACT_IS_GLOBAL - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_IS_GLOBAL", $data, $keylink);
			$row["ACT_IS_GLOBAL_value"] = $value;
			$format = $pSet->getViewFormat("ACT_IS_GLOBAL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_IS_GLOBAL")))
				$class = ' rnr-field-number';
			$row["ACT_IS_GLOBAL_class"] = $class;
	//	ACT_REFERER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_REFERER", $data, $keylink);
			$row["ACT_REFERER_value"] = $value;
			$format = $pSet->getViewFormat("ACT_REFERER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_REFERER")))
				$class = ' rnr-field-number';
			$row["ACT_REFERER_class"] = $class;
	//	ACT_DEFAULT_FLOW - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_DEFAULT_FLOW", $data, $keylink);
			$row["ACT_DEFAULT_FLOW_value"] = $value;
			$format = $pSet->getViewFormat("ACT_DEFAULT_FLOW");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_DEFAULT_FLOW")))
				$class = ' rnr-field-number';
			$row["ACT_DEFAULT_FLOW_class"] = $class;
	//	ACT_MASTER_DIAGRAM - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACT_MASTER_DIAGRAM", $data, $keylink);
			$row["ACT_MASTER_DIAGRAM_value"] = $value;
			$format = $pSet->getViewFormat("ACT_MASTER_DIAGRAM");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACT_MASTER_DIAGRAM")))
				$class = ' rnr-field-number';
			$row["ACT_MASTER_DIAGRAM_class"] = $class;
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
$xt->load_template(GetTemplateName("BPMN_ACTIVITY", "detailspreview"));
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
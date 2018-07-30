<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/TASK_variables.php");

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
		$layout->customCssPageName = "TASK_detailspreview";
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
$page_layouts["TASK_detailspreview"] = $layout;




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

if($mastertable == "PROCESS")
{
	$where = "";
		$formattedValue = make_db_value("PRO_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("PRO_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("PRO_UID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["TAS_UID"]));
	
	
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
	//	TAS_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_UID", $data, $keylink);
			$row["TAS_UID_value"] = $value;
			$format = $pSet->getViewFormat("TAS_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_UID")))
				$class = ' rnr-field-number';
			$row["TAS_UID_class"] = $class;
	//	TAS_TITLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_TITLE", $data, $keylink);
			$row["TAS_TITLE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_TITLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_TITLE")))
				$class = ' rnr-field-number';
			$row["TAS_TITLE_class"] = $class;
	//	TAS_DESCRIPTION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DESCRIPTION", $data, $keylink);
			$row["TAS_DESCRIPTION_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DESCRIPTION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DESCRIPTION")))
				$class = ' rnr-field-number';
			$row["TAS_DESCRIPTION_class"] = $class;
	//	TAS_DEF_TITLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DEF_TITLE", $data, $keylink);
			$row["TAS_DEF_TITLE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DEF_TITLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DEF_TITLE")))
				$class = ' rnr-field-number';
			$row["TAS_DEF_TITLE_class"] = $class;
	//	TAS_DEF_SUBJECT_MESSAGE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DEF_SUBJECT_MESSAGE", $data, $keylink);
			$row["TAS_DEF_SUBJECT_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DEF_SUBJECT_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DEF_SUBJECT_MESSAGE")))
				$class = ' rnr-field-number';
			$row["TAS_DEF_SUBJECT_MESSAGE_class"] = $class;
	//	TAS_DEF_PROC_CODE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DEF_PROC_CODE", $data, $keylink);
			$row["TAS_DEF_PROC_CODE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DEF_PROC_CODE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DEF_PROC_CODE")))
				$class = ' rnr-field-number';
			$row["TAS_DEF_PROC_CODE_class"] = $class;
	//	TAS_DEF_MESSAGE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DEF_MESSAGE", $data, $keylink);
			$row["TAS_DEF_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DEF_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DEF_MESSAGE")))
				$class = ' rnr-field-number';
			$row["TAS_DEF_MESSAGE_class"] = $class;
	//	TAS_DEF_DESCRIPTION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DEF_DESCRIPTION", $data, $keylink);
			$row["TAS_DEF_DESCRIPTION_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DEF_DESCRIPTION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DEF_DESCRIPTION")))
				$class = ' rnr-field-number';
			$row["TAS_DEF_DESCRIPTION_class"] = $class;
	//	TAS_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_TYPE", $data, $keylink);
			$row["TAS_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_TYPE")))
				$class = ' rnr-field-number';
			$row["TAS_TYPE_class"] = $class;
	//	TAS_DURATION - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DURATION", $data, $keylink);
			$row["TAS_DURATION_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DURATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DURATION")))
				$class = ' rnr-field-number';
			$row["TAS_DURATION_class"] = $class;
	//	TAS_DELAY_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DELAY_TYPE", $data, $keylink);
			$row["TAS_DELAY_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DELAY_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DELAY_TYPE")))
				$class = ' rnr-field-number';
			$row["TAS_DELAY_TYPE_class"] = $class;
	//	TAS_TEMPORIZER - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_TEMPORIZER", $data, $keylink);
			$row["TAS_TEMPORIZER_value"] = $value;
			$format = $pSet->getViewFormat("TAS_TEMPORIZER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_TEMPORIZER")))
				$class = ' rnr-field-number';
			$row["TAS_TEMPORIZER_class"] = $class;
	//	TAS_TYPE_DAY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_TYPE_DAY", $data, $keylink);
			$row["TAS_TYPE_DAY_value"] = $value;
			$format = $pSet->getViewFormat("TAS_TYPE_DAY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_TYPE_DAY")))
				$class = ' rnr-field-number';
			$row["TAS_TYPE_DAY_class"] = $class;
	//	TAS_TIMEUNIT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_TIMEUNIT", $data, $keylink);
			$row["TAS_TIMEUNIT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_TIMEUNIT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_TIMEUNIT")))
				$class = ' rnr-field-number';
			$row["TAS_TIMEUNIT_class"] = $class;
	//	TAS_ALERT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_ALERT", $data, $keylink);
			$row["TAS_ALERT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_ALERT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_ALERT")))
				$class = ' rnr-field-number';
			$row["TAS_ALERT_class"] = $class;
	//	TAS_PRIORITY_VARIABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_PRIORITY_VARIABLE", $data, $keylink);
			$row["TAS_PRIORITY_VARIABLE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_PRIORITY_VARIABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_PRIORITY_VARIABLE")))
				$class = ' rnr-field-number';
			$row["TAS_PRIORITY_VARIABLE_class"] = $class;
	//	TAS_ASSIGN_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_ASSIGN_TYPE", $data, $keylink);
			$row["TAS_ASSIGN_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_ASSIGN_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_ASSIGN_TYPE")))
				$class = ' rnr-field-number';
			$row["TAS_ASSIGN_TYPE_class"] = $class;
	//	TAS_ASSIGN_VARIABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_ASSIGN_VARIABLE", $data, $keylink);
			$row["TAS_ASSIGN_VARIABLE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_ASSIGN_VARIABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_ASSIGN_VARIABLE")))
				$class = ' rnr-field-number';
			$row["TAS_ASSIGN_VARIABLE_class"] = $class;
	//	TAS_GROUP_VARIABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_GROUP_VARIABLE", $data, $keylink);
			$row["TAS_GROUP_VARIABLE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_GROUP_VARIABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_GROUP_VARIABLE")))
				$class = ' rnr-field-number';
			$row["TAS_GROUP_VARIABLE_class"] = $class;
	//	TAS_MI_INSTANCE_VARIABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_MI_INSTANCE_VARIABLE", $data, $keylink);
			$row["TAS_MI_INSTANCE_VARIABLE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_MI_INSTANCE_VARIABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_MI_INSTANCE_VARIABLE")))
				$class = ' rnr-field-number';
			$row["TAS_MI_INSTANCE_VARIABLE_class"] = $class;
	//	TAS_MI_COMPLETE_VARIABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_MI_COMPLETE_VARIABLE", $data, $keylink);
			$row["TAS_MI_COMPLETE_VARIABLE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_MI_COMPLETE_VARIABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_MI_COMPLETE_VARIABLE")))
				$class = ' rnr-field-number';
			$row["TAS_MI_COMPLETE_VARIABLE_class"] = $class;
	//	TAS_ASSIGN_LOCATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_ASSIGN_LOCATION", $data, $keylink);
			$row["TAS_ASSIGN_LOCATION_value"] = $value;
			$format = $pSet->getViewFormat("TAS_ASSIGN_LOCATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_ASSIGN_LOCATION")))
				$class = ' rnr-field-number';
			$row["TAS_ASSIGN_LOCATION_class"] = $class;
	//	TAS_ASSIGN_LOCATION_ADHOC - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_ASSIGN_LOCATION_ADHOC", $data, $keylink);
			$row["TAS_ASSIGN_LOCATION_ADHOC_value"] = $value;
			$format = $pSet->getViewFormat("TAS_ASSIGN_LOCATION_ADHOC");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_ASSIGN_LOCATION_ADHOC")))
				$class = ' rnr-field-number';
			$row["TAS_ASSIGN_LOCATION_ADHOC_class"] = $class;
	//	TAS_TRANSFER_FLY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_TRANSFER_FLY", $data, $keylink);
			$row["TAS_TRANSFER_FLY_value"] = $value;
			$format = $pSet->getViewFormat("TAS_TRANSFER_FLY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_TRANSFER_FLY")))
				$class = ' rnr-field-number';
			$row["TAS_TRANSFER_FLY_class"] = $class;
	//	TAS_LAST_ASSIGNED - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_LAST_ASSIGNED", $data, $keylink);
			$row["TAS_LAST_ASSIGNED_value"] = $value;
			$format = $pSet->getViewFormat("TAS_LAST_ASSIGNED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_LAST_ASSIGNED")))
				$class = ' rnr-field-number';
			$row["TAS_LAST_ASSIGNED_class"] = $class;
	//	TAS_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_USER", $data, $keylink);
			$row["TAS_USER_value"] = $value;
			$format = $pSet->getViewFormat("TAS_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_USER")))
				$class = ' rnr-field-number';
			$row["TAS_USER_class"] = $class;
	//	TAS_CAN_UPLOAD - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_CAN_UPLOAD", $data, $keylink);
			$row["TAS_CAN_UPLOAD_value"] = $value;
			$format = $pSet->getViewFormat("TAS_CAN_UPLOAD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_CAN_UPLOAD")))
				$class = ' rnr-field-number';
			$row["TAS_CAN_UPLOAD_class"] = $class;
	//	TAS_VIEW_UPLOAD - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_VIEW_UPLOAD", $data, $keylink);
			$row["TAS_VIEW_UPLOAD_value"] = $value;
			$format = $pSet->getViewFormat("TAS_VIEW_UPLOAD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_VIEW_UPLOAD")))
				$class = ' rnr-field-number';
			$row["TAS_VIEW_UPLOAD_class"] = $class;
	//	TAS_VIEW_ADDITIONAL_DOCUMENTATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_VIEW_ADDITIONAL_DOCUMENTATION", $data, $keylink);
			$row["TAS_VIEW_ADDITIONAL_DOCUMENTATION_value"] = $value;
			$format = $pSet->getViewFormat("TAS_VIEW_ADDITIONAL_DOCUMENTATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_VIEW_ADDITIONAL_DOCUMENTATION")))
				$class = ' rnr-field-number';
			$row["TAS_VIEW_ADDITIONAL_DOCUMENTATION_class"] = $class;
	//	TAS_CAN_CANCEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_CAN_CANCEL", $data, $keylink);
			$row["TAS_CAN_CANCEL_value"] = $value;
			$format = $pSet->getViewFormat("TAS_CAN_CANCEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_CAN_CANCEL")))
				$class = ' rnr-field-number';
			$row["TAS_CAN_CANCEL_class"] = $class;
	//	TAS_OWNER_APP - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_OWNER_APP", $data, $keylink);
			$row["TAS_OWNER_APP_value"] = $value;
			$format = $pSet->getViewFormat("TAS_OWNER_APP");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_OWNER_APP")))
				$class = ' rnr-field-number';
			$row["TAS_OWNER_APP_class"] = $class;
	//	STG_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("STG_UID", $data, $keylink);
			$row["STG_UID_value"] = $value;
			$format = $pSet->getViewFormat("STG_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("STG_UID")))
				$class = ' rnr-field-number';
			$row["STG_UID_class"] = $class;
	//	TAS_CAN_PAUSE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_CAN_PAUSE", $data, $keylink);
			$row["TAS_CAN_PAUSE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_CAN_PAUSE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_CAN_PAUSE")))
				$class = ' rnr-field-number';
			$row["TAS_CAN_PAUSE_class"] = $class;
	//	TAS_CAN_SEND_MESSAGE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_CAN_SEND_MESSAGE", $data, $keylink);
			$row["TAS_CAN_SEND_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_CAN_SEND_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_CAN_SEND_MESSAGE")))
				$class = ' rnr-field-number';
			$row["TAS_CAN_SEND_MESSAGE_class"] = $class;
	//	TAS_CAN_DELETE_DOCS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_CAN_DELETE_DOCS", $data, $keylink);
			$row["TAS_CAN_DELETE_DOCS_value"] = $value;
			$format = $pSet->getViewFormat("TAS_CAN_DELETE_DOCS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_CAN_DELETE_DOCS")))
				$class = ' rnr-field-number';
			$row["TAS_CAN_DELETE_DOCS_class"] = $class;
	//	TAS_SELF_SERVICE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_SELF_SERVICE", $data, $keylink);
			$row["TAS_SELF_SERVICE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_SELF_SERVICE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_SELF_SERVICE")))
				$class = ' rnr-field-number';
			$row["TAS_SELF_SERVICE_class"] = $class;
	//	TAS_START - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_START", $data, $keylink);
			$row["TAS_START_value"] = $value;
			$format = $pSet->getViewFormat("TAS_START");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_START")))
				$class = ' rnr-field-number';
			$row["TAS_START_class"] = $class;
	//	TAS_TO_LAST_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_TO_LAST_USER", $data, $keylink);
			$row["TAS_TO_LAST_USER_value"] = $value;
			$format = $pSet->getViewFormat("TAS_TO_LAST_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_TO_LAST_USER")))
				$class = ' rnr-field-number';
			$row["TAS_TO_LAST_USER_class"] = $class;
	//	TAS_SEND_LAST_EMAIL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_SEND_LAST_EMAIL", $data, $keylink);
			$row["TAS_SEND_LAST_EMAIL_value"] = $value;
			$format = $pSet->getViewFormat("TAS_SEND_LAST_EMAIL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_SEND_LAST_EMAIL")))
				$class = ' rnr-field-number';
			$row["TAS_SEND_LAST_EMAIL_class"] = $class;
	//	TAS_DERIVATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DERIVATION", $data, $keylink);
			$row["TAS_DERIVATION_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DERIVATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DERIVATION")))
				$class = ' rnr-field-number';
			$row["TAS_DERIVATION_class"] = $class;
	//	TAS_POSX - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_POSX", $data, $keylink);
			$row["TAS_POSX_value"] = $value;
			$format = $pSet->getViewFormat("TAS_POSX");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_POSX")))
				$class = ' rnr-field-number';
			$row["TAS_POSX_class"] = $class;
	//	TAS_POSY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_POSY", $data, $keylink);
			$row["TAS_POSY_value"] = $value;
			$format = $pSet->getViewFormat("TAS_POSY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_POSY")))
				$class = ' rnr-field-number';
			$row["TAS_POSY_class"] = $class;
	//	TAS_WIDTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_WIDTH", $data, $keylink);
			$row["TAS_WIDTH_value"] = $value;
			$format = $pSet->getViewFormat("TAS_WIDTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_WIDTH")))
				$class = ' rnr-field-number';
			$row["TAS_WIDTH_class"] = $class;
	//	TAS_HEIGHT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_HEIGHT", $data, $keylink);
			$row["TAS_HEIGHT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_HEIGHT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_HEIGHT")))
				$class = ' rnr-field-number';
			$row["TAS_HEIGHT_class"] = $class;
	//	TAS_COLOR - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_COLOR", $data, $keylink);
			$row["TAS_COLOR_value"] = $value;
			$format = $pSet->getViewFormat("TAS_COLOR");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_COLOR")))
				$class = ' rnr-field-number';
			$row["TAS_COLOR_class"] = $class;
	//	TAS_EVN_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_EVN_UID", $data, $keylink);
			$row["TAS_EVN_UID_value"] = $value;
			$format = $pSet->getViewFormat("TAS_EVN_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_EVN_UID")))
				$class = ' rnr-field-number';
			$row["TAS_EVN_UID_class"] = $class;
	//	TAS_BOUNDARY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_BOUNDARY", $data, $keylink);
			$row["TAS_BOUNDARY_value"] = $value;
			$format = $pSet->getViewFormat("TAS_BOUNDARY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_BOUNDARY")))
				$class = ' rnr-field-number';
			$row["TAS_BOUNDARY_class"] = $class;
	//	TAS_DERIVATION_SCREEN_TPL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_DERIVATION_SCREEN_TPL", $data, $keylink);
			$row["TAS_DERIVATION_SCREEN_TPL_value"] = $value;
			$format = $pSet->getViewFormat("TAS_DERIVATION_SCREEN_TPL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_DERIVATION_SCREEN_TPL")))
				$class = ' rnr-field-number';
			$row["TAS_DERIVATION_SCREEN_TPL_class"] = $class;
	//	TAS_SELFSERVICE_TIMEOUT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_SELFSERVICE_TIMEOUT", $data, $keylink);
			$row["TAS_SELFSERVICE_TIMEOUT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_SELFSERVICE_TIMEOUT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_SELFSERVICE_TIMEOUT")))
				$class = ' rnr-field-number';
			$row["TAS_SELFSERVICE_TIMEOUT_class"] = $class;
	//	TAS_SELFSERVICE_TIME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_SELFSERVICE_TIME", $data, $keylink);
			$row["TAS_SELFSERVICE_TIME_value"] = $value;
			$format = $pSet->getViewFormat("TAS_SELFSERVICE_TIME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_SELFSERVICE_TIME")))
				$class = ' rnr-field-number';
			$row["TAS_SELFSERVICE_TIME_class"] = $class;
	//	TAS_SELFSERVICE_TIME_UNIT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_SELFSERVICE_TIME_UNIT", $data, $keylink);
			$row["TAS_SELFSERVICE_TIME_UNIT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_SELFSERVICE_TIME_UNIT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_SELFSERVICE_TIME_UNIT")))
				$class = ' rnr-field-number';
			$row["TAS_SELFSERVICE_TIME_UNIT_class"] = $class;
	//	TAS_SELFSERVICE_TRIGGER_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_SELFSERVICE_TRIGGER_UID", $data, $keylink);
			$row["TAS_SELFSERVICE_TRIGGER_UID_value"] = $value;
			$format = $pSet->getViewFormat("TAS_SELFSERVICE_TRIGGER_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_SELFSERVICE_TRIGGER_UID")))
				$class = ' rnr-field-number';
			$row["TAS_SELFSERVICE_TRIGGER_UID_class"] = $class;
	//	TAS_SELFSERVICE_EXECUTION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_SELFSERVICE_EXECUTION", $data, $keylink);
			$row["TAS_SELFSERVICE_EXECUTION_value"] = $value;
			$format = $pSet->getViewFormat("TAS_SELFSERVICE_EXECUTION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_SELFSERVICE_EXECUTION")))
				$class = ' rnr-field-number';
			$row["TAS_SELFSERVICE_EXECUTION_class"] = $class;
	//	TAS_NOT_EMAIL_FROM_FORMAT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_NOT_EMAIL_FROM_FORMAT", $data, $keylink);
			$row["TAS_NOT_EMAIL_FROM_FORMAT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_NOT_EMAIL_FROM_FORMAT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_NOT_EMAIL_FROM_FORMAT")))
				$class = ' rnr-field-number';
			$row["TAS_NOT_EMAIL_FROM_FORMAT_class"] = $class;
	//	TAS_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_ID", $data, $keylink);
			$row["TAS_ID_value"] = $value;
			$format = $pSet->getViewFormat("TAS_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_ID")))
				$class = ' rnr-field-number';
			$row["TAS_ID_class"] = $class;
	//	TAS_OFFLINE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_OFFLINE", $data, $keylink);
			$row["TAS_OFFLINE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_OFFLINE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_OFFLINE")))
				$class = ' rnr-field-number';
			$row["TAS_OFFLINE_class"] = $class;
	//	TAS_EMAIL_SERVER_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_EMAIL_SERVER_UID", $data, $keylink);
			$row["TAS_EMAIL_SERVER_UID_value"] = $value;
			$format = $pSet->getViewFormat("TAS_EMAIL_SERVER_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_EMAIL_SERVER_UID")))
				$class = ' rnr-field-number';
			$row["TAS_EMAIL_SERVER_UID_class"] = $class;
	//	TAS_AUTO_ROOT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_AUTO_ROOT", $data, $keylink);
			$row["TAS_AUTO_ROOT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_AUTO_ROOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_AUTO_ROOT")))
				$class = ' rnr-field-number';
			$row["TAS_AUTO_ROOT_class"] = $class;
	//	TAS_RECEIVE_SERVER_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_RECEIVE_SERVER_UID", $data, $keylink);
			$row["TAS_RECEIVE_SERVER_UID_value"] = $value;
			$format = $pSet->getViewFormat("TAS_RECEIVE_SERVER_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_RECEIVE_SERVER_UID")))
				$class = ' rnr-field-number';
			$row["TAS_RECEIVE_SERVER_UID_class"] = $class;
	//	TAS_RECEIVE_LAST_EMAIL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_RECEIVE_LAST_EMAIL", $data, $keylink);
			$row["TAS_RECEIVE_LAST_EMAIL_value"] = $value;
			$format = $pSet->getViewFormat("TAS_RECEIVE_LAST_EMAIL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_RECEIVE_LAST_EMAIL")))
				$class = ' rnr-field-number';
			$row["TAS_RECEIVE_LAST_EMAIL_class"] = $class;
	//	TAS_RECEIVE_EMAIL_FROM_FORMAT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_RECEIVE_EMAIL_FROM_FORMAT", $data, $keylink);
			$row["TAS_RECEIVE_EMAIL_FROM_FORMAT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_RECEIVE_EMAIL_FROM_FORMAT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_RECEIVE_EMAIL_FROM_FORMAT")))
				$class = ' rnr-field-number';
			$row["TAS_RECEIVE_EMAIL_FROM_FORMAT_class"] = $class;
	//	TAS_RECEIVE_MESSAGE_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_RECEIVE_MESSAGE_TYPE", $data, $keylink);
			$row["TAS_RECEIVE_MESSAGE_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_RECEIVE_MESSAGE_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_RECEIVE_MESSAGE_TYPE")))
				$class = ' rnr-field-number';
			$row["TAS_RECEIVE_MESSAGE_TYPE_class"] = $class;
	//	TAS_RECEIVE_MESSAGE_TEMPLATE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_RECEIVE_MESSAGE_TEMPLATE", $data, $keylink);
			$row["TAS_RECEIVE_MESSAGE_TEMPLATE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_RECEIVE_MESSAGE_TEMPLATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_RECEIVE_MESSAGE_TEMPLATE")))
				$class = ' rnr-field-number';
			$row["TAS_RECEIVE_MESSAGE_TEMPLATE_class"] = $class;
	//	TAS_RECEIVE_SUBJECT_MESSAGE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_RECEIVE_SUBJECT_MESSAGE", $data, $keylink);
			$row["TAS_RECEIVE_SUBJECT_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_RECEIVE_SUBJECT_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_RECEIVE_SUBJECT_MESSAGE")))
				$class = ' rnr-field-number';
			$row["TAS_RECEIVE_SUBJECT_MESSAGE_class"] = $class;
	//	TAS_RECEIVE_MESSAGE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_RECEIVE_MESSAGE", $data, $keylink);
			$row["TAS_RECEIVE_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("TAS_RECEIVE_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_RECEIVE_MESSAGE")))
				$class = ' rnr-field-number';
			$row["TAS_RECEIVE_MESSAGE_class"] = $class;
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
$xt->load_template(GetTemplateName("TASK", "detailspreview"));
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
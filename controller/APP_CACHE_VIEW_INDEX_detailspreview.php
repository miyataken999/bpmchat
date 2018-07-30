<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/APP_CACHE_VIEW_INDEX_variables.php");

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
		$layout->customCssPageName = "APP_CACHE_VIEW_INDEX_detailspreview";
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
$page_layouts["APP_CACHE_VIEW_INDEX_detailspreview"] = $layout;




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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["APP_UID"]));
		$keylink.="&key2=".runner_htmlspecialchars(rawurlencode(@$data["DEL_INDEX"]));
	
	
	//	APP_UID - Custom
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
	//	DEL_LAST_INDEX - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_LAST_INDEX", $data, $keylink);
			$row["DEL_LAST_INDEX_value"] = $value;
			$format = $pSet->getViewFormat("DEL_LAST_INDEX");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_LAST_INDEX")))
				$class = ' rnr-field-number';
			$row["DEL_LAST_INDEX_class"] = $class;
	//	APP_NUMBER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_NUMBER", $data, $keylink);
			$row["APP_NUMBER_value"] = $value;
			$format = $pSet->getViewFormat("APP_NUMBER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_NUMBER")))
				$class = ' rnr-field-number';
			$row["APP_NUMBER_class"] = $class;
	//	APP_STATUS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_STATUS", $data, $keylink);
			$row["APP_STATUS_value"] = $value;
			$format = $pSet->getViewFormat("APP_STATUS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_STATUS")))
				$class = ' rnr-field-number';
			$row["APP_STATUS_class"] = $class;
	//	USR_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("USR_UID", $data, $keylink);
			$row["USR_UID_value"] = $value;
			$format = $pSet->getViewFormat("USR_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("USR_UID")))
				$class = ' rnr-field-number';
			$row["USR_UID_class"] = $class;
	//	PREVIOUS_USR_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PREVIOUS_USR_UID", $data, $keylink);
			$row["PREVIOUS_USR_UID_value"] = $value;
			$format = $pSet->getViewFormat("PREVIOUS_USR_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PREVIOUS_USR_UID")))
				$class = ' rnr-field-number';
			$row["PREVIOUS_USR_UID_class"] = $class;
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
	//	DEL_DELEGATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_DELEGATE_DATE", $data, $keylink);
			$row["DEL_DELEGATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("DEL_DELEGATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_DELEGATE_DATE")))
				$class = ' rnr-field-number';
			$row["DEL_DELEGATE_DATE_class"] = $class;
	//	DEL_INIT_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_INIT_DATE", $data, $keylink);
			$row["DEL_INIT_DATE_value"] = $value;
			$format = $pSet->getViewFormat("DEL_INIT_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_INIT_DATE")))
				$class = ' rnr-field-number';
			$row["DEL_INIT_DATE_class"] = $class;
	//	DEL_FINISH_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_FINISH_DATE", $data, $keylink);
			$row["DEL_FINISH_DATE_value"] = $value;
			$format = $pSet->getViewFormat("DEL_FINISH_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_FINISH_DATE")))
				$class = ' rnr-field-number';
			$row["DEL_FINISH_DATE_class"] = $class;
	//	DEL_TASK_DUE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_TASK_DUE_DATE", $data, $keylink);
			$row["DEL_TASK_DUE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("DEL_TASK_DUE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_TASK_DUE_DATE")))
				$class = ' rnr-field-number';
			$row["DEL_TASK_DUE_DATE_class"] = $class;
	//	DEL_RISK_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_RISK_DATE", $data, $keylink);
			$row["DEL_RISK_DATE_value"] = $value;
			$format = $pSet->getViewFormat("DEL_RISK_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_RISK_DATE")))
				$class = ' rnr-field-number';
			$row["DEL_RISK_DATE_class"] = $class;
	//	DEL_THREAD_STATUS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_THREAD_STATUS", $data, $keylink);
			$row["DEL_THREAD_STATUS_value"] = $value;
			$format = $pSet->getViewFormat("DEL_THREAD_STATUS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_THREAD_STATUS")))
				$class = ' rnr-field-number';
			$row["DEL_THREAD_STATUS_class"] = $class;
	//	APP_THREAD_STATUS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_THREAD_STATUS", $data, $keylink);
			$row["APP_THREAD_STATUS_value"] = $value;
			$format = $pSet->getViewFormat("APP_THREAD_STATUS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_THREAD_STATUS")))
				$class = ' rnr-field-number';
			$row["APP_THREAD_STATUS_class"] = $class;
	//	APP_TITLE - Hyperlink
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_TITLE", $data, $keylink);
			$row["APP_TITLE_value"] = $value;
			$format = $pSet->getViewFormat("APP_TITLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_TITLE")))
				$class = ' rnr-field-number';
			$row["APP_TITLE_class"] = $class;
	//	APP_PRO_TITLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_PRO_TITLE", $data, $keylink);
			$row["APP_PRO_TITLE_value"] = $value;
			$format = $pSet->getViewFormat("APP_PRO_TITLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_PRO_TITLE")))
				$class = ' rnr-field-number';
			$row["APP_PRO_TITLE_class"] = $class;
	//	APP_TAS_TITLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_TAS_TITLE", $data, $keylink);
			$row["APP_TAS_TITLE_value"] = $value;
			$format = $pSet->getViewFormat("APP_TAS_TITLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_TAS_TITLE")))
				$class = ' rnr-field-number';
			$row["APP_TAS_TITLE_class"] = $class;
	//	APP_CURRENT_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_CURRENT_USER", $data, $keylink);
			$row["APP_CURRENT_USER_value"] = $value;
			$format = $pSet->getViewFormat("APP_CURRENT_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_CURRENT_USER")))
				$class = ' rnr-field-number';
			$row["APP_CURRENT_USER_class"] = $class;
	//	APP_DEL_PREVIOUS_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_DEL_PREVIOUS_USER", $data, $keylink);
			$row["APP_DEL_PREVIOUS_USER_value"] = $value;
			$format = $pSet->getViewFormat("APP_DEL_PREVIOUS_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_DEL_PREVIOUS_USER")))
				$class = ' rnr-field-number';
			$row["APP_DEL_PREVIOUS_USER_class"] = $class;
	//	DEL_PRIORITY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_PRIORITY", $data, $keylink);
			$row["DEL_PRIORITY_value"] = $value;
			$format = $pSet->getViewFormat("DEL_PRIORITY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_PRIORITY")))
				$class = ' rnr-field-number';
			$row["DEL_PRIORITY_class"] = $class;
	//	DEL_DURATION - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_DURATION", $data, $keylink);
			$row["DEL_DURATION_value"] = $value;
			$format = $pSet->getViewFormat("DEL_DURATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_DURATION")))
				$class = ' rnr-field-number';
			$row["DEL_DURATION_class"] = $class;
	//	DEL_QUEUE_DURATION - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_QUEUE_DURATION", $data, $keylink);
			$row["DEL_QUEUE_DURATION_value"] = $value;
			$format = $pSet->getViewFormat("DEL_QUEUE_DURATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_QUEUE_DURATION")))
				$class = ' rnr-field-number';
			$row["DEL_QUEUE_DURATION_class"] = $class;
	//	DEL_DELAY_DURATION - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_DELAY_DURATION", $data, $keylink);
			$row["DEL_DELAY_DURATION_value"] = $value;
			$format = $pSet->getViewFormat("DEL_DELAY_DURATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_DELAY_DURATION")))
				$class = ' rnr-field-number';
			$row["DEL_DELAY_DURATION_class"] = $class;
	//	DEL_STARTED - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_STARTED", $data, $keylink);
			$row["DEL_STARTED_value"] = $value;
			$format = $pSet->getViewFormat("DEL_STARTED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_STARTED")))
				$class = ' rnr-field-number';
			$row["DEL_STARTED_class"] = $class;
	//	DEL_FINISHED - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_FINISHED", $data, $keylink);
			$row["DEL_FINISHED_value"] = $value;
			$format = $pSet->getViewFormat("DEL_FINISHED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_FINISHED")))
				$class = ' rnr-field-number';
			$row["DEL_FINISHED_class"] = $class;
	//	DEL_DELAYED - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEL_DELAYED", $data, $keylink);
			$row["DEL_DELAYED_value"] = $value;
			$format = $pSet->getViewFormat("DEL_DELAYED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEL_DELAYED")))
				$class = ' rnr-field-number';
			$row["DEL_DELAYED_class"] = $class;
	//	APP_CREATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_CREATE_DATE", $data, $keylink);
			$row["APP_CREATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_CREATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_CREATE_DATE")))
				$class = ' rnr-field-number';
			$row["APP_CREATE_DATE_class"] = $class;
	//	APP_FINISH_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_FINISH_DATE", $data, $keylink);
			$row["APP_FINISH_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_FINISH_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_FINISH_DATE")))
				$class = ' rnr-field-number';
			$row["APP_FINISH_DATE_class"] = $class;
	//	APP_UPDATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_UPDATE_DATE", $data, $keylink);
			$row["APP_UPDATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_UPDATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_UPDATE_DATE")))
				$class = ' rnr-field-number';
			$row["APP_UPDATE_DATE_class"] = $class;
	//	APP_OVERDUE_PERCENTAGE - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_OVERDUE_PERCENTAGE", $data, $keylink);
			$row["APP_OVERDUE_PERCENTAGE_value"] = $value;
			$format = $pSet->getViewFormat("APP_OVERDUE_PERCENTAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_OVERDUE_PERCENTAGE")))
				$class = ' rnr-field-number';
			$row["APP_OVERDUE_PERCENTAGE_class"] = $class;
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
$xt->load_template(GetTemplateName("APP_CACHE_VIEW_INDEX", "detailspreview"));
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
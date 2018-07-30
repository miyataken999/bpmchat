<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/APP_DELAY_variables.php");

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
		$layout->customCssPageName = "APP_DELAY_detailspreview";
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
$page_layouts["APP_DELAY_detailspreview"] = $layout;




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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["APP_DELAY_UID"]));
	
	
	//	APP_DELAY_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_DELAY_UID", $data, $keylink);
			$row["APP_DELAY_UID_value"] = $value;
			$format = $pSet->getViewFormat("APP_DELAY_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_DELAY_UID")))
				$class = ' rnr-field-number';
			$row["APP_DELAY_UID_class"] = $class;
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
	//	APP_THREAD_INDEX - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_THREAD_INDEX", $data, $keylink);
			$row["APP_THREAD_INDEX_value"] = $value;
			$format = $pSet->getViewFormat("APP_THREAD_INDEX");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_THREAD_INDEX")))
				$class = ' rnr-field-number';
			$row["APP_THREAD_INDEX_class"] = $class;
	//	APP_DEL_INDEX - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_DEL_INDEX", $data, $keylink);
			$row["APP_DEL_INDEX_value"] = $value;
			$format = $pSet->getViewFormat("APP_DEL_INDEX");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_DEL_INDEX")))
				$class = ' rnr-field-number';
			$row["APP_DEL_INDEX_class"] = $class;
	//	APP_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_TYPE", $data, $keylink);
			$row["APP_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("APP_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_TYPE")))
				$class = ' rnr-field-number';
			$row["APP_TYPE_class"] = $class;
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
	//	APP_NEXT_TASK - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_NEXT_TASK", $data, $keylink);
			$row["APP_NEXT_TASK_value"] = $value;
			$format = $pSet->getViewFormat("APP_NEXT_TASK");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_NEXT_TASK")))
				$class = ' rnr-field-number';
			$row["APP_NEXT_TASK_class"] = $class;
	//	APP_DELEGATION_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_DELEGATION_USER", $data, $keylink);
			$row["APP_DELEGATION_USER_value"] = $value;
			$format = $pSet->getViewFormat("APP_DELEGATION_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_DELEGATION_USER")))
				$class = ' rnr-field-number';
			$row["APP_DELEGATION_USER_class"] = $class;
	//	APP_ENABLE_ACTION_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_ENABLE_ACTION_USER", $data, $keylink);
			$row["APP_ENABLE_ACTION_USER_value"] = $value;
			$format = $pSet->getViewFormat("APP_ENABLE_ACTION_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_ENABLE_ACTION_USER")))
				$class = ' rnr-field-number';
			$row["APP_ENABLE_ACTION_USER_class"] = $class;
	//	APP_ENABLE_ACTION_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_ENABLE_ACTION_DATE", $data, $keylink);
			$row["APP_ENABLE_ACTION_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_ENABLE_ACTION_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_ENABLE_ACTION_DATE")))
				$class = ' rnr-field-number';
			$row["APP_ENABLE_ACTION_DATE_class"] = $class;
	//	APP_DISABLE_ACTION_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_DISABLE_ACTION_USER", $data, $keylink);
			$row["APP_DISABLE_ACTION_USER_value"] = $value;
			$format = $pSet->getViewFormat("APP_DISABLE_ACTION_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_DISABLE_ACTION_USER")))
				$class = ' rnr-field-number';
			$row["APP_DISABLE_ACTION_USER_class"] = $class;
	//	APP_DISABLE_ACTION_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_DISABLE_ACTION_DATE", $data, $keylink);
			$row["APP_DISABLE_ACTION_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_DISABLE_ACTION_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_DISABLE_ACTION_DATE")))
				$class = ' rnr-field-number';
			$row["APP_DISABLE_ACTION_DATE_class"] = $class;
	//	APP_AUTOMATIC_DISABLED_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APP_AUTOMATIC_DISABLED_DATE", $data, $keylink);
			$row["APP_AUTOMATIC_DISABLED_DATE_value"] = $value;
			$format = $pSet->getViewFormat("APP_AUTOMATIC_DISABLED_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APP_AUTOMATIC_DISABLED_DATE")))
				$class = ' rnr-field-number';
			$row["APP_AUTOMATIC_DISABLED_DATE_class"] = $class;
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
$xt->load_template(GetTemplateName("APP_DELAY", "detailspreview"));
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
<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/DASHBOARD_INDICATOR_variables.php");

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
		$layout->customCssPageName = "DASHBOARD_INDICATOR_detailspreview";
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
$page_layouts["DASHBOARD_INDICATOR_detailspreview"] = $layout;




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

if($mastertable == "DASHBOARD1")
{
	$where = "";
		$formattedValue = make_db_value("DAS_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("DAS_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("DAS_UID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["DAS_IND_UID"]));
	
	
	//	DAS_IND_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_UID", $data, $keylink);
			$row["DAS_IND_UID_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_UID")))
				$class = ' rnr-field-number';
			$row["DAS_IND_UID_class"] = $class;
	//	DAS_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_UID", $data, $keylink);
			$row["DAS_UID_value"] = $value;
			$format = $pSet->getViewFormat("DAS_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_UID")))
				$class = ' rnr-field-number';
			$row["DAS_UID_class"] = $class;
	//	DAS_IND_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_TYPE", $data, $keylink);
			$row["DAS_IND_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_TYPE")))
				$class = ' rnr-field-number';
			$row["DAS_IND_TYPE_class"] = $class;
	//	DAS_IND_TITLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_TITLE", $data, $keylink);
			$row["DAS_IND_TITLE_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_TITLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_TITLE")))
				$class = ' rnr-field-number';
			$row["DAS_IND_TITLE_class"] = $class;
	//	DAS_IND_GOAL - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_GOAL", $data, $keylink);
			$row["DAS_IND_GOAL_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_GOAL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_GOAL")))
				$class = ' rnr-field-number';
			$row["DAS_IND_GOAL_class"] = $class;
	//	DAS_IND_DIRECTION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_DIRECTION", $data, $keylink);
			$row["DAS_IND_DIRECTION_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_DIRECTION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_DIRECTION")))
				$class = ' rnr-field-number';
			$row["DAS_IND_DIRECTION_class"] = $class;
	//	DAS_UID_PROCESS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_UID_PROCESS", $data, $keylink);
			$row["DAS_UID_PROCESS_value"] = $value;
			$format = $pSet->getViewFormat("DAS_UID_PROCESS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_UID_PROCESS")))
				$class = ' rnr-field-number';
			$row["DAS_UID_PROCESS_class"] = $class;
	//	DAS_IND_FIRST_FIGURE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_FIRST_FIGURE", $data, $keylink);
			$row["DAS_IND_FIRST_FIGURE_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_FIRST_FIGURE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_FIRST_FIGURE")))
				$class = ' rnr-field-number';
			$row["DAS_IND_FIRST_FIGURE_class"] = $class;
	//	DAS_IND_FIRST_FREQUENCY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_FIRST_FREQUENCY", $data, $keylink);
			$row["DAS_IND_FIRST_FREQUENCY_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_FIRST_FREQUENCY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_FIRST_FREQUENCY")))
				$class = ' rnr-field-number';
			$row["DAS_IND_FIRST_FREQUENCY_class"] = $class;
	//	DAS_IND_SECOND_FIGURE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_SECOND_FIGURE", $data, $keylink);
			$row["DAS_IND_SECOND_FIGURE_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_SECOND_FIGURE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_SECOND_FIGURE")))
				$class = ' rnr-field-number';
			$row["DAS_IND_SECOND_FIGURE_class"] = $class;
	//	DAS_IND_SECOND_FREQUENCY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_SECOND_FREQUENCY", $data, $keylink);
			$row["DAS_IND_SECOND_FREQUENCY_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_SECOND_FREQUENCY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_SECOND_FREQUENCY")))
				$class = ' rnr-field-number';
			$row["DAS_IND_SECOND_FREQUENCY_class"] = $class;
	//	DAS_IND_CREATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_CREATE_DATE", $data, $keylink);
			$row["DAS_IND_CREATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_CREATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_CREATE_DATE")))
				$class = ' rnr-field-number';
			$row["DAS_IND_CREATE_DATE_class"] = $class;
	//	DAS_IND_UPDATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_UPDATE_DATE", $data, $keylink);
			$row["DAS_IND_UPDATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_UPDATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_UPDATE_DATE")))
				$class = ' rnr-field-number';
			$row["DAS_IND_UPDATE_DATE_class"] = $class;
	//	DAS_IND_STATUS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DAS_IND_STATUS", $data, $keylink);
			$row["DAS_IND_STATUS_value"] = $value;
			$format = $pSet->getViewFormat("DAS_IND_STATUS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DAS_IND_STATUS")))
				$class = ' rnr-field-number';
			$row["DAS_IND_STATUS_class"] = $class;
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
$xt->load_template(GetTemplateName("DASHBOARD_INDICATOR", "detailspreview"));
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
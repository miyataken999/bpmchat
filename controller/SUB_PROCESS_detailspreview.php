<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/SUB_PROCESS_variables.php");

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
		$layout->customCssPageName = "SUB_PROCESS_detailspreview";
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
$page_layouts["SUB_PROCESS_detailspreview"] = $layout;




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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["SP_UID"]));
	
	
	//	SP_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_UID", $data, $keylink);
			$row["SP_UID_value"] = $value;
			$format = $pSet->getViewFormat("SP_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_UID")))
				$class = ' rnr-field-number';
			$row["SP_UID_class"] = $class;
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
	//	PRO_PARENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_PARENT", $data, $keylink);
			$row["PRO_PARENT_value"] = $value;
			$format = $pSet->getViewFormat("PRO_PARENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_PARENT")))
				$class = ' rnr-field-number';
			$row["PRO_PARENT_class"] = $class;
	//	TAS_PARENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAS_PARENT", $data, $keylink);
			$row["TAS_PARENT_value"] = $value;
			$format = $pSet->getViewFormat("TAS_PARENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAS_PARENT")))
				$class = ' rnr-field-number';
			$row["TAS_PARENT_class"] = $class;
	//	SP_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_TYPE", $data, $keylink);
			$row["SP_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("SP_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_TYPE")))
				$class = ' rnr-field-number';
			$row["SP_TYPE_class"] = $class;
	//	SP_SYNCHRONOUS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_SYNCHRONOUS", $data, $keylink);
			$row["SP_SYNCHRONOUS_value"] = $value;
			$format = $pSet->getViewFormat("SP_SYNCHRONOUS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_SYNCHRONOUS")))
				$class = ' rnr-field-number';
			$row["SP_SYNCHRONOUS_class"] = $class;
	//	SP_SYNCHRONOUS_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_SYNCHRONOUS_TYPE", $data, $keylink);
			$row["SP_SYNCHRONOUS_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("SP_SYNCHRONOUS_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_SYNCHRONOUS_TYPE")))
				$class = ' rnr-field-number';
			$row["SP_SYNCHRONOUS_TYPE_class"] = $class;
	//	SP_SYNCHRONOUS_WAIT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_SYNCHRONOUS_WAIT", $data, $keylink);
			$row["SP_SYNCHRONOUS_WAIT_value"] = $value;
			$format = $pSet->getViewFormat("SP_SYNCHRONOUS_WAIT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_SYNCHRONOUS_WAIT")))
				$class = ' rnr-field-number';
			$row["SP_SYNCHRONOUS_WAIT_class"] = $class;
	//	SP_VARIABLES_OUT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_VARIABLES_OUT", $data, $keylink);
			$row["SP_VARIABLES_OUT_value"] = $value;
			$format = $pSet->getViewFormat("SP_VARIABLES_OUT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_VARIABLES_OUT")))
				$class = ' rnr-field-number';
			$row["SP_VARIABLES_OUT_class"] = $class;
	//	SP_VARIABLES_IN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_VARIABLES_IN", $data, $keylink);
			$row["SP_VARIABLES_IN_value"] = $value;
			$format = $pSet->getViewFormat("SP_VARIABLES_IN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_VARIABLES_IN")))
				$class = ' rnr-field-number';
			$row["SP_VARIABLES_IN_class"] = $class;
	//	SP_GRID_IN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SP_GRID_IN", $data, $keylink);
			$row["SP_GRID_IN_value"] = $value;
			$format = $pSet->getViewFormat("SP_GRID_IN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SP_GRID_IN")))
				$class = ' rnr-field-number';
			$row["SP_GRID_IN_class"] = $class;
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
$xt->load_template(GetTemplateName("SUB_PROCESS", "detailspreview"));
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
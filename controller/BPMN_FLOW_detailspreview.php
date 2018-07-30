<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/BPMN_FLOW_variables.php");

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
		$layout->customCssPageName = "BPMN_FLOW_detailspreview";
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
$page_layouts["BPMN_FLOW_detailspreview"] = $layout;




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

if($mastertable == "BPMN_PROJECT")
{
	$where = "";
		$formattedValue = make_db_value("PRJ_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("PRJ_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("PRJ_UID") . "=" . $formattedValue;
}
if($mastertable == "BPMN_DIAGRAM")
{
	$where = "";
		$formattedValue = make_db_value("DIA_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("DIA_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("DIA_UID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["FLO_UID"]));
	
	
	//	FLO_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_UID", $data, $keylink);
			$row["FLO_UID_value"] = $value;
			$format = $pSet->getViewFormat("FLO_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_UID")))
				$class = ' rnr-field-number';
			$row["FLO_UID_class"] = $class;
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
	//	DIA_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DIA_UID", $data, $keylink);
			$row["DIA_UID_value"] = $value;
			$format = $pSet->getViewFormat("DIA_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DIA_UID")))
				$class = ' rnr-field-number';
			$row["DIA_UID_class"] = $class;
	//	FLO_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_TYPE", $data, $keylink);
			$row["FLO_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("FLO_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_TYPE")))
				$class = ' rnr-field-number';
			$row["FLO_TYPE_class"] = $class;
	//	FLO_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_NAME", $data, $keylink);
			$row["FLO_NAME_value"] = $value;
			$format = $pSet->getViewFormat("FLO_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_NAME")))
				$class = ' rnr-field-number';
			$row["FLO_NAME_class"] = $class;
	//	FLO_ELEMENT_ORIGIN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_ELEMENT_ORIGIN", $data, $keylink);
			$row["FLO_ELEMENT_ORIGIN_value"] = $value;
			$format = $pSet->getViewFormat("FLO_ELEMENT_ORIGIN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_ELEMENT_ORIGIN")))
				$class = ' rnr-field-number';
			$row["FLO_ELEMENT_ORIGIN_class"] = $class;
	//	FLO_ELEMENT_ORIGIN_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_ELEMENT_ORIGIN_TYPE", $data, $keylink);
			$row["FLO_ELEMENT_ORIGIN_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("FLO_ELEMENT_ORIGIN_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_ELEMENT_ORIGIN_TYPE")))
				$class = ' rnr-field-number';
			$row["FLO_ELEMENT_ORIGIN_TYPE_class"] = $class;
	//	FLO_ELEMENT_ORIGIN_PORT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_ELEMENT_ORIGIN_PORT", $data, $keylink);
			$row["FLO_ELEMENT_ORIGIN_PORT_value"] = $value;
			$format = $pSet->getViewFormat("FLO_ELEMENT_ORIGIN_PORT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_ELEMENT_ORIGIN_PORT")))
				$class = ' rnr-field-number';
			$row["FLO_ELEMENT_ORIGIN_PORT_class"] = $class;
	//	FLO_ELEMENT_DEST - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_ELEMENT_DEST", $data, $keylink);
			$row["FLO_ELEMENT_DEST_value"] = $value;
			$format = $pSet->getViewFormat("FLO_ELEMENT_DEST");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_ELEMENT_DEST")))
				$class = ' rnr-field-number';
			$row["FLO_ELEMENT_DEST_class"] = $class;
	//	FLO_ELEMENT_DEST_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_ELEMENT_DEST_TYPE", $data, $keylink);
			$row["FLO_ELEMENT_DEST_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("FLO_ELEMENT_DEST_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_ELEMENT_DEST_TYPE")))
				$class = ' rnr-field-number';
			$row["FLO_ELEMENT_DEST_TYPE_class"] = $class;
	//	FLO_ELEMENT_DEST_PORT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_ELEMENT_DEST_PORT", $data, $keylink);
			$row["FLO_ELEMENT_DEST_PORT_value"] = $value;
			$format = $pSet->getViewFormat("FLO_ELEMENT_DEST_PORT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_ELEMENT_DEST_PORT")))
				$class = ' rnr-field-number';
			$row["FLO_ELEMENT_DEST_PORT_class"] = $class;
	//	FLO_IS_INMEDIATE - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_IS_INMEDIATE", $data, $keylink);
			$row["FLO_IS_INMEDIATE_value"] = $value;
			$format = $pSet->getViewFormat("FLO_IS_INMEDIATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_IS_INMEDIATE")))
				$class = ' rnr-field-number';
			$row["FLO_IS_INMEDIATE_class"] = $class;
	//	FLO_CONDITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_CONDITION", $data, $keylink);
			$row["FLO_CONDITION_value"] = $value;
			$format = $pSet->getViewFormat("FLO_CONDITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_CONDITION")))
				$class = ' rnr-field-number';
			$row["FLO_CONDITION_class"] = $class;
	//	FLO_X1 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_X1", $data, $keylink);
			$row["FLO_X1_value"] = $value;
			$format = $pSet->getViewFormat("FLO_X1");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_X1")))
				$class = ' rnr-field-number';
			$row["FLO_X1_class"] = $class;
	//	FLO_Y1 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_Y1", $data, $keylink);
			$row["FLO_Y1_value"] = $value;
			$format = $pSet->getViewFormat("FLO_Y1");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_Y1")))
				$class = ' rnr-field-number';
			$row["FLO_Y1_class"] = $class;
	//	FLO_X2 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_X2", $data, $keylink);
			$row["FLO_X2_value"] = $value;
			$format = $pSet->getViewFormat("FLO_X2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_X2")))
				$class = ' rnr-field-number';
			$row["FLO_X2_class"] = $class;
	//	FLO_Y2 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_Y2", $data, $keylink);
			$row["FLO_Y2_value"] = $value;
			$format = $pSet->getViewFormat("FLO_Y2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_Y2")))
				$class = ' rnr-field-number';
			$row["FLO_Y2_class"] = $class;
	//	FLO_STATE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_STATE", $data, $keylink);
			$row["FLO_STATE_value"] = $value;
			$format = $pSet->getViewFormat("FLO_STATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_STATE")))
				$class = ' rnr-field-number';
			$row["FLO_STATE_class"] = $class;
	//	FLO_POSITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FLO_POSITION", $data, $keylink);
			$row["FLO_POSITION_value"] = $value;
			$format = $pSet->getViewFormat("FLO_POSITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FLO_POSITION")))
				$class = ' rnr-field-number';
			$row["FLO_POSITION_class"] = $class;
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
$xt->load_template(GetTemplateName("BPMN_FLOW", "detailspreview"));
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
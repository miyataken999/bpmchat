<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/BPMN_BOUND_variables.php");

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
		$layout->customCssPageName = "BPMN_BOUND_detailspreview";
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
$page_layouts["BPMN_BOUND_detailspreview"] = $layout;




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

if($mastertable == "BPMN_DIAGRAM")
{
	$where = "";
		$formattedValue = make_db_value("DIA_UID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("DIA_UID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("DIA_UID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["BOU_UID"]));
	
	
	//	BOU_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_UID", $data, $keylink);
			$row["BOU_UID_value"] = $value;
			$format = $pSet->getViewFormat("BOU_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_UID")))
				$class = ' rnr-field-number';
			$row["BOU_UID_class"] = $class;
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
	//	ELEMENT_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ELEMENT_UID", $data, $keylink);
			$row["ELEMENT_UID_value"] = $value;
			$format = $pSet->getViewFormat("ELEMENT_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ELEMENT_UID")))
				$class = ' rnr-field-number';
			$row["ELEMENT_UID_class"] = $class;
	//	BOU_ELEMENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_ELEMENT", $data, $keylink);
			$row["BOU_ELEMENT_value"] = $value;
			$format = $pSet->getViewFormat("BOU_ELEMENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_ELEMENT")))
				$class = ' rnr-field-number';
			$row["BOU_ELEMENT_class"] = $class;
	//	BOU_ELEMENT_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_ELEMENT_TYPE", $data, $keylink);
			$row["BOU_ELEMENT_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("BOU_ELEMENT_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_ELEMENT_TYPE")))
				$class = ' rnr-field-number';
			$row["BOU_ELEMENT_TYPE_class"] = $class;
	//	BOU_X - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_X", $data, $keylink);
			$row["BOU_X_value"] = $value;
			$format = $pSet->getViewFormat("BOU_X");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_X")))
				$class = ' rnr-field-number';
			$row["BOU_X_class"] = $class;
	//	BOU_Y - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_Y", $data, $keylink);
			$row["BOU_Y_value"] = $value;
			$format = $pSet->getViewFormat("BOU_Y");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_Y")))
				$class = ' rnr-field-number';
			$row["BOU_Y_class"] = $class;
	//	BOU_WIDTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_WIDTH", $data, $keylink);
			$row["BOU_WIDTH_value"] = $value;
			$format = $pSet->getViewFormat("BOU_WIDTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_WIDTH")))
				$class = ' rnr-field-number';
			$row["BOU_WIDTH_class"] = $class;
	//	BOU_HEIGHT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_HEIGHT", $data, $keylink);
			$row["BOU_HEIGHT_value"] = $value;
			$format = $pSet->getViewFormat("BOU_HEIGHT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_HEIGHT")))
				$class = ' rnr-field-number';
			$row["BOU_HEIGHT_class"] = $class;
	//	BOU_REL_POSITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_REL_POSITION", $data, $keylink);
			$row["BOU_REL_POSITION_value"] = $value;
			$format = $pSet->getViewFormat("BOU_REL_POSITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_REL_POSITION")))
				$class = ' rnr-field-number';
			$row["BOU_REL_POSITION_class"] = $class;
	//	BOU_SIZE_IDENTICAL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_SIZE_IDENTICAL", $data, $keylink);
			$row["BOU_SIZE_IDENTICAL_value"] = $value;
			$format = $pSet->getViewFormat("BOU_SIZE_IDENTICAL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_SIZE_IDENTICAL")))
				$class = ' rnr-field-number';
			$row["BOU_SIZE_IDENTICAL_class"] = $class;
	//	BOU_CONTAINER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BOU_CONTAINER", $data, $keylink);
			$row["BOU_CONTAINER_value"] = $value;
			$format = $pSet->getViewFormat("BOU_CONTAINER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BOU_CONTAINER")))
				$class = ' rnr-field-number';
			$row["BOU_CONTAINER_class"] = $class;
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
$xt->load_template(GetTemplateName("BPMN_BOUND", "detailspreview"));
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
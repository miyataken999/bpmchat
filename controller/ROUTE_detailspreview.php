<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/ROUTE_variables.php");

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
		$layout->customCssPageName = "ROUTE_detailspreview";
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
$page_layouts["ROUTE_detailspreview"] = $layout;




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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ROU_UID"]));
	
	
	//	ROU_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_UID", $data, $keylink);
			$row["ROU_UID_value"] = $value;
			$format = $pSet->getViewFormat("ROU_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_UID")))
				$class = ' rnr-field-number';
			$row["ROU_UID_class"] = $class;
	//	ROU_PARENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_PARENT", $data, $keylink);
			$row["ROU_PARENT_value"] = $value;
			$format = $pSet->getViewFormat("ROU_PARENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_PARENT")))
				$class = ' rnr-field-number';
			$row["ROU_PARENT_class"] = $class;
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
	//	ROU_NEXT_TASK - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_NEXT_TASK", $data, $keylink);
			$row["ROU_NEXT_TASK_value"] = $value;
			$format = $pSet->getViewFormat("ROU_NEXT_TASK");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_NEXT_TASK")))
				$class = ' rnr-field-number';
			$row["ROU_NEXT_TASK_class"] = $class;
	//	ROU_CASE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_CASE", $data, $keylink);
			$row["ROU_CASE_value"] = $value;
			$format = $pSet->getViewFormat("ROU_CASE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_CASE")))
				$class = ' rnr-field-number';
			$row["ROU_CASE_class"] = $class;
	//	ROU_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_TYPE", $data, $keylink);
			$row["ROU_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("ROU_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_TYPE")))
				$class = ' rnr-field-number';
			$row["ROU_TYPE_class"] = $class;
	//	ROU_DEFAULT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_DEFAULT", $data, $keylink);
			$row["ROU_DEFAULT_value"] = $value;
			$format = $pSet->getViewFormat("ROU_DEFAULT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_DEFAULT")))
				$class = ' rnr-field-number';
			$row["ROU_DEFAULT_class"] = $class;
	//	ROU_CONDITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_CONDITION", $data, $keylink);
			$row["ROU_CONDITION_value"] = $value;
			$format = $pSet->getViewFormat("ROU_CONDITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_CONDITION")))
				$class = ' rnr-field-number';
			$row["ROU_CONDITION_class"] = $class;
	//	ROU_TO_LAST_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_TO_LAST_USER", $data, $keylink);
			$row["ROU_TO_LAST_USER_value"] = $value;
			$format = $pSet->getViewFormat("ROU_TO_LAST_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_TO_LAST_USER")))
				$class = ' rnr-field-number';
			$row["ROU_TO_LAST_USER_class"] = $class;
	//	ROU_OPTIONAL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_OPTIONAL", $data, $keylink);
			$row["ROU_OPTIONAL_value"] = $value;
			$format = $pSet->getViewFormat("ROU_OPTIONAL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_OPTIONAL")))
				$class = ' rnr-field-number';
			$row["ROU_OPTIONAL_class"] = $class;
	//	ROU_SEND_EMAIL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_SEND_EMAIL", $data, $keylink);
			$row["ROU_SEND_EMAIL_value"] = $value;
			$format = $pSet->getViewFormat("ROU_SEND_EMAIL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_SEND_EMAIL")))
				$class = ' rnr-field-number';
			$row["ROU_SEND_EMAIL_class"] = $class;
	//	ROU_SOURCEANCHOR - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_SOURCEANCHOR", $data, $keylink);
			$row["ROU_SOURCEANCHOR_value"] = $value;
			$format = $pSet->getViewFormat("ROU_SOURCEANCHOR");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_SOURCEANCHOR")))
				$class = ' rnr-field-number';
			$row["ROU_SOURCEANCHOR_class"] = $class;
	//	ROU_TARGETANCHOR - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_TARGETANCHOR", $data, $keylink);
			$row["ROU_TARGETANCHOR_value"] = $value;
			$format = $pSet->getViewFormat("ROU_TARGETANCHOR");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_TARGETANCHOR")))
				$class = ' rnr-field-number';
			$row["ROU_TARGETANCHOR_class"] = $class;
	//	ROU_TO_PORT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_TO_PORT", $data, $keylink);
			$row["ROU_TO_PORT_value"] = $value;
			$format = $pSet->getViewFormat("ROU_TO_PORT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_TO_PORT")))
				$class = ' rnr-field-number';
			$row["ROU_TO_PORT_class"] = $class;
	//	ROU_FROM_PORT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_FROM_PORT", $data, $keylink);
			$row["ROU_FROM_PORT_value"] = $value;
			$format = $pSet->getViewFormat("ROU_FROM_PORT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_FROM_PORT")))
				$class = ' rnr-field-number';
			$row["ROU_FROM_PORT_class"] = $class;
	//	ROU_EVN_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROU_EVN_UID", $data, $keylink);
			$row["ROU_EVN_UID_value"] = $value;
			$format = $pSet->getViewFormat("ROU_EVN_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROU_EVN_UID")))
				$class = ' rnr-field-number';
			$row["ROU_EVN_UID_class"] = $class;
	//	GAT_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("GAT_UID", $data, $keylink);
			$row["GAT_UID_value"] = $value;
			$format = $pSet->getViewFormat("GAT_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("GAT_UID")))
				$class = ' rnr-field-number';
			$row["GAT_UID_class"] = $class;
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
$xt->load_template(GetTemplateName("ROUTE", "detailspreview"));
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
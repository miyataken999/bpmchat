<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/ABE_CONFIGURATION_variables.php");

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
		$layout->customCssPageName = "ABE_CONFIGURATION_detailspreview";
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
$page_layouts["ABE_CONFIGURATION_detailspreview"] = $layout;




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

if($mastertable == "PMT_MENU")
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ABE_UID"]));
	
	
	//	ABE_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_UID", $data, $keylink);
			$row["ABE_UID_value"] = $value;
			$format = $pSet->getViewFormat("ABE_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_UID")))
				$class = ' rnr-field-number';
			$row["ABE_UID_class"] = $class;
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
	//	ABE_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_TYPE", $data, $keylink);
			$row["ABE_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("ABE_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_TYPE")))
				$class = ' rnr-field-number';
			$row["ABE_TYPE_class"] = $class;
	//	ABE_TEMPLATE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_TEMPLATE", $data, $keylink);
			$row["ABE_TEMPLATE_value"] = $value;
			$format = $pSet->getViewFormat("ABE_TEMPLATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_TEMPLATE")))
				$class = ' rnr-field-number';
			$row["ABE_TEMPLATE_class"] = $class;
	//	ABE_DYN_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_DYN_TYPE", $data, $keylink);
			$row["ABE_DYN_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("ABE_DYN_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_DYN_TYPE")))
				$class = ' rnr-field-number';
			$row["ABE_DYN_TYPE_class"] = $class;
	//	DYN_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DYN_UID", $data, $keylink);
			$row["DYN_UID_value"] = $value;
			$format = $pSet->getViewFormat("DYN_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DYN_UID")))
				$class = ' rnr-field-number';
			$row["DYN_UID_class"] = $class;
	//	ABE_EMAIL_FIELD - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_EMAIL_FIELD", $data, $keylink);
			$row["ABE_EMAIL_FIELD_value"] = $value;
			$format = $pSet->getViewFormat("ABE_EMAIL_FIELD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_EMAIL_FIELD")))
				$class = ' rnr-field-number';
			$row["ABE_EMAIL_FIELD_class"] = $class;
	//	ABE_ACTION_FIELD - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_ACTION_FIELD", $data, $keylink);
			$row["ABE_ACTION_FIELD_value"] = $value;
			$format = $pSet->getViewFormat("ABE_ACTION_FIELD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_ACTION_FIELD")))
				$class = ' rnr-field-number';
			$row["ABE_ACTION_FIELD_class"] = $class;
	//	ABE_CASE_NOTE_IN_RESPONSE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_CASE_NOTE_IN_RESPONSE", $data, $keylink);
			$row["ABE_CASE_NOTE_IN_RESPONSE_value"] = $value;
			$format = $pSet->getViewFormat("ABE_CASE_NOTE_IN_RESPONSE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_CASE_NOTE_IN_RESPONSE")))
				$class = ' rnr-field-number';
			$row["ABE_CASE_NOTE_IN_RESPONSE_class"] = $class;
	//	ABE_FORCE_LOGIN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_FORCE_LOGIN", $data, $keylink);
			$row["ABE_FORCE_LOGIN_value"] = $value;
			$format = $pSet->getViewFormat("ABE_FORCE_LOGIN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_FORCE_LOGIN")))
				$class = ' rnr-field-number';
			$row["ABE_FORCE_LOGIN_class"] = $class;
	//	ABE_CREATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_CREATE_DATE", $data, $keylink);
			$row["ABE_CREATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("ABE_CREATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_CREATE_DATE")))
				$class = ' rnr-field-number';
			$row["ABE_CREATE_DATE_class"] = $class;
	//	ABE_UPDATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_UPDATE_DATE", $data, $keylink);
			$row["ABE_UPDATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("ABE_UPDATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_UPDATE_DATE")))
				$class = ' rnr-field-number';
			$row["ABE_UPDATE_DATE_class"] = $class;
	//	ABE_SUBJECT_FIELD - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_SUBJECT_FIELD", $data, $keylink);
			$row["ABE_SUBJECT_FIELD_value"] = $value;
			$format = $pSet->getViewFormat("ABE_SUBJECT_FIELD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_SUBJECT_FIELD")))
				$class = ' rnr-field-number';
			$row["ABE_SUBJECT_FIELD_class"] = $class;
	//	ABE_MAILSERVER_OR_MAILCURRENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_MAILSERVER_OR_MAILCURRENT", $data, $keylink);
			$row["ABE_MAILSERVER_OR_MAILCURRENT_value"] = $value;
			$format = $pSet->getViewFormat("ABE_MAILSERVER_OR_MAILCURRENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_MAILSERVER_OR_MAILCURRENT")))
				$class = ' rnr-field-number';
			$row["ABE_MAILSERVER_OR_MAILCURRENT_class"] = $class;
	//	ABE_CUSTOM_GRID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_CUSTOM_GRID", $data, $keylink);
			$row["ABE_CUSTOM_GRID_value"] = $value;
			$format = $pSet->getViewFormat("ABE_CUSTOM_GRID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_CUSTOM_GRID")))
				$class = ' rnr-field-number';
			$row["ABE_CUSTOM_GRID_class"] = $class;
	//	ABE_EMAIL_SERVER_UID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ABE_EMAIL_SERVER_UID", $data, $keylink);
			$row["ABE_EMAIL_SERVER_UID_value"] = $value;
			$format = $pSet->getViewFormat("ABE_EMAIL_SERVER_UID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ABE_EMAIL_SERVER_UID")))
				$class = ' rnr-field-number';
			$row["ABE_EMAIL_SERVER_UID_class"] = $class;
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
$xt->load_template(GetTemplateName("ABE_CONFIGURATION", "detailspreview"));
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
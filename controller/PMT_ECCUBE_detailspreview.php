<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/PMT_ECCUBE_variables.php");

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
		$layout->customCssPageName = "PMT_ECCUBE_detailspreview";
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
$page_layouts["PMT_ECCUBE_detailspreview"] = $layout;




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
	//	APPLICATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APPLICATION", $data, $keylink);
			$row["APPLICATION_value"] = $value;
			$format = $pSet->getViewFormat("APPLICATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APPLICATION")))
				$class = ' rnr-field-number';
			$row["APPLICATION_class"] = $class;
	//	APPLICATION_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("APPLICATION_LABEL", $data, $keylink);
			$row["APPLICATION_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("APPLICATION_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("APPLICATION_LABEL")))
				$class = ' rnr-field-number';
			$row["APPLICATION_LABEL_class"] = $class;
	//	ECCTEXTAREAVAR007 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ECCTEXTAREAVAR007", $data, $keylink);
			$row["ECCTEXTAREAVAR007_value"] = $value;
			$format = $pSet->getViewFormat("ECCTEXTAREAVAR007");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ECCTEXTAREAVAR007")))
				$class = ' rnr-field-number';
			$row["ECCTEXTAREAVAR007_class"] = $class;
	//	JPN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("JPN", $data, $keylink);
			$row["JPN_value"] = $value;
			$format = $pSet->getViewFormat("JPN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("JPN")))
				$class = ' rnr-field-number';
			$row["JPN_class"] = $class;
	//	JPN_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("JPN_LABEL", $data, $keylink);
			$row["JPN_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("JPN_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("JPN_LABEL")))
				$class = ' rnr-field-number';
			$row["JPN_LABEL_class"] = $class;
	//	PROCESS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PROCESS", $data, $keylink);
			$row["PROCESS_value"] = $value;
			$format = $pSet->getViewFormat("PROCESS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PROCESS")))
				$class = ' rnr-field-number';
			$row["PROCESS_class"] = $class;
	//	PROCESS_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PROCESS_LABEL", $data, $keylink);
			$row["PROCESS_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("PROCESS_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PROCESS_LABEL")))
				$class = ' rnr-field-number';
			$row["PROCESS_LABEL_class"] = $class;
	//	DATETIMEVAR001 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATETIMEVAR001", $data, $keylink);
			$row["DATETIMEVAR001_value"] = $value;
			$format = $pSet->getViewFormat("DATETIMEVAR001");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATETIMEVAR001")))
				$class = ' rnr-field-number';
			$row["DATETIMEVAR001_class"] = $class;
	//	DATETIMEVAR001_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATETIMEVAR001_LABEL", $data, $keylink);
			$row["DATETIMEVAR001_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("DATETIMEVAR001_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATETIMEVAR001_LABEL")))
				$class = ' rnr-field-number';
			$row["DATETIMEVAR001_LABEL_class"] = $class;
	//	DATETIMEVAR002 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATETIMEVAR002", $data, $keylink);
			$row["DATETIMEVAR002_value"] = $value;
			$format = $pSet->getViewFormat("DATETIMEVAR002");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATETIMEVAR002")))
				$class = ' rnr-field-number';
			$row["DATETIMEVAR002_class"] = $class;
	//	DATETIMEVAR002_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATETIMEVAR002_LABEL", $data, $keylink);
			$row["DATETIMEVAR002_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("DATETIMEVAR002_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATETIMEVAR002_LABEL")))
				$class = ' rnr-field-number';
			$row["DATETIMEVAR002_LABEL_class"] = $class;
	//	SATEI - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SATEI", $data, $keylink);
			$row["SATEI_value"] = $value;
			$format = $pSet->getViewFormat("SATEI");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SATEI")))
				$class = ' rnr-field-number';
			$row["SATEI_class"] = $class;
	//	SATEI_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SATEI_LABEL", $data, $keylink);
			$row["SATEI_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("SATEI_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SATEI_LABEL")))
				$class = ' rnr-field-number';
			$row["SATEI_LABEL_class"] = $class;
	//	TEXTVAR004 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR004", $data, $keylink);
			$row["TEXTVAR004_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR004");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR004")))
				$class = ' rnr-field-number';
			$row["TEXTVAR004_class"] = $class;
	//	TEXTVAR004_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR004_LABEL", $data, $keylink);
			$row["TEXTVAR004_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR004_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR004_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTVAR004_LABEL_class"] = $class;
	//	TEXTVAR009 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR009", $data, $keylink);
			$row["TEXTVAR009_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR009");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR009")))
				$class = ' rnr-field-number';
			$row["TEXTVAR009_class"] = $class;
	//	TEXTVAR009_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR009_LABEL", $data, $keylink);
			$row["TEXTVAR009_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR009_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR009_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTVAR009_LABEL_class"] = $class;
	//	TEXTVAR011 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR011", $data, $keylink);
			$row["TEXTVAR011_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR011");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR011")))
				$class = ' rnr-field-number';
			$row["TEXTVAR011_class"] = $class;
	//	TEXTVAR011_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR011_LABEL", $data, $keylink);
			$row["TEXTVAR011_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR011_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR011_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTVAR011_LABEL_class"] = $class;
	//	TEXTVAR012 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR012", $data, $keylink);
			$row["TEXTVAR012_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR012");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR012")))
				$class = ' rnr-field-number';
			$row["TEXTVAR012_class"] = $class;
	//	TEXTVAR012_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR012_LABEL", $data, $keylink);
			$row["TEXTVAR012_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR012_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR012_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTVAR012_LABEL_class"] = $class;
	//	TEXTVAR013 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR013", $data, $keylink);
			$row["TEXTVAR013_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR013");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR013")))
				$class = ' rnr-field-number';
			$row["TEXTVAR013_class"] = $class;
	//	TEXTVAR013_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTVAR013_LABEL", $data, $keylink);
			$row["TEXTVAR013_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTVAR013_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTVAR013_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTVAR013_LABEL_class"] = $class;
	//	TEXTAREAVAR003 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR003", $data, $keylink);
			$row["TEXTAREAVAR003_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR003");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR003")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR003_class"] = $class;
	//	TEXTAREAVAR003_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR003_LABEL", $data, $keylink);
			$row["TEXTAREAVAR003_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR003_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR003_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR003_LABEL_class"] = $class;
	//	TEXTAREAVAR004 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR004", $data, $keylink);
			$row["TEXTAREAVAR004_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR004");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR004")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR004_class"] = $class;
	//	TEXTAREAVAR004_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR004_LABEL", $data, $keylink);
			$row["TEXTAREAVAR004_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR004_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR004_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR004_LABEL_class"] = $class;
	//	TEXTAREAVAR005 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR005", $data, $keylink);
			$row["TEXTAREAVAR005_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR005");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR005")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR005_class"] = $class;
	//	TEXTAREAVAR005_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR005_LABEL", $data, $keylink);
			$row["TEXTAREAVAR005_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR005_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR005_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR005_LABEL_class"] = $class;
	//	TEXTAREAVAR006 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR006", $data, $keylink);
			$row["TEXTAREAVAR006_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR006");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR006")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR006_class"] = $class;
	//	TEXTAREAVAR006_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TEXTAREAVAR006_LABEL", $data, $keylink);
			$row["TEXTAREAVAR006_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("TEXTAREAVAR006_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TEXTAREAVAR006_LABEL")))
				$class = ' rnr-field-number';
			$row["TEXTAREAVAR006_LABEL_class"] = $class;
	//	INDEX_LABEL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("INDEX_LABEL", $data, $keylink);
			$row["INDEX_LABEL_value"] = $value;
			$format = $pSet->getViewFormat("INDEX_LABEL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("INDEX_LABEL")))
				$class = ' rnr-field-number';
			$row["INDEX_LABEL_class"] = $class;
	//	INDEXA - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("INDEXA", $data, $keylink);
			$row["INDEXA_value"] = $value;
			$format = $pSet->getViewFormat("INDEXA");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("INDEXA")))
				$class = ' rnr-field-number';
			$row["INDEXA_class"] = $class;
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
$xt->load_template(GetTemplateName("PMT_ECCUBE", "detailspreview"));
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
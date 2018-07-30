<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/PROCESS_variables.php");

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
		$layout->customCssPageName = "PROCESS_detailspreview";
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
$page_layouts["PROCESS_detailspreview"] = $layout;




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

if($mastertable == "PROCESS_CATEGORY")
{
	$where = "";
		$formattedValue = make_db_value("PRO_CATEGORY",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("PRO_CATEGORY") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("PRO_CATEGORY") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["PRO_UID"]));
	
	
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
	//	PRO_TITLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TITLE", $data, $keylink);
			$row["PRO_TITLE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TITLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TITLE")))
				$class = ' rnr-field-number';
			$row["PRO_TITLE_class"] = $class;
	//	PRO_DESCRIPTION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_DESCRIPTION", $data, $keylink);
			$row["PRO_DESCRIPTION_value"] = $value;
			$format = $pSet->getViewFormat("PRO_DESCRIPTION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_DESCRIPTION")))
				$class = ' rnr-field-number';
			$row["PRO_DESCRIPTION_class"] = $class;
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
	//	PRO_TIME - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TIME", $data, $keylink);
			$row["PRO_TIME_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TIME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TIME")))
				$class = ' rnr-field-number';
			$row["PRO_TIME_class"] = $class;
	//	PRO_TIMEUNIT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TIMEUNIT", $data, $keylink);
			$row["PRO_TIMEUNIT_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TIMEUNIT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TIMEUNIT")))
				$class = ' rnr-field-number';
			$row["PRO_TIMEUNIT_class"] = $class;
	//	PRO_STATUS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_STATUS", $data, $keylink);
			$row["PRO_STATUS_value"] = $value;
			$format = $pSet->getViewFormat("PRO_STATUS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_STATUS")))
				$class = ' rnr-field-number';
			$row["PRO_STATUS_class"] = $class;
	//	PRO_TYPE_DAY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TYPE_DAY", $data, $keylink);
			$row["PRO_TYPE_DAY_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TYPE_DAY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TYPE_DAY")))
				$class = ' rnr-field-number';
			$row["PRO_TYPE_DAY_class"] = $class;
	//	PRO_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TYPE", $data, $keylink);
			$row["PRO_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TYPE")))
				$class = ' rnr-field-number';
			$row["PRO_TYPE_class"] = $class;
	//	PRO_ASSIGNMENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_ASSIGNMENT", $data, $keylink);
			$row["PRO_ASSIGNMENT_value"] = $value;
			$format = $pSet->getViewFormat("PRO_ASSIGNMENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_ASSIGNMENT")))
				$class = ' rnr-field-number';
			$row["PRO_ASSIGNMENT_class"] = $class;
	//	PRO_SHOW_MAP - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_SHOW_MAP", $data, $keylink);
			$row["PRO_SHOW_MAP_value"] = $value;
			$format = $pSet->getViewFormat("PRO_SHOW_MAP");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_SHOW_MAP")))
				$class = ' rnr-field-number';
			$row["PRO_SHOW_MAP_class"] = $class;
	//	PRO_SHOW_MESSAGE - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_SHOW_MESSAGE", $data, $keylink);
			$row["PRO_SHOW_MESSAGE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_SHOW_MESSAGE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_SHOW_MESSAGE")))
				$class = ' rnr-field-number';
			$row["PRO_SHOW_MESSAGE_class"] = $class;
	//	PRO_SUBPROCESS - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_SUBPROCESS", $data, $keylink);
			$row["PRO_SUBPROCESS_value"] = $value;
			$format = $pSet->getViewFormat("PRO_SUBPROCESS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_SUBPROCESS")))
				$class = ' rnr-field-number';
			$row["PRO_SUBPROCESS_class"] = $class;
	//	PRO_TRI_OPEN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TRI_OPEN", $data, $keylink);
			$row["PRO_TRI_OPEN_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TRI_OPEN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TRI_OPEN")))
				$class = ' rnr-field-number';
			$row["PRO_TRI_OPEN_class"] = $class;
	//	PRO_TRI_DELETED - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TRI_DELETED", $data, $keylink);
			$row["PRO_TRI_DELETED_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TRI_DELETED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TRI_DELETED")))
				$class = ' rnr-field-number';
			$row["PRO_TRI_DELETED_class"] = $class;
	//	PRO_TRI_CANCELED - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TRI_CANCELED", $data, $keylink);
			$row["PRO_TRI_CANCELED_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TRI_CANCELED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TRI_CANCELED")))
				$class = ' rnr-field-number';
			$row["PRO_TRI_CANCELED_class"] = $class;
	//	PRO_TRI_PAUSED - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TRI_PAUSED", $data, $keylink);
			$row["PRO_TRI_PAUSED_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TRI_PAUSED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TRI_PAUSED")))
				$class = ' rnr-field-number';
			$row["PRO_TRI_PAUSED_class"] = $class;
	//	PRO_TRI_REASSIGNED - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TRI_REASSIGNED", $data, $keylink);
			$row["PRO_TRI_REASSIGNED_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TRI_REASSIGNED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TRI_REASSIGNED")))
				$class = ' rnr-field-number';
			$row["PRO_TRI_REASSIGNED_class"] = $class;
	//	PRO_TRI_UNPAUSED - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TRI_UNPAUSED", $data, $keylink);
			$row["PRO_TRI_UNPAUSED_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TRI_UNPAUSED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TRI_UNPAUSED")))
				$class = ' rnr-field-number';
			$row["PRO_TRI_UNPAUSED_class"] = $class;
	//	PRO_TYPE_PROCESS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TYPE_PROCESS", $data, $keylink);
			$row["PRO_TYPE_PROCESS_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TYPE_PROCESS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TYPE_PROCESS")))
				$class = ' rnr-field-number';
			$row["PRO_TYPE_PROCESS_class"] = $class;
	//	PRO_SHOW_DELEGATE - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_SHOW_DELEGATE", $data, $keylink);
			$row["PRO_SHOW_DELEGATE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_SHOW_DELEGATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_SHOW_DELEGATE")))
				$class = ' rnr-field-number';
			$row["PRO_SHOW_DELEGATE_class"] = $class;
	//	PRO_SHOW_DYNAFORM - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_SHOW_DYNAFORM", $data, $keylink);
			$row["PRO_SHOW_DYNAFORM_value"] = $value;
			$format = $pSet->getViewFormat("PRO_SHOW_DYNAFORM");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_SHOW_DYNAFORM")))
				$class = ' rnr-field-number';
			$row["PRO_SHOW_DYNAFORM_class"] = $class;
	//	PRO_CATEGORY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_CATEGORY", $data, $keylink);
			$row["PRO_CATEGORY_value"] = $value;
			$format = $pSet->getViewFormat("PRO_CATEGORY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_CATEGORY")))
				$class = ' rnr-field-number';
			$row["PRO_CATEGORY_class"] = $class;
	//	PRO_SUB_CATEGORY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_SUB_CATEGORY", $data, $keylink);
			$row["PRO_SUB_CATEGORY_value"] = $value;
			$format = $pSet->getViewFormat("PRO_SUB_CATEGORY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_SUB_CATEGORY")))
				$class = ' rnr-field-number';
			$row["PRO_SUB_CATEGORY_class"] = $class;
	//	PRO_INDUSTRY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_INDUSTRY", $data, $keylink);
			$row["PRO_INDUSTRY_value"] = $value;
			$format = $pSet->getViewFormat("PRO_INDUSTRY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_INDUSTRY")))
				$class = ' rnr-field-number';
			$row["PRO_INDUSTRY_class"] = $class;
	//	PRO_UPDATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_UPDATE_DATE", $data, $keylink);
			$row["PRO_UPDATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_UPDATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_UPDATE_DATE")))
				$class = ' rnr-field-number';
			$row["PRO_UPDATE_DATE_class"] = $class;
	//	PRO_CREATE_DATE - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_CREATE_DATE", $data, $keylink);
			$row["PRO_CREATE_DATE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_CREATE_DATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_CREATE_DATE")))
				$class = ' rnr-field-number';
			$row["PRO_CREATE_DATE_class"] = $class;
	//	PRO_CREATE_USER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_CREATE_USER", $data, $keylink);
			$row["PRO_CREATE_USER_value"] = $value;
			$format = $pSet->getViewFormat("PRO_CREATE_USER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_CREATE_USER")))
				$class = ' rnr-field-number';
			$row["PRO_CREATE_USER_class"] = $class;
	//	PRO_HEIGHT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_HEIGHT", $data, $keylink);
			$row["PRO_HEIGHT_value"] = $value;
			$format = $pSet->getViewFormat("PRO_HEIGHT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_HEIGHT")))
				$class = ' rnr-field-number';
			$row["PRO_HEIGHT_class"] = $class;
	//	PRO_WIDTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_WIDTH", $data, $keylink);
			$row["PRO_WIDTH_value"] = $value;
			$format = $pSet->getViewFormat("PRO_WIDTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_WIDTH")))
				$class = ' rnr-field-number';
			$row["PRO_WIDTH_class"] = $class;
	//	PRO_TITLE_X - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TITLE_X", $data, $keylink);
			$row["PRO_TITLE_X_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TITLE_X");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TITLE_X")))
				$class = ' rnr-field-number';
			$row["PRO_TITLE_X_class"] = $class;
	//	PRO_TITLE_Y - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TITLE_Y", $data, $keylink);
			$row["PRO_TITLE_Y_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TITLE_Y");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TITLE_Y")))
				$class = ' rnr-field-number';
			$row["PRO_TITLE_Y_class"] = $class;
	//	PRO_DEBUG - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_DEBUG", $data, $keylink);
			$row["PRO_DEBUG_value"] = $value;
			$format = $pSet->getViewFormat("PRO_DEBUG");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_DEBUG")))
				$class = ' rnr-field-number';
			$row["PRO_DEBUG_class"] = $class;
	//	PRO_DYNAFORMS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_DYNAFORMS", $data, $keylink);
			$row["PRO_DYNAFORMS_value"] = $value;
			$format = $pSet->getViewFormat("PRO_DYNAFORMS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_DYNAFORMS")))
				$class = ' rnr-field-number';
			$row["PRO_DYNAFORMS_class"] = $class;
	//	PRO_DERIVATION_SCREEN_TPL - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_DERIVATION_SCREEN_TPL", $data, $keylink);
			$row["PRO_DERIVATION_SCREEN_TPL_value"] = $value;
			$format = $pSet->getViewFormat("PRO_DERIVATION_SCREEN_TPL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_DERIVATION_SCREEN_TPL")))
				$class = ' rnr-field-number';
			$row["PRO_DERIVATION_SCREEN_TPL_class"] = $class;
	//	PRO_COST - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_COST", $data, $keylink);
			$row["PRO_COST_value"] = $value;
			$format = $pSet->getViewFormat("PRO_COST");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_COST")))
				$class = ' rnr-field-number';
			$row["PRO_COST_class"] = $class;
	//	PRO_UNIT_COST - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_UNIT_COST", $data, $keylink);
			$row["PRO_UNIT_COST_value"] = $value;
			$format = $pSet->getViewFormat("PRO_UNIT_COST");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_UNIT_COST")))
				$class = ' rnr-field-number';
			$row["PRO_UNIT_COST_class"] = $class;
	//	PRO_ITEE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_ITEE", $data, $keylink);
			$row["PRO_ITEE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_ITEE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_ITEE")))
				$class = ' rnr-field-number';
			$row["PRO_ITEE_class"] = $class;
	//	PRO_ACTION_DONE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_ACTION_DONE", $data, $keylink);
			$row["PRO_ACTION_DONE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_ACTION_DONE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_ACTION_DONE")))
				$class = ' rnr-field-number';
			$row["PRO_ACTION_DONE_class"] = $class;
	//	PRO_ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_ID", $data, $keylink);
			$row["PRO_ID_value"] = $value;
			$format = $pSet->getViewFormat("PRO_ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_ID")))
				$class = ' rnr-field-number';
			$row["PRO_ID_class"] = $class;
	//	PRO_TRI_CREATE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRO_TRI_CREATE", $data, $keylink);
			$row["PRO_TRI_CREATE_value"] = $value;
			$format = $pSet->getViewFormat("PRO_TRI_CREATE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRO_TRI_CREATE")))
				$class = ' rnr-field-number';
			$row["PRO_TRI_CREATE_class"] = $class;
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
$xt->load_template(GetTemplateName("PROCESS", "detailspreview"));
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
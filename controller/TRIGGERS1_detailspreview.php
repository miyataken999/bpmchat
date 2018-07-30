<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/TRIGGERS1_variables.php");

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
		$layout->customCssPageName = "TRIGGERS1_detailspreview";
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
$page_layouts["TRIGGERS1_detailspreview"] = $layout;




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

if($mastertable == "TABLES")
{
	$where = "";
		$formattedValue = make_db_value("EVENT_OBJECT_TABLE",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("EVENT_OBJECT_TABLE") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("EVENT_OBJECT_TABLE") . "=" . $formattedValue;
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
	
	
	//	TRIGGER_CATALOG - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TRIGGER_CATALOG", $data, $keylink);
			$row["TRIGGER_CATALOG_value"] = $value;
			$format = $pSet->getViewFormat("TRIGGER_CATALOG");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TRIGGER_CATALOG")))
				$class = ' rnr-field-number';
			$row["TRIGGER_CATALOG_class"] = $class;
	//	TRIGGER_SCHEMA - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TRIGGER_SCHEMA", $data, $keylink);
			$row["TRIGGER_SCHEMA_value"] = $value;
			$format = $pSet->getViewFormat("TRIGGER_SCHEMA");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TRIGGER_SCHEMA")))
				$class = ' rnr-field-number';
			$row["TRIGGER_SCHEMA_class"] = $class;
	//	TRIGGER_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TRIGGER_NAME", $data, $keylink);
			$row["TRIGGER_NAME_value"] = $value;
			$format = $pSet->getViewFormat("TRIGGER_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TRIGGER_NAME")))
				$class = ' rnr-field-number';
			$row["TRIGGER_NAME_class"] = $class;
	//	EVENT_MANIPULATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVENT_MANIPULATION", $data, $keylink);
			$row["EVENT_MANIPULATION_value"] = $value;
			$format = $pSet->getViewFormat("EVENT_MANIPULATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVENT_MANIPULATION")))
				$class = ' rnr-field-number';
			$row["EVENT_MANIPULATION_class"] = $class;
	//	EVENT_OBJECT_CATALOG - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVENT_OBJECT_CATALOG", $data, $keylink);
			$row["EVENT_OBJECT_CATALOG_value"] = $value;
			$format = $pSet->getViewFormat("EVENT_OBJECT_CATALOG");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVENT_OBJECT_CATALOG")))
				$class = ' rnr-field-number';
			$row["EVENT_OBJECT_CATALOG_class"] = $class;
	//	EVENT_OBJECT_SCHEMA - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVENT_OBJECT_SCHEMA", $data, $keylink);
			$row["EVENT_OBJECT_SCHEMA_value"] = $value;
			$format = $pSet->getViewFormat("EVENT_OBJECT_SCHEMA");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVENT_OBJECT_SCHEMA")))
				$class = ' rnr-field-number';
			$row["EVENT_OBJECT_SCHEMA_class"] = $class;
	//	EVENT_OBJECT_TABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EVENT_OBJECT_TABLE", $data, $keylink);
			$row["EVENT_OBJECT_TABLE_value"] = $value;
			$format = $pSet->getViewFormat("EVENT_OBJECT_TABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EVENT_OBJECT_TABLE")))
				$class = ' rnr-field-number';
			$row["EVENT_OBJECT_TABLE_class"] = $class;
	//	ACTION_ORDER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_ORDER", $data, $keylink);
			$row["ACTION_ORDER_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_ORDER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_ORDER")))
				$class = ' rnr-field-number';
			$row["ACTION_ORDER_class"] = $class;
	//	ACTION_CONDITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_CONDITION", $data, $keylink);
			$row["ACTION_CONDITION_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_CONDITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_CONDITION")))
				$class = ' rnr-field-number';
			$row["ACTION_CONDITION_class"] = $class;
	//	ACTION_STATEMENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_STATEMENT", $data, $keylink);
			$row["ACTION_STATEMENT_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_STATEMENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_STATEMENT")))
				$class = ' rnr-field-number';
			$row["ACTION_STATEMENT_class"] = $class;
	//	ACTION_ORIENTATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_ORIENTATION", $data, $keylink);
			$row["ACTION_ORIENTATION_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_ORIENTATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_ORIENTATION")))
				$class = ' rnr-field-number';
			$row["ACTION_ORIENTATION_class"] = $class;
	//	ACTION_TIMING - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_TIMING", $data, $keylink);
			$row["ACTION_TIMING_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_TIMING");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_TIMING")))
				$class = ' rnr-field-number';
			$row["ACTION_TIMING_class"] = $class;
	//	ACTION_REFERENCE_OLD_TABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_REFERENCE_OLD_TABLE", $data, $keylink);
			$row["ACTION_REFERENCE_OLD_TABLE_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_REFERENCE_OLD_TABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_REFERENCE_OLD_TABLE")))
				$class = ' rnr-field-number';
			$row["ACTION_REFERENCE_OLD_TABLE_class"] = $class;
	//	ACTION_REFERENCE_NEW_TABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_REFERENCE_NEW_TABLE", $data, $keylink);
			$row["ACTION_REFERENCE_NEW_TABLE_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_REFERENCE_NEW_TABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_REFERENCE_NEW_TABLE")))
				$class = ' rnr-field-number';
			$row["ACTION_REFERENCE_NEW_TABLE_class"] = $class;
	//	ACTION_REFERENCE_OLD_ROW - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_REFERENCE_OLD_ROW", $data, $keylink);
			$row["ACTION_REFERENCE_OLD_ROW_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_REFERENCE_OLD_ROW");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_REFERENCE_OLD_ROW")))
				$class = ' rnr-field-number';
			$row["ACTION_REFERENCE_OLD_ROW_class"] = $class;
	//	ACTION_REFERENCE_NEW_ROW - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ACTION_REFERENCE_NEW_ROW", $data, $keylink);
			$row["ACTION_REFERENCE_NEW_ROW_value"] = $value;
			$format = $pSet->getViewFormat("ACTION_REFERENCE_NEW_ROW");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ACTION_REFERENCE_NEW_ROW")))
				$class = ' rnr-field-number';
			$row["ACTION_REFERENCE_NEW_ROW_class"] = $class;
	//	CREATED - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CREATED", $data, $keylink);
			$row["CREATED_value"] = $value;
			$format = $pSet->getViewFormat("CREATED");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CREATED")))
				$class = ' rnr-field-number';
			$row["CREATED_class"] = $class;
	//	SQL_MODE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SQL_MODE", $data, $keylink);
			$row["SQL_MODE_value"] = $value;
			$format = $pSet->getViewFormat("SQL_MODE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SQL_MODE")))
				$class = ' rnr-field-number';
			$row["SQL_MODE_class"] = $class;
	//	DEFINER - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DEFINER", $data, $keylink);
			$row["DEFINER_value"] = $value;
			$format = $pSet->getViewFormat("DEFINER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DEFINER")))
				$class = ' rnr-field-number';
			$row["DEFINER_class"] = $class;
	//	CHARACTER_SET_CLIENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHARACTER_SET_CLIENT", $data, $keylink);
			$row["CHARACTER_SET_CLIENT_value"] = $value;
			$format = $pSet->getViewFormat("CHARACTER_SET_CLIENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHARACTER_SET_CLIENT")))
				$class = ' rnr-field-number';
			$row["CHARACTER_SET_CLIENT_class"] = $class;
	//	COLLATION_CONNECTION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("COLLATION_CONNECTION", $data, $keylink);
			$row["COLLATION_CONNECTION_value"] = $value;
			$format = $pSet->getViewFormat("COLLATION_CONNECTION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("COLLATION_CONNECTION")))
				$class = ' rnr-field-number';
			$row["COLLATION_CONNECTION_class"] = $class;
	//	DATABASE_COLLATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATABASE_COLLATION", $data, $keylink);
			$row["DATABASE_COLLATION_value"] = $value;
			$format = $pSet->getViewFormat("DATABASE_COLLATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATABASE_COLLATION")))
				$class = ' rnr-field-number';
			$row["DATABASE_COLLATION_class"] = $class;
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
$xt->load_template(GetTemplateName("TRIGGERS1", "detailspreview"));
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
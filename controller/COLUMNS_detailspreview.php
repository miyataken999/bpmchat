<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/COLUMNS_variables.php");

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
		$layout->customCssPageName = "COLUMNS_detailspreview";
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
$page_layouts["COLUMNS_detailspreview"] = $layout;




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
		$formattedValue = make_db_value("TABLE_NAME",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("TABLE_NAME") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("TABLE_NAME") . "=" . $formattedValue;
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
	
	
	//	TABLE_CATALOG - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TABLE_CATALOG", $data, $keylink);
			$row["TABLE_CATALOG_value"] = $value;
			$format = $pSet->getViewFormat("TABLE_CATALOG");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TABLE_CATALOG")))
				$class = ' rnr-field-number';
			$row["TABLE_CATALOG_class"] = $class;
	//	TABLE_SCHEMA - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TABLE_SCHEMA", $data, $keylink);
			$row["TABLE_SCHEMA_value"] = $value;
			$format = $pSet->getViewFormat("TABLE_SCHEMA");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TABLE_SCHEMA")))
				$class = ' rnr-field-number';
			$row["TABLE_SCHEMA_class"] = $class;
	//	TABLE_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TABLE_NAME", $data, $keylink);
			$row["TABLE_NAME_value"] = $value;
			$format = $pSet->getViewFormat("TABLE_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TABLE_NAME")))
				$class = ' rnr-field-number';
			$row["TABLE_NAME_class"] = $class;
	//	COLUMN_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("COLUMN_NAME", $data, $keylink);
			$row["COLUMN_NAME_value"] = $value;
			$format = $pSet->getViewFormat("COLUMN_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("COLUMN_NAME")))
				$class = ' rnr-field-number';
			$row["COLUMN_NAME_class"] = $class;
	//	ORDINAL_POSITION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ORDINAL_POSITION", $data, $keylink);
			$row["ORDINAL_POSITION_value"] = $value;
			$format = $pSet->getViewFormat("ORDINAL_POSITION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ORDINAL_POSITION")))
				$class = ' rnr-field-number';
			$row["ORDINAL_POSITION_class"] = $class;
	//	COLUMN_DEFAULT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("COLUMN_DEFAULT", $data, $keylink);
			$row["COLUMN_DEFAULT_value"] = $value;
			$format = $pSet->getViewFormat("COLUMN_DEFAULT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("COLUMN_DEFAULT")))
				$class = ' rnr-field-number';
			$row["COLUMN_DEFAULT_class"] = $class;
	//	IS_NULLABLE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("IS_NULLABLE", $data, $keylink);
			$row["IS_NULLABLE_value"] = $value;
			$format = $pSet->getViewFormat("IS_NULLABLE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("IS_NULLABLE")))
				$class = ' rnr-field-number';
			$row["IS_NULLABLE_class"] = $class;
	//	DATA_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATA_TYPE", $data, $keylink);
			$row["DATA_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("DATA_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATA_TYPE")))
				$class = ' rnr-field-number';
			$row["DATA_TYPE_class"] = $class;
	//	CHARACTER_MAXIMUM_LENGTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHARACTER_MAXIMUM_LENGTH", $data, $keylink);
			$row["CHARACTER_MAXIMUM_LENGTH_value"] = $value;
			$format = $pSet->getViewFormat("CHARACTER_MAXIMUM_LENGTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHARACTER_MAXIMUM_LENGTH")))
				$class = ' rnr-field-number';
			$row["CHARACTER_MAXIMUM_LENGTH_class"] = $class;
	//	CHARACTER_OCTET_LENGTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHARACTER_OCTET_LENGTH", $data, $keylink);
			$row["CHARACTER_OCTET_LENGTH_value"] = $value;
			$format = $pSet->getViewFormat("CHARACTER_OCTET_LENGTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHARACTER_OCTET_LENGTH")))
				$class = ' rnr-field-number';
			$row["CHARACTER_OCTET_LENGTH_class"] = $class;
	//	NUMERIC_PRECISION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NUMERIC_PRECISION", $data, $keylink);
			$row["NUMERIC_PRECISION_value"] = $value;
			$format = $pSet->getViewFormat("NUMERIC_PRECISION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NUMERIC_PRECISION")))
				$class = ' rnr-field-number';
			$row["NUMERIC_PRECISION_class"] = $class;
	//	NUMERIC_SCALE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NUMERIC_SCALE", $data, $keylink);
			$row["NUMERIC_SCALE_value"] = $value;
			$format = $pSet->getViewFormat("NUMERIC_SCALE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NUMERIC_SCALE")))
				$class = ' rnr-field-number';
			$row["NUMERIC_SCALE_class"] = $class;
	//	DATETIME_PRECISION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATETIME_PRECISION", $data, $keylink);
			$row["DATETIME_PRECISION_value"] = $value;
			$format = $pSet->getViewFormat("DATETIME_PRECISION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATETIME_PRECISION")))
				$class = ' rnr-field-number';
			$row["DATETIME_PRECISION_class"] = $class;
	//	CHARACTER_SET_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHARACTER_SET_NAME", $data, $keylink);
			$row["CHARACTER_SET_NAME_value"] = $value;
			$format = $pSet->getViewFormat("CHARACTER_SET_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHARACTER_SET_NAME")))
				$class = ' rnr-field-number';
			$row["CHARACTER_SET_NAME_class"] = $class;
	//	COLLATION_NAME - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("COLLATION_NAME", $data, $keylink);
			$row["COLLATION_NAME_value"] = $value;
			$format = $pSet->getViewFormat("COLLATION_NAME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("COLLATION_NAME")))
				$class = ' rnr-field-number';
			$row["COLLATION_NAME_class"] = $class;
	//	COLUMN_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("COLUMN_TYPE", $data, $keylink);
			$row["COLUMN_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("COLUMN_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("COLUMN_TYPE")))
				$class = ' rnr-field-number';
			$row["COLUMN_TYPE_class"] = $class;
	//	COLUMN_KEY - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("COLUMN_KEY", $data, $keylink);
			$row["COLUMN_KEY_value"] = $value;
			$format = $pSet->getViewFormat("COLUMN_KEY");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("COLUMN_KEY")))
				$class = ' rnr-field-number';
			$row["COLUMN_KEY_class"] = $class;
	//	EXTRA - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EXTRA", $data, $keylink);
			$row["EXTRA_value"] = $value;
			$format = $pSet->getViewFormat("EXTRA");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EXTRA")))
				$class = ' rnr-field-number';
			$row["EXTRA_class"] = $class;
	//	PRIVILEGES - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PRIVILEGES", $data, $keylink);
			$row["PRIVILEGES_value"] = $value;
			$format = $pSet->getViewFormat("PRIVILEGES");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PRIVILEGES")))
				$class = ' rnr-field-number';
			$row["PRIVILEGES_class"] = $class;
	//	COLUMN_COMMENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("COLUMN_COMMENT", $data, $keylink);
			$row["COLUMN_COMMENT_value"] = $value;
			$format = $pSet->getViewFormat("COLUMN_COMMENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("COLUMN_COMMENT")))
				$class = ' rnr-field-number';
			$row["COLUMN_COMMENT_class"] = $class;
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
$xt->load_template(GetTemplateName("COLUMNS", "detailspreview"));
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
<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/TABLES_variables.php");

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
		$layout->customCssPageName = "TABLES_detailspreview";
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
$page_layouts["TABLES_detailspreview"] = $layout;




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

if($mastertable == "SCHEMATA")
{
	$where = "";
		$formattedValue = make_db_value("TABLE_SCHEMA",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("TABLE_SCHEMA") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("TABLE_SCHEMA") . "=" . $formattedValue;
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
	//	TABLE_TYPE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TABLE_TYPE", $data, $keylink);
			$row["TABLE_TYPE_value"] = $value;
			$format = $pSet->getViewFormat("TABLE_TYPE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TABLE_TYPE")))
				$class = ' rnr-field-number';
			$row["TABLE_TYPE_class"] = $class;
	//	ENGINE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ENGINE", $data, $keylink);
			$row["ENGINE_value"] = $value;
			$format = $pSet->getViewFormat("ENGINE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ENGINE")))
				$class = ' rnr-field-number';
			$row["ENGINE_class"] = $class;
	//	VERSION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("VERSION", $data, $keylink);
			$row["VERSION_value"] = $value;
			$format = $pSet->getViewFormat("VERSION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("VERSION")))
				$class = ' rnr-field-number';
			$row["VERSION_class"] = $class;
	//	ROW_FORMAT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ROW_FORMAT", $data, $keylink);
			$row["ROW_FORMAT_value"] = $value;
			$format = $pSet->getViewFormat("ROW_FORMAT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ROW_FORMAT")))
				$class = ' rnr-field-number';
			$row["ROW_FORMAT_class"] = $class;
	//	TABLE_ROWS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TABLE_ROWS", $data, $keylink);
			$row["TABLE_ROWS_value"] = $value;
			$format = $pSet->getViewFormat("TABLE_ROWS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TABLE_ROWS")))
				$class = ' rnr-field-number';
			$row["TABLE_ROWS_class"] = $class;
	//	AVG_ROW_LENGTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AVG_ROW_LENGTH", $data, $keylink);
			$row["AVG_ROW_LENGTH_value"] = $value;
			$format = $pSet->getViewFormat("AVG_ROW_LENGTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AVG_ROW_LENGTH")))
				$class = ' rnr-field-number';
			$row["AVG_ROW_LENGTH_class"] = $class;
	//	DATA_LENGTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATA_LENGTH", $data, $keylink);
			$row["DATA_LENGTH_value"] = $value;
			$format = $pSet->getViewFormat("DATA_LENGTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATA_LENGTH")))
				$class = ' rnr-field-number';
			$row["DATA_LENGTH_class"] = $class;
	//	MAX_DATA_LENGTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("MAX_DATA_LENGTH", $data, $keylink);
			$row["MAX_DATA_LENGTH_value"] = $value;
			$format = $pSet->getViewFormat("MAX_DATA_LENGTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("MAX_DATA_LENGTH")))
				$class = ' rnr-field-number';
			$row["MAX_DATA_LENGTH_class"] = $class;
	//	INDEX_LENGTH - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("INDEX_LENGTH", $data, $keylink);
			$row["INDEX_LENGTH_value"] = $value;
			$format = $pSet->getViewFormat("INDEX_LENGTH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("INDEX_LENGTH")))
				$class = ' rnr-field-number';
			$row["INDEX_LENGTH_class"] = $class;
	//	DATA_FREE - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DATA_FREE", $data, $keylink);
			$row["DATA_FREE_value"] = $value;
			$format = $pSet->getViewFormat("DATA_FREE");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DATA_FREE")))
				$class = ' rnr-field-number';
			$row["DATA_FREE_class"] = $class;
	//	AUTO_INCREMENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AUTO_INCREMENT", $data, $keylink);
			$row["AUTO_INCREMENT_value"] = $value;
			$format = $pSet->getViewFormat("AUTO_INCREMENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AUTO_INCREMENT")))
				$class = ' rnr-field-number';
			$row["AUTO_INCREMENT_class"] = $class;
	//	CREATE_TIME - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CREATE_TIME", $data, $keylink);
			$row["CREATE_TIME_value"] = $value;
			$format = $pSet->getViewFormat("CREATE_TIME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CREATE_TIME")))
				$class = ' rnr-field-number';
			$row["CREATE_TIME_class"] = $class;
	//	UPDATE_TIME - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UPDATE_TIME", $data, $keylink);
			$row["UPDATE_TIME_value"] = $value;
			$format = $pSet->getViewFormat("UPDATE_TIME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("UPDATE_TIME")))
				$class = ' rnr-field-number';
			$row["UPDATE_TIME_class"] = $class;
	//	CHECK_TIME - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHECK_TIME", $data, $keylink);
			$row["CHECK_TIME_value"] = $value;
			$format = $pSet->getViewFormat("CHECK_TIME");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHECK_TIME")))
				$class = ' rnr-field-number';
			$row["CHECK_TIME_class"] = $class;
	//	TABLE_COLLATION - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TABLE_COLLATION", $data, $keylink);
			$row["TABLE_COLLATION_value"] = $value;
			$format = $pSet->getViewFormat("TABLE_COLLATION");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TABLE_COLLATION")))
				$class = ' rnr-field-number';
			$row["TABLE_COLLATION_class"] = $class;
	//	CHECKSUM - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHECKSUM", $data, $keylink);
			$row["CHECKSUM_value"] = $value;
			$format = $pSet->getViewFormat("CHECKSUM");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHECKSUM")))
				$class = ' rnr-field-number';
			$row["CHECKSUM_class"] = $class;
	//	CREATE_OPTIONS - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CREATE_OPTIONS", $data, $keylink);
			$row["CREATE_OPTIONS_value"] = $value;
			$format = $pSet->getViewFormat("CREATE_OPTIONS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CREATE_OPTIONS")))
				$class = ' rnr-field-number';
			$row["CREATE_OPTIONS_class"] = $class;
	//	TABLE_COMMENT - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TABLE_COMMENT", $data, $keylink);
			$row["TABLE_COMMENT_value"] = $value;
			$format = $pSet->getViewFormat("TABLE_COMMENT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TABLE_COMMENT")))
				$class = ' rnr-field-number';
			$row["TABLE_COMMENT_class"] = $class;
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
$xt->load_template(GetTemplateName("TABLES", "detailspreview"));
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
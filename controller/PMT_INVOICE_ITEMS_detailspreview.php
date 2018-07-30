<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/PMT_INVOICE_ITEMS_variables.php");

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
		$layout->customCssPageName = "PMT_INVOICE_ITEMS_detailspreview";
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
$page_layouts["PMT_INVOICE_ITEMS_detailspreview"] = $layout;




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

if($mastertable == "PMT_INVOICE")
{
	$where = "";
		$formattedValue = make_db_value("APP_NUMBER",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("APP_NUMBER") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("APP_NUMBER") . "=" . $formattedValue;
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
	//	A - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("A", $data, $keylink);
			$row["A_value"] = $value;
			$format = $pSet->getViewFormat("A");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("A")))
				$class = ' rnr-field-number';
			$row["A_class"] = $class;
	//	B - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("B", $data, $keylink);
			$row["B_value"] = $value;
			$format = $pSet->getViewFormat("B");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("B")))
				$class = ' rnr-field-number';
			$row["B_class"] = $class;
	//	C - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("C", $data, $keylink);
			$row["C_value"] = $value;
			$format = $pSet->getViewFormat("C");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("C")))
				$class = ' rnr-field-number';
			$row["C_class"] = $class;
	//	D - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("D", $data, $keylink);
			$row["D_value"] = $value;
			$format = $pSet->getViewFormat("D");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("D")))
				$class = ' rnr-field-number';
			$row["D_class"] = $class;
	//	E - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("E", $data, $keylink);
			$row["E_value"] = $value;
			$format = $pSet->getViewFormat("E");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("E")))
				$class = ' rnr-field-number';
			$row["E_class"] = $class;
	//	F - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("F", $data, $keylink);
			$row["F_value"] = $value;
			$format = $pSet->getViewFormat("F");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("F")))
				$class = ' rnr-field-number';
			$row["F_class"] = $class;
	//	G - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("G", $data, $keylink);
			$row["G_value"] = $value;
			$format = $pSet->getViewFormat("G");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("G")))
				$class = ' rnr-field-number';
			$row["G_class"] = $class;
	//	H - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("H", $data, $keylink);
			$row["H_value"] = $value;
			$format = $pSet->getViewFormat("H");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("H")))
				$class = ' rnr-field-number';
			$row["H_class"] = $class;
	//	I - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("I", $data, $keylink);
			$row["I_value"] = $value;
			$format = $pSet->getViewFormat("I");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("I")))
				$class = ' rnr-field-number';
			$row["I_class"] = $class;
	//	J - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("J", $data, $keylink);
			$row["J_value"] = $value;
			$format = $pSet->getViewFormat("J");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("J")))
				$class = ' rnr-field-number';
			$row["J_class"] = $class;
	//	K - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("K", $data, $keylink);
			$row["K_value"] = $value;
			$format = $pSet->getViewFormat("K");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("K")))
				$class = ' rnr-field-number';
			$row["K_class"] = $class;
	//	L - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("L", $data, $keylink);
			$row["L_value"] = $value;
			$format = $pSet->getViewFormat("L");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("L")))
				$class = ' rnr-field-number';
			$row["L_class"] = $class;
	//	M - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("M", $data, $keylink);
			$row["M_value"] = $value;
			$format = $pSet->getViewFormat("M");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("M")))
				$class = ' rnr-field-number';
			$row["M_class"] = $class;
	//	N - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("N", $data, $keylink);
			$row["N_value"] = $value;
			$format = $pSet->getViewFormat("N");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("N")))
				$class = ' rnr-field-number';
			$row["N_class"] = $class;
	//	O - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("O", $data, $keylink);
			$row["O_value"] = $value;
			$format = $pSet->getViewFormat("O");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("O")))
				$class = ' rnr-field-number';
			$row["O_class"] = $class;
	//	P - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("P", $data, $keylink);
			$row["P_value"] = $value;
			$format = $pSet->getViewFormat("P");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("P")))
				$class = ' rnr-field-number';
			$row["P_class"] = $class;
	//	Q - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Q", $data, $keylink);
			$row["Q_value"] = $value;
			$format = $pSet->getViewFormat("Q");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Q")))
				$class = ' rnr-field-number';
			$row["Q_class"] = $class;
	//	R - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("R", $data, $keylink);
			$row["R_value"] = $value;
			$format = $pSet->getViewFormat("R");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("R")))
				$class = ' rnr-field-number';
			$row["R_class"] = $class;
	//	S - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("S", $data, $keylink);
			$row["S_value"] = $value;
			$format = $pSet->getViewFormat("S");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("S")))
				$class = ' rnr-field-number';
			$row["S_class"] = $class;
	//	T - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("T", $data, $keylink);
			$row["T_value"] = $value;
			$format = $pSet->getViewFormat("T");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("T")))
				$class = ' rnr-field-number';
			$row["T_class"] = $class;
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
$xt->load_template(GetTemplateName("PMT_INVOICE_ITEMS", "detailspreview"));
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
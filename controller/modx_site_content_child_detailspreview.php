<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/modx_site_content_child_variables.php");

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
		$layout->customCssPageName = "modx_site_content_child_detailspreview";
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
$page_layouts["modx_site_content_child_detailspreview"] = $layout;




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

if($mastertable == "modx_site_content")
{
	$where = "";
		$formattedValue = make_db_value("parent",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("parent") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("parent") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	
	//	id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id", $data, $keylink);
			$row["id_value"] = $value;
			$format = $pSet->getViewFormat("id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id")))
				$class = ' rnr-field-number';
			$row["id_class"] = $class;
	//	url - HTML
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("url", $data, $keylink);
			$row["url_value"] = $value;
			$format = $pSet->getViewFormat("url");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("url")))
				$class = ' rnr-field-number';
			$row["url_class"] = $class;
	//	link - Hyperlink
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("link", $data, $keylink);
			$row["link_value"] = $value;
			$format = $pSet->getViewFormat("link");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("link")))
				$class = ' rnr-field-number';
			$row["link_class"] = $class;
	//	type - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("type", $data, $keylink);
			$row["type_value"] = $value;
			$format = $pSet->getViewFormat("type");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("type")))
				$class = ' rnr-field-number';
			$row["type_class"] = $class;
	//	contentType - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("contentType", $data, $keylink);
			$row["contentType_value"] = $value;
			$format = $pSet->getViewFormat("contentType");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("contentType")))
				$class = ' rnr-field-number';
			$row["contentType_class"] = $class;
	//	pagetitle - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pagetitle", $data, $keylink);
			$row["pagetitle_value"] = $value;
			$format = $pSet->getViewFormat("pagetitle");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pagetitle")))
				$class = ' rnr-field-number';
			$row["pagetitle_class"] = $class;
	//	longtitle - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("longtitle", $data, $keylink);
			$row["longtitle_value"] = $value;
			$format = $pSet->getViewFormat("longtitle");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("longtitle")))
				$class = ' rnr-field-number';
			$row["longtitle_class"] = $class;
	//	description - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("description", $data, $keylink);
			$row["description_value"] = $value;
			$format = $pSet->getViewFormat("description");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("description")))
				$class = ' rnr-field-number';
			$row["description_class"] = $class;
	//	alias - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("alias", $data, $keylink);
			$row["alias_value"] = $value;
			$format = $pSet->getViewFormat("alias");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("alias")))
				$class = ' rnr-field-number';
			$row["alias_class"] = $class;
	//	link_attributes - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("link_attributes", $data, $keylink);
			$row["link_attributes_value"] = $value;
			$format = $pSet->getViewFormat("link_attributes");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("link_attributes")))
				$class = ' rnr-field-number';
			$row["link_attributes_class"] = $class;
	//	published - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("published", $data, $keylink);
			$row["published_value"] = $value;
			$format = $pSet->getViewFormat("published");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("published")))
				$class = ' rnr-field-number';
			$row["published_class"] = $class;
	//	pub_date - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pub_date", $data, $keylink);
			$row["pub_date_value"] = $value;
			$format = $pSet->getViewFormat("pub_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pub_date")))
				$class = ' rnr-field-number';
			$row["pub_date_class"] = $class;
	//	unpub_date - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("unpub_date", $data, $keylink);
			$row["unpub_date_value"] = $value;
			$format = $pSet->getViewFormat("unpub_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("unpub_date")))
				$class = ' rnr-field-number';
			$row["unpub_date_class"] = $class;
	//	parent - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("parent", $data, $keylink);
			$row["parent_value"] = $value;
			$format = $pSet->getViewFormat("parent");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("parent")))
				$class = ' rnr-field-number';
			$row["parent_class"] = $class;
	//	isfolder - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("isfolder", $data, $keylink);
			$row["isfolder_value"] = $value;
			$format = $pSet->getViewFormat("isfolder");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("isfolder")))
				$class = ' rnr-field-number';
			$row["isfolder_class"] = $class;
	//	introtext - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("introtext", $data, $keylink);
			$row["introtext_value"] = $value;
			$format = $pSet->getViewFormat("introtext");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("introtext")))
				$class = ' rnr-field-number';
			$row["introtext_class"] = $class;
	//	content - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("content", $data, $keylink);
			$row["content_value"] = $value;
			$format = $pSet->getViewFormat("content");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("content")))
				$class = ' rnr-field-number';
			$row["content_class"] = $class;
	//	richtext - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("richtext", $data, $keylink);
			$row["richtext_value"] = $value;
			$format = $pSet->getViewFormat("richtext");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("richtext")))
				$class = ' rnr-field-number';
			$row["richtext_class"] = $class;
	//	template - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("template", $data, $keylink);
			$row["template_value"] = $value;
			$format = $pSet->getViewFormat("template");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("template")))
				$class = ' rnr-field-number';
			$row["template_class"] = $class;
	//	menuindex - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("menuindex", $data, $keylink);
			$row["menuindex_value"] = $value;
			$format = $pSet->getViewFormat("menuindex");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("menuindex")))
				$class = ' rnr-field-number';
			$row["menuindex_class"] = $class;
	//	searchable - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("searchable", $data, $keylink);
			$row["searchable_value"] = $value;
			$format = $pSet->getViewFormat("searchable");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("searchable")))
				$class = ' rnr-field-number';
			$row["searchable_class"] = $class;
	//	cacheable - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cacheable", $data, $keylink);
			$row["cacheable_value"] = $value;
			$format = $pSet->getViewFormat("cacheable");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("cacheable")))
				$class = ' rnr-field-number';
			$row["cacheable_class"] = $class;
	//	createdby - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("createdby", $data, $keylink);
			$row["createdby_value"] = $value;
			$format = $pSet->getViewFormat("createdby");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("createdby")))
				$class = ' rnr-field-number';
			$row["createdby_class"] = $class;
	//	createdon - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("createdon", $data, $keylink);
			$row["createdon_value"] = $value;
			$format = $pSet->getViewFormat("createdon");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("createdon")))
				$class = ' rnr-field-number';
			$row["createdon_class"] = $class;
	//	editedby - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("editedby", $data, $keylink);
			$row["editedby_value"] = $value;
			$format = $pSet->getViewFormat("editedby");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("editedby")))
				$class = ' rnr-field-number';
			$row["editedby_class"] = $class;
	//	editedon - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("editedon", $data, $keylink);
			$row["editedon_value"] = $value;
			$format = $pSet->getViewFormat("editedon");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("editedon")))
				$class = ' rnr-field-number';
			$row["editedon_class"] = $class;
	//	deleted - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("deleted", $data, $keylink);
			$row["deleted_value"] = $value;
			$format = $pSet->getViewFormat("deleted");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("deleted")))
				$class = ' rnr-field-number';
			$row["deleted_class"] = $class;
	//	deletedon - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("deletedon", $data, $keylink);
			$row["deletedon_value"] = $value;
			$format = $pSet->getViewFormat("deletedon");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("deletedon")))
				$class = ' rnr-field-number';
			$row["deletedon_class"] = $class;
	//	deletedby - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("deletedby", $data, $keylink);
			$row["deletedby_value"] = $value;
			$format = $pSet->getViewFormat("deletedby");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("deletedby")))
				$class = ' rnr-field-number';
			$row["deletedby_class"] = $class;
	//	publishedon - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("publishedon", $data, $keylink);
			$row["publishedon_value"] = $value;
			$format = $pSet->getViewFormat("publishedon");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("publishedon")))
				$class = ' rnr-field-number';
			$row["publishedon_class"] = $class;
	//	publishedby - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("publishedby", $data, $keylink);
			$row["publishedby_value"] = $value;
			$format = $pSet->getViewFormat("publishedby");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("publishedby")))
				$class = ' rnr-field-number';
			$row["publishedby_class"] = $class;
	//	menutitle - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("menutitle", $data, $keylink);
			$row["menutitle_value"] = $value;
			$format = $pSet->getViewFormat("menutitle");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("menutitle")))
				$class = ' rnr-field-number';
			$row["menutitle_class"] = $class;
	//	donthit - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("donthit", $data, $keylink);
			$row["donthit_value"] = $value;
			$format = $pSet->getViewFormat("donthit");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("donthit")))
				$class = ' rnr-field-number';
			$row["donthit_class"] = $class;
	//	haskeywords - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("haskeywords", $data, $keylink);
			$row["haskeywords_value"] = $value;
			$format = $pSet->getViewFormat("haskeywords");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("haskeywords")))
				$class = ' rnr-field-number';
			$row["haskeywords_class"] = $class;
	//	hasmetatags - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("hasmetatags", $data, $keylink);
			$row["hasmetatags_value"] = $value;
			$format = $pSet->getViewFormat("hasmetatags");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("hasmetatags")))
				$class = ' rnr-field-number';
			$row["hasmetatags_class"] = $class;
	//	privateweb - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("privateweb", $data, $keylink);
			$row["privateweb_value"] = $value;
			$format = $pSet->getViewFormat("privateweb");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("privateweb")))
				$class = ' rnr-field-number';
			$row["privateweb_class"] = $class;
	//	privatemgr - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("privatemgr", $data, $keylink);
			$row["privatemgr_value"] = $value;
			$format = $pSet->getViewFormat("privatemgr");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("privatemgr")))
				$class = ' rnr-field-number';
			$row["privatemgr_class"] = $class;
	//	content_dispo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("content_dispo", $data, $keylink);
			$row["content_dispo_value"] = $value;
			$format = $pSet->getViewFormat("content_dispo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("content_dispo")))
				$class = ' rnr-field-number';
			$row["content_dispo_class"] = $class;
	//	hidemenu - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("hidemenu", $data, $keylink);
			$row["hidemenu_value"] = $value;
			$format = $pSet->getViewFormat("hidemenu");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("hidemenu")))
				$class = ' rnr-field-number';
			$row["hidemenu_class"] = $class;
	//	alias_visible - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("alias_visible", $data, $keylink);
			$row["alias_visible_value"] = $value;
			$format = $pSet->getViewFormat("alias_visible");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("alias_visible")))
				$class = ' rnr-field-number';
			$row["alias_visible_class"] = $class;
	//	modex_site_htmlsnippet_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("modex_site_htmlsnippet_id", $data, $keylink);
			$row["modex_site_htmlsnippet_id_value"] = $value;
			$format = $pSet->getViewFormat("modex_site_htmlsnippet_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("modex_site_htmlsnippet_id")))
				$class = ' rnr-field-number';
			$row["modex_site_htmlsnippet_id_class"] = $class;
	//	modx_site_snippet_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("modx_site_snippet_id", $data, $keylink);
			$row["modx_site_snippet_id_value"] = $value;
			$format = $pSet->getViewFormat("modx_site_snippet_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("modx_site_snippet_id")))
				$class = ' rnr-field-number';
			$row["modx_site_snippet_id_class"] = $class;
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
$xt->load_template(GetTemplateName("modx_site_content_child", "detailspreview"));
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
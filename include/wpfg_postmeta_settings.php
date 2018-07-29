<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_postmeta = array();
	$tdatawpfg_postmeta[".truncateText"] = true;
	$tdatawpfg_postmeta[".NumberOfChars"] = 80;
	$tdatawpfg_postmeta[".ShortName"] = "wpfg_postmeta";
	$tdatawpfg_postmeta[".OwnerID"] = "";
	$tdatawpfg_postmeta[".OriginalTable"] = "wpfg_postmeta";

//	field labels
$fieldLabelswpfg_postmeta = array();
$fieldToolTipswpfg_postmeta = array();
$pageTitleswpfg_postmeta = array();
$placeHolderswpfg_postmeta = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_postmeta["Japanese"] = array();
	$fieldToolTipswpfg_postmeta["Japanese"] = array();
	$placeHolderswpfg_postmeta["Japanese"] = array();
	$pageTitleswpfg_postmeta["Japanese"] = array();
	$fieldLabelswpfg_postmeta["Japanese"]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_postmeta["Japanese"]["meta_id"] = "";
	$placeHolderswpfg_postmeta["Japanese"]["meta_id"] = "";
	$fieldLabelswpfg_postmeta["Japanese"]["post_id"] = "Post Id";
	$fieldToolTipswpfg_postmeta["Japanese"]["post_id"] = "";
	$placeHolderswpfg_postmeta["Japanese"]["post_id"] = "";
	$fieldLabelswpfg_postmeta["Japanese"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_postmeta["Japanese"]["meta_key"] = "";
	$placeHolderswpfg_postmeta["Japanese"]["meta_key"] = "";
	$fieldLabelswpfg_postmeta["Japanese"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_postmeta["Japanese"]["meta_value"] = "";
	$placeHolderswpfg_postmeta["Japanese"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_postmeta["Japanese"]))
		$tdatawpfg_postmeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_postmeta["English"] = array();
	$fieldToolTipswpfg_postmeta["English"] = array();
	$placeHolderswpfg_postmeta["English"] = array();
	$pageTitleswpfg_postmeta["English"] = array();
	$fieldLabelswpfg_postmeta["English"]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_postmeta["English"]["meta_id"] = "";
	$placeHolderswpfg_postmeta["English"]["meta_id"] = "";
	$fieldLabelswpfg_postmeta["English"]["post_id"] = "Post Id";
	$fieldToolTipswpfg_postmeta["English"]["post_id"] = "";
	$placeHolderswpfg_postmeta["English"]["post_id"] = "";
	$fieldLabelswpfg_postmeta["English"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_postmeta["English"]["meta_key"] = "";
	$placeHolderswpfg_postmeta["English"]["meta_key"] = "";
	$fieldLabelswpfg_postmeta["English"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_postmeta["English"]["meta_value"] = "";
	$placeHolderswpfg_postmeta["English"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_postmeta["English"]))
		$tdatawpfg_postmeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_postmeta[""] = array();
	$fieldToolTipswpfg_postmeta[""] = array();
	$placeHolderswpfg_postmeta[""] = array();
	$pageTitleswpfg_postmeta[""] = array();
	$fieldLabelswpfg_postmeta[""]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_postmeta[""]["meta_id"] = "";
	$placeHolderswpfg_postmeta[""]["meta_id"] = "";
	$fieldLabelswpfg_postmeta[""]["post_id"] = "Post Id";
	$fieldToolTipswpfg_postmeta[""]["post_id"] = "";
	$placeHolderswpfg_postmeta[""]["post_id"] = "";
	$fieldLabelswpfg_postmeta[""]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_postmeta[""]["meta_key"] = "";
	$placeHolderswpfg_postmeta[""]["meta_key"] = "";
	$fieldLabelswpfg_postmeta[""]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_postmeta[""]["meta_value"] = "";
	$placeHolderswpfg_postmeta[""]["meta_value"] = "";
	if (count($fieldToolTipswpfg_postmeta[""]))
		$tdatawpfg_postmeta[".isUseToolTips"] = true;
}


	$tdatawpfg_postmeta[".NCSearch"] = true;



$tdatawpfg_postmeta[".shortTableName"] = "wpfg_postmeta";
$tdatawpfg_postmeta[".nSecOptions"] = 0;
$tdatawpfg_postmeta[".recsPerRowPrint"] = 1;
$tdatawpfg_postmeta[".mainTableOwnerID"] = "";
$tdatawpfg_postmeta[".moveNext"] = 1;
$tdatawpfg_postmeta[".entityType"] = 0;

$tdatawpfg_postmeta[".strOriginalTableName"] = "wpfg_postmeta";

	



$tdatawpfg_postmeta[".showAddInPopup"] = false;

$tdatawpfg_postmeta[".showEditInPopup"] = false;

$tdatawpfg_postmeta[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_postmeta[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_postmeta[".fieldsForRegister"] = array();
	
$tdatawpfg_postmeta[".listAjax"] = false;

	$tdatawpfg_postmeta[".audit"] = false;

	$tdatawpfg_postmeta[".locking"] = false;

$tdatawpfg_postmeta[".edit"] = true;
$tdatawpfg_postmeta[".afterEditAction"] = 1;
$tdatawpfg_postmeta[".closePopupAfterEdit"] = 1;
$tdatawpfg_postmeta[".afterEditActionDetTable"] = "";

$tdatawpfg_postmeta[".add"] = true;
$tdatawpfg_postmeta[".afterAddAction"] = 1;
$tdatawpfg_postmeta[".closePopupAfterAdd"] = 1;
$tdatawpfg_postmeta[".afterAddActionDetTable"] = "";

$tdatawpfg_postmeta[".list"] = true;



$tdatawpfg_postmeta[".reorderRecordsByHeader"] = true;



$tdatawpfg_postmeta[".view"] = true;

$tdatawpfg_postmeta[".import"] = true;

$tdatawpfg_postmeta[".exportTo"] = true;

$tdatawpfg_postmeta[".printFriendly"] = true;

$tdatawpfg_postmeta[".delete"] = true;

$tdatawpfg_postmeta[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_postmeta[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_postmeta[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_postmeta[".searchSaving"] = false;
//

$tdatawpfg_postmeta[".showSearchPanel"] = true;
		$tdatawpfg_postmeta[".flexibleSearch"] = true;

$tdatawpfg_postmeta[".isUseAjaxSuggest"] = true;

$tdatawpfg_postmeta[".rowHighlite"] = true;



				

$tdatawpfg_postmeta[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_postmeta[".buttonsAdded"] = false;

$tdatawpfg_postmeta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_postmeta[".isUseTimeForSearch"] = false;





$tdatawpfg_postmeta[".allSearchFields"] = array();
$tdatawpfg_postmeta[".filterFields"] = array();
$tdatawpfg_postmeta[".requiredSearchFields"] = array();

$tdatawpfg_postmeta[".allSearchFields"][] = "meta_id";
	$tdatawpfg_postmeta[".allSearchFields"][] = "post_id";
	$tdatawpfg_postmeta[".allSearchFields"][] = "meta_key";
	$tdatawpfg_postmeta[".allSearchFields"][] = "meta_value";
	

$tdatawpfg_postmeta[".googleLikeFields"] = array();
$tdatawpfg_postmeta[".googleLikeFields"][] = "meta_id";
$tdatawpfg_postmeta[".googleLikeFields"][] = "post_id";
$tdatawpfg_postmeta[".googleLikeFields"][] = "meta_key";
$tdatawpfg_postmeta[".googleLikeFields"][] = "meta_value";


$tdatawpfg_postmeta[".advSearchFields"] = array();
$tdatawpfg_postmeta[".advSearchFields"][] = "meta_id";
$tdatawpfg_postmeta[".advSearchFields"][] = "post_id";
$tdatawpfg_postmeta[".advSearchFields"][] = "meta_key";
$tdatawpfg_postmeta[".advSearchFields"][] = "meta_value";

$tdatawpfg_postmeta[".tableType"] = "list";

$tdatawpfg_postmeta[".printerPageOrientation"] = 0;
$tdatawpfg_postmeta[".nPrinterPageScale"] = 100;

$tdatawpfg_postmeta[".nPrinterSplitRecords"] = 40;

$tdatawpfg_postmeta[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_postmeta[".geocodingEnabled"] = false;





$tdatawpfg_postmeta[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_postmeta[".pageSize"] = 20;

$tdatawpfg_postmeta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_postmeta[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_postmeta[".orderindexes"] = array();

$tdatawpfg_postmeta[".sqlHead"] = "SELECT meta_id,  	post_id,  	meta_key,  	meta_value";
$tdatawpfg_postmeta[".sqlFrom"] = "FROM wpfg_postmeta";
$tdatawpfg_postmeta[".sqlWhereExpr"] = "";
$tdatawpfg_postmeta[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_postmeta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_postmeta[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_postmeta[".highlightSearchResults"] = true;

$tableKeyswpfg_postmeta = array();
$tableKeyswpfg_postmeta[] = "meta_id";
$tdatawpfg_postmeta[".Keys"] = $tableKeyswpfg_postmeta;

$tdatawpfg_postmeta[".listFields"] = array();
$tdatawpfg_postmeta[".listFields"][] = "meta_id";
$tdatawpfg_postmeta[".listFields"][] = "post_id";
$tdatawpfg_postmeta[".listFields"][] = "meta_key";
$tdatawpfg_postmeta[".listFields"][] = "meta_value";

$tdatawpfg_postmeta[".hideMobileList"] = array();


$tdatawpfg_postmeta[".viewFields"] = array();
$tdatawpfg_postmeta[".viewFields"][] = "meta_id";
$tdatawpfg_postmeta[".viewFields"][] = "post_id";
$tdatawpfg_postmeta[".viewFields"][] = "meta_key";
$tdatawpfg_postmeta[".viewFields"][] = "meta_value";

$tdatawpfg_postmeta[".addFields"] = array();
$tdatawpfg_postmeta[".addFields"][] = "post_id";
$tdatawpfg_postmeta[".addFields"][] = "meta_key";
$tdatawpfg_postmeta[".addFields"][] = "meta_value";

$tdatawpfg_postmeta[".masterListFields"] = array();
$tdatawpfg_postmeta[".masterListFields"][] = "meta_id";
$tdatawpfg_postmeta[".masterListFields"][] = "post_id";
$tdatawpfg_postmeta[".masterListFields"][] = "meta_key";
$tdatawpfg_postmeta[".masterListFields"][] = "meta_value";

$tdatawpfg_postmeta[".inlineAddFields"] = array();
$tdatawpfg_postmeta[".inlineAddFields"][] = "post_id";
$tdatawpfg_postmeta[".inlineAddFields"][] = "meta_key";
$tdatawpfg_postmeta[".inlineAddFields"][] = "meta_value";

$tdatawpfg_postmeta[".editFields"] = array();
$tdatawpfg_postmeta[".editFields"][] = "post_id";
$tdatawpfg_postmeta[".editFields"][] = "meta_key";
$tdatawpfg_postmeta[".editFields"][] = "meta_value";

$tdatawpfg_postmeta[".inlineEditFields"] = array();
$tdatawpfg_postmeta[".inlineEditFields"][] = "post_id";
$tdatawpfg_postmeta[".inlineEditFields"][] = "meta_key";
$tdatawpfg_postmeta[".inlineEditFields"][] = "meta_value";

$tdatawpfg_postmeta[".updateSelectedFields"] = array();
$tdatawpfg_postmeta[".updateSelectedFields"][] = "post_id";
$tdatawpfg_postmeta[".updateSelectedFields"][] = "meta_key";
$tdatawpfg_postmeta[".updateSelectedFields"][] = "meta_value";


$tdatawpfg_postmeta[".exportFields"] = array();
$tdatawpfg_postmeta[".exportFields"][] = "meta_id";
$tdatawpfg_postmeta[".exportFields"][] = "post_id";
$tdatawpfg_postmeta[".exportFields"][] = "meta_key";
$tdatawpfg_postmeta[".exportFields"][] = "meta_value";

$tdatawpfg_postmeta[".importFields"] = array();
$tdatawpfg_postmeta[".importFields"][] = "meta_id";
$tdatawpfg_postmeta[".importFields"][] = "post_id";
$tdatawpfg_postmeta[".importFields"][] = "meta_key";
$tdatawpfg_postmeta[".importFields"][] = "meta_value";

$tdatawpfg_postmeta[".printFields"] = array();
$tdatawpfg_postmeta[".printFields"][] = "meta_id";
$tdatawpfg_postmeta[".printFields"][] = "post_id";
$tdatawpfg_postmeta[".printFields"][] = "meta_key";
$tdatawpfg_postmeta[".printFields"][] = "meta_value";

//	meta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "meta_id";
	$fdata["GoodName"] = "meta_id";
	$fdata["ownerTable"] = "wpfg_postmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_postmeta","meta_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meta_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meta_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatawpfg_postmeta["meta_id"] = $fdata;
//	post_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "post_id";
	$fdata["GoodName"] = "post_id";
	$fdata["ownerTable"] = "wpfg_postmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_postmeta","post_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "post_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatawpfg_postmeta["post_id"] = $fdata;
//	meta_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "meta_key";
	$fdata["GoodName"] = "meta_key";
	$fdata["ownerTable"] = "wpfg_postmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_postmeta","meta_key");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meta_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meta_key";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatawpfg_postmeta["meta_key"] = $fdata;
//	meta_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "meta_value";
	$fdata["GoodName"] = "meta_value";
	$fdata["ownerTable"] = "wpfg_postmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_postmeta","meta_value");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meta_value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meta_value";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatawpfg_postmeta["meta_value"] = $fdata;


$tables_data["wpfg_postmeta"]=&$tdatawpfg_postmeta;
$field_labels["wpfg_postmeta"] = &$fieldLabelswpfg_postmeta;
$fieldToolTips["wpfg_postmeta"] = &$fieldToolTipswpfg_postmeta;
$placeHolders["wpfg_postmeta"] = &$placeHolderswpfg_postmeta;
$page_titles["wpfg_postmeta"] = &$pageTitleswpfg_postmeta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_postmeta"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_postmeta"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_postmeta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "meta_id,  	post_id,  	meta_key,  	meta_value";
$proto0["m_strFrom"] = "FROM wpfg_postmeta";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_id",
	"m_strTable" => "wpfg_postmeta",
	"m_srcTableName" => "wpfg_postmeta"
));

$proto6["m_sql"] = "meta_id";
$proto6["m_srcTableName"] = "wpfg_postmeta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "post_id",
	"m_strTable" => "wpfg_postmeta",
	"m_srcTableName" => "wpfg_postmeta"
));

$proto8["m_sql"] = "post_id";
$proto8["m_srcTableName"] = "wpfg_postmeta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_key",
	"m_strTable" => "wpfg_postmeta",
	"m_srcTableName" => "wpfg_postmeta"
));

$proto10["m_sql"] = "meta_key";
$proto10["m_srcTableName"] = "wpfg_postmeta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_value",
	"m_strTable" => "wpfg_postmeta",
	"m_srcTableName" => "wpfg_postmeta"
));

$proto12["m_sql"] = "meta_value";
$proto12["m_srcTableName"] = "wpfg_postmeta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "wpfg_postmeta";
$proto15["m_srcTableName"] = "wpfg_postmeta";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "meta_id";
$proto15["m_columns"][] = "post_id";
$proto15["m_columns"][] = "meta_key";
$proto15["m_columns"][] = "meta_value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "wpfg_postmeta";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "wpfg_postmeta";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="wpfg_postmeta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_postmeta = createSqlQuery_wpfg_postmeta();


	
						;

				

$tdatawpfg_postmeta[".sqlquery"] = $queryData_wpfg_postmeta;

$tableEvents["wpfg_postmeta"] = new eventsBase;
$tdatawpfg_postmeta[".hasEvents"] = false;

?>
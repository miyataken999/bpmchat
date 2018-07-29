<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_termmeta = array();
	$tdatawpfg_termmeta[".truncateText"] = true;
	$tdatawpfg_termmeta[".NumberOfChars"] = 80;
	$tdatawpfg_termmeta[".ShortName"] = "wpfg_termmeta";
	$tdatawpfg_termmeta[".OwnerID"] = "";
	$tdatawpfg_termmeta[".OriginalTable"] = "wpfg_termmeta";

//	field labels
$fieldLabelswpfg_termmeta = array();
$fieldToolTipswpfg_termmeta = array();
$pageTitleswpfg_termmeta = array();
$placeHolderswpfg_termmeta = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_termmeta["Japanese"] = array();
	$fieldToolTipswpfg_termmeta["Japanese"] = array();
	$placeHolderswpfg_termmeta["Japanese"] = array();
	$pageTitleswpfg_termmeta["Japanese"] = array();
	$fieldLabelswpfg_termmeta["Japanese"]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_termmeta["Japanese"]["meta_id"] = "";
	$placeHolderswpfg_termmeta["Japanese"]["meta_id"] = "";
	$fieldLabelswpfg_termmeta["Japanese"]["term_id"] = "Term Id";
	$fieldToolTipswpfg_termmeta["Japanese"]["term_id"] = "";
	$placeHolderswpfg_termmeta["Japanese"]["term_id"] = "";
	$fieldLabelswpfg_termmeta["Japanese"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_termmeta["Japanese"]["meta_key"] = "";
	$placeHolderswpfg_termmeta["Japanese"]["meta_key"] = "";
	$fieldLabelswpfg_termmeta["Japanese"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_termmeta["Japanese"]["meta_value"] = "";
	$placeHolderswpfg_termmeta["Japanese"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_termmeta["Japanese"]))
		$tdatawpfg_termmeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_termmeta["English"] = array();
	$fieldToolTipswpfg_termmeta["English"] = array();
	$placeHolderswpfg_termmeta["English"] = array();
	$pageTitleswpfg_termmeta["English"] = array();
	$fieldLabelswpfg_termmeta["English"]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_termmeta["English"]["meta_id"] = "";
	$placeHolderswpfg_termmeta["English"]["meta_id"] = "";
	$fieldLabelswpfg_termmeta["English"]["term_id"] = "Term Id";
	$fieldToolTipswpfg_termmeta["English"]["term_id"] = "";
	$placeHolderswpfg_termmeta["English"]["term_id"] = "";
	$fieldLabelswpfg_termmeta["English"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_termmeta["English"]["meta_key"] = "";
	$placeHolderswpfg_termmeta["English"]["meta_key"] = "";
	$fieldLabelswpfg_termmeta["English"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_termmeta["English"]["meta_value"] = "";
	$placeHolderswpfg_termmeta["English"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_termmeta["English"]))
		$tdatawpfg_termmeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_termmeta[""] = array();
	$fieldToolTipswpfg_termmeta[""] = array();
	$placeHolderswpfg_termmeta[""] = array();
	$pageTitleswpfg_termmeta[""] = array();
	$fieldLabelswpfg_termmeta[""]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_termmeta[""]["meta_id"] = "";
	$placeHolderswpfg_termmeta[""]["meta_id"] = "";
	$fieldLabelswpfg_termmeta[""]["term_id"] = "Term Id";
	$fieldToolTipswpfg_termmeta[""]["term_id"] = "";
	$placeHolderswpfg_termmeta[""]["term_id"] = "";
	$fieldLabelswpfg_termmeta[""]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_termmeta[""]["meta_key"] = "";
	$placeHolderswpfg_termmeta[""]["meta_key"] = "";
	$fieldLabelswpfg_termmeta[""]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_termmeta[""]["meta_value"] = "";
	$placeHolderswpfg_termmeta[""]["meta_value"] = "";
	if (count($fieldToolTipswpfg_termmeta[""]))
		$tdatawpfg_termmeta[".isUseToolTips"] = true;
}


	$tdatawpfg_termmeta[".NCSearch"] = true;



$tdatawpfg_termmeta[".shortTableName"] = "wpfg_termmeta";
$tdatawpfg_termmeta[".nSecOptions"] = 0;
$tdatawpfg_termmeta[".recsPerRowPrint"] = 1;
$tdatawpfg_termmeta[".mainTableOwnerID"] = "";
$tdatawpfg_termmeta[".moveNext"] = 1;
$tdatawpfg_termmeta[".entityType"] = 0;

$tdatawpfg_termmeta[".strOriginalTableName"] = "wpfg_termmeta";

	



$tdatawpfg_termmeta[".showAddInPopup"] = false;

$tdatawpfg_termmeta[".showEditInPopup"] = false;

$tdatawpfg_termmeta[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_termmeta[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_termmeta[".fieldsForRegister"] = array();
	
$tdatawpfg_termmeta[".listAjax"] = false;

	$tdatawpfg_termmeta[".audit"] = false;

	$tdatawpfg_termmeta[".locking"] = false;

$tdatawpfg_termmeta[".edit"] = true;
$tdatawpfg_termmeta[".afterEditAction"] = 1;
$tdatawpfg_termmeta[".closePopupAfterEdit"] = 1;
$tdatawpfg_termmeta[".afterEditActionDetTable"] = "";

$tdatawpfg_termmeta[".add"] = true;
$tdatawpfg_termmeta[".afterAddAction"] = 1;
$tdatawpfg_termmeta[".closePopupAfterAdd"] = 1;
$tdatawpfg_termmeta[".afterAddActionDetTable"] = "";

$tdatawpfg_termmeta[".list"] = true;



$tdatawpfg_termmeta[".reorderRecordsByHeader"] = true;



$tdatawpfg_termmeta[".view"] = true;

$tdatawpfg_termmeta[".import"] = true;

$tdatawpfg_termmeta[".exportTo"] = true;

$tdatawpfg_termmeta[".printFriendly"] = true;

$tdatawpfg_termmeta[".delete"] = true;

$tdatawpfg_termmeta[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_termmeta[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_termmeta[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_termmeta[".searchSaving"] = false;
//

$tdatawpfg_termmeta[".showSearchPanel"] = true;
		$tdatawpfg_termmeta[".flexibleSearch"] = true;

$tdatawpfg_termmeta[".isUseAjaxSuggest"] = true;

$tdatawpfg_termmeta[".rowHighlite"] = true;



				

$tdatawpfg_termmeta[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_termmeta[".buttonsAdded"] = false;

$tdatawpfg_termmeta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_termmeta[".isUseTimeForSearch"] = false;





$tdatawpfg_termmeta[".allSearchFields"] = array();
$tdatawpfg_termmeta[".filterFields"] = array();
$tdatawpfg_termmeta[".requiredSearchFields"] = array();

$tdatawpfg_termmeta[".allSearchFields"][] = "meta_id";
	$tdatawpfg_termmeta[".allSearchFields"][] = "term_id";
	$tdatawpfg_termmeta[".allSearchFields"][] = "meta_key";
	$tdatawpfg_termmeta[".allSearchFields"][] = "meta_value";
	

$tdatawpfg_termmeta[".googleLikeFields"] = array();
$tdatawpfg_termmeta[".googleLikeFields"][] = "meta_id";
$tdatawpfg_termmeta[".googleLikeFields"][] = "term_id";
$tdatawpfg_termmeta[".googleLikeFields"][] = "meta_key";
$tdatawpfg_termmeta[".googleLikeFields"][] = "meta_value";


$tdatawpfg_termmeta[".advSearchFields"] = array();
$tdatawpfg_termmeta[".advSearchFields"][] = "meta_id";
$tdatawpfg_termmeta[".advSearchFields"][] = "term_id";
$tdatawpfg_termmeta[".advSearchFields"][] = "meta_key";
$tdatawpfg_termmeta[".advSearchFields"][] = "meta_value";

$tdatawpfg_termmeta[".tableType"] = "list";

$tdatawpfg_termmeta[".printerPageOrientation"] = 0;
$tdatawpfg_termmeta[".nPrinterPageScale"] = 100;

$tdatawpfg_termmeta[".nPrinterSplitRecords"] = 40;

$tdatawpfg_termmeta[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_termmeta[".geocodingEnabled"] = false;





$tdatawpfg_termmeta[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_termmeta[".pageSize"] = 20;

$tdatawpfg_termmeta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_termmeta[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_termmeta[".orderindexes"] = array();

$tdatawpfg_termmeta[".sqlHead"] = "SELECT meta_id,  	term_id,  	meta_key,  	meta_value";
$tdatawpfg_termmeta[".sqlFrom"] = "FROM wpfg_termmeta";
$tdatawpfg_termmeta[".sqlWhereExpr"] = "";
$tdatawpfg_termmeta[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_termmeta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_termmeta[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_termmeta[".highlightSearchResults"] = true;

$tableKeyswpfg_termmeta = array();
$tableKeyswpfg_termmeta[] = "meta_id";
$tdatawpfg_termmeta[".Keys"] = $tableKeyswpfg_termmeta;

$tdatawpfg_termmeta[".listFields"] = array();
$tdatawpfg_termmeta[".listFields"][] = "meta_id";
$tdatawpfg_termmeta[".listFields"][] = "term_id";
$tdatawpfg_termmeta[".listFields"][] = "meta_key";
$tdatawpfg_termmeta[".listFields"][] = "meta_value";

$tdatawpfg_termmeta[".hideMobileList"] = array();


$tdatawpfg_termmeta[".viewFields"] = array();
$tdatawpfg_termmeta[".viewFields"][] = "meta_id";
$tdatawpfg_termmeta[".viewFields"][] = "term_id";
$tdatawpfg_termmeta[".viewFields"][] = "meta_key";
$tdatawpfg_termmeta[".viewFields"][] = "meta_value";

$tdatawpfg_termmeta[".addFields"] = array();
$tdatawpfg_termmeta[".addFields"][] = "term_id";
$tdatawpfg_termmeta[".addFields"][] = "meta_key";
$tdatawpfg_termmeta[".addFields"][] = "meta_value";

$tdatawpfg_termmeta[".masterListFields"] = array();
$tdatawpfg_termmeta[".masterListFields"][] = "meta_id";
$tdatawpfg_termmeta[".masterListFields"][] = "term_id";
$tdatawpfg_termmeta[".masterListFields"][] = "meta_key";
$tdatawpfg_termmeta[".masterListFields"][] = "meta_value";

$tdatawpfg_termmeta[".inlineAddFields"] = array();
$tdatawpfg_termmeta[".inlineAddFields"][] = "term_id";
$tdatawpfg_termmeta[".inlineAddFields"][] = "meta_key";
$tdatawpfg_termmeta[".inlineAddFields"][] = "meta_value";

$tdatawpfg_termmeta[".editFields"] = array();
$tdatawpfg_termmeta[".editFields"][] = "term_id";
$tdatawpfg_termmeta[".editFields"][] = "meta_key";
$tdatawpfg_termmeta[".editFields"][] = "meta_value";

$tdatawpfg_termmeta[".inlineEditFields"] = array();
$tdatawpfg_termmeta[".inlineEditFields"][] = "term_id";
$tdatawpfg_termmeta[".inlineEditFields"][] = "meta_key";
$tdatawpfg_termmeta[".inlineEditFields"][] = "meta_value";

$tdatawpfg_termmeta[".updateSelectedFields"] = array();
$tdatawpfg_termmeta[".updateSelectedFields"][] = "term_id";
$tdatawpfg_termmeta[".updateSelectedFields"][] = "meta_key";
$tdatawpfg_termmeta[".updateSelectedFields"][] = "meta_value";


$tdatawpfg_termmeta[".exportFields"] = array();
$tdatawpfg_termmeta[".exportFields"][] = "meta_id";
$tdatawpfg_termmeta[".exportFields"][] = "term_id";
$tdatawpfg_termmeta[".exportFields"][] = "meta_key";
$tdatawpfg_termmeta[".exportFields"][] = "meta_value";

$tdatawpfg_termmeta[".importFields"] = array();
$tdatawpfg_termmeta[".importFields"][] = "meta_id";
$tdatawpfg_termmeta[".importFields"][] = "term_id";
$tdatawpfg_termmeta[".importFields"][] = "meta_key";
$tdatawpfg_termmeta[".importFields"][] = "meta_value";

$tdatawpfg_termmeta[".printFields"] = array();
$tdatawpfg_termmeta[".printFields"][] = "meta_id";
$tdatawpfg_termmeta[".printFields"][] = "term_id";
$tdatawpfg_termmeta[".printFields"][] = "meta_key";
$tdatawpfg_termmeta[".printFields"][] = "meta_value";

//	meta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "meta_id";
	$fdata["GoodName"] = "meta_id";
	$fdata["ownerTable"] = "wpfg_termmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_termmeta","meta_id");
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




	$tdatawpfg_termmeta["meta_id"] = $fdata;
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "wpfg_termmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_termmeta","term_id");
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

		$fdata["strField"] = "term_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_id";

	
	
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




	$tdatawpfg_termmeta["term_id"] = $fdata;
//	meta_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "meta_key";
	$fdata["GoodName"] = "meta_key";
	$fdata["ownerTable"] = "wpfg_termmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_termmeta","meta_key");
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




	$tdatawpfg_termmeta["meta_key"] = $fdata;
//	meta_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "meta_value";
	$fdata["GoodName"] = "meta_value";
	$fdata["ownerTable"] = "wpfg_termmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_termmeta","meta_value");
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




	$tdatawpfg_termmeta["meta_value"] = $fdata;


$tables_data["wpfg_termmeta"]=&$tdatawpfg_termmeta;
$field_labels["wpfg_termmeta"] = &$fieldLabelswpfg_termmeta;
$fieldToolTips["wpfg_termmeta"] = &$fieldToolTipswpfg_termmeta;
$placeHolders["wpfg_termmeta"] = &$placeHolderswpfg_termmeta;
$page_titles["wpfg_termmeta"] = &$pageTitleswpfg_termmeta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_termmeta"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_termmeta"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_termmeta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "meta_id,  	term_id,  	meta_key,  	meta_value";
$proto0["m_strFrom"] = "FROM wpfg_termmeta";
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
	"m_strTable" => "wpfg_termmeta",
	"m_srcTableName" => "wpfg_termmeta"
));

$proto6["m_sql"] = "meta_id";
$proto6["m_srcTableName"] = "wpfg_termmeta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "wpfg_termmeta",
	"m_srcTableName" => "wpfg_termmeta"
));

$proto8["m_sql"] = "term_id";
$proto8["m_srcTableName"] = "wpfg_termmeta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_key",
	"m_strTable" => "wpfg_termmeta",
	"m_srcTableName" => "wpfg_termmeta"
));

$proto10["m_sql"] = "meta_key";
$proto10["m_srcTableName"] = "wpfg_termmeta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_value",
	"m_strTable" => "wpfg_termmeta",
	"m_srcTableName" => "wpfg_termmeta"
));

$proto12["m_sql"] = "meta_value";
$proto12["m_srcTableName"] = "wpfg_termmeta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "wpfg_termmeta";
$proto15["m_srcTableName"] = "wpfg_termmeta";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "meta_id";
$proto15["m_columns"][] = "term_id";
$proto15["m_columns"][] = "meta_key";
$proto15["m_columns"][] = "meta_value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "wpfg_termmeta";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "wpfg_termmeta";
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
$proto0["m_srcTableName"]="wpfg_termmeta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_termmeta = createSqlQuery_wpfg_termmeta();


	
						;

				

$tdatawpfg_termmeta[".sqlquery"] = $queryData_wpfg_termmeta;

$tableEvents["wpfg_termmeta"] = new eventsBase;
$tdatawpfg_termmeta[".hasEvents"] = false;

?>
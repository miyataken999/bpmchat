<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_commentmeta = array();
	$tdatawpfg_commentmeta[".truncateText"] = true;
	$tdatawpfg_commentmeta[".NumberOfChars"] = 80;
	$tdatawpfg_commentmeta[".ShortName"] = "wpfg_commentmeta";
	$tdatawpfg_commentmeta[".OwnerID"] = "";
	$tdatawpfg_commentmeta[".OriginalTable"] = "wpfg_commentmeta";

//	field labels
$fieldLabelswpfg_commentmeta = array();
$fieldToolTipswpfg_commentmeta = array();
$pageTitleswpfg_commentmeta = array();
$placeHolderswpfg_commentmeta = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_commentmeta["Japanese"] = array();
	$fieldToolTipswpfg_commentmeta["Japanese"] = array();
	$placeHolderswpfg_commentmeta["Japanese"] = array();
	$pageTitleswpfg_commentmeta["Japanese"] = array();
	$fieldLabelswpfg_commentmeta["Japanese"]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_commentmeta["Japanese"]["meta_id"] = "";
	$placeHolderswpfg_commentmeta["Japanese"]["meta_id"] = "";
	$fieldLabelswpfg_commentmeta["Japanese"]["comment_id"] = "Comment Id";
	$fieldToolTipswpfg_commentmeta["Japanese"]["comment_id"] = "";
	$placeHolderswpfg_commentmeta["Japanese"]["comment_id"] = "";
	$fieldLabelswpfg_commentmeta["Japanese"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_commentmeta["Japanese"]["meta_key"] = "";
	$placeHolderswpfg_commentmeta["Japanese"]["meta_key"] = "";
	$fieldLabelswpfg_commentmeta["Japanese"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_commentmeta["Japanese"]["meta_value"] = "";
	$placeHolderswpfg_commentmeta["Japanese"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_commentmeta["Japanese"]))
		$tdatawpfg_commentmeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_commentmeta["English"] = array();
	$fieldToolTipswpfg_commentmeta["English"] = array();
	$placeHolderswpfg_commentmeta["English"] = array();
	$pageTitleswpfg_commentmeta["English"] = array();
	$fieldLabelswpfg_commentmeta["English"]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_commentmeta["English"]["meta_id"] = "";
	$placeHolderswpfg_commentmeta["English"]["meta_id"] = "";
	$fieldLabelswpfg_commentmeta["English"]["comment_id"] = "Comment Id";
	$fieldToolTipswpfg_commentmeta["English"]["comment_id"] = "";
	$placeHolderswpfg_commentmeta["English"]["comment_id"] = "";
	$fieldLabelswpfg_commentmeta["English"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_commentmeta["English"]["meta_key"] = "";
	$placeHolderswpfg_commentmeta["English"]["meta_key"] = "";
	$fieldLabelswpfg_commentmeta["English"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_commentmeta["English"]["meta_value"] = "";
	$placeHolderswpfg_commentmeta["English"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_commentmeta["English"]))
		$tdatawpfg_commentmeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_commentmeta[""] = array();
	$fieldToolTipswpfg_commentmeta[""] = array();
	$placeHolderswpfg_commentmeta[""] = array();
	$pageTitleswpfg_commentmeta[""] = array();
	$fieldLabelswpfg_commentmeta[""]["meta_id"] = "Meta Id";
	$fieldToolTipswpfg_commentmeta[""]["meta_id"] = "";
	$placeHolderswpfg_commentmeta[""]["meta_id"] = "";
	$fieldLabelswpfg_commentmeta[""]["comment_id"] = "Comment Id";
	$fieldToolTipswpfg_commentmeta[""]["comment_id"] = "";
	$placeHolderswpfg_commentmeta[""]["comment_id"] = "";
	$fieldLabelswpfg_commentmeta[""]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_commentmeta[""]["meta_key"] = "";
	$placeHolderswpfg_commentmeta[""]["meta_key"] = "";
	$fieldLabelswpfg_commentmeta[""]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_commentmeta[""]["meta_value"] = "";
	$placeHolderswpfg_commentmeta[""]["meta_value"] = "";
	if (count($fieldToolTipswpfg_commentmeta[""]))
		$tdatawpfg_commentmeta[".isUseToolTips"] = true;
}


	$tdatawpfg_commentmeta[".NCSearch"] = true;



$tdatawpfg_commentmeta[".shortTableName"] = "wpfg_commentmeta";
$tdatawpfg_commentmeta[".nSecOptions"] = 0;
$tdatawpfg_commentmeta[".recsPerRowPrint"] = 1;
$tdatawpfg_commentmeta[".mainTableOwnerID"] = "";
$tdatawpfg_commentmeta[".moveNext"] = 1;
$tdatawpfg_commentmeta[".entityType"] = 0;

$tdatawpfg_commentmeta[".strOriginalTableName"] = "wpfg_commentmeta";

	



$tdatawpfg_commentmeta[".showAddInPopup"] = false;

$tdatawpfg_commentmeta[".showEditInPopup"] = false;

$tdatawpfg_commentmeta[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_commentmeta[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_commentmeta[".fieldsForRegister"] = array();
	
$tdatawpfg_commentmeta[".listAjax"] = false;

	$tdatawpfg_commentmeta[".audit"] = false;

	$tdatawpfg_commentmeta[".locking"] = false;

$tdatawpfg_commentmeta[".edit"] = true;
$tdatawpfg_commentmeta[".afterEditAction"] = 1;
$tdatawpfg_commentmeta[".closePopupAfterEdit"] = 1;
$tdatawpfg_commentmeta[".afterEditActionDetTable"] = "";

$tdatawpfg_commentmeta[".add"] = true;
$tdatawpfg_commentmeta[".afterAddAction"] = 1;
$tdatawpfg_commentmeta[".closePopupAfterAdd"] = 1;
$tdatawpfg_commentmeta[".afterAddActionDetTable"] = "";

$tdatawpfg_commentmeta[".list"] = true;



$tdatawpfg_commentmeta[".reorderRecordsByHeader"] = true;



$tdatawpfg_commentmeta[".view"] = true;

$tdatawpfg_commentmeta[".import"] = true;

$tdatawpfg_commentmeta[".exportTo"] = true;

$tdatawpfg_commentmeta[".printFriendly"] = true;

$tdatawpfg_commentmeta[".delete"] = true;

$tdatawpfg_commentmeta[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_commentmeta[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_commentmeta[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_commentmeta[".searchSaving"] = false;
//

$tdatawpfg_commentmeta[".showSearchPanel"] = true;
		$tdatawpfg_commentmeta[".flexibleSearch"] = true;

$tdatawpfg_commentmeta[".isUseAjaxSuggest"] = true;

$tdatawpfg_commentmeta[".rowHighlite"] = true;



				

$tdatawpfg_commentmeta[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_commentmeta[".buttonsAdded"] = false;

$tdatawpfg_commentmeta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_commentmeta[".isUseTimeForSearch"] = false;





$tdatawpfg_commentmeta[".allSearchFields"] = array();
$tdatawpfg_commentmeta[".filterFields"] = array();
$tdatawpfg_commentmeta[".requiredSearchFields"] = array();

$tdatawpfg_commentmeta[".allSearchFields"][] = "meta_id";
	$tdatawpfg_commentmeta[".allSearchFields"][] = "comment_id";
	$tdatawpfg_commentmeta[".allSearchFields"][] = "meta_key";
	$tdatawpfg_commentmeta[".allSearchFields"][] = "meta_value";
	

$tdatawpfg_commentmeta[".googleLikeFields"] = array();
$tdatawpfg_commentmeta[".googleLikeFields"][] = "meta_id";
$tdatawpfg_commentmeta[".googleLikeFields"][] = "comment_id";
$tdatawpfg_commentmeta[".googleLikeFields"][] = "meta_key";
$tdatawpfg_commentmeta[".googleLikeFields"][] = "meta_value";


$tdatawpfg_commentmeta[".advSearchFields"] = array();
$tdatawpfg_commentmeta[".advSearchFields"][] = "meta_id";
$tdatawpfg_commentmeta[".advSearchFields"][] = "comment_id";
$tdatawpfg_commentmeta[".advSearchFields"][] = "meta_key";
$tdatawpfg_commentmeta[".advSearchFields"][] = "meta_value";

$tdatawpfg_commentmeta[".tableType"] = "list";

$tdatawpfg_commentmeta[".printerPageOrientation"] = 0;
$tdatawpfg_commentmeta[".nPrinterPageScale"] = 100;

$tdatawpfg_commentmeta[".nPrinterSplitRecords"] = 40;

$tdatawpfg_commentmeta[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_commentmeta[".geocodingEnabled"] = false;





$tdatawpfg_commentmeta[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_commentmeta[".pageSize"] = 20;

$tdatawpfg_commentmeta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_commentmeta[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_commentmeta[".orderindexes"] = array();

$tdatawpfg_commentmeta[".sqlHead"] = "SELECT meta_id,  	comment_id,  	meta_key,  	meta_value";
$tdatawpfg_commentmeta[".sqlFrom"] = "FROM wpfg_commentmeta";
$tdatawpfg_commentmeta[".sqlWhereExpr"] = "";
$tdatawpfg_commentmeta[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_commentmeta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_commentmeta[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_commentmeta[".highlightSearchResults"] = true;

$tableKeyswpfg_commentmeta = array();
$tableKeyswpfg_commentmeta[] = "meta_id";
$tdatawpfg_commentmeta[".Keys"] = $tableKeyswpfg_commentmeta;

$tdatawpfg_commentmeta[".listFields"] = array();
$tdatawpfg_commentmeta[".listFields"][] = "meta_id";
$tdatawpfg_commentmeta[".listFields"][] = "comment_id";
$tdatawpfg_commentmeta[".listFields"][] = "meta_key";
$tdatawpfg_commentmeta[".listFields"][] = "meta_value";

$tdatawpfg_commentmeta[".hideMobileList"] = array();


$tdatawpfg_commentmeta[".viewFields"] = array();
$tdatawpfg_commentmeta[".viewFields"][] = "meta_id";
$tdatawpfg_commentmeta[".viewFields"][] = "comment_id";
$tdatawpfg_commentmeta[".viewFields"][] = "meta_key";
$tdatawpfg_commentmeta[".viewFields"][] = "meta_value";

$tdatawpfg_commentmeta[".addFields"] = array();
$tdatawpfg_commentmeta[".addFields"][] = "comment_id";
$tdatawpfg_commentmeta[".addFields"][] = "meta_key";
$tdatawpfg_commentmeta[".addFields"][] = "meta_value";

$tdatawpfg_commentmeta[".masterListFields"] = array();
$tdatawpfg_commentmeta[".masterListFields"][] = "meta_id";
$tdatawpfg_commentmeta[".masterListFields"][] = "comment_id";
$tdatawpfg_commentmeta[".masterListFields"][] = "meta_key";
$tdatawpfg_commentmeta[".masterListFields"][] = "meta_value";

$tdatawpfg_commentmeta[".inlineAddFields"] = array();
$tdatawpfg_commentmeta[".inlineAddFields"][] = "comment_id";
$tdatawpfg_commentmeta[".inlineAddFields"][] = "meta_key";
$tdatawpfg_commentmeta[".inlineAddFields"][] = "meta_value";

$tdatawpfg_commentmeta[".editFields"] = array();
$tdatawpfg_commentmeta[".editFields"][] = "comment_id";
$tdatawpfg_commentmeta[".editFields"][] = "meta_key";
$tdatawpfg_commentmeta[".editFields"][] = "meta_value";

$tdatawpfg_commentmeta[".inlineEditFields"] = array();
$tdatawpfg_commentmeta[".inlineEditFields"][] = "comment_id";
$tdatawpfg_commentmeta[".inlineEditFields"][] = "meta_key";
$tdatawpfg_commentmeta[".inlineEditFields"][] = "meta_value";

$tdatawpfg_commentmeta[".updateSelectedFields"] = array();
$tdatawpfg_commentmeta[".updateSelectedFields"][] = "comment_id";
$tdatawpfg_commentmeta[".updateSelectedFields"][] = "meta_key";
$tdatawpfg_commentmeta[".updateSelectedFields"][] = "meta_value";


$tdatawpfg_commentmeta[".exportFields"] = array();
$tdatawpfg_commentmeta[".exportFields"][] = "meta_id";
$tdatawpfg_commentmeta[".exportFields"][] = "comment_id";
$tdatawpfg_commentmeta[".exportFields"][] = "meta_key";
$tdatawpfg_commentmeta[".exportFields"][] = "meta_value";

$tdatawpfg_commentmeta[".importFields"] = array();
$tdatawpfg_commentmeta[".importFields"][] = "meta_id";
$tdatawpfg_commentmeta[".importFields"][] = "comment_id";
$tdatawpfg_commentmeta[".importFields"][] = "meta_key";
$tdatawpfg_commentmeta[".importFields"][] = "meta_value";

$tdatawpfg_commentmeta[".printFields"] = array();
$tdatawpfg_commentmeta[".printFields"][] = "meta_id";
$tdatawpfg_commentmeta[".printFields"][] = "comment_id";
$tdatawpfg_commentmeta[".printFields"][] = "meta_key";
$tdatawpfg_commentmeta[".printFields"][] = "meta_value";

//	meta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "meta_id";
	$fdata["GoodName"] = "meta_id";
	$fdata["ownerTable"] = "wpfg_commentmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_commentmeta","meta_id");
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




	$tdatawpfg_commentmeta["meta_id"] = $fdata;
//	comment_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "comment_id";
	$fdata["GoodName"] = "comment_id";
	$fdata["ownerTable"] = "wpfg_commentmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_commentmeta","comment_id");
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

		$fdata["strField"] = "comment_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_id";

	
	
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




	$tdatawpfg_commentmeta["comment_id"] = $fdata;
//	meta_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "meta_key";
	$fdata["GoodName"] = "meta_key";
	$fdata["ownerTable"] = "wpfg_commentmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_commentmeta","meta_key");
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




	$tdatawpfg_commentmeta["meta_key"] = $fdata;
//	meta_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "meta_value";
	$fdata["GoodName"] = "meta_value";
	$fdata["ownerTable"] = "wpfg_commentmeta";
	$fdata["Label"] = GetFieldLabel("wpfg_commentmeta","meta_value");
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




	$tdatawpfg_commentmeta["meta_value"] = $fdata;


$tables_data["wpfg_commentmeta"]=&$tdatawpfg_commentmeta;
$field_labels["wpfg_commentmeta"] = &$fieldLabelswpfg_commentmeta;
$fieldToolTips["wpfg_commentmeta"] = &$fieldToolTipswpfg_commentmeta;
$placeHolders["wpfg_commentmeta"] = &$placeHolderswpfg_commentmeta;
$page_titles["wpfg_commentmeta"] = &$pageTitleswpfg_commentmeta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_commentmeta"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_commentmeta"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_commentmeta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "meta_id,  	comment_id,  	meta_key,  	meta_value";
$proto0["m_strFrom"] = "FROM wpfg_commentmeta";
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
	"m_strTable" => "wpfg_commentmeta",
	"m_srcTableName" => "wpfg_commentmeta"
));

$proto6["m_sql"] = "meta_id";
$proto6["m_srcTableName"] = "wpfg_commentmeta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_id",
	"m_strTable" => "wpfg_commentmeta",
	"m_srcTableName" => "wpfg_commentmeta"
));

$proto8["m_sql"] = "comment_id";
$proto8["m_srcTableName"] = "wpfg_commentmeta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_key",
	"m_strTable" => "wpfg_commentmeta",
	"m_srcTableName" => "wpfg_commentmeta"
));

$proto10["m_sql"] = "meta_key";
$proto10["m_srcTableName"] = "wpfg_commentmeta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_value",
	"m_strTable" => "wpfg_commentmeta",
	"m_srcTableName" => "wpfg_commentmeta"
));

$proto12["m_sql"] = "meta_value";
$proto12["m_srcTableName"] = "wpfg_commentmeta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "wpfg_commentmeta";
$proto15["m_srcTableName"] = "wpfg_commentmeta";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "meta_id";
$proto15["m_columns"][] = "comment_id";
$proto15["m_columns"][] = "meta_key";
$proto15["m_columns"][] = "meta_value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "wpfg_commentmeta";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "wpfg_commentmeta";
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
$proto0["m_srcTableName"]="wpfg_commentmeta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_commentmeta = createSqlQuery_wpfg_commentmeta();


	
						;

				

$tdatawpfg_commentmeta[".sqlquery"] = $queryData_wpfg_commentmeta;

$tableEvents["wpfg_commentmeta"] = new eventsBase;
$tdatawpfg_commentmeta[".hasEvents"] = false;

?>
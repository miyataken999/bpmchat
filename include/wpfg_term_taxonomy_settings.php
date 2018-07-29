<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_term_taxonomy = array();
	$tdatawpfg_term_taxonomy[".truncateText"] = true;
	$tdatawpfg_term_taxonomy[".NumberOfChars"] = 80;
	$tdatawpfg_term_taxonomy[".ShortName"] = "wpfg_term_taxonomy";
	$tdatawpfg_term_taxonomy[".OwnerID"] = "";
	$tdatawpfg_term_taxonomy[".OriginalTable"] = "wpfg_term_taxonomy";

//	field labels
$fieldLabelswpfg_term_taxonomy = array();
$fieldToolTipswpfg_term_taxonomy = array();
$pageTitleswpfg_term_taxonomy = array();
$placeHolderswpfg_term_taxonomy = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_term_taxonomy["Japanese"] = array();
	$fieldToolTipswpfg_term_taxonomy["Japanese"] = array();
	$placeHolderswpfg_term_taxonomy["Japanese"] = array();
	$pageTitleswpfg_term_taxonomy["Japanese"] = array();
	$fieldLabelswpfg_term_taxonomy["Japanese"]["term_taxonomy_id"] = "Term Taxonomy Id";
	$fieldToolTipswpfg_term_taxonomy["Japanese"]["term_taxonomy_id"] = "";
	$placeHolderswpfg_term_taxonomy["Japanese"]["term_taxonomy_id"] = "";
	$fieldLabelswpfg_term_taxonomy["Japanese"]["term_id"] = "Term Id";
	$fieldToolTipswpfg_term_taxonomy["Japanese"]["term_id"] = "";
	$placeHolderswpfg_term_taxonomy["Japanese"]["term_id"] = "";
	$fieldLabelswpfg_term_taxonomy["Japanese"]["taxonomy"] = "Taxonomy";
	$fieldToolTipswpfg_term_taxonomy["Japanese"]["taxonomy"] = "";
	$placeHolderswpfg_term_taxonomy["Japanese"]["taxonomy"] = "";
	$fieldLabelswpfg_term_taxonomy["Japanese"]["description"] = "Description";
	$fieldToolTipswpfg_term_taxonomy["Japanese"]["description"] = "";
	$placeHolderswpfg_term_taxonomy["Japanese"]["description"] = "";
	$fieldLabelswpfg_term_taxonomy["Japanese"]["parent"] = "Parent";
	$fieldToolTipswpfg_term_taxonomy["Japanese"]["parent"] = "";
	$placeHolderswpfg_term_taxonomy["Japanese"]["parent"] = "";
	$fieldLabelswpfg_term_taxonomy["Japanese"]["count"] = "Count";
	$fieldToolTipswpfg_term_taxonomy["Japanese"]["count"] = "";
	$placeHolderswpfg_term_taxonomy["Japanese"]["count"] = "";
	if (count($fieldToolTipswpfg_term_taxonomy["Japanese"]))
		$tdatawpfg_term_taxonomy[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_term_taxonomy["English"] = array();
	$fieldToolTipswpfg_term_taxonomy["English"] = array();
	$placeHolderswpfg_term_taxonomy["English"] = array();
	$pageTitleswpfg_term_taxonomy["English"] = array();
	$fieldLabelswpfg_term_taxonomy["English"]["term_taxonomy_id"] = "Term Taxonomy Id";
	$fieldToolTipswpfg_term_taxonomy["English"]["term_taxonomy_id"] = "";
	$placeHolderswpfg_term_taxonomy["English"]["term_taxonomy_id"] = "";
	$fieldLabelswpfg_term_taxonomy["English"]["term_id"] = "Term Id";
	$fieldToolTipswpfg_term_taxonomy["English"]["term_id"] = "";
	$placeHolderswpfg_term_taxonomy["English"]["term_id"] = "";
	$fieldLabelswpfg_term_taxonomy["English"]["taxonomy"] = "Taxonomy";
	$fieldToolTipswpfg_term_taxonomy["English"]["taxonomy"] = "";
	$placeHolderswpfg_term_taxonomy["English"]["taxonomy"] = "";
	$fieldLabelswpfg_term_taxonomy["English"]["description"] = "Description";
	$fieldToolTipswpfg_term_taxonomy["English"]["description"] = "";
	$placeHolderswpfg_term_taxonomy["English"]["description"] = "";
	$fieldLabelswpfg_term_taxonomy["English"]["parent"] = "Parent";
	$fieldToolTipswpfg_term_taxonomy["English"]["parent"] = "";
	$placeHolderswpfg_term_taxonomy["English"]["parent"] = "";
	$fieldLabelswpfg_term_taxonomy["English"]["count"] = "Count";
	$fieldToolTipswpfg_term_taxonomy["English"]["count"] = "";
	$placeHolderswpfg_term_taxonomy["English"]["count"] = "";
	if (count($fieldToolTipswpfg_term_taxonomy["English"]))
		$tdatawpfg_term_taxonomy[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_term_taxonomy[""] = array();
	$fieldToolTipswpfg_term_taxonomy[""] = array();
	$placeHolderswpfg_term_taxonomy[""] = array();
	$pageTitleswpfg_term_taxonomy[""] = array();
	$fieldLabelswpfg_term_taxonomy[""]["term_taxonomy_id"] = "Term Taxonomy Id";
	$fieldToolTipswpfg_term_taxonomy[""]["term_taxonomy_id"] = "";
	$placeHolderswpfg_term_taxonomy[""]["term_taxonomy_id"] = "";
	$fieldLabelswpfg_term_taxonomy[""]["term_id"] = "Term Id";
	$fieldToolTipswpfg_term_taxonomy[""]["term_id"] = "";
	$placeHolderswpfg_term_taxonomy[""]["term_id"] = "";
	$fieldLabelswpfg_term_taxonomy[""]["taxonomy"] = "Taxonomy";
	$fieldToolTipswpfg_term_taxonomy[""]["taxonomy"] = "";
	$placeHolderswpfg_term_taxonomy[""]["taxonomy"] = "";
	$fieldLabelswpfg_term_taxonomy[""]["description"] = "Description";
	$fieldToolTipswpfg_term_taxonomy[""]["description"] = "";
	$placeHolderswpfg_term_taxonomy[""]["description"] = "";
	$fieldLabelswpfg_term_taxonomy[""]["parent"] = "Parent";
	$fieldToolTipswpfg_term_taxonomy[""]["parent"] = "";
	$placeHolderswpfg_term_taxonomy[""]["parent"] = "";
	$fieldLabelswpfg_term_taxonomy[""]["count"] = "Count";
	$fieldToolTipswpfg_term_taxonomy[""]["count"] = "";
	$placeHolderswpfg_term_taxonomy[""]["count"] = "";
	if (count($fieldToolTipswpfg_term_taxonomy[""]))
		$tdatawpfg_term_taxonomy[".isUseToolTips"] = true;
}


	$tdatawpfg_term_taxonomy[".NCSearch"] = true;



$tdatawpfg_term_taxonomy[".shortTableName"] = "wpfg_term_taxonomy";
$tdatawpfg_term_taxonomy[".nSecOptions"] = 0;
$tdatawpfg_term_taxonomy[".recsPerRowPrint"] = 1;
$tdatawpfg_term_taxonomy[".mainTableOwnerID"] = "";
$tdatawpfg_term_taxonomy[".moveNext"] = 1;
$tdatawpfg_term_taxonomy[".entityType"] = 0;

$tdatawpfg_term_taxonomy[".strOriginalTableName"] = "wpfg_term_taxonomy";

	



$tdatawpfg_term_taxonomy[".showAddInPopup"] = false;

$tdatawpfg_term_taxonomy[".showEditInPopup"] = false;

$tdatawpfg_term_taxonomy[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_term_taxonomy[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_term_taxonomy[".fieldsForRegister"] = array();
	
$tdatawpfg_term_taxonomy[".listAjax"] = false;

	$tdatawpfg_term_taxonomy[".audit"] = false;

	$tdatawpfg_term_taxonomy[".locking"] = false;

$tdatawpfg_term_taxonomy[".edit"] = true;
$tdatawpfg_term_taxonomy[".afterEditAction"] = 1;
$tdatawpfg_term_taxonomy[".closePopupAfterEdit"] = 1;
$tdatawpfg_term_taxonomy[".afterEditActionDetTable"] = "";

$tdatawpfg_term_taxonomy[".add"] = true;
$tdatawpfg_term_taxonomy[".afterAddAction"] = 1;
$tdatawpfg_term_taxonomy[".closePopupAfterAdd"] = 1;
$tdatawpfg_term_taxonomy[".afterAddActionDetTable"] = "";

$tdatawpfg_term_taxonomy[".list"] = true;



$tdatawpfg_term_taxonomy[".reorderRecordsByHeader"] = true;



$tdatawpfg_term_taxonomy[".view"] = true;

$tdatawpfg_term_taxonomy[".import"] = true;

$tdatawpfg_term_taxonomy[".exportTo"] = true;

$tdatawpfg_term_taxonomy[".printFriendly"] = true;

$tdatawpfg_term_taxonomy[".delete"] = true;

$tdatawpfg_term_taxonomy[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_term_taxonomy[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_term_taxonomy[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_term_taxonomy[".searchSaving"] = false;
//

$tdatawpfg_term_taxonomy[".showSearchPanel"] = true;
		$tdatawpfg_term_taxonomy[".flexibleSearch"] = true;

$tdatawpfg_term_taxonomy[".isUseAjaxSuggest"] = true;

$tdatawpfg_term_taxonomy[".rowHighlite"] = true;



				

$tdatawpfg_term_taxonomy[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_term_taxonomy[".buttonsAdded"] = false;

$tdatawpfg_term_taxonomy[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_term_taxonomy[".isUseTimeForSearch"] = false;





$tdatawpfg_term_taxonomy[".allSearchFields"] = array();
$tdatawpfg_term_taxonomy[".filterFields"] = array();
$tdatawpfg_term_taxonomy[".requiredSearchFields"] = array();

$tdatawpfg_term_taxonomy[".allSearchFields"][] = "term_taxonomy_id";
	$tdatawpfg_term_taxonomy[".allSearchFields"][] = "term_id";
	$tdatawpfg_term_taxonomy[".allSearchFields"][] = "taxonomy";
	$tdatawpfg_term_taxonomy[".allSearchFields"][] = "description";
	$tdatawpfg_term_taxonomy[".allSearchFields"][] = "parent";
	$tdatawpfg_term_taxonomy[".allSearchFields"][] = "count";
	

$tdatawpfg_term_taxonomy[".googleLikeFields"] = array();
$tdatawpfg_term_taxonomy[".googleLikeFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".googleLikeFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".googleLikeFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".googleLikeFields"][] = "description";
$tdatawpfg_term_taxonomy[".googleLikeFields"][] = "parent";
$tdatawpfg_term_taxonomy[".googleLikeFields"][] = "count";


$tdatawpfg_term_taxonomy[".advSearchFields"] = array();
$tdatawpfg_term_taxonomy[".advSearchFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".advSearchFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".advSearchFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".advSearchFields"][] = "description";
$tdatawpfg_term_taxonomy[".advSearchFields"][] = "parent";
$tdatawpfg_term_taxonomy[".advSearchFields"][] = "count";

$tdatawpfg_term_taxonomy[".tableType"] = "list";

$tdatawpfg_term_taxonomy[".printerPageOrientation"] = 0;
$tdatawpfg_term_taxonomy[".nPrinterPageScale"] = 100;

$tdatawpfg_term_taxonomy[".nPrinterSplitRecords"] = 40;

$tdatawpfg_term_taxonomy[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_term_taxonomy[".geocodingEnabled"] = false;





$tdatawpfg_term_taxonomy[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_term_taxonomy[".pageSize"] = 20;

$tdatawpfg_term_taxonomy[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_term_taxonomy[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_term_taxonomy[".orderindexes"] = array();

$tdatawpfg_term_taxonomy[".sqlHead"] = "SELECT term_taxonomy_id,  	term_id,  	taxonomy,  	description,  	parent,  	`count`";
$tdatawpfg_term_taxonomy[".sqlFrom"] = "FROM wpfg_term_taxonomy";
$tdatawpfg_term_taxonomy[".sqlWhereExpr"] = "";
$tdatawpfg_term_taxonomy[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_term_taxonomy[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_term_taxonomy[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_term_taxonomy[".highlightSearchResults"] = true;

$tableKeyswpfg_term_taxonomy = array();
$tableKeyswpfg_term_taxonomy[] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".Keys"] = $tableKeyswpfg_term_taxonomy;

$tdatawpfg_term_taxonomy[".listFields"] = array();
$tdatawpfg_term_taxonomy[".listFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".listFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".listFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".listFields"][] = "description";
$tdatawpfg_term_taxonomy[".listFields"][] = "parent";
$tdatawpfg_term_taxonomy[".listFields"][] = "count";

$tdatawpfg_term_taxonomy[".hideMobileList"] = array();


$tdatawpfg_term_taxonomy[".viewFields"] = array();
$tdatawpfg_term_taxonomy[".viewFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".viewFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".viewFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".viewFields"][] = "description";
$tdatawpfg_term_taxonomy[".viewFields"][] = "parent";
$tdatawpfg_term_taxonomy[".viewFields"][] = "count";

$tdatawpfg_term_taxonomy[".addFields"] = array();
$tdatawpfg_term_taxonomy[".addFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".addFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".addFields"][] = "description";
$tdatawpfg_term_taxonomy[".addFields"][] = "parent";
$tdatawpfg_term_taxonomy[".addFields"][] = "count";

$tdatawpfg_term_taxonomy[".masterListFields"] = array();
$tdatawpfg_term_taxonomy[".masterListFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".masterListFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".masterListFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".masterListFields"][] = "description";
$tdatawpfg_term_taxonomy[".masterListFields"][] = "parent";
$tdatawpfg_term_taxonomy[".masterListFields"][] = "count";

$tdatawpfg_term_taxonomy[".inlineAddFields"] = array();
$tdatawpfg_term_taxonomy[".inlineAddFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".inlineAddFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".inlineAddFields"][] = "description";
$tdatawpfg_term_taxonomy[".inlineAddFields"][] = "parent";
$tdatawpfg_term_taxonomy[".inlineAddFields"][] = "count";

$tdatawpfg_term_taxonomy[".editFields"] = array();
$tdatawpfg_term_taxonomy[".editFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".editFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".editFields"][] = "description";
$tdatawpfg_term_taxonomy[".editFields"][] = "parent";
$tdatawpfg_term_taxonomy[".editFields"][] = "count";

$tdatawpfg_term_taxonomy[".inlineEditFields"] = array();
$tdatawpfg_term_taxonomy[".inlineEditFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".inlineEditFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".inlineEditFields"][] = "description";
$tdatawpfg_term_taxonomy[".inlineEditFields"][] = "parent";
$tdatawpfg_term_taxonomy[".inlineEditFields"][] = "count";

$tdatawpfg_term_taxonomy[".updateSelectedFields"] = array();
$tdatawpfg_term_taxonomy[".updateSelectedFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".updateSelectedFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".updateSelectedFields"][] = "description";
$tdatawpfg_term_taxonomy[".updateSelectedFields"][] = "parent";
$tdatawpfg_term_taxonomy[".updateSelectedFields"][] = "count";


$tdatawpfg_term_taxonomy[".exportFields"] = array();
$tdatawpfg_term_taxonomy[".exportFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".exportFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".exportFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".exportFields"][] = "description";
$tdatawpfg_term_taxonomy[".exportFields"][] = "parent";
$tdatawpfg_term_taxonomy[".exportFields"][] = "count";

$tdatawpfg_term_taxonomy[".importFields"] = array();
$tdatawpfg_term_taxonomy[".importFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".importFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".importFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".importFields"][] = "description";
$tdatawpfg_term_taxonomy[".importFields"][] = "parent";
$tdatawpfg_term_taxonomy[".importFields"][] = "count";

$tdatawpfg_term_taxonomy[".printFields"] = array();
$tdatawpfg_term_taxonomy[".printFields"][] = "term_taxonomy_id";
$tdatawpfg_term_taxonomy[".printFields"][] = "term_id";
$tdatawpfg_term_taxonomy[".printFields"][] = "taxonomy";
$tdatawpfg_term_taxonomy[".printFields"][] = "description";
$tdatawpfg_term_taxonomy[".printFields"][] = "parent";
$tdatawpfg_term_taxonomy[".printFields"][] = "count";

//	term_taxonomy_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "term_taxonomy_id";
	$fdata["GoodName"] = "term_taxonomy_id";
	$fdata["ownerTable"] = "wpfg_term_taxonomy";
	$fdata["Label"] = GetFieldLabel("wpfg_term_taxonomy","term_taxonomy_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "term_taxonomy_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_taxonomy_id";

	
	
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




	$tdatawpfg_term_taxonomy["term_taxonomy_id"] = $fdata;
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "wpfg_term_taxonomy";
	$fdata["Label"] = GetFieldLabel("wpfg_term_taxonomy","term_id");
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




	$tdatawpfg_term_taxonomy["term_id"] = $fdata;
//	taxonomy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "taxonomy";
	$fdata["GoodName"] = "taxonomy";
	$fdata["ownerTable"] = "wpfg_term_taxonomy";
	$fdata["Label"] = GetFieldLabel("wpfg_term_taxonomy","taxonomy");
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

		$fdata["strField"] = "taxonomy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taxonomy";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdatawpfg_term_taxonomy["taxonomy"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "wpfg_term_taxonomy";
	$fdata["Label"] = GetFieldLabel("wpfg_term_taxonomy","description");
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

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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




	$tdatawpfg_term_taxonomy["description"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "wpfg_term_taxonomy";
	$fdata["Label"] = GetFieldLabel("wpfg_term_taxonomy","parent");
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

		$fdata["strField"] = "parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parent";

	
	
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




	$tdatawpfg_term_taxonomy["parent"] = $fdata;
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "wpfg_term_taxonomy";
	$fdata["Label"] = GetFieldLabel("wpfg_term_taxonomy","count");
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

		$fdata["strField"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`count`";

	
	
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




	$tdatawpfg_term_taxonomy["count"] = $fdata;


$tables_data["wpfg_term_taxonomy"]=&$tdatawpfg_term_taxonomy;
$field_labels["wpfg_term_taxonomy"] = &$fieldLabelswpfg_term_taxonomy;
$fieldToolTips["wpfg_term_taxonomy"] = &$fieldToolTipswpfg_term_taxonomy;
$placeHolders["wpfg_term_taxonomy"] = &$placeHolderswpfg_term_taxonomy;
$page_titles["wpfg_term_taxonomy"] = &$pageTitleswpfg_term_taxonomy;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_term_taxonomy"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_term_taxonomy"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_term_taxonomy()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "term_taxonomy_id,  	term_id,  	taxonomy,  	description,  	parent,  	`count`";
$proto0["m_strFrom"] = "FROM wpfg_term_taxonomy";
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
	"m_strName" => "term_taxonomy_id",
	"m_strTable" => "wpfg_term_taxonomy",
	"m_srcTableName" => "wpfg_term_taxonomy"
));

$proto6["m_sql"] = "term_taxonomy_id";
$proto6["m_srcTableName"] = "wpfg_term_taxonomy";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "wpfg_term_taxonomy",
	"m_srcTableName" => "wpfg_term_taxonomy"
));

$proto8["m_sql"] = "term_id";
$proto8["m_srcTableName"] = "wpfg_term_taxonomy";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "taxonomy",
	"m_strTable" => "wpfg_term_taxonomy",
	"m_srcTableName" => "wpfg_term_taxonomy"
));

$proto10["m_sql"] = "taxonomy";
$proto10["m_srcTableName"] = "wpfg_term_taxonomy";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "wpfg_term_taxonomy",
	"m_srcTableName" => "wpfg_term_taxonomy"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "wpfg_term_taxonomy";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "wpfg_term_taxonomy",
	"m_srcTableName" => "wpfg_term_taxonomy"
));

$proto14["m_sql"] = "parent";
$proto14["m_srcTableName"] = "wpfg_term_taxonomy";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "wpfg_term_taxonomy",
	"m_srcTableName" => "wpfg_term_taxonomy"
));

$proto16["m_sql"] = "`count`";
$proto16["m_srcTableName"] = "wpfg_term_taxonomy";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "wpfg_term_taxonomy";
$proto19["m_srcTableName"] = "wpfg_term_taxonomy";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "term_taxonomy_id";
$proto19["m_columns"][] = "term_id";
$proto19["m_columns"][] = "taxonomy";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "parent";
$proto19["m_columns"][] = "count";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "wpfg_term_taxonomy";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "wpfg_term_taxonomy";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="wpfg_term_taxonomy";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_term_taxonomy = createSqlQuery_wpfg_term_taxonomy();


	
						;

						

$tdatawpfg_term_taxonomy[".sqlquery"] = $queryData_wpfg_term_taxonomy;

$tableEvents["wpfg_term_taxonomy"] = new eventsBase;
$tdatawpfg_term_taxonomy[".hasEvents"] = false;

?>
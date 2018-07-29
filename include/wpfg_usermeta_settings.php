<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_usermeta = array();
	$tdatawpfg_usermeta[".truncateText"] = true;
	$tdatawpfg_usermeta[".NumberOfChars"] = 80;
	$tdatawpfg_usermeta[".ShortName"] = "wpfg_usermeta";
	$tdatawpfg_usermeta[".OwnerID"] = "";
	$tdatawpfg_usermeta[".OriginalTable"] = "wpfg_usermeta";

//	field labels
$fieldLabelswpfg_usermeta = array();
$fieldToolTipswpfg_usermeta = array();
$pageTitleswpfg_usermeta = array();
$placeHolderswpfg_usermeta = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_usermeta["Japanese"] = array();
	$fieldToolTipswpfg_usermeta["Japanese"] = array();
	$placeHolderswpfg_usermeta["Japanese"] = array();
	$pageTitleswpfg_usermeta["Japanese"] = array();
	$fieldLabelswpfg_usermeta["Japanese"]["umeta_id"] = "Umeta Id";
	$fieldToolTipswpfg_usermeta["Japanese"]["umeta_id"] = "";
	$placeHolderswpfg_usermeta["Japanese"]["umeta_id"] = "";
	$fieldLabelswpfg_usermeta["Japanese"]["user_id"] = "User Id";
	$fieldToolTipswpfg_usermeta["Japanese"]["user_id"] = "";
	$placeHolderswpfg_usermeta["Japanese"]["user_id"] = "";
	$fieldLabelswpfg_usermeta["Japanese"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_usermeta["Japanese"]["meta_key"] = "";
	$placeHolderswpfg_usermeta["Japanese"]["meta_key"] = "";
	$fieldLabelswpfg_usermeta["Japanese"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_usermeta["Japanese"]["meta_value"] = "";
	$placeHolderswpfg_usermeta["Japanese"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_usermeta["Japanese"]))
		$tdatawpfg_usermeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_usermeta["English"] = array();
	$fieldToolTipswpfg_usermeta["English"] = array();
	$placeHolderswpfg_usermeta["English"] = array();
	$pageTitleswpfg_usermeta["English"] = array();
	$fieldLabelswpfg_usermeta["English"]["umeta_id"] = "Umeta Id";
	$fieldToolTipswpfg_usermeta["English"]["umeta_id"] = "";
	$placeHolderswpfg_usermeta["English"]["umeta_id"] = "";
	$fieldLabelswpfg_usermeta["English"]["user_id"] = "User Id";
	$fieldToolTipswpfg_usermeta["English"]["user_id"] = "";
	$placeHolderswpfg_usermeta["English"]["user_id"] = "";
	$fieldLabelswpfg_usermeta["English"]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_usermeta["English"]["meta_key"] = "";
	$placeHolderswpfg_usermeta["English"]["meta_key"] = "";
	$fieldLabelswpfg_usermeta["English"]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_usermeta["English"]["meta_value"] = "";
	$placeHolderswpfg_usermeta["English"]["meta_value"] = "";
	if (count($fieldToolTipswpfg_usermeta["English"]))
		$tdatawpfg_usermeta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_usermeta[""] = array();
	$fieldToolTipswpfg_usermeta[""] = array();
	$placeHolderswpfg_usermeta[""] = array();
	$pageTitleswpfg_usermeta[""] = array();
	$fieldLabelswpfg_usermeta[""]["umeta_id"] = "Umeta Id";
	$fieldToolTipswpfg_usermeta[""]["umeta_id"] = "";
	$placeHolderswpfg_usermeta[""]["umeta_id"] = "";
	$fieldLabelswpfg_usermeta[""]["user_id"] = "User Id";
	$fieldToolTipswpfg_usermeta[""]["user_id"] = "";
	$placeHolderswpfg_usermeta[""]["user_id"] = "";
	$fieldLabelswpfg_usermeta[""]["meta_key"] = "Meta Key";
	$fieldToolTipswpfg_usermeta[""]["meta_key"] = "";
	$placeHolderswpfg_usermeta[""]["meta_key"] = "";
	$fieldLabelswpfg_usermeta[""]["meta_value"] = "Meta Value";
	$fieldToolTipswpfg_usermeta[""]["meta_value"] = "";
	$placeHolderswpfg_usermeta[""]["meta_value"] = "";
	if (count($fieldToolTipswpfg_usermeta[""]))
		$tdatawpfg_usermeta[".isUseToolTips"] = true;
}


	$tdatawpfg_usermeta[".NCSearch"] = true;



$tdatawpfg_usermeta[".shortTableName"] = "wpfg_usermeta";
$tdatawpfg_usermeta[".nSecOptions"] = 0;
$tdatawpfg_usermeta[".recsPerRowPrint"] = 1;
$tdatawpfg_usermeta[".mainTableOwnerID"] = "";
$tdatawpfg_usermeta[".moveNext"] = 1;
$tdatawpfg_usermeta[".entityType"] = 0;

$tdatawpfg_usermeta[".strOriginalTableName"] = "wpfg_usermeta";

	



$tdatawpfg_usermeta[".showAddInPopup"] = false;

$tdatawpfg_usermeta[".showEditInPopup"] = false;

$tdatawpfg_usermeta[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_usermeta[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_usermeta[".fieldsForRegister"] = array();
	
$tdatawpfg_usermeta[".listAjax"] = false;

	$tdatawpfg_usermeta[".audit"] = false;

	$tdatawpfg_usermeta[".locking"] = false;

$tdatawpfg_usermeta[".edit"] = true;
$tdatawpfg_usermeta[".afterEditAction"] = 1;
$tdatawpfg_usermeta[".closePopupAfterEdit"] = 1;
$tdatawpfg_usermeta[".afterEditActionDetTable"] = "";

$tdatawpfg_usermeta[".add"] = true;
$tdatawpfg_usermeta[".afterAddAction"] = 1;
$tdatawpfg_usermeta[".closePopupAfterAdd"] = 1;
$tdatawpfg_usermeta[".afterAddActionDetTable"] = "";

$tdatawpfg_usermeta[".list"] = true;



$tdatawpfg_usermeta[".reorderRecordsByHeader"] = true;



$tdatawpfg_usermeta[".view"] = true;

$tdatawpfg_usermeta[".import"] = true;

$tdatawpfg_usermeta[".exportTo"] = true;

$tdatawpfg_usermeta[".printFriendly"] = true;

$tdatawpfg_usermeta[".delete"] = true;

$tdatawpfg_usermeta[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_usermeta[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_usermeta[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_usermeta[".searchSaving"] = false;
//

$tdatawpfg_usermeta[".showSearchPanel"] = true;
		$tdatawpfg_usermeta[".flexibleSearch"] = true;

$tdatawpfg_usermeta[".isUseAjaxSuggest"] = true;

$tdatawpfg_usermeta[".rowHighlite"] = true;



				

$tdatawpfg_usermeta[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_usermeta[".buttonsAdded"] = false;

$tdatawpfg_usermeta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_usermeta[".isUseTimeForSearch"] = false;





$tdatawpfg_usermeta[".allSearchFields"] = array();
$tdatawpfg_usermeta[".filterFields"] = array();
$tdatawpfg_usermeta[".requiredSearchFields"] = array();

$tdatawpfg_usermeta[".allSearchFields"][] = "umeta_id";
	$tdatawpfg_usermeta[".allSearchFields"][] = "user_id";
	$tdatawpfg_usermeta[".allSearchFields"][] = "meta_key";
	$tdatawpfg_usermeta[".allSearchFields"][] = "meta_value";
	

$tdatawpfg_usermeta[".googleLikeFields"] = array();
$tdatawpfg_usermeta[".googleLikeFields"][] = "umeta_id";
$tdatawpfg_usermeta[".googleLikeFields"][] = "user_id";
$tdatawpfg_usermeta[".googleLikeFields"][] = "meta_key";
$tdatawpfg_usermeta[".googleLikeFields"][] = "meta_value";


$tdatawpfg_usermeta[".advSearchFields"] = array();
$tdatawpfg_usermeta[".advSearchFields"][] = "umeta_id";
$tdatawpfg_usermeta[".advSearchFields"][] = "user_id";
$tdatawpfg_usermeta[".advSearchFields"][] = "meta_key";
$tdatawpfg_usermeta[".advSearchFields"][] = "meta_value";

$tdatawpfg_usermeta[".tableType"] = "list";

$tdatawpfg_usermeta[".printerPageOrientation"] = 0;
$tdatawpfg_usermeta[".nPrinterPageScale"] = 100;

$tdatawpfg_usermeta[".nPrinterSplitRecords"] = 40;

$tdatawpfg_usermeta[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_usermeta[".geocodingEnabled"] = false;





$tdatawpfg_usermeta[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_usermeta[".pageSize"] = 20;

$tdatawpfg_usermeta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_usermeta[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_usermeta[".orderindexes"] = array();

$tdatawpfg_usermeta[".sqlHead"] = "SELECT umeta_id,  	user_id,  	meta_key,  	meta_value";
$tdatawpfg_usermeta[".sqlFrom"] = "FROM wpfg_usermeta";
$tdatawpfg_usermeta[".sqlWhereExpr"] = "";
$tdatawpfg_usermeta[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_usermeta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_usermeta[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_usermeta[".highlightSearchResults"] = true;

$tableKeyswpfg_usermeta = array();
$tableKeyswpfg_usermeta[] = "umeta_id";
$tdatawpfg_usermeta[".Keys"] = $tableKeyswpfg_usermeta;

$tdatawpfg_usermeta[".listFields"] = array();
$tdatawpfg_usermeta[".listFields"][] = "umeta_id";
$tdatawpfg_usermeta[".listFields"][] = "user_id";
$tdatawpfg_usermeta[".listFields"][] = "meta_key";
$tdatawpfg_usermeta[".listFields"][] = "meta_value";

$tdatawpfg_usermeta[".hideMobileList"] = array();


$tdatawpfg_usermeta[".viewFields"] = array();
$tdatawpfg_usermeta[".viewFields"][] = "umeta_id";
$tdatawpfg_usermeta[".viewFields"][] = "user_id";
$tdatawpfg_usermeta[".viewFields"][] = "meta_key";
$tdatawpfg_usermeta[".viewFields"][] = "meta_value";

$tdatawpfg_usermeta[".addFields"] = array();
$tdatawpfg_usermeta[".addFields"][] = "user_id";
$tdatawpfg_usermeta[".addFields"][] = "meta_key";
$tdatawpfg_usermeta[".addFields"][] = "meta_value";

$tdatawpfg_usermeta[".masterListFields"] = array();
$tdatawpfg_usermeta[".masterListFields"][] = "umeta_id";
$tdatawpfg_usermeta[".masterListFields"][] = "user_id";
$tdatawpfg_usermeta[".masterListFields"][] = "meta_key";
$tdatawpfg_usermeta[".masterListFields"][] = "meta_value";

$tdatawpfg_usermeta[".inlineAddFields"] = array();
$tdatawpfg_usermeta[".inlineAddFields"][] = "user_id";
$tdatawpfg_usermeta[".inlineAddFields"][] = "meta_key";
$tdatawpfg_usermeta[".inlineAddFields"][] = "meta_value";

$tdatawpfg_usermeta[".editFields"] = array();
$tdatawpfg_usermeta[".editFields"][] = "user_id";
$tdatawpfg_usermeta[".editFields"][] = "meta_key";
$tdatawpfg_usermeta[".editFields"][] = "meta_value";

$tdatawpfg_usermeta[".inlineEditFields"] = array();
$tdatawpfg_usermeta[".inlineEditFields"][] = "user_id";
$tdatawpfg_usermeta[".inlineEditFields"][] = "meta_key";
$tdatawpfg_usermeta[".inlineEditFields"][] = "meta_value";

$tdatawpfg_usermeta[".updateSelectedFields"] = array();
$tdatawpfg_usermeta[".updateSelectedFields"][] = "user_id";
$tdatawpfg_usermeta[".updateSelectedFields"][] = "meta_key";
$tdatawpfg_usermeta[".updateSelectedFields"][] = "meta_value";


$tdatawpfg_usermeta[".exportFields"] = array();
$tdatawpfg_usermeta[".exportFields"][] = "umeta_id";
$tdatawpfg_usermeta[".exportFields"][] = "user_id";
$tdatawpfg_usermeta[".exportFields"][] = "meta_key";
$tdatawpfg_usermeta[".exportFields"][] = "meta_value";

$tdatawpfg_usermeta[".importFields"] = array();
$tdatawpfg_usermeta[".importFields"][] = "umeta_id";
$tdatawpfg_usermeta[".importFields"][] = "user_id";
$tdatawpfg_usermeta[".importFields"][] = "meta_key";
$tdatawpfg_usermeta[".importFields"][] = "meta_value";

$tdatawpfg_usermeta[".printFields"] = array();
$tdatawpfg_usermeta[".printFields"][] = "umeta_id";
$tdatawpfg_usermeta[".printFields"][] = "user_id";
$tdatawpfg_usermeta[".printFields"][] = "meta_key";
$tdatawpfg_usermeta[".printFields"][] = "meta_value";

//	umeta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "umeta_id";
	$fdata["GoodName"] = "umeta_id";
	$fdata["ownerTable"] = "wpfg_usermeta";
	$fdata["Label"] = GetFieldLabel("wpfg_usermeta","umeta_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "umeta_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "umeta_id";

	
	
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




	$tdatawpfg_usermeta["umeta_id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "wpfg_usermeta";
	$fdata["Label"] = GetFieldLabel("wpfg_usermeta","user_id");
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

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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




	$tdatawpfg_usermeta["user_id"] = $fdata;
//	meta_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "meta_key";
	$fdata["GoodName"] = "meta_key";
	$fdata["ownerTable"] = "wpfg_usermeta";
	$fdata["Label"] = GetFieldLabel("wpfg_usermeta","meta_key");
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




	$tdatawpfg_usermeta["meta_key"] = $fdata;
//	meta_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "meta_value";
	$fdata["GoodName"] = "meta_value";
	$fdata["ownerTable"] = "wpfg_usermeta";
	$fdata["Label"] = GetFieldLabel("wpfg_usermeta","meta_value");
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




	$tdatawpfg_usermeta["meta_value"] = $fdata;


$tables_data["wpfg_usermeta"]=&$tdatawpfg_usermeta;
$field_labels["wpfg_usermeta"] = &$fieldLabelswpfg_usermeta;
$fieldToolTips["wpfg_usermeta"] = &$fieldToolTipswpfg_usermeta;
$placeHolders["wpfg_usermeta"] = &$placeHolderswpfg_usermeta;
$page_titles["wpfg_usermeta"] = &$pageTitleswpfg_usermeta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_usermeta"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_usermeta"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_usermeta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "umeta_id,  	user_id,  	meta_key,  	meta_value";
$proto0["m_strFrom"] = "FROM wpfg_usermeta";
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
	"m_strName" => "umeta_id",
	"m_strTable" => "wpfg_usermeta",
	"m_srcTableName" => "wpfg_usermeta"
));

$proto6["m_sql"] = "umeta_id";
$proto6["m_srcTableName"] = "wpfg_usermeta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "wpfg_usermeta",
	"m_srcTableName" => "wpfg_usermeta"
));

$proto8["m_sql"] = "user_id";
$proto8["m_srcTableName"] = "wpfg_usermeta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_key",
	"m_strTable" => "wpfg_usermeta",
	"m_srcTableName" => "wpfg_usermeta"
));

$proto10["m_sql"] = "meta_key";
$proto10["m_srcTableName"] = "wpfg_usermeta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "meta_value",
	"m_strTable" => "wpfg_usermeta",
	"m_srcTableName" => "wpfg_usermeta"
));

$proto12["m_sql"] = "meta_value";
$proto12["m_srcTableName"] = "wpfg_usermeta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "wpfg_usermeta";
$proto15["m_srcTableName"] = "wpfg_usermeta";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "umeta_id";
$proto15["m_columns"][] = "user_id";
$proto15["m_columns"][] = "meta_key";
$proto15["m_columns"][] = "meta_value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "wpfg_usermeta";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "wpfg_usermeta";
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
$proto0["m_srcTableName"]="wpfg_usermeta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_usermeta = createSqlQuery_wpfg_usermeta();


	
						;

				

$tdatawpfg_usermeta[".sqlquery"] = $queryData_wpfg_usermeta;

$tableEvents["wpfg_usermeta"] = new eventsBase;
$tdatawpfg_usermeta[".hasEvents"] = false;

?>
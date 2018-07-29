<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSESSION_STORAGE = array();
	$tdataSESSION_STORAGE[".truncateText"] = true;
	$tdataSESSION_STORAGE[".NumberOfChars"] = 80;
	$tdataSESSION_STORAGE[".ShortName"] = "SESSION_STORAGE";
	$tdataSESSION_STORAGE[".OwnerID"] = "";
	$tdataSESSION_STORAGE[".OriginalTable"] = "SESSION_STORAGE";

//	field labels
$fieldLabelsSESSION_STORAGE = array();
$fieldToolTipsSESSION_STORAGE = array();
$pageTitlesSESSION_STORAGE = array();
$placeHoldersSESSION_STORAGE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSESSION_STORAGE["Japanese"] = array();
	$fieldToolTipsSESSION_STORAGE["Japanese"] = array();
	$placeHoldersSESSION_STORAGE["Japanese"] = array();
	$pageTitlesSESSION_STORAGE["Japanese"] = array();
	$fieldLabelsSESSION_STORAGE["Japanese"]["ID"] = "ID";
	$fieldToolTipsSESSION_STORAGE["Japanese"]["ID"] = "";
	$placeHoldersSESSION_STORAGE["Japanese"]["ID"] = "";
	$fieldLabelsSESSION_STORAGE["Japanese"]["SET_TIME"] = "SET TIME";
	$fieldToolTipsSESSION_STORAGE["Japanese"]["SET_TIME"] = "";
	$placeHoldersSESSION_STORAGE["Japanese"]["SET_TIME"] = "";
	$fieldLabelsSESSION_STORAGE["Japanese"]["DATA"] = "DATA";
	$fieldToolTipsSESSION_STORAGE["Japanese"]["DATA"] = "";
	$placeHoldersSESSION_STORAGE["Japanese"]["DATA"] = "";
	$fieldLabelsSESSION_STORAGE["Japanese"]["SESSION_KEY"] = "SESSION KEY";
	$fieldToolTipsSESSION_STORAGE["Japanese"]["SESSION_KEY"] = "";
	$placeHoldersSESSION_STORAGE["Japanese"]["SESSION_KEY"] = "";
	$fieldLabelsSESSION_STORAGE["Japanese"]["CLIENT_ADDRESS"] = "CLIENT ADDRESS";
	$fieldToolTipsSESSION_STORAGE["Japanese"]["CLIENT_ADDRESS"] = "";
	$placeHoldersSESSION_STORAGE["Japanese"]["CLIENT_ADDRESS"] = "";
	if (count($fieldToolTipsSESSION_STORAGE["Japanese"]))
		$tdataSESSION_STORAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSESSION_STORAGE["English"] = array();
	$fieldToolTipsSESSION_STORAGE["English"] = array();
	$placeHoldersSESSION_STORAGE["English"] = array();
	$pageTitlesSESSION_STORAGE["English"] = array();
	$fieldLabelsSESSION_STORAGE["English"]["ID"] = "ID";
	$fieldToolTipsSESSION_STORAGE["English"]["ID"] = "";
	$placeHoldersSESSION_STORAGE["English"]["ID"] = "";
	$fieldLabelsSESSION_STORAGE["English"]["SET_TIME"] = "SET TIME";
	$fieldToolTipsSESSION_STORAGE["English"]["SET_TIME"] = "";
	$placeHoldersSESSION_STORAGE["English"]["SET_TIME"] = "";
	$fieldLabelsSESSION_STORAGE["English"]["DATA"] = "DATA";
	$fieldToolTipsSESSION_STORAGE["English"]["DATA"] = "";
	$placeHoldersSESSION_STORAGE["English"]["DATA"] = "";
	$fieldLabelsSESSION_STORAGE["English"]["SESSION_KEY"] = "SESSION KEY";
	$fieldToolTipsSESSION_STORAGE["English"]["SESSION_KEY"] = "";
	$placeHoldersSESSION_STORAGE["English"]["SESSION_KEY"] = "";
	$fieldLabelsSESSION_STORAGE["English"]["CLIENT_ADDRESS"] = "CLIENT ADDRESS";
	$fieldToolTipsSESSION_STORAGE["English"]["CLIENT_ADDRESS"] = "";
	$placeHoldersSESSION_STORAGE["English"]["CLIENT_ADDRESS"] = "";
	if (count($fieldToolTipsSESSION_STORAGE["English"]))
		$tdataSESSION_STORAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSESSION_STORAGE[""] = array();
	$fieldToolTipsSESSION_STORAGE[""] = array();
	$placeHoldersSESSION_STORAGE[""] = array();
	$pageTitlesSESSION_STORAGE[""] = array();
	$fieldLabelsSESSION_STORAGE[""]["ID"] = "ID";
	$fieldToolTipsSESSION_STORAGE[""]["ID"] = "";
	$placeHoldersSESSION_STORAGE[""]["ID"] = "";
	$fieldLabelsSESSION_STORAGE[""]["SET_TIME"] = "SET TIME";
	$fieldToolTipsSESSION_STORAGE[""]["SET_TIME"] = "";
	$placeHoldersSESSION_STORAGE[""]["SET_TIME"] = "";
	$fieldLabelsSESSION_STORAGE[""]["DATA"] = "DATA";
	$fieldToolTipsSESSION_STORAGE[""]["DATA"] = "";
	$placeHoldersSESSION_STORAGE[""]["DATA"] = "";
	$fieldLabelsSESSION_STORAGE[""]["SESSION_KEY"] = "SESSION KEY";
	$fieldToolTipsSESSION_STORAGE[""]["SESSION_KEY"] = "";
	$placeHoldersSESSION_STORAGE[""]["SESSION_KEY"] = "";
	$fieldLabelsSESSION_STORAGE[""]["CLIENT_ADDRESS"] = "CLIENT ADDRESS";
	$fieldToolTipsSESSION_STORAGE[""]["CLIENT_ADDRESS"] = "";
	$placeHoldersSESSION_STORAGE[""]["CLIENT_ADDRESS"] = "";
	if (count($fieldToolTipsSESSION_STORAGE[""]))
		$tdataSESSION_STORAGE[".isUseToolTips"] = true;
}


	$tdataSESSION_STORAGE[".NCSearch"] = true;



$tdataSESSION_STORAGE[".shortTableName"] = "SESSION_STORAGE";
$tdataSESSION_STORAGE[".nSecOptions"] = 0;
$tdataSESSION_STORAGE[".recsPerRowPrint"] = 1;
$tdataSESSION_STORAGE[".mainTableOwnerID"] = "";
$tdataSESSION_STORAGE[".moveNext"] = 1;
$tdataSESSION_STORAGE[".entityType"] = 0;

$tdataSESSION_STORAGE[".strOriginalTableName"] = "SESSION_STORAGE";

	



$tdataSESSION_STORAGE[".showAddInPopup"] = false;

$tdataSESSION_STORAGE[".showEditInPopup"] = false;

$tdataSESSION_STORAGE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSESSION_STORAGE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSESSION_STORAGE[".fieldsForRegister"] = array();
	
$tdataSESSION_STORAGE[".listAjax"] = false;

	$tdataSESSION_STORAGE[".audit"] = false;

	$tdataSESSION_STORAGE[".locking"] = false;

$tdataSESSION_STORAGE[".edit"] = true;
$tdataSESSION_STORAGE[".afterEditAction"] = 1;
$tdataSESSION_STORAGE[".closePopupAfterEdit"] = 1;
$tdataSESSION_STORAGE[".afterEditActionDetTable"] = "";

$tdataSESSION_STORAGE[".add"] = true;
$tdataSESSION_STORAGE[".afterAddAction"] = 1;
$tdataSESSION_STORAGE[".closePopupAfterAdd"] = 1;
$tdataSESSION_STORAGE[".afterAddActionDetTable"] = "";

$tdataSESSION_STORAGE[".list"] = true;



$tdataSESSION_STORAGE[".reorderRecordsByHeader"] = true;



$tdataSESSION_STORAGE[".view"] = true;

$tdataSESSION_STORAGE[".import"] = true;

$tdataSESSION_STORAGE[".exportTo"] = true;

$tdataSESSION_STORAGE[".printFriendly"] = true;

$tdataSESSION_STORAGE[".delete"] = true;

$tdataSESSION_STORAGE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSESSION_STORAGE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSESSION_STORAGE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSESSION_STORAGE[".searchSaving"] = false;
//

$tdataSESSION_STORAGE[".showSearchPanel"] = true;
		$tdataSESSION_STORAGE[".flexibleSearch"] = true;

$tdataSESSION_STORAGE[".isUseAjaxSuggest"] = true;

$tdataSESSION_STORAGE[".rowHighlite"] = true;



				

$tdataSESSION_STORAGE[".ajaxCodeSnippetAdded"] = false;

$tdataSESSION_STORAGE[".buttonsAdded"] = false;

$tdataSESSION_STORAGE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSESSION_STORAGE[".isUseTimeForSearch"] = false;





$tdataSESSION_STORAGE[".allSearchFields"] = array();
$tdataSESSION_STORAGE[".filterFields"] = array();
$tdataSESSION_STORAGE[".requiredSearchFields"] = array();

$tdataSESSION_STORAGE[".allSearchFields"][] = "ID";
	$tdataSESSION_STORAGE[".allSearchFields"][] = "SET_TIME";
	$tdataSESSION_STORAGE[".allSearchFields"][] = "DATA";
	$tdataSESSION_STORAGE[".allSearchFields"][] = "SESSION_KEY";
	$tdataSESSION_STORAGE[".allSearchFields"][] = "CLIENT_ADDRESS";
	

$tdataSESSION_STORAGE[".googleLikeFields"] = array();
$tdataSESSION_STORAGE[".googleLikeFields"][] = "ID";
$tdataSESSION_STORAGE[".googleLikeFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".googleLikeFields"][] = "DATA";
$tdataSESSION_STORAGE[".googleLikeFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".googleLikeFields"][] = "CLIENT_ADDRESS";


$tdataSESSION_STORAGE[".advSearchFields"] = array();
$tdataSESSION_STORAGE[".advSearchFields"][] = "ID";
$tdataSESSION_STORAGE[".advSearchFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".advSearchFields"][] = "DATA";
$tdataSESSION_STORAGE[".advSearchFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".advSearchFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".tableType"] = "list";

$tdataSESSION_STORAGE[".printerPageOrientation"] = 0;
$tdataSESSION_STORAGE[".nPrinterPageScale"] = 100;

$tdataSESSION_STORAGE[".nPrinterSplitRecords"] = 40;

$tdataSESSION_STORAGE[".nPrinterPDFSplitRecords"] = 40;



$tdataSESSION_STORAGE[".geocodingEnabled"] = false;





$tdataSESSION_STORAGE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataSESSION_STORAGE[".pageSize"] = 20;

$tdataSESSION_STORAGE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSESSION_STORAGE[".strOrderBy"] = $tstrOrderBy;

$tdataSESSION_STORAGE[".orderindexes"] = array();

$tdataSESSION_STORAGE[".sqlHead"] = "SELECT ID,  	SET_TIME,  	`DATA`,  	SESSION_KEY,  	CLIENT_ADDRESS";
$tdataSESSION_STORAGE[".sqlFrom"] = "FROM SESSION_STORAGE";
$tdataSESSION_STORAGE[".sqlWhereExpr"] = "";
$tdataSESSION_STORAGE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSESSION_STORAGE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSESSION_STORAGE[".arrGroupsPerPage"] = $arrGPP;

$tdataSESSION_STORAGE[".highlightSearchResults"] = true;

$tableKeysSESSION_STORAGE = array();
$tableKeysSESSION_STORAGE[] = "ID";
$tdataSESSION_STORAGE[".Keys"] = $tableKeysSESSION_STORAGE;

$tdataSESSION_STORAGE[".listFields"] = array();
$tdataSESSION_STORAGE[".listFields"][] = "ID";
$tdataSESSION_STORAGE[".listFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".listFields"][] = "DATA";
$tdataSESSION_STORAGE[".listFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".listFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".hideMobileList"] = array();


$tdataSESSION_STORAGE[".viewFields"] = array();
$tdataSESSION_STORAGE[".viewFields"][] = "ID";
$tdataSESSION_STORAGE[".viewFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".viewFields"][] = "DATA";
$tdataSESSION_STORAGE[".viewFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".viewFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".addFields"] = array();
$tdataSESSION_STORAGE[".addFields"][] = "ID";
$tdataSESSION_STORAGE[".addFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".addFields"][] = "DATA";
$tdataSESSION_STORAGE[".addFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".addFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".masterListFields"] = array();
$tdataSESSION_STORAGE[".masterListFields"][] = "ID";
$tdataSESSION_STORAGE[".masterListFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".masterListFields"][] = "DATA";
$tdataSESSION_STORAGE[".masterListFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".masterListFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".inlineAddFields"] = array();
$tdataSESSION_STORAGE[".inlineAddFields"][] = "ID";
$tdataSESSION_STORAGE[".inlineAddFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".inlineAddFields"][] = "DATA";
$tdataSESSION_STORAGE[".inlineAddFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".inlineAddFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".editFields"] = array();
$tdataSESSION_STORAGE[".editFields"][] = "ID";
$tdataSESSION_STORAGE[".editFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".editFields"][] = "DATA";
$tdataSESSION_STORAGE[".editFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".editFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".inlineEditFields"] = array();
$tdataSESSION_STORAGE[".inlineEditFields"][] = "ID";
$tdataSESSION_STORAGE[".inlineEditFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".inlineEditFields"][] = "DATA";
$tdataSESSION_STORAGE[".inlineEditFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".inlineEditFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".updateSelectedFields"] = array();
$tdataSESSION_STORAGE[".updateSelectedFields"][] = "ID";
$tdataSESSION_STORAGE[".updateSelectedFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".updateSelectedFields"][] = "DATA";
$tdataSESSION_STORAGE[".updateSelectedFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".updateSelectedFields"][] = "CLIENT_ADDRESS";


$tdataSESSION_STORAGE[".exportFields"] = array();
$tdataSESSION_STORAGE[".exportFields"][] = "ID";
$tdataSESSION_STORAGE[".exportFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".exportFields"][] = "DATA";
$tdataSESSION_STORAGE[".exportFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".exportFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".importFields"] = array();
$tdataSESSION_STORAGE[".importFields"][] = "ID";
$tdataSESSION_STORAGE[".importFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".importFields"][] = "DATA";
$tdataSESSION_STORAGE[".importFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".importFields"][] = "CLIENT_ADDRESS";

$tdataSESSION_STORAGE[".printFields"] = array();
$tdataSESSION_STORAGE[".printFields"][] = "ID";
$tdataSESSION_STORAGE[".printFields"][] = "SET_TIME";
$tdataSESSION_STORAGE[".printFields"][] = "DATA";
$tdataSESSION_STORAGE[".printFields"][] = "SESSION_KEY";
$tdataSESSION_STORAGE[".printFields"][] = "CLIENT_ADDRESS";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "SESSION_STORAGE";
	$fdata["Label"] = GetFieldLabel("SESSION_STORAGE","ID");
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

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataSESSION_STORAGE["ID"] = $fdata;
//	SET_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SET_TIME";
	$fdata["GoodName"] = "SET_TIME";
	$fdata["ownerTable"] = "SESSION_STORAGE";
	$fdata["Label"] = GetFieldLabel("SESSION_STORAGE","SET_TIME");
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

		$fdata["strField"] = "SET_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_TIME";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataSESSION_STORAGE["SET_TIME"] = $fdata;
//	DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DATA";
	$fdata["GoodName"] = "DATA";
	$fdata["ownerTable"] = "SESSION_STORAGE";
	$fdata["Label"] = GetFieldLabel("SESSION_STORAGE","DATA");
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

		$fdata["strField"] = "DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DATA`";

	
	
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




	$tdataSESSION_STORAGE["DATA"] = $fdata;
//	SESSION_KEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SESSION_KEY";
	$fdata["GoodName"] = "SESSION_KEY";
	$fdata["ownerTable"] = "SESSION_STORAGE";
	$fdata["Label"] = GetFieldLabel("SESSION_STORAGE","SESSION_KEY");
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

		$fdata["strField"] = "SESSION_KEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SESSION_KEY";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataSESSION_STORAGE["SESSION_KEY"] = $fdata;
//	CLIENT_ADDRESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CLIENT_ADDRESS";
	$fdata["GoodName"] = "CLIENT_ADDRESS";
	$fdata["ownerTable"] = "SESSION_STORAGE";
	$fdata["Label"] = GetFieldLabel("SESSION_STORAGE","CLIENT_ADDRESS");
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

		$fdata["strField"] = "CLIENT_ADDRESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLIENT_ADDRESS";

	
	
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




	$tdataSESSION_STORAGE["CLIENT_ADDRESS"] = $fdata;


$tables_data["SESSION_STORAGE"]=&$tdataSESSION_STORAGE;
$field_labels["SESSION_STORAGE"] = &$fieldLabelsSESSION_STORAGE;
$fieldToolTips["SESSION_STORAGE"] = &$fieldToolTipsSESSION_STORAGE;
$placeHolders["SESSION_STORAGE"] = &$placeHoldersSESSION_STORAGE;
$page_titles["SESSION_STORAGE"] = &$pageTitlesSESSION_STORAGE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SESSION_STORAGE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SESSION_STORAGE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SESSION_STORAGE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	SET_TIME,  	`DATA`,  	SESSION_KEY,  	CLIENT_ADDRESS";
$proto0["m_strFrom"] = "FROM SESSION_STORAGE";
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
	"m_strName" => "ID",
	"m_strTable" => "SESSION_STORAGE",
	"m_srcTableName" => "SESSION_STORAGE"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "SESSION_STORAGE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_TIME",
	"m_strTable" => "SESSION_STORAGE",
	"m_srcTableName" => "SESSION_STORAGE"
));

$proto8["m_sql"] = "SET_TIME";
$proto8["m_srcTableName"] = "SESSION_STORAGE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DATA",
	"m_strTable" => "SESSION_STORAGE",
	"m_srcTableName" => "SESSION_STORAGE"
));

$proto10["m_sql"] = "`DATA`";
$proto10["m_srcTableName"] = "SESSION_STORAGE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SESSION_KEY",
	"m_strTable" => "SESSION_STORAGE",
	"m_srcTableName" => "SESSION_STORAGE"
));

$proto12["m_sql"] = "SESSION_KEY";
$proto12["m_srcTableName"] = "SESSION_STORAGE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_ADDRESS",
	"m_strTable" => "SESSION_STORAGE",
	"m_srcTableName" => "SESSION_STORAGE"
));

$proto14["m_sql"] = "CLIENT_ADDRESS";
$proto14["m_srcTableName"] = "SESSION_STORAGE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "SESSION_STORAGE";
$proto17["m_srcTableName"] = "SESSION_STORAGE";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "SET_TIME";
$proto17["m_columns"][] = "DATA";
$proto17["m_columns"][] = "SESSION_KEY";
$proto17["m_columns"][] = "CLIENT_ADDRESS";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "SESSION_STORAGE";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "SESSION_STORAGE";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SESSION_STORAGE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SESSION_STORAGE = createSqlQuery_SESSION_STORAGE();


	
						;

					

$tdataSESSION_STORAGE[".sqlquery"] = $queryData_SESSION_STORAGE;

$tableEvents["SESSION_STORAGE"] = new eventsBase;
$tdataSESSION_STORAGE[".hasEvents"] = false;

?>
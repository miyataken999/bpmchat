<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapppaypal_info = array();
	$tdatapppaypal_info[".truncateText"] = true;
	$tdatapppaypal_info[".NumberOfChars"] = 80;
	$tdatapppaypal_info[".ShortName"] = "pppaypal_info";
	$tdatapppaypal_info[".OwnerID"] = "";
	$tdatapppaypal_info[".OriginalTable"] = "pppaypal_info";

//	field labels
$fieldLabelspppaypal_info = array();
$fieldToolTipspppaypal_info = array();
$pageTitlespppaypal_info = array();
$placeHolderspppaypal_info = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelspppaypal_info["Japanese"] = array();
	$fieldToolTipspppaypal_info["Japanese"] = array();
	$placeHolderspppaypal_info["Japanese"] = array();
	$pageTitlespppaypal_info["Japanese"] = array();
	$fieldLabelspppaypal_info["Japanese"]["ID"] = "ID";
	$fieldToolTipspppaypal_info["Japanese"]["ID"] = "";
	$placeHolderspppaypal_info["Japanese"]["ID"] = "";
	$fieldLabelspppaypal_info["Japanese"]["StoreName"] = "Store Name";
	$fieldToolTipspppaypal_info["Japanese"]["StoreName"] = "";
	$placeHolderspppaypal_info["Japanese"]["StoreName"] = "";
	$fieldLabelspppaypal_info["Japanese"]["Currency"] = "Currency";
	$fieldToolTipspppaypal_info["Japanese"]["Currency"] = "";
	$placeHolderspppaypal_info["Japanese"]["Currency"] = "";
	$fieldLabelspppaypal_info["Japanese"]["PayPalEmailAddress"] = "Paypal Email";
	$fieldToolTipspppaypal_info["Japanese"]["PayPalEmailAddress"] = "";
	$placeHolderspppaypal_info["Japanese"]["PayPalEmailAddress"] = "";
	$fieldLabelspppaypal_info["Japanese"]["Logo"] = "Logo";
	$fieldToolTipspppaypal_info["Japanese"]["Logo"] = "";
	$placeHolderspppaypal_info["Japanese"]["Logo"] = "";
	$fieldLabelspppaypal_info["Japanese"]["IPNPage"] = "IPN Page";
	$fieldToolTipspppaypal_info["Japanese"]["IPNPage"] = "";
	$placeHolderspppaypal_info["Japanese"]["IPNPage"] = "";
	$fieldLabelspppaypal_info["Japanese"]["CancelPage"] = "Cancel Page";
	$fieldToolTipspppaypal_info["Japanese"]["CancelPage"] = "";
	$placeHolderspppaypal_info["Japanese"]["CancelPage"] = "";
	$fieldLabelspppaypal_info["Japanese"]["SuccessPage"] = "Success Page";
	$fieldToolTipspppaypal_info["Japanese"]["SuccessPage"] = "";
	$placeHolderspppaypal_info["Japanese"]["SuccessPage"] = "";
	$fieldLabelspppaypal_info["Japanese"]["PayPalServer"] = "Paypal Server";
	$fieldToolTipspppaypal_info["Japanese"]["PayPalServer"] = "";
	$placeHolderspppaypal_info["Japanese"]["PayPalServer"] = "";
	$fieldLabelspppaypal_info["Japanese"]["SMSEmailAddress"] = "SMS Email";
	$fieldToolTipspppaypal_info["Japanese"]["SMSEmailAddress"] = "";
	$placeHolderspppaypal_info["Japanese"]["SMSEmailAddress"] = "";
	if (count($fieldToolTipspppaypal_info["Japanese"]))
		$tdatapppaypal_info[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspppaypal_info["English"] = array();
	$fieldToolTipspppaypal_info["English"] = array();
	$placeHolderspppaypal_info["English"] = array();
	$pageTitlespppaypal_info["English"] = array();
	$fieldLabelspppaypal_info["English"]["ID"] = "ID";
	$fieldToolTipspppaypal_info["English"]["ID"] = "";
	$placeHolderspppaypal_info["English"]["ID"] = "";
	$fieldLabelspppaypal_info["English"]["StoreName"] = "Store Name";
	$fieldToolTipspppaypal_info["English"]["StoreName"] = "";
	$placeHolderspppaypal_info["English"]["StoreName"] = "";
	$fieldLabelspppaypal_info["English"]["Currency"] = "Currency";
	$fieldToolTipspppaypal_info["English"]["Currency"] = "";
	$placeHolderspppaypal_info["English"]["Currency"] = "";
	$fieldLabelspppaypal_info["English"]["PayPalEmailAddress"] = "Paypal Email";
	$fieldToolTipspppaypal_info["English"]["PayPalEmailAddress"] = "";
	$placeHolderspppaypal_info["English"]["PayPalEmailAddress"] = "";
	$fieldLabelspppaypal_info["English"]["Logo"] = "Logo";
	$fieldToolTipspppaypal_info["English"]["Logo"] = "";
	$placeHolderspppaypal_info["English"]["Logo"] = "";
	$fieldLabelspppaypal_info["English"]["IPNPage"] = "IPN Page";
	$fieldToolTipspppaypal_info["English"]["IPNPage"] = "";
	$placeHolderspppaypal_info["English"]["IPNPage"] = "";
	$fieldLabelspppaypal_info["English"]["CancelPage"] = "Cancel Page";
	$fieldToolTipspppaypal_info["English"]["CancelPage"] = "";
	$placeHolderspppaypal_info["English"]["CancelPage"] = "";
	$fieldLabelspppaypal_info["English"]["SuccessPage"] = "Success Page";
	$fieldToolTipspppaypal_info["English"]["SuccessPage"] = "";
	$placeHolderspppaypal_info["English"]["SuccessPage"] = "";
	$fieldLabelspppaypal_info["English"]["PayPalServer"] = "Paypal Server";
	$fieldToolTipspppaypal_info["English"]["PayPalServer"] = "";
	$placeHolderspppaypal_info["English"]["PayPalServer"] = "";
	$fieldLabelspppaypal_info["English"]["SMSEmailAddress"] = "SMS Email";
	$fieldToolTipspppaypal_info["English"]["SMSEmailAddress"] = "";
	$placeHolderspppaypal_info["English"]["SMSEmailAddress"] = "";
	if (count($fieldToolTipspppaypal_info["English"]))
		$tdatapppaypal_info[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspppaypal_info[""] = array();
	$fieldToolTipspppaypal_info[""] = array();
	$placeHolderspppaypal_info[""] = array();
	$pageTitlespppaypal_info[""] = array();
	if (count($fieldToolTipspppaypal_info[""]))
		$tdatapppaypal_info[".isUseToolTips"] = true;
}





$tdatapppaypal_info[".shortTableName"] = "pppaypal_info";
$tdatapppaypal_info[".nSecOptions"] = 0;
$tdatapppaypal_info[".recsPerRowList"] = 1;
$tdatapppaypal_info[".recsPerRowPrint"] = 1;
$tdatapppaypal_info[".mainTableOwnerID"] = "";
$tdatapppaypal_info[".moveNext"] = 1;
$tdatapppaypal_info[".entityType"] = 0;

$tdatapppaypal_info[".strOriginalTableName"] = "pppaypal_info";

	



$tdatapppaypal_info[".showAddInPopup"] = false;

$tdatapppaypal_info[".showEditInPopup"] = false;

$tdatapppaypal_info[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapppaypal_info[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapppaypal_info[".fieldsForRegister"] = array();
	
$tdatapppaypal_info[".listAjax"] = false;

	$tdatapppaypal_info[".audit"] = false;

	$tdatapppaypal_info[".locking"] = false;

$tdatapppaypal_info[".edit"] = true;
$tdatapppaypal_info[".afterEditAction"] = 1;
$tdatapppaypal_info[".closePopupAfterEdit"] = 1;
$tdatapppaypal_info[".afterEditActionDetTable"] = "";


$tdatapppaypal_info[".list"] = true;



$tdatapppaypal_info[".reorderRecordsByHeader"] = true;








$tdatapppaypal_info[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapppaypal_info[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapppaypal_info[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapppaypal_info[".searchSaving"] = false;
//

$tdatapppaypal_info[".showSearchPanel"] = true;
		$tdatapppaypal_info[".flexibleSearch"] = true;

$tdatapppaypal_info[".isUseAjaxSuggest"] = true;

$tdatapppaypal_info[".rowHighlite"] = true;



				

$tdatapppaypal_info[".ajaxCodeSnippetAdded"] = false;

$tdatapppaypal_info[".buttonsAdded"] = false;

$tdatapppaypal_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapppaypal_info[".isUseTimeForSearch"] = false;



$tdatapppaypal_info[".badgeColor"] = "B22222";


$tdatapppaypal_info[".allSearchFields"] = array();
$tdatapppaypal_info[".filterFields"] = array();
$tdatapppaypal_info[".requiredSearchFields"] = array();



$tdatapppaypal_info[".googleLikeFields"] = array();
$tdatapppaypal_info[".googleLikeFields"][] = "ID";
$tdatapppaypal_info[".googleLikeFields"][] = "StoreName";
$tdatapppaypal_info[".googleLikeFields"][] = "Currency";
$tdatapppaypal_info[".googleLikeFields"][] = "PayPalEmailAddress";
$tdatapppaypal_info[".googleLikeFields"][] = "Logo";
$tdatapppaypal_info[".googleLikeFields"][] = "IPNPage";
$tdatapppaypal_info[".googleLikeFields"][] = "CancelPage";
$tdatapppaypal_info[".googleLikeFields"][] = "SuccessPage";
$tdatapppaypal_info[".googleLikeFields"][] = "PayPalServer";
$tdatapppaypal_info[".googleLikeFields"][] = "SMSEmailAddress";



$tdatapppaypal_info[".tableType"] = "list";

$tdatapppaypal_info[".printerPageOrientation"] = 0;
$tdatapppaypal_info[".nPrinterPageScale"] = 100;

$tdatapppaypal_info[".nPrinterSplitRecords"] = 40;

$tdatapppaypal_info[".nPrinterPDFSplitRecords"] = 40;



$tdatapppaypal_info[".geocodingEnabled"] = false;





$tdatapppaypal_info[".listGridLayout"] = 1;



$tdatapppaypal_info[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatapppaypal_info[".pageSize"] = 20;

$tdatapppaypal_info[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapppaypal_info[".strOrderBy"] = $tstrOrderBy;

$tdatapppaypal_info[".orderindexes"] = array();

$tdatapppaypal_info[".sqlHead"] = "select ID, StoreName, Currency, PayPalEmailAddress, Logo, IPNPage, CancelPage, SuccessPage, PayPalServer, SMSEmailAddress";
$tdatapppaypal_info[".sqlFrom"] = "FROM pppaypal_info";
$tdatapppaypal_info[".sqlWhereExpr"] = "";
$tdatapppaypal_info[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapppaypal_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapppaypal_info[".arrGroupsPerPage"] = $arrGPP;


$tableKeyspppaypal_info = array();
$tableKeyspppaypal_info[] = "ID";
$tdatapppaypal_info[".Keys"] = $tableKeyspppaypal_info;

$tdatapppaypal_info[".listFields"] = array();
$tdatapppaypal_info[".listFields"][] = "StoreName";
$tdatapppaypal_info[".listFields"][] = "Currency";
$tdatapppaypal_info[".listFields"][] = "PayPalEmailAddress";
$tdatapppaypal_info[".listFields"][] = "Logo";
$tdatapppaypal_info[".listFields"][] = "IPNPage";
$tdatapppaypal_info[".listFields"][] = "CancelPage";
$tdatapppaypal_info[".listFields"][] = "SuccessPage";
$tdatapppaypal_info[".listFields"][] = "PayPalServer";
$tdatapppaypal_info[".listFields"][] = "SMSEmailAddress";

$tdatapppaypal_info[".hideMobileList"] = array();


$tdatapppaypal_info[".viewFields"] = array();

$tdatapppaypal_info[".addFields"] = array();

$tdatapppaypal_info[".masterListFields"] = array();

$tdatapppaypal_info[".inlineAddFields"] = array();

$tdatapppaypal_info[".editFields"] = array();
$tdatapppaypal_info[".editFields"][] = "StoreName";
$tdatapppaypal_info[".editFields"][] = "Currency";
$tdatapppaypal_info[".editFields"][] = "PayPalEmailAddress";
$tdatapppaypal_info[".editFields"][] = "Logo";
$tdatapppaypal_info[".editFields"][] = "IPNPage";
$tdatapppaypal_info[".editFields"][] = "CancelPage";
$tdatapppaypal_info[".editFields"][] = "SuccessPage";
$tdatapppaypal_info[".editFields"][] = "PayPalServer";
$tdatapppaypal_info[".editFields"][] = "SMSEmailAddress";

$tdatapppaypal_info[".inlineEditFields"] = array();

$tdatapppaypal_info[".updateSelectedFields"] = array();
$tdatapppaypal_info[".updateSelectedFields"][] = "StoreName";
$tdatapppaypal_info[".updateSelectedFields"][] = "Currency";
$tdatapppaypal_info[".updateSelectedFields"][] = "PayPalEmailAddress";
$tdatapppaypal_info[".updateSelectedFields"][] = "Logo";
$tdatapppaypal_info[".updateSelectedFields"][] = "IPNPage";
$tdatapppaypal_info[".updateSelectedFields"][] = "CancelPage";
$tdatapppaypal_info[".updateSelectedFields"][] = "SuccessPage";
$tdatapppaypal_info[".updateSelectedFields"][] = "PayPalServer";
$tdatapppaypal_info[".updateSelectedFields"][] = "SMSEmailAddress";


$tdatapppaypal_info[".exportFields"] = array();

$tdatapppaypal_info[".importFields"] = array();
$tdatapppaypal_info[".importFields"][] = "ID";
$tdatapppaypal_info[".importFields"][] = "StoreName";
$tdatapppaypal_info[".importFields"][] = "Currency";
$tdatapppaypal_info[".importFields"][] = "PayPalEmailAddress";
$tdatapppaypal_info[".importFields"][] = "Logo";
$tdatapppaypal_info[".importFields"][] = "IPNPage";
$tdatapppaypal_info[".importFields"][] = "CancelPage";
$tdatapppaypal_info[".importFields"][] = "SuccessPage";
$tdatapppaypal_info[".importFields"][] = "PayPalServer";
$tdatapppaypal_info[".importFields"][] = "SMSEmailAddress";

$tdatapppaypal_info[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
			
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








	$tdatapppaypal_info["ID"] = $fdata;
//	StoreName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StoreName";
	$fdata["GoodName"] = "StoreName";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","StoreName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "StoreName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StoreName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["StoreName"] = $fdata;
//	Currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Currency";
	$fdata["GoodName"] = "Currency";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","Currency");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "Currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Currency";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "USD";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["Currency"] = $fdata;
//	PayPalEmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PayPalEmailAddress";
	$fdata["GoodName"] = "PayPalEmailAddress";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","PayPalEmailAddress");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "PayPalEmailAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayPalEmailAddress";

	
	
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
			$edata["EditParams"].= " maxlength=50";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["PayPalEmailAddress"] = $fdata;
//	Logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Logo";
	$fdata["GoodName"] = "Logo";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","Logo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "Logo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Logo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
						$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["Logo"] = $fdata;
//	IPNPage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IPNPage";
	$fdata["GoodName"] = "IPNPage";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","IPNPage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "IPNPage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IPNPage";

	
	
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
			$edata["EditParams"].= " maxlength=250";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["IPNPage"] = $fdata;
//	CancelPage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CancelPage";
	$fdata["GoodName"] = "CancelPage";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","CancelPage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "CancelPage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CancelPage";

	
	
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
			$edata["EditParams"].= " maxlength=250";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["CancelPage"] = $fdata;
//	SuccessPage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SuccessPage";
	$fdata["GoodName"] = "SuccessPage";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","SuccessPage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "SuccessPage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SuccessPage";

	
	
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
			$edata["EditParams"].= " maxlength=250";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["SuccessPage"] = $fdata;
//	PayPalServer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PayPalServer";
	$fdata["GoodName"] = "PayPalServer";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","PayPalServer");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "PayPalServer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayPalServer";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["PayPalServer"] = $fdata;
//	SMSEmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SMSEmailAddress";
	$fdata["GoodName"] = "SMSEmailAddress";
	$fdata["ownerTable"] = "pppaypal_info";
	$fdata["Label"] = GetFieldLabel("pppaypal_info","SMSEmailAddress");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "SMSEmailAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SMSEmailAddress";

	
	
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
			$edata["EditParams"].= " maxlength=50";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapppaypal_info["SMSEmailAddress"] = $fdata;


$tables_data["pppaypal_info"]=&$tdatapppaypal_info;
$field_labels["pppaypal_info"] = &$fieldLabelspppaypal_info;
$fieldToolTips["pppaypal_info"] = &$fieldToolTipspppaypal_info;
$placeHolders["pppaypal_info"] = &$placeHolderspppaypal_info;
$page_titles["pppaypal_info"] = &$pageTitlespppaypal_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pppaypal_info"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pppaypal_info"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pppaypal_info()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ID, StoreName, Currency, PayPalEmailAddress, Logo, IPNPage, CancelPage, SuccessPage, PayPalServer, SMSEmailAddress";
$proto0["m_strFrom"] = "FROM pppaypal_info";
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
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "pppaypal_info";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StoreName",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto8["m_sql"] = "StoreName";
$proto8["m_srcTableName"] = "pppaypal_info";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Currency",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto10["m_sql"] = "Currency";
$proto10["m_srcTableName"] = "pppaypal_info";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PayPalEmailAddress",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto12["m_sql"] = "PayPalEmailAddress";
$proto12["m_srcTableName"] = "pppaypal_info";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Logo",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto14["m_sql"] = "Logo";
$proto14["m_srcTableName"] = "pppaypal_info";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "IPNPage",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto16["m_sql"] = "IPNPage";
$proto16["m_srcTableName"] = "pppaypal_info";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CancelPage",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto18["m_sql"] = "CancelPage";
$proto18["m_srcTableName"] = "pppaypal_info";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SuccessPage",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto20["m_sql"] = "SuccessPage";
$proto20["m_srcTableName"] = "pppaypal_info";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PayPalServer",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto22["m_sql"] = "PayPalServer";
$proto22["m_srcTableName"] = "pppaypal_info";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SMSEmailAddress",
	"m_strTable" => "pppaypal_info",
	"m_srcTableName" => "pppaypal_info"
));

$proto24["m_sql"] = "SMSEmailAddress";
$proto24["m_srcTableName"] = "pppaypal_info";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "pppaypal_info";
$proto27["m_srcTableName"] = "pppaypal_info";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "CancelPage";
$proto27["m_columns"][] = "Currency";
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "IPNPage";
$proto27["m_columns"][] = "Logo";
$proto27["m_columns"][] = "PayPalEmailAddress";
$proto27["m_columns"][] = "PayPalServer";
$proto27["m_columns"][] = "SMSEmailAddress";
$proto27["m_columns"][] = "StoreName";
$proto27["m_columns"][] = "SuccessPage";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "pppaypal_info";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "pppaypal_info";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pppaypal_info";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pppaypal_info = createSqlQuery_pppaypal_info();


	
						;

										

$tdatapppaypal_info[".sqlquery"] = $queryData_pppaypal_info;

$tableEvents["pppaypal_info"] = new eventsBase;
$tdatapppaypal_info[".hasEvents"] = false;

?>
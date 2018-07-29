<?php
require_once(getabspath("classes/cipherer.php"));




$tdatappusers = array();
	$tdatappusers[".truncateText"] = true;
	$tdatappusers[".NumberOfChars"] = 80;
	$tdatappusers[".ShortName"] = "ppusers";
	$tdatappusers[".OwnerID"] = "";
	$tdatappusers[".OriginalTable"] = "ppusers";

//	field labels
$fieldLabelsppusers = array();
$fieldToolTipsppusers = array();
$pageTitlesppusers = array();
$placeHoldersppusers = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsppusers["Japanese"] = array();
	$fieldToolTipsppusers["Japanese"] = array();
	$placeHoldersppusers["Japanese"] = array();
	$pageTitlesppusers["Japanese"] = array();
	$fieldLabelsppusers["Japanese"]["email"] = "Email";
	$fieldToolTipsppusers["Japanese"]["email"] = "";
	$placeHoldersppusers["Japanese"]["email"] = "";
	$fieldLabelsppusers["Japanese"]["fullname"] = "Fullname";
	$fieldToolTipsppusers["Japanese"]["fullname"] = "";
	$placeHoldersppusers["Japanese"]["fullname"] = "";
	$fieldLabelsppusers["Japanese"]["password"] = "Password";
	$fieldToolTipsppusers["Japanese"]["password"] = "";
	$placeHoldersppusers["Japanese"]["password"] = "";
	$fieldLabelsppusers["Japanese"]["username"] = "Username";
	$fieldToolTipsppusers["Japanese"]["username"] = "";
	$placeHoldersppusers["Japanese"]["username"] = "";
	$fieldLabelsppusers["Japanese"]["userid"] = "userid";
	$fieldToolTipsppusers["Japanese"]["userid"] = "";
	$placeHoldersppusers["Japanese"]["userid"] = "";
	if (count($fieldToolTipsppusers["Japanese"]))
		$tdatappusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsppusers["English"] = array();
	$fieldToolTipsppusers["English"] = array();
	$placeHoldersppusers["English"] = array();
	$pageTitlesppusers["English"] = array();
	$fieldLabelsppusers["English"]["email"] = "Email";
	$fieldToolTipsppusers["English"]["email"] = "";
	$placeHoldersppusers["English"]["email"] = "";
	$fieldLabelsppusers["English"]["fullname"] = "Fullname";
	$fieldToolTipsppusers["English"]["fullname"] = "";
	$placeHoldersppusers["English"]["fullname"] = "";
	$fieldLabelsppusers["English"]["password"] = "Password";
	$fieldToolTipsppusers["English"]["password"] = "";
	$placeHoldersppusers["English"]["password"] = "";
	$fieldLabelsppusers["English"]["username"] = "Username";
	$fieldToolTipsppusers["English"]["username"] = "";
	$placeHoldersppusers["English"]["username"] = "";
	$fieldLabelsppusers["English"]["userid"] = "userid";
	$fieldToolTipsppusers["English"]["userid"] = "";
	$placeHoldersppusers["English"]["userid"] = "";
	if (count($fieldToolTipsppusers["English"]))
		$tdatappusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsppusers[""] = array();
	$fieldToolTipsppusers[""] = array();
	$placeHoldersppusers[""] = array();
	$pageTitlesppusers[""] = array();
	if (count($fieldToolTipsppusers[""]))
		$tdatappusers[".isUseToolTips"] = true;
}





$tdatappusers[".shortTableName"] = "ppusers";
$tdatappusers[".nSecOptions"] = 0;
$tdatappusers[".recsPerRowPrint"] = 1;
$tdatappusers[".mainTableOwnerID"] = "";
$tdatappusers[".moveNext"] = 1;
$tdatappusers[".entityType"] = 0;

$tdatappusers[".strOriginalTableName"] = "ppusers";

	



$tdatappusers[".showAddInPopup"] = true;

$tdatappusers[".showEditInPopup"] = true;

$tdatappusers[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdatappusers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatappusers[".fieldsForRegister"] = array();
	
$tdatappusers[".listAjax"] = false;

	$tdatappusers[".audit"] = false;

	$tdatappusers[".locking"] = false;

$tdatappusers[".edit"] = true;
$tdatappusers[".afterEditAction"] = 1;
$tdatappusers[".closePopupAfterEdit"] = 1;
$tdatappusers[".afterEditActionDetTable"] = "";

$tdatappusers[".add"] = true;
$tdatappusers[".afterAddAction"] = 1;
$tdatappusers[".closePopupAfterAdd"] = 1;
$tdatappusers[".afterAddActionDetTable"] = "";

$tdatappusers[".list"] = true;



$tdatappusers[".reorderRecordsByHeader"] = true;



$tdatappusers[".view"] = true;


$tdatappusers[".exportTo"] = true;

$tdatappusers[".printFriendly"] = true;

$tdatappusers[".delete"] = true;

$tdatappusers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatappusers[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatappusers[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatappusers[".searchSaving"] = false;
//

$tdatappusers[".showSearchPanel"] = true;
		$tdatappusers[".flexibleSearch"] = true;

$tdatappusers[".isUseAjaxSuggest"] = true;

$tdatappusers[".rowHighlite"] = true;



				

$tdatappusers[".ajaxCodeSnippetAdded"] = false;

$tdatappusers[".buttonsAdded"] = false;

$tdatappusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatappusers[".isUseTimeForSearch"] = false;





$tdatappusers[".allSearchFields"] = array();
$tdatappusers[".filterFields"] = array();
$tdatappusers[".requiredSearchFields"] = array();

$tdatappusers[".allSearchFields"][] = "email";
	$tdatappusers[".allSearchFields"][] = "fullname";
	$tdatappusers[".allSearchFields"][] = "password";
	$tdatappusers[".allSearchFields"][] = "username";
	

$tdatappusers[".googleLikeFields"] = array();
$tdatappusers[".googleLikeFields"][] = "email";
$tdatappusers[".googleLikeFields"][] = "fullname";
$tdatappusers[".googleLikeFields"][] = "password";
$tdatappusers[".googleLikeFields"][] = "username";
$tdatappusers[".googleLikeFields"][] = "userid";


$tdatappusers[".advSearchFields"] = array();
$tdatappusers[".advSearchFields"][] = "email";
$tdatappusers[".advSearchFields"][] = "fullname";
$tdatappusers[".advSearchFields"][] = "password";
$tdatappusers[".advSearchFields"][] = "username";

$tdatappusers[".tableType"] = "list";

$tdatappusers[".printerPageOrientation"] = 0;
$tdatappusers[".nPrinterPageScale"] = 100;

$tdatappusers[".nPrinterSplitRecords"] = 40;

$tdatappusers[".nPrinterPDFSplitRecords"] = 40;



$tdatappusers[".geocodingEnabled"] = false;





$tdatappusers[".listGridLayout"] = 3;



$tdatappusers[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatappusers[".pageSize"] = 20;

$tdatappusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatappusers[".strOrderBy"] = $tstrOrderBy;

$tdatappusers[".orderindexes"] = array();

$tdatappusers[".sqlHead"] = "select email, fullname, password, username, userid";
$tdatappusers[".sqlFrom"] = "FROM ppusers";
$tdatappusers[".sqlWhereExpr"] = "";
$tdatappusers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatappusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatappusers[".arrGroupsPerPage"] = $arrGPP;


$tableKeysppusers = array();
$tableKeysppusers[] = "password";
$tableKeysppusers[] = "username";
$tdatappusers[".Keys"] = $tableKeysppusers;

$tdatappusers[".listFields"] = array();
$tdatappusers[".listFields"][] = "username";
$tdatappusers[".listFields"][] = "password";
$tdatappusers[".listFields"][] = "email";
$tdatappusers[".listFields"][] = "fullname";

$tdatappusers[".hideMobileList"] = array();


$tdatappusers[".viewFields"] = array();
$tdatappusers[".viewFields"][] = "username";
$tdatappusers[".viewFields"][] = "password";
$tdatappusers[".viewFields"][] = "email";
$tdatappusers[".viewFields"][] = "fullname";

$tdatappusers[".addFields"] = array();
$tdatappusers[".addFields"][] = "username";
$tdatappusers[".addFields"][] = "password";
$tdatappusers[".addFields"][] = "email";
$tdatappusers[".addFields"][] = "fullname";

$tdatappusers[".masterListFields"] = array();

$tdatappusers[".inlineAddFields"] = array();

$tdatappusers[".editFields"] = array();
$tdatappusers[".editFields"][] = "username";
$tdatappusers[".editFields"][] = "password";
$tdatappusers[".editFields"][] = "email";
$tdatappusers[".editFields"][] = "fullname";

$tdatappusers[".inlineEditFields"] = array();

$tdatappusers[".updateSelectedFields"] = array();
$tdatappusers[".updateSelectedFields"][] = "username";
$tdatappusers[".updateSelectedFields"][] = "password";
$tdatappusers[".updateSelectedFields"][] = "email";
$tdatappusers[".updateSelectedFields"][] = "fullname";


$tdatappusers[".exportFields"] = array();
$tdatappusers[".exportFields"][] = "username";
$tdatappusers[".exportFields"][] = "password";
$tdatappusers[".exportFields"][] = "email";
$tdatappusers[".exportFields"][] = "fullname";

$tdatappusers[".importFields"] = array();
$tdatappusers[".importFields"][] = "email";
$tdatappusers[".importFields"][] = "fullname";
$tdatappusers[".importFields"][] = "password";
$tdatappusers[".importFields"][] = "username";
$tdatappusers[".importFields"][] = "userid";

$tdatappusers[".printFields"] = array();
$tdatappusers[".printFields"][] = "username";
$tdatappusers[".printFields"][] = "password";
$tdatappusers[".printFields"][] = "email";
$tdatappusers[".printFields"][] = "fullname";

//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "ppusers";
	$fdata["Label"] = GetFieldLabel("ppusers","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdatappusers["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "ppusers";
	$fdata["Label"] = GetFieldLabel("ppusers","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdatappusers["fullname"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "ppusers";
	$fdata["Label"] = GetFieldLabel("ppusers","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
			$edata["EditParams"].= " maxlength=30";

	
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

	// the end of search options settings




	$tdatappusers["password"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "ppusers";
	$fdata["Label"] = GetFieldLabel("ppusers","username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=30";

	
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

	// the end of search options settings




	$tdatappusers["username"] = $fdata;
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "ppusers";
	$fdata["Label"] = GetFieldLabel("ppusers","userid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
			
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatappusers["userid"] = $fdata;


$tables_data["ppusers"]=&$tdatappusers;
$field_labels["ppusers"] = &$fieldLabelsppusers;
$fieldToolTips["ppusers"] = &$fieldToolTipsppusers;
$placeHolders["ppusers"] = &$placeHoldersppusers;
$page_titles["ppusers"] = &$pageTitlesppusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ppusers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ppusers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ppusers()
{
$proto3=array();
$proto3["m_strHead"] = "select";
$proto3["m_strFieldList"] = "email, fullname, password, username, userid";
$proto3["m_strFrom"] = "FROM ppusers";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
	
						;
			$proto3["cipherer"] = null;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto3["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "ppusers",
	"m_srcTableName" => "ppusers"
));

$proto9["m_sql"] = "email";
$proto9["m_srcTableName"] = "ppusers";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "ppusers",
	"m_srcTableName" => "ppusers"
));

$proto11["m_sql"] = "fullname";
$proto11["m_srcTableName"] = "ppusers";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "ppusers",
	"m_srcTableName" => "ppusers"
));

$proto13["m_sql"] = "password";
$proto13["m_srcTableName"] = "ppusers";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "ppusers",
	"m_srcTableName" => "ppusers"
));

$proto15["m_sql"] = "username";
$proto15["m_srcTableName"] = "ppusers";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "ppusers",
	"m_srcTableName" => "ppusers"
));

$proto17["m_sql"] = "userid";
$proto17["m_srcTableName"] = "ppusers";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "ppusers";
$proto20["m_srcTableName"] = "ppusers";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "email";
$proto20["m_columns"][] = "fullname";
$proto20["m_columns"][] = "password";
$proto20["m_columns"][] = "username";
$proto20["m_columns"][] = "userid";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "ppusers";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "ppusers";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="ppusers";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_ppusers = createSqlQuery_ppusers();


	
						;

					

$tdatappusers[".sqlquery"] = $queryData_ppusers;

include_once(getabspath("include/ppusers_events.php"));
$tableEvents["ppusers"] = new eventclass_ppusers;
$tdatappusers[".hasEvents"] = true;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_users = array();
	$tdatawpfg_users[".truncateText"] = true;
	$tdatawpfg_users[".NumberOfChars"] = 80;
	$tdatawpfg_users[".ShortName"] = "wpfg_users";
	$tdatawpfg_users[".OwnerID"] = "";
	$tdatawpfg_users[".OriginalTable"] = "wpfg_users";

//	field labels
$fieldLabelswpfg_users = array();
$fieldToolTipswpfg_users = array();
$pageTitleswpfg_users = array();
$placeHolderswpfg_users = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_users["Japanese"] = array();
	$fieldToolTipswpfg_users["Japanese"] = array();
	$placeHolderswpfg_users["Japanese"] = array();
	$pageTitleswpfg_users["Japanese"] = array();
	$fieldLabelswpfg_users["Japanese"]["ID"] = "ID";
	$fieldToolTipswpfg_users["Japanese"]["ID"] = "";
	$placeHolderswpfg_users["Japanese"]["ID"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_login"] = "User Login";
	$fieldToolTipswpfg_users["Japanese"]["user_login"] = "";
	$placeHolderswpfg_users["Japanese"]["user_login"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_pass"] = "User Pass";
	$fieldToolTipswpfg_users["Japanese"]["user_pass"] = "";
	$placeHolderswpfg_users["Japanese"]["user_pass"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_nicename"] = "User Nicename";
	$fieldToolTipswpfg_users["Japanese"]["user_nicename"] = "";
	$placeHolderswpfg_users["Japanese"]["user_nicename"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_email"] = "User Email";
	$fieldToolTipswpfg_users["Japanese"]["user_email"] = "";
	$placeHolderswpfg_users["Japanese"]["user_email"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_url"] = "User Url";
	$fieldToolTipswpfg_users["Japanese"]["user_url"] = "";
	$placeHolderswpfg_users["Japanese"]["user_url"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_registered"] = "User Registered";
	$fieldToolTipswpfg_users["Japanese"]["user_registered"] = "";
	$placeHolderswpfg_users["Japanese"]["user_registered"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_activation_key"] = "User Activation Key";
	$fieldToolTipswpfg_users["Japanese"]["user_activation_key"] = "";
	$placeHolderswpfg_users["Japanese"]["user_activation_key"] = "";
	$fieldLabelswpfg_users["Japanese"]["user_status"] = "User Status";
	$fieldToolTipswpfg_users["Japanese"]["user_status"] = "";
	$placeHolderswpfg_users["Japanese"]["user_status"] = "";
	$fieldLabelswpfg_users["Japanese"]["display_name"] = "Display Name";
	$fieldToolTipswpfg_users["Japanese"]["display_name"] = "";
	$placeHolderswpfg_users["Japanese"]["display_name"] = "";
	if (count($fieldToolTipswpfg_users["Japanese"]))
		$tdatawpfg_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_users["English"] = array();
	$fieldToolTipswpfg_users["English"] = array();
	$placeHolderswpfg_users["English"] = array();
	$pageTitleswpfg_users["English"] = array();
	$fieldLabelswpfg_users["English"]["ID"] = "ID";
	$fieldToolTipswpfg_users["English"]["ID"] = "";
	$placeHolderswpfg_users["English"]["ID"] = "";
	$fieldLabelswpfg_users["English"]["user_login"] = "User Login";
	$fieldToolTipswpfg_users["English"]["user_login"] = "";
	$placeHolderswpfg_users["English"]["user_login"] = "";
	$fieldLabelswpfg_users["English"]["user_pass"] = "User Pass";
	$fieldToolTipswpfg_users["English"]["user_pass"] = "";
	$placeHolderswpfg_users["English"]["user_pass"] = "";
	$fieldLabelswpfg_users["English"]["user_nicename"] = "User Nicename";
	$fieldToolTipswpfg_users["English"]["user_nicename"] = "";
	$placeHolderswpfg_users["English"]["user_nicename"] = "";
	$fieldLabelswpfg_users["English"]["user_email"] = "User Email";
	$fieldToolTipswpfg_users["English"]["user_email"] = "";
	$placeHolderswpfg_users["English"]["user_email"] = "";
	$fieldLabelswpfg_users["English"]["user_url"] = "User Url";
	$fieldToolTipswpfg_users["English"]["user_url"] = "";
	$placeHolderswpfg_users["English"]["user_url"] = "";
	$fieldLabelswpfg_users["English"]["user_registered"] = "User Registered";
	$fieldToolTipswpfg_users["English"]["user_registered"] = "";
	$placeHolderswpfg_users["English"]["user_registered"] = "";
	$fieldLabelswpfg_users["English"]["user_activation_key"] = "User Activation Key";
	$fieldToolTipswpfg_users["English"]["user_activation_key"] = "";
	$placeHolderswpfg_users["English"]["user_activation_key"] = "";
	$fieldLabelswpfg_users["English"]["user_status"] = "User Status";
	$fieldToolTipswpfg_users["English"]["user_status"] = "";
	$placeHolderswpfg_users["English"]["user_status"] = "";
	$fieldLabelswpfg_users["English"]["display_name"] = "Display Name";
	$fieldToolTipswpfg_users["English"]["display_name"] = "";
	$placeHolderswpfg_users["English"]["display_name"] = "";
	if (count($fieldToolTipswpfg_users["English"]))
		$tdatawpfg_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_users[""] = array();
	$fieldToolTipswpfg_users[""] = array();
	$placeHolderswpfg_users[""] = array();
	$pageTitleswpfg_users[""] = array();
	$fieldLabelswpfg_users[""]["ID"] = "ID";
	$fieldToolTipswpfg_users[""]["ID"] = "";
	$placeHolderswpfg_users[""]["ID"] = "";
	$fieldLabelswpfg_users[""]["user_login"] = "User Login";
	$fieldToolTipswpfg_users[""]["user_login"] = "";
	$placeHolderswpfg_users[""]["user_login"] = "";
	$fieldLabelswpfg_users[""]["user_pass"] = "User Pass";
	$fieldToolTipswpfg_users[""]["user_pass"] = "";
	$placeHolderswpfg_users[""]["user_pass"] = "";
	$fieldLabelswpfg_users[""]["user_nicename"] = "User Nicename";
	$fieldToolTipswpfg_users[""]["user_nicename"] = "";
	$placeHolderswpfg_users[""]["user_nicename"] = "";
	$fieldLabelswpfg_users[""]["user_email"] = "User Email";
	$fieldToolTipswpfg_users[""]["user_email"] = "";
	$placeHolderswpfg_users[""]["user_email"] = "";
	$fieldLabelswpfg_users[""]["user_url"] = "User Url";
	$fieldToolTipswpfg_users[""]["user_url"] = "";
	$placeHolderswpfg_users[""]["user_url"] = "";
	$fieldLabelswpfg_users[""]["user_registered"] = "User Registered";
	$fieldToolTipswpfg_users[""]["user_registered"] = "";
	$placeHolderswpfg_users[""]["user_registered"] = "";
	$fieldLabelswpfg_users[""]["user_activation_key"] = "User Activation Key";
	$fieldToolTipswpfg_users[""]["user_activation_key"] = "";
	$placeHolderswpfg_users[""]["user_activation_key"] = "";
	$fieldLabelswpfg_users[""]["user_status"] = "User Status";
	$fieldToolTipswpfg_users[""]["user_status"] = "";
	$placeHolderswpfg_users[""]["user_status"] = "";
	$fieldLabelswpfg_users[""]["display_name"] = "Display Name";
	$fieldToolTipswpfg_users[""]["display_name"] = "";
	$placeHolderswpfg_users[""]["display_name"] = "";
	if (count($fieldToolTipswpfg_users[""]))
		$tdatawpfg_users[".isUseToolTips"] = true;
}


	$tdatawpfg_users[".NCSearch"] = true;



$tdatawpfg_users[".shortTableName"] = "wpfg_users";
$tdatawpfg_users[".nSecOptions"] = 0;
$tdatawpfg_users[".recsPerRowPrint"] = 1;
$tdatawpfg_users[".mainTableOwnerID"] = "";
$tdatawpfg_users[".moveNext"] = 1;
$tdatawpfg_users[".entityType"] = 0;

$tdatawpfg_users[".strOriginalTableName"] = "wpfg_users";

	



$tdatawpfg_users[".showAddInPopup"] = false;

$tdatawpfg_users[".showEditInPopup"] = false;

$tdatawpfg_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_users[".fieldsForRegister"] = array();
	
$tdatawpfg_users[".listAjax"] = false;

	$tdatawpfg_users[".audit"] = false;

	$tdatawpfg_users[".locking"] = false;

$tdatawpfg_users[".edit"] = true;
$tdatawpfg_users[".afterEditAction"] = 1;
$tdatawpfg_users[".closePopupAfterEdit"] = 1;
$tdatawpfg_users[".afterEditActionDetTable"] = "";

$tdatawpfg_users[".add"] = true;
$tdatawpfg_users[".afterAddAction"] = 1;
$tdatawpfg_users[".closePopupAfterAdd"] = 1;
$tdatawpfg_users[".afterAddActionDetTable"] = "";

$tdatawpfg_users[".list"] = true;



$tdatawpfg_users[".reorderRecordsByHeader"] = true;



$tdatawpfg_users[".view"] = true;

$tdatawpfg_users[".import"] = true;

$tdatawpfg_users[".exportTo"] = true;

$tdatawpfg_users[".printFriendly"] = true;

$tdatawpfg_users[".delete"] = true;

$tdatawpfg_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_users[".searchSaving"] = false;
//

$tdatawpfg_users[".showSearchPanel"] = true;
		$tdatawpfg_users[".flexibleSearch"] = true;

$tdatawpfg_users[".isUseAjaxSuggest"] = true;

$tdatawpfg_users[".rowHighlite"] = true;



				

$tdatawpfg_users[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_users[".buttonsAdded"] = false;

$tdatawpfg_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_users[".isUseTimeForSearch"] = false;





$tdatawpfg_users[".allSearchFields"] = array();
$tdatawpfg_users[".filterFields"] = array();
$tdatawpfg_users[".requiredSearchFields"] = array();

$tdatawpfg_users[".allSearchFields"][] = "ID";
	$tdatawpfg_users[".allSearchFields"][] = "user_login";
	$tdatawpfg_users[".allSearchFields"][] = "user_pass";
	$tdatawpfg_users[".allSearchFields"][] = "user_nicename";
	$tdatawpfg_users[".allSearchFields"][] = "user_email";
	$tdatawpfg_users[".allSearchFields"][] = "user_url";
	$tdatawpfg_users[".allSearchFields"][] = "user_registered";
	$tdatawpfg_users[".allSearchFields"][] = "user_activation_key";
	$tdatawpfg_users[".allSearchFields"][] = "user_status";
	$tdatawpfg_users[".allSearchFields"][] = "display_name";
	

$tdatawpfg_users[".googleLikeFields"] = array();
$tdatawpfg_users[".googleLikeFields"][] = "ID";
$tdatawpfg_users[".googleLikeFields"][] = "user_login";
$tdatawpfg_users[".googleLikeFields"][] = "user_pass";
$tdatawpfg_users[".googleLikeFields"][] = "user_nicename";
$tdatawpfg_users[".googleLikeFields"][] = "user_email";
$tdatawpfg_users[".googleLikeFields"][] = "user_url";
$tdatawpfg_users[".googleLikeFields"][] = "user_registered";
$tdatawpfg_users[".googleLikeFields"][] = "user_activation_key";
$tdatawpfg_users[".googleLikeFields"][] = "user_status";
$tdatawpfg_users[".googleLikeFields"][] = "display_name";


$tdatawpfg_users[".advSearchFields"] = array();
$tdatawpfg_users[".advSearchFields"][] = "ID";
$tdatawpfg_users[".advSearchFields"][] = "user_login";
$tdatawpfg_users[".advSearchFields"][] = "user_pass";
$tdatawpfg_users[".advSearchFields"][] = "user_nicename";
$tdatawpfg_users[".advSearchFields"][] = "user_email";
$tdatawpfg_users[".advSearchFields"][] = "user_url";
$tdatawpfg_users[".advSearchFields"][] = "user_registered";
$tdatawpfg_users[".advSearchFields"][] = "user_activation_key";
$tdatawpfg_users[".advSearchFields"][] = "user_status";
$tdatawpfg_users[".advSearchFields"][] = "display_name";

$tdatawpfg_users[".tableType"] = "list";

$tdatawpfg_users[".printerPageOrientation"] = 0;
$tdatawpfg_users[".nPrinterPageScale"] = 100;

$tdatawpfg_users[".nPrinterSplitRecords"] = 40;

$tdatawpfg_users[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_users[".geocodingEnabled"] = false;





$tdatawpfg_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_users[".pageSize"] = 20;

$tdatawpfg_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_users[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_users[".orderindexes"] = array();

$tdatawpfg_users[".sqlHead"] = "SELECT ID,  	user_login,  	user_pass,  	user_nicename,  	user_email,  	user_url,  	user_registered,  	user_activation_key,  	user_status,  	display_name";
$tdatawpfg_users[".sqlFrom"] = "FROM wpfg_users";
$tdatawpfg_users[".sqlWhereExpr"] = "";
$tdatawpfg_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_users[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_users[".highlightSearchResults"] = true;

$tableKeyswpfg_users = array();
$tableKeyswpfg_users[] = "ID";
$tdatawpfg_users[".Keys"] = $tableKeyswpfg_users;

$tdatawpfg_users[".listFields"] = array();
$tdatawpfg_users[".listFields"][] = "ID";
$tdatawpfg_users[".listFields"][] = "user_login";
$tdatawpfg_users[".listFields"][] = "user_pass";
$tdatawpfg_users[".listFields"][] = "user_nicename";
$tdatawpfg_users[".listFields"][] = "user_email";
$tdatawpfg_users[".listFields"][] = "user_url";
$tdatawpfg_users[".listFields"][] = "user_registered";
$tdatawpfg_users[".listFields"][] = "user_activation_key";
$tdatawpfg_users[".listFields"][] = "user_status";
$tdatawpfg_users[".listFields"][] = "display_name";

$tdatawpfg_users[".hideMobileList"] = array();


$tdatawpfg_users[".viewFields"] = array();
$tdatawpfg_users[".viewFields"][] = "ID";
$tdatawpfg_users[".viewFields"][] = "user_login";
$tdatawpfg_users[".viewFields"][] = "user_pass";
$tdatawpfg_users[".viewFields"][] = "user_nicename";
$tdatawpfg_users[".viewFields"][] = "user_email";
$tdatawpfg_users[".viewFields"][] = "user_url";
$tdatawpfg_users[".viewFields"][] = "user_registered";
$tdatawpfg_users[".viewFields"][] = "user_activation_key";
$tdatawpfg_users[".viewFields"][] = "user_status";
$tdatawpfg_users[".viewFields"][] = "display_name";

$tdatawpfg_users[".addFields"] = array();
$tdatawpfg_users[".addFields"][] = "user_login";
$tdatawpfg_users[".addFields"][] = "user_pass";
$tdatawpfg_users[".addFields"][] = "user_nicename";
$tdatawpfg_users[".addFields"][] = "user_email";
$tdatawpfg_users[".addFields"][] = "user_url";
$tdatawpfg_users[".addFields"][] = "user_registered";
$tdatawpfg_users[".addFields"][] = "user_activation_key";
$tdatawpfg_users[".addFields"][] = "user_status";
$tdatawpfg_users[".addFields"][] = "display_name";

$tdatawpfg_users[".masterListFields"] = array();
$tdatawpfg_users[".masterListFields"][] = "ID";
$tdatawpfg_users[".masterListFields"][] = "user_login";
$tdatawpfg_users[".masterListFields"][] = "user_pass";
$tdatawpfg_users[".masterListFields"][] = "user_nicename";
$tdatawpfg_users[".masterListFields"][] = "user_email";
$tdatawpfg_users[".masterListFields"][] = "user_url";
$tdatawpfg_users[".masterListFields"][] = "user_registered";
$tdatawpfg_users[".masterListFields"][] = "user_activation_key";
$tdatawpfg_users[".masterListFields"][] = "user_status";
$tdatawpfg_users[".masterListFields"][] = "display_name";

$tdatawpfg_users[".inlineAddFields"] = array();
$tdatawpfg_users[".inlineAddFields"][] = "user_login";
$tdatawpfg_users[".inlineAddFields"][] = "user_pass";
$tdatawpfg_users[".inlineAddFields"][] = "user_nicename";
$tdatawpfg_users[".inlineAddFields"][] = "user_email";
$tdatawpfg_users[".inlineAddFields"][] = "user_url";
$tdatawpfg_users[".inlineAddFields"][] = "user_registered";
$tdatawpfg_users[".inlineAddFields"][] = "user_activation_key";
$tdatawpfg_users[".inlineAddFields"][] = "user_status";
$tdatawpfg_users[".inlineAddFields"][] = "display_name";

$tdatawpfg_users[".editFields"] = array();
$tdatawpfg_users[".editFields"][] = "user_login";
$tdatawpfg_users[".editFields"][] = "user_pass";
$tdatawpfg_users[".editFields"][] = "user_nicename";
$tdatawpfg_users[".editFields"][] = "user_email";
$tdatawpfg_users[".editFields"][] = "user_url";
$tdatawpfg_users[".editFields"][] = "user_registered";
$tdatawpfg_users[".editFields"][] = "user_activation_key";
$tdatawpfg_users[".editFields"][] = "user_status";
$tdatawpfg_users[".editFields"][] = "display_name";

$tdatawpfg_users[".inlineEditFields"] = array();
$tdatawpfg_users[".inlineEditFields"][] = "user_login";
$tdatawpfg_users[".inlineEditFields"][] = "user_pass";
$tdatawpfg_users[".inlineEditFields"][] = "user_nicename";
$tdatawpfg_users[".inlineEditFields"][] = "user_email";
$tdatawpfg_users[".inlineEditFields"][] = "user_url";
$tdatawpfg_users[".inlineEditFields"][] = "user_registered";
$tdatawpfg_users[".inlineEditFields"][] = "user_activation_key";
$tdatawpfg_users[".inlineEditFields"][] = "user_status";
$tdatawpfg_users[".inlineEditFields"][] = "display_name";

$tdatawpfg_users[".updateSelectedFields"] = array();
$tdatawpfg_users[".updateSelectedFields"][] = "user_login";
$tdatawpfg_users[".updateSelectedFields"][] = "user_pass";
$tdatawpfg_users[".updateSelectedFields"][] = "user_nicename";
$tdatawpfg_users[".updateSelectedFields"][] = "user_email";
$tdatawpfg_users[".updateSelectedFields"][] = "user_url";
$tdatawpfg_users[".updateSelectedFields"][] = "user_registered";
$tdatawpfg_users[".updateSelectedFields"][] = "user_activation_key";
$tdatawpfg_users[".updateSelectedFields"][] = "user_status";
$tdatawpfg_users[".updateSelectedFields"][] = "display_name";


$tdatawpfg_users[".exportFields"] = array();
$tdatawpfg_users[".exportFields"][] = "ID";
$tdatawpfg_users[".exportFields"][] = "user_login";
$tdatawpfg_users[".exportFields"][] = "user_pass";
$tdatawpfg_users[".exportFields"][] = "user_nicename";
$tdatawpfg_users[".exportFields"][] = "user_email";
$tdatawpfg_users[".exportFields"][] = "user_url";
$tdatawpfg_users[".exportFields"][] = "user_registered";
$tdatawpfg_users[".exportFields"][] = "user_activation_key";
$tdatawpfg_users[".exportFields"][] = "user_status";
$tdatawpfg_users[".exportFields"][] = "display_name";

$tdatawpfg_users[".importFields"] = array();
$tdatawpfg_users[".importFields"][] = "ID";
$tdatawpfg_users[".importFields"][] = "user_login";
$tdatawpfg_users[".importFields"][] = "user_pass";
$tdatawpfg_users[".importFields"][] = "user_nicename";
$tdatawpfg_users[".importFields"][] = "user_email";
$tdatawpfg_users[".importFields"][] = "user_url";
$tdatawpfg_users[".importFields"][] = "user_registered";
$tdatawpfg_users[".importFields"][] = "user_activation_key";
$tdatawpfg_users[".importFields"][] = "user_status";
$tdatawpfg_users[".importFields"][] = "display_name";

$tdatawpfg_users[".printFields"] = array();
$tdatawpfg_users[".printFields"][] = "ID";
$tdatawpfg_users[".printFields"][] = "user_login";
$tdatawpfg_users[".printFields"][] = "user_pass";
$tdatawpfg_users[".printFields"][] = "user_nicename";
$tdatawpfg_users[".printFields"][] = "user_email";
$tdatawpfg_users[".printFields"][] = "user_url";
$tdatawpfg_users[".printFields"][] = "user_registered";
$tdatawpfg_users[".printFields"][] = "user_activation_key";
$tdatawpfg_users[".printFields"][] = "user_status";
$tdatawpfg_users[".printFields"][] = "display_name";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","ID");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatawpfg_users["ID"] = $fdata;
//	user_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_login";
	$fdata["GoodName"] = "user_login";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_login");
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

		$fdata["strField"] = "user_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_login";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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




	$tdatawpfg_users["user_login"] = $fdata;
//	user_pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_pass";
	$fdata["GoodName"] = "user_pass";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_pass");
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

		$fdata["strField"] = "user_pass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_pass";

	
	
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




	$tdatawpfg_users["user_pass"] = $fdata;
//	user_nicename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_nicename";
	$fdata["GoodName"] = "user_nicename";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_nicename");
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

		$fdata["strField"] = "user_nicename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_nicename";

	
	
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




	$tdatawpfg_users["user_nicename"] = $fdata;
//	user_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "user_email";
	$fdata["GoodName"] = "user_email";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_email");
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

		$fdata["strField"] = "user_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatawpfg_users["user_email"] = $fdata;
//	user_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "user_url";
	$fdata["GoodName"] = "user_url";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_url");
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

		$fdata["strField"] = "user_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_url";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatawpfg_users["user_url"] = $fdata;
//	user_registered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_registered";
	$fdata["GoodName"] = "user_registered";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_registered");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "user_registered";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_registered";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatawpfg_users["user_registered"] = $fdata;
//	user_activation_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "user_activation_key";
	$fdata["GoodName"] = "user_activation_key";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_activation_key");
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

		$fdata["strField"] = "user_activation_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_activation_key";

	
	
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




	$tdatawpfg_users["user_activation_key"] = $fdata;
//	user_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "user_status";
	$fdata["GoodName"] = "user_status";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","user_status");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "user_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_status";

	
	
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




	$tdatawpfg_users["user_status"] = $fdata;
//	display_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "display_name";
	$fdata["GoodName"] = "display_name";
	$fdata["ownerTable"] = "wpfg_users";
	$fdata["Label"] = GetFieldLabel("wpfg_users","display_name");
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

		$fdata["strField"] = "display_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "display_name";

	
	
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




	$tdatawpfg_users["display_name"] = $fdata;


$tables_data["wpfg_users"]=&$tdatawpfg_users;
$field_labels["wpfg_users"] = &$fieldLabelswpfg_users;
$fieldToolTips["wpfg_users"] = &$fieldToolTipswpfg_users;
$placeHolders["wpfg_users"] = &$placeHolderswpfg_users;
$page_titles["wpfg_users"] = &$pageTitleswpfg_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	user_login,  	user_pass,  	user_nicename,  	user_email,  	user_url,  	user_registered,  	user_activation_key,  	user_status,  	display_name";
$proto0["m_strFrom"] = "FROM wpfg_users";
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
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "wpfg_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_login",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto8["m_sql"] = "user_login";
$proto8["m_srcTableName"] = "wpfg_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_pass",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto10["m_sql"] = "user_pass";
$proto10["m_srcTableName"] = "wpfg_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user_nicename",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto12["m_sql"] = "user_nicename";
$proto12["m_srcTableName"] = "wpfg_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "user_email",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto14["m_sql"] = "user_email";
$proto14["m_srcTableName"] = "wpfg_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "user_url",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto16["m_sql"] = "user_url";
$proto16["m_srcTableName"] = "wpfg_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "user_registered",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto18["m_sql"] = "user_registered";
$proto18["m_srcTableName"] = "wpfg_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "user_activation_key",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto20["m_sql"] = "user_activation_key";
$proto20["m_srcTableName"] = "wpfg_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "user_status",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto22["m_sql"] = "user_status";
$proto22["m_srcTableName"] = "wpfg_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "display_name",
	"m_strTable" => "wpfg_users",
	"m_srcTableName" => "wpfg_users"
));

$proto24["m_sql"] = "display_name";
$proto24["m_srcTableName"] = "wpfg_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "wpfg_users";
$proto27["m_srcTableName"] = "wpfg_users";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "user_login";
$proto27["m_columns"][] = "user_pass";
$proto27["m_columns"][] = "user_nicename";
$proto27["m_columns"][] = "user_email";
$proto27["m_columns"][] = "user_url";
$proto27["m_columns"][] = "user_registered";
$proto27["m_columns"][] = "user_activation_key";
$proto27["m_columns"][] = "user_status";
$proto27["m_columns"][] = "display_name";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "wpfg_users";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "wpfg_users";
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
$proto0["m_srcTableName"]="wpfg_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_users = createSqlQuery_wpfg_users();


	
						;

										

$tdatawpfg_users[".sqlquery"] = $queryData_wpfg_users;

include_once(getabspath("include/wpfg_users_events.php"));
$tableEvents["wpfg_users"] = new eventclass_wpfg_users;
$tdatawpfg_users[".hasEvents"] = true;

?>
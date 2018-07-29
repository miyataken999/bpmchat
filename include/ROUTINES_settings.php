<?php
require_once(getabspath("classes/cipherer.php"));




$tdataROUTINES = array();
	$tdataROUTINES[".truncateText"] = true;
	$tdataROUTINES[".NumberOfChars"] = 80;
	$tdataROUTINES[".ShortName"] = "ROUTINES";
	$tdataROUTINES[".OwnerID"] = "";
	$tdataROUTINES[".OriginalTable"] = "ROUTINES";

//	field labels
$fieldLabelsROUTINES = array();
$fieldToolTipsROUTINES = array();
$pageTitlesROUTINES = array();
$placeHoldersROUTINES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsROUTINES["Japanese"] = array();
	$fieldToolTipsROUTINES["Japanese"] = array();
	$placeHoldersROUTINES["Japanese"] = array();
	$pageTitlesROUTINES["Japanese"] = array();
	$fieldLabelsROUTINES["Japanese"]["SPECIFIC_NAME"] = "SPECIFIC NAME";
	$fieldToolTipsROUTINES["Japanese"]["SPECIFIC_NAME"] = "";
	$placeHoldersROUTINES["Japanese"]["SPECIFIC_NAME"] = "";
	$fieldLabelsROUTINES["Japanese"]["ROUTINE_CATALOG"] = "ROUTINE CATALOG";
	$fieldToolTipsROUTINES["Japanese"]["ROUTINE_CATALOG"] = "";
	$placeHoldersROUTINES["Japanese"]["ROUTINE_CATALOG"] = "";
	$fieldLabelsROUTINES["Japanese"]["ROUTINE_SCHEMA"] = "ROUTINE SCHEMA";
	$fieldToolTipsROUTINES["Japanese"]["ROUTINE_SCHEMA"] = "";
	$placeHoldersROUTINES["Japanese"]["ROUTINE_SCHEMA"] = "";
	$fieldLabelsROUTINES["Japanese"]["ROUTINE_NAME"] = "ROUTINE NAME";
	$fieldToolTipsROUTINES["Japanese"]["ROUTINE_NAME"] = "";
	$placeHoldersROUTINES["Japanese"]["ROUTINE_NAME"] = "";
	$fieldLabelsROUTINES["Japanese"]["ROUTINE_TYPE"] = "ROUTINE TYPE";
	$fieldToolTipsROUTINES["Japanese"]["ROUTINE_TYPE"] = "";
	$placeHoldersROUTINES["Japanese"]["ROUTINE_TYPE"] = "";
	$fieldLabelsROUTINES["Japanese"]["DATA_TYPE"] = "DATA TYPE";
	$fieldToolTipsROUTINES["Japanese"]["DATA_TYPE"] = "";
	$placeHoldersROUTINES["Japanese"]["DATA_TYPE"] = "";
	$fieldLabelsROUTINES["Japanese"]["CHARACTER_MAXIMUM_LENGTH"] = "CHARACTER MAXIMUM LENGTH";
	$fieldToolTipsROUTINES["Japanese"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$placeHoldersROUTINES["Japanese"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$fieldLabelsROUTINES["Japanese"]["CHARACTER_OCTET_LENGTH"] = "CHARACTER OCTET LENGTH";
	$fieldToolTipsROUTINES["Japanese"]["CHARACTER_OCTET_LENGTH"] = "";
	$placeHoldersROUTINES["Japanese"]["CHARACTER_OCTET_LENGTH"] = "";
	$fieldLabelsROUTINES["Japanese"]["NUMERIC_PRECISION"] = "NUMERIC PRECISION";
	$fieldToolTipsROUTINES["Japanese"]["NUMERIC_PRECISION"] = "";
	$placeHoldersROUTINES["Japanese"]["NUMERIC_PRECISION"] = "";
	$fieldLabelsROUTINES["Japanese"]["NUMERIC_SCALE"] = "NUMERIC SCALE";
	$fieldToolTipsROUTINES["Japanese"]["NUMERIC_SCALE"] = "";
	$placeHoldersROUTINES["Japanese"]["NUMERIC_SCALE"] = "";
	$fieldLabelsROUTINES["Japanese"]["DATETIME_PRECISION"] = "DATETIME PRECISION";
	$fieldToolTipsROUTINES["Japanese"]["DATETIME_PRECISION"] = "";
	$placeHoldersROUTINES["Japanese"]["DATETIME_PRECISION"] = "";
	$fieldLabelsROUTINES["Japanese"]["CHARACTER_SET_NAME"] = "CHARACTER SET NAME";
	$fieldToolTipsROUTINES["Japanese"]["CHARACTER_SET_NAME"] = "";
	$placeHoldersROUTINES["Japanese"]["CHARACTER_SET_NAME"] = "";
	$fieldLabelsROUTINES["Japanese"]["COLLATION_NAME"] = "COLLATION NAME";
	$fieldToolTipsROUTINES["Japanese"]["COLLATION_NAME"] = "";
	$placeHoldersROUTINES["Japanese"]["COLLATION_NAME"] = "";
	$fieldLabelsROUTINES["Japanese"]["DTD_IDENTIFIER"] = "DTD IDENTIFIER";
	$fieldToolTipsROUTINES["Japanese"]["DTD_IDENTIFIER"] = "";
	$placeHoldersROUTINES["Japanese"]["DTD_IDENTIFIER"] = "";
	$fieldLabelsROUTINES["Japanese"]["ROUTINE_BODY"] = "ROUTINE BODY";
	$fieldToolTipsROUTINES["Japanese"]["ROUTINE_BODY"] = "";
	$placeHoldersROUTINES["Japanese"]["ROUTINE_BODY"] = "";
	$fieldLabelsROUTINES["Japanese"]["ROUTINE_DEFINITION"] = "ROUTINE DEFINITION";
	$fieldToolTipsROUTINES["Japanese"]["ROUTINE_DEFINITION"] = "";
	$placeHoldersROUTINES["Japanese"]["ROUTINE_DEFINITION"] = "";
	$fieldLabelsROUTINES["Japanese"]["EXTERNAL_NAME"] = "EXTERNAL NAME";
	$fieldToolTipsROUTINES["Japanese"]["EXTERNAL_NAME"] = "";
	$placeHoldersROUTINES["Japanese"]["EXTERNAL_NAME"] = "";
	$fieldLabelsROUTINES["Japanese"]["EXTERNAL_LANGUAGE"] = "EXTERNAL LANGUAGE";
	$fieldToolTipsROUTINES["Japanese"]["EXTERNAL_LANGUAGE"] = "";
	$placeHoldersROUTINES["Japanese"]["EXTERNAL_LANGUAGE"] = "";
	$fieldLabelsROUTINES["Japanese"]["PARAMETER_STYLE"] = "PARAMETER STYLE";
	$fieldToolTipsROUTINES["Japanese"]["PARAMETER_STYLE"] = "";
	$placeHoldersROUTINES["Japanese"]["PARAMETER_STYLE"] = "";
	$fieldLabelsROUTINES["Japanese"]["IS_DETERMINISTIC"] = "IS DETERMINISTIC";
	$fieldToolTipsROUTINES["Japanese"]["IS_DETERMINISTIC"] = "";
	$placeHoldersROUTINES["Japanese"]["IS_DETERMINISTIC"] = "";
	$fieldLabelsROUTINES["Japanese"]["SQL_DATA_ACCESS"] = "SQL DATA ACCESS";
	$fieldToolTipsROUTINES["Japanese"]["SQL_DATA_ACCESS"] = "";
	$placeHoldersROUTINES["Japanese"]["SQL_DATA_ACCESS"] = "";
	$fieldLabelsROUTINES["Japanese"]["SQL_PATH"] = "SQL PATH";
	$fieldToolTipsROUTINES["Japanese"]["SQL_PATH"] = "";
	$placeHoldersROUTINES["Japanese"]["SQL_PATH"] = "";
	$fieldLabelsROUTINES["Japanese"]["SECURITY_TYPE"] = "SECURITY TYPE";
	$fieldToolTipsROUTINES["Japanese"]["SECURITY_TYPE"] = "";
	$placeHoldersROUTINES["Japanese"]["SECURITY_TYPE"] = "";
	$fieldLabelsROUTINES["Japanese"]["CREATED"] = "CREATED";
	$fieldToolTipsROUTINES["Japanese"]["CREATED"] = "";
	$placeHoldersROUTINES["Japanese"]["CREATED"] = "";
	$fieldLabelsROUTINES["Japanese"]["LAST_ALTERED"] = "LAST ALTERED";
	$fieldToolTipsROUTINES["Japanese"]["LAST_ALTERED"] = "";
	$placeHoldersROUTINES["Japanese"]["LAST_ALTERED"] = "";
	$fieldLabelsROUTINES["Japanese"]["SQL_MODE"] = "SQL MODE";
	$fieldToolTipsROUTINES["Japanese"]["SQL_MODE"] = "";
	$placeHoldersROUTINES["Japanese"]["SQL_MODE"] = "";
	$fieldLabelsROUTINES["Japanese"]["ROUTINE_COMMENT"] = "ROUTINE COMMENT";
	$fieldToolTipsROUTINES["Japanese"]["ROUTINE_COMMENT"] = "";
	$placeHoldersROUTINES["Japanese"]["ROUTINE_COMMENT"] = "";
	$fieldLabelsROUTINES["Japanese"]["DEFINER"] = "DEFINER";
	$fieldToolTipsROUTINES["Japanese"]["DEFINER"] = "";
	$placeHoldersROUTINES["Japanese"]["DEFINER"] = "";
	$fieldLabelsROUTINES["Japanese"]["CHARACTER_SET_CLIENT"] = "CHARACTER SET CLIENT";
	$fieldToolTipsROUTINES["Japanese"]["CHARACTER_SET_CLIENT"] = "";
	$placeHoldersROUTINES["Japanese"]["CHARACTER_SET_CLIENT"] = "";
	$fieldLabelsROUTINES["Japanese"]["COLLATION_CONNECTION"] = "COLLATION CONNECTION";
	$fieldToolTipsROUTINES["Japanese"]["COLLATION_CONNECTION"] = "";
	$placeHoldersROUTINES["Japanese"]["COLLATION_CONNECTION"] = "";
	$fieldLabelsROUTINES["Japanese"]["DATABASE_COLLATION"] = "DATABASE COLLATION";
	$fieldToolTipsROUTINES["Japanese"]["DATABASE_COLLATION"] = "";
	$placeHoldersROUTINES["Japanese"]["DATABASE_COLLATION"] = "";
	if (count($fieldToolTipsROUTINES["Japanese"]))
		$tdataROUTINES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsROUTINES["English"] = array();
	$fieldToolTipsROUTINES["English"] = array();
	$placeHoldersROUTINES["English"] = array();
	$pageTitlesROUTINES["English"] = array();
	$fieldLabelsROUTINES["English"]["SPECIFIC_NAME"] = "SPECIFIC NAME";
	$fieldToolTipsROUTINES["English"]["SPECIFIC_NAME"] = "";
	$placeHoldersROUTINES["English"]["SPECIFIC_NAME"] = "";
	$fieldLabelsROUTINES["English"]["ROUTINE_CATALOG"] = "ROUTINE CATALOG";
	$fieldToolTipsROUTINES["English"]["ROUTINE_CATALOG"] = "";
	$placeHoldersROUTINES["English"]["ROUTINE_CATALOG"] = "";
	$fieldLabelsROUTINES["English"]["ROUTINE_SCHEMA"] = "ROUTINE SCHEMA";
	$fieldToolTipsROUTINES["English"]["ROUTINE_SCHEMA"] = "";
	$placeHoldersROUTINES["English"]["ROUTINE_SCHEMA"] = "";
	$fieldLabelsROUTINES["English"]["ROUTINE_NAME"] = "ROUTINE NAME";
	$fieldToolTipsROUTINES["English"]["ROUTINE_NAME"] = "";
	$placeHoldersROUTINES["English"]["ROUTINE_NAME"] = "";
	$fieldLabelsROUTINES["English"]["ROUTINE_TYPE"] = "ROUTINE TYPE";
	$fieldToolTipsROUTINES["English"]["ROUTINE_TYPE"] = "";
	$placeHoldersROUTINES["English"]["ROUTINE_TYPE"] = "";
	$fieldLabelsROUTINES["English"]["DATA_TYPE"] = "DATA TYPE";
	$fieldToolTipsROUTINES["English"]["DATA_TYPE"] = "";
	$placeHoldersROUTINES["English"]["DATA_TYPE"] = "";
	$fieldLabelsROUTINES["English"]["CHARACTER_MAXIMUM_LENGTH"] = "CHARACTER MAXIMUM LENGTH";
	$fieldToolTipsROUTINES["English"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$placeHoldersROUTINES["English"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$fieldLabelsROUTINES["English"]["CHARACTER_OCTET_LENGTH"] = "CHARACTER OCTET LENGTH";
	$fieldToolTipsROUTINES["English"]["CHARACTER_OCTET_LENGTH"] = "";
	$placeHoldersROUTINES["English"]["CHARACTER_OCTET_LENGTH"] = "";
	$fieldLabelsROUTINES["English"]["NUMERIC_PRECISION"] = "NUMERIC PRECISION";
	$fieldToolTipsROUTINES["English"]["NUMERIC_PRECISION"] = "";
	$placeHoldersROUTINES["English"]["NUMERIC_PRECISION"] = "";
	$fieldLabelsROUTINES["English"]["NUMERIC_SCALE"] = "NUMERIC SCALE";
	$fieldToolTipsROUTINES["English"]["NUMERIC_SCALE"] = "";
	$placeHoldersROUTINES["English"]["NUMERIC_SCALE"] = "";
	$fieldLabelsROUTINES["English"]["DATETIME_PRECISION"] = "DATETIME PRECISION";
	$fieldToolTipsROUTINES["English"]["DATETIME_PRECISION"] = "";
	$placeHoldersROUTINES["English"]["DATETIME_PRECISION"] = "";
	$fieldLabelsROUTINES["English"]["CHARACTER_SET_NAME"] = "CHARACTER SET NAME";
	$fieldToolTipsROUTINES["English"]["CHARACTER_SET_NAME"] = "";
	$placeHoldersROUTINES["English"]["CHARACTER_SET_NAME"] = "";
	$fieldLabelsROUTINES["English"]["COLLATION_NAME"] = "COLLATION NAME";
	$fieldToolTipsROUTINES["English"]["COLLATION_NAME"] = "";
	$placeHoldersROUTINES["English"]["COLLATION_NAME"] = "";
	$fieldLabelsROUTINES["English"]["DTD_IDENTIFIER"] = "DTD IDENTIFIER";
	$fieldToolTipsROUTINES["English"]["DTD_IDENTIFIER"] = "";
	$placeHoldersROUTINES["English"]["DTD_IDENTIFIER"] = "";
	$fieldLabelsROUTINES["English"]["ROUTINE_BODY"] = "ROUTINE BODY";
	$fieldToolTipsROUTINES["English"]["ROUTINE_BODY"] = "";
	$placeHoldersROUTINES["English"]["ROUTINE_BODY"] = "";
	$fieldLabelsROUTINES["English"]["ROUTINE_DEFINITION"] = "ROUTINE DEFINITION";
	$fieldToolTipsROUTINES["English"]["ROUTINE_DEFINITION"] = "";
	$placeHoldersROUTINES["English"]["ROUTINE_DEFINITION"] = "";
	$fieldLabelsROUTINES["English"]["EXTERNAL_NAME"] = "EXTERNAL NAME";
	$fieldToolTipsROUTINES["English"]["EXTERNAL_NAME"] = "";
	$placeHoldersROUTINES["English"]["EXTERNAL_NAME"] = "";
	$fieldLabelsROUTINES["English"]["EXTERNAL_LANGUAGE"] = "EXTERNAL LANGUAGE";
	$fieldToolTipsROUTINES["English"]["EXTERNAL_LANGUAGE"] = "";
	$placeHoldersROUTINES["English"]["EXTERNAL_LANGUAGE"] = "";
	$fieldLabelsROUTINES["English"]["PARAMETER_STYLE"] = "PARAMETER STYLE";
	$fieldToolTipsROUTINES["English"]["PARAMETER_STYLE"] = "";
	$placeHoldersROUTINES["English"]["PARAMETER_STYLE"] = "";
	$fieldLabelsROUTINES["English"]["IS_DETERMINISTIC"] = "IS DETERMINISTIC";
	$fieldToolTipsROUTINES["English"]["IS_DETERMINISTIC"] = "";
	$placeHoldersROUTINES["English"]["IS_DETERMINISTIC"] = "";
	$fieldLabelsROUTINES["English"]["SQL_DATA_ACCESS"] = "SQL DATA ACCESS";
	$fieldToolTipsROUTINES["English"]["SQL_DATA_ACCESS"] = "";
	$placeHoldersROUTINES["English"]["SQL_DATA_ACCESS"] = "";
	$fieldLabelsROUTINES["English"]["SQL_PATH"] = "SQL PATH";
	$fieldToolTipsROUTINES["English"]["SQL_PATH"] = "";
	$placeHoldersROUTINES["English"]["SQL_PATH"] = "";
	$fieldLabelsROUTINES["English"]["SECURITY_TYPE"] = "SECURITY TYPE";
	$fieldToolTipsROUTINES["English"]["SECURITY_TYPE"] = "";
	$placeHoldersROUTINES["English"]["SECURITY_TYPE"] = "";
	$fieldLabelsROUTINES["English"]["CREATED"] = "CREATED";
	$fieldToolTipsROUTINES["English"]["CREATED"] = "";
	$placeHoldersROUTINES["English"]["CREATED"] = "";
	$fieldLabelsROUTINES["English"]["LAST_ALTERED"] = "LAST ALTERED";
	$fieldToolTipsROUTINES["English"]["LAST_ALTERED"] = "";
	$placeHoldersROUTINES["English"]["LAST_ALTERED"] = "";
	$fieldLabelsROUTINES["English"]["SQL_MODE"] = "SQL MODE";
	$fieldToolTipsROUTINES["English"]["SQL_MODE"] = "";
	$placeHoldersROUTINES["English"]["SQL_MODE"] = "";
	$fieldLabelsROUTINES["English"]["ROUTINE_COMMENT"] = "ROUTINE COMMENT";
	$fieldToolTipsROUTINES["English"]["ROUTINE_COMMENT"] = "";
	$placeHoldersROUTINES["English"]["ROUTINE_COMMENT"] = "";
	$fieldLabelsROUTINES["English"]["DEFINER"] = "DEFINER";
	$fieldToolTipsROUTINES["English"]["DEFINER"] = "";
	$placeHoldersROUTINES["English"]["DEFINER"] = "";
	$fieldLabelsROUTINES["English"]["CHARACTER_SET_CLIENT"] = "CHARACTER SET CLIENT";
	$fieldToolTipsROUTINES["English"]["CHARACTER_SET_CLIENT"] = "";
	$placeHoldersROUTINES["English"]["CHARACTER_SET_CLIENT"] = "";
	$fieldLabelsROUTINES["English"]["COLLATION_CONNECTION"] = "COLLATION CONNECTION";
	$fieldToolTipsROUTINES["English"]["COLLATION_CONNECTION"] = "";
	$placeHoldersROUTINES["English"]["COLLATION_CONNECTION"] = "";
	$fieldLabelsROUTINES["English"]["DATABASE_COLLATION"] = "DATABASE COLLATION";
	$fieldToolTipsROUTINES["English"]["DATABASE_COLLATION"] = "";
	$placeHoldersROUTINES["English"]["DATABASE_COLLATION"] = "";
	if (count($fieldToolTipsROUTINES["English"]))
		$tdataROUTINES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsROUTINES[""] = array();
	$fieldToolTipsROUTINES[""] = array();
	$placeHoldersROUTINES[""] = array();
	$pageTitlesROUTINES[""] = array();
	$fieldLabelsROUTINES[""]["SPECIFIC_NAME"] = "SPECIFIC NAME";
	$fieldToolTipsROUTINES[""]["SPECIFIC_NAME"] = "";
	$placeHoldersROUTINES[""]["SPECIFIC_NAME"] = "";
	$fieldLabelsROUTINES[""]["ROUTINE_CATALOG"] = "ROUTINE CATALOG";
	$fieldToolTipsROUTINES[""]["ROUTINE_CATALOG"] = "";
	$placeHoldersROUTINES[""]["ROUTINE_CATALOG"] = "";
	$fieldLabelsROUTINES[""]["ROUTINE_SCHEMA"] = "ROUTINE SCHEMA";
	$fieldToolTipsROUTINES[""]["ROUTINE_SCHEMA"] = "";
	$placeHoldersROUTINES[""]["ROUTINE_SCHEMA"] = "";
	$fieldLabelsROUTINES[""]["ROUTINE_NAME"] = "ROUTINE NAME";
	$fieldToolTipsROUTINES[""]["ROUTINE_NAME"] = "";
	$placeHoldersROUTINES[""]["ROUTINE_NAME"] = "";
	$fieldLabelsROUTINES[""]["ROUTINE_TYPE"] = "ROUTINE TYPE";
	$fieldToolTipsROUTINES[""]["ROUTINE_TYPE"] = "";
	$placeHoldersROUTINES[""]["ROUTINE_TYPE"] = "";
	$fieldLabelsROUTINES[""]["DATA_TYPE"] = "DATA TYPE";
	$fieldToolTipsROUTINES[""]["DATA_TYPE"] = "";
	$placeHoldersROUTINES[""]["DATA_TYPE"] = "";
	$fieldLabelsROUTINES[""]["CHARACTER_MAXIMUM_LENGTH"] = "CHARACTER MAXIMUM LENGTH";
	$fieldToolTipsROUTINES[""]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$placeHoldersROUTINES[""]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$fieldLabelsROUTINES[""]["CHARACTER_OCTET_LENGTH"] = "CHARACTER OCTET LENGTH";
	$fieldToolTipsROUTINES[""]["CHARACTER_OCTET_LENGTH"] = "";
	$placeHoldersROUTINES[""]["CHARACTER_OCTET_LENGTH"] = "";
	$fieldLabelsROUTINES[""]["NUMERIC_PRECISION"] = "NUMERIC PRECISION";
	$fieldToolTipsROUTINES[""]["NUMERIC_PRECISION"] = "";
	$placeHoldersROUTINES[""]["NUMERIC_PRECISION"] = "";
	$fieldLabelsROUTINES[""]["NUMERIC_SCALE"] = "NUMERIC SCALE";
	$fieldToolTipsROUTINES[""]["NUMERIC_SCALE"] = "";
	$placeHoldersROUTINES[""]["NUMERIC_SCALE"] = "";
	$fieldLabelsROUTINES[""]["DATETIME_PRECISION"] = "DATETIME PRECISION";
	$fieldToolTipsROUTINES[""]["DATETIME_PRECISION"] = "";
	$placeHoldersROUTINES[""]["DATETIME_PRECISION"] = "";
	$fieldLabelsROUTINES[""]["CHARACTER_SET_NAME"] = "CHARACTER SET NAME";
	$fieldToolTipsROUTINES[""]["CHARACTER_SET_NAME"] = "";
	$placeHoldersROUTINES[""]["CHARACTER_SET_NAME"] = "";
	$fieldLabelsROUTINES[""]["COLLATION_NAME"] = "COLLATION NAME";
	$fieldToolTipsROUTINES[""]["COLLATION_NAME"] = "";
	$placeHoldersROUTINES[""]["COLLATION_NAME"] = "";
	$fieldLabelsROUTINES[""]["DTD_IDENTIFIER"] = "DTD IDENTIFIER";
	$fieldToolTipsROUTINES[""]["DTD_IDENTIFIER"] = "";
	$placeHoldersROUTINES[""]["DTD_IDENTIFIER"] = "";
	$fieldLabelsROUTINES[""]["ROUTINE_BODY"] = "ROUTINE BODY";
	$fieldToolTipsROUTINES[""]["ROUTINE_BODY"] = "";
	$placeHoldersROUTINES[""]["ROUTINE_BODY"] = "";
	$fieldLabelsROUTINES[""]["ROUTINE_DEFINITION"] = "ROUTINE DEFINITION";
	$fieldToolTipsROUTINES[""]["ROUTINE_DEFINITION"] = "";
	$placeHoldersROUTINES[""]["ROUTINE_DEFINITION"] = "";
	$fieldLabelsROUTINES[""]["EXTERNAL_NAME"] = "EXTERNAL NAME";
	$fieldToolTipsROUTINES[""]["EXTERNAL_NAME"] = "";
	$placeHoldersROUTINES[""]["EXTERNAL_NAME"] = "";
	$fieldLabelsROUTINES[""]["EXTERNAL_LANGUAGE"] = "EXTERNAL LANGUAGE";
	$fieldToolTipsROUTINES[""]["EXTERNAL_LANGUAGE"] = "";
	$placeHoldersROUTINES[""]["EXTERNAL_LANGUAGE"] = "";
	$fieldLabelsROUTINES[""]["PARAMETER_STYLE"] = "PARAMETER STYLE";
	$fieldToolTipsROUTINES[""]["PARAMETER_STYLE"] = "";
	$placeHoldersROUTINES[""]["PARAMETER_STYLE"] = "";
	$fieldLabelsROUTINES[""]["IS_DETERMINISTIC"] = "IS DETERMINISTIC";
	$fieldToolTipsROUTINES[""]["IS_DETERMINISTIC"] = "";
	$placeHoldersROUTINES[""]["IS_DETERMINISTIC"] = "";
	$fieldLabelsROUTINES[""]["SQL_DATA_ACCESS"] = "SQL DATA ACCESS";
	$fieldToolTipsROUTINES[""]["SQL_DATA_ACCESS"] = "";
	$placeHoldersROUTINES[""]["SQL_DATA_ACCESS"] = "";
	$fieldLabelsROUTINES[""]["SQL_PATH"] = "SQL PATH";
	$fieldToolTipsROUTINES[""]["SQL_PATH"] = "";
	$placeHoldersROUTINES[""]["SQL_PATH"] = "";
	$fieldLabelsROUTINES[""]["SECURITY_TYPE"] = "SECURITY TYPE";
	$fieldToolTipsROUTINES[""]["SECURITY_TYPE"] = "";
	$placeHoldersROUTINES[""]["SECURITY_TYPE"] = "";
	$fieldLabelsROUTINES[""]["CREATED"] = "CREATED";
	$fieldToolTipsROUTINES[""]["CREATED"] = "";
	$placeHoldersROUTINES[""]["CREATED"] = "";
	$fieldLabelsROUTINES[""]["LAST_ALTERED"] = "LAST ALTERED";
	$fieldToolTipsROUTINES[""]["LAST_ALTERED"] = "";
	$placeHoldersROUTINES[""]["LAST_ALTERED"] = "";
	$fieldLabelsROUTINES[""]["SQL_MODE"] = "SQL MODE";
	$fieldToolTipsROUTINES[""]["SQL_MODE"] = "";
	$placeHoldersROUTINES[""]["SQL_MODE"] = "";
	$fieldLabelsROUTINES[""]["ROUTINE_COMMENT"] = "ROUTINE COMMENT";
	$fieldToolTipsROUTINES[""]["ROUTINE_COMMENT"] = "";
	$placeHoldersROUTINES[""]["ROUTINE_COMMENT"] = "";
	$fieldLabelsROUTINES[""]["DEFINER"] = "DEFINER";
	$fieldToolTipsROUTINES[""]["DEFINER"] = "";
	$placeHoldersROUTINES[""]["DEFINER"] = "";
	$fieldLabelsROUTINES[""]["CHARACTER_SET_CLIENT"] = "CHARACTER SET CLIENT";
	$fieldToolTipsROUTINES[""]["CHARACTER_SET_CLIENT"] = "";
	$placeHoldersROUTINES[""]["CHARACTER_SET_CLIENT"] = "";
	$fieldLabelsROUTINES[""]["COLLATION_CONNECTION"] = "COLLATION CONNECTION";
	$fieldToolTipsROUTINES[""]["COLLATION_CONNECTION"] = "";
	$placeHoldersROUTINES[""]["COLLATION_CONNECTION"] = "";
	$fieldLabelsROUTINES[""]["DATABASE_COLLATION"] = "DATABASE COLLATION";
	$fieldToolTipsROUTINES[""]["DATABASE_COLLATION"] = "";
	$placeHoldersROUTINES[""]["DATABASE_COLLATION"] = "";
	if (count($fieldToolTipsROUTINES[""]))
		$tdataROUTINES[".isUseToolTips"] = true;
}


	$tdataROUTINES[".NCSearch"] = true;



$tdataROUTINES[".shortTableName"] = "ROUTINES";
$tdataROUTINES[".nSecOptions"] = 0;
$tdataROUTINES[".recsPerRowPrint"] = 1;
$tdataROUTINES[".mainTableOwnerID"] = "";
$tdataROUTINES[".moveNext"] = 1;
$tdataROUTINES[".entityType"] = 0;

$tdataROUTINES[".strOriginalTableName"] = "ROUTINES";

	



$tdataROUTINES[".showAddInPopup"] = false;

$tdataROUTINES[".showEditInPopup"] = false;

$tdataROUTINES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataROUTINES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataROUTINES[".fieldsForRegister"] = array();
	
$tdataROUTINES[".listAjax"] = false;

	$tdataROUTINES[".audit"] = false;

	$tdataROUTINES[".locking"] = false;



$tdataROUTINES[".list"] = true;



$tdataROUTINES[".reorderRecordsByHeader"] = true;




$tdataROUTINES[".import"] = true;

$tdataROUTINES[".exportTo"] = true;

$tdataROUTINES[".printFriendly"] = true;


$tdataROUTINES[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataROUTINES[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataROUTINES[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataROUTINES[".searchSaving"] = false;
//

$tdataROUTINES[".showSearchPanel"] = true;
		$tdataROUTINES[".flexibleSearch"] = true;

$tdataROUTINES[".isUseAjaxSuggest"] = true;

$tdataROUTINES[".rowHighlite"] = true;



				

$tdataROUTINES[".ajaxCodeSnippetAdded"] = false;

$tdataROUTINES[".buttonsAdded"] = false;

$tdataROUTINES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataROUTINES[".isUseTimeForSearch"] = false;





$tdataROUTINES[".allSearchFields"] = array();
$tdataROUTINES[".filterFields"] = array();
$tdataROUTINES[".requiredSearchFields"] = array();

$tdataROUTINES[".allSearchFields"][] = "SPECIFIC_NAME";
	$tdataROUTINES[".allSearchFields"][] = "ROUTINE_CATALOG";
	$tdataROUTINES[".allSearchFields"][] = "ROUTINE_SCHEMA";
	$tdataROUTINES[".allSearchFields"][] = "ROUTINE_NAME";
	$tdataROUTINES[".allSearchFields"][] = "ROUTINE_TYPE";
	$tdataROUTINES[".allSearchFields"][] = "DATA_TYPE";
	$tdataROUTINES[".allSearchFields"][] = "CHARACTER_MAXIMUM_LENGTH";
	$tdataROUTINES[".allSearchFields"][] = "CHARACTER_OCTET_LENGTH";
	$tdataROUTINES[".allSearchFields"][] = "NUMERIC_PRECISION";
	$tdataROUTINES[".allSearchFields"][] = "NUMERIC_SCALE";
	$tdataROUTINES[".allSearchFields"][] = "DATETIME_PRECISION";
	$tdataROUTINES[".allSearchFields"][] = "CHARACTER_SET_NAME";
	$tdataROUTINES[".allSearchFields"][] = "COLLATION_NAME";
	$tdataROUTINES[".allSearchFields"][] = "DTD_IDENTIFIER";
	$tdataROUTINES[".allSearchFields"][] = "ROUTINE_BODY";
	$tdataROUTINES[".allSearchFields"][] = "ROUTINE_DEFINITION";
	$tdataROUTINES[".allSearchFields"][] = "EXTERNAL_NAME";
	$tdataROUTINES[".allSearchFields"][] = "EXTERNAL_LANGUAGE";
	$tdataROUTINES[".allSearchFields"][] = "PARAMETER_STYLE";
	$tdataROUTINES[".allSearchFields"][] = "IS_DETERMINISTIC";
	$tdataROUTINES[".allSearchFields"][] = "SQL_DATA_ACCESS";
	$tdataROUTINES[".allSearchFields"][] = "SQL_PATH";
	$tdataROUTINES[".allSearchFields"][] = "SECURITY_TYPE";
	$tdataROUTINES[".allSearchFields"][] = "CREATED";
	$tdataROUTINES[".allSearchFields"][] = "LAST_ALTERED";
	$tdataROUTINES[".allSearchFields"][] = "SQL_MODE";
	$tdataROUTINES[".allSearchFields"][] = "ROUTINE_COMMENT";
	$tdataROUTINES[".allSearchFields"][] = "DEFINER";
	$tdataROUTINES[".allSearchFields"][] = "CHARACTER_SET_CLIENT";
	$tdataROUTINES[".allSearchFields"][] = "COLLATION_CONNECTION";
	$tdataROUTINES[".allSearchFields"][] = "DATABASE_COLLATION";
	

$tdataROUTINES[".googleLikeFields"] = array();
$tdataROUTINES[".googleLikeFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".googleLikeFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".googleLikeFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".googleLikeFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".googleLikeFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".googleLikeFields"][] = "DATA_TYPE";
$tdataROUTINES[".googleLikeFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".googleLikeFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".googleLikeFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".googleLikeFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".googleLikeFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".googleLikeFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".googleLikeFields"][] = "COLLATION_NAME";
$tdataROUTINES[".googleLikeFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".googleLikeFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".googleLikeFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".googleLikeFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".googleLikeFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".googleLikeFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".googleLikeFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".googleLikeFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".googleLikeFields"][] = "SQL_PATH";
$tdataROUTINES[".googleLikeFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".googleLikeFields"][] = "CREATED";
$tdataROUTINES[".googleLikeFields"][] = "LAST_ALTERED";
$tdataROUTINES[".googleLikeFields"][] = "SQL_MODE";
$tdataROUTINES[".googleLikeFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".googleLikeFields"][] = "DEFINER";
$tdataROUTINES[".googleLikeFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".googleLikeFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".googleLikeFields"][] = "DATABASE_COLLATION";


$tdataROUTINES[".advSearchFields"] = array();
$tdataROUTINES[".advSearchFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".advSearchFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".advSearchFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".advSearchFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".advSearchFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".advSearchFields"][] = "DATA_TYPE";
$tdataROUTINES[".advSearchFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".advSearchFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".advSearchFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".advSearchFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".advSearchFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".advSearchFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".advSearchFields"][] = "COLLATION_NAME";
$tdataROUTINES[".advSearchFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".advSearchFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".advSearchFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".advSearchFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".advSearchFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".advSearchFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".advSearchFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".advSearchFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".advSearchFields"][] = "SQL_PATH";
$tdataROUTINES[".advSearchFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".advSearchFields"][] = "CREATED";
$tdataROUTINES[".advSearchFields"][] = "LAST_ALTERED";
$tdataROUTINES[".advSearchFields"][] = "SQL_MODE";
$tdataROUTINES[".advSearchFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".advSearchFields"][] = "DEFINER";
$tdataROUTINES[".advSearchFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".advSearchFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".advSearchFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".tableType"] = "list";

$tdataROUTINES[".printerPageOrientation"] = 0;
$tdataROUTINES[".nPrinterPageScale"] = 100;

$tdataROUTINES[".nPrinterSplitRecords"] = 40;

$tdataROUTINES[".nPrinterPDFSplitRecords"] = 40;



$tdataROUTINES[".geocodingEnabled"] = false;





$tdataROUTINES[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataROUTINES[".pageSize"] = 20;

$tdataROUTINES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataROUTINES[".strOrderBy"] = $tstrOrderBy;

$tdataROUTINES[".orderindexes"] = array();

$tdataROUTINES[".sqlHead"] = "SELECT SPECIFIC_NAME,  	ROUTINE_CATALOG,  	ROUTINE_SCHEMA,  	ROUTINE_NAME,  	ROUTINE_TYPE,  	DATA_TYPE,  	CHARACTER_MAXIMUM_LENGTH,  	CHARACTER_OCTET_LENGTH,  	NUMERIC_PRECISION,  	NUMERIC_SCALE,  	DATETIME_PRECISION,  	CHARACTER_SET_NAME,  	COLLATION_NAME,  	DTD_IDENTIFIER,  	ROUTINE_BODY,  	ROUTINE_DEFINITION,  	EXTERNAL_NAME,  	EXTERNAL_LANGUAGE,  	PARAMETER_STYLE,  	IS_DETERMINISTIC,  	SQL_DATA_ACCESS,  	SQL_PATH,  	SECURITY_TYPE,  	CREATED,  	LAST_ALTERED,  	SQL_MODE,  	ROUTINE_COMMENT,  	DEFINER,  	CHARACTER_SET_CLIENT,  	COLLATION_CONNECTION,  	DATABASE_COLLATION";
$tdataROUTINES[".sqlFrom"] = "FROM ROUTINES";
$tdataROUTINES[".sqlWhereExpr"] = "";
$tdataROUTINES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataROUTINES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataROUTINES[".arrGroupsPerPage"] = $arrGPP;

$tdataROUTINES[".highlightSearchResults"] = true;

$tableKeysROUTINES = array();
$tdataROUTINES[".Keys"] = $tableKeysROUTINES;

$tdataROUTINES[".listFields"] = array();
$tdataROUTINES[".listFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".listFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".listFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".listFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".listFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".listFields"][] = "DATA_TYPE";
$tdataROUTINES[".listFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".listFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".listFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".listFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".listFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".listFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".listFields"][] = "COLLATION_NAME";
$tdataROUTINES[".listFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".listFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".listFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".listFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".listFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".listFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".listFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".listFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".listFields"][] = "SQL_PATH";
$tdataROUTINES[".listFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".listFields"][] = "CREATED";
$tdataROUTINES[".listFields"][] = "LAST_ALTERED";
$tdataROUTINES[".listFields"][] = "SQL_MODE";
$tdataROUTINES[".listFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".listFields"][] = "DEFINER";
$tdataROUTINES[".listFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".listFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".listFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".hideMobileList"] = array();


$tdataROUTINES[".viewFields"] = array();
$tdataROUTINES[".viewFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".viewFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".viewFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".viewFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".viewFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".viewFields"][] = "DATA_TYPE";
$tdataROUTINES[".viewFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".viewFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".viewFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".viewFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".viewFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".viewFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".viewFields"][] = "COLLATION_NAME";
$tdataROUTINES[".viewFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".viewFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".viewFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".viewFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".viewFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".viewFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".viewFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".viewFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".viewFields"][] = "SQL_PATH";
$tdataROUTINES[".viewFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".viewFields"][] = "CREATED";
$tdataROUTINES[".viewFields"][] = "LAST_ALTERED";
$tdataROUTINES[".viewFields"][] = "SQL_MODE";
$tdataROUTINES[".viewFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".viewFields"][] = "DEFINER";
$tdataROUTINES[".viewFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".viewFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".viewFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".addFields"] = array();
$tdataROUTINES[".addFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".addFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".addFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".addFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".addFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".addFields"][] = "DATA_TYPE";
$tdataROUTINES[".addFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".addFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".addFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".addFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".addFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".addFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".addFields"][] = "COLLATION_NAME";
$tdataROUTINES[".addFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".addFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".addFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".addFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".addFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".addFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".addFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".addFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".addFields"][] = "SQL_PATH";
$tdataROUTINES[".addFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".addFields"][] = "CREATED";
$tdataROUTINES[".addFields"][] = "LAST_ALTERED";
$tdataROUTINES[".addFields"][] = "SQL_MODE";
$tdataROUTINES[".addFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".addFields"][] = "DEFINER";
$tdataROUTINES[".addFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".addFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".addFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".masterListFields"] = array();
$tdataROUTINES[".masterListFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".masterListFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".masterListFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".masterListFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".masterListFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".masterListFields"][] = "DATA_TYPE";
$tdataROUTINES[".masterListFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".masterListFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".masterListFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".masterListFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".masterListFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".masterListFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".masterListFields"][] = "COLLATION_NAME";
$tdataROUTINES[".masterListFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".masterListFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".masterListFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".masterListFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".masterListFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".masterListFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".masterListFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".masterListFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".masterListFields"][] = "SQL_PATH";
$tdataROUTINES[".masterListFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".masterListFields"][] = "CREATED";
$tdataROUTINES[".masterListFields"][] = "LAST_ALTERED";
$tdataROUTINES[".masterListFields"][] = "SQL_MODE";
$tdataROUTINES[".masterListFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".masterListFields"][] = "DEFINER";
$tdataROUTINES[".masterListFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".masterListFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".masterListFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".inlineAddFields"] = array();
$tdataROUTINES[".inlineAddFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".inlineAddFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".inlineAddFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".inlineAddFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".inlineAddFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".inlineAddFields"][] = "DATA_TYPE";
$tdataROUTINES[".inlineAddFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".inlineAddFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".inlineAddFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".inlineAddFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".inlineAddFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".inlineAddFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".inlineAddFields"][] = "COLLATION_NAME";
$tdataROUTINES[".inlineAddFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".inlineAddFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".inlineAddFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".inlineAddFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".inlineAddFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".inlineAddFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".inlineAddFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".inlineAddFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".inlineAddFields"][] = "SQL_PATH";
$tdataROUTINES[".inlineAddFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".inlineAddFields"][] = "CREATED";
$tdataROUTINES[".inlineAddFields"][] = "LAST_ALTERED";
$tdataROUTINES[".inlineAddFields"][] = "SQL_MODE";
$tdataROUTINES[".inlineAddFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".inlineAddFields"][] = "DEFINER";
$tdataROUTINES[".inlineAddFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".inlineAddFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".inlineAddFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".editFields"] = array();
$tdataROUTINES[".editFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".editFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".editFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".editFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".editFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".editFields"][] = "DATA_TYPE";
$tdataROUTINES[".editFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".editFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".editFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".editFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".editFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".editFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".editFields"][] = "COLLATION_NAME";
$tdataROUTINES[".editFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".editFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".editFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".editFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".editFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".editFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".editFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".editFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".editFields"][] = "SQL_PATH";
$tdataROUTINES[".editFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".editFields"][] = "CREATED";
$tdataROUTINES[".editFields"][] = "LAST_ALTERED";
$tdataROUTINES[".editFields"][] = "SQL_MODE";
$tdataROUTINES[".editFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".editFields"][] = "DEFINER";
$tdataROUTINES[".editFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".editFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".editFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".inlineEditFields"] = array();
$tdataROUTINES[".inlineEditFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".inlineEditFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".inlineEditFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".inlineEditFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".inlineEditFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".inlineEditFields"][] = "DATA_TYPE";
$tdataROUTINES[".inlineEditFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".inlineEditFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".inlineEditFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".inlineEditFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".inlineEditFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".inlineEditFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".inlineEditFields"][] = "COLLATION_NAME";
$tdataROUTINES[".inlineEditFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".inlineEditFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".inlineEditFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".inlineEditFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".inlineEditFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".inlineEditFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".inlineEditFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".inlineEditFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".inlineEditFields"][] = "SQL_PATH";
$tdataROUTINES[".inlineEditFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".inlineEditFields"][] = "CREATED";
$tdataROUTINES[".inlineEditFields"][] = "LAST_ALTERED";
$tdataROUTINES[".inlineEditFields"][] = "SQL_MODE";
$tdataROUTINES[".inlineEditFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".inlineEditFields"][] = "DEFINER";
$tdataROUTINES[".inlineEditFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".inlineEditFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".inlineEditFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".updateSelectedFields"] = array();
$tdataROUTINES[".updateSelectedFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".updateSelectedFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".updateSelectedFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".updateSelectedFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".updateSelectedFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".updateSelectedFields"][] = "DATA_TYPE";
$tdataROUTINES[".updateSelectedFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".updateSelectedFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".updateSelectedFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".updateSelectedFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".updateSelectedFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".updateSelectedFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".updateSelectedFields"][] = "COLLATION_NAME";
$tdataROUTINES[".updateSelectedFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".updateSelectedFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".updateSelectedFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".updateSelectedFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".updateSelectedFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".updateSelectedFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".updateSelectedFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".updateSelectedFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".updateSelectedFields"][] = "SQL_PATH";
$tdataROUTINES[".updateSelectedFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".updateSelectedFields"][] = "CREATED";
$tdataROUTINES[".updateSelectedFields"][] = "LAST_ALTERED";
$tdataROUTINES[".updateSelectedFields"][] = "SQL_MODE";
$tdataROUTINES[".updateSelectedFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".updateSelectedFields"][] = "DEFINER";
$tdataROUTINES[".updateSelectedFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".updateSelectedFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".updateSelectedFields"][] = "DATABASE_COLLATION";


$tdataROUTINES[".exportFields"] = array();
$tdataROUTINES[".exportFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".exportFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".exportFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".exportFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".exportFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".exportFields"][] = "DATA_TYPE";
$tdataROUTINES[".exportFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".exportFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".exportFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".exportFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".exportFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".exportFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".exportFields"][] = "COLLATION_NAME";
$tdataROUTINES[".exportFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".exportFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".exportFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".exportFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".exportFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".exportFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".exportFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".exportFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".exportFields"][] = "SQL_PATH";
$tdataROUTINES[".exportFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".exportFields"][] = "CREATED";
$tdataROUTINES[".exportFields"][] = "LAST_ALTERED";
$tdataROUTINES[".exportFields"][] = "SQL_MODE";
$tdataROUTINES[".exportFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".exportFields"][] = "DEFINER";
$tdataROUTINES[".exportFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".exportFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".exportFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".importFields"] = array();
$tdataROUTINES[".importFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".importFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".importFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".importFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".importFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".importFields"][] = "DATA_TYPE";
$tdataROUTINES[".importFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".importFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".importFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".importFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".importFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".importFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".importFields"][] = "COLLATION_NAME";
$tdataROUTINES[".importFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".importFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".importFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".importFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".importFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".importFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".importFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".importFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".importFields"][] = "SQL_PATH";
$tdataROUTINES[".importFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".importFields"][] = "CREATED";
$tdataROUTINES[".importFields"][] = "LAST_ALTERED";
$tdataROUTINES[".importFields"][] = "SQL_MODE";
$tdataROUTINES[".importFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".importFields"][] = "DEFINER";
$tdataROUTINES[".importFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".importFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".importFields"][] = "DATABASE_COLLATION";

$tdataROUTINES[".printFields"] = array();
$tdataROUTINES[".printFields"][] = "SPECIFIC_NAME";
$tdataROUTINES[".printFields"][] = "ROUTINE_CATALOG";
$tdataROUTINES[".printFields"][] = "ROUTINE_SCHEMA";
$tdataROUTINES[".printFields"][] = "ROUTINE_NAME";
$tdataROUTINES[".printFields"][] = "ROUTINE_TYPE";
$tdataROUTINES[".printFields"][] = "DATA_TYPE";
$tdataROUTINES[".printFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataROUTINES[".printFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataROUTINES[".printFields"][] = "NUMERIC_PRECISION";
$tdataROUTINES[".printFields"][] = "NUMERIC_SCALE";
$tdataROUTINES[".printFields"][] = "DATETIME_PRECISION";
$tdataROUTINES[".printFields"][] = "CHARACTER_SET_NAME";
$tdataROUTINES[".printFields"][] = "COLLATION_NAME";
$tdataROUTINES[".printFields"][] = "DTD_IDENTIFIER";
$tdataROUTINES[".printFields"][] = "ROUTINE_BODY";
$tdataROUTINES[".printFields"][] = "ROUTINE_DEFINITION";
$tdataROUTINES[".printFields"][] = "EXTERNAL_NAME";
$tdataROUTINES[".printFields"][] = "EXTERNAL_LANGUAGE";
$tdataROUTINES[".printFields"][] = "PARAMETER_STYLE";
$tdataROUTINES[".printFields"][] = "IS_DETERMINISTIC";
$tdataROUTINES[".printFields"][] = "SQL_DATA_ACCESS";
$tdataROUTINES[".printFields"][] = "SQL_PATH";
$tdataROUTINES[".printFields"][] = "SECURITY_TYPE";
$tdataROUTINES[".printFields"][] = "CREATED";
$tdataROUTINES[".printFields"][] = "LAST_ALTERED";
$tdataROUTINES[".printFields"][] = "SQL_MODE";
$tdataROUTINES[".printFields"][] = "ROUTINE_COMMENT";
$tdataROUTINES[".printFields"][] = "DEFINER";
$tdataROUTINES[".printFields"][] = "CHARACTER_SET_CLIENT";
$tdataROUTINES[".printFields"][] = "COLLATION_CONNECTION";
$tdataROUTINES[".printFields"][] = "DATABASE_COLLATION";

//	SPECIFIC_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SPECIFIC_NAME";
	$fdata["GoodName"] = "SPECIFIC_NAME";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","SPECIFIC_NAME");
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

		$fdata["strField"] = "SPECIFIC_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SPECIFIC_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["SPECIFIC_NAME"] = $fdata;
//	ROUTINE_CATALOG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ROUTINE_CATALOG";
	$fdata["GoodName"] = "ROUTINE_CATALOG";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","ROUTINE_CATALOG");
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

		$fdata["strField"] = "ROUTINE_CATALOG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROUTINE_CATALOG";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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




	$tdataROUTINES["ROUTINE_CATALOG"] = $fdata;
//	ROUTINE_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ROUTINE_SCHEMA";
	$fdata["GoodName"] = "ROUTINE_SCHEMA";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","ROUTINE_SCHEMA");
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

		$fdata["strField"] = "ROUTINE_SCHEMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROUTINE_SCHEMA";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["ROUTINE_SCHEMA"] = $fdata;
//	ROUTINE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROUTINE_NAME";
	$fdata["GoodName"] = "ROUTINE_NAME";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","ROUTINE_NAME");
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

		$fdata["strField"] = "ROUTINE_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROUTINE_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["ROUTINE_NAME"] = $fdata;
//	ROUTINE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ROUTINE_TYPE";
	$fdata["GoodName"] = "ROUTINE_TYPE";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","ROUTINE_TYPE");
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

		$fdata["strField"] = "ROUTINE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROUTINE_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=9";

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




	$tdataROUTINES["ROUTINE_TYPE"] = $fdata;
//	DATA_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DATA_TYPE";
	$fdata["GoodName"] = "DATA_TYPE";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","DATA_TYPE");
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

		$fdata["strField"] = "DATA_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATA_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["DATA_TYPE"] = $fdata;
//	CHARACTER_MAXIMUM_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CHARACTER_MAXIMUM_LENGTH";
	$fdata["GoodName"] = "CHARACTER_MAXIMUM_LENGTH";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","CHARACTER_MAXIMUM_LENGTH");
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

		$fdata["strField"] = "CHARACTER_MAXIMUM_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_MAXIMUM_LENGTH";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataROUTINES["CHARACTER_MAXIMUM_LENGTH"] = $fdata;
//	CHARACTER_OCTET_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CHARACTER_OCTET_LENGTH";
	$fdata["GoodName"] = "CHARACTER_OCTET_LENGTH";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","CHARACTER_OCTET_LENGTH");
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

		$fdata["strField"] = "CHARACTER_OCTET_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_OCTET_LENGTH";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataROUTINES["CHARACTER_OCTET_LENGTH"] = $fdata;
//	NUMERIC_PRECISION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NUMERIC_PRECISION";
	$fdata["GoodName"] = "NUMERIC_PRECISION";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","NUMERIC_PRECISION");
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

		$fdata["strField"] = "NUMERIC_PRECISION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMERIC_PRECISION";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataROUTINES["NUMERIC_PRECISION"] = $fdata;
//	NUMERIC_SCALE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "NUMERIC_SCALE";
	$fdata["GoodName"] = "NUMERIC_SCALE";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","NUMERIC_SCALE");
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

		$fdata["strField"] = "NUMERIC_SCALE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMERIC_SCALE";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataROUTINES["NUMERIC_SCALE"] = $fdata;
//	DATETIME_PRECISION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DATETIME_PRECISION";
	$fdata["GoodName"] = "DATETIME_PRECISION";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","DATETIME_PRECISION");
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

		$fdata["strField"] = "DATETIME_PRECISION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATETIME_PRECISION";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataROUTINES["DATETIME_PRECISION"] = $fdata;
//	CHARACTER_SET_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CHARACTER_SET_NAME";
	$fdata["GoodName"] = "CHARACTER_SET_NAME";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","CHARACTER_SET_NAME");
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

		$fdata["strField"] = "CHARACTER_SET_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_SET_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["CHARACTER_SET_NAME"] = $fdata;
//	COLLATION_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "COLLATION_NAME";
	$fdata["GoodName"] = "COLLATION_NAME";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","COLLATION_NAME");
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

		$fdata["strField"] = "COLLATION_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLLATION_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["COLLATION_NAME"] = $fdata;
//	DTD_IDENTIFIER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DTD_IDENTIFIER";
	$fdata["GoodName"] = "DTD_IDENTIFIER";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","DTD_IDENTIFIER");
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

		$fdata["strField"] = "DTD_IDENTIFIER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DTD_IDENTIFIER";

	
	
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




	$tdataROUTINES["DTD_IDENTIFIER"] = $fdata;
//	ROUTINE_BODY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ROUTINE_BODY";
	$fdata["GoodName"] = "ROUTINE_BODY";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","ROUTINE_BODY");
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

		$fdata["strField"] = "ROUTINE_BODY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROUTINE_BODY";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataROUTINES["ROUTINE_BODY"] = $fdata;
//	ROUTINE_DEFINITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ROUTINE_DEFINITION";
	$fdata["GoodName"] = "ROUTINE_DEFINITION";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","ROUTINE_DEFINITION");
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

		$fdata["strField"] = "ROUTINE_DEFINITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROUTINE_DEFINITION";

	
	
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




	$tdataROUTINES["ROUTINE_DEFINITION"] = $fdata;
//	EXTERNAL_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EXTERNAL_NAME";
	$fdata["GoodName"] = "EXTERNAL_NAME";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","EXTERNAL_NAME");
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

		$fdata["strField"] = "EXTERNAL_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXTERNAL_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["EXTERNAL_NAME"] = $fdata;
//	EXTERNAL_LANGUAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EXTERNAL_LANGUAGE";
	$fdata["GoodName"] = "EXTERNAL_LANGUAGE";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","EXTERNAL_LANGUAGE");
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

		$fdata["strField"] = "EXTERNAL_LANGUAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXTERNAL_LANGUAGE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["EXTERNAL_LANGUAGE"] = $fdata;
//	PARAMETER_STYLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PARAMETER_STYLE";
	$fdata["GoodName"] = "PARAMETER_STYLE";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","PARAMETER_STYLE");
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

		$fdata["strField"] = "PARAMETER_STYLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PARAMETER_STYLE";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataROUTINES["PARAMETER_STYLE"] = $fdata;
//	IS_DETERMINISTIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "IS_DETERMINISTIC";
	$fdata["GoodName"] = "IS_DETERMINISTIC";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","IS_DETERMINISTIC");
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

		$fdata["strField"] = "IS_DETERMINISTIC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IS_DETERMINISTIC";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdataROUTINES["IS_DETERMINISTIC"] = $fdata;
//	SQL_DATA_ACCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SQL_DATA_ACCESS";
	$fdata["GoodName"] = "SQL_DATA_ACCESS";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","SQL_DATA_ACCESS");
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

		$fdata["strField"] = "SQL_DATA_ACCESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SQL_DATA_ACCESS";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["SQL_DATA_ACCESS"] = $fdata;
//	SQL_PATH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SQL_PATH";
	$fdata["GoodName"] = "SQL_PATH";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","SQL_PATH");
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

		$fdata["strField"] = "SQL_PATH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SQL_PATH";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataROUTINES["SQL_PATH"] = $fdata;
//	SECURITY_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SECURITY_TYPE";
	$fdata["GoodName"] = "SECURITY_TYPE";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","SECURITY_TYPE");
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

		$fdata["strField"] = "SECURITY_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SECURITY_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=7";

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




	$tdataROUTINES["SECURITY_TYPE"] = $fdata;
//	CREATED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CREATED";
	$fdata["GoodName"] = "CREATED";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","CREATED");
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

		$fdata["strField"] = "CREATED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CREATED";

	
	
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




	$tdataROUTINES["CREATED"] = $fdata;
//	LAST_ALTERED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "LAST_ALTERED";
	$fdata["GoodName"] = "LAST_ALTERED";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","LAST_ALTERED");
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

		$fdata["strField"] = "LAST_ALTERED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAST_ALTERED";

	
	
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




	$tdataROUTINES["LAST_ALTERED"] = $fdata;
//	SQL_MODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "SQL_MODE";
	$fdata["GoodName"] = "SQL_MODE";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","SQL_MODE");
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

		$fdata["strField"] = "SQL_MODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SQL_MODE";

	
	
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
			$edata["EditParams"].= " maxlength=8192";

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




	$tdataROUTINES["SQL_MODE"] = $fdata;
//	ROUTINE_COMMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ROUTINE_COMMENT";
	$fdata["GoodName"] = "ROUTINE_COMMENT";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","ROUTINE_COMMENT");
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

		$fdata["strField"] = "ROUTINE_COMMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROUTINE_COMMENT";

	
	
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




	$tdataROUTINES["ROUTINE_COMMENT"] = $fdata;
//	DEFINER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "DEFINER";
	$fdata["GoodName"] = "DEFINER";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","DEFINER");
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

		$fdata["strField"] = "DEFINER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEFINER";

	
	
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
			$edata["EditParams"].= " maxlength=77";

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




	$tdataROUTINES["DEFINER"] = $fdata;
//	CHARACTER_SET_CLIENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CHARACTER_SET_CLIENT";
	$fdata["GoodName"] = "CHARACTER_SET_CLIENT";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","CHARACTER_SET_CLIENT");
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

		$fdata["strField"] = "CHARACTER_SET_CLIENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_SET_CLIENT";

	
	
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




	$tdataROUTINES["CHARACTER_SET_CLIENT"] = $fdata;
//	COLLATION_CONNECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "COLLATION_CONNECTION";
	$fdata["GoodName"] = "COLLATION_CONNECTION";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","COLLATION_CONNECTION");
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

		$fdata["strField"] = "COLLATION_CONNECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLLATION_CONNECTION";

	
	
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




	$tdataROUTINES["COLLATION_CONNECTION"] = $fdata;
//	DATABASE_COLLATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DATABASE_COLLATION";
	$fdata["GoodName"] = "DATABASE_COLLATION";
	$fdata["ownerTable"] = "ROUTINES";
	$fdata["Label"] = GetFieldLabel("ROUTINES","DATABASE_COLLATION");
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

		$fdata["strField"] = "DATABASE_COLLATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATABASE_COLLATION";

	
	
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




	$tdataROUTINES["DATABASE_COLLATION"] = $fdata;


$tables_data["ROUTINES"]=&$tdataROUTINES;
$field_labels["ROUTINES"] = &$fieldLabelsROUTINES;
$fieldToolTips["ROUTINES"] = &$fieldToolTipsROUTINES;
$placeHolders["ROUTINES"] = &$placeHoldersROUTINES;
$page_titles["ROUTINES"] = &$pageTitlesROUTINES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ROUTINES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ROUTINES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ROUTINES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SPECIFIC_NAME,  	ROUTINE_CATALOG,  	ROUTINE_SCHEMA,  	ROUTINE_NAME,  	ROUTINE_TYPE,  	DATA_TYPE,  	CHARACTER_MAXIMUM_LENGTH,  	CHARACTER_OCTET_LENGTH,  	NUMERIC_PRECISION,  	NUMERIC_SCALE,  	DATETIME_PRECISION,  	CHARACTER_SET_NAME,  	COLLATION_NAME,  	DTD_IDENTIFIER,  	ROUTINE_BODY,  	ROUTINE_DEFINITION,  	EXTERNAL_NAME,  	EXTERNAL_LANGUAGE,  	PARAMETER_STYLE,  	IS_DETERMINISTIC,  	SQL_DATA_ACCESS,  	SQL_PATH,  	SECURITY_TYPE,  	CREATED,  	LAST_ALTERED,  	SQL_MODE,  	ROUTINE_COMMENT,  	DEFINER,  	CHARACTER_SET_CLIENT,  	COLLATION_CONNECTION,  	DATABASE_COLLATION";
$proto0["m_strFrom"] = "FROM ROUTINES";
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
	"m_strName" => "SPECIFIC_NAME",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto6["m_sql"] = "SPECIFIC_NAME";
$proto6["m_srcTableName"] = "ROUTINES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ROUTINE_CATALOG",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto8["m_sql"] = "ROUTINE_CATALOG";
$proto8["m_srcTableName"] = "ROUTINES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ROUTINE_SCHEMA",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto10["m_sql"] = "ROUTINE_SCHEMA";
$proto10["m_srcTableName"] = "ROUTINES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROUTINE_NAME",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto12["m_sql"] = "ROUTINE_NAME";
$proto12["m_srcTableName"] = "ROUTINES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ROUTINE_TYPE",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto14["m_sql"] = "ROUTINE_TYPE";
$proto14["m_srcTableName"] = "ROUTINES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DATA_TYPE",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto16["m_sql"] = "DATA_TYPE";
$proto16["m_srcTableName"] = "ROUTINES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_MAXIMUM_LENGTH",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto18["m_sql"] = "CHARACTER_MAXIMUM_LENGTH";
$proto18["m_srcTableName"] = "ROUTINES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_OCTET_LENGTH",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto20["m_sql"] = "CHARACTER_OCTET_LENGTH";
$proto20["m_srcTableName"] = "ROUTINES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERIC_PRECISION",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto22["m_sql"] = "NUMERIC_PRECISION";
$proto22["m_srcTableName"] = "ROUTINES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERIC_SCALE",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto24["m_sql"] = "NUMERIC_SCALE";
$proto24["m_srcTableName"] = "ROUTINES";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIME_PRECISION",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto26["m_sql"] = "DATETIME_PRECISION";
$proto26["m_srcTableName"] = "ROUTINES";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_SET_NAME",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto28["m_sql"] = "CHARACTER_SET_NAME";
$proto28["m_srcTableName"] = "ROUTINES";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "COLLATION_NAME",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto30["m_sql"] = "COLLATION_NAME";
$proto30["m_srcTableName"] = "ROUTINES";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DTD_IDENTIFIER",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto32["m_sql"] = "DTD_IDENTIFIER";
$proto32["m_srcTableName"] = "ROUTINES";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ROUTINE_BODY",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto34["m_sql"] = "ROUTINE_BODY";
$proto34["m_srcTableName"] = "ROUTINES";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ROUTINE_DEFINITION",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto36["m_sql"] = "ROUTINE_DEFINITION";
$proto36["m_srcTableName"] = "ROUTINES";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "EXTERNAL_NAME",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto38["m_sql"] = "EXTERNAL_NAME";
$proto38["m_srcTableName"] = "ROUTINES";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "EXTERNAL_LANGUAGE",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto40["m_sql"] = "EXTERNAL_LANGUAGE";
$proto40["m_srcTableName"] = "ROUTINES";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PARAMETER_STYLE",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto42["m_sql"] = "PARAMETER_STYLE";
$proto42["m_srcTableName"] = "ROUTINES";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "IS_DETERMINISTIC",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto44["m_sql"] = "IS_DETERMINISTIC";
$proto44["m_srcTableName"] = "ROUTINES";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SQL_DATA_ACCESS",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto46["m_sql"] = "SQL_DATA_ACCESS";
$proto46["m_srcTableName"] = "ROUTINES";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SQL_PATH",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto48["m_sql"] = "SQL_PATH";
$proto48["m_srcTableName"] = "ROUTINES";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SECURITY_TYPE",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto50["m_sql"] = "SECURITY_TYPE";
$proto50["m_srcTableName"] = "ROUTINES";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "CREATED",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto52["m_sql"] = "CREATED";
$proto52["m_srcTableName"] = "ROUTINES";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "LAST_ALTERED",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto54["m_sql"] = "LAST_ALTERED";
$proto54["m_srcTableName"] = "ROUTINES";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "SQL_MODE",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto56["m_sql"] = "SQL_MODE";
$proto56["m_srcTableName"] = "ROUTINES";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ROUTINE_COMMENT",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto58["m_sql"] = "ROUTINE_COMMENT";
$proto58["m_srcTableName"] = "ROUTINES";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DEFINER",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto60["m_sql"] = "DEFINER";
$proto60["m_srcTableName"] = "ROUTINES";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_SET_CLIENT",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto62["m_sql"] = "CHARACTER_SET_CLIENT";
$proto62["m_srcTableName"] = "ROUTINES";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "COLLATION_CONNECTION",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto64["m_sql"] = "COLLATION_CONNECTION";
$proto64["m_srcTableName"] = "ROUTINES";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DATABASE_COLLATION",
	"m_strTable" => "ROUTINES",
	"m_srcTableName" => "ROUTINES"
));

$proto66["m_sql"] = "DATABASE_COLLATION";
$proto66["m_srcTableName"] = "ROUTINES";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "ROUTINES";
$proto69["m_srcTableName"] = "ROUTINES";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "SPECIFIC_NAME";
$proto69["m_columns"][] = "ROUTINE_CATALOG";
$proto69["m_columns"][] = "ROUTINE_SCHEMA";
$proto69["m_columns"][] = "ROUTINE_NAME";
$proto69["m_columns"][] = "ROUTINE_TYPE";
$proto69["m_columns"][] = "DATA_TYPE";
$proto69["m_columns"][] = "CHARACTER_MAXIMUM_LENGTH";
$proto69["m_columns"][] = "CHARACTER_OCTET_LENGTH";
$proto69["m_columns"][] = "NUMERIC_PRECISION";
$proto69["m_columns"][] = "NUMERIC_SCALE";
$proto69["m_columns"][] = "DATETIME_PRECISION";
$proto69["m_columns"][] = "CHARACTER_SET_NAME";
$proto69["m_columns"][] = "COLLATION_NAME";
$proto69["m_columns"][] = "DTD_IDENTIFIER";
$proto69["m_columns"][] = "ROUTINE_BODY";
$proto69["m_columns"][] = "ROUTINE_DEFINITION";
$proto69["m_columns"][] = "EXTERNAL_NAME";
$proto69["m_columns"][] = "EXTERNAL_LANGUAGE";
$proto69["m_columns"][] = "PARAMETER_STYLE";
$proto69["m_columns"][] = "IS_DETERMINISTIC";
$proto69["m_columns"][] = "SQL_DATA_ACCESS";
$proto69["m_columns"][] = "SQL_PATH";
$proto69["m_columns"][] = "SECURITY_TYPE";
$proto69["m_columns"][] = "CREATED";
$proto69["m_columns"][] = "LAST_ALTERED";
$proto69["m_columns"][] = "SQL_MODE";
$proto69["m_columns"][] = "ROUTINE_COMMENT";
$proto69["m_columns"][] = "DEFINER";
$proto69["m_columns"][] = "CHARACTER_SET_CLIENT";
$proto69["m_columns"][] = "COLLATION_CONNECTION";
$proto69["m_columns"][] = "DATABASE_COLLATION";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "ROUTINES";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "ROUTINES";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ROUTINES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ROUTINES = createSqlQuery_ROUTINES();


	
						;

																															

$tdataROUTINES[".sqlquery"] = $queryData_ROUTINES;

$tableEvents["ROUTINES"] = new eventsBase;
$tdataROUTINES[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOUTPUT_DOCUMENT = array();
	$tdataOUTPUT_DOCUMENT[".truncateText"] = true;
	$tdataOUTPUT_DOCUMENT[".NumberOfChars"] = 80;
	$tdataOUTPUT_DOCUMENT[".ShortName"] = "OUTPUT_DOCUMENT";
	$tdataOUTPUT_DOCUMENT[".OwnerID"] = "";
	$tdataOUTPUT_DOCUMENT[".OriginalTable"] = "OUTPUT_DOCUMENT";

//	field labels
$fieldLabelsOUTPUT_DOCUMENT = array();
$fieldToolTipsOUTPUT_DOCUMENT = array();
$pageTitlesOUTPUT_DOCUMENT = array();
$placeHoldersOUTPUT_DOCUMENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"] = array();
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"] = array();
	$placeHoldersOUTPUT_DOCUMENT["Japanese"] = array();
	$pageTitlesOUTPUT_DOCUMENT["Japanese"] = array();
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_UID"] = "OUT DOC UID";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_UID"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_UID"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["PRO_UID"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["PRO_UID"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_REPORT_GENERATOR"] = "OUT DOC REPORT GENERATOR";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_REPORT_GENERATOR"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_REPORT_GENERATOR"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_LANDSCAPE"] = "OUT DOC LANDSCAPE";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_LANDSCAPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_LANDSCAPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_MEDIA"] = "OUT DOC MEDIA";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_MEDIA"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_MEDIA"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_LEFT_MARGIN"] = "OUT DOC LEFT MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_LEFT_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_LEFT_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_RIGHT_MARGIN"] = "OUT DOC RIGHT MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_RIGHT_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_RIGHT_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TOP_MARGIN"] = "OUT DOC TOP MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TOP_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TOP_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_BOTTOM_MARGIN"] = "OUT DOC BOTTOM MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_BOTTOM_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_BOTTOM_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_GENERATE"] = "OUT DOC GENERATE";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_GENERATE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_GENERATE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TYPE"] = "OUT DOC TYPE";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TYPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TYPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_CURRENT_REVISION"] = "OUT DOC CURRENT REVISION";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_CURRENT_REVISION"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_CURRENT_REVISION"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_FIELD_MAPPING"] = "OUT DOC FIELD MAPPING";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_FIELD_MAPPING"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_FIELD_MAPPING"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_VERSIONING"] = "OUT DOC VERSIONING";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_VERSIONING"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_VERSIONING"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_DESTINATION_PATH"] = "OUT DOC DESTINATION PATH";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_DESTINATION_PATH"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_DESTINATION_PATH"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TAGS"] = "OUT DOC TAGS";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TAGS"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TAGS"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_ENABLED"] = "OUT DOC PDF SECURITY ENABLED";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_ENABLED"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_ENABLED"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "OUT DOC PDF SECURITY OPEN PASSWORD";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "OUT DOC PDF SECURITY OWNER PASSWORD";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "OUT DOC PDF SECURITY PERMISSIONS";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_OPEN_TYPE"] = "OUT DOC OPEN TYPE";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_OPEN_TYPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_OPEN_TYPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TITLE"] = "OUT DOC TITLE";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TITLE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TITLE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_DESCRIPTION"] = "OUT DOC DESCRIPTION";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_DESCRIPTION"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_DESCRIPTION"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_FILENAME"] = "OUT DOC FILENAME";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_FILENAME"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_FILENAME"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TEMPLATE"] = "OUT DOC TEMPLATE";
	$fieldToolTipsOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TEMPLATE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["Japanese"]["OUT_DOC_TEMPLATE"] = "";
	if (count($fieldToolTipsOUTPUT_DOCUMENT["Japanese"]))
		$tdataOUTPUT_DOCUMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOUTPUT_DOCUMENT["English"] = array();
	$fieldToolTipsOUTPUT_DOCUMENT["English"] = array();
	$placeHoldersOUTPUT_DOCUMENT["English"] = array();
	$pageTitlesOUTPUT_DOCUMENT["English"] = array();
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_UID"] = "OUT DOC UID";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_UID"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_UID"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["PRO_UID"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["PRO_UID"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_REPORT_GENERATOR"] = "OUT DOC REPORT GENERATOR";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_REPORT_GENERATOR"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_REPORT_GENERATOR"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_LANDSCAPE"] = "OUT DOC LANDSCAPE";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_LANDSCAPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_LANDSCAPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_MEDIA"] = "OUT DOC MEDIA";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_MEDIA"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_MEDIA"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_LEFT_MARGIN"] = "OUT DOC LEFT MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_LEFT_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_LEFT_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_RIGHT_MARGIN"] = "OUT DOC RIGHT MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_RIGHT_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_RIGHT_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_TOP_MARGIN"] = "OUT DOC TOP MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_TOP_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_TOP_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_BOTTOM_MARGIN"] = "OUT DOC BOTTOM MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_BOTTOM_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_BOTTOM_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_GENERATE"] = "OUT DOC GENERATE";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_GENERATE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_GENERATE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_TYPE"] = "OUT DOC TYPE";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_TYPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_TYPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_CURRENT_REVISION"] = "OUT DOC CURRENT REVISION";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_CURRENT_REVISION"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_CURRENT_REVISION"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_FIELD_MAPPING"] = "OUT DOC FIELD MAPPING";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_FIELD_MAPPING"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_FIELD_MAPPING"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_VERSIONING"] = "OUT DOC VERSIONING";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_VERSIONING"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_VERSIONING"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_DESTINATION_PATH"] = "OUT DOC DESTINATION PATH";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_DESTINATION_PATH"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_DESTINATION_PATH"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_TAGS"] = "OUT DOC TAGS";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_TAGS"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_TAGS"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_ENABLED"] = "OUT DOC PDF SECURITY ENABLED";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_ENABLED"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_ENABLED"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "OUT DOC PDF SECURITY OPEN PASSWORD";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "OUT DOC PDF SECURITY OWNER PASSWORD";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "OUT DOC PDF SECURITY PERMISSIONS";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_OPEN_TYPE"] = "OUT DOC OPEN TYPE";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_OPEN_TYPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_OPEN_TYPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_TITLE"] = "OUT DOC TITLE";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_TITLE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_TITLE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_DESCRIPTION"] = "OUT DOC DESCRIPTION";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_DESCRIPTION"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_DESCRIPTION"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_FILENAME"] = "OUT DOC FILENAME";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_FILENAME"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_FILENAME"] = "";
	$fieldLabelsOUTPUT_DOCUMENT["English"]["OUT_DOC_TEMPLATE"] = "OUT DOC TEMPLATE";
	$fieldToolTipsOUTPUT_DOCUMENT["English"]["OUT_DOC_TEMPLATE"] = "";
	$placeHoldersOUTPUT_DOCUMENT["English"]["OUT_DOC_TEMPLATE"] = "";
	if (count($fieldToolTipsOUTPUT_DOCUMENT["English"]))
		$tdataOUTPUT_DOCUMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOUTPUT_DOCUMENT[""] = array();
	$fieldToolTipsOUTPUT_DOCUMENT[""] = array();
	$placeHoldersOUTPUT_DOCUMENT[""] = array();
	$pageTitlesOUTPUT_DOCUMENT[""] = array();
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_UID"] = "OUT DOC UID";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_UID"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_UID"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["PRO_UID"] = "PRO UID";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["PRO_UID"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["PRO_UID"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_REPORT_GENERATOR"] = "OUT DOC REPORT GENERATOR";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_REPORT_GENERATOR"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_REPORT_GENERATOR"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_LANDSCAPE"] = "OUT DOC LANDSCAPE";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_LANDSCAPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_LANDSCAPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_MEDIA"] = "OUT DOC MEDIA";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_MEDIA"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_MEDIA"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_LEFT_MARGIN"] = "OUT DOC LEFT MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_LEFT_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_LEFT_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_RIGHT_MARGIN"] = "OUT DOC RIGHT MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_RIGHT_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_RIGHT_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_TOP_MARGIN"] = "OUT DOC TOP MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_TOP_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_TOP_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_BOTTOM_MARGIN"] = "OUT DOC BOTTOM MARGIN";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_BOTTOM_MARGIN"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_BOTTOM_MARGIN"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_GENERATE"] = "OUT DOC GENERATE";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_GENERATE"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_GENERATE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_TYPE"] = "OUT DOC TYPE";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_TYPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_TYPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_CURRENT_REVISION"] = "OUT DOC CURRENT REVISION";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_CURRENT_REVISION"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_CURRENT_REVISION"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_FIELD_MAPPING"] = "OUT DOC FIELD MAPPING";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_FIELD_MAPPING"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_FIELD_MAPPING"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_VERSIONING"] = "OUT DOC VERSIONING";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_VERSIONING"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_VERSIONING"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_DESTINATION_PATH"] = "OUT DOC DESTINATION PATH";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_DESTINATION_PATH"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_DESTINATION_PATH"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_TAGS"] = "OUT DOC TAGS";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_TAGS"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_TAGS"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_ENABLED"] = "OUT DOC PDF SECURITY ENABLED";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_ENABLED"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_ENABLED"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "OUT DOC PDF SECURITY OPEN PASSWORD";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "OUT DOC PDF SECURITY OWNER PASSWORD";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "OUT DOC PDF SECURITY PERMISSIONS";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_OPEN_TYPE"] = "OUT DOC OPEN TYPE";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_OPEN_TYPE"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_OPEN_TYPE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_TITLE"] = "OUT DOC TITLE";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_TITLE"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_TITLE"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_DESCRIPTION"] = "OUT DOC DESCRIPTION";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_DESCRIPTION"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_DESCRIPTION"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_FILENAME"] = "OUT DOC FILENAME";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_FILENAME"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_FILENAME"] = "";
	$fieldLabelsOUTPUT_DOCUMENT[""]["OUT_DOC_TEMPLATE"] = "OUT DOC TEMPLATE";
	$fieldToolTipsOUTPUT_DOCUMENT[""]["OUT_DOC_TEMPLATE"] = "";
	$placeHoldersOUTPUT_DOCUMENT[""]["OUT_DOC_TEMPLATE"] = "";
	if (count($fieldToolTipsOUTPUT_DOCUMENT[""]))
		$tdataOUTPUT_DOCUMENT[".isUseToolTips"] = true;
}


	$tdataOUTPUT_DOCUMENT[".NCSearch"] = true;



$tdataOUTPUT_DOCUMENT[".shortTableName"] = "OUTPUT_DOCUMENT";
$tdataOUTPUT_DOCUMENT[".nSecOptions"] = 0;
$tdataOUTPUT_DOCUMENT[".recsPerRowPrint"] = 1;
$tdataOUTPUT_DOCUMENT[".mainTableOwnerID"] = "";
$tdataOUTPUT_DOCUMENT[".moveNext"] = 1;
$tdataOUTPUT_DOCUMENT[".entityType"] = 0;

$tdataOUTPUT_DOCUMENT[".strOriginalTableName"] = "OUTPUT_DOCUMENT";

	



$tdataOUTPUT_DOCUMENT[".showAddInPopup"] = false;

$tdataOUTPUT_DOCUMENT[".showEditInPopup"] = false;

$tdataOUTPUT_DOCUMENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOUTPUT_DOCUMENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOUTPUT_DOCUMENT[".fieldsForRegister"] = array();
	
$tdataOUTPUT_DOCUMENT[".listAjax"] = false;

	$tdataOUTPUT_DOCUMENT[".audit"] = false;

	$tdataOUTPUT_DOCUMENT[".locking"] = false;

$tdataOUTPUT_DOCUMENT[".edit"] = true;
$tdataOUTPUT_DOCUMENT[".afterEditAction"] = 1;
$tdataOUTPUT_DOCUMENT[".closePopupAfterEdit"] = 1;
$tdataOUTPUT_DOCUMENT[".afterEditActionDetTable"] = "";

$tdataOUTPUT_DOCUMENT[".add"] = true;
$tdataOUTPUT_DOCUMENT[".afterAddAction"] = 1;
$tdataOUTPUT_DOCUMENT[".closePopupAfterAdd"] = 1;
$tdataOUTPUT_DOCUMENT[".afterAddActionDetTable"] = "";

$tdataOUTPUT_DOCUMENT[".list"] = true;



$tdataOUTPUT_DOCUMENT[".reorderRecordsByHeader"] = true;



$tdataOUTPUT_DOCUMENT[".view"] = true;

$tdataOUTPUT_DOCUMENT[".import"] = true;

$tdataOUTPUT_DOCUMENT[".exportTo"] = true;

$tdataOUTPUT_DOCUMENT[".printFriendly"] = true;

$tdataOUTPUT_DOCUMENT[".delete"] = true;

$tdataOUTPUT_DOCUMENT[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataOUTPUT_DOCUMENT[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataOUTPUT_DOCUMENT[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataOUTPUT_DOCUMENT[".searchSaving"] = false;
//

$tdataOUTPUT_DOCUMENT[".showSearchPanel"] = true;
		$tdataOUTPUT_DOCUMENT[".flexibleSearch"] = true;

$tdataOUTPUT_DOCUMENT[".isUseAjaxSuggest"] = true;

$tdataOUTPUT_DOCUMENT[".rowHighlite"] = true;



				

$tdataOUTPUT_DOCUMENT[".ajaxCodeSnippetAdded"] = false;

$tdataOUTPUT_DOCUMENT[".buttonsAdded"] = false;

$tdataOUTPUT_DOCUMENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOUTPUT_DOCUMENT[".isUseTimeForSearch"] = false;





$tdataOUTPUT_DOCUMENT[".allSearchFields"] = array();
$tdataOUTPUT_DOCUMENT[".filterFields"] = array();
$tdataOUTPUT_DOCUMENT[".requiredSearchFields"] = array();

$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_UID";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "PRO_UID";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_REPORT_GENERATOR";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_LANDSCAPE";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_MEDIA";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_LEFT_MARGIN";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_RIGHT_MARGIN";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_TOP_MARGIN";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_BOTTOM_MARGIN";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_GENERATE";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_TYPE";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_CURRENT_REVISION";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_FIELD_MAPPING";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_VERSIONING";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_DESTINATION_PATH";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_TAGS";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_OPEN_TYPE";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_TITLE";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_DESCRIPTION";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_FILENAME";
	$tdataOUTPUT_DOCUMENT[".allSearchFields"][] = "OUT_DOC_TEMPLATE";
	

$tdataOUTPUT_DOCUMENT[".googleLikeFields"] = array();
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".googleLikeFields"][] = "OUT_DOC_TEMPLATE";


$tdataOUTPUT_DOCUMENT[".advSearchFields"] = array();
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".advSearchFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".tableType"] = "list";

$tdataOUTPUT_DOCUMENT[".printerPageOrientation"] = 0;
$tdataOUTPUT_DOCUMENT[".nPrinterPageScale"] = 100;

$tdataOUTPUT_DOCUMENT[".nPrinterSplitRecords"] = 40;

$tdataOUTPUT_DOCUMENT[".nPrinterPDFSplitRecords"] = 40;



$tdataOUTPUT_DOCUMENT[".geocodingEnabled"] = false;





$tdataOUTPUT_DOCUMENT[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataOUTPUT_DOCUMENT[".pageSize"] = 20;

$tdataOUTPUT_DOCUMENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOUTPUT_DOCUMENT[".strOrderBy"] = $tstrOrderBy;

$tdataOUTPUT_DOCUMENT[".orderindexes"] = array();

$tdataOUTPUT_DOCUMENT[".sqlHead"] = "SELECT OUT_DOC_UID,  	PRO_UID,  	OUT_DOC_REPORT_GENERATOR,  	OUT_DOC_LANDSCAPE,  	OUT_DOC_MEDIA,  	OUT_DOC_LEFT_MARGIN,  	OUT_DOC_RIGHT_MARGIN,  	OUT_DOC_TOP_MARGIN,  	OUT_DOC_BOTTOM_MARGIN,  	OUT_DOC_GENERATE,  	OUT_DOC_TYPE,  	OUT_DOC_CURRENT_REVISION,  	OUT_DOC_FIELD_MAPPING,  	OUT_DOC_VERSIONING,  	OUT_DOC_DESTINATION_PATH,  	OUT_DOC_TAGS,  	OUT_DOC_PDF_SECURITY_ENABLED,  	OUT_DOC_PDF_SECURITY_OPEN_PASSWORD,  	OUT_DOC_PDF_SECURITY_OWNER_PASSWORD,  	OUT_DOC_PDF_SECURITY_PERMISSIONS,  	OUT_DOC_OPEN_TYPE,  	OUT_DOC_TITLE,  	OUT_DOC_DESCRIPTION,  	OUT_DOC_FILENAME,  	OUT_DOC_TEMPLATE";
$tdataOUTPUT_DOCUMENT[".sqlFrom"] = "FROM OUTPUT_DOCUMENT";
$tdataOUTPUT_DOCUMENT[".sqlWhereExpr"] = "";
$tdataOUTPUT_DOCUMENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOUTPUT_DOCUMENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOUTPUT_DOCUMENT[".arrGroupsPerPage"] = $arrGPP;

$tdataOUTPUT_DOCUMENT[".highlightSearchResults"] = true;

$tableKeysOUTPUT_DOCUMENT = array();
$tableKeysOUTPUT_DOCUMENT[] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".Keys"] = $tableKeysOUTPUT_DOCUMENT;

$tdataOUTPUT_DOCUMENT[".listFields"] = array();
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".listFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".hideMobileList"] = array();


$tdataOUTPUT_DOCUMENT[".viewFields"] = array();
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".viewFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".addFields"] = array();
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".addFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".masterListFields"] = array();
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".masterListFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".inlineAddFields"] = array();
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".inlineAddFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".editFields"] = array();
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".editFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".inlineEditFields"] = array();
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".inlineEditFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".updateSelectedFields"] = array();
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".updateSelectedFields"][] = "OUT_DOC_TEMPLATE";


$tdataOUTPUT_DOCUMENT[".exportFields"] = array();
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".exportFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".importFields"] = array();
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".importFields"][] = "OUT_DOC_TEMPLATE";

$tdataOUTPUT_DOCUMENT[".printFields"] = array();
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_UID";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "PRO_UID";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_REPORT_GENERATOR";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_LANDSCAPE";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_MEDIA";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_LEFT_MARGIN";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_RIGHT_MARGIN";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_TOP_MARGIN";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_BOTTOM_MARGIN";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_GENERATE";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_TYPE";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_CURRENT_REVISION";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_FIELD_MAPPING";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_VERSIONING";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_DESTINATION_PATH";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_TAGS";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_OPEN_TYPE";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_TITLE";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_DESCRIPTION";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_FILENAME";
$tdataOUTPUT_DOCUMENT[".printFields"][] = "OUT_DOC_TEMPLATE";

//	OUT_DOC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OUT_DOC_UID";
	$fdata["GoodName"] = "OUT_DOC_UID";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_UID");
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

		$fdata["strField"] = "OUT_DOC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_UID";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","PRO_UID");
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

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
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




	$tdataOUTPUT_DOCUMENT["PRO_UID"] = $fdata;
//	OUT_DOC_REPORT_GENERATOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OUT_DOC_REPORT_GENERATOR";
	$fdata["GoodName"] = "OUT_DOC_REPORT_GENERATOR";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_REPORT_GENERATOR");
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

		$fdata["strField"] = "OUT_DOC_REPORT_GENERATOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_REPORT_GENERATOR";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_REPORT_GENERATOR"] = $fdata;
//	OUT_DOC_LANDSCAPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OUT_DOC_LANDSCAPE";
	$fdata["GoodName"] = "OUT_DOC_LANDSCAPE";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_LANDSCAPE");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "OUT_DOC_LANDSCAPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_LANDSCAPE";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_LANDSCAPE"] = $fdata;
//	OUT_DOC_MEDIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OUT_DOC_MEDIA";
	$fdata["GoodName"] = "OUT_DOC_MEDIA";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_MEDIA");
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

		$fdata["strField"] = "OUT_DOC_MEDIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_MEDIA";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_MEDIA"] = $fdata;
//	OUT_DOC_LEFT_MARGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OUT_DOC_LEFT_MARGIN";
	$fdata["GoodName"] = "OUT_DOC_LEFT_MARGIN";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_LEFT_MARGIN");
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

		$fdata["strField"] = "OUT_DOC_LEFT_MARGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_LEFT_MARGIN";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_LEFT_MARGIN"] = $fdata;
//	OUT_DOC_RIGHT_MARGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "OUT_DOC_RIGHT_MARGIN";
	$fdata["GoodName"] = "OUT_DOC_RIGHT_MARGIN";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_RIGHT_MARGIN");
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

		$fdata["strField"] = "OUT_DOC_RIGHT_MARGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_RIGHT_MARGIN";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_RIGHT_MARGIN"] = $fdata;
//	OUT_DOC_TOP_MARGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OUT_DOC_TOP_MARGIN";
	$fdata["GoodName"] = "OUT_DOC_TOP_MARGIN";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_TOP_MARGIN");
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

		$fdata["strField"] = "OUT_DOC_TOP_MARGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_TOP_MARGIN";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_TOP_MARGIN"] = $fdata;
//	OUT_DOC_BOTTOM_MARGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "OUT_DOC_BOTTOM_MARGIN";
	$fdata["GoodName"] = "OUT_DOC_BOTTOM_MARGIN";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_BOTTOM_MARGIN");
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

		$fdata["strField"] = "OUT_DOC_BOTTOM_MARGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_BOTTOM_MARGIN";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_BOTTOM_MARGIN"] = $fdata;
//	OUT_DOC_GENERATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OUT_DOC_GENERATE";
	$fdata["GoodName"] = "OUT_DOC_GENERATE";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_GENERATE");
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

		$fdata["strField"] = "OUT_DOC_GENERATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_GENERATE";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_GENERATE"] = $fdata;
//	OUT_DOC_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "OUT_DOC_TYPE";
	$fdata["GoodName"] = "OUT_DOC_TYPE";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_TYPE");
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

		$fdata["strField"] = "OUT_DOC_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_TYPE";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_TYPE"] = $fdata;
//	OUT_DOC_CURRENT_REVISION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "OUT_DOC_CURRENT_REVISION";
	$fdata["GoodName"] = "OUT_DOC_CURRENT_REVISION";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_CURRENT_REVISION");
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

		$fdata["strField"] = "OUT_DOC_CURRENT_REVISION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_CURRENT_REVISION";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_CURRENT_REVISION"] = $fdata;
//	OUT_DOC_FIELD_MAPPING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "OUT_DOC_FIELD_MAPPING";
	$fdata["GoodName"] = "OUT_DOC_FIELD_MAPPING";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_FIELD_MAPPING");
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

		$fdata["strField"] = "OUT_DOC_FIELD_MAPPING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_FIELD_MAPPING";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_FIELD_MAPPING"] = $fdata;
//	OUT_DOC_VERSIONING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "OUT_DOC_VERSIONING";
	$fdata["GoodName"] = "OUT_DOC_VERSIONING";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_VERSIONING");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "OUT_DOC_VERSIONING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_VERSIONING";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_VERSIONING"] = $fdata;
//	OUT_DOC_DESTINATION_PATH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "OUT_DOC_DESTINATION_PATH";
	$fdata["GoodName"] = "OUT_DOC_DESTINATION_PATH";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_DESTINATION_PATH");
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

		$fdata["strField"] = "OUT_DOC_DESTINATION_PATH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_DESTINATION_PATH";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_DESTINATION_PATH"] = $fdata;
//	OUT_DOC_TAGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "OUT_DOC_TAGS";
	$fdata["GoodName"] = "OUT_DOC_TAGS";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_TAGS");
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

		$fdata["strField"] = "OUT_DOC_TAGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_TAGS";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_TAGS"] = $fdata;
//	OUT_DOC_PDF_SECURITY_ENABLED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "OUT_DOC_PDF_SECURITY_ENABLED";
	$fdata["GoodName"] = "OUT_DOC_PDF_SECURITY_ENABLED";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_PDF_SECURITY_ENABLED");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "OUT_DOC_PDF_SECURITY_ENABLED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_PDF_SECURITY_ENABLED";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_PDF_SECURITY_ENABLED"] = $fdata;
//	OUT_DOC_PDF_SECURITY_OPEN_PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
	$fdata["GoodName"] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_PDF_SECURITY_OPEN_PASSWORD");
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

		$fdata["strField"] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_PDF_SECURITY_OPEN_PASSWORD"] = $fdata;
//	OUT_DOC_PDF_SECURITY_OWNER_PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
	$fdata["GoodName"] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_PDF_SECURITY_OWNER_PASSWORD");
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

		$fdata["strField"] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_PDF_SECURITY_OWNER_PASSWORD"] = $fdata;
//	OUT_DOC_PDF_SECURITY_PERMISSIONS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
	$fdata["GoodName"] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_PDF_SECURITY_PERMISSIONS");
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

		$fdata["strField"] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_PDF_SECURITY_PERMISSIONS"] = $fdata;
//	OUT_DOC_OPEN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "OUT_DOC_OPEN_TYPE";
	$fdata["GoodName"] = "OUT_DOC_OPEN_TYPE";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_OPEN_TYPE");
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

		$fdata["strField"] = "OUT_DOC_OPEN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_OPEN_TYPE";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_OPEN_TYPE"] = $fdata;
//	OUT_DOC_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "OUT_DOC_TITLE";
	$fdata["GoodName"] = "OUT_DOC_TITLE";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_TITLE");
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

		$fdata["strField"] = "OUT_DOC_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_TITLE";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_TITLE"] = $fdata;
//	OUT_DOC_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "OUT_DOC_DESCRIPTION";
	$fdata["GoodName"] = "OUT_DOC_DESCRIPTION";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_DESCRIPTION");
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

		$fdata["strField"] = "OUT_DOC_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_DESCRIPTION";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_DESCRIPTION"] = $fdata;
//	OUT_DOC_FILENAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "OUT_DOC_FILENAME";
	$fdata["GoodName"] = "OUT_DOC_FILENAME";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_FILENAME");
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

		$fdata["strField"] = "OUT_DOC_FILENAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_FILENAME";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_FILENAME"] = $fdata;
//	OUT_DOC_TEMPLATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "OUT_DOC_TEMPLATE";
	$fdata["GoodName"] = "OUT_DOC_TEMPLATE";
	$fdata["ownerTable"] = "OUTPUT_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("OUTPUT_DOCUMENT","OUT_DOC_TEMPLATE");
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

		$fdata["strField"] = "OUT_DOC_TEMPLATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUT_DOC_TEMPLATE";

	
	
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




	$tdataOUTPUT_DOCUMENT["OUT_DOC_TEMPLATE"] = $fdata;


$tables_data["OUTPUT_DOCUMENT"]=&$tdataOUTPUT_DOCUMENT;
$field_labels["OUTPUT_DOCUMENT"] = &$fieldLabelsOUTPUT_DOCUMENT;
$fieldToolTips["OUTPUT_DOCUMENT"] = &$fieldToolTipsOUTPUT_DOCUMENT;
$placeHolders["OUTPUT_DOCUMENT"] = &$placeHoldersOUTPUT_DOCUMENT;
$page_titles["OUTPUT_DOCUMENT"] = &$pageTitlesOUTPUT_DOCUMENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["OUTPUT_DOCUMENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["OUTPUT_DOCUMENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_OUTPUT_DOCUMENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OUT_DOC_UID,  	PRO_UID,  	OUT_DOC_REPORT_GENERATOR,  	OUT_DOC_LANDSCAPE,  	OUT_DOC_MEDIA,  	OUT_DOC_LEFT_MARGIN,  	OUT_DOC_RIGHT_MARGIN,  	OUT_DOC_TOP_MARGIN,  	OUT_DOC_BOTTOM_MARGIN,  	OUT_DOC_GENERATE,  	OUT_DOC_TYPE,  	OUT_DOC_CURRENT_REVISION,  	OUT_DOC_FIELD_MAPPING,  	OUT_DOC_VERSIONING,  	OUT_DOC_DESTINATION_PATH,  	OUT_DOC_TAGS,  	OUT_DOC_PDF_SECURITY_ENABLED,  	OUT_DOC_PDF_SECURITY_OPEN_PASSWORD,  	OUT_DOC_PDF_SECURITY_OWNER_PASSWORD,  	OUT_DOC_PDF_SECURITY_PERMISSIONS,  	OUT_DOC_OPEN_TYPE,  	OUT_DOC_TITLE,  	OUT_DOC_DESCRIPTION,  	OUT_DOC_FILENAME,  	OUT_DOC_TEMPLATE";
$proto0["m_strFrom"] = "FROM OUTPUT_DOCUMENT";
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
	"m_strName" => "OUT_DOC_UID",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto6["m_sql"] = "OUT_DOC_UID";
$proto6["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_REPORT_GENERATOR",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto10["m_sql"] = "OUT_DOC_REPORT_GENERATOR";
$proto10["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_LANDSCAPE",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto12["m_sql"] = "OUT_DOC_LANDSCAPE";
$proto12["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_MEDIA",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto14["m_sql"] = "OUT_DOC_MEDIA";
$proto14["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_LEFT_MARGIN",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto16["m_sql"] = "OUT_DOC_LEFT_MARGIN";
$proto16["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_RIGHT_MARGIN",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto18["m_sql"] = "OUT_DOC_RIGHT_MARGIN";
$proto18["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_TOP_MARGIN",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto20["m_sql"] = "OUT_DOC_TOP_MARGIN";
$proto20["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_BOTTOM_MARGIN",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto22["m_sql"] = "OUT_DOC_BOTTOM_MARGIN";
$proto22["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_GENERATE",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto24["m_sql"] = "OUT_DOC_GENERATE";
$proto24["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_TYPE",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto26["m_sql"] = "OUT_DOC_TYPE";
$proto26["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_CURRENT_REVISION",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto28["m_sql"] = "OUT_DOC_CURRENT_REVISION";
$proto28["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_FIELD_MAPPING",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto30["m_sql"] = "OUT_DOC_FIELD_MAPPING";
$proto30["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_VERSIONING",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto32["m_sql"] = "OUT_DOC_VERSIONING";
$proto32["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_DESTINATION_PATH",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto34["m_sql"] = "OUT_DOC_DESTINATION_PATH";
$proto34["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_TAGS",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto36["m_sql"] = "OUT_DOC_TAGS";
$proto36["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_PDF_SECURITY_ENABLED",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto38["m_sql"] = "OUT_DOC_PDF_SECURITY_ENABLED";
$proto38["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto40["m_sql"] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$proto40["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto42["m_sql"] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$proto42["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_PDF_SECURITY_PERMISSIONS",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto44["m_sql"] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$proto44["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_OPEN_TYPE",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto46["m_sql"] = "OUT_DOC_OPEN_TYPE";
$proto46["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_TITLE",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto48["m_sql"] = "OUT_DOC_TITLE";
$proto48["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_DESCRIPTION",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto50["m_sql"] = "OUT_DOC_DESCRIPTION";
$proto50["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_FILENAME",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto52["m_sql"] = "OUT_DOC_FILENAME";
$proto52["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "OUT_DOC_TEMPLATE",
	"m_strTable" => "OUTPUT_DOCUMENT",
	"m_srcTableName" => "OUTPUT_DOCUMENT"
));

$proto54["m_sql"] = "OUT_DOC_TEMPLATE";
$proto54["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "OUTPUT_DOCUMENT";
$proto57["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "OUT_DOC_UID";
$proto57["m_columns"][] = "PRO_UID";
$proto57["m_columns"][] = "OUT_DOC_REPORT_GENERATOR";
$proto57["m_columns"][] = "OUT_DOC_LANDSCAPE";
$proto57["m_columns"][] = "OUT_DOC_MEDIA";
$proto57["m_columns"][] = "OUT_DOC_LEFT_MARGIN";
$proto57["m_columns"][] = "OUT_DOC_RIGHT_MARGIN";
$proto57["m_columns"][] = "OUT_DOC_TOP_MARGIN";
$proto57["m_columns"][] = "OUT_DOC_BOTTOM_MARGIN";
$proto57["m_columns"][] = "OUT_DOC_GENERATE";
$proto57["m_columns"][] = "OUT_DOC_TYPE";
$proto57["m_columns"][] = "OUT_DOC_CURRENT_REVISION";
$proto57["m_columns"][] = "OUT_DOC_FIELD_MAPPING";
$proto57["m_columns"][] = "OUT_DOC_VERSIONING";
$proto57["m_columns"][] = "OUT_DOC_DESTINATION_PATH";
$proto57["m_columns"][] = "OUT_DOC_TAGS";
$proto57["m_columns"][] = "OUT_DOC_PDF_SECURITY_ENABLED";
$proto57["m_columns"][] = "OUT_DOC_PDF_SECURITY_OPEN_PASSWORD";
$proto57["m_columns"][] = "OUT_DOC_PDF_SECURITY_OWNER_PASSWORD";
$proto57["m_columns"][] = "OUT_DOC_PDF_SECURITY_PERMISSIONS";
$proto57["m_columns"][] = "OUT_DOC_OPEN_TYPE";
$proto57["m_columns"][] = "OUT_DOC_TITLE";
$proto57["m_columns"][] = "OUT_DOC_DESCRIPTION";
$proto57["m_columns"][] = "OUT_DOC_FILENAME";
$proto57["m_columns"][] = "OUT_DOC_TEMPLATE";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "OUTPUT_DOCUMENT";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "OUTPUT_DOCUMENT";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="OUTPUT_DOCUMENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_OUTPUT_DOCUMENT = createSqlQuery_OUTPUT_DOCUMENT();


	
						;

																									

$tdataOUTPUT_DOCUMENT[".sqlquery"] = $queryData_OUTPUT_DOCUMENT;

$tableEvents["OUTPUT_DOCUMENT"] = new eventsBase;
$tdataOUTPUT_DOCUMENT[".hasEvents"] = false;

?>
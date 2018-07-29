<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_PROGRAM_LIST = array();
	$tdataPMT_PROGRAM_LIST[".truncateText"] = true;
	$tdataPMT_PROGRAM_LIST[".NumberOfChars"] = 80;
	$tdataPMT_PROGRAM_LIST[".ShortName"] = "PMT_PROGRAM_LIST";
	$tdataPMT_PROGRAM_LIST[".OwnerID"] = "";
	$tdataPMT_PROGRAM_LIST[".OriginalTable"] = "PMT_PROGRAM_LIST";

//	field labels
$fieldLabelsPMT_PROGRAM_LIST = array();
$fieldToolTipsPMT_PROGRAM_LIST = array();
$pageTitlesPMT_PROGRAM_LIST = array();
$placeHoldersPMT_PROGRAM_LIST = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"] = array();
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"] = array();
	$placeHoldersPMT_PROGRAM_LIST["Japanese"] = array();
	$pageTitlesPMT_PROGRAM_LIST["Japanese"] = array();
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["ROW"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["N1"] = "N1";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["N1"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["N1"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["P1"] = "P1";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["P1"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["P1"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F25"] = "F25";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F25"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F25"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["K80"] = "K80";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["K80"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["K80"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F26"] = "F26";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F26"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F26"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["E27"] = "E27";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["E27"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["E27"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["K27"] = "K27";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["K27"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["K27"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["K25"] = "K25";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["K25"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["K25"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["A30"] = "A30";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["A30"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["A30"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["A31"] = "A31";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["A31"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["A31"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["A32"] = "A32";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["A32"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["A32"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D35"] = "D35";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D35"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F35"] = "F35";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F35"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["M35"] = "M35";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["M35"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["M35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D36"] = "D36";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D36"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F36"] = "F36";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F36"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["J36"] = "J36";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["J36"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["J36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D38"] = "D38";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D38"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D38"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F38"] = "F38";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F38"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F38"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D39"] = "D39";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D39"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D39"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["TIME"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["TIME"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["M39"] = "M39";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["M39"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["M39"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D40"] = "D40";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D40"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D40"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D41"] = "D41";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D41"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D41"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D42"] = "D42";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D42"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D42"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D43"] = "D43";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D43"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["M43"] = "M43";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["M43"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["M43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F43"] = "F43";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F43"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D44"] = "D44";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D44"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D44"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F44"] = "F44";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F44"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F44"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D45"] = "D45";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D45"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D45"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["M45"] = "M45";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["M45"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["M45"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D48"] = "D48";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D48"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["F48"] = "F48";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["F48"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["F48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D49"] = "D49";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D49"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D49"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D51"] = "D51";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D51"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D51"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["D52"] = "D52";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["D52"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["D52"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["K50"] = "K50";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["K50"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["K50"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["P48"] = "P48";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["P48"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["P48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["P49"] = "P49";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["P49"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["P49"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["P50"] = "P50";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["P50"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["P50"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["P51"] = "P51";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["P51"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["P51"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["Japanese"]["P52"] = "P52";
	$fieldToolTipsPMT_PROGRAM_LIST["Japanese"]["P52"] = "";
	$placeHoldersPMT_PROGRAM_LIST["Japanese"]["P52"] = "";
	if (count($fieldToolTipsPMT_PROGRAM_LIST["Japanese"]))
		$tdataPMT_PROGRAM_LIST[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_PROGRAM_LIST["English"] = array();
	$fieldToolTipsPMT_PROGRAM_LIST["English"] = array();
	$placeHoldersPMT_PROGRAM_LIST["English"] = array();
	$pageTitlesPMT_PROGRAM_LIST["English"] = array();
	$fieldLabelsPMT_PROGRAM_LIST["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["APP_UID"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["APP_UID"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["ROW"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["ROW"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["N1"] = "N1";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["N1"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["N1"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["P1"] = "P1";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["P1"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["P1"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F25"] = "F25";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F25"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F25"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["K80"] = "K80";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["K80"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["K80"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F26"] = "F26";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F26"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F26"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["E27"] = "E27";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["E27"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["E27"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["K27"] = "K27";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["K27"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["K27"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["K25"] = "K25";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["K25"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["K25"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["A30"] = "A30";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["A30"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["A30"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["A31"] = "A31";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["A31"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["A31"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["A32"] = "A32";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["A32"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["A32"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D35"] = "D35";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D35"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F35"] = "F35";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F35"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["M35"] = "M35";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["M35"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["M35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D36"] = "D36";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D36"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F36"] = "F36";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F36"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["J36"] = "J36";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["J36"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["J36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D38"] = "D38";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D38"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D38"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F38"] = "F38";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F38"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F38"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D39"] = "D39";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D39"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D39"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["TIME"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["TIME"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["M39"] = "M39";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["M39"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["M39"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D40"] = "D40";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D40"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D40"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D41"] = "D41";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D41"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D41"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D42"] = "D42";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D42"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D42"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D43"] = "D43";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D43"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["M43"] = "M43";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["M43"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["M43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F43"] = "F43";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F43"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D44"] = "D44";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D44"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D44"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F44"] = "F44";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F44"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F44"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D45"] = "D45";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D45"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D45"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["M45"] = "M45";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["M45"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["M45"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D48"] = "D48";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D48"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["F48"] = "F48";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["F48"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["F48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D49"] = "D49";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D49"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D49"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D51"] = "D51";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D51"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D51"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["D52"] = "D52";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["D52"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["D52"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["K50"] = "K50";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["K50"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["K50"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["P48"] = "P48";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["P48"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["P48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["P49"] = "P49";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["P49"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["P49"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["P50"] = "P50";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["P50"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["P50"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["P51"] = "P51";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["P51"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["P51"] = "";
	$fieldLabelsPMT_PROGRAM_LIST["English"]["P52"] = "P52";
	$fieldToolTipsPMT_PROGRAM_LIST["English"]["P52"] = "";
	$placeHoldersPMT_PROGRAM_LIST["English"]["P52"] = "";
	if (count($fieldToolTipsPMT_PROGRAM_LIST["English"]))
		$tdataPMT_PROGRAM_LIST[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_PROGRAM_LIST[""] = array();
	$fieldToolTipsPMT_PROGRAM_LIST[""] = array();
	$placeHoldersPMT_PROGRAM_LIST[""] = array();
	$pageTitlesPMT_PROGRAM_LIST[""] = array();
	$fieldLabelsPMT_PROGRAM_LIST[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["APP_UID"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["APP_UID"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["APP_STATUS"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["ROW"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["ROW"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["N1"] = "N1";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["N1"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["N1"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["P1"] = "P1";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["P1"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["P1"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F25"] = "F25";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F25"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F25"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["K80"] = "K80";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["K80"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["K80"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F26"] = "F26";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F26"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F26"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["E27"] = "E27";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["E27"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["E27"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["K27"] = "K27";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["K27"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["K27"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["K25"] = "K25";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["K25"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["K25"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["A30"] = "A30";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["A30"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["A30"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["A31"] = "A31";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["A31"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["A31"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["A32"] = "A32";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["A32"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["A32"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D35"] = "D35";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D35"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F35"] = "F35";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F35"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["M35"] = "M35";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["M35"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["M35"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D36"] = "D36";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D36"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F36"] = "F36";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F36"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["J36"] = "J36";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["J36"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["J36"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D38"] = "D38";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D38"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D38"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F38"] = "F38";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F38"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F38"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D39"] = "D39";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D39"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D39"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["TIME"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["TIME"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["M39"] = "M39";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["M39"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["M39"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D40"] = "D40";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D40"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D40"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D41"] = "D41";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D41"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D41"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D42"] = "D42";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D42"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D42"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D43"] = "D43";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D43"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["M43"] = "M43";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["M43"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["M43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F43"] = "F43";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F43"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F43"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D44"] = "D44";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D44"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D44"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F44"] = "F44";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F44"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F44"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D45"] = "D45";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D45"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D45"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["M45"] = "M45";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["M45"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["M45"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D48"] = "D48";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D48"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["F48"] = "F48";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["F48"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["F48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D49"] = "D49";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D49"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D49"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D51"] = "D51";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D51"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D51"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["D52"] = "D52";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["D52"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["D52"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["K50"] = "K50";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["K50"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["K50"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["P48"] = "P48";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["P48"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["P48"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["P49"] = "P49";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["P49"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["P49"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["P50"] = "P50";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["P50"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["P50"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["P51"] = "P51";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["P51"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["P51"] = "";
	$fieldLabelsPMT_PROGRAM_LIST[""]["P52"] = "P52";
	$fieldToolTipsPMT_PROGRAM_LIST[""]["P52"] = "";
	$placeHoldersPMT_PROGRAM_LIST[""]["P52"] = "";
	if (count($fieldToolTipsPMT_PROGRAM_LIST[""]))
		$tdataPMT_PROGRAM_LIST[".isUseToolTips"] = true;
}


	$tdataPMT_PROGRAM_LIST[".NCSearch"] = true;



$tdataPMT_PROGRAM_LIST[".shortTableName"] = "PMT_PROGRAM_LIST";
$tdataPMT_PROGRAM_LIST[".nSecOptions"] = 0;
$tdataPMT_PROGRAM_LIST[".recsPerRowPrint"] = 1;
$tdataPMT_PROGRAM_LIST[".mainTableOwnerID"] = "";
$tdataPMT_PROGRAM_LIST[".moveNext"] = 1;
$tdataPMT_PROGRAM_LIST[".entityType"] = 0;

$tdataPMT_PROGRAM_LIST[".strOriginalTableName"] = "PMT_PROGRAM_LIST";

	



$tdataPMT_PROGRAM_LIST[".showAddInPopup"] = false;

$tdataPMT_PROGRAM_LIST[".showEditInPopup"] = false;

$tdataPMT_PROGRAM_LIST[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_PROGRAM_LIST[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_PROGRAM_LIST[".fieldsForRegister"] = array();
	
$tdataPMT_PROGRAM_LIST[".listAjax"] = false;

	$tdataPMT_PROGRAM_LIST[".audit"] = false;

	$tdataPMT_PROGRAM_LIST[".locking"] = false;

$tdataPMT_PROGRAM_LIST[".edit"] = true;
$tdataPMT_PROGRAM_LIST[".afterEditAction"] = 1;
$tdataPMT_PROGRAM_LIST[".closePopupAfterEdit"] = 1;
$tdataPMT_PROGRAM_LIST[".afterEditActionDetTable"] = "";

$tdataPMT_PROGRAM_LIST[".add"] = true;
$tdataPMT_PROGRAM_LIST[".afterAddAction"] = 1;
$tdataPMT_PROGRAM_LIST[".closePopupAfterAdd"] = 1;
$tdataPMT_PROGRAM_LIST[".afterAddActionDetTable"] = "";

$tdataPMT_PROGRAM_LIST[".list"] = true;

$tdataPMT_PROGRAM_LIST[".inlineEdit"] = true;

$tdataPMT_PROGRAM_LIST[".updateSelected"] = true;

$tdataPMT_PROGRAM_LIST[".reorderRecordsByHeader"] = true;



$tdataPMT_PROGRAM_LIST[".inlineAdd"] = true;
$tdataPMT_PROGRAM_LIST[".copy"] = true;
$tdataPMT_PROGRAM_LIST[".view"] = true;

$tdataPMT_PROGRAM_LIST[".import"] = true;

$tdataPMT_PROGRAM_LIST[".exportTo"] = true;

$tdataPMT_PROGRAM_LIST[".printFriendly"] = true;

$tdataPMT_PROGRAM_LIST[".delete"] = true;

$tdataPMT_PROGRAM_LIST[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_PROGRAM_LIST[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_PROGRAM_LIST[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_PROGRAM_LIST[".searchSaving"] = false;
//

$tdataPMT_PROGRAM_LIST[".showSearchPanel"] = true;
		$tdataPMT_PROGRAM_LIST[".flexibleSearch"] = true;

$tdataPMT_PROGRAM_LIST[".isUseAjaxSuggest"] = true;

$tdataPMT_PROGRAM_LIST[".rowHighlite"] = true;



				

$tdataPMT_PROGRAM_LIST[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_PROGRAM_LIST[".buttonsAdded"] = false;

$tdataPMT_PROGRAM_LIST[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_PROGRAM_LIST[".isUseTimeForSearch"] = false;





$tdataPMT_PROGRAM_LIST[".allSearchFields"] = array();
$tdataPMT_PROGRAM_LIST[".filterFields"] = array();
$tdataPMT_PROGRAM_LIST[".requiredSearchFields"] = array();

$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "APP_UID";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "ROW";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "N1";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "P1";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F25";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "K80";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F26";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "E27";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "K27";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "K25";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "A30";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "A31";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "A32";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D35";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F35";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "M35";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D36";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F36";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "J36";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D38";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F38";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D39";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "TIME";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "M39";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D40";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D41";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D42";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D43";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "M43";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F43";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D44";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F44";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D45";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "M45";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D48";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "F48";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D49";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D51";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "D52";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "K50";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "P48";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "P49";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "P50";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "P51";
	$tdataPMT_PROGRAM_LIST[".allSearchFields"][] = "P52";
	

$tdataPMT_PROGRAM_LIST[".googleLikeFields"] = array();
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".googleLikeFields"][] = "P52";


$tdataPMT_PROGRAM_LIST[".advSearchFields"] = array();
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".advSearchFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".tableType"] = "list";

$tdataPMT_PROGRAM_LIST[".printerPageOrientation"] = 0;
$tdataPMT_PROGRAM_LIST[".nPrinterPageScale"] = 100;

$tdataPMT_PROGRAM_LIST[".nPrinterSplitRecords"] = 40;

$tdataPMT_PROGRAM_LIST[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_PROGRAM_LIST[".geocodingEnabled"] = false;





$tdataPMT_PROGRAM_LIST[".listGridLayout"] = 3;





// view page pdf
$tdataPMT_PROGRAM_LIST[".isViewPagePDF"] = true;
$tdataPMT_PROGRAM_LIST[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataPMT_PROGRAM_LIST[".isPrinterPagePDF"] = true;
$tdataPMT_PROGRAM_LIST[".nPrinterPagePDFScale"] = 100;


$tdataPMT_PROGRAM_LIST[".pageSize"] = 20;

$tdataPMT_PROGRAM_LIST[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_PROGRAM_LIST[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_PROGRAM_LIST[".orderindexes"] = array();

$tdataPMT_PROGRAM_LIST[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	N1,  	P1,  	F25,  	K80,  	F26,  	E27,  	K27,  	K25,  	A30,  	A31,  	A32,  	D35,  	F35,  	M35,  	D36,  	F36,  	J36,  	D38,  	F38,  	D39,  	`TIME`,  	MONTHLY_REPORT,  	M39,  	D40,  	D41,  	D42,  	D43,  	M43,  	F43,  	D44,  	F44,  	D45,  	M45,  	D48,  	F48,  	D49,  	D51,  	D52,  	K50,  	P48,  	P49,  	P50,  	P51,  	P52";
$tdataPMT_PROGRAM_LIST[".sqlFrom"] = "FROM PMT_PROGRAM_LIST";
$tdataPMT_PROGRAM_LIST[".sqlWhereExpr"] = "";
$tdataPMT_PROGRAM_LIST[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_PROGRAM_LIST[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_PROGRAM_LIST[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_PROGRAM_LIST[".highlightSearchResults"] = true;

$tableKeysPMT_PROGRAM_LIST = array();
$tableKeysPMT_PROGRAM_LIST[] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".Keys"] = $tableKeysPMT_PROGRAM_LIST;

$tdataPMT_PROGRAM_LIST[".listFields"] = array();
$tdataPMT_PROGRAM_LIST[".listFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".listFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".hideMobileList"] = array();


$tdataPMT_PROGRAM_LIST[".viewFields"] = array();
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".viewFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".addFields"] = array();
$tdataPMT_PROGRAM_LIST[".addFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".addFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".masterListFields"] = array();
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".masterListFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".inlineAddFields"] = array();
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".inlineAddFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".editFields"] = array();
$tdataPMT_PROGRAM_LIST[".editFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".editFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".inlineEditFields"] = array();
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".inlineEditFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".updateSelectedFields"] = array();
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".updateSelectedFields"][] = "P52";


$tdataPMT_PROGRAM_LIST[".exportFields"] = array();
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".exportFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".importFields"] = array();
$tdataPMT_PROGRAM_LIST[".importFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".importFields"][] = "P52";

$tdataPMT_PROGRAM_LIST[".printFields"] = array();
$tdataPMT_PROGRAM_LIST[".printFields"][] = "APP_UID";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "APP_NUMBER";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "APP_STATUS";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "ROW";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "N1";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "P1";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F25";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "K80";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F26";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "E27";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "K27";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "K25";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "A30";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "A31";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "A32";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D35";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F35";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "M35";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D36";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F36";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "J36";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D38";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F38";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D39";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "TIME";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "M39";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D40";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D41";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D42";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D43";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "M43";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F43";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D44";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F44";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D45";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "M45";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D48";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "F48";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D49";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D51";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "D52";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "K50";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "P48";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "P49";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "P50";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "P51";
$tdataPMT_PROGRAM_LIST[".printFields"][] = "P52";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","APP_UID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
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




	$tdataPMT_PROGRAM_LIST["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","APP_NUMBER");
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

		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
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




	$tdataPMT_PROGRAM_LIST["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","APP_STATUS");
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

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
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




	$tdataPMT_PROGRAM_LIST["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","ROW");
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

		$fdata["strField"] = "ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ROW`";

	
	
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




	$tdataPMT_PROGRAM_LIST["ROW"] = $fdata;
//	N1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "N1";
	$fdata["GoodName"] = "N1";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","N1");
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

		$fdata["strField"] = "N1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "N1";

	
	
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




	$tdataPMT_PROGRAM_LIST["N1"] = $fdata;
//	P1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "P1";
	$fdata["GoodName"] = "P1";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","P1");
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

		$fdata["strField"] = "P1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P1";

	
	
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




	$tdataPMT_PROGRAM_LIST["P1"] = $fdata;
//	F25
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F25";
	$fdata["GoodName"] = "F25";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F25");
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

		$fdata["strField"] = "F25";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F25";

	
	
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




	$tdataPMT_PROGRAM_LIST["F25"] = $fdata;
//	K80
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "K80";
	$fdata["GoodName"] = "K80";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","K80");
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

		$fdata["strField"] = "K80";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "K80";

	
	
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




	$tdataPMT_PROGRAM_LIST["K80"] = $fdata;
//	F26
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "F26";
	$fdata["GoodName"] = "F26";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F26");
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

		$fdata["strField"] = "F26";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F26";

	
	
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




	$tdataPMT_PROGRAM_LIST["F26"] = $fdata;
//	E27
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "E27";
	$fdata["GoodName"] = "E27";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","E27");
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

		$fdata["strField"] = "E27";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E27";

	
	
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




	$tdataPMT_PROGRAM_LIST["E27"] = $fdata;
//	K27
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "K27";
	$fdata["GoodName"] = "K27";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","K27");
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

		$fdata["strField"] = "K27";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "K27";

	
	
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




	$tdataPMT_PROGRAM_LIST["K27"] = $fdata;
//	K25
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K25";
	$fdata["GoodName"] = "K25";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","K25");
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

		$fdata["strField"] = "K25";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "K25";

	
	
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




	$tdataPMT_PROGRAM_LIST["K25"] = $fdata;
//	A30
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "A30";
	$fdata["GoodName"] = "A30";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","A30");
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

		$fdata["strField"] = "A30";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A30";

	
	
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




	$tdataPMT_PROGRAM_LIST["A30"] = $fdata;
//	A31
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "A31";
	$fdata["GoodName"] = "A31";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","A31");
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

		$fdata["strField"] = "A31";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A31";

	
	
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




	$tdataPMT_PROGRAM_LIST["A31"] = $fdata;
//	A32
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "A32";
	$fdata["GoodName"] = "A32";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","A32");
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

		$fdata["strField"] = "A32";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A32";

	
	
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




	$tdataPMT_PROGRAM_LIST["A32"] = $fdata;
//	D35
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "D35";
	$fdata["GoodName"] = "D35";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D35");
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

		$fdata["strField"] = "D35";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D35";

	
	
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




	$tdataPMT_PROGRAM_LIST["D35"] = $fdata;
//	F35
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "F35";
	$fdata["GoodName"] = "F35";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F35");
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

		$fdata["strField"] = "F35";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F35";

	
	
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




	$tdataPMT_PROGRAM_LIST["F35"] = $fdata;
//	M35
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "M35";
	$fdata["GoodName"] = "M35";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","M35");
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

		$fdata["strField"] = "M35";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M35";

	
	
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




	$tdataPMT_PROGRAM_LIST["M35"] = $fdata;
//	D36
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "D36";
	$fdata["GoodName"] = "D36";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D36");
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

		$fdata["strField"] = "D36";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D36";

	
	
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




	$tdataPMT_PROGRAM_LIST["D36"] = $fdata;
//	F36
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "F36";
	$fdata["GoodName"] = "F36";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F36");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "F36";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F36";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["F36"] = $fdata;
//	J36
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "J36";
	$fdata["GoodName"] = "J36";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","J36");
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

		$fdata["strField"] = "J36";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "J36";

	
	
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




	$tdataPMT_PROGRAM_LIST["J36"] = $fdata;
//	D38
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "D38";
	$fdata["GoodName"] = "D38";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D38");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "D38";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D38";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["D38"] = $fdata;
//	F38
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "F38";
	$fdata["GoodName"] = "F38";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F38");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "F38";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F38";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["F38"] = $fdata;
//	D39
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "D39";
	$fdata["GoodName"] = "D39";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D39");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "D39";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D39";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["D39"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","TIME");
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

		$fdata["strField"] = "TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TIME`";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "BPMBOXTEST";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TIME";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TIME";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","MONTHLY_REPORT");
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

		$fdata["strField"] = "MONTHLY_REPORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTHLY_REPORT";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "BPMBOXTEST";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MONTHLY_REPORT";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "MONTHLY_REPORT";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["MONTHLY_REPORT"] = $fdata;
//	M39
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "M39";
	$fdata["GoodName"] = "M39";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","M39");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "M39";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M39";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["M39"] = $fdata;
//	D40
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "D40";
	$fdata["GoodName"] = "D40";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D40");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "D40";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D40";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["D40"] = $fdata;
//	D41
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "D41";
	$fdata["GoodName"] = "D41";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D41");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "D41";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D41";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["D41"] = $fdata;
//	D42
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "D42";
	$fdata["GoodName"] = "D42";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D42");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "D42";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D42";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["D42"] = $fdata;
//	D43
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "D43";
	$fdata["GoodName"] = "D43";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D43");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "D43";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D43";

	
	
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
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_PROGRAM_LIST["D43"] = $fdata;
//	M43
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "M43";
	$fdata["GoodName"] = "M43";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","M43");
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

		$fdata["strField"] = "M43";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M43";

	
	
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




	$tdataPMT_PROGRAM_LIST["M43"] = $fdata;
//	F43
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "F43";
	$fdata["GoodName"] = "F43";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F43");
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

		$fdata["strField"] = "F43";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F43";

	
	
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




	$tdataPMT_PROGRAM_LIST["F43"] = $fdata;
//	D44
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "D44";
	$fdata["GoodName"] = "D44";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D44");
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

		$fdata["strField"] = "D44";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D44";

	
	
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




	$tdataPMT_PROGRAM_LIST["D44"] = $fdata;
//	F44
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "F44";
	$fdata["GoodName"] = "F44";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F44");
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

		$fdata["strField"] = "F44";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F44";

	
	
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




	$tdataPMT_PROGRAM_LIST["F44"] = $fdata;
//	D45
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "D45";
	$fdata["GoodName"] = "D45";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D45");
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

		$fdata["strField"] = "D45";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D45";

	
	
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




	$tdataPMT_PROGRAM_LIST["D45"] = $fdata;
//	M45
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "M45";
	$fdata["GoodName"] = "M45";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","M45");
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

		$fdata["strField"] = "M45";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M45";

	
	
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




	$tdataPMT_PROGRAM_LIST["M45"] = $fdata;
//	D48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "D48";
	$fdata["GoodName"] = "D48";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D48");
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

		$fdata["strField"] = "D48";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D48";

	
	
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




	$tdataPMT_PROGRAM_LIST["D48"] = $fdata;
//	F48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "F48";
	$fdata["GoodName"] = "F48";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","F48");
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

		$fdata["strField"] = "F48";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F48";

	
	
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




	$tdataPMT_PROGRAM_LIST["F48"] = $fdata;
//	D49
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "D49";
	$fdata["GoodName"] = "D49";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D49");
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

		$fdata["strField"] = "D49";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D49";

	
	
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




	$tdataPMT_PROGRAM_LIST["D49"] = $fdata;
//	D51
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "D51";
	$fdata["GoodName"] = "D51";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D51");
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

		$fdata["strField"] = "D51";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D51";

	
	
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




	$tdataPMT_PROGRAM_LIST["D51"] = $fdata;
//	D52
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "D52";
	$fdata["GoodName"] = "D52";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","D52");
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

		$fdata["strField"] = "D52";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D52";

	
	
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




	$tdataPMT_PROGRAM_LIST["D52"] = $fdata;
//	K50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "K50";
	$fdata["GoodName"] = "K50";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","K50");
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

		$fdata["strField"] = "K50";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "K50";

	
	
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




	$tdataPMT_PROGRAM_LIST["K50"] = $fdata;
//	P48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "P48";
	$fdata["GoodName"] = "P48";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","P48");
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

		$fdata["strField"] = "P48";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P48";

	
	
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




	$tdataPMT_PROGRAM_LIST["P48"] = $fdata;
//	P49
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "P49";
	$fdata["GoodName"] = "P49";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","P49");
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

		$fdata["strField"] = "P49";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P49";

	
	
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




	$tdataPMT_PROGRAM_LIST["P49"] = $fdata;
//	P50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "P50";
	$fdata["GoodName"] = "P50";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","P50");
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

		$fdata["strField"] = "P50";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P50";

	
	
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




	$tdataPMT_PROGRAM_LIST["P50"] = $fdata;
//	P51
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "P51";
	$fdata["GoodName"] = "P51";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","P51");
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

		$fdata["strField"] = "P51";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P51";

	
	
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




	$tdataPMT_PROGRAM_LIST["P51"] = $fdata;
//	P52
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "P52";
	$fdata["GoodName"] = "P52";
	$fdata["ownerTable"] = "PMT_PROGRAM_LIST";
	$fdata["Label"] = GetFieldLabel("PMT_PROGRAM_LIST","P52");
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

		$fdata["strField"] = "P52";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P52";

	
	
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




	$tdataPMT_PROGRAM_LIST["P52"] = $fdata;


$tables_data["PMT_PROGRAM_LIST"]=&$tdataPMT_PROGRAM_LIST;
$field_labels["PMT_PROGRAM_LIST"] = &$fieldLabelsPMT_PROGRAM_LIST;
$fieldToolTips["PMT_PROGRAM_LIST"] = &$fieldToolTipsPMT_PROGRAM_LIST;
$placeHolders["PMT_PROGRAM_LIST"] = &$placeHoldersPMT_PROGRAM_LIST;
$page_titles["PMT_PROGRAM_LIST"] = &$pageTitlesPMT_PROGRAM_LIST;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_PROGRAM_LIST"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_PROGRAM_LIST"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_PROGRAM_LIST()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	N1,  	P1,  	F25,  	K80,  	F26,  	E27,  	K27,  	K25,  	A30,  	A31,  	A32,  	D35,  	F35,  	M35,  	D36,  	F36,  	J36,  	D38,  	F38,  	D39,  	`TIME`,  	MONTHLY_REPORT,  	M39,  	D40,  	D41,  	D42,  	D43,  	M43,  	F43,  	D44,  	F44,  	D45,  	M45,  	D48,  	F48,  	D49,  	D51,  	D52,  	K50,  	P48,  	P49,  	P50,  	P51,  	P52";
$proto0["m_strFrom"] = "FROM PMT_PROGRAM_LIST";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "N1",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto14["m_sql"] = "N1";
$proto14["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "P1",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto16["m_sql"] = "P1";
$proto16["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F25",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto18["m_sql"] = "F25";
$proto18["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "K80",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto20["m_sql"] = "K80";
$proto20["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "F26",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto22["m_sql"] = "F26";
$proto22["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "E27",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto24["m_sql"] = "E27";
$proto24["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "K27",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto26["m_sql"] = "K27";
$proto26["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K25",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto28["m_sql"] = "K25";
$proto28["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "A30",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto30["m_sql"] = "A30";
$proto30["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "A31",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto32["m_sql"] = "A31";
$proto32["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "A32",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto34["m_sql"] = "A32";
$proto34["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "D35",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto36["m_sql"] = "D35";
$proto36["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "F35",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto38["m_sql"] = "F35";
$proto38["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "M35",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto40["m_sql"] = "M35";
$proto40["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "D36",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto42["m_sql"] = "D36";
$proto42["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "F36",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto44["m_sql"] = "F36";
$proto44["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "J36",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto46["m_sql"] = "J36";
$proto46["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "D38",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto48["m_sql"] = "D38";
$proto48["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "F38",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto50["m_sql"] = "F38";
$proto50["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "D39",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto52["m_sql"] = "D39";
$proto52["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto54["m_sql"] = "`TIME`";
$proto54["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto56["m_sql"] = "MONTHLY_REPORT";
$proto56["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "M39",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto58["m_sql"] = "M39";
$proto58["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "D40",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto60["m_sql"] = "D40";
$proto60["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "D41",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto62["m_sql"] = "D41";
$proto62["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "D42",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto64["m_sql"] = "D42";
$proto64["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "D43",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto66["m_sql"] = "D43";
$proto66["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "M43",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto68["m_sql"] = "M43";
$proto68["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "F43",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto70["m_sql"] = "F43";
$proto70["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "D44",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto72["m_sql"] = "D44";
$proto72["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "F44",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto74["m_sql"] = "F44";
$proto74["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "D45",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto76["m_sql"] = "D45";
$proto76["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "M45",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto78["m_sql"] = "M45";
$proto78["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "D48",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto80["m_sql"] = "D48";
$proto80["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "F48",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto82["m_sql"] = "F48";
$proto82["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "D49",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto84["m_sql"] = "D49";
$proto84["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "D51",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto86["m_sql"] = "D51";
$proto86["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "D52",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto88["m_sql"] = "D52";
$proto88["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "K50",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto90["m_sql"] = "K50";
$proto90["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "P48",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto92["m_sql"] = "P48";
$proto92["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "P49",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto94["m_sql"] = "P49";
$proto94["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "P50",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto96["m_sql"] = "P50";
$proto96["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "P51",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto98["m_sql"] = "P51";
$proto98["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "P52",
	"m_strTable" => "PMT_PROGRAM_LIST",
	"m_srcTableName" => "PMT_PROGRAM_LIST"
));

$proto100["m_sql"] = "P52";
$proto100["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "PMT_PROGRAM_LIST";
$proto103["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "APP_UID";
$proto103["m_columns"][] = "APP_NUMBER";
$proto103["m_columns"][] = "APP_STATUS";
$proto103["m_columns"][] = "ROW";
$proto103["m_columns"][] = "N1";
$proto103["m_columns"][] = "P1";
$proto103["m_columns"][] = "F25";
$proto103["m_columns"][] = "K80";
$proto103["m_columns"][] = "F26";
$proto103["m_columns"][] = "E27";
$proto103["m_columns"][] = "K27";
$proto103["m_columns"][] = "K25";
$proto103["m_columns"][] = "A30";
$proto103["m_columns"][] = "A31";
$proto103["m_columns"][] = "A32";
$proto103["m_columns"][] = "D35";
$proto103["m_columns"][] = "F35";
$proto103["m_columns"][] = "M35";
$proto103["m_columns"][] = "D36";
$proto103["m_columns"][] = "F36";
$proto103["m_columns"][] = "J36";
$proto103["m_columns"][] = "D38";
$proto103["m_columns"][] = "F38";
$proto103["m_columns"][] = "D39";
$proto103["m_columns"][] = "TIME";
$proto103["m_columns"][] = "MONTHLY_REPORT";
$proto103["m_columns"][] = "M39";
$proto103["m_columns"][] = "D40";
$proto103["m_columns"][] = "D41";
$proto103["m_columns"][] = "D42";
$proto103["m_columns"][] = "D43";
$proto103["m_columns"][] = "M43";
$proto103["m_columns"][] = "F43";
$proto103["m_columns"][] = "D44";
$proto103["m_columns"][] = "F44";
$proto103["m_columns"][] = "D45";
$proto103["m_columns"][] = "M45";
$proto103["m_columns"][] = "D48";
$proto103["m_columns"][] = "F48";
$proto103["m_columns"][] = "D49";
$proto103["m_columns"][] = "D51";
$proto103["m_columns"][] = "D52";
$proto103["m_columns"][] = "K50";
$proto103["m_columns"][] = "P48";
$proto103["m_columns"][] = "P49";
$proto103["m_columns"][] = "P50";
$proto103["m_columns"][] = "P51";
$proto103["m_columns"][] = "P52";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "PMT_PROGRAM_LIST";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "PMT_PROGRAM_LIST";
$proto104=array();
$proto104["m_sql"] = "";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_PROGRAM_LIST";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_PROGRAM_LIST = createSqlQuery_PMT_PROGRAM_LIST();


	
						;

																																																

$tdataPMT_PROGRAM_LIST[".sqlquery"] = $queryData_PMT_PROGRAM_LIST;

$tableEvents["PMT_PROGRAM_LIST"] = new eventsBase;
$tdataPMT_PROGRAM_LIST[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_SPREADMAIN = array();
	$tdataPMT_SPREADMAIN[".truncateText"] = true;
	$tdataPMT_SPREADMAIN[".NumberOfChars"] = 80;
	$tdataPMT_SPREADMAIN[".ShortName"] = "PMT_SPREADMAIN";
	$tdataPMT_SPREADMAIN[".OwnerID"] = "";
	$tdataPMT_SPREADMAIN[".OriginalTable"] = "PMT_SPREADMAIN";

//	field labels
$fieldLabelsPMT_SPREADMAIN = array();
$fieldToolTipsPMT_SPREADMAIN = array();
$pageTitlesPMT_SPREADMAIN = array();
$placeHoldersPMT_SPREADMAIN = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_SPREADMAIN["Japanese"] = array();
	$fieldToolTipsPMT_SPREADMAIN["Japanese"] = array();
	$placeHoldersPMT_SPREADMAIN["Japanese"] = array();
	$pageTitlesPMT_SPREADMAIN["Japanese"] = array();
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["APP_UID"] = "作業ID";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["APP_UID"] = "テキストエリア";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["APP_UID"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["APP_NUMBER"] = "作業番号";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["APP_STATUS"] = "作業状態";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["APP_STATUS"] = "テキストエリア";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["A30"] = "代金のお振込";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["A30"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["A30"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["A31"] = "この登録用紙に記入した事項";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["A31"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["A31"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["A32"] = "万が一不正商品";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["A32"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["A32"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D35"] = "領収日";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D35"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D35"] = " concurrent data structures";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D36"] = "〒";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D36"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D36"] = "[a-z]+";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D38"] = "都・道府・県";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D38"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D38"] = "説明１";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D39"] = "電話番号";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D39"] = "数値";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D39"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D40"] = "検索エンジン";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D40"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D40"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D41"] = "検索媒体";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D41"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D41"] = "4)[dtext:chatroom_changed][/info]";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D42"] = "検索キーワード";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D42"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D42"] = "4)[dtext:chatroom_changed][/info]";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D43"] = "振込銀行";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D43"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D43"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D44"] = "口座番号";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D44"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D44"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D45"] = "免許証・各種保険証";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D45"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D45"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D48"] = "□　発行場所";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D48"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D48"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D49"] = "□　国税又は地方税の領収証又は納税証明書";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D49"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D49"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D51"] = "□　社会保険料や公共料金の領収書";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D51"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D51"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["D52"] = "□　その他　　（　　　　　　　　　　　　　　　　　　）";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["D52"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["D52"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["E27"] = "K ・ B ・ Ｊ ・ R ・ T";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["E27"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["E27"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F25"] = "個人　・　法人";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F25"] = "テキストエリア";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F25"] = " 0)	";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F26"] = "本店 ご自宅";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F26"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F26"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F43"] = "普　・　貯　・　当";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F43"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F43"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F44"] = "口座名義";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F44"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F44"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F35"] = "お名前";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F35"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F35"] = "説明１";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F36"] = "男女";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F36"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F36"] = "説明１";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F38"] = "市･区･町村･郡";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F38"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F38"] = "説明１";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["F48"] = "□　記号番号";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["F48"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["F48"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["ROW"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["ROW"] = "おなまえ";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["N1"] = "担当";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["N1"] = "テキストエリア";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["N1"] = "たんとうぶ";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["P1"] = "合計";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["P1"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["P1"] = "みつもりばんごう";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["K80"] = "コピー";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["K80"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["K80"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["K27"] = "【取引枠】";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["K27"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["K27"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["K25"] = "【本人確認書類添付】";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["K25"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["K25"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["M35"] = "ご職業";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["M35"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["M35"] = "説明１";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["J36"] = "生 年 月 日 ";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["J36"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["J36"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["MONTHLY_REPORT"] = "MONTHLY_REPORT";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["MONTHLY_REPORT"] = "説明１";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["M39"] = "FAX";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["M39"] = "リストボックス";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["M39"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["M43"] = "支店名";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["M43"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["M43"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["M45"] = "振込予定日";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["M45"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["M45"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["K50"] = "H";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["K50"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["K50"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["P48"] = "K";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["P48"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["P48"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["P49"] = "D";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["P49"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["P49"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["P50"] = "J";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["P50"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["P50"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["P51"] = "W";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["P51"] = "テキスト";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["P51"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["P52"] = "B";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["P52"] = "";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["P52"] = "";
	$fieldLabelsPMT_SPREADMAIN["Japanese"]["id"] = "Id";
	$fieldToolTipsPMT_SPREADMAIN["Japanese"]["id"] = "";
	$placeHoldersPMT_SPREADMAIN["Japanese"]["id"] = "";
	if (count($fieldToolTipsPMT_SPREADMAIN["Japanese"]))
		$tdataPMT_SPREADMAIN[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_SPREADMAIN["English"] = array();
	$fieldToolTipsPMT_SPREADMAIN["English"] = array();
	$placeHoldersPMT_SPREADMAIN["English"] = array();
	$pageTitlesPMT_SPREADMAIN["English"] = array();
	$fieldLabelsPMT_SPREADMAIN["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SPREADMAIN["English"]["APP_UID"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["APP_UID"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SPREADMAIN["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SPREADMAIN["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["A30"] = "A30";
	$fieldToolTipsPMT_SPREADMAIN["English"]["A30"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["A30"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["A31"] = "A31";
	$fieldToolTipsPMT_SPREADMAIN["English"]["A31"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["A31"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["A32"] = "A32";
	$fieldToolTipsPMT_SPREADMAIN["English"]["A32"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["A32"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D35"] = "D35";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D35"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D35"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D36"] = "D36";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D36"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D36"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D38"] = "D38";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D38"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D38"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D39"] = "D39";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D39"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D39"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D40"] = "D40";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D40"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D40"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D41"] = "D41";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D41"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D41"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D42"] = "D42";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D42"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D42"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D43"] = "D43";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D43"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D43"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D44"] = "D44";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D44"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D44"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D45"] = "D45";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D45"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D45"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D48"] = "D48";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D48"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D48"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D49"] = "D49";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D49"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D49"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D51"] = "D51";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D51"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D51"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["D52"] = "D52";
	$fieldToolTipsPMT_SPREADMAIN["English"]["D52"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["D52"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["E27"] = "E27";
	$fieldToolTipsPMT_SPREADMAIN["English"]["E27"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["E27"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F25"] = "F25";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F25"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F25"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F26"] = "F26";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F26"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F26"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F43"] = "F43";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F43"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F43"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F44"] = "F44";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F44"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F44"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F35"] = "F35";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F35"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F35"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F36"] = "F36";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F36"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F36"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F38"] = "F38";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F38"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F38"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["F48"] = "F48";
	$fieldToolTipsPMT_SPREADMAIN["English"]["F48"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["F48"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SPREADMAIN["English"]["ROW"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["ROW"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["N1"] = "N1";
	$fieldToolTipsPMT_SPREADMAIN["English"]["N1"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["N1"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["P1"] = "P1";
	$fieldToolTipsPMT_SPREADMAIN["English"]["P1"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["P1"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["K80"] = "K80";
	$fieldToolTipsPMT_SPREADMAIN["English"]["K80"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["K80"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["K27"] = "K27";
	$fieldToolTipsPMT_SPREADMAIN["English"]["K27"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["K27"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["K25"] = "K25";
	$fieldToolTipsPMT_SPREADMAIN["English"]["K25"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["K25"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["M35"] = "M35";
	$fieldToolTipsPMT_SPREADMAIN["English"]["M35"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["M35"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["J36"] = "J36";
	$fieldToolTipsPMT_SPREADMAIN["English"]["J36"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["J36"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_SPREADMAIN["English"]["TIME"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["TIME"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_SPREADMAIN["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["M39"] = "M39";
	$fieldToolTipsPMT_SPREADMAIN["English"]["M39"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["M39"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["M43"] = "M43";
	$fieldToolTipsPMT_SPREADMAIN["English"]["M43"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["M43"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["M45"] = "M45";
	$fieldToolTipsPMT_SPREADMAIN["English"]["M45"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["M45"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["K50"] = "K50";
	$fieldToolTipsPMT_SPREADMAIN["English"]["K50"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["K50"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["P48"] = "P48";
	$fieldToolTipsPMT_SPREADMAIN["English"]["P48"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["P48"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["P49"] = "P49";
	$fieldToolTipsPMT_SPREADMAIN["English"]["P49"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["P49"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["P50"] = "P50";
	$fieldToolTipsPMT_SPREADMAIN["English"]["P50"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["P50"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["P51"] = "P51";
	$fieldToolTipsPMT_SPREADMAIN["English"]["P51"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["P51"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["P52"] = "P52";
	$fieldToolTipsPMT_SPREADMAIN["English"]["P52"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["P52"] = "";
	$fieldLabelsPMT_SPREADMAIN["English"]["id"] = "Id";
	$fieldToolTipsPMT_SPREADMAIN["English"]["id"] = "";
	$placeHoldersPMT_SPREADMAIN["English"]["id"] = "";
	if (count($fieldToolTipsPMT_SPREADMAIN["English"]))
		$tdataPMT_SPREADMAIN[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_SPREADMAIN[""] = array();
	$fieldToolTipsPMT_SPREADMAIN[""] = array();
	$placeHoldersPMT_SPREADMAIN[""] = array();
	$pageTitlesPMT_SPREADMAIN[""] = array();
	$fieldLabelsPMT_SPREADMAIN[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SPREADMAIN[""]["APP_UID"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["APP_UID"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SPREADMAIN[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SPREADMAIN[""]["APP_STATUS"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["A30"] = "A30";
	$fieldToolTipsPMT_SPREADMAIN[""]["A30"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["A30"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["A31"] = "A31";
	$fieldToolTipsPMT_SPREADMAIN[""]["A31"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["A31"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["A32"] = "A32";
	$fieldToolTipsPMT_SPREADMAIN[""]["A32"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["A32"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D35"] = "D35";
	$fieldToolTipsPMT_SPREADMAIN[""]["D35"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D35"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D36"] = "D36";
	$fieldToolTipsPMT_SPREADMAIN[""]["D36"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D36"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D38"] = "D38";
	$fieldToolTipsPMT_SPREADMAIN[""]["D38"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D38"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D39"] = "D39";
	$fieldToolTipsPMT_SPREADMAIN[""]["D39"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D39"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D40"] = "D40";
	$fieldToolTipsPMT_SPREADMAIN[""]["D40"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D40"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D41"] = "D41";
	$fieldToolTipsPMT_SPREADMAIN[""]["D41"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D41"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D42"] = "D42";
	$fieldToolTipsPMT_SPREADMAIN[""]["D42"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D42"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D43"] = "D43";
	$fieldToolTipsPMT_SPREADMAIN[""]["D43"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D43"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D44"] = "D44";
	$fieldToolTipsPMT_SPREADMAIN[""]["D44"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D44"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D45"] = "D45";
	$fieldToolTipsPMT_SPREADMAIN[""]["D45"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D45"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D48"] = "D48";
	$fieldToolTipsPMT_SPREADMAIN[""]["D48"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D48"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D49"] = "D49";
	$fieldToolTipsPMT_SPREADMAIN[""]["D49"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D49"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D51"] = "D51";
	$fieldToolTipsPMT_SPREADMAIN[""]["D51"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D51"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["D52"] = "D52";
	$fieldToolTipsPMT_SPREADMAIN[""]["D52"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["D52"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["E27"] = "E27";
	$fieldToolTipsPMT_SPREADMAIN[""]["E27"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["E27"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F25"] = "F25";
	$fieldToolTipsPMT_SPREADMAIN[""]["F25"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F25"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F26"] = "F26";
	$fieldToolTipsPMT_SPREADMAIN[""]["F26"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F26"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F43"] = "F43";
	$fieldToolTipsPMT_SPREADMAIN[""]["F43"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F43"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F44"] = "F44";
	$fieldToolTipsPMT_SPREADMAIN[""]["F44"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F44"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F35"] = "F35";
	$fieldToolTipsPMT_SPREADMAIN[""]["F35"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F35"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F36"] = "F36";
	$fieldToolTipsPMT_SPREADMAIN[""]["F36"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F36"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F38"] = "F38";
	$fieldToolTipsPMT_SPREADMAIN[""]["F38"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F38"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["F48"] = "F48";
	$fieldToolTipsPMT_SPREADMAIN[""]["F48"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["F48"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_SPREADMAIN[""]["ROW"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["ROW"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["N1"] = "N1";
	$fieldToolTipsPMT_SPREADMAIN[""]["N1"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["N1"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["P1"] = "P1";
	$fieldToolTipsPMT_SPREADMAIN[""]["P1"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["P1"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["K80"] = "K80";
	$fieldToolTipsPMT_SPREADMAIN[""]["K80"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["K80"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["K27"] = "K27";
	$fieldToolTipsPMT_SPREADMAIN[""]["K27"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["K27"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["K25"] = "K25";
	$fieldToolTipsPMT_SPREADMAIN[""]["K25"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["K25"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["M35"] = "M35";
	$fieldToolTipsPMT_SPREADMAIN[""]["M35"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["M35"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["J36"] = "J36";
	$fieldToolTipsPMT_SPREADMAIN[""]["J36"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["J36"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_SPREADMAIN[""]["TIME"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["TIME"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_SPREADMAIN[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["M39"] = "M39";
	$fieldToolTipsPMT_SPREADMAIN[""]["M39"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["M39"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["M43"] = "M43";
	$fieldToolTipsPMT_SPREADMAIN[""]["M43"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["M43"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["M45"] = "M45";
	$fieldToolTipsPMT_SPREADMAIN[""]["M45"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["M45"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["K50"] = "K50";
	$fieldToolTipsPMT_SPREADMAIN[""]["K50"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["K50"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["P48"] = "P48";
	$fieldToolTipsPMT_SPREADMAIN[""]["P48"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["P48"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["P49"] = "P49";
	$fieldToolTipsPMT_SPREADMAIN[""]["P49"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["P49"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["P50"] = "P50";
	$fieldToolTipsPMT_SPREADMAIN[""]["P50"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["P50"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["P51"] = "P51";
	$fieldToolTipsPMT_SPREADMAIN[""]["P51"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["P51"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["P52"] = "P52";
	$fieldToolTipsPMT_SPREADMAIN[""]["P52"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["P52"] = "";
	$fieldLabelsPMT_SPREADMAIN[""]["id"] = "Id";
	$fieldToolTipsPMT_SPREADMAIN[""]["id"] = "";
	$placeHoldersPMT_SPREADMAIN[""]["id"] = "";
	if (count($fieldToolTipsPMT_SPREADMAIN[""]))
		$tdataPMT_SPREADMAIN[".isUseToolTips"] = true;
}


	$tdataPMT_SPREADMAIN[".NCSearch"] = true;



$tdataPMT_SPREADMAIN[".shortTableName"] = "PMT_SPREADMAIN";
$tdataPMT_SPREADMAIN[".nSecOptions"] = 0;
$tdataPMT_SPREADMAIN[".recsPerRowPrint"] = 1;
$tdataPMT_SPREADMAIN[".mainTableOwnerID"] = "";
$tdataPMT_SPREADMAIN[".moveNext"] = 1;
$tdataPMT_SPREADMAIN[".entityType"] = 0;

$tdataPMT_SPREADMAIN[".strOriginalTableName"] = "PMT_SPREADMAIN";

	



$tdataPMT_SPREADMAIN[".showAddInPopup"] = false;

$tdataPMT_SPREADMAIN[".showEditInPopup"] = false;

$tdataPMT_SPREADMAIN[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_SPREADMAIN[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_SPREADMAIN[".fieldsForRegister"] = array();
	
$tdataPMT_SPREADMAIN[".listAjax"] = false;

	$tdataPMT_SPREADMAIN[".audit"] = false;

	$tdataPMT_SPREADMAIN[".locking"] = false;

$tdataPMT_SPREADMAIN[".edit"] = true;
$tdataPMT_SPREADMAIN[".afterEditAction"] = 1;
$tdataPMT_SPREADMAIN[".closePopupAfterEdit"] = 1;
$tdataPMT_SPREADMAIN[".afterEditActionDetTable"] = "";

$tdataPMT_SPREADMAIN[".add"] = true;
$tdataPMT_SPREADMAIN[".afterAddAction"] = 1;
$tdataPMT_SPREADMAIN[".closePopupAfterAdd"] = 1;
$tdataPMT_SPREADMAIN[".afterAddActionDetTable"] = "";

$tdataPMT_SPREADMAIN[".list"] = true;

$tdataPMT_SPREADMAIN[".inlineEdit"] = true;

$tdataPMT_SPREADMAIN[".updateSelected"] = true;

$tdataPMT_SPREADMAIN[".reorderRecordsByHeader"] = true;



$tdataPMT_SPREADMAIN[".inlineAdd"] = true;
$tdataPMT_SPREADMAIN[".copy"] = true;
$tdataPMT_SPREADMAIN[".view"] = true;

$tdataPMT_SPREADMAIN[".import"] = true;

$tdataPMT_SPREADMAIN[".exportTo"] = true;

$tdataPMT_SPREADMAIN[".printFriendly"] = true;

$tdataPMT_SPREADMAIN[".delete"] = true;

$tdataPMT_SPREADMAIN[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_SPREADMAIN[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_SPREADMAIN[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_SPREADMAIN[".searchSaving"] = false;
//

$tdataPMT_SPREADMAIN[".showSearchPanel"] = true;
		$tdataPMT_SPREADMAIN[".flexibleSearch"] = true;

$tdataPMT_SPREADMAIN[".isUseAjaxSuggest"] = true;

$tdataPMT_SPREADMAIN[".rowHighlite"] = true;



				

$tdataPMT_SPREADMAIN[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_SPREADMAIN[".buttonsAdded"] = false;

$tdataPMT_SPREADMAIN[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_SPREADMAIN[".isUseTimeForSearch"] = false;





$tdataPMT_SPREADMAIN[".allSearchFields"] = array();
$tdataPMT_SPREADMAIN[".filterFields"] = array();
$tdataPMT_SPREADMAIN[".requiredSearchFields"] = array();

$tdataPMT_SPREADMAIN[".allSearchFields"][] = "APP_UID";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "ROW";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "N1";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "P1";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F25";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "K80";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F26";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "E27";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "K27";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "K25";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "A30";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "A31";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "A32";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D35";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F35";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "M35";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D36";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F36";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "J36";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D38";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F38";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D39";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "TIME";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "M39";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D40";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D41";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D42";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D43";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "M43";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F43";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D44";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F44";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D45";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "M45";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D48";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "F48";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D49";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D51";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "D52";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "K50";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "P48";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "P49";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "P50";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "P51";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "P52";
	$tdataPMT_SPREADMAIN[".allSearchFields"][] = "id";
	

$tdataPMT_SPREADMAIN[".googleLikeFields"] = array();
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "N1";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "P1";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F25";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "K80";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F26";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "E27";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "K27";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "K25";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "A30";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "A31";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "A32";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D35";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F35";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "M35";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D36";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F36";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "J36";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D38";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F38";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D39";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "M39";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D40";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D41";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D42";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D43";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "M43";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F43";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D44";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F44";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D45";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "M45";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D48";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "F48";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D49";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D51";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "D52";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "K50";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "P48";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "P49";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "P50";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "P51";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "P52";
$tdataPMT_SPREADMAIN[".googleLikeFields"][] = "id";


$tdataPMT_SPREADMAIN[".advSearchFields"] = array();
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "N1";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "P1";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F25";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "K80";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F26";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "E27";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "K27";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "K25";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "A30";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "A31";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "A32";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D35";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F35";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "M35";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D36";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F36";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "J36";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D38";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F38";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D39";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "M39";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D40";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D41";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D42";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D43";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "M43";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F43";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D44";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F44";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D45";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "M45";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D48";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "F48";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D49";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D51";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "D52";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "K50";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "P48";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "P49";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "P50";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "P51";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "P52";
$tdataPMT_SPREADMAIN[".advSearchFields"][] = "id";

$tdataPMT_SPREADMAIN[".tableType"] = "list";

$tdataPMT_SPREADMAIN[".printerPageOrientation"] = 0;
$tdataPMT_SPREADMAIN[".nPrinterPageScale"] = 100;

$tdataPMT_SPREADMAIN[".nPrinterSplitRecords"] = 40;

$tdataPMT_SPREADMAIN[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_SPREADMAIN[".geocodingEnabled"] = false;





$tdataPMT_SPREADMAIN[".listGridLayout"] = 3;





// view page pdf
$tdataPMT_SPREADMAIN[".isViewPagePDF"] = true;
$tdataPMT_SPREADMAIN[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataPMT_SPREADMAIN[".isPrinterPagePDF"] = true;
$tdataPMT_SPREADMAIN[".nPrinterPagePDFScale"] = 100;


$tdataPMT_SPREADMAIN[".pageSize"] = 20;

$tdataPMT_SPREADMAIN[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_SPREADMAIN[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_SPREADMAIN[".orderindexes"] = array();
$tdataPMT_SPREADMAIN[".orderindexes"][] = array(49, (0 ? "ASC" : "DESC"), "id");

$tdataPMT_SPREADMAIN[".sqlHead"] = "SELECT APP_UID,  APP_NUMBER,  APP_STATUS,  `ROW`,  N1,  P1,  F25,  K80,  F26,  E27,  K27,  K25,  A30,  A31,  A32,  D35,  F35,  M35,  D36,  F36,  J36,  D38,  F38,  D39,  `TIME`,  MONTHLY_REPORT,  M39,  D40,  D41,  D42,  D43,  M43,  F43,  D44,  F44,  D45,  M45,  D48,  F48,  D49,  D51,  D52,  K50,  P48,  P49,  P50,  P51,  P52,  id";
$tdataPMT_SPREADMAIN[".sqlFrom"] = "FROM PMT_SPREADMAIN";
$tdataPMT_SPREADMAIN[".sqlWhereExpr"] = "";
$tdataPMT_SPREADMAIN[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_SPREADMAIN[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_SPREADMAIN[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_SPREADMAIN[".highlightSearchResults"] = true;

$tableKeysPMT_SPREADMAIN = array();
$tableKeysPMT_SPREADMAIN[] = "APP_UID";
$tdataPMT_SPREADMAIN[".Keys"] = $tableKeysPMT_SPREADMAIN;

$tdataPMT_SPREADMAIN[".listFields"] = array();
$tdataPMT_SPREADMAIN[".listFields"][] = "id";
$tdataPMT_SPREADMAIN[".listFields"][] = "K50";
$tdataPMT_SPREADMAIN[".listFields"][] = "P48";
$tdataPMT_SPREADMAIN[".listFields"][] = "P49";
$tdataPMT_SPREADMAIN[".listFields"][] = "P50";
$tdataPMT_SPREADMAIN[".listFields"][] = "P51";
$tdataPMT_SPREADMAIN[".listFields"][] = "P52";
$tdataPMT_SPREADMAIN[".listFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".listFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".listFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".listFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".listFields"][] = "N1";
$tdataPMT_SPREADMAIN[".listFields"][] = "P1";
$tdataPMT_SPREADMAIN[".listFields"][] = "F25";
$tdataPMT_SPREADMAIN[".listFields"][] = "K80";
$tdataPMT_SPREADMAIN[".listFields"][] = "F26";
$tdataPMT_SPREADMAIN[".listFields"][] = "E27";
$tdataPMT_SPREADMAIN[".listFields"][] = "K27";
$tdataPMT_SPREADMAIN[".listFields"][] = "K25";
$tdataPMT_SPREADMAIN[".listFields"][] = "A30";
$tdataPMT_SPREADMAIN[".listFields"][] = "A31";
$tdataPMT_SPREADMAIN[".listFields"][] = "A32";
$tdataPMT_SPREADMAIN[".listFields"][] = "D35";
$tdataPMT_SPREADMAIN[".listFields"][] = "F35";
$tdataPMT_SPREADMAIN[".listFields"][] = "M35";
$tdataPMT_SPREADMAIN[".listFields"][] = "D36";
$tdataPMT_SPREADMAIN[".listFields"][] = "F36";
$tdataPMT_SPREADMAIN[".listFields"][] = "J36";
$tdataPMT_SPREADMAIN[".listFields"][] = "D38";
$tdataPMT_SPREADMAIN[".listFields"][] = "F38";
$tdataPMT_SPREADMAIN[".listFields"][] = "D39";
$tdataPMT_SPREADMAIN[".listFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".listFields"][] = "M39";
$tdataPMT_SPREADMAIN[".listFields"][] = "D40";
$tdataPMT_SPREADMAIN[".listFields"][] = "D41";
$tdataPMT_SPREADMAIN[".listFields"][] = "D42";
$tdataPMT_SPREADMAIN[".listFields"][] = "D43";
$tdataPMT_SPREADMAIN[".listFields"][] = "M43";
$tdataPMT_SPREADMAIN[".listFields"][] = "F43";
$tdataPMT_SPREADMAIN[".listFields"][] = "D44";
$tdataPMT_SPREADMAIN[".listFields"][] = "F44";
$tdataPMT_SPREADMAIN[".listFields"][] = "D45";
$tdataPMT_SPREADMAIN[".listFields"][] = "M45";
$tdataPMT_SPREADMAIN[".listFields"][] = "D48";
$tdataPMT_SPREADMAIN[".listFields"][] = "F48";
$tdataPMT_SPREADMAIN[".listFields"][] = "D49";
$tdataPMT_SPREADMAIN[".listFields"][] = "D51";
$tdataPMT_SPREADMAIN[".listFields"][] = "D52";

$tdataPMT_SPREADMAIN[".hideMobileList"] = array();


$tdataPMT_SPREADMAIN[".viewFields"] = array();
$tdataPMT_SPREADMAIN[".viewFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".viewFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".viewFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".viewFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".viewFields"][] = "N1";
$tdataPMT_SPREADMAIN[".viewFields"][] = "P1";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F25";
$tdataPMT_SPREADMAIN[".viewFields"][] = "K80";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F26";
$tdataPMT_SPREADMAIN[".viewFields"][] = "E27";
$tdataPMT_SPREADMAIN[".viewFields"][] = "K27";
$tdataPMT_SPREADMAIN[".viewFields"][] = "K25";
$tdataPMT_SPREADMAIN[".viewFields"][] = "A30";
$tdataPMT_SPREADMAIN[".viewFields"][] = "A31";
$tdataPMT_SPREADMAIN[".viewFields"][] = "A32";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D35";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F35";
$tdataPMT_SPREADMAIN[".viewFields"][] = "M35";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D36";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F36";
$tdataPMT_SPREADMAIN[".viewFields"][] = "J36";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D38";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F38";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D39";
$tdataPMT_SPREADMAIN[".viewFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".viewFields"][] = "M39";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D40";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D41";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D42";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D43";
$tdataPMT_SPREADMAIN[".viewFields"][] = "M43";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F43";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D44";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F44";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D45";
$tdataPMT_SPREADMAIN[".viewFields"][] = "M45";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D48";
$tdataPMT_SPREADMAIN[".viewFields"][] = "F48";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D49";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D51";
$tdataPMT_SPREADMAIN[".viewFields"][] = "D52";
$tdataPMT_SPREADMAIN[".viewFields"][] = "K50";
$tdataPMT_SPREADMAIN[".viewFields"][] = "P48";
$tdataPMT_SPREADMAIN[".viewFields"][] = "P49";
$tdataPMT_SPREADMAIN[".viewFields"][] = "P50";
$tdataPMT_SPREADMAIN[".viewFields"][] = "P51";
$tdataPMT_SPREADMAIN[".viewFields"][] = "P52";
$tdataPMT_SPREADMAIN[".viewFields"][] = "id";

$tdataPMT_SPREADMAIN[".addFields"] = array();
$tdataPMT_SPREADMAIN[".addFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".addFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".addFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".addFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".addFields"][] = "N1";
$tdataPMT_SPREADMAIN[".addFields"][] = "P1";
$tdataPMT_SPREADMAIN[".addFields"][] = "F25";
$tdataPMT_SPREADMAIN[".addFields"][] = "K80";
$tdataPMT_SPREADMAIN[".addFields"][] = "F26";
$tdataPMT_SPREADMAIN[".addFields"][] = "E27";
$tdataPMT_SPREADMAIN[".addFields"][] = "K27";
$tdataPMT_SPREADMAIN[".addFields"][] = "K25";
$tdataPMT_SPREADMAIN[".addFields"][] = "A30";
$tdataPMT_SPREADMAIN[".addFields"][] = "A31";
$tdataPMT_SPREADMAIN[".addFields"][] = "A32";
$tdataPMT_SPREADMAIN[".addFields"][] = "D35";
$tdataPMT_SPREADMAIN[".addFields"][] = "F35";
$tdataPMT_SPREADMAIN[".addFields"][] = "M35";
$tdataPMT_SPREADMAIN[".addFields"][] = "D36";
$tdataPMT_SPREADMAIN[".addFields"][] = "F36";
$tdataPMT_SPREADMAIN[".addFields"][] = "J36";
$tdataPMT_SPREADMAIN[".addFields"][] = "D38";
$tdataPMT_SPREADMAIN[".addFields"][] = "F38";
$tdataPMT_SPREADMAIN[".addFields"][] = "D39";
$tdataPMT_SPREADMAIN[".addFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".addFields"][] = "M39";
$tdataPMT_SPREADMAIN[".addFields"][] = "D40";
$tdataPMT_SPREADMAIN[".addFields"][] = "D41";
$tdataPMT_SPREADMAIN[".addFields"][] = "D42";
$tdataPMT_SPREADMAIN[".addFields"][] = "D43";
$tdataPMT_SPREADMAIN[".addFields"][] = "M43";
$tdataPMT_SPREADMAIN[".addFields"][] = "F43";
$tdataPMT_SPREADMAIN[".addFields"][] = "D44";
$tdataPMT_SPREADMAIN[".addFields"][] = "F44";
$tdataPMT_SPREADMAIN[".addFields"][] = "D45";
$tdataPMT_SPREADMAIN[".addFields"][] = "M45";
$tdataPMT_SPREADMAIN[".addFields"][] = "D48";
$tdataPMT_SPREADMAIN[".addFields"][] = "F48";
$tdataPMT_SPREADMAIN[".addFields"][] = "D49";
$tdataPMT_SPREADMAIN[".addFields"][] = "D51";
$tdataPMT_SPREADMAIN[".addFields"][] = "D52";
$tdataPMT_SPREADMAIN[".addFields"][] = "K50";
$tdataPMT_SPREADMAIN[".addFields"][] = "P48";
$tdataPMT_SPREADMAIN[".addFields"][] = "P49";
$tdataPMT_SPREADMAIN[".addFields"][] = "P50";
$tdataPMT_SPREADMAIN[".addFields"][] = "P51";
$tdataPMT_SPREADMAIN[".addFields"][] = "P52";
$tdataPMT_SPREADMAIN[".addFields"][] = "id";

$tdataPMT_SPREADMAIN[".masterListFields"] = array();
$tdataPMT_SPREADMAIN[".masterListFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "N1";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "P1";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F25";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "K80";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F26";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "E27";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "K27";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "K25";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "A30";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "A31";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "A32";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D35";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F35";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "M35";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D36";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F36";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "J36";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D38";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F38";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D39";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "M39";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D40";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D41";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D42";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D43";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "M43";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F43";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D44";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F44";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D45";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "M45";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D48";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "F48";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D49";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D51";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "D52";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "K50";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "P48";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "P49";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "P50";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "P51";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "P52";
$tdataPMT_SPREADMAIN[".masterListFields"][] = "id";

$tdataPMT_SPREADMAIN[".inlineAddFields"] = array();
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "id";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "K50";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "P48";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "P49";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "P50";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "P51";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "P52";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "N1";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "P1";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F25";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "K80";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F26";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "E27";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "K27";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "K25";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "A30";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "A31";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "A32";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D35";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F35";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "M35";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D36";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F36";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "J36";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D38";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F38";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D39";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "M39";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D40";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D41";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D42";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D43";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "M43";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F43";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D44";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F44";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D45";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "M45";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D48";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "F48";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D49";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D51";
$tdataPMT_SPREADMAIN[".inlineAddFields"][] = "D52";

$tdataPMT_SPREADMAIN[".editFields"] = array();
$tdataPMT_SPREADMAIN[".editFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".editFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".editFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".editFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".editFields"][] = "N1";
$tdataPMT_SPREADMAIN[".editFields"][] = "P1";
$tdataPMT_SPREADMAIN[".editFields"][] = "F25";
$tdataPMT_SPREADMAIN[".editFields"][] = "K80";
$tdataPMT_SPREADMAIN[".editFields"][] = "F26";
$tdataPMT_SPREADMAIN[".editFields"][] = "E27";
$tdataPMT_SPREADMAIN[".editFields"][] = "K27";
$tdataPMT_SPREADMAIN[".editFields"][] = "K25";
$tdataPMT_SPREADMAIN[".editFields"][] = "A30";
$tdataPMT_SPREADMAIN[".editFields"][] = "A31";
$tdataPMT_SPREADMAIN[".editFields"][] = "A32";
$tdataPMT_SPREADMAIN[".editFields"][] = "D35";
$tdataPMT_SPREADMAIN[".editFields"][] = "F35";
$tdataPMT_SPREADMAIN[".editFields"][] = "M35";
$tdataPMT_SPREADMAIN[".editFields"][] = "D36";
$tdataPMT_SPREADMAIN[".editFields"][] = "F36";
$tdataPMT_SPREADMAIN[".editFields"][] = "J36";
$tdataPMT_SPREADMAIN[".editFields"][] = "D38";
$tdataPMT_SPREADMAIN[".editFields"][] = "F38";
$tdataPMT_SPREADMAIN[".editFields"][] = "D39";
$tdataPMT_SPREADMAIN[".editFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".editFields"][] = "M39";
$tdataPMT_SPREADMAIN[".editFields"][] = "D40";
$tdataPMT_SPREADMAIN[".editFields"][] = "D41";
$tdataPMT_SPREADMAIN[".editFields"][] = "D42";
$tdataPMT_SPREADMAIN[".editFields"][] = "D43";
$tdataPMT_SPREADMAIN[".editFields"][] = "M43";
$tdataPMT_SPREADMAIN[".editFields"][] = "F43";
$tdataPMT_SPREADMAIN[".editFields"][] = "D44";
$tdataPMT_SPREADMAIN[".editFields"][] = "F44";
$tdataPMT_SPREADMAIN[".editFields"][] = "D45";
$tdataPMT_SPREADMAIN[".editFields"][] = "M45";
$tdataPMT_SPREADMAIN[".editFields"][] = "D48";
$tdataPMT_SPREADMAIN[".editFields"][] = "F48";
$tdataPMT_SPREADMAIN[".editFields"][] = "D49";
$tdataPMT_SPREADMAIN[".editFields"][] = "D51";
$tdataPMT_SPREADMAIN[".editFields"][] = "D52";
$tdataPMT_SPREADMAIN[".editFields"][] = "K50";
$tdataPMT_SPREADMAIN[".editFields"][] = "P48";
$tdataPMT_SPREADMAIN[".editFields"][] = "P49";
$tdataPMT_SPREADMAIN[".editFields"][] = "P50";
$tdataPMT_SPREADMAIN[".editFields"][] = "P51";
$tdataPMT_SPREADMAIN[".editFields"][] = "P52";
$tdataPMT_SPREADMAIN[".editFields"][] = "id";

$tdataPMT_SPREADMAIN[".inlineEditFields"] = array();
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "id";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "K50";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "P48";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "P49";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "P50";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "P51";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "P52";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "N1";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "P1";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F25";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "K80";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F26";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "E27";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "K27";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "K25";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "A30";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "A31";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "A32";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D35";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F35";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "M35";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D36";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F36";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "J36";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D38";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F38";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D39";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "M39";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D40";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D41";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D42";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D43";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "M43";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F43";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D44";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F44";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D45";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "M45";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D48";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "F48";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D49";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D51";
$tdataPMT_SPREADMAIN[".inlineEditFields"][] = "D52";

$tdataPMT_SPREADMAIN[".updateSelectedFields"] = array();
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "N1";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "P1";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F25";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "K80";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F26";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "E27";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "K27";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "K25";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "A30";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "A31";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "A32";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D35";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F35";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "M35";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D36";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F36";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "J36";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D38";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F38";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D39";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "M39";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D40";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D41";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D42";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D43";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "M43";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F43";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D44";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F44";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D45";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "M45";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D48";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "F48";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D49";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D51";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "D52";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "K50";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "P48";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "P49";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "P50";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "P51";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "P52";
$tdataPMT_SPREADMAIN[".updateSelectedFields"][] = "id";


$tdataPMT_SPREADMAIN[".exportFields"] = array();
$tdataPMT_SPREADMAIN[".exportFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".exportFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".exportFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".exportFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".exportFields"][] = "N1";
$tdataPMT_SPREADMAIN[".exportFields"][] = "P1";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F25";
$tdataPMT_SPREADMAIN[".exportFields"][] = "K80";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F26";
$tdataPMT_SPREADMAIN[".exportFields"][] = "E27";
$tdataPMT_SPREADMAIN[".exportFields"][] = "K27";
$tdataPMT_SPREADMAIN[".exportFields"][] = "K25";
$tdataPMT_SPREADMAIN[".exportFields"][] = "A30";
$tdataPMT_SPREADMAIN[".exportFields"][] = "A31";
$tdataPMT_SPREADMAIN[".exportFields"][] = "A32";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D35";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F35";
$tdataPMT_SPREADMAIN[".exportFields"][] = "M35";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D36";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F36";
$tdataPMT_SPREADMAIN[".exportFields"][] = "J36";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D38";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F38";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D39";
$tdataPMT_SPREADMAIN[".exportFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".exportFields"][] = "M39";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D40";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D41";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D42";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D43";
$tdataPMT_SPREADMAIN[".exportFields"][] = "M43";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F43";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D44";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F44";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D45";
$tdataPMT_SPREADMAIN[".exportFields"][] = "M45";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D48";
$tdataPMT_SPREADMAIN[".exportFields"][] = "F48";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D49";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D51";
$tdataPMT_SPREADMAIN[".exportFields"][] = "D52";
$tdataPMT_SPREADMAIN[".exportFields"][] = "K50";
$tdataPMT_SPREADMAIN[".exportFields"][] = "P48";
$tdataPMT_SPREADMAIN[".exportFields"][] = "P49";
$tdataPMT_SPREADMAIN[".exportFields"][] = "P50";
$tdataPMT_SPREADMAIN[".exportFields"][] = "P51";
$tdataPMT_SPREADMAIN[".exportFields"][] = "P52";
$tdataPMT_SPREADMAIN[".exportFields"][] = "id";

$tdataPMT_SPREADMAIN[".importFields"] = array();
$tdataPMT_SPREADMAIN[".importFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".importFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".importFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".importFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".importFields"][] = "N1";
$tdataPMT_SPREADMAIN[".importFields"][] = "P1";
$tdataPMT_SPREADMAIN[".importFields"][] = "F25";
$tdataPMT_SPREADMAIN[".importFields"][] = "K80";
$tdataPMT_SPREADMAIN[".importFields"][] = "F26";
$tdataPMT_SPREADMAIN[".importFields"][] = "E27";
$tdataPMT_SPREADMAIN[".importFields"][] = "K27";
$tdataPMT_SPREADMAIN[".importFields"][] = "K25";
$tdataPMT_SPREADMAIN[".importFields"][] = "A30";
$tdataPMT_SPREADMAIN[".importFields"][] = "A31";
$tdataPMT_SPREADMAIN[".importFields"][] = "A32";
$tdataPMT_SPREADMAIN[".importFields"][] = "D35";
$tdataPMT_SPREADMAIN[".importFields"][] = "F35";
$tdataPMT_SPREADMAIN[".importFields"][] = "M35";
$tdataPMT_SPREADMAIN[".importFields"][] = "D36";
$tdataPMT_SPREADMAIN[".importFields"][] = "F36";
$tdataPMT_SPREADMAIN[".importFields"][] = "J36";
$tdataPMT_SPREADMAIN[".importFields"][] = "D38";
$tdataPMT_SPREADMAIN[".importFields"][] = "F38";
$tdataPMT_SPREADMAIN[".importFields"][] = "D39";
$tdataPMT_SPREADMAIN[".importFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".importFields"][] = "M39";
$tdataPMT_SPREADMAIN[".importFields"][] = "D40";
$tdataPMT_SPREADMAIN[".importFields"][] = "D41";
$tdataPMT_SPREADMAIN[".importFields"][] = "D42";
$tdataPMT_SPREADMAIN[".importFields"][] = "D43";
$tdataPMT_SPREADMAIN[".importFields"][] = "M43";
$tdataPMT_SPREADMAIN[".importFields"][] = "F43";
$tdataPMT_SPREADMAIN[".importFields"][] = "D44";
$tdataPMT_SPREADMAIN[".importFields"][] = "F44";
$tdataPMT_SPREADMAIN[".importFields"][] = "D45";
$tdataPMT_SPREADMAIN[".importFields"][] = "M45";
$tdataPMT_SPREADMAIN[".importFields"][] = "D48";
$tdataPMT_SPREADMAIN[".importFields"][] = "F48";
$tdataPMT_SPREADMAIN[".importFields"][] = "D49";
$tdataPMT_SPREADMAIN[".importFields"][] = "D51";
$tdataPMT_SPREADMAIN[".importFields"][] = "D52";
$tdataPMT_SPREADMAIN[".importFields"][] = "K50";
$tdataPMT_SPREADMAIN[".importFields"][] = "P48";
$tdataPMT_SPREADMAIN[".importFields"][] = "P49";
$tdataPMT_SPREADMAIN[".importFields"][] = "P50";
$tdataPMT_SPREADMAIN[".importFields"][] = "P51";
$tdataPMT_SPREADMAIN[".importFields"][] = "P52";
$tdataPMT_SPREADMAIN[".importFields"][] = "id";

$tdataPMT_SPREADMAIN[".printFields"] = array();
$tdataPMT_SPREADMAIN[".printFields"][] = "APP_UID";
$tdataPMT_SPREADMAIN[".printFields"][] = "APP_NUMBER";
$tdataPMT_SPREADMAIN[".printFields"][] = "APP_STATUS";
$tdataPMT_SPREADMAIN[".printFields"][] = "ROW";
$tdataPMT_SPREADMAIN[".printFields"][] = "N1";
$tdataPMT_SPREADMAIN[".printFields"][] = "P1";
$tdataPMT_SPREADMAIN[".printFields"][] = "F25";
$tdataPMT_SPREADMAIN[".printFields"][] = "K80";
$tdataPMT_SPREADMAIN[".printFields"][] = "F26";
$tdataPMT_SPREADMAIN[".printFields"][] = "E27";
$tdataPMT_SPREADMAIN[".printFields"][] = "K27";
$tdataPMT_SPREADMAIN[".printFields"][] = "K25";
$tdataPMT_SPREADMAIN[".printFields"][] = "A30";
$tdataPMT_SPREADMAIN[".printFields"][] = "A31";
$tdataPMT_SPREADMAIN[".printFields"][] = "A32";
$tdataPMT_SPREADMAIN[".printFields"][] = "D35";
$tdataPMT_SPREADMAIN[".printFields"][] = "F35";
$tdataPMT_SPREADMAIN[".printFields"][] = "M35";
$tdataPMT_SPREADMAIN[".printFields"][] = "D36";
$tdataPMT_SPREADMAIN[".printFields"][] = "F36";
$tdataPMT_SPREADMAIN[".printFields"][] = "J36";
$tdataPMT_SPREADMAIN[".printFields"][] = "D38";
$tdataPMT_SPREADMAIN[".printFields"][] = "F38";
$tdataPMT_SPREADMAIN[".printFields"][] = "D39";
$tdataPMT_SPREADMAIN[".printFields"][] = "TIME";
$tdataPMT_SPREADMAIN[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_SPREADMAIN[".printFields"][] = "M39";
$tdataPMT_SPREADMAIN[".printFields"][] = "D40";
$tdataPMT_SPREADMAIN[".printFields"][] = "D41";
$tdataPMT_SPREADMAIN[".printFields"][] = "D42";
$tdataPMT_SPREADMAIN[".printFields"][] = "D43";
$tdataPMT_SPREADMAIN[".printFields"][] = "M43";
$tdataPMT_SPREADMAIN[".printFields"][] = "F43";
$tdataPMT_SPREADMAIN[".printFields"][] = "D44";
$tdataPMT_SPREADMAIN[".printFields"][] = "F44";
$tdataPMT_SPREADMAIN[".printFields"][] = "D45";
$tdataPMT_SPREADMAIN[".printFields"][] = "M45";
$tdataPMT_SPREADMAIN[".printFields"][] = "D48";
$tdataPMT_SPREADMAIN[".printFields"][] = "F48";
$tdataPMT_SPREADMAIN[".printFields"][] = "D49";
$tdataPMT_SPREADMAIN[".printFields"][] = "D51";
$tdataPMT_SPREADMAIN[".printFields"][] = "D52";
$tdataPMT_SPREADMAIN[".printFields"][] = "K50";
$tdataPMT_SPREADMAIN[".printFields"][] = "P48";
$tdataPMT_SPREADMAIN[".printFields"][] = "P49";
$tdataPMT_SPREADMAIN[".printFields"][] = "P50";
$tdataPMT_SPREADMAIN[".printFields"][] = "P51";
$tdataPMT_SPREADMAIN[".printFields"][] = "P52";
$tdataPMT_SPREADMAIN[".printFields"][] = "id";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","APP_UID");
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




	$tdataPMT_SPREADMAIN["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","APP_NUMBER");
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




	$tdataPMT_SPREADMAIN["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","APP_STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataPMT_SPREADMAIN["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","ROW");
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




	$tdataPMT_SPREADMAIN["ROW"] = $fdata;
//	N1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "N1";
	$fdata["GoodName"] = "N1";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","N1");
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




	$tdataPMT_SPREADMAIN["N1"] = $fdata;
//	P1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "P1";
	$fdata["GoodName"] = "P1";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","P1");
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




	$tdataPMT_SPREADMAIN["P1"] = $fdata;
//	F25
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F25";
	$fdata["GoodName"] = "F25";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F25");
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




	$tdataPMT_SPREADMAIN["F25"] = $fdata;
//	K80
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "K80";
	$fdata["GoodName"] = "K80";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","K80");
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




	$tdataPMT_SPREADMAIN["K80"] = $fdata;
//	F26
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "F26";
	$fdata["GoodName"] = "F26";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F26");
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




	$tdataPMT_SPREADMAIN["F26"] = $fdata;
//	E27
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "E27";
	$fdata["GoodName"] = "E27";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","E27");
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




	$tdataPMT_SPREADMAIN["E27"] = $fdata;
//	K27
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "K27";
	$fdata["GoodName"] = "K27";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","K27");
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




	$tdataPMT_SPREADMAIN["K27"] = $fdata;
//	K25
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K25";
	$fdata["GoodName"] = "K25";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","K25");
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




	$tdataPMT_SPREADMAIN["K25"] = $fdata;
//	A30
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "A30";
	$fdata["GoodName"] = "A30";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","A30");
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




	$tdataPMT_SPREADMAIN["A30"] = $fdata;
//	A31
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "A31";
	$fdata["GoodName"] = "A31";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","A31");
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




	$tdataPMT_SPREADMAIN["A31"] = $fdata;
//	A32
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "A32";
	$fdata["GoodName"] = "A32";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","A32");
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




	$tdataPMT_SPREADMAIN["A32"] = $fdata;
//	D35
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "D35";
	$fdata["GoodName"] = "D35";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D35");
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




	$tdataPMT_SPREADMAIN["D35"] = $fdata;
//	F35
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "F35";
	$fdata["GoodName"] = "F35";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F35");
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




	$tdataPMT_SPREADMAIN["F35"] = $fdata;
//	M35
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "M35";
	$fdata["GoodName"] = "M35";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","M35");
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




	$tdataPMT_SPREADMAIN["M35"] = $fdata;
//	D36
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "D36";
	$fdata["GoodName"] = "D36";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D36");
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




	$tdataPMT_SPREADMAIN["D36"] = $fdata;
//	F36
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "F36";
	$fdata["GoodName"] = "F36";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F36");
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




	$tdataPMT_SPREADMAIN["F36"] = $fdata;
//	J36
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "J36";
	$fdata["GoodName"] = "J36";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","J36");
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




	$tdataPMT_SPREADMAIN["J36"] = $fdata;
//	D38
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "D38";
	$fdata["GoodName"] = "D38";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D38");
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




	$tdataPMT_SPREADMAIN["D38"] = $fdata;
//	F38
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "F38";
	$fdata["GoodName"] = "F38";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F38");
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




	$tdataPMT_SPREADMAIN["F38"] = $fdata;
//	D39
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "D39";
	$fdata["GoodName"] = "D39";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D39");
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




	$tdataPMT_SPREADMAIN["D39"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","TIME");
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




	$tdataPMT_SPREADMAIN["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","MONTHLY_REPORT");
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




	$tdataPMT_SPREADMAIN["MONTHLY_REPORT"] = $fdata;
//	M39
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "M39";
	$fdata["GoodName"] = "M39";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","M39");
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




	$tdataPMT_SPREADMAIN["M39"] = $fdata;
//	D40
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "D40";
	$fdata["GoodName"] = "D40";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D40");
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




	$tdataPMT_SPREADMAIN["D40"] = $fdata;
//	D41
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "D41";
	$fdata["GoodName"] = "D41";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D41");
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




	$tdataPMT_SPREADMAIN["D41"] = $fdata;
//	D42
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "D42";
	$fdata["GoodName"] = "D42";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D42");
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




	$tdataPMT_SPREADMAIN["D42"] = $fdata;
//	D43
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "D43";
	$fdata["GoodName"] = "D43";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D43");
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




	$tdataPMT_SPREADMAIN["D43"] = $fdata;
//	M43
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "M43";
	$fdata["GoodName"] = "M43";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","M43");
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




	$tdataPMT_SPREADMAIN["M43"] = $fdata;
//	F43
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "F43";
	$fdata["GoodName"] = "F43";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F43");
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




	$tdataPMT_SPREADMAIN["F43"] = $fdata;
//	D44
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "D44";
	$fdata["GoodName"] = "D44";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D44");
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




	$tdataPMT_SPREADMAIN["D44"] = $fdata;
//	F44
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "F44";
	$fdata["GoodName"] = "F44";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F44");
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




	$tdataPMT_SPREADMAIN["F44"] = $fdata;
//	D45
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "D45";
	$fdata["GoodName"] = "D45";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D45");
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




	$tdataPMT_SPREADMAIN["D45"] = $fdata;
//	M45
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "M45";
	$fdata["GoodName"] = "M45";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","M45");
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




	$tdataPMT_SPREADMAIN["M45"] = $fdata;
//	D48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "D48";
	$fdata["GoodName"] = "D48";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D48");
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




	$tdataPMT_SPREADMAIN["D48"] = $fdata;
//	F48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "F48";
	$fdata["GoodName"] = "F48";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","F48");
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




	$tdataPMT_SPREADMAIN["F48"] = $fdata;
//	D49
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "D49";
	$fdata["GoodName"] = "D49";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D49");
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




	$tdataPMT_SPREADMAIN["D49"] = $fdata;
//	D51
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "D51";
	$fdata["GoodName"] = "D51";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D51");
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




	$tdataPMT_SPREADMAIN["D51"] = $fdata;
//	D52
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "D52";
	$fdata["GoodName"] = "D52";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","D52");
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




	$tdataPMT_SPREADMAIN["D52"] = $fdata;
//	K50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "K50";
	$fdata["GoodName"] = "K50";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","K50");
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




	$tdataPMT_SPREADMAIN["K50"] = $fdata;
//	P48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "P48";
	$fdata["GoodName"] = "P48";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","P48");
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




	$tdataPMT_SPREADMAIN["P48"] = $fdata;
//	P49
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "P49";
	$fdata["GoodName"] = "P49";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","P49");
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




	$tdataPMT_SPREADMAIN["P49"] = $fdata;
//	P50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "P50";
	$fdata["GoodName"] = "P50";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","P50");
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




	$tdataPMT_SPREADMAIN["P50"] = $fdata;
//	P51
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "P51";
	$fdata["GoodName"] = "P51";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","P51");
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




	$tdataPMT_SPREADMAIN["P51"] = $fdata;
//	P52
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "P52";
	$fdata["GoodName"] = "P52";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","P52");
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




	$tdataPMT_SPREADMAIN["P52"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "PMT_SPREADMAIN";
	$fdata["Label"] = GetFieldLabel("PMT_SPREADMAIN","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
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

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdataPMT_SPREADMAIN["id"] = $fdata;


$tables_data["PMT_SPREADMAIN"]=&$tdataPMT_SPREADMAIN;
$field_labels["PMT_SPREADMAIN"] = &$fieldLabelsPMT_SPREADMAIN;
$fieldToolTips["PMT_SPREADMAIN"] = &$fieldToolTipsPMT_SPREADMAIN;
$placeHolders["PMT_SPREADMAIN"] = &$placeHoldersPMT_SPREADMAIN;
$page_titles["PMT_SPREADMAIN"] = &$pageTitlesPMT_SPREADMAIN;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_SPREADMAIN"] = array();
//	PMT_SPREADSUB
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_SPREADSUB";
		$detailsParam["dOriginalTable"] = "PMT_SPREADSUB";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_SPREADSUB";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_SPREADSUB");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["PMT_SPREADMAIN"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_SPREADMAIN"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_SPREADMAIN"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["PMT_SPREADMAIN"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_SPREADMAIN"][$dIndex]["detailKeys"][]="APP_UID";

// tables which are master tables for current table (detail)
$masterTablesData["PMT_SPREADMAIN"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_SPREADMAIN()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  APP_NUMBER,  APP_STATUS,  `ROW`,  N1,  P1,  F25,  K80,  F26,  E27,  K27,  K25,  A30,  A31,  A32,  D35,  F35,  M35,  D36,  F36,  J36,  D38,  F38,  D39,  `TIME`,  MONTHLY_REPORT,  M39,  D40,  D41,  D42,  D43,  M43,  F43,  D44,  F44,  D45,  M45,  D48,  F48,  D49,  D51,  D52,  K50,  P48,  P49,  P50,  P51,  P52,  id";
$proto0["m_strFrom"] = "FROM PMT_SPREADMAIN";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_SPREADMAIN";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_SPREADMAIN";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_SPREADMAIN";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_SPREADMAIN";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "N1",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto14["m_sql"] = "N1";
$proto14["m_srcTableName"] = "PMT_SPREADMAIN";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "P1",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto16["m_sql"] = "P1";
$proto16["m_srcTableName"] = "PMT_SPREADMAIN";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F25",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto18["m_sql"] = "F25";
$proto18["m_srcTableName"] = "PMT_SPREADMAIN";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "K80",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto20["m_sql"] = "K80";
$proto20["m_srcTableName"] = "PMT_SPREADMAIN";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "F26",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto22["m_sql"] = "F26";
$proto22["m_srcTableName"] = "PMT_SPREADMAIN";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "E27",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto24["m_sql"] = "E27";
$proto24["m_srcTableName"] = "PMT_SPREADMAIN";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "K27",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto26["m_sql"] = "K27";
$proto26["m_srcTableName"] = "PMT_SPREADMAIN";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K25",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto28["m_sql"] = "K25";
$proto28["m_srcTableName"] = "PMT_SPREADMAIN";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "A30",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto30["m_sql"] = "A30";
$proto30["m_srcTableName"] = "PMT_SPREADMAIN";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "A31",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto32["m_sql"] = "A31";
$proto32["m_srcTableName"] = "PMT_SPREADMAIN";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "A32",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto34["m_sql"] = "A32";
$proto34["m_srcTableName"] = "PMT_SPREADMAIN";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "D35",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto36["m_sql"] = "D35";
$proto36["m_srcTableName"] = "PMT_SPREADMAIN";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "F35",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto38["m_sql"] = "F35";
$proto38["m_srcTableName"] = "PMT_SPREADMAIN";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "M35",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto40["m_sql"] = "M35";
$proto40["m_srcTableName"] = "PMT_SPREADMAIN";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "D36",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto42["m_sql"] = "D36";
$proto42["m_srcTableName"] = "PMT_SPREADMAIN";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "F36",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto44["m_sql"] = "F36";
$proto44["m_srcTableName"] = "PMT_SPREADMAIN";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "J36",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto46["m_sql"] = "J36";
$proto46["m_srcTableName"] = "PMT_SPREADMAIN";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "D38",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto48["m_sql"] = "D38";
$proto48["m_srcTableName"] = "PMT_SPREADMAIN";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "F38",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto50["m_sql"] = "F38";
$proto50["m_srcTableName"] = "PMT_SPREADMAIN";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "D39",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto52["m_sql"] = "D39";
$proto52["m_srcTableName"] = "PMT_SPREADMAIN";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto54["m_sql"] = "`TIME`";
$proto54["m_srcTableName"] = "PMT_SPREADMAIN";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto56["m_sql"] = "MONTHLY_REPORT";
$proto56["m_srcTableName"] = "PMT_SPREADMAIN";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "M39",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto58["m_sql"] = "M39";
$proto58["m_srcTableName"] = "PMT_SPREADMAIN";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "D40",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto60["m_sql"] = "D40";
$proto60["m_srcTableName"] = "PMT_SPREADMAIN";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "D41",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto62["m_sql"] = "D41";
$proto62["m_srcTableName"] = "PMT_SPREADMAIN";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "D42",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto64["m_sql"] = "D42";
$proto64["m_srcTableName"] = "PMT_SPREADMAIN";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "D43",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto66["m_sql"] = "D43";
$proto66["m_srcTableName"] = "PMT_SPREADMAIN";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "M43",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto68["m_sql"] = "M43";
$proto68["m_srcTableName"] = "PMT_SPREADMAIN";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "F43",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto70["m_sql"] = "F43";
$proto70["m_srcTableName"] = "PMT_SPREADMAIN";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "D44",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto72["m_sql"] = "D44";
$proto72["m_srcTableName"] = "PMT_SPREADMAIN";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "F44",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto74["m_sql"] = "F44";
$proto74["m_srcTableName"] = "PMT_SPREADMAIN";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "D45",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto76["m_sql"] = "D45";
$proto76["m_srcTableName"] = "PMT_SPREADMAIN";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "M45",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto78["m_sql"] = "M45";
$proto78["m_srcTableName"] = "PMT_SPREADMAIN";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "D48",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto80["m_sql"] = "D48";
$proto80["m_srcTableName"] = "PMT_SPREADMAIN";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "F48",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto82["m_sql"] = "F48";
$proto82["m_srcTableName"] = "PMT_SPREADMAIN";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "D49",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto84["m_sql"] = "D49";
$proto84["m_srcTableName"] = "PMT_SPREADMAIN";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "D51",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto86["m_sql"] = "D51";
$proto86["m_srcTableName"] = "PMT_SPREADMAIN";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "D52",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto88["m_sql"] = "D52";
$proto88["m_srcTableName"] = "PMT_SPREADMAIN";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "K50",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto90["m_sql"] = "K50";
$proto90["m_srcTableName"] = "PMT_SPREADMAIN";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "P48",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto92["m_sql"] = "P48";
$proto92["m_srcTableName"] = "PMT_SPREADMAIN";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "P49",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto94["m_sql"] = "P49";
$proto94["m_srcTableName"] = "PMT_SPREADMAIN";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "P50",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto96["m_sql"] = "P50";
$proto96["m_srcTableName"] = "PMT_SPREADMAIN";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "P51",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto98["m_sql"] = "P51";
$proto98["m_srcTableName"] = "PMT_SPREADMAIN";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "P52",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto100["m_sql"] = "P52";
$proto100["m_srcTableName"] = "PMT_SPREADMAIN";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto102["m_sql"] = "id";
$proto102["m_srcTableName"] = "PMT_SPREADMAIN";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto104=array();
$proto104["m_link"] = "SQLL_MAIN";
			$proto105=array();
$proto105["m_strName"] = "PMT_SPREADMAIN";
$proto105["m_srcTableName"] = "PMT_SPREADMAIN";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "APP_UID";
$proto105["m_columns"][] = "APP_NUMBER";
$proto105["m_columns"][] = "APP_STATUS";
$proto105["m_columns"][] = "ROW";
$proto105["m_columns"][] = "N1";
$proto105["m_columns"][] = "P1";
$proto105["m_columns"][] = "F25";
$proto105["m_columns"][] = "K80";
$proto105["m_columns"][] = "F26";
$proto105["m_columns"][] = "E27";
$proto105["m_columns"][] = "K27";
$proto105["m_columns"][] = "K25";
$proto105["m_columns"][] = "A30";
$proto105["m_columns"][] = "A31";
$proto105["m_columns"][] = "A32";
$proto105["m_columns"][] = "D35";
$proto105["m_columns"][] = "F35";
$proto105["m_columns"][] = "M35";
$proto105["m_columns"][] = "D36";
$proto105["m_columns"][] = "F36";
$proto105["m_columns"][] = "J36";
$proto105["m_columns"][] = "D38";
$proto105["m_columns"][] = "F38";
$proto105["m_columns"][] = "D39";
$proto105["m_columns"][] = "TIME";
$proto105["m_columns"][] = "MONTHLY_REPORT";
$proto105["m_columns"][] = "M39";
$proto105["m_columns"][] = "D40";
$proto105["m_columns"][] = "D41";
$proto105["m_columns"][] = "D42";
$proto105["m_columns"][] = "D43";
$proto105["m_columns"][] = "M43";
$proto105["m_columns"][] = "F43";
$proto105["m_columns"][] = "D44";
$proto105["m_columns"][] = "F44";
$proto105["m_columns"][] = "D45";
$proto105["m_columns"][] = "M45";
$proto105["m_columns"][] = "D48";
$proto105["m_columns"][] = "F48";
$proto105["m_columns"][] = "D49";
$proto105["m_columns"][] = "D51";
$proto105["m_columns"][] = "D52";
$proto105["m_columns"][] = "K50";
$proto105["m_columns"][] = "P48";
$proto105["m_columns"][] = "P49";
$proto105["m_columns"][] = "P50";
$proto105["m_columns"][] = "P51";
$proto105["m_columns"][] = "P52";
$proto105["m_columns"][] = "id";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "PMT_SPREADMAIN";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "PMT_SPREADMAIN";
$proto106=array();
$proto106["m_sql"] = "";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "PMT_SPREADMAIN",
	"m_srcTableName" => "PMT_SPREADMAIN"
));

$proto108["m_column"]=$obj;
$proto108["m_bAsc"] = 0;
$proto108["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto108);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PMT_SPREADMAIN";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_SPREADMAIN = createSqlQuery_PMT_SPREADMAIN();


	
						;

																																																	

$tdataPMT_SPREADMAIN[".sqlquery"] = $queryData_PMT_SPREADMAIN;

$tableEvents["PMT_SPREADMAIN"] = new eventsBase;
$tdataPMT_SPREADMAIN[".hasEvents"] = false;

?>
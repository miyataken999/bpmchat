<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretblresults = array();
	$tdataretblresults[".truncateText"] = true;
	$tdataretblresults[".NumberOfChars"] = 80;
	$tdataretblresults[".ShortName"] = "retblresults";
	$tdataretblresults[".OwnerID"] = "";
	$tdataretblresults[".OriginalTable"] = "retblresults";

//	field labels
$fieldLabelsretblresults = array();
$fieldToolTipsretblresults = array();
$pageTitlesretblresults = array();
$placeHoldersretblresults = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretblresults["Japanese"] = array();
	$fieldToolTipsretblresults["Japanese"] = array();
	$placeHoldersretblresults["Japanese"] = array();
	$pageTitlesretblresults["Japanese"] = array();
	$fieldLabelsretblresults["Japanese"]["PropertyID"] = "プロパティID";
	$fieldToolTipsretblresults["Japanese"]["PropertyID"] = "";
	$placeHoldersretblresults["Japanese"]["PropertyID"] = "";
	$fieldLabelsretblresults["Japanese"]["MLS_Number"] = "MLS番号";
	$fieldToolTipsretblresults["Japanese"]["MLS_Number"] = "";
	$placeHoldersretblresults["Japanese"]["MLS_Number"] = "";
	$fieldLabelsretblresults["Japanese"]["House_Number"] = "家屋番号";
	$fieldToolTipsretblresults["Japanese"]["House_Number"] = "";
	$placeHoldersretblresults["Japanese"]["House_Number"] = "";
	$fieldLabelsretblresults["Japanese"]["Street_Name"] = "道の名前";
	$fieldToolTipsretblresults["Japanese"]["Street_Name"] = "";
	$placeHoldersretblresults["Japanese"]["Street_Name"] = "";
	$fieldLabelsretblresults["Japanese"]["Apartment_Unit"] = "アパート/ユニット";
	$fieldToolTipsretblresults["Japanese"]["Apartment_Unit"] = "";
	$placeHoldersretblresults["Japanese"]["Apartment_Unit"] = "";
	$fieldLabelsretblresults["Japanese"]["City"] = "シティ";
	$fieldToolTipsretblresults["Japanese"]["City"] = "";
	$placeHoldersretblresults["Japanese"]["City"] = "";
	$fieldLabelsretblresults["Japanese"]["State"] = "状態";
	$fieldToolTipsretblresults["Japanese"]["State"] = "";
	$placeHoldersretblresults["Japanese"]["State"] = "";
	$fieldLabelsretblresults["Japanese"]["Zip"] = "ジップ";
	$fieldToolTipsretblresults["Japanese"]["Zip"] = "";
	$placeHoldersretblresults["Japanese"]["Zip"] = "";
	$fieldLabelsretblresults["Japanese"]["Country"] = "国";
	$fieldToolTipsretblresults["Japanese"]["Country"] = "";
	$placeHoldersretblresults["Japanese"]["Country"] = "";
	$fieldLabelsretblresults["Japanese"]["Price"] = "価格";
	$fieldToolTipsretblresults["Japanese"]["Price"] = "";
	$placeHoldersretblresults["Japanese"]["Price"] = "";
	$fieldLabelsretblresults["Japanese"]["sType"] = "Sタイプ";
	$fieldToolTipsretblresults["Japanese"]["sType"] = "";
	$placeHoldersretblresults["Japanese"]["sType"] = "";
	$fieldLabelsretblresults["Japanese"]["Style"] = "スタイル";
	$fieldToolTipsretblresults["Japanese"]["Style"] = "";
	$placeHoldersretblresults["Japanese"]["Style"] = "";
	$fieldLabelsretblresults["Japanese"]["Bedrooms"] = "ベッドルーム";
	$fieldToolTipsretblresults["Japanese"]["Bedrooms"] = "";
	$placeHoldersretblresults["Japanese"]["Bedrooms"] = "";
	$fieldLabelsretblresults["Japanese"]["Bathrooms"] = "バスルーム";
	$fieldToolTipsretblresults["Japanese"]["Bathrooms"] = "";
	$placeHoldersretblresults["Japanese"]["Bathrooms"] = "";
	$fieldLabelsretblresults["Japanese"]["Year"] = "年";
	$fieldToolTipsretblresults["Japanese"]["Year"] = "";
	$placeHoldersretblresults["Japanese"]["Year"] = "";
	$fieldLabelsretblresults["Japanese"]["Foundation"] = "財団";
	$fieldToolTipsretblresults["Japanese"]["Foundation"] = "";
	$placeHoldersretblresults["Japanese"]["Foundation"] = "";
	$fieldLabelsretblresults["Japanese"]["Sq_Ft"] = "平方フィート";
	$fieldToolTipsretblresults["Japanese"]["Sq_Ft"] = "";
	$placeHoldersretblresults["Japanese"]["Sq_Ft"] = "";
	$fieldLabelsretblresults["Japanese"]["Garage"] = "ガレージ";
	$fieldToolTipsretblresults["Japanese"]["Garage"] = "";
	$placeHoldersretblresults["Japanese"]["Garage"] = "";
	$fieldLabelsretblresults["Japanese"]["Acres"] = "エーカー";
	$fieldToolTipsretblresults["Japanese"]["Acres"] = "";
	$placeHoldersretblresults["Japanese"]["Acres"] = "";
	$fieldLabelsretblresults["Japanese"]["Kitchen"] = "キッチン";
	$fieldToolTipsretblresults["Japanese"]["Kitchen"] = "";
	$placeHoldersretblresults["Japanese"]["Kitchen"] = "";
	$fieldLabelsretblresults["Japanese"]["Kitchen_Dimension1"] = "キッチンdimension1";
	$fieldToolTipsretblresults["Japanese"]["Kitchen_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Kitchen_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Kitchen_Dimension2"] = "キッチンdimension2";
	$fieldToolTipsretblresults["Japanese"]["Kitchen_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Kitchen_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Living_Room"] = "リビングルーム";
	$fieldToolTipsretblresults["Japanese"]["Living_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Living_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Living_Room_Dimension1"] = "リビングルームdimension1";
	$fieldToolTipsretblresults["Japanese"]["Living_Room_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Living_Room_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Living_Room_Dimension2"] = "リビングルームdimension2";
	$fieldToolTipsretblresults["Japanese"]["Living_Room_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Living_Room_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Family_Room"] = "ファミリールーム";
	$fieldToolTipsretblresults["Japanese"]["Family_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Family_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Family_Room_Dimension1"] = "ファミリールームdimension1";
	$fieldToolTipsretblresults["Japanese"]["Family_Room_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Family_Room_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Family_Room_Dimension2"] = "ファミリールームdimension2";
	$fieldToolTipsretblresults["Japanese"]["Family_Room_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Family_Room_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Rec_Room"] = "REC部屋";
	$fieldToolTipsretblresults["Japanese"]["Rec_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Rec_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Rec_Room_Dimension1"] = "REC部屋dimension1";
	$fieldToolTipsretblresults["Japanese"]["Rec_Room_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Rec_Room_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Rec_Room_Dimension2"] = "REC部屋dimension2";
	$fieldToolTipsretblresults["Japanese"]["Rec_Room_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Rec_Room_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Study_Room"] = "勉強部屋";
	$fieldToolTipsretblresults["Japanese"]["Study_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Study_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Study_Room_Dimension1"] = "勉強部屋dimension1";
	$fieldToolTipsretblresults["Japanese"]["Study_Room_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Study_Room_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Study_Room_Dimension2"] = "勉強部屋dimension2";
	$fieldToolTipsretblresults["Japanese"]["Study_Room_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Study_Room_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Sun_Room"] = "太陽の部屋";
	$fieldToolTipsretblresults["Japanese"]["Sun_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Sun_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Sun_Room_Dimension1"] = "太陽の部屋dimension1";
	$fieldToolTipsretblresults["Japanese"]["Sun_Room_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Sun_Room_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Sun_Room_Dimension2"] = "太陽の部屋dimension2";
	$fieldToolTipsretblresults["Japanese"]["Sun_Room_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Sun_Room_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Loft"] = "ロフト";
	$fieldToolTipsretblresults["Japanese"]["Loft"] = "";
	$placeHoldersretblresults["Japanese"]["Loft"] = "";
	$fieldLabelsretblresults["Japanese"]["Loft_Dimension1"] = "ロフトdimension1";
	$fieldToolTipsretblresults["Japanese"]["Loft_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Loft_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Loft_Dimension2"] = "ロフトdimension2";
	$fieldToolTipsretblresults["Japanese"]["Loft_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Loft_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Dinning_Room"] = "ダイニングルーム";
	$fieldToolTipsretblresults["Japanese"]["Dinning_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Dinning_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Dinning_Room_Dimension1"] = "ダイニングルームdimension1";
	$fieldToolTipsretblresults["Japanese"]["Dinning_Room_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Dinning_Room_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Dinning_Room_Dimension2"] = "ダイニングルームdimension2";
	$fieldToolTipsretblresults["Japanese"]["Dinning_Room_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Dinning_Room_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Amusement_Room"] = "アミューズメントルーム";
	$fieldToolTipsretblresults["Japanese"]["Amusement_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Amusement_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Amusement_Room_Dimension1"] = "アミューズメント部屋dimension1";
	$fieldToolTipsretblresults["Japanese"]["Amusement_Room_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Amusement_Room_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Amusement_Room_Dimension2"] = "アミューズメント部屋dimension2";
	$fieldToolTipsretblresults["Japanese"]["Amusement_Room_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Amusement_Room_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Foyer"] = "ホワイエ";
	$fieldToolTipsretblresults["Japanese"]["Foyer"] = "";
	$placeHoldersretblresults["Japanese"]["Foyer"] = "";
	$fieldLabelsretblresults["Japanese"]["Foyer_Dimension1"] = "玄関dimension1";
	$fieldToolTipsretblresults["Japanese"]["Foyer_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Foyer_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Foyer_Dimension2"] = "玄関dimension2";
	$fieldToolTipsretblresults["Japanese"]["Foyer_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Foyer_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Office"] = "オフィス";
	$fieldToolTipsretblresults["Japanese"]["Office"] = "";
	$placeHoldersretblresults["Japanese"]["Office"] = "";
	$fieldLabelsretblresults["Japanese"]["Office_Dimension1"] = "オフィスdimension1";
	$fieldToolTipsretblresults["Japanese"]["Office_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Office_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Office_Dimension2"] = "オフィスdimension2";
	$fieldToolTipsretblresults["Japanese"]["Office_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Office_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Den"] = "洞穴";
	$fieldToolTipsretblresults["Japanese"]["Den"] = "";
	$placeHoldersretblresults["Japanese"]["Den"] = "";
	$fieldLabelsretblresults["Japanese"]["Den_Dimension1"] = "デンdimension1";
	$fieldToolTipsretblresults["Japanese"]["Den_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Den_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Den_Dimension2"] = "デンdimension2";
	$fieldToolTipsretblresults["Japanese"]["Den_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Den_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["FullBaths"] = "浴室（WCあり）";
	$fieldToolTipsretblresults["Japanese"]["FullBaths"] = "";
	$placeHoldersretblresults["Japanese"]["FullBaths"] = "";
	$fieldLabelsretblresults["Japanese"]["s3_4Baths"] = "S3 / 4baths";
	$fieldToolTipsretblresults["Japanese"]["s3_4Baths"] = "";
	$placeHoldersretblresults["Japanese"]["s3_4Baths"] = "";
	$fieldLabelsretblresults["Japanese"]["s1_2Baths"] = "S1 / 2baths";
	$fieldToolTipsretblresults["Japanese"]["s1_2Baths"] = "";
	$placeHoldersretblresults["Japanese"]["s1_2Baths"] = "";
	$fieldLabelsretblresults["Japanese"]["Fireplaces"] = "暖炉";
	$fieldToolTipsretblresults["Japanese"]["Fireplaces"] = "";
	$placeHoldersretblresults["Japanese"]["Fireplaces"] = "";
	$fieldLabelsretblresults["Japanese"]["Wood_Burning_Fireplace"] = "薪暖炉";
	$fieldToolTipsretblresults["Japanese"]["Wood_Burning_Fireplace"] = "";
	$placeHoldersretblresults["Japanese"]["Wood_Burning_Fireplace"] = "";
	$fieldLabelsretblresults["Japanese"]["Gas_Burning_Fireplace"] = "ガス暖炉";
	$fieldToolTipsretblresults["Japanese"]["Gas_Burning_Fireplace"] = "";
	$placeHoldersretblresults["Japanese"]["Gas_Burning_Fireplace"] = "";
	$fieldLabelsretblresults["Japanese"]["Range"] = "範囲";
	$fieldToolTipsretblresults["Japanese"]["Range"] = "";
	$placeHoldersretblresults["Japanese"]["Range"] = "";
	$fieldLabelsretblresults["Japanese"]["Cooktop"] = "クックトップ";
	$fieldToolTipsretblresults["Japanese"]["Cooktop"] = "";
	$placeHoldersretblresults["Japanese"]["Cooktop"] = "";
	$fieldLabelsretblresults["Japanese"]["Dishwasher"] = "食器洗い機";
	$fieldToolTipsretblresults["Japanese"]["Dishwasher"] = "";
	$placeHoldersretblresults["Japanese"]["Dishwasher"] = "";
	$fieldLabelsretblresults["Japanese"]["Disposal"] = "廃棄";
	$fieldToolTipsretblresults["Japanese"]["Disposal"] = "";
	$placeHoldersretblresults["Japanese"]["Disposal"] = "";
	$fieldLabelsretblresults["Japanese"]["Dryer"] = "ドライヤー";
	$fieldToolTipsretblresults["Japanese"]["Dryer"] = "";
	$placeHoldersretblresults["Japanese"]["Dryer"] = "";
	$fieldLabelsretblresults["Japanese"]["Exhaust_Fan_Hood"] = "排気ファン/フード";
	$fieldToolTipsretblresults["Japanese"]["Exhaust_Fan_Hood"] = "";
	$placeHoldersretblresults["Japanese"]["Exhaust_Fan_Hood"] = "";
	$fieldLabelsretblresults["Japanese"]["Microwave"] = "マイクロ波";
	$fieldToolTipsretblresults["Japanese"]["Microwave"] = "";
	$placeHoldersretblresults["Japanese"]["Microwave"] = "";
	$fieldLabelsretblresults["Japanese"]["Refrigerator"] = "冷蔵庫";
	$fieldToolTipsretblresults["Japanese"]["Refrigerator"] = "";
	$placeHoldersretblresults["Japanese"]["Refrigerator"] = "";
	$fieldLabelsretblresults["Japanese"]["Wall_Oven"] = "壁のオーブン";
	$fieldToolTipsretblresults["Japanese"]["Wall_Oven"] = "";
	$placeHoldersretblresults["Japanese"]["Wall_Oven"] = "";
	$fieldLabelsretblresults["Japanese"]["Water_Softener"] = "水軟化剤";
	$fieldToolTipsretblresults["Japanese"]["Water_Softener"] = "";
	$placeHoldersretblresults["Japanese"]["Water_Softener"] = "";
	$fieldLabelsretblresults["Japanese"]["Eat_In_Kitchen"] = "台所で食べます";
	$fieldToolTipsretblresults["Japanese"]["Eat_In_Kitchen"] = "";
	$placeHoldersretblresults["Japanese"]["Eat_In_Kitchen"] = "";
	$fieldLabelsretblresults["Japanese"]["Kitchen_Dining_Room"] = "キッチン/ダイニングルーム";
	$fieldToolTipsretblresults["Japanese"]["Kitchen_Dining_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Kitchen_Dining_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Separate_Formal_Dining_Room"] = "独立した/フォーマルなダイニングルーム";
	$fieldToolTipsretblresults["Japanese"]["Separate_Formal_Dining_Room"] = "";
	$placeHoldersretblresults["Japanese"]["Separate_Formal_Dining_Room"] = "";
	$fieldLabelsretblresults["Japanese"]["Basement"] = "地下";
	$fieldToolTipsretblresults["Japanese"]["Basement"] = "";
	$placeHoldersretblresults["Japanese"]["Basement"] = "";
	$fieldLabelsretblresults["Japanese"]["Finished_Basement"] = "完成地下室";
	$fieldToolTipsretblresults["Japanese"]["Finished_Basement"] = "";
	$placeHoldersretblresults["Japanese"]["Finished_Basement"] = "";
	$fieldLabelsretblresults["Japanese"]["Drain_Tiled"] = "ドレインタイル張り";
	$fieldToolTipsretblresults["Japanese"]["Drain_Tiled"] = "";
	$placeHoldersretblresults["Japanese"]["Drain_Tiled"] = "";
	$fieldLabelsretblresults["Japanese"]["Sum_Pump"] = "和ポンプ";
	$fieldToolTipsretblresults["Japanese"]["Sum_Pump"] = "";
	$placeHoldersretblresults["Japanese"]["Sum_Pump"] = "";
	$fieldLabelsretblresults["Japanese"]["Walkout"] = "退場する";
	$fieldToolTipsretblresults["Japanese"]["Walkout"] = "";
	$placeHoldersretblresults["Japanese"]["Walkout"] = "";
	$fieldLabelsretblresults["Japanese"]["Daylight_Lookout_Windows"] = "夏時間/展望台の窓";
	$fieldToolTipsretblresults["Japanese"]["Daylight_Lookout_Windows"] = "";
	$placeHoldersretblresults["Japanese"]["Daylight_Lookout_Windows"] = "";
	$fieldLabelsretblresults["Japanese"]["Cooling"] = "冷却";
	$fieldToolTipsretblresults["Japanese"]["Cooling"] = "";
	$placeHoldersretblresults["Japanese"]["Cooling"] = "";
	$fieldLabelsretblresults["Japanese"]["Heating"] = "加熱";
	$fieldToolTipsretblresults["Japanese"]["Heating"] = "";
	$placeHoldersretblresults["Japanese"]["Heating"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot"] = "たくさん";
	$fieldToolTipsretblresults["Japanese"]["Lot"] = "";
	$placeHoldersretblresults["Japanese"]["Lot"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension1"] = "ロットdimension1";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension1"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension1"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension2"] = "ロットdimension2";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension2"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension2"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension3"] = "ロットdimension3";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension3"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension3"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension4"] = "ロットdimension4";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension4"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension4"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension5"] = "ロットdimension5";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension5"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension5"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension6"] = "ロットdimension6";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension6"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension6"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension7"] = "ロットdimension7";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension7"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension7"] = "";
	$fieldLabelsretblresults["Japanese"]["Lot_Dimension8"] = "ロットdimension8";
	$fieldToolTipsretblresults["Japanese"]["Lot_Dimension8"] = "";
	$placeHoldersretblresults["Japanese"]["Lot_Dimension8"] = "";
	$fieldLabelsretblresults["Japanese"]["Tax_Amount"] = "税額";
	$fieldToolTipsretblresults["Japanese"]["Tax_Amount"] = "";
	$placeHoldersretblresults["Japanese"]["Tax_Amount"] = "";
	$fieldLabelsretblresults["Japanese"]["Tax_Year"] = "課税年度";
	$fieldToolTipsretblresults["Japanese"]["Tax_Year"] = "";
	$placeHoldersretblresults["Japanese"]["Tax_Year"] = "";
	$fieldLabelsretblresults["Japanese"]["Remarks"] = "備考";
	$fieldToolTipsretblresults["Japanese"]["Remarks"] = "";
	$placeHoldersretblresults["Japanese"]["Remarks"] = "";
	$fieldLabelsretblresults["Japanese"]["PhotoListing"] = "写真一覧";
	$fieldToolTipsretblresults["Japanese"]["PhotoListing"] = "";
	$placeHoldersretblresults["Japanese"]["PhotoListing"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo1"] = "写真1";
	$fieldToolTipsretblresults["Japanese"]["Photo1"] = "";
	$placeHoldersretblresults["Japanese"]["Photo1"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo2"] = "写真2";
	$fieldToolTipsretblresults["Japanese"]["Photo2"] = "";
	$placeHoldersretblresults["Japanese"]["Photo2"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo3"] = "写真3";
	$fieldToolTipsretblresults["Japanese"]["Photo3"] = "";
	$placeHoldersretblresults["Japanese"]["Photo3"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo4"] = "写真4";
	$fieldToolTipsretblresults["Japanese"]["Photo4"] = "";
	$placeHoldersretblresults["Japanese"]["Photo4"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo5"] = "photo5";
	$fieldToolTipsretblresults["Japanese"]["Photo5"] = "";
	$placeHoldersretblresults["Japanese"]["Photo5"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo6"] = "photo6";
	$fieldToolTipsretblresults["Japanese"]["Photo6"] = "";
	$placeHoldersretblresults["Japanese"]["Photo6"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo7"] = "photo7";
	$fieldToolTipsretblresults["Japanese"]["Photo7"] = "";
	$placeHoldersretblresults["Japanese"]["Photo7"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo8"] = "photo8";
	$fieldToolTipsretblresults["Japanese"]["Photo8"] = "";
	$placeHoldersretblresults["Japanese"]["Photo8"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo9"] = "photo9";
	$fieldToolTipsretblresults["Japanese"]["Photo9"] = "";
	$placeHoldersretblresults["Japanese"]["Photo9"] = "";
	$fieldLabelsretblresults["Japanese"]["Photo10"] = "photo10";
	$fieldToolTipsretblresults["Japanese"]["Photo10"] = "";
	$placeHoldersretblresults["Japanese"]["Photo10"] = "";
	if (count($fieldToolTipsretblresults["Japanese"]))
		$tdataretblresults[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretblresults[""] = array();
	$fieldToolTipsretblresults[""] = array();
	$placeHoldersretblresults[""] = array();
	$pageTitlesretblresults[""] = array();
	if (count($fieldToolTipsretblresults[""]))
		$tdataretblresults[".isUseToolTips"] = true;
}





$tdataretblresults[".shortTableName"] = "retblresults";
$tdataretblresults[".nSecOptions"] = 0;
$tdataretblresults[".recsPerRowPrint"] = 1;
$tdataretblresults[".mainTableOwnerID"] = "";
$tdataretblresults[".moveNext"] = 1;
$tdataretblresults[".entityType"] = 0;

$tdataretblresults[".strOriginalTableName"] = "retblresults";

	



$tdataretblresults[".showAddInPopup"] = false;

$tdataretblresults[".showEditInPopup"] = false;

$tdataretblresults[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretblresults[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretblresults[".fieldsForRegister"] = array();

$tdataretblresults[".listAjax"] = false;

	$tdataretblresults[".audit"] = false;

	$tdataretblresults[".locking"] = false;

$tdataretblresults[".edit"] = true;
$tdataretblresults[".afterEditAction"] = 1;
$tdataretblresults[".closePopupAfterEdit"] = 1;
$tdataretblresults[".afterEditActionDetTable"] = "";

$tdataretblresults[".add"] = true;
$tdataretblresults[".afterAddAction"] = 1;
$tdataretblresults[".closePopupAfterAdd"] = 1;
$tdataretblresults[".afterAddActionDetTable"] = "";

$tdataretblresults[".list"] = true;

$tdataretblresults[".inlineEdit"] = true;


$tdataretblresults[".reorderRecordsByHeader"] = true;
$tdataretblresults[".createSortByDropdown"] = true;
$tdataretblresults[".strSortControlSettingsJSON"] = "";



$tdataretblresults[".inlineAdd"] = true;
$tdataretblresults[".view"] = true;



$tdataretblresults[".printFriendly"] = true;

$tdataretblresults[".delete"] = true;

$tdataretblresults[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretblresults[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretblresults[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretblresults[".searchSaving"] = false;
//

$tdataretblresults[".showSearchPanel"] = true;
		$tdataretblresults[".flexibleSearch"] = true;

$tdataretblresults[".isUseAjaxSuggest"] = true;

$tdataretblresults[".rowHighlite"] = true;



	

$tdataretblresults[".ajaxCodeSnippetAdded"] = false;

$tdataretblresults[".buttonsAdded"] = false;

$tdataretblresults[".addPageEvents"] = true;

// use timepicker for search panel
$tdataretblresults[".isUseTimeForSearch"] = false;





$tdataretblresults[".allSearchFields"] = array();
$tdataretblresults[".filterFields"] = array();
$tdataretblresults[".requiredSearchFields"] = array();

$tdataretblresults[".allSearchFields"][] = "Remarks";
	$tdataretblresults[".allSearchFields"][] = "MLS_Number";
	$tdataretblresults[".allSearchFields"][] = "Price";
	$tdataretblresults[".allSearchFields"][] = "sType";
	$tdataretblresults[".allSearchFields"][] = "Style";
	$tdataretblresults[".allSearchFields"][] = "Bedrooms";
	$tdataretblresults[".allSearchFields"][] = "Bathrooms";
	$tdataretblresults[".allSearchFields"][] = "Year";
	$tdataretblresults[".allSearchFields"][] = "Sq_Ft";
	$tdataretblresults[".allSearchFields"][] = "Garage";
	$tdataretblresults[".allSearchFields"][] = "House_Number";
	$tdataretblresults[".allSearchFields"][] = "Street_Name";
	$tdataretblresults[".allSearchFields"][] = "Apartment/Unit";
	$tdataretblresults[".allSearchFields"][] = "City";
	$tdataretblresults[".allSearchFields"][] = "State";
	$tdataretblresults[".allSearchFields"][] = "Zip";
	$tdataretblresults[".allSearchFields"][] = "Country";
	$tdataretblresults[".allSearchFields"][] = "Kitchen";
	$tdataretblresults[".allSearchFields"][] = "Living_Room";
	$tdataretblresults[".allSearchFields"][] = "Family_Room";
	$tdataretblresults[".allSearchFields"][] = "Rec_Room";
	$tdataretblresults[".allSearchFields"][] = "Study_Room";
	$tdataretblresults[".allSearchFields"][] = "Sun_Room";
	$tdataretblresults[".allSearchFields"][] = "Loft";
	$tdataretblresults[".allSearchFields"][] = "Dinning_Room";
	$tdataretblresults[".allSearchFields"][] = "Amusement_Room";
	$tdataretblresults[".allSearchFields"][] = "Foyer";
	$tdataretblresults[".allSearchFields"][] = "Office";
	$tdataretblresults[".allSearchFields"][] = "Den";
	$tdataretblresults[".allSearchFields"][] = "Fireplaces";
	$tdataretblresults[".allSearchFields"][] = "Acres";
	$tdataretblresults[".allSearchFields"][] = "Range";
	$tdataretblresults[".allSearchFields"][] = "Cooktop";
	$tdataretblresults[".allSearchFields"][] = "Dishwasher";
	$tdataretblresults[".allSearchFields"][] = "Disposal";
	$tdataretblresults[".allSearchFields"][] = "Dryer";
	$tdataretblresults[".allSearchFields"][] = "Exhaust_Fan/Hood";
	$tdataretblresults[".allSearchFields"][] = "Microwave";
	$tdataretblresults[".allSearchFields"][] = "Refrigerator";
	$tdataretblresults[".allSearchFields"][] = "Wall_Oven";
	$tdataretblresults[".allSearchFields"][] = "Water_Softener";
	$tdataretblresults[".allSearchFields"][] = "Eat_In_Kitchen";
	$tdataretblresults[".allSearchFields"][] = "Kitchen/Dining_Room";
	$tdataretblresults[".allSearchFields"][] = "Separate/Formal_Dining_Room";
	$tdataretblresults[".allSearchFields"][] = "Basement";
	$tdataretblresults[".allSearchFields"][] = "Finished_Basement";
	$tdataretblresults[".allSearchFields"][] = "Drain_Tiled";
	$tdataretblresults[".allSearchFields"][] = "Sum_Pump";
	$tdataretblresults[".allSearchFields"][] = "Walkout";
	$tdataretblresults[".allSearchFields"][] = "Daylight/Lookout_Windows";
	
$tdataretblresults[".filterFields"][] = "City";

$tdataretblresults[".googleLikeFields"] = array();
$tdataretblresults[".googleLikeFields"][] = "MLS_Number";
$tdataretblresults[".googleLikeFields"][] = "House_Number";
$tdataretblresults[".googleLikeFields"][] = "Street_Name";
$tdataretblresults[".googleLikeFields"][] = "Apartment/Unit";
$tdataretblresults[".googleLikeFields"][] = "City";
$tdataretblresults[".googleLikeFields"][] = "State";
$tdataretblresults[".googleLikeFields"][] = "Zip";
$tdataretblresults[".googleLikeFields"][] = "Country";
$tdataretblresults[".googleLikeFields"][] = "Price";
$tdataretblresults[".googleLikeFields"][] = "sType";
$tdataretblresults[".googleLikeFields"][] = "Style";
$tdataretblresults[".googleLikeFields"][] = "Bedrooms";
$tdataretblresults[".googleLikeFields"][] = "Bathrooms";
$tdataretblresults[".googleLikeFields"][] = "Year";
$tdataretblresults[".googleLikeFields"][] = "Sq_Ft";
$tdataretblresults[".googleLikeFields"][] = "Garage";
$tdataretblresults[".googleLikeFields"][] = "Acres";
$tdataretblresults[".googleLikeFields"][] = "Kitchen";
$tdataretblresults[".googleLikeFields"][] = "Living_Room";
$tdataretblresults[".googleLikeFields"][] = "Family_Room";
$tdataretblresults[".googleLikeFields"][] = "Rec_Room";
$tdataretblresults[".googleLikeFields"][] = "Study_Room";
$tdataretblresults[".googleLikeFields"][] = "Sun_Room";
$tdataretblresults[".googleLikeFields"][] = "Loft";
$tdataretblresults[".googleLikeFields"][] = "Dinning_Room";
$tdataretblresults[".googleLikeFields"][] = "Amusement_Room";
$tdataretblresults[".googleLikeFields"][] = "Foyer";
$tdataretblresults[".googleLikeFields"][] = "Office";
$tdataretblresults[".googleLikeFields"][] = "Den";
$tdataretblresults[".googleLikeFields"][] = "Fireplaces";
$tdataretblresults[".googleLikeFields"][] = "Range";
$tdataretblresults[".googleLikeFields"][] = "Cooktop";
$tdataretblresults[".googleLikeFields"][] = "Dishwasher";
$tdataretblresults[".googleLikeFields"][] = "Disposal";
$tdataretblresults[".googleLikeFields"][] = "Dryer";
$tdataretblresults[".googleLikeFields"][] = "Exhaust_Fan/Hood";
$tdataretblresults[".googleLikeFields"][] = "Microwave";
$tdataretblresults[".googleLikeFields"][] = "Refrigerator";
$tdataretblresults[".googleLikeFields"][] = "Wall_Oven";
$tdataretblresults[".googleLikeFields"][] = "Water_Softener";
$tdataretblresults[".googleLikeFields"][] = "Eat_In_Kitchen";
$tdataretblresults[".googleLikeFields"][] = "Kitchen/Dining_Room";
$tdataretblresults[".googleLikeFields"][] = "Separate/Formal_Dining_Room";
$tdataretblresults[".googleLikeFields"][] = "Basement";
$tdataretblresults[".googleLikeFields"][] = "Finished_Basement";
$tdataretblresults[".googleLikeFields"][] = "Drain_Tiled";
$tdataretblresults[".googleLikeFields"][] = "Sum_Pump";
$tdataretblresults[".googleLikeFields"][] = "Walkout";
$tdataretblresults[".googleLikeFields"][] = "Daylight/Lookout_Windows";
$tdataretblresults[".googleLikeFields"][] = "Remarks";


$tdataretblresults[".advSearchFields"] = array();
$tdataretblresults[".advSearchFields"][] = "Remarks";
$tdataretblresults[".advSearchFields"][] = "MLS_Number";
$tdataretblresults[".advSearchFields"][] = "Price";
$tdataretblresults[".advSearchFields"][] = "sType";
$tdataretblresults[".advSearchFields"][] = "Style";
$tdataretblresults[".advSearchFields"][] = "Bedrooms";
$tdataretblresults[".advSearchFields"][] = "Bathrooms";
$tdataretblresults[".advSearchFields"][] = "Year";
$tdataretblresults[".advSearchFields"][] = "Sq_Ft";
$tdataretblresults[".advSearchFields"][] = "Garage";
$tdataretblresults[".advSearchFields"][] = "House_Number";
$tdataretblresults[".advSearchFields"][] = "Street_Name";
$tdataretblresults[".advSearchFields"][] = "Apartment/Unit";
$tdataretblresults[".advSearchFields"][] = "City";
$tdataretblresults[".advSearchFields"][] = "State";
$tdataretblresults[".advSearchFields"][] = "Zip";
$tdataretblresults[".advSearchFields"][] = "Country";
$tdataretblresults[".advSearchFields"][] = "Kitchen";
$tdataretblresults[".advSearchFields"][] = "Living_Room";
$tdataretblresults[".advSearchFields"][] = "Family_Room";
$tdataretblresults[".advSearchFields"][] = "Rec_Room";
$tdataretblresults[".advSearchFields"][] = "Study_Room";
$tdataretblresults[".advSearchFields"][] = "Sun_Room";
$tdataretblresults[".advSearchFields"][] = "Loft";
$tdataretblresults[".advSearchFields"][] = "Dinning_Room";
$tdataretblresults[".advSearchFields"][] = "Amusement_Room";
$tdataretblresults[".advSearchFields"][] = "Foyer";
$tdataretblresults[".advSearchFields"][] = "Office";
$tdataretblresults[".advSearchFields"][] = "Den";
$tdataretblresults[".advSearchFields"][] = "Fireplaces";
$tdataretblresults[".advSearchFields"][] = "Acres";
$tdataretblresults[".advSearchFields"][] = "Range";
$tdataretblresults[".advSearchFields"][] = "Cooktop";
$tdataretblresults[".advSearchFields"][] = "Dishwasher";
$tdataretblresults[".advSearchFields"][] = "Disposal";
$tdataretblresults[".advSearchFields"][] = "Dryer";
$tdataretblresults[".advSearchFields"][] = "Exhaust_Fan/Hood";
$tdataretblresults[".advSearchFields"][] = "Microwave";
$tdataretblresults[".advSearchFields"][] = "Refrigerator";
$tdataretblresults[".advSearchFields"][] = "Wall_Oven";
$tdataretblresults[".advSearchFields"][] = "Water_Softener";
$tdataretblresults[".advSearchFields"][] = "Eat_In_Kitchen";
$tdataretblresults[".advSearchFields"][] = "Kitchen/Dining_Room";
$tdataretblresults[".advSearchFields"][] = "Separate/Formal_Dining_Room";
$tdataretblresults[".advSearchFields"][] = "Basement";
$tdataretblresults[".advSearchFields"][] = "Finished_Basement";
$tdataretblresults[".advSearchFields"][] = "Drain_Tiled";
$tdataretblresults[".advSearchFields"][] = "Sum_Pump";
$tdataretblresults[".advSearchFields"][] = "Walkout";
$tdataretblresults[".advSearchFields"][] = "Daylight/Lookout_Windows";

$tdataretblresults[".tableType"] = "list";

$tdataretblresults[".printerPageOrientation"] = 0;
$tdataretblresults[".nPrinterPageScale"] = 100;

$tdataretblresults[".nPrinterSplitRecords"] = 40;

$tdataretblresults[".nPrinterPDFSplitRecords"] = 40;



$tdataretblresults[".geocodingEnabled"] = false;





$tdataretblresults[".listGridLayout"] = 3;


$tdataretblresults[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataretblresults[".pageSize"] = 20;

$tdataretblresults[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretblresults[".strOrderBy"] = $tstrOrderBy;

$tdataretblresults[".orderindexes"] = array();

$tdataretblresults[".sqlHead"] = "select PropertyID,  MLS_Number,  House_Number,  Street_Name,  `Apartment/Unit`,  City,  `State`,  Zip,  Country,  Price,  sType,  Style,  Bedrooms,  Bathrooms,  `Year`,  Foundation,  Sq_Ft,  Garage,  Acres,  Kitchen,  Kitchen_Dimension1,  Kitchen_Dimension2,  Living_Room,  Living_Room_Dimension1,  Living_Room_Dimension2,  Family_Room,  Family_Room_Dimension1,  Family_Room_Dimension2,  Rec_Room,  Rec_Room_Dimension1,  Rec_Room_Dimension2,  Study_Room,  Study_Room_Dimension1,  Study_Room_Dimension2,  Sun_Room,  Sun_Room_Dimension1,  Sun_Room_Dimension2,  Loft,  Loft_Dimension1,  Loft_Dimension2,  Dinning_Room,  Dinning_Room_Dimension1,  Dinning_Room_Dimension2,  Amusement_Room,  Amusement_Room_Dimension1,  Amusement_Room_Dimension2,  Foyer,  Foyer_Dimension1,  Foyer_Dimension2,  Office,  Office_Dimension1,  Office_Dimension2,  Den,  Den_Dimension1,  Den_Dimension2,  FullBaths,  `s3/4Baths`,  `s1/2Baths`,  Fireplaces,  Wood_Burning_Fireplace,  Gas_Burning_Fireplace,  `Range`,  Cooktop,  Dishwasher,  Disposal,  Dryer,  `Exhaust_Fan/Hood`,  Microwave,  Refrigerator,  Wall_Oven,  Water_Softener,  Eat_In_Kitchen,  `Kitchen/Dining_Room`,  `Separate/Formal_Dining_Room`,  Basement,  Finished_Basement,  Drain_Tiled,  Sum_Pump,  Walkout,  `Daylight/Lookout_Windows`,  Cooling,  Heating,  Lot,  Lot_Dimension1,  Lot_Dimension2,  Lot_Dimension3,  Lot_Dimension4,  Lot_Dimension5,  Lot_Dimension6,  Lot_Dimension7,  Lot_Dimension8,  Tax_Amount,  Tax_Year,  Remarks,  PhotoListing,  Photo1,  Photo2,  Photo3,  Photo4,  Photo5,  Photo6,  Photo7,  Photo8,  Photo9,  Photo10";
$tdataretblresults[".sqlFrom"] = "FROM retblresults";
$tdataretblresults[".sqlWhereExpr"] = "";
$tdataretblresults[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretblresults[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretblresults[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretblresults = array();
$tableKeysretblresults[] = "PropertyID";
$tdataretblresults[".Keys"] = $tableKeysretblresults;

$tdataretblresults[".listFields"] = array();
$tdataretblresults[".listFields"][] = "Price";
$tdataretblresults[".listFields"][] = "Tax_Amount";
$tdataretblresults[".listFields"][] = "MLS_Number";
$tdataretblresults[".listFields"][] = "House_Number";
$tdataretblresults[".listFields"][] = "Street_Name";
$tdataretblresults[".listFields"][] = "Apartment/Unit";
$tdataretblresults[".listFields"][] = "City";
$tdataretblresults[".listFields"][] = "State";
$tdataretblresults[".listFields"][] = "Zip";
$tdataretblresults[".listFields"][] = "Bedrooms";
$tdataretblresults[".listFields"][] = "Bathrooms";
$tdataretblresults[".listFields"][] = "Year";
$tdataretblresults[".listFields"][] = "Sq_Ft";
$tdataretblresults[".listFields"][] = "Garage";
$tdataretblresults[".listFields"][] = "Remarks";
$tdataretblresults[".listFields"][] = "PhotoListing";

$tdataretblresults[".hideMobileList"] = array();


$tdataretblresults[".viewFields"] = array();
$tdataretblresults[".viewFields"][] = "House_Number";
$tdataretblresults[".viewFields"][] = "Photo10";
$tdataretblresults[".viewFields"][] = "Photo3";
$tdataretblresults[".viewFields"][] = "Photo1";
$tdataretblresults[".viewFields"][] = "Photo2";
$tdataretblresults[".viewFields"][] = "Photo9";
$tdataretblresults[".viewFields"][] = "Photo8";
$tdataretblresults[".viewFields"][] = "Photo7";
$tdataretblresults[".viewFields"][] = "Photo6";
$tdataretblresults[".viewFields"][] = "Photo5";
$tdataretblresults[".viewFields"][] = "Photo4";
$tdataretblresults[".viewFields"][] = "Street_Name";
$tdataretblresults[".viewFields"][] = "Apartment/Unit";
$tdataretblresults[".viewFields"][] = "City";
$tdataretblresults[".viewFields"][] = "State";
$tdataretblresults[".viewFields"][] = "Zip";
$tdataretblresults[".viewFields"][] = "MLS_Number";
$tdataretblresults[".viewFields"][] = "Price";
$tdataretblresults[".viewFields"][] = "Remarks";
$tdataretblresults[".viewFields"][] = "sType";
$tdataretblresults[".viewFields"][] = "Foundation";
$tdataretblresults[".viewFields"][] = "Style";
$tdataretblresults[".viewFields"][] = "Sq_Ft";
$tdataretblresults[".viewFields"][] = "Bedrooms";
$tdataretblresults[".viewFields"][] = "Garage";
$tdataretblresults[".viewFields"][] = "Bathrooms";
$tdataretblresults[".viewFields"][] = "Acres";
$tdataretblresults[".viewFields"][] = "Year";
$tdataretblresults[".viewFields"][] = "Kitchen_Dimension1";
$tdataretblresults[".viewFields"][] = "Kitchen_Dimension2";
$tdataretblresults[".viewFields"][] = "Living_Room_Dimension1";
$tdataretblresults[".viewFields"][] = "Living_Room_Dimension2";
$tdataretblresults[".viewFields"][] = "Family_Room_Dimension1";
$tdataretblresults[".viewFields"][] = "Family_Room_Dimension2";
$tdataretblresults[".viewFields"][] = "Rec_Room_Dimension1";
$tdataretblresults[".viewFields"][] = "Rec_Room_Dimension2";
$tdataretblresults[".viewFields"][] = "Study_Room_Dimension1";
$tdataretblresults[".viewFields"][] = "Study_Room_Dimension2";
$tdataretblresults[".viewFields"][] = "Sun_Room_Dimension1";
$tdataretblresults[".viewFields"][] = "Sun_Room_Dimension2";
$tdataretblresults[".viewFields"][] = "Loft_Dimension1";
$tdataretblresults[".viewFields"][] = "Loft_Dimension2";
$tdataretblresults[".viewFields"][] = "Dinning_Room_Dimension1";
$tdataretblresults[".viewFields"][] = "Dinning_Room_Dimension2";
$tdataretblresults[".viewFields"][] = "Amusement_Room_Dimension1";
$tdataretblresults[".viewFields"][] = "Amusement_Room_Dimension2";
$tdataretblresults[".viewFields"][] = "Foyer_Dimension1";
$tdataretblresults[".viewFields"][] = "Foyer_Dimension2";
$tdataretblresults[".viewFields"][] = "Office_Dimension1";
$tdataretblresults[".viewFields"][] = "Office_Dimension2";
$tdataretblresults[".viewFields"][] = "Den_Dimension1";
$tdataretblresults[".viewFields"][] = "Den_Dimension2";
$tdataretblresults[".viewFields"][] = "FullBaths";
$tdataretblresults[".viewFields"][] = "Fireplaces";
$tdataretblresults[".viewFields"][] = "Cooling";
$tdataretblresults[".viewFields"][] = "Heating";
$tdataretblresults[".viewFields"][] = "Lot_Dimension1";
$tdataretblresults[".viewFields"][] = "Lot_Dimension2";
$tdataretblresults[".viewFields"][] = "Lot_Dimension3";
$tdataretblresults[".viewFields"][] = "Lot_Dimension4";
$tdataretblresults[".viewFields"][] = "Lot_Dimension5";
$tdataretblresults[".viewFields"][] = "Lot_Dimension6";
$tdataretblresults[".viewFields"][] = "Lot_Dimension7";
$tdataretblresults[".viewFields"][] = "Lot_Dimension8";
$tdataretblresults[".viewFields"][] = "Tax_Amount";
$tdataretblresults[".viewFields"][] = "Tax_Year";

$tdataretblresults[".addFields"] = array();
$tdataretblresults[".addFields"][] = "MLS_Number";
$tdataretblresults[".addFields"][] = "House_Number";
$tdataretblresults[".addFields"][] = "Street_Name";
$tdataretblresults[".addFields"][] = "Apartment/Unit";
$tdataretblresults[".addFields"][] = "City";
$tdataretblresults[".addFields"][] = "State";
$tdataretblresults[".addFields"][] = "Zip";
$tdataretblresults[".addFields"][] = "Country";
$tdataretblresults[".addFields"][] = "Price";
$tdataretblresults[".addFields"][] = "sType";
$tdataretblresults[".addFields"][] = "Style";
$tdataretblresults[".addFields"][] = "Bedrooms";
$tdataretblresults[".addFields"][] = "Bathrooms";
$tdataretblresults[".addFields"][] = "Year";
$tdataretblresults[".addFields"][] = "Foundation";
$tdataretblresults[".addFields"][] = "Sq_Ft";
$tdataretblresults[".addFields"][] = "Garage";
$tdataretblresults[".addFields"][] = "Acres";
$tdataretblresults[".addFields"][] = "Kitchen";
$tdataretblresults[".addFields"][] = "Kitchen_Dimension1";
$tdataretblresults[".addFields"][] = "Kitchen_Dimension2";
$tdataretblresults[".addFields"][] = "Living_Room";
$tdataretblresults[".addFields"][] = "Living_Room_Dimension1";
$tdataretblresults[".addFields"][] = "Living_Room_Dimension2";
$tdataretblresults[".addFields"][] = "Family_Room";
$tdataretblresults[".addFields"][] = "Family_Room_Dimension1";
$tdataretblresults[".addFields"][] = "Family_Room_Dimension2";
$tdataretblresults[".addFields"][] = "Rec_Room";
$tdataretblresults[".addFields"][] = "Rec_Room_Dimension1";
$tdataretblresults[".addFields"][] = "Rec_Room_Dimension2";
$tdataretblresults[".addFields"][] = "Study_Room";
$tdataretblresults[".addFields"][] = "Study_Room_Dimension1";
$tdataretblresults[".addFields"][] = "Study_Room_Dimension2";
$tdataretblresults[".addFields"][] = "Sun_Room";
$tdataretblresults[".addFields"][] = "Sun_Room_Dimension1";
$tdataretblresults[".addFields"][] = "Sun_Room_Dimension2";
$tdataretblresults[".addFields"][] = "Loft";
$tdataretblresults[".addFields"][] = "Loft_Dimension1";
$tdataretblresults[".addFields"][] = "Loft_Dimension2";
$tdataretblresults[".addFields"][] = "Dinning_Room";
$tdataretblresults[".addFields"][] = "Dinning_Room_Dimension1";
$tdataretblresults[".addFields"][] = "Dinning_Room_Dimension2";
$tdataretblresults[".addFields"][] = "Amusement_Room";
$tdataretblresults[".addFields"][] = "Amusement_Room_Dimension1";
$tdataretblresults[".addFields"][] = "Amusement_Room_Dimension2";
$tdataretblresults[".addFields"][] = "Foyer";
$tdataretblresults[".addFields"][] = "Foyer_Dimension1";
$tdataretblresults[".addFields"][] = "Foyer_Dimension2";
$tdataretblresults[".addFields"][] = "Office";
$tdataretblresults[".addFields"][] = "Office_Dimension1";
$tdataretblresults[".addFields"][] = "Office_Dimension2";
$tdataretblresults[".addFields"][] = "Den";
$tdataretblresults[".addFields"][] = "Den_Dimension1";
$tdataretblresults[".addFields"][] = "Den_Dimension2";
$tdataretblresults[".addFields"][] = "FullBaths";
$tdataretblresults[".addFields"][] = "s3/4Baths";
$tdataretblresults[".addFields"][] = "s1/2Baths";
$tdataretblresults[".addFields"][] = "Fireplaces";
$tdataretblresults[".addFields"][] = "Wood_Burning_Fireplace";
$tdataretblresults[".addFields"][] = "Gas_Burning_Fireplace";
$tdataretblresults[".addFields"][] = "Range";
$tdataretblresults[".addFields"][] = "Cooktop";
$tdataretblresults[".addFields"][] = "Dishwasher";
$tdataretblresults[".addFields"][] = "Disposal";
$tdataretblresults[".addFields"][] = "Dryer";
$tdataretblresults[".addFields"][] = "Exhaust_Fan/Hood";
$tdataretblresults[".addFields"][] = "Microwave";
$tdataretblresults[".addFields"][] = "Refrigerator";
$tdataretblresults[".addFields"][] = "Wall_Oven";
$tdataretblresults[".addFields"][] = "Water_Softener";
$tdataretblresults[".addFields"][] = "Eat_In_Kitchen";
$tdataretblresults[".addFields"][] = "Kitchen/Dining_Room";
$tdataretblresults[".addFields"][] = "Separate/Formal_Dining_Room";
$tdataretblresults[".addFields"][] = "Basement";
$tdataretblresults[".addFields"][] = "Finished_Basement";
$tdataretblresults[".addFields"][] = "Drain_Tiled";
$tdataretblresults[".addFields"][] = "Sum_Pump";
$tdataretblresults[".addFields"][] = "Walkout";
$tdataretblresults[".addFields"][] = "Daylight/Lookout_Windows";
$tdataretblresults[".addFields"][] = "Cooling";
$tdataretblresults[".addFields"][] = "Heating";
$tdataretblresults[".addFields"][] = "Lot";
$tdataretblresults[".addFields"][] = "Lot_Dimension1";
$tdataretblresults[".addFields"][] = "Lot_Dimension2";
$tdataretblresults[".addFields"][] = "Lot_Dimension3";
$tdataretblresults[".addFields"][] = "Lot_Dimension4";
$tdataretblresults[".addFields"][] = "Lot_Dimension5";
$tdataretblresults[".addFields"][] = "Lot_Dimension6";
$tdataretblresults[".addFields"][] = "Lot_Dimension7";
$tdataretblresults[".addFields"][] = "Lot_Dimension8";
$tdataretblresults[".addFields"][] = "Tax_Amount";
$tdataretblresults[".addFields"][] = "Tax_Year";
$tdataretblresults[".addFields"][] = "Remarks";
$tdataretblresults[".addFields"][] = "PhotoListing";
$tdataretblresults[".addFields"][] = "Photo1";
$tdataretblresults[".addFields"][] = "Photo2";
$tdataretblresults[".addFields"][] = "Photo3";
$tdataretblresults[".addFields"][] = "Photo4";
$tdataretblresults[".addFields"][] = "Photo5";
$tdataretblresults[".addFields"][] = "Photo6";
$tdataretblresults[".addFields"][] = "Photo7";
$tdataretblresults[".addFields"][] = "Photo8";
$tdataretblresults[".addFields"][] = "Photo9";
$tdataretblresults[".addFields"][] = "Photo10";

$tdataretblresults[".masterListFields"] = array();

$tdataretblresults[".inlineAddFields"] = array();
$tdataretblresults[".inlineAddFields"][] = "Price";
$tdataretblresults[".inlineAddFields"][] = "MLS_Number";
$tdataretblresults[".inlineAddFields"][] = "House_Number";
$tdataretblresults[".inlineAddFields"][] = "Street_Name";
$tdataretblresults[".inlineAddFields"][] = "Apartment/Unit";
$tdataretblresults[".inlineAddFields"][] = "City";
$tdataretblresults[".inlineAddFields"][] = "State";
$tdataretblresults[".inlineAddFields"][] = "Zip";
$tdataretblresults[".inlineAddFields"][] = "Bedrooms";
$tdataretblresults[".inlineAddFields"][] = "Bathrooms";
$tdataretblresults[".inlineAddFields"][] = "Year";
$tdataretblresults[".inlineAddFields"][] = "Sq_Ft";
$tdataretblresults[".inlineAddFields"][] = "Garage";
$tdataretblresults[".inlineAddFields"][] = "Remarks";
$tdataretblresults[".inlineAddFields"][] = "PhotoListing";

$tdataretblresults[".editFields"] = array();
$tdataretblresults[".editFields"][] = "Price";
$tdataretblresults[".editFields"][] = "Tax_Amount";
$tdataretblresults[".editFields"][] = "MLS_Number";
$tdataretblresults[".editFields"][] = "House_Number";
$tdataretblresults[".editFields"][] = "Street_Name";
$tdataretblresults[".editFields"][] = "Apartment/Unit";
$tdataretblresults[".editFields"][] = "City";
$tdataretblresults[".editFields"][] = "State";
$tdataretblresults[".editFields"][] = "Zip";
$tdataretblresults[".editFields"][] = "Country";
$tdataretblresults[".editFields"][] = "sType";
$tdataretblresults[".editFields"][] = "Style";
$tdataretblresults[".editFields"][] = "Bedrooms";
$tdataretblresults[".editFields"][] = "Bathrooms";
$tdataretblresults[".editFields"][] = "Year";
$tdataretblresults[".editFields"][] = "Foundation";
$tdataretblresults[".editFields"][] = "Sq_Ft";
$tdataretblresults[".editFields"][] = "Garage";
$tdataretblresults[".editFields"][] = "Acres";
$tdataretblresults[".editFields"][] = "Kitchen";
$tdataretblresults[".editFields"][] = "Kitchen_Dimension1";
$tdataretblresults[".editFields"][] = "Kitchen_Dimension2";
$tdataretblresults[".editFields"][] = "Living_Room";
$tdataretblresults[".editFields"][] = "Living_Room_Dimension1";
$tdataretblresults[".editFields"][] = "Living_Room_Dimension2";
$tdataretblresults[".editFields"][] = "Family_Room";
$tdataretblresults[".editFields"][] = "Family_Room_Dimension1";
$tdataretblresults[".editFields"][] = "Family_Room_Dimension2";
$tdataretblresults[".editFields"][] = "Rec_Room";
$tdataretblresults[".editFields"][] = "Rec_Room_Dimension1";
$tdataretblresults[".editFields"][] = "Rec_Room_Dimension2";
$tdataretblresults[".editFields"][] = "Study_Room";
$tdataretblresults[".editFields"][] = "Study_Room_Dimension1";
$tdataretblresults[".editFields"][] = "Study_Room_Dimension2";
$tdataretblresults[".editFields"][] = "Sun_Room";
$tdataretblresults[".editFields"][] = "Sun_Room_Dimension1";
$tdataretblresults[".editFields"][] = "Sun_Room_Dimension2";
$tdataretblresults[".editFields"][] = "Loft";
$tdataretblresults[".editFields"][] = "Loft_Dimension1";
$tdataretblresults[".editFields"][] = "Loft_Dimension2";
$tdataretblresults[".editFields"][] = "Dinning_Room";
$tdataretblresults[".editFields"][] = "Dinning_Room_Dimension1";
$tdataretblresults[".editFields"][] = "Dinning_Room_Dimension2";
$tdataretblresults[".editFields"][] = "Amusement_Room";
$tdataretblresults[".editFields"][] = "Amusement_Room_Dimension1";
$tdataretblresults[".editFields"][] = "Amusement_Room_Dimension2";
$tdataretblresults[".editFields"][] = "Foyer";
$tdataretblresults[".editFields"][] = "Foyer_Dimension1";
$tdataretblresults[".editFields"][] = "Foyer_Dimension2";
$tdataretblresults[".editFields"][] = "Office";
$tdataretblresults[".editFields"][] = "Office_Dimension1";
$tdataretblresults[".editFields"][] = "Office_Dimension2";
$tdataretblresults[".editFields"][] = "Den";
$tdataretblresults[".editFields"][] = "Den_Dimension1";
$tdataretblresults[".editFields"][] = "Den_Dimension2";
$tdataretblresults[".editFields"][] = "FullBaths";
$tdataretblresults[".editFields"][] = "s3/4Baths";
$tdataretblresults[".editFields"][] = "s1/2Baths";
$tdataretblresults[".editFields"][] = "Fireplaces";
$tdataretblresults[".editFields"][] = "Wood_Burning_Fireplace";
$tdataretblresults[".editFields"][] = "Gas_Burning_Fireplace";
$tdataretblresults[".editFields"][] = "Range";
$tdataretblresults[".editFields"][] = "Cooktop";
$tdataretblresults[".editFields"][] = "Dishwasher";
$tdataretblresults[".editFields"][] = "Disposal";
$tdataretblresults[".editFields"][] = "Dryer";
$tdataretblresults[".editFields"][] = "Exhaust_Fan/Hood";
$tdataretblresults[".editFields"][] = "Microwave";
$tdataretblresults[".editFields"][] = "Refrigerator";
$tdataretblresults[".editFields"][] = "Wall_Oven";
$tdataretblresults[".editFields"][] = "Water_Softener";
$tdataretblresults[".editFields"][] = "Eat_In_Kitchen";
$tdataretblresults[".editFields"][] = "Kitchen/Dining_Room";
$tdataretblresults[".editFields"][] = "Separate/Formal_Dining_Room";
$tdataretblresults[".editFields"][] = "Basement";
$tdataretblresults[".editFields"][] = "Finished_Basement";
$tdataretblresults[".editFields"][] = "Drain_Tiled";
$tdataretblresults[".editFields"][] = "Sum_Pump";
$tdataretblresults[".editFields"][] = "Walkout";
$tdataretblresults[".editFields"][] = "Daylight/Lookout_Windows";
$tdataretblresults[".editFields"][] = "Cooling";
$tdataretblresults[".editFields"][] = "Heating";
$tdataretblresults[".editFields"][] = "Lot";
$tdataretblresults[".editFields"][] = "Lot_Dimension1";
$tdataretblresults[".editFields"][] = "Lot_Dimension2";
$tdataretblresults[".editFields"][] = "Lot_Dimension3";
$tdataretblresults[".editFields"][] = "Lot_Dimension4";
$tdataretblresults[".editFields"][] = "Lot_Dimension5";
$tdataretblresults[".editFields"][] = "Lot_Dimension6";
$tdataretblresults[".editFields"][] = "Lot_Dimension7";
$tdataretblresults[".editFields"][] = "Lot_Dimension8";
$tdataretblresults[".editFields"][] = "Tax_Year";
$tdataretblresults[".editFields"][] = "Remarks";
$tdataretblresults[".editFields"][] = "PhotoListing";
$tdataretblresults[".editFields"][] = "Photo1";
$tdataretblresults[".editFields"][] = "Photo2";
$tdataretblresults[".editFields"][] = "Photo3";
$tdataretblresults[".editFields"][] = "Photo4";
$tdataretblresults[".editFields"][] = "Photo5";
$tdataretblresults[".editFields"][] = "Photo6";
$tdataretblresults[".editFields"][] = "Photo7";
$tdataretblresults[".editFields"][] = "Photo8";
$tdataretblresults[".editFields"][] = "Photo9";
$tdataretblresults[".editFields"][] = "Photo10";

$tdataretblresults[".inlineEditFields"] = array();
$tdataretblresults[".inlineEditFields"][] = "Price";
$tdataretblresults[".inlineEditFields"][] = "MLS_Number";
$tdataretblresults[".inlineEditFields"][] = "House_Number";
$tdataretblresults[".inlineEditFields"][] = "Street_Name";
$tdataretblresults[".inlineEditFields"][] = "Apartment/Unit";
$tdataretblresults[".inlineEditFields"][] = "City";
$tdataretblresults[".inlineEditFields"][] = "State";
$tdataretblresults[".inlineEditFields"][] = "Zip";
$tdataretblresults[".inlineEditFields"][] = "Bedrooms";
$tdataretblresults[".inlineEditFields"][] = "Bathrooms";
$tdataretblresults[".inlineEditFields"][] = "Year";
$tdataretblresults[".inlineEditFields"][] = "Sq_Ft";
$tdataretblresults[".inlineEditFields"][] = "Garage";
$tdataretblresults[".inlineEditFields"][] = "Remarks";
$tdataretblresults[".inlineEditFields"][] = "PhotoListing";

$tdataretblresults[".updateSelectedFields"] = array();
$tdataretblresults[".updateSelectedFields"][] = "Price";
$tdataretblresults[".updateSelectedFields"][] = "Tax_Amount";
$tdataretblresults[".updateSelectedFields"][] = "MLS_Number";
$tdataretblresults[".updateSelectedFields"][] = "House_Number";
$tdataretblresults[".updateSelectedFields"][] = "Street_Name";
$tdataretblresults[".updateSelectedFields"][] = "Apartment/Unit";
$tdataretblresults[".updateSelectedFields"][] = "City";
$tdataretblresults[".updateSelectedFields"][] = "State";
$tdataretblresults[".updateSelectedFields"][] = "Zip";
$tdataretblresults[".updateSelectedFields"][] = "Country";
$tdataretblresults[".updateSelectedFields"][] = "sType";
$tdataretblresults[".updateSelectedFields"][] = "Style";
$tdataretblresults[".updateSelectedFields"][] = "Bedrooms";
$tdataretblresults[".updateSelectedFields"][] = "Bathrooms";
$tdataretblresults[".updateSelectedFields"][] = "Year";
$tdataretblresults[".updateSelectedFields"][] = "Foundation";
$tdataretblresults[".updateSelectedFields"][] = "Sq_Ft";
$tdataretblresults[".updateSelectedFields"][] = "Garage";
$tdataretblresults[".updateSelectedFields"][] = "Acres";
$tdataretblresults[".updateSelectedFields"][] = "Kitchen";
$tdataretblresults[".updateSelectedFields"][] = "Kitchen_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Kitchen_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Living_Room";
$tdataretblresults[".updateSelectedFields"][] = "Living_Room_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Living_Room_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Family_Room";
$tdataretblresults[".updateSelectedFields"][] = "Family_Room_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Family_Room_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Rec_Room";
$tdataretblresults[".updateSelectedFields"][] = "Rec_Room_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Rec_Room_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Study_Room";
$tdataretblresults[".updateSelectedFields"][] = "Study_Room_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Study_Room_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Sun_Room";
$tdataretblresults[".updateSelectedFields"][] = "Sun_Room_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Sun_Room_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Loft";
$tdataretblresults[".updateSelectedFields"][] = "Loft_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Loft_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Dinning_Room";
$tdataretblresults[".updateSelectedFields"][] = "Dinning_Room_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Dinning_Room_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Amusement_Room";
$tdataretblresults[".updateSelectedFields"][] = "Amusement_Room_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Amusement_Room_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Foyer";
$tdataretblresults[".updateSelectedFields"][] = "Foyer_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Foyer_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Office";
$tdataretblresults[".updateSelectedFields"][] = "Office_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Office_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Den";
$tdataretblresults[".updateSelectedFields"][] = "Den_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Den_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "FullBaths";
$tdataretblresults[".updateSelectedFields"][] = "s3/4Baths";
$tdataretblresults[".updateSelectedFields"][] = "s1/2Baths";
$tdataretblresults[".updateSelectedFields"][] = "Fireplaces";
$tdataretblresults[".updateSelectedFields"][] = "Wood_Burning_Fireplace";
$tdataretblresults[".updateSelectedFields"][] = "Gas_Burning_Fireplace";
$tdataretblresults[".updateSelectedFields"][] = "Range";
$tdataretblresults[".updateSelectedFields"][] = "Cooktop";
$tdataretblresults[".updateSelectedFields"][] = "Dishwasher";
$tdataretblresults[".updateSelectedFields"][] = "Disposal";
$tdataretblresults[".updateSelectedFields"][] = "Dryer";
$tdataretblresults[".updateSelectedFields"][] = "Exhaust_Fan/Hood";
$tdataretblresults[".updateSelectedFields"][] = "Microwave";
$tdataretblresults[".updateSelectedFields"][] = "Refrigerator";
$tdataretblresults[".updateSelectedFields"][] = "Wall_Oven";
$tdataretblresults[".updateSelectedFields"][] = "Water_Softener";
$tdataretblresults[".updateSelectedFields"][] = "Eat_In_Kitchen";
$tdataretblresults[".updateSelectedFields"][] = "Kitchen/Dining_Room";
$tdataretblresults[".updateSelectedFields"][] = "Separate/Formal_Dining_Room";
$tdataretblresults[".updateSelectedFields"][] = "Basement";
$tdataretblresults[".updateSelectedFields"][] = "Finished_Basement";
$tdataretblresults[".updateSelectedFields"][] = "Drain_Tiled";
$tdataretblresults[".updateSelectedFields"][] = "Sum_Pump";
$tdataretblresults[".updateSelectedFields"][] = "Walkout";
$tdataretblresults[".updateSelectedFields"][] = "Daylight/Lookout_Windows";
$tdataretblresults[".updateSelectedFields"][] = "Cooling";
$tdataretblresults[".updateSelectedFields"][] = "Heating";
$tdataretblresults[".updateSelectedFields"][] = "Lot";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension1";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension2";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension3";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension4";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension5";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension6";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension7";
$tdataretblresults[".updateSelectedFields"][] = "Lot_Dimension8";
$tdataretblresults[".updateSelectedFields"][] = "Tax_Year";
$tdataretblresults[".updateSelectedFields"][] = "Remarks";
$tdataretblresults[".updateSelectedFields"][] = "PhotoListing";
$tdataretblresults[".updateSelectedFields"][] = "Photo1";
$tdataretblresults[".updateSelectedFields"][] = "Photo2";
$tdataretblresults[".updateSelectedFields"][] = "Photo3";
$tdataretblresults[".updateSelectedFields"][] = "Photo4";
$tdataretblresults[".updateSelectedFields"][] = "Photo5";
$tdataretblresults[".updateSelectedFields"][] = "Photo6";
$tdataretblresults[".updateSelectedFields"][] = "Photo7";
$tdataretblresults[".updateSelectedFields"][] = "Photo8";
$tdataretblresults[".updateSelectedFields"][] = "Photo9";
$tdataretblresults[".updateSelectedFields"][] = "Photo10";


$tdataretblresults[".exportFields"] = array();

$tdataretblresults[".importFields"] = array();
$tdataretblresults[".importFields"][] = "PropertyID";
$tdataretblresults[".importFields"][] = "MLS_Number";
$tdataretblresults[".importFields"][] = "House_Number";
$tdataretblresults[".importFields"][] = "Street_Name";
$tdataretblresults[".importFields"][] = "Apartment/Unit";
$tdataretblresults[".importFields"][] = "City";
$tdataretblresults[".importFields"][] = "State";
$tdataretblresults[".importFields"][] = "Zip";
$tdataretblresults[".importFields"][] = "Country";
$tdataretblresults[".importFields"][] = "Price";
$tdataretblresults[".importFields"][] = "sType";
$tdataretblresults[".importFields"][] = "Style";
$tdataretblresults[".importFields"][] = "Bedrooms";
$tdataretblresults[".importFields"][] = "Bathrooms";
$tdataretblresults[".importFields"][] = "Year";
$tdataretblresults[".importFields"][] = "Foundation";
$tdataretblresults[".importFields"][] = "Sq_Ft";
$tdataretblresults[".importFields"][] = "Garage";
$tdataretblresults[".importFields"][] = "Acres";
$tdataretblresults[".importFields"][] = "Kitchen";
$tdataretblresults[".importFields"][] = "Kitchen_Dimension1";
$tdataretblresults[".importFields"][] = "Kitchen_Dimension2";
$tdataretblresults[".importFields"][] = "Living_Room";
$tdataretblresults[".importFields"][] = "Living_Room_Dimension1";
$tdataretblresults[".importFields"][] = "Living_Room_Dimension2";
$tdataretblresults[".importFields"][] = "Family_Room";
$tdataretblresults[".importFields"][] = "Family_Room_Dimension1";
$tdataretblresults[".importFields"][] = "Family_Room_Dimension2";
$tdataretblresults[".importFields"][] = "Rec_Room";
$tdataretblresults[".importFields"][] = "Rec_Room_Dimension1";
$tdataretblresults[".importFields"][] = "Rec_Room_Dimension2";
$tdataretblresults[".importFields"][] = "Study_Room";
$tdataretblresults[".importFields"][] = "Study_Room_Dimension1";
$tdataretblresults[".importFields"][] = "Study_Room_Dimension2";
$tdataretblresults[".importFields"][] = "Sun_Room";
$tdataretblresults[".importFields"][] = "Sun_Room_Dimension1";
$tdataretblresults[".importFields"][] = "Sun_Room_Dimension2";
$tdataretblresults[".importFields"][] = "Loft";
$tdataretblresults[".importFields"][] = "Loft_Dimension1";
$tdataretblresults[".importFields"][] = "Loft_Dimension2";
$tdataretblresults[".importFields"][] = "Dinning_Room";
$tdataretblresults[".importFields"][] = "Dinning_Room_Dimension1";
$tdataretblresults[".importFields"][] = "Dinning_Room_Dimension2";
$tdataretblresults[".importFields"][] = "Amusement_Room";
$tdataretblresults[".importFields"][] = "Amusement_Room_Dimension1";
$tdataretblresults[".importFields"][] = "Amusement_Room_Dimension2";
$tdataretblresults[".importFields"][] = "Foyer";
$tdataretblresults[".importFields"][] = "Foyer_Dimension1";
$tdataretblresults[".importFields"][] = "Foyer_Dimension2";
$tdataretblresults[".importFields"][] = "Office";
$tdataretblresults[".importFields"][] = "Office_Dimension1";
$tdataretblresults[".importFields"][] = "Office_Dimension2";
$tdataretblresults[".importFields"][] = "Den";
$tdataretblresults[".importFields"][] = "Den_Dimension1";
$tdataretblresults[".importFields"][] = "Den_Dimension2";
$tdataretblresults[".importFields"][] = "FullBaths";
$tdataretblresults[".importFields"][] = "s3/4Baths";
$tdataretblresults[".importFields"][] = "s1/2Baths";
$tdataretblresults[".importFields"][] = "Fireplaces";
$tdataretblresults[".importFields"][] = "Wood_Burning_Fireplace";
$tdataretblresults[".importFields"][] = "Gas_Burning_Fireplace";
$tdataretblresults[".importFields"][] = "Range";
$tdataretblresults[".importFields"][] = "Cooktop";
$tdataretblresults[".importFields"][] = "Dishwasher";
$tdataretblresults[".importFields"][] = "Disposal";
$tdataretblresults[".importFields"][] = "Dryer";
$tdataretblresults[".importFields"][] = "Exhaust_Fan/Hood";
$tdataretblresults[".importFields"][] = "Microwave";
$tdataretblresults[".importFields"][] = "Refrigerator";
$tdataretblresults[".importFields"][] = "Wall_Oven";
$tdataretblresults[".importFields"][] = "Water_Softener";
$tdataretblresults[".importFields"][] = "Eat_In_Kitchen";
$tdataretblresults[".importFields"][] = "Kitchen/Dining_Room";
$tdataretblresults[".importFields"][] = "Separate/Formal_Dining_Room";
$tdataretblresults[".importFields"][] = "Basement";
$tdataretblresults[".importFields"][] = "Finished_Basement";
$tdataretblresults[".importFields"][] = "Drain_Tiled";
$tdataretblresults[".importFields"][] = "Sum_Pump";
$tdataretblresults[".importFields"][] = "Walkout";
$tdataretblresults[".importFields"][] = "Daylight/Lookout_Windows";
$tdataretblresults[".importFields"][] = "Cooling";
$tdataretblresults[".importFields"][] = "Heating";
$tdataretblresults[".importFields"][] = "Lot";
$tdataretblresults[".importFields"][] = "Lot_Dimension1";
$tdataretblresults[".importFields"][] = "Lot_Dimension2";
$tdataretblresults[".importFields"][] = "Lot_Dimension3";
$tdataretblresults[".importFields"][] = "Lot_Dimension4";
$tdataretblresults[".importFields"][] = "Lot_Dimension5";
$tdataretblresults[".importFields"][] = "Lot_Dimension6";
$tdataretblresults[".importFields"][] = "Lot_Dimension7";
$tdataretblresults[".importFields"][] = "Lot_Dimension8";
$tdataretblresults[".importFields"][] = "Tax_Amount";
$tdataretblresults[".importFields"][] = "Tax_Year";
$tdataretblresults[".importFields"][] = "Remarks";
$tdataretblresults[".importFields"][] = "PhotoListing";
$tdataretblresults[".importFields"][] = "Photo1";
$tdataretblresults[".importFields"][] = "Photo2";
$tdataretblresults[".importFields"][] = "Photo3";
$tdataretblresults[".importFields"][] = "Photo4";
$tdataretblresults[".importFields"][] = "Photo5";
$tdataretblresults[".importFields"][] = "Photo6";
$tdataretblresults[".importFields"][] = "Photo7";
$tdataretblresults[".importFields"][] = "Photo8";
$tdataretblresults[".importFields"][] = "Photo9";
$tdataretblresults[".importFields"][] = "Photo10";

$tdataretblresults[".printFields"] = array();
$tdataretblresults[".printFields"][] = "MLS_Number";
$tdataretblresults[".printFields"][] = "House_Number";
$tdataretblresults[".printFields"][] = "Street_Name";
$tdataretblresults[".printFields"][] = "Apartment/Unit";
$tdataretblresults[".printFields"][] = "City";
$tdataretblresults[".printFields"][] = "State";
$tdataretblresults[".printFields"][] = "Zip";
$tdataretblresults[".printFields"][] = "Price";
$tdataretblresults[".printFields"][] = "Bedrooms";
$tdataretblresults[".printFields"][] = "Bathrooms";
$tdataretblresults[".printFields"][] = "Year";
$tdataretblresults[".printFields"][] = "Sq_Ft";
$tdataretblresults[".printFields"][] = "Garage";
$tdataretblresults[".printFields"][] = "Tax_Amount";
$tdataretblresults[".printFields"][] = "Remarks";
$tdataretblresults[".printFields"][] = "PhotoListing";

//	PropertyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PropertyID";
	$fdata["GoodName"] = "PropertyID";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","PropertyID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PropertyID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PropertyID";

	
	
			
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








	$tdataretblresults["PropertyID"] = $fdata;
//	MLS_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MLS_Number";
	$fdata["GoodName"] = "MLS_Number";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","MLS_Number");
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

	
		$fdata["strField"] = "MLS_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MLS_Number";

	
	
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
		
		$edata["controlWidth"] = 70;

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

	// the end of search options settings




	$tdataretblresults["MLS_Number"] = $fdata;
//	House_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "House_Number";
	$fdata["GoodName"] = "House_Number";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","House_Number");
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

	
		$fdata["strField"] = "House_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "House_Number";

	
	
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
		
		$edata["controlWidth"] = 70;

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

	// the end of search options settings




	$tdataretblresults["House_Number"] = $fdata;
//	Street_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Street_Name";
	$fdata["GoodName"] = "Street_Name";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Street_Name");
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

	
		$fdata["strField"] = "Street_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Street_Name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

	
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
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdataretblresults["Street_Name"] = $fdata;
//	Apartment/Unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Apartment/Unit";
	$fdata["GoodName"] = "Apartment_Unit";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Apartment_Unit");
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

	
		$fdata["strField"] = "Apartment/Unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Apartment/Unit`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

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
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdataretblresults["Apartment/Unit"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","City");
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

	
		$fdata["strField"] = "City";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "City";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 150;

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
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataretblresults["City"] = $fdata;
//	State
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "State";
	$fdata["GoodName"] = "State";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","State");
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

	
		$fdata["strField"] = "State";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`State`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

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
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdataretblresults["State"] = $fdata;
//	Zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Zip";
	$fdata["GoodName"] = "Zip";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Zip");
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

	
		$fdata["strField"] = "Zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Zip";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

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
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdataretblresults["Zip"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Country");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Country";

	
	
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

		$edata["controlWidth"] = 100;

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




	$tdataretblresults["Country"] = $fdata;
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Price";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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
		
		$edata["controlWidth"] = 100;

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

	// the end of search options settings




	$tdataretblresults["Price"] = $fdata;
//	sType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sType";
	$fdata["GoodName"] = "sType";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","sType");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sType";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "retblstyle";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "StyleID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Style";

	
	$edata["LookupOrderBy"] = "Style";

	
	
	
	

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["sType"] = $fdata;
//	Style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Style";
	$fdata["GoodName"] = "Style";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Style");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Style";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Style";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "retblstyle";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "StyleID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Style";

	
	$edata["LookupOrderBy"] = "Style";

	
	
	
	

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Style"] = $fdata;
//	Bedrooms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Bedrooms";
	$fdata["GoodName"] = "Bedrooms";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Bedrooms");
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

	
		$fdata["strField"] = "Bedrooms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bedrooms";

	
	
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
		
		$edata["controlWidth"] = 30;

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

	// the end of search options settings




	$tdataretblresults["Bedrooms"] = $fdata;
//	Bathrooms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Bathrooms";
	$fdata["GoodName"] = "Bathrooms";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Bathrooms");
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

	
		$fdata["strField"] = "Bathrooms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bathrooms";

	
	
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
		
		$edata["controlWidth"] = 30;

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

	// the end of search options settings




	$tdataretblresults["Bathrooms"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Year");
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

	
		$fdata["strField"] = "Year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Year`";

	
	
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
		
		$edata["controlWidth"] = 50;

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

	// the end of search options settings




	$tdataretblresults["Year"] = $fdata;
//	Foundation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Foundation";
	$fdata["GoodName"] = "Foundation";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Foundation");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Foundation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foundation";

	
	
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
		
		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Foundation"] = $fdata;
//	Sq_Ft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Sq_Ft";
	$fdata["GoodName"] = "Sq_Ft";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Sq_Ft");
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

	
		$fdata["strField"] = "Sq_Ft";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sq_Ft";

	
	
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
		
		$edata["controlWidth"] = 50;

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

	// the end of search options settings




	$tdataretblresults["Sq_Ft"] = $fdata;
//	Garage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Garage";
	$fdata["GoodName"] = "Garage";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Garage");
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

	
		$fdata["strField"] = "Garage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Garage";

	
	
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
		
		$edata["controlWidth"] = 20;

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

	// the end of search options settings




	$tdataretblresults["Garage"] = $fdata;
//	Acres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Acres";
	$fdata["GoodName"] = "Acres";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Acres");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Acres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Acres";

	
	
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
		
		$edata["controlWidth"] = 50;

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

	// the end of search options settings




	$tdataretblresults["Acres"] = $fdata;
//	Kitchen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Kitchen";
	$fdata["GoodName"] = "Kitchen";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Kitchen");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Kitchen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kitchen";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Kitchen"] = $fdata;
//	Kitchen_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Kitchen_Dimension1";
	$fdata["GoodName"] = "Kitchen_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Kitchen_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Kitchen_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kitchen_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Kitchen_Dimension1"] = $fdata;
//	Kitchen_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Kitchen_Dimension2";
	$fdata["GoodName"] = "Kitchen_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Kitchen_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Kitchen_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kitchen_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Kitchen_Dimension2"] = $fdata;
//	Living_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Living_Room";
	$fdata["GoodName"] = "Living_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Living_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Living_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Living_Room";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Living_Room"] = $fdata;
//	Living_Room_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Living_Room_Dimension1";
	$fdata["GoodName"] = "Living_Room_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Living_Room_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Living_Room_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Living_Room_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Living_Room_Dimension1"] = $fdata;
//	Living_Room_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Living_Room_Dimension2";
	$fdata["GoodName"] = "Living_Room_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Living_Room_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Living_Room_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Living_Room_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Living_Room_Dimension2"] = $fdata;
//	Family_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Family_Room";
	$fdata["GoodName"] = "Family_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Family_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Family_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Family_Room";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Family_Room"] = $fdata;
//	Family_Room_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Family_Room_Dimension1";
	$fdata["GoodName"] = "Family_Room_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Family_Room_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Family_Room_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Family_Room_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Family_Room_Dimension1"] = $fdata;
//	Family_Room_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Family_Room_Dimension2";
	$fdata["GoodName"] = "Family_Room_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Family_Room_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Family_Room_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Family_Room_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Family_Room_Dimension2"] = $fdata;
//	Rec_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Rec_Room";
	$fdata["GoodName"] = "Rec_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Rec_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Rec_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rec_Room";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Rec_Room"] = $fdata;
//	Rec_Room_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Rec_Room_Dimension1";
	$fdata["GoodName"] = "Rec_Room_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Rec_Room_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Rec_Room_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rec_Room_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Rec_Room_Dimension1"] = $fdata;
//	Rec_Room_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Rec_Room_Dimension2";
	$fdata["GoodName"] = "Rec_Room_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Rec_Room_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Rec_Room_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rec_Room_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Rec_Room_Dimension2"] = $fdata;
//	Study_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Study_Room";
	$fdata["GoodName"] = "Study_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Study_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Study_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Study_Room";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Study_Room"] = $fdata;
//	Study_Room_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Study_Room_Dimension1";
	$fdata["GoodName"] = "Study_Room_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Study_Room_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Study_Room_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Study_Room_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Study_Room_Dimension1"] = $fdata;
//	Study_Room_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Study_Room_Dimension2";
	$fdata["GoodName"] = "Study_Room_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Study_Room_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Study_Room_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Study_Room_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Study_Room_Dimension2"] = $fdata;
//	Sun_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Sun_Room";
	$fdata["GoodName"] = "Sun_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Sun_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Sun_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sun_Room";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Sun_Room"] = $fdata;
//	Sun_Room_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Sun_Room_Dimension1";
	$fdata["GoodName"] = "Sun_Room_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Sun_Room_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Sun_Room_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sun_Room_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Sun_Room_Dimension1"] = $fdata;
//	Sun_Room_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Sun_Room_Dimension2";
	$fdata["GoodName"] = "Sun_Room_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Sun_Room_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Sun_Room_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sun_Room_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Sun_Room_Dimension2"] = $fdata;
//	Loft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Loft";
	$fdata["GoodName"] = "Loft";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Loft");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Loft";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Loft";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Loft"] = $fdata;
//	Loft_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Loft_Dimension1";
	$fdata["GoodName"] = "Loft_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Loft_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Loft_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Loft_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Loft_Dimension1"] = $fdata;
//	Loft_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Loft_Dimension2";
	$fdata["GoodName"] = "Loft_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Loft_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Loft_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Loft_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Loft_Dimension2"] = $fdata;
//	Dinning_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Dinning_Room";
	$fdata["GoodName"] = "Dinning_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Dinning_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Dinning_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dinning_Room";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Dinning_Room"] = $fdata;
//	Dinning_Room_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Dinning_Room_Dimension1";
	$fdata["GoodName"] = "Dinning_Room_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Dinning_Room_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Dinning_Room_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dinning_Room_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Dinning_Room_Dimension1"] = $fdata;
//	Dinning_Room_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Dinning_Room_Dimension2";
	$fdata["GoodName"] = "Dinning_Room_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Dinning_Room_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Dinning_Room_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dinning_Room_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Dinning_Room_Dimension2"] = $fdata;
//	Amusement_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Amusement_Room";
	$fdata["GoodName"] = "Amusement_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Amusement_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Amusement_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amusement_Room";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Amusement_Room"] = $fdata;
//	Amusement_Room_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Amusement_Room_Dimension1";
	$fdata["GoodName"] = "Amusement_Room_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Amusement_Room_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Amusement_Room_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amusement_Room_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Amusement_Room_Dimension1"] = $fdata;
//	Amusement_Room_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Amusement_Room_Dimension2";
	$fdata["GoodName"] = "Amusement_Room_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Amusement_Room_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Amusement_Room_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amusement_Room_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Amusement_Room_Dimension2"] = $fdata;
//	Foyer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Foyer";
	$fdata["GoodName"] = "Foyer";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Foyer");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Foyer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foyer";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Foyer"] = $fdata;
//	Foyer_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Foyer_Dimension1";
	$fdata["GoodName"] = "Foyer_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Foyer_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Foyer_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foyer_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Foyer_Dimension1"] = $fdata;
//	Foyer_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Foyer_Dimension2";
	$fdata["GoodName"] = "Foyer_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Foyer_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Foyer_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foyer_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Foyer_Dimension2"] = $fdata;
//	Office
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Office";
	$fdata["GoodName"] = "Office";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Office");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Office";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Office";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Office"] = $fdata;
//	Office_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Office_Dimension1";
	$fdata["GoodName"] = "Office_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Office_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Office_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Office_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Office_Dimension1"] = $fdata;
//	Office_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Office_Dimension2";
	$fdata["GoodName"] = "Office_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Office_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Office_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Office_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Office_Dimension2"] = $fdata;
//	Den
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Den";
	$fdata["GoodName"] = "Den";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Den");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Den";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Den";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Den"] = $fdata;
//	Den_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Den_Dimension1";
	$fdata["GoodName"] = "Den_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Den_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Den_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Den_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Den_Dimension1"] = $fdata;
//	Den_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Den_Dimension2";
	$fdata["GoodName"] = "Den_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Den_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Den_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Den_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Den_Dimension2"] = $fdata;
//	FullBaths
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "FullBaths";
	$fdata["GoodName"] = "FullBaths";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","FullBaths");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "FullBaths";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FullBaths";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["FullBaths"] = $fdata;
//	s3/4Baths
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "s3/4Baths";
	$fdata["GoodName"] = "s3_4Baths";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","s3_4Baths");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "s3/4Baths";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s3/4Baths`";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["s3/4Baths"] = $fdata;
//	s1/2Baths
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "s1/2Baths";
	$fdata["GoodName"] = "s1_2Baths";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","s1_2Baths");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "s1/2Baths";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s1/2Baths`";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["s1/2Baths"] = $fdata;
//	Fireplaces
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Fireplaces";
	$fdata["GoodName"] = "Fireplaces";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Fireplaces");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Fireplaces";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fireplaces";

	
	
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
		
		$edata["controlWidth"] = 30;

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

	// the end of search options settings




	$tdataretblresults["Fireplaces"] = $fdata;
//	Wood_Burning_Fireplace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Wood_Burning_Fireplace";
	$fdata["GoodName"] = "Wood_Burning_Fireplace";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Wood_Burning_Fireplace");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "Wood_Burning_Fireplace";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Wood_Burning_Fireplace";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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








	$tdataretblresults["Wood_Burning_Fireplace"] = $fdata;
//	Gas_Burning_Fireplace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Gas_Burning_Fireplace";
	$fdata["GoodName"] = "Gas_Burning_Fireplace";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Gas_Burning_Fireplace");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "Gas_Burning_Fireplace";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gas_Burning_Fireplace";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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








	$tdataretblresults["Gas_Burning_Fireplace"] = $fdata;
//	Range
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Range";
	$fdata["GoodName"] = "Range";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Range");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Range";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Range`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Range"] = $fdata;
//	Cooktop
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Cooktop";
	$fdata["GoodName"] = "Cooktop";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Cooktop");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Cooktop";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cooktop";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Cooktop"] = $fdata;
//	Dishwasher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Dishwasher";
	$fdata["GoodName"] = "Dishwasher";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Dishwasher");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Dishwasher";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dishwasher";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Dishwasher"] = $fdata;
//	Disposal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Disposal";
	$fdata["GoodName"] = "Disposal";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Disposal");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Disposal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disposal";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Disposal"] = $fdata;
//	Dryer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Dryer";
	$fdata["GoodName"] = "Dryer";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Dryer");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Dryer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dryer";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Dryer"] = $fdata;
//	Exhaust_Fan/Hood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Exhaust_Fan/Hood";
	$fdata["GoodName"] = "Exhaust_Fan_Hood";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Exhaust_Fan_Hood");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Exhaust_Fan/Hood";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Exhaust_Fan/Hood`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Exhaust_Fan/Hood"] = $fdata;
//	Microwave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Microwave";
	$fdata["GoodName"] = "Microwave";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Microwave");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Microwave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Microwave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Microwave"] = $fdata;
//	Refrigerator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Refrigerator";
	$fdata["GoodName"] = "Refrigerator";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Refrigerator");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Refrigerator";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Refrigerator";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Refrigerator"] = $fdata;
//	Wall_Oven
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Wall_Oven";
	$fdata["GoodName"] = "Wall_Oven";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Wall_Oven");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Wall_Oven";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Wall_Oven";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Wall_Oven"] = $fdata;
//	Water_Softener
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Water_Softener";
	$fdata["GoodName"] = "Water_Softener";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Water_Softener");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Water_Softener";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Water_Softener";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Water_Softener"] = $fdata;
//	Eat_In_Kitchen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "Eat_In_Kitchen";
	$fdata["GoodName"] = "Eat_In_Kitchen";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Eat_In_Kitchen");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Eat_In_Kitchen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eat_In_Kitchen";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Eat_In_Kitchen"] = $fdata;
//	Kitchen/Dining_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "Kitchen/Dining_Room";
	$fdata["GoodName"] = "Kitchen_Dining_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Kitchen_Dining_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Kitchen/Dining_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Kitchen/Dining_Room`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Kitchen/Dining_Room"] = $fdata;
//	Separate/Formal_Dining_Room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "Separate/Formal_Dining_Room";
	$fdata["GoodName"] = "Separate_Formal_Dining_Room";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Separate_Formal_Dining_Room");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Separate/Formal_Dining_Room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Separate/Formal_Dining_Room`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Separate/Formal_Dining_Room"] = $fdata;
//	Basement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "Basement";
	$fdata["GoodName"] = "Basement";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Basement");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Basement";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Basement";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Basement"] = $fdata;
//	Finished_Basement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "Finished_Basement";
	$fdata["GoodName"] = "Finished_Basement";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Finished_Basement");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Finished_Basement";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Finished_Basement";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Finished_Basement"] = $fdata;
//	Drain_Tiled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "Drain_Tiled";
	$fdata["GoodName"] = "Drain_Tiled";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Drain_Tiled");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Drain_Tiled";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Drain_Tiled";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Drain_Tiled"] = $fdata;
//	Sum_Pump
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "Sum_Pump";
	$fdata["GoodName"] = "Sum_Pump";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Sum_Pump");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Sum_Pump";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sum_Pump";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Sum_Pump"] = $fdata;
//	Walkout
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "Walkout";
	$fdata["GoodName"] = "Walkout";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Walkout");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Walkout";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Walkout";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Walkout"] = $fdata;
//	Daylight/Lookout_Windows
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "Daylight/Lookout_Windows";
	$fdata["GoodName"] = "Daylight_Lookout_Windows";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Daylight_Lookout_Windows");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Daylight/Lookout_Windows";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Daylight/Lookout_Windows`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataretblresults["Daylight/Lookout_Windows"] = $fdata;
//	Cooling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "Cooling";
	$fdata["GoodName"] = "Cooling";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Cooling");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Cooling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cooling";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Cooling"] = $fdata;
//	Heating
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "Heating";
	$fdata["GoodName"] = "Heating";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Heating");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Heating";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Heating";

	
	
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
		
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Heating"] = $fdata;
//	Lot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "Lot";
	$fdata["GoodName"] = "Lot";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "Lot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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








	$tdataretblresults["Lot"] = $fdata;
//	Lot_Dimension1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "Lot_Dimension1";
	$fdata["GoodName"] = "Lot_Dimension1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension1";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension1"] = $fdata;
//	Lot_Dimension2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Lot_Dimension2";
	$fdata["GoodName"] = "Lot_Dimension2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension2";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension2"] = $fdata;
//	Lot_Dimension3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "Lot_Dimension3";
	$fdata["GoodName"] = "Lot_Dimension3";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension3");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension3";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension3"] = $fdata;
//	Lot_Dimension4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "Lot_Dimension4";
	$fdata["GoodName"] = "Lot_Dimension4";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension4");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension4";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension4"] = $fdata;
//	Lot_Dimension5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "Lot_Dimension5";
	$fdata["GoodName"] = "Lot_Dimension5";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension5");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension5";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension5"] = $fdata;
//	Lot_Dimension6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "Lot_Dimension6";
	$fdata["GoodName"] = "Lot_Dimension6";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension6");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension6";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension6"] = $fdata;
//	Lot_Dimension7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "Lot_Dimension7";
	$fdata["GoodName"] = "Lot_Dimension7";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension7");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension7";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension7"] = $fdata;
//	Lot_Dimension8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "Lot_Dimension8";
	$fdata["GoodName"] = "Lot_Dimension8";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Lot_Dimension8");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Lot_Dimension8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lot_Dimension8";

	
	
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
		
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Lot_Dimension8"] = $fdata;
//	Tax_Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Tax_Amount";
	$fdata["GoodName"] = "Tax_Amount";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Tax_Amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Tax_Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tax_Amount";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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
		
		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Tax_Amount"] = $fdata;
//	Tax_Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "Tax_Year";
	$fdata["GoodName"] = "Tax_Year";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Tax_Year");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Tax_Year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tax_Year";

	
	
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
		
		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblresults["Tax_Year"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Remarks");
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

	
		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remarks";

	
	
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
			$edata["nCols"] = 450;

	
	
	
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




	$tdataretblresults["Remarks"] = $fdata;
//	PhotoListing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "PhotoListing";
	$fdata["GoodName"] = "PhotoListing";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","PhotoListing");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "PhotoListing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PhotoListing";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["PhotoListing"] = $fdata;
//	Photo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "Photo1";
	$fdata["GoodName"] = "Photo1";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo1";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo1"] = $fdata;
//	Photo2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "Photo2";
	$fdata["GoodName"] = "Photo2";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo2";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo2"] = $fdata;
//	Photo3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Photo3";
	$fdata["GoodName"] = "Photo3";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo3";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo3"] = $fdata;
//	Photo4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "Photo4";
	$fdata["GoodName"] = "Photo4";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo4";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo4"] = $fdata;
//	Photo5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Photo5";
	$fdata["GoodName"] = "Photo5";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo5";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo5"] = $fdata;
//	Photo6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "Photo6";
	$fdata["GoodName"] = "Photo6";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo6");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo6";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo6"] = $fdata;
//	Photo7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "Photo7";
	$fdata["GoodName"] = "Photo7";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo7");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo7";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo7"] = $fdata;
//	Photo8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Photo8";
	$fdata["GoodName"] = "Photo8";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo8");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo8";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo8"] = $fdata;
//	Photo9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "Photo9";
	$fdata["GoodName"] = "Photo9";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo9");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo9";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="photos/";

						$vdata["ImageWidth"] = 160;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
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








	$tdataretblresults["Photo9"] = $fdata;
//	Photo10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "Photo10";
	$fdata["GoodName"] = "Photo10";
	$fdata["ownerTable"] = "retblresults";
	$fdata["Label"] = GetFieldLabel("retblresults","Photo10");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Photo10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo10";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

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








	$tdataretblresults["Photo10"] = $fdata;


$tables_data["retblresults"]=&$tdataretblresults;
$field_labels["retblresults"] = &$fieldLabelsretblresults;
$fieldToolTips["retblresults"] = &$fieldToolTipsretblresults;
$placeHolders["retblresults"] = &$placeHoldersretblresults;
$page_titles["retblresults"] = &$pageTitlesretblresults;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retblresults"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retblresults"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retblresults()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "PropertyID,  MLS_Number,  House_Number,  Street_Name,  `Apartment/Unit`,  City,  `State`,  Zip,  Country,  Price,  sType,  Style,  Bedrooms,  Bathrooms,  `Year`,  Foundation,  Sq_Ft,  Garage,  Acres,  Kitchen,  Kitchen_Dimension1,  Kitchen_Dimension2,  Living_Room,  Living_Room_Dimension1,  Living_Room_Dimension2,  Family_Room,  Family_Room_Dimension1,  Family_Room_Dimension2,  Rec_Room,  Rec_Room_Dimension1,  Rec_Room_Dimension2,  Study_Room,  Study_Room_Dimension1,  Study_Room_Dimension2,  Sun_Room,  Sun_Room_Dimension1,  Sun_Room_Dimension2,  Loft,  Loft_Dimension1,  Loft_Dimension2,  Dinning_Room,  Dinning_Room_Dimension1,  Dinning_Room_Dimension2,  Amusement_Room,  Amusement_Room_Dimension1,  Amusement_Room_Dimension2,  Foyer,  Foyer_Dimension1,  Foyer_Dimension2,  Office,  Office_Dimension1,  Office_Dimension2,  Den,  Den_Dimension1,  Den_Dimension2,  FullBaths,  `s3/4Baths`,  `s1/2Baths`,  Fireplaces,  Wood_Burning_Fireplace,  Gas_Burning_Fireplace,  `Range`,  Cooktop,  Dishwasher,  Disposal,  Dryer,  `Exhaust_Fan/Hood`,  Microwave,  Refrigerator,  Wall_Oven,  Water_Softener,  Eat_In_Kitchen,  `Kitchen/Dining_Room`,  `Separate/Formal_Dining_Room`,  Basement,  Finished_Basement,  Drain_Tiled,  Sum_Pump,  Walkout,  `Daylight/Lookout_Windows`,  Cooling,  Heating,  Lot,  Lot_Dimension1,  Lot_Dimension2,  Lot_Dimension3,  Lot_Dimension4,  Lot_Dimension5,  Lot_Dimension6,  Lot_Dimension7,  Lot_Dimension8,  Tax_Amount,  Tax_Year,  Remarks,  PhotoListing,  Photo1,  Photo2,  Photo3,  Photo4,  Photo5,  Photo6,  Photo7,  Photo8,  Photo9,  Photo10";
$proto0["m_strFrom"] = "FROM retblresults";
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
	"m_strName" => "PropertyID",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto6["m_sql"] = "PropertyID";
$proto6["m_srcTableName"] = "retblresults";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MLS_Number",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto8["m_sql"] = "MLS_Number";
$proto8["m_srcTableName"] = "retblresults";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "House_Number",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto10["m_sql"] = "House_Number";
$proto10["m_srcTableName"] = "retblresults";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Street_Name",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto12["m_sql"] = "Street_Name";
$proto12["m_srcTableName"] = "retblresults";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Apartment/Unit",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto14["m_sql"] = "`Apartment/Unit`";
$proto14["m_srcTableName"] = "retblresults";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto16["m_sql"] = "City";
$proto16["m_srcTableName"] = "retblresults";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "State",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto18["m_sql"] = "`State`";
$proto18["m_srcTableName"] = "retblresults";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Zip",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto20["m_sql"] = "Zip";
$proto20["m_srcTableName"] = "retblresults";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Country",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto22["m_sql"] = "Country";
$proto22["m_srcTableName"] = "retblresults";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto24["m_sql"] = "Price";
$proto24["m_srcTableName"] = "retblresults";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sType",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto26["m_sql"] = "sType";
$proto26["m_srcTableName"] = "retblresults";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Style",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto28["m_sql"] = "Style";
$proto28["m_srcTableName"] = "retblresults";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Bedrooms",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto30["m_sql"] = "Bedrooms";
$proto30["m_srcTableName"] = "retblresults";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Bathrooms",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto32["m_sql"] = "Bathrooms";
$proto32["m_srcTableName"] = "retblresults";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Year",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto34["m_sql"] = "`Year`";
$proto34["m_srcTableName"] = "retblresults";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Foundation",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto36["m_sql"] = "Foundation";
$proto36["m_srcTableName"] = "retblresults";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Sq_Ft",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto38["m_sql"] = "Sq_Ft";
$proto38["m_srcTableName"] = "retblresults";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Garage",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto40["m_sql"] = "Garage";
$proto40["m_srcTableName"] = "retblresults";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Acres",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto42["m_sql"] = "Acres";
$proto42["m_srcTableName"] = "retblresults";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Kitchen",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto44["m_sql"] = "Kitchen";
$proto44["m_srcTableName"] = "retblresults";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Kitchen_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto46["m_sql"] = "Kitchen_Dimension1";
$proto46["m_srcTableName"] = "retblresults";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Kitchen_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto48["m_sql"] = "Kitchen_Dimension2";
$proto48["m_srcTableName"] = "retblresults";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Living_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto50["m_sql"] = "Living_Room";
$proto50["m_srcTableName"] = "retblresults";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Living_Room_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto52["m_sql"] = "Living_Room_Dimension1";
$proto52["m_srcTableName"] = "retblresults";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Living_Room_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto54["m_sql"] = "Living_Room_Dimension2";
$proto54["m_srcTableName"] = "retblresults";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Family_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto56["m_sql"] = "Family_Room";
$proto56["m_srcTableName"] = "retblresults";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Family_Room_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto58["m_sql"] = "Family_Room_Dimension1";
$proto58["m_srcTableName"] = "retblresults";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Family_Room_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto60["m_sql"] = "Family_Room_Dimension2";
$proto60["m_srcTableName"] = "retblresults";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Rec_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto62["m_sql"] = "Rec_Room";
$proto62["m_srcTableName"] = "retblresults";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Rec_Room_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto64["m_sql"] = "Rec_Room_Dimension1";
$proto64["m_srcTableName"] = "retblresults";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Rec_Room_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto66["m_sql"] = "Rec_Room_Dimension2";
$proto66["m_srcTableName"] = "retblresults";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Study_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto68["m_sql"] = "Study_Room";
$proto68["m_srcTableName"] = "retblresults";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Study_Room_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto70["m_sql"] = "Study_Room_Dimension1";
$proto70["m_srcTableName"] = "retblresults";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Study_Room_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto72["m_sql"] = "Study_Room_Dimension2";
$proto72["m_srcTableName"] = "retblresults";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Sun_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto74["m_sql"] = "Sun_Room";
$proto74["m_srcTableName"] = "retblresults";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Sun_Room_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto76["m_sql"] = "Sun_Room_Dimension1";
$proto76["m_srcTableName"] = "retblresults";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Sun_Room_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto78["m_sql"] = "Sun_Room_Dimension2";
$proto78["m_srcTableName"] = "retblresults";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Loft",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto80["m_sql"] = "Loft";
$proto80["m_srcTableName"] = "retblresults";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Loft_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto82["m_sql"] = "Loft_Dimension1";
$proto82["m_srcTableName"] = "retblresults";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Loft_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto84["m_sql"] = "Loft_Dimension2";
$proto84["m_srcTableName"] = "retblresults";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Dinning_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto86["m_sql"] = "Dinning_Room";
$proto86["m_srcTableName"] = "retblresults";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Dinning_Room_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto88["m_sql"] = "Dinning_Room_Dimension1";
$proto88["m_srcTableName"] = "retblresults";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Dinning_Room_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto90["m_sql"] = "Dinning_Room_Dimension2";
$proto90["m_srcTableName"] = "retblresults";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Amusement_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto92["m_sql"] = "Amusement_Room";
$proto92["m_srcTableName"] = "retblresults";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Amusement_Room_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto94["m_sql"] = "Amusement_Room_Dimension1";
$proto94["m_srcTableName"] = "retblresults";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Amusement_Room_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto96["m_sql"] = "Amusement_Room_Dimension2";
$proto96["m_srcTableName"] = "retblresults";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Foyer",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto98["m_sql"] = "Foyer";
$proto98["m_srcTableName"] = "retblresults";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Foyer_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto100["m_sql"] = "Foyer_Dimension1";
$proto100["m_srcTableName"] = "retblresults";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Foyer_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto102["m_sql"] = "Foyer_Dimension2";
$proto102["m_srcTableName"] = "retblresults";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Office",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto104["m_sql"] = "Office";
$proto104["m_srcTableName"] = "retblresults";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Office_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto106["m_sql"] = "Office_Dimension1";
$proto106["m_srcTableName"] = "retblresults";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Office_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto108["m_sql"] = "Office_Dimension2";
$proto108["m_srcTableName"] = "retblresults";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Den",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto110["m_sql"] = "Den";
$proto110["m_srcTableName"] = "retblresults";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Den_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto112["m_sql"] = "Den_Dimension1";
$proto112["m_srcTableName"] = "retblresults";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Den_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto114["m_sql"] = "Den_Dimension2";
$proto114["m_srcTableName"] = "retblresults";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "FullBaths",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto116["m_sql"] = "FullBaths";
$proto116["m_srcTableName"] = "retblresults";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "s3/4Baths",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto118["m_sql"] = "`s3/4Baths`";
$proto118["m_srcTableName"] = "retblresults";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "s1/2Baths",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto120["m_sql"] = "`s1/2Baths`";
$proto120["m_srcTableName"] = "retblresults";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Fireplaces",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto122["m_sql"] = "Fireplaces";
$proto122["m_srcTableName"] = "retblresults";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Wood_Burning_Fireplace",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto124["m_sql"] = "Wood_Burning_Fireplace";
$proto124["m_srcTableName"] = "retblresults";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Gas_Burning_Fireplace",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto126["m_sql"] = "Gas_Burning_Fireplace";
$proto126["m_srcTableName"] = "retblresults";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Range",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto128["m_sql"] = "`Range`";
$proto128["m_srcTableName"] = "retblresults";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Cooktop",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto130["m_sql"] = "Cooktop";
$proto130["m_srcTableName"] = "retblresults";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Dishwasher",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto132["m_sql"] = "Dishwasher";
$proto132["m_srcTableName"] = "retblresults";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Disposal",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto134["m_sql"] = "Disposal";
$proto134["m_srcTableName"] = "retblresults";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Dryer",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto136["m_sql"] = "Dryer";
$proto136["m_srcTableName"] = "retblresults";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhaust_Fan/Hood",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto138["m_sql"] = "`Exhaust_Fan/Hood`";
$proto138["m_srcTableName"] = "retblresults";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Microwave",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto140["m_sql"] = "Microwave";
$proto140["m_srcTableName"] = "retblresults";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Refrigerator",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto142["m_sql"] = "Refrigerator";
$proto142["m_srcTableName"] = "retblresults";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Wall_Oven",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto144["m_sql"] = "Wall_Oven";
$proto144["m_srcTableName"] = "retblresults";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Water_Softener",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto146["m_sql"] = "Water_Softener";
$proto146["m_srcTableName"] = "retblresults";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Eat_In_Kitchen",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto148["m_sql"] = "Eat_In_Kitchen";
$proto148["m_srcTableName"] = "retblresults";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Kitchen/Dining_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto150["m_sql"] = "`Kitchen/Dining_Room`";
$proto150["m_srcTableName"] = "retblresults";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Separate/Formal_Dining_Room",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto152["m_sql"] = "`Separate/Formal_Dining_Room`";
$proto152["m_srcTableName"] = "retblresults";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Basement",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto154["m_sql"] = "Basement";
$proto154["m_srcTableName"] = "retblresults";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Finished_Basement",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto156["m_sql"] = "Finished_Basement";
$proto156["m_srcTableName"] = "retblresults";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "Drain_Tiled",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto158["m_sql"] = "Drain_Tiled";
$proto158["m_srcTableName"] = "retblresults";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "Sum_Pump",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto160["m_sql"] = "Sum_Pump";
$proto160["m_srcTableName"] = "retblresults";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "Walkout",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto162["m_sql"] = "Walkout";
$proto162["m_srcTableName"] = "retblresults";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "Daylight/Lookout_Windows",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto164["m_sql"] = "`Daylight/Lookout_Windows`";
$proto164["m_srcTableName"] = "retblresults";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "Cooling",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto166["m_sql"] = "Cooling";
$proto166["m_srcTableName"] = "retblresults";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "Heating",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto168["m_sql"] = "Heating";
$proto168["m_srcTableName"] = "retblresults";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto170["m_sql"] = "Lot";
$proto170["m_srcTableName"] = "retblresults";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto172["m_sql"] = "Lot_Dimension1";
$proto172["m_srcTableName"] = "retblresults";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto174["m_sql"] = "Lot_Dimension2";
$proto174["m_srcTableName"] = "retblresults";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension3",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto176["m_sql"] = "Lot_Dimension3";
$proto176["m_srcTableName"] = "retblresults";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension4",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto178["m_sql"] = "Lot_Dimension4";
$proto178["m_srcTableName"] = "retblresults";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension5",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto180["m_sql"] = "Lot_Dimension5";
$proto180["m_srcTableName"] = "retblresults";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension6",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto182["m_sql"] = "Lot_Dimension6";
$proto182["m_srcTableName"] = "retblresults";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension7",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto184["m_sql"] = "Lot_Dimension7";
$proto184["m_srcTableName"] = "retblresults";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "Lot_Dimension8",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto186["m_sql"] = "Lot_Dimension8";
$proto186["m_srcTableName"] = "retblresults";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Tax_Amount",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto188["m_sql"] = "Tax_Amount";
$proto188["m_srcTableName"] = "retblresults";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "Tax_Year",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto190["m_sql"] = "Tax_Year";
$proto190["m_srcTableName"] = "retblresults";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto192["m_sql"] = "Remarks";
$proto192["m_srcTableName"] = "retblresults";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "PhotoListing",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto194["m_sql"] = "PhotoListing";
$proto194["m_srcTableName"] = "retblresults";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo1",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto196["m_sql"] = "Photo1";
$proto196["m_srcTableName"] = "retblresults";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo2",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto198["m_sql"] = "Photo2";
$proto198["m_srcTableName"] = "retblresults";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo3",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto200["m_sql"] = "Photo3";
$proto200["m_srcTableName"] = "retblresults";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo4",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto202["m_sql"] = "Photo4";
$proto202["m_srcTableName"] = "retblresults";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo5",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto204["m_sql"] = "Photo5";
$proto204["m_srcTableName"] = "retblresults";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo6",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto206["m_sql"] = "Photo6";
$proto206["m_srcTableName"] = "retblresults";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo7",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto208["m_sql"] = "Photo7";
$proto208["m_srcTableName"] = "retblresults";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo8",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto210["m_sql"] = "Photo8";
$proto210["m_srcTableName"] = "retblresults";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo9",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto212["m_sql"] = "Photo9";
$proto212["m_srcTableName"] = "retblresults";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo10",
	"m_strTable" => "retblresults",
	"m_srcTableName" => "retblresults"
));

$proto214["m_sql"] = "Photo10";
$proto214["m_srcTableName"] = "retblresults";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto216=array();
$proto216["m_link"] = "SQLL_MAIN";
			$proto217=array();
$proto217["m_strName"] = "retblresults";
$proto217["m_srcTableName"] = "retblresults";
$proto217["m_columns"] = array();
$proto217["m_columns"][] = "s1/2Baths";
$proto217["m_columns"][] = "s3/4Baths";
$proto217["m_columns"][] = "Acres";
$proto217["m_columns"][] = "Amusement_Room";
$proto217["m_columns"][] = "Amusement_Room_Dimension1";
$proto217["m_columns"][] = "Amusement_Room_Dimension2";
$proto217["m_columns"][] = "Apartment/Unit";
$proto217["m_columns"][] = "Basement";
$proto217["m_columns"][] = "Bathrooms";
$proto217["m_columns"][] = "Bedrooms";
$proto217["m_columns"][] = "City";
$proto217["m_columns"][] = "Cooktop";
$proto217["m_columns"][] = "Cooling";
$proto217["m_columns"][] = "Country";
$proto217["m_columns"][] = "Daylight/Lookout_Windows";
$proto217["m_columns"][] = "Den";
$proto217["m_columns"][] = "Den_Dimension1";
$proto217["m_columns"][] = "Den_Dimension2";
$proto217["m_columns"][] = "Dinning_Room";
$proto217["m_columns"][] = "Dinning_Room_Dimension1";
$proto217["m_columns"][] = "Dinning_Room_Dimension2";
$proto217["m_columns"][] = "Dishwasher";
$proto217["m_columns"][] = "Disposal";
$proto217["m_columns"][] = "Drain_Tiled";
$proto217["m_columns"][] = "Dryer";
$proto217["m_columns"][] = "Eat_In_Kitchen";
$proto217["m_columns"][] = "Exhaust_Fan/Hood";
$proto217["m_columns"][] = "Family_Room";
$proto217["m_columns"][] = "Family_Room_Dimension1";
$proto217["m_columns"][] = "Family_Room_Dimension2";
$proto217["m_columns"][] = "Finished_Basement";
$proto217["m_columns"][] = "Fireplaces";
$proto217["m_columns"][] = "Foundation";
$proto217["m_columns"][] = "Foyer";
$proto217["m_columns"][] = "Foyer_Dimension1";
$proto217["m_columns"][] = "Foyer_Dimension2";
$proto217["m_columns"][] = "FullBaths";
$proto217["m_columns"][] = "Garage";
$proto217["m_columns"][] = "Gas_Burning_Fireplace";
$proto217["m_columns"][] = "Heating";
$proto217["m_columns"][] = "House_Number";
$proto217["m_columns"][] = "Kitchen";
$proto217["m_columns"][] = "Kitchen/Dining_Room";
$proto217["m_columns"][] = "Kitchen_Dimension1";
$proto217["m_columns"][] = "Kitchen_Dimension2";
$proto217["m_columns"][] = "Living_Room";
$proto217["m_columns"][] = "Living_Room_Dimension1";
$proto217["m_columns"][] = "Living_Room_Dimension2";
$proto217["m_columns"][] = "Loft";
$proto217["m_columns"][] = "Loft_Dimension1";
$proto217["m_columns"][] = "Loft_Dimension2";
$proto217["m_columns"][] = "Lot";
$proto217["m_columns"][] = "Lot_Dimension1";
$proto217["m_columns"][] = "Lot_Dimension2";
$proto217["m_columns"][] = "Lot_Dimension3";
$proto217["m_columns"][] = "Lot_Dimension4";
$proto217["m_columns"][] = "Lot_Dimension5";
$proto217["m_columns"][] = "Lot_Dimension6";
$proto217["m_columns"][] = "Lot_Dimension7";
$proto217["m_columns"][] = "Lot_Dimension8";
$proto217["m_columns"][] = "Microwave";
$proto217["m_columns"][] = "MLS_Number";
$proto217["m_columns"][] = "Office";
$proto217["m_columns"][] = "Office_Dimension1";
$proto217["m_columns"][] = "Office_Dimension2";
$proto217["m_columns"][] = "Photo1";
$proto217["m_columns"][] = "Photo10";
$proto217["m_columns"][] = "Photo2";
$proto217["m_columns"][] = "Photo3";
$proto217["m_columns"][] = "Photo4";
$proto217["m_columns"][] = "Photo5";
$proto217["m_columns"][] = "Photo6";
$proto217["m_columns"][] = "Photo7";
$proto217["m_columns"][] = "Photo8";
$proto217["m_columns"][] = "Photo9";
$proto217["m_columns"][] = "PhotoListing";
$proto217["m_columns"][] = "Price";
$proto217["m_columns"][] = "PropertyID";
$proto217["m_columns"][] = "Range";
$proto217["m_columns"][] = "Rec_Room";
$proto217["m_columns"][] = "Rec_Room_Dimension1";
$proto217["m_columns"][] = "Rec_Room_Dimension2";
$proto217["m_columns"][] = "Refrigerator";
$proto217["m_columns"][] = "Remarks";
$proto217["m_columns"][] = "Separate/Formal_Dining_Room";
$proto217["m_columns"][] = "Sq_Ft";
$proto217["m_columns"][] = "State";
$proto217["m_columns"][] = "Street_Name";
$proto217["m_columns"][] = "Study_Room";
$proto217["m_columns"][] = "Study_Room_Dimension1";
$proto217["m_columns"][] = "Study_Room_Dimension2";
$proto217["m_columns"][] = "Style";
$proto217["m_columns"][] = "Sum_Pump";
$proto217["m_columns"][] = "Sun_Room";
$proto217["m_columns"][] = "Sun_Room_Dimension1";
$proto217["m_columns"][] = "Sun_Room_Dimension2";
$proto217["m_columns"][] = "Tax_Amount";
$proto217["m_columns"][] = "Tax_Year";
$proto217["m_columns"][] = "sType";
$proto217["m_columns"][] = "Walkout";
$proto217["m_columns"][] = "Wall_Oven";
$proto217["m_columns"][] = "Water_Softener";
$proto217["m_columns"][] = "Wood_Burning_Fireplace";
$proto217["m_columns"][] = "Year";
$proto217["m_columns"][] = "Zip";
$obj = new SQLTable($proto217);

$proto216["m_table"] = $obj;
$proto216["m_sql"] = "retblresults";
$proto216["m_alias"] = "";
$proto216["m_srcTableName"] = "retblresults";
$proto218=array();
$proto218["m_sql"] = "";
$proto218["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto218["m_column"]=$obj;
$proto218["m_contained"] = array();
$proto218["m_strCase"] = "";
$proto218["m_havingmode"] = false;
$proto218["m_inBrackets"] = false;
$proto218["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto218);

$proto216["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto216);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="retblresults";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retblresults = createSqlQuery_retblresults();


	
						;

																																																																																																									

$tdataretblresults[".sqlquery"] = $queryData_retblresults;

include_once(getabspath("include/retblresults_events.php"));
$tableEvents["retblresults"] = new eventclass_retblresults;
$tdataretblresults[".hasEvents"] = true;

?>
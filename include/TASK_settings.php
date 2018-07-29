<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTASK = array();
	$tdataTASK[".truncateText"] = true;
	$tdataTASK[".NumberOfChars"] = 20;
	$tdataTASK[".ShortName"] = "TASK";
	$tdataTASK[".OwnerID"] = "";
	$tdataTASK[".OriginalTable"] = "TASK";

//	field labels
$fieldLabelsTASK = array();
$fieldToolTipsTASK = array();
$pageTitlesTASK = array();
$placeHoldersTASK = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTASK["Japanese"] = array();
	$fieldToolTipsTASK["Japanese"] = array();
	$placeHoldersTASK["Japanese"] = array();
	$pageTitlesTASK["Japanese"] = array();
	$fieldLabelsTASK["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsTASK["Japanese"]["PRO_UID"] = "";
	$placeHoldersTASK["Japanese"]["PRO_UID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsTASK["Japanese"]["TAS_UID"] = "";
	$placeHoldersTASK["Japanese"]["TAS_UID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_TITLE"] = "TASタイトル";
	$fieldToolTipsTASK["Japanese"]["TAS_TITLE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_TITLE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DESCRIPTION"] = "TASの説明";
	$fieldToolTipsTASK["Japanese"]["TAS_DESCRIPTION"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DESCRIPTION"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DEF_TITLE"] = "TAS DEFタイトル";
	$fieldToolTipsTASK["Japanese"]["TAS_DEF_TITLE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DEF_TITLE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DEF_SUBJECT_MESSAGE"] = "TAS DEF件名のメッセージ";
	$fieldToolTipsTASK["Japanese"]["TAS_DEF_SUBJECT_MESSAGE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DEF_SUBJECT_MESSAGE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DEF_PROC_CODE"] = "TAS DEFのprocコード";
	$fieldToolTipsTASK["Japanese"]["TAS_DEF_PROC_CODE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DEF_PROC_CODE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DEF_MESSAGE"] = "TAS DEFメッセージ";
	$fieldToolTipsTASK["Japanese"]["TAS_DEF_MESSAGE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DEF_MESSAGE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DEF_DESCRIPTION"] = "TAS DEF説明";
	$fieldToolTipsTASK["Japanese"]["TAS_DEF_DESCRIPTION"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DEF_DESCRIPTION"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_TYPE"] = "TASタイプ";
	$fieldToolTipsTASK["Japanese"]["TAS_TYPE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_TYPE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DURATION"] = "TAS期間";
	$fieldToolTipsTASK["Japanese"]["TAS_DURATION"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DURATION"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DELAY_TYPE"] = "TAS遅延タイプ";
	$fieldToolTipsTASK["Japanese"]["TAS_DELAY_TYPE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DELAY_TYPE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_TEMPORIZER"] = "TAS temporizer";
	$fieldToolTipsTASK["Japanese"]["TAS_TEMPORIZER"] = "";
	$placeHoldersTASK["Japanese"]["TAS_TEMPORIZER"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_TYPE_DAY"] = "TAS型日";
	$fieldToolTipsTASK["Japanese"]["TAS_TYPE_DAY"] = "";
	$placeHoldersTASK["Japanese"]["TAS_TYPE_DAY"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_TIMEUNIT"] = "TASのTIMEUNIT";
	$fieldToolTipsTASK["Japanese"]["TAS_TIMEUNIT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_TIMEUNIT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_ALERT"] = "警告TAS";
	$fieldToolTipsTASK["Japanese"]["TAS_ALERT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_ALERT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_PRIORITY_VARIABLE"] = "TAS優先変数";
	$fieldToolTipsTASK["Japanese"]["TAS_PRIORITY_VARIABLE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_PRIORITY_VARIABLE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_ASSIGN_TYPE"] = "TASは、タイプを割り当てます";
	$fieldToolTipsTASK["Japanese"]["TAS_ASSIGN_TYPE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_ASSIGN_TYPE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_ASSIGN_VARIABLE"] = "TASは、変数を割り当てます";
	$fieldToolTipsTASK["Japanese"]["TAS_ASSIGN_VARIABLE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_ASSIGN_VARIABLE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_GROUP_VARIABLE"] = "TASグループ変数";
	$fieldToolTipsTASK["Japanese"]["TAS_GROUP_VARIABLE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_GROUP_VARIABLE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_MI_INSTANCE_VARIABLE"] = "TASマイルインスタンス変数";
	$fieldToolTipsTASK["Japanese"]["TAS_MI_INSTANCE_VARIABLE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_MI_INSTANCE_VARIABLE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_MI_COMPLETE_VARIABLE"] = "TASマイル完全な変数";
	$fieldToolTipsTASK["Japanese"]["TAS_MI_COMPLETE_VARIABLE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_MI_COMPLETE_VARIABLE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_ASSIGN_LOCATION"] = "TASは、場所を割り当てます";
	$fieldToolTipsTASK["Japanese"]["TAS_ASSIGN_LOCATION"] = "";
	$placeHoldersTASK["Japanese"]["TAS_ASSIGN_LOCATION"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_ASSIGN_LOCATION_ADHOC"] = "TASは、位置アドホックを割り当てます";
	$fieldToolTipsTASK["Japanese"]["TAS_ASSIGN_LOCATION_ADHOC"] = "";
	$placeHoldersTASK["Japanese"]["TAS_ASSIGN_LOCATION_ADHOC"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_TRANSFER_FLY"] = "TAS転送フライ";
	$fieldToolTipsTASK["Japanese"]["TAS_TRANSFER_FLY"] = "";
	$placeHoldersTASK["Japanese"]["TAS_TRANSFER_FLY"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_LAST_ASSIGNED"] = "最後に割り当てられたTAS";
	$fieldToolTipsTASK["Japanese"]["TAS_LAST_ASSIGNED"] = "";
	$placeHoldersTASK["Japanese"]["TAS_LAST_ASSIGNED"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_USER"] = "TASユーザー";
	$fieldToolTipsTASK["Japanese"]["TAS_USER"] = "";
	$placeHoldersTASK["Japanese"]["TAS_USER"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_CAN_UPLOAD"] = "TASは、アップロードすることができます";
	$fieldToolTipsTASK["Japanese"]["TAS_CAN_UPLOAD"] = "";
	$placeHoldersTASK["Japanese"]["TAS_CAN_UPLOAD"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_VIEW_UPLOAD"] = "TASビューのアップロード";
	$fieldToolTipsTASK["Japanese"]["TAS_VIEW_UPLOAD"] = "";
	$placeHoldersTASK["Japanese"]["TAS_VIEW_UPLOAD"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_VIEW_ADDITIONAL_DOCUMENTATION"] = "TASは、追加のドキュメントを表示します";
	$fieldToolTipsTASK["Japanese"]["TAS_VIEW_ADDITIONAL_DOCUMENTATION"] = "";
	$placeHoldersTASK["Japanese"]["TAS_VIEW_ADDITIONAL_DOCUMENTATION"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_CAN_CANCEL"] = "TASは取り消すことができます";
	$fieldToolTipsTASK["Japanese"]["TAS_CAN_CANCEL"] = "";
	$placeHoldersTASK["Japanese"]["TAS_CAN_CANCEL"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_OWNER_APP"] = "TASオーナーアプリ";
	$fieldToolTipsTASK["Japanese"]["TAS_OWNER_APP"] = "";
	$placeHoldersTASK["Japanese"]["TAS_OWNER_APP"] = "";
	$fieldLabelsTASK["Japanese"]["STG_UID"] = "STGのUID";
	$fieldToolTipsTASK["Japanese"]["STG_UID"] = "";
	$placeHoldersTASK["Japanese"]["STG_UID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_CAN_PAUSE"] = "TASは、一時停止することができます";
	$fieldToolTipsTASK["Japanese"]["TAS_CAN_PAUSE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_CAN_PAUSE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_CAN_SEND_MESSAGE"] = "TASは、メッセージを送信することができます";
	$fieldToolTipsTASK["Japanese"]["TAS_CAN_SEND_MESSAGE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_CAN_SEND_MESSAGE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_CAN_DELETE_DOCS"] = "TASは、ドキュメントを削除することができます";
	$fieldToolTipsTASK["Japanese"]["TAS_CAN_DELETE_DOCS"] = "";
	$placeHoldersTASK["Japanese"]["TAS_CAN_DELETE_DOCS"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_SELF_SERVICE"] = "TASセルフサービス";
	$fieldToolTipsTASK["Japanese"]["TAS_SELF_SERVICE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_SELF_SERVICE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_START"] = "TAS開始";
	$fieldToolTipsTASK["Japanese"]["TAS_START"] = "";
	$placeHoldersTASK["Japanese"]["TAS_START"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_TO_LAST_USER"] = "最後のユーザーへのTAS";
	$fieldToolTipsTASK["Japanese"]["TAS_TO_LAST_USER"] = "";
	$placeHoldersTASK["Japanese"]["TAS_TO_LAST_USER"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_SEND_LAST_EMAIL"] = "TASは、最後の電子メールを送信します";
	$fieldToolTipsTASK["Japanese"]["TAS_SEND_LAST_EMAIL"] = "";
	$placeHoldersTASK["Japanese"]["TAS_SEND_LAST_EMAIL"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DERIVATION"] = "TAS導出";
	$fieldToolTipsTASK["Japanese"]["TAS_DERIVATION"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DERIVATION"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_POSX"] = "TAS POSX";
	$fieldToolTipsTASK["Japanese"]["TAS_POSX"] = "";
	$placeHoldersTASK["Japanese"]["TAS_POSX"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_POSY"] = "TAS POSY";
	$fieldToolTipsTASK["Japanese"]["TAS_POSY"] = "";
	$placeHoldersTASK["Japanese"]["TAS_POSY"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_WIDTH"] = "幅TAS";
	$fieldToolTipsTASK["Japanese"]["TAS_WIDTH"] = "";
	$placeHoldersTASK["Japanese"]["TAS_WIDTH"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_HEIGHT"] = "TAS高さ";
	$fieldToolTipsTASK["Japanese"]["TAS_HEIGHT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_HEIGHT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_COLOR"] = "TAS色";
	$fieldToolTipsTASK["Japanese"]["TAS_COLOR"] = "";
	$placeHoldersTASK["Japanese"]["TAS_COLOR"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_EVN_UID"] = "TAS EVNのuid";
	$fieldToolTipsTASK["Japanese"]["TAS_EVN_UID"] = "";
	$placeHoldersTASK["Japanese"]["TAS_EVN_UID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_BOUNDARY"] = "境界TAS";
	$fieldToolTipsTASK["Japanese"]["TAS_BOUNDARY"] = "";
	$placeHoldersTASK["Japanese"]["TAS_BOUNDARY"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_DERIVATION_SCREEN_TPL"] = "TAS導出画面TPL";
	$fieldToolTipsTASK["Japanese"]["TAS_DERIVATION_SCREEN_TPL"] = "";
	$placeHoldersTASK["Japanese"]["TAS_DERIVATION_SCREEN_TPL"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_SELFSERVICE_TIMEOUT"] = "TASセルフサービスのタイムアウト";
	$fieldToolTipsTASK["Japanese"]["TAS_SELFSERVICE_TIMEOUT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_SELFSERVICE_TIMEOUT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_SELFSERVICE_TIME"] = "TASセルフサービス時間";
	$fieldToolTipsTASK["Japanese"]["TAS_SELFSERVICE_TIME"] = "";
	$placeHoldersTASK["Japanese"]["TAS_SELFSERVICE_TIME"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_SELFSERVICE_TIME_UNIT"] = "TASセルフサービス時間単位";
	$fieldToolTipsTASK["Japanese"]["TAS_SELFSERVICE_TIME_UNIT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_SELFSERVICE_TIME_UNIT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_SELFSERVICE_TRIGGER_UID"] = "TASセルフサービストリガUID";
	$fieldToolTipsTASK["Japanese"]["TAS_SELFSERVICE_TRIGGER_UID"] = "";
	$placeHoldersTASK["Japanese"]["TAS_SELFSERVICE_TRIGGER_UID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_SELFSERVICE_EXECUTION"] = "TASセルフサービスの実行";
	$fieldToolTipsTASK["Japanese"]["TAS_SELFSERVICE_EXECUTION"] = "";
	$placeHoldersTASK["Japanese"]["TAS_SELFSERVICE_EXECUTION"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_NOT_EMAIL_FROM_FORMAT"] = "TAS形式からメールしません";
	$fieldToolTipsTASK["Japanese"]["TAS_NOT_EMAIL_FROM_FORMAT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_NOT_EMAIL_FROM_FORMAT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsTASK["Japanese"]["TAS_ID"] = "";
	$placeHoldersTASK["Japanese"]["TAS_ID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_OFFLINE"] = "TAS OFFLINE";
	$fieldToolTipsTASK["Japanese"]["TAS_OFFLINE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_OFFLINE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_EMAIL_SERVER_UID"] = "TAS EMAIL SERVER UID";
	$fieldToolTipsTASK["Japanese"]["TAS_EMAIL_SERVER_UID"] = "";
	$placeHoldersTASK["Japanese"]["TAS_EMAIL_SERVER_UID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_AUTO_ROOT"] = "TAS AUTO ROOT";
	$fieldToolTipsTASK["Japanese"]["TAS_AUTO_ROOT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_AUTO_ROOT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_RECEIVE_SERVER_UID"] = "TAS RECEIVE SERVER UID";
	$fieldToolTipsTASK["Japanese"]["TAS_RECEIVE_SERVER_UID"] = "";
	$placeHoldersTASK["Japanese"]["TAS_RECEIVE_SERVER_UID"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_RECEIVE_LAST_EMAIL"] = "TAS RECEIVE LAST EMAIL";
	$fieldToolTipsTASK["Japanese"]["TAS_RECEIVE_LAST_EMAIL"] = "";
	$placeHoldersTASK["Japanese"]["TAS_RECEIVE_LAST_EMAIL"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_RECEIVE_EMAIL_FROM_FORMAT"] = "TAS RECEIVE EMAIL FROM FORMAT";
	$fieldToolTipsTASK["Japanese"]["TAS_RECEIVE_EMAIL_FROM_FORMAT"] = "";
	$placeHoldersTASK["Japanese"]["TAS_RECEIVE_EMAIL_FROM_FORMAT"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_RECEIVE_MESSAGE_TYPE"] = "TAS RECEIVE MESSAGE TYPE";
	$fieldToolTipsTASK["Japanese"]["TAS_RECEIVE_MESSAGE_TYPE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_RECEIVE_MESSAGE_TYPE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_RECEIVE_MESSAGE_TEMPLATE"] = "TAS RECEIVE MESSAGE TEMPLATE";
	$fieldToolTipsTASK["Japanese"]["TAS_RECEIVE_MESSAGE_TEMPLATE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_RECEIVE_MESSAGE_TEMPLATE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_RECEIVE_SUBJECT_MESSAGE"] = "TAS RECEIVE SUBJECT MESSAGE";
	$fieldToolTipsTASK["Japanese"]["TAS_RECEIVE_SUBJECT_MESSAGE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_RECEIVE_SUBJECT_MESSAGE"] = "";
	$fieldLabelsTASK["Japanese"]["TAS_RECEIVE_MESSAGE"] = "TAS RECEIVE MESSAGE";
	$fieldToolTipsTASK["Japanese"]["TAS_RECEIVE_MESSAGE"] = "";
	$placeHoldersTASK["Japanese"]["TAS_RECEIVE_MESSAGE"] = "";
	if (count($fieldToolTipsTASK["Japanese"]))
		$tdataTASK[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTASK["English"] = array();
	$fieldToolTipsTASK["English"] = array();
	$placeHoldersTASK["English"] = array();
	$pageTitlesTASK["English"] = array();
	$fieldLabelsTASK["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsTASK["English"]["PRO_UID"] = "";
	$placeHoldersTASK["English"]["PRO_UID"] = "";
	$fieldLabelsTASK["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsTASK["English"]["TAS_UID"] = "";
	$placeHoldersTASK["English"]["TAS_UID"] = "";
	$fieldLabelsTASK["English"]["TAS_TITLE"] = "TASタイトル";
	$fieldToolTipsTASK["English"]["TAS_TITLE"] = "";
	$placeHoldersTASK["English"]["TAS_TITLE"] = "";
	$fieldLabelsTASK["English"]["TAS_DESCRIPTION"] = "TASの説明";
	$fieldToolTipsTASK["English"]["TAS_DESCRIPTION"] = "";
	$placeHoldersTASK["English"]["TAS_DESCRIPTION"] = "";
	$fieldLabelsTASK["English"]["TAS_DEF_TITLE"] = "TAS DEFタイトル";
	$fieldToolTipsTASK["English"]["TAS_DEF_TITLE"] = "";
	$placeHoldersTASK["English"]["TAS_DEF_TITLE"] = "";
	$fieldLabelsTASK["English"]["TAS_DEF_SUBJECT_MESSAGE"] = "TAS DEF件名のメッセージ";
	$fieldToolTipsTASK["English"]["TAS_DEF_SUBJECT_MESSAGE"] = "";
	$placeHoldersTASK["English"]["TAS_DEF_SUBJECT_MESSAGE"] = "";
	$fieldLabelsTASK["English"]["TAS_DEF_PROC_CODE"] = "TAS DEFのprocコード";
	$fieldToolTipsTASK["English"]["TAS_DEF_PROC_CODE"] = "";
	$placeHoldersTASK["English"]["TAS_DEF_PROC_CODE"] = "";
	$fieldLabelsTASK["English"]["TAS_DEF_MESSAGE"] = "TAS DEFメッセージ";
	$fieldToolTipsTASK["English"]["TAS_DEF_MESSAGE"] = "";
	$placeHoldersTASK["English"]["TAS_DEF_MESSAGE"] = "";
	$fieldLabelsTASK["English"]["TAS_DEF_DESCRIPTION"] = "TAS DEF説明";
	$fieldToolTipsTASK["English"]["TAS_DEF_DESCRIPTION"] = "";
	$placeHoldersTASK["English"]["TAS_DEF_DESCRIPTION"] = "";
	$fieldLabelsTASK["English"]["TAS_TYPE"] = "TASタイプ";
	$fieldToolTipsTASK["English"]["TAS_TYPE"] = "";
	$placeHoldersTASK["English"]["TAS_TYPE"] = "";
	$fieldLabelsTASK["English"]["TAS_DURATION"] = "TAS期間";
	$fieldToolTipsTASK["English"]["TAS_DURATION"] = "";
	$placeHoldersTASK["English"]["TAS_DURATION"] = "";
	$fieldLabelsTASK["English"]["TAS_DELAY_TYPE"] = "TAS遅延タイプ";
	$fieldToolTipsTASK["English"]["TAS_DELAY_TYPE"] = "";
	$placeHoldersTASK["English"]["TAS_DELAY_TYPE"] = "";
	$fieldLabelsTASK["English"]["TAS_TEMPORIZER"] = "TAS temporizer";
	$fieldToolTipsTASK["English"]["TAS_TEMPORIZER"] = "";
	$placeHoldersTASK["English"]["TAS_TEMPORIZER"] = "";
	$fieldLabelsTASK["English"]["TAS_TYPE_DAY"] = "TAS型日";
	$fieldToolTipsTASK["English"]["TAS_TYPE_DAY"] = "";
	$placeHoldersTASK["English"]["TAS_TYPE_DAY"] = "";
	$fieldLabelsTASK["English"]["TAS_TIMEUNIT"] = "TASのTIMEUNIT";
	$fieldToolTipsTASK["English"]["TAS_TIMEUNIT"] = "";
	$placeHoldersTASK["English"]["TAS_TIMEUNIT"] = "";
	$fieldLabelsTASK["English"]["TAS_ALERT"] = "警告TAS";
	$fieldToolTipsTASK["English"]["TAS_ALERT"] = "";
	$placeHoldersTASK["English"]["TAS_ALERT"] = "";
	$fieldLabelsTASK["English"]["TAS_PRIORITY_VARIABLE"] = "TAS優先変数";
	$fieldToolTipsTASK["English"]["TAS_PRIORITY_VARIABLE"] = "";
	$placeHoldersTASK["English"]["TAS_PRIORITY_VARIABLE"] = "";
	$fieldLabelsTASK["English"]["TAS_ASSIGN_TYPE"] = "TASは、タイプを割り当てます";
	$fieldToolTipsTASK["English"]["TAS_ASSIGN_TYPE"] = "";
	$placeHoldersTASK["English"]["TAS_ASSIGN_TYPE"] = "";
	$fieldLabelsTASK["English"]["TAS_ASSIGN_VARIABLE"] = "TASは、変数を割り当てます";
	$fieldToolTipsTASK["English"]["TAS_ASSIGN_VARIABLE"] = "";
	$placeHoldersTASK["English"]["TAS_ASSIGN_VARIABLE"] = "";
	$fieldLabelsTASK["English"]["TAS_GROUP_VARIABLE"] = "TASグループ変数";
	$fieldToolTipsTASK["English"]["TAS_GROUP_VARIABLE"] = "";
	$placeHoldersTASK["English"]["TAS_GROUP_VARIABLE"] = "";
	$fieldLabelsTASK["English"]["TAS_MI_INSTANCE_VARIABLE"] = "TASマイルインスタンス変数";
	$fieldToolTipsTASK["English"]["TAS_MI_INSTANCE_VARIABLE"] = "";
	$placeHoldersTASK["English"]["TAS_MI_INSTANCE_VARIABLE"] = "";
	$fieldLabelsTASK["English"]["TAS_MI_COMPLETE_VARIABLE"] = "TASマイル完全な変数";
	$fieldToolTipsTASK["English"]["TAS_MI_COMPLETE_VARIABLE"] = "";
	$placeHoldersTASK["English"]["TAS_MI_COMPLETE_VARIABLE"] = "";
	$fieldLabelsTASK["English"]["TAS_ASSIGN_LOCATION"] = "TASは、場所を割り当てます";
	$fieldToolTipsTASK["English"]["TAS_ASSIGN_LOCATION"] = "";
	$placeHoldersTASK["English"]["TAS_ASSIGN_LOCATION"] = "";
	$fieldLabelsTASK["English"]["TAS_ASSIGN_LOCATION_ADHOC"] = "TASは、位置アドホックを割り当てます";
	$fieldToolTipsTASK["English"]["TAS_ASSIGN_LOCATION_ADHOC"] = "";
	$placeHoldersTASK["English"]["TAS_ASSIGN_LOCATION_ADHOC"] = "";
	$fieldLabelsTASK["English"]["TAS_TRANSFER_FLY"] = "TAS転送フライ";
	$fieldToolTipsTASK["English"]["TAS_TRANSFER_FLY"] = "";
	$placeHoldersTASK["English"]["TAS_TRANSFER_FLY"] = "";
	$fieldLabelsTASK["English"]["TAS_LAST_ASSIGNED"] = "最後に割り当てられたTAS";
	$fieldToolTipsTASK["English"]["TAS_LAST_ASSIGNED"] = "";
	$placeHoldersTASK["English"]["TAS_LAST_ASSIGNED"] = "";
	$fieldLabelsTASK["English"]["TAS_USER"] = "TASユーザー";
	$fieldToolTipsTASK["English"]["TAS_USER"] = "";
	$placeHoldersTASK["English"]["TAS_USER"] = "";
	$fieldLabelsTASK["English"]["TAS_CAN_UPLOAD"] = "TASは、アップロードすることができます";
	$fieldToolTipsTASK["English"]["TAS_CAN_UPLOAD"] = "";
	$placeHoldersTASK["English"]["TAS_CAN_UPLOAD"] = "";
	$fieldLabelsTASK["English"]["TAS_VIEW_UPLOAD"] = "TASビューのアップロード";
	$fieldToolTipsTASK["English"]["TAS_VIEW_UPLOAD"] = "";
	$placeHoldersTASK["English"]["TAS_VIEW_UPLOAD"] = "";
	$fieldLabelsTASK["English"]["TAS_VIEW_ADDITIONAL_DOCUMENTATION"] = "TASは、追加のドキュメントを表示します";
	$fieldToolTipsTASK["English"]["TAS_VIEW_ADDITIONAL_DOCUMENTATION"] = "";
	$placeHoldersTASK["English"]["TAS_VIEW_ADDITIONAL_DOCUMENTATION"] = "";
	$fieldLabelsTASK["English"]["TAS_CAN_CANCEL"] = "TASは取り消すことができます";
	$fieldToolTipsTASK["English"]["TAS_CAN_CANCEL"] = "";
	$placeHoldersTASK["English"]["TAS_CAN_CANCEL"] = "";
	$fieldLabelsTASK["English"]["TAS_OWNER_APP"] = "TASオーナーアプリ";
	$fieldToolTipsTASK["English"]["TAS_OWNER_APP"] = "";
	$placeHoldersTASK["English"]["TAS_OWNER_APP"] = "";
	$fieldLabelsTASK["English"]["STG_UID"] = "STGのUID";
	$fieldToolTipsTASK["English"]["STG_UID"] = "";
	$placeHoldersTASK["English"]["STG_UID"] = "";
	$fieldLabelsTASK["English"]["TAS_CAN_PAUSE"] = "TASは、一時停止することができます";
	$fieldToolTipsTASK["English"]["TAS_CAN_PAUSE"] = "";
	$placeHoldersTASK["English"]["TAS_CAN_PAUSE"] = "";
	$fieldLabelsTASK["English"]["TAS_CAN_SEND_MESSAGE"] = "TASは、メッセージを送信することができます";
	$fieldToolTipsTASK["English"]["TAS_CAN_SEND_MESSAGE"] = "";
	$placeHoldersTASK["English"]["TAS_CAN_SEND_MESSAGE"] = "";
	$fieldLabelsTASK["English"]["TAS_CAN_DELETE_DOCS"] = "TASは、ドキュメントを削除することができます";
	$fieldToolTipsTASK["English"]["TAS_CAN_DELETE_DOCS"] = "";
	$placeHoldersTASK["English"]["TAS_CAN_DELETE_DOCS"] = "";
	$fieldLabelsTASK["English"]["TAS_SELF_SERVICE"] = "TASセルフサービス";
	$fieldToolTipsTASK["English"]["TAS_SELF_SERVICE"] = "";
	$placeHoldersTASK["English"]["TAS_SELF_SERVICE"] = "";
	$fieldLabelsTASK["English"]["TAS_START"] = "TAS開始";
	$fieldToolTipsTASK["English"]["TAS_START"] = "";
	$placeHoldersTASK["English"]["TAS_START"] = "";
	$fieldLabelsTASK["English"]["TAS_TO_LAST_USER"] = "最後のユーザーへのTAS";
	$fieldToolTipsTASK["English"]["TAS_TO_LAST_USER"] = "";
	$placeHoldersTASK["English"]["TAS_TO_LAST_USER"] = "";
	$fieldLabelsTASK["English"]["TAS_SEND_LAST_EMAIL"] = "TASは、最後の電子メールを送信します";
	$fieldToolTipsTASK["English"]["TAS_SEND_LAST_EMAIL"] = "";
	$placeHoldersTASK["English"]["TAS_SEND_LAST_EMAIL"] = "";
	$fieldLabelsTASK["English"]["TAS_DERIVATION"] = "TAS導出";
	$fieldToolTipsTASK["English"]["TAS_DERIVATION"] = "";
	$placeHoldersTASK["English"]["TAS_DERIVATION"] = "";
	$fieldLabelsTASK["English"]["TAS_POSX"] = "TAS POSX";
	$fieldToolTipsTASK["English"]["TAS_POSX"] = "";
	$placeHoldersTASK["English"]["TAS_POSX"] = "";
	$fieldLabelsTASK["English"]["TAS_POSY"] = "TAS POSY";
	$fieldToolTipsTASK["English"]["TAS_POSY"] = "";
	$placeHoldersTASK["English"]["TAS_POSY"] = "";
	$fieldLabelsTASK["English"]["TAS_WIDTH"] = "幅TAS";
	$fieldToolTipsTASK["English"]["TAS_WIDTH"] = "";
	$placeHoldersTASK["English"]["TAS_WIDTH"] = "";
	$fieldLabelsTASK["English"]["TAS_HEIGHT"] = "TAS高さ";
	$fieldToolTipsTASK["English"]["TAS_HEIGHT"] = "";
	$placeHoldersTASK["English"]["TAS_HEIGHT"] = "";
	$fieldLabelsTASK["English"]["TAS_COLOR"] = "TAS色";
	$fieldToolTipsTASK["English"]["TAS_COLOR"] = "";
	$placeHoldersTASK["English"]["TAS_COLOR"] = "";
	$fieldLabelsTASK["English"]["TAS_EVN_UID"] = "TAS EVNのuid";
	$fieldToolTipsTASK["English"]["TAS_EVN_UID"] = "";
	$placeHoldersTASK["English"]["TAS_EVN_UID"] = "";
	$fieldLabelsTASK["English"]["TAS_BOUNDARY"] = "境界TAS";
	$fieldToolTipsTASK["English"]["TAS_BOUNDARY"] = "";
	$placeHoldersTASK["English"]["TAS_BOUNDARY"] = "";
	$fieldLabelsTASK["English"]["TAS_DERIVATION_SCREEN_TPL"] = "TAS導出画面TPL";
	$fieldToolTipsTASK["English"]["TAS_DERIVATION_SCREEN_TPL"] = "";
	$placeHoldersTASK["English"]["TAS_DERIVATION_SCREEN_TPL"] = "";
	$fieldLabelsTASK["English"]["TAS_SELFSERVICE_TIMEOUT"] = "TASセルフサービスのタイムアウト";
	$fieldToolTipsTASK["English"]["TAS_SELFSERVICE_TIMEOUT"] = "";
	$placeHoldersTASK["English"]["TAS_SELFSERVICE_TIMEOUT"] = "";
	$fieldLabelsTASK["English"]["TAS_SELFSERVICE_TIME"] = "TASセルフサービス時間";
	$fieldToolTipsTASK["English"]["TAS_SELFSERVICE_TIME"] = "";
	$placeHoldersTASK["English"]["TAS_SELFSERVICE_TIME"] = "";
	$fieldLabelsTASK["English"]["TAS_SELFSERVICE_TIME_UNIT"] = "TASセルフサービス時間単位";
	$fieldToolTipsTASK["English"]["TAS_SELFSERVICE_TIME_UNIT"] = "";
	$placeHoldersTASK["English"]["TAS_SELFSERVICE_TIME_UNIT"] = "";
	$fieldLabelsTASK["English"]["TAS_SELFSERVICE_TRIGGER_UID"] = "TASセルフサービストリガUID";
	$fieldToolTipsTASK["English"]["TAS_SELFSERVICE_TRIGGER_UID"] = "";
	$placeHoldersTASK["English"]["TAS_SELFSERVICE_TRIGGER_UID"] = "";
	$fieldLabelsTASK["English"]["TAS_SELFSERVICE_EXECUTION"] = "TASセルフサービスの実行";
	$fieldToolTipsTASK["English"]["TAS_SELFSERVICE_EXECUTION"] = "";
	$placeHoldersTASK["English"]["TAS_SELFSERVICE_EXECUTION"] = "";
	$fieldLabelsTASK["English"]["TAS_NOT_EMAIL_FROM_FORMAT"] = "TAS形式からメールしません";
	$fieldToolTipsTASK["English"]["TAS_NOT_EMAIL_FROM_FORMAT"] = "";
	$placeHoldersTASK["English"]["TAS_NOT_EMAIL_FROM_FORMAT"] = "";
	$fieldLabelsTASK["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsTASK["English"]["TAS_ID"] = "";
	$placeHoldersTASK["English"]["TAS_ID"] = "";
	$fieldLabelsTASK["English"]["TAS_OFFLINE"] = "TAS OFFLINE";
	$fieldToolTipsTASK["English"]["TAS_OFFLINE"] = "";
	$placeHoldersTASK["English"]["TAS_OFFLINE"] = "";
	$fieldLabelsTASK["English"]["TAS_EMAIL_SERVER_UID"] = "TAS EMAIL SERVER UID";
	$fieldToolTipsTASK["English"]["TAS_EMAIL_SERVER_UID"] = "";
	$placeHoldersTASK["English"]["TAS_EMAIL_SERVER_UID"] = "";
	$fieldLabelsTASK["English"]["TAS_AUTO_ROOT"] = "TAS AUTO ROOT";
	$fieldToolTipsTASK["English"]["TAS_AUTO_ROOT"] = "";
	$placeHoldersTASK["English"]["TAS_AUTO_ROOT"] = "";
	$fieldLabelsTASK["English"]["TAS_RECEIVE_SERVER_UID"] = "TAS RECEIVE SERVER UID";
	$fieldToolTipsTASK["English"]["TAS_RECEIVE_SERVER_UID"] = "";
	$placeHoldersTASK["English"]["TAS_RECEIVE_SERVER_UID"] = "";
	$fieldLabelsTASK["English"]["TAS_RECEIVE_LAST_EMAIL"] = "TAS RECEIVE LAST EMAIL";
	$fieldToolTipsTASK["English"]["TAS_RECEIVE_LAST_EMAIL"] = "";
	$placeHoldersTASK["English"]["TAS_RECEIVE_LAST_EMAIL"] = "";
	$fieldLabelsTASK["English"]["TAS_RECEIVE_EMAIL_FROM_FORMAT"] = "TAS RECEIVE EMAIL FROM FORMAT";
	$fieldToolTipsTASK["English"]["TAS_RECEIVE_EMAIL_FROM_FORMAT"] = "";
	$placeHoldersTASK["English"]["TAS_RECEIVE_EMAIL_FROM_FORMAT"] = "";
	$fieldLabelsTASK["English"]["TAS_RECEIVE_MESSAGE_TYPE"] = "TAS RECEIVE MESSAGE TYPE";
	$fieldToolTipsTASK["English"]["TAS_RECEIVE_MESSAGE_TYPE"] = "";
	$placeHoldersTASK["English"]["TAS_RECEIVE_MESSAGE_TYPE"] = "";
	$fieldLabelsTASK["English"]["TAS_RECEIVE_MESSAGE_TEMPLATE"] = "TAS RECEIVE MESSAGE TEMPLATE";
	$fieldToolTipsTASK["English"]["TAS_RECEIVE_MESSAGE_TEMPLATE"] = "";
	$placeHoldersTASK["English"]["TAS_RECEIVE_MESSAGE_TEMPLATE"] = "";
	$fieldLabelsTASK["English"]["TAS_RECEIVE_SUBJECT_MESSAGE"] = "TAS RECEIVE SUBJECT MESSAGE";
	$fieldToolTipsTASK["English"]["TAS_RECEIVE_SUBJECT_MESSAGE"] = "";
	$placeHoldersTASK["English"]["TAS_RECEIVE_SUBJECT_MESSAGE"] = "";
	$fieldLabelsTASK["English"]["TAS_RECEIVE_MESSAGE"] = "TAS RECEIVE MESSAGE";
	$fieldToolTipsTASK["English"]["TAS_RECEIVE_MESSAGE"] = "";
	$placeHoldersTASK["English"]["TAS_RECEIVE_MESSAGE"] = "";
	if (count($fieldToolTipsTASK["English"]))
		$tdataTASK[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTASK[""] = array();
	$fieldToolTipsTASK[""] = array();
	$placeHoldersTASK[""] = array();
	$pageTitlesTASK[""] = array();
	if (count($fieldToolTipsTASK[""]))
		$tdataTASK[".isUseToolTips"] = true;
}


	$tdataTASK[".NCSearch"] = true;



$tdataTASK[".shortTableName"] = "TASK";
$tdataTASK[".nSecOptions"] = 0;
$tdataTASK[".recsPerRowPrint"] = 1;
$tdataTASK[".mainTableOwnerID"] = "";
$tdataTASK[".moveNext"] = 0;
$tdataTASK[".entityType"] = 0;

$tdataTASK[".strOriginalTableName"] = "TASK";

	



$tdataTASK[".showAddInPopup"] = false;

$tdataTASK[".showEditInPopup"] = false;

$tdataTASK[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTASK[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTASK[".fieldsForRegister"] = array();
	
$tdataTASK[".listAjax"] = false;

	$tdataTASK[".audit"] = true;

	$tdataTASK[".locking"] = false;

$tdataTASK[".edit"] = true;
$tdataTASK[".afterEditAction"] = 1;
$tdataTASK[".closePopupAfterEdit"] = 1;
$tdataTASK[".afterEditActionDetTable"] = "";

$tdataTASK[".add"] = true;
$tdataTASK[".afterAddAction"] = 1;
$tdataTASK[".closePopupAfterAdd"] = 1;
$tdataTASK[".afterAddActionDetTable"] = "";

$tdataTASK[".list"] = true;

$tdataTASK[".inlineEdit"] = true;


$tdataTASK[".reorderRecordsByHeader"] = true;
$tdataTASK[".createSortByDropdown"] = true;
$tdataTASK[".strSortControlSettingsJSON"] = "";



$tdataTASK[".inlineAdd"] = true;
$tdataTASK[".view"] = true;

$tdataTASK[".import"] = true;

$tdataTASK[".exportTo"] = true;

$tdataTASK[".printFriendly"] = true;

$tdataTASK[".delete"] = true;

$tdataTASK[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataTASK[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataTASK[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataTASK[".searchSaving"] = false;
//

$tdataTASK[".showSearchPanel"] = true;
		$tdataTASK[".flexibleSearch"] = true;

$tdataTASK[".isUseAjaxSuggest"] = true;

$tdataTASK[".rowHighlite"] = true;



																

$tdataTASK[".ajaxCodeSnippetAdded"] = false;

$tdataTASK[".buttonsAdded"] = false;

$tdataTASK[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTASK[".isUseTimeForSearch"] = false;



$tdataTASK[".badgeColor"] = "00C2C5";


$tdataTASK[".allSearchFields"] = array();
$tdataTASK[".filterFields"] = array();
$tdataTASK[".requiredSearchFields"] = array();

$tdataTASK[".allSearchFields"][] = "PRO_UID";
	$tdataTASK[".allSearchFields"][] = "TAS_UID";
	$tdataTASK[".allSearchFields"][] = "TAS_TITLE";
	$tdataTASK[".allSearchFields"][] = "TAS_DESCRIPTION";
	$tdataTASK[".allSearchFields"][] = "TAS_DEF_TITLE";
	$tdataTASK[".allSearchFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
	$tdataTASK[".allSearchFields"][] = "TAS_DEF_PROC_CODE";
	$tdataTASK[".allSearchFields"][] = "TAS_DEF_MESSAGE";
	$tdataTASK[".allSearchFields"][] = "TAS_DEF_DESCRIPTION";
	$tdataTASK[".allSearchFields"][] = "TAS_TYPE";
	$tdataTASK[".allSearchFields"][] = "TAS_DURATION";
	$tdataTASK[".allSearchFields"][] = "TAS_DELAY_TYPE";
	$tdataTASK[".allSearchFields"][] = "TAS_TEMPORIZER";
	$tdataTASK[".allSearchFields"][] = "TAS_TYPE_DAY";
	$tdataTASK[".allSearchFields"][] = "TAS_TIMEUNIT";
	$tdataTASK[".allSearchFields"][] = "TAS_ALERT";
	$tdataTASK[".allSearchFields"][] = "TAS_PRIORITY_VARIABLE";
	$tdataTASK[".allSearchFields"][] = "TAS_ASSIGN_TYPE";
	$tdataTASK[".allSearchFields"][] = "TAS_ASSIGN_VARIABLE";
	$tdataTASK[".allSearchFields"][] = "TAS_GROUP_VARIABLE";
	$tdataTASK[".allSearchFields"][] = "TAS_MI_INSTANCE_VARIABLE";
	$tdataTASK[".allSearchFields"][] = "TAS_MI_COMPLETE_VARIABLE";
	$tdataTASK[".allSearchFields"][] = "TAS_ASSIGN_LOCATION";
	$tdataTASK[".allSearchFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
	$tdataTASK[".allSearchFields"][] = "TAS_TRANSFER_FLY";
	$tdataTASK[".allSearchFields"][] = "TAS_LAST_ASSIGNED";
	$tdataTASK[".allSearchFields"][] = "TAS_USER";
	$tdataTASK[".allSearchFields"][] = "TAS_CAN_UPLOAD";
	$tdataTASK[".allSearchFields"][] = "TAS_VIEW_UPLOAD";
	$tdataTASK[".allSearchFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
	$tdataTASK[".allSearchFields"][] = "TAS_CAN_CANCEL";
	$tdataTASK[".allSearchFields"][] = "TAS_OWNER_APP";
	$tdataTASK[".allSearchFields"][] = "STG_UID";
	$tdataTASK[".allSearchFields"][] = "TAS_CAN_PAUSE";
	$tdataTASK[".allSearchFields"][] = "TAS_CAN_SEND_MESSAGE";
	$tdataTASK[".allSearchFields"][] = "TAS_CAN_DELETE_DOCS";
	$tdataTASK[".allSearchFields"][] = "TAS_SELF_SERVICE";
	$tdataTASK[".allSearchFields"][] = "TAS_START";
	$tdataTASK[".allSearchFields"][] = "TAS_TO_LAST_USER";
	$tdataTASK[".allSearchFields"][] = "TAS_SEND_LAST_EMAIL";
	$tdataTASK[".allSearchFields"][] = "TAS_DERIVATION";
	$tdataTASK[".allSearchFields"][] = "TAS_POSX";
	$tdataTASK[".allSearchFields"][] = "TAS_POSY";
	$tdataTASK[".allSearchFields"][] = "TAS_WIDTH";
	$tdataTASK[".allSearchFields"][] = "TAS_HEIGHT";
	$tdataTASK[".allSearchFields"][] = "TAS_COLOR";
	$tdataTASK[".allSearchFields"][] = "TAS_EVN_UID";
	$tdataTASK[".allSearchFields"][] = "TAS_BOUNDARY";
	$tdataTASK[".allSearchFields"][] = "TAS_DERIVATION_SCREEN_TPL";
	$tdataTASK[".allSearchFields"][] = "TAS_SELFSERVICE_TIMEOUT";
	$tdataTASK[".allSearchFields"][] = "TAS_SELFSERVICE_TIME";
	$tdataTASK[".allSearchFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
	$tdataTASK[".allSearchFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
	$tdataTASK[".allSearchFields"][] = "TAS_SELFSERVICE_EXECUTION";
	$tdataTASK[".allSearchFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
	$tdataTASK[".allSearchFields"][] = "TAS_ID";
	$tdataTASK[".allSearchFields"][] = "TAS_OFFLINE";
	$tdataTASK[".allSearchFields"][] = "TAS_EMAIL_SERVER_UID";
	$tdataTASK[".allSearchFields"][] = "TAS_AUTO_ROOT";
	$tdataTASK[".allSearchFields"][] = "TAS_RECEIVE_SERVER_UID";
	$tdataTASK[".allSearchFields"][] = "TAS_RECEIVE_LAST_EMAIL";
	$tdataTASK[".allSearchFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
	$tdataTASK[".allSearchFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
	$tdataTASK[".allSearchFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
	$tdataTASK[".allSearchFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
	$tdataTASK[".allSearchFields"][] = "TAS_RECEIVE_MESSAGE";
	

$tdataTASK[".googleLikeFields"] = array();
$tdataTASK[".googleLikeFields"][] = "PRO_UID";
$tdataTASK[".googleLikeFields"][] = "TAS_UID";
$tdataTASK[".googleLikeFields"][] = "TAS_TITLE";
$tdataTASK[".googleLikeFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".googleLikeFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".googleLikeFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".googleLikeFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".googleLikeFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".googleLikeFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".googleLikeFields"][] = "TAS_TYPE";
$tdataTASK[".googleLikeFields"][] = "TAS_DURATION";
$tdataTASK[".googleLikeFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".googleLikeFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".googleLikeFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".googleLikeFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".googleLikeFields"][] = "TAS_ALERT";
$tdataTASK[".googleLikeFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".googleLikeFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".googleLikeFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".googleLikeFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".googleLikeFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".googleLikeFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".googleLikeFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".googleLikeFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".googleLikeFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".googleLikeFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".googleLikeFields"][] = "TAS_USER";
$tdataTASK[".googleLikeFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".googleLikeFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".googleLikeFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".googleLikeFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".googleLikeFields"][] = "TAS_OWNER_APP";
$tdataTASK[".googleLikeFields"][] = "STG_UID";
$tdataTASK[".googleLikeFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".googleLikeFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".googleLikeFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".googleLikeFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".googleLikeFields"][] = "TAS_START";
$tdataTASK[".googleLikeFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".googleLikeFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".googleLikeFields"][] = "TAS_DERIVATION";
$tdataTASK[".googleLikeFields"][] = "TAS_POSX";
$tdataTASK[".googleLikeFields"][] = "TAS_POSY";
$tdataTASK[".googleLikeFields"][] = "TAS_WIDTH";
$tdataTASK[".googleLikeFields"][] = "TAS_HEIGHT";
$tdataTASK[".googleLikeFields"][] = "TAS_COLOR";
$tdataTASK[".googleLikeFields"][] = "TAS_EVN_UID";
$tdataTASK[".googleLikeFields"][] = "TAS_BOUNDARY";
$tdataTASK[".googleLikeFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".googleLikeFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".googleLikeFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".googleLikeFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".googleLikeFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".googleLikeFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".googleLikeFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".googleLikeFields"][] = "TAS_ID";
$tdataTASK[".googleLikeFields"][] = "TAS_OFFLINE";
$tdataTASK[".googleLikeFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".googleLikeFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".googleLikeFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".googleLikeFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".googleLikeFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".googleLikeFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".googleLikeFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".googleLikeFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".googleLikeFields"][] = "TAS_RECEIVE_MESSAGE";


$tdataTASK[".advSearchFields"] = array();
$tdataTASK[".advSearchFields"][] = "PRO_UID";
$tdataTASK[".advSearchFields"][] = "TAS_UID";
$tdataTASK[".advSearchFields"][] = "TAS_TITLE";
$tdataTASK[".advSearchFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".advSearchFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".advSearchFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".advSearchFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".advSearchFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".advSearchFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".advSearchFields"][] = "TAS_TYPE";
$tdataTASK[".advSearchFields"][] = "TAS_DURATION";
$tdataTASK[".advSearchFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".advSearchFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".advSearchFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".advSearchFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".advSearchFields"][] = "TAS_ALERT";
$tdataTASK[".advSearchFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".advSearchFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".advSearchFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".advSearchFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".advSearchFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".advSearchFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".advSearchFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".advSearchFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".advSearchFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".advSearchFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".advSearchFields"][] = "TAS_USER";
$tdataTASK[".advSearchFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".advSearchFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".advSearchFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".advSearchFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".advSearchFields"][] = "TAS_OWNER_APP";
$tdataTASK[".advSearchFields"][] = "STG_UID";
$tdataTASK[".advSearchFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".advSearchFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".advSearchFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".advSearchFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".advSearchFields"][] = "TAS_START";
$tdataTASK[".advSearchFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".advSearchFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".advSearchFields"][] = "TAS_DERIVATION";
$tdataTASK[".advSearchFields"][] = "TAS_POSX";
$tdataTASK[".advSearchFields"][] = "TAS_POSY";
$tdataTASK[".advSearchFields"][] = "TAS_WIDTH";
$tdataTASK[".advSearchFields"][] = "TAS_HEIGHT";
$tdataTASK[".advSearchFields"][] = "TAS_COLOR";
$tdataTASK[".advSearchFields"][] = "TAS_EVN_UID";
$tdataTASK[".advSearchFields"][] = "TAS_BOUNDARY";
$tdataTASK[".advSearchFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".advSearchFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".advSearchFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".advSearchFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".advSearchFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".advSearchFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".advSearchFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".advSearchFields"][] = "TAS_ID";
$tdataTASK[".advSearchFields"][] = "TAS_OFFLINE";
$tdataTASK[".advSearchFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".advSearchFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".advSearchFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".advSearchFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".advSearchFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".advSearchFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".advSearchFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".advSearchFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".advSearchFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".tableType"] = "list";

$tdataTASK[".printerPageOrientation"] = 0;
$tdataTASK[".nPrinterPageScale"] = 100;

$tdataTASK[".nPrinterSplitRecords"] = 40;

$tdataTASK[".nPrinterPDFSplitRecords"] = 40;



$tdataTASK[".geocodingEnabled"] = false;





$tdataTASK[".listGridLayout"] = 3;


$tdataTASK[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataTASK[".pageSize"] = 20;

$tdataTASK[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTASK[".strOrderBy"] = $tstrOrderBy;

$tdataTASK[".orderindexes"] = array();

$tdataTASK[".sqlHead"] = "SELECT PRO_UID,  	TAS_UID,  	TAS_TITLE,  	TAS_DESCRIPTION,  	TAS_DEF_TITLE,  	TAS_DEF_SUBJECT_MESSAGE,  	TAS_DEF_PROC_CODE,  	TAS_DEF_MESSAGE,  	TAS_DEF_DESCRIPTION,  	TAS_TYPE,  	TAS_DURATION,  	TAS_DELAY_TYPE,  	TAS_TEMPORIZER,  	TAS_TYPE_DAY,  	TAS_TIMEUNIT,  	TAS_ALERT,  	TAS_PRIORITY_VARIABLE,  	TAS_ASSIGN_TYPE,  	TAS_ASSIGN_VARIABLE,  	TAS_GROUP_VARIABLE,  	TAS_MI_INSTANCE_VARIABLE,  	TAS_MI_COMPLETE_VARIABLE,  	TAS_ASSIGN_LOCATION,  	TAS_ASSIGN_LOCATION_ADHOC,  	TAS_TRANSFER_FLY,  	TAS_LAST_ASSIGNED,  	TAS_USER,  	TAS_CAN_UPLOAD,  	TAS_VIEW_UPLOAD,  	TAS_VIEW_ADDITIONAL_DOCUMENTATION,  	TAS_CAN_CANCEL,  	TAS_OWNER_APP,  	STG_UID,  	TAS_CAN_PAUSE,  	TAS_CAN_SEND_MESSAGE,  	TAS_CAN_DELETE_DOCS,  	TAS_SELF_SERVICE,  	TAS_START,  	TAS_TO_LAST_USER,  	TAS_SEND_LAST_EMAIL,  	TAS_DERIVATION,  	TAS_POSX,  	TAS_POSY,  	TAS_WIDTH,  	TAS_HEIGHT,  	TAS_COLOR,  	TAS_EVN_UID,  	TAS_BOUNDARY,  	TAS_DERIVATION_SCREEN_TPL,  	TAS_SELFSERVICE_TIMEOUT,  	TAS_SELFSERVICE_TIME,  	TAS_SELFSERVICE_TIME_UNIT,  	TAS_SELFSERVICE_TRIGGER_UID,  	TAS_SELFSERVICE_EXECUTION,  	TAS_NOT_EMAIL_FROM_FORMAT,  	TAS_ID,  	TAS_OFFLINE,  	TAS_EMAIL_SERVER_UID,  	TAS_AUTO_ROOT,  	TAS_RECEIVE_SERVER_UID,  	TAS_RECEIVE_LAST_EMAIL,  	TAS_RECEIVE_EMAIL_FROM_FORMAT,  	TAS_RECEIVE_MESSAGE_TYPE,  	TAS_RECEIVE_MESSAGE_TEMPLATE,  	TAS_RECEIVE_SUBJECT_MESSAGE,  	TAS_RECEIVE_MESSAGE";
$tdataTASK[".sqlFrom"] = "FROM TASK";
$tdataTASK[".sqlWhereExpr"] = "";
$tdataTASK[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTASK[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTASK[".arrGroupsPerPage"] = $arrGPP;

$tdataTASK[".highlightSearchResults"] = true;

$tableKeysTASK = array();
$tableKeysTASK[] = "TAS_UID";
$tdataTASK[".Keys"] = $tableKeysTASK;

$tdataTASK[".listFields"] = array();
$tdataTASK[".listFields"][] = "PRO_UID";
$tdataTASK[".listFields"][] = "TAS_UID";
$tdataTASK[".listFields"][] = "TAS_TITLE";
$tdataTASK[".listFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".listFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".listFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".listFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".listFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".listFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".listFields"][] = "TAS_TYPE";
$tdataTASK[".listFields"][] = "TAS_DURATION";
$tdataTASK[".listFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".listFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".listFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".listFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".listFields"][] = "TAS_ALERT";
$tdataTASK[".listFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".listFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".listFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".listFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".listFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".listFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".listFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".listFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".listFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".listFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".listFields"][] = "TAS_USER";
$tdataTASK[".listFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".listFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".listFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".listFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".listFields"][] = "TAS_OWNER_APP";
$tdataTASK[".listFields"][] = "STG_UID";
$tdataTASK[".listFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".listFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".listFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".listFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".listFields"][] = "TAS_START";
$tdataTASK[".listFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".listFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".listFields"][] = "TAS_DERIVATION";
$tdataTASK[".listFields"][] = "TAS_POSX";
$tdataTASK[".listFields"][] = "TAS_POSY";
$tdataTASK[".listFields"][] = "TAS_WIDTH";
$tdataTASK[".listFields"][] = "TAS_HEIGHT";
$tdataTASK[".listFields"][] = "TAS_COLOR";
$tdataTASK[".listFields"][] = "TAS_EVN_UID";
$tdataTASK[".listFields"][] = "TAS_BOUNDARY";
$tdataTASK[".listFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".listFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".listFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".listFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".listFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".listFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".listFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".listFields"][] = "TAS_ID";
$tdataTASK[".listFields"][] = "TAS_OFFLINE";
$tdataTASK[".listFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".listFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".listFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".listFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".listFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".listFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".listFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".listFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".listFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".hideMobileList"] = array();


$tdataTASK[".viewFields"] = array();
$tdataTASK[".viewFields"][] = "PRO_UID";
$tdataTASK[".viewFields"][] = "TAS_UID";
$tdataTASK[".viewFields"][] = "TAS_TITLE";
$tdataTASK[".viewFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".viewFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".viewFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".viewFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".viewFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".viewFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".viewFields"][] = "TAS_TYPE";
$tdataTASK[".viewFields"][] = "TAS_DURATION";
$tdataTASK[".viewFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".viewFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".viewFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".viewFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".viewFields"][] = "TAS_ALERT";
$tdataTASK[".viewFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".viewFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".viewFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".viewFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".viewFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".viewFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".viewFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".viewFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".viewFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".viewFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".viewFields"][] = "TAS_USER";
$tdataTASK[".viewFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".viewFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".viewFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".viewFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".viewFields"][] = "TAS_OWNER_APP";
$tdataTASK[".viewFields"][] = "STG_UID";
$tdataTASK[".viewFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".viewFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".viewFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".viewFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".viewFields"][] = "TAS_START";
$tdataTASK[".viewFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".viewFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".viewFields"][] = "TAS_DERIVATION";
$tdataTASK[".viewFields"][] = "TAS_POSX";
$tdataTASK[".viewFields"][] = "TAS_POSY";
$tdataTASK[".viewFields"][] = "TAS_WIDTH";
$tdataTASK[".viewFields"][] = "TAS_HEIGHT";
$tdataTASK[".viewFields"][] = "TAS_COLOR";
$tdataTASK[".viewFields"][] = "TAS_EVN_UID";
$tdataTASK[".viewFields"][] = "TAS_BOUNDARY";
$tdataTASK[".viewFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".viewFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".viewFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".viewFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".viewFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".viewFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".viewFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".viewFields"][] = "TAS_ID";
$tdataTASK[".viewFields"][] = "TAS_OFFLINE";
$tdataTASK[".viewFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".viewFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".viewFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".viewFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".viewFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".viewFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".viewFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".viewFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".viewFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".addFields"] = array();
$tdataTASK[".addFields"][] = "PRO_UID";
$tdataTASK[".addFields"][] = "TAS_UID";
$tdataTASK[".addFields"][] = "TAS_TITLE";
$tdataTASK[".addFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".addFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".addFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".addFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".addFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".addFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".addFields"][] = "TAS_TYPE";
$tdataTASK[".addFields"][] = "TAS_DURATION";
$tdataTASK[".addFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".addFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".addFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".addFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".addFields"][] = "TAS_ALERT";
$tdataTASK[".addFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".addFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".addFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".addFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".addFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".addFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".addFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".addFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".addFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".addFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".addFields"][] = "TAS_USER";
$tdataTASK[".addFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".addFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".addFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".addFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".addFields"][] = "TAS_OWNER_APP";
$tdataTASK[".addFields"][] = "STG_UID";
$tdataTASK[".addFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".addFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".addFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".addFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".addFields"][] = "TAS_START";
$tdataTASK[".addFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".addFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".addFields"][] = "TAS_DERIVATION";
$tdataTASK[".addFields"][] = "TAS_POSX";
$tdataTASK[".addFields"][] = "TAS_POSY";
$tdataTASK[".addFields"][] = "TAS_WIDTH";
$tdataTASK[".addFields"][] = "TAS_HEIGHT";
$tdataTASK[".addFields"][] = "TAS_COLOR";
$tdataTASK[".addFields"][] = "TAS_EVN_UID";
$tdataTASK[".addFields"][] = "TAS_BOUNDARY";
$tdataTASK[".addFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".addFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".addFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".addFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".addFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".addFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".addFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".addFields"][] = "TAS_OFFLINE";
$tdataTASK[".addFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".addFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".addFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".addFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".addFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".addFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".addFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".addFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".addFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".masterListFields"] = array();
$tdataTASK[".masterListFields"][] = "PRO_UID";
$tdataTASK[".masterListFields"][] = "TAS_UID";
$tdataTASK[".masterListFields"][] = "TAS_TITLE";
$tdataTASK[".masterListFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".masterListFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".masterListFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".masterListFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".masterListFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".masterListFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".masterListFields"][] = "TAS_TYPE";
$tdataTASK[".masterListFields"][] = "TAS_DURATION";
$tdataTASK[".masterListFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".masterListFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".masterListFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".masterListFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".masterListFields"][] = "TAS_ALERT";
$tdataTASK[".masterListFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".masterListFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".masterListFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".masterListFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".masterListFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".masterListFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".masterListFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".masterListFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".masterListFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".masterListFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".masterListFields"][] = "TAS_USER";
$tdataTASK[".masterListFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".masterListFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".masterListFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".masterListFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".masterListFields"][] = "TAS_OWNER_APP";
$tdataTASK[".masterListFields"][] = "STG_UID";
$tdataTASK[".masterListFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".masterListFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".masterListFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".masterListFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".masterListFields"][] = "TAS_START";
$tdataTASK[".masterListFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".masterListFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".masterListFields"][] = "TAS_DERIVATION";
$tdataTASK[".masterListFields"][] = "TAS_POSX";
$tdataTASK[".masterListFields"][] = "TAS_POSY";
$tdataTASK[".masterListFields"][] = "TAS_WIDTH";
$tdataTASK[".masterListFields"][] = "TAS_HEIGHT";
$tdataTASK[".masterListFields"][] = "TAS_COLOR";
$tdataTASK[".masterListFields"][] = "TAS_EVN_UID";
$tdataTASK[".masterListFields"][] = "TAS_BOUNDARY";
$tdataTASK[".masterListFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".masterListFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".masterListFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".masterListFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".masterListFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".masterListFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".masterListFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".masterListFields"][] = "TAS_ID";
$tdataTASK[".masterListFields"][] = "TAS_OFFLINE";
$tdataTASK[".masterListFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".masterListFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".masterListFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".masterListFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".masterListFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".masterListFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".masterListFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".masterListFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".masterListFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".inlineAddFields"] = array();
$tdataTASK[".inlineAddFields"][] = "PRO_UID";
$tdataTASK[".inlineAddFields"][] = "TAS_UID";
$tdataTASK[".inlineAddFields"][] = "TAS_TITLE";
$tdataTASK[".inlineAddFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".inlineAddFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".inlineAddFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".inlineAddFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".inlineAddFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".inlineAddFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".inlineAddFields"][] = "TAS_TYPE";
$tdataTASK[".inlineAddFields"][] = "TAS_DURATION";
$tdataTASK[".inlineAddFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".inlineAddFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".inlineAddFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".inlineAddFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".inlineAddFields"][] = "TAS_ALERT";
$tdataTASK[".inlineAddFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".inlineAddFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".inlineAddFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".inlineAddFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".inlineAddFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".inlineAddFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".inlineAddFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".inlineAddFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".inlineAddFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".inlineAddFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".inlineAddFields"][] = "TAS_USER";
$tdataTASK[".inlineAddFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".inlineAddFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".inlineAddFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".inlineAddFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".inlineAddFields"][] = "TAS_OWNER_APP";
$tdataTASK[".inlineAddFields"][] = "STG_UID";
$tdataTASK[".inlineAddFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".inlineAddFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".inlineAddFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".inlineAddFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".inlineAddFields"][] = "TAS_START";
$tdataTASK[".inlineAddFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".inlineAddFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".inlineAddFields"][] = "TAS_DERIVATION";
$tdataTASK[".inlineAddFields"][] = "TAS_POSX";
$tdataTASK[".inlineAddFields"][] = "TAS_POSY";
$tdataTASK[".inlineAddFields"][] = "TAS_WIDTH";
$tdataTASK[".inlineAddFields"][] = "TAS_HEIGHT";
$tdataTASK[".inlineAddFields"][] = "TAS_COLOR";
$tdataTASK[".inlineAddFields"][] = "TAS_EVN_UID";
$tdataTASK[".inlineAddFields"][] = "TAS_BOUNDARY";
$tdataTASK[".inlineAddFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".inlineAddFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".inlineAddFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".inlineAddFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".inlineAddFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".inlineAddFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".inlineAddFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".inlineAddFields"][] = "TAS_OFFLINE";
$tdataTASK[".inlineAddFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".inlineAddFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".inlineAddFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".inlineAddFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".inlineAddFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".inlineAddFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".inlineAddFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".inlineAddFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".inlineAddFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".editFields"] = array();
$tdataTASK[".editFields"][] = "PRO_UID";
$tdataTASK[".editFields"][] = "TAS_UID";
$tdataTASK[".editFields"][] = "TAS_TITLE";
$tdataTASK[".editFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".editFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".editFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".editFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".editFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".editFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".editFields"][] = "TAS_TYPE";
$tdataTASK[".editFields"][] = "TAS_DURATION";
$tdataTASK[".editFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".editFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".editFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".editFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".editFields"][] = "TAS_ALERT";
$tdataTASK[".editFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".editFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".editFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".editFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".editFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".editFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".editFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".editFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".editFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".editFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".editFields"][] = "TAS_USER";
$tdataTASK[".editFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".editFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".editFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".editFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".editFields"][] = "TAS_OWNER_APP";
$tdataTASK[".editFields"][] = "STG_UID";
$tdataTASK[".editFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".editFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".editFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".editFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".editFields"][] = "TAS_START";
$tdataTASK[".editFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".editFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".editFields"][] = "TAS_DERIVATION";
$tdataTASK[".editFields"][] = "TAS_POSX";
$tdataTASK[".editFields"][] = "TAS_POSY";
$tdataTASK[".editFields"][] = "TAS_WIDTH";
$tdataTASK[".editFields"][] = "TAS_HEIGHT";
$tdataTASK[".editFields"][] = "TAS_COLOR";
$tdataTASK[".editFields"][] = "TAS_EVN_UID";
$tdataTASK[".editFields"][] = "TAS_BOUNDARY";
$tdataTASK[".editFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".editFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".editFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".editFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".editFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".editFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".editFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".editFields"][] = "TAS_OFFLINE";
$tdataTASK[".editFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".editFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".editFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".editFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".editFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".editFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".editFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".editFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".editFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".inlineEditFields"] = array();
$tdataTASK[".inlineEditFields"][] = "PRO_UID";
$tdataTASK[".inlineEditFields"][] = "TAS_UID";
$tdataTASK[".inlineEditFields"][] = "TAS_TITLE";
$tdataTASK[".inlineEditFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".inlineEditFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".inlineEditFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".inlineEditFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".inlineEditFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".inlineEditFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".inlineEditFields"][] = "TAS_TYPE";
$tdataTASK[".inlineEditFields"][] = "TAS_DURATION";
$tdataTASK[".inlineEditFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".inlineEditFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".inlineEditFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".inlineEditFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".inlineEditFields"][] = "TAS_ALERT";
$tdataTASK[".inlineEditFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".inlineEditFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".inlineEditFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".inlineEditFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".inlineEditFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".inlineEditFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".inlineEditFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".inlineEditFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".inlineEditFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".inlineEditFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".inlineEditFields"][] = "TAS_USER";
$tdataTASK[".inlineEditFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".inlineEditFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".inlineEditFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".inlineEditFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".inlineEditFields"][] = "TAS_OWNER_APP";
$tdataTASK[".inlineEditFields"][] = "STG_UID";
$tdataTASK[".inlineEditFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".inlineEditFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".inlineEditFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".inlineEditFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".inlineEditFields"][] = "TAS_START";
$tdataTASK[".inlineEditFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".inlineEditFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".inlineEditFields"][] = "TAS_DERIVATION";
$tdataTASK[".inlineEditFields"][] = "TAS_POSX";
$tdataTASK[".inlineEditFields"][] = "TAS_POSY";
$tdataTASK[".inlineEditFields"][] = "TAS_WIDTH";
$tdataTASK[".inlineEditFields"][] = "TAS_HEIGHT";
$tdataTASK[".inlineEditFields"][] = "TAS_COLOR";
$tdataTASK[".inlineEditFields"][] = "TAS_EVN_UID";
$tdataTASK[".inlineEditFields"][] = "TAS_BOUNDARY";
$tdataTASK[".inlineEditFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".inlineEditFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".inlineEditFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".inlineEditFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".inlineEditFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".inlineEditFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".inlineEditFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".inlineEditFields"][] = "TAS_OFFLINE";
$tdataTASK[".inlineEditFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".inlineEditFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".inlineEditFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".inlineEditFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".inlineEditFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".inlineEditFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".inlineEditFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".inlineEditFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".inlineEditFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".updateSelectedFields"] = array();
$tdataTASK[".updateSelectedFields"][] = "PRO_UID";
$tdataTASK[".updateSelectedFields"][] = "TAS_UID";
$tdataTASK[".updateSelectedFields"][] = "TAS_TITLE";
$tdataTASK[".updateSelectedFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".updateSelectedFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".updateSelectedFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".updateSelectedFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".updateSelectedFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".updateSelectedFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".updateSelectedFields"][] = "TAS_TYPE";
$tdataTASK[".updateSelectedFields"][] = "TAS_DURATION";
$tdataTASK[".updateSelectedFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".updateSelectedFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".updateSelectedFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".updateSelectedFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".updateSelectedFields"][] = "TAS_ALERT";
$tdataTASK[".updateSelectedFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".updateSelectedFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".updateSelectedFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".updateSelectedFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".updateSelectedFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".updateSelectedFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".updateSelectedFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".updateSelectedFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".updateSelectedFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".updateSelectedFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".updateSelectedFields"][] = "TAS_USER";
$tdataTASK[".updateSelectedFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".updateSelectedFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".updateSelectedFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".updateSelectedFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".updateSelectedFields"][] = "TAS_OWNER_APP";
$tdataTASK[".updateSelectedFields"][] = "STG_UID";
$tdataTASK[".updateSelectedFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".updateSelectedFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".updateSelectedFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".updateSelectedFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".updateSelectedFields"][] = "TAS_START";
$tdataTASK[".updateSelectedFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".updateSelectedFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".updateSelectedFields"][] = "TAS_DERIVATION";
$tdataTASK[".updateSelectedFields"][] = "TAS_POSX";
$tdataTASK[".updateSelectedFields"][] = "TAS_POSY";
$tdataTASK[".updateSelectedFields"][] = "TAS_WIDTH";
$tdataTASK[".updateSelectedFields"][] = "TAS_HEIGHT";
$tdataTASK[".updateSelectedFields"][] = "TAS_COLOR";
$tdataTASK[".updateSelectedFields"][] = "TAS_EVN_UID";
$tdataTASK[".updateSelectedFields"][] = "TAS_BOUNDARY";
$tdataTASK[".updateSelectedFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".updateSelectedFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".updateSelectedFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".updateSelectedFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".updateSelectedFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".updateSelectedFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".updateSelectedFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".updateSelectedFields"][] = "TAS_OFFLINE";
$tdataTASK[".updateSelectedFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".updateSelectedFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".updateSelectedFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".updateSelectedFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".updateSelectedFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".updateSelectedFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".updateSelectedFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".updateSelectedFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".updateSelectedFields"][] = "TAS_RECEIVE_MESSAGE";


$tdataTASK[".exportFields"] = array();
$tdataTASK[".exportFields"][] = "PRO_UID";
$tdataTASK[".exportFields"][] = "TAS_UID";
$tdataTASK[".exportFields"][] = "TAS_TITLE";
$tdataTASK[".exportFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".exportFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".exportFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".exportFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".exportFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".exportFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".exportFields"][] = "TAS_TYPE";
$tdataTASK[".exportFields"][] = "TAS_DURATION";
$tdataTASK[".exportFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".exportFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".exportFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".exportFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".exportFields"][] = "TAS_ALERT";
$tdataTASK[".exportFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".exportFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".exportFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".exportFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".exportFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".exportFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".exportFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".exportFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".exportFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".exportFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".exportFields"][] = "TAS_USER";
$tdataTASK[".exportFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".exportFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".exportFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".exportFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".exportFields"][] = "TAS_OWNER_APP";
$tdataTASK[".exportFields"][] = "STG_UID";
$tdataTASK[".exportFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".exportFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".exportFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".exportFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".exportFields"][] = "TAS_START";
$tdataTASK[".exportFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".exportFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".exportFields"][] = "TAS_DERIVATION";
$tdataTASK[".exportFields"][] = "TAS_POSX";
$tdataTASK[".exportFields"][] = "TAS_POSY";
$tdataTASK[".exportFields"][] = "TAS_WIDTH";
$tdataTASK[".exportFields"][] = "TAS_HEIGHT";
$tdataTASK[".exportFields"][] = "TAS_COLOR";
$tdataTASK[".exportFields"][] = "TAS_EVN_UID";
$tdataTASK[".exportFields"][] = "TAS_BOUNDARY";
$tdataTASK[".exportFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".exportFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".exportFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".exportFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".exportFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".exportFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".exportFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".exportFields"][] = "TAS_ID";
$tdataTASK[".exportFields"][] = "TAS_OFFLINE";
$tdataTASK[".exportFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".exportFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".exportFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".exportFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".exportFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".exportFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".exportFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".exportFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".exportFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".importFields"] = array();
$tdataTASK[".importFields"][] = "PRO_UID";
$tdataTASK[".importFields"][] = "TAS_UID";
$tdataTASK[".importFields"][] = "TAS_TITLE";
$tdataTASK[".importFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".importFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".importFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".importFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".importFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".importFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".importFields"][] = "TAS_TYPE";
$tdataTASK[".importFields"][] = "TAS_DURATION";
$tdataTASK[".importFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".importFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".importFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".importFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".importFields"][] = "TAS_ALERT";
$tdataTASK[".importFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".importFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".importFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".importFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".importFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".importFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".importFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".importFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".importFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".importFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".importFields"][] = "TAS_USER";
$tdataTASK[".importFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".importFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".importFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".importFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".importFields"][] = "TAS_OWNER_APP";
$tdataTASK[".importFields"][] = "STG_UID";
$tdataTASK[".importFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".importFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".importFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".importFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".importFields"][] = "TAS_START";
$tdataTASK[".importFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".importFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".importFields"][] = "TAS_DERIVATION";
$tdataTASK[".importFields"][] = "TAS_POSX";
$tdataTASK[".importFields"][] = "TAS_POSY";
$tdataTASK[".importFields"][] = "TAS_WIDTH";
$tdataTASK[".importFields"][] = "TAS_HEIGHT";
$tdataTASK[".importFields"][] = "TAS_COLOR";
$tdataTASK[".importFields"][] = "TAS_EVN_UID";
$tdataTASK[".importFields"][] = "TAS_BOUNDARY";
$tdataTASK[".importFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".importFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".importFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".importFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".importFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".importFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".importFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".importFields"][] = "TAS_ID";
$tdataTASK[".importFields"][] = "TAS_OFFLINE";
$tdataTASK[".importFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".importFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".importFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".importFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".importFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".importFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".importFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".importFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".importFields"][] = "TAS_RECEIVE_MESSAGE";

$tdataTASK[".printFields"] = array();
$tdataTASK[".printFields"][] = "PRO_UID";
$tdataTASK[".printFields"][] = "TAS_UID";
$tdataTASK[".printFields"][] = "TAS_TITLE";
$tdataTASK[".printFields"][] = "TAS_DESCRIPTION";
$tdataTASK[".printFields"][] = "TAS_DEF_TITLE";
$tdataTASK[".printFields"][] = "TAS_DEF_SUBJECT_MESSAGE";
$tdataTASK[".printFields"][] = "TAS_DEF_PROC_CODE";
$tdataTASK[".printFields"][] = "TAS_DEF_MESSAGE";
$tdataTASK[".printFields"][] = "TAS_DEF_DESCRIPTION";
$tdataTASK[".printFields"][] = "TAS_TYPE";
$tdataTASK[".printFields"][] = "TAS_DURATION";
$tdataTASK[".printFields"][] = "TAS_DELAY_TYPE";
$tdataTASK[".printFields"][] = "TAS_TEMPORIZER";
$tdataTASK[".printFields"][] = "TAS_TYPE_DAY";
$tdataTASK[".printFields"][] = "TAS_TIMEUNIT";
$tdataTASK[".printFields"][] = "TAS_ALERT";
$tdataTASK[".printFields"][] = "TAS_PRIORITY_VARIABLE";
$tdataTASK[".printFields"][] = "TAS_ASSIGN_TYPE";
$tdataTASK[".printFields"][] = "TAS_ASSIGN_VARIABLE";
$tdataTASK[".printFields"][] = "TAS_GROUP_VARIABLE";
$tdataTASK[".printFields"][] = "TAS_MI_INSTANCE_VARIABLE";
$tdataTASK[".printFields"][] = "TAS_MI_COMPLETE_VARIABLE";
$tdataTASK[".printFields"][] = "TAS_ASSIGN_LOCATION";
$tdataTASK[".printFields"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$tdataTASK[".printFields"][] = "TAS_TRANSFER_FLY";
$tdataTASK[".printFields"][] = "TAS_LAST_ASSIGNED";
$tdataTASK[".printFields"][] = "TAS_USER";
$tdataTASK[".printFields"][] = "TAS_CAN_UPLOAD";
$tdataTASK[".printFields"][] = "TAS_VIEW_UPLOAD";
$tdataTASK[".printFields"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$tdataTASK[".printFields"][] = "TAS_CAN_CANCEL";
$tdataTASK[".printFields"][] = "TAS_OWNER_APP";
$tdataTASK[".printFields"][] = "STG_UID";
$tdataTASK[".printFields"][] = "TAS_CAN_PAUSE";
$tdataTASK[".printFields"][] = "TAS_CAN_SEND_MESSAGE";
$tdataTASK[".printFields"][] = "TAS_CAN_DELETE_DOCS";
$tdataTASK[".printFields"][] = "TAS_SELF_SERVICE";
$tdataTASK[".printFields"][] = "TAS_START";
$tdataTASK[".printFields"][] = "TAS_TO_LAST_USER";
$tdataTASK[".printFields"][] = "TAS_SEND_LAST_EMAIL";
$tdataTASK[".printFields"][] = "TAS_DERIVATION";
$tdataTASK[".printFields"][] = "TAS_POSX";
$tdataTASK[".printFields"][] = "TAS_POSY";
$tdataTASK[".printFields"][] = "TAS_WIDTH";
$tdataTASK[".printFields"][] = "TAS_HEIGHT";
$tdataTASK[".printFields"][] = "TAS_COLOR";
$tdataTASK[".printFields"][] = "TAS_EVN_UID";
$tdataTASK[".printFields"][] = "TAS_BOUNDARY";
$tdataTASK[".printFields"][] = "TAS_DERIVATION_SCREEN_TPL";
$tdataTASK[".printFields"][] = "TAS_SELFSERVICE_TIMEOUT";
$tdataTASK[".printFields"][] = "TAS_SELFSERVICE_TIME";
$tdataTASK[".printFields"][] = "TAS_SELFSERVICE_TIME_UNIT";
$tdataTASK[".printFields"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$tdataTASK[".printFields"][] = "TAS_SELFSERVICE_EXECUTION";
$tdataTASK[".printFields"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$tdataTASK[".printFields"][] = "TAS_ID";
$tdataTASK[".printFields"][] = "TAS_OFFLINE";
$tdataTASK[".printFields"][] = "TAS_EMAIL_SERVER_UID";
$tdataTASK[".printFields"][] = "TAS_AUTO_ROOT";
$tdataTASK[".printFields"][] = "TAS_RECEIVE_SERVER_UID";
$tdataTASK[".printFields"][] = "TAS_RECEIVE_LAST_EMAIL";
$tdataTASK[".printFields"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$tdataTASK[".printFields"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$tdataTASK[".printFields"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$tdataTASK[".printFields"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$tdataTASK[".printFields"][] = "TAS_RECEIVE_MESSAGE";

//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","PRO_UID");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_UID");
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

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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
	$edata["LookupTable"] = "CONTENT11";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CON_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CON_VALUE";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_UID"] = $fdata;
//	TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_TITLE";
	$fdata["GoodName"] = "TAS_TITLE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_TITLE");
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

		$fdata["strField"] = "TAS_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_TITLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_TITLE"] = $fdata;
//	TAS_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAS_DESCRIPTION";
	$fdata["GoodName"] = "TAS_DESCRIPTION";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DESCRIPTION");
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

		$fdata["strField"] = "TAS_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DESCRIPTION";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DESCRIPTION"] = $fdata;
//	TAS_DEF_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TAS_DEF_TITLE";
	$fdata["GoodName"] = "TAS_DEF_TITLE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DEF_TITLE");
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

		$fdata["strField"] = "TAS_DEF_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DEF_TITLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DEF_TITLE"] = $fdata;
//	TAS_DEF_SUBJECT_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TAS_DEF_SUBJECT_MESSAGE";
	$fdata["GoodName"] = "TAS_DEF_SUBJECT_MESSAGE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DEF_SUBJECT_MESSAGE");
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

		$fdata["strField"] = "TAS_DEF_SUBJECT_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DEF_SUBJECT_MESSAGE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DEF_SUBJECT_MESSAGE"] = $fdata;
//	TAS_DEF_PROC_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TAS_DEF_PROC_CODE";
	$fdata["GoodName"] = "TAS_DEF_PROC_CODE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DEF_PROC_CODE");
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

		$fdata["strField"] = "TAS_DEF_PROC_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DEF_PROC_CODE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DEF_PROC_CODE"] = $fdata;
//	TAS_DEF_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TAS_DEF_MESSAGE";
	$fdata["GoodName"] = "TAS_DEF_MESSAGE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DEF_MESSAGE");
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

		$fdata["strField"] = "TAS_DEF_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DEF_MESSAGE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DEF_MESSAGE"] = $fdata;
//	TAS_DEF_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TAS_DEF_DESCRIPTION";
	$fdata["GoodName"] = "TAS_DEF_DESCRIPTION";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DEF_DESCRIPTION");
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

		$fdata["strField"] = "TAS_DEF_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DEF_DESCRIPTION";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DEF_DESCRIPTION"] = $fdata;
//	TAS_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TAS_TYPE";
	$fdata["GoodName"] = "TAS_TYPE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_TYPE");
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

		$fdata["strField"] = "TAS_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_TYPE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_TYPE"] = $fdata;
//	TAS_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TAS_DURATION";
	$fdata["GoodName"] = "TAS_DURATION";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DURATION");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "TAS_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DURATION";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DURATION"] = $fdata;
//	TAS_DELAY_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TAS_DELAY_TYPE";
	$fdata["GoodName"] = "TAS_DELAY_TYPE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DELAY_TYPE");
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

		$fdata["strField"] = "TAS_DELAY_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DELAY_TYPE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DELAY_TYPE"] = $fdata;
//	TAS_TEMPORIZER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TAS_TEMPORIZER";
	$fdata["GoodName"] = "TAS_TEMPORIZER";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_TEMPORIZER");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "TAS_TEMPORIZER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_TEMPORIZER";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_TEMPORIZER"] = $fdata;
//	TAS_TYPE_DAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TAS_TYPE_DAY";
	$fdata["GoodName"] = "TAS_TYPE_DAY";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_TYPE_DAY");
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

		$fdata["strField"] = "TAS_TYPE_DAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_TYPE_DAY";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_TYPE_DAY"] = $fdata;
//	TAS_TIMEUNIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "TAS_TIMEUNIT";
	$fdata["GoodName"] = "TAS_TIMEUNIT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_TIMEUNIT");
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

		$fdata["strField"] = "TAS_TIMEUNIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_TIMEUNIT";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_TIMEUNIT"] = $fdata;
//	TAS_ALERT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "TAS_ALERT";
	$fdata["GoodName"] = "TAS_ALERT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_ALERT");
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

		$fdata["strField"] = "TAS_ALERT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_ALERT";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_ALERT"] = $fdata;
//	TAS_PRIORITY_VARIABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "TAS_PRIORITY_VARIABLE";
	$fdata["GoodName"] = "TAS_PRIORITY_VARIABLE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_PRIORITY_VARIABLE");
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

		$fdata["strField"] = "TAS_PRIORITY_VARIABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_PRIORITY_VARIABLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_PRIORITY_VARIABLE"] = $fdata;
//	TAS_ASSIGN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TAS_ASSIGN_TYPE";
	$fdata["GoodName"] = "TAS_ASSIGN_TYPE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_ASSIGN_TYPE");
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

		$fdata["strField"] = "TAS_ASSIGN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_ASSIGN_TYPE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_ASSIGN_TYPE"] = $fdata;
//	TAS_ASSIGN_VARIABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TAS_ASSIGN_VARIABLE";
	$fdata["GoodName"] = "TAS_ASSIGN_VARIABLE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_ASSIGN_VARIABLE");
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

		$fdata["strField"] = "TAS_ASSIGN_VARIABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_ASSIGN_VARIABLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_ASSIGN_VARIABLE"] = $fdata;
//	TAS_GROUP_VARIABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "TAS_GROUP_VARIABLE";
	$fdata["GoodName"] = "TAS_GROUP_VARIABLE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_GROUP_VARIABLE");
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

		$fdata["strField"] = "TAS_GROUP_VARIABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_GROUP_VARIABLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_GROUP_VARIABLE"] = $fdata;
//	TAS_MI_INSTANCE_VARIABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TAS_MI_INSTANCE_VARIABLE";
	$fdata["GoodName"] = "TAS_MI_INSTANCE_VARIABLE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_MI_INSTANCE_VARIABLE");
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

		$fdata["strField"] = "TAS_MI_INSTANCE_VARIABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_MI_INSTANCE_VARIABLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_MI_INSTANCE_VARIABLE"] = $fdata;
//	TAS_MI_COMPLETE_VARIABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TAS_MI_COMPLETE_VARIABLE";
	$fdata["GoodName"] = "TAS_MI_COMPLETE_VARIABLE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_MI_COMPLETE_VARIABLE");
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

		$fdata["strField"] = "TAS_MI_COMPLETE_VARIABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_MI_COMPLETE_VARIABLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_MI_COMPLETE_VARIABLE"] = $fdata;
//	TAS_ASSIGN_LOCATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "TAS_ASSIGN_LOCATION";
	$fdata["GoodName"] = "TAS_ASSIGN_LOCATION";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_ASSIGN_LOCATION");
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

		$fdata["strField"] = "TAS_ASSIGN_LOCATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_ASSIGN_LOCATION";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_ASSIGN_LOCATION"] = $fdata;
//	TAS_ASSIGN_LOCATION_ADHOC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "TAS_ASSIGN_LOCATION_ADHOC";
	$fdata["GoodName"] = "TAS_ASSIGN_LOCATION_ADHOC";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_ASSIGN_LOCATION_ADHOC");
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

		$fdata["strField"] = "TAS_ASSIGN_LOCATION_ADHOC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_ASSIGN_LOCATION_ADHOC";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_ASSIGN_LOCATION_ADHOC"] = $fdata;
//	TAS_TRANSFER_FLY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TAS_TRANSFER_FLY";
	$fdata["GoodName"] = "TAS_TRANSFER_FLY";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_TRANSFER_FLY");
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

		$fdata["strField"] = "TAS_TRANSFER_FLY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_TRANSFER_FLY";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_TRANSFER_FLY"] = $fdata;
//	TAS_LAST_ASSIGNED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "TAS_LAST_ASSIGNED";
	$fdata["GoodName"] = "TAS_LAST_ASSIGNED";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_LAST_ASSIGNED");
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

		$fdata["strField"] = "TAS_LAST_ASSIGNED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_LAST_ASSIGNED";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_LAST_ASSIGNED"] = $fdata;
//	TAS_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "TAS_USER";
	$fdata["GoodName"] = "TAS_USER";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_USER");
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

		$fdata["strField"] = "TAS_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_USER";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_USER"] = $fdata;
//	TAS_CAN_UPLOAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "TAS_CAN_UPLOAD";
	$fdata["GoodName"] = "TAS_CAN_UPLOAD";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_CAN_UPLOAD");
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

		$fdata["strField"] = "TAS_CAN_UPLOAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_CAN_UPLOAD";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_CAN_UPLOAD"] = $fdata;
//	TAS_VIEW_UPLOAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "TAS_VIEW_UPLOAD";
	$fdata["GoodName"] = "TAS_VIEW_UPLOAD";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_VIEW_UPLOAD");
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

		$fdata["strField"] = "TAS_VIEW_UPLOAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_VIEW_UPLOAD";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_VIEW_UPLOAD"] = $fdata;
//	TAS_VIEW_ADDITIONAL_DOCUMENTATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
	$fdata["GoodName"] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_VIEW_ADDITIONAL_DOCUMENTATION");
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

		$fdata["strField"] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_VIEW_ADDITIONAL_DOCUMENTATION"] = $fdata;
//	TAS_CAN_CANCEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TAS_CAN_CANCEL";
	$fdata["GoodName"] = "TAS_CAN_CANCEL";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_CAN_CANCEL");
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

		$fdata["strField"] = "TAS_CAN_CANCEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_CAN_CANCEL";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_CAN_CANCEL"] = $fdata;
//	TAS_OWNER_APP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "TAS_OWNER_APP";
	$fdata["GoodName"] = "TAS_OWNER_APP";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_OWNER_APP");
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

		$fdata["strField"] = "TAS_OWNER_APP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_OWNER_APP";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_OWNER_APP"] = $fdata;
//	STG_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "STG_UID";
	$fdata["GoodName"] = "STG_UID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","STG_UID");
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

		$fdata["strField"] = "STG_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STG_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["STG_UID"] = $fdata;
//	TAS_CAN_PAUSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "TAS_CAN_PAUSE";
	$fdata["GoodName"] = "TAS_CAN_PAUSE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_CAN_PAUSE");
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

		$fdata["strField"] = "TAS_CAN_PAUSE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_CAN_PAUSE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_CAN_PAUSE"] = $fdata;
//	TAS_CAN_SEND_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "TAS_CAN_SEND_MESSAGE";
	$fdata["GoodName"] = "TAS_CAN_SEND_MESSAGE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_CAN_SEND_MESSAGE");
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

		$fdata["strField"] = "TAS_CAN_SEND_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_CAN_SEND_MESSAGE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_CAN_SEND_MESSAGE"] = $fdata;
//	TAS_CAN_DELETE_DOCS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "TAS_CAN_DELETE_DOCS";
	$fdata["GoodName"] = "TAS_CAN_DELETE_DOCS";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_CAN_DELETE_DOCS");
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

		$fdata["strField"] = "TAS_CAN_DELETE_DOCS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_CAN_DELETE_DOCS";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_CAN_DELETE_DOCS"] = $fdata;
//	TAS_SELF_SERVICE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "TAS_SELF_SERVICE";
	$fdata["GoodName"] = "TAS_SELF_SERVICE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_SELF_SERVICE");
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

		$fdata["strField"] = "TAS_SELF_SERVICE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_SELF_SERVICE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_SELF_SERVICE"] = $fdata;
//	TAS_START
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "TAS_START";
	$fdata["GoodName"] = "TAS_START";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_START");
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

		$fdata["strField"] = "TAS_START";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_START";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_START"] = $fdata;
//	TAS_TO_LAST_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "TAS_TO_LAST_USER";
	$fdata["GoodName"] = "TAS_TO_LAST_USER";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_TO_LAST_USER");
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

		$fdata["strField"] = "TAS_TO_LAST_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_TO_LAST_USER";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_TO_LAST_USER"] = $fdata;
//	TAS_SEND_LAST_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "TAS_SEND_LAST_EMAIL";
	$fdata["GoodName"] = "TAS_SEND_LAST_EMAIL";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_SEND_LAST_EMAIL");
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

		$fdata["strField"] = "TAS_SEND_LAST_EMAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_SEND_LAST_EMAIL";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_SEND_LAST_EMAIL"] = $fdata;
//	TAS_DERIVATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "TAS_DERIVATION";
	$fdata["GoodName"] = "TAS_DERIVATION";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DERIVATION");
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

		$fdata["strField"] = "TAS_DERIVATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DERIVATION";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DERIVATION"] = $fdata;
//	TAS_POSX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "TAS_POSX";
	$fdata["GoodName"] = "TAS_POSX";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_POSX");
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

		$fdata["strField"] = "TAS_POSX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_POSX";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_POSX"] = $fdata;
//	TAS_POSY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "TAS_POSY";
	$fdata["GoodName"] = "TAS_POSY";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_POSY");
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

		$fdata["strField"] = "TAS_POSY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_POSY";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_POSY"] = $fdata;
//	TAS_WIDTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "TAS_WIDTH";
	$fdata["GoodName"] = "TAS_WIDTH";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_WIDTH");
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

		$fdata["strField"] = "TAS_WIDTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_WIDTH";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_WIDTH"] = $fdata;
//	TAS_HEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "TAS_HEIGHT";
	$fdata["GoodName"] = "TAS_HEIGHT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_HEIGHT");
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

		$fdata["strField"] = "TAS_HEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_HEIGHT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_HEIGHT"] = $fdata;
//	TAS_COLOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "TAS_COLOR";
	$fdata["GoodName"] = "TAS_COLOR";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_COLOR");
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

		$fdata["strField"] = "TAS_COLOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_COLOR";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_COLOR"] = $fdata;
//	TAS_EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "TAS_EVN_UID";
	$fdata["GoodName"] = "TAS_EVN_UID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_EVN_UID");
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

		$fdata["strField"] = "TAS_EVN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_EVN_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_EVN_UID"] = $fdata;
//	TAS_BOUNDARY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "TAS_BOUNDARY";
	$fdata["GoodName"] = "TAS_BOUNDARY";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_BOUNDARY");
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

		$fdata["strField"] = "TAS_BOUNDARY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_BOUNDARY";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_BOUNDARY"] = $fdata;
//	TAS_DERIVATION_SCREEN_TPL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "TAS_DERIVATION_SCREEN_TPL";
	$fdata["GoodName"] = "TAS_DERIVATION_SCREEN_TPL";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_DERIVATION_SCREEN_TPL");
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

		$fdata["strField"] = "TAS_DERIVATION_SCREEN_TPL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_DERIVATION_SCREEN_TPL";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_DERIVATION_SCREEN_TPL"] = $fdata;
//	TAS_SELFSERVICE_TIMEOUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "TAS_SELFSERVICE_TIMEOUT";
	$fdata["GoodName"] = "TAS_SELFSERVICE_TIMEOUT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_SELFSERVICE_TIMEOUT");
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

		$fdata["strField"] = "TAS_SELFSERVICE_TIMEOUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_SELFSERVICE_TIMEOUT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_SELFSERVICE_TIMEOUT"] = $fdata;
//	TAS_SELFSERVICE_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "TAS_SELFSERVICE_TIME";
	$fdata["GoodName"] = "TAS_SELFSERVICE_TIME";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_SELFSERVICE_TIME");
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

		$fdata["strField"] = "TAS_SELFSERVICE_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_SELFSERVICE_TIME";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_SELFSERVICE_TIME"] = $fdata;
//	TAS_SELFSERVICE_TIME_UNIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "TAS_SELFSERVICE_TIME_UNIT";
	$fdata["GoodName"] = "TAS_SELFSERVICE_TIME_UNIT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_SELFSERVICE_TIME_UNIT");
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

		$fdata["strField"] = "TAS_SELFSERVICE_TIME_UNIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_SELFSERVICE_TIME_UNIT";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_SELFSERVICE_TIME_UNIT"] = $fdata;
//	TAS_SELFSERVICE_TRIGGER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "TAS_SELFSERVICE_TRIGGER_UID";
	$fdata["GoodName"] = "TAS_SELFSERVICE_TRIGGER_UID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_SELFSERVICE_TRIGGER_UID");
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

		$fdata["strField"] = "TAS_SELFSERVICE_TRIGGER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_SELFSERVICE_TRIGGER_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_SELFSERVICE_TRIGGER_UID"] = $fdata;
//	TAS_SELFSERVICE_EXECUTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "TAS_SELFSERVICE_EXECUTION";
	$fdata["GoodName"] = "TAS_SELFSERVICE_EXECUTION";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_SELFSERVICE_EXECUTION");
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

		$fdata["strField"] = "TAS_SELFSERVICE_EXECUTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_SELFSERVICE_EXECUTION";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_SELFSERVICE_EXECUTION"] = $fdata;
//	TAS_NOT_EMAIL_FROM_FORMAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "TAS_NOT_EMAIL_FROM_FORMAT";
	$fdata["GoodName"] = "TAS_NOT_EMAIL_FROM_FORMAT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_NOT_EMAIL_FROM_FORMAT");
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

		$fdata["strField"] = "TAS_NOT_EMAIL_FROM_FORMAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_NOT_EMAIL_FROM_FORMAT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK["TAS_NOT_EMAIL_FROM_FORMAT"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TAS_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_ID";

	
	
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




	$tdataTASK["TAS_ID"] = $fdata;
//	TAS_OFFLINE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "TAS_OFFLINE";
	$fdata["GoodName"] = "TAS_OFFLINE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_OFFLINE");
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

		$fdata["strField"] = "TAS_OFFLINE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_OFFLINE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataTASK["TAS_OFFLINE"] = $fdata;
//	TAS_EMAIL_SERVER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "TAS_EMAIL_SERVER_UID";
	$fdata["GoodName"] = "TAS_EMAIL_SERVER_UID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_EMAIL_SERVER_UID");
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

		$fdata["strField"] = "TAS_EMAIL_SERVER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_EMAIL_SERVER_UID";

	
	
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




	$tdataTASK["TAS_EMAIL_SERVER_UID"] = $fdata;
//	TAS_AUTO_ROOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "TAS_AUTO_ROOT";
	$fdata["GoodName"] = "TAS_AUTO_ROOT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_AUTO_ROOT");
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

		$fdata["strField"] = "TAS_AUTO_ROOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_AUTO_ROOT";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataTASK["TAS_AUTO_ROOT"] = $fdata;
//	TAS_RECEIVE_SERVER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "TAS_RECEIVE_SERVER_UID";
	$fdata["GoodName"] = "TAS_RECEIVE_SERVER_UID";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_RECEIVE_SERVER_UID");
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

		$fdata["strField"] = "TAS_RECEIVE_SERVER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_RECEIVE_SERVER_UID";

	
	
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




	$tdataTASK["TAS_RECEIVE_SERVER_UID"] = $fdata;
//	TAS_RECEIVE_LAST_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "TAS_RECEIVE_LAST_EMAIL";
	$fdata["GoodName"] = "TAS_RECEIVE_LAST_EMAIL";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_RECEIVE_LAST_EMAIL");
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

		$fdata["strField"] = "TAS_RECEIVE_LAST_EMAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_RECEIVE_LAST_EMAIL";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataTASK["TAS_RECEIVE_LAST_EMAIL"] = $fdata;
//	TAS_RECEIVE_EMAIL_FROM_FORMAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
	$fdata["GoodName"] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_RECEIVE_EMAIL_FROM_FORMAT");
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

		$fdata["strField"] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";

	
	
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




	$tdataTASK["TAS_RECEIVE_EMAIL_FROM_FORMAT"] = $fdata;
//	TAS_RECEIVE_MESSAGE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "TAS_RECEIVE_MESSAGE_TYPE";
	$fdata["GoodName"] = "TAS_RECEIVE_MESSAGE_TYPE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_RECEIVE_MESSAGE_TYPE");
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

		$fdata["strField"] = "TAS_RECEIVE_MESSAGE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_RECEIVE_MESSAGE_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataTASK["TAS_RECEIVE_MESSAGE_TYPE"] = $fdata;
//	TAS_RECEIVE_MESSAGE_TEMPLATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
	$fdata["GoodName"] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_RECEIVE_MESSAGE_TEMPLATE");
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

		$fdata["strField"] = "TAS_RECEIVE_MESSAGE_TEMPLATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_RECEIVE_MESSAGE_TEMPLATE";

	
	
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




	$tdataTASK["TAS_RECEIVE_MESSAGE_TEMPLATE"] = $fdata;
//	TAS_RECEIVE_SUBJECT_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "TAS_RECEIVE_SUBJECT_MESSAGE";
	$fdata["GoodName"] = "TAS_RECEIVE_SUBJECT_MESSAGE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_RECEIVE_SUBJECT_MESSAGE");
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

		$fdata["strField"] = "TAS_RECEIVE_SUBJECT_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_RECEIVE_SUBJECT_MESSAGE";

	
	
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




	$tdataTASK["TAS_RECEIVE_SUBJECT_MESSAGE"] = $fdata;
//	TAS_RECEIVE_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "TAS_RECEIVE_MESSAGE";
	$fdata["GoodName"] = "TAS_RECEIVE_MESSAGE";
	$fdata["ownerTable"] = "TASK";
	$fdata["Label"] = GetFieldLabel("TASK","TAS_RECEIVE_MESSAGE");
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

		$fdata["strField"] = "TAS_RECEIVE_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_RECEIVE_MESSAGE";

	
	
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




	$tdataTASK["TAS_RECEIVE_MESSAGE"] = $fdata;


$tables_data["TASK"]=&$tdataTASK;
$field_labels["TASK"] = &$fieldLabelsTASK;
$fieldToolTips["TASK"] = &$fieldToolTipsTASK;
$placeHolders["TASK"] = &$placeHoldersTASK;
$page_titles["TASK"] = &$pageTitlesTASK;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TASK"] = array();
//	APP_CACHE_VIEW
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_CACHE_VIEW";
		$detailsParam["dOriginalTable"] = "APP_CACHE_VIEW";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_CACHE_VIEW";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_CACHE_VIEW");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["TASK"][$dIndex] = $detailsParam;

	
		$detailsTablesData["TASK"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["TASK"][$dIndex]["masterKeys"][]="TAS_UID";

				$detailsTablesData["TASK"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["TASK"][$dIndex]["detailKeys"][]="TAS_UID";
//	STEP_TRIGGER
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="STEP_TRIGGER";
		$detailsParam["dOriginalTable"] = "STEP_TRIGGER";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "STEP_TRIGGER";
	$detailsParam["dCaptionTable"] = GetTableCaption("STEP_TRIGGER");
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
		
	$detailsTablesData["TASK"][$dIndex] = $detailsParam;

	
		$detailsTablesData["TASK"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["TASK"][$dIndex]["masterKeys"][]="TAS_UID";

				$detailsTablesData["TASK"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["TASK"][$dIndex]["detailKeys"][]="TAS_UID";

// tables which are master tables for current table (detail)
$masterTablesData["TASK"] = array();


	
				$strOriginalDetailsTable="PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["TASK"][0] = $masterParams;
				$masterTablesData["TASK"][0]["masterKeys"] = array();
	$masterTablesData["TASK"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["TASK"][0]["detailKeys"] = array();
	$masterTablesData["TASK"][0]["detailKeys"][]="PRO_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TASK()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRO_UID,  	TAS_UID,  	TAS_TITLE,  	TAS_DESCRIPTION,  	TAS_DEF_TITLE,  	TAS_DEF_SUBJECT_MESSAGE,  	TAS_DEF_PROC_CODE,  	TAS_DEF_MESSAGE,  	TAS_DEF_DESCRIPTION,  	TAS_TYPE,  	TAS_DURATION,  	TAS_DELAY_TYPE,  	TAS_TEMPORIZER,  	TAS_TYPE_DAY,  	TAS_TIMEUNIT,  	TAS_ALERT,  	TAS_PRIORITY_VARIABLE,  	TAS_ASSIGN_TYPE,  	TAS_ASSIGN_VARIABLE,  	TAS_GROUP_VARIABLE,  	TAS_MI_INSTANCE_VARIABLE,  	TAS_MI_COMPLETE_VARIABLE,  	TAS_ASSIGN_LOCATION,  	TAS_ASSIGN_LOCATION_ADHOC,  	TAS_TRANSFER_FLY,  	TAS_LAST_ASSIGNED,  	TAS_USER,  	TAS_CAN_UPLOAD,  	TAS_VIEW_UPLOAD,  	TAS_VIEW_ADDITIONAL_DOCUMENTATION,  	TAS_CAN_CANCEL,  	TAS_OWNER_APP,  	STG_UID,  	TAS_CAN_PAUSE,  	TAS_CAN_SEND_MESSAGE,  	TAS_CAN_DELETE_DOCS,  	TAS_SELF_SERVICE,  	TAS_START,  	TAS_TO_LAST_USER,  	TAS_SEND_LAST_EMAIL,  	TAS_DERIVATION,  	TAS_POSX,  	TAS_POSY,  	TAS_WIDTH,  	TAS_HEIGHT,  	TAS_COLOR,  	TAS_EVN_UID,  	TAS_BOUNDARY,  	TAS_DERIVATION_SCREEN_TPL,  	TAS_SELFSERVICE_TIMEOUT,  	TAS_SELFSERVICE_TIME,  	TAS_SELFSERVICE_TIME_UNIT,  	TAS_SELFSERVICE_TRIGGER_UID,  	TAS_SELFSERVICE_EXECUTION,  	TAS_NOT_EMAIL_FROM_FORMAT,  	TAS_ID,  	TAS_OFFLINE,  	TAS_EMAIL_SERVER_UID,  	TAS_AUTO_ROOT,  	TAS_RECEIVE_SERVER_UID,  	TAS_RECEIVE_LAST_EMAIL,  	TAS_RECEIVE_EMAIL_FROM_FORMAT,  	TAS_RECEIVE_MESSAGE_TYPE,  	TAS_RECEIVE_MESSAGE_TEMPLATE,  	TAS_RECEIVE_SUBJECT_MESSAGE,  	TAS_RECEIVE_MESSAGE";
$proto0["m_strFrom"] = "FROM TASK";
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
	"m_strName" => "PRO_UID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto6["m_sql"] = "PRO_UID";
$proto6["m_srcTableName"] = "TASK";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto8["m_sql"] = "TAS_UID";
$proto8["m_srcTableName"] = "TASK";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_TITLE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto10["m_sql"] = "TAS_TITLE";
$proto10["m_srcTableName"] = "TASK";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DESCRIPTION",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto12["m_sql"] = "TAS_DESCRIPTION";
$proto12["m_srcTableName"] = "TASK";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DEF_TITLE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto14["m_sql"] = "TAS_DEF_TITLE";
$proto14["m_srcTableName"] = "TASK";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DEF_SUBJECT_MESSAGE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto16["m_sql"] = "TAS_DEF_SUBJECT_MESSAGE";
$proto16["m_srcTableName"] = "TASK";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DEF_PROC_CODE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto18["m_sql"] = "TAS_DEF_PROC_CODE";
$proto18["m_srcTableName"] = "TASK";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DEF_MESSAGE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto20["m_sql"] = "TAS_DEF_MESSAGE";
$proto20["m_srcTableName"] = "TASK";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DEF_DESCRIPTION",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto22["m_sql"] = "TAS_DEF_DESCRIPTION";
$proto22["m_srcTableName"] = "TASK";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_TYPE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto24["m_sql"] = "TAS_TYPE";
$proto24["m_srcTableName"] = "TASK";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DURATION",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto26["m_sql"] = "TAS_DURATION";
$proto26["m_srcTableName"] = "TASK";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DELAY_TYPE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto28["m_sql"] = "TAS_DELAY_TYPE";
$proto28["m_srcTableName"] = "TASK";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_TEMPORIZER",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto30["m_sql"] = "TAS_TEMPORIZER";
$proto30["m_srcTableName"] = "TASK";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_TYPE_DAY",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto32["m_sql"] = "TAS_TYPE_DAY";
$proto32["m_srcTableName"] = "TASK";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_TIMEUNIT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto34["m_sql"] = "TAS_TIMEUNIT";
$proto34["m_srcTableName"] = "TASK";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ALERT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto36["m_sql"] = "TAS_ALERT";
$proto36["m_srcTableName"] = "TASK";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_PRIORITY_VARIABLE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto38["m_sql"] = "TAS_PRIORITY_VARIABLE";
$proto38["m_srcTableName"] = "TASK";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ASSIGN_TYPE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto40["m_sql"] = "TAS_ASSIGN_TYPE";
$proto40["m_srcTableName"] = "TASK";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ASSIGN_VARIABLE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto42["m_sql"] = "TAS_ASSIGN_VARIABLE";
$proto42["m_srcTableName"] = "TASK";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_GROUP_VARIABLE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto44["m_sql"] = "TAS_GROUP_VARIABLE";
$proto44["m_srcTableName"] = "TASK";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_MI_INSTANCE_VARIABLE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto46["m_sql"] = "TAS_MI_INSTANCE_VARIABLE";
$proto46["m_srcTableName"] = "TASK";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_MI_COMPLETE_VARIABLE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto48["m_sql"] = "TAS_MI_COMPLETE_VARIABLE";
$proto48["m_srcTableName"] = "TASK";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ASSIGN_LOCATION",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto50["m_sql"] = "TAS_ASSIGN_LOCATION";
$proto50["m_srcTableName"] = "TASK";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ASSIGN_LOCATION_ADHOC",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto52["m_sql"] = "TAS_ASSIGN_LOCATION_ADHOC";
$proto52["m_srcTableName"] = "TASK";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_TRANSFER_FLY",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto54["m_sql"] = "TAS_TRANSFER_FLY";
$proto54["m_srcTableName"] = "TASK";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_LAST_ASSIGNED",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto56["m_sql"] = "TAS_LAST_ASSIGNED";
$proto56["m_srcTableName"] = "TASK";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_USER",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto58["m_sql"] = "TAS_USER";
$proto58["m_srcTableName"] = "TASK";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_CAN_UPLOAD",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto60["m_sql"] = "TAS_CAN_UPLOAD";
$proto60["m_srcTableName"] = "TASK";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_VIEW_UPLOAD",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto62["m_sql"] = "TAS_VIEW_UPLOAD";
$proto62["m_srcTableName"] = "TASK";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_VIEW_ADDITIONAL_DOCUMENTATION",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto64["m_sql"] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$proto64["m_srcTableName"] = "TASK";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_CAN_CANCEL",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto66["m_sql"] = "TAS_CAN_CANCEL";
$proto66["m_srcTableName"] = "TASK";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_OWNER_APP",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto68["m_sql"] = "TAS_OWNER_APP";
$proto68["m_srcTableName"] = "TASK";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "STG_UID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto70["m_sql"] = "STG_UID";
$proto70["m_srcTableName"] = "TASK";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_CAN_PAUSE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto72["m_sql"] = "TAS_CAN_PAUSE";
$proto72["m_srcTableName"] = "TASK";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_CAN_SEND_MESSAGE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto74["m_sql"] = "TAS_CAN_SEND_MESSAGE";
$proto74["m_srcTableName"] = "TASK";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_CAN_DELETE_DOCS",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto76["m_sql"] = "TAS_CAN_DELETE_DOCS";
$proto76["m_srcTableName"] = "TASK";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_SELF_SERVICE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto78["m_sql"] = "TAS_SELF_SERVICE";
$proto78["m_srcTableName"] = "TASK";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_START",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto80["m_sql"] = "TAS_START";
$proto80["m_srcTableName"] = "TASK";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_TO_LAST_USER",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto82["m_sql"] = "TAS_TO_LAST_USER";
$proto82["m_srcTableName"] = "TASK";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_SEND_LAST_EMAIL",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto84["m_sql"] = "TAS_SEND_LAST_EMAIL";
$proto84["m_srcTableName"] = "TASK";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DERIVATION",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto86["m_sql"] = "TAS_DERIVATION";
$proto86["m_srcTableName"] = "TASK";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_POSX",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto88["m_sql"] = "TAS_POSX";
$proto88["m_srcTableName"] = "TASK";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_POSY",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto90["m_sql"] = "TAS_POSY";
$proto90["m_srcTableName"] = "TASK";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_WIDTH",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto92["m_sql"] = "TAS_WIDTH";
$proto92["m_srcTableName"] = "TASK";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_HEIGHT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto94["m_sql"] = "TAS_HEIGHT";
$proto94["m_srcTableName"] = "TASK";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_COLOR",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto96["m_sql"] = "TAS_COLOR";
$proto96["m_srcTableName"] = "TASK";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_EVN_UID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto98["m_sql"] = "TAS_EVN_UID";
$proto98["m_srcTableName"] = "TASK";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_BOUNDARY",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto100["m_sql"] = "TAS_BOUNDARY";
$proto100["m_srcTableName"] = "TASK";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_DERIVATION_SCREEN_TPL",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto102["m_sql"] = "TAS_DERIVATION_SCREEN_TPL";
$proto102["m_srcTableName"] = "TASK";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_SELFSERVICE_TIMEOUT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto104["m_sql"] = "TAS_SELFSERVICE_TIMEOUT";
$proto104["m_srcTableName"] = "TASK";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_SELFSERVICE_TIME",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto106["m_sql"] = "TAS_SELFSERVICE_TIME";
$proto106["m_srcTableName"] = "TASK";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_SELFSERVICE_TIME_UNIT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto108["m_sql"] = "TAS_SELFSERVICE_TIME_UNIT";
$proto108["m_srcTableName"] = "TASK";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_SELFSERVICE_TRIGGER_UID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto110["m_sql"] = "TAS_SELFSERVICE_TRIGGER_UID";
$proto110["m_srcTableName"] = "TASK";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_SELFSERVICE_EXECUTION",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto112["m_sql"] = "TAS_SELFSERVICE_EXECUTION";
$proto112["m_srcTableName"] = "TASK";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_NOT_EMAIL_FROM_FORMAT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto114["m_sql"] = "TAS_NOT_EMAIL_FROM_FORMAT";
$proto114["m_srcTableName"] = "TASK";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto116["m_sql"] = "TAS_ID";
$proto116["m_srcTableName"] = "TASK";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_OFFLINE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto118["m_sql"] = "TAS_OFFLINE";
$proto118["m_srcTableName"] = "TASK";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_EMAIL_SERVER_UID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto120["m_sql"] = "TAS_EMAIL_SERVER_UID";
$proto120["m_srcTableName"] = "TASK";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_AUTO_ROOT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto122["m_sql"] = "TAS_AUTO_ROOT";
$proto122["m_srcTableName"] = "TASK";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_RECEIVE_SERVER_UID",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto124["m_sql"] = "TAS_RECEIVE_SERVER_UID";
$proto124["m_srcTableName"] = "TASK";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_RECEIVE_LAST_EMAIL",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto126["m_sql"] = "TAS_RECEIVE_LAST_EMAIL";
$proto126["m_srcTableName"] = "TASK";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_RECEIVE_EMAIL_FROM_FORMAT",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto128["m_sql"] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$proto128["m_srcTableName"] = "TASK";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_RECEIVE_MESSAGE_TYPE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto130["m_sql"] = "TAS_RECEIVE_MESSAGE_TYPE";
$proto130["m_srcTableName"] = "TASK";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_RECEIVE_MESSAGE_TEMPLATE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto132["m_sql"] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$proto132["m_srcTableName"] = "TASK";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_RECEIVE_SUBJECT_MESSAGE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto134["m_sql"] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$proto134["m_srcTableName"] = "TASK";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_RECEIVE_MESSAGE",
	"m_strTable" => "TASK",
	"m_srcTableName" => "TASK"
));

$proto136["m_sql"] = "TAS_RECEIVE_MESSAGE";
$proto136["m_srcTableName"] = "TASK";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto138=array();
$proto138["m_link"] = "SQLL_MAIN";
			$proto139=array();
$proto139["m_strName"] = "TASK";
$proto139["m_srcTableName"] = "TASK";
$proto139["m_columns"] = array();
$proto139["m_columns"][] = "PRO_UID";
$proto139["m_columns"][] = "TAS_UID";
$proto139["m_columns"][] = "TAS_TITLE";
$proto139["m_columns"][] = "TAS_DESCRIPTION";
$proto139["m_columns"][] = "TAS_DEF_TITLE";
$proto139["m_columns"][] = "TAS_DEF_SUBJECT_MESSAGE";
$proto139["m_columns"][] = "TAS_DEF_PROC_CODE";
$proto139["m_columns"][] = "TAS_DEF_MESSAGE";
$proto139["m_columns"][] = "TAS_DEF_DESCRIPTION";
$proto139["m_columns"][] = "TAS_TYPE";
$proto139["m_columns"][] = "TAS_DURATION";
$proto139["m_columns"][] = "TAS_DELAY_TYPE";
$proto139["m_columns"][] = "TAS_TEMPORIZER";
$proto139["m_columns"][] = "TAS_TYPE_DAY";
$proto139["m_columns"][] = "TAS_TIMEUNIT";
$proto139["m_columns"][] = "TAS_ALERT";
$proto139["m_columns"][] = "TAS_PRIORITY_VARIABLE";
$proto139["m_columns"][] = "TAS_ASSIGN_TYPE";
$proto139["m_columns"][] = "TAS_ASSIGN_VARIABLE";
$proto139["m_columns"][] = "TAS_GROUP_VARIABLE";
$proto139["m_columns"][] = "TAS_MI_INSTANCE_VARIABLE";
$proto139["m_columns"][] = "TAS_MI_COMPLETE_VARIABLE";
$proto139["m_columns"][] = "TAS_ASSIGN_LOCATION";
$proto139["m_columns"][] = "TAS_ASSIGN_LOCATION_ADHOC";
$proto139["m_columns"][] = "TAS_TRANSFER_FLY";
$proto139["m_columns"][] = "TAS_LAST_ASSIGNED";
$proto139["m_columns"][] = "TAS_USER";
$proto139["m_columns"][] = "TAS_CAN_UPLOAD";
$proto139["m_columns"][] = "TAS_VIEW_UPLOAD";
$proto139["m_columns"][] = "TAS_VIEW_ADDITIONAL_DOCUMENTATION";
$proto139["m_columns"][] = "TAS_CAN_CANCEL";
$proto139["m_columns"][] = "TAS_OWNER_APP";
$proto139["m_columns"][] = "STG_UID";
$proto139["m_columns"][] = "TAS_CAN_PAUSE";
$proto139["m_columns"][] = "TAS_CAN_SEND_MESSAGE";
$proto139["m_columns"][] = "TAS_CAN_DELETE_DOCS";
$proto139["m_columns"][] = "TAS_SELF_SERVICE";
$proto139["m_columns"][] = "TAS_START";
$proto139["m_columns"][] = "TAS_TO_LAST_USER";
$proto139["m_columns"][] = "TAS_SEND_LAST_EMAIL";
$proto139["m_columns"][] = "TAS_DERIVATION";
$proto139["m_columns"][] = "TAS_POSX";
$proto139["m_columns"][] = "TAS_POSY";
$proto139["m_columns"][] = "TAS_WIDTH";
$proto139["m_columns"][] = "TAS_HEIGHT";
$proto139["m_columns"][] = "TAS_COLOR";
$proto139["m_columns"][] = "TAS_EVN_UID";
$proto139["m_columns"][] = "TAS_BOUNDARY";
$proto139["m_columns"][] = "TAS_DERIVATION_SCREEN_TPL";
$proto139["m_columns"][] = "TAS_SELFSERVICE_TIMEOUT";
$proto139["m_columns"][] = "TAS_SELFSERVICE_TIME";
$proto139["m_columns"][] = "TAS_SELFSERVICE_TIME_UNIT";
$proto139["m_columns"][] = "TAS_SELFSERVICE_TRIGGER_UID";
$proto139["m_columns"][] = "TAS_SELFSERVICE_EXECUTION";
$proto139["m_columns"][] = "TAS_NOT_EMAIL_FROM_FORMAT";
$proto139["m_columns"][] = "TAS_ID";
$proto139["m_columns"][] = "TAS_OFFLINE";
$proto139["m_columns"][] = "TAS_EMAIL_SERVER_UID";
$proto139["m_columns"][] = "TAS_AUTO_ROOT";
$proto139["m_columns"][] = "TAS_RECEIVE_SERVER_UID";
$proto139["m_columns"][] = "TAS_RECEIVE_LAST_EMAIL";
$proto139["m_columns"][] = "TAS_RECEIVE_EMAIL_FROM_FORMAT";
$proto139["m_columns"][] = "TAS_RECEIVE_MESSAGE_TYPE";
$proto139["m_columns"][] = "TAS_RECEIVE_MESSAGE_TEMPLATE";
$proto139["m_columns"][] = "TAS_RECEIVE_SUBJECT_MESSAGE";
$proto139["m_columns"][] = "TAS_RECEIVE_MESSAGE";
$obj = new SQLTable($proto139);

$proto138["m_table"] = $obj;
$proto138["m_sql"] = "TASK";
$proto138["m_alias"] = "";
$proto138["m_srcTableName"] = "TASK";
$proto140=array();
$proto140["m_sql"] = "";
$proto140["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto140["m_column"]=$obj;
$proto140["m_contained"] = array();
$proto140["m_strCase"] = "";
$proto140["m_havingmode"] = false;
$proto140["m_inBrackets"] = false;
$proto140["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto140);

$proto138["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto138);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TASK";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TASK = createSqlQuery_TASK();


	
						;

																																																																		

$tdataTASK[".sqlquery"] = $queryData_TASK;

$tableEvents["TASK"] = new eventsBase;
$tdataTASK[".hasEvents"] = false;

?>
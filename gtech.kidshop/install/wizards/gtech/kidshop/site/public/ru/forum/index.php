<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мамин форум");
?>
<div align="justify"><?$APPLICATION->IncludeComponent("bitrix:forum", ".default", array(
	"THEME" => "orange",
	"SHOW_TAGS" => "Y",
	"SHOW_AUTH_FORM" => "Y",
	"SHOW_NAVIGATION" => "Y",
	"SHOW_SUBSCRIBE_LINK" => "N",
	"SHOW_LEGEND" => "Y",
	"SHOW_STATISTIC" => "Y",
	"SHOW_NAME_LINK" => "Y",
	"SHOW_FORUMS" => "Y",
	"SHOW_FIRST_POST" => "N",
	"SHOW_AUTHOR_COLUMN" => "N",
	"TMPLT_SHOW_ADDITIONAL_MARKER" => "",
	"SMILES_COUNT" => "100",
	"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
	"PATH_TO_ICON" => "/bitrix/images/forum/icon/",
	"PAGE_NAVIGATION_TEMPLATE" => "forum",
	"PAGE_NAVIGATION_WINDOW" => "5",
	"AJAX_POST" => "N",
	"WORD_WRAP_CUT" => "23",
	"WORD_LENGTH" => "50",
	"SEO_USER" => "Y",
	"USE_LIGHT_VIEW" => "N",
	"FID" => array(
	),
	"USER_PROPERTY" => array(
	),
	"FILES_COUNT" => "5",
	"HELP_CONTENT" => "",
	"RULES_CONTENT" => "",
	"SEF_MODE" => "Y",
	"CHECK_CORRECT_TEMPLATES" => "Y",
	"SEF_FOLDER" => "/forum/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_TIME_USER_STAT" => "60",
	"FORUMS_PER_PAGE" => "10",
	"TOPICS_PER_PAGE" => "10",
	"MESSAGES_PER_PAGE" => "10",
	"PATH_TO_AUTH_FORM" => "",
	"TIME_INTERVAL_FOR_USER_STAT" => "10",
	"DATE_FORMAT" => "d.m.Y",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"IMAGE_SIZE" => "400",
	"EDITOR_CODE_DEFAULT" => "N",
	"SEND_MAIL" => "E",
	"SEND_ICQ" => "A",
	"SET_NAVIGATION" => "Y",
	"SET_TITLE" => "Y",
	"SET_PAGE_PROPERTY" => "Y",
	"SHOW_FORUM_ANOTHER_SITE" => "Y",
	"USE_RSS" => "N",
	"SHOW_RATING" => "Y",
	"RATING_ID" => array(
		0 => "1",
	),
	"RATING_TYPE" => "",
	"SEF_URL_TEMPLATES" => array(
		"index" => "index.php",
		"list" => "forum#FID#/",
		"read" => "forum#FID#/topic#TID#/",
		"message" => "messages/forum#FID#/topic#TID#/message#MID#/",
		"help" => "help/",
		"rules" => "rules/",
		"message_appr" => "messages/approve/forum#FID#/topic#TID#/",
		"message_move" => "messages/move/forum#FID#/topic#TID#/message#MID#/",
		"pm_list" => "pm/folder#FID#/",
		"pm_edit" => "pm/folder#FID#/message#MID#/user#UID#/#mode#/",
		"pm_read" => "pm/folder#FID#/message#MID#/",
		"pm_search" => "pm/search/",
		"pm_folder" => "pm/folders/",
		"rss" => "rss/#TYPE#/#MODE#/#IID#/",
		"search" => "search/",
		"subscr_list" => "subscribe/",
		"active" => "topic/new/",
		"topic_move" => "topic/move/forum#FID#/topic#TID#/",
		"topic_new" => "topic/add/forum#FID#/",
		"topic_search" => "topic/search/",
		"user_list" => "users/",
		"profile" => "user/#UID#/edit/",
		"profile_view" => "user/#UID#/",
		"user_post" => "user/#UID#/post/#mode#/",
		"message_send" => "user/#UID#/send/#TYPE#/",
	)
	),
	false
);?></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
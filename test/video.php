<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<br />
 <?$APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	Array(
		"PLAYER_TYPE" => "auto",
		"USE_PLAYLIST" => "N",
		"PATH" => "/amursbyt/private_clients/receipts/amur_rolik_crf27.mp4",
		"PROVIDER" => "video",
		"STREAMER" => "",
		"WIDTH" => "480",
		"HEIGHT" => "384",
		"PREVIEW" => "/amursbyt/private_clients/receipts/amur_rolik_preview.jpg",
		"FILE_TITLE" => "",
		"FILE_DURATION" => "",
		"FILE_AUTHOR" => "",
		"FILE_DATE" => "",
		"FILE_DESCRIPTION" => "",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"SKIN" => "",
		"CONTROLBAR" => "bottom",
		"WMODE" => "opaque",
		"LOGO" => "",
		"LOGO_LINK" => "",
		"LOGO_POSITION" => "none",
		"PLUGINS" => array(),
		"ADDITIONAL_FLASHVARS" => "",
		"AUTOSTART" => "N",
		"REPEAT" => "none",
		"VOLUME" => "90",
		"MUTE" => "N",
		"ADVANCED_MODE_SETTINGS" => "Y",
		"PLAYER_ID" => "",
		"BUFFER_LENGTH" => "10",
		"ALLOW_SWF" => "N"
	)
);?> 
<br />
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
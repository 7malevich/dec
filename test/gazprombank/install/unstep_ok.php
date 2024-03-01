<?php
/**
 * Страница с настройками удаления модуля.
 * @author Alex Rubera (www.rubera.ru)
 */

if (!check_bitrix_sessid()) {
    return;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/gazprombank/prolog.php'); // пролог модуля

?>
<form action="<?= $APPLICATION->GetCurPage() ?>">
    <?= bitrix_sessid_post() ?>
    <input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
    <input type="hidden" name="id" value="gazprombank">
    <input type="hidden" name="uninstall" value="Y">
    <?= CAdminMessage::ShowMessage(GetMessage('MOD_UNINST_WARN')) ?>
    <input type="submit" name="inst" value="<?= GetMessage('MOD_UNINST_DEL') ?>">
    <input type="button" onclick="document.location='/bitrix/admin/module_admin.php?lang=<?= LANGUAGE_ID ?>'" value="<?= GetMessage('GAZPROMBANK.PGA_BTN_CANCEL') ?>">
</form>

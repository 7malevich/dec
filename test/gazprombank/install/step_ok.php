<?php
/**
 * Страница с результатом установки модуля.
 * @author Alex Rubera (www.rubera.ru)
 */

if (!check_bitrix_sessid()) {
    return;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/gazprombank/prolog.php'); // пролог модуля

global $errors;

if ($errors === false || !CModule::IncludeModule('gazprombank')) {
    echo CAdminMessage::ShowNote(GetMessage('GAZPROMBANK.PGA_INSTALL_MESSAGE'));
} else {
    for ($i = 0; $i < count($errors); $i++) {
        $alErrors .= $errors[$i] . '<br>';
    }
    echo CAdminMessage::ShowMessage(Array('TYPE' => 'ERROR', 'MESSAGE' => GetMessage('MOD_INST_ERR'), 'DETAILS' => $alErrors, 'HTML' => true));
};

?>
<form action="<?= $APPLICATION->GetCurPage() ?>">
    <input type="hidden" name="lang" value="<?= LANG ?>">
    <input type="submit" name="" value="<?= GetMessage('MOD_BACK') ?>">
    <?php if ($errors === false): ?>
        <input type="button" onclick="document.location='/bitrix/admin/settings.php?lang=<?= LANGUAGE_ID ?>&mid_menu=1&mid=gazprombank'" value="<?= GetMessage('GAZPROMBANK.PGA_BTN_HELP')?>">
        <br/><br/>
        <div>Для настройки платежного модуля перейдите в раздел Магазин > Настройки >
            <a href="/bitrix/admin/sale_pay_system.php?lang=<?= LANGUAGE_ID ?>">Платежные системы</a>, добавьте новую платежную систему
            и в качестве обработчика присвойте ей «<?= GetMessage('GAZPROMBANK.PGA_SHORT_NAME')?>»</div>
    <?php endif; ?>
</form>
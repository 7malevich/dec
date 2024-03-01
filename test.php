<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>
<?php
// URL для скачивания файла
$url = 'http://dvec.antonylc.beget.tech/admin/testov.php';

// Инициализация cURL-сессии
$ch = curl_init($url);

// Опции для сохранения файла (например, в переменную)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Выполнение запроса
$fileContent = curl_exec($ch);

// Проверка на успешность выполнения запроса
if ($fileContent !== false) {
    // Сохранение файла на целевом сервере
    $targetPath = 'https://resk.smhost.ru/testov.php'; // Путь на сервере, куда сохранить файл
    file_put_contents($targetPath, $fileContent);
    echo "Файл успешно сохранен на сервере.";
} else {
    echo "Ошибка при получении файла с удаленного сервера.";
}

// Закрытие cURL-сессии
curl_close($ch);
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
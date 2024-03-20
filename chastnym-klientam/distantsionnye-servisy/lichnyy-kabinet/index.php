<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>
<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "PATH" => "",
    "SITE_ID" => "ru",
    "START_FROM" => "1",
),
    false
); ?>

<div class="container">
    <h1 class="h1-marginBot h1-relative"><?= $APPLICATION->showTitle() ?></h1>
</div>

<section id="bx_1949384460_1746">
    <section class="block section-pt0">
        <div class="container text-block">
            <p>Личный кабинет клиента ПАО «ДЭК» &ndash; это отличная возможность экономить
                время для оплаты счетов и передачи показаний приборов учета в любой точке мира. Интуитивно понятный
                интерфейс приложения позволит в пару кликов совершить нужные действия:</p>

        </div>
        </div>
    </section>
</section>
<section id="bx_1949384460_1747">
    <section class="block section-pt0">
        <div class="container text-block">
            <div class="icon-link-wrapper">
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/wallet.svg" alt="">
                    <div>оплатить счета</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/counter.svg" alt="">
                    <div>передать показания</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/bill.svg" alt="">
                    <div>посмотреть счета и платежи</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/rss.svg" alt="">
                    <div>оформить подписку на электронный счет</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/info.svg" alt="">
                    <div>узнать тарифы на услуги и адрес ближайшего офиса</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/Union.svg" alt="">
                    <div>получить онлайн консультацию или связаться со специалистом по видеосвязи</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/pen.svg" alt="">
                    <div>написать обращение или оставить заявку</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/bills.svg" alt="">
                    <div>управлять несколькими лицевыми счетами</div>
                </div>

            </div>
        </div>
    </section>
</section>
<section id="bx_1949384460_1748">
    <section class="block section-pt0">
        <div class="container text-block">


            <p>Получить единый пароль и логин для регистрации в личном кабинете клиента можно как на сайте, так и в
                мобильном приложении.</p>

            <p>Для личного кабинета клиента действует единый логин и пароль вне зависимости от способа входа: через сайт
                или мобильное приложение.</p>

            <p>Если вы забыли пароль, нажмите кнопку &laquo;Забыли пароль?&raquo; и следуйте инструкциям.</p>

            <p>Если вы хотите зарегистрироваться, нажмите кнопку &laquo;Зарегистрироваться&raquo; и следуйте
                инструкциям.</p>
            <div class="center-button mb--32">
                <a href="https://krsk-sbit.ru/login" class="button">Перейти в личный кабинет</a>
            </div>
    </section>
</section>

<section class="block section-pt0">
    <div class="container">
        <div class="text-block">
            <h4 class="color-blue text--center">Вопросы и ответы о сервисе «Личный кабинет»:</h4>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">В течение какого времени выполняется загрузка информации по лицевому счету после
                    регистрации в сервисе «Личный кабинет»?
                </div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    Информация по лицевому счету отражается в сервисе «Личный кабинет» клиента ПАО «ДЭК» сразу же после
                    прохождения регистрации.
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Могу ли я в одном Личном кабинете иметь несколько лицевых счетов?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    Да, такая возможность реализована. Для этого нужно воспользоваться функцией «Добавить лицевой счет».
                    Подробная информация по добавлению лицевого счета представлена в инструкции по использованию сервиса
                    «Личный кабинет».
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Через сколько дней в Личном кабинете клиента ПАО «ДЭК» отражается произведенная
                    оплата?
                </div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    В сервис «Личный кабинет клиента» оплата загружается ежедневно.
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Когда в сервисе «Личный кабинет» появляются квитанции на оплату?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    Платежные документы загружаются в сервис «Личный кабинет» после окончания отчетного периода
                    (календарного месяца), т.е. в начале месяца, следующего за отчетным. Возможность получения платежных
                    документов через сервис «Личный кабинет» появляется у клиентов раньше, чем доставка квитанций на
                    бумажных носителях через почтовые ящики.
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Можно в сервисе «Личный кабинет» увидеть информацию о сроке истечения межповерочного
                    интервала прибора учета?
                </div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    В Личном кабинете клиента информацию о сроке истечения межповерочного интервала можно увидеть в
                    разделе «Показания счетчиков». В таблице указан номер прибора учета, предыдущие и текущие показания,
                    дата предыдущих показаний, а также срок поверки.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="block section-pt0">
    <div class="container">
        <div class="text-block">
            <h4 class="color-blue text--center">Вопросы и ответы о мобильном приложении:</h4>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Для чего может понадобиться перезагрузка мобильного приложения ПАО «ДЭК»?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    <p>Старая версия мобильного приложения ПАО «ДЭК» может стать причиной возникновения ошибок и сбоев в
                        работе, таких как: передача показаний приборов учета, своевременное получение актуальной
                        информации и т.п. Решить проблему сможет обновление сервиса, которое осуществляется
                        автоматически, если только данная опция не отключена. В случае, если обновления отключены, нужно
                        выполнить перезагрузку вручную. </p>
                    <p>Перезагрузка способна решить большинство проблем, которые могут возникнуть в работе
                        интерактивного сервиса. Основные причины, по которым может понадобится такая процедура:</p>
                    <ul>
                        <li>«зависание» приложения: невозможно войти в приложение, не выполняются стандартные
                            действия;
                        </li>
                        <li>очень медленная работа программы (задачи выполняются в течение длительного времени);</li>
                        <li>не осуществляется отправка показаний/обращений. Такая ситуация может возникнуть в том
                            случае, если прервано соединение с интернетом. Если подключение активно и стабильно, но
                            проблема с отправкой сохранилась, проблема решается перезагрузкой.
                        </li>
                    </ul>
                    <div class="alert alert-warning" bis_skin_checked="1">
                        <strong>Важно:</strong> если последующая процедура перезагрузки не приносит результата, причиной
                        может быть сбой в работе самого гаджета или его операционной системы.
                    </div>
                    <p>Обойтись без перезапуска приложения можно, осуществив выключение и включение мобильного
                        устройства. Это поможет «очистить» систему от ошибок, устранив мелкие ошибки.</p>
                    <p> Перезапуск сервиса мобильного приложения ПАО «ДЭК» будет зависеть от операционной системы,
                        которой управляется устройство.</p>
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Как перезагрузить мобильное приложение ПАО «ДЭК» на iPhone?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    <ol>
                        <li>
                            Дважды нажать на кнопку «Домой» (в нижнем углу дисплея);
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/iphone_1a.jpg" width="330"
                                        alt="Дважды нажать кнопку Домой"></div>
                        </li>
                        <li>
                            В открывшемся окне со списком запущенных на iPhone программ, найти вкладку с названием
                            «мобильное приложение ПАО «ДЭК»;
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/iphone_1b.png" width="330"
                                        alt="найти вкладку с  названием «мобильное приложение ПАО «ДЭК»"></div>
                        </li>
                        <li>
                            Смахнуть окно приложения ПАО «ДЭК» движением пальца по экрану вверх.
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/iphone_1c.png" width="330"
                                        alt="Смахнуть окно приложения"></div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Как перезагрузить мобильное приложение ПАО «ДЭК» на Android?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">

                    <p>Чтобы перезагрузить мобильное приложение ПАО «ДЭК» на Android, не обязательно перезапускать
                        операционную систему и выключать смартфон. Есть два способа. </p>
                    <p><strong>Первый:</strong></p>
                    <ol>
                        <li>
                            <p>Нажать на сенсорную кнопку, имеющую вид трех горизонтальных полосок и расположенную
                                под
                                экраном слева. </p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_1a.png" width="330"
                                        alt="Нажать на сенсорную кнопку"></div>
                        </li>
                        <li>
                            <p>В открывшемся окне запущенных программ на Android, найти вкладку с названием
                                «мобильное
                                приложение ПАО «ДЭК»;</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_1b.png" width="330"
                                        alt="найти вкладку с названием"></div>
                        </li>
                    </ol>

                    <p>Смахнуть окно приложения ПАО «ДЭК» движением пальца по экрану вверх или вправо.</p>
                    <p><strong>Второй способ:</strong></p>
                    <ol>
                        <li>
                            <p>Последовательно перейти «Настройки» смартфона — «Диспетчер приложений» — «ДЭК + <em>наименование
                                    региона</em>)»;</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_1c.png" width="330"
                                        alt="Диспетчер приложений"></div>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_1d.png" width="330"
                                        alt="ДЭК + наименование  региона"></div>
                        </li>
                        <li>
                            <p>На открывшейся страничке нажать на кнопку «Остановить»/«Закрыть» (в зависимости от
                                версии
                                операционной системы телефона);</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_1e.png" width="330"
                                        alt="нажать на  кнопку «Остановить»/«Закрыть»"></div>
                        </li>
                        <li>
                            <p>Подтвердить задачу;</p>
                        </li>
                        <li>
                            <p>Перейти на главный экран и запустить новую сессию мобильного приложения ПАО «ДЭК».</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Как переустановить мобильное приложение ПАО «ДЭК» на iPhone?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    <p>Более действенный способ исправления всех возникших проблем с работой мобильного приложения
                        ПАО «ДЭК» – переустановка программного продукта. Процедура позволяет получить самую новую
                        версию программы, в которой разработчики устранили самые частые проблемы и добавили новые
                        возможности. Процесс установки обновлений приложения для продукции компании Apple:</p>
                    <ol>
                        <li>
                            <p>Перейти на страничку App Store;</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/iphone_2a.png" width="330"
                                        alt="Перейти на страничку App Store"></div>
                        </li>
                        <li>
                            <p>Нажмите значок профиля в верхней части экрана;</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/iphone_2b.png" width="330"
                                        alt="Нажмите значок профиля"></div>
                        </li>
                        <li>
                            <p>В списке программ, для которых доступны новые прошивки, выбрать мобильное приложение
                                ПАО
                                «ДЭК»;</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/iphone_2c.png" width="330"
                                        alt="выбрать мобильное приложение ПАО «ДЭК»"></div>
                        </li>
                        <li>
                            <p>Нажмите кнопку «Обновить».</p>
                        </li>
                        <p>После запуска новой сессии сервиса для общения, приложение будет работать в новой версии.</p>
                        <div class="alert alert-info" bis_skin_checked="1">Важно: если места на гаджете недостаточно для
                            установки приложения, система предложит удалить некоторые программы, выведя их на экран
                            отдельным списком. Освободить место можно также, удалив некоторые медиафайлы. При этом файлы
                            достаточно перенести в облачное хранилище.
                        </div>
                    </ol>
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Как переустановить мобильное приложение ПАО «ДЭК» на Android?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    <p>Более действенный способ исправления всех возникших проблем с работой мобильного приложения
                        ПАО «ДЭК» – переустановка программного продукта. Процедура позволяет получить самую новую
                        версию программы, в которой разработчики устранили самые частые проблемы и добавили новые
                        возможности. Чтобы перезагрузить мобильное приложение ПАО «ДЭК» на Android, необходимо: </p>
                    <ol>
                        <li>
                            <p>Перейти в виртуальный магазин Google Play Market;</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_2a.png" width="330"
                                        alt="Перейти в Google Play Market"></div>
                        </li>
                        <li>
                            <p>Ввести в поисковую строку название мобильного приложения ПАО «ДЭК» (ключевое слово:
                                ДЭК);</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_2b.png" width="330"
                                        alt="Ввести название мобильного приложения"></div>
                        </li>
                        <li>
                            <p>Если для приложения будут доступны обновления – то вместо кнопки «Открыть» будет
                                доступна
                                кнопка «Обновить» - выбрать задачу – установка доступных обновлений.</p>
                            <div class="m-4 text-center" bis_skin_checked="1"><img
                                        src="/private_clients/cabinet/android_2c.png" width="330"
                                        alt="кнопка Открыть или Обновить"></div>
                        </li>
                    </ol>
                    <div class="alert alert-info" bis_skin_checked="1">Важно: если места на гаджете недостаточно для
                        установки приложения, система предложит удалить некоторые программы, выведя их на экран
                        отдельным списком. Освободить место можно также, удалив некоторые медиафайлы. При этом файлы
                        достаточно перенести в облачное хранилище.
                    </div>
                </div>
            </div>
        </div>

        <div class="spoiler" id="">
            <div class="spoiler__title">
                <div class="h5">Как подключить мобильное приложение ПАО «ДЭК» на другой телефон?</div>
            </div>
            <div class="spoiler__content">
                <div class="text-block">
                    В случае использования приложения в другом гаджете необходимость прохождения процедуры получения учетной записи и подключения лицевых счетов отсутствует. После установки приложения на другое устройство необходимо произвести вход под имеющейся у пользователя учетной записью и получить доступ к ранее зарегистрированным лицевым счетам.
                </div>
            </div>
        </div>

    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Modal Callback");
?><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCallback">
  Заказать обратный звонок
</button>

    <!-- Подключение IntelTelecom -->
	<script src="/design2019/js/jquery.mask.min.js"></script>
    <script>
        var itcParams = {
            time_form: '09:00', // string '00:00' - перезвонить С
            time_to: '17:00', // string '00:00' - перезвонить ДО
            phone_mask: '+7 (000) 000-00-00', // string или false - маска телефона
            phone_count: 18, // int или false - количество знаков телефона
            fio_count: 5, // int или false - минимальное количество знаков в фио
			url: 'https://messinf.dvec.ru:8443/data/scenario/?ScenarioName=callback', // //ccserver.infinity.ru:8443/data/scenario/?ScenarioName=callback', // string - адрес отправки
            text_success: 'Спасибо, мы перезвоним Вам в назначенное время!', // string - текст удачной отправки
            theme: ['Адреса и телефоны отделений', 'Внесение изменений в лицевой счет', 'Договор энергоснабжения', 'Дополнительные платные сервисы', 'Интернет-сервисы', 'Платежные документы (получение и заполнение)', 'Ограничение энергоснабжения', 'ОДН', 'Оплата (способы и места, подтверждение оплаты)', 'Перевод на сотрудника', 'Передача показаний ПУ', 'Обслуживание приборов учета', 'Прочее', 'Состояние лицевого счёта (расчёт, задолженность/переплата)', 'Тарифы и многотарифный учёт, нормативы потребления'],
        };
    </script>
	<script src="/design2019/js/itc.js"></script>

    <div class="modal fade" id="ModalCallback" tabindex="-1" role="dialog" aria-labelledby="ModalCallbackTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" style="margin-bottom:0">Закажите обратный звонок,<br>и мы перезвоним в&nbsp;удобное Вам время:</h4>
                </div>
                <div class="modal-body">
                    <form id="itc-form">
                        <div class="form-group">
                            <label for="itc-phone" class="col-form-label">Ваш телефон:</label>
                            <input type="tel" class="form-control" id="itc-phone" placeholder="+7 (914) 123-45-67">
                        </div>
                        <div class="form-group">
                            <label for="itc-fio" class="col-form-label">ФИО:</label>
                            <input type="text" class="form-control" id="itc-fio">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Удобное время для звонка:</label>
                            <div class="form-row align-items-center">
                                <div class="col-sm-2 text-center">
                                    С
                                </div>
                                <div class="col-sm-4">
                                    <select id="itc-time-from" class="selectpicker form-control"></select>
                                </div>
                                <div class="col-sm-2 text-center">
                                    до
                                </div>
                                <div class="col-sm-4">
                                    <select id="itc-time-to" class="selectpicker form-control"></select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="itc-theme" class="col-form-label">Тема обращения:</label>
                            <select id="itc-theme" class="selectpicker form-control">
                                <option value="" selected disabled>Выберите...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="itc-email" class="col-form-label">Ваш адрес электронной почты:</label>
                            <input type="email" class="form-control" id="itc-email" placeholder="adres@mail.ru">
                            <small class="form-text text-muted">
                                ПАО «ДЭК» проинформирует Вас посредством электронной почты о времени совершенного звонка, 
                                в случае если до Вас дозвониться не удалось. Поле не является обязательным для заполнения.
                            </small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary" id="itc-send">Отправить</button>
                </div>
            </div>
        </div>
    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
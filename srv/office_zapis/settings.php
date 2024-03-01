<?
$o_addresses = array(
  'bla_kal' => 'Благовещенск, ул. Калинина, 142/4',
  'bla_50l' => 'Благовещенск, ул. 50 лет Октября, 65/1',
  'yak_pop' => 'Якутск, ул. Ф.Попова, 6/1',
  'bir_60l' => 'Биробиджан, пр. 60-летия СССР, д.22а',
  'hab_len' => 'Хабаровск, ул.Ленина 43а',
  'hab_tih' => 'Хабаровск, ул.Тихоокеанская 197',
  'kms_mir' => 'Комсомольск-на-Амуре, пр-кт Мира 33',
  'jus_kos' => 'Южно-Сахалинск, ул. имени Космонавта Поповича, 112',
  'pet_mrx' => 'Петропавловск-Камчатский, ул.&nbsp;Карла&nbsp;Маркса, 5',
  'bka_yzh' => 'Большой Камень, ул. Южная, 55',
  'des_vl_okt' => 'Владивосток, ул. Октябрьская, 8',
  'des_nhk_eric' => 'Находка, ул. Портовая, 3',
  'neru_eric' => 'Нерюнгри, ул. Карла Маркса, 25/2',
  'test_office' => 'г. Тестовый, ул. Тестовая, Х',
);
$o_servers = array(
  'bla_kal' => 'http://172.18.24.97:48080',
  'bla_50l' => 'http://172.18.61.220:48080',
  'yak_pop' => 'http://172.19.135.51:48080',
  'bir_60l' => 'http://172.18.193.159:48080',
  'hab_len' => 'http://172.18.87.38:48080',
  'hab_tih' => 'http://172.18.85.36:48080',
  'kms_mir' => 'http://172.18.99.100:48080',
  'jus_kos' => 'http://172.19.7.60:48080',
  'pet_mrx' => 'http://172.19.126.223:48080',
  'bka_yzh' => 'http://172.18.190.230:48080',
  'des_vl_okt' => 'local',
  'des_nhk_eric' => 'local',
  'neru_eric' => 'local',
  'test_office' => 'local',
);
$o_emails = array(
  'bla_kal' => 'rkc-uk1@amur.dvec.ru, prog@el.amur.dvec.ru, prog2@el.amur.dvec.ru',
  'bla_50l' => 'rkc-uk1@amur.dvec.ru, oto1@amur.dvec.ru, oto6@amur.dvec.ru',
  'yak_pop' => 'n.k.kinzhibaev@yakut.dvec.ru, v.v.ivanov@yakut.dvec.ru',
  'bir_60l' => 'eyrikh@eao.dvec.ru, it@eao.dvec.ru',
  'hab_len' => 'samsonov-ea@khab.dvec.ru, vankova-ak@khab.dvec.ru',
  'hab_tih' => 'samsonov-ea@khab.dvec.ru, vankova-ak@khab.dvec.ru',
  'kms_mir' => 'samsonov-ea@khab.dvec.ru, vankova-ak@khab.dvec.ru',
  'jus_kos' => 'Gvan-DM@sakh.dvec.ru, Belonogov-AA@sakh.dvec.ru, Popova-ts@sakh.dvec.ru, Radosteva-ay@sakh.dvec.ru, Vorona-EV@sakh.dvec.ru',
  'pet_mrx' => 'pobezhimova_ve@kamch.dvec.ru, galenkov_ki@kamch.dvec.ru, alexandrov-as@kamch.dvec.ru, varezhnikov_ev@kamch.dvec.ru, Vasilev_VM@kamch.dvec.ru, Vakalyuk_DM@kamch.dvec.ru, Magdalinov_KS@kamch.dvec.ru',
  'bka_yzh' => 'bk-admin@bk.prim.dvec.ru, bk32@bk.prim.dvec.ru',
  'des_vl_okt' => 'zapis@vrkc.prim.dvec.ru',
  'des_nhk_eric' => 'orn9@nakhodka.prim.dvec.ru',
  'neru_eric' => 'cashier23@ner.amur.dvec.ru, zam1@ner.amur.dvec.ru',
  'test_office' => 'pressa8@dvec.ru',
);
$qFreeSlotsThreshold = 10; // АБТ - кол-во свободных слотов, при котором срабатывает предупреждение по email
date_default_timezone_set('Asia/Vladivostok');
$time_shift = "+8 hours"; // лок.запись - временной сдвиг для проверки даты-времени: часовой пояс относительно Владивостока + время до начала записи
$dayz_in_queue = 10; // лок.запись - ограничение количества ближайших дней, доступных для записи
?>
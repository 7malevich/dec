ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map ("map", {
                center: [49, 142], 
                zoom: 4
            }); 

            myPlacemark1 = new ymaps.Placemark([43.794644, 131.954359], {
                iconContent: '1',
                balloonContent: 'Уссурийск, ул.Суханова, 55А (ЕРИЦ ДЭК)',
                hintContent: 'Уссурийск, ул.Суханова, 55А (ЕРИЦ ДЭК)'
            });
            
            myPlacemark2 = new ymaps.Placemark([43.377178, 132.171715], {
                iconContent: '2',
                balloonContent: 'Артём, ул. 1-я Западная, 28',
                hintContent: 'Артём, ул. 1-я Западная, 28'
            });

            myPlacemark3 = new ymaps.Placemark([43.357989, 132.190939], {
                iconContent: '3',
                balloonContent: 'Артём, ул.Интернациональная, 84 (ЕРИЦ ДЭК)',
                hintContent: 'Артём, ул.Интернациональная, 84 (ЕРИЦ ДЭК)'
            });

            myPlacemark4 = new ymaps.Placemark([43.128185, 131.904891], {
                iconContent: '4',
                balloonContent: 'Владивосток, Партизанский проспект, 50 (АЗС ННК)',
                hintContent: 'Владивосток, Партизанский проспект, 50 (АЗС ННК)'
            });
			myPlacemark5 = new ymaps.Placemark([43.124472, 131.885342], {
                iconContent: '5',
                balloonContent: 'Владивосток, ул.Октябрьская, 8 (Дальэнергосбыт, ЕРИЦ ДЭК)',
                hintContent: 'Владивосток, ул.Октябрьская, 8 (Дальэнергосбыт, ЕРИЦ ДЭК)'
            });
            myPlacemark6 = new ymaps.Placemark([43.117084, 131.877952], {
                iconContent: '6',
                balloonContent: 'Владивосток, ул.Набережная, 3 (парковка кинотеатра Океан)',
                hintContent: 'Владивосток, ул.Набережная, 3 (парковка кинотеатра Океан)'
            });
            myPlacemark7 = new ymaps.Placemark([43.102637, 131.916009], {
                iconContent: '7',
                balloonContent: 'Владивосток, улица Калинина, 8 (парковка ТРЦ Калина Молл)',
                hintContent: 'Владивосток, ул.Набережная, 3 (парковка ТРЦ Калина Молл)'
            });
            myPlacemark8 = new ymaps.Placemark([43.089220, 131.860926], {
                iconContent: '8',
                balloonContent: 'Владивосток, улица Крыгина, 23 (Самбери на Крыгина)',
                hintContent: 'Владивосток, улица Крыгина, 23 (Самбери на Крыгина)'
            });
            myPlacemark9 = new ymaps.Placemark([43.046228, 131.886650], {
                iconContent: '9',
                balloonContent: 'о.Русский, АЗС Роснефть',
                hintContent: 'о.Русский, АЗС Роснефть'
            });
            myPlacemark10 = new ymaps.Placemark([50.255510, 127.544888], {
                iconContent: '10',
                balloonContent: 'Благовещенск, ул. Ленина, 100, Общественно-культурный центр',
                hintContent: 'Благовещенск, Общественно-культурный центр'
            });
			myPlacemark11 = new ymaps.Placemark([50.280260, 127.507796], {
                iconContent: '11',
                balloonContent: 'Благовещенск, ул. Мухина, 114/1, ТРЦ Острова',
                hintContent: 'Благовещенск, ТРЦ Острова'
            });
			myPlacemark12 = new ymaps.Placemark([50.286863, 127.525644], {
                iconContent: '12',
                balloonContent: 'Благовещенск, ул. Тенистая, 160, ТЦ Флагман',
                hintContent: 'Благовещенск, ТЦ Флагман'
            });
			myPlacemark14 = new ymaps.Placemark([50.291234, 127.558079], {
                iconContent: '13',
                balloonContent: 'Благовещенск, Театральная улица, 179',
                hintContent: 'Благовещенск, здание Амурских электрических сетей'
            });
			myPlacemark13 = new ymaps.Placemark([48.485358, 135.092461], {
                iconContent: '14',
				balloonContent: 'Хабаровск, ул. Ленинградская, 28/2, ТЦ Экодом',
                hintContent: 'Хабаровск, ТЦ Экодом'
            });
			myPlacemark15 = new ymaps.Placemark([46.958484, 142.733980], {
                iconContent: '15',
				balloonContent: 'Южно-Сахалинск, Коммунистический проспект, 43',
                hintContent: 'Южно-Сахалинск, здание Сахалинэнерго'
            });
			myPlacemark16 = new ymaps.Placemark([53.066058, 158.642017], {
                iconContent: '16',
				balloonContent: 'Петропавловск-Камчатский, Северо-восточное шоссе, 6, ТЦ Фамилион',
                hintContent: 'Петропавловск-Камчатский, ТЦ Фамилион'
            });
			myPlacemark17 = new ymaps.Placemark([43.097593, 131.865821], {
                iconContent: '17',
				balloonContent: 'Владивосток, ул. Стрельникова, 9, Морской торговый порт',
                hintContent: 'Владивосток, ул. Стрельникова, 9, Морской торговый порт'
            });
			myPlacemark18 = new ymaps.Placemark([42.974076, 132.408744], {
                iconContent: '18',
                balloonContent: 'Фокино, Клубная улица, 15А, ТЦ Меридиан',
                hintContent: 'Фокино, Клубная улица, 15А, ТЦ Меридиан'
            });
			myPlacemark19 = new ymaps.Placemark([42.835859, 132.882354], {
                iconContent: '19',
                balloonContent: 'Находка, проспект Мира, 65/1, ТЦ Сити центр',
                hintContent: 'Находка, проспект Мира, 65/1, ТЦ Сити центр'
            });
			myPlacemark20 = new ymaps.Placemark([48.479578, 135.140755], {
                iconContent: '20',
                balloonContent: 'Хабаровск, Восточное шоссе, 21, АЗС Роснефть',
                hintContent: 'Хабаровск, Восточное шоссе, 21, АЗС Роснефть'
            });
			myPlacemark21 = new ymaps.Placemark([48.524286, 135.169088], {
                iconContent: '21',
                balloonContent: 'Хабаровск, Матвеевское шоссе, 28Б, аэропорт',
                hintContent: 'Хабаровск, Матвеевское шоссе, 28Б, аэропорт'
            });
			myPlacemark22 = new ymaps.Placemark([48.550386, 135.086137], {
                iconContent: '22',
                balloonContent: 'Хабаровск, Совхозная улица, 79/1, АЗС Роснефть',
                hintContent: 'Хабаровск, Совхозная улица, 79/1, АЗС Роснефть'
            });
            // Создание экземпляра элемента управления
            myMap.controls.add(new ymaps.control.ZoomControl());
            myMap.geoObjects.add(myPlacemark1);
            myMap.geoObjects.add(myPlacemark2);
            myMap.geoObjects.add(myPlacemark3);
            myMap.geoObjects.add(myPlacemark4);
            myMap.geoObjects.add(myPlacemark5);
            myMap.geoObjects.add(myPlacemark6);
            myMap.geoObjects.add(myPlacemark7);
            myMap.geoObjects.add(myPlacemark8);
            myMap.geoObjects.add(myPlacemark9);
            myMap.geoObjects.add(myPlacemark10);
			myMap.geoObjects.add(myPlacemark11);
			myMap.geoObjects.add(myPlacemark12);
			myMap.geoObjects.add(myPlacemark13);
			myMap.geoObjects.add(myPlacemark14);
			myMap.geoObjects.add(myPlacemark15);
			myMap.geoObjects.add(myPlacemark16);
			myMap.geoObjects.add(myPlacemark17);
			myMap.geoObjects.add(myPlacemark18);
			myMap.geoObjects.add(myPlacemark19);
			myMap.geoObjects.add(myPlacemark20);
			myMap.geoObjects.add(myPlacemark21);
			myMap.geoObjects.add(myPlacemark22);
// меню
var BranchesList = new ymaps.control.ListBox({
  data: {
	  title: 'Зарядные станции:'
  },
  items: [
	new ymaps.control.ListBoxItem('В Амурской области'),
    new ymaps.control.ListBoxItem('В Хабаровском крае'),
    new ymaps.control.ListBoxItem('В Приморском крае'),
	new ymaps.control.ListBoxItem('В Сахалинской области'),
	new ymaps.control.ListBoxItem('В Камчатском крае'),
    new ymaps.control.ListBoxItem('Все станции на Дальнем Востоке'),
  ]
});

BranchesList.get(0).events.add('click', function () {
    myMap.setCenter([50.28, 127.55], 12);
});
BranchesList.get(1).events.add('click', function () {
    myMap.setCenter([48.515, 135.15], 11);
});
BranchesList.get(2).events.add('click', function () {
    myMap.setCenter([43.47, 132.25], 8);
});
BranchesList.get(3).events.add('click', function () {
    myMap.setCenter([46.958484, 142.733980], 15);
});
BranchesList.get(4).events.add('click', function () {
    myMap.setCenter([53.066058, 158.642017], 15);
});
BranchesList.get(5).events.add('click', function () {
    myMap.setCenter([49, 142], 4);
});
myMap.controls.add(BranchesList);

}
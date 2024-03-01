ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map ("map", {
                center: [47.428087, 144.539063],
                zoom: 4
            }); 

            myPlacemark1 = new ymaps.Placemark([43.115516, 131.877831], {
                iconContent: '1',
                balloonContent: 'Владивосток, Тигровая, 19',
                hintContent: 'Головной офис'
            });
            
            myPlacemark2 = new ymaps.Placemark([43.124452, 131.885089], {
                iconContent: '2',
                balloonContent: 'Владивосток, Октябрьская 8',
                hintContent: 'Дальэнергосбыт'
            });

            myPlacemark3 = new ymaps.Placemark([48.472273, 135.085158], {
                iconContent: '3',
                balloonContent: 'Хабаровск, Слободская, 12',
                hintContent: 'Хабаровскэнергосбыт'
            });

            myPlacemark4 = new ymaps.Placemark([48.790595, 132.922291], {
                iconContent: '4',
                balloonContent: 'Биробиджан, 60-летия СССР 22А',
                hintContent: 'Энергосбыт ЕАО'
            });
			
			myPlacemark5 = new ymaps.Placemark([50.26943, 127.537387], {
                iconContent: '5',
                balloonContent: 'Благовещенск, 50 лет Октября 65/1',
                hintContent: 'Амурэнергосбыт'
            });
			
            myPlacemark6 = new ymaps.Placemark([46.952838, 142.731950], {
                iconContent: '6',
                balloonContent: 'Южно-Сахалинск, космонавта Поповича 112',
                hintContent: 'Сахалинэнергосбыт'
            });

            myPlacemark7 = new ymaps.Placemark([53.071566, 158.594994], {
                iconContent: '7',
                balloonContent: 'Петропавловск-Камчатский, пр. Победы, 24',
                hintContent: 'Камчатскэнергосбыт'
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

// меню
var BranchesList = new ymaps.control.ListBox({
  data: {
    title: 'Выберите подразделение'
  },
  items: [
    new ymaps.control.ListBoxItem('Головной офис'),
	new ymaps.control.ListBoxSeparator(),
    new ymaps.control.ListBoxItem('Дальэнергосбыт'),
    new ymaps.control.ListBoxItem('Хабаровскэнергосбыт'),
    new ymaps.control.ListBoxItem('Энергосбыт ЕАО'),
    new ymaps.control.ListBoxItem('Амурэнергосбыт'),
    new ymaps.control.ListBoxItem('Сахалинэнергосбыт'),
    new ymaps.control.ListBoxItem('Камчатскэнергосбыт'),
  ]
});

BranchesList.get(0).events.add('click', function () {
    myMap.setCenter([43.117196, 131.879733], 14);
});
BranchesList.get(2).events.add('click', function () {
    myMap.setCenter([43.124417, 131.888316], 14);
});
BranchesList.get(3).events.add('click', function () {
    myMap.setCenter([48.473263, 135.085874], 13);
});
BranchesList.get(4).events.add('click', function () {
    myMap.setCenter([48.792418, 132.921739], 13);
});
BranchesList.get(5).events.add('click', function () {
    myMap.setCenter([50.269169, 127.537387], 13);
});
BranchesList.get(6).events.add('click', function () {
    myMap.setCenter([46.952838, 142.731950], 13);
});
BranchesList.get(7).events.add('click', function () {
    myMap.setCenter([53.071566, 158.594994], 13);
});

myMap.controls.add(BranchesList);

}
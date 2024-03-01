<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?> 
 
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
 
<script type="text/javascript">
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map ("map", {
                center: [47.428087, 134.539063],
                zoom: 5
            }); 

            myPlacemark0 = new ymaps.Placemark([43.115516, 131.877831], {
                iconContent: '1',
                balloonContent: 'Тигровая 19',
                hintContent: 'Головной офис'
            });
            
            myPlacemark1 = new ymaps.Placemark([43.124452, 131.885089], {
                iconContent: '2',
                balloonContent: 'Октябрьская 8',
                hintContent: 'Дальэнергосбыт'
            });

            myPlacemark2 = new ymaps.Placemark([48.472273, 135.085158], {
                iconContent: '3',
                balloonContent: 'Слободская 12',
                hintContent: 'Хабаровскэнергосбыт'
            });

            myPlacemark3 = new ymaps.Placemark([50.26943, 127.537387], {
                iconContent: '4',
                balloonContent: '50 лет Октября 65/1',
                hintContent: 'Амурэнергосбыт'
            });

            myPlacemark4 = new ymaps.Placemark([48.790595, 132.922291], {
                iconContent: '5',
                balloonContent: '60-летия СССР 22А',
                hintContent: 'Энергосбыт ЕАО'
            });

            myPlacemark5 = new ymaps.Placemark([55.669935, 37.475809], {
                iconContent: '6',
                balloonContent: 'Академика Анохина 2к1',
                hintContent: 'Представительство в Москве'
            });

            // Создание экземпляра элемента управления
            myMap.controls.add(new ymaps.control.ZoomControl());
            myMap.geoObjects.add(myPlacemark0);
            myMap.geoObjects.add(myPlacemark1);
            myMap.geoObjects.add(myPlacemark2);
            myMap.geoObjects.add(myPlacemark3);
            myMap.geoObjects.add(myPlacemark4);
            myMap.geoObjects.add(myPlacemark5);

// меню
var BranchesList = new ymaps.control.ListBox({
  data: {
    title: 'Выберите подразделение'
  },
  items: [
    new ymaps.control.ListBoxItem('Головной офис'),
    new ymaps.control.ListBoxItem('Дальэнергосбыт'),
    new ymaps.control.ListBoxItem('Хабаровскэнергосбыт'),
    new ymaps.control.ListBoxItem('Амурэнергосбыт'),
    new ymaps.control.ListBoxItem('Энергосбыт ЕАО'),
    new ymaps.control.ListBoxSeparator(),
    new ymaps.control.ListBoxItem('Представительство в Москве')
  ]
});

BranchesList.get(0).events.add('click', function () {
    myMap.setCenter([43.117196, 131.879733], 15);
});
BranchesList.get(1).events.add('click', function () {
    myMap.setCenter([43.124417, 131.888316], 15);
});
BranchesList.get(2).events.add('click', function () {
    myMap.setCenter([48.473263, 135.085874], 15);
});
BranchesList.get(3).events.add('click', function () {
    myMap.setCenter([50.269169, 127.537387], 15);
});
BranchesList.get(4).events.add('click', function () {
    myMap.setCenter([48.792418, 132.921739], 15);
});
BranchesList.get(6).events.add('click', function () {
    myMap.setCenter([55.669935, 37.475809], 13);
});

myMap.controls.add(BranchesList);

        }
    </script>
 
<div id="map" style="width: 563px; height: 400px;"></div>

 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
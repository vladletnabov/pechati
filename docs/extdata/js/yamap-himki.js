ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.9, 37.45],
            zoom: 13
        }),
    // Создание макета содержимого хинта.
    // Макет создается через фабрику макетов с помощью текстового шаблона.
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
            "<b>{{ properties.object }}</b><br />" +
            "{{ properties.address }}" + 
			"<img src={{ properties.img }} width='244px'/>" + 
            "</div>", {
                // Определяем метод getShape, который
                // будет возвращать размеры макета хинта.
                // Это необходимо для того, чтобы хинт автоматически
                // сдвигал позицию при выходе за пределы карты.
                getShape: function () {
                    var el = this.getElement(),
                        result = null;
                    if (el) {
                        var firstChild = el.firstChild;
                        result = new ymaps.shape.Rectangle(
                            new ymaps.geometry.pixel.Rectangle([
                                [0, 0],
                                [firstChild.offsetWidth, firstChild.offsetHeight]
                            ])
                        );
                    }
                    return result;
                }
            }
        );
	
    
	
    var myPlacemark = new ymaps.Placemark([55.886731, 37.426959], {
        address: "Химки, ул. Панфилова, д.1 ",
        object: "Филиал №1 в Химках",
		img:"/pics/contacts/himki/himki1.png"
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark2 = new ymaps.Placemark([55.894998, 37.449819], {
        address: "Химки, ул. Железнодорожная, Платформа №1 ",
        object: "Филиал №2 в Химках ",
		img:"/pics/contacts/himki/himki2.png"
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark3 = new ymaps.Placemark([55.902712, 37.404591], {
        address: "Химки, проспект Мельникова, д.10 (фотосалон) ",
        object: "Филиал №3 в Химках",
		img:"/pics/contacts/himki/himki3.png"
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark4 = new ymaps.Placemark([55.890765, 37.44647], {
        address: "Химки, ул. Московская, д.11 (фотосалон) ",
        object: "Филиал №4 в Химках",
		img:"/pics/contacts/himki/himki4.png"
    }, {
        hintLayout: HintLayout
    });

	myMap.controls.remove('trafficControl');
	myMap.controls.remove('typeSelector');
	myMap.controls.remove('routeEditor');
	myMap.controls.remove('zoomControl');
	myMap.controls.remove('smallZoomControl');
	myMap.controls.remove('scaleLine');
	myMap.controls.remove('miniMap');
    myMap.geoObjects.add(myPlacemark);
    myMap.geoObjects.add(myPlacemark2);
    myMap.geoObjects.add(myPlacemark3);
    myMap.geoObjects.add(myPlacemark4);
}

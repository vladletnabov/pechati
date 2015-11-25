ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.76, 37.65],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" + "<img src='{{ properties.img }}' /> <br />"+
            "<b>{{ properties.object }}</b><br />" +
            "{{ properties.address }}" +
            "</div>", {
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

    var myPlacemark1 = new ymaps.Placemark([55.759471, 37.645537], {
		img: "img/offices/1.jpg",
        address: "109384 г. Москва,ул. Покровка, 17",
        object: "Офис ПечатиРУ на Читых прудах"
    }, {
        hintLayout: HintLayout
    });
	var myPlacemark2 = new ymaps.Placemark([55.8, 37.8], {
		img: "img/offices/2.jpg",
        address: "109384 г. Москва,ул. Чистовка, 17",
        object: "Офис ПечатиРУ тут"
    }, {
        hintLayout: HintLayout
    });
	var myPlacemark3 = new ymaps.Placemark([55.77, 37.5], {
		img: "img/offices/3.jpg",
        address: "109384 г. Москва,ул. Боковка, 17",
        object: "Офис ПечатиРУ там"
    }, {
        hintLayout: HintLayout
    });
	var myPlacemark4 = new ymaps.Placemark([55.75, 37.64], {
		img: "img/offices/4.jpg",
        address: "109384 г. Москва,ул. Траковка, 17",
        object: "Офис ПечатиРУ здесь"
    }, {
        hintLayout: HintLayout
    });
	var myPlacemark5 = new ymaps.Placemark([55.71, 37.37], {
		img: "img/offices/5.jpg",
        address: "109384 г. Москва,ул. Дырковка, 17",
        object: "Офис ПечатиРУ тама"
    }, {
        hintLayout: HintLayout
    });
	var myPlacemark6 = new ymaps.Placemark([55.9471, 37.45537], {
		img: "img/offices/6.jpg",
        address: "109384 г. Москва,ул. Петровка, 17",
        object: "Офис ПечатиРУ вот тама"
    }, {
        hintLayout: HintLayout
    });
	var myPlacemark7 = new ymaps.Placemark([55.471, 37.5537], {
		img: "img/offices/7.jpg",
        address: "109384 г. Москва,ул. Балковка, 17",
        object: "Офис ПечатиРУ здеся"
    }, {
        hintLayout: HintLayout
    });
	var myPlacemark8 = new ymaps.Placemark([55.1, 37.37], {
		img: "img/offices/8.jpg",
        address: "109384 г. Москва,ул. Покровка, 17",
        object: "Офис ПечатиРУ и вот здеся"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark1);
    myMap.geoObjects.add(myPlacemark2);
    myMap.geoObjects.add(myPlacemark3);
    myMap.geoObjects.add(myPlacemark4);
    myMap.geoObjects.add(myPlacemark5);
    myMap.geoObjects.add(myPlacemark6);
    myMap.geoObjects.add(myPlacemark7);
    myMap.geoObjects.add(myPlacemark8);
}

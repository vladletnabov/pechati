ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.84411074437796, 37.37076478833003],
            zoom: 13
        }, {
            searchControlProvider: 'yandex#search'
        }),
    // Создание макета содержимого хинта.
    // Макет создается через фабрику макетов с помощью текстового шаблона.
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
            "<b>{{ properties.object }}</b><br />" +
            "{{ properties.address }}" +
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

    var myPlacemark = new ymaps.Placemark([55.848357, 37.351195], {
        address: "Москва, 3-й Митинский переулок, д.1 ",
        object: "Филиал №1 в Митино"
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark2 = new ymaps.Placemark([55.844433, 37.384007], {
        address: "Москва, Пятницкое шоссе, д.18 ",
        object: "Филиал №2 на Митинском Радиорынке"
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark3 = new ymaps.Placemark([55.825962, 37.353180], {
        address: "Москва, ул. Генерала Белобородова, д.40 ",
        object: "Филиал №3 в Митино, Коммунальная зона владение 2"
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark4 = new ymaps.Placemark([55.863773, 37.390775], {
        address: "Москва, Путилковское шоссе, д.4 ",
        object: "Филиал №4 в Митино"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);
    myMap.geoObjects.add(myPlacemark2);
    myMap.geoObjects.add(myPlacemark3);
    myMap.geoObjects.add(myPlacemark4);
}

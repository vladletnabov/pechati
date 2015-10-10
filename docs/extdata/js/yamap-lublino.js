ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.675, 37.777],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
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

    var myPlacemark = new ymaps.Placemark([55.675226, 37.777103], {
        address: "109384 г. Москва,Тихорецкий бульвар, дом 1, С/1У-01",
        object: "Офис ПечатиРУ в Люблино"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);
}

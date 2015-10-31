ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.76, 37.65],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" + "<img src='/pics/contacts/chistye-prudy/1-tn.jpg' /> <br />"+
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

    var myPlacemark = new ymaps.Placemark([55.759471, 37.645537], {
        address: "109384 г. Москва,ул. Покровка, 17",
        object: "Офис ПечатиРУ на Читых прудах"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);
}

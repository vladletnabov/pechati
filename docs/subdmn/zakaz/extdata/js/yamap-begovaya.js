ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.775, 37.532],
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

    var myPlacemark = new ymaps.Placemark([55.774872, 37.531442], {
        address: "������, ����������� �����, 13�, �.2",
        object: "���� �������� �� �������"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);
}

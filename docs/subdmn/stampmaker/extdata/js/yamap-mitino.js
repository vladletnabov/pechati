ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.84411074437796, 37.37076478833003],
            zoom: 13
        }, {
            searchControlProvider: 'yandex#search'
        }),
    // �������� ������ ����������� �����.
    // ����� ��������� ����� ������� ������� � ������� ���������� �������.
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
            "<b>{{ properties.object }}</b><br />" +
            "{{ properties.address }}" +
            "</div>", {
                // ���������� ����� getShape, �������
                // ����� ���������� ������� ������ �����.
                // ��� ���������� ��� ����, ����� ���� �������������
                // ������� ������� ��� ������ �� ������� �����.
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
	
    
	
    /*var myPlacemark = new ymaps.Placemark([55.848357, 37.351195], {
        address: "������, 3-� ��������� ��������, �.1 ",
        object: "������ �1 � ������"
    }, {
        hintLayout: HintLayout
    });*/
    var myPlacemark2 = new ymaps.Placemark([55.848468, 37.354528], {
        address: "������, ��������� �����, �.37 ",
        object: "������ �1 "
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark3 = new ymaps.Placemark([55.844324, 37.353180], {
        address: "������, ��������� �����, �.18 ",
        object: "������ �2 ��������� ����� �����"
    }, {
        hintLayout: HintLayout
    });
    var myPlacemark4 = new ymaps.Placemark([55.863773, 37.390775], {
        address: "������, ������������ �����, �.4 ",
        object: "������ �3 � ������"
    }, {
        hintLayout: HintLayout
    });

    /*myMap.geoObjects.add(myPlacemark);*/
    myMap.geoObjects.add(myPlacemark2);
    myMap.geoObjects.add(myPlacemark3);
    myMap.geoObjects.add(myPlacemark4);
}

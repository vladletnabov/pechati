ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.7382, 37.413493],
            zoom: 16
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
	
    
	
    var myPlacemark = new ymaps.Placemark([55.738272, 37.413493 ], {
        address: "������, ��. ���������, �.22, ���.1 ",
        object: "������ �� ���������"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);
}

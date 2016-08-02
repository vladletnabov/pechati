ymaps.ready(init);

function init () {
	
	
	
	
	
	
	
	
    var myMapFilial = new ymaps.Map("mapFilials", {
            center: [55.80445, 37.55176],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),
        HintLayoutFilial = ymaps.templateLayoutFactory.createClass( "<div class='my-hint2' style='height: 50px;'>" +
            "<b>{{ properties.object }}</b><br />" +
			"<img src='" + "{{ properties.img }}" + "' class='imgSize' /> <br />"+
            "{{ properties.address }}<br />" + 
			"{{ properties.phone }}" +
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
	myMapFilial.controls.remove('trafficControl');
	myMapFilial.controls.remove('typeSelector');
	myMapFilial.controls.remove('routeEditor');
	myMapFilial.controls.remove('zoomControl');
	myMapFilial.controls.remove('smallZoomControl');
	myMapFilial.controls.remove('scaleLine');
	myMapFilial.controls.remove('miniMap');
	
	
    requestUrl = "/extdata/baseparts/filialsWS.php";
	
	$.getJSON(requestUrl, function(data) {
		
		
		$.each( data, function( key, val ) {
				//resultKey = resultKey + '\n' + key ;
				//var coord;
				if (key==$curFilialJS){
					setMarkerToMapFilial(myMapFilial, HintLayoutFilial, val)
				}
		});
    });
	
	
	
	
	
    var myPlacemark = new ymaps.Placemark([55.759471, 37.645537], {
        address: "109384 г. Москва,ул. Покровка, 17",
        object: "Офис ПечатиРУ на Читых прудах"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);
}

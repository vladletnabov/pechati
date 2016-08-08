ymaps.ready(init);

function init () {
	
    var myMapFilial = new ymaps.Map("map", {
            center: [55.80445, 37.55176],
            zoom: 15
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
	
	
    requestUrl = "http://pechati.ru/extdata/baseparts/filialsWS.php";
	
	$.getJSON(requestUrl, function(data) {
		
		
		/*$.each( data, function( key, val ) {
				//resultKey = resultKey + '\n' + key ;
				//var coord;
				if (key.localeCompare($curFilialJS)){
					setMarkerToMapFilial(myMapFilial, HintLayoutFilial, val);
				}
		});*/
		setMarkerToMapFilial(myMapFilial, HintLayoutFilial,data[$curFilialJS]);
    });
	
	
	
	
	
   /* var myPlacemark = new ymaps.Placemark([55.759471, 37.645537], {
        address: "109384 г. Москва,ул. Покровка, 17",
        object: "Офис ПечатиРУ на Читых прудах"
    }, {
        hintLayout: HintLayout
    });

    myMap.geoObjects.add(myPlacemark);*/
}


function setMarkerToMapFilial(myMap, HintLayout, data){
	var $address = data['addrRegion'];
	if (data['addrRegion'].localeCompare(data['addrCity'])){
		$address  = $address + ", " + data['addrCity'];
	}
	$address  = $address  +  ", " + data['addrStreet'] +  ", " + data['addrHouse'];
	
    //console.log($address);
	var $filialName = "Филиал " + data['predlog'] +  " " + data['padej'];
	
    //console.log($filialName);
	var mapAddr = data['mapAddr'];
	mapAddr = mapAddr.replace("[","");
	mapAddr = mapAddr.replace("]","");
	var mapGeo = mapAddr.split(", ");
					
	var myPlacemark = new ymaps.Placemark([mapGeo[0], mapGeo[1]], {
        object: $filialName,
		img: data['img'],		
        address: $address,
		phone: data['phone']
    }, {
        hintLayout: HintLayout
    });
	//console.log(data['img']);
    //console.log(('add to map...' + data['mapAddr']));
    myMap.geoObjects.add(myPlacemark);
	if ('subFilials' in data) {
		//console.log('sub filials present');
		$.each( data['subFilials'], function( key, val ) {
			//var k = key;
			var num = Number(key) + 1;
			var $filialName = "Филиал " + "№ "+ num + " " + data['predlog'] +  " " + data['padej'];
			setMarkerToMapForSubfilialFilial(myMap, HintLayout, $filialName ,val);
		});
	}
	myMap.setCenter([mapGeo[0], mapGeo[1]]);
}

function setMarkerToMapForSubfilialFilial(myMap, HintLayout, $filialName,  data){
	
    //console.log($filialName);
	var $address = data['addrRegion'];
	if (data['addrRegion']=!data['addrCity']){
		$address  = $address + ", " + data['addrCity'];
	}
	$address  = $address  +  ", " + data['addrStreet'] +  ", " + data['addrHouse'];
	
    //console.log($address);
	
	var mapAddr = data['mapAddr'];
	mapAddr = mapAddr.replace("[","");
	mapAddr = mapAddr.replace("]","");
	var mapGeo = mapAddr.split(", ");
					
	var myPlacemark = new ymaps.Placemark([mapGeo[0], mapGeo[1]], {
        object: $filialName,
		img: data['img'],		
        address: $address,
		phone: data['phone']
    }, {
        hintLayout: HintLayout
    });
	//console.log(data['img']);
    //console.log(('add to map...' + data['mapAddr']));
    myMap.geoObjects.add(myPlacemark);
	myMap.setZoom(10);
}

function is_array(mix) {
    return ( mix instanceof Array );
}
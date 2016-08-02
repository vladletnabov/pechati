ymaps.ready(init);

function init() {
	var myUrl = window.location.href;	
	var myPattern = /(\w{4,5}):\/\/(((\w{3})\.(\w{7}).(\w{2}))|((\w{7}).(\w{2}))|((\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})))/;
	
	myUrl = myUrl.replace(myPattern,"");
	var $index = 'index.html';
	myUrl = myUrl.replace($index,"");
	
	myPattern = /(\?)|(\#)/i;
	console.log('URL: ' + myUrl);
	if(myUrl.search(myPattern)){
		myUrl=myUrl.split(myPattern)[0];
	}
	
	console.log('URL: ' + myUrl);
	
	var $urlCheck ='/main';
	var contactsPattern = /contacts/i;
	
	var uslugiPattern = /uslugi/i;
	console.log('uslugiPattern: ' + uslugiPattern);
	console.log('contactsPattern: ' + contactsPattern);
	console.log('myUrl: ' + myUrl);
	console.log('urlCheck: ' + $urlCheck);
	if (myUrl.search(uslugiPattern) != -1){
		console.log('uslugiPattern check: ' + uslugiPattern);
		var subStrPat = /\/(\w+)\/(\w+)/i;
		if(myUrl.search(subStrPat)!= -1){
			$urlCheck = '/main';	
		}
		else {
			$urlCheck = '/uslugi';
		}		
	} 
	if (myUrl.search(contactsPattern) != -1){
		console.log('contactsPattern check: ' + contactsPattern);
		$urlCheck = '/contacts';		
	}
	console.log('urlCheck: ' + $urlCheck);

    //console.log('init map');
	var myMap = new ymaps.Map("mapFilials", {
            center: [55.80445, 37.55176],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint2' style='height: 50px;'>" +
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
	myMap.controls.remove('trafficControl');
	myMap.controls.remove('typeSelector');
	myMap.controls.remove('routeEditor');
	myMap.controls.remove('zoomControl');
	myMap.controls.remove('smallZoomControl');
	myMap.controls.remove('scaleLine');
	myMap.controls.remove('miniMap');
	
        console.log('create map');
	
	
	
	var hashData;
	var resultKey = '';
    requestUrl = "/extdata/baseparts/filialsWS.php";
	
    //console.log('set URL');
	$.getJSON(requestUrl, function(data) {
		
        console.log('JSON request');
        //console.log(data);
		if ($urlCheck=='/contacts'){
			$.each( data, function( key, val ) {
				//resultKey = resultKey + '\n' + key ;
				//var coord;
				if (val['contacts']>0){
					setMarkerToMap(myMap, HintLayout, val)
				}
			});
		}
		else if ($urlCheck=='/uslugi'){
			$.each( data, function( key, val ) {
				//resultKey = resultKey + '\n' + key ;
				//var coord;
				if (val['uslugi']>0){
					setMarkerToMap(myMap, HintLayout, val)
				}
			});
		}
		else {
			$.each( data, function( key, val ) {
				//resultKey = resultKey + '\n' + key ;
				//var coord;
				if (val['mainList']>0){
					setMarkerToMap(myMap, HintLayout, val)
				}
			});
		}
		//alert (requestUrl + resultKey );
    });
    // Поиск координат центра Нижнего Новгорода.
}

function setMarkerToMap(myMap, HintLayout, data){
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
			setMarkerToMapForSubfilial(myMap, HintLayout, $filialName ,val);
		});
	}
}


function setMarkerToMapForSubfilial(myMap, HintLayout, $filialName,  data){
	
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
}

function is_array(mix) {
    return ( mix instanceof Array );
}
<style>
.select_metro {
	display: inline-block;
	margin-top: 10px;
	color: #0072B4;
	font-size: 12px;
	line-height: 12px;
	border-bottom: 1px dashed #0072B4;
	text-decoration: none;
	text-align: center;
	cursor: pointer;
}
#selected_districts, #selected_types {
	margin: 0;
	list-style: none;
	padding: 0 10px;
}
#selected_districts li, #selected_types li {
	margin: 5px 0 2px 0;
	border-bottom: 1px dashed #ddd;
}
.metro {
	position:	relative;
	width:		900px;
	height:		961px;
	background:	url(images/metro/metro.png) no-repeat left top;
	display: none;
}
.metro_fade {
	width:		900px;
	height:		961px;
	background:	#fff;
	opacity:	0.7;
	display:	none;
}
.metro_select {
	position: absolute;
	top: 5px;
	right: 10px;
	text-align: right;
}
.metro_select span {
	display: inline-block;
	cursor: pointer;
	color: #0072B4;
	border-bottom: 1px dashed #0072B4;
	margin-bottom: 5px;
}
.metro_select span.red {
	display: none;
	color: #C00;
	border-bottom: 1px dashed #C00;
}
.metro_line, .metro_station {
	position:	absolute;
	top:		0;
	left:		0;
	cursor:		pointer;
}
.metro_line_point {
	position: absolute;
	width:	  10px;
	height:	  10px;
}
.metro_station_label {
	position: absolute;
}
.metro_station_active .metro_station_label {
	background-image:	 url(images/metro/metro_labels.png);
	background-repeat:	 no-repeat;
	background-position: left top;
}
.metro_station_point {
	position: absolute;
	width:	  15px;
	height:	  15px;
}
.metro_station_active .metro_station_point {
	background-image:	 url(images/metro/metro_selected.png);
	background-repeat:	 no-repeat;
	background-position: left top;
}
.metro_line_point, .metro_station_label, .metro_station_point {
	background1: rgba(255,0,0,.4);
}

</style>
<script>/*
var districts = {"Авиамоторная":1,"Автозаводская":2,"Академическая":3,"Александровский сад":4,"Алексеевская":5,"Алма-Атинская":6,"Алтуфьево":7,"Аннино":8,"Арбатская":9,"Аэропорт":10,"Бабушкинская":11,"Багратионовская":12,"Баррикадная":13,"Бауманская":14,"Беговая":15,"Белорусская":16,"Беляево":17,"Бибирево":18,"Библиотека им. Ленина":19,"Битцевский парк":20,"Борисово":21,"Боровицкая":22,"Ботанический сад":23,"Братиславская":24,"Бульвар Адмирала Ушакова":25,"Бульвар Дмитрия Донского":26,"Бульвар Рокоссовского":155,"Бунинская аллея":27,"Варшавская":28,"ВДНХ":29,"Владыкино":30,"Водный стадион":31,"Войковская":32,"Волгоградский проспект":33,"Волжская":34,"Волоколамская":35,"Воробьевы горы":36,"Выставочная":37,"Выставочный Центр":213,"Выхино":38,"Деловой Центр":39,"Динамо":40,"Дмитровская":41,"Добрынинская":42,"Домодедовская":43,"Достоевская":44,"Дубровка":45,"Жулебино":46,"Зябликово":47,"Измайловская":48,"Калужская":49,"Кантемировская":50,"Каховская":51,"Каширская":52,"Киевская":53,"Китай-город":54,"Кожуховская":55,"Коломенская":56,"Комсомольская":57,"Коньково":58,"Красногвардейская":59,"Краснопресненская":60,"Красносельская":61,"Красные Ворота":62,"Крестьянская Застава":63,"Кропоткинская":64,"Крылатское":65,"Кузнецкий Мост":66,"Кузьминки":67,"Кунцевская":68,"Курская":69,"Кутузовская":70,"Ленинский проспект":71,"Лермонтовский проспект":72,"Лесопарковая":73,"Лубянка":74,"Люблино":75,"Марксистская":76,"Марьина Роща":77,"Марьино":78,"Маяковская":79,"Медведково":80,"Международная":81,"Менделеевская":82,"Митино":83,"Молодежная":84,"Мякинино":85,"Нагатинская":86,"Нагорная":87,"Нахимовский проспект":88,"Новогиреево":89,"Новокосино":90,"Новокузнецкая":91,"Новослободская":92,"Новоясеневская":93,"Новые Черемушки":94,"Октябрьская":95,"Октябрьское Поле":96,"Орехово":97,"Отрадное":98,"Охотный Ряд":99,"Павелецкая":100,"Парк культуры":101,"Парк Победы":102,"Партизанская":103,"Первомайская":104,"Перово":105,"Петровско-Разумовская":106,"Печатники":107,"Пионерская":108,"Планерная":109,"Площадь Ильича":110,"Площадь Революции":111,"Полежаевская":112,"Полянка":113,"Пражская":114,"Преображенская площадь":115,"Пролетарская":116,"Проспект Вернадского":117,"Проспект Мира":118,"Профсоюзная":119,"Пушкинская":120,"Пятницкое шоссе":121,"Речной вокзал":122,"Рижская":123,"Римская":124,"Рязанский проспект":125,"Савеловская":126,"Свиблово":127,"Севастопольская":128,"Семеновская":129,"Серпуховская":130,"Славянский бульвар":131,"Смоленская":132,"Сокол":133,"Сокольники":134,"Спартак":212,"Спортивная":135,"Сретенский бульвар":136,"Строгино":137,"Студенческая":138,"Сухаревская":139,"Сходненская":140,"Таганская":141,"Тверская":142,"Театральная":143,"Текстильщики":144,"Телецентр":214,"Теплый Стан":145,"Тимирязевская":146,"Третьяковская":147,"Тропарево":215,"Трубная":148,"Тульская":149,"Тургеневская":150,"Тушинская":151,"Улица 1905 года":152,"Улица Академика Королева":211,"Улица Академика Янгеля":153,"Улица Горчакова":154,"Улица Милашенкова":216,"Улица Сергея Эйзенштейна":217,"Улица Скобелевская":156,"Улица Старокачаловская":157,"Университет":158,"Филевский парк":159,"Фили":160,"Фрунзенская":161,"Царицыно":162,"Цветной бульвар":163,"Черкизовская":164,"Чертановская":165,"Чеховская":166,"Чистые пруды":167,"Чкаловская":168,"Шаболовская":169,"Шипиловская":170,"Шоссе Энтузиастов":171,"Щелковская":172,"Щукинская":173,"Электрозаводская":174,"Юго-Западная":175,"Южная":176,"Ясенево":177};

var selected_types = [];
var selected_districts = {};
var selected_districts_counter = 0;

function district_show(val) {
	var d = $('#select_district');
	if(!val || val==1 || val==20) {
		d.parent().parent().show();
	} else {
		d.val('').trigger('refresh');
		d.parent().parent().hide();
		district_clear();
	}
}
function district_add(name) {
	if(selected_districts[name]) return;
	selected_districts[name] = districts[name];
	$('.metro_station[title="'+name+'"]').addClass('metro_station_active');
	selected_districts_counter++;
	district_update();
}
function district_remove(name) {
	if(!selected_districts[name]) return;
	delete selected_districts[name];
	$('.metro_station[title="'+name+'"]').removeClass('metro_station_active');
	selected_districts_counter--;
	district_update();
}
function district_clear() {
	for(var i in selected_districts) {
		district_remove(i);
	}
}
function district_update() {
	$('#selected_districts').html('');
	for(var i in selected_districts) {
		$('#selected_districts').append(
			$('<li><input type="hidden" name="district[]" value="'+selected_districts[i]+'"/><span>'+i+'</span><div class="fr" style="font-weight:bold;cursor:pointer" onclick="district_remove(\''+i+'\');$(this).parent().remove()">X</div></li>')
		);
	}
	$('.metro_fade, .metro_select_clear').toggle(!!selected_districts_counter);
}
$(function(){
	district_show($('#select_city').val());
	
	$('#select_city').change(function(){
		district_show($(this).val());
	});
	
	$('#selected_types li[typeid]').each(function(){
		selected_types[parseInt($(this).attr('typeid'))] = 1;
	});
	$('#select_type').change(function(){
		if(!selected_types[$(this).val()]) {
			selected_types[$(this).val()] = 1;
			$('#selected_types').append(
				$('<li><input type="hidden" name="type[]" value="'+$(this).val()+'"/>'+this.options[this.selectedIndex].innerHTML+'<div class="fr" style="font-weight:bold;cursor:pointer" onclick="window.selected_types['+$(this).val()+']=0;$(this).parent().remove()">X</div></li>')
			);
		}
		$('#select_type').val('').trigger('refresh');
	});
	
	$('#selected_districts li span').each(function(){
		district_add($(this).text());
	});
	$('#select_district').change(function(){
		district_add(this.options[this.selectedIndex].innerHTML);
		$('#select_district').val('').trigger('refresh');
	});
});*/
</script>

<script>
$(function(){
	$('.metro_station').click(function(){
		var title = $(this).attr('title');
		alert(title);
		!selected_districts[title] ? district_add(title) : district_remove(title, 1);
	});
	$('.metro_line_point, .metro_select span').click(function(){
		if($(this).hasClass('red')) return;
		var stations = $(this).attr('stations').split(',');
		alert(stations);
		for(var i in stations) {
			$('.metro_station[title="'+stations[i]+'"]').click();
		}
	});
	$('.metro_select_clear').click(function(){
		district_clear();
	});
	$('#selected_districts').before('<div class="center"><a class="select_metro" href="#metro">Выбрать станции на схеме метро</a></div>');
	$('.select_metro').fancybox({
		fitToView	: false,
		autoSize	: true,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
});
</script>
<div class="metro" id="metro" style="display: block;">
	<div class="metro_fade" style="display: none;"></div>
	
	<!-- Селекторы -->
	
	<div class="metro_select">
			<span class="metro_select_inside" stations="Александровский сад,Арбатская,Библиотека им. Ленина,Боровицкая,Китай-город,Красные Ворота,Кропоткинская,Кузнецкий Мост,Лубянка,Маяковская,Новокузнецкая,Охотный Ряд,Пл. Революции,Полянка,Пушкинская,Смоленская,Сретенский бульвар,Сухаревская,Тверская,Театральная,Третьяковская,Трубная,Тургеневская,Цветной бульвар,Чеховская,Чистые пруды">
				Выбрать станции внутри кольца
			</span><br>
			<span class="metro_select_circle" stations="Баррикадная,Белорусская,Добрынинская,Киевская,Комсомольская,Краснопресненская,Курская,Марксистская,Менделеевская,Новослободская,Октябрьская,Павелецкая,Парк культуры,Проспект Мира,Серпуховская,Таганская,Чкаловская">
				Выбрать кольцевые станции
			</span><br>
			<span class="metro_select_clear red" style="display: none;">
				Удалить выбранные станции
			</span>
	</div>
	
	<!-- Линии -->
	
	<div class="metro_line" title="Сокольническая линия">
		<div class="metro_line_point" style="left: 644px;top: 89px;" stations="Бульвар Рокоссовского,Красносельская,Преображенская площадь,Сокольники,Черкизовская"></div>
		<div class="metro_line_point" style="left: 43px;top: 744px;" stations="Воробьевы горы,Проспект Вернадского,Спортивная,Тропарево,Университет,Фрунзенская,Юго-Западная"></div>
	</div>
	<div class="metro_line" title="Замоскворецкая линия">
		<div class="metro_line_point" style="left: 217px;top: 71px;" stations="Аэропорт,Водный стадион,Войковская,Динамо,Речной вокзал,Сокол"></div>
		<div class="metro_line_point" style="left: 723px;top: 907px;" stations="Автозаводская,Алма-Атинская,Домодедовская,Кантемировская,Каширская,Коломенская,Красногвардейская,Орехово,Царицыно"></div>
	</div>
	<div class="metro_line" title="Арбатско-Покровская линия">
		<div class="metro_line_point" style="left: 8px;top: 93px;" stations="Волоколамская,Крылатское,Кунцевская,Митино,Молодежная,Мякинино,Парк Победы,Пятницкое шоссе,Славянский бульвар,Строгино"></div>
		<div class="metro_line_point" style="left: 757px;top: 132px;" stations="Бауманская,Измайловская,Партизанская,Первомайская,Семеновская,Щелковская,Электрозаводская"></div>
	</div>
	<div class="metro_line" title="Филевская линия">
		<div class="metro_line_point" style="left: 40px; top: 334px;" stations="Багратионовская,Выставочная,Кунцевская,Кутузовская,Международная,Пионерская,Студенческая,Филевский парк,Фили"></div>
		<div class="metro_line_point" style="left: 132px; top: 421px;" stations="Выставочная,Международная"></div>
	</div>
	<div class="metro_line" title="Кольцевая линия">
		<div class="metro_line_point" style="left: 250px; top: 423px;" stations="Баррикадная,Белорусская,Добрынинская,Киевская,Комсомольская,Краснопресненская,Курская,Марксистская,Менделеевская,Новослободская,Октябрьская,Павелецкая,Парк культуры,Проспект Мира,Серпуховская,Таганская,Чкаловская"></div>
		<div class="metro_line_point" style="left: 660px; top: 415px;" stations="Баррикадная,Белорусская,Добрынинская,Киевская,Комсомольская,Краснопресненская,Курская,Марксистская,Менделеевская,Новослободская,Октябрьская,Павелецкая,Парк культуры,Проспект Мира,Серпуховская,Таганская,Чкаловская"></div>
	</div>
	<div class="metro_line" title="Калужско-Рижская линия">
		<div class="metro_line_point" style="left: 525px; top: 10px;" stations="Алексеевская,Бабушкинская,Ботанический сад,ВДНХ,Медведково,Рижская,Свиблово"></div>
		<div class="metro_line_point" style="left: 267px; top: 877px;" stations="Академическая,Беляево,Калужская,Коньково,Ленинский проспект,Новоясеневская,Новые Черемушки,Профсоюзная,Теплый Стан,Шаболовская,Ясенево"></div>
	</div>
	<div class="metro_line" title="Таганско-Краснопресненская линия">
		<div class="metro_line_point" style="left: 108px; top: 127px;" stations="Беговая,Октябрьское Поле,Планерная,Полежаевская,Спартак,Сходненская,Тушинская,Улица 1905 года,Щукинская"></div>
		<div class="metro_line_point" style="left: 802px; top: 780px;" stations="Волгоградский проспект,Выхино,Жулебино,Кузьминки,Лермонтовский проспект,Пролетарская,Рязанский проспект,Текстильщики"></div>
	</div>
	<div class="metro_line" title="Калининская линия">
		<div class="metro_line_point" style="left: 112px; top: 461px;" stations="Деловой Центр,Парк Победы"></div>
		<div class="metro_line_point" style="left: 112px; top: 572px;" stations="Деловой Центр,Парк Победы"></div>
		<div class="metro_line_point" style="left: 816px; top: 353px;" stations="Авиамоторная,Новогиреево,Новокосино,Перово,Площадь Ильича,Шоссе Энтузиастов"></div>
	</div>
	<div class="metro_line" title="Серпуховско-Тимирязевская линия">
		<div class="metro_line_point" style="left: 313px; top: 10px;" stations="Алтуфьево,Бибирево,Владыкино,Дмитровская,Отрадное,Петровско-Разумовская,Савеловская,Тимирязевская"></div>
		<div class="metro_line_point" style="left: 229px; top: 924px;" stations="Аннино,Бульвар Дмитрия Донского,Нагатинская,Нагорная,Нахимовский проспект,Пражская,Севастопольская,Тульская,Улица Академика Янгеля,Чертановская,Южная"></div>
	</div>
	<div class="metro_line" title="Люблинско-Дмитровская линия">
		<div class="metro_line_point" style="left: 437px; top: 156px;" stations="Достоевская,Марьина Роща"></div>
		<div class="metro_line_point" style="left: 723px; top: 878px;" stations="Борисово,Братиславская,Волжская,Дубровка,Зябликово,Кожуховская,Крестьянская Застава,Люблино,Марьино,Печатники,Римская,Шипиловская"></div>
	</div>
	<div class="metro_line" title="Каховская линия">
		<div class="metro_line_point" style="left: 425px; top: 794px;" stations="Варшавская,Каховская,Каширская"></div>
		<div class="metro_line_point" style="left: 615px; top: 735px;" stations="Варшавская,Каховская,Каширская"></div>
	</div>
	<div class="metro_line" title="Бутовская линия">
		<div class="metro_line_point" style="left: 21px; top: 920px;" stations="Битцевский парк,Бульвар Адмирала Ушакова,Бунинская аллея,Лесопарковая,Улица Горчакова,Улица Скобелевская,Улица Старокачаловская"></div>
		<div class="metro_line_point" style="left: 251px; top: 850px;" stations="Битцевский парк,Бульвар Адмирала Ушакова,Бунинская аллея,Лесопарковая,Улица Горчакова,Улица Скобелевская,Улица Старокачаловская"></div>
	</div>
	<div class="metro_line" title="Монорельс">
		<div class="metro_line_point" style="left: 349px; top: 136px;" stations="Выставочный центр,Телецентр,Тимирязевская,Улица Академика Королева,Улица Милашенкова,Улица Сергея Эйзенштейна"></div>
		<div class="metro_line_point" style="left: 587px; top: 118px;" stations="Выставочный центр,Телецентр,Тимирязевская,Улица Академика Королева,Улица Милашенкова,Улица Сергея Эйзенштейна"></div>
	</div>

	<!-- Станции -->
	
	<div class="metro_station" title="Борисово">
		<div class="metro_station_label" style="left:720px;top:813px;width:56px;height:12px;background-position:-720px -813px;"></div>
		<div class="metro_station_point" style="left:707px;top:811px;"></div>
	</div>
	<div class="metro_station" title="Шипиловская">
		<div class="metro_station_label" style="left:720px;top:840px;width:79px;height:12px;background-position:-720px -840px;"></div>
		<div class="metro_station_point" style="left:707px;top:838px;"></div>
	</div>
	<div class="metro_station" title="Зябликово">
		<div class="metro_station_label" style="left:720px;top:865px;width:62px;height:12px;background-position:-720px -865px;"></div>
		<div class="metro_station_point" style="left:707px;top:863px;"></div>
	</div>
	<div class="metro_station" title="Чертановская">
		<div class="metro_station_label" style="left:464px;top:835px;width:78px;height:16px;background-position:-464px -835px;"></div>
		<div class="metro_station_point" style="left:451px;top:834px;"></div>
	</div>
	<div class="metro_station" title="Южная">
		<div class="metro_station_label" style="left:453px;top:868px;width:44px;height:15px;background-position:-453px -868px;"></div>
		<div class="metro_station_point" style="left:444px;top:856px;"></div>
	</div>
	<div class="metro_station" title="Пражская">
		<div class="metro_station_label" style="left:434px;top:887px;width:57px;height:15px;background-position:-434px -887px;"></div>
		<div class="metro_station_point" style="left:426px;top:876px;"></div>
	</div>
	<div class="metro_station" title="Улица Академика Янгеля">
		<div class="metro_station_label" style="left:415px;top:907px;width:135px;height:15px;background-position:-415px -907px;"></div>
		<div class="metro_station_point" style="left:407px;top:894px;"></div>
	</div>
	<div class="metro_station" title="Аннино">
		<div class="metro_station_label" style="left:348px;top:893px;width:47px;height:15px;background-position:-348px -893px;"></div>
		<div class="metro_station_point" style="left:365px;top:906px;"></div>
	</div>
	<div class="metro_station" title="Алтуфьево">
		<div class="metro_station_label" style="left:339px;top:5px;width:63px;height:16px;background-position:-339px -5px;"></div>
		<div class="metro_station_point" style="left:326px;top:5px;"></div>
	</div>
	<div class="metro_station" title="Бибирево">
		<div class="metro_station_label" style="left:338px;top:23px;width:59px;height:16px;background-position:-338px -23px;"></div>
		<div class="metro_station_point" style="left:326px;top:23px;"></div>
	</div>
	<div class="metro_station" title="Отрадное">
		<div class="metro_station_label" style="left:338px;top:43px;width:57px;height:15px;background-position:-338px -43px;"></div>
		<div class="metro_station_point" style="left:326px;top:42px;"></div>
	</div>
	<div class="metro_station" title="Владыкино">
		<div class="metro_station_label" style="left:338px;top:62px;width:65px;height:16px;background-position:-338px -62px;"></div>
		<div class="metro_station_point" style="left:326px;top:61px;"></div>
	</div>
	<div class="metro_station" title="Петровско-Разумовская">
		<div class="metro_station_label" style="left:338px;top:81px;width:131px;height:15px;background-position:-338px -81px;"></div>
		<div class="metro_station_point" style="left:326px;top:81px;"></div>
	</div>
	<div class="metro_station" title="Дмитровская">
		<div class="metro_station_label" style="left:338px;top:158px;width:76px;height:12px;background-position:-338px -158px;"></div>
		<div class="metro_station_point" style="left:326px;top:156px;"></div>
	</div>
	<div class="metro_station" title="Марьина Роща">
		<div class="metro_station_label" style="left:447px;top:167px;width:82px;height:12px;background-position:-447px -167px;"></div>
		<div class="metro_station_point" style="left:435px;top:165px;"></div>
	</div>
	<div class="metro_station" title="Достоевская">
		<div class="metro_station_label" style="left:447px;top:193px;width:71px;height:12px;background-position:-447px -193px;"></div>
		<div class="metro_station_point" style="left:435px;top:191px;"></div>
	</div>
	<div class="metro_station" title="Трубная">
		<div class="metro_station_label" style="left:421px;top:312px;width:50px;height:12px;background-position:-421px -312px;"></div>
		<div class="metro_station_point" style="left:409px;top:309px;"></div>
	</div>
	<div class="metro_station" title="Сретенский бульвар">
		<div class="metro_station_label" style="left:492px;top:313px;width:61px;height:21px;background-position:-492px -313px;"></div>
		<div class="metro_station_point" style="left:515px;top:333px;"></div>
	</div>
	<div class="metro_station" title="Менделеевская">
		<div class="metro_station_label" style="left:348px;top:212px;width:86px;height:17px;background-position:-348px -212px;"></div>
		<div class="metro_station_point" style="left:347px;top:226px;"></div>
	</div>
	<div class="metro_station" title="Чеховская">
		<div class="metro_station_label" style="left:395px;top:365px;width:59px;height:15px;background-position:-395px -365px;"></div>
		<div class="metro_station_point" style="left:383px;top:357px;"></div>
	</div>
	<div class="metro_station" title="Полянка">
		<div class="metro_station_label" style="left:463px;top:601px;width:51px;height:15px;background-position:-463px -601px;"></div>
		<div class="metro_station_point" style="left:451px;top:601px;"></div>
	</div>
	<div class="metro_station" title="Серпуховская">
		<div class="metro_station_label" style="left:462px;top:648px;width:80px;height:16px;background-position:-462px -648px;"></div>
		<div class="metro_station_point" style="left:451px;top:646px;"></div>
		<div class="metro_station_point" style="left:438px;top:633px;"></div>
	</div>
	<div class="metro_station" title="Тульская">
		<div class="metro_station_label" style="left:464px;top:676px;width:52px;height:16px;background-position:-464px -676px;"></div>
		<div class="metro_station_point" style="left:451px;top:675px;"></div>
	</div>
	<div class="metro_station" title="Нагатинская">
		<div class="metro_station_label" style="left:464px;top:700px;width:71px;height:15px;background-position:-464px -700px;"></div>
		<div class="metro_station_point" style="left:451px;top:700px;"></div>
	</div>
	<div class="metro_station" title="Нагорная">
		<div class="metro_station_label" style="left:464px;top:725px;width:56px;height:15px;background-position:-464px -725px;"></div>
		<div class="metro_station_point" style="left:451px;top:724px;"></div>
	</div>
	<div class="metro_station" title="Нахимовский проспект">
		<div class="metro_station_label" style="left:464px;top:750px;width:77px;height:24px;background-position:-464px -750px;"></div>
		<div class="metro_station_point" style="left:451px;top:750px;"></div>
	</div>
	<div class="metro_station" title="Севастопольская">
		<div class="metro_station_label" style="left:464px;top:807px;width:94px;height:15px;background-position:-464px -807px;"></div>
		<div class="metro_station_point" style="left:451px;top:806px;"></div>
	</div>
	<div class="metro_station" title="Цветной бульвар">
		<div class="metro_station_label" style="left:350px;top:299px;width:45px;height:21px;background-position:-350px -299px;"></div>
		<div class="metro_station_point" style="left:396px;top:295px;"></div>
	</div>
	<div class="metro_station" title="Тимирязевская">
		<div class="metro_station_label" style="left:341px;top:102px;width:85px;height:15px;background-position:-341px -102px;"></div>
		<div class="metro_station_point" style="left:326px;top:102px;"></div>
		<div class="metro_station_label" style="left:352px;top:117px;width:73px;height:10px;background-position:-352px -117px;"></div>
		<div class="metro_station_point" style="left:347px;top:123px;"></div>
	</div>
	<div class="metro_station" title="Римская">
		<div class="metro_station_label" style="left:712px;top:483px;width:50px;height:12px;background-position:-712px -483px;"></div>
		<div class="metro_station_point" style="left:700px;top:480px;"></div>
	</div>
	<div class="metro_station" title="Крестьянская Застава">
		<div class="metro_station_label" style="left:724px;top:543px;width:69px;height:19px;background-position:-724px -543px;"></div>
		<div class="metro_station_point" style="left:707px;top:559px;"></div>
	</div>
	<div class="metro_station" title="Дубровка">
		<div class="metro_station_label" style="left:720px;top:627px;width:57px;height:12px;background-position:-720px -627px;"></div>
		<div class="metro_station_point" style="left:707px;top:625px;"></div>
	</div>
	<div class="metro_station" title="Кожуховская">
		<div class="metro_station_label" style="left:720px;top:654px;width:72px;height:12px;background-position:-720px -654px;"></div>
		<div class="metro_station_point" style="left:707px;top:651px;"></div>
	</div>
	<div class="metro_station" title="Печатники">
		<div class="metro_station_label" style="left:720px;top:680px;width:63px;height:12px;background-position:-720px -680px;"></div>
		<div class="metro_station_point" style="left:707px;top:678px;"></div>
	</div>
	<div class="metro_station" title="Волжская">
		<div class="metro_station_label" style="left:720px;top:707px;width:56px;height:12px;background-position:-720px -707px;"></div>
		<div class="metro_station_point" style="left:707px;top:704px;"></div>
	</div>
	<div class="metro_station" title="Люблино">
		<div class="metro_station_label" style="left:720px;top:733px;width:55px;height:12px;background-position:-720px -733px;"></div>
		<div class="metro_station_point" style="left:707px;top:731px;"></div>
	</div>
	<div class="metro_station" title="Каширская">
		<div class="metro_station_label" style="left:597px;top:721px;width:64px;height:12px;background-position:-597px -721px;"></div>
		<div class="metro_station_point" style="left:584px;top:720px;"></div>
		<div class="metro_station_point" style="left:598px;top:732px;"></div>
	</div>
	<div class="metro_station" title="Красногвардейская">
		<div class="metro_station_label" style="left:589px;top:888px;width:108px;height:12px;background-position:-589px -888px;"></div>
		<div class="metro_station_point" style="left:694px;top:877px;"></div>
	</div>
	<div class="metro_station" title="Орехово">
		<div class="metro_station_label" style="left:651px;top:817px;width:49px;height:12px;background-position:-651px -817px;"></div>
		<div class="metro_station_point" style="left:641px;top:825px;"></div>
	</div>
	<div class="metro_station" title="Царицыно">
		<div class="metro_station_label" style="left:626px;top:793px;width:62px;height:12px;background-position:-626px -793px;"></div>
		<div class="metro_station_point" style="left:618px;top:801px;"></div>
	</div>
	<div class="metro_station" title="Кантемировская">
		<div class="metro_station_label" style="left:602px;top:768px;width:93px;height:12px;background-position:-602px -768px;"></div>
		<div class="metro_station_point" style="left:593px;top:775px;"></div>
	</div>
	<div class="metro_station" title="Коломенская">
		<div class="metro_station_label" style="left:596px;top:687px;width:74px;height:12px;background-position:-596px -687px;"></div>
		<div class="metro_station_point" style="left:584px;top:685px;"></div>
	</div>
	<div class="metro_station" title="Автозаводская">
		<div class="metro_station_label" style="left:596px;top:651px;width:82px;height:12px;background-position:-596px -651px;"></div>
		<div class="metro_station_point" style="left:584px;top:649px;"></div>
	</div>
	<div class="metro_station" title="Павелецкая">
		<div class="metro_station_label" style="left:585px;top:596px;width:67px;height:12px;background-position:-585px -596px;"></div>
		<div class="metro_station_point" style="left:574px;top:584px;"></div>
		<div class="metro_station_point" style="left:574px;top:602px;"></div>
	</div>
	<div class="metro_station" title="Театральная">
		<div class="metro_station_label" style="left:456px;top:453px;width:72px;height:12px;background-position:-456px -453px;"></div>
		<div class="metro_station_point" style="left:447px;top:459px;"></div>
	</div>
	<div class="metro_station" title="Тверская">
		<div class="metro_station_label" style="left:311px;top:367px;width:53px;height:12px;background-position:-311px -367px;"></div>
		<div class="metro_station_point" style="left:362px;top:357px;"></div>
	</div>
	<div class="metro_station" title="Аэропорт">
		<div class="metro_station_label" style="left:243px;top:219px;width:54px;height:12px;background-position:-243px -219px;"></div>
		<div class="metro_station_point" style="left:231px;top:227px;"></div>
	</div>
	<div class="metro_station" title="Сокол">
		<div class="metro_station_label" style="left:228px;top:189px;width:37px;height:12px;background-position:-228px -189px;"></div>
		<div class="metro_station_point" style="left:215px;top:186px;"></div>
	</div>
	<div class="metro_station" title="Войковская">
		<div class="metro_station_label" style="left:228px;top:157px;width:66px;height:12px;background-position:-228px -157px;"></div>
		<div class="metro_station_point" style="left:215px;top:154px;"></div>
	</div>
	<div class="metro_station" title="Братиславская">
		<div class="metro_station_label" style="left:720px;top:760px;width:81px;height:12px;background-position:-720px -760px;"></div>
		<div class="metro_station_point" style="left:707px;top:758px;"></div>
	</div>
	<div class="metro_station" title="Марьино">
		<div class="metro_station_label" style="left:720px;top:787px;width:54px;height:12px;background-position:-720px -787px;"></div>
		<div class="metro_station_point" style="left:707px;top:784px;"></div>
	</div>
	<div class="metro_station" title="Домодедовская">
		<div class="metro_station_label" style="left:582px;top:860px;width:89px;height:12px;background-position:-582px -860px;"></div>
		<div class="metro_station_point" style="left:665px;top:849px;"></div>
	</div>
	<div class="metro_station" title="Белорусская">
		<div class="metro_station_label" style="left:216px;top:289px;width:68px;height:12px;background-position:-216px -289px;"></div>
		<div class="metro_station_point" style="left:281px;top:277px;"></div>
		<div class="metro_station_point" style="left:282px;top:297px;"></div>
	</div>
	<div class="metro_station" title="Савеловская">
		<div class="metro_station_label" style="left:338px;top:186px;width:72px;height:12px;background-position:-338px -186px;"></div>
		<div class="metro_station_point" style="left:326px;top:183px;"></div>
	</div>
	<div class="metro_station" title="Варшавская">
		<div class="metro_station_label" style="left:477px;top:781px;width:70px;height:12px;background-position:-477px -781px;"></div>
		<div class="metro_station_point" style="left:506px;top:792px;"></div>
	</div>
	<div class="metro_station" title="Кузнецкий Мост">
		<div class="metro_station_label" style="left:418px;top:393px;width:56px;height:17px;background-position:-418px -393px;"></div>
		<div class="metro_station_point" style="left:464px;top:376px;"></div>
	</div>
	<div class="metro_station" title="Лубянка">
		<div class="metro_station_label" style="left:483px;top:410px;width:51px;height:12px;background-position:-483px -410px;"></div>
		<div class="metro_station_point" style="left:483px;top:394px;"></div>
	</div>
	<div class="metro_station" title="Китай-город">
		<div class="metro_station_label" style="left:477px;top:431px;width:71px;height:12px;background-position:-477px -431px;"></div>
		<div class="metro_station_point" style="left:541px;top:418px;"></div>
		<div class="metro_station_point" style="left:548px;top:436px;"></div>
	</div>
	<div class="metro_station" title="Библиотека им. Ленина">
		<div class="metro_station_label" style="left:403px;top:497px;width:64px;height:21px;background-position:-403px -497px;"></div>
		<div class="metro_station_point" style="left:391px;top:485px;"></div>
	</div>
	<div class="metro_station" title="Сухаревская">
		<div class="metro_station_label" style="left:481px;top:284px;width:71px;height:12px;background-position:-481px -284px;"></div>
		<div class="metro_station_point" style="left:469px;top:282px;"></div>
	</div>
	<div class="metro_station" title="Тургеневская">
		<div class="metro_station_label" style="left:434px;top:354px;width:69px;height:11px;background-position:-434px -354px;"></div>
		<div class="metro_station_point" style="left:505px;top:352px;"></div>
	</div>
	<div class="metro_station" title="Октябрьская">
		<div class="metro_station_label" style="left:374px;top:611px;width:73px;height:12px;background-position:-374px -611px;"></div>
		<div class="metro_station_point" style="left:366px;top:600px;"></div>
		<div class="metro_station_point" style="left:366px;top:619px;"></div>
	</div>
	<div class="metro_station" title="Шаболовская">
		<div class="metro_station_label" style="left:327px;top:659px;width:77px;height:12px;background-position:-327px -659px;"></div>
		<div class="metro_station_point" style="left:319px;top:647px;"></div>
	</div>
	<div class="metro_station" title="Ленинский проспект">
		<div class="metro_station_label" style="left:306px;top:680px;width:116px;height:12px;background-position:-306px -680px;"></div>
		<div class="metro_station_point" style="left:299px;top:666px;"></div>
	</div>
	<div class="metro_station" title="Парк культуры">
		<div class="metro_station_label" style="left:324px;top:573px;width:54px;height:21px;background-position:-324px -573px;"></div>
		<div class="metro_station_point" style="left:312px;top:564px;"></div>
		<div class="metro_station_point" style="left:312px;top:588px;"></div>
	</div>
	<div class="metro_station" title="Добрынинская">
		<div class="metro_station_label" style="left:357px;top:644px;width:85px;height:12px;background-position:-357px -644px;"></div>
		<div class="metro_station_point" style="left:438px;top:633px;"></div>
	</div>
	<div class="metro_station" title="Курская">
		<div class="metro_station_label" style="left:650px;top:382px;width:48px;height:12px;background-position:-650px -382px;"></div>
		<div class="metro_station_point" style="left:634px;top:382px;"></div>
		<div class="metro_station_point" style="left:644px;top:394px;"></div>
	</div>
	<div class="metro_station" title="Проспект Вернадского">
		<div class="metro_station_label" style="left:102px;top:703px;width:123px;height:12px;background-position:-102px -703px;"></div>
		<div class="metro_station_point" style="left:90px;top:692px;"></div>
	</div>
	<div class="metro_station" title="Университет">
		<div class="metro_station_label" style="left:124px;top:680px;width:73px;height:12px;background-position:-124px -680px;"></div>
		<div class="metro_station_point" style="left:113px;top:669px;"></div>
	</div>
	<div class="metro_station" title="Воробьевы горы">
		<div class="metro_station_label" style="left:146px;top:655px;width:93px;height:17px;background-position:-146px -655px;"></div>
		<div class="metro_station_point" style="left:136px;top:646px;"></div>
	</div>
	<div class="metro_station" title="Спортивная">
		<div class="metro_station_label" style="left:176px;top:634px;width:69px;height:12px;background-position:-176px -634px;"></div>
		<div class="metro_station_point" style="left:205px;top:618px;"></div>
	</div>
	<div class="metro_station" title="Фрунзенская">
		<div class="metro_station_label" style="left:200px;top:596px;width:77px;height:13px;background-position:-200px -596px;"></div>
		<div class="metro_station_point" style="left:272px;top:605px;"></div>
	</div>
	<div class="metro_station" title="Охотный Ряд">
		<div class="metro_station_label" style="left:385px;top:432px;width:48px;height:21px;background-position:-385px -432px;"></div>
		<div class="metro_station_point" style="left:433px;top:444px;"></div>
	</div>
	<div class="metro_station" title="Сокольники">
		<div class="metro_station_label" style="left:654px;top:216px;width:68px;height:12px;background-position:-654px -216px;"></div>
		<div class="metro_station_point" style="left:641px;top:214px;"></div>
	</div>
	<div class="metro_station" title="Преображенская площадь">
		<div class="metro_station_label" style="left:654px;top:169px;width:95px;height:21px;background-position:-654px -169px;"></div>
		<div class="metro_station_point" style="left:642px;top:168px;"></div>
	</div>
	<div class="metro_station" title="Черкизовская">
		<div class="metro_station_label" style="left:653px;top:134px;width:79px;height:12px;background-position:-653px -134px;"></div>
		<div class="metro_station_point" style="left:642px;top:132px;"></div>
	</div>
	<div class="metro_station" title="Бульвар Рокоссовского">
		<div class="metro_station_label" style="left:653px;top:99px;width:96px;height:30px;background-position:-653px -99px;"></div>
		<div class="metro_station_point" style="left:641px;top:97px;"></div>
	</div>
	<div class="metro_station" title="Юго-Западная">
		<div class="metro_station_label" style="left:82px;top:725px;width:82px;height:12px;background-position:-82px -725px;"></div>
		<div class="metro_station_point" style="left:70px;top:712px;"></div>
	</div>
	<div class="metro_station" title="Сходненская">
		<div class="metro_station_label" style="left:118px;top:164px;width:73px;height:12px;background-position:-118px -164px;"></div>
		<div class="metro_station_point" style="left:106px;top:162px;"></div>
	</div>
	<div class="metro_station" title="Тушинская">
		<div class="metro_station_label" style="left:118px;top:191px;width:63px;height:12px;background-position:-118px -191px;"></div>
		<div class="metro_station_point" style="left:106px;top:189px;"></div>
	</div>
	<div class="metro_station" title="Щукинская">
		<div class="metro_station_label" style="left:118px;top:245px;width:67px;height:12px;background-position:-118px -245px;"></div>
		<div class="metro_station_point" style="left:106px;top:242px;"></div>
	</div>
	<div class="metro_station" title="Октябрьское Поле">
		<div class="metro_station_label" style="left:118px;top:268px;width:104px;height:20px;background-position:-118px -268px;"></div>
		<div class="metro_station_point" style="left:106px;top:269px;"></div>
	</div>
	<div class="metro_station" title="Полежаевская">
		<div class="metro_station_label" style="left:118px;top:296px;width:85px;height:19px;background-position:-118px -296px;"></div>
		<div class="metro_station_point" style="left:106px;top:296px;"></div>
	</div>
	<div class="metro_station" title="Беговая">
		<div class="metro_station_label" style="left:131px;top:327px;width:50px;height:18px;background-position:-131px -327px;"></div>
		<div class="metro_station_point" style="left:122px;top:338px;"></div>
	</div>
	<div class="metro_station" title="Улица 1905 года">
		<div class="metro_station_label" style="left:170px;top:354px;width:50px;height:21px;background-position:-170px -354px;"></div>
		<div class="metro_station_point" style="left:187px;top:376px;"></div>
	</div>
	<div class="metro_station" title="Бауманская">
		<div class="metro_station_label" style="left:679px;top:357px;width:69px;height:12px;background-position:-679px -357px;"></div>
		<div class="metro_station_point" style="left:671px;top:344px;"></div>
	</div>
	<div class="metro_station" title="Электрозаводская">
		<div class="metro_station_label" style="left:714px;top:323px;width:101px;height:12px;background-position:-714px -323px;"></div>
		<div class="metro_station_point" style="left:705px;top:311px;"></div>
	</div>
	<div class="metro_station" title="Семеновская">
		<div class="metro_station_label" style="left:745px;top:292px;width:74px;height:12px;background-position:-745px -292px;"></div>
		<div class="metro_station_point" style="left:736px;top:279px;"></div>
	</div>
	<div class="metro_station" title="Партизанская">
		<div class="metro_station_label" style="left:765px;top:245px;width:81px;height:12px;background-position:-765px -245px;"></div>
		<div class="metro_station_point" style="left:754px;top:243px;"></div>
	</div>
	<div class="metro_station" title="Измайловская">
		<div class="metro_station_label" style="left:766px;top:211px;width:81px;height:12px;background-position:-766px -211px;"></div>
		<div class="metro_station_point" style="left:754px;top:209px;"></div>
	</div>
	<div class="metro_station" title="Первомайская">
		<div class="metro_station_label" style="left:766px;top:176px;width:82px;height:12px;background-position:-766px -176px;"></div>
		<div class="metro_station_point" style="left:754px;top:174px;"></div>
	</div>
	<div class="metro_station" title="Щелковская">
		<div class="metro_station_label" style="left:766px;top:142px;width:71px;height:12px;background-position:-766px -142px;"></div>
		<div class="metro_station_point" style="left:754px;top:140px;"></div>
	</div>
	<div class="metro_station" title="Выхино">
		<div class="metro_station_label" style="left:812px;top:710px;width:46px;height:12px;background-position:-812px -710px;"></div>
		<div class="metro_station_point" style="left:800px;top:708px;"></div>
	</div>
	<div class="metro_station" title="Лермонтовский проспект">
		<div class="metro_station_label" style="left:812px;top:736px;width:88px;height:24px;background-position:-812px -736px;"></div>
		<div class="metro_station_point" style="left:800px;top:735px;"></div>
	</div>
	<div class="metro_station" title="Жулебино">
		<div class="metro_station_label" style="left:812px;top:770px;width:62px;height:12px;background-position:-812px -770px;"></div>
		<div class="metro_station_point" style="left:800px;top:768px;"></div>
	</div>
	<div class="metro_station" title="Рязанский проспект">
		<div class="metro_station_label" style="left:812px;top:674px;width:62px;height:21px;background-position:-812px -674px;"></div>
		<div class="metro_station_point" style="left:800px;top:673px;"></div>
	</div>
	<div class="metro_station" title="Кузьминки">
		<div class="metro_station_label" style="left:796px;top:620px;width:65px;height:12px;background-position:-796px -620px;"></div>
		<div class="metro_station_point" style="left:787px;top:627px;"></div>
	</div>
	<div class="metro_station" title="Текстильщики">
		<div class="metro_station_label" style="left:778px;top:601px;width:81px;height:12px;background-position:-778px -601px;"></div>
		<div class="metro_station_point" style="left:769px;top:609px;"></div>
	</div>
	<div class="metro_station" title="Волгоградский проспект">
		<div class="metro_station_label" style="left:724px;top:581px;width:134px;height:12px;background-position:-724px -581px;"></div>
		<div class="metro_station_point" style="left:731px;top:592px;"></div>
	</div>
	<div class="metro_station" title="Новогиреево">
		<div class="metro_station_label" style="left:793px;top:390px;width:74px;height:12px;background-position:-793px -390px;"></div>
		<div class="metro_station_point" style="left:784px;top:377px;"></div>
	</div>
	<div class="metro_station" title="Перово">
		<div class="metro_station_label" style="left:774px;top:408px;width:45px;height:12px;background-position:-774px -408px;"></div>
		<div class="metro_station_point" style="left:766px;top:395px;"></div>
	</div>
	<div class="metro_station" title="Шоссе Энтузиастов">
		<div class="metro_station_label" style="left:755px;top:428px;width:106px;height:12px;background-position:-755px -428px;"></div>
		<div class="metro_station_point" style="left:746px;top:415px;"></div>
	</div>
	<div class="metro_station" title="Авиамоторная">
		<div class="metro_station_label" style="left:736px;top:446px;width:82px;height:12px;background-position:-736px -446px;"></div>
		<div class="metro_station_point" style="left:728px;top:434px;"></div>
	</div>
	<div class="metro_station" title="Площадь Ильича">
		<div class="metro_station_label" style="left:712px;top:466px;width:93px;height:12px;background-position:-712px -466px;"></div>
		<div class="metro_station_point" style="left:700px;top:461px;"></div>
	</div>
	<div class="metro_station" title="Студенческая">
		<div class="metro_station_label" style="left:39px;top:521px;width:74px;height:12px;background-position:-39px -521px;"></div>
		<div class="metro_station_point" style="left:66px;top:507px;"></div>
	</div>
	<div class="metro_station" title="Кутузовская">
		<div class="metro_station_label" style="left:35px;top:452px;width:69px;height:12px;background-position:-35px -452px;"></div>
		<div class="metro_station_point" style="left:23px;top:449px;"></div>
	</div>
	<div class="metro_station" title="Фили">
		<div class="metro_station_label" style="left:35px;top:429px;width:34px;height:12px;background-position:-35px -429px;"></div>
		<div class="metro_station_point" style="left:23px;top:427px;"></div>
	</div>
	<div class="metro_station" title="Багратионовская">
		<div class="metro_station_label" style="left:35px;top:407px;width:95px;height:12px;background-position:-35px -407px;"></div>
		<div class="metro_station_point" style="left:23px;top:404px;"></div>
	</div>
	<div class="metro_station" title="Филевский парк">
		<div class="metro_station_label" style="left:34px;top:384px;width:92px;height:12px;background-position:-34px -384px;"></div>
		<div class="metro_station_point" style="left:23px;top:381px;"></div>
	</div>
	<div class="metro_station" title="Пионерская">
		<div class="metro_station_label" style="left:34px;top:361px;width:70px;height:12px;background-position:-34px -361px;"></div>
		<div class="metro_station_point" style="left:23px;top:358px;"></div>
	</div>
	<div class="metro_station" title="Кунцевская">
		<div class="metro_station_label" style="left:21px;top:318px;width:66px;height:12px;background-position:-21px -318px;"></div>
		<div class="metro_station_point" style="left:6px;top:315px;"></div>
		<div class="metro_station_point" style="left:23px;top:332px;"></div>
	</div>
	<div class="metro_station" title="Молодежная">
		<div class="metro_station_label" style="left:18px;top:288px;width:73px;height:12px;background-position:-18px -288px;"></div>
		<div class="metro_station_point" style="left:6px;top:285px;"></div>
	</div>
	<div class="metro_station" title="Крылатское">
		<div class="metro_station_label" style="left:18px;top:258px;width:68px;height:12px;background-position:-18px -258px;"></div>
		<div class="metro_station_point" style="left:6px;top:255px;"></div>
	</div>
	<div class="metro_station" title="Строгино">
		<div class="metro_station_label" style="left:18px;top:228px;width:56px;height:12px;background-position:-18px -228px;"></div>
		<div class="metro_station_point" style="left:6px;top:225px;"></div>
	</div>
	<div class="metro_station" title="Мякинино">
		<div class="metro_station_label" style="left:18px;top:198px;width:61px;height:12px;background-position:-18px -198px;"></div>
		<div class="metro_station_point" style="left:6px;top:195px;"></div>
	</div>
	<div class="metro_station" title="Волоколамская">
		<div class="metro_station_label" style="left:18px;top:172px;width:85px;height:12px;background-position:-18px -172px;"></div>
		<div class="metro_station_point" style="left:6px;top:167px;"></div>
	</div>
	<div class="metro_station" title="Митино">
		<div class="metro_station_label" style="left:18px;top:142px;width:49px;height:12px;background-position:-18px -142px;"></div>
		<div class="metro_station_point" style="left:6px;top:140px;"></div>
	</div>
	<div class="metro_station" title="Славянский бульвар">
		<div class="metro_station_label" style="left:40px;top:554px;width:67px;height:21px;background-position:-40px -554px;"></div>
		<div class="metro_station_point" style="left:66px;top:538px;"></div>
	</div>
	<div class="metro_station" title="Парк Победы">
		<div class="metro_station_label" style="left:127px;top:558px;width:47px;height:22px;background-position:-127px -558px;"></div>
		<div class="metro_station_point" style="left:128px;top:538px;"></div>
		<div class="metro_station_point" style="left:111px;top:555px;"></div>
	</div>
	<div class="metro_station" title="Международная">
		<div class="metro_station_label" style="left:142px;top:432px;width:92px;height:12px;background-position:-142px -432px;"></div>
		<div class="metro_station_point" style="left:130px;top:429px;"></div>
	</div>
	<div class="metro_station" title="Кропоткинская">
		<div class="metro_station_label" style="left:342px;top:557px;width:86px;height:12px;background-position:-342px -557px;"></div>
		<div class="metro_station_point" style="left:333px;top:543px;"></div>
	</div>
	<div class="metro_station" title="Комсомольская">
		<div class="metro_station_label" style="left:611px;top:290px;width:86px;height:12px;background-position:-611px -290px;"></div>
		<div class="metro_station_point" style="left:599px;top:277px;"></div>
		<div class="metro_station_point" style="left:600px;top:298px;"></div>
	</div>
	<div class="metro_station" title="Площадь Революции">
		<div class="metro_station_label" style="left:469px;top:484px;width:84px;height:17px;background-position:-469px -484px;"></div>
		<div class="metro_station_point" style="left:461px;top:474px;"></div>
	</div>
	<div class="metro_station" title="Красносельская">
		<div class="metro_station_label" style="left:634px;top:265px;width:89px;height:12px;background-position:-634px -265px;"></div>
		<div class="metro_station_point" style="left:625px;top:252px;"></div>
	</div>
	<div class="metro_station" title="Новокосино">
		<div class="metro_station_label" style="left:813px;top:370px;width:69px;height:12px;background-position:-813px -370px;"></div>
		<div class="metro_station_point" style="left:803px;top:358px;"></div>
	</div>
	<div class="metro_station" title="Каховская">
		<div class="metro_station_label" style="left:393px;top:782px;width:58px;height:12px;background-position:-393px -782px;"></div>
		<div class="metro_station_point" style="left:438px;top:792px;"></div>
	</div>
	<div class="metro_station" title="Пролетарская">
		<div class="metro_station_label" style="left:616px;top:577px;width:79px;height:12px;background-position:-616px -577px;"></div>
		<div class="metro_station_point" style="left:695px;top:572px;"></div>
	</div>
	<div class="metro_station" title="Выставочная">
		<div class="metro_station_label" style="left:145px;top:475px;width:71px;height:12px;background-position:-145px -475px;"></div>
		<div class="metro_station_point" style="left:130px;top:474px;"></div>
	</div>
	<div class="metro_station" title="Алма-Атинская">
		<div class="metro_station_label" style="left:631px;top:908px;width:85px;height:12px;background-position:-631px -908px;"></div>
		<div class="metro_station_point" style="left:713px;top:897px;"></div>
	</div>
	<div class="metro_station" title="Пятницкое шоссе">
		<div class="metro_station_label" style="left:22px;top:103px;width:57px;height:22px;background-position:-22px -103px;"></div>
		<div class="metro_station_point" style="left:6px;top:100px;"></div>
	</div>
	<div class="metro_station" title="Улица Старокачаловская">
		<div class="metro_station_label" style="left:134px;top:880px;width:85px;height:19px;background-position:-134px -880px;"></div>
		<div class="metro_station_point" style="left:215px;top:893px;"></div>
	</div>
	<div class="metro_station" title="Улица Скобелевская">
		<div class="metro_station_label" style="left:120px;top:919px;width:67px;height:18px;background-position:-120px -919px;"></div>
		<div class="metro_station_point" style="left:147px;top:906px;"></div>
	</div>
	<div class="metro_station" title="Бульвар Адмирала Ушакова">
		<div class="metro_station_label" style="left:53px;top:891px;width:81px;height:18px;background-position:-53px -891px;"></div>
		<div class="metro_station_point" style="left:90px;top:906px;"></div>
	</div>
	<div class="metro_station" title="Улица Горчакова">
		<div class="metro_station_label" style="left:39px;top:919px;width:48px;height:18px;background-position:-39px -919px;"></div>
		<div class="metro_station_point" style="left:56px;top:906px;"></div>
	</div>
	<div class="metro_station" title="Бунинская аллея">
		<div class="metro_station_label" style="left:2px;top:891px;width:50px;height:17px;background-position:-2px -891px;"></div>
		<div class="metro_station_point" style="left:19px;top:906px;"></div>
	</div>
	<div class="metro_station" title="Планерная">
		<div class="metro_station_label" style="left:118px;top:137px;width:64px;height:12px;background-position:-118px -137px;"></div>
		<div class="metro_station_point" style="left:106px;top:135px;"></div>
	</div>
	<div class="metro_station" title="Медведково">
		<div class="metro_station_label" style="left:550px;top:7px;width:71px;height:12px;background-position:-550px -7px;"></div>
		<div class="metro_station_point" style="left:538px;top:5px;"></div>
	</div>
	<div class="metro_station" title="Бабушкинская">
		<div class="metro_station_label" style="left:550px;top:27px;width:82px;height:12px;background-position:-550px -27px;"></div>
		<div class="metro_station_point" style="left:538px;top:25px;"></div>
	</div>
	<div class="metro_station" title="Свиблово">
		<div class="metro_station_label" style="left:550px;top:46px;width:56px;height:12px;background-position:-550px -46px;"></div>
		<div class="metro_station_point" style="left:538px;top:44px;"></div>
	</div>
	<div class="metro_station" title="Ботанический сад">
		<div class="metro_station_label" style="left:551px;top:67px;width:100px;height:12px;background-position:-551px -67px;"></div>
		<div class="metro_station_point" style="left:538px;top:64px;"></div>
	</div>
	<div class="metro_station" title="Улица Сергея Эйзенштейна">
		<div class="metro_station_label" style="left:559px;top:90px;width:68px;height:18px;background-position:-559px -90px;"></div>
		<div class="metro_station_point" style="left:585px;top:104px;"></div>
	</div>
	<div class="metro_station" title="Речной вокзал">
		<div class="metro_station_label" style="left:228px;top:81px;width:80px;height:12px;background-position:-228px -81px;"></div>
		<div class="metro_station_point" style="left:215px;top:78px;"></div>
	</div>
	<div class="metro_station" title="Водный стадион">
		<div class="metro_station_label" style="left:228px;top:125px;width:91px;height:12px;background-position:-228px -125px;"></div>
		<div class="metro_station_point" style="left:215px;top:122px;"></div>
	</div>
	<div class="metro_station" title="Динамо">
		<div class="metro_station_label" style="left:269px;top:245px;width:46px;height:12px;background-position:-269px -245px;"></div>
		<div class="metro_station_point" style="left:258px;top:253px;"></div>
	</div>
	<div class="metro_station" title="Маяковская">
		<div class="metro_station_label" style="left:269px;top:340px;width:68px;height:12px;background-position:-269px -340px;"></div>
		<div class="metro_station_point" style="left:334px;top:330px;"></div>
	</div>
	<div class="metro_station" title="Краснопресненская">
		<div class="metro_station_label" style="left:247px;top:407px;width:108px;height:12px;background-position:-247px -407px;"></div>
		<div class="metro_station_point" style="left:237px;top:396px;"></div>
	</div>
	<div class="metro_station" title="Баррикадная">
		<div class="metro_station_label" style="left:259px;top:392px;width:77px;height:12px;background-position:-259px -392px;"></div>
		<div class="metro_station_point" style="left:257px;top:376px;"></div>
	</div>
	<div class="metro_station" title="Арбатская">
		<div class="metro_station_label" style="left:294px;top:468px;width:60px;height:11px;background-position:-294px -468px;"></div>
		<div class="metro_station_point" style="left:340px;top:455px;"></div>
		<div class="metro_station_label" style="left:294px;top:479px;width:55px;height:11px;background-position:-294px -479px;"></div>
		<div class="metro_station_point" style="left:344px;top:486px;"></div>
	</div>
	<div class="metro_station" title="Смоленская">
		<div class="metro_station_label" style="left:266px;top:492px;width:68px;height:11px;background-position:-266px -492px;"></div>
		<div class="metro_station_point" style="left:259px;top:479px;"></div>
		<div class="metro_station_label" style="left:258px;top:503px;width:70px;height:15px;background-position:-258px -503px;"></div>
		<div class="metro_station_point" style="left:321px;top:508px;"></div>
	</div>
	<div class="metro_station" title="Академическая">
		<div class="metro_station_label" style="left:285px;top:701px;width:86px;height:12px;background-position:-285px -701px;"></div>
		<div class="metro_station_point" style="left:277px;top:688px;"></div>
	</div>
	<div class="metro_station" title="Профсоюзная">
		<div class="metro_station_label" style="left:276px;top:720px;width:86px;height:12px;background-position:-276px -720px;"></div>
		<div class="metro_station_point" style="left:264px;top:718px;"></div>
	</div>
	<div class="metro_station" title="Новые Черемушки">
		<div class="metro_station_label" style="left:276px;top:740px;width:102px;height:12px;background-position:-276px -740px;"></div>
		<div class="metro_station_point" style="left:264px;top:738px;"></div>
	</div>
	<div class="metro_station" title="Калужская">
		<div class="metro_station_label" style="left:276px;top:760px;width:61px;height:12px;background-position:-276px -760px;"></div>
		<div class="metro_station_point" style="left:264px;top:758px;"></div>
	</div>
	<div class="metro_station" title="Беляево">
		<div class="metro_station_label" style="left:276px;top:781px;width:49px;height:12px;background-position:-276px -781px;"></div>
		<div class="metro_station_point" style="left:264px;top:778px;"></div>
	</div>
	<div class="metro_station" title="Коньково">
		<div class="metro_station_label" style="left:276px;top:801px;width:55px;height:12px;background-position:-276px -801px;"></div>
		<div class="metro_station_point" style="left:264px;top:798px;"></div>
	</div>
	<div class="metro_station" title="Теплый Стан">
		<div class="metro_station_label" style="left:276px;top:821px;width:71px;height:12px;background-position:-276px -821px;"></div>
		<div class="metro_station_point" style="left:264px;top:818px;"></div>
	</div>
	<div class="metro_station" title="Ясенево">
		<div class="metro_station_label" style="left:276px;top:841px;width:48px;height:12px;background-position:-276px -841px;"></div>
		<div class="metro_station_point" style="left:264px;top:838px;"></div>
	</div>
	<div class="metro_station" title="Новоясеневская">
		<div class="metro_station_label" style="left:275px;top:863px;width:90px;height:12px;background-position:-275px -863px;"></div>
		<div class="metro_station_point" style="left:264px;top:861px;"></div>
	</div>
	<div class="metro_station" title="Бульвар Дмитрия Донского">
		<div class="metro_station_label" style="left:237px;top:919px;width:105px;height:21px;background-position:-237px -919px;"></div>
		<div class="metro_station_point" style="left:228px;top:906px;"></div>
	</div>
	<div class="metro_station" title="Чистые пруды">
		<div class="metro_station_label" style="left:538px;top:362px;width:41px;height:21px;background-position:-538px -362px;"></div>
		<div class="metro_station_point" style="left:526px;top:351px;"></div>
	</div>
	<div class="metro_station" title="Проспект Мира">
		<div class="metro_station_label" style="left:531px;top:231px;width:81px;height:11px;background-position:-531px -231px;"></div>
		<div class="metro_station_point" style="left:518px;top:217px;"></div>
		<div class="metro_station_point" style="left:518px;top:237px;"></div>
	</div>
	<div class="metro_station" title="ВДНХ">
		<div class="metro_station_label" style="left:551px;top:132px;width:36px;height:15px;background-position:-551px -132px;"></div>
		<div class="metro_station_point" style="left:538px;top:132px;"></div>
	</div>
	<div class="metro_station" title="Алексеевская">
		<div class="metro_station_label" style="left:550px;top:158px;width:79px;height:17px;background-position:-550px -158px;"></div>
		<div class="metro_station_point" style="left:538px;top:159px;"></div>
	</div>
	<div class="metro_station" title="Рижская">
		<div class="metro_station_label" style="left:550px;top:185px;width:52px;height:16px;background-position:-550px -185px;"></div>
		<div class="metro_station_point" style="left:538px;top:185px;"></div>
	</div>
	<div class="metro_station" title="Красные Ворота">
		<div class="metro_station_label" style="left:573px;top:329px;width:46px;height:21px;background-position:-573px -329px;"></div>
		<div class="metro_station_point" style="left:561px;top:316px;"></div>
	</div>
	<div class="metro_station" title="Александровский сад">
		<div class="metro_station_label" style="left:286px;top:435px;width:97px;height:21px;background-position:-286px -435px;"></div>
		<div class="metro_station_point" style="left:380px;top:455px;"></div>
	</div>
	<div class="metro_station" title="Новослободская">
		<div class="metro_station_label" style="left:350px;top:261px;width:89px;height:12px;background-position:-350px -261px;"></div>
		<div class="metro_station_point" style="left:347px;top:245px;"></div>
	</div>
	<div class="metro_station" title="Чкаловская">
		<div class="metro_station_label" style="left:569px;top:417px;width:65px;height:12px;background-position:-569px -417px;"></div>
		<div class="metro_station_point" style="left:622px;top:403px;"></div>
	</div>
	<div class="metro_station" title="Таганская">
		<div class="metro_station_label" style="left:579px;top:506px;width:57px;height:12px;background-position:-579px -506px;"></div>
		<div class="metro_station_point" style="left:636px;top:512px;"></div>
		<div class="metro_station_point" style="left:634px;top:497px;"></div>
	</div>
	<div class="metro_station" title="Новокузнецкая">
		<div class="metro_station_label" style="left:528px;top:541px;width:86px;height:12px;background-position:-528px -541px;"></div>
		<div class="metro_station_point" style="left:518px;top:546px;"></div>
	</div>
	<div class="metro_station" title="Третьяковская">
		<div class="metro_station_label" style="left:424px;top:570px;width:82px;height:12px;background-position:-424px -570px;"></div>
		<div class="metro_station_point" style="left:496px;top:556px;"></div>
		<div class="metro_station_point" style="left:507px;top:567px;"></div>
	</div>
	<div class="metro_station" title="Киевская">
		<div class="metro_station_label" style="left:205px;top:524px;width:52px;height:12px;background-position:-205px -524px;"></div>
		<div class="metro_station_point" style="left:231px;top:506px;"></div>
		<div class="metro_station_point" style="left:231px;top:538px;"></div>
		<div class="metro_station_point" style="left:259px;top:523px;"></div>
	</div>
	<div class="metro_station" title="Марксистская">
		<div class="metro_station_label" style="left:666px;top:515px;width:79px;height:12px;background-position:-666px -515px;"></div>
		<div class="metro_station_point" style="left:657px;top:505px;"></div>
	</div>
	<div class="metro_station" title="Пушкинская">
		<div class="metro_station_label" style="left:343px;top:392px;width:71px;height:12px;background-position:-343px -392px;"></div>
		<div class="metro_station_point" style="left:373px;top:376px;"></div>
	</div>
	<div class="metro_station" title="Боровицкая">
		<div class="metro_station_label" style="left:383px;top:520px;width:71px;height:16px;background-position:-383px -520px;"></div>
		<div class="metro_station_point" style="left:380px;top:506px;"></div>
	</div>
	<div class="metro_station" title="Деловой Центр">
		<div class="metro_station_label" style="left:63px;top:475px;width:48px;height:23px;background-position:-63px -475px;"></div>
		<div class="metro_station_point" style="left:111px;top:474px;"></div>
	</div>
	<div class="metro_station" title="Выставочный Центр">
		<div class="metro_station_label" style="left:467px;top:104px;width:64px;height:18px;background-position:-467px -104px;"></div>
		<div class="metro_station_point" style="left:523px;top:116px;"></div>
	</div>
	<div class="metro_station" title="Улица Академика Королева">
		<div class="metro_station_label" style="left:460px;top:134px;width:66px;height:18px;background-position:-460px -134px;"></div>
		<div class="metro_station_point" style="left:485px;top:121px;"></div>
	</div>
	<div class="metro_station" title="Телецентр">
		<div class="metro_station_label" style="left:429px;top:117px;width:49px;height:9px;background-position:-429px -117px;"></div>
		<div class="metro_station_point" style="left:449px;top:124px;"></div>
	</div>
	<div class="metro_station" title="Улица Милашенкова">
		<div class="metro_station_label" style="left:376px;top:134px;width:81px;height:10px;background-position:-376px -134px;"></div>
		<div class="metro_station_point" style="left:410px;top:120px;"></div>
	</div>
	<div class="metro_station" title="Битцевский парк">
		<div class="metro_station_label" style="left:165px;top:863px;width:82px;height:10px;background-position:-165px -863px;"></div>
		<div class="metro_station_point" style="left:247px;top:861px;"></div>
	</div>
	<div class="metro_station" title="Лесопарковая">
		<div class="metro_station_label" style="left:236px;top:891px;width:69px;height:10px;background-position:-236px -891px;"></div>
		<div class="metro_station_point" style="left:226px;top:881px;"></div>
	</div>
	<div class="metro_station" title="Спартак">
		<div class="metro_station_label" style="left:118px;top:218px;width:50px;height:13px;background-position:-118px -218px;"></div>
		<div class="metro_station_point" style="left:106px;top:215px;"></div>
	</div>
	<div class="metro_station" title="Тропарево">
		<div class="metro_station_label" style="left:59px;top:746px;width:63px;height:12px;background-position:-59px -746px;"></div>
		<div class="metro_station_point" style="left:50px;top:732px;"></div>
	</div>
</div>
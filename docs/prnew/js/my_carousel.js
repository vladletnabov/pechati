(function($){
	// создаем новый метод объекта jQuery.fn
	$.fn.myCarousel = function(options) {
		// Тут пишем код нашего плагина
		// дефолтные настройки
		var settings = {
			visible: 3, // видимых элементов - 3
			rotateBy: 1, // мотать по одному элементу
			speed: 1000, // скорость перемотки (в миллисекундах)
			btnNext: null, // кнопка перемотки к следующему элементу
			btnPrev: null, // кнопка перемотки к предыдущему элементу
			auto: 3500, // время задержки (в миллисекундах) при автоматической перемотке
			backSlide: false // будет ли карусель крутиться в обратную сторону при автоматической перемотке
		};
		if (typeof options !== "undefined") {
				$.extend(true, settings, options);
		}
		
		return this.each(function(options) {
			
		
			// определяем "глобальные" переменные в рамках плагина
			var $this = $(this); // сохраняем контекст
			var $carousel = $this.children(':first'); // находим первого потомка в нашем контейнере (.container), т.е. <ul>
			var itemMarginLeft = $carousel.children().css('margin-left').replace('px', '');
			var itemMarginRight = $carousel.children().css('margin-right').replace('px', '');

			var itemWidth = Number($carousel.children().outerWidth()) + Number(itemMarginLeft) + Number(itemMarginRight); // находим ширину одного элемента внутри нашего контейнера
			var itemsTotal = $carousel.children().length; // определяем сколько всего элементов у нашей карусели
			var running = false; // флаг, который хранит информацию о том проигрывается ли анимация на данный момент
			var intID = null; // ID интервала (нужен для сброса интервала)
			
			//alert(itemWidth);
			
			// присваиваем необходимые стили для элементов карусели
			// сначала для контейнера
			$this.css({
				'position': 'relative', // необходимо для нормального отображения в ИЕ6(7)
				'overflow': 'hidden', // прячем все, что не влезает в контейнер
				'width': settings.visible * itemWidth + 'px' // ширину контейнера ставим равной ширине всех видимых элементов
			});
			
			// потом для внутреннего элемента (в нашем случае <ul>)
			$carousel.css({
				'position': 'relative', // относительное позиционирование нужно для того, чтобы можно было использовать сдвиг влево
				'width': 32000 + 'px', // ставим ширину побольше, чтобы точно влезли все элементы
				'left': 0 // устанавливаем нулевой девый сдвиг
			});
			
			function slide(dir) {
				var direction = !dir ? -1 : 1;
				var leftIndent = 0;
				
				if (!running) {
					running = true;
					
					if (intID) {
						window.clearInterval(intID);
					}
					
					if (!dir) {
						$carousel.children(':last').after($carousel.children().slice(0, settings.rotateBy).clone(true));
					} else {
						$carousel.children(':first').before($carousel.children().slice(itemsTotal - settings.rotateBy, itemsTotal).clone(true));
						$carousel.css('left', -itemWidth * settings.rotateBy + 'px');
					}
					
					leftIndent = parseInt($carousel.css('left')) + (itemWidth * settings.rotateBy * direction);
					
					$carousel.animate({'left': leftIndent}, {queue: false, duration: settings.speed, complete: function() {
						if (!dir) {
							$carousel.children().slice(0, settings.rotateBy).remove();
							$carousel.css('left', 0);
						} else {
							$carousel.children().slice(itemsTotal, itemsTotal + settings.rotateBy).remove();
						}
						
						if (settings.auto) {
							intID = window.setInterval(function() { slide(settings.backslide); }, settings.auto);
						}
						
						running = false;
					}});
				}
				
				return false;
			}
			
			$(settings.btnNext).click(function() {
				return slide(false);
			});
			
			$(settings.btnPrev).click(function() {
				return slide(true);
			});
			
			if (settings.auto) {
				intID = window.setInterval(function() { slide(settings.backslide); }, settings.auto);
			}
			
			//var $this = $(this); // сохраняем контекст
		});
	};
})(jQuery); 
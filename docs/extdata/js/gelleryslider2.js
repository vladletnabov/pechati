/**
 * Created by Skif on 19.09.2016.
 */
(function($){
    // создаем новый метод объекта jQuery.fn
    $.fn.skifGallerySlider= function(options) {
        // Тут пишем код нашего плагина
        // дефолтные настройки
        var settings = {
            minWidth: 991,
            visible: 5, // видимых элементов - 3
            rotateBy: 1, // мотать по одному элементу
            speed: 1000, // скорость перемотки (в миллисекундах)
            btnNext: null, // кнопка перемотки к следующему элементу
            btnPrev: null, // кнопка перемотки к предыдущему элементу
            //auto: 3500, // время задержки (в миллисекундах) при автоматической перемотке
            backSlide: false // будет ли карусель крутиться в обратную сторону при автоматической перемотке
        };
        if (typeof options !== "undefined") {
            $.extend(true, settings, options);
        }
        var uniqID = Math.floor((Math.random() * 100000) + 1);
        //alert(uniqID);
        var elementID = 'skifgalleryslider' + String(uniqID);
        $(this).attr('id', elementID);

        return this.each(function(options) {


            // определяем "глобальные" переменные в рамках плагина
            var $this = $(this); // сохраняем контекст
            var $carousel = $this.children(':first'); // находим первого потомка в нашем контейнере (.container), т.е. <ul>
            //var $carousel = $this.children('ul');
            var itemMarginLeft = $carousel.children().css('margin-left').replace('px', '');
            var itemMarginRight = $carousel.children().css('margin-right').replace('px', '');

            //var itemWidth = $carousel.children().children().children().outerWidth(); // находим ширину одного элемента внутри нашего контейнера
            //var itemWidth = $carousel.find('img').outerWidth();
            var itemWidth =200;
            console.log('itemWidth:' + itemWidth);
            var itemsTotal = $carousel.children().length; // определяем сколько всего элементов у нашей карусели

            /*var itemWidth = Number($('.container').outerWidth() * 0.333333) - Number(settings.visible * 15); // находим ширину одного
             //var itemWidth = Number($('.row-fluid').outerWidth() * 0.333334) - 30;
             if ($(window).width()<settings.minWidth){
             itemWidth = Number($('.row-fluid').outerWidth()) - 30;
             } else {
             itemWidth = Number($('.row-fluid').outerWidth() * 0.333334) - 30;

             }
             //alert(itemWidth);
             var itemsTotal = $carousel.children().length; // определяем сколько всего элементов у нашей карусели*/

            //alert(itemsTotal);
            var running = false; // флаг, который хранит информацию о том проигрывается ли анимация на данный момент
            var intID = null; // ID интервала (нужен для сброса интервала)

            var $eItem = $('.carItem');
            var $labItem=$('.radio-label');
            //alert($eItem);
            // присваиваем необходимые стили для элементов карусели
            // сначала для контейнера
            var wdth = 900;
            /*$(".itemLi").width(Number($('.container').outerWidth() * 0.333333));
             $(".itemLi").height(200);*/

            $eItem.width(itemWidth);
            $eItem.height(itemWidth);
            $labItem.width(itemWidth+10);
            $labItem.height(itemWidth+10);
            $this.css({
                'position': 'relative', // необходимо для нормального отображения в ИЕ6(7)
                'overflow': 'hidden', // прячем все, что не влезает в контейнер
                'width': settings.visible * itemWidth + 'px' // ширину контейнера ставим равной ширине всех видимых элементов
            });
            
            // потом для внутреннего элемента (в нашем случае <ul>)
            $carousel.css({
                'position': 'relative', // относительное позиционирование нужно для того, чтобы можно было использовать сдвиг влево
                'width': 9999 + 'px', // ставим ширину побольше, чтобы точно влезли все элементы
                'left': 0 // устанавливаем нулевой девый сдвиг
            });
            
            // параметр dir(boolean) - false(сдедующий), true(предыдущий)
            function slide(dir) {
                var direction = !dir ? -1 : 1; // выбираем направление в зависимости от переданного параметра (влево или вправо)
                var leftIndent = 0; // левое смещение (для <ul>)
            
                if (!running) { // если анимация завершена (или еще не запущена)
                    running = true; // ставим флажок, что анимация в процессе
            
                    if (intID) { // если запущен интервал
                        window.clearInterval(intID); // очищаем интервал
                    }
            
                    if (!dir) { // если мы мотаем к следующему элементу (так по умолчанию)
                        /*
                         * вставляем после последнего элемента карусели
                         * клоны стольких элементов, сколько задано
                         * в параметре rotateBy (по умолчанию задан один элемент)
                         */
                        $carousel.children(':last').after($carousel.children().slice(0, settings.rotateBy).clone(true));
                    } else { // если мотаем к предыдущему элементу
                        /*
                         * вставляем перед первым элементом карусели
                         * клоны стольких элементов, сколько задано
                         * в параметре rotateBy (по умолчанию задан один элемент)
                         */
                        $carousel.children(':first').before($carousel.children().slice(itemsTotal - settings.rotateBy, itemsTotal).clone(true));
            
                        /*
                         * сдвигаем карусель (<ul>) влево на ширину элемента,
                         * умноженную на количество элементов, заданных
                         * в параметре rotateBy (по умолчанию задан один элемент)
                         */
                        $carousel.css('left', -itemWidth * settings.rotateBy + 'px');
                    }
            
                    /*
                     * расчитываем левое смещение
                     * текущее значение left + ширина одного элемента * количество проматываемых элементов * на направление перемещения (1 или -1)
                     */
                    leftIndent = parseInt($carousel.css('left')) + (itemWidth * settings.rotateBy * direction);
            
                    // запускаем анимацию
                    $carousel.animate({'left': leftIndent}, {queue: false, duration: settings.speed, complete: function() {
                        // когда анимация закончена
                        if (!dir) { // если мы мотаем к следующему элементу (так по умолчанию)
                            // удаляем столько первых элементов, сколько задано в rotateBy
                            $carousel.children().slice(0, settings.rotateBy).remove();
                            // устанавливаем сдвиг в ноль
                            $carousel.css('left', 0);
                        } else { // если мотаем к предыдущему элементу
                            // удаляем столько последних элементов, сколько задано в rotateBy
                            $carousel.children().slice(itemsTotal, itemsTotal + settings.rotateBy).remove();
                        }
            
                        if (settings.auto) { // если карусель должна проматываться автоматически
                            // запускаем вызов функции через интервал времени (auto)
                            intID = window.setInterval(function() { slide(settings.backslide); }, settings.auto);
                        }
            
                        running = false; // отмечаем, что анимация завершена
                    }});
                }
            
                return false; // возвращаем false для того, чтобы не было перехода по ссылке
            }
            
            // назначаем обработчик на событие click для кнопки next
            $(settings.btnNext).click(function() {
                return slide(false);
            });
            
            // назначаем обработчик на событие click для кнопки previous
            $(settings.btnPrev).click(function() {
                return slide(true);
            });
            if (settings.auto) { // если карусель должна проматываться автоматически
                // запускаем вызов функции через временной интервал
                intID = window.setInterval(function() { slide(settings.backslide); }, settings.auto);
            }
        });
    };
})(jQuery);
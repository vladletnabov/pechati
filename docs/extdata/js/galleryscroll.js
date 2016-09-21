/**
 * Created by Skif on 19.09.2016.
 */
(function($){
    // создаем новый метод объекта jQuery.fn
    $.fn.skifGalleryScroll= function(options) {
        var settings = {
            minWidth: 991
        };
        if (typeof options !== "undefined") {
            $.extend(true, settings, options);
        }
        var uniqID = Math.floor((Math.random() * 100000) + 1);
        var elementID = 'skifgalleryscroll' + String(uniqID);
        $(this).attr('id', elementID);

        return this.each(function(options) {

            var $this = $(this); // сохраняем контекст
            var $carousel = $this.children(':first'); // находим первого потомка в нашем контейнере (.container), т.е. <ul>
            var $inblock = $this.parent();
            var itemMarginLeft = $carousel.children().css('margin-left').replace('px', '');
            var itemMarginRight = $carousel.children().css('margin-right').replace('px', '');
            var itemWidth = $carousel.find('img').outerWidth();
            var list = $inblock.children('ul');
            var itemsTotal = $(this).find($("li")).length; // определяем сколько всего элементов у нашей карусели
            console.log('---->itemsTotal: ' + itemsTotal);
            var wdth = itemsTotal * (itemWidth + 40);
            if (wdth<settings.minWidth){wdth=settings.minWidth;}
            $inblock.width(wdth);
        });
    };
})(jQuery);
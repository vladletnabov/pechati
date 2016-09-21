/**
 * Created by Skif on 19.09.2016.
 */
 
	var scrolled = false;
$(document).ready(function(){

    /*$('.osn-solutions').skifGallerySlider({
        //btnNext: '.next',
        //btnPrev: '.prev',
        //auto: 5000,
        visible: 5,
        rotateBy: 1,
        btnNext: '.solutions-right',
        btnPrev: '.solutions-left',
        speed: 500, // скорость перемотки (в миллисекундах)
    });
	$('.osn-sqstamp').skifGallerySliderSqstamp({
        //btnNext: '.next',
        //btnPrev: '.prev',
        //auto: 5000,
        visible: 5,
        rotateBy: 1,
        btnNext: '.sqstamp-right',
        btnPrev: '.sqstamp-left',
        speed: 500, // скорость перемотки (в миллисекундах)
    });*/
	$('.skifgalleryslider').skifGalleryScroll();
	$('.skifgalleryslidersqstamp').skifGalleryScroll();
	
    $('.input-stamp').click(function () {
        console.log('Oops - r-stamp-gallery');
        var $img = $('#stamp-preview');
        var $price = $(this).attr('data-price');
        var $stampSrc = $(this).parent().children('img').attr('src');
		var $root = location.protocol + '//' + location.host;
		
        console.log($stampSrc);
        $img.attr('src', $stampSrc);
        $('#stamp-image-price').text($price);
		
		$('#hid_price_stamp').val($price);
		$('#hid_image_stamp').val($root + $stampSrc);
		count_price();

    });
	$('.input-sqstamp').click(function () {
        console.log('Oops - sq-stamp-gallery');
        var $img = $('#stamp-preview');
        var $price = $(this).attr('data-price');
        var $stampSrc = $(this).parent().children('img').attr('src');
		var $root = location.protocol + '//' + location.host;
		
        console.log($stampSrc);
        $img.attr('src', $stampSrc);
        $('#stamp-image-price').text($price);
		
		$('#hid_price_stamp').val($price);
		$('#hid_image_stamp').val($root + $stampSrc);
		count_price();

    });
	
	
    $('.get-data-btn').click(function () {
        var data = getStampTemplateData();
        console.log(data);
    });
	
	$(window).scroll(function(){
            //if ( ($(window).scrollTop() > 100) &&(scrolled == false) ) { $(".sqstamp-gallery").css("display", "none"); scrolled=true;};
        });


});
function getStampTemplateData(){
    var result = {
        textStamp: '',
        priceStamp: '',
        srcImage: ''
    };
    var root = location.protocol + '//' + location.host +'/';
    var srcImage = $('#stamp-preview').attr('src');

    result.textStamp = $('#comment-stamp-template').val();
    result.priceStamp= $('#stamp-image-price').text();
    result.srcImage = root + srcImage;

    return result;
}
function showRStamp(){
	$('.tmpl-rstamp').css('display','block');
	$('.rstamp').css('display','block');
	$('.sqstamp-gallery').css('display','none');
	$('#hid_price_stamp').val('');
	$('#hid_image_stamp').val('');
	$('#stamp-preview').attr('src','');	
	$('input[name="stamp-gallery"]').prop('checked', false);
	$('input[name="sqstamp-gallery"]').prop('checked', false);
	$('#stamp-image-price').text('0');
}
function showSqStamp(){
	$('.tmpl-rstamp').css('display','block');
	$('.rstamp').css('display','none');
	$('.sqstamp-gallery').css('display','block');
	$('#hid_price_stamp').val('');
	$('#hid_image_stamp').val('');
	$('#stamp-preview').attr('src','');
	$('input[name="stamp-gallery"]').prop('checked', false);
	$('input[name="sqstamp-gallery"]').prop('checked', false);
	$('#stamp-image-price').text('0');
	
}
function hideStampGallery(){	
	$('.tmpl-rstamp').css('display','none');
	$('.rstamp').css('display','none');
	$('.sqstamp-gallery').css('display','none');
	$('#hid_price_stamp').val('');
	$('#hid_image_stamp').val('');
	$('#stamp-preview').attr('src','');
	$('input[name="stamp-gallery"]').prop('checked', false);
	$('input[name="sqstamp-gallery"]').prop('checked', false);
	$('#stamp-image-price').text('0');
}
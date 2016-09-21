
    <!--<link rel="stylesheet" href="/extdata/css/font-awesome.min.css">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!--<link href="/extdata/css/bootstrap.min.css" rel="stylesheet">-->
	

    <script src="/extdata/js/bootstrap.min.js"></script>
	
    <script src="/extdata/js/galleryscroll.js"></script>

    <link href="/extdata/css/style-asgat.css" rel="stylesheet">
    <script src="/extdata/js/galery-start-script.js"></script>

<div id="gallery-stamps" class="bg-screen3 tmpl-rstamp">
    
		<hr />
		<p><a style="font-size: 20px; color: navy;">Выберите шаблон печати: <br></a></p>

	<div class="rstamp">
	Печати
		<div class="container-stamp ">
			<!--<div class="nav-arrow-place">
				<div class="rotate-arrows">
					<div class="nav-arrows arrow-left solutions-left"></div>
					<div class="nav-arrows arrow-right solutions-right"></div>
				</div>
			</div>-->
		</div>
            <!--<div class="container osn osn-solutions bn prokrutka">-->
			<div class="prokrutka">
				<div class="inblock">
                <ul class="skifgalleryslider">
					<?php 
						require_once "../extdata/baseparts/stampGalleryData.php";
						foreach ($galleryStampData as $index=>$data){
							echo '
					<li class="itemLi">
                        <div class="carItem br">
                            <div class="reshen bb">';
							$img = '<img src="' . $data['image'] . '" class="logo-img-carusel"/>';
							$input = '<input name="stamp-gallery" type="radio" class="radio-stamp input-stamp" data-price="'. $data['price'] . '" id="stamp' . $index . '" hidden />';
							$label = '<label for="stamp' . $index . '" class="radio-label">' .  $data['price'] . '.00 руб.<i class="fa fa-check fa-4x" aria-hidden="true"></i></label>';
							
							echo $img;
							echo $input;
							echo $label;
							
							echo '
							</div>
                        </div>
                    </li>';
						}
					
					?>

                </ul>
				</div>
            </div>
	</div>
	<div class="sqstamp-gallery">
		Штампы
		<div class="container-stamp ">
			<!--<div class="nav-arrow-place">
				<div class="rotate-arrows">
					<div class="nav-arrows arrow-left sqstamp-left"></div>
					<div class="nav-arrows arrow-right sqstamp-right"></div>
				</div>
			</div>-->
		</div>
			<!--<div class="container osn osn-sqstamp b prokrutkan">-->
			<div class="prokrutka">
				<div class="inblock">
                <ul class="skifgalleryslidersqstamp">
					<?php 
						require_once "../extdata/baseparts/stampGalleryData.php";
						foreach ($gallerySqStampData as $index=>$data){
							echo '
					<li class="itemLi">
                        <div class="carItem br">
                            <div class="reshen bb">';
							$img = '<img src="' . $data['image'] . '" class="logo-img-carusel"/>';
							$input = '<input name="sqstamp-gallery" type="radio" class="radio-stamp input-sqstamp" data-price="'. $data['price'] . '" id="sqstamp' . $index . '" hidden />';
							$label = '<label for="sqstamp' . $index . '" class="radio-label">' .  $data['price'] . '.00 руб.<i class="fa fa-check fa-4x" aria-hidden="true"></i></label>';
							
							echo $img;
							echo $input;
							echo $label;
							
							echo '
							</div>
                        </div>
                    </li>';
						}
					
					?>

                </ul>
				</div>

            </div>
	</div>	
			
    <div class="container-stamp ">
        <div class="comment-stamp">
            <h3>Текст на печати</h3>
            <div class="comment-area">
                            <textarea id="comment-stamp-template" name="comment_stamp"></textarea>
            </div>
            <div class="comment-button">
                <div  class="stamp-preview-img"><img id="stamp-preview" class="stamp-preview-img" src="" /></div>
                <p class="price-line bg-primary">Стоимость шаблона: <span id="stamp-image-price">0</span> <i>руб.</i></p>
				<input type="hidden" name="price_tmpl_stamp" id="hid_price_stamp" value="" />
				<input type="hidden" name="price_img_stamp" id="hid_image_stamp" value="" />
                <!--<button type="button" class="btn btn-danger get-data-btn">Danger</button>-->
            </div>
        </div>
    </div>
</div>


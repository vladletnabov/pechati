<!-- it works the same with all jquery version from 1.x to 2.x -->
<script src="jquery.min.js"></script>
<script src="jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>

<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
        <div><img u="image" src="image1.jpg" /></div>
        <div><img u="image" src="image2.jpg" /></div>
    </div>
</div>
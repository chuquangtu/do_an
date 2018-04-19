<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="assets/img/meeting.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thế giới công nghệ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="httpss://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/styles.min.css?v=1.0">    
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="height: 850px;">
	<figure class="figure"></figure>
	<div>
		<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin:-0;margin-top:-25px;">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="assets/img/meeting.jpg" class="img-responsive logo-item">
				</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse"
				id="navcol-1">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Trang chủ</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Sản phẩm</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Tin tức</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Giới thiệu</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Cơ hội đầu tư</a></li>
					
				</ul>
				<ul class="navbar-nav-right">
					<span class="infor-user">Xin chào User 
						<img src="assets/img/user/test.png" alt=""> 
						<i class="fa fa-caret-right"></i>	
						<div class="dropdown-content">
							<a href="infor_user.php"><i class="fa fa-user"></i> Hồ sơ cá nhân</a>
							<a href="infor_user.php #product_list"><i class="fa fa-product-hunt"></i> Sản phẩm</a>
							<a href="infor_user.php #news_list"><i class="fa fa-newspaper-o"></i> Tin tức</a>
							<a href="#"><i class="fa fa-power-off"></i> Đăng xuất</a>
						</div>				
					</span>
				</ul>			
			</div>
		</div>
	</nav>
</div>
<div class="container">
	<div class=" col-md-12 search" >
		<div class=" col-md-6 col-xs-6" style="float:left;">
			<form class="form-inline" >
				<div>
					<input class="form-control mr-sm-2 form-search" type="search" placeholder="Tìm kiếm" aria-label="Search" style="float: left;">
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="float: left;"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
		<div class=" col-md-6 col-xs-6" style="float: left;">
			<marquee><h5>Chào mừng đến với thế giới công nghệ </h5></marquee>
		</div>
	</div>
</div>
<br>

<div class="container">
	<div class="col-md-12">
		<style> 
		.captionOrange, .captionBlack
		{
			color: #fff;
			font-size: 20px;
			line-height: 30px;
			text-align: center;
			border-radius: 4px;
		}
		.captionOrange
		{
			background: #EB5100;
			background-color: rgba(235, 81, 0, 0.6);
		}
		.captionBlack
		{
			font-size:16px;
			background: #000;
			background-color: rgba(0, 0, 0, 0.4);
		}
		a.captionOrange, A.captionOrange:active, A.captionOrange:visited
		{
			color: #ffffff;
			text-decoration: none;
		}
		a.captionOrange:hover
		{
			color: #eb5100;
			text-decoration: underline;
			background-color: #eeeeee;
			background-color: rgba(238, 238, 238, 0.7);
		}
		.bricon
		{
			background: url(../img/browser-icons.png);
		}
	</style>
	<!-- it works the same with all jquery version from 1.3.1 to 2.0.3 -->
	<script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
	<!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
	<!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
	<script type="text/javascript" src="assets/js/jssor.core.js"></script>
	<script type="text/javascript" src="assets/js/jssor.utils.js"></script>
	<script type="text/javascript" src="assets/js/jssor.slider.js"></script>
	<script>
		jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Fade in R
            {$Duration: 1200, $During: { $Left: [0.3, 0.7] }, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, $SlideOut: true, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 0,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 3

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, direction navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $NavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                    //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $DirectionNavigatorOptions: {
                    $Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_sliderb = new $JssorSlider$("sliderb_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
            	var parentWidth = jssor_sliderb.$Elmt.parentNode.clientWidth;
            	if (parentWidth)
            		jssor_sliderb.$SetScaleWidth(Math.min(parentWidth,1080));
            	else
            		window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            	$(window).bind('resize', ScaleSlider);
            }
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
    <div id="sliderb_container" style="position: relative; width:1080px;
    height: 500px;">

    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
    	<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
    	background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
    </div>
    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
    top: 0px; left: 0px;width: 100%;height:100%;">
</div>
</div>

<!-- Slides Container -->
<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:1080px; height: 500px;
overflow: hidden;">
<div>
	<img u=image src="assets/img/004.jpg" />
	<div u="thumb">Do you notice it is draggable by mouse/finger?</div>
</div>
<div>
	<img u=image src="assets/img/005.jpg" />
	<div u="thumb">Did you drag by either horizontal or vertical?</div>
</div>
<div>
	<img u=image src="assets/img/006.jpg" />
	<div u="thumb">Do you notice navigator responses when drag?</div>
</div>
<div>
	<img u=image src="assets/img/007.jpg" />
	<div u="thumb">Do you notice arrow responses when click?</div>
</div>
</div>

<!-- ThumbnailNavigator Skin Begin -->
<div u="thumbnavigator" class="sliderb-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:1080px;">
	<div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
	background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
</div>
<!-- Thumbnail Item Skin Begin -->
<div u="slides">
	<div u="prototype" style="POSITION: absolute; WIDTH:1080px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
		<thumbnailtemplate style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></thumbnailtemplate>
	</div>
</div>
<!-- Thumbnail Item Skin End -->
</div>
<!-- ThumbnailNavigator Skin End -->

<!-- Navigator Skin Begin -->
<!-- jssor slider navigator skin 01 -->
<style>
            /*
            .jssorn01 div           (normal)
            .jssorn01 div:hover     (normal mouseover)
            .jssorn01 .av           (active)
            .jssorn01 .av:hover     (active mouseover)
            .jssorn01 .dn           (mousedown)
            */
            .jssorn01 div, .jssorn01 div:hover, .jssorn01 .av
            {
            	filter: alpha(opacity=70);
            	opacity: .7;
            	overflow:hidden;
            	cursor: pointer;
            	border: #000 1px solid;
            }
            .jssorn01 div { background-color: gray; }
            .jssorn01 div:hover, .jssorn01 .av:hover { background-color: #d3d3d3; }
            .jssorn01 .av { background-color: #fff; }
            .jssorn01 .dn, .jssorn01 .dn:hover { background-color: #555555; }
        </style>
        <!-- navigator container -->
        <div u="navigator" class="jssorn01" style="position: absolute; bottom: 16px; right: 10px;">
        	<!-- navigator item prototype -->
        	<div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
        </div>
        <!-- Navigator Skin End -->
        
        <!-- Direction Navigator Skin Begin -->
        <style>
        /* jssor slider direction navigator skin 05 css */
            /*
            .jssord05l              (normal)
            .jssord05r              (normal)
            .jssord05l:hover        (normal mouseover)
            .jssord05r:hover        (normal mouseover)
            .jssord05ldn            (mousedown)
            .jssord05rdn            (mousedown)
            */
            .jssord05l, .jssord05r, .jssord05ldn, .jssord05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
            	background: url(../img/d17.png) no-repeat;
            	overflow:hidden;
            }
            .jssord05l { background-position: -10px -40px; }
            .jssord05r { background-position: -70px -40px; }
            .jssord05l:hover { background-position: -130px -40px; }
            .jssord05r:hover { background-position: -190px -40px; }
            .jssord05ldn { background-position: -250px -40px; }
            .jssord05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssord05l" style="width: 40px; height: 40px; top: 240px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssord05r" style="width: 40px; height: 40px; top: 240px; right: 8px">
        </span>
        <!-- Direction Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
        <!-- Trigger -->
    </div>
</div>
</div>
<br>
<div class="container">
	<div class="col-md-12"><h2 style="text-decoration: underline; color: #808080">New Product</h2></div>
	<div class="row">
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail ">
				<a href="#">
					<img src="assets/img/product/sp1.jpg" alt="" class="img-responsive"></a>
					<div class="caption">
						<h4><a href="#">Tên sản phẩm</a></h4>
						<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href="#"><img src="assets/img/product/sp2.jpg" alt="..."></a>
					<div class="caption">
						<h4><a href="#">Tên sản phẩm</a></h4>
						<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href="#"><img src="assets/img/product/sp3.jpg" alt="..."></a>
					<div class="caption">
						<h4><a href="#">Tên sản phẩm</a></h4>
						<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href=""><img src="assets/img/product/sp4.jpg" alt="..."></a>
					<div class="caption">
						<h4><a href="#">Tên sản phẩm</a></h4>
						<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Button</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-basic" style="height:200px;">
		<footer>
			<div class="social"><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-instagram"></i></a><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-snapchat"></i></a><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-twitter"></i></a>
				<a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-facebook"></i></a>
			</div>
			<ul class="list-inline">
				<li class="list-inline-item"><a href="#">Trang chủ</a></li>
				<li class="list-inline-item"><a href="#">Sản phẩm</a></li>
				<li class="list-inline-item"><a href="#">Tin tức</a></li>
				<li class="list-inline-item"><a href="#">Giới thiệu</a></li>
				<li class="list-inline-item"><a href="#">Cơ hội đầu tư</a></li>
			</ul>
			<p class="copyright">Company Name © 2018</p>
		</footer>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.min.js"></script>
</body>
</html>
<?php
	require './libs/config.php';
	session_start();
	connect_db();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="assets/img/meeting.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thế giới công nghệ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/styles.min.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
		.jssorn01 div, .jssorn01 div:hover, .jssorn01 .av {
			filter: alpha(opacity=70);
			opacity: .7;
			overflow: hidden;
			cursor: pointer;
			border: #000 1px solid;
		}

		.jssorn01 div {
			background-color: gray;
		}

		.jssorn01 div:hover, .jssorn01 .av:hover {
			background-color: #d3d3d3;
		}

		.jssorn01 {
			background-color: #fff;
		}

		.jssorn01 {
			background-color: #555555;
		}

		.jssord05l, .jssord05r,
		{
			position: absolute;
			cursor: pointer;
			display: block;
			/*background: url(assets/img/d17.png) no-repeat;*/
			overflow: hidden;
		}

		.jssord05l {
			background-position: -10px -40px;
		}

		.jssord05r {
			background-position: -70px -40px;
		}

		.jssord05l:hover {
			background-position: -130px -40px;
		}

		.jssord05r:hover {
			background-position: -190px -40px;
		}
	</style>
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
					<li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Trang chủ</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="product.php">Sản phẩm</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Tin tức</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Giới thiệu</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Cơ hội đầu tư</a></li>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" role="presentation" href="#">First Item</a>
						<a class="dropdown-item" role="presentation" href="#">Second Item</a>
						<a class="dropdown-item" role="presentation" href="#">Third Item</a>
					</div>
				</ul>
				<?php
					if (isset($_SESSION["islogin"])) {
						if($_SESSION["islogin"]) {
							echo '
							<span class="infor-user">Xin chào <strong>' . $_SESSION["username"] . '</strong>
								<img src="./assets/img/user/test.png" width="20"> 
								<i class="fa fa-caret-right"></i>	
								<div class="dropdown-content">
									<a href="./account/infor_user.php"><i class="fa fa-user"></i> Hồ sơ cá nhân</a>
									<a href="./account/infor_user.php#product_list"><i class="fa fa-product-hunt"></i> Sản phẩm</a>
									<a href="./account/infor_user.php#news_list"><i class="fa fa-newspaper-o"></i> Tin tức</a>
									<a href="./account/logout.php"><i class="fa fa-power-off"></i> Đăng xuất</a>
								</div>				
							</span>';
						}
					} else {
						echo '<span class="navbar-text actions">
								<a class="login" href="account/login.php"><i class="fa fa-lock"></i> Đăng nhập</a>
								<a class="btn btn-light" role="button" href="account/signup.php">Đăng ký</a>
							</span>';
					}
				?>
			</div>
		</div>
	</nav>
</div>
<div class="container">
	<div class=" col-md-12 search">
		<div class=" col-md-6 col-xs-6" style="float:left;">
			<form class="form-inline">
				<div>
					<input class="form-control mr-sm-2 form-search" type="search" placeholder="Search" aria-label="Search" id="search">
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>
					</button>
				</div>
			</form>
		</div>
		<div class=" col-md-6 col-xs-6" style="float: left;">
			<marquee><h5>Chào mừng đến với thế giới công nghệ </h5></marquee>
		</div>
	</div>
</div>
<br>
<br>
<div class="container">
	<div class="rows">
		<div class="col-md-12" style="margin-left: -15px;">
			<!-- <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script> -->
			<script type="text/javascript" src="assets/js/jssor.core.js"></script>
			<script type="text/javascript" src="assets/js/jssor.utils.js"></script>
			<script type="text/javascript" src="assets/js/jssor.slider.js"></script>
			<script type="text/javascript" src="assets/js/script.min.js"></script>
			<div class="img-responesive" id="sliderb_container" style="position: relative; width:1080px;
			height: 500px;">
				<div u="loading" style="position: absolute; top: 0; left: 0;">
					<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
				background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
					</div>
					<div style="position: absolute; display: block; background: url(assets/img/loading.gif) no-repeat center center;
			top: 0px; left: 0px;width: 100%;height:100%;">
					</div>
				</div>
				<!-- Slides Container -->
				<div class="img-responesive" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:1080px; height: 500px;
	overflow: hidden;">
					<div>
						<img u=image src="assets/img/004.jpg"/>
						<div u="thumb">Do you notice it is draggable by mouse/finger?</div>
					</div>
					<div>
						<img u=image src="assets/img/005.jpg"/>
						<div u="thumb">Did you drag by either horizontal or vertical?</div>
					</div>
					<div>
						<img u=image src="assets/img/006.jpg"/>
						<div u="thumb">Do you notice navigator responses when drag?</div>
					</div>
					<div>
						<img u=image src="assets/img/007.jpg"/>
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
						<div class="img-responesive" u="prototype" style="POSITION: absolute; WIDTH:1080px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
							<thumbnailtemplate style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></thumbnailtemplate>
						</div>
					</div>
					<!-- Thumbnail Item Skin End -->
				</div>
				<!-- ThumbnailNavigator Skin End -->
				<!-- navigator container -->
				<div u="navigator" class="jssorn01" style="position: absolute; bottom: 16px; right: 10px;">
					<!-- navigator item prototype -->
					<div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
				</div>
				<!-- Navigator Skin End -->
				<span u="arrowleft" class="jssord05l" style="width: 40px; height: 40px; top: 240px; left: 8px;">
</span>
				<!-- Arrow Right -->
				<span u="arrowright" class="jssord05r" style="width: 40px; height: 40px; top: 240px; right: 8px">
</span>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container">
	<div class="col-md-12">
		<h2 style="text-decoration: underline; color: #808080">Sản phẩm mới</h2>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-3  product">
			<div class="thumbnail ">
				<a href="#">
					<img src="assets/img/product/sp1.jpg" alt="" class="img-responsive"></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a>
						<a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp2.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a>
						<a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp3.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a>
						<a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 product">
			<div class="thumbnail">
				<a href=""><img src="assets/img/product/sp4.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a>
						<a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-basic" style="height:200px;">
	<footer>
		<div class="social">
			<a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-instagram"></i></a><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-snapchat"></i></a><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-twitter"></i></a>
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
<script src="assets/js/search.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/script.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".infor-user").click(function(){
            $(".dropdown-content").css({"display":"block"});
        });
        $(".container").hover(function(){
            $(".dropdown-content").css({"display":"none"});
        });
        $(".infor-user").dblclick(function(){
            $(".dropdown-content").css({"display":"none"});
        });

    });
</script>
</body>
</html>
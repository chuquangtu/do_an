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
	<link rel="stylesheet" href="assets/css/styles.product.css?v=1.0">       
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
					<li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Trang chủ</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Sản phẩm</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Tin tức</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Giới thiệu</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Cơ hội đầu tư</a></li>
					<div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
				</li>
			</ul>
			<span class="navbar-text actions">
				<a class="login" href="account/login.php"><i class="fa fa-lock"></i> Đăng nhập</a>
				<a class="btn btn-light" role="button" href="account/signup.php">Đăng ký</a>
			</span>
		</div>
	</div>
</nav>
</div>
<div class="container">
	<div class=" col-md-12 search" >
		<div class=" col-md-6 col-xs-6" style="float:left;">
			<form class="form-inline">
				<div>
					<input class="form-control mr-sm-2 form-search" type="search" placeholder="Search" aria-label="Search" >
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
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
<br>
<div class="container">
	<div class="row" style="margin: auto">
			<div class="col-md-3 prd">
				<div class="img_product" style="">
					<img src="account/assets/img/004.jpg">
				</div>

				<a href="#">
					<i class="fa fa-eye" title="View !" style="font-size: 22px;"></i>
				</a>
				<h6 style="position: absolute; bottom: 10px;"><a href="#">Tiêu đề bài viết Tiêu đề bài viết Tiêu đề bài viết Tiêu đề bài viết </a></h6>
			</div>
			<div class="col-md-3 prd"></div>
			<div class="col-md-3 prd"></div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/script.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".img_product").hover(function(){
			$(this).animate({marginTop: "-50px"});
		}
		,function(){
			$(this).animate({marginTop:"-20px"});
		});
		$(".fa-eye").tooltip();
		$(".prd").hover(function(){
			$(".prd i").css({"display":"block"});
		},function(){
			$(".prd i").css({"display":"none"});
		});
	});	
</script>
</body>
</html>
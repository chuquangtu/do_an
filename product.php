<?php
$conn = mysqli_connect("localhost","root","","do_an");
mysqli_query($conn, "SET NAMES utf8");
$sql = "select * from tbl_product";
$query = mysqli_query($conn, $sql);
$total = mysqli_num_rows($query);
$per_page = 4;
$num_of_page = ceil($total/$per_page);
if (!isset($_GET['page'])) {
	$_GET['page'] = 1;
	$start = 0;
}
else{
	$start = ($_GET['page'] - 1) * $per_page;
}

$sql2 = "SELECT * FROM tbl_product LIMIT $start,$per_page";
$query2 = mysqli_query($conn,$sql2);
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/styles.min.css?v=1.0"> 
	<link rel="stylesheet" href="assets/css/styles.product.css?v=1.0">       
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
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
			<form class="form-inline" >
				<div>
					<input class="form-control mr-sm-2 form-search" type="search" placeholder="Search" aria-label="Search" id="search" >
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
<div class="container" id="area"></div>
<br>
<div class="container">
	<div class="col-md-12" id="KHTN" ><h2 style="text-decoration: underline; color: #808080">Khoa Học Tự Nhiên</h2></div>
	<div class="row">
		<?php while ($row1 = mysqli_fetch_array($query2)) {
?>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail ">
				<a href="#">
					<img src="<?php echo $row1['product_img']?>" alt="" class="img-responsive"></a>
				<div class="caption">
					<br>
					<h6><a href="#"><?php echo $row1['product_name']; ?></a></h6>
					<p><a href="view_product.php?id=<?php echo $row1['id_product']?>" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
	<nav aria-label="Page navigation example" style="margin-top: 20px;">
		  <ul class="pagination"> 
		  	<?php
		    	if ($_GET['page'] > 1) {
		    		$first = 1;  
		    ?>
		    <li class="page-item"><a class="page-link" href="product.php?page=<?php echo $first ?>">First</a></li>
		   <?php
		   	}
		   ?>
		   <?php
		   		for ($i=1; $i <= $num_of_page ; $i++) { 
		   			if ($_GET['page'] == $i) {
		   ?>
		    <li class="page-item"><a class="page-link" href="product.php?page=<?php echo $i ?>"><?php echo $i?></a></li>
			<?php
				}
			}
			?>
			<?php if ($_GET['page'] < $num_of_page) {
				$last = $num_of_page;
			 ?>
		    <li class="page-item"><a class="page-link" href="product.php?page=<?php echo $last ?>">Last</a></li>
		    <?php
		    	}
		    ?>
		  </ul>
		</nav>
</div>
<div class="container">
	<div class="col-md-12"><h2 style="text-decoration: underline; color: #808080">Khoa Học Kỹ Thuật Và Công Nghệ</h2></div>
	<div class="row">
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#">
					<img src="assets/img/product/sp1.jpg" alt="" class="img-responsive"></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp2.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp3.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href=""><img src="assets/img/product/sp4.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<nav aria-label="Page navigation example" style="margin-top: 20px;">
		  <ul class="pagination">
		    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
	</div>
</div>
<div class="container">
	<div class="col-md-12"><h2 style="text-decoration: underline; color: #808080">Khoa Học Y, Dược</h2></div>
	<div class="row">
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail ">
				<a href="#">
					<img src="assets/img/product/sp1.jpg" alt="" class="img-responsive"></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp2.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp3.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href=""><img src="assets/img/product/sp4.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<nav aria-label="Page navigation example" style="margin-top: 20px;">
		  <ul class="pagination">
		    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
	</div>
</div>
<div class="container">
	<div class="col-md-12"><h2 style="text-decoration: underline; color: #808080">Khoa Học Nông Nghiệp</h2></div>
	<div class="row">
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail ">
				<a href="#">
					<img src="assets/img/product/sp1.jpg" alt="" class="img-responsive"></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp2.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp3.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href=""><img src="assets/img/product/sp4.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<nav aria-label="Page navigation example" style="margin-top: 20px;">
		  <ul class="pagination">
		    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
	</div>
</div>
<div class="container">
	<div class="col-md-12"><h2 style="text-decoration: underline; color: #808080">Khoa Học Xã Hội</h2></div>
	<div class="row">
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail ">
				<a href="#">
					<img src="assets/img/product/sp1.jpg" alt="" class="img-responsive"></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp2.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp3.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href=""><img src="assets/img/product/sp4.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<nav aria-label="Page navigation example" style="margin-top: 20px;">
		  <ul class="pagination">
		    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
	</div>
</div>
<div class="container">
	<div class="col-md-12"><h2 style="text-decoration: underline; color: #808080">Khoa Học Nhân Văn</h2></div>
	<div class="row">
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail ">
				<a href="#">
					<img src="assets/img/product/sp1.jpg" alt="" class="img-responsive"></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp2.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href="#"><img src="assets/img/product/sp3.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 product">
			<div class="thumbnail">
				<a href=""><img src="assets/img/product/sp4.jpg" alt="..."></a>
				<div class="caption">
					<h4><a href="#">Tên sản phẩm</a></h4>
					<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâmn</a></p>
				</div>
			</div>
		</div>
		<nav aria-label="Page navigation example" style="margin-top: 20px;">
		  <ul class="pagination">
		    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script>
			$(document).ready(function(e){
				$("#search").keyup(function(){
					$("#area").show();
					var x = $(this).val().trim();
					$.ajax({
						type:'POST',
						url:'search_product.php',
						data:'key='+x,
						success:function(data){
							$("#area").html(data);
						}
					});
				});
			});
		</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/script.min.js"></script>
<!-- <script src="assets/js/search.js"></script> -->

</body>
</html>
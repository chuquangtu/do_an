<?php
if (isset($_GET['id'])) {
	$product_id = $_GET['id'];
}else{
	echo "Not found";
}
$conn = mysqli_connect("localhost","root","","do_an");
mysqli_query($conn,"SET NAMES utf8");
$sql = "select * from tbl_product where id_product = '$product_id'";
$query = mysqli_query($conn, $sql);
?>

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
	<link rel="stylesheet" href="../assets/css/styles.min.css">    
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
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
<div class="container">
<div class="rows"><?php
while ( $row = mysqli_fetch_array($query)) {
	
?>
		<div class="col-md-12">
			<h1><?php echo $row['product_name'];  ?></h1>
		</div>
		<div class="col-md-12">
			<?php echo $row['product_content']; ?>
			<div class="rows">
				<div class="col-md-3" style="float: right;"><i><?php echo $row['product_author'] ; ?></i>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="col-md-8">
			<table class="table">
				<tr>
					<th>Tác giả</th>
					<td><?php echo $row['product_author']?></td>
					<th>Lĩnh vực</th>
					<td><?php
						$topic_name = mysqli_fetch_assoc(mysqli_query($conn, "SELECT topic_name FROM tbl_topic WHERE id_topic = '".$row['id_topic']."'"));
						echo $topic_name["topic_name"];
					?></td>
				</tr>
				<tr>
					<th>Trạng thái sản phẩm</th>
					<td><?php echo $row['product_form']?></td>
					<th>Loại sản phẩm</th>
					<td><?php
						$type_prd_name = mysqli_fetch_assoc(mysqli_query($conn, "SELECT type_product_name FROM tbl_type_product WHERE id_type_product = '".$row['id_type_product']."'"));
						echo $type_prd_name["type_product_name"];
					?></td>
				</tr>
			</table>
		</div>
		<?php
	}	
?>
	</div>
</div>

</body>
</html>

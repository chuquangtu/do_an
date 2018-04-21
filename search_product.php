<?php
$conn = mysqli_connect("localhost","root","","do_an");
mysqli_query($conn,"SET NAMES utf8");
if (!empty($_POST['key'])) {
	$key = $_POST['key'];
	$sql = "select * from tbl_product where product_name like'%$key%'"; 
	$query = mysqli_query($conn, $sql);
}
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
	<link rel="stylesheet" href="httpss://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="../assets/css/styles.min.css?v=1.0">    
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
			<div class="row">
				<?php if (isset($query)) {	
		while ($row = mysqli_fetch_array($query)) {
?>	
			<div class="col-sm-6 col-md-3 product">
			<br>		
			<div class="thumbnail">	
			<a href="#">
			<img src="<?php echo $row['product_img']?>" alt="" class="img-responsive"></a>
			<div class="caption">
			<br>
			<h6><a href="#"><?php echo $row['product_name']?> </a></h6>
			<p><a href="#" class="btn btn-outline-primary" role="button">Xem</a> <a href="#" class="btn btn-outline-secondary" role="button">Quan tâm</a></p>
			</div>
			</div>
			
			</div>
			<?php
				}
			}
			?>
			</div>
		
			
		
</body>
</html>
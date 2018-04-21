<?php
	session_start();
	if(!isset($_SESSION)) header("location: login.php");
	require '../libs/config.php';
	connect_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="../assets/img/meeting.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thế giới công nghệ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="../assets/css/infor-user.css">
	<link rel="stylesheet" href="../assets/css/styles.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="height: 650px;">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin:-0;margin-top:-25px;">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="../assets/img/meeting.jpg" class="img-responsive logo-item">
		</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse"
		     id="navcol-1">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Trang chủ</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link" href="../product.php">Sản phẩm</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link" href="#">Tin tức</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link" href="#">Giới thiệu</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link" href="#">Cơ hội đầu tư</a></li>

			</ul>
			<ul class="navbar-nav-right">
				<?php echo '
					<span class="infor-user">Xin chào <strong>' . $_SESSION["username"] . '</strong>
						<img src="../assets/img/user/test.png" width="20"> 
						<i class="fa fa-caret-right"></i>	
						<div class="dropdown-content">
							<a href="infor_user.php"><i class="fa fa-user"></i> Hồ sơ cá nhân</a>
							<a href="infor_user.php#product_list"><i class="fa fa-product-hunt"></i> Sản phẩm</a>
							<a href="infor_user.php#news_list"><i class="fa fa-newspaper-o"></i> Tin tức</a>
							<a href="logout.php"><i class="fa fa-power-off"></i> Đăng xuất</a>
						</div>				
					</span>';?>
			</ul>
		</div>
	</div>
</nav>
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-5 col-xs-5 iphone">
				<div class="col-md-11 screen">
					<div class="col-md-12 device">
						<i class="fa fa-signal"></i>
						<span>KHCN</span>
						<i class="fa fa-battery-3" ></i>
						<i class="fa fa-wifi"></i>
					</div>
					<div class="col-md-12 file">
						<?php
							$datauser = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='".$_SESSION["username"]."'"));
							$datauserinfo = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_user_info WHERE id_user='".$datauser["id_user"]."'"));
						?>
						<table class="table-hover" cellpadding="5px;" style="font-size: 16px;">
							<tr>
								<td>ID</td>
								<td>:</td>
								<td><?php echo $datauser["id_user"]?></td>
							</tr>
							<tr>
								<td>Họ và tên</td>
								<td>:</td>
								<td>
									<?php echo $datauserinfo["full_name"]?>
								</td>
							</tr>
							<tr>
								<td>Giới tính</td>
								<td>:</td>
								<td><?php echo $datauserinfo["gender"] == "m" ? "Nam":"Nữ";?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?php echo $datauserinfo["email"]?></td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>:</td>
								<td> <?php echo 0 . $datauserinfo["phone"]?></td>
							</tr>
							<tr>
								<td>Ngày sinh</td>
								<td>:</td>
								<td> <?php echo date('d/m/Y', strtotime($datauserinfo["birthday"]))?></td>
							</tr>
							<tr>
								<td>Hình ảnh</td>
								<td>:</td>
								<td><img src="../assets/img/004.jpg" style="width: 40px; height: 30px;"></td>
							</tr>
							<tr>
								<td colspan="2"><a data-toggle="modal" href='#modal-id'>Đổi mật khẩu</a></td>
							</tr>
							<tr>
								<td colspan="2"><a href="#modal-id-1" data-toggle="modal">Đổi ảnh đại diện</a></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-md-2 center1"></div>
			</div>
			
		</div>
	</div>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<div class="col-md-10" style="text-align: center;">Đổi mật khẩu</div>
					<div class="col-md-1">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					</div>
				</div>
				<div class="modal-body" >
					<form action="#" method="POST" role="form" class="form-login" id="change_password">
						<div class="form-group">
							<label><i class="fa fa-key"></i> Mật khẩu cũ</label><input type="password" name="password_old" class="form-control" id="login" minlength="6" required >
							<br>
							<label><i class="fa fa-key"></i> Mật khẩu mới</label>
							<input type="password" name="password_new" class="form-control" id="password_new" required minlength="6">
							<br>
							<label><i class="fa fa-key"></i> Nhập lại mật khẩu mới</label>
							<input type="password" name="repassword_new" class="form-control" id="login" required>
						</div>
						<div class="link-account">
							<span><a href="dangky.php">Tạo tài khoản</a></span><br>
							<span><a href="#">Quên mật khẩu</a></span>
						</div>
						<button type="submit" class="btn btn-primary btn-login">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-id-1">
		<div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<div class="col-md-10" style="text-align: center;">Đổi ảnh đại diện</div>
					<div class="col-md-1">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					</div>
				</div>
				<div class="modal-body">
					<form action="#" method="POST" role="form" class="form-login" runat="server">
						<div class="form-group">
							<label><i class="fa fa-image"></i> Ảnh đại diện</label>
							<input type="file" name="change-img" class="form-control" id="file-avatar" accept="image/*" >
							<br>
							<img src="#" id="avatar" alt="" style="width: 150px; height: 100px; ">
						</div>
						<div class="link-account">
							<span><a href="dangky.php">Tạo tài khoản</a></span><br>
							<span><a href="#">Quên mật khẩu</a></span>
						</div>
						<button type="submit" class="btn btn-primary btn-login">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div> 
	<br>
	<br>
	<div class="container" id="product_list">
		<h1>Sản phẩm</h1>
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="tabs">
				<li role="presentation" class="active">
					<a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sản phẩm đã hoàn thành</a>
				</li>
				<li role="presentation">
					<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Sản phẩm đang hoàn thành</a>
				</li>
				<li role="presentation">
					<a href="#tab-1" aria-controls="tab" role="tab" data-toggle="tab">Ý tưởng</a>
				</li>
			</ul>
			
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<table  cellpadding="10px">
						<br>
						<tr>
							<td>STT</td>
							<td>Tên sản phẩm</td>
							<td>Hình ảnh</td>
							<td>Trạng thái</td>
							<td>Tình trạng</td>
							<td>Hình thức</td>
							<td>Tác giả</td>
							<td>Lĩnh vực</td>
						</tr>
						<tr>
							<td>01</td>
							<td>Thiết bị khử trùng XXX</td>
							<td><img src="../assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
							<td>Đã hoàn thành</td>
							<td>Đã duyệt</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Công ty ABC</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Thiết bị chống cháy nổ XXX</td>
							<td><img src="../assets/img/005.jpg" style="width: 60px;height: 40px;"></td>
							<td>Đã hoàn thành</td>
							<td>Chưa duyệt</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Nguyễn Văn S</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab">
					<table  cellpadding="10px">
						<br>
						<tr>
							<td>STT</td>
							<td>Tên sản phẩm</td>
							<td>Hình ảnh</td>
							<td>Trạng thái</td>
							<td>Hình thức</td>
							<td>Tác giả</td>
							<td>Lĩnh vực</td>
						</tr>
						<tr>
							<td>01</td>
							<td>Thiết bị khử trùng XXX</td>
							<td><img src="../assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
							<td>Đang sản xuất</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Công ty ABC</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Thiết bị chống cháy nổ XXX</td>
							<td><img src="../assets/img/005.jpg" style="width: 60px;height: 40px;"></td>
							<td>Đang sản xuất</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Nguyễn Văn S</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab-1">
					<table  cellpadding="10px">
						<br>
						<tr>
							<td>STT</td>
							<td>Tên sản phẩm</td>
							<td>Hình ảnh</td>
							<td>Trạng thái</td>
							<td>Hình thức</td>
							<td>Tác giả</td>
							<td>Lĩnh vực</td>
						</tr>
						<tr>
							<td>01</td>
							<td>Thiết bị khử trùng XXX</td>
							<td><img src="../assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
							<td>Ý tưởng</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Công ty ABC</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Thiết bị chống cháy nổ XXX</td>
							<td><img src="../assets/img/005.jpg" style="width: 60px;height: 40px;"></td>
							<td>Ý tưởng</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Nguyễn Văn S</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
					</table>
				</div>
			</div>
		</div> 	
	</div>	
	<br>
	<div class="container">
		<div class="col-md-12">
			<h2>Đăng sản phẩm</h2>
			<div class="col-md-10">
				<form action="#" method="POST" role="form"  runat="server" >
					<input type="text" name="product_name" class="form-control" placeholder="Tên sản phẩm" required>
					<br>
					<input type="text" name="product_author" class="form-control" placeholder="Tác giả" >
					<br>
					<select class="form-control" required name="product_license">
						<option value="" style="color: gray">Sản phẩm có chứng nhận sở hữu trí tuệ ?</option>
						<option value="">Có</option>
						<option value="">Không</option>
					</select>
					<br>
					<input type="date" name="product_deadline" class="form-control" placeholder="mm/dd/yyyy">
					<br>
					<select class="form-control" required name="product_status">
						<option value="">Trạng thái sản phẩm</option>
						<option>Đã hoàn thành</option>
						<option>Đang sản xuất</option>
						<option>Ý tưởng</option>
					</select>
					<br>
					<div class="input-group">
					<input type="text" name="product_expense" class="form-control" placeholder="Chi phí sản xuất">
					<div class="input-group-prepend">
				          <div class="input-group-text">VNĐ</div>
				    </div>
					</div>
				    <br>
					<br>
					<input type="file" name="product_image" class="form-control" id="product_img" accept="image/*">
					<br>
					<img src="#" id="image" alt="" style="width: 150px; height: 100px; ">
					<br><br>
					<textarea name="product_content" id="product_content"></textarea>
					<br>

					<select name="" id="" class="form-control" required>
						<option value="" id="op1">Lĩnh vực / Ngành</option>
						<option >Khoa Học Tự Nhiên</option>
						<option >Khoa Học Kỹ Thuật Và Công Nghệ</option>
						<option >Khoa Học Y, Dược</option>
						<option >Khoa Học Nông Nghiệp</option>
						<option >Khoa Học Xã Hội</option>
						<option >Khoa Học Nhân Văn</option>
					</select>
					<br>
					<select name="" id="" class="form-control" required="">
						<option value="">Loại sản phẩm </option>
						<option >Sản phẩm trí tuệ nhân tạo</option>
						<option >Sản phẩm trực tiếp</option>
					</select>
					<br>
					<select name="" id="1234" class="form-control" required>
						<option value="">Loại đầu tư</option>
						<option >Đầu tư toàn phần</option>
						<option >Hỗ trợ đầu tư</option>
						<option >Đầu tư phát triển</option>
						<option >Đầu tư hợp tác</option>
					</select>
					<br>
					<input type="submit" class="btn btn-info" name="" value="Đăng">
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container" id="news_list">
		<div class="col-md-12">
			<h1>Tin tức</h1>
			<div class="col-md-10">
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist" id="tab_s">
						<li role="presentation" class="active">
							<a href="#home-1" aria-controls="home" role="tab" data-toggle="tab">Bài viết đã phê duyệt</a>
						</li>
						<li role="presentation">
							<a href="#tab_1" aria-controls="tab" role="tab" data-toggle="tab">Bài viết chưa phê duyệt</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home-1">
							<table  cellpadding="10px">
								<br>
								<tr>
									<td>STT</td>
									<td>Tiêu đề</td>
									<td>Hình ảnh</td>
									<td>Nội dung</td>
									<td>Trạng thái</td>
									<td>Tác giả</td>
									<td>Lĩnh vực</td>
								</tr>
								<tr>
									<td>01</td>
									<td>Thiết bị khử trùng XXX</td>
									<td><img src="../assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
									<td>...</td>
									<td>Đã duyệt</td>
									<td>Trần Văn A</td>
									<td>Khoa Học Kỹ Thuật Và Công Nghệ</td>
								</tr>
								<tr>
									<td>02</td>
									<td>Thiết bị khử trùng XXX</td>
									<td><img src="../assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
									<td>...</td>
									<td>Đã duyệt</td>
									<td>Trần Văn B</td>
									<td>Khoa Học Y, Dược</td>
								</tr>
							</table>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab_1">
							<table  cellpadding="10px">
								<br>
								<tr>
									<td>STT</td>
									<td>Tiêu đề</td>
									<td>Hình ảnh</td>
									<td>Nội dung</td>
									<td>Trạng thái</td>
									<td>Tác giả</td>
									<td>Lĩnh vực</td>
								</tr>
								<tr>
									<td>01</td>
									<td>Thiết bị khử trùng XXX</td>
									<td><img src="../assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
									<td>...</td>
									<td>Chưa duyệt</td>
									<td>Trần Văn B</td>
									<td>Khoa Học Y, Dược</td>
								</tr>
								<tr>
									<td>01</td>
									<td>Thiết bị khử trùng XXX</td>
									<td><img src="../assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
									<td>...</td>
									<td>Chưa duyệt</td>
									<td>Trần Văn A</td>
									<td>Khoa Học Y, Dược</td>
								</tr>
							</table>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
			<div class="col-md-12">
				<h2>Đăng tin tức</h2>
				<div class="col-md-10">
					<form action="#" method="POST" role="form"  runat="server" >
						<input type="text" name="news_title" class="form-control" placeholder="Tiêu đề" required>
						<br>				
						<input type="file" name="news_image" class="form-control" id="news_img" accept="image/*">
						<br>
						<img src="#" id="news_image" alt="" style="width: 150px; height: 100px; ">
						<br><br>
						<textarea name="news_content" id="news_content"></textarea>
						<br>
						<input type="text" name="news_author" class="form-control" placeholder="Tác giả" >
						<br>
						<input type="submit" class="btn btn-info" name="" value="Đăng">
					</form>
				</div>
			</div>
			<br>
			<h4><a href=""></a></h4>
		</div>
		<br>
		<br>
	<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../assets/ckeditor/ckfinder/ckfinder.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../assets/js/script.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace( 'product_content');
		CKEDITOR.replace( 'news_content');
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#change_password").validate({
				rules: {
					repassword_new: {
						equalTo: "#password_new"
					}
				}
			});
		}); 
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#image').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#product_img").change(function(){
			readURL(this);
		});
		function readURL1(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#avatar').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#file-avatar").change(function(){
			readURL1(this);
		});
		function readURL1(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#news_image').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#news_img").change(function(){
			readURL1(this);
		});
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
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sed vel tenetur doloribus, itaque eveniet. Cumque eveniet quo obcaecati. Tempore vero aut ea rem magnam alias, obcaecati voluptate similique doloribus.
</body>
</html>
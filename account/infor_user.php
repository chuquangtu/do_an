<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="assets/img/meeting.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thế giới công nghệ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/infor-user.css?v=1.0">    
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body style="height: 650px;">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-4 col-xs-4 iphone">
				<div class="col-md-11 screen">
					<div class="col-md-12 device">
						<i class="fa fa-signal"></i>
						<span>Viettel</span>
						<i class="fa fa-battery-3" ></i>
						<i class="fa fa-wifi"></i>
					</div>
					<div class="col-md-12 file">
						<table class="table-hover">
							<tr>
								<td>ID</td>
								<td>:</td>
								<td> 1</td>
							</tr>
							<tr>
								<td>Họ và tên</td>
								<td>:</td>
								<td> Nguyễn Văn A</td>
							</tr>
							<tr>
								<td>Giới tính</td>
								<td>:</td>
								<td> Nam</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td> abc@gmail.com</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>:</td>
								<td> 0123456789</td>
							</tr>
							<tr>
								<td>Ngày sinh</td>
								<td>:</td>
								<td> 02/29/2000</td>
							</tr>
							<tr>
								<td><a data-toggle="modal" href='#modal-id'>Đổi mật khẩu</a></td>
							</tr>
							<tr>
								<td>Hình ảnh</td>
								<td>:</td>
								<td><img src="assets/img/004.jpg" style="width: 40px; height: 30px;"></td>
							</tr>
							<tr>
								<td><a href="#modal-id-1" data-toggle="modal">Đổi ảnh đại diện</a></td>
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
							<td><img src="assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
							<td>Đã hoàn thành</td>
							<td>Đã duyệt</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Công ty ABC</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Thiết bị chống cháy nổ XXX</td>
							<td><img src="assets/img/005.jpg" style="width: 60px;height: 40px;"></td>
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
							<td><img src="assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
							<td>Đang sản xuất</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Công ty ABC</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Thiết bị chống cháy nổ XXX</td>
							<td><img src="assets/img/005.jpg" style="width: 60px;height: 40px;"></td>
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
							<td><img src="assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
							<td>Ý tưởng</td>
							<td>Sản phẩm trực tiếp</td>
							<td>Công ty ABC</td>
							<td>Khoa Học Y, Dược</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Thiết bị chống cháy nổ XXX</td>
							<td><img src="assets/img/005.jpg" style="width: 60px;height: 40px;"></td>
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
						<option>Có</option>
						<option>Không</option>
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
					<input type="text" name="product_expense" class="form-control" placeholder="Chi phí sản xuất">
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
									<td><img src="assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
									<td>...</td>
									<td>Đã duyệt</td>
									<td>Trần Văn A</td>
									<td>Khoa Học Kỹ Thuật Và Công Nghệ</td>
								</tr>
								<tr>
									<td>02</td>
									<td>Thiết bị khử trùng XXX</td>
									<td><img src="assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
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
									<td><img src="assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
									<td>...</td>
									<td>Chưa duyệt</td>
									<td>Trần Văn B</td>
									<td>Khoa Học Y, Dược</td>
								</tr>
								<tr>
									<td>01</td>
									<td>Thiết bị khử trùng XXX</td>
									<td><img src="assets/img/004.jpg" style="width: 60px;height: 40px;"></td>
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
		</div>
		<br>
		<br>
	<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="assets/ckeditor/ckfinder/ckfinder.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
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
	</script>
</script>
</body>
</html>
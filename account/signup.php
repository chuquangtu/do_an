<?php
	require '../libs/config.php';
	connect_db();
	session_start();
	if(isset($_SESSION["islogin"])){
		if($_SESSION["islogin"]) header("location: ../index.php");
	}
	$error = FALSE;
	$errorphone = $errormail = $errorpwd = $errorusr = "";
	$fullname = $gender = $phone = $birthday = $email = $username = $password = $password_repeat = "";
	if($_SERVER["REQUEST_METHOD"] === "POST") {
		$fullname = addslashes($_POST["fullname"]);
		$gender = $_POST["gender"];
		$phone = addslashes($_POST["phone"]);
		$birthday = addslashes($_POST["birthday"]);
		$email = addslashes($_POST["email"]);
		$username = addslashes($_POST["username"]);
		$password = addslashes($_POST["password"]);
		$password_repeat = addslashes($_POST["password_repeat"]);
		if(!($fullname !== NULL && $gender !== NULL && preg_match("/^\+?(84|0)(1\d{9}|9\d{8})$/", $phone) && $birthday !== NULL && filter_var($email, FILTER_VALIDATE_EMAIL) && $username !== NULL && $password !== NULL && $password_repeat !== NULL)) {
			if(!preg_match("/^\+?(84|0)(1\d{9}|9\d{8})$/", $phone)) {
				$error = TRUE;
				$errorphone = '<li><div id="errorphone">Nhập đúng định dạng số điện thoại, bắt đầu bằng <strong>0</strong> hoặc <strong>+84</strong>!</div></li>';
			};
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error = TRUE;
				$errormail = '<li><div id="errormail">Nhập đúng định dạng email!</div></li>';
			}
		} else {
			$query_usr = mysqli_query($conn, "SELECT * FROM tbl_user where username='" . $username . "'");
			if(mysqli_num_rows($query_usr) == 0) {
				if($password === $password_repeat) {
					$role = "member";
					$sql = "INSERT INTO tbl_user(username, password, role, create_date, update_date) VALUES ('" . $username . "', '" . md5($password) . "', '" . $role . "', now(), now())";
					$query = mysqli_query($conn, $sql);
					if($query) {
						$id_user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id_user FROM tbl_user where username='" . $username . "'"));
						$query_userinfo = mysqli_query($conn, "INSERT INTO tbl_user_info(full_name, birthday, gender, phone, email, avatar, id_user, id_org, create_date, update_date) VALUES ('" . $fullname . "', '" . $birthday . "', '" . $gender . "', '" . $phone . "', '" . $email . "', NULL, '" . $id_user["id_user"] . "', NULL, now(), now())");
					header("location: login.php?signupsuccess=true");
					}
				} else {
					$error = TRUE;
					$errorpwd = '<li><div id="errorpwd">Hai mật khẩu phải trùng nhau!</div></li>';
				}
			} else {
				$error = TRUE;
				$errorusr = '<li><div id="errorusr">Tên đăng nhập đã tồn tại, hãy chọn tên khác!</div></li>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="../assets/img/tw.svg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thế giới công nghệ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="../assets/css/styles.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<figure class="figure"></figure>
<div>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin:-0;margin-top:-25px;">
		<div class="container">
			<a class="navbar-brand" href="../index.php">
				<img src="../assets/img/wedges.gif" class="img-responsive logo-item">
			</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Trang chủ</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Sản phẩm</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Tin tức</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Giới thiệu</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#">Cơ hội đầu tư</a></li>
				</ul>
				<span class="navbar-text actions">
                <a class="login" href="login.php" title="Đăng nhập"><i class="fa fa-lock"></i> Đăng nhập</a> 
                <a class="btn btn-light btn-signup" role="button" href="signup.php">Đăng ký</a>
            </span>
			</div>
		</div>
	</nav>
</div>
<div class="register-photo" style="margin-top:0; background: lightblue;">
	<div class="form-container">
		<form method="post" id="create_account" action="signup.php">
			<h2 class="text-center" style="margin-top:-28px;"><strong>Đăng ký</strong> tài khoản mới.</h2>
			<div class="form-group">
				<?php
					if($error) {
						echo '<div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert"><ul id="alert_signup">' . $errorusr . $errorphone . $errormail . $errorpwd . '</ul><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
					}
				?>
			</div>
			<div> <strong>Tài khoản</strong> của bạn thuộc:
				<label style="margin-left: 20px;">Cá nhân</label>
				<input type="radio" id="org_name" name="org" value="person" required>
				<label>Tổ chức, doanh nghiệp</label>
				<input type="radio" id="org_name" name="org" value="company" required>
			</div>
			<div>
				<div class="form-group"><span id="check_org_name"></span>
					<input class="form-control" type="text" placeholder="Tên tổ chức, doanh nghiệp">
				</div>
				<div class="form-group"><span id="check_org_email"></span>
					<input class="form-control" type="text" placeholder="Email ">
				</div>
				<div class="form-group"><span id="check_org_address"></span>
					<input class="form-control" type="text" placeholder="Địa chỉ">
				</div>
			</div>
			<div class="form-group"><span id="check_fullname"></span>
				<input class="form-control" type="text" name="fullname" placeholder="Họ tên" id="fullname" minlength="2" required value="<?php echo $fullname; ?>" aria-required="true">
			</div>
			<div class="form-group">
				<select class="form-control" style="color: #8f8f8f;" id="gender" title="Giới tính" name="gender" aria-required="true" required>
					<option class="form-control" value="m" <?php echo $gender == "m" ? "selected" : "" ?>>Nam</option>
					<option class="form-control" value="f" <?php echo $gender == "f" ? "selected" : "" ?>>Nữ</option>
				</select>
			</div>
			<div class="form-group">
				<span id="check_phone"></span>
				<input class="form-control" type="number" name="phone" placeholder="Số điện thoại" id="phone" minlength="10" maxlength="11" value="<?php echo $phone; ?>" aria-required="true">
			</div>
			<div class="form-group"><span></span>
				<input type="text" class="form-control" id="birthday" name="birthday" placeholder="Ngày sinh: ngày/tháng/năm" onfocus="(this.type='date')" required value="<?php echo ($birthday !== "") ? date('d/m/Y', strtotime($birthday)):""; ?>" aria-required="true">
			</div>
			<div class="form-group"><span id="check_email"></span>
				<input class="form-control" type="email" name="email" placeholder="Email" id="email" required value="<?php echo $email; ?>" aria-required="true">
			</div>
			<div class="form-group"><span id="check_username"></span>
				<input class="form-control" type="text" name="username" placeholder="Tên đăng nhập" id="username" minlength="5" required value="<?php echo $username; ?>" aria-required="true">
			</div>
			<div class="form-group"><span id="check_password"></span>
				<input class="form-control" type="password" name="password" placeholder="Mật khẩu" id="password" minlength="6" required value="<?php echo $password; ?>" aria-required="true">
			</div>
			<div class="form-group"><span id="check_repassword"></span>
				<input class="form-control" type="password" name="password_repeat" placeholder="Nhập lại mật khẩu" id="repassword" required aria-required="true">
			</div>
			<div class="form-group">
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" id="checkbox" required aria-required="true" name="checkbox">Tôi đồng ý với điều khoản của trang web.</label>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-block" type="submit" id="signup-btn">Đăng ký</button>
			</div>
			<a href="#" class="already"></a>
		</form>
	</div>
</div>
<script>
    if (($("#errorphone").length > 0)) {
        $("#phone").css("border", "2px solid red")
    }

    if (($("#errormail").length > 0)) {
        $("#email").css("border", "2px solid red")
    }

    if (($("#errorpwd").length > 0)) {
        $("#password_repeat").css("border", "2px solid red");
    }

    if (($("#errorusr").length > 0)) {
        $("#username").css("border", "2px solid red");
    }
</script>
<div class="footer-basic">
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
		<p class="copyright">Company Name &copy; 2018</p>
	</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../assets/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/script.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/localization/messages_vi.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#create_account").validate({
            rules: {
                password_repeat: {
                    equalTo: "#password"
                }
            },
            lang: "vi"
        });
    });
</script>
</body>
</html>
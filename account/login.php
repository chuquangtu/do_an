<?php
	require '../libs/config.php';
	connect_db();
	session_start();
	if(isset($_SESSION["islogin"])) {
		if($_SESSION["islogin"]) header("location: ../index.php");
	}
	$error = "";
	$username = $password = "";
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		$username = addslashes($_POST["username"]);
		$password = addslashes($_POST["password"]);
		$query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='".$username."' AND password='".md5($password)."'");
		if(mysqli_num_rows($query)>0){
			$data = mysqli_fetch_assoc($query);
			$_SESSION["islogin"] = TRUE;
			$_SESSION["username"] = $username;
			$_SESSION["user_role"] = $data["role"];
			setcookie("remember_user", $username, "", "/", "", false, true);
			header("location: ../index.php");
		} else {
			$error = '<div class="form-text text-danger" style="font-size: 1rem; margin-top: -25px;" id="errorlogin">Tài khoản hoặc mật khẩu không chính xác!</div>';
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
	<link rel="stylesheet" href="../assets/css/styles.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<style type="text/css">.form-login input{border:none;border-bottom:2px solid #d0d0d0;background-color:inherit;display:block;width:100%;margin:0}.form-login input:focus{outline:0;border:none!important}.form-group .line{height:2px;width:0;background-color:#a9a9a9;display:inline-block;transition:.5s width ease-in-out;position:relative!important;top:-19px}.form-login input:focus+.line{width:100%;background-color:#02add7}.footer-basic{padding:0}</style>
</head>
<body style="height: 1110px;">
<figure class="figure"></figure>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin: -25px 0 0;">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="../assets/img/wedges.gif" class="img-responsive logo-item">
		</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navcol-1">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item" role="presentation"><a class="nav-link" href="#">Trang chủ</a></li>
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
<div style="padding: 50px 0; background: lightblue;">
	<div class="login-form">
		<div class="login-logo">
			<img src="../assets/img/wedges.gif" width="100px">
			<span class="login-slogan">Đăng nhập để bắt đầu chia sẻ</span>
		</div>
		<form class="form-login" action="login.php" method="post">
			<div class="form-group">
				<input class="form-input" type="text" name="username" placeholder="Tên đăng nhập" id="usernamelogin" minlength="5" required/>
				<div class="line"></div>
				<?php echo $error?>
			</div>
			<div class="form-group">
				<input class="form-input" type="password" name="password" placeholder="Mật khẩu" id="passwordlogin" required/>
				<div class="line"></div>
				<?php echo $error?>
			</div>
			<button class="btn btn--primary mt-15" type="submit" id="submit">Đăng nhập</button>
			<!--<div class="text-center">
				<a class="form-forgot-pwd" href="javascript:void(0)">Quên mật khẩu?</a>
			</div>-->
		</form>
		<div class="form-footer">
			<span class="link-to-signup">Chưa có tài khoản?</span><a class="btn btn--secondary" href="javascript:void(0)">Tạo</a>
		</div>
	</div>
</div>
<div class="footer-basic" style="height:170px;">
	<footer>
		<div class="social">
			<a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-instagram"></i></a>
			<a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-snapchat"></i></a>
			<a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-twitter"></i></a>
			<a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-facebook"></i></a>
		</div>
		<ul class="list-inline">
			<li class="list-inline-item"><a href="../index.php">Trang chủ</a></li>
			<li class="list-inline-item"><a href="#">Sản phẩm</a></li>
			<li class="list-inline-item"><a href="#">Tin tức</a></li>
			<li class="list-inline-item"><a href="#">Giới thiệu</a></li>
			<li class="list-inline-item"><a href="#">Cơ hội đầu tư</a></li>
		</ul>
		<p class="copyright">Company Name &copy; 2018</p>
	</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/script.min.js"></script>
<script>
	if($("#errorlogin").length>0){
	    var inputlogin = $("#usernamelogin, #passwordlogin");
	    inputlogin.css("border-bottom", "2px solid red");
        inputlogin.focus(function () {
            inputlogin.css("border", "none")
        });
		inputlogin.focusout(function () {
			inputlogin.css("border-bottom", "2px solid #d0d0d0")
        })
	}
</script>
</body>
</html>
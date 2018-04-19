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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body style="height: 1110px;">
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
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                </li>
            </ul>
            <span class="navbar-text actions">
                <a class="login" data-toggle="modal" href='login.php'><i class="fa fa-lock"></i> Đăng nhập</a>
                <a class="btn btn-light" role="button" href="dangky.php">Đăng ký</a>
            </span>
        </div>
    </div>
</nav>
</div>
<div class="register-photo" style="height:900px;margin-top:0px; background: lightblue;">
    <div class="form-container">
        <form method="post" id="create_account" >
            <h2 class="text-center" style="margin-top:-28px;"><strong>Tạo tài khoản</h2>
            <div class="form-group"><span id="check_fullname"></span><input class="form-control" type="text" name="fullname" placeholder="Họ tên" id="fullname" minlength="2" required></div>
            <div class="form-group">
                <select class="form-control" style="color: #8f8f8f;" id="gender">
                   <option class="form-control">Nam</option>
                   <option class="form-control">Nữ</option>
               </select>
           </div>
           <div class="form-group"><span id="check_phone"></span><input class="form-control" type="phone" name="phone" placeholder="Số điện thoại" id="phone"></div>
           <div class="form-group"><span></span>                    
            <input type='date' class="form-control" id='datepicker' placeholder=" Ngày sinh: mm/dd/yyy" />
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>   
    <div class="form-group"><span id="check_email"></span><input class="form-control" type="email" name="email" placeholder="Email" id="email" required></div>
    <div class="form-group"><span id="check_username"></span><input class="form-control" type="text" name="username" placeholder="Tên tài khoản" id="username" minlength="5" required></div>
    <div class="form-group"><span id="check_password"></span><input class   ="form-control" type="password" name="password" placeholder="Mật khẩu" id="password" minlength="6" required ></div>
    <div class="form-group"><span id="check_repassword"></span><input class="form-control" type="password" name="password_repeat" placeholder="Nhập lại mật khẩu" id="repassword" required></div>

    <div class="form-group">
        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkbox">Tôi đồng ý với các điều khoản cấp phép.</label></div>
    </div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Đăng ký</button></div><a href="#" class="already"></a>
</form>
</div>
</div>

<div class="footer-basic" style="height:170px;">
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
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#create_account").validate({
            rules: {
                password_repeat: {
                    equalTo: "#password"
                }
            }
        });
    }); 
</script>
<script type="text/javascript"> 
    $( function() {
        $( "#datepicker" ).datepicker();
    });
</script>
</body>
</html>
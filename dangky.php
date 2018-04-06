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
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body style="height:960px;">
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
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Trang chủ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Sản phẩm</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Tin tức</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Giới thiệu</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Cơ hội đầu tư</a></li>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                </li>
            </ul>
            <span class="navbar-text actions">
                <a class="login" data-toggle="modal" href='#modal-id'>Đăng nhập</a>
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog">
                        <div class="modal-content"> 
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST" role="form" class="form-login">
                                    <legend>Đăng nhập</legend>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="login" placeholder="Username">
                                        <input type="password" class="form-control" id="login" placeholder="Password">
                                    </div>
                                    <div class="link-account">
                                        <span><a href="#">Tạo tài khoản</a></span><br>
                                        <span><a href="#">Quên mật khẩu</a></span>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-login">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>s
                </div>   
                <a class="btn btn-light action-button" role="button" href="#">Đăng ký</a>
            </span>
        </div>
    </div>
</nav>
</div>
<div class="register-photo" style="height:750px;margin-top:6px;">
    <div class="form-container">
        <form method="post">
            <h2 class="text-center" style="margin-top:-28px;"><strong>Create</strong> an account.</h2>
            <div class="form-group"><input class="form-control" type="text" name="fullname" placeholder="Fullname" id="fullname"></div>
            <div class="form-group"><select class="form-control" style="background: #F7F9FC; color: #8f8f8f	; border-bottom: 7px solid #DFE7F1 ; border: none; ">
               <option>Nam</option>
               <option>Nữ</option>
           </select></div>
           <div class="form-group"><input class="form-control" type="phone" name="phone" placeholder="Phone" id="phone"></div>
           <div class="form-group">                    
            <input type='text' class="form-control" id='datepicker' placeholder=" Birthday: mm/dd/yyy" />
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>   
    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email"></div>
    <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" id="username"></div>
    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" id="password"></div>
    <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" id="repassword"></div>

    <div class="form-group">
        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkbox">I agree to the license terms.</label></div>
    </div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="button" onclick="dangky()">Sign Up</button></div><a href="#" class="already"></a>
</form>
</div>
</div>
<div class="footer-basic" style="height:170px;">
    <footer>
        <div class="social"><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-instagram"></i></a><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-snapchat"></i></a><a href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-twitter"></i></a>
            <a
            href="#" data-bs-hover-animate="wobble"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Company Name © 2018</p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/dangky.js"></script>
<script type="text/javascript">
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>
</script>
</body>

</html>
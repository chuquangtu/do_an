function dangky(){
	var fullname = document.getElementById('fullname').value;
	if (fullname == '') {
		alert("Bạn chưa nhập Fullname");
		fullname.select();
		return false;
	}else if(fullname = parseInt(fullname)){
		alert("Fullname phải là dạng chữ ");
		fullname.select();
		return false;
	}else if(fullname.length < 6 ){
		alert("Fullname phải có từ 6 ký tự trở lên");
		fullname.select();
		return false;
	}
	var date = document.getElementById('datepicker').value;
	var  = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/  ;	
		return regexdate.test(date);

	var phone = document.getElementById('phone').value.trim();
	var first_Number1 = phone.substring(0, 2);
	var first_Number2 = phone.substring(0, 3);
	var regexphone = /^[0-9-+]{10,11}$/;
	if (phone == '') {
		alert("Bạn chưa nhập Phone");
		phone.select();	
		return false;
	}	else if(!regexphone.test(phone)){
		alert("Phone phải là số và có từ 10-11 ký tự");
		phone.select();
		return false;	
	}
	
		
		var email = document.getElementById('email').value;
		var regexemail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (email == '') {
			alert("Bạn chưa nhập email");
			email.select();
			return true;
		}else if (!regexemail.test(email)) {
			alert("Hãy nhập địa chỉ email hợp lệ.\nExample@gmail.com");
			email.select();
			return false;
		}

		var username = document.getElementById('username').value;
		var regexuser = /^[\w\_]{5,18}$/; 
			if (username == '') {
				alert("Bạn chưa nhập Username");
				username.select();
				return false;
			}
		else if (!regexuser.test(username)){
        alert("Username được sử dụng chữ, chữ số và dấu _ \nUsername > 5 và < 18 ký tự ");
        username.select();
        return false;
    }
		var password = document.getElementById('password').value;
		if (password == '') {
				alert("Bạn chưa nhập Password");
				password.select();
				return false;
		}else if (password.length <= 6 || password.length >= 18) {
				alert("Password có độ dài từ 6 - 18 ký tự");
				password.select();
				return false;
		}
		var repassword = document.getElementById('repassword').value;
		if(repassword !== password){
			alert("Password không khớp");
			repassword.select();
			return false;}
		var ckeckbox = document.getElementById('checkbox').checked;
		if (ckeckbox == true) {
			alert("Đăng ký thành công");
			
		}else{
			alert("Đăng ký thất bại");
			return false;
		}
		
	}
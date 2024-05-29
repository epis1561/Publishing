<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/icons.css">
    

    <title>Login</title>
</head>
<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">
                            <!-- LOGO -->
                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <a href="/adminLogin" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="/assets/images/logo.png" alt="" height="50">
                                        </span>
                                    </a>
                                </div>
                                
                            </div>
                            <!-- LOGO -->

                            <form name="adminLoginForm" method="post" action="/func/login">

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">ID</label>
                                    <input class="form-control" type="text" id="adminid" name="adminid" required="" placeholder="ID를 입력하세요">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="adminpw" name = "adminpw" class="form-control" placeholder="password를 입력하세요">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center d-grid">
                                <button type="submit" class="btn btn-secondary waves-effect"> 로그인 </button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    
<!--     <script src="/assets/js/vendor.js"></script> -->
    <script src='https://code.jquery.com/jquery-1.9.1.min.js'></script>
    <script src="/assets/js/app.js"></script>
    <script>
        function submit(){

        var res_result="none";
        $.ajax({
        url: "Database/login",
        type: "post",
        async:false, 
        dataType		: 'json',
            data: {
                user_name: $('#user_name').val(),
                user_pass: $('#user_pass').val()
            },
            success : function(result) {
                res_result = result.data;
            },
        error : function (jqXHR, textStatus, errorThrown){
		console.log(jqXHR);  //응답 메시지
		console.log(textStatus); //"error"로 고정인듯함
		console.log(errorThrown);
	}
        });

        if(res_result == "none"){
            alert("ID 및 암호를 확인하세요");
        }
        else{
            alert("예약내역이 zzzz없습니다");
        }

}
    </script>

</body>
</html>
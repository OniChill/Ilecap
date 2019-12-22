<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <title>Login</title>
</head>
<body>
        <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-1">
                        <h3>Welcome <br>to ILecap</h3>
                        <img style="width : 100%; height :100%;" src="/icon/icon8/Mobile-login-Cristina.jpg" alt="404">
                    </div>
                    <div class="col-md-6 login-form-2">
                        <h3>Login for Form 2</h3>
                        <form action="/login2" method="post">
                        @csrf
                            <div class="form-group">
                                <a>Id</a>
                                <input type="text" class="form-control bulet" name="id" placeholder="Your Id *" value="" required/>
                            </div>
                            <div class="form-group">
                                    <a>Password</a>
                                <input type="password" class="form-control" name="pass" placeholder="Your Password *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            <div class="form-group">
    
                                <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
</body>
</html>
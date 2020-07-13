
<!DOCTYPE html>
<html>
<head>
    <title>تسجيل الدخول</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Tajawal&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/main.css')}}">



</head>

<body>

<div class="formpage">
    <div class="container-login">
        <div class="loginformpage">

            <div class="bckimg" style="background-image: url('{{ asset('dist/img/bg-02.jpg')}}');">
            </div>
            <form  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="loginform validate-form">
                @csrf
                <img src="{{ asset('dist/img/logo.png')}}" alt="logo" class="logo">

                <span class="login100-form-title">
						تسجيل الدخول
					</span>

                <div class="txtinput validate-input" data-validate = "يرجى إدخال البريد الإلكتروني">
                    <input class="input100" id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" >
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="focus-input100"></span>
                    <span class="label-input100">البريد الإلكتروني</span>
                </div>


                <div class="txtinput validate-input" data-validate="يرجى إدخال كلمة المرور  ">
                    <input class="input100"  id="mypassword"  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="focus-input100"></span>
                    <span class="label-input100">كلمة المرور</span>
                </div>

                <div class="show w-full">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="show-pass" onclick="myFunction()">
                        <label class="label-checkbox100" for="ckb1">
                            إظهار كلمة المرور
                        </label>
                    </div>

                    <div>
                        <a href="{{ route('password.request') }}" class="forgetpass">
                            هل نسيت كلمة المرور؟
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="formbtn">
                        الدخول
                    </button>
                </div>
                <div class="footer">
                    <p class="footer-company-name" align="center"> 2020 &copy;
                        رانا معاك  </p>
                </div>

            </form>

        </div>

    </div>

</div>
</body>
</html>



<script>
    function myFunction() {
        var x = document.getElementById("mypassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script src="{{ asset('dist/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('dist/js/main.js')}}"></script>





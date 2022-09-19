<!DOCTYPE html>
<html>
<head>
    <title>Laravel Testcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .hidden{
         display: none;
          }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>

@yield('content')

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
   function myfun(){
            var a = document.getElementById("mobile").value;
            var f_name = document.getElementById("f_name").value;
            var l_name = document.getElementById("l_name").value;
            var correct_way = /^[a-zA-Z]+$/;
            if(a==""){
                document.getElementById("message").innerHTML="**Empty cannot be saved";
                return false;
            }
            if(isNaN(a)){
                document.getElementById("message").innerHTML="**Please enter number";
                return false;
            }
            if(a.length<10){
                document.getElementById("message").innerHTML="**Phone number must be 10 digits";
                return false;
            }
            if(a.length>10){
                document.getElementById("message").innerHTML="***Phone number must be 10 digits";
                return false;
            }
            if(!f_name.match(correct_way)){
                document.getElementById("firstN").innerHTML="**Name must only Alphabet";
                return false;
            }
            if(!l_name.match(correct_way)){
                document.getElementById("firstN").innerHTML="**Name must only Alphabet";
                return false;
            }

        }
</script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/them/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/css/them/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/css/them/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/css/them/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/css/them/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/css/them/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/them/custom.css" rel="stylesheet">
 <title></title>
</head>
<html>

<body class="login">




{{--@foreach($result_login as $row)--}}
{{--{{$row->name}}--}}
{{--@endforeach--}}
<div>




    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form" >
            <div style="height: 50px;">
                @if(session()->get('login')["state"]=="2")
            <div class="alert alert-danger alert-dismissible" style="text-align: center;">
                <strong>! خطا :</strong>
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{session()->get('login')["data"]}}.
            </div>
                    {{session()->forget("login")}}
                @endif
            </div>
            <section class="login_content">
                <form action="/checklogin"  method="post" >
                    @csrf
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" name="username" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" name="password"  />
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit" name="submit">ورود</button>

                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>


<script src="/js/them/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/js/them/fastclick.js"></script>
<!-- NProgress -->
<script src="/js/them/nprogress.js"></script>
<!-- Chart.js -->
<script src="/js/them/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/js/them/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/js/them/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/js/them/icheck.min.js"></script>
<!-- Skycons -->
<script src="/js/them/skycons.js"></script>
<!-- Flot -->
<script src="/js/them/jquery.flot.js"></script>
<script src="/js/them/jquery.flot.pie.js"></script>
<script src="/js/them/jquery.flot.time.js"></script>
<script src="/js/them/jquery.flot.stack.js"></script>
<script src="/js/them/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/js/them/jquery.flot.orderBars.js"></script>
<script src="/js/them/jquery.flot.spline.min.js"></script>
<script src="/js/them/curvedLines.js"></script>
<!-- DateJS -->
<script src="/js/them/date.js"></script>
<!-- JQVMap -->
<script src="/js/them/jquery.vmap.js"></script>
<script src="/js/them/jquery.vmap.world.js"></script>
<script src="/js/them/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/js/them/moment.min.js"></script>
<script src="/js/them/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="/js/them/custom.min.js"></script>
</body>
</html>
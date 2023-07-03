<?php
include_once 'inc/controller.php';
$user = new controller;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maxsom | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <img src="main.jpeg" style="height: 180px;" class="img-circle">

        </div>
        <!--            <h3>Welcome to IN+</h3>-->
        <!--            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.-->
        <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>
        <p><?php
            if(isset($_POST['auth_user'])){
                $email = $user->post_request('email');
                $password = $user->post_request('password');
                $login = $user->auth_users($email, $password);
                if($login == 'success'){
                    $URL = "dashboard.php";
                    echo "<script>location.href='$URL'</script>";
                }else{
                    echo "<br>";
                    echo '<div class="alert alert-danger" id="" style="">
                                  Invalid Login</a>
                                </div>';
                }
            }
            ?></p>
        <form class="m-t" role="form" action="" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" style="border-radius: 20px;" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" style="border-radius: 20px;" placeholder="Password" required="">
            </div>
            <button type="submit" name="auth_user" class="btn btn-success block full-width m-b font-weight-bold btn-rounded">Login</button>

            <a href="reset_password"><small>Forgot password?</small></a>
            <p class="text-muted text-center" ><small>Do not have an account?</small></p>
<!--            <a class="btn btn-sm btn-white btn-block" style="border-radius: 20px;" href="register.html">Create an account</a>-->
        </form>
        <p class="m-t"> <small>Maxsom &copy; 2021</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>

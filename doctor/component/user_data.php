<?php
include_once "session.php";
include_once "main.php";
$app = new controller;
$user_log = $app->checkLogin();
if ($user_log == "logged") {
    //echo "ok";
} else {
    echo '<script>window.location.href="auth";</script>';
}
$userInfo = $app->get_user_info($_SESSION['login_user']);
$email = $userInfo->email;
$user_id = $userInfo->user_id;
$hos_key = $userInfo->host_key;
$privillege = $userInfo->privillege;
$fullname = $userInfo->fullname;
$specialist_id = $userInfo->specialist;




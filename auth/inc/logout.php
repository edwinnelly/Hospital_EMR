<?php
include_once "session.php";
include_once "controller.php";
$app = new controller;
$user_log = $app->logout();
echo '<script>window.location.href="../auth.php";</script>';
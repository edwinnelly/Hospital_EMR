<?php
include_once "session.php";
include_once "controller.php";
$app = new controller;
$app->logout();
echo '<script>window.location.href="../../index.php";</script>';
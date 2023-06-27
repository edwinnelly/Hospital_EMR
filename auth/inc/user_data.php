<?php
include_once "session.php";
include_once "controller.php";
$app = new controller;
$user_log = $app->checkLogin();
if ($user_log == "logged") {

} else {
    echo '<script>window.location.href="auth";</script>';
}
$userInfo = $app->get_user_info($_SESSION['login_user']);
$email = $userInfo->email;
$user_id = $userInfo->user_id;
$host_key = $userInfo->host_key;
$privillege = $userInfo->privillege;
$fullname = $userInfo->fullname;
$specialist_id = $userInfo->specialist;
 $account_type = $userInfo->account_type;

if ($account_type ==0) {
    echo '<script>window.location.href="../../hospital_admin/dashboard";</script>';
}

if ($account_type ==1) {
    echo '<script>window.location.href="../../frontdesk/dashboard";</script>';
}

if ($account_type ==2) {
    echo '<script>window.location.href="../../doctor/dashboard";</script>';
}
if ($account_type ==3) {
    echo '<script>window.location.href="../../lab_portal/dashboard";</script>';
}
if ($account_type ==4) {
    echo '<script>window.location.href="../../nurse/dashboard";</script>';
}

if ($account_type ==5) {
    echo '<script>window.location.href="../../radiology/dashboard";</script>';
}

if ($account_type ==6) {
    echo '<script>window.location.href="../../pharmacy/dashboard";</script>';
}

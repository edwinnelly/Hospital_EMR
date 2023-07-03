<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
$add_user = new controller;
$assets_list_count= $add_user->all_count_asset($hos_key);
$all_count_patients= $add_user->all_count_patients($hos_key);
$all_count_orders= $add_user->all_count_order($hos_key);
$all_count_pending= $add_user->all_count_pending($hos_key);
$all_count_completed= $add_user->all_count_compledted($hos_key);


    <?php
    include_once '../inc/controller.php';
    include_once "../inc/user_data.php";
    $add_roles = new controller;
    $host_fib = $add_roles->get_request('host_fib');
     $new_class = $add_roles->de_special($host_fib,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
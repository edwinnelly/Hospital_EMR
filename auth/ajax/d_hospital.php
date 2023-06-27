    <?php
    include_once '../inc/controller.php';
    $add_roles = new controller;
    $host_fib = $add_roles->get_request('host_fib');
     $new_class = $add_roles->de_hospital($host_fib);
    if ($new_class == "success") {
        echo 'done';
    }
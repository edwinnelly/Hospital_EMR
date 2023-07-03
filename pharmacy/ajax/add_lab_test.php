    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $host_fib = $add_roles->get_request('host_fib');
     $host_pid = $add_roles->get_request('host_pid');
     $host_patients = $add_roles->get_request('host_patients');
     $host_amount = $add_roles->get_request('host_amount');

     $new_class = $add_roles->add_lab_testing($host_fib,$host_pid,$host_patients,$hos_key,$host_amount);
    if ($new_class == "success") {
        echo 'done';
    }
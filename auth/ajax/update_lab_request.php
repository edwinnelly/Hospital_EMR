    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $host_fib = $add_roles->get_request('host_fib');
     $users = $add_roles->get_request('users');

     $new_class = $add_roles->update_lab_request($host_fib,$hos_key,$users);
    if ($new_class == "success") {
        echo 'done';
    }
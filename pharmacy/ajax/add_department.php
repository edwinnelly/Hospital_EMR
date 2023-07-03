    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;
     $department = $add_roles->get_request('department');
     $new_class = $add_roles->add_n_dpt($department,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;
    $ward = $add_roles->get_request('ward');
     $location = $add_roles->get_request('location');
     $new_class = $add_roles->add_n_wards($ward,$location,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
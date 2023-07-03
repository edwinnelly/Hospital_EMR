    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;
    $department = $add_roles->get_request('hod');
     $specializations = $add_roles->get_request('specialization');
     $new_class = $add_roles->add_n_spec($department,$specializations,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
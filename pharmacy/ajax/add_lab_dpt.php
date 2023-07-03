    <?php
    include_once '../inc/controller.php';
    $add_roles = new controller;

     $department_name = $add_roles->get_request('department_name');
     $host_key = $add_roles->get_request('host_key');

     $new_class = $add_roles->add_lab_dpt($department_name,$host_key);
    if ($new_class == "success") {
        echo 'done';
    }
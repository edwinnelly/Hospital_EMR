    <?php
    include_once '../inc/controller.php';
    $add_roles = new controller;

     $cat_name = $add_roles->get_request('cat_name');
     $cat_status = $add_roles->get_request('cat_status');
     $host_key = $add_roles->get_request('host_key');

     $new_class = $add_roles->add_new_assets($cat_name,$cat_status,$host_key);
    if ($new_class == "success") {
        echo 'done';
    }
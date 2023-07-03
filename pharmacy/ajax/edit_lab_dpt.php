    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;
     $asset_sid = $add_roles->get_request('sid');
     $host_key = $add_roles->get_request('host_key');
      $department_name = $add_roles->get_request('department_name');
    //add key
     $new_class = $add_roles->update_lab_dpt($asset_sid,$host_key,$department_name);
    if ($new_class == "success") {
        echo 'done';
    }
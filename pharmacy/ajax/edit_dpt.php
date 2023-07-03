    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

      $asset_sid = $add_roles->get_request('sid');
      $dpt_name = $add_roles->get_request('dpt_name');
       $hod = $add_roles->get_request('hod');

     $new_class = $add_roles->update_dpt($asset_sid,$dpt_name,$hod,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
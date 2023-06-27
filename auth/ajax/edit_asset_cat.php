    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $asset_sid = $add_roles->get_request('sid');
     $cat_name = $add_roles->get_request('cat_name');
      $status = $add_roles->get_request('status');

    //add key
     $new_class = $add_roles->update_assets_cat($asset_sid,$cat_name,$status,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
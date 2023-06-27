    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $asset_sid = $add_roles->get_request('sid');
     $asset_name = $add_roles->get_request('asset_name');
      $asset_values = $add_roles->get_request('asset_values');
      $asset_cate = $add_roles->get_request('asset_cate');
      $asset_condition = $add_roles->get_request('asset_condition');

    //add key
    $keys = sha1(rand(1234,123456));

     $new_class = $add_roles->update_assets($asset_name,$asset_values,$asset_cate,$asset_condition,$hos_key,$asset_sid);
    if ($new_class == "success") {
        echo 'done';
    }
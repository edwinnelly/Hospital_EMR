    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $asset_sid = $add_roles->get_request('sid');
     $charges_name = $add_roles->get_request('charges_name');
      $charges_amount = $add_roles->get_request('charges_amount');

    //add key
    $keys = sha1(rand(1234,123456));

     $new_class = $add_roles->update_charges($charges_name,$charges_amount,$hos_key,$asset_sid);
    if ($new_class == "success") {
        echo 'done';
    }
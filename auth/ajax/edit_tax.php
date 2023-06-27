    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

      $asset_sid = $add_roles->get_request('sid');
      $tax_name = $add_roles->get_request('tax_name');
      $amount = $add_roles->get_request('amount');
       $type = $add_roles->get_request('type');

     $new_class = $add_roles->update_tax($tax_name,$amount,$type,$hos_key,$asset_sid);
    if ($new_class == "success") {
        echo 'done';
    }
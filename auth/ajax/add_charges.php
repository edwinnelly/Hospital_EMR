    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

      $charges_name = $add_roles->get_request('charges_name');
       $charges_amount = $add_roles->get_request('charges_amount');

     $new_class = $add_roles->add_n_charges($charges_name,$charges_amount,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
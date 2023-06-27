    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $kit_cat = $add_roles->get_request('kit_cat');
      $kits = $add_roles->get_request('kits');

     $new_class = $add_roles->add_n_kit($kit_cat,$kits,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
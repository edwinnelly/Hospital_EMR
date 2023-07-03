    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;
     $dc = $add_roles->get_request('dc');
     $new_class = $add_roles->add_new_drug_class($dc,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
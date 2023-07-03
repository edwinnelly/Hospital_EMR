    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

    $tax_name = $add_roles->get_request('tax_name');
    $tax_amount = $add_roles->get_request('tax_amount');
    $tax_type = $add_roles->get_request('tax_type');

    $new_class = $add_roles->add_n_tax($tax_name, $tax_amount, $tax_type,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
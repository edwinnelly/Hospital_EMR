    <?php
    include_once '../inc/user_data.php';
    include_once '../inc/controller.php';
    $add_roles = new controller;

    $fname = $add_roles->get_request('fname');
    $phone = $add_roles->get_request('phone');
    $addr = $add_roles->get_request('addr');
    $email = $add_roles->get_request('email');
    $sid = $add_roles->get_request('sid');

     $new_class = $add_roles->update_drug_supliers($fname,$phone,$addr,$email,$hos_key,$sid);
    if ($new_class == "success") {
        echo 'done';
    }
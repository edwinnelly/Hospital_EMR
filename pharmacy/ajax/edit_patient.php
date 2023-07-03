    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $pid = $add_roles->get_request('pid');
    $fullname = $add_roles->get_request('fullname');
    $age = $add_roles->get_request('age');
    $sex = $add_roles->get_request('sex');
    $occupation = $add_roles->get_request('occupation');
    $rg_date = $add_roles->get_request('rg_date');
    $marital_status = $add_roles->get_request('marital_status');
    $address = $add_roles->get_request('address');
    $tribe = $add_roles->get_request('tribe');
    $religion = $add_roles->get_request('religion');
    $next_of_kin = $add_roles->get_request('next_of_kin');
    $email = $add_roles->get_request('email');
    $phone_number = $add_roles->get_request('phone_number');
    $bp = $add_roles->get_request('bp');
    $body_temp = $add_roles->get_request('body_temp');
    $hrate = $add_roles->get_request('hrate');
    $height = $add_roles->get_request('height');
    $briefs = $add_roles->get_request('briefs');

    $new_class = $add_roles->edits_patients($hos_key, $fullname, $age, $sex, $occupation, $rg_date, $marital_status, $address, $tribe, $religion, $next_of_kin, $email, $phone_number, $pid,$bp,$body_temp,$hrate,$height,$briefs);
    if ($new_class == "success") {
        echo 'done';
    }
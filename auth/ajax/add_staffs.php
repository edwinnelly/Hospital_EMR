    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;
    $fullname = $add_roles->get_request('fullname');
    $department = $add_roles->get_request('department');
    $age = $add_roles->get_request('age');
    $sex = $add_roles->get_request('sex');
    $occupation = $add_roles->get_request('occupation');
    $qualifications = $add_roles->get_request('qualifications');
    $marital_status = $add_roles->get_request('marital_status');
    $address = $add_roles->get_request('address');
    $tribe = $add_roles->get_request('tribe');
    $religion = $add_roles->get_request('religion');
    $next_of_kin = $add_roles->get_request('next_of_kin');
    $phone_number = $add_roles->get_request('phone_number');
    $email = $add_roles->get_request('email');
    $password = $add_roles->get_request('password');
    $rg_date = $add_roles->get_request('rg_date');
    $rg_date = $add_roles->get_request('rg_date');
    $rg_date = $add_roles->get_request('rg_date');

    $state_og = $add_roles->get_request('state_og');
    $nationality = $add_roles->get_request('nationality');
    $guarantor = $add_roles->get_request('guarantor');
    $qualification = $add_roles->get_request('qualification');


    $new_class = $add_roles->add_new_staffs($hos_key, $fullname, $department, $age, $sex, $occupation, $qualifications, $marital_status, $address, $tribe, $religion, $next_of_kin, $phone_number, $email, $password, $rg_date,$state_og,$nationality,$guarantor,$qualification);
    if ($new_class == "success") {
        echo 'done';
    }
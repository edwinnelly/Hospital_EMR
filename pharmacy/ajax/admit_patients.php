    <?php
    include_once '../inc/user_data.php';
    include_once '../inc/controller.php';
    $add_roles = new controller;

     $doc_id = $add_roles->get_request('doc_id');
     $sp_id = $add_roles->get_request('sp_id');
     $ward = $add_roles->get_request('ward');
     $bed = $add_roles->get_request('bed');
     $payment = $add_roles->get_request('payment');
      $hmo = $add_roles->get_request('hmo');
      $dated = $add_roles->get_request('dated');

      $pid = $add_roles->get_request('pid');

    $new_class = $add_roles->admit_student($hos_key, $doc_id, $sp_id,$ward,$bed,$payment,$hmo,$dated,$pid);

    if ($new_class == "success") {
        echo 'done';
    }
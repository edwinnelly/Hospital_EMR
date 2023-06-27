    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

      $case_id = $add_roles->get_request('case_id');
      $userid = $add_roles->get_request('userid');

     $new_class = $add_roles->update_payment_lab($case_id,$userid,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
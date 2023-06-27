    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

//     $notes = $add_roles->get_request('notes');
      $pid = $add_roles->get_request('pid');
//      $report = $add_roles->get_request('report');

     $new_class = $add_roles->re_reports($pid,$hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
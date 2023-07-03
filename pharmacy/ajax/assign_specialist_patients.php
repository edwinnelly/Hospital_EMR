    <?php
    include_once '../inc/user_data.php';
    include_once '../inc/controller.php';

    $add_roles = new controller;

    $doc_id = $add_roles->get_request('doc_id');

    $pid = $add_roles->get_request('pid');

    $new_class = $add_roles->assign_spe_to_patient($hos_key, $doc_id, $pid);

    if ($new_class == "success") {
        echo 'done';
    }
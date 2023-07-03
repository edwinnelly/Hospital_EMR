    <?php
    include_once '../inc/user_data.php';
    include_once '../inc/controller.php';
    $add_roles = new controller;
    $recicever_id = $add_roles->get_request('recicever_id');
    $message = $add_roles->get_request('message');
    $user_id;

    $new_class = $add_roles->new_messages($user_id, $recicever_id, $message, $hos_key);
    if ($new_class == "success") {
        echo 'done';
    }
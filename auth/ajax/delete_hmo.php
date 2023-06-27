    <?php
    include_once '../inc/controller.php';
    include_once "../inc/user_data.php";
    $add_roles = new controller;
    $host_fib = $add_roles->get_request('id');
     $new_class = $add_roles->de_hmo($host_fib,$hos_key);
    if ($new_class == "success") {
        echo'<script>alert(" HMO Info Deleted!");</script>';
        echo'<script>window.location.href="../manage_hmo.php"</script>';
    }
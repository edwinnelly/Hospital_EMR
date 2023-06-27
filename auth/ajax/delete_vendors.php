    <?php
    include_once '../inc/controller.php';
    include_once "../inc/user_data.php";
    $add_roles = new controller;
      $sid = $add_roles->get_request('sid');
     $new_class = $add_roles->vendor_delete($sid,$hos_key);
    if ($new_class == "success") {
        echo '<script>window.location.href="../manage_vendors.php"</script>';
    }
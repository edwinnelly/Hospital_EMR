    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     echo $bed_cate = $add_roles->get_request('bed_cate');
      echo $bed_c = $add_roles->get_request('bed_c');
      echo $tax = $add_roles->get_request('tax');
      echo $dp = $add_roles->get_request('dp');
      echo $bl = $add_roles->get_request('bl');

     $new_class = $add_roles->add_n_bed($bed_cate,$bed_c,$tax,$dp,$hos_key,$bl);
    if ($new_class == "success") {
        echo 'done';
    }
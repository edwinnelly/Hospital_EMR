        <?php
        include_once '../inc/controller.php';
        include_once '../inc/user_data.php';
        $add_roles = new controller;

              $testname = $add_roles->get_request('testname');
              $dpt = $add_roles->get_request('dpt');
              $host_key = $add_roles->get_request('host_key');
              $restri = $add_roles->get_request('restri');
              $amount = $add_roles->get_request('amount');
              $container = $add_roles->get_request('container');
              $sample = $add_roles->get_request('sample');
              $tat = $add_roles->get_request('tat');


             $new_class = $add_roles->add_n_test($testname,$dpt,$host_key,$restri,$amount,$container,$sample,$tat);
            if ($new_class == "success") {
                echo 'done';
            }
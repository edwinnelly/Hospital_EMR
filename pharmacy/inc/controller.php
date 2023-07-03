<?php
include_once('cores.php');
include_once('db-config.php');
include_once('session.php');
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

/**
 *
 */
class controller extends dbc
{
    public $api_key = apikey;

    /** function to logout a user **/
    public function logout()
    {
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy();
    }


    /** function to check if a user is logged in **/
    public function checkLogin()
    {
        if (isset($_SESSION['login_user'])) {
            return 'logged';
        } else {
            return 'nau';
        }
    }

    public function runner($query)
    {
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //user login
    public function auth_users($email, $password)
    {
        $query = "select * from staff_erm where email='$email' AND password='$password'";
        $run_query = $this->run_query($query);
        if ($this->get_number_of_row($run_query) == 1) {
            $data = $this->get_result($run_query);
            $_SESSION['login_user'] = $data['id']; // Initializing Session
            $_SESSION['email'] = $data['email']; // Initializing Session
            $_SESSION['host_key'] = $data['host_key']; // Initializing Session
            return "success";
        } else {
            return "Invalid";
        }
    }


    function timeAgo($time_ago)
    {
        $time_ago = strtotime($time_ago);
        $cur_time = time();
        $time_elapsed = $cur_time - $time_ago;
        $seconds = $time_elapsed;
        $minutes = round($time_elapsed / 60);
        $hours = round($time_elapsed / 3600);
        $days = round($time_elapsed / 86400);
        $weeks = round($time_elapsed / 604800);
        $months = round($time_elapsed / 2600640);
        $years = round($time_elapsed / 31207680);
        // Seconds
        if ($seconds <= 60) {
            return "just now";
        } //Minutes
        else if ($minutes <= 60) {
            if ($minutes == 1) {
                return "one minute ago";
            } else {
                return "$minutes minutes ago";
            }
        } //Hours
        else if ($hours <= 24) {
            if ($hours == 1) {
                return "an hour ago";
            } else {
                return "$hours hrs ago";
            }
        } //Days
        else if ($days <= 7) {
            if ($days == 1) {
                return "yesterday";
            } else {
                return "$days days ago";
            }
        } //Weeks
        else if ($weeks <= 4.3) {
            if ($weeks == 1) {
                return "a week ago";
            } else {
                return "$weeks weeks ago";
            }
        } //Months
        else if ($months <= 12) {
            if ($months == 1) {
                return "a month ago";
            } else {
                return "$months months ago";
            }
        } //Years
        else {
            if ($years == 1) {
                return "one year ago";
            } else {
                return "$years years ago";
            }
        }
    }


    //Add New hospital
    public function new_messages($user_id, $recicever_id, $message, $hos_key)
    {
        $get_date = date("Y-m-d h:i:sa");
        echo $query = "INSERT INTO echats (me,you,date_time,host_key,message) VALUES ('$user_id', '$recicever_id', '$get_date','$hos_key','$message')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //count number of client in hospital
    public function count_clients()
    {
        $query = "select * from hospital_users where activation=0";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of client in hospital active
    public function count_clients_active()
    {
        $query = "select * from hospital_users where activation=1";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of client in hospital active
    public function all_count_clients()
    {
        $query = "select * from hospital_users";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    //count number of client in hospital active
    public function banned_count_clients()
    {
        $query = "select * from hospital_users where banned=1";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);

    }

    public function doctors_list($hos_key)
    {
        $query = "SELECT * FROM staff_erm where host_key='$hos_key' and privillege='1'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fullname = $row['fullname'];
            $obj->department_id = $row['department_id'];
            $obj->qualifications = $row['qualifications'];
            $obj->occupation = $row['occupation'];
            $obj->privillege = $row['privillege'];
            $obj->age = $row['age'];
            $obj->sex = $row['sex'];
            $obj->marital_status = $row['marital_status'];
            $obj->status = $row['status'];
            $obj->host_key = $row['host_key'];
            $obj->phone = $row['phone'];
            $obj->email = $row['email'];
            $obj->password = $row['password'];
            $obj->religion = $row['religion'];
            $obj->next_kin = $row['next_kin'];
            $obj->tribe = $row['tribe'];
            $obj->salary = $row['salary'];
            $obj->photo = $row['photo'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function drug_categorys($get_asset_id)
    {
        $query = "SELECT * FROM drugs_glass where id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        //$obj->id = $row['id'];
        $obj->cat_name = $row['cat_name'];
        $user_list[] = $obj;
        return $obj;
    }


    public function drug_suppluer($get_asset_id)
    {
        $query = "SELECT * FROM drug_supplier where id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->supplier = $row['supplier'];
        $user_list[] = $obj;
        return $obj;
    }

    public function edit_drugs($hos_key, $sid)
    {
        $query = "SELECT * FROM drugs_list where id='$sid' and host_key='$hos_key'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->drugs_name = $row['drugs_name'];
        $obj->generic = $row['generic'];
        $obj->category_id = $row['category_id'];
        $obj->drugs_class = $row['drugs_class'];
        $obj->suppliers_id = $row['suppliers_id'];
        $obj->qty = $row['qty'];
        $obj->qty_reminder = $row['qty_reminder'];
        $obj->cost_price = $row['cost_price'];
        $obj->selling_price = $row['selling_price'];
        $obj->host_key = $row['host_key'];
        $obj->selling_price = $row['selling_price'];
        $obj->drugs_types = $row['drugs_types'];
        $obj->production_date = $row['production_date'];
        $obj->expiry_date = $row['expiry_date'];
        $obj->batch_no = $row['batch_no'];
        $obj->user_id = $row['user_id'];
        $obj->brand = $row['brand_id'];
        $obj->status = $row['status'];

        if( $obj->drugs_class==0){
            $obj->category_name='unset';
        }else{
            $ben_info = $this->drug_categorys($row['drugs_class']);
            $obj->category_name = $ben_info->cat_name;
        }

        if( $obj->suppliers_id==0){
            $obj->supplier='unset';
        }else{
            $ben_infos = $this->drug_suppluer($row['suppliers_id']);
            $obj->supplier = $ben_infos->supplier;
        }

        $user_list[] = $obj;
        return $obj;
    }


    public function drugs_ls($hos_key)
    {
        $query = "SELECT * FROM drugs_list where host_key='$hos_key' and status='0'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->drugs_name = $row['drugs_name'];
            $obj->generic = $row['generic'];
            $obj->category_id = $row['category_id'];
            $obj->drugs_class = $row['drugs_class'];
            $obj->suppliers_id = $row['suppliers_id'];
            $obj->qty = $row['qty'];
            $obj->qty_reminder = $row['qty_reminder'];
            $obj->cost_price = $row['cost_price'];
            $obj->selling_price = $row['selling_price'];
            $obj->host_key = $row['host_key'];
            $obj->selling_price = $row['selling_price'];
            $obj->drugs_types = $row['drugs_types'];
            $obj->production_date = $row['production_date'];
            $obj->expiry_date = $row['expiry_date'];
            $obj->batch_no = $row['batch_no'];
            $obj->user_id = $row['user_id'];
            $obj->status = $row['status'];

            if( $obj->drugs_class==0){
                $obj->category_name='Unset';
            }else{
                $ben_info = $this->drug_categorys($row['drugs_class']);
                $obj->category_name = $ben_info->cat_name;
            }
            if($obj->suppliers_id==0){
                $obj->supplier='unset';
            }else{
                $ben_infos = $this->drug_suppluer($row['suppliers_id']);
                $obj->supplier = $ben_infos->supplier;
            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function drugs_glass_phas($hos_key)
    {
        $query = "SELECT * FROM drugs_glass where host_key='$hos_key' and status='0'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->cat_name = $row['cat_name'];

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function drugs_suooliers_pha($hos_key)
    {
        $query = "SELECT * FROM drug_supplier where host_key='$hos_key' and status='0'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->supplier = $row['supplier'];
            $obj->phone = $row['phone'];
            $obj->addr = $row['addr'];
            $obj->email = $row['email'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function get_staffs_info($id)
    {
        $query = "select * from staffs where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->fn = $row['fn'];
        $obj->ln = $row['ln'];

        return $obj;
    }


    // teacher list in school
    public function hospital_details($get_user_id)
    {
        $query = "SELECT * FROM hospital_users where id='$get_user_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->hospital_name = $row['hospital_name'];
        $obj->address = $row['address'];
        $obj->no_staffs = $row['no_staffs'];
        $obj->email = $row['email'];
        $obj->password = $row['password'];
        $obj->payment_plans = $row['payment_plans'];
        $obj->patients = $row['patients'];
        $obj->activation = $row['activation'];
        $obj->registered_date = $row['registered_date'];
        $user_list[] = $obj;
        return $obj;
    }

//block hospital  accounts
    public function hospital_blocked($host_fib)
    {
        echo $query = "update hospital_users set banned='1',activation='0' where id='$host_fib'";
        return $this->runner($query);
    }

    public function hospital_live($host_fib)
    {
        echo $query = "update hospital_users set banned='0',activation='1' where id='$host_fib'";
        return $this->runner($query);
    }


    //delete  hospital
    public function de_hospital($host_fib)
    {
        $query = "delete from hospital_users where id='$host_fib'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function de_labtests($host_fib, $hos_key)
    {
        $query = "delete from lab_cases where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

//delete  charges
    public function de_charges($host_fib, $hos_key)
    {
        $query = "delete from hospital_charges where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //delete  tax
    public function de_tax($host_fib, $hos_key)
    {
        $query = "delete from tax where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function de_special($host_fib, $hos_key)
    {
        $query = "delete from specializations where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function de_dpts($host_fib, $hos_key)
    {
        $query = "delete from department where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //delete  assets
    public function de_patients($host_fib, $hos_key)
    {
        $query = "delete from patients_crm where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //delete  assets
    public function delete_drugs_ph($host_fib, $hos_key)
    {
        $query = "delete from drugs_list where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //delete  assets
    public function drugs_glass_pha($host_fib, $hos_key)
    {
        $query = "delete from drugs_glass where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //delete  assets
    public function drug_supplier_pharmacy($host_fib, $hos_key)
    {
        $query = "delete from drug_supplier where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //delete  lab kits
    public function de_lab_kit($host_fib, $hos_key)
    {
        $query = "delete from lab_kits where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //delete  lab dpt
    public function de_lab_dpt($host_fib, $hos_key)
    {
        $query = "delete from lab_category where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //delete  assets
    public function de_assets_cat($host_fib, $hos_key)
    {
        $query = "delete from assets_category where id='$host_fib' and asset_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //delete  beds
    public function de_bed_cat($host_fib, $hos_key)
    {
        $query = "delete from bed_category where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //delete  beds
    public function de_bed_c($host_fib, $hos_key)
    {
        $query = "delete from beds where id='$host_fib' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New hospital
    public function add_new_patients($hos_key, $fullname, $age, $sex, $occupation, $rg_date, $marital_status, $address, $tribe, $religion, $next_of_kin, $email, $phone_number)
    {
        $query = "INSERT INTO patients_crm (patient_name,host_key,age,sex,occupation,marital_status,address,tribe,religion,next_of_kin,phone_number,email_address,added_date) VALUES ('$fullname','$hos_key','$age','$sex','$occupation','$marital_status','$address','$tribe','$religion','$next_of_kin','$phone_number','$email','$rg_date')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function edits_patients($hos_key, $fullname, $age, $sex, $occupation, $rg_date, $marital_status, $address, $tribe, $religion, $next_of_kin, $email, $phone_number, $pid, $bp, $body_temp, $hrate, $height, $briefs)
    {
        echo $query = "update patients_crm set patient_name='$fullname',age='$age',sex='$sex',occupation='$occupation',marital_status='$marital_status',address='$address',tribe='$tribe',religion='$religion',next_of_kin='$next_of_kin',phone_number='$phone_number',email_address='$email',bp='$bp',body_temp='$body_temp',heart_rate='$hrate',height='$height',briefs='$briefs' where id='$pid' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function staffs_recoresd($hos_key)
    {
        $query = "SELECT * FROM staff_erm where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fullname = $row['fullname'];
            $obj->department_id = $row['department_id'];
            $obj->qualifications = $row['qualifications'];
            $obj->occupation = $row['occupation'];
            $obj->privillege = $row['privillege'];
            $obj->age = $row['age'];
            $obj->sex = $row['sex'];
            $obj->marital_status = $row['marital_status'];
            $obj->status = $row['status'];
            $obj->host_key = $row['host_key'];
            $obj->phone = $row['phone'];
            $obj->email = $row['email'];
            $obj->password = $row['password'];
            $obj->religion = $row['religion'];
            $obj->next_kin = $row['next_kin'];
            $obj->tribe = $row['tribe'];
            $obj->salary = $row['salary'];
            $obj->photo = $row['photo'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    //Add New bed
    public function add_n_bed($bed_cate, $bed_c, $tax, $dp, $hos_key, $bl)
    {
        $get_date = date('m/d/y');
        echo $query = "INSERT INTO beds (bed_category,bed_charges,tax_id,description,host_key,location,added_date) VALUES ('$bed_cate','$bed_c','$tax','$dp','$hos_key','$bl','$get_date')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New labs dpt
    public function add_n_test($testname, $dpt, $host_key, $restri, $amount, $container, $sample, $tat)
    {
        $get_date = date('m/d/y');
        echo $query = "INSERT INTO lab_cases (case_name,dpt_id,date_added,host_key,restrictions,sample,container,amount,tat) VALUES ('$testname','$dpt','$get_date','$host_key','$restri','$sample','$container','$amount','$tat')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add lab kit
    public function add_n_kit($kit_cat, $kits, $hos_key)
    {
        $get_date = date('m/d/y');
        echo $query = "INSERT INTO lab_kits (kits,host_key,status) VALUES ('$kits','$hos_key','$kit_cat')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_lab_reports($pid, $hos_key)
    {
        $get_date = date('m/d/y');
        $query = "update quee_user_test set status='completed' where id='$pid' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function approved_reports($pid, $hos_key)
    {
        $get_date = date('m/d/y');
        echo $query = "update quee_user_test set status='approved' where id='$pid' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function re_reports($pid, $hos_key)
    {
        $get_date = date('m/d/y');
        echo $query = "update quee_user_test set status='pending' where id='$pid' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New hospital
    public function add_new_drug_class($dc, $hos_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO `drugs_glass` (`id`, `cat_name`, `date_cr`, `status`, `host_key`) VALUES (NULL, '$dc', '$get_date', '0', '$hos_key')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //Add New hospital
    public function add_n_dpt($department, $hos_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO department (department_name,host_key,date_added,hod_id) VALUES ('$department', '$hos_key', '$get_date','0')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New hospital
    public function add_drugss($dname, $drugs_class, $drugs_supply, $qty, $rqty, $costprice, $sprice, $brand, $stock, $drugs_cates, $pdate, $exdate, $batch, $hos_key, $user_id)
    {
        $get_date = date('m/d/y');
        echo $query = "INSERT INTO `drugs_list` (`id`, `drugs_name`, `generic`, `category_id`, `drugs_class`, `suppliers_id`, `qty`, `qty_reminder`, `cost_price`, `selling_price`, `brand_id`, `drugs_types`, `production_date`, `expiry_date`, `batch_no`, `user_id`, `host_key`, `status`) VALUES (NULL, '$dname', NULL, '$drugs_class', '$drugs_class', '$drugs_supply', '$qty', '$rqty', '$costprice', '$sprice', '$brand', '$drugs_cates', '$pdate', '$exdate', '$batch', '$user_id', '$hos_key', '0')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function add_n_spec($department, $specializations, $hos_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO specializations (department,specializations,host_key,date_added) VALUES ('$department', '$specializations','$hos_key', '$get_date')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New charges
    public function add_n_charges($charges_name, $charges_amount, $hos_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO hospital_charges (charges_name,host_key,charges,dated_added) VALUES ('$charges_name','$hos_key','$charges_amount','$get_date')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New tax
    public function add_n_tax($tax_name, $tax_amount, $tax_type, $hos_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO tax (tax_name,amount,type,host_key,addded_date
) VALUES ('$tax_name', '$tax_amount', '$tax_type','$hos_key','$get_date')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New asset category
    public function add_suppliers_pha($fname,$phone,$addr,$email,$hos_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO `drug_supplier` (`id`, `supplier`, `date_cr`, `status`, `host_key`, `phone`, `addr`, `email`) VALUES (NULL, '$fname', '$get_date', '0', '$hos_key', '$phone', '$addr', '$email')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_lab_testing($host_fib, $host_pid, $host_patients, $hos_key, $host_amount)
    {
        $get_date = date('Y-m-d');
        $query = "INSERT INTO quee_user_test (patients_id,status,date_added,department_id,case_id,host_key,amount) VALUES ('$host_patients','Processing','$get_date','$host_pid','$host_fib','$hos_key','$host_amount')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //Add New lab dpt
    public function update_drug_supliers($fname,$phone,$addr,$email,$hos_key,$sid)
    {
        $get_date = date('m/d/y');
         $query = "update drug_supplier set supplier='$fname',phone='$phone',addr='$addr',email='$email' where id='$sid' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function update_drusg($dname, $drugs_class, $drugs_supply, $qty, $rqty, $costprice, $sprice, $brand, $stock, $drugs_cates, $pdate, $exdate, $batch, $hos_key, $user_id, $sid)
    {
        $get_date = date('m/d/y');
        echo $query = "update drugs_list set drugs_name='$dname',generic='',category_id='$drugs_class',drugs_class='$drugs_class',suppliers_id='$drugs_supply',qty='$qty',qty_reminder='$rqty',cost_price='$costprice',selling_price='$sprice',brand_id='$brand',drugs_types='$drugs_cates',production_date='$pdate',expiry_date='$exdate',batch_no='$batch' where id='$sid' and host_key='$hos_key'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function add_lab_dpt($department_name, $host_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO lab_category (category_name,added_date,host_key) VALUES ('$department_name','$get_date','$host_key')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //Add New bed category
    public function add_bed_cat($cat_name, $host_key)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO bed_category (host_key,bed_category,date_added) VALUES ('$host_key','$cat_name','$get_date')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function hospital_list_charges($hos_key)
    {
        $query = "SELECT * FROM hospital_charges where host_key='$hos_key' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->charges_name = $row['charges_name'];
            $obj->charges = $row['charges'];
            $obj->dated_added = $row['dated_added'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function echats_data($hos_key, $user_id, $recicever_id)
    {
        $query = "SELECT * FROM echats where host_key='$hos_key' and (me='$user_id' and you='$recicever_id') or (me='$recicever_id' and you='$user_id') order by id asc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->me = $row['me'];
            $obj->you = $row['you'];
            $obj->message = $row['message'];
            $obj->date_time = $row['date_time'];

            $enames = $this->get_user_info($row['me']);
            $obj->fullname = $enames->fullname;
            $obj->photo = $enames->photo;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function staffs_account($hos_key)
    {
        $query = "SELECT * FROM staffs where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fn = $row['fn'];
            $obj->ln = $row['ln'];
            $obj->email = $row['email'];


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function hospital_list_tax($hos_key)
    {
        $query = "SELECT * FROM tax where host_key='$hos_key' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->tax_name = $row['tax_name'];
            $obj->amount = $row['amount'];
            $obj->type = $row['type'];
            $obj->addded_date = $row['addded_date'];


            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function hospital_list_department($hos_key)
    {
        $query = "SELECT * FROM department where host_key='$hos_key' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->department_name = $row['department_name'];
            $obj->host_key = $row['host_key'];
            $obj->hod_id = $row['hod_id'];
            $obj->date_added = $row['date_added'];

            $count_staff_dpt = $this->count_staff_per_dpt($row['id']);
            $obj->count_staffs = $count_staff_dpt;

            $hod_info = $this->get_staffs_info($row['hod_id']);
            $obj->fn = $hod_info->fn;
            $obj->ln = $hod_info->ln;
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function edt_supplier_pha($hos_key,$sid)
    {
        $query = "SELECT * FROM drug_supplier where host_key='$hos_key' and id='$sid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->supplier = $row['supplier'];
        $obj->phone = $row['phone'];
        $obj->addr = $row['addr'];
        $obj->email = $row['email'];
        $user_list[] = $obj;
        return $obj;
    }


    public function lab_dpts($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM lab_category where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->category_name = $row['category_name'];

        $user_list[] = $obj;
        return $obj;
    }

    public function hospital_list_wards($hos_key)
    {
        $query = "SELECT * FROM wards where host_key='$hos_key' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->ward = $row['ward'];
            $obj->host_key = $row['host_key'];
            $obj->location = $row['location'];
            $obj->dated = $row['dated'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function hospital_list_special($hos_key)
    {
        $query = "SELECT * FROM specializations where host_key='$hos_key' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->department = $row['department'];
            $obj->host_key = $row['host_key'];
            $obj->specializations = $row['specializations'];
            $obj->date_added = $row['date_added'];

            $hod_info = $this->edit_dpt($row['host_key'], $row['department']);
            $obj->department_name = $hod_info->department_name;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function drugs_class($hos_key)
    {
        $query = "SELECT * FROM drugs_glass where host_key='$hos_key' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->cat_name = $row['cat_name'];
            $obj->host_key = $row['host_key'];
            $obj->status = $row['status'];
            $obj->date_added = $row['date_cr'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function drug_supplier($hos_key)
    {
        $query = "SELECT * FROM drug_supplier where host_key='$hos_key' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->cat_name = $row['supplier'];
            $obj->host_key = $row['host_key'];
            $obj->status = $row['status'];
            $obj->date_added = $row['date_cr'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function count_staff_per_dpt($class_id)
    {
        $query = "select * from staffs where dpt_id='$class_id'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    public function hospital_list_assets($hos_key)
    {
        $query = "SELECT * FROM hospital_assets where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->asset_name = $row['asset_name'];
            $obj->category_asset = $row['category_asset'];
            $obj->asset_value = $row['asset_value'];
            $obj->added_dated = $row['added_dated'];
            $obj->asset_condition = $row['asset_condition'];

            $cat_info = $this->list_categoryi($row['category_asset']);
            $obj->category_name = $cat_info->category_name;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function count_case_per_dpt($id)
    {
        $query = "select * from lab_cases where dpt_id='$id'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function hospital_list_labs($hos_key)
    {
        $query = "SELECT * FROM lab_category where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->category_name = $row['category_name'];
            $obj->added_date = $row['added_date'];
            $obj->host_key = $row['host_key'];

            $count_case_dpt = $this->count_case_per_dpt($row['id']);
            $obj->count_case = $count_case_dpt;

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function hospital_patients($hos_key)
    {
        $query = "SELECT * FROM patients_crm where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patient_name = $row['patient_name'];
            $obj->age = $row['age'];
            $obj->sex = $row['sex'];
            $obj->age = $row['age'];
            $obj->occupation = $row['occupation'];
            $obj->marital_status = $row['marital_status'];
            $obj->address = $row['address'];
            $obj->tribe = $row['tribe'];
            $obj->religion = $row['religion'];
            $obj->next_of_kin = $row['next_of_kin'];
            $obj->phone_number = $row['phone_number'];
            $obj->email_address = $row['email_address'];
            $obj->added_date = $row['added_date'];
            $obj->host_key = $row['host_key'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    //count number of q
    public function all_count_outpat($hos_key, $user_id)
    {
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and assigned_doc='$user_id'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of q
    public function all_count_specialist($hos_key, $user_id, $specialist_id)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and specialist_id='$specialist_id' and quee_date='$cc'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    public function all_count_outpatall($hos_key)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and quee_date='$cc'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function all_count_outpat_seen_all($hos_key, $user_id)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and status_out='closed' and quee_date='$cc'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function all_count_outpat_pending_all($hos_key, $user_id)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and status_out='open' and quee_date='$cc'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function all_count_outpat_seen($hos_key, $user_id)
    {
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and assigned_doc='$user_id' and status_out='closed'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function all_count_outpat_seen_specialist($hos_key, $user_id, $specialist_id)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and specialist_id='$specialist_id' and quee_date='$cc' and status_out='closed'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function all_count_outpat_seen_specialist_open($hos_key, $user_id, $specialist_id)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and specialist_id='$specialist_id' and quee_date='$cc' and status_out='open'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function all_count_outpat_open($hos_key, $user_id)
    {
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and assigned_doc='$user_id' and status_out='open'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function hospital_patients_q($hos_key, $user_id)
    {
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and assigned_doc='$user_id'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patient_name = $row['patient_name'];
            $obj->age = $row['age'];
            $obj->sex = $row['sex'];
            $obj->age = $row['age'];
            $obj->occupation = $row['occupation'];
            $obj->marital_status = $row['marital_status'];
            $obj->address = $row['address'];
            $obj->tribe = $row['tribe'];
            $obj->religion = $row['religion'];
            $obj->next_of_kin = $row['next_of_kin'];
            $obj->phone_number = $row['phone_number'];
            $obj->email_address = $row['email_address'];
            $obj->added_date = $row['added_date'];
            $obj->host_key = $row['host_key'];
            $obj->status_out = $row['status_out'];
            $obj->hmo_id = $row['hmo_id'];
            $obj->assigned_doc = $row['assigned_doc'];

            $ben_info = $this->get_user_info($row['assigned_doc']);
            $obj->fullnamen = $ben_info->fullname;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function all_hmo($hos_key)
    {
        $query = "SELECT * FROM hmo where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->hmo = $row['hmo_name'];
            $obj->status = $row['status'];
            $obj->rep_name = $row['rep_name'];
            $obj->host_key = $row['host_key'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function hospital_patients_sp($hos_key, $user_id, $specialist_id)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and specialist_id='$specialist_id' and quee_date='$cc'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patient_name = $row['patient_name'];
            $obj->age = $row['age'];
            $obj->sex = $row['sex'];
            $obj->age = $row['age'];
            $obj->occupation = $row['occupation'];
            $obj->marital_status = $row['marital_status'];
            $obj->address = $row['address'];
            $obj->tribe = $row['tribe'];
            $obj->religion = $row['religion'];
            $obj->next_of_kin = $row['next_of_kin'];
            $obj->phone_number = $row['phone_number'];
            $obj->email_address = $row['email_address'];
            $obj->added_date = $row['added_date'];
            $obj->host_key = $row['host_key'];
            $obj->status_out = $row['status_out'];
            $obj->hmo_id = $row['hmo_id'];
            $obj->assigned_doc = $row['assigned_doc'];

            $ben_info = $this->get_user_info($row['assigned_doc']);
            $obj->fullnamen = $ben_info->fullname;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function hospital_patients_qall($hos_key)
    {
        $cc = date('Y/m/d');
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and quee_date='$cc'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patient_name = $row['patient_name'];
            $obj->age = $row['age'];
            $obj->sex = $row['sex'];
            $obj->age = $row['age'];
            $obj->occupation = $row['occupation'];
            $obj->marital_status = $row['marital_status'];
            $obj->address = $row['address'];
            $obj->tribe = $row['tribe'];
            $obj->religion = $row['religion'];
            $obj->next_of_kin = $row['next_of_kin'];
            $obj->phone_number = $row['phone_number'];
            $obj->email_address = $row['email_address'];
            $obj->added_date = $row['added_date'];
            $obj->host_key = $row['host_key'];
            $obj->status_out = $row['status_out'];
            $obj->hmo_id = $row['hmo_id'];
            $obj->assigned_doc = $row['assigned_doc'];

            $ben_info = $this->get_user_info($row['assigned_doc']);
            $obj->fullnamen = $ben_info->fullname;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function hospital_patients_now($hos_key)
    {
        $query = "SELECT * FROM patients_crm where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patient_name = $row['patient_name'];
            $obj->age = $row['age'];
            $obj->sex = $row['sex'];
            $obj->age = $row['age'];
            $obj->occupation = $row['occupation'];
            $obj->marital_status = $row['marital_status'];
            $obj->address = $row['address'];
            $obj->tribe = $row['tribe'];
            $obj->religion = $row['religion'];
            $obj->next_of_kin = $row['next_of_kin'];
            $obj->phone_number = $row['phone_number'];
            $obj->email_address = $row['email_address'];
            $obj->added_date = $row['added_date'];
            $obj->host_key = $row['host_key'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function lab_kitsx($hos_key)
    {
        $query = "SELECT * FROM lab_kits where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->kits = $row['kits'];
            $obj->status = $row['status'];
            $obj->host_key = $row['host_key'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function lab_samples($hos_key)
    {
        $query = "SELECT * FROM lab_kits where host_key='$hos_key' and status='Samples'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->kits = $row['kits'];
            $obj->status = $row['status'];
            $obj->host_key = $row['host_key'];

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function lab_contaier($hos_key)
    {
        $query = "SELECT * FROM lab_kits where host_key='$hos_key' and status='Containers'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->kits = $row['kits'];
            $obj->status = $row['status'];
            $obj->host_key = $row['host_key'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function lab_restrition($hos_key)
    {
        $query = "SELECT * FROM lab_kits where host_key='$hos_key' and status='Restrictions'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->kits = $row['kits'];
            $obj->status = $row['status'];
            $obj->host_key = $row['host_key'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function lab_test($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM lab_cases where host_key='$hos_key' and dpt_id='$get_asset_id'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->case_name = $row['case_name'];
            $obj->added_date = $row['date_added'];
            $obj->host_key = $row['host_key'];


            $user_list[] = $obj;
        }
        return $user_list;
    }


    //  list OF ASSET edit
    public function listOfLabDepartment($get_asset_id)
    {
        $query = "SELECT * FROM lab_category where id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->category_name = $row['category_name'];
        $user_list[] = $obj;
        return $obj;
    }


    public function lLabDepartment($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM lab_category where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->category_name = $row['category_name'];


        $user_list[] = $obj;
        return $obj;
    }


    public function listOfLabDepartmentTests($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM lab_cases where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->case_name = $row['case_name'];
        $obj->sample = $row['sample'];
        $obj->container = $row['container'];
        $obj->amount = $row['amount'];
        $obj->date_added = $row['date_added'];

        $user_list[] = $obj;
        return $obj;
    }

    public function assign_doc_to_patient($hos_key, $doc_id, $pid)
    {
        $cc = date('Y/m/d');
        $query = "update patients_crm set assigned_doc='$doc_id',out_patient='yes',status_out='open',quee_date='$cc' where id='$pid'";
        return $this->runner($query);
    }

    public function assign_spe_to_patient($hos_key, $doc_id, $pid)
    {
        $cc = date('Y/m/d');
        $query = "update patients_crm set specialist_id='$doc_id',out_patient='yes' where id='$pid'";
        return $this->runner($query);
    }

    public function listOfLabDepartmentTest($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM lab_cases where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->case_name = $row['case_name'];
        $obj->sample = $row['sample'];
        $obj->container = $row['container'];
        $obj->amount = $row['amount'];
        $obj->date_added = $row['date_added'];
        $obj->tat = $row['tat'];


        $user_list[] = $obj;
        return $obj;
    }


    public function lab_cases($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM lab_cases where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->kits = $row['kits'];
        $obj->amount = $row['amount'];
        $obj->date_added = $row['date_added'];

        $user_list[] = $obj;
        return $obj;
    }


    public function lab_reports($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->patients_id = $row['patients_id'];
        $obj->status = $row['status'];
        $obj->department_id = $row['department_id'];
        $obj->case_id = $row['case_id'];
        $obj->host_key = $row['host_key'];
        $obj->date_added = $row['date_added'];
        $obj->results = $row['results'];
        $obj->notes = $row['notes'];

        $user_list[] = $obj;
        return $obj;
    }


    public function quee_user_test_dpt($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key' and status='pending' and department_id='$get_asset_id'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patients_id = $row['patients_id'];
            $obj->status = $row['status'];
            $obj->department_id = $row['department_id'];
            $obj->case_id = $row['case_id'];
            $obj->host_key = $row['host_key'];
            $obj->date_added = $row['date_added'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;


            $ben_info = $this->edit_patients($row['host_key'], $row['patients_id']);
            $obj->patient_name = $ben_info->patient_name;


            $ben_info = $this->listOfLabDepartmentTest($row['host_key'], $row['case_id']);
            $obj->case_name = $ben_info->case_name;
            $obj->amount = $ben_info->amount;
            $obj->sample = $ben_info->sample;
            $obj->container = $ben_info->container;


            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function quee_user_test($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key' and patients_id='$get_asset_id'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patients_id = $row['patients_id'];
            $obj->status = $row['status'];
            $obj->department_id = $row['department_id'];
            $obj->payment = $row['payment'];
            $obj->case_id = $row['case_id'];
            $obj->host_key = $row['host_key'];
            $obj->date_added = $row['date_added'];
            $obj->results = $row['results'];
            $obj->notes = $row['notes'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;

            $ben_info = $this->listOfLabDepartmentTests($row['host_key'], $row['case_id']);
            $obj->case_name = $ben_info->case_name;
            $obj->amount = $ben_info->amount;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function quee_user_test_app($hos_key)
    {
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patients_id = $row['patients_id'];
            $obj->status = $row['status'];
            $obj->department_id = $row['department_id'];
            $obj->case_id = $row['case_id'];
            $obj->host_key = $row['host_key'];
            $obj->date_added = $row['date_added'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;


            $ben_info = $this->edit_patients($row['host_key'], $row['patients_id']);
            $obj->patient_name = $ben_info->patient_name;


            $ben_infos = $this->listOfLabDepartmentTest($row['host_key'], $row['case_id']);
            $obj->case_name = $ben_infos->case_name;
            $obj->amount = $ben_infos->amount;
            $obj->sample = $ben_infos->sample;
            $obj->container = $ben_infos->container;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function quee_user_test_status($hos_key, $get_asset_id, $get_asset_status)
    {
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key' and patients_id='$get_asset_id' and status='$get_asset_status'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patients_id = $row['patients_id'];
            $obj->status = $row['status'];
            $obj->department_id = $row['department_id'];
            $obj->case_id = $row['case_id'];
            $obj->host_key = $row['host_key'];
            $obj->date_added = $row['date_added'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;


            $ben_info = $this->listOfLabDepartmentTest($row['host_key'], $row['case_id']);
            $obj->case_name = $ben_info->case_name;
            $obj->amount = $ben_info->amount;


            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function quee_user_test_dashboard($hos_key)
    {
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key' limit 10";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patients_id = $row['patients_id'];
            $obj->status = $row['status'];
            $obj->department_id = $row['department_id'];
            $obj->case_id = $row['case_id'];
            $obj->host_key = $row['host_key'];
            $obj->date_added = $row['date_added'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;


            $ben_info = $this->listOfLabDepartmentTest($row['host_key'], $row['case_id']);
            $obj->case_name = $ben_info->case_name;
            $obj->tat = $ben_info->tat;
            $obj->amount = $ben_info->amount;


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function quee_s($hos_key)
    {
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key' GROUP by patients_id";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patients_id = $row['patients_id'];
            $obj->status = $row['status'];
            $obj->department_id = $row['department_id'];
            $obj->payment = $row['payment'];
            $obj->case_id = $row['case_id'];
            $obj->host_key = $row['host_key'];
            $obj->date_added = $row['date_added'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;

            $ben_info = $this->listOfLabDepartmentTest($row['host_key'], $row['department_id']);
            $obj->case_name = $ben_info->case_name;
            $obj->amount = $ben_info->amount;

            $ben_info = $this->edit_patients($row['host_key'], $row['patients_id']);
            $obj->patient_name = $ben_info->patient_name;
            $obj->age = $ben_info->age;
            $obj->sex = $ben_info->sex;
            $obj->phone_number = $ben_info->phone_number;

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function quee_today($hos_key)
    {
        $get_date = date('m/d/y');
        $query = "SELECT * FROM quee_user_test where host_key='$hos_key' and date_added='$get_date' GROUP by patients_id";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patients_id = $row['patients_id'];
            $obj->status = $row['status'];
            $obj->department_id = $row['department_id'];
            $obj->payment = $row['payment'];
            $obj->case_id = $row['case_id'];
            $obj->host_key = $row['host_key'];
            $obj->date_added = $row['date_added'];

            $ben_info = $this->listOfLabDepartment($row['department_id']);
            $obj->category_name = $ben_info->category_name;

            $ben_info = $this->listOfLabDepartmentTest($row['host_key'], $row['department_id']);
            $obj->case_name = $ben_info->case_name;
            $obj->amount = $ben_info->amount;

            $ben_info = $this->edit_patients($row['host_key'], $row['patients_id']);
            $obj->patient_name = $ben_info->patient_name;
            $obj->age = $ben_info->age;
            $obj->sex = $ben_info->sex;
            $obj->phone_number = $ben_info->phone_number;

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function allLabTest($hos_key)
    {
        $query = "SELECT * FROM lab_cases where host_key='$hos_key' order by case_name";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->case_name = $row['case_name'];
            $obj->dpt_id = $row['dpt_id'];
            $obj->added_date = $row['date_added'];
            $obj->amount = $row['amount'];
            $obj->host_key = $row['host_key'];
            $obj->dpt_id = $row['dpt_id'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function update_payment_lab($case_id, $userid, $hos_key)
    {
        $query = "update quee_user_test set payment='paid',status='paid' where host_key='$hos_key' and id='$case_id' and patients_id='$userid'";
        return $this->runner($query);
    }


    //  list OF bed
    public function list_categoryi($cat_id)
    {
        $query = "SELECT * FROM assets_category where  id='$cat_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->asset_key = $row['asset_key'];
        $obj->category_name = $row['category_name'];

        return $obj;
    }


    public function all_bed($hos_key)
    {
        $query = "SELECT * FROM beds where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->bed_category = $row['bed_category'];
            $obj->bed_charges = $row['bed_charges'];
            $obj->tax_id = $row['tax_id'];
            $obj->description = $row['description'];
            $obj->location = $row['location'];
            $obj->added_date = $row['added_date'];
            $obj->host_key = $row['host_key'];

            $ben_info = $this->list_categoryiw($row['bed_category']);
            $obj->bed_category = $ben_info->bed_category;

            $ben_info = $this->hospital_charges_l($row['bed_charges']);
            $obj->charges_name = $ben_info->charges_name;
            $obj->charges = $ben_info->charges;

            $ben_info = $this->edit_taxs($row['tax_id']);
            $obj->tax_name = $ben_info->tax_name;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    //  list OF bed edit
    public function list_categoryiw($cat_id)
    {
        $query = "SELECT * FROM bed_category where id='$cat_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->bed_category = $row['bed_category'];
        $obj->host_key = $row['host_key'];
        return $obj;
    }

    //  list OF charges list
    public function hospital_charges_l($cat_id)
    {
        $query = "SELECT * FROM hospital_charges where id='$cat_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->charges_name = $row['charges_name'];
        $obj->charges = $row['charges'];
        return $obj;
    }


    //  list OF ASSET edit
    public function edit_asset($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM hospital_assets where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->asset_name = $row['asset_name'];
        $obj->category_asset = $row['category_asset'];
        $obj->asset_value = $row['asset_value'];
        $obj->added_dated = $row['added_dated'];
        $obj->asset_condition = $row['asset_condition'];

        $cat_info = $this->list_categoryi($row['category_asset']);
        $obj->category_name = $cat_info->category_name;

        $user_list[] = $obj;
        return $obj;
    }


    //  list OF ASSET edit
    public function edit_chargesd($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM hospital_charges where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->charges_name = $row['charges_name'];
        $obj->charges = $row['charges'];

        $user_list[] = $obj;
        return $obj;
    }


    //  list OF tax edit
    public function edit_taxs($get_asset_id)
    {
        $query = "SELECT * FROM tax where id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->tax_name = $row['tax_name'];
        $obj->amount = $row['amount'];
        $obj->type = $row['type'];

        $user_list[] = $obj;
        return $obj;
    }


    //  list OF tax edit
    public function edit_tax($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM tax where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->tax_name = $row['tax_name'];
        $obj->amount = $row['amount'];
        $obj->type = $row['type'];

        $user_list[] = $obj;
        return $obj;
    }


    //  list OF ASSET edit
    public function edit_asset_cat($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM assets_category where asset_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->category_name = $row['category_name'];
        $obj->status = $row['status'];


        $user_list[] = $obj;
        return $obj;
    }

    //  list OF ASSET edit
    public function list_categ($hos_key, $cat_id)
    {
        $query = "SELECT * FROM assets_category where asset_key='$hos_key' and id='$cat_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->asset_key = $row['asset_key'];
        $obj->category_name = $row['category_name'];

        $user_list[] = $obj;
        return $obj;
    }

    public function update_charges($charges_name, $charges_amount, $hos_key, $asset_sid)
    {
        $query = "update hospital_charges set charges_name='$charges_name',charges='$charges_amount' where host_key='$hos_key' and id='$asset_sid'";
        return $this->runner($query);
    }

    public function update_tax($tax_name, $amount, $type, $hos_key, $asset_sid)
    {
        $query = "update tax set tax_name='$tax_name',amount='$amount', type='$type' where host_key='$hos_key' and id='$asset_sid'";
        return $this->runner($query);
    }


    public function update_dpt($asset_sid, $dpt_name, $hod, $hos_key)
    {
        $query = "update department set department_name='$dpt_name',hod_id='$hod' where host_key='$hos_key' and id='$asset_sid'";
        return $this->runner($query);
    }


    public function update_assets($asset_name, $asset_values, $asset_cate, $asset_condition, $hos_key, $asset_sid)
    {
        $query = "update hospital_assets set asset_name='$asset_name',asset_value='$asset_values',asset_condition='$asset_condition',category_asset='$asset_cate' where host_key='$hos_key' and id='$asset_sid'";
        return $this->runner($query);
    }

    public function update_lab_dpt($asset_sid, $host_key, $department_name)
    {
        $query = "update lab_category set category_name='$department_name'  where host_key='$host_key' and id='$asset_sid'";
        return $this->runner($query);
    }

    public function update_assets_cat($asset_sid, $cat_name, $status, $hos_key)
    {
        $query = "update assets_category set category_name='$cat_name',status='$status' where asset_key='$hos_key' and id='$asset_sid'";
        return $this->runner($query);
    }

    //count number of asset in hospital active
    public function all_count_asset($hos_key)
    {
        $query = "select * from hospital_assets where host_key='$hos_key'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    //count number of patient in hospital active
    public function all_count_patients($hos_key)
    {
        $query = "select * from patients_crm where host_key='$hos_key'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of patient in hospital active
    public function all_count_order($hos_key)
    {
        $query = "select * from quee_user_test where host_key='$hos_key' and status='processing'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    public function all_count_pending($hos_key)
    {
        $query = "select * from quee_user_test where host_key='$hos_key' and status='pending'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function all_count_compledted($hos_key)
    {
        $query = "select * from quee_user_test where host_key='$hos_key' and status='completed'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    //count number of staff in school
    public function count_staff()
    {
        $query = "select * from staffs";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of parent in school
    public function count_parent()
    {
        $query = "select * from student where pri=3";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of subject in school
    public function count_subject()
    {
        $query = "select * from subject";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of subject in school
    public function count_class()
    {
        $query = "select * from class_s";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of subject in school
    public function class_list()
    {
        $query = "SELECT * FROM class_s order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->class_name = $row['class_name'];
            $obj->class_code = $row['class_code'];
            $obj->level = $row['class_level'];
            $count_student_inclass = $this->count_students_per_class($row['id']);
            $obj->count_students = $count_student_inclass;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    //get all the class room
    public function count_students_per_class($class_id)
    {
        $query = "select * from student where class_ss='$class_id'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //Add New class
    public function add_new_class($class_name, $class_code, $levels)
    {
        $query = "INSERT INTO class_s (class_name,class_code,class_level) VALUES ('$class_name', '$class_code', '$levels')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    // teacher list in school
    public function staffs_list()
    {
        $query = "SELECT * FROM staffs order by fullname asc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fullname = $row['fullname'];
            $obj->nationality = $row['nationality'];
            $obj->state = $row['state'];
            $obj->city = $row['city'];
            $obj->qualification = $row['qualification'];
            $obj->gender = $row['gender'];
            $obj->marital = $row['marital'];
            $obj->address = $row['address'];
            $obj->phone = $row['phone'];
            $obj->email = $row['email'];
            $obj->photo_st = $row['photo_st'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function hospital_list()
    {
        $query = "SELECT * FROM hospital_users order by hospital_name asc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->hospital_name = $row['hospital_name'];
            $obj->address = $row['address'];
            $obj->no_staffs = $row['no_staffs'];
            $obj->email = $row['email'];
            $obj->password = $row['password'];
            $obj->payment_plans = $row['payment_plans'];
            $obj->patients = $row['patients'];
            $obj->activation = $row['activation'];

            $user_list[] = $obj;
        }
        return $user_list;
    }


    // operation list in hospital
    public function hospital_operation()
    {
        $query = "SELECT * FROM modules order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->module_name = $row['module_name'];
            $obj->links = $row['links'];
            $obj->status = $row['status'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    // category list in hospital
    public function assets_list($hos_key)
    {
        $query = "SELECT * FROM assets_category where asset_key='$hos_key' order by id asc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->category_name = $row['category_name'];
            $obj->asset_key = $row['asset_key'];
            $obj->status = $row['status'];
            $obj->added_date = $row['added_date'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    // category list in hospital
//    public function bed_list($hos_key)
//    {
//        $query = "SELECT * FROM bed_category where host_key='$hos_key' order by id desc";
//        $q = $this->run_query($query);
//        $user_list = array();
//        while ($row = $this->get_result($q)) {
//            $obj = new stdClass();
//            $obj->id = $row['id'];
//            $obj->bed_category = $row['bed_category'];
//            $obj->date_added = $row['date_added'];
//            $user_list[] = $obj;
//        }
//        return $user_list;
//    }


    // category list in hospital
    public function bed_list($hos_key)
    {
        $query = "SELECT * FROM bed_category where host_key='$hos_key' order by id asc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->category_name = $row['bed_category'];
            $obj->host_key = $row['host_key'];
            $obj->added_date = $row['date_added'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    // subject list in school
    public function exam_remark()
    {
        $query = "SELECT * FROM comments order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->commentss = $row['commentss'];
            $obj->from_start = $row['from_start'];
            $obj->from_to = $row['from_to'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    //get all the student
    public function get_res_info($id, $para)
    {
        $query = "select * from custom_result_record where test_id='$id' and case_name='$para'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        @$obj->results = $row['results'];
        @$obj->test_id = $row['test_id'];

        return $obj;
    }


    public function print_test_rs($hos_key, $test_id)
    {
        $query = "select * from custom_result_record where test_id='$test_id' and host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->case_name = $row['case_name'];
            $obj->results = $row['results'];
            $obj->units = $row['units'];
            $obj->comment = $row['comment'];
            $obj->ref = $row['ref'];
            $obj->result_dated = $row['result_dated'];


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function custom_result_data($get_caseid, $get_asset_id)
    {
        $query = "SELECT * FROM custom_result where case_id='$get_caseid' order by id desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->para_meter = $row['para_meter'];
            $obj->unit = $row['unit'];
            $obj->ref = $row['ref'];
//            $obj->results = $row['results'];
            $obj->comments = $row['comments'];
            $obj->case_id = $row['case_id'];


            $student_inclass = $this->get_res_info($get_asset_id, $row['para_meter']);
            $obj->results = $student_inclass->results;


            $user_list[] = $obj;
        }
        return $user_list;
    }

    //Add New subject
    public function add_new_subject($subject_name, $subject_code)
    {
        $query = "INSERT INTO subject (subject_name,subject_code) VALUES ('$subject_name', '$subject_code')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function more_datas($added_roles, $get_caseid, $hos_key, $result_inputs, $get_asset_id, $units, $refs, $comments, $cureent_dates)
    {

        $query = "insert into custom_result_record (case_name,case_id,host_key,results,test_id,units,comment,ref,result_dated,status)values('$added_roles','$get_caseid','$hos_key','$result_inputs','$get_asset_id','$units','$comments','$refs','$cureent_dates','completed')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function dmore_datas($get_caseid, $cureent_dates, $get_asset_id)
    {
        //delete before add new reports
        $query1 = "delete from custom_result_record where case_id='$get_caseid' and result_dated='$cureent_dates' and status='completed' and test_id='$get_asset_id'";
        return $this->runner($query1);

    }

    public function custom_result($added_roles, $get_asset_id, $units, $ref, $comments)
    {
        $query = "insert custom_result (para_meter,case_id,unit,ref,comments)values('$added_roles','$get_asset_id','$units','$ref','$comments')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function admit_student($hos_key, $doc_id, $sp_id, $ward, $bed, $payment, $hmo, $dated, $pid)
    {
        $query = "INSERT INTO `admitpatients` (`id`, `patient_id`, `ward`, `bed`, `doctor_id`, `specialist_id`, `payment_type`, `hmo`, `bill`, `date_added`,`host_key`) VALUES (NULL, '$pid', '$ward', '$bed', '$doc_id', '$sp_id', '$payment', '$hmo', NULL, '$dated','$hos_key')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function session_list()
    {
        $query = "SELECT * FROM school_session order by years desc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->years = $row['years'];
            $obj->session_t = $row['session_t'];
            $obj->status = $row['status'];
            $obj->simple_session = $row['simple_session'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //All user info sorted by id
    public function inp($hos_key)
    {
        $query = "SELECT * FROM admitpatients where status='1'";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->patient_id = $row['patient_id'];
            $obj->bed = $row['bed'];
            $obj->ward = $row['ward'];
            $obj->doctor_id = $row['doctor_id'];
            $obj->specialist_id = $row['specialist_id'];
            $obj->payment_type = $row['payment_type'];
            $obj->hmo = $row['hmo'];
            $obj->bill = $row['bill'];
            $obj->date_added = $row['date_added'];
            $obj->status = $row['status'];

            //get patient info
            $get_patient_nifo = $this->edit_patients($hos_key, $row['patient_id']);
            $obj->patient_name = $get_patient_nifo->patient_name;
            $obj->age = $get_patient_nifo->age;
            $obj->sex = $get_patient_nifo->sex;

            //get ward
            $get_ward = $this->get_ward_info($row['ward']);
            $obj->ward = $get_ward->ward;

            //get doctor info
            $get_doctor = $this->get_user_info($row['doctor_id']);
            $obj->fullname = $get_doctor->fullname;

            $user_list[] = $obj;
        }
        return $user_list;
    }


    //All user info sorted by id
    public function get_user_info($id)
    {
        $query = "select * from staff_erm where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->user_id = $row['id'];
        $obj->host_key = $row['host_key'];
        $obj->email = $row['email'];
        $obj->privillege = $row['privillege'];
        $obj->fullname = $row['fullname'];
        $obj->specialist = $row['specialist'];
        $obj->photo = $row['photo'];

        return $obj;
    }


    public function get_ward_info($id)
    {
        $query = "select * from wards where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->ward = $row['ward'];
        $obj->host_key = $row['host_key'];
        $obj->location = $row['location'];
        $obj->dated = $row['dated'];

        return $obj;
    }

    public function edit_patients($hos_key, $get_asset_id)
    {
        $query = "SELECT * FROM patients_crm where host_key='$hos_key' and id='$get_asset_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->patient_name = $row['patient_name'];
        $obj->age = $row['age'];
        $obj->sex = $row['sex'];
        $obj->age = $row['age'];
        $obj->occupation = $row['occupation'];
        $obj->marital_status = $row['marital_status'];
        $obj->address = $row['address'];
        $obj->tribe = $row['tribe'];
        $obj->religion = $row['religion'];
        $obj->next_of_kin = $row['next_of_kin'];
        $obj->phone_number = $row['phone_number'];
        $obj->email_address = $row['email_address'];
        $obj->added_date = $row['added_date'];
        $obj->host_key = $row['host_key'];
        //het profiles
        $obj->briefs = $row['briefs'];
        $obj->bp = $row['bp'];
        $obj->body_temp = $row['body_temp'];
        $obj->heart_rate = $row['heart_rate'];
        $obj->height = $row['height'];
        $user_list[] = $obj;
        return $obj;
    }


    // teacher list in school
    public function staffs_list_single($get_user_id)
    {
        $query = "SELECT * FROM staffs where id='$get_user_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->fullname = $row['fullname'];
        $obj->nationality = $row['nationality'];
        $obj->state = $row['state'];
        $obj->city = $row['city'];
        $obj->qualification = $row['qualification'];
        $obj->gender = $row['gender'];
        $obj->marital = $row['marital'];
        $obj->address = $row['address'];
        $obj->phone = $row['phone'];
        $obj->email = $row['email'];
        $obj->about = $row['about'];
        $obj->health = $row['health'];
        $obj->password = $row['password'];
        $obj->photo_st = $row['photo_st'];
        $user_list[] = $obj;
        return $obj;
    }


    //update staff info
    public function update_staff_profile($get_user_id, $full_name, $email, $nationality, $religion, $address, $state, $city, $about, $history, $gender)
    {
        $query = "update staffs set fullname='$full_name',nationality='$nationality',email='$email',address='$address',state='$state',city='$city',about='$about',health='$history',gender='$gender' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update password staff end
    public function update_staff_password($get_user_id, $main_pass)
    {
        $query = "update staffs set password='$main_pass' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update password student end
    public function update_student_password($get_user_id, $main_pass)
    {
        $query = "update student set password='$main_pass' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update parents info
    public function update_parent_profile($get_user_id, $fullname1, $fullname2, $email1, $email2, $phone1, $phone2, $p_address)
    {
        $query = "update student set parent1='$fullname1',parent2='$fullname2',email1='$email1',email2='$email2',phone1='$phone1',phone2='$phone2',full_address='$p_address' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update staff pic
    public function upload_staff_profile_pics($path, $get_user_id)
    {
        $query = "update staffs set photo_st='$path' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update student pic
    public function upload_student_profile_pics($path, $get_user_id)
    {
        $query = "update student set photo='$path' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //All subject id
    public function get_subjects_info($id)
    {
        $query = "select * from subject where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->user_id = $row['id'];
        $obj->subject_code = $row['subject_code'];
        $obj->subject_name = $row['subject_name'];
        return $obj;
    }

    //All houses id
    public function houses($id)
    {
        $query = "select * from houses where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->house_id = $row['id'];
        $obj->house_nam = $row['house_name'];
        return $obj;
    }


    // session list in school
    public function session_active()
    {
        $query = "SELECT * FROM school_session where status=1";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->simple_session = $row['simple_session'];
        return $obj;
    }

    // session list in school


    public function mbs($get_year, $get_term, $get_class)
    {
        $query = "SELECT subject_id FROM exams_re where  year='$get_year' and term='$get_term' and class_id='$get_class' group by subject_id";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->subject_id = $row['subject_id'];
            //get subject details
            $get_subject = $this->get_subjects_info($row['subject_id']);
            $obj->subject_name = $get_subject->subject_name;
            $obj->subject_code = $get_subject->subject_code;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    //all the houses
    public function all_houses()
    {
        $query = "select * from houses";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->house_name = $row['house_name'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function mbs_student($get_year, $get_term, $get_class)
    {
        $query = "SELECT student_id FROM exams_re where  year='$get_year' and term='$get_term' and class_id='$get_class' and student_id!='' group by student_id";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $student_id = $row['student_id'];
            $data = $this->student_profile($row['student_id']);
            if ($data == 'empty') {
                continue;
            }
            $obj = new stdClass();
            $obj->student_id = $student_id;
            //get subject details
            $obj->data = $data;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function getStudentScore($data)
    {
        $query = "SELECT total_score AS total FROM exams_re where student_id='$data->student_id' and year='$data->year' and term='$data->term' and class_id='$data->class_id' and subject_id ='$data->subject_id' ";
        $q = $this->run_query($query);
        if ($this->get_number_of_row($q) < 1) {
            return 0;
        } else {
            return $this->get_result($q)['total'];
        }
    }

    public function ca1_report($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT * FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='$get_term' and class_id='$get_class' and tamm!=0 and cw!=0 and ass!=0";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            //exam para
            $obj->id = $row['id'];
            $obj->subject_id = $row['subject_id'];
            $obj->class_id = $row['class_id'];
            $obj->student_id = $row['student_id'];
            $obj->year = $row['year'];
            $obj->term = $row['term'];
            //ca1
            $obj->tamm = $row['tamm'];
            $obj->cw = $row['cw'];
            $obj->ass = $row['ass'];
            $obj->cat = $row['cat'];

            //ca2
            $obj->pr = $row['pr'];
            $obj->cw2 = $row['cw2'];
            $obj->ass2 = $row['ass2'];
            $obj->cat2 = $row['cat2'];

            //exam
            $obj->exam = $row['exam'];
            $obj->ca1_hs = $row['ca1_hs'];
            $obj->ca1_ls = $row['ca1_ls'];
            $obj->ca2_hs = $row['ca2_hs'];
            $obj->ca2_ls = $row['ca2_ls'];

            $obj->exam_ls = $row['exam_ls'];
            $obj->exam_hs = $row['exam_hs'];
            $obj->score_avg = $row['score_avg'];
            $obj->subject_position = $row['subject_position'];

            //other para
            $obj->status = $row['status'];
            $obj->ca1_total = $row['ca1_total'];
            $obj->ca2_total = $row['ca2_total'];
            $obj->ca1_postion = $row['ca1_postion'];
            $obj->total_score = $row['total_score'];
            $obj->subject_position = $row['subject_position'];

            //get subject details
            $get_subject = $this->get_subjects_info($row['subject_id']);
            $obj->subject_name = $get_subject->subject_name;
            $obj->subject_code = $get_subject->subject_code;

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function promotion_nd($sbd, $cls, $sbi)
    {
        $query = "SELECT * FROM exams_re where student_id='$sbd' and year='2021' and term='2nd' and class_id='$cls' and tamm!=0 and cw!=0 and ass!=0";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->total_score_nd = $row['total_score'];
        return $obj;
    }


    public function get_student_subjects($get_user_id, $get_class)
    {
        $query = "SELECT * FROM exams_re where student_id='$get_user_id' and year='2021' and term='1st' and class_id='$get_class' and tamm!=0 and cw!=0 and ass!=0";
        $q = $this->run_query($query);

        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            //exam para
            $obj->id = $row['id'];
            $obj->subject_id = $row['subject_id'];

            //get subject details
            $get_subject = $this->get_subjects_info($row['subject_id']);
            $obj->subject_name = $get_subject->subject_name;
            $obj->subject_code = $get_subject->subject_code;

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function promotion($get_user_id, $get_class, $subject_id, $year, $term)
    {
        $query = "SELECT SUM(tamm+cw+ass+cat+pr+cw2+ass2+cat2+exam) as total FROM exams_re where student_id='$get_user_id' and year='$year' and term='$term' and class_id='$get_class' and subject_id='$subject_id' and tamm!=0 and cw!=0 and ass!=0";
        $q = $this->run_query($query);
        if ($this->get_number_of_row($q) < 1) {
            return 0;
        } else {
            $row = $this->get_result($q);
            return $row['total'];
        }


    }


    //get all the student by id
    public function student_profile($get_user_id)
    {
        $query = "SELECT * FROM student where id='$get_user_id'";
        if ($this->get_number_of_row($this->run_query($query)) < 1) {
            return 'empty';
        } else {
            $row = $this->get_result($this->run_query($query));
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fullname = $row['fullname'];
            $obj->nationality = $row['nationality'];
            $obj->email = $row['email'];
            $obj->gender = $row['gender'];
            $obj->date_ob = $row['date_ob'];
            $obj->city = $row['city'];
            $obj->about = $row['about'];
            $obj->state = $row['state'];
            $obj->photo = $row['photo'];
            $obj->parent1 = $row['parent1'];
            $obj->parent2 = $row['parent2'];
            $obj->email1 = $row['email1'];
            $obj->email2 = $row['email2'];
            $obj->phone1 = $row['phone1'];
            $obj->phone2 = $row['phone2'];
            $obj->full_address = $row['full_address'];
            $obj->password = $row['password'];
            $obj->religion = $row['religion'];
            $obj->health_history = $row['health_history'];
            $obj->address = $row['address'];
            $obj->admission_date = $row['admission_date'];
            $obj->class_ssx = $row['class_ss'];

            $obj->handwriting = $row['handwriting'];
            $obj->leadership = $row['leadership'];
            $obj->attendance = $row['attendance'];
            $obj->politeness = $row['politeness'];
            $obj->participation = $row['participation'];
            $obj->sport = $row['sport'];
            $obj->neatness = $row['neatness'];

            $obj->house = $row['houses'];

            if ($obj->house == 0) {
                $obj->house_nam = "na";
            } else {
                $student_house = $this->houses($obj->house);
                $obj->house_nam = $student_house->house_nam;
            }

            $student_inclass = $this->get_class_info($row['class_ss']);
            $obj->class_namex = $student_inclass->class_name;
            $obj->class_level = $student_inclass->class_level;
            return $obj;
        }

    }

    //sum exam total scores
    public function total_exam($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT SUM(ca1_total+ca2_total+exam) AS ca1_result FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='$get_term' and class_id='$get_class'";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->ca1_result = $row['ca1_result'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function total_promotiion($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT SUM(tamm+cw+ass+cat+pr+cw2+ass2+cat2+exam) AS ca1_result FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='1st' and class_id='$get_class'";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->ca1_result = $row['ca1_result'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function total_promotiion2($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT SUM(tamm+cw+ass+cat+pr+cw2+ass2+cat2+exam) AS ca1_result FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='2nd' and class_id='$get_class'";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->ca1_result = $row['ca1_result'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function total_promotiion3($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT SUM(tamm+cw+ass+cat+pr+cw2+ass2+cat2+exam) AS ca1_result FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='3rd' and class_id='$get_class'";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->ca1_result = $row['ca1_result'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //sum ca1 total scores
    public function total_ca1($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT SUM(tamm+cw+ass+cat) AS ca1_result FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='$get_term' and class_id='$get_class' and tamm!=0 and cw!=0 and ass!=0";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->ca1_result = $row['ca1_result'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //sum ca2 total scores
    public function total_ca2($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT SUM(pr+cw2+ass2+cat2) AS ca1_result FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='$get_term' and class_id='$get_class' and pr!=0 and cw2!=0 and ass2!=0";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->ca1_result = $row['ca1_result'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //count number of subject ca1 report
    public function count_ca1_sbjects($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT * FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='$get_term' and class_id='$get_class' and tamm!=0 and cw!=0 and ass!=0";
        $q = $this->run_query($query);
        return $this->get_number_of_row($q);
    }

    //count number of subject ca1 report promotion
    public function count_ca1_sbjects_promotion($get_user_id, $get_year, $get_term, $get_class)
    {
        $query = "SELECT * FROM exams_re where student_id='$get_user_id' and year='$get_year' and term='$get_term' and class_id='$get_class' and tamm!=0 and cw!=0 and ass!=0";
        $q = $this->run_query($query);
        return $this->get_number_of_row($q);
    }

    //update  remarks
    public function update_remarks($comments, $from_to, $to_end, $comment_id)
    {
        $query = "update comments set commentss='$comments',from_start='$from_to',from_to='$to_end' where id='$comment_id'";
        return $this->runner($query);
    }

    //delete remarks
    public function deletes_remarks($comment_id1)
    {
        $query = "delete from comments where id='$comment_id1'";
        return $this->runner($query);
    }

    //add new comments
    public function add_comment($comments, $from_to, $to_end)
    {
        $query = "insert into comments (commentss,from_start,from_to)values ('$comments','$from_to','$to_end')";
        return $this->runner($query);
    }

    //blogs
    public function news()
    {
        $query = "SELECT * FROM blogs order by id desc limit 3";
        $q1 = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q1)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->title = $row['title'];
            $obj->tags = $row['tags'];
            $obj->content = $row['content'];
            $obj->photo = $row['photo'];
            $obj->posted = $row['posted'];
            $obj->date = $row['date'];
            $obj->author = $row['author'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    /** function to reduce the lenght of a string **/
    public function stringFormat($string, $len)
    {
        if (strlen($string) > $len) {
            return substr($string, 0, $len) . '...';
        } else {
            return $string;
        }
    }

    //update Ca1
    public function update_extra($house, $c1, $c2, $c3, $c4, $c5, $c6, $c7, $pid)
    {
        $query = "update student SET handwriting='$c1', houses='$house', leadership='$c2', attendance='$c3', politeness='$c4', participation='$c5', sport='$c6', neatness='$c7' where id='$pid'";
        $run_qry = $this->run_query($query);
        return $this->runner($run_qry);
    }

    //get all the student by id
    public function stu_remarks($values_remarks)
    {
        //alpha conversion
        if ($values_remarks == 'E') {
            $s = 40;
            $e = 44;
            $query = "SELECT * FROM comments where (from_start >=$s) && (from_to <= $e) order by rand() limit 1";
        } elseif ($values_remarks == 'D') {
            $s = 45;
            $e = 55;
            $query = "SELECT * FROM comments where (from_start >=$s) && (from_to <= $e) order by rand() limit 1";
        } elseif ($values_remarks == 'C') {
            $s = 55;
            $e = 65;
            $query = "SELECT * FROM comments where (from_start >=$s) && (from_to <= $e) order by rand() limit 1";
        } elseif ($values_remarks == 'B') {
            $s = 65;
            $e = 75;
            $query = "SELECT * FROM comments where (from_start >=$s) && (from_to <= $e) order by rand() limit 1";
        } elseif ($values_remarks == 'A') {
            $s = 75;
            $e = 90;
            $query = "SELECT * FROM comments where (from_start >=$s) && (from_to <= $e) order by rand() limit 1";
        } elseif ($values_remarks == 'A*') {
            $s = 90;
            $e = 100;
            $query = "SELECT * FROM comments where (from_start >=$s) && (from_to <= $e) order by rand() limit 1";
        }
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->commentss = $row['commentss'];
        return $obj;
    }


    //all the houses
    public function school_session()
    {
        $query11 = "select * from school_session order by id desc ";
        $qx = $this->run_query($query11);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->years = $row['years'];
            $obj->session_t = $row['session_t'];
            $obj->status = $row['status'];
            $obj->simple_session = $row['simple_session'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


}


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

    public function hospital_patients()
    {
        echo $query = "SELECT * FROM patients_crm";
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



}


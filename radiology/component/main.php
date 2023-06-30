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



}
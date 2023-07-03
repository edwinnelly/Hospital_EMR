<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
   $get_asset_id = base64_decode($add_user->get_request('aset'));
 $get_asset_cn = base64_decode($add_user->get_request('cn'));
$get_caseid = base64_decode($add_user->get_request('caseid'));
$lab_edit = $add_user->listOfLabDepartment($get_asset_id);
$lab_list_dpt = $add_user->lab_test($hos_key, $get_asset_id);

//more report data
$lab_more_reports = $add_user->custom_result_data($get_caseid,$get_asset_id);

$lab_report = $add_user->lab_reports($hos_key, $get_asset_id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Settings | Controls</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 13px;
        }
    </style>


</head>

<body>

<div id="wrapper">

    <?php
    include "inc/sidebar.php";
    ?>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <?php
            include "inc/header.php";
            ?>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">

                <div class="col-lg-12 animated fadeInRight">
                    <div class="mail-box-header">

                        <h4>
Quality Assurance / Reports
                        </h4>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">
                            </div>

                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ibox ">
                                        <div class="ibox-title">
                                            <h5 class="font-weight- text-danger"> Note You Must Verify Sample Number Before Adding Report!</h5>
                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>


                                            </div>
                                        </div>
                                        <div class="ibox-content">


                                            <form method="post">
                                            <div class="form-group">
                                                <label id="xxx">Sample Number: </label>
                                                <input type="text" placeholder="***"
                                                       class="form-control"
                                                       name="notes" id="xx" required>
                                            </div>

                                            <input type="submit" name="resultsx" value="Verify Now"
                                                   class="btn btn-primary btn-outline pull-right btn-rounded font-weight-bold" id="cc">
                                                <?php
                                                @$notes = $_POST['notes'];
                                                @$resultsx = $_POST['resultsx'];

                                                if($resultsx){

                                                   if($notes===$get_asset_id){

                                                       echo '<script>document.getElementById("cc").style.visibility="hidden";</script>';
                                                       echo '<script>document.getElementById("xx").style.visibility="hidden";</script>';
                                                       echo '<script>document.getElementById("xxx").style.visibility="hidden";</script>';
                                                       echo '<span>Sample ID Verified!</span>';

                                                       echo "<br>";
                                                       echo '<a href="add_reports.php?aset='.base64_encode($get_asset_id).'&&caseid='.base64_encode($get_caseid).'&&cn='.base64_encode($get_asset_cn).'" class="btn btn-primary btn-outline btn-rounded font-weight-bold">Continue</a>';

                                                   }else{
                                                       echo "<span class='text-danger'>Invalid Sample Code</span>";
                                                   }

                                                }

                                                ?>
                                            </form>

                                            <div>




                                            </div>


                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <img src="img/sec.gif" height="300">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $hos_key; ?>" id="host_key">
        <?php
        include_once "inc/footer.php";
        ?>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/js_hospital.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script src="js/plugins/dataTables/datatables.min.js"></script>



</body>

</html>

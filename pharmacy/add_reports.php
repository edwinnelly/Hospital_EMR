<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
   $get_asset_id = base64_decode($add_user->get_request('aset')); //sample number
 $get_asset_cn = base64_decode($add_user->get_request('cn'));
   $get_caseid = base64_decode($add_user->get_request('caseid')); //case test number
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

                        <h2>
                            <h3 class="font-weight-">Lab Test Report / <span class="text-danger font-italic">SA<?= $get_asset_id; ?></span> / <?= $get_asset_cn ?> <button class="pull-right btn btn-outline btn-primary btn-rounded btn-sm font-weight-bold" onclick="location.reload();">Refresh Report</button></h3>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">

                            </div>

                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox ">
                                        <div class="ibox-title">
<!--                                            <h5 class="font-weight-bold">Please Note The Report Must Be Verified By Lab-->
<!--                                                Hod</h5>-->
                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>


                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <form method="post">
                                                <table class="table table-hover table-mail">
                                                    <thead>
                                                    <tr>
                                                        <th>Test Name</th>
                                                        <th>Results</th>
                                                        <th>Units</th>
                                                        <th>Bio .Ref</th>
                                                        <th>Comments</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                    <input type="hidden" id="pid" value="<?= $get_asset_id; ?>">

                                                    <?php
                                                    foreach ($lab_more_reports as $key => $values) {
                                                        ?>
                                                        <tr class="gradeA">

                                                            <td style="text-transform: capitalize">
                                                                <div class="form-group">
                                                                    <input type="text" readonly
                                                                           value="<?= $values->para_meter; ?>"
                                                                           class="form-control"
                                                                           name="list_rules[]" id="notes">
                                                                </div>
                                                            </td>
                                                            <td style="text-transform: capitalize">
                                                                <div class="form-group">
                                                                    <input type="text" value="<?= $values->results; ?>" class="form-control" name="result_inputs[]">
                                                                </div>
                                                            </td>

                                                            <td style="text-transform: capitalize">
                                                                <div class="form-group">
                                                                    <input type="text" value="<?= $values->unit; ?>" class="form-control" name="units[]">
                                                                </div>
                                                            </td>

                                                            <td style="text-transform: capitalize">
                                                                <div class="form-group">
                                                                    <input type="text" value="<?= $values->ref; ?>" class="form-control" name="refs[]">
                                                                </div>
                                                            </td>

                                                            <td style="text-transform: capitalize">
                                                                <div class="form-group">
                                                                    <input type="text" value="<?= $values->comments; ?>" class="form-control" name="comments[]">
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <?php
                                                    }
                                                    ?>

                                                    <tr class="gradeA">
                                                        <td style="text-transform: capitalize">
                                                            <input type="submit" name="results" value="Update Result"
                                                                   class="btn btn-primary btn-outline btn-rounded font-weight-bold">


                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </form>

                                            <?php

                                            if (isset($_POST['results'])) {
                                                @$each_role = $_POST['list_rules'];
                                                @$result_inputs = $_POST['result_inputs'];
                                                 @$units = $_POST['units'];
                                                 @$refs = $_POST['refs'];
                                                 @$comments = $_POST['comments'];

                                                $cureent_dates = $lab_report->date_added;
                                                $extra_datas_del = $add_user->dmore_datas($get_caseid,$cureent_dates,$get_asset_id);

                                                $update_reports = $add_user->add_lab_reports($get_asset_id,$hos_key);

                                                foreach (@$each_role as $key => $added_roles) {

                                                        $extra_datas = $add_user->more_datas($added_roles, $get_caseid, $hos_key, $result_inputs[$key],$get_asset_id,$units[$key],$refs[$key],$comments[$key],$cureent_dates);

                                                }
                                                if ($_POST['results']) {

                                                    echo '<script>
alert("This Report Has Been Updated!");
</script>';

                                                } else {
                                                    echo "Failed";
                                                }
                                            }
                                            ?>

                                            <div>


                                                <button class="btn  btn-warning btn-rounded btn-outline float-right m-t-n-xs"
                                                        type="submit" id="rerun"><strong>Re-run Test
                                                    </strong></button>

                                                <button class="btn  btn-danger btn-rounded btn-outline float-right m-t-n-xs"
                                                        type="submit" id="approved"><strong>Approve
                                                        Reports</strong></button>

                                            </div>


                                            <br>
                                            <br>
                                        </div>
                                    </div>
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


<script>

    // Upgrade button class name
    $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                // { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {
                    extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>

<script>

    function LoadOnce()
    {
        window.location.reload();
    }

    $(document).ready(function () {

        $("#reports").click(function () {

            // get the para from data-
            const notes = $("#notes").val();
            const pid = $("#pid").val();
            const report = $("#report").val();

            $.ajax({
                url: "ajax/add_lap_reports.php",
                method: "GET",
                data: {
                    notes: notes, pid: pid, report: report
                },
                success: function (data) {
                    swal("Good job!", "This Lab Report Test Has Been Sent To Lab Hod", "success");
                    setTimeout(
                        function () {
                            location.reload();
                        }, 3000);

                    if (data.trim() == 'done') {

                    }
                }
            });
        });

        $("#approved").click(function () {
            // get the para from data-
            const pid = $("#pid").val();
            $.ajax({
                url: "ajax/approve_reports.php",
                method: "GET",
                data: {
                    pid: pid
                },
                success: function (data) {
                    swal("Good job!", "This Lab Report Test Has Been Approved By Lab Hod", "success");
                    setTimeout(
                        function () {
                            location.reload();
                        }, 3000);

                    if (data.trim() == 'done') {

                    }
                }
            });
        });

        $("#rerun").click(function () {
            // get the para from data-
            const pid = $("#pid").val();
            $.ajax({
                url: "ajax/rerun_reports.php",
                method: "GET",
                data: {
                    pid: pid
                },
                success: function (data) {
                    swal("Good job!", "This Lab Report Test Has Been Cancelled By Lab Hod", "success");
                    setTimeout(
                        function () {
                            location.reload();
                        }, 3000);

                    if (data.trim() == 'done') {

                    }
                }
            });
        });


        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
</body>

</html>

<div class="modal inmodal" id="myModal223" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <p class="modal-title">Add Lab Test</p>
                <!--                <small class="font-bold">You can add and assign Lab to department.</small>-->
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label class="font-weight-bold">Test Title</label> <input type="text"
                                                                                                          placeholder="Test Title"
                                                                                                          class="form-control"
                                                                                                          id="testname">
                        </div>

                        <div class="form-group"><label class="font-weight-bold">Select Department</label>
                            <select class="form-control" id="dpt">
                                <?php
                                foreach ($lab_list_dpt as $key => $values) {
                                    ?>
                                    <option style="text-transform: uppercase"
                                            value="<?= $values->id; ?>"><?= $values->category_name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_lab_test">
                    Add Test
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal inmodal" id="myModal22" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <p class="modal-title">Add Lab Department</p>
                <!--                <small class="font-bold">You can add and assign Lab to department.</small>-->
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label class="font-weight-bold">Department Name</label> <input
                                    type="text"
                                    placeholder="Department Name"
                                    class="form-control"
                                    id="department_name">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_dpt">Add
                    Department
                </button>
            </div>
        </div>
    </div>
</div>




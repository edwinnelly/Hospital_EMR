<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
    $test_id = base64_decode($add_user->get_request('id')); //sample number
 $get_asset_cn = base64_decode($add_user->get_request('cn'));
  $get_asset_pid = ($add_user->get_request('pid'));
$aptients_edit= $add_user->edit_patients($hos_key,$get_asset_pid);


$lab_report_test = $add_user->print_test_rs($hos_key, $test_id);
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
                            <h3 class="font-weight-">Lab Test Report / Approved<button class="pull-right btn btn-outline btn-secondary btn-rounded btn-sm font-weight-bold" onclick="location.reload();">Print Result</button></h3>
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

                                            <h3 class="font-weight-">Lab Test Report / <span class="text-danger font-italic">SA<?= $test_id; ?></span> / <?= $get_asset_cn ?> </h3>


                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>


                                            </div>
                                        </div>
                                        <div class="ibox-content">

                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Patient Name</th>
                                                    <th>Patient Id</th>
                                                    <th>Gender / Age</th>
                                                    <th>Created On</th>
                                                    <th>Approved On</th>
                                                    <th>Sample Number</th>
                                                </tr>
                                                </thead>
                                                <tbody>


                                                    <tr class="gradeA">

                                                        <td style="text-transform: capitalize">
                                                            <?= $aptients_edit->patient_name;   ?>
                                                        </td>
                                                        <td style="text-transform: capitalize">
                                                            PID<?= $aptients_edit->id;   ?>
                                                        </td>

                                                        <td style="text-transform: capitalize">
                                                            <?= $aptients_edit->sex;   ?> /  <?php
                                                            $birthDate =  date('d/m/Y',strtotime($aptients_edit->age));
                                                            //explode the date to get month, day and year
                                                            $birthDate = explode("/", $birthDate);
                                                            //get age from date or birthdate
                                                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                                                ? ((date("Y") - $birthDate[2]) - 1)
                                                                : (date("Y") - $birthDate[2]));
                                                            echo $age;

                                                            ?>
                                                        </td>

                                                        <td style="text-transform: capitalize">
                                                            -
                                                        </td>

                                                        <td style="text-transform: capitalize">
                                                            -
                                                        </td>
                                                        <td style="text-transform: capitalize">
                                                            SA<?= $test_id; ?>
                                                        </td>

                                                    </tr>



                                                </tbody>
                                            </table>

                                                <table class="table table-hover">
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
                                                    foreach ($lab_report_test as $key => $values) {
                                                        ?>
                                                        <tr class="gradeA">

                                                            <td style="text-transform: capitalize">
                                                                <?= $values->case_name; ?>
                                                            </td>
                                                            <td style="text-transform: capitalize">
                                                                <?= $values->results; ?>
                                                            </td>

                                                            <td style="text-transform: capitalize">
                                                                <?= $values->units; ?>
                                                            </td>

                                                            <td style="text-transform: capitalize">
                                                                <?= $values->ref; ?>
                                                            </td>

                                                            <td style="text-transform: capitalize">
                                                                <?= $values->comment; ?>
                                                            </td>

                                                        </tr>

                                                        <?php
                                                    }
                                                    ?>


                                                    </tbody>
                                                </table>


                                            <div>


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




<?php
include "inc/site_controller.php";
$get_asset_id = base64_decode($add_user->get_request('aset'));
$aptients_edit= $add_user->edit_patients($hos_key,$get_asset_id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hospital Patients Profile | Customers</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<style>
    body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 13px;
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
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h3 class="font-weight-bold">View Patient's Profile</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Data</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Hospital Data</strong>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="setup_patients.php"><button class="btn btn-primary btn-rounded btn-outline font-weight-bold">Patients List</button></a>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
                <!--                    <button class="btn btn-success btn-rounded">New Hospitals</button>-->
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInDown">
            <div class="row">
                <div class="col-lg-10">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5 class="font-weight-bold">View Patients / Profile</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>


                            </div>
                        </div>
                        <div class="ibox-content">


                                <div class="form-group"><label>Patient's Fullname</label> <input type="text"
                                                                                                placeholder="Patient's Fullname" value="<?= $aptients_edit->patient_name;  ?>"
                                                                                                class="form-control"
                                                                                                id="fullname" readonly>
                                </div>

                                <div class="form-group"><label>Patient's Age</label> <input type="text" value="<?= $aptients_edit->age;  ?>"
                                                                                                 placeholder="Age"
                                                                                                 class="form-control"
                                                                                                 id="age"
                                                                                            readonly>
                                </div>

                                <div class="form-group"><label>Sex</label> <input  type="text" value="<?= $aptients_edit->sex;  ?>"
                                                                                                 placeholder="Sex"
                                                                                                 class="form-control" id="sex"readonly>
                                </div>

                                <div class="form-group"><label>Occupation</label> <input  type="text" value="<?= $aptients_edit->occupation;  ?>"
                                                                                         placeholder="Occupation"
                                                                                         class="form-control" id="occupation"

                                                                                          readonly >
                                </div>


                            <div class="form-group"><label>Marital Status</label> <input  type="text" value="<?= $aptients_edit->marital_status;  ?>"
                                                                                      placeholder="Marital Status"
                                                                                      class="form-control" id="marital_status"

                                                                                          readonly >
                            </div>


                            <div class="form-group"><label>Address</label> <input  type="text" value="<?= $aptients_edit->address;  ?>"
                                                                                          placeholder="Address"
                                                                                          class="form-control" id="address"

                                                                                   readonly >
                            </div>


                            <div class="form-group"><label>Tribe</label> <input  type="text" value="<?= $aptients_edit->tribe;  ?>"
                                                                                 placeholder="Tribe"
                                                                                   class="form-control" id="tribe"

                                                                                 readonly>
                            </div>



                            <div class="form-group"><label>Religion</label> <input  type="text"  value="<?= $aptients_edit->religion;  ?>"
                                                                                 placeholder="Religion"
                                                                                 class="form-control" id="religion"

                                                                                    readonly >
                            </div>


                            <div class="form-group"><label>Next of kin</label> <input  type="text"  value="<?= $aptients_edit->next_of_kin;  ?>"
                                                                                    placeholder="Next of kin"
                                                                                    class="form-control" id="next_of_kin"

                                                                                       readonly >
                            </div>


                            <div class="form-group"><label>Phone Number</label> <input  type="text" value="<?= $aptients_edit->phone_number;  ?>"
                                                                                       placeholder="phone Number"
                                                                                       class="form-control" id="phone_number"

                                                                                        readonly>
                            </div>


                            <div class="form-group"><label>Email Address</label> <input  type="text"
                                                                                        placeholder="Email Address" value="<?= $aptients_edit->email_address;  ?>"
                                                                                        class="form-control" id="email"

                                                                                         readonly>
                            </div>


                            <div class="form-group"><label>Created Date</label> <input  type="text"
                                                                                         placeholder="Created Date Created Date" value="<?= $aptients_edit->added_date;  ?>"
                                                                                         class="form-control" id="email"

                                                                                         readonly>
                            </div>


                            <input type="hidden" value="<?= $get_asset_id;  ?>" id="pid">


                                <div>


                                </div>


                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include "inc/footer.php";
        ?>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="js/plugins/dataTables/datatables.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/js_hospital.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- Page-Level Scripts -->
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
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>


<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title">Hospital Operations</h4>
                <small class="font-bold">You can assign modules to hospital from this dashboard.</small>
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-10">
                        <?php
                        foreach ($hospital_operation as $key => $hos_operation) {
                            ?>
                            <div class="i-checks"><label>
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" value="" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    <i></i> <?= $hos_operation->module_name; ?> </label></div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold btn-rounded">Save changes</button>
            </div>
        </div>
    </div>
</div>

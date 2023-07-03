<?php
include "inc/site_controller.php";
$get_user_id = base64_decode($add_user->get_request('sid'));
$get_user_data = $add_user->hospital_details($get_user_id);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hospital Profile | Customers</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

<style>
    body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 14px;
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
                <h2 class="font-weight-bold">Edit Hospital Profile</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Data</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Hospital Data</strong>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="hospitals"><button class="btn btn-primary btn-rounded font-weight-bold">Hospitals List</button></a>
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
                            <h5 class="font-weight-bold"><?= $get_user_data->hospital_name; ?> / Profile</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>


                            </div>
                        </div>
                        <div class="ibox-content">

                            <form role="form">
                                <div class="form-group"><label>Hospital Fullname</label> <input type="text"
                                                                                                placeholder="Hospital Fullname"
                                                                                                class="form-control"
                                                                                                id="hospital_name"
                                                                                                value="<?= $get_user_data->hospital_name; ?>">
                                </div>

                                <div class="form-group"><label>Location / Address</label> <input type="text"
                                                                                                 placeholder="Hospital address"
                                                                                                 class="form-control"
                                                                                                 id="hospital_addr"
                                                                                                 value="<?= $get_user_data->address; ?>">
                                </div>

                                <div class="form-group"><label>Admin Logs</label> <input disabled type="text"
                                                                                                 placeholder="Hospital login"
                                                                                                 class="form-control"

                                                                                                 value="<?= $get_user_data->email; ?>">
                                </div>

                                <div class="form-group"><label>Admin Password</label> <input disabled type="text"
                                                                                         placeholder="Hospital password"
                                                                                         class="form-control"

                                                                                         value="**<?= $get_user_data->password; ?>***">
                                </div>

                                <div class="form-group"><label>Added Date</label> <input disabled type="text"
                                                                                         delete_remarks.php                                  placeholder="Added date"
                                                                                         class="form-control"
                                                                                         value="<?= $get_user_data->registered_date; ?>">
                                </div>

                                <div class="form-group"><label>Choose Payment Plan</label>
                                    <select id="plans" class="form-control">
                                        <option>Free Plan</option>
                                        <option>Basic Plan</option>
                                        <option>Standard Plan</option>
                                        <option>Premium Plan</option>

                                    </select>
                                </div>


                                <div>
                                    <button class="btn btn-sm btn-primary btn-rounded float-right m-t-n-xs"
                                            type="submit"><strong>Update
                                            Profile</strong></button>

                                </div>
                            </form>

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

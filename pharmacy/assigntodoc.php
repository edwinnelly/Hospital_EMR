<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
  $get_asset_id = base64_decode($add_user->get_request('aset'));
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
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');
    </style>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            font-size: 14px;
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
                <div class="col-lg-8 animated fadeInRight">
                    <div class="mail-box-header">


                        <div class="mail-tools tooltip-demo m-t-md">

                            <h3 class="text-primary" style="text-transform: capitalize;margin-left: 20px;">Assign this
                                Patient to a doctor</h3>
                            <h2>
                            </h2>
                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">
                            <h4 class="font-weight-bold">

                                <div class="form-group"><label>Choose Doctor</label>
                                    <select class="form-control" id="doc_id">
                                        <option>Choose Doctor</option>
                                        <?php
                                        $doctors_list = $add_user->doctors_list($hos_key);
                                        foreach ($doctors_list as $key=> $users) {
                                            ?>
                                            <option value="<?= $users->id; ?>"><?= $users->fullname; ?>  (<?= $users->category_name; ?>)</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <input type="hidden" value="<?= $get_asset_id;  ?>" id="pid">
                                <input type="submit" class="font-weight-bold btn btn-primary btn-outline btn-rounded pull-right" value="Assign Doctor" id="ps">

                            </h4>


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
            buttons: []
        });
    });

</script>

<script>
    $(document).ready(function () {

        $("#ps").click(function () {
            const doc_id = $("#doc_id").val();
            const pid = $("#pid").val();

            if (doc_id === '') {
                swal("Not allowed !", "Pid Name Needed!", "error");
            } else {
                //call ajax

                $.ajax({
                    url: "ajax/assign_doctopatient.php",
                    method: "GET",
                    data: {
                        doc_id: doc_id, pid: pid
                    },
                    success: function (data) {
                        swal("Good job!", "Doctor has been assigned to this patient!", "success");

                        //redirect
                        setTimeout(
                            function () {
                                location.href='host_patients.php';
                            }, 3000);
                    }
                });
            }
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


                        <div class="form-group"><label class="font-weight-bold">Select Sample</label>
                            <select class="form-control" id="sample">
                                <?php
                                foreach ($lab_samples as $key => $values) {
                                    ?>
                                    <option style="text-transform: uppercase"
                                            value="<?= $values->kits; ?>"><?= $values->kits; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label class="font-weight-bold">Select Container</label>
                            <select class="form-control" id="container">
                                <?php
                                foreach ($lab_container as $key => $values) {
                                    ?>
                                    <option style="text-transform: uppercase"
                                            value="<?= $values->kits; ?>"><?= $values->kits; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group"><label class="font-weight-bold">Select Restrictions</label>
                            <select class="form-control" id="restri">
                                <?php
                                foreach ($lab_restrition as $key => $values) {
                                    ?>
                                    <option style="text-transform: uppercase"
                                            value="<?= $values->kits; ?>"><?= $values->kits; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label class="font-weight-bold">Amount </label> <input type="text"
                                                                                                       placeholder="Test Amount"
                                                                                                       class="form-control"
                                                                                                       id="amount">
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




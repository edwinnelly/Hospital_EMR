<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    require_once 'component/meta_config.php';
    ?>
</head>

<body class="theme-cyan">
    <?php include_once "component/page-loader.php"?>
<div id="wrapper">
    <?php
    require_once 'component/header.php';
    require_once 'component/sidebar.php';
    ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row mb-3">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a>Patient Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Patient Profile</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">

                            <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> In Patients</h2>

                            <a href="add-patient.php">
                                <button class="btn btn-primary float-right">Add Patient</button>
                            </a>
                        </div>
                        <div class="col-lg-12 ">

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th>Patients Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Occupation</th>
                                    <th>Marital Status</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $patient_list = $app->hospital_patients();
                                $i = 0;
                                foreach ($patient_list as $key => $values) {
                                $i++;
                                ?>
                                    <tr class="gradeA">
                                        <td><?= $i; ?></td>
                                        <td style="text-transform: capitalize"><?=  $values->patient_name;  ?></td>
                                        <td><?php
                                            $birthDate =  date('d/m/Y',strtotime($values->age));
                                            //explode the date to get month, day and year
                                            $birthDate = explode("/", $birthDate);
                                            //get age from date or birthdate
                                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                                ? ((date("Y") - $birthDate[2]) - 1)
                                                : (date("Y") - $birthDate[2]));
                                            echo $age;

                                            ?></td>
                                        <td><?=  $values->sex;  ?></td>
                                        <td><?=  $values->occupation;  ?></td>
                                        <td><?=  $values->marital_status;  ?></td>
                                        <td><?=  $values->phone_number;  ?></td>
                                        <td><?=  $values->email_address;  ?></td>
                                        <td><?=  $values->address;  ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle font-weight-bold btn-rounded btn-outline">Action </button>
                                                <ul class="dropdown-menu">

                                                    <li><a href="patients-folder.php?aset=<?=  base64_encode($values->id);  ?>" class="dropdown-item font-weight-bold edit_asset" >Patient Folder</a></li>

                                                    <li><a href="assigntodoc.php?aset=<?=  base64_encode($values->id);  ?>" class="dropdown-item font-weight-bold edit_asset" >Assign to doctor</a></li>

                                                    <li><a href="assigntospecialist.php?aset=<?=  base64_encode($values->id);  ?>" class="dropdown-item font-weight-bold edit_asset" >Assign to Specialist</a></li>

                                                    <li><a href="admitpatients.php?aset=<?=  base64_encode($values->id);  ?>" class="dropdown-item font-weight-bold edit_asset" >Admit Patient</a></li>

                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>


                                </tbody>
                            </table>
                        </div>
                    
                    </div>
                </div>
                <script src="assets/bundles/libscripts.bundle.js"></script>
                <script src="assets/bundles/vendorscripts.bundle.js"></script>
                <script src="assets/bundles/datatablescripts.bundle.js"></script>
                <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
                <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
                <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
                <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
                <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
                <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
                <script src="assets/bundles/mainscripts.bundle.js"></script>
                <script src="assets/js/pages/tables/jquery-datatable.js"></script>
                <script src="../assets/vendor/toastr/toastr.js"></script>


                <script>
                    $(document).on('click', '.del_cat', function () {
                        const uid = $(this).attr("data-id");
                        const info = $(this).attr("data-info");
                        // show in text field
                        $("#catname").val(info);
                        $("#cpids").val(uid);
                        //display modal
                        $('#del_cat').modal('show');

                        $("#del_btn_cat").click(function () {
                            const info = $("#info").val();
                            const pid = $("#pid").val();

                            $("#postcatdel").on('submit', (function (e) {
                                e.preventDefault();
                                const btn = $("#del_btn_cat");
                                btn.attr('disabled', true).html(
                                    '<i class="fa fa-spin fa-spinner"></i> Deleting Category...'
                                );
                                var datas = new FormData(this);
                                $.ajax({
                                    url: "script/del_vendor",
                                    type: "POST",
                                    data: datas,
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                    success: (data) => {
                                        if (data.trim() == "done") {
                                            toastr.success('Completed.',
                                                'Success');
                                            setTimeout(
                                                function () {
                                                    window.location.href =
                                                        'vendor-list';
                                                }, 2000);
                                        } else {

                                        }
                                    },

                                });
                            }));

                        });

                    });
                </script>
</body>

</html>

<div class="modal fade" id="del_cat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete Supplier</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">
                <form id="postcatdel" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder="Add to Categories" class="float-right form-control"
                                   name="catname" id="catname" readonly="" required>
                            <input type="hidden" name="cpid" id="cpids">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="del_btn_cat" value="Delete Suppliers">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>

    </div>
</div>

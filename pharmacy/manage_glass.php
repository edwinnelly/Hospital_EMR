<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Drugs Class Setup</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Segoe UI", Arial, sans-serif;
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
                            <h2 class="font-weight-bold">Hospital / Drug Class</h2>
                            <span class="text-danger">User quick setup</span>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">

                            </div>

                        </div>
                    </div>


                    <div class="wrapper wrapper-content animated fadeInRight">

                        <div class="row">
                            <div class="col-lg-10">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h5>Drugs Class</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content table-responsive">
                                        <table class="table table-hover no-margins dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Sn</th>
                                                <th>Drugs Class</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $drugs_ls = $add_user->drugs_glass_phas($hos_key);
                                            $i = 0;
                                            foreach ($drugs_ls as $key => $values) {
                                                $i++;
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $i; ?>
                                                    </td>
                                                    <td><?= $values->cat_name; ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button data-toggle="dropdown"
                                                                    class="btn btn-primary btn-sm dropdown-toggle font-weight-bold btn-rounded btn-outline"
                                                                    aria-expanded="false">Action
                                                            </button>
                                                            <ul class="dropdown-menu" x-placement="bottom-start"
                                                                style="position: absolute; top: 28px; left: 0px; will-change: top, left;">

                                                                <li>
                                                                    <a
                                                                       class="dropdown-item font-weight-bold del_lab_dpt font-weight-bold" data-id="<?= $values->id; ?>">Delete
                                                                    </a></li>
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


                            <div class="col-lg-2 m-b-lg">
                                <div id="vertical-timeline" class="vertical-container light-timeline no-margins">


                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon blue-bg">
                                            <i class="fa fa-circle-o-notch"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2 class="font-weight-bold">Drug class</h2>
                                            <p>Capacity to create and see list of different classes of drugs.</p>
                                            <button class="btn btn-sm btn-success btn-rounded font-weight-bold" data-target="#myModal22" data-toggle="modal"> Add Drug class</button>

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
            buttons: []

        });

    });

</script>

<script>
    $(document).ready(function () {

        $("#add_dc").click(function () {
            // get the para from data-
            const dc = $("#dc").val();
            if (dc === '') {
                swal("Not allowed !", "Drug Class Name Needed!", "error");
            } else {
                $.ajax({
                    url: "ajax/add_drug_class_ph.php",
                    method: "GET",
                    data: {
                        dc:dc
                    },
                    success: function (data) {
                        swal("Good job!", "Drug Class Added!", "success");
                        setTimeout(
                            function () {
                                location.reload();
                            }, 3000);

                        if (data.trim() == 'done') {

                        }
                    }
                });
            }

        });


        $(".del_lab_dpt").click(function () {

            // get the para from data-
            const host_fib = $(this).attr("data-id");
            $.ajax({
                url: "ajax/delete_drugs_class.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "Drug Class Has Been Removed", "success");
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


<div class="modal inmodal" id="myModal22" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <p class="modal-title">Add Drug Class</p>
                <!--                <small class="font-bold">You can add and assign Lab to department.</small>-->
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label class="font-weight-bold">New Drug Class</label> <input
                                    type="text"
                                    placeholder=" Drug Class"
                                    class="form-control"
                                    id="dc">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_dc">Add

                </button>
            </div>
        </div>
    </div>
</div>




<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$lab_list_dpt= $add_user->lab_kitsx($hos_key);

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
                <div class="col-lg-2">
                    <?php
                    include_once "inc/custom_sidebar_lab.php";
                    ?>
                </div>
                <div class="col-lg-10 animated fadeInRight">
                    <div class="mail-box-header">

                        <h2>
                            <h3 class="font-weight-bold">Hospital  / Custom Lab Setup </h3>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">

                            </div>
                            <a href="lab_setup.php"> <button class="font-weight-bold btn btn-danger btn-rounded btn-outline"><span class="fa fa-arrow-left"></span></button></a>

                             <button class="font-weight-bold btn btn-primary btn-rounded pull-right btn-outline" data-toggle="modal" data-target="#myModal223">Customise
                                </button>

                        </div>
                    </div>


                    <div class="mail-box">
                        <div class="ibox-content table-responsive">

                            <table class="table table-hover table-mail dataTables-example">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Lab Kits</th>
                                    <th>Types</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                foreach ($lab_list_dpt as $key => $values) {
                                    $i++;
                                    ?>
                                    <tr class="gradeA">
                                        <td><?= $i; ?></td>
                                        <td><?=  $values->kits;  ?></td>
                                        <td><?=  $values->status;  ?></td>

                                        <td>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle font-weight-bold btn-rounded btn-outline">Action </button>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger del_lab_kit font-weight-bold" data-id="<?= $values->id;  ?>">Delete</a></li>
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

    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                // { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
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
    $(document).ready(function () {

        $("#add_lab_kit").click(function () {
            // get the para from data-
            const kit_cat = $("#kit_cat").val();
            const kits = $("#kits").val();

            if(kits=== ''){
                swal("Not allowed !", "Kit Name Needed!", "error");
            }else{
                $.ajax({
                    url: "ajax/add_lab_kit.php",
                    method: "GET",
                    data: {
                        kit_cat: kit_cat,kits:kits
                    },
                    success: function (data) {
                        swal("Good job!", "Lab Kit Created!", "success");
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



        $(".del_lab_kit").click(function () {

            // get the para from data-
            const host_fib = $(this).attr("data-id");
            $.ajax({
                url: "ajax/d_lab_kits.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "This Lab Kit Has Been Removed", "success");
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
        <div class="modal-content animated flipInX">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <p class="modal-title">Add Lab Custom Kits</p>
                <!--                <small class="font-bold">You can add and assign Lab to department.</small>-->
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label class="font-weight-bold">Kit Title</label> <input type="text"
                                                                                                               placeholder="Kit Title"
                                                                                                               class="form-control"
                                                                                                               id="kits">
                        </div>

                        <div class="form-group"><label class="font-weight-bold">Select Category</label>
                            <select class="form-control" id="kit_cat">
                               <option>Samples</option>
                               <option>Containers</option>
                               <option>Restrictions</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_lab_kit">Add Test Kit</button>
            </div>
        </div>
    </div>
</div>



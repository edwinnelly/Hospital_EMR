<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$assets_list= $add_user->assets_list($hos_key);
$assets_list_n= $add_user->hospital_list_special($hos_key);
$assets_list_nx= $add_user->hospital_list_department($hos_key);
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
                    include_once "inc/custom_sidebar.php";
                    ?>
                </div>
                <div class="col-lg-10 animated fadeInRight">
                    <div class="mail-box-header">

                        <h2>
                            <h3 class="font-weight-bold">Hospital Specializations</h3>
                        </h2>
                        <button class="font-weight-bold btn btn-outline btn-primary btn-rounded pull-right"data-toggle="modal"
                                data-target="#myModal22">Add Specializations</button>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">


                            </div>



                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">

                        <table class="table table-hover table-mail dataTables-example">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Department Name</th>
                                <th>Specializations</th>
<!--                                <th>No Of Staff</th>-->
                                <th>Created On</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            foreach ($assets_list_n as $key => $values) {
                                $i++;
                                ?>
                                <tr class="gradeA">
                                    <td><?= $i; ?></td>
                                    <td><?=  $values->department_name;  ?></td>
                                    <td><?php  echo $hod = $values->specializations; ?></td>
<!--                                    <td>--><?//=  $values->count_staffs;  ?><!--</td>-->
                                    <td><?=  $values->date_added;  ?></td>

                                    <td>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-outline btn-primary btn-sm dropdown-toggle font-weight-bold btn-rounded">Action </button>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger del_dpt font-weight-bold" data-id="<?= $values->id;  ?>">Delete Asset</a></li>
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
//                {extend: 'csv'},
//                {extend: 'excel', title: 'ExampleFile'},
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

        $("#specializations").click(function () {
            // get the para from data-
            const specialization = $("#specialization").val();
            const hod = $("#hod").val();

            if(specialization=== ''){
                swal("Almost there!", "Please enter specializations name!", "info");
            }else{
                $.ajax({
                    url: "ajax/add_specialization.php",
                    method: "GET",
                    data: {
                        specialization: specialization,hod:hod
                    },
                    success: function (data) {
                        swal("Good job!", "Specializations Created!", "success");
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



        $(".del_dpt").click(function () {

            // get the para from data-
            const host_fib = $(this).attr("data-id");
            $.ajax({
                url: "ajax/d_special.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "This specializations Has Been Removed", "success");
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
                <p class="modal-title">Create Specializations</p>
                <small class="font-bold">You can add and assign Specializations.</small>
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label>Specializations Name</label> <input type="text"
                                                                                         placeholder="Specializations Name"
                                                                                         class="form-control"
                                                                                         id="specialization">
                        </div>

                        <div class="form-group"><label>Choose Department </label>
                            <select class="form-control" id="hod">
                                <option value="0">Choose Department</option>
                                <?php
                                foreach ($assets_list_nx as $key=> $users_acx){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?php echo  $users_acx->id;   ?>"><?php echo  $users_acx->department_name;   ?></option>
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
                <button type="button" class="btn btn-primary btn-outline font-weight-bold btn-rounded" id="specializations">Create Specializations</button>
            </div>
        </div>
    </div>
</div>




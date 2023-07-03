<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$assets_list= $add_user->assets_list($hos_key);
$lab_list_dpt= $add_user->hospital_list_labs($hos_key);
$lab_samples= $add_user->lab_samples($hos_key);
$lab_container= $add_user->lab_contaier($hos_key);
$lab_restrition= $add_user->lab_restrition($hos_key);

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
                            <h3 class="font-weight-bold">Hospital  / Lab Setup</h3>
                            <span class="text-danger">Lab quick setup</span>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">

                            </div>

                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">
                            <button class="font-weight-bold btn btn-danger btn-rounded btn-outline"data-toggle="modal"
                                    data-target="#myModal22">Add Lab Department</button>

                            <button class="font-weight-bold btn btn-primary btn-rounded pull-right btn-outline" data-toggle="modal" data-target="#myModal223">Add New Test
                            </button>
                        <table class="table table-hover table-mail dataTables-example">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Lab Departments</th>
                                <th>Lab Test</th>
                                <th>Added Date</th>
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
                                    <td><?=  $values->category_name;  ?></td>
                                    <td><?=  $values->count_case;  ?></td>
                                    <td><?=  $values->added_date;  ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle font-weight-bold btn-rounded btn-outline">Action </button>
                                            <ul class="dropdown-menu">

                                                <li><a href="department_test.php?aset=<?=  base64_encode($values->id);  ?>" class="dropdown-item font-weight-bold edit_asset" >View Department Test</a></li>

                                                <li><a href="edit_lab_dpt.php?aset=<?=  base64_encode($values->id);  ?>" class="dropdown-item font-weight-bold edit_asset" >Edit Lab Department</a></li>

                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger del_lab_dpt font-weight-bold" data-id="<?= $values->id;  ?>">Delete Department</a></li>
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

            ]

        });

    });

</script>

<script>
    $(document).ready(function () {

        $("#add_dpt").click(function () {
            // get the para from data-
            const department_name = $("#department_name").val();
            const host_key = $("#host_key").val();

            if(department_name=== ''){
                swal("Not allowed !", "Department Name Needed!", "error");
            }else{
                $.ajax({
                    url: "ajax/add_lab_dpt.php",
                    method: "GET",
                    data: {
                        department_name: department_name,host_key:host_key
                    },
                    success: function (data) {
                        swal("Good job!", "Lab Department Created!", "success");
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


        $("#add_lab_test").click(function () {
            // get the para from data-
            const testname = $("#testname").val();
            const dpt = $("#dpt").val();
            const restri = $("#restri").val();
            const amount = $("#amount").val();
            const container = $("#container").val();
            const sample = $("#sample").val();
            const tat = $("#tat").val();
            const host_key = $("#host_key").val();

            if(testname=== ''){
                swal("Empty fields!", "Try Again!", "error");
            }else{
                $.ajax({
                    url: "ajax/add_test_list.php",
                    method: "GET",
                    data: {
                        testname: testname,dpt:dpt,host_key:host_key,restri:restri,amount:amount,container:container,sample:sample,tat:tat
                    },
                    success: function (data) {
                        swal("Good job!", "Test Case Added!", "success");
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
                url: "ajax/d_lab_dpt.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "This Lab Department Has Been Removed", "success");
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
                                foreach ($lab_list_dpt as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->id;  ?>"><?=  $values->category_name;  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label class="font-weight-bold">Select Sample</label>
                            <select class="form-control" id="sample">
                                <?php
                                foreach ($lab_samples as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->kits;  ?>"><?=  $values->kits;  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label class="font-weight-bold">Select Container</label>
                            <select class="form-control" id="container">
                                <?php
                                foreach ($lab_container as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->kits;  ?>"><?=  $values->kits;  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group"><label class="font-weight-bold">Select Restrictions</label>
                            <select class="form-control" id="restri">
                                <?php
                                foreach ($lab_restrition as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->kits;  ?>"><?=  $values->kits;  ?></option>
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

                        <div class="form-group"><label class="font-weight-bold">Turn Around Time </label> <input type="text"
                                                                                                       placeholder="TAT"
                                                                                                       class="form-control"
                                                                                                       id="tat">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_lab_test">Add Test</button>
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
                        <div class="form-group"><label class="font-weight-bold">Department Name</label> <input type="text"
                                                                                         placeholder="Department Name"
                                                                                         class="form-control"
                                                                                         id="department_name">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_dpt">Add Department</button>
            </div>
        </div>
    </div>
</div>




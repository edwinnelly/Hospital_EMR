<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$get_asset_id = base64_decode($add_user->get_request('aset'));

$aptients_edit= $add_user->edit_patients($hos_key,$get_asset_id);

$lab_list_dpt= $add_user->quee_user_test($hos_key,$get_asset_id);
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


                        <div class="mail-tools tooltip-demo m-t-md">

                            <h3 class="text-primary" style="text-transform: capitalize;margin-left: 20px;"><?=  $aptients_edit->patient_name;   ?> Lab Test Profile</h3>


                            <h2>

                            </h2>



<!--                             <button class="font-weight-bold btn btn-primary btn-rounded pull-right btn-outline" data-toggle="modal" data-target="#myModal223">Add New Test-->
<!--                                </button>-->

                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">
                            <h4 class="font-weight-bold">

                                <a href="new_patient_test?aset=<?=  base64_encode($get_asset_id);  ?>&&status=Processing"><button class="font-weight-bold btn btn-primary btn-outline btn-rounded">Add </button></a>

                                <a href="patients_testlist_status?aset=<?=  base64_encode($get_asset_id);  ?>&&status=Processing"><button class="font-weight-bold btn btn-primary btn-outline btn-rounded">Processing </button></a>

                                <a href="patients_testlist_status?aset=<?=  base64_encode($get_asset_id);  ?>&&status=requested"><button class="font-weight-bold btn btn-success btn-outline btn-rounded">Requested</button></a>

                                <a href="patients_testlist_status?aset=<?=  base64_encode($get_asset_id);  ?>&&status=pending"><button class="font-weight-bold btn btn-info btn-outline btn-rounded"> Pending</button></a>

                                <a href="patients_testlist_status?aset=<?=  base64_encode($get_asset_id);  ?>&&status=completed"><button class="font-weight-bold btn btn-danger btn-outline btn-rounded">Completed</button></a>

                                <a href="patients_testlist_status?aset=<?=  base64_encode($get_asset_id);  ?>&&status=approved"><button class="font-weight-bold btn btn-warning btn-outline btn-rounded">Approved</button></a>   </h4>
                        <table class="table table-hover table-mail dataTables-example">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>In Department</th>
                                <th>Test Case</th>
                                <th>Amount</th>
                                <th>Created on</th>

                                <th>Result Status</th>
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
                                    <td style="text-transform: capitalize">  <?=  $values->category_name;  ?></td>
                                    <td style="text-transform: capitalize">  <?=  $values->case_name;  ?></td>
                                    <td><?=  number_format($values->amount);  ?></td>
                                    <td><?=  $values->date_added;  ?></td>


                                    <td><?php  $statusa =  $values->status; if($statusa=='Processing'){
                                        echo '<span class="text-danger font-weight-bold">Processing</span>';

                                        }elseif($statusa=='requested') {
                                            echo '<span class="text-warning font-weight-bold">Requested</span>';

                                        }elseif($statusa=='pending') {
                                            echo '<span class="text-info font-weight-bold">Pending</span>';

                                        }elseif($statusa=='completed') {
                                            echo '<span class="text-secondary font-weight-bold">Completed</span>';

                                        }elseif($statusa=='approved') {

                                            echo '<span class="text-success font-weight-bold">Approved</span> / ';

                                            echo '<a href="test_result.php?id='.base64_encode($values->id).'&&cn='.base64_encode($values->case_name).'&&pid='.$get_asset_id.'"><button class="btn btn-primary btn-sm btn-rounded btn-outline font-weight-bold">Print Result</button></a>';

                                        }
                                        elseif($statusa=='paid') {
                                            echo '<span class="text-success font-weight-bold">Paid</span>';

                                        }?></td>

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

        $(".addcase").click(function () {


            // get the para from data-
            const host_fib = $(this).attr("data-id");
            const host_pid = $(this).attr("data-pid");
            const host_patients = $(this).attr("data-patients");

            if(host_pid=== ''){
                swal("Not allowed !", "Pid Name Needed!", "error");
            }else{
                $.ajax({
                    url: "ajax/add_lab_test.php",
                    method: "GET",
                    data: {
                        host_fib: host_fib,host_pid:host_pid,host_patients:host_patients
                    },
                    success: function (data) {
                        swal("Good job!", "Lab Test Created!", "success");
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
            const host_key = $("#host_key").val();

            if(testname=== ''){
                swal("Empty fields!", "Try Again!", "error");
            }else{
                $.ajax({
                    url: "ajax/add_test_list.php",
                    method: "GET",
                    data: {
                        testname: testname,dpt:dpt,host_key:host_key,restri:restri,amount:amount,container:container,sample:sample
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




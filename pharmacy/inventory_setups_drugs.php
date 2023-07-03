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

    <title>inventory setups profile | Information</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6  {
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
                            <h2 class="font-weight-bold">Drugs  / Inventory Systems</h2>
                            <span class="text-danger">User quick setup</span>
                            <a href="inventory_setups.php" class="btn btn-sm btn-primary btn-rounded btn-outline font-weight-bold"> Drug List</a>
                            <a href="drugs_add.php" class="btn btn-sm btn-primary btn-rounded btn-outline font-weight-bold"> Add Drugs</a>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">

                            </div>

                        </div>

                        <div class="wrapper wrapper-content animated fadeInRight">



                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="ibox">
                                        <div class="ibox-title">
                                            <h5>Drugs List</h5>
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
                                                    <th>Medicine [Drug name]</th>
                                                    <th>Generic</th>
                                                    <th>Drug class</th>
                                                    <th>Production date</th>
                                                    <th>Expiry date</th>
                                                    <th>Batch No</th>
                                                    <th>Supplier</th>
                                                    <th> [QTY Aval]</th>
                                                    <th> [QTY RD]</th>
                                                    <th>Price</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $drugs_ls= $add_user->drugs_ls($hos_key);
                                                $i=0;
                                                foreach ($drugs_ls as $key => $values) {
                                                    $i++;
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= $i; ?>
                                                        </td>
                                                        <td><?= $values->drugs_name; ?></td>
                                                        <td><?= $values->category_name; ?></td>
                                                        <td><?= $values->category_name; ?></td>
                                                        <td><?= $values->production_date; ?></td>
                                                        <td><?= $values->expiry_date; ?></td>
                                                        <td><?= $values->batch_no; ?></td>
                                                        <td><?= $values->supplier; ?></td>
                                                        <td><?= $values->qty; ?></td>
                                                        <td><?= $values->qty_reminder; ?></td>
                                                        <td><?= number_format($values->selling_price); ?></td>

                                                        <td>
                                                            <div class="btn-group">
                                                                <button data-toggle="dropdown"
                                                                        class="btn btn-primary btn-sm dropdown-toggle font-weight-bold btn-rounded btn-outline"
                                                                        aria-expanded="false">Action
                                                                </button>
                                                                <ul class="dropdown-menu" x-placement="bottom-start"
                                                                    style="position: absolute; top: 28px; left: 0px; will-change: top, left;">

                                                                    <li><a href="drugs_edit.php?sid=<?= base64_encode($values->id); ?>"
                                                                           class="dropdown-item font-weight-bold edit_asset">Edit
                                                                           </a></li>

                                                                    <li><a href="drugs_edit.php?sid=<?= base64_encode($values->id); ?>"
                                                                           class="dropdown-item font-weight-bold edit_asset">Restock
                                                                        </a></li>

                                                                    <li><a
                                                                           class="dropdown-item font-weight-bold del_lab_dpt" data-id="<?= ($values->id); ?>">Delete</a>
                                                                    </li>

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
                url: "ajax/delete_drugs.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "Drug Has Been Removed", "success");
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




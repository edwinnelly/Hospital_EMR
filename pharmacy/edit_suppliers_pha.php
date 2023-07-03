<?php
include_once "inc/controller.php";
include_once "inc/user_data.php";
$add_user = new controller;
$sid = base64_decode($add_user->get_request('sid'));
$sid_drugs = $add_user->edt_supplier_pha($hos_key,$sid);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Suppliers | Controls</title>
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

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2 class="font-weight-bold">Edit drugs supplier</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Forms</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Update</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>


        <div class="wrapper wrapper-content">
            <div class="row">



                <div class="col-lg-8 animated fadeInRight">
                    <div class="mail-box-header">

<h3>Edit and update changes</h3>

                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">
                            <h4 class="font-weight-bold">


                                    <div class="col-sm-12">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Drug Suppliers Name</label>
                                                    <input type="text" id="fname" value="<?= $sid_drugs->supplier;  ?>" name="dname" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Suppliers Phone</label>
                                                    <input type="text" id="phone" value="<?= $sid_drugs->phone;  ?>" name="phone" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Suppliers Address</label>
                                                    <input type="text" id="addr" value="<?= $sid_drugs->addr;  ?>" name="dname" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Suppliers Email</label>
                                                    <input type="text" id="email" value="<?= $sid_drugs->email;  ?>" name="dname" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <input type="submit" class="font-weight-bold btn btn-primary btn-outline btn-rounded pull-right" value="Update Supplier info" id="ps">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $sid; ?>" id="sid">
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
            // get the para from data-
            const fname = $("#fname").val();
            const phone = $("#phone").val();
            const addr = $("#addr").val();
            const email = $("#email").val();
            const sid = $("#sid").val();
            if (fname === '') {
                swal("Not allowed !", "Drug Supplier Name Needed!", "error");
            } else {
                $.ajax({
                    url: "ajax/updates_suppliers_pha.php",
                    method: "GET",
                    data: {
                        fname:fname,phone:phone,addr:addr,email:email,sid:sid
                    },
                    success: function (data) {
                        swal("Good job!", "Drug Supplier Updated!", "success");
                        setTimeout(
                            function () {
                                window.location.href='manage_supply';
                            }, 3000);

                        if (data.trim() == 'done') {

                        }
                    }
                });
            }
        });

    });
</script>
</body>

</html>


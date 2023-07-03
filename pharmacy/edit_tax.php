<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$get_asset_id = base64_decode($add_user->get_request('aset'));
$assets_edit= $add_user->edit_tax($hos_key,$get_asset_id);
$assets_list= $add_user->assets_list($hos_key);

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

                    <div class="mail-box">

                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5 class="font-weight-bold">Quick Modification / Taxes</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>


                                </div>
                            </div>
                            <div class="ibox-content">

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <div class="form-group"><label>Tax Name</label> <input type="text"
                                                                                               placeholder="tax Name"
                                                                                               value="<?= $assets_edit->tax_name; ?>"
                                                                                               class="form-control"
                                                                                               id="tax_name">
                                        </div>


                                        <div class="form-group"><label>Tax Amount</label> <input type="text"
                                                                                                 placeholder="tax Amount"  value="<?= $assets_edit->amount; ?>"
                                                                                                 class="form-control"
                                                                                                 id="tax_amount">
                                        </div>


                                        <div class="form-group"><label>Tax Type</label>
                                            <select class="form-control" id="tax_type">
                                                <option><?= $assets_edit->type; ?></option>
                                                <option>Flat</option>
                                                <option>Percentage</option>
                                            </select>
                                        </div>
                                        <input type="hidden" value="<?=  $assets_edit->id; ?>" id="sid">


                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary btn-outline font-weight-bold btn-rounded" id="edit_sssets">Update Tax</button>

                            </div>
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
<script>
    $(document).ready(function () {


        $("#edit_sssets").click(function () {
            // get the para from data-
            const sid = $("#sid").val();
            const tax_name = $("#tax_name").val();
            const amount = $("#tax_amount").val();
            const type = $("#tax_type").val();

            if(tax_name=== ''){

            }else{
                $.ajax({
                    url: "ajax/edit_tax.php",
                    method: "GET",
                    data: {
                        tax_name: tax_name,amount:amount,sid:sid,type:type
                    },
                    success: function (data) {
                        swal("Good job!", "Tax Updated!", "success");
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



        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
</body>

</html>


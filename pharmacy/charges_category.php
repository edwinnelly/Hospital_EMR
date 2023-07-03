<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$assets_list= $add_user->assets_list($hos_key);
$assets_list_n= $add_user->assets_list($hos_key);

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
            font-size: 12px;
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
                            <h3 class="font-weight-bold">Hospital Charges Category</h3>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">


                            </div>
                            <button class="font-weight-bold btn btn-primary btn-rounded" data-toggle="modal"
                                    data-target="#myModal2">Add Category
                            </button>
                            <a href="app_settings.php"> <button class="font-weight-bold btn btn-primary btn-rounded">Back to assets</button></a>

                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">

                        <table class="table table-hover table-mail dataTables-example">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Category Name</th>
                                <th>Added Date</th>
                                <th>Status</th>

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
                                    <td><?=  $values->category_name;  ?></td>
                                    <td><?=  $values->status;  ?></td>
                                    <td><?=  $values->added_date;  ?></td>

                                    <td>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-danger btn-sm dropdown-toggle font-weight-bold btn-rounded">Action </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="edit_asset_cat.php?aset=<?=  base64_encode($values->id);  ?>" class="dropdown-item font-weight-bold edit_asset" >Edit Asset Category</a></li>

                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger del_asset_cat font-weight-bold" data-id="<?= $values->id;  ?>">Delete Category</a></li>
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

        $("#add_s").click(function () {
            // get the para from data-
            const cat_name = $("#cat_name").val();
            const cat_status = $("#cat_status").val();
            const host_key = $("#host_key").val();
            if(cat_name=== ''){

            }else{
                $.ajax({
                    url: "ajax/add_asset_cat.php",
                    method: "GET",
                    data: {
                        cat_name: cat_name,cat_status:cat_status,host_key:host_key
                    },
                    success: function (data) {
                        swal("Good job!", "Assets Category Created!", "success");
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



        $("#add_sssets").click(function () {
            // get the para from data-
            const asset_name = $("#asset_name").val();
            const asset_values = $("#asset_values").val();
            const asset_cate = $("#asset_cate").val();
            const asset_condition = $("#asset_condition").val();
            if(asset_name=== ''){

            }else{
                $.ajax({
                    url: "ajax/add_asset.php",
                    method: "GET",
                    data: {
                        asset_name: asset_name,asset_values:asset_values,asset_cate:asset_cate,asset_condition:asset_condition
                    },
                    success: function (data) {
                        swal("Good job!", "Assets Added!", "success");
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


        $(".del_asset_cat").click(function () {

            // get the para from data-
            const host_fib = $(this).attr("data-id");

            $.ajax({
                url: "ajax/d_asset_cat.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "This Asset Category Has Been Removed", "success");
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


<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <p class="modal-title">Add Asset Category</p>
                <small class="font-bold">You can add and assign assets to category.</small>
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label>Category Name</label>
                            <input type="text" id="cat_name" placeholder="Assets Category" class="form-control" id="cat_name">
                        </div>

                        <div class="form-group"><label>Status</label>
                            <select class="form-control" id="cat_status">
                                <option>Moveable</option>
                                <option>Non Moveable</option>
                            </select>

                            <input type="hidden" value="<?= $hos_key; ?>" id="host_key">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold btn-rounded add_asset_cat"  id="add_s">Save category</button>
            </div>
        </div>
    </div>
</div>




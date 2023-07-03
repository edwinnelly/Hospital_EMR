<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$assets_list= $add_user->bed_list($hos_key);
$bed_cose= $add_user->hospital_list_charges($hos_key);
$bed_tax= $add_user->hospital_list_tax($hos_key);
$assets_list_n= $add_user->all_bed($hos_key);

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
                            <h3 class="font-weight-bold"> Beds Setups</h3>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">


                            </div>
                            <a href="bed_category.php"> <button class="font-weight-bold btn btn-primary btn-rounded pull-right btn-outline">Add Bed Category
                            </button></a>
                            <button class="font-weight-bold btn btn-outline btn-primary btn-rounded"data-toggle="modal"
                                    data-target="#myModal22">Add Bed</button>
                            <a href="charges_category.php"> <button class="font-weight-bold btn-outline btn btn-primary btn-rounded">View Charges</button></a>

                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">

                        <table class="table table-hover table-mail dataTables-example">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Beds</th>
                                <th>Charges</th>
                                <th>Tax Value</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Created on</th>

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
                                    <td><?=  $values->bed_category;  ?></td>
                                    <td><?=  $values->charges_name;  ?> (<span class="text-danger font-weight-bold"><?= number_format($values->charges);  ?></span>)</td>
                                    <td><?=  $values->tax_name;  ?></td>
                                    <td><?=  $values->description;  ?></td>
                                    <td><?=  $values->location;  ?></td>
                                    <td><?=  $values->added_date;  ?></td>

                                    <td>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary btn-outline btn-sm dropdown-toggle font-weight-bold btn-rounded">Action </button>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger del_beds font-weight-bold" data-id="<?= $values->id;  ?>">Delete Asset</a></li>
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
                {extend: 'excel', title: 'Bed doc'},
                {extend: 'pdf', title: 'Bed doc'},

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



        $("#add_bedds").click(function () {
            // get the para from data-
            const bed_cate = $("#bed_cate").val();
            const bed_c = $("#bed_c").val();
            const tax = $("#tax").val();
            const dp = $("#dp").val();
            const bl = $("#bl").val();

            if(bed_cate=== '0'){

            }else{
                $.ajax({
                    url: "ajax/add_bed.php",
                    method: "GET",
                    data: {
                        bed_cate: bed_cate,bed_c:bed_c,tax:tax,dp:dp,bl:bl
                    },
                    success: function (data) {

                        swal("Good job!", "Bed Created!", "success");
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


        $(".del_beds").click(function () {

            // get the para from data-
            const host_fib = $(this).attr("data-id");
            $.ajax({
                url: "ajax/d_beds.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "This Bed Has Been Removed", "success");
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
                <p class="modal-title font-weight-bold">New Bed Setup</p>
                <small class="font-bold">You can add and assign bed to category.</small>
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">


                        <div class="form-group"><label class="">Choose Catgory</label>
                            <select class="form-control" id="bed_cate">
                                <option value="0" class="font-weight-bold">Choose Bed Category</option>
                                <?php
                                foreach ($assets_list as $key=> $ass){
                                    ?>
                                    <option value="<?php echo  $ass->id;   ?>"><?php echo  $ass->category_name;   ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group"><label >Choose Charges</label>
                            <select class="form-control" id="bed_c">
                                <option>Choose Bed charge</option>
                                <?php
                                foreach ($bed_cose as $key=> $assa){
                                    ?>
                                    <option value="<?php echo  $assa->id;   ?>"><?php echo  $assa->charges_name;   ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label >Tax Charges</label>
                            <select class="form-control" id="tax">
                                <option>Choose Tax Plan</option>
                                <?php
                                foreach ($bed_tax as $key=> $assax){
                                    ?>
                                    <option value="<?php echo  $assax->id;   ?>"><?php echo  $assax->tax_name;   ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>




                        <div class="form-group"><label>Bed Description</label> <input type="text"
                                                                                         placeholder="Bed Description"
                                                                                         class="form-control"
                                                                                         id="dp">
                        </div>


                        <div class="form-group"><label>Bed Location</label> <input type="text"
                                                                                 placeholder="Bed Location"
                                                                                 class="form-control"
                                                                                 id="bl">
                        </div>







                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold btn-rounded" id="add_bedds">Create Bed</button>
            </div>
        </div>
    </div>
</div>




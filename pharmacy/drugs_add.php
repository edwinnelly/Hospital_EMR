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
    <title>Add Drugs| Controls</title>
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
                <h2 class="font-weight-bold">Add New Drug</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Forms</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>New</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>


        <div class="wrapper wrapper-content">
            <div class="row">



                <div class="col-lg-12 animated fadeInRight">
                    <div class="mail-box-header">


                        <div class="mail-tools tooltip-demo m-t-md">

<!--                            <h3 class="text-primary" style="text-transform: capitalize;margin-left: 20px;">Add New Drugs</h3>-->
                            <a href="inventory_setups_drugs.php" class="btn btn-sm btn-primary btn-rounded btn-outline font-weight-bold"> Drug List</a>

                            <a href="inventory_setups_drugs.php" class="btn btn-sm btn-danger btn-rounded btn-outline font-weight-bold"> Drugs Class</a>

                            <a href="inventory_setups_drugs.php" class="btn btn-sm btn-success btn-rounded btn-outline font-weight-bold"> Drug Suppliers</a>

                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">
                            <h4 class="font-weight-bold">

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Drug Name</label>
                                                    <input type="text" id="dname" name="dname" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Drugs Class</label>
                                                    <select class="form-control" id="drugs_class">
                                                        <option>Choose Class</option>
                                                        <?php
                                                        $doctors_list = $add_user->drugs_class($hos_key);
                                                        foreach ($doctors_list as $key=> $users) {
                                                            ?>
                                                            <option value="<?= $users->id; ?>"><?= $users->cat_name; ?>  </option>
                                                            <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Drugs Suppliers</label>
                                                    <select class="form-control" id="drugs_supply">
                                                        <option>Choose Suppliers</option>
                                                        <?php
                                                        $doctors_list = $add_user->drug_supplier($hos_key);
                                                        foreach ($doctors_list as $key=> $users) {
                                                            ?>
                                                            <option value="<?= $users->id; ?>"><?= $users->cat_name; ?>  </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Quatity</label>
                                                    <input type="text" id="qty" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Quatity Reminder </label>
                                                    <input type="text" id="rqty" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Drugs Cost Price</label>
                                                    <input type="text" id="costprice" class="form-control">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>





                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group"><label>Selling Price</label>
                                                    <input type="text" id="sprice" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group"><label>Brand Name</label>
                                                    <input type="text" id="brand" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group"><label>Stock format</label>
                                                    <select class="form-control" id="stock">
                                                        <option>Choose type</option>
                                                        <option>Tablet</option>
                                                        <option>Amp</option>
                                                        <option>Vial</option>
                                                        <option>Card</option>
                                                        <option>Park</option>
                                                        <option>carton</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group"><label>Drug Category</label>
                                                    <select class="form-control" id="drugs_cates">
                                                        <option>Choose type</option>
                                                        <option>Drugs</option>
                                                        <option>Vaccines</option>
                                                        <option>Consumables</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Production Date</label>
                                                    <input type="date" id="pdate" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Expiration Date </label>
                                                    <input type="date" id="exdate" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group"><label>Drugs batch_no</label>
                                                    <input type="text" id="batch" class="form-control">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <input type="submit" class="font-weight-bold btn btn-primary btn-outline btn-rounded pull-right" value="Add Drugs" id="ps">

                            </h4>

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

        $("#ps").click(function () {
            const drug_name = $("#dname").val();
            const drugs_class = $("#drugs_class").val();
            const drugs_supply = $("#drugs_supply").val();
            const qty = $("#qty").val();
            const rqty = $("#rqty").val();
            const costprice = $("#costprice").val();
            const sprice = $("#sprice").val();
            const brand = $("#brand").val();
            const stock = $("#stock").val();
            const drugs_cates = $("#drugs_cates").val();
            const pdate = $("#pdate").val();
            const exdate = $("#exdate").val();
            const batch = $("#batch").val();
            if (drug_name === '') {
                swal("Not allowed !", "Drug Name Needed!", "error");
            } else {
                //call ajax
                $.ajax({
                    url: "ajax/add_drugs.php",
                    method: "GET",
                    data: {
                        drug_name: drug_name, drugs_class: drugs_class,drugs_supply:drugs_supply,qty:qty,rqty:rqty,costprice:costprice,sprice:sprice,brand:brand,stock:stock,drugs_cates:drugs_cates,pdate:pdate,exdate:exdate,batch:batch
                    },
                    success: function (data) {
                        swal("Good job!", "Drug has been added!", "success");

                        //redirect
                        setTimeout(
                            function () {
                                location.href='drugs_add.php';
                            }, 3000);
                    }
                });
            }
        });
    });
</script>
</body>

</html>


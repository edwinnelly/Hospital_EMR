<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    require_once 'component/meta_config.php';
    ?>
</head>

<body class="theme-cyan">
<?php include_once "component/page-loader.php"?>

    <div id="wrapper">
        <?php
    require_once 'component/header.php';
    require_once 'component/sidebar.php';
    ?>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                <div class="row mb-3">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a>Add Patient</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Add Patient</li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">

                                <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-8 col-sm-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Add Patient</h2>
                                    </div>
                                    <div class="body">
                                        <form method="post" id="add_vendors">
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Patients
                                                            Fullname</label>
                                                        <input type="text" name="vcode" id="text" class="form-control"
                                                            placeholder="Patients Fullname">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Patients Age</label>
                                                        <input type="date" id="text" name="vname" required
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Sex</label>
                                                        <input type="text" id="text" name="streets" required
                                                            class="form-control" placeholder="Sex">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Occupation</label>
                                                        <input type="text" id="text" name="city" required
                                                            class="form-control" placeholder="Occupation">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="phone-ex" class="control-label">Marital
                                                            Status</label>
                                                        <input type="text" name="state" class="form-control"
                                                            placeholder="Marital Status">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="tax-id" class="control-label">Address</label>
                                                        <input type="text" id="tax-id" name="zip" class="form-control"
                                                            placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="tax-id" class="control-label">Tribe</label>
                                                        <input type="text" id="tax-id" name="phone" required
                                                            class="form-control" placeholder="Tribe">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="tax-id" class="control-label">Religion</label>
                                                        <input type="text" id="tax-id" name="aphone"
                                                            class="form-control" placeholder="Religion">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="product-key" class="control-label">Next of
                                                            kin</label>
                                                        <input type="text" class="form-control" name="Next of kin">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="product-key" class="control-label">Phone
                                                            Number</label>
                                                        <input type="text" class="form-control" name="website"
                                                            placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="product-key" class="control-label">Email
                                                            Address</label>
                                                        <input type="email" class="form-control" name="website"
                                                            placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="product-key" class="control-label">Added
                                                            Date</label>
                                                        <input type="date" class="form-control" name="website"
                                                            placeholder="Added Date">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="product-key" class="control-label">Private</label>
                                                        <select class="form-select form-control"
                                                            aria-label="Default select example">
                                                            <option selected>VIP</option>
                                                            <option value="1">Standard</option>
                                                            <option value="2">Regular</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="product-key" class="control-label">HMO</label>
                                                        <select class="form-select form-control"
                                                            aria-label="Default select example">
                                                            <option selected>Choose HMO</option>
                                                            <option value="1">Standard</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="product-key" class="control-label">RETAINER</label>
                                                        <select class="form-select form-control"
                                                            aria-label="Default select example">
                                                            <option selected>Choose HMO</option>
                                                            <option value="1">Individual</option>
                                                            <option value="1">Family</option>
                                                            <option value="1">Organiazation</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary font-weight-bold"
                                                            id="add_vendorse" value="Add Patient">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <script src="assets/bundles/libscripts.bundle.js"></script>
                            <script src="assets/bundles/vendorscripts.bundle.js"></script>
                            <script src="assets/bundles/datatablescripts.bundle.js"></script>
                            <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
                            <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
                            <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
                            <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
                            <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
                            <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
                            <script src="assets/bundles/mainscripts.bundle.js"></script>
                            <script src="assets/js/pages/tables/jquery-datatable.js"></script>
                            <script src="../assets/vendor/toastr/toastr.js"></script>
                            <script>
                            $(document).ready(function() {

                                /* function to login user */
                                $("#add_vendors").on('submit', (function(e) {
                                    e.preventDefault();
                                    var btn = $("#add_vendorse");
                                    btn.attr('disabled', true).html(
                                        "<i class='fa fa-spin fa-spinner'></i> processing");
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/add_vendor",
                                        type: "POST",
                                        data: datas,
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success: (data) => {
                                            if (data.trim() == "done") {
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function() {
                                                        window.location.href =
                                                            'vendor-list';
                                                    }, 2000);
                                            } else {

                                            }
                                        },

                                    });
                                }));




                            })
                            </script>

</html>
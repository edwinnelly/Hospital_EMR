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
                                        class="fa fa-arrow-left"></i></a>My Profile</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">My Profile</li>
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
                                        <h2>My Profile</h2>
                                    </div>
                                    <div class="body">
                                        <form method="post" id="add_vendors">
                                            <div class="row clearfix">
                                                <div class="d-flex mb-3">
                                                    <div class="ml-3">
                                                        <img src="https://cdn.pixabay.com/photo/2013/07/13/12/07/avatar-159236_640.png"
                                                            alt="profile" height="100px">
                                                    </div>
                                                    <div class="ml-2 pt-2">
                                                        <p>Upload your photo.
                                                        </p>
                                                        <input type="file" id="fileInput" hidden>
                                                        <button class="btn btn-primary"
                                                            onclick="document.getElementById('fileInput').click()">Choose
                                                            File</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Doctor
                                                            Fullname</label>
                                                        <input type="text" name="vcode" id="text" class="form-control"
                                                            placeholder="Doctors Fullname">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Email</label>
                                                        <input type="email" id="text" name="vname" required
                                                            class="form-control" Placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Password</label>
                                                        <input type="text" id="text" name="streets" required
                                                            class="form-control" placeholder="Password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary font-weight-bold"
                                                            id="add_vendorse" value="Save Profile">
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
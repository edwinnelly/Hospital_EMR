<!doctype html>
<html lang="en">

<head>
    <?php include_once "component/meta_config.php"?>
</head>

<body class="theme-cyan">

    <!-- <?php include_once "component/page-loader.php"?> -->

    <div id="wrapper">
        <?php 
   include_once "component/header.php";
   include_once "component/sidebar.php"
   ?>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a>Diagnostics Suite</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Diagnostics Suite</li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">

                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header p-3">
                                <a href="patients-profile.php" class=""><i class="fa fa-arrow-left"></i></a>
                            </div>
                            <div class="body table-responsive">
                                <div class="mb-3">
                                    <button class=" btn btn-primary btn-sm " data-toggle="modal"
                                        data-target="#exampleModal">Add Lab Departments</button>
                                    <button class=" btn btn-success btn-sm float-right mt-2" data-toggle="modal"
                                        data-target="#exampleModal-2">Add New Test</button>
                                </div>
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th> #</th>
                                            <th>Lab Departments</th>
                                            <th>Lab Test</th>
                                            <th>Added Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="gradeA">
                                            <td></td>
                                            <td>Bianca Peters</td>
                                            <td>Hemoglobin A1C</td>
                                            <td></td>
                                            <td class="">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-primary dropdown-toggle " data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"
                                                        x-placement="top-start"
                                                        style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="edit-department.php">Edit </a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                           
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal start -->
        <!-- modal start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="title font-weight-bold" id="defaultModalLabel">Add Lab Department</h6>
                    </div>

                    <div class="modal-body">
                        <form id="postcatdel" method="post">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Department Name</label>
                                    <input type="text" placeholder="Department Name" class="form-control">
                                </div>
                            </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary font-weight-bold" id="" value="Add">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="title font-weight-bold" id="defaultModalLabel">Add Lab Test</h6>
                    </div>

                    <div class="modal-body">
                        <form id="postcatdel" method="post">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Test Title</label>
                                    <input type="text" placeholder="Department Name" class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Select Department</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Select Sample</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Select Container</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Select Restriction</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Amount</label>
                                    <input type="text" placeholder="Amount" class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="exampleFormControlTextarea1">Turn Around Time</label>
                                    <input type="text" placeholder="Department Name" class="form-control">
                                </div>
                            </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary font-weight-bold" id="" value="Add">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- modal end -->
        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
        </script>
        <script src="assets/bundles/libscripts.bundle.js"></script>
        <script src="assets/bundles/vendorscripts.bundle.js"></script>
        <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
        <script src="assets/bundles/mainscripts.bundle.js"></script>
        <script src="assets/js/pages/ui/dialogs.js"></script>
        <script src="assets/bundles/knob.bundle.js"></script>
        <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script>
        $(document).ready(function() {
            $(".mail-detail-expand").click(function() {
                $("#mail-detail-open").toggle();
            });
            $(".mail-back").click(function() {
                $("#mail-detail-open").toggle();
            });
        });
        </script>
        <script>
        $(function() {
            $('.knob').knob({
                draw: function() {
                    // "tron" case
                    if (this.$.data('skin') == 'tron') {

                        var a = this.angle(this.cv) // Angle
                            ,
                            sa = this.startAngle // Previous start angle
                            ,
                            sat = this.startAngle // Start angle
                            ,
                            ea // Previous end angle
                            , eat = sat + a // End angle
                            ,
                            r = true;

                        this.g.lineWidth = this.lineWidth;

                        this.o.cursor &&
                            (sat = eat - 0.3) &&
                            (eat = eat + 0.3);

                        if (this.o.displayPrevious) {
                            ea = this.startAngle + this.angle(this.value);
                            this.o.cursor &&
                                (sa = ea - 0.3) &&
                                (ea = ea + 0.3);
                            this.g.beginPath();
                            this.g.strokeStyle = this.previousColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea,
                                false);
                            this.g.stroke();
                        }

                        this.g.beginPath();
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat,
                            false);
                        this.g.stroke();

                        this.g.lineWidth = 2;
                        this.g.beginPath();
                        this.g.strokeStyle = this.o.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this
                            .lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                        this.g.stroke();

                        return false;
                    }
                }
            });
        });
        </script>

</body>

</html>
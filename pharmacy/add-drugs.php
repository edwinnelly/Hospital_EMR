<!doctype html>
<html lang="en">

<head>
    <?php include_once "component/meta_config.php"?>
</head>

<body class="theme-cyan">

    <?php include_once "component/page-loader.php"?>

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
                                        class="fa fa-arrow-left"></i></a>Inventory</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Inventory</li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">

                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <h5 class="p-3">Add New Drug</h5>
                            <div class="row p-3">
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Drug Name</label>
                                    <input type="text" placeholder="Acetaminophen" class="form-control">
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Drugs Class</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>CNS stimulant</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Drugs Suppliers</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>Roche</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Quatity</label>
                                    <input type="text" placeholder="100" class="form-control">
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Quatity Reminder</label>
                                    <input type="text" placeholder="100" class="form-control">
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Drugs Cost Price</label>
                                    <input type="text" placeholder="100" class="form-control">
                                </div>
                                <div class="col-sm-3 col-md-3 mb-3">
                                    <label for="exampleFormControlTextarea1">Selling Price</label>
                                    <input type="text" placeholder="100" class="form-control">
                                </div>
                                <div class="col-sm-3 col-md-3 mb-3">
                                    <label for="exampleFormControlTextarea1">Brand Name</label>
                                    <input type="text" placeholder="mod" class="form-control">
                                </div>
                                <div class="col-sm-3 col-md-3 mb-3">
                                    <label for="exampleFormControlTextarea1">Stock format</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>Choose Type</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-md-3 mb-3">
                                    <label for="exampleFormControlTextarea1">Drug Category</label>
                                    <select class="form-select form-select-sm form-control"
                                        aria-label=".form-select-sm example">
                                        <option selected>Drugs</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Production Date</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Expiration Date</label>
                                    <input type="Date" class="form-control">
                                </div>
                                <div class="col-sm-4 col-md-4 mb-3">
                                    <label for="exampleFormControlTextarea1">Drugs batch_no</label>
                                    <input type="text" placeholder="b1" class="form-control">
                                </div>
                            </div>
                            <div class="ml-3 mb-3">
                                <button type="submit" class="btn btn-primary btn-sm">Add Drugs</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
        </script>
        <script src="assets/bundles/libscripts.bundle.js"></script>
        <script src="assets/bundles/vendorscripts.bundle.js"></script>
        <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
        <script src="assets/bundles/mainscripts.bundle.js"></script>
        <script src="assets/js/pages/ui/dialogs.js"></script>
        <script src="assets/bundles/knob.bundle.js"></script>
        <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/bundles/datatablescripts.bundle.js"></script>
        <script src="assets/js/pages/tables/jquery-datatable.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
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
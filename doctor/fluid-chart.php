<!doctype html>
<html lang="en">

<head>
    <?php include_once "component/meta_config.php"?>
    <link rel="stylesheet" href="../trumbowyg/dist/ui/trumbowyg.min.css">

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
                                        class="fa fa-arrow-left"></i></a>Fluid Chart Data</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Fluid Chart Data</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="mail-inbox">
                                <?php include_once "component/patients_profile_sidebar.php"?>
                                <div class="mail-right">
                                    <div class="header d-flex align-center">
                                        <h2>Fluid Chart Data</h2>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-7 col-md-12">
                                            <div class="card mt-4 pb-4">
                                                <div class="d-flex">
                                                    <div class="image pl-3">
                                                        <img src="https://maxsomwares.com/doctor/img/log.png"
                                                            height="100px">
                                                    </div>
                                                    <div class="mt-2 ml-3">
                                                        <h4>Bianca</h4>
                                                        <button class="btn btn-success btn-sm" data-toggle="modal"
                                                            data-target="#exampleModal">Add Fluid</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-4 pl-4">
                                                <div class="mb-4">
                                                    <h6>Patients Fluid Chart</h6>
                                                    <small>Please Note This System Restart Every 24hr</small>
                                                </div>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        Total Fluid Input
                                                        <div class="agile-detail">
                                                            <a href="agile_board.html#"
                                                                class="float-right btn btn-xs bck">In</a>
                                                            <i class="fa fa-clock-o mt-2"></i>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        Total Fluid Out
                                                        <div class="agile-detail">
                                                            <a href="agile_board.html#"
                                                                class="float-right btn btn-xs bck">Out</a>
                                                            <i class="fa fa-clock-o mt-2"></i>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        Total Fluid Given
                                                        <div class="agile-detail">
                                                            <a href="agile_board.html#"
                                                                class="float-right btn btn-xs bck">Given</a>
                                                            <i class="fa fa-clock-o mt-2"></i>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="card mt-4 pl-4">
                                                <h6>Posted By Dr Nelly</h6>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        CC
                                                        <div class="agile-detail">
                                                            <a href="agile_board.html#"
                                                                class="float-right btn btn-xs bck">Delete Report</a>
                                                            <i class="fa fa-clock-o mt-2"></i>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        still testing
                                                        <div class="agile-detail">
                                                            <i class="fa fa-check-circle mt-2"></i>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        Total Fluid Input
                                                        <div class="agile-detail">
                                                            <i class="fa fa-check-circle mt-2 mr-1"></i> 100
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        Total Fluid Output
                                                        <div class="agile-detail">
                                                            <i class="fa fa-check-circle mt-2 mr-1"></i> 0
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="fluid-box mb-3">
                                                    <li class="success-element font-weight-bold ui-sortable-handle p-3"
                                                        id="task9">
                                                        Total Fluid Balanced
                                                        <div class="agile-detail">
                                                            <i class="fa fa-check-circle mt-2 mr-1"></i>100
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                        <?php include_once "component/patients-overview.php"?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="title font-weight-bold" id="defaultModalLabel">Add Fluid</h6>
                    </div>
                    <div class="modal-body bg-light">
                        <form id="postcatdel" method="post">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="" class="fw-bold mb-2">Fluid Name</label>
                                    <input type="text" placeholder="Fluid Name" class=" form-control" name="catname"
                                        id="catname" required>
                                    <input type="hidden" name="cpid" id="cpids">
                                </div>
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="" class="fw-bold mb-2">Input [Amount]</label>
                                    <input type="text" placeholder="Input[Amount]" class="form-control" name="catname"
                                        id="catname" required>
                                    <input type="hidden" name="cpid" id="cpids">
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <label for="" class="fw-bold mb-2">Output[Amount]</label>
                                    <input type="text" class="form-control" name="catname" id="catname"
                                        placeholder="Output[Amount]" required>
                                    <input type="hidden" name="cpid" id="cpids">
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <label for="" class="fw-bold mb-2">Comment</label>
                                    <input type="text" class="form-control" name="catname" id="catname"
                                        placeholder="Output[Amount]" required>
                                    <input type="hidden" name="cpid" id="cpids">
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <label for="" class="fw-bold mb-2">Date/Time</label>
                                    <input type="date" class="form-control" name="catname" id="catname" required>
                                    <input type="hidden" name="cpid" id="cpids">
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
        <script src="../trumbowyg/dist/trumbowyg.js"></script>
        <script>
        $('.trumbowyg-demo').trumbowyg();
        </script>
</body>

</html>
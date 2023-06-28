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
                                        class="fa fa-arrow-left"></i></a>Drug Administration</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Drug Administration</li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
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
                                        <h2>Drug Administration</h2>
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
                                                        <button class=" btn btn-primary btn-sm">Print</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-4 pl-4">
                                                <div class="body table-responsive">
                                                    <table
                                                        class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                                        <thead>
                                                            <tr>
                                                                <th> #</th>
                                                                <th>Drug Name</th>
                                                                <th>Frequency</th>
                                                                <th>Duration</th>
                                                                <th>Quantity</th>
                                                                <th>Added Date</th>
                                                                <th>Med Status</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>Yello</td>
                                                                <td>...</td>
                                                                <td>23</td>
                                                                <td>M</td>
                                                                <td>...</td>
                                                                <td>...</td>
                                                                <td>...</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button id="btnGroupDrop1" type="button"
                                                                            class="btn btn-primary dropdown-toggle "
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            Action
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="btnGroupDrop1"
                                                                            x-placement="top-start"
                                                                            style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                            <a class="dropdown-item" href="">Drug Chart
                                                                            </a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Discontinue Medication</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
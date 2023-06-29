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
                                        class="fa fa-arrow-left"></i></a>Vitals</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Vitals</li>
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
                                        <h2>Vitals</h2>
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
                                                        <a href="add-vitals-report.php"><button
                                                                class="btn btn-success btn-sm">Add Vitals
                                                                Report</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-4 pl-4">
                                                <div class="body table-responsive">
                                                    <table class="table small m-b-xs">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <strong>Weight</strong> -0Kg
                                                                </td>
                                                                <td>
                                                                    <strong>Height</strong> -0cm
                                                                </td>
                                                                <td>
                                                                    <strong> Blood Pressure</strong> -56mmHg
                                                                </td>
                                                                <td>
                                                                    <strong> Body Temperature</strong> -44°C
                                                                </td>
                                                                <td>
                                                                    <strong>Pulse Rate</strong> -4BPM
                                                                </td>
                                                                <td>
                                                                    <strong> Respiratory Rate</strong> -4cpm
                                                                </td>
                                                                <td>
                                                                    <strong> Oxygen Saturation</strong> -4%
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Random Blood Sugar</strong> -4mmol/L
                                                                </td>
                                                                <td>
                                                                    <strong>Abdominal Girth</strong> -4cm
                                                                </td>
                                                                <td>
                                                                    <strong> Fasting Blood Sugar</strong> -4mmol/L
                                                                </td>
                                                                <td>
                                                                    <strong> Head Circumference</strong> -4cm
                                                                </td>
                                                                <td>
                                                                    <strong> Chest Circumference</strong> -4cm
                                                                </td>
                                                                <td>
                                                                    <strong> Mac</strong> -4cm
                                                                </td>
                                                                <td>
                                                                    <strong> Subscapular Skinfold</strong> -4mm
                                                                </td>
                                                                <td>
                                                                    <strong> Subscapular Skinfold</strong> -4mm
                                                                </td>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <div class="social-footer">

                                                        <div class="social-comment">
                                                            <a href="" class="float-left mr-2">
                                                                <img alt="image"
                                                                    src="https://maxsomwares.com/doctor/bell.png"
                                                                    height="30px">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="">
                                                                    Additional Notes </a>
                                                                nil <br>

                                                                <small class="text-muted"> 2022-10-20 18:38:20</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer">
                                                        Posted By Dr Nelly eke <a
                                                            href="edit_vitals.php?aset=MQ==&amp;&amp;pid=1"> <button
                                                                class="btn btn-default btn-sm btn-rounded fa fa-edit"></button></a><span
                                                            class="fa fa-recycle cc" data-id="1"></span><span
                                                            class="pull-right font-weight-bold"
                                                            style="font-size: 14px;">2022-07-18 18:13:14</span>
                                                    </div>
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
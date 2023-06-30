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
                                        class="fa fa-arrow-left"></i></a> Vitals</h2>
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
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card profile-header">
                                                <div class="d-flex pt-4 mb-4">
                                                    <a href="vitals.php"><i
                                                            class="fa fa-arrow-left text-primary  pl-3"
                                                            aria-hidden="true"></i></a>
                                                    <span class="text-secondary ml-2 font-weight-bold ">Add
                                                        Vitals Report</span>
                                                </div>
                                                <form method="POST" id="submitForm" class="pl-3 pr-3">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Weight</label>
                                                            <input type="text" placeholder="" class="form-control" name="weight" required>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Height</label>
                                                            <input type="text" placeholder="" class="form-control" name="height" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Blood Pressure</label>
                                                            <input type="text" placeholder="" class="form-control" name="bp" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Body Temperature</label>
                                                            <input type="text" placeholder="" class="form-control" name="bt" required>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Heart Rate</label>
                                                            <input type="text" placeholder="" class="form-control" name="heartr" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Respirtory Rate</label>
                                                            <input type="text" placeholder="" class="form-control" name="r-rate" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Oxygen Saturation</label>
                                                            <input type="text" placeholder="" class="form-control" name="oxygens" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Random Blood Sugar</label>
                                                            <input type="text" placeholder="" class="form-control" name="randoms" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Abdominal Girth</label>
                                                            <input type="text" placeholder="" class="form-control" name="abdominalg" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Fasting Bood Sugar</label>
                                                            <input type="text" placeholder="" class="form-control" name="fasting_bs" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Head Circumference</label>
                                                            <input type="text" placeholder="" class="form-control" name="h_circumference" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Chest Circumference</label>
                                                            <input type="text" placeholder="" class="form-control" name="chest_c" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">MAC</label>
                                                            <input type="text" placeholder="" class="form-control" name="mac" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Subscapular Skinfold</label>
                                                            <input type="text" placeholder="" class="form-control" name="subscapular" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Triceps Skinfold</label>
                                                            <input type="text" placeholder="" class="form-control" name="triceps" required>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                                           <label class="text-secondary mb-2">Additional Notes</label>
                                                            <input type="text" placeholder="" class="form-control" name="addiitonal" id="additional" required>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <input type="file" placeholder="" class="form-control" name="files" id="fileInput" hidden>
                                                            <button onclick="document.getElementById('fileInput').click()" class="btn btn-primary">Upload Files</button>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3 ">
                                                          <input type="submit" value="Add Vital Report" class="btn btn-success float-right" id="reset-btn">
                                                        </div>
                                                        <input type="text" value="1" name="patient_id" hidden>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
        <script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script>
        $(function() {
            // validation needs name of the element
            $('#diagnosis').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
        </script>
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
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
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
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
                                        class="fa fa-arrow-left"></i></a> Encounters</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Encounters</li>
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
                                                <form action="">
                                                    <div class="d-flex pt-4">
                                                        <a href="encounter.php"><i
                                                                class="fa fa-arrow-left text-primary  pl-3"
                                                                aria-hidden="true"></i></a>
                                                                <span class="text-secondary ml-2 font-weight-bold ">Add Encounter Note</span>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 mb-3 pt-4">
                                                        <label>History</label>
                                                        <textarea class="form-control trumbowyg-demo"
                                                            placeholder="Leave a comment here"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 mb-3 pt-3">
                                                        <label>Examination</label>
                                                        <textarea class="form-control trumbowyg-demo"
                                                            placeholder="Leave a comment here"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 mb-3 pt-3">
                                                        <div class="form-group">
                                                            <label for="diagnosis">Diagnosis</label>
                                                            <br>
                                                            <select id="diagnosis" name="diagnosis[]"
                                                                class="multiselect multiselect-custom"
                                                                multiple="multiple" data-parsley-required=""
                                                                data-parsley-trigger-after-failure="change"
                                                                data-parsley-errors-container="#error-multiselect"
                                                                style="display: none;"
                                                                data-parsley-multiple="diagnosis[]">
                                                                <option value="cheese">Cheese</option>
                                                                <option value="tomatoes">Tomatoes</option>
                                                                <option value="mozarella">Mozzarella</option>
                                                                <option value="mushrooms">Mushrooms</option>
                                                                <option value="pepperoni">Pepperoni</option>
                                                                <option value="onions">Onions</option>
                                                            </select>
                                                            <p id="error-multiselect"></p>
                                                            <div class="f">
                                                                <button class="btn btn-success btn-sm mt-1">Add
                                                                    Diagnosis</button>
                                                                <button
                                                                    class="btn btn-success btn-sm mt-1 float-right">Add
                                                                    Ecounter Note</button>
                                                            </div>
                                                        </div>
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
        -->
        <script src="../trumbowyg/dist/trumbowyg.js"></script>
        <script>
        $('.trumbowyg-demo').trumbowyg();
        </script>
</body>

</html>
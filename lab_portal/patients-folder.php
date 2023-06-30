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
                                        class="fa fa-arrow-left"></i></a> Patients Profile</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Patients Profile</li>
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
                                        <h2>Patients Profile</h2>

                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-7 col-md-12">
                                            <div class="card profile-header align-center">
                                                <div class="body">
                                                    <div class="profile-image"> <img src="../assets/images/user.png"
                                                            class="rounded-circle" alt=""> </div>
                                                    <div>
                                                        <h4 class="m-b-0"><strong>Bianca </strong> Peters</h4>
                                                        <table class="table small m-b-xs">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Gender</strong> -
                                                                    </td>
                                                                    <td>
                                                                        <strong>Age</strong> -
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Marital Status</strong>-
                                                                    </td>
                                                                    <td>
                                                                        <strong>Phone</strong> -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Next Of Kin</strong> -
                                                                    </td>
                                                                    <td>
                                                                        <strong>Created Date</strong> -
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Info</h2>
                                                </div>
                                                <div class="body pl-3">
                                                    <small class="text-muted">Address: </small>
                                                    <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                                                    <div>
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021:0x4a501367f076adff!2sSan+Francisco,+CA,+USA!5e0!3m2!1sen!2sin!4v1522391841133"
                                                            width="100%" height="150" frameborder="0" style="border:0"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <hr>
                                                    <small class="text-muted">Email address: </small>
                                                    <p><a href="../../../../cdn-cgi/l/email-protection.html"
                                                            class="__cf_email__"
                                                            data-cfemail="fc91959f949d9990bc9b919d9590d29f9391">[email&#160;protected]</a>
                                                    </p>
                                                    <hr>
                                                    <small class="text-muted">Mobile: </small>
                                                    <p>+ 202-555-2828</p>
                                                    <hr>
                                                    <small class="text-muted">Birth Date: </small>
                                                    <p class="m-b-0">October 22th, 1990</p>
                                                    <hr>
                                                    <small class="text-muted">Social: </small>
                                                    <p><i class="fa fa-twitter m-r-5"></i> twitter.com/example</p>
                                                    <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/example</p>
                                                    <p><i class="fa fa-github m-r-5"></i> github.com/example</p>
                                                    <p><i class="fa fa-instagram m-r-5"></i> instagram.com/example</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Who to follow</h2>
                                                </div>
                                                <div class="body">
                                                    <ul class="right_chat list-unstyled">
                                                        <li class="online">
                                                            <a href="javascript:void(0);">
                                                                <div class="media">
                                                                    <img class="media-object "
                                                                        src="../assets/images/xs/avatar4.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="name">Chris Fox</span>
                                                                        <span class="message">Designer, Blogger</span>
                                                                        <span class="badge badge-outline status"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="online">
                                                            <a href="javascript:void(0);">
                                                                <div class="media">
                                                                    <img class="media-object "
                                                                        src="../assets/images/xs/avatar5.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="name">Joge Lucky</span>
                                                                        <span class="message">Java Developer</span>
                                                                        <span class="badge badge-outline status"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="offline">
                                                            <a href="javascript:void(0);">
                                                                <div class="media">
                                                                    <img class="media-object "
                                                                        src="../assets/images/xs/avatar2.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="name">Isabella</span>
                                                                        <span class="message">CEO, Thememakker</span>
                                                                        <span class="badge badge-outline status"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="offline">
                                                            <a href="javascript:void(0);">
                                                                <div class="media">
                                                                    <img class="media-object "
                                                                        src="../assets/images/xs/avatar1.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="name">Folisise Chosielie</span>
                                                                        <span class="message">Art director, Movie
                                                                            Cut</span>
                                                                        <span class="badge badge-outline status"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="online">
                                                            <a href="javascript:void(0);">
                                                                <div class="media">
                                                                    <img class="media-object "
                                                                        src="../assets/images/xs/avatar3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="name">Alexander</span>
                                                                        <span class="message">Writter, Mag Editor</span>
                                                                        <span class="badge badge-outline status"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
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

</body>

</html>
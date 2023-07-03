<?php
include "inc/site_controller.php";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mid doc | Dashboard v.2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6  {
            font-family: "Segoe UI", Arial, sans-serif;
        }
    </style>
</head>

<body>
<div id="wrapper">
    <?php
    include "inc/sidebar.php";
    ?>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <?php
            include "inc/header.php";
            ?>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">

                <div class="col-lg-3">
                    <div class="ibox ">

                        <div class="ibox-content">
                            <h1 class="no-margins font-weight-bold"><?= $all_count_patients;  ?></h1>
                            <div class="stat-percent font-bold text-success" style="
    margin: -9px;
"><img src="https://cdn-icons-png.flaticon.com/512/822/822143.png" height="40"> </div>
                            <small class="font-weight-bold">Total drugs</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="ibox ">

                        <div class="ibox-content">
                            <h1 class="no-margins font-weight-bold"><?= $all_count_patients;  ?></h1>
                            <div class="stat-percent font-bold text-success" style="
    margin: -9px;
"><img src="https://cdn-icons-png.flaticon.com/512/2937/2937361.png" height="40"> </div>
                            <small class="font-weight-bold">Out Of Stocks </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="ibox ">

                        <div class="ibox-content">
                            <h1 class="no-margins font-weight-bold"><?= $all_count_orders; ?></h1>
                            <div class="stat-percent font-bold text-success" style="
    margin: -9px;
"><img src="https://cdn-icons-png.flaticon.com/512/4320/4320365.png" height="40"> </div>
                            <small class="font-weight-bold">Expired Drugs</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="ibox ">

                        <div class="ibox-content">
                            <h1 class="no-margins font-weight-bold"><?= $all_count_completed;  ?></h1>
                            <div class="stat-percent font-bold text-success" style="
    margin: -9px;
"><img src="https://cdn-icons-png.flaticon.com/512/2937/2937192.png" height="40"> </div>
                            <small class="font-weight-bold">low stocked drugs</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">


                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Stocks</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content ibox-heading">
                                    <h3> Out Of Stocks</h3>
                                    <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.</small>
                                </div>
                                <div class="ibox-content">
                                    <div class="feed-activity-list">

                                        <div class="feed-element">
                                            <div>
                                                <small class="float-right text-navy">1m ago</small>
                                                <strong>Monica Smith</strong>
                                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div>
                                                <small class="float-right">2m ago</small>
                                                <strong>Jogn Angel</strong>
                                                <div>There are many variations of passages of Lorem Ipsum available</div>
                                                <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div>
                                                <small class="float-right">5m ago</small>
                                                <strong>Jesica Ocean</strong>
                                                <div>Contrary to popular belief, Lorem Ipsum</div>
                                                <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                                            </div>
                                        </div>


                                        <div class="feed-element">
                                            <div>
                                                <small class="float-right">5m ago</small>
                                                <strong>Gary Smith</strong>
                                                <div>200 Latin words, combined with a handful</div>
                                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-8">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>low stocked drugs</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content table-responsive">
                                    <table class="table table-hover no-margins">
                                        <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Date / Time</th>
                                            <th>Patients</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><small>Pending...</small></td>
                                            <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                            <td>Samantha</td>

                                        </tr>
                                        <tr>
                                            <td><span class="label label-warning">Canceled</span> </td>
                                            <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                            <td>Monica</td>

                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                            <td>John</td>

                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                            <td>Agnes</td>

                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                            <td>Janet</td>

                                        </tr>
                                        <tr>
                                            <td><span class="label label-primary">Completed</span> </td>
                                            <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                            <td>Amelia</td>

                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-o"></i> 12:08am</td>
                                            <td>Damian</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
        <?php
        include_once "inc/footer.php";
        ?>
    </div>

</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.spline.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="js/plugins/flot/jquery.flot.time.js"></script>

<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Jvectormap -->
<script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- EayPIE -->
<script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

<!-- Sparkline -->
<script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="js/demo/sparkline-demo.js"></script>

<script>
        //Log Out
        $(document).ready(function() {
            $("#log_out").click(function(){
                alert("hello test");
                //call ajax
                $.ajax({
                    url: "ajax/logout.php",
                    success: function(data){
                        alert(data);
                        toastr.success('Logging out.', '');
                        setTimeout(function(){
                            window.location.href="index.php";
                        }, 3000);
                    }
                });
            });
        });
</script>
</body>
</html>

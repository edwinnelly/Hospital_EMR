<?php
include_once "component/user_data.php";
$app = new controller;

?>
<!doctype html>
<html lang="en">
<head>
   <?php include_once "component/meta_config.php"?>
</head>
<body class="theme-blue">

<div id="wrapper">
    <?php
    require_once 'component/header.php';
    require_once 'component/sidebar.php';
    ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Welcome back, Doctor Edwom</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">You have 345  Item and 412 new Patients.</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px"
                                 data-line-Width="1" data-line-Color="#00c5dc" data-fill-Color="transparent">
                                3,5,1,6,5,4,8,3
                            </div>
                            <span>My Activities</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px"
                                 data-line-Width="1" data-line-Color="#f4516c" data-fill-Color="transparent">
                                4,6,3,2,5,6,5,4
                            </div>
                            <span>Pending Logs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>5 </h3>
                            <span>Total Drugs</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                            <div class="progress-bar" data-transitiongoal="64"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3> 65 </h3>
                            <span>Out Of Stocks</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                            <div class="progress-bar" data-transitiongoal="67"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>32 </h3>
                            <span>Expired Drugs</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                            <div class="progress-bar" data-transitiongoal="89"></div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>0 </h3>
                            <span>Low Stocked Drugs</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                            <div class="progress-bar" data-transitiongoal="68"></div>
                        </div>
                    </div>
                </div>
           
            </div>
            <!-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Lab Finances</h2>

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Total Daily Income</span>
                                    <h3 class="text-warning">₦3</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Total Monthly Income </span>
                                    <h3 class="text-info">₦500</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Total Yearly Income</span>
                                    <h3 class="text-success">₦1000</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Total Expenses</span>
                                    <h3 class="text-success">₦10000</h3>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>


            </div> -->
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Low Stocked Drugs</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th style="width:60px;">#</th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>Address</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><span class="badge badge-success">-</span></td>
                                        <td>-</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
            </div>
        </div>
    </div>
</div>

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<!--<script src="assets/bundles/jvectormap.bundle.js"></script>-->
<!--<script src="assets/bundles/morrisscripts.bundle.js"></script>-->
<script src="assets/bundles/knob.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index8.js"></script>
<script>
    const url = 'https://lentose.com/master/user_dir';
    const cacheOptions = {
        headers: {
            'Cache-Control': 'max-age=3600'
        }
    };

    fetch(new Request(url, cacheOptions))
        .then(response => {
            // Handle the response
        })
        .catch(error => {
            console.error(error);
        });
</script>
</body>
</html>
<!-- pending ones and released ones tis shoud be under patients folder -->
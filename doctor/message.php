<!doctype html>
<html lang="en">

<head>
    <?php include_once "component/meta_config.php"?>
</head>

<body class="theme-cyan">

    <?php include_once "component/page-loader.php" ?>
    <div id="wrapper">
        <?php 
      include_once "component/header.php";
      include_once "component/sidebar.php";
      ?>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a> Message</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Message</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card chat-app">
                            <div id="plist" class="people-list">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                                <ul class="list-unstyled chat-list mt-2 mb-0">
                                    <li class="clearfix">
                                        <img src="../assets/images/xs/avatar1.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>
                                            <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix active">
                                        <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Aiden Chavez</div>
                                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="../assets/images/xs/avatar3.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Mike Thomas</div>
                                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="../assets/images/xs/avatar7.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Christian Kelly</div>
                                            <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                                            </a>
                                            <div class="chat-about">
                                                <h6 class="m-b-0">Aiden Chavez</h6>
                                                <small>Last seen: 2 hours ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="m-b-0">
                                        <li class="clearfix">
                                            <div class="message-data text-right">
                                                <span class="message-data-time">10:10 AM, Today</span>
                                                <img src="../assets/images/xs/avatar7.jpg" alt="avatar">
                                            </div>
                                            <div class="message other-message float-right"> Hi Aiden, how are you? How
                                                is the project coming along? </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="message-data">
                                                <span class="message-data-time">10:12 AM, Today</span>
                                            </div>
                                            <div class="message my-message">Are we meeting today?</div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="message-data">
                                                <span class="message-data-time">10:15 AM, Today</span>
                                            </div>
                                            <div class="message my-message">Project has been already finished and I have
                                                results to show you.</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-message clearfix">
                                    <div class="input-group mb-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter text here...">
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
    <script src="assets/bundles/easypiechart.bundle.js"></script>
    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/pages/ui/dialogs.js"></script>
</body>

</html>
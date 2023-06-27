<!doctype html>
<html lang="en">

<head>
    <?php include_once "component/meta_config.php"?>
</head>

<body class="theme-cyan">

    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
            <p>Please wait...</p>
        </div>
    </div>

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
                                        class="fa fa-arrow-left"></i></a> Inbox</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">App</li>
                                <li class="breadcrumb-item active">Inbox</li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">

                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="mobile-left">
                                <a class="btn btn-primary toggle-email-nav collapsed" data-toggle="collapse"
                                    href="app-inbox.html#email-nav" role="button" aria-expanded="false"
                                    aria-controls="email-nav">
                                    <span class="btn-label">
                                        <i class="la la-bars"></i>
                                    </span>
                                    Menu
                                </a>
                            </div>
                            <div class="mail-inbox">
                                <div class="mail-left collapse" id="email-nav">
                                    <div class="mail-compose m-b-20">
                                        <a href="#" class="btn btn-danger btn-block">Patient Profile</a>
                                    </div>
                                    <div class="mail-side">
                                        <ul class="nav">
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Patients Dashboard</a>
                                            </li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Case Note</a></li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Visit/Appointments</a>
                                            </li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Diagnosis History</a>
                                            </li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Prescription</a></li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Drug Administration</a>
                                            </li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Lab Profile</a></li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Patient Bills</a></li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Patient Alert</a></li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Medical Reports</a></li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Discharge Summary</a>
                                            </li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Imaging/Attachment</a>
                                            </li>
                                            <h3 class="label">Extra Setting <a href="#" class="float-right m-r-10"
                                                    title="Extra Setting"></a></h3>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Discharge/Close</a>
                                            </li>
                                            <li class=""><a href="#"><i
                                                        class="fa fa-circle-o text-danger"></i>Seen/Back</a>
                                            </li>
                                        </ul>

                                        <h3 class="label">Labels <a href="app-inbox.html#" class="float-right m-r-10"
                                                title="Add New Labels"><i class="icon-plus"></i></a></h3>
                                        <ul class="nav">
                                            <li class="">
                                                <a href="javascript:void(0);"><i
                                                        class="fa fa-circle text-danger"></i>Web Design<span
                                                        class="badge badge-primary float-right">5</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><i
                                                        class="fa fa-circle text-info"></i>Recharge</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><i
                                                        class="fa fa-circle text-dark"></i>Paypal</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><i
                                                        class="fa fa-circle text-primary"></i>Family</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mail-right">
                                    <div class="header d-flex align-center">
                                        <h2>Inbox</h2>
                                        <form class="ml-auto">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Mail"
                                                    aria-label="Search Mail" aria-describedby="search-mail">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="search-mail"><i
                                                            class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mail-action clearfix">
                                        <div class="pull-left">
                                            <div class="fancy-checkbox d-inline-block">
                                                <label>
                                                    <input class="select-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="btn-group">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-secondary btn-sm hidden-sm">Refresh</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-secondary btn-sm hidden-sm">Archive</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-secondary btn-sm">Trash</a>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Tags</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">Tag 1</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Tag 2</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Tag 3</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">More</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Mark as
                                                        unread</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right ml-auto">
                                            <div class="pagination-email d-flex">
                                                <p>1-50/295</p>
                                                <div class="btn-group m-l-20">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"><i
                                                            class="fa fa-angle-left"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"><i
                                                            class="fa fa-angle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-list">
                                        <ul class="list-unstyled">
                                            <li class="clearfix">
                                                <div class="mail-detail-left">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:void(0);" class="mail-star active"><i
                                                            class="fa fa-star"></i></a>
                                                </div>
                                                <div class="mail-detail-right">
                                                    <h6 class="sub"><a href="javascript:void(0);"
                                                            class="mail-detail-expand">Herman Beck</a> <span
                                                            class="badge badge-default mb-0">Marketing</span></h6>
                                                    <p class="dep"><span class="m-r-10">[ThemeForest]</span>Lorem Ipsum
                                                        is simply dumm dummy text of the printing and typesetting
                                                        industry.</p>
                                                    <span class="time">23 Jun</span>
                                                </div>
                                                <div class="hover-action">
                                                    <a class="btn btn-warning mr-2" href="javascript:void(0);"><i
                                                            class="fa fa-archive"></i></a>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="mail-detail-left">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:void(0);" class="mail-star"><i
                                                            class="fa fa-star-o"></i></a>
                                                </div>
                                                <div class="mail-detail-right">
                                                    <h6 class="sub"><a href="javascript:void(0);"
                                                            class="mail-detail-expand">Mary Adams</a></h6>
                                                    <p class="dep"><span class="m-r-10">[Support]</span>There are many
                                                        variations of passages of Lorem Ipsum available, but the
                                                        majority</p>
                                                    <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                                                </div>
                                                <div class="hover-action">
                                                    <a class="btn btn-warning mr-2" href="javascript:void(0);"><i
                                                            class="fa fa-archive"></i></a>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                            <li class="clearfix unread">
                                                <div class="mail-detail-left">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:void(0);" class="mail-star"><i
                                                            class="fa fa-star-o"></i></a>
                                                </div>
                                                <div class="mail-detail-right">
                                                    <h6 class="sub"><a href="javascript:void(0);"
                                                            class="mail-detail-expand">June Lane</a><span
                                                            class="badge badge-info">Family</span></h6>
                                                    <p class="dep"><span class="m-r-10">[Support]</span>Lorem Ipsum is
                                                        simply dummy text of the printing and typesetting industry.</p>
                                                    <span class="time">20 Jun</span>
                                                </div>
                                                <div class="hover-action">
                                                    <a class="btn btn-warning mr-2" href="javascript:void(0);"><i
                                                            class="fa fa-archive"></i></a>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="mail-detail-left">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:void(0);" class="mail-star"><i
                                                            class="fa fa-star-o"></i></a>
                                                </div>
                                                <div class="mail-detail-right">
                                                    <h6 class="sub"><a href="javascript:void(0);"
                                                            class="mail-detail-expand">Gary Camara</a></h6>
                                                    <p class="dep"><span class="m-r-10">[CSS]</span>There are many
                                                        variations of passages of Lorem Ipsum available, but the
                                                        majority</p>
                                                    <span class="time">14 Jun</span>
                                                </div>
                                                <div class="hover-action">
                                                    <a class="btn btn-warning mr-2" href="javascript:void(0);"><i
                                                            class="fa fa-archive"></i></a>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="mail-detail-left">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:void(0);" class="mail-star"><i
                                                            class="fa fa-star-o"></i></a>
                                                </div>
                                                <div class="mail-detail-right">
                                                    <h6 class="sub"><a href="javascript:void(0);"
                                                            class="mail-detail-expand">Frank Camly</a><span
                                                            class="badge badge-danger">Themeforest</span></h6>
                                                    <p class="dep"><span class="m-r-10">[WrapTheme]</span>Lorem Ipsum is
                                                        simply dumm dummy text of the printing and typesetting industry.
                                                    </p>
                                                    <span class="time"><i class="fa fa-paperclip"></i> 11 Jun</span>
                                                </div>
                                                <div class="hover-action">
                                                    <a class="btn btn-warning mr-2" href="javascript:void(0);"><i
                                                            class="fa fa-archive"></i></a>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="mail-detail-left">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:void(0);" class="mail-star"><i
                                                            class="fa fa-star-o"></i></a>
                                                </div>
                                                <div class="mail-detail-right">
                                                    <h6 class="sub"><a href="javascript:void(0);"
                                                            class="mail-detail-expand">Gary Camara</a><span
                                                            class="badge badge-success">Work</span></h6>
                                                    <p class="dep"><span class="m-r-10">[Awwwards]</span>There are many
                                                        variations of passages of Lorem Ipsum available, but the
                                                        majority</p>
                                                    <span class="time">29 May</span>
                                                </div>
                                                <div class="hover-action">
                                                    <a class="btn btn-warning mr-2" href="javascript:void(0);"><i
                                                            class="fa fa-archive"></i></a>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mail-detail-full" id="mail-detail-open" style="display: none;">
                                        <div class="mail-action clearfix">
                                            <div class="pull-left">
                                                <div class="fancy-checkbox d-inline-block">
                                                    <label>
                                                        <input class="select-all" type="checkbox" name="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-outline-secondary btn-sm hidden-sm">Refresh</a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-outline-secondary btn-sm hidden-sm">Archive</a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-outline-secondary btn-sm">Trash</a>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Tags</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">Tag 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Tag 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Tag 3</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">More</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark as
                                                            read</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark as
                                                            unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                                        <div role="separator" class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pull-right ml-auto">
                                                <a href="javascript:void(0);"
                                                    class="mail-back btn btn-outline-secondary btn-sm"><i
                                                        class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="m-r-20"><img src="../assets/images/sm/avatar1.jpg"
                                                            alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted m-r-5">From:</strong><a
                                                            class="text-default" href="javascript:void(0);"><span
                                                                class="__cf_email__"
                                                                data-cfemail="5a33343c351a2e323f373f373b31313f2874393537">[email&#160;protected]</span></a>
                                                        <span class="text-muted text-sm float-right">12:48,
                                                            23.06.2018</span>
                                                    </p>
                                                    <p class="mb-0"><strong class="text-muted m-r-5">To:</strong>Me
                                                        <small class="text-muted float-right"><i
                                                                class="zmdi zmdi-attachment m-r-5"></i>(2 files, 89.2
                                                            KB)</small>
                                                    </p>
                                                    <p class="mb-0"><strong class="text-muted m-r-5">CC:</strong><a
                                                            class="text-default" href="javascript:void(0);"><span
                                                                class="__cf_email__"
                                                                data-cfemail="84e9e5ede8c4f0ece1e9e1e9e5efefe1f6aae7ebe9">[email&#160;protected]</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged.</p>
                                            <p>printing and typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrnturies, but also the leap into electronic
                                                typesetting, remaining essentially unchanged.</p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
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
</body>

</html>
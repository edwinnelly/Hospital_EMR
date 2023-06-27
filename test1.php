
<!doctype html>
<html lang="en">
<head>
    <title>:: Lucid :: Inbox</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css" />

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/inbox.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-cyan">

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>
    </div>
</div>

<div id="wrapper">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <div class="navbar-brand">
                <a href="index.html"><img src="../assets/images/logo.svg" alt="Lucid Logo" class="img-responsive logo"></a>
            </div>
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="file-dashboard.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="fa fa-folder-open-o"></i></a>
                        </li>
                        <li>
                            <a href="app-calendar.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
                        </li>
                        <li>
                            <a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                        </li>
                        <li>
                            <a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                            <ul class="dropdown-menu user-menu menu-icon">
                                <li class="menu-heading">ACCOUNT SETTINGS</li>
                                <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                                <li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="page-login.html" class="icon-menu"><i class="icon-login"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alizee Thomas</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>Sales</small>
                        <h6>456</h6>
                    </li>
                    <li class="col-4">
                        <small>Order</small>
                        <h6>1350</h6>
                    </li>
                    <li class="col-4">
                        <small>Revenue</small>
                        <h6>$2.13B</h6>
                    </li>
                </ul>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="app-inbox.html#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="app-inbox.html#Chat"><i class="icon-book-open"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="app-inbox.html#setting"><i class="icon-settings"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="app-inbox.html#question"><i class="icon-question"></i></a></li>
            </ul>

            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">
                            <li>
                                <a href="app-inbox.html#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
                                <ul>
                                    <li><a href="index.html">Analytical</a></li>
                                    <li><a href="index2.html">Demographic</a></li>
                                    <li><a href="index3.html">Hospital</a></li>
                                    <li><a href="index4.html">University</a></li>
                                    <li><a href="index5.html">Real Estate</a></li>
                                    <li><a href="index6.html">Project</a></li>
                                    <li><a href="index7.html">Cryptocurrency</a></li>
                                    <li><a href="index8.html">eCommerce</a></li>
                                    <li><a href="index9.html">IoT</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="app-inbox.html#App" class="has-arrow"><i class="icon-grid"></i> <span>App</span></a>
                                <ul>
                                    <li class="active"><a href="app-inbox.html">Inbox</a></li>
                                    <li><a href="app-chat.html">Chat</a></li>
                                    <li><a href="app-calendar.html">Calendar</a></li>
                                    <li><a href="app-contact.html">Contact list</a></li>
                                    <li><a href="app-contact-grid.html">Contact Card <span class="badge badge-warning float-right">New</span></a></li>
                                    <li><a href="app-taskboard.html">Taskboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#FileManager" class="has-arrow"><i class="icon-folder"></i> <span>File Manager</span></a>
                                <ul>
                                    <li><a href="file-dashboard.html">Dashboard</a></li>
                                    <li><a href="file-documents.html">Documents</a></li>
                                    <li><a href="file-media.html">Media</a></li>
                                    <li><a href="file-images.html">Images</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#Blog" class="has-arrow"><i class="icon-globe"></i> <span>Blog</span></a>
                                <ul>
                                    <li><a href="blog-dashboard.html">Dashboard</a></li>
                                    <li><a href="blog-post.html">New Post</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-details.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>UI Elements</span></a>
                                <ul>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-icons.html">Icons</a></li>
                                    <li><a href="ui-notifications.html">Notifications</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-dialogs.html">Dialogs</a></li>
                                    <li><a href="ui-list-group.html">List Group</a></li>
                                    <li><a href="ui-media-object.html">Media Object</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                                    <li><a href="ui-treeview.html">Treeview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#Widgets" class="has-arrow"><i class="icon-puzzle"></i> <span>Widgets</span></a>
                                <ul>
                                    <li><a href="widgets-statistics.html">Statistics</a></li>
                                    <li><a href="widgets-data.html">Data</a></li>
                                    <li><a href="widgets-chart.html">Chart</a></li>
                                    <li><a href="widgets-weather.html">Weather</a></li>
                                    <li><a href="widgets-social.html">Social</a></li>
                                    <li><a href="widgets-blog.html">Blog</a></li>
                                    <li><a href="widgets-ecommerce.html">eCommerce</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#Authentication" class="has-arrow"><i class="icon-lock"></i> <span>Authentication</span></a>
                                <ul>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                    <li><a href="page-404.html">Page 404</a></li>
                                    <li><a href="page-403.html">Page 403</a></li>
                                    <li><a href="page-500.html">Page 500</a></li>
                                    <li><a href="page-503.html">Page 503</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#Pages" class="has-arrow"><i class="icon-docs"></i> <span>Pages</span></a>
                                <ul>
                                    <li><a href="page-blank.html">Blank Page</a> </li>
                                    <li><a href="page-profile.html">Profile <span class="badge badge-default float-right">v1</span></a></li>
                                    <li><a href="page-profile2.html">Profile <span class="badge badge-warning float-right">v2</span></a></li>
                                    <li><a href="page-gallery.html">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                    <li><a href="page-gallery2.html">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                    <li><a href="page-timeline.html">Timeline</a></li>
                                    <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-invoices.html">Invoices</a></li>
                                    <li><a href="page-invoices2.html">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
                                    <li><a href="page-search-results.html">Search Results</a></li>
                                    <li><a href="page-helper-class.html">Helper Classes</a></li>
                                    <li><a href="page-teams-board.html">Teams Board</a></li>
                                    <li><a href="page-projects-list.html">Projects List</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-testimonials.html">Testimonials</a></li>
                                    <li><a href="page-faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Forms</span></a>
                                <ul>
                                    <li><a href="forms-validation.html">Form Validation</a></li>
                                    <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                    <li><a href="forms-basic.html">Basic Elements</a></li>
                                    <li><a href="forms-wizard.html">Form Wizard</a></li>
                                    <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>

                                    <li><a href="forms-cropping.html">Image Cropping</a></li>
                                    <li><a href="forms-summernote.html">Summernote</a></li>
                                    <li><a href="forms-editors.html">CKEditor</a></li>
                                    <li><a href="forms-markdown.html">Markdown</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#Tables" class="has-arrow"><i class="icon-tag"></i> <span>Tables</span></a>
                                <ul>
                                    <li><a href="table-basic.html">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-normal.html">Normal Tables</a> </li>
                                    <li><a href="table-jquery-datatable.html">Jquery Datatables</a> </li>
                                    <li><a href="table-editable.html">Editable Tables</a> </li>
                                    <li><a href="table-color.html">Tables Color</a> </li>
                                    <li><a href="table-filter.html">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-dragger.html">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#charts" class="has-arrow"><i class="icon-bar-chart"></i> <span>Charts</span></a>
                                <ul>
                                    <li><a href="chart-morris.html">Morris</a> </li>
                                    <li><a href="chart-flot.html">Flot</a> </li>
                                    <li><a href="chart-chartjs.html">ChartJS</a> </li>
                                    <li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-peity.html">Peity</a></li>
                                    <li><a href="chart-c3.html">C3 Charts</a></li>
                                    <li><a href="chart-gauges.html">Gauges</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                                <ul>
                                    <li><a href="map-google.html">Google Map</a></li>
                                    <li><a href="map-yandex.html">Yandex Map</a></li>
                                    <li><a href="map-jvectormap.html">jVector Map</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="app-inbox.html#menu-level-1" class="has-arrow"><i class="icon-tag"></i> <span>Menu Level 1</span></a>
                                <ul>
                                    <li>
                                        <a href="app-inbox.html#menu-level-2" class="has-arrow">Menu Level 2</a>
                                        <ul>
                                            <li><a href="app-inbox.html#">Link 1</a></li>
                                            <li><a href="app-inbox.html#">Link 2</a></li>
                                            <li><a href="app-inbox.html#">Link 3</a></li>
                                            <li><a href="app-inbox.html#">Link 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane p-l-15 p-r-15" id="Chat">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="right_chat list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
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
                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
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
                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
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
                                    <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie</span>
                                        <span class="message">Art director, Movie Cut</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
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
                <div class="tab-pane p-l-15 p-r-15" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="cyan" class="active">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                            <span>Blush</span>
                        </li>
                    </ul>
                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Report Panel Usag</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Email Redirect</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Auto Updates</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane p-l-15 p-r-15" id="question">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="list-unstyled question">
                        <li class="menu-heading">HOW-TO</li>
                        <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                        <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                        <li><a href="javascript:void(0);">Website Analytics</a></li>
                        <li class="menu-heading">ACCOUNT</li>
                        <li><a href="javascript:void(0);">Cearet New Account</a></li>
                        <li><a href="javascript:void(0);">Change Password?</a></li>
                        <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                        <li class="menu-heading">BILLING</li>
                        <li><a href="javascript:void(0);">Payment info</a></li>
                        <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                        <li class="menu-button m-t-30">
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Inbox</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc" data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c" data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="mobile-left">
                            <a class="btn btn-primary toggle-email-nav collapsed" data-toggle="collapse" href="app-inbox.html#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
<span class="btn-label">
<i class="la la-bars"></i>
</span>
                                Menu
                            </a>
                        </div>
                        <div class="mail-inbox">
                            <div class="mail-left collapse" id="email-nav">
                                <div class="mail-compose m-b-20">
                                    <a href="app-compose.html" class="btn btn-danger btn-block">Compose</a>
                                </div>
                                <div class="mail-side">
                                    <ul class="nav">
                                        <li class="active"><a href="javascript:void(0);"><i class="icon-envelope"></i>Inbox<span class="badge badge-primary float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Sent</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draft<span class="badge badge-info float-right">3</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>Outbox</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-star"></i>Starred<span class="badge badge-warning float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-trash"></i>Trash<span class="badge badge-danger float-right">9</span></a></li>
                                    </ul>
                                    <h3 class="label">Labels <a href="app-inbox.html#" class="float-right m-r-10" title="Add New Labels"><i class="icon-plus"></i></a></h3>
                                    <ul class="nav">
                                        <li class="active">
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-danger"></i>Web Design<span class="badge badge-primary float-right">5</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-info"></i>Recharge</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-dark"></i>Paypal</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle text-primary"></i>Family</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mail-right">
                                <div class="header d-flex align-center">
                                    <h2>Inbox</h2>
                                    <form class="ml-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Mail" aria-label="Search Mail" aria-describedby="search-mail">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
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
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Refresh</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Archive</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm">Trash</a>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tags</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Tag 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Tag 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Tag 3</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as unread</a>
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
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-angle-left"></i></button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-angle-right"></i></button>
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
                                                <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="mail-detail-right">
                                                <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Herman Beck</a> <span class="badge badge-default mb-0">Marketing</span></h6>
                                                <p class="dep"><span class="m-r-10">[ThemeForest]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                                <span class="time">23 Jun</span>
                                            </div>
                                            <div class="hover-action">
                                                <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="mail-detail-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="mail-detail-right">
                                                <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Mary Adams</a></h6>
                                                <p class="dep"><span class="m-r-10">[Support]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                                <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                                            </div>
                                            <div class="hover-action">
                                                <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                        </li>
                                        <li class="clearfix unread">
                                            <div class="mail-detail-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="mail-detail-right">
                                                <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">June Lane</a><span class="badge badge-info">Family</span></h6>
                                                <p class="dep"><span class="m-r-10">[Support]</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <span class="time">20 Jun</span>
                                            </div>
                                            <div class="hover-action">
                                                <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="mail-detail-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="mail-detail-right">
                                                <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Gary Camara</a></h6>
                                                <p class="dep"><span class="m-r-10">[CSS]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                                <span class="time">14 Jun</span>
                                            </div>
                                            <div class="hover-action">
                                                <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="mail-detail-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="mail-detail-right">
                                                <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Frank Camly</a><span class="badge badge-danger">Themeforest</span></h6>
                                                <p class="dep"><span class="m-r-10">[WrapTheme]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                                <span class="time"><i class="fa fa-paperclip"></i> 11 Jun</span>
                                            </div>
                                            <div class="hover-action">
                                                <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="mail-detail-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="mail-detail-right">
                                                <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Gary Camara</a><span class="badge badge-success">Work</span></h6>
                                                <p class="dep"><span class="m-r-10">[Awwwards]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                                <span class="time">29 May</span>
                                            </div>
                                            <div class="hover-action">
                                                <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
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
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Refresh</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Archive</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm">Trash</a>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tags</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">Tag 1</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Tag 2</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Tag 3</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Mark as unread</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right ml-auto">
                                            <a href="javascript:void(0);" class="mail-back btn btn-outline-secondary btn-sm"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="detail-header">
                                        <div class="media">
                                            <div class="float-left">
                                                <div class="m-r-20"><img src="../assets/images/sm/avatar1.jpg" alt=""></div>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-0"><strong class="text-muted m-r-5">From:</strong><a class="text-default" href="javascript:void(0);"><span class="__cf_email__" data-cfemail="5a33343c351a2e323f373f373b31313f2874393537">[email&#160;protected]</span></a> <span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                <p class="mb-0"><strong class="text-muted m-r-5">To:</strong>Me <small class="text-muted float-right"><i class="zmdi zmdi-attachment m-r-5"></i>(2 files, 89.2 KB)</small></p>
                                                <p class="mb-0"><strong class="text-muted m-r-5">CC:</strong><a class="text-default" href="javascript:void(0);"><span class="__cf_email__" data-cfemail="84e9e5ede8c4f0ece1e9e1e9e5efefe1f6aae7ebe9">[email&#160;protected]</span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-cnt">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrnturies, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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

<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
<script>
    $(document).ready(function(){
        $(".mail-detail-expand").click(function(){
            $("#mail-detail-open").toggle();
        });
        $(".mail-back").click(function(){
            $("#mail-detail-open").toggle();
        });
    });
</script>
</body>
</html>
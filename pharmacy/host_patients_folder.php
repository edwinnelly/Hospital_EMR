<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
$get_asset_id = base64_decode($add_user->get_request('aset'));
$patients_profile = $add_user->edit_patients($hos_key,$get_asset_id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patient profile | Information</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet"> <style>
        body {
            /*font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;*/
            font-size: 14px;
            font-family: 'Outfit', sans-serif;
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
                <div class="col-lg-2">
                    <?php
                    include_once "inc/casenote_menu.php";
                    ?>
                </div>
                <div class="col-lg-10 animated fadeInRight">
                    <div class="mail-box-header">

                        <h2>
                            <h3 class="font-weight-bold">Hospital  / Folder Information</h3>
                            <span class="text-danger">User quick setup</span>
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group float-right">

                            </div>

                        </div>
                    </div>


                    <div class="wrapper wrapper-content animated fadeInRight">


                        <div class="row m-b-lg m-t-lg">
                            <div class="col-md-6">

                                <div class="profile-image">
                                    <img src="http://localhost/medical/doctor/img/log.png" class="rounded-circle circle-border m-b-md" alt="profile">
                                </div>
                                <div class="profile-info">
                                    <div class="">
                                        <div>
                                            <h2 class="no-margins" style="text-transform: capitalize">
                                               <?= $patients_profile->patient_name;  ?>
                                            </h2>
                                            <h4>Founder of Groupeq</h4>
                                            <small>
                                                There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form Ipsum available.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <table class="table small m-b-xs">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold">Blood Pressure</span> <strong class="text-danger">160/80</strong>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">Blood Pressure</span> <strong class="text-danger">160/80</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold">Blood Pressure</span> <strong class="text-danger">80</strong>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">Heart Rate</span> <strong class="text-danger">160/80</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold">Age</span> <strong class="text-danger">16</strong>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">Sex</span> <strong class="text-danger">Male</strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>
                        <div class="row">

                            <div class="col-lg-3">

                                <div class="ibox">
                                    <div class="ibox-content">
                                        <h3>About Alex Smith</h3>

                                        <p class="small">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have
                                            suffered alteration in some form, by injected humour, or randomised words which don't.
                                            <br>
                                            <br>
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing
                                        </p>

                                        <p class="small font-bold">
                                            <span><i class="fa fa-circle text-navy"></i> Online status</span>
                                        </p>

                                    </div>
                                </div>

                                <div class="ibox">
                                    <div class="ibox-content">
                                        <h3>Followers and friends</h3>
                                        <p class="small">
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing
                                        </p>
                                        <div class="user-friends">
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a3.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a4.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a5.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a6.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a7.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a8.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="ibox">
                                    <div class="ibox-content">
                                        <h3>Personal friends</h3>
                                        <ul class="list-unstyled file-list">
                                            <li><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
                                            <li><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                                            <li><a href=""><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                                            <li><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                                            <li><a href=""><i class="fa fa-file-powerpoint-o"></i> Presentation.pptx</a></li>
                                            <li><a href=""><i class="fa fa-file"></i> 10_08_2015.docx</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ibox">
                                    <div class="ibox-content">
                                        <h3>Private message</h3>

                                        <p class="small">
                                            Send private message to Alex Smith
                                        </p>

                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="email" class="form-control" placeholder="Message subject">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                                        </div>
                                        <button class="btn btn-primary btn-block">Send</button>

                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-5">

                                <div class="social-feed-box">

                                    <div class="float-right social-action dropdown">
                                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                        </button>
                                        <ul class="dropdown-menu m-t-xs">
                                            <li><a href="profile_2.html#">Config</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-avatar">
                                        <a href="" class="float-left">
                                            <img alt="image" src="img/a1.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a href="profile_2.html#">
                                                Andrew Williams
                                            </a>
                                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="social-body">
                                        <p>
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                            in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                            default model text.
                                        </p>

                                        <div class="btn-group">
                                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                                        </div>
                                    </div>
                                    <div class="social-footer">
                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="img/a1.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="profile_2.html#">
                                                    Andrew Williams
                                                </a>
                                                Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                                <br>
                                                <a href="profile_2.html#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                                <small class="text-muted">12.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="img/a2.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="profile_2.html#">
                                                    Andrew Williams
                                                </a>
                                                Making this the first true generator on the Internet. It uses a dictionary of.
                                                <br>
                                                <a href="profile_2.html#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                                <small class="text-muted">10.07.2014</small>
                                            </div>
                                        </div>

                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="img/a3.jpg">
                                            </a>
                                            <div class="media-body">
                                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="social-feed-box">

                                    <div class="float-right social-action dropdown">
                                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                        </button>
                                        <ul class="dropdown-menu m-t-xs">
                                            <li><a href="profile_2.html#">Config</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-avatar">
                                        <a href="" class="float-left">
                                            <img alt="image" src="img/a6.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a href="profile_2.html#">
                                                Andrew Williams
                                            </a>
                                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="social-body">
                                        <p>
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                            in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                            default model text.
                                        </p>
                                        <p>
                                            Lorem Ipsum as their
                                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                            in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                            default model text.
                                        </p>
                                        <img src="img/gallery/3.jpg" class="img-fluid">
                                        <div class="btn-group">
                                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                                        </div>
                                    </div>
                                    <div class="social-footer">
                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="img/a1.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="profile_2.html#">
                                                    Andrew Williams
                                                </a>
                                                Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                                <br>
                                                <a href="profile_2.html#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                                <small class="text-muted">12.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="img/a2.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="profile_2.html#">
                                                    Andrew Williams
                                                </a>
                                                Making this the first true generator on the Internet. It uses a dictionary of.
                                                <br>
                                                <a href="profile_2.html#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                                <small class="text-muted">10.07.2014</small>
                                            </div>
                                        </div>

                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="img/a8.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="profile_2.html#">
                                                    Andrew Williams
                                                </a>
                                                Making this the first true generator on the Internet. It uses a dictionary of.
                                                <br>
                                                <a href="profile_2.html#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                                <small class="text-muted">10.07.2014</small>
                                            </div>
                                        </div>

                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="img/a3.jpg">
                                            </a>
                                            <div class="media-body">
                                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>




                            </div>
                            <div class="col-lg-4 m-b-lg">
                                <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-briefcase"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>Meeting</h2>
                                            <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.
                                            </p>
                                            <a href="profile_2.html#" class="btn btn-sm btn-primary"> More info</a>
                                            <span class="vertical-date">
                                        Today <br>
                                        <small>Dec 24</small>
                                    </span>
                                        </div>
                                    </div>

                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon blue-bg">
                                            <i class="fa fa-file-text"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>Send documents to Mike</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                            <a href="profile_2.html#" class="btn btn-sm btn-success"> Download document </a>
                                            <span class="vertical-date">
                                        Today <br>
                                        <small>Dec 24</small>
                                    </span>
                                        </div>
                                    </div>

                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon lazur-bg">
                                            <i class="fa fa-coffee"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>Coffee Break</h2>
                                            <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
                                            <a href="profile_2.html#" class="btn btn-sm btn-info">Read more</a>
                                            <span class="vertical-date"> Yesterday <br><small>Dec 23</small></span>
                                        </div>
                                    </div>

                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon yellow-bg">
                                            <i class="fa fa-phone"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>Phone with Jeronimo</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                            <span class="vertical-date">Yesterday <br><small>Dec 23</small></span>
                                        </div>
                                    </div>

                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-comments"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>Chat with Monica and Sandra</h2>
                                            <p>Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
                                            <span class="vertical-date">Yesterday <br><small>Dec 23</small></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>




                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $hos_key; ?>" id="host_key">
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

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/js_hospital.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script src="js/plugins/dataTables/datatables.min.js"></script>


<script>

    // Upgrade button class name
    $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [

            ]

        });

    });

</script>

<script>
    $(document).ready(function () {

        $("#add_dpt").click(function () {
            // get the para from data-
            const department_name = $("#department_name").val();
            const host_key = $("#host_key").val();

            if(department_name=== ''){
                swal("Not allowed !", "Department Name Needed!", "error");
            }else{
                $.ajax({
                    url: "ajax/add_lab_dpt.php",
                    method: "GET",
                    data: {
                        department_name: department_name,host_key:host_key
                    },
                    success: function (data) {
                        swal("Good job!", "Lab Department Created!", "success");
                        setTimeout(
                            function () {
                                location.reload();
                            }, 3000);

                        if (data.trim() == 'done') {

                        }
                    }
                });
            }

        });


        $("#add_lab_test").click(function () {
            // get the para from data-
            const testname = $("#testname").val();
            const dpt = $("#dpt").val();
            const restri = $("#restri").val();
            const amount = $("#amount").val();
            const container = $("#container").val();
            const sample = $("#sample").val();
            const tat = $("#tat").val();
            const host_key = $("#host_key").val();

            if(testname=== ''){
                swal("Empty fields!", "Try Again!", "error");
            }else{
                $.ajax({
                    url: "ajax/add_test_list.php",
                    method: "GET",
                    data: {
                        testname: testname,dpt:dpt,host_key:host_key,restri:restri,amount:amount,container:container,sample:sample,tat:tat
                    },
                    success: function (data) {
                        swal("Good job!", "Test Case Added!", "success");
                        setTimeout(
                            function () {
                                location.reload();
                            }, 3000);

                        if (data.trim() == 'done') {

                        }
                    }
                });
            }

        });


        $(".del_lab_dpt").click(function () {

            // get the para from data-
            const host_fib = $(this).attr("data-id");
            $.ajax({
                url: "ajax/d_lab_dpt.php",
                method: "GET",
                data: {
                    host_fib: host_fib,
                },
                success: function (data) {
                    swal("Good job!", "This Lab Department Has Been Removed", "success");
                    setTimeout(
                        function () {
                            location.reload();
                        }, 3000);

                    if (data.trim() == 'done') {

                    }
                }
            });
        });


        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
</body>

</html>

<div class="modal inmodal" id="myModal223" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <p class="modal-title">Add Lab Test</p>
                <!--                <small class="font-bold">You can add and assign Lab to department.</small>-->
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label class="font-weight-bold">Test Title</label> <input type="text"
                                                                                                               placeholder="Test Title"
                                                                                                               class="form-control"
                                                                                                               id="testname">
                        </div>

                        <div class="form-group"><label class="font-weight-bold">Select Department</label>
                            <select class="form-control" id="dpt">
                                <?php
                                foreach ($lab_list_dpt as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->id;  ?>"><?=  $values->category_name;  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label class="font-weight-bold">Select Sample</label>
                            <select class="form-control" id="sample">
                                <?php
                                foreach ($lab_samples as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->kits;  ?>"><?=  $values->kits;  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label class="font-weight-bold">Select Container</label>
                            <select class="form-control" id="container">
                                <?php
                                foreach ($lab_container as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->kits;  ?>"><?=  $values->kits;  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group"><label class="font-weight-bold">Select Restrictions</label>
                            <select class="form-control" id="restri">
                                <?php
                                foreach ($lab_restrition as $key => $values){
                                    ?>
                                    <option style="text-transform: uppercase" value="<?=  $values->kits;  ?>"><?=  $values->kits;  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group"><label class="font-weight-bold">Amount </label> <input type="text"
                                                                                                          placeholder="Test Amount"
                                                                                                          class="form-control"
                                                                                                          id="amount">
                        </div>

                        <div class="form-group"><label class="font-weight-bold">Turn Around Time </label> <input type="text"
                                                                                                       placeholder="TAT"
                                                                                                       class="form-control"
                                                                                                       id="tat">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_lab_test">Add Test</button>
            </div>
        </div>
    </div>
</div>





<div class="modal inmodal" id="myModal22" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <p class="modal-title">Add Lab Department</p>
<!--                <small class="font-bold">You can add and assign Lab to department.</small>-->
            </div>
            <div class="modal-body">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <div class="form-group"><label class="font-weight-bold">Department Name</label> <input type="text"
                                                                                         placeholder="Department Name"
                                                                                         class="form-control"
                                                                                         id="department_name">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-rounded btn-outline" id="add_dpt">Add Department</button>
            </div>
        </div>
    </div>
</div>




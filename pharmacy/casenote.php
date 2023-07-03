<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
 $get_asset_id = ($add_user->get_request('aset'));
$patients_profile = $add_user->edit_patients($hos_key,$get_asset_id);
//var_dump($patients_profile);
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
                    <div class="ibox ">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager">
                                <!--            <a class="btn btn-block btn-primary compose-mail font-weight-bold btn-rounded" href="">Module-->
                                <!--                Settings</a>-->
                                <div class="space-25"></div>
                                <h5 class="font-weight-bold">Patient's Case Note</h5>
                                <ul class="folder-list m-b-md" style="padding: 0">
                                    <li><a href="lab_setup.php"> <i class="fa fa-circle-o text-success"></i>All </a></li>
                                    <li><a href="dpt_tests.php"> <i class="fa fa-circle-o"></i>Encounters</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle text-danger"></i>Vitals</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle text-danger"></i>Drug administration</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle-o text-danger"></i>Fluid Chart</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle-o text-danger"></i>Nursing Remark</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle text-danger"></i>Surgical note</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle text-danger"></i>Anesthetist chat</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle-o text-danger"></i>Operation note</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle text-danger"></i>Results</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle-o text-danger"></i>Immunizations</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle text-danger"></i>Bills</a></li>
                                    <li><a href="app_settings.php"> <i class="fa fa-circle text-danger"></i>Discharge summary</a></li>
                                </ul>
                                <h5>Extra data</h5>
                                <ul class="category-list" style="padding: 0">
                                    <li><a href="lab_setup_e.php"> <i class="fa fa-circle text-danger"></i>Medical Report</a>
                                    </li>
                                    <li><a href="lab_setup_e.php"> <i class="fa fa-circle text-primary"></i>Attachment</a>
                                    </li>

                                    <li><a href="lab_setup_e.php"> <i class="fa fa-circle text-primary"></i>Comments</a>
                                    </li>

                                </ul>
                                </ul>



                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 animated fadeInRight">
                    <div class="mail-box-header">

                        <h2>
                            <h3 class="font-weight-bold">Hospital  / Patient Case Note</h3>
                            <span class="text-danger">Patient Encounters</span><br>
                            <a href="edit_patients.php?aset=<?= base64_encode($get_asset_id);  ?>"><span class="text-primary">Update Profile</span></a>
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
                                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="rounded-circle circle-border m-b-md" alt="profile">
                                </div>
                                <div class="profile-info">
                                    <div class="">
                                        <div>
                                            <h2 class="no-margins" style="text-transform: capitalize">
                                               <?= $patients_profile->patient_name;  ?>
                                            </h2>
<!--                                            <h4>Founder of Groupeq</h4>-->
                                            <small>
                                                <?= $patients_profile->briefs;  ?>
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
                                            <span class="font-weight-bold">Blood Pressure</span> <strong class="text-danger"><?= $patients_profile->bp;  ?></strong>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">Heart Rate</span> <strong class="text-danger"><?= $patients_profile->heart_rate;  ?></strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold">Body Temp</span> <strong class="text-danger"><?= $patients_profile->body_temp;  ?></strong>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">Weight</span> <strong class="text-danger"><?= $patients_profile->height;  ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold">Admission Status</span> <strong class="text-danger">Open</strong>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">Sex</span> <strong class="text-danger text-capitalize"><?= $patients_profile->sex;  ?></strong>
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
                                        <h3>About <?= $patients_profile->patient_name;  ?></h3>

                                        <p class="small">
                                            <?= $patients_profile->briefs;  ?>
                                            <br>
                                            <br>
                                            <a href="add_encounters.php?aset=<?= $get_asset_id; ?>"><button class="btn btn-primary btn-sm">Medical Encounter Note</button></a>
                                        </p>

                                        <p class="small font-bold">
                                            <span><i class="fa fa-circle text-navy"></i> Online status</span>
                                        </p>

                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-7">

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
                                            <img alt="image" src="https://cdn-icons.flaticon.com/png/512/720/premium/720234.png?token=exp=1643495651~hmac=bfb4866c52cef96b694f7132e254b61e">
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

                                        </div>
                                    </div>
                                    <div class="social-footer">
                                        <div class="social-comment">
                                            <a href="" class="float-left">
                                                <img alt="image" src="https://cdn-icons.flaticon.com/png/512/720/premium/720234.png?token=exp=1643495651~hmac=bfb4866c52cef96b694f7132e254b61e">
                                            </a>
                                            <div class="media-body">
                                                <a href="profile_2.html#">
                                                    Andrew Williams
                                                </a>
                                                Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                                <br>
                                                 -
                                                <small class="text-muted">12.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="social-comment">
                                            <div class="media-body">
                                                <textarea class="form-control" placeholder="Write comment..."></textarea><button class="btn btn-white btn-xs"> <i class="fa fa-comments pull-right"></i> Comment</button>

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

<div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Modal title</h4>
                <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
            <div class="modal-body">
                <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.</p>
                <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




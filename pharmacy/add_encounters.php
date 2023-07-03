<?php
include "inc/site_controller.php";
$get_asset_id = base64_decode($add_user->get_request('aset'));
$aptients_edit= $add_user->edit_patients($hos_key,$get_asset_id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Encounter Profile | data</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link href="css/plugins/select2/select2-bootstrap4.min.css" rel="stylesheet">
    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">

    <style>
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
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h3 class="font-weight-bold">Medical Encounter Note</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Data</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Hospital Data</strong>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="setup_patients.php"><button class="btn btn-primary btn-rounded btn-outline font-weight-bold">Patients List</button></a>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
                <!--                    <button class="btn btn-success btn-rounded">New Hospitals</button>-->
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInDown">
            <div class="row">
                <div class="col-lg-10">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5 class="font-weight-bold"> Complaints</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>


                            </div>
                        </div>
                        <div class="ibox-content">


                            <div class="form-group">

                                <div class="col-lg-12">
                                    <div class="ibox ">

                                        <div class="ibox-content no-padding">

                                                <textarea class="summernote input-block-level" id="content" name="content" rows="18">


                                                     <h3 style="color: green">Presenting complaint</h3>
                                                ...

                                                     <h3 style="color: green">History of presenting complaint</h3>
                                               ...

                                            <h3 style="color: green">Past Medical and Surgical History</h3>
                                                ...


                                                      <h3 style="color: green">Gynecologic and Obstetric Hx</h3>
                                               ...


                                                     <h3 style="color: green">Drug and Allergy History</h3>
                                               ...


                                                     <h3 style="color: green">Family and social History</h3>
                                                ...
                                                     <h3 style="color: green">Review of system</h3>
                                               ...



                                                </textarea>

                                        </div>

                                    </div>
                                </div>
                            </div>



                            <br>
                            <br>
                        </div>
                    </div>


                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5 class="font-weight-bold"> Examination</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>


                            </div>
                        </div>
                        <div class="ibox-content">


                            <div class="form-group">

                                <div class="col-lg-12">
                                    <div class="ibox ">

                                        <div class="ibox-content no-padding">

                                                <textarea class="summernote input-block-level" id="content1" name="content" rows="18">


                                                     <h3 style="color: green">General examination</h3>
                                               ...

                                                     <h3 style="color: green">CVS examination</h3>
                                               ...

                                            <h3 style="color: green">Respiratory examination</h3>
                                               ...
                                                      <h3 style="color: green">Abdominal examination</h3>
                                                ...

                                                     <h3 style="color: green">CNS examination</h3>
                                                ...

                                                     <h3 style="color: green">Obstetric examination</h3>
                                                ...
                                                     <h3 style="color: green">Gynecologic examination</h3>
                                                ...
                                                    <h3 style="color: green">Others</h3>
                                                ...



                                                </textarea>

                                        </div>

                                    </div>
                                </div>
                            </div>





                            <input type="hidden" value="<?= $get_asset_id;  ?>" id="pid">


<!--                            <div>-->
<!--                                <button class="btn btn-primary btn-rounded btn-outline float-right m-t-n-xs"-->
<!--                                        type="submit" id="add_cc_users"><strong>Update-->
<!--                                        Patient Records</strong></button>-->
<!---->
<!--                            </div>-->


                            <br>
                            <br>
                        </div>
                    </div>


                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5 class="font-weight-bold"> Diagnosis</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>


                            </div>
                        </div>
                        <div class="ibox-content">


                            <div class="form-group">

                                <div class="col-lg-12">
                                    <div class="ibox ">

                                        <div class="ibox-content no-padding">

                                            <div class="col-md-4">
<!--                                                <p>-->
<!--                                                    Select2 also supports multi-value select boxes. The select below is declared with the multiple attribute.-->
<!--                                                </p>-->
                                                <select placeholder="Choose options" class="select2_demo_2 form-control" multiple="multiple">
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                </select>

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
        <?php
        include "inc/footer.php";
        ?>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="js/plugins/dataTables/datatables.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/js_hospital.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- SUMMERNOTE -->
<script src="js/plugins/summernote/summernote-bs4.js"></script>

<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>

<script>
    $(document).ready(function(){

        $('.summernote').summernote();
       // $('.summernote1').summernote();

    });
</script>

<!-- Page-Level Scripts -->
<script>

    // Upgrade button class name
    $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

    $(document).ready(function () {

        $("#add_cc_users").click(function () {
            // get the para from data-
            const ee = $('#content').val();
            const ee1 = $('#content1').val();
            const ss = $('.select2_demo_2').val();

            alert(ss);








//            $.ajax({
//                url: "ajax/add_patient.php",
//                method: "GET",
//                data: {
//                    fullname: fullname, age: age, sex: sex, occupation: occupation, rg_date: rg_date, marital_status: marital_status,address:address,tribe:tribe,religion:religion,next_of_kin:next_of_kin,email:email,phone_number:phone_number
//                },
//                success: function (data) {
//                    swal("Good job!", "This Account Has Been Added", "success");
//                    setTimeout(
//                        function () {
//                            location.reload();
//                        }, 3000);
//
//                    if (data.trim() == 'done') {
//
//                    }
//                }
//            });


        });

    });

</script>
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- Initialize Quill editor -->
<script>
    $(".select2_demo_2").select2({
        theme: 'bootstrap4',
    });
</script>

</body>

</html>


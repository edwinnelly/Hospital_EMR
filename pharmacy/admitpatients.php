<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
    $get_asset_id = base64_decode($add_user->get_request('aset'));
   if($get_asset_id==0 || $get_asset_id=''){
       echo'<script>window.location.href="host_patients"</script>';
   }else{
       $get_asset_id = base64_decode($add_user->get_request('aset'));
   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Settings | Controls</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');
    </style>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
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
                <div class="col-lg-8 animated fadeInRight">
                    <div class="mail-box-header">


                        <div class="mail-tools tooltip-demo m-t-md">

                            <h3 class="text-primary" style="text-transform: capitalize;margin-left: 20px;">Admit Patient</h3>
                            <h2>
                            </h2>
                        </div>
                    </div>
                    <div class="mail-box">
                        <div class="ibox-content table-responsive">
                            <h4 class="font-weight-bold">

                                <div class="form-group"><label>Choose Specialist</label>
                                    <select class="form-control" id="sp_id">
                                        <option>Choose Specialist</option>
                                        <?php
                                        $doctors_list = $add_user->hospital_list_special($hos_key);
                                        foreach ($doctors_list as $key=> $users) {
                                            ?>
                                            <option value="<?= $users->id; ?>"><?= $users->specializations; ?>  (<?= $users->department_name; ?>)</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="form-group"><label>Choose Ward</label>
                                    <select class="form-control" id="ward">
                                        <option>Choose Ward</option>
                                        <?php
                                        $ward_list = $add_user->hospital_list_wards($hos_key);
                                        foreach ($ward_list as $key=> $users_ward) {
                                            ?>
                                            <option value="<?= $users_ward->id; ?>"> <?= $users_ward->ward; ?>)</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="form-group"><label>Choose Bed</label>
                                    <select class="form-control" id="bed">
                                        <option>Choose Bed</option>
                                        <?php
                                        $bed_list = $add_user->bed_list($hos_key);
                                        foreach ($bed_list as $key=> $users_bed) {
                                            ?>
                                            <option value="<?= $users_bed->id; ?>"> <?= $users_bed->category_name; ?>)</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="form-group"><label>Choose Doctor</label>
                                    <select class="form-control" id="doc_id">
                                        <option>Choose Doctor</option>
                                        <?php
                                        $doctors_list = $add_user->doctors_list($hos_key);
                                        foreach ($doctors_list as $key=> $users) {
                                            ?>
                                            <option value="<?= $users->id; ?>"><?= $users->fullname; ?>  (<?= $users->category_name; ?>)</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>



                                <div class="form-group"><label>Choose Payment Type</label>
                                    <select class="form-control" id="payment">
                                        <option>Choose Payment Type</option>
                                        <option>Hmo</option>
                                        <option>Private</option>
                                    </select>
                                </div>


                                <div class="form-group"><label>Choose Hmo</label>
                                    <select class="form-control" id="hmo">
                                        <option>Choose Hmo</option>
                                        <option value="0">None</option>
                                        <?php
                                        $hmo_list = $add_user->all_hmo($hos_key);
                                        foreach ($hmo_list as $key=> $hmos) {
                                            ?>
                                            <option value="<?= $hmos->id; ?>"><?= $hmos->hmo; ?>  (<?= $hmos->hmo; ?>)</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="form-group"><label>Admitted Date</label>
                                    <input type="date" id="dated" class="form-control">
                                </div>



                                <input type="hidden" value="<?php echo $get_asset_id;  ?>" id="pid">
                                <input type="submit" class="font-weight-bold btn btn-primary btn-outline btn-rounded pull-right" value="Admit Patient" id="ps">

                            </h4>


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

    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: []
        });
    });

</script>

<script>
    $(document).ready(function () {

        $("#ps").click(function () {
            const doc_id = $("#doc_id").val();
            const sp_id = $("#sp_id").val();
            const ward = $("#ward").val();
            const bed = $("#bed").val();
            const payment = $("#payment").val();
            const hmo = $("#hmo").val();
            const dated = $("#dated").val();
            const pid = $("#pid").val();

            if (doc_id ===0) {
                swal("Not allowed !", "Pid Name Needed!", "error");
            } else {
                //call ajax

                $.ajax({
                    url: "ajax/admit_patients.php",
                    method: "GET",
                    data: {
                        doc_id: doc_id, pid: pid,sp_id:sp_id,ward:ward,bed:bed,payment:payment,hmo:hmo,dated:dated
                    },
                    success: function (data) {

                        console.log(data);
                        swal("Good job!", "Patient has been admitted!", "success");
                        //redirect
                        setTimeout(
                            function () {
                                location.href='admitpatients.php';
                            }, 3000);
                    }
                });
            }
        });
    });
</script>
</body>

</html>




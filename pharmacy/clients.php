<?php
include_once "inc/session.php";
include_once "inc/controller.php";
include_once "inc/user_data.php";
include_once "inc/site_controller.php";
$add_user = new controller;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users Accounts | Clients</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');
    </style>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            font-size: 13px;
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
                    <h3 class="font-weight-bold">Hospital Users</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>App Views</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Live Chat</strong>
                        </li>
                    </ol>
                </div>
            </div>

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <h2> <strong>Live Chat</strong></h2>


                            <div class="clients-list">
                            <span class="float-right small text-muted"></span>

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <?php
                                                $lab_list_dpt= $add_user->staffs_recoresd($hos_key);
                                                foreach ($lab_list_dpt as $key=> $dd) {
                                                    ?>
                                                    <tr>
                                                        <td class="message-avatar"><img src="../admin/<?= $dd->photo; ?>" style="width: 50px;">
                                                        </td>
                                                        <td><a href="" class="client-link"><?= $dd->fullname; ?></a></td>
                                                        <td><?= $dd->category_name; ?></td>
                                                        <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                                        <td> <?= $dd->phone; ?></td>
                                                        <td class="client-status"><a href="chats?git=<?= base64_encode($dd->id); ?>"> <?= ($dd->id); ?><img src="chat.png" height="30"></a>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
                                                ?>


                                                </tbody>
                                            </table>
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
            include_once 'inc/footer.php';
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
    <script src="js/plugins/pace/pace.min.js"></script>

<script>
    $(document).ready(function(){

        $(document.body).on("click",".client-link",function(e){
            e.preventDefault()
            $(".selected .tab-pane").removeClass('active');
            $($(this).attr('href')).addClass("active");
        });
    });
</script>

</body>
</html>

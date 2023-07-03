<?php
include_once "inc/user_data.php";
$add_user = new controller;
@$recicever_id = base64_decode($add_user->get_request('git'));
$c_nifo = $add_user->get_user_info($recicever_id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital | Chat view</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');
    </style>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            font-size: 14px;
        }
    </style>
</head>

<body id="">

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
        <!--        <div class="row wrapper border-bottom white-bg page-heading">-->
        <!--            <div class="col-lg-10">-->
        <!--                <h2>Chat view</h2>-->
        <!--                <ol class="breadcrumb">-->
        <!--                    <li class="breadcrumb-item">-->
        <!--                        <a href="index.html">Home</a>-->
        <!--                    </li>-->
        <!--                    <li class="breadcrumb-item">-->
        <!--                        <a>Miscellaneous</a>-->
        <!--                    </li>-->
        <!--                    <li class="breadcrumb-item active">-->
        <!--                        <strong>Chat view</strong>-->
        <!--                    </li>-->
        <!--                </ol>-->
        <!--            </div>-->
        <!--            <div class="col-lg-2">-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->


        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox chat-view">

                        <div class="ibox-title">
                            <small class="float-right text-muted"></small>
                            <img class="message-avatar"
                                 src="../admin/<?= $c_nifo->photo;  ?>"
                                 alt="" style="border: none;"> <?= $c_nifo->fullname;  ?>
                        </div>

                        <div class="ibox-content">

                            <div class="row">

                                <div class="col-md-12 ">
                                    <div class="chat-discussion" id="div1">
                                        <img src="https://i.pinimg.com/originals/65/ba/48/65ba488626025cff82f091336fbf94bb.gif" height="100">

                                    </div>

                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="chat-message-form">

                                        <div class="form-group">

                                            <textarea class="form-control message-input" id="message"
                                                      placeholder="Enter message text"></textarea>
                                            <button id="add_mess" class="btn btn-primary pull-right">Send Message
                                            </button>
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
        include_once "inc/footer.php";
        ?>

    </div>


</div>

<input type="hidden" value="<?= $recicever_id; ?>" id="recicever_id">

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>

<script src="js/plugins/pace/pace.min.js"></script>

<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/js_hospital.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>


</script>

<script>
    $(document).ready(function () {

       // $("#div1").load("messages/show_messages.php?bat=<?= $recicever_id; ?>");

       // $("#div1").animate({scrollTop: $('#div1').prop("scrollHeight")}, 1000);



        function sendRequest() {
            let cc = $("#recicever_id").val();
            $.ajax({
                url: "messages/show_messages.php",
                method: "GET",
                data: {
                    cc: cc
                },
                success:function (result) {
                        $('#div1').html(result); //insert text of test.php into your div
                        setTimeout(function () {
                            sendRequest(); //this will send request again and again;
                            // alert("kdjf");
                            $("#div1").animate({scrollTop: $('#div1').prop("scrollHeight")}, 1000);
                        }, 5000);
                    }
            });
        }

        sendRequest(); //call function

        $("#add_mess").click(function () {
            // get the para from data-
            const recicever_id = $("#recicever_id").val();
            const message = $("#message").val();

            if (message == "") {
                // alert("All form must be filled out");
                swal("Try Again!", "Message Box Can not be empty", "error");
                return false;
            } else {
                $.ajax({
                    url: "messages/send_message.php",
                    method: "GET",
                    data: {
                        message: message, recicever_id: recicever_id
                    },
                    success: function (data) {
                        const message = $("#message").val('');
                        sendRequest(); //call function
                       // $("#div1").load("messages/show_messages.php?bat=<?= $recicever_id; ?>");
                        $("#div1").animate({scrollTop: $('#div1').prop("scrollHeight")}, 1000);
                        //swal("Good job!", "This Account Has Been Added", "success");
                    }
                });
            }
        });


    });


</script>
</body>

</html>
